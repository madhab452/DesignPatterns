<?php

namespace src\Lib\Facade;

class LogService
{
    public function log(string $message): void
    {
        // logs that the post is updated
        echo "Logging the update";
    }
}
