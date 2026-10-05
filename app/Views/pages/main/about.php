<?php
    $this->extend('layouts/main_layout');
    $this->section('content');
?>

<div class="container-dashboard">
    <div class="titles-container-dashboard">
        <div class="titles-dashboard">
            <h1>ABOUT</h1>
            <p>Learn what this starter POS application provides.</p>
        </div>
        <div class="icon-titles-dashboard">
            <button id='open-nav'>≡≡</button>
        </div>
    </div>

    <div class="description-about">
        <h1>Pink POS</h1>
        <p>Pink POS is a four-page CodeIgniter 4 application created for IT0049 TFA1. It demonstrates the MVC request flow through explicit routes, separate controllers, reusable views, and temporary static PHP arrays.</p>
        <p>The Customer Accounts and User Accounts pages are ready to be connected to a database in a future module without changing the basic page structure.</p>
    </div>
</div>

<?= $this->endSection(); ?>
