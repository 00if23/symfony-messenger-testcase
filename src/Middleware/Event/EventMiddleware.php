<?php

declare(strict_types=1);

namespace App\Middleware\Event;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Middleware\MiddlewareInterface;
use Symfony\Component\Messenger\Middleware\StackInterface;

class EventMiddleware implements MiddlewareInterface
{
    public function handle(Envelope $envelope, StackInterface $stack): Envelope
    {
        echo self::class . ' in effect' . PHP_EOL;

        return $stack->next()->handle($envelope, $stack);
    }
}