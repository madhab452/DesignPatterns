<?php

namespace src\Lib\Adapter;

class PersonAdapter implements Person
{
    /** @var PersonApi $api */
    private $api;

    public function __construct(PersonApi $api)
    {
        $this->api = $api;
    }

    public function getName(): string
    {
        return $this->api->getFirstName() . " " . $this->api->getLastName();
    }
}
