<?php
return [
    'admin,admin/*' => [
        'include_slash' => 'true',
        'template'      => 'admin_template.php',
        'controller'    => 'AdminController',
        'stylesheets'   => [
            'http://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.4.0/metisMenu.min.css',
            'stylesheets/admin.less',
        ],
        'scripts[]'     => [
            '//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.4.0/metisMenu.min.js',
            'scripts/menu.js',
        ],
    ],

    'admin'         => [
        'page' => 'pages/admin.php',
    ],

    'admin/:p' => [
        'page' => 'pages/:p.php',
    ],
];