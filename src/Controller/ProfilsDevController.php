<?php

namespace App\Controller;

use App\Entity\ProfilsDev;
use App\Form\ProfilsDevType;
use App\Repository\ProfilsDevRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/profils/dev')]
final class ProfilsDevController extends AbstractController
{
    #[Route(name: 'app_profils_dev_index', methods: ['GET'])]
    public function index(ProfilsDevRepository $profilsDevRepository): Response
    {
        return $this->render('profils_dev/index.html.twig', [
            'profils_devs' => $profilsDevRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_profils_dev_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $profilsDev = new ProfilsDev();
        $form = $this->createForm(ProfilsDevType::class, $profilsDev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($profilsDev);
            $entityManager->flush();

            return $this->redirectToRoute('app_profils_dev_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profils_dev/new.html.twig', [
            'profils_dev' => $profilsDev,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_profils_dev_show', methods: ['GET'])]
    public function show(ProfilsDev $profilsDev): Response
    {
        return $this->render('profils_dev/show.html.twig', [
            'profils_dev' => $profilsDev,
        ]);
    }

    #[Route('/{id}', name: 'app_profils_dev_delete', methods: ['POST'])]
    public function delete(Request $request, ProfilsDev $profilsDev, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $profilsDev->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($profilsDev);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_profils_dev_index', [], Response::HTTP_SEE_OTHER);
    }
}