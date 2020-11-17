<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'prexc_activities' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d'
        ],
        'user' => [
            'profile' => 'r,u',
            'prexc_activities' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
        ],
        'guest' => [
            'prexc_activities' => 'r',
            'projects' => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
