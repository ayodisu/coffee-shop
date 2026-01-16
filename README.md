# Coffeefy ☕

**Coffeefy** is a full-stack e-commerce web application built for coffee lovers. It allows users to browse a curated menu of drinks and desserts, manage a shopping cart, place orders, and book tables. The project features a modern, responsive user interface designed with **Tailwind CSS** and a robust **MVC (Model-View-Controller)** backend structure in native PHP.

This project serves as a comprehensive portfolio piece demonstrating full-stack development capabilities, security best practices, and modern UI/UX design.

## 🚀 Features

### Public / User

- **Modern UI**: Fully responsive design using Tailwind CSS with a clean, glassmorphic aesthetic.
- **Menu Browsing**: Categorized menu (Drinks & Desserts) with tabbed switching.
- **Shopping Cart**: Add items, adjust quantities, view summary, and checkout.
- **Table Booking**: Reservation system with date/time selection.
- **User Accounts**: Secure registration and login system.
- **User Dashboard**: View order history, booking status, and write reviews.
- **Contact**: Integrated WhatsApp contact and location details.

### Admin Panel

- **Dashboard**: Overview of sales, orders, and product counts.
- **Product Management**: Create, update, and delete products (with image upload).
- **Order Management**: View and update order status (Pending, Delivered, etc.).
- **Booking Management**: Approve or reject table reservations.
- **Admin Management**: Manage admin accounts.

## 🛠️ Tech Stack

- **Frontend**: Tailwind CSS, HTML5, JavaScript (Vanilla + jQuery), FontAwesome.
- **Backend**: PHP 8.x (Custom MVC Framework).
- **Database**: MySQL.
- **Payment**: PayPal Integration.
- **Architecture**: MVC Pattern, PDO for Database Interactions.

## ⚙️ Installation & Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/ayodisu/coffeefy.git
   cd coffeefy
   ```

2. **Database Setup**
   - Create a MySQL database named `coffeefy`.
   - Import the `coffeefy.sql` file provided in the root directory.

3. **Configuration**
   - The application uses environment variables or a config file. Ensure your database credentials in `app/core/Database.php` match your local environment.
   - Default `DB_HOST`: `localhost`
   - Default `DB_USER`: `root`
   - Default `DB_PASS`: `` (empty)
   - Default `DB_NAME`: `coffeefy`

4. **Run the Server**
   - If using **Laragon/XAMPP**, point the document root to the project folder.
   - Or use the PHP built-in server:

     ```bash
     php -S localhost:8000 -t public
     ```

   - Access the site at `http://localhost:8000`.

## 📂 Project Structure

coffeefy/
├── app/
│   ├── controllers/    # Request handlers (Product, Cart, Admin, etc.)
│   ├── core/           # Framework core (App, Controller, Database)
│   ├── helpers/        # Session and Helper functions
│   ├── models/         # Database interactions
│   └── views/          # HTML Templates (Tailwind styled)
├── public/
│   ├── images/         # Static assets
│   └── index.php       # Entry point
└── coffeefy.sql        # Database Schema

---

**Developed by [Abdulwahab](https://github.com/ayodisu)**
