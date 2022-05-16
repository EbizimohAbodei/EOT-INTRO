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
                     ["name" => "Filipp", "image" => "https://scontent-arn2-1.xx.fbcdn.net/v/t1.6435-9/36786402_2220990794797480_8918722842544046080_n.jpg?_nc_cat=101&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=pRJiCCFU_KoAX8XW2Dv&_nc_ht=scontent-arn2-1.xx&oh=00_AT8NIJvS5h3RjaLWKmXSzsEczQrPIsbWMvSGmofFVPN69w&oe=62A5ED62"], 
                     ["name" => "Otto", "image" => "https://media-exp1.licdn.com/dms/image/C5603AQFeGQRi9rg14Q/profile-displayphoto-shrink_200_200/0/1567242235174?e=1657756800&v=beta&t=qoKcxZYG0H4nN7kVoQC62sL1VqNq_FBfNwRaGZzWkIo"], 
                     ["name" => "Toni", "image" => "https://avatars.githubusercontent.com/u/54765887?v=4"]];

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
        return $this->render("pages/filipp.html.twig");
    }

    #[Route('/toni', name: 'toni')]
    public function toni(): Response
    {
        return $this->render("pages/toni.html.twig");
    }

    #[Route('/ebi', name: 'ebi')]
    public function ebi(): Response
    {
        return $this->render("pages/ebi.html.twig");
    }
}
