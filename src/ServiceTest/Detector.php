<?php

namespace App\ServiceTest;

class Detector
{

    protected $seuil;

    public function __construct(float $seuil)
    {
        $this->seuil = $seuil;
    }

    public function detect(float $prix): bool
    {
        if ($prix >= $this->seuil){
            return true;
        }
        else{
            return false;
        }
    }
}
