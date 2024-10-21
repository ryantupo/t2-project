<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# T2 Engineering Website

## Overview

This project is a fully responsive website for **T2 Engineering**, a company that specializes in providing professional services across the construction, surveying, and petrochemical industries. The website includes multiple pages such as **Home**, **About Us**, **Services**, and **Contact Us**, with functionality that allows users to send emails directly from the website.

### Features
- Responsive design across different devices.
- Custom carousel to showcase project images.
- A contact form with email integration.
- Dynamic content loading and form handling.
- Styled components with a focus on user experience (smooth transitions and form validations).

## Table of Contents
- [Technologies](#technologies)
- [Setup](#setup)
- [Configuration](#configuration)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)

## Technologies

This project is built using the following technologies:
- **Laravel** (PHP Framework)
- **Tailwind CSS** (For styling and layout)
- **JavaScript** (Frontend interactivity)
- **Blade** (Laravel's templating engine)
- **SMTP** (Mail configuration for contact form)

## Setup

To get this project running locally, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/t2-engineering-website.git
    cd t2-engineering-website
    ```

2. **Install dependencies:**

    Make sure you have Composer installed, then run:

    ```bash
    composer install
    ```

3. **Copy the `.env.example` file to `.env`:**

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Setup database:**

    Update your `.env` file with the correct database credentials.

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

6. **Run migrations:**

    ```bash
    php artisan migrate
    ```

7. **Run the application:**

    Start the development server:

    ```bash
    php artisan serve
    ```

8. **Mail Configuration:**

    Update the `.env` file with your SMTP settings for the contact form:

    ```dotenv
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.your-email-provider.com
    MAIL_PORT=587
    MAIL_USERNAME=your-email@example.com
    MAIL_PASSWORD=your-email-password
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=your-email@example.com
    MAIL_FROM_NAME="${APP_NAME}"
    ```

## Configuration

To modify the project’s configuration:
- **Laravel Environment**: All Laravel configurations (like database and mail settings) can be changed in the `.env` file.
- **Frontend Styling**: Frontend elements are styled using Tailwind CSS, which is compiled using Laravel Mix. Modify any styles in the `resources/css` folder.
- **Mail Setup**: Ensure you configure the mail driver properly as detailed above for the contact form to work.

## Usage

### Contact Form

The **Contact Us** page includes a contact form that allows users to send messages directly to your configured email address. It provides instant feedback to the user with a notification popup that fades out smoothly.

### Adding New Services

To add a new service to the site, you can modify the `services.blade.php` page located in the `resources/views` directory. You can dynamically load more services by extending the layout.

### Image Carousel

The site includes a customizable image carousel that pulls images from specific folders. This is currently implemented on several pages such as **Setting Out Services** and **Surveying Services**. To update the images, simply add or replace images in the respective folder.

## Features

1. **Email Form**:
   - The contact form allows users to send messages directly to the business via email.
   - Styled form fields with validation.
   - Notification popup after a successful form submission.

2. **Dynamic Carousels**:
   - Carousels display images for different services.
   - Easily configurable by adding new images to the `/images/` folder.

3. **Responsive Layout**:
   - Built using Tailwind CSS to ensure compatibility across mobile, tablet, and desktop devices.
   - Custom layout for each section (services, about us, contact form).

4. **Modern Animations**:
   - Smooth transitions for popup notifications and user interactions.

## Contributing

Contributions are welcome! If you have ideas or find any bugs, feel free to open an issue or submit a pull request.

### Steps to contribute:
1. Fork the repository.
2. Create a new branch for your feature or bugfix (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add feature or fix bug'`).
4. Push to your branch (`git push origin feature-name`).
5. Create a Pull Request.

## License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).
