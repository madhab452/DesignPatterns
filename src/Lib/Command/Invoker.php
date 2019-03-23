<?php

namespace src\Lib\Command;

/**
 * INVOKER
 * Class Invoker
 * @package src\Lib\Command
 */
class Invoker
{
    /**
     * @param UpdatePrice|NotifyUser $class
     * @param int $price
     */
    public function invoke($class, int $price)
    {
        $obj = new $class(new StockSimulator(), $price);
        $obj->execute();
    }
}
