<?php

namespace App\Controller;

use App\Entity\CompanyCrters;
use App\Form\CompanyCrtersType;
use App\Repository\CompanyCrtersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;

#[Route('/company/crters')]
final class CompanyCrtersController extends AbstractController
{
    #[Route(name: 'app_company_crters_index', methods: ['GET'])]
    public function index(CompanyCrtersRepository $companyCrtersRepository): Response
    {
        return $this->render('company_crters/index.html.twig', [
            'company_crters' => $companyCrtersRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_company_crters_new', methods: ['GET', 'POST'])]


    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }
        $companyId = $user->getCompany();

        $companyCrter = $companyId->getCompanyCrters();
        if ($companyCrter === null) {
            $companyCrter = new CompanyCrters();
        }
        $form = $this->createForm(CompanyCrtersType::class, $companyCrter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $companyCrter->setCompany($companyId);
            $entityManager->persist($companyCrter);
            $entityManager->flush();

            return $this->redirectToRoute('app_company_crters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('company_crters/new.html.twig', [
            'company_crter' => $companyCrter,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_company_crters_show', methods: ['GET'])]
    public function show(CompanyCrters $companyCrter): Response
    {
        return $this->render('company_crters/show.html.twig', [
            'company_crter' => $companyCrter,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_company_crters_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CompanyCrters $companyCrter, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompanyCrtersType::class, $companyCrter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_company_crters_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('company_crters/edit.html.twig', [
            'company_crter' => $companyCrter,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_company_crters_delete', methods: ['POST'])]
    public function delete(Request $request, CompanyCrters $companyCrter, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $companyCrter->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($companyCrter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_company_crters_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/getDevs/{id}', name: 'app_dev_critere', methods: ['POST'])]
    public function searchDeveloper(CompanyCrtersRepository $companyCrtersRepository,)
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }
        $companyCriteria = $user->getCompany()->getCompanyCrters();
        $devs = $companyCrtersRepository->findByCriteria($companyCriteria->getTechnologies()->toArray(), $companyCriteria->getLocation(), $companyCriteria->getExperienceYear(), $companyCriteria->getSalaire());

        return $this->render('matching/dev_suggestion.html.twig', [
            'company_crters' => $devs,
        ]);
    }
}
