<?php

namespace App\Controller;

use App\Entity\Film;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreatFilmController extends AbstractController
{
    /**
     * @Route("/creat/film", name="creat_film")
     */
    public function netflex(Request $request, EntityManagerInterface $entityManagerInterface): JsonResponse
    {
        $data = $request->getContent();
        $data = json_decode($data,true);
        $nom = $data['nom'];
        $synopsis = $data['synopsis'];
        $type = $data['type'];
        $date = new \DateTimeImmutable();

        $film = new Film();
        $film->setNom($nom);
        $film->setSynopsis($synopsis);
        $film->setType($type);
        $film->setDateCreation($date);
        $entityManagerInterface->persist($film);
        $entityManagerInterface->flush();
        return new JsonResponse(Response::HTTP_OK);

    }
}
