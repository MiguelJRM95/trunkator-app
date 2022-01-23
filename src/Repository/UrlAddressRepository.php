<?php

namespace App\Repository;

use App\Entity\UrlAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UrlAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method UrlAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method UrlAddress[]    findAll()
 * @method UrlAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UrlAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UrlAddress::class);
    }

    // /**
    //  * @return UrlAddress[] Returns an array of UrlAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UrlAddress
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
