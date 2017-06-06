<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PostSaved;
use App\Events\PostSaving;

class Post extends Model
{
    protected $events = [
        'saved' => PostSaved::class,
        'saving' => PostSaving::class,
    ];
}
