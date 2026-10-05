# IT0049 TFA2 Pink POS Database

Pink POS is a four-page CodeIgniter 4 application upgraded for IT0049 TFA2. The customer and user listings now come from a MySQL database through CodeIgniter models and Query Builder instead of static PHP arrays.

## Requirements

- PHP 8.2 or later
- Composer
- MySQL or MariaDB
- XAMPP Apache and MySQL

## Local setup

1. Place the project in `C:\Users\ASUSVIVOBOOK\Desktop\xampp fr\htdocs\webtech_tfa2`.
2. Start Apache and MySQL in XAMPP.
3. Import `pink_pos_tfa2.sql` in phpMyAdmin, or run `mysql -u root < pink_pos_tfa2.sql`.
4. Run `composer install` if the `vendor` directory is not present.
5. Confirm the database values in `.env` match your local MySQL credentials.
6. Visit `http://localhost/webtech_tfa2/public/`.

## Routes

- `/` - Pink POS dashboard
- `/about` - project overview
- `/customers` - customer records retrieved through `CustomerModel`
- `/users` - user records retrieved through `UserModel`

The `role` column extends the supplied users schema so the TFA1 User Accounts page retains its original role field while moving all records into the database.
