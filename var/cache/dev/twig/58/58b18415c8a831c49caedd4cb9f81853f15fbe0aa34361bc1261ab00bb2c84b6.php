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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php */
class __TwigTemplate_39b91518d1525ad9f76c6d86c3168940c3a644c654ae56835169a9155feb1c69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Portability;

use Doctrine\\DBAL\\Cache\\QueryCacheProfile;
use Doctrine\\DBAL\\ColumnCase;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDO;
use const CASE_LOWER;
use const CASE_UPPER;
use function func_get_args;

/**
 * Portability wrapper for a Connection.
 */
class Connection extends \\Doctrine\\DBAL\\Connection
{
    public const PORTABILITY_ALL           = 255;
    public const PORTABILITY_NONE          = 0;
    public const PORTABILITY_RTRIM         = 1;
    public const PORTABILITY_EMPTY_TO_NULL = 4;
    public const PORTABILITY_FIX_CASE      = 8;

    public const PORTABILITY_DB2          = 13;
    public const PORTABILITY_ORACLE       = 9;
    public const PORTABILITY_POSTGRESQL   = 13;
    public const PORTABILITY_SQLITE       = 13;
    public const PORTABILITY_OTHERVENDORS = 12;
    public const PORTABILITY_DRIZZLE      = 13;
    public const PORTABILITY_SQLANYWHERE  = 13;
    public const PORTABILITY_SQLSRV       = 13;

    /** @var int */
    private \$portability = self::PORTABILITY_NONE;

    /** @var int */
    private \$case;

    /**
     * {@inheritdoc}
     */
    public function connect()
    {
        \$ret = parent::connect();
        if (\$ret) {
            \$params = \$this->getParams();
            if (isset(\$params['portability'])) {
                if (\$this->getDatabasePlatform()->getName() === 'oracle') {
                    \$params['portability'] &= self::PORTABILITY_ORACLE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'postgresql') {
                    \$params['portability'] &= self::PORTABILITY_POSTGRESQL;
                } elseif (\$this->getDatabasePlatform()->getName() === 'sqlite') {
                    \$params['portability'] &= self::PORTABILITY_SQLITE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'drizzle') {
                    \$params['portability'] &= self::PORTABILITY_DRIZZLE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'sqlanywhere') {
                    \$params['portability'] &= self::PORTABILITY_SQLANYWHERE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'db2') {
                    \$params['portability'] &= self::PORTABILITY_DB2;
                } elseif (\$this->getDatabasePlatform()->getName() === 'mssql') {
                    \$params['portability'] &= self::PORTABILITY_SQLSRV;
                } else {
                    \$params['portability'] &= self::PORTABILITY_OTHERVENDORS;
                }
                \$this->portability = \$params['portability'];
            }

            if (isset(\$params['fetch_case']) && \$this->portability & self::PORTABILITY_FIX_CASE) {
                if (\$this->_conn instanceof PDOConnection) {
                    // make use of c-level support for case handling
                    \$this->_conn->setAttribute(PDO::ATTR_CASE, \$params['fetch_case']);
                } else {
                    \$this->case = \$params['fetch_case'] === ColumnCase::LOWER ? CASE_LOWER : CASE_UPPER;
                }
            }
        }

        return \$ret;
    }

    /**
     * @return int
     */
    public function getPortability()
    {
        return \$this->portability;
    }

    /**
     * @return int
     */
    public function getFetchCase()
    {
        return \$this->case;
    }

    /**
     * {@inheritdoc}
     */
    public function executeQuery(\$query, array \$params = [], \$types = [], ?QueryCacheProfile \$qcp = null)
    {
        \$stmt = new Statement(parent::executeQuery(\$query, \$params, \$types, \$qcp), \$this);
        \$stmt->setFetchMode(\$this->defaultFetchMode);

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$statement)
    {
        \$stmt = new Statement(parent::prepare(\$statement), \$this);
        \$stmt->setFetchMode(\$this->defaultFetchMode);

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$this->connect();

        \$stmt = \$this->_conn->query(...func_get_args());
        \$stmt = new Statement(\$stmt, \$this);
        \$stmt->setFetchMode(\$this->defaultFetchMode);

        return \$stmt;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Portability;

use Doctrine\\DBAL\\Cache\\QueryCacheProfile;
use Doctrine\\DBAL\\ColumnCase;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDO;
use const CASE_LOWER;
use const CASE_UPPER;
use function func_get_args;

/**
 * Portability wrapper for a Connection.
 */
class Connection extends \\Doctrine\\DBAL\\Connection
{
    public const PORTABILITY_ALL           = 255;
    public const PORTABILITY_NONE          = 0;
    public const PORTABILITY_RTRIM         = 1;
    public const PORTABILITY_EMPTY_TO_NULL = 4;
    public const PORTABILITY_FIX_CASE      = 8;

    public const PORTABILITY_DB2          = 13;
    public const PORTABILITY_ORACLE       = 9;
    public const PORTABILITY_POSTGRESQL   = 13;
    public const PORTABILITY_SQLITE       = 13;
    public const PORTABILITY_OTHERVENDORS = 12;
    public const PORTABILITY_DRIZZLE      = 13;
    public const PORTABILITY_SQLANYWHERE  = 13;
    public const PORTABILITY_SQLSRV       = 13;

    /** @var int */
    private \$portability = self::PORTABILITY_NONE;

    /** @var int */
    private \$case;

    /**
     * {@inheritdoc}
     */
    public function connect()
    {
        \$ret = parent::connect();
        if (\$ret) {
            \$params = \$this->getParams();
            if (isset(\$params['portability'])) {
                if (\$this->getDatabasePlatform()->getName() === 'oracle') {
                    \$params['portability'] &= self::PORTABILITY_ORACLE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'postgresql') {
                    \$params['portability'] &= self::PORTABILITY_POSTGRESQL;
                } elseif (\$this->getDatabasePlatform()->getName() === 'sqlite') {
                    \$params['portability'] &= self::PORTABILITY_SQLITE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'drizzle') {
                    \$params['portability'] &= self::PORTABILITY_DRIZZLE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'sqlanywhere') {
                    \$params['portability'] &= self::PORTABILITY_SQLANYWHERE;
                } elseif (\$this->getDatabasePlatform()->getName() === 'db2') {
                    \$params['portability'] &= self::PORTABILITY_DB2;
                } elseif (\$this->getDatabasePlatform()->getName() === 'mssql') {
                    \$params['portability'] &= self::PORTABILITY_SQLSRV;
                } else {
                    \$params['portability'] &= self::PORTABILITY_OTHERVENDORS;
                }
                \$this->portability = \$params['portability'];
            }

            if (isset(\$params['fetch_case']) && \$this->portability & self::PORTABILITY_FIX_CASE) {
                if (\$this->_conn instanceof PDOConnection) {
                    // make use of c-level support for case handling
                    \$this->_conn->setAttribute(PDO::ATTR_CASE, \$params['fetch_case']);
                } else {
                    \$this->case = \$params['fetch_case'] === ColumnCase::LOWER ? CASE_LOWER : CASE_UPPER;
                }
            }
        }

        return \$ret;
    }

    /**
     * @return int
     */
    public function getPortability()
    {
        return \$this->portability;
    }

    /**
     * @return int
     */
    public function getFetchCase()
    {
        return \$this->case;
    }

    /**
     * {@inheritdoc}
     */
    public function executeQuery(\$query, array \$params = [], \$types = [], ?QueryCacheProfile \$qcp = null)
    {
        \$stmt = new Statement(parent::executeQuery(\$query, \$params, \$types, \$qcp), \$this);
        \$stmt->setFetchMode(\$this->defaultFetchMode);

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$statement)
    {
        \$stmt = new Statement(parent::prepare(\$statement), \$this);
        \$stmt->setFetchMode(\$this->defaultFetchMode);

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$this->connect();

        \$stmt = \$this->_conn->query(...func_get_args());
        \$stmt = new Statement(\$stmt, \$this);
        \$stmt->setFetchMode(\$this->defaultFetchMode);

        return \$stmt;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php");
    }
}
