<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Command;

use EasySwoole\EasySwoole\Command\CommandInterface;

class DemoCommand implements CommandInterface
{
    public function commandName(): string
    {
        return 'demo:command';
    }

    public function exec(array $args): ?string
    {
        var_dump('Hello World');

        return 'success';
    }

    public function help(array $args): ?string
    {
        return 'help';
    }
}
