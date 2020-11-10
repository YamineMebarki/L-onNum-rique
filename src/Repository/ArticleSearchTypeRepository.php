<?php

namespace App\Repository;

use App\Entity\ArticleSearchType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ArticleSearchType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleSearchType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleSearchType[]    findAll()
 * @method ArticleSearchType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleSearchTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleSearchType::class);
    }

    // /**
    //  * @return ArticleSearchType[] Returns an array of ArticleSearchType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArticleSearchType
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
