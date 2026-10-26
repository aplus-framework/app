<?php
/**
 * @var string $message
 * @var string $title
 * @var Aplus\Mvc\View $view
 */
$view->extends('default');
$view->block('contents');
?>
    <h1><?= $title ?></h1>
    <p><?= $message ?></p>
    <p>
        <a href="<?= route_url('home.index') ?>">Go to homepage</a>
    </p>
<?php
$view->endBlock();
