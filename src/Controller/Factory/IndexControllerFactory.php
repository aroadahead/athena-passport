<?php
declare(strict_types=1);

namespace AthenaPassport\Controller\Factory;

use AthenaPassport\Controller\IndexController;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use ReflectionException;

class IndexControllerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     * @throws ReflectionException
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): IndexController
    {
        return new IndexController($container);
    }
}