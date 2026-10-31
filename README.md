# IT0049 TFA5 Pink POS Laravel Foundations

This Laravel 12 application rebuilds the four-page Pink POS foundation from TFA1 using Laravel routes, controllers, Blade templates, and static PHP arrays.

## Required pages

- `/` - Laravel dashboard and quick navigation
- `/about` - project and framework information
- `/customers` - five customer records rendered with Blade `@foreach`
- `/users` - five user records rendered with Blade `@foreach`

## Project structure

- `routes/web.php` defines all four named routes.
- `PageController` handles the dashboard and About page.
- `CustomerController` contains the temporary customer array.
- `UserController` contains the temporary user array.
- `resources/views` contains the shared layout and page templates.
- `public/css/pink-pos.css` reproduces the responsive pink design used in TFA3.

## Local setup with XAMPP

1. Place the project at `C:\Users\ASUSVIVOBOOK\Desktop\xampp fr\htdocs\webtech_tfa5`.
2. Open a terminal in the project directory and run `composer install` if `vendor` is missing.
3. Copy `.env.example` to `.env` if `.env` is missing, then run `php artisan key:generate`.
4. Start Apache in XAMPP.
5. Visit `http://localhost/webtech_tfa5/public/`.

You can also run the Artisan development server with `php artisan serve` and visit the displayed URL. No application database is required for TFA5 because the customer and user listing pages intentionally use static PHP arrays.

## GitHub submission

Commit the application source, `composer.json`, `composer.lock`, routes, controllers, views, public assets, default migration files, and this README. Do not commit `.env`, `vendor`, `node_modules`, or generated log/cache files.
