<?php
declare(strict_types = 1);
namespace src\Lib\Factory;

class Rara implements Noodle {

    /** @var Flavor $flavor */
    private $flavor;

    /** @var $name */
    private $name;

    public function __construct(Flavor $flavor)
    {
        $this->flavor = $flavor;
        $this->name  = 'Rara';
    }

    public function get(): string
    {
        return "{$this->name} noodle with {$this->flavor->getName()} flavor is ready";
    }
}
