<?php return [
    'plugin' => [
        'name' => 'Короткие ссылки',
        'description' => 'Плагин реализует механизм коротких ссылок на сайте.',
        'author' => 'Андрей Шилов',
    ],
    'permissions' => [
        'settings' => [
            'name' => 'Управление настройками коротких ссылок'
        ],
        'edit' => [
            'name' => 'Управление списком коротких ссылок'
        ]
    ],
    'settings' => [
        'config' => [
            'name' => 'Короткие ссылки',
            'description' => 'Настройки плагина коротких ссылок.'
        ]
    ],
    'models' => [
        'link' => [
            'name' => 'Короткая ссылка',
            'name_plural' => 'Короткие ссылки',
            'attributes' => [
                'id' => 'Id',
                'code' => 'Код',
                'link' => 'Ссылка',
            ],
            'columns' => [
                'id' => [
                    'label' => 'Id'
                ],
                'code' => [
                    'label' => 'Код'
                ],
                'link' => [
                    'label' => 'Ссылка'
                ],
            ],
            'fields' => [
                'id' => [
                    'label' => 'Id'
                ],
                'code' => [
                    'label' => 'Код'
                ],
                'link' => [
                    'label' => 'Ссылка'
                ],
            ],
        ],
        'settings' => [
            'attributes' => [
                'code_length' => 'Длина кода',
            ],
            'fields' => [
                'code_length' => [
                    'label' => 'Длина кода',
                    'description' => '',
                ],
            ]
        ]
    ],
    'formwidgets' => [
        'shortlinkcode' => [
            'name' => 'Генератор коротких ссылок',
            'description' => 'Поле для генерации кода короткой ссылки',
        ]
    ]
];