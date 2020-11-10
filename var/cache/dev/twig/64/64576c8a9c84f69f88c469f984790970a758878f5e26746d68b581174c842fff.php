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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php */
class __TwigTemplate_fe4bc943fc121c227be465052164691b6d954fa662aeca7ae89f417b60b526f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOPgSql;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractPostgreSQLDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDO;
use PDOException;
use function defined;

/**
 * Driver that connects through pdo_pgsql.
 */
class Driver extends AbstractPostgreSQLDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            \$pdo = new PDOConnection(
                \$this->_constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );

            if (defined('PDO::PGSQL_ATTR_DISABLE_PREPARES')
                && (! isset(\$driverOptions[PDO::PGSQL_ATTR_DISABLE_PREPARES])
                    || \$driverOptions[PDO::PGSQL_ATTR_DISABLE_PREPARES] === true
                )
            ) {
                \$pdo->setAttribute(PDO::PGSQL_ATTR_DISABLE_PREPARES, true);
            }

            /* defining client_encoding via SET NAMES to avoid inconsistent DSN support
             * - the 'client_encoding' connection param only works with postgres >= 9.1
             * - passing client_encoding via the 'options' param breaks pgbouncer support
             */
            if (isset(\$params['charset'])) {
                \$pdo->exec('SET NAMES \\'' . \$params['charset'] . '\\'');
            }

            return \$pdo;
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Postgres PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params)
    {
        \$dsn = 'pgsql:';

        if (isset(\$params['host']) && \$params['host'] !== '') {
            \$dsn .= 'host=' . \$params['host'] . ';';
        }

        if (isset(\$params['port']) && \$params['port'] !== '') {
            \$dsn .= 'port=' . \$params['port'] . ';';
        }

        if (isset(\$params['dbname'])) {
            \$dsn .= 'dbname=' . \$params['dbname'] . ';';
        } elseif (isset(\$params['default_dbname'])) {
            \$dsn .= 'dbname=' . \$params['default_dbname'] . ';';
        } else {
            // Used for temporary connections to allow operations like dropping the database currently connected to.
            // Connecting without an explicit database does not work, therefore \"postgres\" database is used
            // as it is mostly present in every server setup.
            \$dsn .= 'dbname=postgres;';
        }

        if (isset(\$params['sslmode'])) {
            \$dsn .= 'sslmode=' . \$params['sslmode'] . ';';
        }

        if (isset(\$params['sslrootcert'])) {
            \$dsn .= 'sslrootcert=' . \$params['sslrootcert'] . ';';
        }

        if (isset(\$params['sslcert'])) {
            \$dsn .= 'sslcert=' . \$params['sslcert'] . ';';
        }

        if (isset(\$params['sslkey'])) {
            \$dsn .= 'sslkey=' . \$params['sslkey'] . ';';
        }

        if (isset(\$params['sslcrl'])) {
            \$dsn .= 'sslcrl=' . \$params['sslcrl'] . ';';
        }

        if (isset(\$params['application_name'])) {
            \$dsn .= 'application_name=' . \$params['application_name'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_pgsql';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOPgSql;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractPostgreSQLDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDO;
use PDOException;
use function defined;

/**
 * Driver that connects through pdo_pgsql.
 */
class Driver extends AbstractPostgreSQLDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            \$pdo = new PDOConnection(
                \$this->_constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );

            if (defined('PDO::PGSQL_ATTR_DISABLE_PREPARES')
                && (! isset(\$driverOptions[PDO::PGSQL_ATTR_DISABLE_PREPARES])
                    || \$driverOptions[PDO::PGSQL_ATTR_DISABLE_PREPARES] === true
                )
            ) {
                \$pdo->setAttribute(PDO::PGSQL_ATTR_DISABLE_PREPARES, true);
            }

            /* defining client_encoding via SET NAMES to avoid inconsistent DSN support
             * - the 'client_encoding' connection param only works with postgres >= 9.1
             * - passing client_encoding via the 'options' param breaks pgbouncer support
             */
            if (isset(\$params['charset'])) {
                \$pdo->exec('SET NAMES \\'' . \$params['charset'] . '\\'');
            }

            return \$pdo;
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Postgres PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params)
    {
        \$dsn = 'pgsql:';

        if (isset(\$params['host']) && \$params['host'] !== '') {
            \$dsn .= 'host=' . \$params['host'] . ';';
        }

        if (isset(\$params['port']) && \$params['port'] !== '') {
            \$dsn .= 'port=' . \$params['port'] . ';';
        }

        if (isset(\$params['dbname'])) {
            \$dsn .= 'dbname=' . \$params['dbname'] . ';';
        } elseif (isset(\$params['default_dbname'])) {
            \$dsn .= 'dbname=' . \$params['default_dbname'] . ';';
        } else {
            // Used for temporary connections to allow operations like dropping the database currently connected to.
            // Connecting without an explicit database does not work, therefore \"postgres\" database is used
            // as it is mostly present in every server setup.
            \$dsn .= 'dbname=postgres;';
        }

        if (isset(\$params['sslmode'])) {
            \$dsn .= 'sslmode=' . \$params['sslmode'] . ';';
        }

        if (isset(\$params['sslrootcert'])) {
            \$dsn .= 'sslrootcert=' . \$params['sslrootcert'] . ';';
        }

        if (isset(\$params['sslcert'])) {
            \$dsn .= 'sslcert=' . \$params['sslcert'] . ';';
        }

        if (isset(\$params['sslkey'])) {
            \$dsn .= 'sslkey=' . \$params['sslkey'] . ';';
        }

        if (isset(\$params['sslcrl'])) {
            \$dsn .= 'sslcrl=' . \$params['sslcrl'] . ';';
        }

        if (isset(\$params['application_name'])) {
            \$dsn .= 'application_name=' . \$params['application_name'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_pgsql';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php");
    }
}
