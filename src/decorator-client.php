<?php
namespace src;
use src\Lib\Decorator\EmailLogger;
use src\Lib\Decorator\FileLogger;

require __DIR__."/../vendor/autoload.php";

$filerLogger = new FileLogger();

$filerLogger = new EmailLogger($filerLogger);

$filerLogger->log("MESSAGE");
