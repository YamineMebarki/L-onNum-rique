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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php */
class __TwigTemplate_5132360f284c1730d7cac527a4c042a2a315e4e14a633a4c7da56d9bc9ffaade extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLAnywhere;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractSQLAnywhereDriver;
use function array_keys;
use function array_map;
use function implode;

/**
 * A Doctrine DBAL driver for the SAP Sybase SQL Anywhere PHP extension.
 */
class Driver extends AbstractSQLAnywhereDriver
{
    /**
     * {@inheritdoc}
     *
     * @throws DBALException If there was a problem establishing the connection.
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new SQLAnywhereConnection(
                \$this->buildDsn(
                    \$params['host'] ?? null,
                    \$params['port'] ?? null,
                    \$params['server'] ?? null,
                    \$params['dbname'] ?? null,
                    \$username,
                    \$password,
                    \$driverOptions
                ),
                \$params['persistent'] ?? false
            );
        } catch (SQLAnywhereException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sqlanywhere';
    }

    /**
     * Build the connection string for given connection parameters and driver options.
     *
     * @param string  \$host          Host address to connect to.
     * @param int     \$port          Port to use for the connection (default to SQL Anywhere standard port 2638).
     * @param string  \$server        Database server name on the host to connect to.
     *                               SQL Anywhere allows multiple database server instances on the same host,
     *                               therefore specifying the server instance name to use is mandatory.
     * @param string  \$dbname        Name of the database on the server instance to connect to.
     * @param string  \$username      User name to use for connection authentication.
     * @param string  \$password      Password to use for connection authentication.
     * @param mixed[] \$driverOptions Additional parameters to use for the connection.
     *
     * @return string
     */
    private function buildDsn(\$host, \$port, \$server, \$dbname, \$username = null, \$password = null, array \$driverOptions = [])
    {
        \$host = \$host ?: 'localhost';
        \$port = \$port ?: 2638;

        if (! empty(\$server)) {
            \$server = ';ServerName=' . \$server;
        }

        return 'HOST=' . \$host . ':' . \$port .
            \$server .
            ';DBN=' . \$dbname .
            ';UID=' . \$username .
            ';PWD=' . \$password .
            ';' . implode(
                ';',
                array_map(static function (\$key, \$value) {
                    return \$key . '=' . \$value;
                }, array_keys(\$driverOptions), \$driverOptions)
            );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLAnywhere;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractSQLAnywhereDriver;
use function array_keys;
use function array_map;
use function implode;

/**
 * A Doctrine DBAL driver for the SAP Sybase SQL Anywhere PHP extension.
 */
class Driver extends AbstractSQLAnywhereDriver
{
    /**
     * {@inheritdoc}
     *
     * @throws DBALException If there was a problem establishing the connection.
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new SQLAnywhereConnection(
                \$this->buildDsn(
                    \$params['host'] ?? null,
                    \$params['port'] ?? null,
                    \$params['server'] ?? null,
                    \$params['dbname'] ?? null,
                    \$username,
                    \$password,
                    \$driverOptions
                ),
                \$params['persistent'] ?? false
            );
        } catch (SQLAnywhereException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sqlanywhere';
    }

    /**
     * Build the connection string for given connection parameters and driver options.
     *
     * @param string  \$host          Host address to connect to.
     * @param int     \$port          Port to use for the connection (default to SQL Anywhere standard port 2638).
     * @param string  \$server        Database server name on the host to connect to.
     *                               SQL Anywhere allows multiple database server instances on the same host,
     *                               therefore specifying the server instance name to use is mandatory.
     * @param string  \$dbname        Name of the database on the server instance to connect to.
     * @param string  \$username      User name to use for connection authentication.
     * @param string  \$password      Password to use for connection authentication.
     * @param mixed[] \$driverOptions Additional parameters to use for the connection.
     *
     * @return string
     */
    private function buildDsn(\$host, \$port, \$server, \$dbname, \$username = null, \$password = null, array \$driverOptions = [])
    {
        \$host = \$host ?: 'localhost';
        \$port = \$port ?: 2638;

        if (! empty(\$server)) {
            \$server = ';ServerName=' . \$server;
        }

        return 'HOST=' . \$host . ':' . \$port .
            \$server .
            ';DBN=' . \$dbname .
            ';UID=' . \$username .
            ';PWD=' . \$password .
            ';' . implode(
                ';',
                array_map(static function (\$key, \$value) {
                    return \$key . '=' . \$value;
                }, array_keys(\$driverOptions), \$driverOptions)
            );
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php");
    }
}
