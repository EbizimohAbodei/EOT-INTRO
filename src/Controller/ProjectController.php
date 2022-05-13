<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/homepage', name: 'home')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProjectController.php',
        ]);
    }

    #[Route('/otdot', name: 'otto')]
    public function otdot(): Response
    {
        return $this->json([
            'message' => 'redirects to otto\'s page',
        ]);
    }

    #[Route('/filipp', name: 'filipp')]
    public function filipp(): Response
    {
        return $this->json([
            'message' => 'redirects to filipp\'s page',
        ]);
    }

    #[Route('/toni', name: 'toni')]
    public function toni(): Response
    {
        return $this->json([
            'message' => 'redirects to toni\'s page',
        ]);
    }

    #[Route('/ebi', name: 'ebi')]
    public function ebi(): Response
    {
        return $this->json([
            'message' => 'redirects to ebi\'s page',
        ]);
    }
}
