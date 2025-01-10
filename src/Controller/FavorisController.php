<?php

namespace App\Controller;

use App\Entity\Favoris;
use App\Entity\ProfilsDev;
use App\Repository\FavorisRepository;
use App\Repository\ProfilsDevRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/favoris')]
class FavorisController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private FavorisRepository $favorisRepository;
    private ProfilsDevRepository $profilsDevRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        FavorisRepository $favorisRepository,
        ProfilsDevRepository $profilsDevRepository
    ) {
        $this->entityManager = $entityManager;
        $this->favorisRepository = $favorisRepository;
        $this->profilsDevRepository = $profilsDevRepository;
    }

    #[Route('/', name: 'app_favoris_index', methods: ['GET'])]
    #[IsGranted('ROLE_COMPANY')]
    public function index(): Response
    {
        $user = $this->getUser();
        $favoris = $this->favorisRepository->findBy(['userId' => $user->getId(), 'type' => Favoris::TYPE_PROFIL]);
        
        // Récupérer les profils des développeurs
        $developpeursIds = array_map(fn($favori) => $favori->getCibleId(), $favoris);
        $developpeurs = $this->profilsDevRepository->findBy(['id' => $developpeursIds]);

        return $this->render('favoris/index.html.twig', [
            'favoris' => $favoris,
            'developpeurs' => $developpeurs,
        ]);
    }

    #[Route('/ajouter/{devId}', name: 'app_favoris_ajouter', methods: ['POST'])]
    #[IsGranted('ROLE_COMPANY')]
    public function ajouter(int $devId): JsonResponse
    {
        $user = $this->getUser();
        
        // Vérifier si le développeur existe
        $developpeur = $this->profilsDevRepository->find($devId);
        if (!$developpeur) {
            return new JsonResponse(['message' => 'Développeur non trouvé'], Response::HTTP_NOT_FOUND);
        }

        // Vérifier si le favori existe déjà
        $existingFavori = $this->favorisRepository->findOneBy([
            'userId' => $user->getId(),
            'cibleId' => $devId,
            'type' => Favoris::TYPE_PROFIL
        ]);

        if ($existingFavori) {
            return new JsonResponse(['message' => 'Déjà dans les favoris'], Response::HTTP_BAD_REQUEST);
        }

        // Créer un nouveau favori
        $favori = new Favoris();
        $favori->setUserId($user->getId());
        $favori->setCibleId($devId);
        $favori->setType(Favoris::TYPE_PROFIL);

        $this->entityManager->persist($favori);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Ajouté aux favoris'], Response::HTTP_CREATED);
    }

    #[Route('/retirer/{devId}', name: 'app_favoris_retirer', methods: ['DELETE'])]
    #[IsGranted('ROLE_COMPANY')]
    public function retirer(int $devId): JsonResponse
    {
        $user = $this->getUser();
        
        $favori = $this->favorisRepository->findOneBy([
            'userId' => $user->getId(),
            'cibleId' => $devId,
            'type' => Favoris::TYPE_PROFIL
        ]);

        if (!$favori) {
            return new JsonResponse(['message' => 'Favori non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($favori);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Retiré des favoris'], Response::HTTP_OK);
    }

    #[Route('/verifier/{devId}', name: 'app_favoris_verifier', methods: ['GET'])]
    #[IsGranted('ROLE_COMPANY')]
    public function verifier(int $devId): JsonResponse
    {
        $user = $this->getUser();
        
        $favori = $this->favorisRepository->findOneBy([
            'userId' => $user->getId(),
            'cibleId' => $devId,
            'type' => Favoris::TYPE_PROFIL
        ]);

        return new JsonResponse([
            'estFavori' => $favori !== null
        ]);
    }
}