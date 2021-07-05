<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<?php
$username = [
	'name' => 'username',
	'id' => 'username',
	'value' => null,
	'class' => 'form-control'
];

$password = [
	'name' => 'password',
	'id' => 'password',
	'class' => 'form-control'
];

$repeatPassword = [
	'name' => 'repeatPassword',
	'id' => 'repeatPassword',
	'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>
<h2>Register Form</h2>
<?php if ($errors != null) : ?>
	<div class="alert alert-danger" role="alert">
		<h4 class="alert-heading">Terjadi Kesalahan</h4>
		<hr>
		<p class="mb-0">
			<?php
			foreach ($errors as $err) {
				echo $err . '<br>';
			}
			?>
		</p>
	</div>
<?php endif ?>
<?= form_open('Auth/register') ?>
<div class="form-group">
	<?= form_label("Username", "username") ?>
	<?= form_input($username) ?>
</div>
<div class="form-group mt-2">
	<?= form_label("Password", "password") ?>
	<?= form_password($password) ?>
</div>
<div class="form-group mt-2">
	<?= form_label("Repeat Password", "repeatPassword") ?>
	<?= form_password($repeatPassword) ?>
</div>
<div class="text-right mt-3">
	<?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?= form_close() ?>
<p class="mt-4">Sudah punya akun? <a href="<?= site_url('auth/login') ?>">Masuk</a></i></p>
<?= $this->endSection() ?>