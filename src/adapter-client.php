<?php
namespace src;

use src\Lib\Adapter\PersonAdapter;
use src\Lib\Adapter\PersonApi;

require __DIR__."/../vendor/autoload.php";

$personApi = new PersonApi();

$personApi->setFirstName("Madhab");

$personApi->setLastName("Acharya");

$personAdapter = new PersonAdapter($personApi);

echo $personAdapter->getName();
