<?php

namespace App;

use App\User;
use App\Category;
use App\Response;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $dates = [
        'created_at'
    ];

    protected $guarded = [
        'id'
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function responses()
    {
        return $this->hasMany('App\Response');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

}
