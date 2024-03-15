<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    
    use \Sushi\Sushi;

    protected $rows = [
        [
            'name' => 'apple',
            'price' => 1,
        ],
        [
            'name' => 'banana',
            'price' => 2,
        ],
        [
            'name' => 'mago',
            'price' => 5,
        ]
    ];
}
