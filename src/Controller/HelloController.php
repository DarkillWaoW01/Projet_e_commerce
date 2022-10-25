<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    /**
     * @Route("/hello/{nom<[a-zA-Z]+>?World}", name="hello")
     */

    // on aurait aussi pu mettre "/hello/{nom<[a-zA-Z]+>}", name="hello", defaults={"nom":"World"} )

    public function hello(Request $request, $nom)
    {

        return new Response("Hello $nom");
    }
}
