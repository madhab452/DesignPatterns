<?php

namespace src\Lib\Observer;

class Person2 implements User
{
    public function getEmail(): string
    {
        return "xyz@example.com";
    }
}
