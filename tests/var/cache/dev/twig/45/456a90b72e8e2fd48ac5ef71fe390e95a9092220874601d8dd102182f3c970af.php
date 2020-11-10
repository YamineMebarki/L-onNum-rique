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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php */
class __TwigTemplate_c48a590c9edcf304db52806e86c76d0d8f23d2881d8ba8baa1a2739c5770a987 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOMySql;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractMySQLDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDOException;

/**
 * PDO MySql driver.
 */
class Driver extends AbstractMySQLDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            \$conn = new PDOConnection(
                \$this->constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }

        return \$conn;
    }

    /**
     * Constructs the MySql PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    protected function constructPdoDsn(array \$params)
    {
        \$dsn = 'mysql:';
        if (isset(\$params['host']) && \$params['host'] !== '') {
            \$dsn .= 'host=' . \$params['host'] . ';';
        }
        if (isset(\$params['port'])) {
            \$dsn .= 'port=' . \$params['port'] . ';';
        }
        if (isset(\$params['dbname'])) {
            \$dsn .= 'dbname=' . \$params['dbname'] . ';';
        }
        if (isset(\$params['unix_socket'])) {
            \$dsn .= 'unix_socket=' . \$params['unix_socket'] . ';';
        }
        if (isset(\$params['charset'])) {
            \$dsn .= 'charset=' . \$params['charset'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_mysql';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOMySql;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractMySQLDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDOException;

/**
 * PDO MySql driver.
 */
class Driver extends AbstractMySQLDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            \$conn = new PDOConnection(
                \$this->constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }

        return \$conn;
    }

    /**
     * Constructs the MySql PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    protected function constructPdoDsn(array \$params)
    {
        \$dsn = 'mysql:';
        if (isset(\$params['host']) && \$params['host'] !== '') {
            \$dsn .= 'host=' . \$params['host'] . ';';
        }
        if (isset(\$params['port'])) {
            \$dsn .= 'port=' . \$params['port'] . ';';
        }
        if (isset(\$params['dbname'])) {
            \$dsn .= 'dbname=' . \$params['dbname'] . ';';
        }
        if (isset(\$params['unix_socket'])) {
            \$dsn .= 'unix_socket=' . \$params['unix_socket'] . ';';
        }
        if (isset(\$params['charset'])) {
            \$dsn .= 'charset=' . \$params['charset'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_mysql';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php");
    }
}
