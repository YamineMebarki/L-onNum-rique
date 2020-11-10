<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* src/Repository/ArticleLikeRepository.php */
class __TwigTemplate_39a4530541022e1c17d94c5292889a1d5c8049bc874afffe1542136e08491b75 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Repository/ArticleLikeRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Repository/ArticleLikeRepository.php"));

        // line 1
        echo "<?php

namespace App\\Repository;

use App\\Entity\\ArticleLike;
use App\\Entity\\User;
use App\\Entity\\Article;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method ArticleLike|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method ArticleLike|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method ArticleLike[]    findAll()
 * @method ArticleLike[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class ArticleLikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, ArticleLike::class);
    }

    // /**
    //  * @return ArticleLike[] Returns an array of ArticleLike objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?ArticleLike
    {
        return \$this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Repository/ArticleLikeRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Repository;

use App\\Entity\\ArticleLike;
use App\\Entity\\User;
use App\\Entity\\Article;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method ArticleLike|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method ArticleLike|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method ArticleLike[]    findAll()
 * @method ArticleLike[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class ArticleLikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, ArticleLike::class);
    }

    // /**
    //  * @return ArticleLike[] Returns an array of ArticleLike objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?ArticleLike
    {
        return \$this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
", "src/Repository/ArticleLikeRepository.php", "/var/www/public/DevLaon/templates/src/Repository/ArticleLikeRepository.php");
    }
}
