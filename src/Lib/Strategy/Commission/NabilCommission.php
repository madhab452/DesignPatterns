<?php
namespace src\Lib\Strategy\Commission;

class NabilCommission implements CommissionStrategy
{
    public function calculateCommission(float $amt): float
    {
        return $amt + 10;
    }
}
