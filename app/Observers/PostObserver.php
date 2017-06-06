<?php

namespace App\Observers;

use App\Post;
use App\Log;

class PostObserver
{
    public function created(Post $post)
    {
        $log = new log;
        $log->content = "created!!!";
        $log->save();
    }

    public function creating(Post $post)
    {
        $log = new log;
        $log->content = "creating!!!";
        $log->save();
    }
}