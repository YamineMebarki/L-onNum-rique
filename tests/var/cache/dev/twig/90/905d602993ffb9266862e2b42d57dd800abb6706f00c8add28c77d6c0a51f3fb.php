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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php */
class __TwigTemplate_ef3f966bb9c25b6dd932d5eab8e1a26ecca8a468b5e6a385a8b3170e5d76045c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * Driver interface.
 * Interface that all DBAL drivers must implement.
 */
interface Driver
{
    /**
     * Attempts to create a connection with the database.
     *
     * @param mixed[]     \$params        All connection parameters passed by the user.
     * @param string|null \$username      The username to use when connecting.
     * @param string|null \$password      The password to use when connecting.
     * @param mixed[]     \$driverOptions The driver options to use when connecting.
     *
     * @return \\Doctrine\\DBAL\\Driver\\Connection The database connection.
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = []);

    /**
     * Gets the DatabasePlatform instance that provides all the metadata about
     * the platform this driver connects to.
     *
     * @return AbstractPlatform The database platform.
     */
    public function getDatabasePlatform();

    /**
     * Gets the SchemaManager that can be used to inspect and change the underlying
     * database schema of the platform this driver connects to.
     *
     * @return AbstractSchemaManager
     */
    public function getSchemaManager(Connection \$conn);

    /**
     * Gets the name of the driver.
     *
     * @return string The name of the driver.
     */
    public function getName();

    /**
     * Gets the name of the database connected to for this driver.
     *
     * @return string The name of the database.
     */
    public function getDatabase(Connection \$conn);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * Driver interface.
 * Interface that all DBAL drivers must implement.
 */
interface Driver
{
    /**
     * Attempts to create a connection with the database.
     *
     * @param mixed[]     \$params        All connection parameters passed by the user.
     * @param string|null \$username      The username to use when connecting.
     * @param string|null \$password      The password to use when connecting.
     * @param mixed[]     \$driverOptions The driver options to use when connecting.
     *
     * @return \\Doctrine\\DBAL\\Driver\\Connection The database connection.
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = []);

    /**
     * Gets the DatabasePlatform instance that provides all the metadata about
     * the platform this driver connects to.
     *
     * @return AbstractPlatform The database platform.
     */
    public function getDatabasePlatform();

    /**
     * Gets the SchemaManager that can be used to inspect and change the underlying
     * database schema of the platform this driver connects to.
     *
     * @return AbstractSchemaManager
     */
    public function getSchemaManager(Connection \$conn);

    /**
     * Gets the name of the driver.
     *
     * @return string The name of the driver.
     */
    public function getName();

    /**
     * Gets the name of the database connected to for this driver.
     *
     * @return string The name of the database.
     */
    public function getDatabase(Connection \$conn);
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php");
    }
}
