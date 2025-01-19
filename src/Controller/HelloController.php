<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render('hello/homepage.html.twig', []);
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



