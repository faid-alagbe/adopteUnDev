<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class LandingController extends AbstractController
{
    #[Route('/', name: 'app_landing')]
    public function index(): Response
    {
        return $this->render('landing/index.html.twig');
    }

    #[Route('/profil', name: 'app_profil')]
    public function profi(): Response
    {
        return $this->render('profil/profil.html.twig');
    }

    #[Route('/editprofil', name: 'app_editprofil')]
    public function editprofil(): Response
    {
        return $this->render('profil/editprofil.html.twig');
    }

    #[Route('/dev', name: 'target_path')]
    public function homeLogin(): Response
    {
        return $this->render('landing/presentation.html.twig');
    }
}
