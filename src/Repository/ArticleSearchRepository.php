<?php

namespace App\Repository;

use App\Entity\ArticleSearch;
use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ArticleSearch|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleSearch|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleSearch[]    findAll()
 * @method ArticleSearch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleSearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleSearch::class);
    }

    // /**
    //  * @return ArticleSearch[] Returns an array of ArticleSearch objects
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
    public function findOneBySomeField($value): ?ArticleSearch
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
