<?php

namespace AthenaPassport\Controller\Factory;

use AthenaPassport\Controller\DashboardController;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class DashboardControllerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new DashboardController($container);
    }
}