<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/main/main_layout.css') ?>?v=<?= filemtime(FCPATH . 'css/main/main_layout.css') ?>">
    <link rel="stylesheet" href="<?= base_url($stylesheet) ?>?v=<?= filemtime(FCPATH . $stylesheet) ?>">
    <title><?= esc($title) ?> | Pink POS</title>
</head>
<body>
    <nav id='dashboard-nav'>
        <button class="close-nav" id='close-nav'>✕</button>
        <div class="title-container-nav">
            <h1 class="title-nav">Pink POS</h1>
        </div>
        <div class="divider-nav"></div>
        <div class="links-nav">
            <a href="<?= site_url('/') ?>">Home</a>
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
        </div>
    </nav>
    <div class="ui-backdrop" id='ui-backdrop-nav'></div>
    <section>
        <div class="content-dashboard">
            <?= $this->renderSection('content') ?>
        </div>
        <footer>
            <div class="logo-footer">
                <h1>Pink POS</h1>
                <p>&copy; 2026 Pink POS</p>
            </div>
            <div class="socs-footer">
                <div class="socs-link-footer">
                    <p>Activity:</p>
                    <p>IT0049 TFA1</p>
                </div>
                <div class="socs-link-footer">
                    <p>Framework:</p>
                    <p>CodeIgniter 4</p>
                </div>
            </div>
        </footer>
    </section>
</body>

<script src="<?= base_url('js/main/dashboard.js') ?>?v=<?= filemtime(FCPATH . 'js/main/dashboard.js') ?>"></script>
</html>
