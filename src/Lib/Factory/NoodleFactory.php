<?php
declare(strict_types = 1);
namespace src\Lib\Factory;

class NoodleFactory
{
    public function create(string $type) : Noodle
    {
        switch ($type){
            case 'white':
                return new WaiWai( new Flavor());
                break;
            case 'red':
                return new Rara(new Flavor('vegiterian'));
                break;
            default:
                throw new \Exception("Sorry we dont produce such noodle");
        }
    }
}
