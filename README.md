🚀 Welcome to the PHP User Authentication System!
This project is a modern, secure, and lightweight solution for user authentication, built with a sleek and developer-friendly approach. 
Powered by a robust tech stack, it ensures reliable performance and seamless integration into web applications.
Ready to dive in? Let’s get started! 🎉

🌟 Tech Stack
Our project leverages trusted technologies to deliver a secure and user-friendly authentication system. Here’s the breakdown:



Component
Technology Stack
Why We Love It 💡



Backend

PHP powers dynamic server-side logic, ideal for secure authentication workflows.


Database

MySQL offers fast, reliable storage for user data with strong community support.


Frontend
  
HTML5, CSS3, and Bootstrap create responsive, polished login and signup forms.


Security

password_hash(), password_verify(), and prepared statements ensure top-notch security.


Server

Apache provides a rock-solid hosting environment, compatible with XAMPP or LAMP.


Why This Stack? 😎

PHP: Perfect for rapid development and secure authentication logic.
MySQL: Trusted for structured data storage with prepared statements to prevent SQL injection.
Frontend Magic: HTML5, CSS3, and Bootstrap deliver a responsive, user-friendly interface.
Security: Bcrypt hashing and session management keep user data safe.
Apache: Reliable server for local and production environments.


✨ Features

📝 User Registration (Signup): Create accounts with username, email, and password, backed by robust input validation.
🔐 Secure Login: Authenticate users with bcrypt password hashing for top-tier security.
🔒 Session-Based Authentication: Maintain secure, seamless sessions across pages.
🚪 Logout Functionality: Safely end user sessions with a single click.
⚠️ Input Validation & Error Messages: Clear, user-friendly feedback for invalid inputs.
📦 MySQL Database Integration: Store user data efficiently with mysqli or PDO.
🔑 Password Reset Functionality: Recover accounts via secure, time-sensitive email links.


🛠️ Get Started in Minutes!
Follow these steps to set up the PHP User Authentication System locally. Let’s make it happen! 🚀
1. Set Up Your Server 🌐

Option 1: XAMPP (Recommended)Download XAMPP for an all-in-one local development environment.Start Apache and MySQL from the XAMPP control panel.  
Option 2: LAMPConfigure a LAMP stack for Linux. Check the Apache HTTP Server docs for guidance.

2. Install PHP 🐘

PHP is bundled with XAMPP or LAMP.  
For standalone installation, download from PHP.net.  
Verify with: php -v in your terminal.

3. Set Up MySQL 🗄️

MySQL is included with XAMPP or can be installed from MySQL.com.  
Use phpMyAdmin (bundled with XAMPP) or the MySQL command line to create the database.  
Create the schema:  CREATE DATABASE auth_system;
USE auth_system;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE password_resets (
    email VARCHAR(100) NOT NULL,
    token VARCHAR(255) NOT NULL,
    expires_at DATETIME NOT NULL,
    PRIMARY KEY (email)
);



4. Frontend Setup 🎨

HTML5 and CSS3 work out of the box in modern browsers—no setup needed!  
Add Bootstrap via CDN or download locally:  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



5. Clone & Configure the Project 📂

Clone the repo:  git clone https://github.com/daveontrack/php-auth-system.git
cd php-auth-system


Configure the database connection in config/db.php:  <?php
$host = 'localhost';
$db = 'auth_system';
$user = 'your_username';
$pass = 'your_password';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


For password reset, set up PHPMailer in config/mailer.php with your SMTP settings.

6. Test It Out! ✅

Move the project files to your server’s root (e.g., htdocs for XAMPP).  
Open your browser and visit http://localhost/php-auth-system.  
Test the flows:  
Signup: Create an account at /signup.php.  
Login: Sign in at /login.php.  
Password Reset: Use the "Forgot Password" link (requires PHPMailer).  
Logout: End session at /logout.php.



If issues arise, consult the official docs for PHP, MySQL, or Apache.

💡 Need Help?
Stuck? Check the official documentation linked above or drop a question in the Issues section.Let’s build something secure and amazing together! 🚀
