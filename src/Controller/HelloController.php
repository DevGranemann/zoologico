<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/pessoa/{nome}')]
    public function nome(string $nome=null): Response
    {
        $newNome = str_replace("-", " ", $nome);
        return new Response('Olá, ' . $newNome . '!');
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace("-", " ", $slug);
        return new Response('Olá, ' . $newSlug . '!'); 
    }

}



