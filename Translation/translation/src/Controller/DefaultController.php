<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategoryRepository;

use App\Service\Traduction;

class DefaultController extends AbstractController
{
    #[Route('/{langue}', name: 'app_default')]
    public function index($langue, CategoryRepository $catRep, Traduction $trad): Response
    {
        $data = $catRep->findBy(['unicity'=> 1]);
        $dataTrad = $trad->getTraduction($langue, $data[0]);
        dump($dataTrad);
        return new Response(
            "ok",
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
}
