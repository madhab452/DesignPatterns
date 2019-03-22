<?php
namespace src\Lib\Strategy;

use src\Lib\Strategy\Commission\CommissionStrategy;
use src\Lib\Strategy\Commission\kumariCommission;
use src\Lib\Strategy\Commission\NabilCommission;

class CommissionCalculator
{

    public function getStrategy(PayoutClient $client): CommissionStrategy
    {
        if($client instanceof Nabil){
            return new NabilCommission();
        }
        if($client instanceof Kumari){
            return new kumariCommission();
        }
    }
}
