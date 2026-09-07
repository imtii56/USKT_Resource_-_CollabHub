# USKT Resource & CollabHub

An academic collaboration platform built for students and faculty to share resources, course details, and collaborate efficiently.

## 🚀 Features
- **User Authentication:** Secure Signup and Login system using PHP and MySQL.
- **Password Security:** Passwords stored using `password_hash()` and verified via `password_verify()`.
- **Session Management:** Protected pages with session validation to prevent unauthorized access.
- **Responsive UI:** Clean layouts designed with CSS3 and modern flex structures.

## 🛠️ Tech Stack
- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Environment:** XAMPP / Apache Server

## 📁 Database Setup
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).
2. Create a new database named `web_project`.
3. Import the `web_project.sql` and `studyhub_courses.sql` files included in this repository.

## 💻 How to Run Locally
1. Download or clone this repository into your XAMPP `htdocs` directory:
   ```bash
   git clone [https://github.com/your-username/USKT_Resource_&_CollabHub.git](https://github.com/your-username/USKT_Resource_&_CollabHub.git)
   Start Apache and MySQL in XAMPP Control Panel.

2.Open your browser and navigate to:
http://localhost/USKT_Resource_&_CollabHub/signup.php