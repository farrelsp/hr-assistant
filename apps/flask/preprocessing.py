import os
import re
import csv
import nltk
import enchant
import preprocessor
from collections import defaultdict
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory

class TweetPreprocessor():
  def __init__(self):
    self.en_dict = enchant.Dict("en_US")
    self.id_words = []
    with open('./../experiments/dictionary/wordlist-id.txt', 'r') as file:
      for word in file:
        self.id_words.append(word)
            
  def casefolding(self, review):
    review = review.lower()
    return review
    
  def filtering(self, review):
    review = re.sub(r'@[^\s]+', '', review)  # @username
    review = re.sub(r'#([^\s]+)', '', review)  # hashtag
    review = re.sub(r'https:[^\s]+', '', review)  # URL links
    review = re.sub(r"[.,:;+!\-_<^/=?\"'\(\)\d\*]", " ", review)  # symbol, char
    review = re.sub(r'[^\x00-\x7f]+', '', review)  # non ASCII chars
    review = re.sub(r'\s+', ' ', review)  # duplicate whitespace
    return preprocessor.clean(review)
    
  def stemming(self, review):
    factory = StemmerFactory()
    stemmer = factory.create_stemmer()
    review = stemmer.stem(review)
    return review
  
  def stop_word_removing(self, review):
    factory = StopWordRemoverFactory()
    stopword = factory.create_stop_word_remover()
    review = stopword.remove(review)
    return review
    
  def slang_word_converting(self, review):
    slangwords = {}
    with open('./../experiments/dictionary/slangword-id.txt') as file:
      for line in file:
        words = line.split('=')
        slangwords[words[0]] = words[1].strip()
    
    result = []            
    for word in review.split():
      if word in slangwords:
        word = slangwords[word]
      result.append(word)
    result = ' '.join(result)

    return result
    
  def character_repeating(self, review):
    pattern = re.compile(r"(.)\1{1,}", re.DOTALL)
    temp = ''
    for word in review.split():
      if word != '':
        if self.en_dict.check(word):
          temp += word + ' '
        elif word in self.id_words:
          temp += word + ' '
        else:
          temp += pattern.sub(r"\1", word) + ' '
    
    return temp
  
  def preprocess_tweet(self, tweet):
    tweet = self.filtering(str(tweet))
    tweet = self.casefolding(str(tweet))
    tweet = self.character_repeating(str(tweet))
    tweet = self.stemming(str(tweet))
    tweet = self.stop_word_removing(str(tweet))
    tweet = self.slang_word_converting(str(tweet))
    return tweet