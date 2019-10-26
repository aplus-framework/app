<?php
/**
 * @see \App\Controllers\Errors::notFound
 *
 * @var string $home_url
 */
?>
<h1><?= lang('errors.404-notFound') ?></h1>
<p>
	<a href="<?= esc($home_url) ?>"><?= lang('errors.goHome') ?></a>
</p>
