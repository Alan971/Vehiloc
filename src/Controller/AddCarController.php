<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddCarController extends AbstractController
{
    #[Route('/add/car', name: 'app_add_car')]
    public function index(): Response
    {
        return $this->render('add_car/index.html.twig', [
            'controller_name' => 'AddCarController',
        ]);
    }
}
