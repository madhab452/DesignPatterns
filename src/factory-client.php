<?php
require __DIR__."/../vendor/autoload.php";

$noodleFactory = new \src\Lib\Factory\NoodleFactory();

echo $noodleFactory->create('white')->get();

echo "\n";
echo $noodleFactory->create('red')->get();
echo "\n";
