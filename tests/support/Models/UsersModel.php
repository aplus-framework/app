<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\support\Models;

use Framework\MVC\Model;

class UsersModel extends Model
{
    public function foo() : string
    {
        return 'foo';
    }
}
