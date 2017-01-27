<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'articulador' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'contratante' => [
            'profile' => 'r,u'
        ],

        'professor' => [
            'users' => 'r',
            'profile' => 'r,u'
        ],
        
        'unidadeEnsino' => [
            'users' => 'r',
            'profile' => 'r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
