<?php

namespace App\Controller;

use App\ServiceTest\Calculator;
use App\ServiceTest\Detector;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController
{

    /**
     * @Route("/hello/{nom<[a-zA-Z]+>?World}", name="hello")
     */

    // on aurait aussi pu mettre "/hello/{nom<[a-zA-Z]+>}", name="hello", defaults={"nom":"World"} )

    public function hello(Request $request, $nom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig, Detector $detector): Response
    {

        dump($detector->detect(101));
        dump($detector->detect(10));
        dump($twig);

        $logger->error("coucou");

        dump($calculator->calcul(100));

        return new Response("Hello $nom");
    }
}
