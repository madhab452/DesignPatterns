<?php
declare(strict_types=1);
namespace src\Lib\Factory;

class Flavor
{
    /** @var string $name */
    private $name;

    public function __construct($name = null)
    {
        if(null === $name){
            $this->name = 'chicken';
        }else {
            $this->name = $name;
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

}
