<?php

namespace App\Controller;

use App\Entity\PosteEntity;
use App\Form\PosteEntityType;
use App\Repository\PosteEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/poste')]
final class PosteController extends AbstractController{
    #[Route(name: 'app_poste_index', methods: ['GET'])]
    public function index(PosteEntityRepository $posteEntityRepository): Response
    {
        return $this->render('poste/index.html.twig', [
            'poste_entities' => $posteEntityRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_poste_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $posteEntity = new PosteEntity();
        $form = $this->createForm(PosteEntityType::class, $posteEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($posteEntity);
            $entityManager->flush();

            return $this->redirectToRoute('app_poste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('poste/new.html.twig', [
            'poste_entity' => $posteEntity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poste_show', methods: ['GET'])]
    public function show(PosteEntity $posteEntity): Response
    {
        return $this->render('poste/show.html.twig', [
            'poste_entity' => $posteEntity,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_poste_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PosteEntity $posteEntity, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PosteEntityType::class, $posteEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_poste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('poste/edit.html.twig', [
            'poste_entity' => $posteEntity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_poste_delete', methods: ['POST'])]
    public function delete(Request $request, PosteEntity $posteEntity, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$posteEntity->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($posteEntity);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_poste_index', [], Response::HTTP_SEE_OTHER);
    }
}
