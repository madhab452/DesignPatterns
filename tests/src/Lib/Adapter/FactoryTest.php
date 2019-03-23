<?php
declare(strict_types=1);
namespace tests\src\Lib;

use PHPUnit\Framework\TestCase;
use src\Lib\Adapter\PersonAdapter;
use src\Lib\Adapter\PersonApi;

final class AdapterTest extends TestCase {

    public function testAdapterFactory(){
        $personApi =  $this->createMock(PersonApi::class);

        $personApi->method('getFirstName')->willReturn('Madhab');

        $personApi->method('getLastName')->willReturn('Acharya');

        $personAdapter = new PersonAdapter($personApi);

        $this->assertSame("Madhab Acharya", $personAdapter->getName());
    }
}
