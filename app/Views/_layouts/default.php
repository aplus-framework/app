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
    <title><?= isset($title) ? esc($title) : 'Aplus Framework' ?></title>
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABLgAAAS4Be3EaTQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGbSURBVFiF7ZaxisJAEIb/HBusLIKksVMEBQU7sdBXEB8iXRqfwtbCF7C1kIClYOMr2As2giBJsY1G41whBOIpjqOe3OEPC9ndYebbzewwBgDCG/X1zuAfgA/A3QCz2QxE9GOEYYhWq/VaANu20Ww2L+6Zpol0Oi0CAE514Oao1+t0TbvdjizLYvk5H+wbyOfzV/cmkwmCILjz3Cc9BWA0GomCPwVgv99jPB6LARTXMJfLXVwPwxDD4TCx5vs+HMeB1prlm5Usy+XyahKe63g8UqFQ4CbibaNUKkVRFLEBBoPBPS/htlGxWGQH11pTNpt97jM0TRNEvLah2+1itVqxbAHAALMhqVarsG07sdbr9VCpVOL5YrFAuVzGdrtlAwCC6gWAlFKktU5cf7vdlviSAdRqtUTw6XT62lJ8rkajEX9HUYROpyN1JbsBz/Pi0/f7fZEPSH+BYRi0Xq+JiMj3fcpkMr8LUCqV4tO7rvtIcBmA4zhERDSfz0kp9RCAKAk3mw2CIIDrujgcDhIXsdiF6FX6W13xB+BfAnwDuedID9ikolEAAAAASUVORK5CYII=">
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
