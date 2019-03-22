<?php
namespace src\Lib\Strategy\Commission;

interface CommissionStrategy
{
    public function calculateCommission(float $amt): float ;
}
