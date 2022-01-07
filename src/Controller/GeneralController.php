<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("", name="home")
     */
    public function index(): Response
    {
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

    /**
     * @Route("/liste", name="list")
     */
    public function list(FilmRepository $filmRepository): Response
    {
        $films = $filmRepository->findAll();
        return $this->render('film/list.html.twig', [
            'controller_name' => 'GeneralController',
            "films"=>$films
        ]);
    }
}
