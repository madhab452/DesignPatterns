<?php
declare(strict_types=1);
namespace tests\src\Lib;

use \Exception;
use PHPUnit\Framework\TestCase;
use src\Lib\Factory\NoodleFactory;

final class FactoryTest extends TestCase {

    public function testNoodleFactory(){
        /** @var NoodleFactory $noodleFactory */
        $noodleFactory = new NoodleFactory();

        $this->assertSame(
            'Rara noodle with vegiterian flavor is ready',
            $noodleFactory->create('red')->get()
        );

        $this->expectException(Exception::class);
        $noodleFactory->create('blue')->get();
    }
}
