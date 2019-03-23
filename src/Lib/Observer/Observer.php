<?php

namespace src\Lib\Observer;

interface Observer
{
    public function add(User $user): void;
    public function notify(): void;
}
