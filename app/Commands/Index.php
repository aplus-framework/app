<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Commands;

use Framework\CLI\CLI;

/**
 * Class Index.
 *
 * @package app
 */
class Index extends \Framework\CLI\Commands\Index
{
    protected function showHeader() : void
    {
        $banner = <<<'EOL'
                _          _                _
               / \   _ __ | |_   _ ___     / \   _ __  _ __
              / _ \ | '_ \| | | | / __|   / _ \ | '_ \| '_ \
             / ___ \| |_) | | |_| \__ \  / ___ \| |_) | |_) |
            /_/   \_\ .__/|_|\__,_|___/ /_/   \_\ .__/| .__/
                    |_|                         |_|   |_|

            EOL;
        CLI::write($banner, CLI::FG_GREEN);
    }
}
