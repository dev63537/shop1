### created by dev



WordPress Project Setup Guide
This guide will help you set up and run this WordPress project on another PC.

Project Overview
WordPress Version: Latest WordPress installation
Database Name: shop
Database User: root (default)
Database Password: Empty (default)
Database Host: localhost
Table Prefix: wp_
Prerequisites
Required Software
Web Server: Apache or Nginx
PHP: Version 7.4 or higher (recommended: PHP 8.0+)
Database: MySQL 5.7+ or MariaDB 10.3+
Local Development Environment (Choose one):
XAMPP (Windows/Mac/Linux) - Recommended for beginners
WAMP (Windows)
MAMP (Mac)
LAMP (Linux)
Docker with WordPress stack
Setup Process
Method 1: Using XAMPP (Recommended for Beginners)
Step 1: Install XAMPP
Download XAMPP from https://www.apachefriends.org/
Install XAMPP on your PC
Start Apache and MySQL services from XAMPP Control Panel
Step 2: Copy Project Files
Copy the entire wordpress folder to your XAMPP installation directory:
Windows: C:\xampp\htdocs\
Mac: /Applications/XAMPP/htdocs/
Linux: /opt/lampp/htdocs/
Rename the folder to your project name (e.g., shop)
Step 3: Database Setup
Open phpMyAdmin: http://localhost/phpmyadmin
Create a new database named shop
Import the database:
Click on the shop database
Go to "Import" tab
Choose the shop.sql file from your project
Click "Go" to import
Step 4: Configure WordPress
Navigate to your project folder
Open wp-config.php in a text editor
Verify these settings:
define( 'DB_NAME', 'shop' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
Step 5: Access Your Site
Open your web browser
Navigate to: http://localhost/shop (or your folder name)
Your WordPress site should be accessible