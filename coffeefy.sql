CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL, -- Storing password hash
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `admins` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `adminname` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL, -- Storing password hash
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `products` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL,
    `image` VARCHAR(255),
    `description` TEXT,
    `type` VARCHAR(50), -- 'drink', 'dessert', etc.
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `cart` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `pro_id` INT, -- Product ID
    `name` VARCHAR(255),
    `image` VARCHAR(255),
    `price` DECIMAL(10, 2),
    `quantity` INT,
    `description` TEXT,
    `user_id` INT NOT NULL, -- User ID
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `bookings` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(255),
    `last_name` VARCHAR(255),
    `date` VARCHAR(255), -- Stored as string in code, arguably DATE type is better but sticking to code
    `time` VARCHAR(255),
    `phone` VARCHAR(50),
    `message` TEXT,
    `status` VARCHAR(50) DEFAULT 'Pending',
    `user_id` INT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `orders` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(255),
    `last_name` VARCHAR(255),
    `state` VARCHAR(255),
    `street_address` VARCHAR(255),
    `town` VARCHAR(255),
    `zip_code` VARCHAR(50),
    `phone` VARCHAR(50),
    `email` VARCHAR(255),
    `total_price` DECIMAL(10, 2),
    `status` VARCHAR(50) DEFAULT 'pending',
    `user_id` INT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE `reviews` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `review` TEXT,
    `username` VARCHAR(255), -- Stored as username string, not FK
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);