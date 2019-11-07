<h1><?= lang('contact.contact') ?></h1>
<?php if (old('success')) : ?>
	<div class="alert alert-success">
		<?= lang('contact.messageSuccess') ?>
	</div>
<?php elseif (old('errors', false)) : ?>
	<div class="alert alert-danger">
		<?= lang('contact.hasErrors') ?>
	</div>
<?php endif ?>
<form action="<?= route_url('contact.create') ?>" method="post">
	<div class="form-group">
		<label for="name"><?= lang('contact.name') ?></label>
		<input type="text" id="name" name="name" value="<?= old('name') ?>" class="form-control <?=
		old('errors[name]') ? ' is-invalid' : ''
		?>" minlength="5" maxlength="32" required>
		<div class="invalid-feedback"><?= old('errors[name]') ?></div>
	</div>
	<div class="form-group">
		<label for="email"><?= lang('contact.email') ?></label>
		<input type="email" id="email" name="email" value="<?= old('email') ?>" class="form-control <?=
		old('errors[email]') ? ' is-invalid' : ''
		?>">
		<div class="invalid-feedback"><?= old('errors[email]') ?></div>
	</div>
	<div class="form-group">
		<label for="message"><?= lang('contact.message') ?></label>
		<textarea id="message" name="message" class="form-control <?=
		old('errors[message]') ? ' is-invalid' : ''
		?>"><?= old('message') ?></textarea>
		<div class="invalid-feedback"><?= old('errors[message]') ?></div>
	</div>
	<button class="btn btn-primary"><?= lang('contact.send') ?></button>
</form>
