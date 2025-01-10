<?php

namespace App\Repository;

use App\Entity\Postes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Postes>
 */
class PostesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Postes::class);
    }

    public function findLastThree()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC') 
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function findPostsByDuplicateNames(): array
    {
        return $this->createQueryBuilder('p')
        ->select("LOWER(TRIM(p.titre)) AS titre, COUNT(p.id) AS count")
        ->groupBy('titre')
        ->having('COUNT(p.id) > 1')
        ->orderBy('count', 'DESC')
        ->getQuery()
        ->getResult();
    }
    //    /**
    //     * @return Postes[] Returns an array of Postes objects
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

    //    public function findOneBySomeField($value): ?Postes
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
