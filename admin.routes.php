<?php
use Leap\Plugins\Admin\Controllers\AdminController;

return [
    'GROUP admin' => [
        '(/**)' => [
            'abstract'   => true,
            'parameters' => [
                'stylesheets[]' => [
                    'http://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.4.0/metisMenu.min.css',
                    'url:stylesheets/admin.less'
                ],
                'scripts[]'     => [
                    '//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.4.0/metisMenu.min.js',
                    'url:scripts/menu.js'
                ],
            ]
        ],

        '' => [
            'callback'   => AdminController::class . '@renderPage',
            'parameters' => [
                'page' => 'file:pages/admin.php',
            ]
        ],

        '/{page}' => [
            'callback'   => AdminController::class . '@renderPage',
            'parameters' => [
                'page' => 'file:pages/{page}.php'
            ]
        ]
    ]
];
