<?php

namespace App\ServiceTest;

use Psr\Log\LoggerInterface;

class Calculator
{

    protected $logger;

    public function __construct(LoggerInterface $logger)
    {

        $this->logger = $logger;
    }

    public function calcul(float $prix): float
    {

        $this->logger->info("un caclul a lieu");
        return $prix * 20 / 100;
    }
}
