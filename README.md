# Laravel Product Management System

This is a simple Laravel-based Product Management System that allows users to perform CRUD (Create, Read, Update, Delete) operations on products.

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Routes](#routes)
- [Contributing](#contributing)
- [License](#license)

## Features

- View a list of all products
- Create new products
- Update existing products
- Delete products

## Requirements

- PHP 7.3 or higher
- Laravel 8.x
- MySQL

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/phuong456/product_management.git
   ```

2. Navigate to the project directory:
   ```
   cd product_management
   ```

3. Install dependencies:
   ```
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure your database settings:
   ```
   cp .env.example .env
   ```

5. Run database migrations:
   ```
   php artisan migrate
   ```

6. Start the development server:
   ```
   php artisan serve
   ```

## Usage

1. Access the application in your web browser at `http://localhost:8000`
2. Use the navigation to create, view, update, or delete products

## Project Structure

The main components of the project are:

- `app/Http/Controllers/ProductController.php`: Contains the logic for handling product-related operations
- `resources/views/product/`: Directory containing Blade templates for product views
- `routes/web.php`: Defines the routes for the application

## Routes

The following routes are available in the application:

- `/` - Display a list of all products
- `/create` - Display a form to create a new product
- `/postCreate` - Process the form submission to create a new product
- `/delete/{id}` - Delete a product by ID
- `/update/{id}` - Display a form to update a product by ID
- `/postUpdate/{id}` - Process the form submission to update a product by ID


## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).