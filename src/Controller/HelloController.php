<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController
{
    #[Route('/pessoa/{nome}')]
    public function nome(string $nome=null): Response
    {
        $newNome = str_replace("-", " ", $nome);
        $newNome = u($newNome)->title(true);
        return new Response('Olá, ' . $newNome . '!');
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace("-", " ", $slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, ' . $newSlug . '!'); 
    }

    //essa foi uma aula sobre ROTAS CORINGAS
    //e também RECEBER UM VALOR PELA URL

}



