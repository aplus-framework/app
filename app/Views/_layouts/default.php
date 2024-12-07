<?php
/**
 * @var string|null $description
 * @var string|null $title
 * @var Framework\MVC\View $view
 */
?>
<!doctype html>
<html lang="<?= App::language()->getCurrentLocale() ?>" dir="<?= App::language()
    ->getCurrentLocaleDirection() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= isset($description)
        ? esc($description)
        : 'Website built with Aplus Framework' ?>">
    <title><?= isset($title) ? esc($title) : 'Aplus Framework' ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <style>
        body {
            background: #fff;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            margin: 1rem;
        }

        a {
            color: #f0f;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?= $view->renderBlock('contents') ?>
</body>
</html>
