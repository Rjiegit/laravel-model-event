<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PostSaved;
use App\Events\PostSaving;
use App\Events\PostUpdated;
use App\Events\PostUpdating;

class Post extends Model
{
    protected $events = [
        'saved' => PostSaved::class,
        'saving' => PostSaving::class,
        'updated' => PostUpdated::class,
        'updating' => PostUpdating::class,
    ];
}
