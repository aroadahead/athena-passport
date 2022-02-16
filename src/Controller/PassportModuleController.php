<?php

declare(strict_types=1);

namespace AthenaPassport\Controller;

use Application\Controller\ModuleController;
use AthenaPassport\Service\PassportService;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class PassportModuleController extends ModuleController
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function PassportService(): PassportService
    {
        return $this -> invokeService();
    }
}