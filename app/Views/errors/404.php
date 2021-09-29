<?php
/**
 * @var string $message
 * @var string $title
 * @var Framework\MVC\View $view
 */
$view->extends('default');
$view->block('contents');
?>
    <h1><?= $title ?></h1>
    <p><?= $message ?></p>
    <p>
        <a href="<?= route_url('home') ?>">Go to homepage</a>
    </p>
<?php
$view->endBlock();
