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

/* src/Repository/CategoryRepository.php */
class __TwigTemplate_36e74c9c981bb1ad267b94b5b02f4b60cd707aeed5112a5001aba26735491742 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Repository/CategoryRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Repository/CategoryRepository.php"));

        // line 1
        echo "<?php

namespace App\\Repository;

use App\\Entity\\Category;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method Category|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method Category|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, Category::class);
    }

    // /**
    //  * @return Category[] Returns an array of Category objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?Category
    {
        return \$this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
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
        return "src/Repository/CategoryRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Repository;

use App\\Entity\\Category;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method Category|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method Category|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, Category::class);
    }

    // /**
    //  * @return Category[] Returns an array of Category objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?Category
    {
        return \$this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
", "src/Repository/CategoryRepository.php", "/var/www/public/DevLaon/templates/src/Repository/CategoryRepository.php");
    }
}
