<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
     * @Route("/hello", methods={"GET"})
     */
    public function hello()
    {
        $response = new Response('Hello World');

        return $response;
    }
}