CREATE DATABASE IF NOT EXISTS portfolio_store CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE portfolio_store;
CREATE TABLE categories(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100) NOT NULL,slug VARCHAR(120) NOT NULL UNIQUE);
CREATE TABLE products(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,category_id INT UNSIGNED NULL,name VARCHAR(180) NOT NULL,slug VARCHAR(200) NOT NULL UNIQUE,description TEXT NOT NULL,price DECIMAL(10,2) NOT NULL,active TINYINT(1) NOT NULL DEFAULT 1,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,FOREIGN KEY(category_id) REFERENCES categories(id) ON DELETE SET NULL);
CREATE TABLE users(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(190) NOT NULL UNIQUE,password_hash VARCHAR(255) NOT NULL,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE orders(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,user_id INT UNSIGNED NOT NULL,total DECIMAL(10,2) NOT NULL,status VARCHAR(40) NOT NULL DEFAULT 'new',created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,FOREIGN KEY(user_id) REFERENCES users(id));
CREATE TABLE order_items(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,order_id INT UNSIGNED NOT NULL,product_id INT UNSIGNED NOT NULL,quantity INT UNSIGNED NOT NULL,unit_price DECIMAL(10,2) NOT NULL,FOREIGN KEY(order_id) REFERENCES orders(id) ON DELETE CASCADE,FOREIGN KEY(product_id) REFERENCES products(id));
INSERT INTO categories(name,slug) VALUES('Home & Living','home-living'),('Kitchen','kitchen');
INSERT INTO products(category_id,name,slug,description,price) VALUES
(1,'Handcrafted Side Table','handcrafted-side-table','Sample portfolio product demonstrating database-driven catalog content.',249.00),
(2,'Walnut Serving Board','walnut-serving-board','Sample product demonstrating categories, cart and order workflows.',89.00),
(2,'Maple Cutting Board','maple-cutting-board','Responsive storefront sample product with server-side rendering.',119.00);
