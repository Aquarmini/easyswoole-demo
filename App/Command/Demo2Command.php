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

use Hyperf\Command\Command;

class Demo2Command extends Command
{
    public function __construct()
    {
        parent::__construct('demo:command2');
    }

    public function handle()
    {
        var_dump('Hello Hyperf Command.');
    }
}
