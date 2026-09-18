<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h2>Welcome to the POS System</h2>

<h3>Pages</h3>
<ul>
    <li><a href="<?= site_url('customers') ?>">Customer Accounts</a></li>
    <li><a href="<?= site_url('users') ?>">User Accounts</a></li>
    <li><a href="<?= site_url('about') ?>">About</a></li>
</ul>
<?= $this->endSection() ?>
