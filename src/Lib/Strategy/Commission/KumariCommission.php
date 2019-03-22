<?php
namespace src\Lib\Strategy\Commission;

class kumariCommission implements CommissionStrategy
{
    public function calculateCommission(float $amt): float
    {
        return $amt + $amt * 0.1;
    }
}
