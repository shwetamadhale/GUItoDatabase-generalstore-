# General Store Web Application

## Overview
This project is a **General Store Web Application** that allows users to register, log in, and interact with the system, including submitting forms for employee registration and managing sessions.

## Table of Contents
- [Introduction](#introduction)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Implementation](#implementation)

## Introduction
This web application is designed for a general store to manage employee registrations and user sessions. It enables users to register, log in, and interact with stored data securely.

## Installation
To set up the project, clone the repository and run it on a local server with PHP and MySQL.

```sh
$ git clone https://github.com/your-username/general-store.git
$ cd general-store
$ php -S localhost:8000
```

## Usage
1. Open `index.html` in a browser.
2. Click "Get Started" to navigate to the login/registration page.
3. Register an employee by filling out the form.
4. Log in with the registered credentials.
5. Navigate the system to manage employee data.
6. Log out to end the session.

## Features
- **User Registration**: Employees can be registered with their details.
- **Login System**: Secure login with session management.
- **Form Handling**: Data is collected and stored in a MySQL database.
- **Session Management**: Users must log in to access certain pages.

## Technologies Used
- **HTML**: Provides the structure of the web pages.
- **CSS**: Styles the layout and design.
- **JavaScript**: Handles dynamic interactions.
- **PHP**: Processes form data and manages user sessions.
- **MySQL**: Stores employee and user data securely.

## Implementation
### 1. HTML Structure
- The `index.html` serves as the welcome page.
- `register.php` contains the employee registration form.
- `home.php` serves as the dashboard after login.

### 2. PHP Logic
- `formfillup.php` handles data submission and inserts records into the database.
- `validation.php` verifies login credentials and starts a session.
- `logout.php` destroys the session and logs out the user.

### 3. CSS Styling
- Custom styles are applied using `happy.css`, `happy1.css`, and `happy2.css` to enhance UI design.

