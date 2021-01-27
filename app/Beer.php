<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
            'title',
            'type',
            'origin',
            'description',
            'price',
            'slug',
            'path_img'
    ];
}
