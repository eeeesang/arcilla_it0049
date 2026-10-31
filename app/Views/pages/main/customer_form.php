<?php $this->extend('layouts/main_layout'); $this->section('content'); $editing=isset($customer); $errors=session('errors')??[]; ?>
<div class="container-dashboard form-page">
  <div class="form-heading"><div><h1><?= $editing?'EDIT CUSTOMER':'NEW CUSTOMER' ?></h1><p><?= $editing?'Update this customer account.':'Create a customer account for Pink POS.' ?></p></div><a class="back-link" href="<?= site_url('customers') ?>">Back to customers</a></div>
  <?php if($errors): ?><div class="validation-summary" role="alert"><strong>Please correct the following:</strong><ul><?php foreach($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
  <form class="pink-form" action="<?= $editing?site_url('customers/'.$customer['id']):site_url('customers') ?>" method="post">
    <?= csrf_field() ?>
    <label for="full_name">Full name</label><input id="full_name" name="full_name" type="text" maxlength="100" required value="<?= esc(old('full_name',$customer['full_name']??'')) ?>"><small class="field-error"><?= esc($errors['full_name']??'') ?></small>
    <label for="email">Email address</label><input id="email" name="email" type="email" maxlength="150" required value="<?= esc(old('email',$customer['email']??'')) ?>"><small class="field-error"><?= esc($errors['email']??'') ?></small>
    <label for="phone">Phone number</label><input id="phone" name="phone" type="text" maxlength="30" value="<?= esc(old('phone',$customer['phone']??'')) ?>"><small class="field-error"><?= esc($errors['phone']??'') ?></small>
    <button class="primary-button" type="submit"><?= $editing?'Save changes':'Add customer' ?></button>
  </form>
</div>
<?= $this->endSection(); ?>
