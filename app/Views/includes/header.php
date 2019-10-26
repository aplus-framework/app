<ul>
	<li>
		<a href="<?= route_url('home', [], [App::getRequest()->getPort()]) ?>">
			<?= lang('home.home') ?>
		</a>
	</li>
	<li>
		<a href="<?= route_url('contact', [], [App::getRequest()->getPort()]) ?>">
			<?= lang('contact.contact') ?>
		</a>
	</li>
</ul>
