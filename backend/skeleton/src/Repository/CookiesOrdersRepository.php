<?php

namespace App\Repository;

use App\Entity\CookiesOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CookiesOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method CookiesOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method CookiesOrders[]    findAll()
 * @method CookiesOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CookiesOrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CookiesOrders::class);
    }

    // /**
    //  * @return CookiesOrders[] Returns an array of CookiesOrders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CookiesOrders
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
