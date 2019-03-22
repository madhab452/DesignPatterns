<?php

namespace src\Lib\Strategy;

class Kumari implements PayoutClient {

    private $name = "Nabil";

    public function getName(): string
    {
        return $this->name;
    }
}
