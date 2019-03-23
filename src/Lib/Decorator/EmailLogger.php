<?php

namespace src\Lib\Decorator;

class EmailLogger implements Logger
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $msg): void {
        echo "Logging into email : $msg";
        $this->logger->log($msg);
    }
}
