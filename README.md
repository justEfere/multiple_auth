# Laravel Authentication System

A Laravel authentication system with roles for **Admin, Super Admin, and Users**. It includes user registration, login, forgot password, and role-based authentication. Built with **Laravel Breeze** for authentication and a **custom frontend** for the UI.

## Features

-   User Registration & Login
-   Forgot Password for Users, Admins, and Super Admins
-   Role-Based Authentication
-   Admin Dashboard
-   Super Admin Dashboard
-   Custom Frontend Integration

## Installation

### Prerequisites

Ensure you have the following installed:

-   PHP (>= 8.0)
-   Composer
-   Node.js & NPM
-   MySQL or any supported database
-   Laravel 10+

### Step 1: Clone the Repository

```bash
git clone git@github.com:justEfere/multiple_auth.git
cd multi-auth-breeze
```

### Step 2: Install Dependencies

```bash
composer install
npm install && npm run build
```

### Step 3: Configure Environment

```bash
cp .env.example .env
```

Update `.env` with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 4: Generate Application Key

```bash
php artisan key:generate
```

### Step 5: Run Migrations and Seeders

```bash
php artisan migrate --seed
```

Seeders will create the default **Super Admin**, **Admin**, and **User** roles.

### Step 6: Run the Application

```bash
php artisan serve
```

Access the app at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Default User Roles

-   **Super Admin**: Has full access to the system.
-   **Admin**: Manages users and content.
-   **User**: Can register, login, and access their dashboard.

## Login Credentials (for testing)

Super Admin:

```txt
Email: superadmin@example.com
Password: password
```

Admin:

```txt
Email: admin@example.com
Password: password
```

User:

```txt
Email: user@example.com
Password: password
```

## Custom Frontend

The frontend is built separately and connected to Laravel Breeze for authentication. Ensure your styles and assets are properly compiled using:

```bash
npm run dev
```

## Additional Commands

If you need to reset the database:

```bash
php artisan migrate:fresh --seed
```

To clear cache:

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## License

This project is open-source and available under the MIT License.
