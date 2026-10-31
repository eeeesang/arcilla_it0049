<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pink POS Laravel foundations project">
    <link rel="stylesheet" href="<?php echo e(asset('css/pink-pos.css')); ?>">
    <title><?php echo e($title); ?> | Pink POS</title>
</head>
<body>
    <button class="menu-button" id="menuButton" type="button" aria-controls="sidebar" aria-expanded="false">Menu</button>
    <div class="backdrop" id="backdrop"></div>
    <aside class="sidebar" id="sidebar">
        <button class="close-button" id="closeButton" type="button" aria-label="Close menu">×</button>
        <a class="brand" href="<?php echo e(route('home')); ?>"><span>PP</span><div><strong>Pink POS</strong><small>Laravel Edition</small></div></a>
        <nav aria-label="Primary navigation">
            <a class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Dashboard</a>
            <a class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
            <a class="<?php echo e(request()->routeIs('customers.*') ? 'active' : ''); ?>" href="<?php echo e(route('customers.index')); ?>">Customers</a>
            <a class="<?php echo e(request()->routeIs('users.*') ? 'active' : ''); ?>" href="<?php echo e(route('users.index')); ?>">Users</a>
        </nav>
        <div class="sidebar-note"><strong>IT0049 TFA5</strong><span>Laravel 12</span></div>
    </aside>

    <div class="page-shell">
        <main class="page-content"><?php echo $__env->yieldContent('content'); ?></main>
        <footer><div><strong>Pink POS</strong><span>Laravel POS Foundations</span></div><p>&copy; 2026 Pink POS</p></footer>
    </div>
    <script src="<?php echo e(asset('js/pink-pos.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\ASUSVIVOBOOK\Desktop\xampp fr\htdocs\webtech_tfa5\resources\views/layouts/app.blade.php ENDPATH**/ ?>