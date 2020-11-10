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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php */
class __TwigTemplate_65fa1c840ce9c123db63c72007ca1b28fc13964d52ef6e193d5423f77903eb7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\DrizzlePDOMySql;

use Doctrine\\DBAL\\Platforms\\DrizzlePlatform;
use Doctrine\\DBAL\\Schema\\DrizzleSchemaManager;

/**
 * Drizzle driver using PDO MySql.
 */
class Driver extends \\Doctrine\\DBAL\\Driver\\PDOMySql\\Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new Connection(
            \$this->constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        return \$this->getDatabasePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new DrizzlePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(\\Doctrine\\DBAL\\Connection \$conn)
    {
        return new DrizzleSchemaManager(\$conn);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'drizzle_pdo_mysql';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\DrizzlePDOMySql;

use Doctrine\\DBAL\\Platforms\\DrizzlePlatform;
use Doctrine\\DBAL\\Schema\\DrizzleSchemaManager;

/**
 * Drizzle driver using PDO MySql.
 */
class Driver extends \\Doctrine\\DBAL\\Driver\\PDOMySql\\Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new Connection(
            \$this->constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        return \$this->getDatabasePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new DrizzlePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(\\Doctrine\\DBAL\\Connection \$conn)
    {
        return new DrizzleSchemaManager(\$conn);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'drizzle_pdo_mysql';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php");
    }
}
