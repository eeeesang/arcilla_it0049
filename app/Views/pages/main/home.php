<?php
$this->extend('layouts/main_layout');
$this->section('content');
?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>PINK POS DASHBOARD</h1>
            <p>Welcome to the foundation of your point-of-sale system.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button id='open-nav'>≡≡</button>
        </div>
    </div>

    <div class="cards-data-home">
        <div class="cards-home">
            <h1>Status:</h1>
            <p>Ready</p>
        </div>
        <div class="cards-home">
            <h1>Pages:</h1>
            <p>4</p>
        </div>
        <div class="cards-home">
            <h1>Users:</h1>
            <p>5</p>
        </div>
        <div class="cards-home">
            <h1>Customers:</h1>
            <p>5</p>
        </div>
    </div>
    
    <div class="quick-action">
        <h1>Quick Actions</h1>
        <div class="cards-action-home">
            <div class="cards-home quick-action-btn">
                <a href="<?= site_url('customers') ?>">Customers</a>
            </div>
            <div class="cards-home quick-action-btn">
                <a href="<?= site_url('users') ?>">Users</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
