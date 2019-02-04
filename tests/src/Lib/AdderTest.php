<?php
declare(strict_types=1);
namespace tests\src\Lib;

use src\Lib\Adder;
use PHPUnit\Framework\TestCase;

final class AdderTest extends TestCase {
    public function testAdd(){
        $this->assertEquals(3, Adder::add(1,2));
    }
}
