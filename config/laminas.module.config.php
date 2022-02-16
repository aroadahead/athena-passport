<?php
declare(strict_types=1);

use AthenaPassport\Controller\AccountController;
use AthenaPassport\Controller\DashboardController;
use AthenaPassport\Controller\Factory\AccountControllerFactory;
use AthenaPassport\Controller\Factory\DashboardControllerFactory;
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
            DashboardController::class => DashboardControllerFactory::class,
            AccountController::class => AccountControllerFactory::class
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
            ],
            'passport.dashboard' => [
                'type' => Literal::class,
                'options' => [
                    'route' => $lamins -> route('dashboard', 'passport'),
                    'defaults' => [
                        'controller' => DashboardController::class,
                        'action' => 'index'
                    ]
                ]
            ],
            'passport.account' => [
                'type' => Literal::class,
                'options' => [
                    'route' => $lamins -> route('account', 'passport'),
                    'defaults' => [
                        'controller' => AccountController::class,
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ]
];