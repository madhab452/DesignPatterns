<?php

namespace src\Lib\Observer;

class Person1 implements User
{
    public function getEmail(): string
    {
        return "abc@example.com";
    }
}
