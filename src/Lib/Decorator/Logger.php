<?php

namespace src\Lib\Decorator;

interface Logger
{
    public function log(string $msg): void;
}
