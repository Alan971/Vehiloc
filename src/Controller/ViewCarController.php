<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Voiture;

#[Route('/view/car')]
class ViewCarController extends AbstractController
{
    #[Route('/{id}', name: 'app_view_car', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(?Voiture $Voiture): Response
    {
        if(isset($Voiture)){
            return $this->render('view_car/showone.html.twig', [
                'Voiture' => $Voiture,
            ]);
        }
        return $this->redirectToRoute('app_main');

    }
}
