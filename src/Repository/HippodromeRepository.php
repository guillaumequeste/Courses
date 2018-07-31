<?php

namespace App\Repository;

use App\Entity\Hippodrome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Hippodrome|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hippodrome|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hippodrome[]    findAll()
 * @method Hippodrome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HippodromeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Hippodrome::class);
    }

//    /**
//     * @return Hippodrome[] Returns an array of Hippodrome objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hippodrome
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
