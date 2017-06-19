<?php

return [
    'title'       => 'Users',
    'single'      => 'user',
    'model'       => 'App\User',
    'columns'     => [
        'name'    => [
            'title' => 'Name',
        ],
        'email'   => [
            'title' => 'Email',
        ],
        'isAdmin' => [
            'title' => 'Admin?',
            'output' => function($value) {
                return $value ? 'Yes' : 'No';
            },
        ],
    ],
    'edit_fields' => [
        'name'    => [
            'title' => 'Name',
        ],
        'email'   => [
            'title' => 'Email',
        ],
        'isAdmin' => [
            'type'  => 'bool',
            'title' => 'Admin?',
        ],
    ],
];