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

use App\Command\Demo2Command;
use App\Command\DemoCommand;
use EasySwoole\EasySwoole\Command\CommandContainer;
use HyperfCloud\EasyswooleCommand\Application;

CommandContainer::getInstance()->set(new DemoCommand());
Application::getInstance()->add(new Demo2Command());
