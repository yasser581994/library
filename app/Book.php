<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
       'name', 'desc', 'img', 'price', 'author_id'
    ];

    public function Author()
    {
        return $this->belongsTo('App\Author');
    }
}
