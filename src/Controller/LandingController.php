<?php

namespace App\Controller;

use App\Entity\Company;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\ProfilsDev;
use App\Form\CompanyType;
use App\Form\ProfilsDevType;
use App\Repository\ProfilsDevRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class LandingController extends AbstractController
{
    #[Route('/', name: 'app_landing')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->render('landing/index.html.twig');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }

        if ($user->getRole() === 'ROLE_DEV') {
            return $this->redirectToRoute('target_path');
        }

        return $this->redirectToRoute('target_pathComapany');
    }

    #[Route('/profil', name: 'app_profil', methods: ['GET', 'POST'])]
    public function profi(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }

        if ($user->getRole() !== 'ROLE_DEV' || !$user->getProfilsDev()) {
            $profilsDev = new ProfilsDev();
            $form = $this->createForm(ProfilsDevType::class, $profilsDev);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
              
                $profilsDev->setUser($user);
                $entityManager->persist($profilsDev);
                $entityManager->flush();

                return $this->redirectToRoute('app_profil', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('profils_dev/new.html.twig', [
                'profils_dev' => $profilsDev,
                'form' => $form,
            ]);
            /* throw $this->createNotFoundException('Profil développeur introuvable pour cet utilisateur.'); */
        }

        $profilsDev = $user->getProfilsDev();

        return $this->render('profil/profil.html.twig', [
            'profile' => $profilsDev,
        ]);
    }

    #[Route('/companyProfil', name: 'app_profil_company', methods: ['GET', 'POST'])]
    public function profiCompagni(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }

        if ($user->getRole() !== 'ROLE_COMPANY' || !$user->getCompany()) {
            $profilsCompany = new Company();
            $form = $this->createForm(CompanyType::class, $profilsCompany);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
              
                $profilsCompany->setUser($user);
                $entityManager->persist($profilsCompany);
                $entityManager->flush();

                return $this->redirectToRoute('app_profil_company', [], Response::HTTP_SEE_OTHER);
            }

            return $this->render('company/new.html.twig', [
                'profils_company' => $profilsCompany,
                'form' => $form,
            ]);
            /* throw $this->createNotFoundException('Profil développeur introuvable pour cet utilisateur.'); */
        }

        $profilsCompany = $user->getCompany();

        return $this->render('company/show.html.twig', [
            'profils_company' => $profilsCompany,
        ]);
    }

    #[Route('/dev/{id}', name: 'app_profils_dev_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProfilsDev $profilsDev, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProfilsDevType::class, $profilsDev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_profil', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('profil/editprofil.html.twig', [
            'profils_dev' => $profilsDev,
            'form' => $form,
        ]);
    }

    #[Route('/company/{id}', name: 'app_profils_company_edit', methods: ['GET', 'POST'])]
    public function editCompany(Request $request, Company $profilsCompany, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompanyType::class, $profilsCompany);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_profil_company', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('company/edit.html.twig', [
            'company' => $profilsCompany,
            'form' => $form,
        ]);
    }

    #[Route('/dev', name: 'target_path')]
    public function homeLogin(): Response
    {
        return $this->render('landing/presentation.html.twig');
    }
}