<?php

declare(strict_types=1);

namespace App\MessageHandler\Command;

use App\Message\Command\CommandMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * Event handler for CommandMessage
 */

 #[AsMessageHandler]
class CommandMessageHandler
{
    public function __invoke(CommandMessage $message): void
    {
        echo self::class . ' in effect' . PHP_EOL;
    }
}