<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Repository\VoitureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/main')]
class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(VoitureRepository $repository): Response
    {
        $Voitures = $repository->findAll();
        
        return $this->render('main/index.html.twig', [
            'Voitures' => $Voitures,
        ]);
    }

    #[Route('/{id}', name: 'app_main_remove', requirements: ['id' => '\d+'], methods:['GET', 'POST'])]
    public function removeCar(?Voiture $Voiture, EntityManagerInterface $manager): Response
    {
        //suppression de la voiture si elle existe
        if(isset($Voiture)){
            $manager->remove($Voiture);
            $manager->flush();
        }
        //retour à la page
        return $this->redirectToRoute('app_main');
    }

}
