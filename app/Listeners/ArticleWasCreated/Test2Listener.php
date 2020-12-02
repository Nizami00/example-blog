<?php

namespace App\Listeners\ArticleWasCreated;

use App\Events\ArticleWasCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Test2Listener
{
    public function handle(ArticleWasCreated $event)
    {
        var_dump('Called from Test2Listener');
    }
}