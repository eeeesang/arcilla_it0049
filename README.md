# IT0049 TFA3 Pink POS

This CodeIgniter 4 project extends Pink POS with database-backed customer and user forms, validation, edit workflows, and profile-picture upload.

## Included features

- New customer form at `/customers/new` with required full name and valid email
- New user form at `/users/new` with required unique username and full name
- Pre-filled customer and user edit forms
- JPG/PNG avatar upload on the user edit form, maximum 2 MB
- 300 x 300 display-ready avatar processing using CodeIgniter's Image service
- Avatar filename stored in the database and a placeholder shown when none exists
- Validation errors and previous input redisplayed after invalid submission
- Original Pink POS theme, customer names, and user names preserved

## Local setup with XAMPP

1. Extract the project to `C:\Users\ASUSVIVOBOOK\Desktop\xampp fr\htdocs\webtech_tfa3`.
2. Start Apache in XAMPP. The project uses the enabled PDO SQLite extension, so MySQL is not required.
3. The database is created automatically at `writable/pink_pos_tfa3.sqlite` with the original TFA2 customers and users.
4. The SQL export remains in `database/webtech_tfa3.sql` for submission or MySQL hosting.
5. Run `composer install` only if `vendor` is missing.
6. Visit `http://localhost/webtech_tfa3/public/`.

The web server must be able to write to `public/uploads/avatars` and `writable`.
