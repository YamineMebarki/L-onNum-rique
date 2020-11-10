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

/* src/Repository/UserRepository.php */
class __TwigTemplate_65c1842fa8d143fff3b4d9a12a98fcbbafc6671221f18c889198b95cd779d828 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Repository/UserRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Repository/UserRepository.php"));

        // line 1
        echo "<?php

namespace App\\Repository;

use App\\Entity\\User;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method User|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method User|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, User::class);
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?User
    {
        return \$this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
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
        return "src/Repository/UserRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Repository;

use App\\Entity\\User;
use Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository;
use Doctrine\\Common\\Persistence\\ManagerRegistry;

/**
 * @method User|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method User|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry \$registry)
    {
        parent::__construct(\$registry, User::class);
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField(\$value)
    {
        return \$this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', \$value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField(\$value): ?User
    {
        return \$this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', \$value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
", "src/Repository/UserRepository.php", "/var/www/public/DevLaon/templates/src/Repository/UserRepository.php");
    }
}
