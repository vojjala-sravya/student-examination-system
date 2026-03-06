Online Examination System

Project Overview

The Online Examination System is a web-based application developed using PHP, MySQL, HTML, and CSS.
It allows users to take an online test, submit answers, and automatically receive their score.
All exam results are stored in a database for record keeping.

This project demonstrates basic concepts of:

- Web development
- Database connectivity
- Server-side processing
- Simple exam evaluation logic

---

Features

- Display multiple-choice questions
- Submit answers through a web form
- Automatic score calculation
- Store exam results in a database
- Prevent multiple attempts by the same user
- Show exam score and percentage after submission

---

Technologies Used

- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Server Environment: XAMPP (Apache + MySQL)

---

Project Structure

online_exam/
│
├── index.php        # Exam page displaying questions
├── submit.php       # Evaluates answers and stores results
├── db.php           # Database connection file
├── style.css        # UI styling
└── README.md        # Project documentation

---

Database Setup

1. Open phpMyAdmin
2. Create a new database:

online_exam

3. Create tables such as:

Questions Table

Stores exam questions and options.

Results Table

Stores user scores and exam attempts.

Users Table

Stores user information (optional for login).

---

How to Run the Project

1. Install XAMPP.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Place the project folder inside:

xampp/htdocs/

Example:

xampp/htdocs/online_exam

4. Open a browser and go to:

http://localhost/online_exam/

5. Open phpMyAdmin to manage the database:

http://localhost/phpmyadmin

---

How the System Works

1. The user opens the exam page.
2. Questions are fetched from the database.
3. The user selects answers and submits the form.
4. PHP compares submitted answers with correct options.
5. The score is calculated.
6. The result is stored in the database.
7. The score and percentage are displayed to the user.

---

Possible Improvements

Future improvements can include:

- User login and authentication
- Admin panel to add/edit questions
- Exam timer
- Randomized questions
- Detailed result analysis
