<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(Request $request, VoitureRepository $repository): Response
    {
        $Voitures = $repository->findAll();
        
        return $this->render('main/index.html.twig', [
            'Voitures' => $Voitures,
        ]);
    }
}
