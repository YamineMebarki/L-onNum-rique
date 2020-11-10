<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\ArticleSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }


    /**
     * @return Query
     */
    public function findAllVisibileQuery(ArticleSearch $search): Query
    {
        $query = $this->ffindVisibleQuery();

        if ($search->getArticleSearch())
        {
            $query = $query
                ->where('article.title' == ':articleSearch')
               ->setParameter('articleSearch', $search->getArticleSearch());
        }

        return  $query->getQuery();
    }

    /**
     * @return Article[]
     */
    public function findLatest(): array
    {
        return  $this->findVisibleQuery()
            ->setMaxResults(4)
            ->setQuery()
            ->getResult();
    }


    public function findVisibleQuery(): QueryBuilder
    {
        return  $this->createQueryBuilder('article')
            ->where('article.name = false');
    }

    // /**
    //  * @return Article[] Returns an array of Article objects
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
    public function findOneBySomeField($value): ?Article
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
