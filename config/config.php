<?php
return [
    'controllers' => [
        'invokables' => [
            'Acelaya\Index' => 'Acelaya\IndexController'
        ]
    ],

    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'Acelaya\Index',
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => '404',
        'exception_template'       => 'error',
        'layout'                   => 'layout',
        'template_map' => [
            'layout'    => __DIR__ . '/../view/layout.phtml',
            'index'     => __DIR__ . '/../view/index.phtml',
            '404'       => __DIR__ . '/../view/404.phtml',
            'error'     => __DIR__ . '/../view/error.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];