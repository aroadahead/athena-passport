<?php

namespace AthenaPassport\Service\Factory;

use AthenaPassport\Service\PassportService;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class PassportServiceFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new PassportService($container);
    }
}