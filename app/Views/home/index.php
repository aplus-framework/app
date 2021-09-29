<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('default');
$view->block('contents');
?>
    <h1><?= lang('home.title') ?></h1>
    <p><?= lang('home.description') ?></p>
    <details>
        <summary><?= Aplus::DESCRIPTION ?></summary>
        <p>Codename: <code><?= Aplus::CODENAME ?></code></p>
        <p>Version: <code><?= Aplus::VERSION ?></code></p>
        <h2>Declarations</h2>
        <ol>
            <?php foreach (Framework\Autoload\Preloader::getDeclarations() as $declaration): ?>
                <li><?= $declaration ?></li>
            <?php endforeach ?>
        </ol>
        <h2>Included Files</h2>
        <ol>
            <?php foreach (Framework\Autoload\Preloader::getIncludedFiles() as $includedFile): ?>
                <li><?= $includedFile ?></li>
            <?php endforeach ?>
        </ol>
    </details>
<?php
$view->endBlock();
