<?php 
    $this->extend('layouts/main_layout');
    $this->section('content');
?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>CUSTOMERS</h1>
            <p>Registered customers in our system.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button id='open-nav'>≡≡</button>
        </div>
    </div>
    
    
    <div class="account-list">
    <?php foreach ($customers as $customer): ?>
        <div class="customer-node">
            <h1><?= esc($customer['full_name']) ?></h1>
            <p><strong>Email:</strong> <?= esc($customer['email']) ?></p>
            <p><strong>Phone:</strong> <?= esc($customer['phone']) ?></p>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>
