<?php

namespace App\Repository;

use App\Entity\QcmDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QcmDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method QcmDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method QcmDate[]    findAll()
 * @method QcmDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QcmDateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QcmDate::class);
    }

    // /**
    //  * @return QcmDate[] Returns an array of QcmDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QcmDate
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
