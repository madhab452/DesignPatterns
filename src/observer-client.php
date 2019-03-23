<?php

namespace src;

use src\Lib\Observer\Notification;
use src\Lib\Observer\Person1;
use src\Lib\Observer\Person2;

require __DIR__ . "/../vendor/autoload.php";

$notification = new Notification();

$notification->add(new Person1());
$notification->add(new Person2());

$notification->updatePrice(32);
