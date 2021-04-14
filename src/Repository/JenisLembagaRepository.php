<?php

namespace App\Repository;

use App\Entity\JenisLembaga;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JenisLembaga|null find($id, $lockMode = null, $lockVersion = null)
 * @method JenisLembaga|null findOneBy(array $criteria, array $orderBy = null)
 * @method JenisLembaga[]    findAll()
 * @method JenisLembaga[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JenisLembagaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JenisLembaga::class);
    }

    // /**
    //  * @return JenisLembaga[] Returns an array of JenisLembaga objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JenisLembaga
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
