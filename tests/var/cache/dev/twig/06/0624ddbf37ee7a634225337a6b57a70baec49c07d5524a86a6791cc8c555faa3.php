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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php */
class __TwigTemplate_833a48bad6b6e0238ed31f225f483b2dc66a3a866b4b3ea93b8e985b4f3c1476 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Helper;

use Doctrine\\DBAL\\Connection;
use Symfony\\Component\\Console\\Helper\\Helper;

/**
 * Doctrine CLI Connection Helper.
 */
class ConnectionHelper extends Helper
{
    /**
     * The Doctrine database Connection.
     *
     * @var Connection
     */
    protected \$_connection;

    /**
     * @param Connection \$connection The Doctrine database Connection.
     */
    public function __construct(Connection \$connection)
    {
        \$this->_connection = \$connection;
    }

    /**
     * Retrieves the Doctrine database Connection.
     *
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->_connection;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'connection';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools\\Console\\Helper;

use Doctrine\\DBAL\\Connection;
use Symfony\\Component\\Console\\Helper\\Helper;

/**
 * Doctrine CLI Connection Helper.
 */
class ConnectionHelper extends Helper
{
    /**
     * The Doctrine database Connection.
     *
     * @var Connection
     */
    protected \$_connection;

    /**
     * @param Connection \$connection The Doctrine database Connection.
     */
    public function __construct(Connection \$connection)
    {
        \$this->_connection = \$connection;
    }

    /**
     * Retrieves the Doctrine database Connection.
     *
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->_connection;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'connection';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php");
    }
}
