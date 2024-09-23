<?php

declare(strict_types=1);

namespace App\Controller;

use App\Message\Event\PlatformUserInteractionMessage;
use App\Message\WorkflowProcessor\WorkflowRunMessage;
use Doctrine\Migrations\Exception\NoMigrationsToExecute;
use Doctrine\Migrations\Version\AliasResolver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

/**
 * @codeCoverageIgnore
 * @infection-ignore-all
 */
#[AsController]
class HealthcheckController extends AbstractController
{
    public function __construct(
        private readonly MessageBusInterface $bus,
    )
    {
    }

    #[Route('/test', name: 'test')]
    public function test(): Response
    {
        $this->bus->dispatch(new WorkflowRunMessage);
        $this->bus->dispatch(new PlatformUserInteractionMessage);


        return new
            Response('OK');
    }
}
