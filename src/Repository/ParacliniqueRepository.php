<?php

namespace App\Repository;

use App\Entity\Paraclinique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Paraclinique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paraclinique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paraclinique[]    findAll()
 * @method Paraclinique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParacliniqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paraclinique::class);
    }

    // /**
    //  * @return Paraclinique[] Returns an array of Paraclinique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Paraclinique
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
