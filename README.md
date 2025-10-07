Student Management System

A web-based application developed using Laravel, designed to efficiently manage student records, including functionalities for adding, updating, and deleting student information.

📌 Features

Student Management: Add, update, and delete student records.

Teacher Management: Manage teacher details and assignments.

Course Management: Organize and assign courses to students.

Batch Management: Create and manage student batches.

Enrollment Tracking: Monitor student enrollments in various courses.

Payment Management: Track and manage student payments.

🛠️ Technologies Used

Backend: Laravel
 (PHP Framework)

Frontend: Bootstrap 5
 for responsive design

Icons: Font Awesome
 for UI icons

📁 Project Structure
STUDENT-MANAGEMENT/
│
├── app/            # Application logic
├── bootstrap/      # Application bootstrap files
├── config/         # Configuration files
├── database/       # Database migrations and seeds
├── public/         # Publicly accessible files (assets, index.php)
├── resources/      # Views, assets, and language files
├── routes/         # Route definitions
├── storage/        # Logs, compiled views, file uploads
└── tests/          # Test cases

🚀 Installation
Prerequisites

Ensure you have the following installed:

PHP
 (version 8.0 or higher)

Composer
 (PHP dependency manager)

Node.js
 and npm
 (for frontend dependencies)

Steps

Clone the Repository:

git clone https://github.com/RitikDevrani/STUDENT-MANAGEMENT.git
cd STUDENT-MANAGEMENT


Install PHP Dependencies:

composer install


Set Up Environment File:

cp .env.example .env


Update the .env file with your database credentials.

Generate Application Key:

php artisan key:generate


Run Migrations:

php artisan migrate


Install Frontend Dependencies:

npm install


Build Assets:

npm run dev


Serve the Application:

php artisan serve


The application will be accessible at http://localhost:8000.

🎨 UI/UX Design

The application features a user-friendly interface with:

A sidebar navigation menu for easy access to different sections.

Responsive design ensuring compatibility across devices.

Modern UI elements powered by Bootstrap 5 and Font Awesome icons.
