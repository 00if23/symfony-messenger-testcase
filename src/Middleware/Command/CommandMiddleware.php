<?php

declare(strict_types=1);

namespace App\Middleware\Command;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Middleware\MiddlewareInterface;
use Symfony\Component\Messenger\Middleware\StackInterface;

class CommandMiddleware implements MiddlewareInterface
{
    public function handle(Envelope $envelope, StackInterface $stack): Envelope
    {
        echo self::class . ' in effect' . PHP_EOL;

        return $stack->next()->handle($envelope, $stack);
    }
}