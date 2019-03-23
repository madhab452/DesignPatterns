<?php

namespace src\Lib\Decorator;

class FileLogger implements Logger
{
    public function log(string $msg): void {
        echo "loggging into file : $msg";
    }
}
