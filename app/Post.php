<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PostSaved;

class Post extends Model
{
    protected $events = [
        'saved' => PostSaved::class,
        'saving' => PostSaving::class,
    ];
}
