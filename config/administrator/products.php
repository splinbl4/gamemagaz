<?php
return [
    'title' => 'Products',
    'single' => 'product',
    'model' => 'App\Product',
    'columns' => [
        'id',
        'name',
        'description',
        'image' => [
            'output' => '<img src="/img/cover/small/(:value)"/>',
        ],
        'price',
        'category_id',
    ],
    'edit_fields' => [
        'name' => [
            'type' => 'text'
        ],
        'description' => [
            'type' => 'text'
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path().'/img/cover/',
            'sizes' => [
                [100, 100, 'auto', public_path().'/img/cover/small/', 100]
            ]
        ],
        'price' => [
            'type' => 'number'
        ],
        'category_id' => [
            'type' => 'number'
        ]
    ],
];