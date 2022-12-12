<?php

namespace App\ServiceTest;

use Cocur\Slugify\Slugify;
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

        $slugify = new Slugify();
        dump($slugify->slugify("Hello World"));

        $this->logger->info("un caclul a lieu");
        dump($this->tva);
        return $prix * 20 / 100;
    }
}
