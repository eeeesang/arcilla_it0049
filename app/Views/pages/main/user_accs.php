<?php 
    $this->extend('layouts/main_layout');
    $this->section('content');
?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>USERS</h1>
            <p>Registered users in our system.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button id='open-nav'>≡≡</button>
        </div>
    </div>

    <div class="list-toolbar"><a class="primary-button" href="<?= site_url('users/new') ?>">+ New user</a></div>
    <?php if (session('success')): ?><div class="success-message"><?= esc(session('success')) ?></div><?php endif; ?>
    <div class="account-list">
    <?php foreach ($users as $user): ?>
        <div class="customer-node">
            <?php $avatar = ! empty($user['avatar']) ? base_url('uploads/avatars/' . rawurlencode($user['avatar'])) : base_url('img/avatar-placeholder.svg'); ?>
            <img class="user-avatar" src="<?= esc($avatar) ?>" alt="Avatar for <?= esc($user['full_name']) ?>">
            <div class="user-details">
                <h1><?= esc($user['full_name']) ?></h1>
                <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                <p><strong>Role:</strong> <?= esc($user['role']) ?></p>
                <a class="edit-link" href="<?= site_url('users/' . $user['id'] . '/edit') ?>">Edit user</a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>
