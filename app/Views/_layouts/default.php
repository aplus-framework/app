<?php
/**
 * @var string|null $title
 * @var Framework\MVC\View $view
 */
?>
<!doctype html>
<html lang="<?= App::language()->getCurrentLocale() ?>" dir="<?=
App::language()->getCurrentLocaleDirection() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($title) ? strip_tags($title) : 'Aplus Framework' ?></title>
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
<?= $view->renderBlock('contents') ?>
</body>
</html>
