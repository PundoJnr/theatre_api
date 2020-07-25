<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $fillable = [
        'type', 'title','location', 'language', 'synopsis', 'director', 'playwright', 'stage_manager', 'stage_manager', 'crew', 'cast', 'media_link', 'tags', 'genre', 'category', 'price'
    ];
}
