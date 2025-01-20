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
        $users =
        [
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],
            ['name' => 'fulano de tal', 'phone' => '(49) 9 9188-9910'],

        ];

        return $this->render('hello/homepage.html.twig', [
            
            'title' => 'Home Page',
            'users' => $users,

        ]);
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



