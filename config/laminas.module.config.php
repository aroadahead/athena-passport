<?php
declare(strict_types=1);

use AthenaPassport\Controller\Factory\IndexControllerFactory;
use AthenaPassport\Controller\IndexController;
use AthenaPassport\Service\Factory\PassportServiceFactory;
use Laminas\Router\Http\Literal;
use Poseidon\Poseidon;

$lamins = Poseidon ::getCore() -> getLaminasManager();
return [
    'view_manager' => [
        'template_map' => [],
        'template_path_stack' => [
            __DIR__ . '/../view'
        ]
    ],
    'controllers' => [
        'factories' => [
            IndexController::class => IndexControllerFactory::class,
        ]
    ],
    'service_manager' => [
        'factories' => [
            'module.service.athena-passport' => PassportServiceFactory::class,
        ]
    ],
    'translator' => [],
    'view_helpers' => [],
    'router' => [
        'routes' => [
            'passport.alive' => [
                'type' => Literal::class,
                'options' => [
                    'route' => $lamins -> route('alive', 'passport'),
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action' => 'alive',
                    ],
                ],
            ]
        ]
    ]
];