<?php

return [
    '__name' => 'lib-psr-3',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-psr-3.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-psr-3' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Psr\\Log' => [
                'type' => 'psr4',
                'base' => 'modules/lib-psr-3/third-party/psr3'
            ]
        ],
        'files' => []
    ]
];