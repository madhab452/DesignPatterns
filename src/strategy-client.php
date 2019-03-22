<?php
namespace src;

use src\Lib\Strategy\CommissionCalculator;
use src\Lib\Strategy\Kumari;
use src\Lib\Strategy\Nabil;

require __DIR__."/../vendor/autoload.php";

$commissionCalculator = new CommissionCalculator();
$strategy = $commissionCalculator->getStrategy(new Nabil());

//100 is added to amount
echo $strategy->calculateCommission(100);
echo "\n";

//10% is added to amount
$strategy = $commissionCalculator->getStrategy(new Kumari());
echo $strategy->calculateCommission(200);
echo "\n";
