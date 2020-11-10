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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php */
class __TwigTemplate_cc3c0ffae158355ae7d73268c41ece225bb0629edce60da559c8ee7f3099e761 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * Event Arguments used when a Driver connection is established inside Doctrine\\DBAL\\Connection.
 */
class ConnectionEventArgs extends EventArgs
{
    /** @var Connection */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @return Driver
     */
    public function getDriver()
    {
        return \$this->connection->getDriver();
    }

    /**
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }

    /**
     * @return AbstractSchemaManager
     */
    public function getSchemaManager()
    {
        return \$this->connection->getSchemaManager();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * Event Arguments used when a Driver connection is established inside Doctrine\\DBAL\\Connection.
 */
class ConnectionEventArgs extends EventArgs
{
    /** @var Connection */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @return Driver
     */
    public function getDriver()
    {
        return \$this->connection->getDriver();
    }

    /**
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }

    /**
     * @return AbstractSchemaManager
     */
    public function getSchemaManager()
    {
        return \$this->connection->getSchemaManager();
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php");
    }
}
