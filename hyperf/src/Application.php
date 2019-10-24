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

namespace HyperfCloud\EasyswooleCommand;

use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\CommandContainer;
use Hyperf\Command\Command;
use Hyperf\Contract\ApplicationInterface;
use Symfony\Component\Console\Application as SymfonyApplication;

class Application implements ApplicationInterface
{
    use Singleton;

    protected $commands;

    public function __construct()
    {
        $container = CommandContainer::getInstance();

        $list = $container->getCommandList();

        foreach ($list as $name) {
            $this->commands[] = new EasySwooleCommand($container->get($name));
        }
    }

    public function add(Command $command)
    {
        $this->commands[] = $command;
    }

    public function run()
    {
        $application = new SymfonyApplication();
        foreach ($this->commands as $command) {
            $application->add($command);
        }

        return $application->run();
    }
}
