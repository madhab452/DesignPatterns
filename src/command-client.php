<?php

namespace src;

use src\Lib\Command\Invoker;
use src\Lib\Command\NotifyUser;
use src\Lib\Command\UpdatePrice;

require __DIR__ . "/../vendor/autoload.php";

$obj = new Invoker();
$obj->invoke(NotifyUser::class, 20);
echo "\n";
$obj->invoke(UpdatePrice::class, 20);
echo "\n";
