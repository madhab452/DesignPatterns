<?php

namespace src\Lib\Command;

class UpdatePrice implements Command
{
    /** @var StockSimulator $sc */
    private $sc;

    public function __construct(StockSimulator $sc)
    {
        $this->sc = $sc;
    }
    public function execute(): void
    {
        $this->sc->update();
    }
}
