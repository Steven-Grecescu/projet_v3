<?php

namespace App\Repository;

use App\Entity\AdapterContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AdapterContent>
 *
 * @method AdapterContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdapterContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdapterContent[]    findAll()
 * @method AdapterContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdapterContentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdapterContent::class);
    }

//    /**
//     * @return AdapterContent[] Returns an array of AdapterContent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AdapterContent
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
