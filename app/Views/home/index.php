<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplus Framework</title>
    <style>
        body {
            background: #8892bf;
            color: #000;
            font-family: monospace;
            margin: 1em;
        }

        details {
            margin-top: 3em;
        }
    </style>
</head>
<body>
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
</body>
</html>
