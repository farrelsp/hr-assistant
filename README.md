# 🧠 HR Assistant – Personality Screening App

This project is a full-stack system designed to assist Human Resource (HR) teams during the candidate screening process, with a focus on personality evaluation. The system combines traditional psychometric testing with modern machine learning-based personality prediction using candidates' Twitter data.

---

## 📌 Features

- Candidate registration and CV upload
- BFI (Big Five Inventory) personality questionnaire
- Twitter-based personality prediction using ML models (XGBoost, SVM, Random Forest)
- Admin dashboard for managing candidates and test results
- Combined scoring logic: integrates BFI results and ML model probabilities
- Auto-summarizer: summarizes candidate's resume using the OpenAI GPT model, generating a one-paragraph summary to help HR quickly review the profile
- Built with **Laravel** (web interface) and **Flask** (ML API)

---

## 🗂 Project Structure

```
root/
│
├── apps/ # Main application code
│ ├── laravel/ # Web apps (frontend + backend)
│ └── flask/ # REST API for personality prediction (ML models)
│
├── experiments/ # Training ML models
│
├── assets/ # App demo media
│ ├── screenshots/ # UI screenshots
```

---

## 🧪 Personality Prediction

The app uses a hybrid approach to infer personality traits:

- **BFI Test** – A traditional questionnaire to assess the Big Five traits:  
  _Openness, Conscientiousness, Extraversion, Agreeableness, and Neuroticism_

- **Tweet Analysis** – The candidate's recent tweets are analyzed using pre-trained ML models:

  - XGBoost
  - Support Vector Machine (SVM)
  - Random Forest (RF)

- **Final Inference** – The BFI test scores and ML model prediction probabilities are combined to determine the final personality traits.

---

## ⚙️ Tech Stack

| Component    | Technology          |
| ------------ | ------------------- |
| Web Frontend | Laravel Blade (PHP) |
| Backend API  | Flask (Python)      |
| Database     | MongoDB             |

---

## 📸 Screenshots & Demo

You can find UI screenshots and a demo video in the `assets/` folder.

---

## 🚀 Getting Started

Follow these steps to set up and run the project locally.

---

### 1. Clone the Repository

```bash
git clone https://github.com/farrelsp/hr-assistant.git
cd hr-assistant
```

### 2. Set Up Python Environment (Flask + ML API)

Navigate to the apps/flask directory and set up your Python environment:

```bash
cd apps/flask
python -m venv venv
source venv/bin/activate  # or use `venv\Scripts\activate` on Windows
pip install -r requirements.txt
```

Then, configure your API keys by creating a .env file inside the apps/flask directory with the following content:

```
TWITTER_API_KEY=""
TWITTER_API_KEY_SECRET=""
TWITTER_BEARER_TOKEN=""
OPENAI_API_KEY=""
```

Start the Flask server (default runs at http://localhost:5000):

```bash
python app.py
```

### 3. Set Up Laravel Web App

Open a new terminal and go to the Laravel directory:

```bash
cd ../../laravel
```

Install PHP dependencies via Composer and npm:

```bash
composer install
npm install
```

Copy the example environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Laravel Environment

Edit .env to configure:

- MongoDB connection (host, port, database name, authentication if needed)
- Flask API URL (used when calling ML endpoints)

Example .env snippet:

```ini
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Laravel Migrations

Create necessary collections/tables by running:

```bash
php artisan migrate
```

### 6. Serve the Laravel App

You can now start the Laravel development server:

```bash
php artisan serve
```

The app should now be accessible at: http://localhost:8000

### 7. (Optional) Seed Admin User

To create an admin account manually:

1. Insert a user document into the `users` collection with the `role` set to `admin`:

   ```json
   {
     "name": "Farrel",
     "email": "admin@example.com",
     "password": "<hashed_password>",
     "role": "admin"
   }
   ```

   > 🔐 You can generate a hashed password using Laravel Tinker (bcrypt('yourpassword')) or any online bcrypt generator.

2. Add a corresponding `employee` document to the `employees` collection to avoid login errors:

   ```json
   {
   "first_name": "Farrel",
   "last_name": "Satya",
   "gender": "M",
   "address": "Jakarta",
   "date_of_birth": "1990-01-01",
   "no_hp": "081234567890",
   "position: "Human Resource"
   }
   ```
