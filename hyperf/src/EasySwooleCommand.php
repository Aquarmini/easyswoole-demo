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

use EasySwoole\EasySwoole\Command\CommandInterface;
use Hyperf\Command\Command;

class EasySwooleCommand extends Command
{
    protected $command;

    public function __construct(CommandInterface $command)
    {
        parent::__construct($command->commandName());
        $this->command = $command;
    }

    public function handle()
    {
        $args = $_SERVER['argv'];
        array_shift($args);

        $result = $this->command->exec($args);

        $this->output->success($result);
    }
}
