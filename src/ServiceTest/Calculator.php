<?php

namespace App\ServiceTest;

use Psr\Log\LoggerInterface;

class Calculator
{

    protected $logger;
    protected $tva;

    public function __construct(LoggerInterface $logger, float $tva)
    {

        $this->logger = $logger;
        $this->tva = $tva;
    }

    public function calcul(float $prix): float
    {

        $this->logger->info("un caclul a lieu");
        dump($this->tva);
        return $prix * 20 / 100;
    }
}
