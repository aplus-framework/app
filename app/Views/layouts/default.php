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
<html lang="<?= App::getLanguage()->getCurrentLocale() ?>">
<head>
	<meta charset="utf-8">
	<title><?= esc($title); ?></title>
	<!--	<link rel="stylesheet" href="/assets/app.css">-->
</head>
<body>
<header>
	<?= $header ?>
</header>
<main>
	<?= $main ?>
</main>
<footer>
	<?= $footer ?>
</footer>
</body>
</html>
