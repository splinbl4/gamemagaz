<?php
return [
    'title' => 'Categories',
    'single' => 'category',
    'model' => 'App\Category',
    'columns' => [
        'id',
        'name',
        'description',
    ],
    'edit_fields' => [
        'name' => [
            'type' => 'text'
        ],
        'description' => [
            'type' => 'text'
        ],
    ],
];