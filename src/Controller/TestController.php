<?php

namespace App\Controller;

use App\ServiceTest\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TestController
{

    /**
     * @Route("/", name="index")
     */

    public function index()
    {
        dd("route index");
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost")
     */

    public function test(Request $request, $age, Calculator $calculator)
    {
        var_dump($age);
        // $request = Request::createFromGlobals();

        // dump($request);
        // echo "\n";

        //$age = $request->query->get('age', 0);

        // $age = $request->attributes->get('age');

        dump($calculator->calcul(100));

        return new Response("j'ai $age ans");
    }
}
