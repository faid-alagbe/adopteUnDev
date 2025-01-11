<?php

namespace App\Controller;

use App\Entity\ProfilsDev;
use App\Form\ProfilsDevType;
use App\Repository\ProfilsDevRepository;
use App\Repository\PostesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;

#[Route('/profils/dev')]
final class ProfilsDevController extends AbstractController
{
    #[Route(name: 'app_profils_dev_index', methods: ['GET'])]
    public function index(Security $security, ProfilsDevRepository $profilsDevRepository): Response
    {
        $user = $security->getUser();
        return $this->render('profils_dev/index.html.twig', [
            'devs' => $profilsDevRepository->findByExcludingUser($user),
            'user' => $user,
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

    #[Route('/{id}/show', name: 'app_profils_dev_show', methods: ['GET'])]
    public function show(ProfilsDev $profilsDev): Response
    {
        return $this->render('profils_dev/show.html.twig', [
            'profils_dev' => $profilsDev,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_profils_dev_delete', methods: ['POST'])]
    public function delete(Request $request, ProfilsDev $profilsDev, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $profilsDev->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($profilsDev);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_profils_dev_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/getPostes', name: 'app_poste_critere', methods: ['GET'])]
    public function searchPostes(PostesRepository $postesRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        if (!$user instanceof User) {
            throw new \LogicException('L\'utilisateur connecté n\'est pas valide.');
        }

        $developper = $user->getProfilsDev();

        if (!$developper) {
            throw $this->createNotFoundException('Les critères de l\'entreprise n\'ont pas été définis.');
        }

        $postes = $postesRepository->searchPostes(

            $developper->getSalaireMin() !== null ? $developper->getSalaireMin() - 100 : null,
            $developper->getSalaireMin() !== null ? $developper->getSalaireMin() + 100 : null,
            $developper->getLocalisation(),
            $developper->getLangages(),
            $developper->getExperience()
        );

        return $this->render('matching/poste_suggestion.html.twig', [
            'postes' => $postes,
            'user' => $user,
        ]);
    }
}
