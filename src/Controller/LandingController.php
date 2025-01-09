<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\ProfilsDev;
use App\Form\ProfilsDevType;
use App\Repository\ProfilsDevRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class LandingController extends AbstractController
{
    #[Route('/', name: 'app_landing')]
    public function index(): Response
    {
        return $this->render('landing/index.html.twig');
    }

    public function showDevProfile(): Response
    {
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        // Vérifier que l'utilisateur est bien une instance de User
        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }

        // Vérifier que l'utilisateur est bien un développeur et qu'il a un profil
        if ($user->getRole() !== 'ROLE_DEV' || !$user->getProfilsDev()) {
            throw $this->createNotFoundException('Profil développeur introuvable pour cet utilisateur.');
        }

        // Récupérer le profil développeur
        $profilsDev = $user->getProfilsDev();

        // Retourner une réponse (ou rendre une vue)
        return $this->render('dev/profile.html.twig', [
            'profile' => $profilsDev,
        ]);
    }


    #[Route('/profil', name: 'app_profil')]
    public function profi(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }

        if ($user->getRole() !== 'ROLE_DEV' || !$user->getProfilsDev()) {
            throw $this->createNotFoundException('Profil développeur introuvable pour cet utilisateur.');
        }

        $profilsDev = $user->getProfilsDev();

        return $this->render('profil/profil.html.twig', [
            'profile' => $profilsDev,
        ]);
    }

    #[Route('/{id}', name: 'app_profils_dev_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProfilsDev $profilsDev, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProfilsDevType::class, $profilsDev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_profils_dev_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('profil/editprofil.html.twig', [
            'profils_dev' => $profilsDev,
            'form' => $form,
        ]);
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