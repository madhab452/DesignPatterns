<?php

namespace src\Lib\Facade;

class DBService
{
    public function publish(Post $post)
    {
        $post->setStatus('publish');
        // save it to some persistance mechanism
        echo "Saving it to the db";
    }
}
