<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreatFilmController extends AbstractController
{
    /**
     * @Route("/creat/film", name="creat_film")
     */
    public function index(): Response
    {
        return $this->render('creat_film/index.html.twig', [
            'controller_name' => 'CreatFilmController',
        ]);
    }
}
