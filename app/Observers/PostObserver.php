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

    public function updated(Post $post)
    {
        $log = new log;
        $log->content = "updated!!!";
        $log->save();
    }

    public function updating(Post $post)
    {
        $log = new log;
        $log->content = "updating!!!";
        $log->save();
    }

    public function deleting(Post $post)
    {
        $log = new log;
        $log->content = "deleting!!!";
        $log->save();
    }

    public function deleted(Post $post)
    {
        $log = new log;
        $log->content = "deleted!!!";
        $log->save();
    }
}