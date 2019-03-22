<?php
declare(strict_types=1);
namespace tests\src\Lib;

use PHPUnit\Framework\TestCase;
use src\Lib\Strategy\CommissionCalculator;
use src\Lib\Strategy\Kumari;
use src\Lib\Strategy\Nabil;

final class StrategyTest extends TestCase {
    public function testStrategy(){
        $commissionCalculator = new CommissionCalculator();
        $strategy = $commissionCalculator->getStrategy(new Nabil());

        $this->assertSame(110.0, $strategy->calculateCommission(100));

        $strategy = $commissionCalculator->getStrategy(new Kumari());
        $this->assertSame(550.0, $strategy->calculateCommission(500));

    }
}
