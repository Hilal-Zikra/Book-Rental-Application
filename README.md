# 📚 Books Renting Web Application

Welcome to the Books Renting Web Application! This app allows users to easily rent books, manage their rentals, and explore a vast library of books. 📖✨

## Installation 🛠️

Follow these steps to get the application up and running on your local machine:

### 1. Clone the Repository 📥

Clone the repo to your local machine using:

```bash
git clone <repository-url>

2. Install PHP Dependencies 💻

Navigate to the project directory and install PHP dependencies:

bash

composer install

3. Install JavaScript Dependencies 🌐

Install the necessary JavaScript packages:

bash

npm install

4. Create the Database 🗄️

Create a database named books_rental in phpMyAdmin.
5. Migrate the Database 🛤️

Run migrations to set up your database schema:

bash

php artisan migrate

6. Seed the Database 🌱

Seed the database with initial data, including a selection of books:

bash

php artisan db:seed

Usage 🚀
1. Start the Application 🎬

Launch the application with the following commands:

bash

php artisan serve
npm run dev

Open your application in a browser at http://127.0.0.1:8000.
2. Sign Up or Sign In 🧑‍💻

Upon visiting the homepage, sign up for a new account or sign in.
3. Renting Books 📚

Browse the books page, rent up to 3 books, and manage your rentals.
4. Viewing Rented Books 🔍

Check your profile to see your current rentals.
5. Returning Books 🔄

Easily return books from your profile.
6. Logout 🔑

Log out with a simple click.
7. Rent Duration and Notifications ⏰

Be mindful of the 3-day rent limit. Overdue notifications are automated.
Contributing 🤝

Contributions are welcome! Please feel free to contribute by forking the repository and submitting pull requests.
License 📄

This project is licensed under the MIT License - see the LICENSE file for details.
