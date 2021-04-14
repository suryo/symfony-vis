<?php

namespace App\Repository;

use App\Entity\LembagaDesa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LembagaDesa|null find($id, $lockMode = null, $lockVersion = null)
 * @method LembagaDesa|null findOneBy(array $criteria, array $orderBy = null)
 * @method LembagaDesa[]    findAll()
 * @method LembagaDesa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LembagaDesaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LembagaDesa::class);
    }

    // /**
    //  * @return LembagaDesa[] Returns an array of LembagaDesa objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LembagaDesa
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
