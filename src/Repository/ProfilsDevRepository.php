<?php

namespace App\Repository;

use App\Entity\ProfilsDev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\Collection;

/**
 * @extends ServiceEntityRepository<ProfilsDev>
 */
class ProfilsDevRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfilsDev::class);
    }

    //    /**
    //     * @return ProfilsDev[] Returns an array of ProfilsDev objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ProfilsDev
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }


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
            $qb->andWhere('d.salaire_min BETWEEN :minimumSalary AND :maximumSalary')
                ->setParameter('minimumSalary', $minimumSalary)
                ->setParameter('maximumSalary', $maximumSalary);
        } elseif ($minimumSalary !== null) {
            $qb->andWhere('d.salaire_min >= :minimumSalary')
                ->setParameter('minimumSalary', $minimumSalary);
        } elseif ($maximumSalary !== null) {
            $qb->andWhere('d.salaire_min <= :maximumSalary')
                ->setParameter('maximumSalary', $maximumSalary);
        }

        // Gestion de la ville avec OR
        if ($city !== null) {
            $orX->add('d.localisation = :city');
            $qb->setParameter('city', $city);
        }

        // Gestion des technologies (corrigé)
        if ($technos !== null && !$technos->isEmpty()) {
            $qb->leftJoin('d.langages', 't')
                ->andWhere($qb->expr()->in('t.id', ':technos'))
                ->setParameter('technos', $technos);
        }

        // Gestion de l'expérience avec OR
        if ($experience !== null) {
            $orX->add('d.experience >= :experience');
            $qb->setParameter('experience', $experience);
        }

        // Ajout des critères OR à la requête
        if ($orX->count() > 0) {
            $qb->orWhere($orX);
        }

        return $qb->getQuery()->getResult();
    }
}
