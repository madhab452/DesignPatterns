<?php

namespace src\Lib\Strategy;

use src\Lib\Strategy\Commission\NabilComission;

class Nabil implements PayoutClient {

    private $name = "Nabil";

    public function getName(): string
    {
        return $this->name;
    }
}
