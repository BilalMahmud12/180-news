<?php return [
    'plugin' => [
        'name' => 'Short Link',
        'description' => 'The plugin implements the mechanism of short links inside the site.',
        'author' => 'Andrei Shilov',
    ],
    'permissions' => [
        'settings' => [
            'name' => 'Manage Short Link settings'
        ],
        'edit' => [
            'name' => 'Editing of Short Link list'
        ]
    ],
    'settings' => [
        'config' => [
            'name' => 'Short Link',
            'description' => 'Short Link settings'
        ]
    ],
    'models' => [
        'link' => [
            'name' => 'Short Link',
            'name_plural' => 'Short Links',
            'attributes' => [
                'id' => 'Id',
                'code' => 'Code',
                'link' => 'Link',
            ],
            'columns' => [
                'id' => [
                    'label' => 'Id'
                ],
                'code' => [
                    'label' => 'Code'
                ],
                'link' => [
                    'label' => 'Link'
                ],
            ],
            'fields' => [
                'id' => [
                    'label' => 'Id'
                ],
                'code' => [
                    'label' => 'Code'
                ],
                'link' => [
                    'label' => 'Link'
                ],
            ],
        ],
        'settings' => [
            'attributes' => [
                'code_length' => 'Code Length',
            ],
            'fields' => [
                'code_length' => [
                    'label' => 'Code length',
                    'description' => '',
                ],
            ]
        ]
    ],
    'formwidgets' => [
        'shortlinkcode' => [
            'name' => 'Short Link code generator',
            'description' => 'Field for generating short link code',
        ]
    ]
];