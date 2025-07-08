import os
import time
import tweepy
import pandas as pd
from dotenv import load_dotenv
from preprocessing import TweetPreprocessor

load_dotenv()
bearer_token = os.getenv('TWITTER_BEARER_TOKEN')

class TweetGenerator():
  def __init__(self, username, num_sample=10):
    self.username = username
    self.num_sample = num_sample
    
  def crawl(self):
    # Initialize client
    client = tweepy.Client(bearer_token=bearer_token)

    # Get the user's ID by username
    user = client.get_user(username=self.username)
    user_id = user.data.id
    print(f"USERNAME: {self.username}, USER ID: {user_id}")

    tweets = []
    try:
      # Get the user's recent tweets
      response = client.get_users_tweets(id=user_id, 
                                         tweet_fields=["created_at"], 
                                         max_results=self.num_sample)
      # Print tweet texts
      print("Recent tweets:")

      for tweet in response.data:
        print(tweet.created_at, tweet.text)
        
        tweets.append({
          "created_at": tweet.created_at,
          "tweet": tweet.text
        })
        
        time.sleep(0.2)  # Delay 1 second between requests
  
    except tweepy.TooManyRequests as e:
      print("Rate limit hit. Wait for 15 minutes!")
         
    # Creation of Dataframe
    # tweets = [
    #   {
    #     "created_at": "12-08-2025",
    #     "tweet": "Hi namaku Farrel!"
    #   },
    #   {
    #     "created_at": "13-08-2025",
    #     "tweet": "Aku berusia 25 tahun."
    #   },
    #   {
    #     "created_at": "14-08-2025",
    #     "tweet": "Carmen H2H lucu bangeet!"
    #   },
    #   {
    #     "created_at": "15-08-2025",
    #     "tweet": "F1 movie is the best movie I've seen so far this year."
    #   },
    #   {
    #     "created_at": "16-08-2025",
    #     "tweet": "The soundtrack omg so catchyy!"
    #   },
    # ]
    
    print("Total tweets:", len(tweets))
    if len(tweets) == 0:
      return None
    
    df = pd.DataFrame.from_dict(tweets)
    return df

  def preprocess(self, df):
    # Call preprocessor module
    pre = TweetPreprocessor()
    
    # Create new column called preprocessed
    df['preprocessed_tweet'] = df['tweet'].apply(pre.preprocess_tweet)
    
    # Generate new df containing preprocessed tweets
    result_tweet = " ".join(df['preprocessed_tweet'])
    result_df = pd.DataFrame({
      'username': [self.username],
      'tweet': [result_tweet]
    })
    
    return result_df