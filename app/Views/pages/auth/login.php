<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/main/main_layout.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/main/auth.css') ?>">
    <title><?= esc($title) ?> | Pink POS</title>
</head>
<body class="auth-page">
    <main class="auth-shell">
        <div class="auth-card">
            <div class="auth-brand"><span>PP</span><div><h1>Pink POS</h1><p>Staff access</p></div></div>
            <div class="auth-heading"><h2>Welcome back</h2><p>Sign in to manage customer and user accounts.</p></div>

            <?php if (session('error')): ?><div class="auth-message auth-error" role="alert"><?= esc(session('error')) ?></div><?php endif; ?>
            <?php if (session('success')): ?><div class="auth-message auth-success"><?= esc(session('success')) ?></div><?php endif; ?>
            <?php $errors = session('errors') ?? []; ?>

            <form action="<?= site_url('login') ?>" method="post" class="auth-form">
                <?= csrf_field() ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" autocomplete="username" required value="<?= esc(old('username')) ?>">
                <?php if (isset($errors['username'])): ?><small><?= esc($errors['username']) ?></small><?php endif; ?>

                <label for="password">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required>
                <?php if (isset($errors['password'])): ?><small><?= esc($errors['password']) ?></small><?php endif; ?>

                <button type="submit">Sign in</button>
            </form>
            <p class="auth-hint">Demo: <strong>admin01</strong> / <strong>PinkPOS2026!</strong></p>
            <a class="auth-back" href="<?= site_url('/') ?>">Back to dashboard</a>
        </div>
    </main>
</body>
</html>
