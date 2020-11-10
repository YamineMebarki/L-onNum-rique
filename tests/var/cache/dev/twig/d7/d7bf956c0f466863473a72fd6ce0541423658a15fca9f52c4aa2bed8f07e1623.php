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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php */
class __TwigTemplate_060ffe6294f7f43e18f0063eb4214017a419f2073bfba4e4810e487cd3085753 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver;
use function is_int;
use function sprintf;

/**
 * The PDO-based Sqlsrv driver.
 */
class Driver extends AbstractSQLServerDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        [\$driverOptions, \$connectionOptions] = \$this->splitOptions(\$driverOptions);

        return new Connection(
            \$this->_constructPdoDsn(\$params, \$connectionOptions),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * Constructs the Sqlsrv PDO DSN.
     *
     * @param mixed[]  \$params
     * @param string[] \$connectionOptions
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params, array \$connectionOptions)
    {
        \$dsn = 'sqlsrv:server=';

        if (isset(\$params['host'])) {
            \$dsn .= \$params['host'];
        }

        if (isset(\$params['port']) && ! empty(\$params['port'])) {
            \$dsn .= ',' . \$params['port'];
        }

        if (isset(\$params['dbname'])) {
            \$connectionOptions['Database'] = \$params['dbname'];
        }

        if (isset(\$params['MultipleActiveResultSets'])) {
            \$connectionOptions['MultipleActiveResultSets'] = \$params['MultipleActiveResultSets'] ? 'true' : 'false';
        }

        return \$dsn . \$this->getConnectionOptionsDsn(\$connectionOptions);
    }

    /**
     * Separates a connection options from a driver options
     *
     * @param int[]|string[] \$options
     *
     * @return int[][]|string[][]
     */
    private function splitOptions(array \$options) : array
    {
        \$driverOptions     = [];
        \$connectionOptions = [];

        foreach (\$options as \$optionKey => \$optionValue) {
            if (is_int(\$optionKey)) {
                \$driverOptions[\$optionKey] = \$optionValue;
            } else {
                \$connectionOptions[\$optionKey] = \$optionValue;
            }
        }

        return [\$driverOptions, \$connectionOptions];
    }

    /**
     * Converts a connection options array to the DSN
     *
     * @param string[] \$connectionOptions
     */
    private function getConnectionOptionsDsn(array \$connectionOptions) : string
    {
        \$connectionOptionsDsn = '';

        foreach (\$connectionOptions as \$paramName => \$paramValue) {
            \$connectionOptionsDsn .= sprintf(';%s=%s', \$paramName, \$paramValue);
        }

        return \$connectionOptionsDsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_sqlsrv';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver;
use function is_int;
use function sprintf;

/**
 * The PDO-based Sqlsrv driver.
 */
class Driver extends AbstractSQLServerDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        [\$driverOptions, \$connectionOptions] = \$this->splitOptions(\$driverOptions);

        return new Connection(
            \$this->_constructPdoDsn(\$params, \$connectionOptions),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * Constructs the Sqlsrv PDO DSN.
     *
     * @param mixed[]  \$params
     * @param string[] \$connectionOptions
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params, array \$connectionOptions)
    {
        \$dsn = 'sqlsrv:server=';

        if (isset(\$params['host'])) {
            \$dsn .= \$params['host'];
        }

        if (isset(\$params['port']) && ! empty(\$params['port'])) {
            \$dsn .= ',' . \$params['port'];
        }

        if (isset(\$params['dbname'])) {
            \$connectionOptions['Database'] = \$params['dbname'];
        }

        if (isset(\$params['MultipleActiveResultSets'])) {
            \$connectionOptions['MultipleActiveResultSets'] = \$params['MultipleActiveResultSets'] ? 'true' : 'false';
        }

        return \$dsn . \$this->getConnectionOptionsDsn(\$connectionOptions);
    }

    /**
     * Separates a connection options from a driver options
     *
     * @param int[]|string[] \$options
     *
     * @return int[][]|string[][]
     */
    private function splitOptions(array \$options) : array
    {
        \$driverOptions     = [];
        \$connectionOptions = [];

        foreach (\$options as \$optionKey => \$optionValue) {
            if (is_int(\$optionKey)) {
                \$driverOptions[\$optionKey] = \$optionValue;
            } else {
                \$connectionOptions[\$optionKey] = \$optionValue;
            }
        }

        return [\$driverOptions, \$connectionOptions];
    }

    /**
     * Converts a connection options array to the DSN
     *
     * @param string[] \$connectionOptions
     */
    private function getConnectionOptionsDsn(array \$connectionOptions) : string
    {
        \$connectionOptionsDsn = '';

        foreach (\$connectionOptions as \$paramName => \$paramValue) {
            \$connectionOptionsDsn .= sprintf(';%s=%s', \$paramName, \$paramValue);
        }

        return \$connectionOptionsDsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_sqlsrv';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php");
    }
}
