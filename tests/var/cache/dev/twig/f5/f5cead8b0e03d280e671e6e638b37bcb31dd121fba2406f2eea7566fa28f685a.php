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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php */
class __TwigTemplate_9270a9ba37a48e4711e0c0fe4883290d3712f8663912eb3d466465cd4a62ca0b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Platforms\\MariaDb1027Platform;
use Doctrine\\DBAL\\Platforms\\MySQL57Platform;
use Doctrine\\DBAL\\Platforms\\MySQL80Platform;
use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Schema\\MySqlSchemaManager;
use Doctrine\\DBAL\\VersionAwarePlatformDriver;
use function preg_match;
use function stripos;
use function version_compare;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for MySQL based drivers.
 */
abstract class AbstractMySQLDriver implements Driver, ExceptionConverterDriver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     *
     * @link http://dev.mysql.com/doc/refman/5.7/en/error-messages-client.html
     * @link http://dev.mysql.com/doc/refman/5.7/en/error-messages-server.html
     */
    public function convertException(\$message, DriverException \$exception)
    {
        switch (\$exception->getErrorCode()) {
            case '1213':
                return new Exception\\DeadlockException(\$message, \$exception);
            case '1205':
                return new Exception\\LockWaitTimeoutException(\$message, \$exception);
            case '1050':
                return new Exception\\TableExistsException(\$message, \$exception);

            case '1051':
            case '1146':
                return new Exception\\TableNotFoundException(\$message, \$exception);

            case '1216':
            case '1217':
            case '1451':
            case '1452':
            case '1701':
                return new Exception\\ForeignKeyConstraintViolationException(\$message, \$exception);

            case '1062':
            case '1557':
            case '1569':
            case '1586':
                return new Exception\\UniqueConstraintViolationException(\$message, \$exception);

            case '1054':
            case '1166':
            case '1611':
                return new Exception\\InvalidFieldNameException(\$message, \$exception);

            case '1052':
            case '1060':
            case '1110':
                return new Exception\\NonUniqueFieldNameException(\$message, \$exception);

            case '1064':
            case '1149':
            case '1287':
            case '1341':
            case '1342':
            case '1343':
            case '1344':
            case '1382':
            case '1479':
            case '1541':
            case '1554':
            case '1626':
                return new Exception\\SyntaxErrorException(\$message, \$exception);

            case '1044':
            case '1045':
            case '1046':
            case '1049':
            case '1095':
            case '1142':
            case '1143':
            case '1227':
            case '1370':
            case '1429':
            case '2002':
            case '2005':
                return new Exception\\ConnectionException(\$message, \$exception);

            case '1048':
            case '1121':
            case '1138':
            case '1171':
            case '1252':
            case '1263':
            case '1364':
            case '1566':
                return new Exception\\NotNullConstraintViolationException(\$message, \$exception);
        }

        return new Exception\\DriverException(\$message, \$exception);
    }

    /**
     * {@inheritdoc}
     *
     * @throws DBALException
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        \$mariadb = stripos(\$version, 'mariadb') !== false;
        if (\$mariadb && version_compare(\$this->getMariaDbMysqlVersionNumber(\$version), '10.2.7', '>=')) {
            return new MariaDb1027Platform();
        }

        if (! \$mariadb) {
            \$oracleMysqlVersion = \$this->getOracleMysqlVersionNumber(\$version);
            if (version_compare(\$oracleMysqlVersion, '8', '>=')) {
                return new MySQL80Platform();
            }
            if (version_compare(\$oracleMysqlVersion, '5.7.9', '>=')) {
                return new MySQL57Platform();
            }
        }

        return \$this->getDatabasePlatform();
    }

    /**
     * Get a normalized 'version number' from the server string
     * returned by Oracle MySQL servers.
     *
     * @param string \$versionString Version string returned by the driver, i.e. '5.7.10'
     *
     * @throws DBALException
     */
    private function getOracleMysqlVersionNumber(string \$versionString) : string
    {
        if (! preg_match(
            '/^(?P<major>\\d+)(?:\\.(?P<minor>\\d+)(?:\\.(?P<patch>\\d+))?)?/',
            \$versionString,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$versionString,
                '<major_version>.<minor_version>.<patch_version>'
            );
        }
        \$majorVersion = \$versionParts['major'];
        \$minorVersion = \$versionParts['minor'] ?? 0;
        \$patchVersion = \$versionParts['patch'] ?? null;

        if (\$majorVersion === '5' && \$minorVersion === '7' && \$patchVersion === null) {
            \$patchVersion = '9';
        }

        return \$majorVersion . '.' . \$minorVersion . '.' . \$patchVersion;
    }

    /**
     * Detect MariaDB server version, including hack for some mariadb distributions
     * that starts with the prefix '5.5.5-'
     *
     * @param string \$versionString Version string as returned by mariadb server, i.e. '5.5.5-Mariadb-10.0.8-xenial'
     *
     * @throws DBALException
     */
    private function getMariaDbMysqlVersionNumber(string \$versionString) : string
    {
        if (! preg_match(
            '/^(?:5\\.5\\.5-)?(mariadb-)?(?P<major>\\d+)\\.(?P<minor>\\d+)\\.(?P<patch>\\d+)/i',
            \$versionString,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$versionString,
                '^(?:5\\.5\\.5-)?(mariadb-)?<major_version>.<minor_version>.<patch_version>'
            );
        }

        return \$versionParts['major'] . '.' . \$versionParts['minor'] . '.' . \$versionParts['patch'];
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['dbname'] ?? \$conn->query('SELECT DATABASE()')->fetchColumn();
    }

    /**
     * {@inheritdoc}
     *
     * @return MySqlPlatform
     */
    public function getDatabasePlatform()
    {
        return new MySqlPlatform();
    }

    /**
     * {@inheritdoc}
     *
     * @return MySqlSchemaManager
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new MySqlSchemaManager(\$conn);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Platforms\\MariaDb1027Platform;
use Doctrine\\DBAL\\Platforms\\MySQL57Platform;
use Doctrine\\DBAL\\Platforms\\MySQL80Platform;
use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Schema\\MySqlSchemaManager;
use Doctrine\\DBAL\\VersionAwarePlatformDriver;
use function preg_match;
use function stripos;
use function version_compare;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for MySQL based drivers.
 */
abstract class AbstractMySQLDriver implements Driver, ExceptionConverterDriver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     *
     * @link http://dev.mysql.com/doc/refman/5.7/en/error-messages-client.html
     * @link http://dev.mysql.com/doc/refman/5.7/en/error-messages-server.html
     */
    public function convertException(\$message, DriverException \$exception)
    {
        switch (\$exception->getErrorCode()) {
            case '1213':
                return new Exception\\DeadlockException(\$message, \$exception);
            case '1205':
                return new Exception\\LockWaitTimeoutException(\$message, \$exception);
            case '1050':
                return new Exception\\TableExistsException(\$message, \$exception);

            case '1051':
            case '1146':
                return new Exception\\TableNotFoundException(\$message, \$exception);

            case '1216':
            case '1217':
            case '1451':
            case '1452':
            case '1701':
                return new Exception\\ForeignKeyConstraintViolationException(\$message, \$exception);

            case '1062':
            case '1557':
            case '1569':
            case '1586':
                return new Exception\\UniqueConstraintViolationException(\$message, \$exception);

            case '1054':
            case '1166':
            case '1611':
                return new Exception\\InvalidFieldNameException(\$message, \$exception);

            case '1052':
            case '1060':
            case '1110':
                return new Exception\\NonUniqueFieldNameException(\$message, \$exception);

            case '1064':
            case '1149':
            case '1287':
            case '1341':
            case '1342':
            case '1343':
            case '1344':
            case '1382':
            case '1479':
            case '1541':
            case '1554':
            case '1626':
                return new Exception\\SyntaxErrorException(\$message, \$exception);

            case '1044':
            case '1045':
            case '1046':
            case '1049':
            case '1095':
            case '1142':
            case '1143':
            case '1227':
            case '1370':
            case '1429':
            case '2002':
            case '2005':
                return new Exception\\ConnectionException(\$message, \$exception);

            case '1048':
            case '1121':
            case '1138':
            case '1171':
            case '1252':
            case '1263':
            case '1364':
            case '1566':
                return new Exception\\NotNullConstraintViolationException(\$message, \$exception);
        }

        return new Exception\\DriverException(\$message, \$exception);
    }

    /**
     * {@inheritdoc}
     *
     * @throws DBALException
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        \$mariadb = stripos(\$version, 'mariadb') !== false;
        if (\$mariadb && version_compare(\$this->getMariaDbMysqlVersionNumber(\$version), '10.2.7', '>=')) {
            return new MariaDb1027Platform();
        }

        if (! \$mariadb) {
            \$oracleMysqlVersion = \$this->getOracleMysqlVersionNumber(\$version);
            if (version_compare(\$oracleMysqlVersion, '8', '>=')) {
                return new MySQL80Platform();
            }
            if (version_compare(\$oracleMysqlVersion, '5.7.9', '>=')) {
                return new MySQL57Platform();
            }
        }

        return \$this->getDatabasePlatform();
    }

    /**
     * Get a normalized 'version number' from the server string
     * returned by Oracle MySQL servers.
     *
     * @param string \$versionString Version string returned by the driver, i.e. '5.7.10'
     *
     * @throws DBALException
     */
    private function getOracleMysqlVersionNumber(string \$versionString) : string
    {
        if (! preg_match(
            '/^(?P<major>\\d+)(?:\\.(?P<minor>\\d+)(?:\\.(?P<patch>\\d+))?)?/',
            \$versionString,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$versionString,
                '<major_version>.<minor_version>.<patch_version>'
            );
        }
        \$majorVersion = \$versionParts['major'];
        \$minorVersion = \$versionParts['minor'] ?? 0;
        \$patchVersion = \$versionParts['patch'] ?? null;

        if (\$majorVersion === '5' && \$minorVersion === '7' && \$patchVersion === null) {
            \$patchVersion = '9';
        }

        return \$majorVersion . '.' . \$minorVersion . '.' . \$patchVersion;
    }

    /**
     * Detect MariaDB server version, including hack for some mariadb distributions
     * that starts with the prefix '5.5.5-'
     *
     * @param string \$versionString Version string as returned by mariadb server, i.e. '5.5.5-Mariadb-10.0.8-xenial'
     *
     * @throws DBALException
     */
    private function getMariaDbMysqlVersionNumber(string \$versionString) : string
    {
        if (! preg_match(
            '/^(?:5\\.5\\.5-)?(mariadb-)?(?P<major>\\d+)\\.(?P<minor>\\d+)\\.(?P<patch>\\d+)/i',
            \$versionString,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$versionString,
                '^(?:5\\.5\\.5-)?(mariadb-)?<major_version>.<minor_version>.<patch_version>'
            );
        }

        return \$versionParts['major'] . '.' . \$versionParts['minor'] . '.' . \$versionParts['patch'];
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['dbname'] ?? \$conn->query('SELECT DATABASE()')->fetchColumn();
    }

    /**
     * {@inheritdoc}
     *
     * @return MySqlPlatform
     */
    public function getDatabasePlatform()
    {
        return new MySqlPlatform();
    }

    /**
     * {@inheritdoc}
     *
     * @return MySqlSchemaManager
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new MySqlSchemaManager(\$conn);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php");
    }
}
