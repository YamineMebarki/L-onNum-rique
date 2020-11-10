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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php */
class __TwigTemplate_661c7e6fd2fa6ef66199322db5135adcce2de52fea7a654c21d60211d3fc6a24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlite;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractSQLiteDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\Platforms\\SqlitePlatform;
use PDOException;
use function array_merge;

/**
 * The PDO Sqlite driver.
 */
class Driver extends AbstractSQLiteDriver
{
    /** @var mixed[] */
    protected \$_userDefinedFunctions = [
        'sqrt' => ['callback' => [SqlitePlatform::class, 'udfSqrt'], 'numArgs' => 1],
        'mod'  => ['callback' => [SqlitePlatform::class, 'udfMod'], 'numArgs' => 2],
        'locate'  => ['callback' => [SqlitePlatform::class, 'udfLocate'], 'numArgs' => -1],
    ];

    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        if (isset(\$driverOptions['userDefinedFunctions'])) {
            \$this->_userDefinedFunctions = array_merge(
                \$this->_userDefinedFunctions,
                \$driverOptions['userDefinedFunctions']
            );
            unset(\$driverOptions['userDefinedFunctions']);
        }

        try {
            \$pdo = new PDOConnection(
                \$this->_constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$ex) {
            throw DBALException::driverException(\$this, \$ex);
        }

        foreach (\$this->_userDefinedFunctions as \$fn => \$data) {
            \$pdo->sqliteCreateFunction(\$fn, \$data['callback'], \$data['numArgs']);
        }

        return \$pdo;
    }

    /**
     * Constructs the Sqlite PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    protected function _constructPdoDsn(array \$params)
    {
        \$dsn = 'sqlite:';
        if (isset(\$params['path'])) {
            \$dsn .= \$params['path'];
        } elseif (isset(\$params['memory'])) {
            \$dsn .= ':memory:';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_sqlite';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlite;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractSQLiteDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use Doctrine\\DBAL\\Platforms\\SqlitePlatform;
use PDOException;
use function array_merge;

/**
 * The PDO Sqlite driver.
 */
class Driver extends AbstractSQLiteDriver
{
    /** @var mixed[] */
    protected \$_userDefinedFunctions = [
        'sqrt' => ['callback' => [SqlitePlatform::class, 'udfSqrt'], 'numArgs' => 1],
        'mod'  => ['callback' => [SqlitePlatform::class, 'udfMod'], 'numArgs' => 2],
        'locate'  => ['callback' => [SqlitePlatform::class, 'udfLocate'], 'numArgs' => -1],
    ];

    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        if (isset(\$driverOptions['userDefinedFunctions'])) {
            \$this->_userDefinedFunctions = array_merge(
                \$this->_userDefinedFunctions,
                \$driverOptions['userDefinedFunctions']
            );
            unset(\$driverOptions['userDefinedFunctions']);
        }

        try {
            \$pdo = new PDOConnection(
                \$this->_constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$ex) {
            throw DBALException::driverException(\$this, \$ex);
        }

        foreach (\$this->_userDefinedFunctions as \$fn => \$data) {
            \$pdo->sqliteCreateFunction(\$fn, \$data['callback'], \$data['numArgs']);
        }

        return \$pdo;
    }

    /**
     * Constructs the Sqlite PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    protected function _constructPdoDsn(array \$params)
    {
        \$dsn = 'sqlite:';
        if (isset(\$params['path'])) {
            \$dsn .= \$params['path'];
        } elseif (isset(\$params['memory'])) {
            \$dsn .= ':memory:';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_sqlite';
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php");
    }
}
