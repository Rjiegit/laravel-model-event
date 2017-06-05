<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $events = [
        'saved' => PostSaved::class,
    ];
}
