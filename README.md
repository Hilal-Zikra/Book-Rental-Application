# Books Renting Web Application

Welcome to the Books Renting Web Application. This application allows users to rent books, view their rented books, and return them. Below you will find instructions on how to install and use the application.

## Installation

Follow these steps to install the application:

1. **Clone the Repository**

   Start by cloning the repository to your local machine.

   ```bash
   git clone <repository-url>

    Install PHP Dependencies

    Navigate to the project directory and install PHP dependencies using Composer.

    bash

composer install

Install JavaScript Dependencies

Install the necessary JavaScript packages using npm.

bash

npm install

Create the Database

Open phpMyAdmin and create a database named books_rental.

Migrate the Database

Run the following command to create the necessary tables in the database.

bash

php artisan migrate

Seed the Database

Seed the database with initial data, including books.

bash

    php artisan db:seed

Now that your installation is complete, you're ready to use the application.
Usage

    Start the Application

    Run the following commands to start the application:

    bash

    php artisan serve
    npm run dev

    Now, open your application in a browser at http://127.0.0.1:8000.

    Sign Up or Sign In

    You will be redirected to the homepage where you can sign up for a new account or sign in if you already have one.

    Renting Books

    Once signed in, you'll be directed to the books page, where you can see all the books and their details. Click on the "Rent" button to rent a book. Note that you cannot rent more than 3 books at a time.

    Viewing Rented Books

    Click on the "Profile" button to see all the books you have rented.

    Returning Books

    In the profile page, click on the "Return Book" button to return a book.

    Logout

    You can log out of the application by clicking the "Logout" button.

    Rent Duration and Notifications

    A user is only allowed to rent a book for 3 days. Use the /check-rent route to see which books have exceeded the rent duration. Emails will be sent to users who have overdue books.

Contributing

Feel free to contribute to the Books Renting Web Application. Please fork the repository and submit pull requests for any enhancements.
License

This project is licensed under the MIT License - see the LICENSE.md file for details.