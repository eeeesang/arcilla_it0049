# IT0049 TFA1 Pink POS Foundations

This CodeIgniter 4 project implements the four-page POS foundation required by IT0049 TFA1.

## Pages

- `/` - landing dashboard
- `/about` - application overview
- `/customers` - five customer records from a static PHP array
- `/users` - five staff records from a static PHP array

## Local setup with XAMPP

1. Place the project at `C:\Users\ASUSVIVOBOOK\Desktop\xampp fr\htdocs\webtech_tfa1`.
2. Open a terminal in the project folder and run `composer install` if the `vendor` folder is not present.
3. Start Apache from the XAMPP control panel.
4. Visit `http://localhost/webtech_tfa1/public/`.

No database is required for this activity. Customer and user records are defined as static arrays in their controllers and rendered with `foreach` loops in the views.
