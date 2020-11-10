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

/* vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php */
class __TwigTemplate_ef636c0e8c3b37a56a3ea743805c1acc37d82c617a0a8ffaa28fa0a63d27f17d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\Console\\Helper\\EntityManagerHelper;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 */
abstract class DoctrineCommandHelper
{
    /**
     * Convenience method to push the helper sets of a given entity manager into the application.
     *
     * @param string \$emName
     */
    public static function setApplicationEntityManager(Application \$application, \$emName)
    {
        /** @var EntityManager \$em */
        \$em        = \$application->getKernel()->getContainer()->get('doctrine')->getManager(\$emName);
        \$helperSet = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$em->getConnection()), 'db');
        \$helperSet->set(new EntityManagerHelper(\$em), 'em');
    }

    /**
     * Convenience method to push the helper sets of a given connection into the application.
     *
     * @param string \$connName
     */
    public static function setApplicationConnection(Application \$application, \$connName)
    {
        \$connection = \$application->getKernel()->getContainer()->get('doctrine')->getConnection(\$connName);
        \$helperSet  = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$connection), 'db');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\Console\\Helper\\EntityManagerHelper;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;

/**
 * Provides some helper and convenience methods to configure doctrine commands in the context of bundles
 * and multiple connections/entity managers.
 */
abstract class DoctrineCommandHelper
{
    /**
     * Convenience method to push the helper sets of a given entity manager into the application.
     *
     * @param string \$emName
     */
    public static function setApplicationEntityManager(Application \$application, \$emName)
    {
        /** @var EntityManager \$em */
        \$em        = \$application->getKernel()->getContainer()->get('doctrine')->getManager(\$emName);
        \$helperSet = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$em->getConnection()), 'db');
        \$helperSet->set(new EntityManagerHelper(\$em), 'em');
    }

    /**
     * Convenience method to push the helper sets of a given connection into the application.
     *
     * @param string \$connName
     */
    public static function setApplicationConnection(Application \$application, \$connName)
    {
        \$connection = \$application->getKernel()->getContainer()->get('doctrine')->getConnection(\$connName);
        \$helperSet  = \$application->getHelperSet();
        \$helperSet->set(new ConnectionHelper(\$connection), 'db');
    }
}
", "vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Command/Proxy/DoctrineCommandHelper.php");
    }
}
