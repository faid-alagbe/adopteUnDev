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

    #[Route('/login1', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('authentification/login.html.twig');
    }

    #[Route('/register1', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('authentification/register.html.twig');
    }
}
