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
    'database option' => [
        'contains' => 'database',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'services',
            'cache',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'cache option' => [
        'contains' => 'cache',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'services',
            'database',
            'session',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'session option' => [
        'contains' => 'session',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'services',
            'database',
            'cache',
            'queue',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'queue option' => [
        'contains' => 'queue',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'services',
            'database',
            'cache',
            'session',
            'view',
            'logging',
            'filesystems'
        ]
    ],
    'view option' => [
        'contains' => 'view',
        'notContains' => [
            'hashing',
            'app',
            'mail',
            'services',
            'database',
            'cache',
            'session',
            'queue',
            'logging',
            'filesystems'
        ]
    ],
    'logging option' => [
        'contains' => 'logging',
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
            'filesystems'
        ]
    ],
    'filesystems option' => [
        'contains' => 'filesystems',
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
        ]
    ],
];

