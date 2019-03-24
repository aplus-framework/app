<?php
/**
 * @var string $title
 * @var string $header
 * @var string $main
 * @var string $sidebar
 * @var string $footer
 */
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= esc($title); ?></title>
</head>
<body>
<header>
	<?= $header; ?>
</header>
<main>
	<?= $main; ?>
</main>
<aside>
	<?= $sidebar; ?>
</aside>
<footer>
	<?= $footer; ?>
</footer>
</body>
</html>
