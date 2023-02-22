<?php

// clic gauche generer le namespace
namespace App\Zfoundation\HttpKernel;

// On importe la class de Response
use Symfony\Component\HttpFoundation\Response;

abstract class HttpKernel implements HttpKernelInterface{

    /**
     * Cette methode du noyau lui permet de soumettre la requete 
     * et de récuperer la réponse correspondante
     *
     * @return Response
     */
    public function handleRequest() : Response {
        return new Response("Hello world");
    }
}

