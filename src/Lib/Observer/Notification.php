<?php

namespace src\Lib\Observer;

class Notification implements Observer
{
    public $list = [];

    public function add(User $user): void {
        $this->list[] = $user;
    }

    public function notify(): void
    {
        /** @var User $list */
        foreach ($this->list as $list){
            echo "sending mail to {$list->getEmail()} ";
        }
    }

    public function updatePrice(int $price): void{
        if($price < 50 || $price > 100){
            $this->notify();
        }
    }
}
