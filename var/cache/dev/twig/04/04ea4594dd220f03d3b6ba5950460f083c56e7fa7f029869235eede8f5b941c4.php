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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php */
class __TwigTemplate_e423abfa25aad351bbf53e4a1a356824c69de72650865dd8076a766bf3bef19d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOIbm;

use Doctrine\\DBAL\\Driver\\AbstractDB2Driver;
use Doctrine\\DBAL\\Driver\\PDOConnection;

/**
 * Driver for the PDO IBM extension.
 */
class Driver extends AbstractDB2Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new PDOConnection(
            \$this->_constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * Constructs the IBM PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params)
    {
        \$dsn = 'ibm:';
        if (isset(\$params['host'])) {
            \$dsn .= 'HOSTNAME=' . \$params['host'] . ';';
        }
        if (isset(\$params['port'])) {
            \$dsn .= 'PORT=' . \$params['port'] . ';';
        }
        \$dsn .= 'PROTOCOL=TCPIP;';
        if (isset(\$params['dbname'])) {
            \$dsn .= 'DATABASE=' . \$params['dbname'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_ibm';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOIbm;

use Doctrine\\DBAL\\Driver\\AbstractDB2Driver;
use Doctrine\\DBAL\\Driver\\PDOConnection;

/**
 * Driver for the PDO IBM extension.
 */
class Driver extends AbstractDB2Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new PDOConnection(
            \$this->_constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * Constructs the IBM PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params)
    {
        \$dsn = 'ibm:';
        if (isset(\$params['host'])) {
            \$dsn .= 'HOSTNAME=' . \$params['host'] . ';';
        }
        if (isset(\$params['port'])) {
            \$dsn .= 'PORT=' . \$params['port'] . ';';
        }
        \$dsn .= 'PROTOCOL=TCPIP;';
        if (isset(\$params['dbname'])) {
            \$dsn .= 'DATABASE=' . \$params['dbname'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_ibm';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php");
    }
}
