<?php

namespace App\Controller;

use App\Entity\Langages;
use App\Form\LangagesType;
use App\Repository\LangagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/langages')]
final class LangagesController extends AbstractController{
    #[Route(name: 'app_langages_index', methods: ['GET'])]
    public function index(LangagesRepository $langagesRepository): Response
    {
        return $this->render('langages/index.html.twig', [
            'langages' => $langagesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_langages_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $langage = new Langages();
        $form = $this->createForm(LangagesType::class, $langage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($langage);
            $entityManager->flush();

            return $this->redirectToRoute('app_langages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('langages/new.html.twig', [
            'langage' => $langage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_langages_show', methods: ['GET'])]
    public function show(Langages $langage): Response
    {
        return $this->render('langages/show.html.twig', [
            'langage' => $langage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_langages_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Langages $langage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LangagesType::class, $langage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_langages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('langages/edit.html.twig', [
            'langage' => $langage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_langages_delete', methods: ['POST'])]
    public function delete(Request $request, Langages $langage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$langage->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($langage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_langages_index', [], Response::HTTP_SEE_OTHER);
    }
}
