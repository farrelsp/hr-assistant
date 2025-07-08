import os
import json
import joblib
import pandas as pd
from openai import OpenAI
from dotenv import load_dotenv
from tweets import TweetGenerator
from flask import Flask, request, jsonify, abort

app = Flask(__name__)

load_dotenv()
OPENAI_API_KEY = os.getenv('OPENAI_API_KEY')

d = {
  0:'Neuroticism',
  1:'Agreeableness',
  2:'Extraversion',
  3:'Openness',
  4:'Conscientiousness'
}

TWEETS_SAMPLE = 20
WEIGHT_MODEL = 0.6
WEIGHT_TEST = 0.4

# Load the model
model_path = './../experiments/models/xgb.sav'
model = joblib.load(model_path)
  
@app.route('/')
def home():
  return "Flask API is running!"
  
@app.route('/predict-tweets', methods=['GET'])
def predict_tweets():
  data = request.get_json()
  username = data['username'] 
  test_result = data['test_result'].split(",")
  test_result = [float(test) for test in test_result]
  
  tweet_gen = TweetGenerator(username=username, num_sample=TWEETS_SAMPLE)

  # Crawl the tweets
  print("Crawling...")
  df = tweet_gen.crawl()
  print(df)
  if df is None:
    abort(400, description="Tweets not found.")
  if df.empty:
    abort(400, description="Tweets not found.")

  # Preprocess the tweets
  print("Preprocessing...")
  result_df = tweet_gen.preprocess(df)

  # Predict
  print("Inferencing...")
  X = result_df['tweet']
  y_pred_proba = model.predict_proba(X)
  reshape_df = pd.DataFrame(
                list(zip([username] * 5, [0, 1, 2, 3, 4], y_pred_proba[0])),
                columns =['username', 'class', 'proba_tweet']
              )

  # Assume test_result is a list
  # Ex: [3.75, 2.22, 3.56, 5.00, 6.0]
  print("Combine model probs with test results...")
  reshape_df['test_result'] = test_result
  reshape_df['proba_tweet'] = reshape_df['proba_tweet'] * 10 # Normalization
  reshape_df['inference'] = (reshape_df['proba_tweet'] * WEIGHT_MODEL) \
  + (reshape_df['test_result'] * WEIGHT_TEST)

  # Get the index represent max val of inference
  y = reshape_df['inference'].argmax()
  label_row = reshape_df.iloc[y]
  
  result = {
    'label': d[label_row['class']],
    'soft_class': {
    d[0]: str(reshape_df.iloc[0]['inference']),
    d[1]: str(reshape_df.iloc[1]['inference']),
    d[2]: str(reshape_df.iloc[2]['inference']),
    d[3]: str(reshape_df.iloc[3]['inference']),
    d[4]: str(reshape_df.iloc[4]['inference'])
    }
  }
  return result

@app.route('/summ', methods=['GET'])
def summarize():
  data = request.get_json()
  resume_text = data['text']
  
  prompt = f"""
Summarize the following resume into a concise, professional, and informative paragraph that highlights the candidate's key skills, years of experience, educational background, notable achievements, and relevant technologies or industries.

Focus on what would matter most to a recruiter or hiring manager. Use neutral, objective language.

Resume:
{resume_text}
""" 

  client = OpenAI(api_key=OPENAI_API_KEY)
  response = client.responses.create(
    model="gpt-4.1",
    input=[
      {"role": "system", "content": "You are an HR assistant helping recruiters quickly understand a candidate's resume."},
      {"role": "user", "content": prompt}
    ],
    max_output_tokens=200
  )

  return {'summary': response.output_text} 
  
if __name__ == '__main__':
  app.run(debug=True)