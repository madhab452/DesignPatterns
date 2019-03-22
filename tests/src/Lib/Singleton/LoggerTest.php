<?php
declare(strict_types=1);
namespace tests\src\Lib;

use PHPUnit\Framework\TestCase;
use src\Lib\Singleton\Logger;

final class LoggerTest extends TestCase {
    public function test(){
        $logger1 = Logger::getInstance();

        $logger2 = Logger::getInstance();

        $this->assertEquals($logger1, $logger2);
    }
}
