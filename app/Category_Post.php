<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Post extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $table = 'category_post';
}
