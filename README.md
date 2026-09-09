# WebForge — Digital Solutions

A simple full-stack web development project built with **PHP, MySQL, HTML, and CSS**.

The project includes a public-facing website where visitors can submit project requests and an admin dashboard where submitted leads can be viewed and edited.

---

## 🚀 Features

### Public Website

* Responsive landing page
* Hero section
* Services section
* Project inquiry / quote form
* Form validation using HTML
* Clean and modern UI
* Responsive design for mobile devices

### Lead Management

* Store customer inquiries in MySQL
* View all submitted leads
* Display:

  * Name
  * Email
  * Phone
  * Service
  * Budget
  * Message
  * Status
  * Created date
* Edit existing leads
* Update lead information directly from the admin panel

### Backend

* PHP
* PDO for database communication
* Prepared SQL statements
* MySQL database
* Basic input/output security using `htmlspecialchars()`

---

## 🛠️ Technologies Used

* **HTML5**
* **CSS3**
* **PHP**
* **MySQL**
* **PDO**
* **XAMPP**
* **phpMyAdmin**

---

## 📁 Project Structure

```text
WebForge/
│
├── admin/
│   ├── index.php
│   └── edit.php
│
├── assets/
│   └── style.css
│
├── config/
│   └── database.php
│
├── index.php
│
├── submit.php
│
└── README.md
```

---

## 🗄️ Database

The project uses a MySQL database to store project leads.

Example database:

```text
learnphp
```

The main table used by the application is:

```text
leads
```

### Leads Table

The table contains fields such as:

```text
id
name
email
phone
service
budget
message
status
created_at
```

---

## ⚙️ Setup Instructions

### 1. Install XAMPP

Install XAMPP and start:

* Apache
* MySQL

---

### 2. Place the Project

Copy the project into your XAMPP `htdocs` directory:

```text
C:\xampp\htdocs\WebForge
```

---

### 3. Create the Database

Open:

```text
phpMyAdmin
```

Create a database named:

```text
learnphp
```

Then create the `leads` table with the required fields.

---

### 4. Configure the Database

Open:

```text
config/database.php
```

Configure the database connection according to your local MySQL setup.

Example:

```php
<?php

$host = 'localhost';
$dbname = 'learnphp';
$username = 'root';
$password = '';

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Database connection failed.");

}
```

---

## 🌐 Running the Project

After starting Apache and MySQL in XAMPP, open:

```text
http://localhost/WebForge/
```

The public website should be available there.

The admin dashboard can be accessed through:

```text
http://localhost/WebForge/admin/
```

---

## 🔄 How the Application Works

The basic flow is:

```text
Visitor
   │
   ▼
Public Website
   │
   ▼
Quote Form
   │
   ▼
submit.php
   │
   ▼
MySQL Database
   │
   ▼
Admin Dashboard
   │
   ▼
Edit Lead
   │
   ▼
Update Database
```

---

## 🔐 Security Practices

The project uses several basic security practices:

* PDO prepared statements
* Parameterized SQL queries
* `htmlspecialchars()` when displaying database values
* Separate database configuration file
* Database credentials kept outside the main page files

> This is a learning/project implementation and should receive additional security hardening before being used in a production environment.

---

## 🎨 Design

The interface follows a minimal and professional design system using:

* Dark charcoal
* Soft green
* Light gray
* White
* Rounded cards
* Subtle shadows
* Hover animations
* Responsive layouts

The admin dashboard uses a separate visual treatment while maintaining the same overall design language.

---

## 📌 Current Project Status

### Completed

* [x] Public landing page
* [x] Services section
* [x] Project inquiry form
* [x] MySQL database connection
* [x] Lead submission
* [x] Admin dashboard
* [x] Lead listing
* [x] Lead editing
* [x] Responsive styling
* [x] Form styling
* [x] Admin dashboard styling

### Future Improvements

* [ ] Admin authentication/login
* [ ] Delete lead functionality
* [ ] Lead search
* [ ] Lead filtering
* [ ] Pagination
* [ ] Better status management
* [ ] Server-side form validation
* [ ] CSRF protection
* [ ] Flash success/error messages
* [ ] Email notifications
* [ ] Dashboard statistics

---

## 👨‍💻 Purpose

This project was created as a practical PHP/MySQL learning project to understand how a real-world website can communicate with a database and provide an administrative interface for managing submitted data.

It demonstrates the basic relationship between:

```text
Frontend
   ↓
PHP Backend
   ↓
Database
   ↓
Admin Panel
```

---

## 📄 License

This project is intended for educational and portfolio purposes.

You are free to modify and improve the project for your own learning and development.

```
```
