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
    
    <div class="account-list">
    <?php foreach ($users as $user): ?>
        <div class="customer-node">
            <h1><?= esc($user['full_name']) ?></h1>
            <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
            <p><strong>Role:</strong> <?= esc($user['role']) ?></p>
        </div>
    <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>
