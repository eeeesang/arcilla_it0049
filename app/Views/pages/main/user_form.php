<?php $this->extend('layouts/main_layout'); $this->section('content'); $editing=isset($user); $errors=session('errors')??[]; $avatar=!empty($user['avatar'])?base_url('uploads/avatars/'.rawurlencode($user['avatar'])):base_url('img/avatar-placeholder.svg'); ?>
<div class="container-dashboard form-page">
  <div class="form-heading"><div><h1><?= $editing?'EDIT USER':'NEW USER' ?></h1><p><?= $editing?'Update the account and optionally upload a profile picture.':'Create a user account for Pink POS.' ?></p></div><a class="back-link" href="<?= site_url('users') ?>">Back to users</a></div>
  <?php if($errors): ?><div class="validation-summary" role="alert"><strong>Please correct the following:</strong><ul><?php foreach($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
  <form class="pink-form" action="<?= $editing?site_url('users/'.$user['id']):site_url('users') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <?php if($editing): ?><div class="avatar-editor"><img src="<?= esc($avatar) ?>" alt="Current profile picture"><div><label for="avatar">Profile picture</label><input id="avatar" name="avatar" type="file" accept="image/jpeg,image/png"><small>JPG or PNG, maximum 2 MB. Saved as a 300 x 300 avatar.</small><small class="field-error"><?= esc($errors['avatar']??'') ?></small></div></div><?php endif; ?>
    <label for="username">Username</label><input id="username" name="username" type="text" maxlength="50" required value="<?= esc(old('username',$user['username']??'')) ?>"><small class="field-error"><?= esc($errors['username']??'') ?></small>
    <label for="full_name">Full name</label><input id="full_name" name="full_name" type="text" maxlength="100" required value="<?= esc(old('full_name',$user['full_name']??'')) ?>"><small class="field-error"><?= esc($errors['full_name']??'') ?></small>
    <label for="role">Role</label><select id="role" name="role"><?php $selected=old('role',$user['role']??'Cashier'); foreach(['Administrator','Store Manager','Cashier','Inventory Staff'] as $role): ?><option value="<?= esc($role) ?>" <?= $selected===$role?'selected':'' ?>><?= esc($role) ?></option><?php endforeach; ?></select>
    <button class="primary-button" type="submit"><?= $editing?'Save changes':'Add user' ?></button>
  </form>
</div>
<?= $this->endSection(); ?>
