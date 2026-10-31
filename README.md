# IT0049 TFA4 Pink POS Authentication

This CodeIgniter 4 project extends the TFA3 Pink POS application with session-based staff authentication while preserving its pink responsive design and customer/user management features.

## Authentication features

- Login page at `/login`
- Passwords stored only as `password_hash()` values
- Login verification through `password_verify()`
- Regenerated session ID after successful authentication
- `AuthFilter` protection for every customer and user listing, new, create, edit, and update route
- Logout through a CSRF-protected POST action that destroys the session
- Logged-out access to a protected URL redirects to `/login`
- Intended protected URL is restored after login

## Demo credentials

- Username: `admin01`
- Password: `PinkPOS2026!`

All five original users use the same demonstration password for this activity. Change these credentials before using the application outside a classroom demonstration.

## Local setup with XAMPP

1. Place the project at `C:\Users\ASUSVIVOBOOK\Desktop\xampp fr\htdocs\webtech_tfa4`.
2. Start Apache in XAMPP. MySQL is not required because the application uses PDO SQLite.
3. The database is created automatically at `writable/pink_pos_tfa4.sqlite` on the first request.
4. Run `composer install` only if the `vendor` folder is missing.
5. Visit `http://localhost/webtech_tfa4/public/login`.

A MySQL-compatible database export is included at `database/webtech_tfa4.sql`. The web server must be able to write to `public/uploads/avatars` and `writable`.
