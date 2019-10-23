<h1><?= lang('contact.contact'); ?></h1>
<?php if (old('success')): ?>
	<p>Message successful sent.</p>
<?php endif ?>
<form action="<?= route_url('contact.create'); ?>" method="post">
	<label for="name"><?= lang('contact.name'); ?></label>
	<input type="text" id="name" name="name" value="<?= old('name'); ?>">
	<div style="color:red"><?= old('errors[name]'); ?></div>
	<label for="email"><?= lang('contact.email'); ?></label>
	<input type="email" id="email" name="email" value="<?= old('email'); ?>">
	<div style="color:red"><?= old('errors[email]'); ?></div>
	<label for="message"><?= lang('contact.message'); ?></label>
	<textarea id="message" name="message"><?= old('message'); ?></textarea>
	<div style="color:red"><?= old('errors[message]'); ?></div>
	<button><?= lang('contact.send'); ?></button>
</form>
