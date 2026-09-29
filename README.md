# Custom PHP/MySQL E-Commerce Application

A custom-built e-commerce application demonstrating a lightweight, database-driven approach to online commerce without relying on a CMS or pre-built e-commerce platform.

## Features
- Product and category management
- Session-based shopping cart
- Customer registration and authentication
- Order creation and management
- Custom administrative overview
- PDO prepared statements
- Password hashing and session regeneration
- Responsive front-end design

## Technology
PHP 8+, MySQL, PDO, HTML5, CSS3 and JavaScript.

## Local Setup
1. Import `database/schema.sql`.
2. Copy `config/config.example.php` to `config/config.local.php`.
3. Add local database credentials.
4. Point a PHP web server at the project directory.
5. Open `index.php`.

`config/config.local.php` is excluded from Git so credentials are never committed.

## Security Notes
This demonstration uses prepared statements, password hashing, session ID regeneration, output escaping, input validation, and transactional order creation. The admin overview is intentionally a demonstration and should be protected with role-based authorization before production use.

No production credentials, customer information, API keys, or proprietary client code are included.

## Purpose
This repository demonstrates architecture and development techniques I use when building custom PHP/MySQL web applications. It reflects functionality I have implemented in production e-commerce work while keeping client and production code separate.

## About Me
I'm a senior full-stack web developer and technical consultant with 20+ years of professional experience building custom websites, e-commerce systems, WordPress solutions, database-driven applications, booking systems, API integrations, and business administration tools.

Portfolio: https://joestebbins.dev
