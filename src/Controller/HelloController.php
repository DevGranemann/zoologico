<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/dinossauro')]
    public function dinossauro(): Response
    {
        return new Response('Olá, dinossauro!');
    }

    #[Route('/mamiferos')]
    public function mamiferos(): Response
    {
        return new Response('Olá, mamíferos!');
    }

    #[Route('/invertebrados')]
    public function invertebrados(): Response
    {
        return new Response('Olá, invertebrados!');
    }

}



