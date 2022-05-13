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
        return $this->render("pages/otto.html.twig");
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
        $info = [
            'name' => 'Toni',
            'age' => 35
        ];
        return $this->render("pages/toni.html.twig");
    }

    #[Route('/ebi', name: 'ebi')]
    public function ebi(): Response
    {
        return $this->json([
            'message' => 'redirects to ebi\'s page',
        ]);
    }
}
