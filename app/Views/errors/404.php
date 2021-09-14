<?php
/**
 * @var string $title
 * @var string $message
 */
?>
<!doctype html>
<html lang="<?= App::language()->getCurrentLocale() ?>" dir="<?=
App::language()->getCurrentLocaleDirection() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= strip_tags($title) ?></title>
    <style>
        body {
            background: #8892bf;
            color: #000;
            font-family: monospace;
            margin: 1em;
        }
    </style>
</head>
<body>
<h1><?= $title ?></h1>
<p><?= $message ?></p>
<p>
    <a href="<?= route_url('home') ?>">Go to homepage</a>
</p>
</body>
</html>
