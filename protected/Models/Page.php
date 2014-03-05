<?php

namespace App\Models;

use T4\Orm\Model;

class Page
    extends Model
{

    static protected $schema = [
        'columns' => [
            'title' => [
                'type' => 'string',
            ],
            'url' => [
                'type' => 'string',
            ],
            'text' => [
                'type' => 'text',
                'length' => 'big',
            ],
            'order' => [
                'type' => 'int'
            ],
        ],
    ];

    static protected $extensions = ['tree'];

}