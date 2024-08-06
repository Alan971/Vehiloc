<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Form\VoitureType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddCarController extends AbstractController
{
    #[Route('/add/car', name: 'app_add_car', methods:['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $Voiture = new Voiture;
        $form = $this->createForm(VoitureType::class, $Voiture);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
        
            $manager->persist($Voiture);
            $manager->flush();

            return $this->redirectToRoute('app_main');
        }

        return $this->render('add_car/index.html.twig', [
            'form' => $form,
        ]);
    }
}
