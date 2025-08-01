# Task Manager App (PHP + MySQL)

A simple web-based Task Manager built with PHP, MySQL, HTML, CSS, and JavaScript.

## Features
- Add tasks
- Mark tasks as completed
- Delete tasks
- Simple and responsive UI

## Setup Instructions
1. Import the SQL below to your MySQL server:
```sql
CREATE DATABASE task_manager;
USE task_manager;
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status TINYINT(1) DEFAULT 0
);
```

2. Place this folder in `htdocs` if you're using XAMPP.

3. Start Apache and MySQL.

4. Open in browser: `http://localhost/task-manager`

## Author
Vishal Rajput
