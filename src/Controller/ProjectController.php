<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {

        $profiles = [["name" => "Ebi", "image" => "http://source.unsplash.com/9SSJx7m_Tbs"], 
                     ["name" => "Filipp", "image" => "http://source.unsplash.com/9SSJx7m_Tbs"], 
                     ["name" => "Otto", "image" => "https://media-exp1.licdn.com/dms/image/C5603AQFeGQRi9rg14Q/profile-displayphoto-shrink_200_200/0/1567242235174?e=1657756800&v=beta&t=qoKcxZYG0H4nN7kVoQC62sL1VqNq_FBfNwRaGZzWkIo"], 
                     ["name" => "Toni", "image" => "http://source.unsplash.com/9SSJx7m_Tbs"]];

        return $this->render("base.html.twig", ["profiles" => $profiles]);
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
