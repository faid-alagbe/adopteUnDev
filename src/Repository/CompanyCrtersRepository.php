<?php

namespace App\Repository;

use App\Entity\CompanyCrters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\Collection;

/**
 * @extends ServiceEntityRepository<CompanyCrters>
 */
class CompanyCrtersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompanyCrters::class);
    }


    public function findByCriteria(array $langages, string $localisation, int $experience, int $salaire): array
    {
        return $this->createQueryBuilder('d')
            ->join('d.profilsDevLangages', 'dl') // Association entre `ProfilsDev` et `ProfilsDevLangages`.
            ->join('dl.langage', 'l')           // Association entre `ProfilsDevLangages` et `Langages`.
            ->where('l.id IN (:langages)')
            ->andWhere('d.localisation = :localisation')
            ->andWhere('d.experience >= :experience')
            ->andWhere('d.salaire_min BETWEEN :salaire - 1000 AND :salaire + 1000')
            ->setParameter('langages', $langages)
            ->setParameter('localisation', $localisation)
            ->setParameter('experience', $experience)
            ->setParameter('salaire', $salaire)
            ->select('d, COUNT(l.id) AS HIDDEN langagesCount') // Comptage des langages trouvés
            ->groupBy('d.id')
            ->orderBy('langagesCount', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function searchDevs(
        ?int $minimumSalary,
        ?int $maximumSalary,
        ?string $city,
        ?Collection $technos,
        ?int $experience
    ): array {
        $qb = $this->createQueryBuilder('d');

        $orX = $qb->expr()->orX();

        // Gestion du salaire (intervalle entre minimumSalary et maximumSalary)
        if ($minimumSalary !== null && $maximumSalary !== null) {
            $qb->andWhere('d.salaire BETWEEN :minimumSalary AND :maximumSalary')
                ->setParameter('minimumSalary', $minimumSalary)
                ->setParameter('maximumSalary', $maximumSalary);
        } elseif ($minimumSalary !== null) {
            $qb->andWhere('d.salaire >= :minimumSalary')
                ->setParameter('minimumSalary', $minimumSalary);
        } elseif ($maximumSalary !== null) {
            $qb->andWhere('d.salaire <= :maximumSalary')
                ->setParameter('maximumSalary', $maximumSalary);
        }

        // Gestion de la ville avec OR
        if ($city !== null) {
            $orX->add('d.location = :city');
            $qb->setParameter('city', $city);
        }

        // Gestion des technologies (corrigé)
        if ($technos !== null && !$technos->isEmpty()) {
            $qb->leftJoin('d.technologies', 't')
                ->andWhere($qb->expr()->in('t.id', ':technos'))
                ->setParameter('technos', $technos);
        }

        // Gestion de l'expérience avec OR
        if ($experience !== null) {
            $orX->add('d.experienceYear >= :experience');
            $qb->setParameter('experience', $experience);
        }

        // Ajout des critères OR à la requête
        if ($orX->count() > 0) {
            $qb->orWhere($orX);
        }

        return $qb->getQuery()->getResult();
    }
}
























//    /**
//     * @return CompanyCrters[] Returns an array of CompanyCrters objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompanyCrters
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }