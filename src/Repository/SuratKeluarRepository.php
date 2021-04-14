<?php

namespace App\Repository;

use App\Entity\SuratKeluar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SuratKeluar|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuratKeluar|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuratKeluar[]    findAll()
 * @method SuratKeluar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuratKeluarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuratKeluar::class);
    }

    // /**
    //  * @return SuratKeluar[] Returns an array of SuratKeluar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SuratKeluar
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
