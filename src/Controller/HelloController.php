<?php

namespace App\Controller;

use App\ServiceTest\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/hello/{nom<[a-zA-Z]+>?World}", name="hello")
     */

    // on aurait aussi pu mettre "/hello/{nom<[a-zA-Z]+>}", name="hello", defaults={"nom":"World"} )

    public function hello(Request $request, $nom, LoggerInterface $logger): Response
    {

        $logger->error("coucou");

        dump($this->calculator->calcul(100));

        return new Response("Hello $nom");
    }
}
