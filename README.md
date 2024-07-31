<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>


## About QR Code Generator

A simple web application built with Laravel 11 that allows users to generate QR codes from text or URLs. This project utilizes the Simple QrCode package to create and display QR codes based on user input.

### Features

- Input text or URL to generate a QR code
- Display generated QR codes on the page
- Error handling for empty or invalid inputs

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Laravel 11
- MySQL or another supported database

### Setup

1. **Clone the repository:**

    ```bash
    git clone https://github.com/YousefABDELRAZEK/qr-code-generator.git
    cd qr-code-generator
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the environment:**

    Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

    Open the `.env` file and configure your database settings.

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the migrations:**

    ```bash
    php artisan migrate
    ```

6. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://localhost:8000`.

## Usage

1. Enter the text or URL you want to convert into a QR code.
2. Click the "Generate QR Code" button.
3. The generated QR code will be displayed on the page.

## Folder Structure

- `app/Models/` - Contains the Eloquent models.
- `app/Http/Controllers/` - Contains the controllers.
- `resources/views/` - Contains the Blade templates.
- `routes/web.php` - Contains the web routes.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contributing

Contributions are welcome! Please follow the guidelines in the [Contributing Guide](CONTRIBUTING.md).

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an email to [your-email@example.com]. All security vulnerabilities will be promptly addressed.
