<?php

namespace src\Lib\Command;

class NotifyUser implements Command
{
    /** @var StockSimulator $sc */
    private $sc;

    public function __construct(StockSimulator $sc)
    {
        $this->sc = $sc;
    }

    public function execute(): void {
        $this->sc->notify();
    }
}
