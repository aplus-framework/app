<h1>Contact</h1>
<form action="<?= route_url('contact.create'); ?>" method="post">
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<label for="email">Email</label>
	<input type="email" id="email" name="email">
	<label for="message">Message</label>
	<textarea id="message" name="message"></textarea>
	<button>Send</button>
</form>
