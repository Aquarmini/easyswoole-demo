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

use EasySwoole\EasySwoole\Command\CommandContainer;
use App\Command\{DemoCommand, Demo2Command};
use HyperfCloud\EasyswooleCommand\Application;

CommandContainer::getInstance()->set(new DemoCommand());
Application::getInstance()->add(new Demo2Command());
