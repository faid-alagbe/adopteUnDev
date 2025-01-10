<?php

namespace App\Repository;

use App\Entity\CompanyCrters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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
            ->andWhere('d.salaireMin BETWEEN :salaire - 1000 AND :salaire + 1000')
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