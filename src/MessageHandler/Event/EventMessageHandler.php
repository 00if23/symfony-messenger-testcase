<?php

declare(strict_types=1);

namespace App\MessageHandler\Event;

use App\Message\Event\EventMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * Event handler for EventMessage
 */

 #[AsMessageHandler]
class EventMessageHandler
{
    public function __invoke(EventMessage $message): void
    {
        echo self::class . ' in effect' . PHP_EOL;
    }
}