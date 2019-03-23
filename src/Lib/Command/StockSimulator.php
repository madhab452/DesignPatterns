<?php
/**
 * Created by PhpStorm.
 * User: madhab452
 * Date: 3/24/19
 * Time: 12:19 AM
 */

namespace src\Lib\Command;

/**
 * RECEIVER
 * Class StockSimulator
 * @package src\Lib\Command
 */
class StockSimulator
{
    private $persistanceObject;
    private $notificationService;

    public function update()
    {
        //$this->persistanceObject->save();
        echo "saving to db";
    }

    public function notify()
    {
        //$this->notificationService->notify();
        echo "mailing to user";
    }
}
