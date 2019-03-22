<?php

require __DIR__."/../vendor/autoload.php";

//------------ Logger -----------------//

$logger1 = \src\Lib\Logger::getInstance();
$logger1->log("foo \n");

//------------------------------------//
