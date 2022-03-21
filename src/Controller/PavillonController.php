<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PavillonController extends AbstractController
{
    #[Route('/pavillon', name: 'app_pavillon')]
    public function index(): Response
    {
        return $this->render('pavillon/index.html.twig', [
            'controller_name' => 'PavillonController',
        ]);
    }
}
