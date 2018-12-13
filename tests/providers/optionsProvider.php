<?php

return [
    'auth option' => [
        'contains' => 'auth',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'services',
            'database',
            'cache',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'hashing option' => [
        'contains' => 'hashing',
        'notContains' => [
            'auth',
            'app',
            'mail',
            'services',
            'database',
            'cache',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'app option' => [
        'contains' => 'app',
        'notContains' => [
            'auth',
            'hashing',
            'mail',
            'services',
            'database',
            'cache',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'mail option' => [
        'contains' => 'mail',
        'notContains' => [
            'hashing',
            'app',
            'services',
            'database',
            'cache',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'services option' => [
        'contains' => 'services',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'database',
            'cache',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
];

