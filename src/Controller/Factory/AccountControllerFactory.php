<?php

namespace AthenaPassport\Controller\Factory;

use AthenaPassport\Controller\AccountController;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class AccountControllerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        return new AccountController($container);
    }
}