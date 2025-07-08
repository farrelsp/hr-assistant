# 🧪 Experiments – Personality Prediction

The `experiments/` folder contains the code, notebooks, and model training pipeline used in the research titled:

_“Big Five Personality Prediction Based on Indonesian Tweets and Personality Test”_  
📄 [IEEE Publication](https://ieeexplore.ieee.org/abstract/document/10346812)

---

## 📚 Research Overview

This study presents a hybrid approach to predicting the Big Five personality traits (OCEAN) by combining:

- Tweet-based analysis using machine learning models
- Traditional BFI (Big Five Inventory) personality tests

The goal is to improve personality assessment accuracy, particularly in the context of human resource management in Indonesia.

---

## 🧪 Methodology Summary

**1. Data Preprocessing**

- Removing usernames, hashtags, URLs, and duplicate whitespace
- Lowercasing, stemming, and stop word removal
- Normalizing slang words (specific to Indonesian)

**2. Feature Extraction**

- Tweets transformed using TF-IDF vectorization

**3. Model Training**

- Trained on a dataset of ~400 annotated Indonesian Twitter users
- Algorithms used:
  - 🟢 XGBoost _(best performer)_
  - 🟡 Support Vector Machine (SVM)
  - 🔴 Random Forest

**4. Evaluation Metrics**

**Model Performance – Based on Tweets Only**

The following results reflect each model's performance when predicting personality traits solely from tweet data:

- XGBoost: Accuracy 100%, F1-score 100%
- Random Forest: Accuracy 89%, F1-score 84%
- SVM: Accuracy 75%, F1-score 68%

**Combined with BFI Test Results (Using ANOVA-Based Weighting)**

To enhance prediction accuracy, we combined the tweet-based model predictions with BFI test scores. Using ANOVA, we computed correlation weights between:

- BFI test scores and ground-truth personality labels
- Model predictions and ground-truth labels

These correlations were used to automatically determine each component's weight in the final prediction.

After combining the sources, all models achieved perfect performance:

- XGBoost: Accuracy 100%, F1-score 100%
- Random Forest: Accuracy 100%, F1-score 100%
- SVM: Accuracy 100%, F1-score 100%

## 🔍 Dataset & Annotation

Tweets were collected between 2020–2023 and annotated using:

- Big Five Inventory (BFI) test results
- Expert input from HR and psychology professionals

This dual-annotation approach helps reduce bias from self-reported tests.

---

## 🔮 Conclusion

Combining psychometric assessments with tweet-based predictions enhances the speed and accuracy of personality screening. This method is especially effective in recruitment and talent evaluation workflows.
