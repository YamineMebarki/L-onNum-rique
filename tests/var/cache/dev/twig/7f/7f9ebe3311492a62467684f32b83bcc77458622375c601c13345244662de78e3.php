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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php */
class __TwigTemplate_dd5d8a12a2c5feb45090fb74146694746765f6e92261334b61f750748a7ebbbb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\SQLServer2005Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2008Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2012Platform;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;
use Doctrine\\DBAL\\Schema\\SQLServerSchemaManager;
use Doctrine\\DBAL\\VersionAwarePlatformDriver;
use function preg_match;
use function version_compare;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for Microsoft SQL Server based drivers.
 */
abstract class AbstractSQLServerDriver implements Driver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        if (! preg_match(
            '/^(?P<major>\\d+)(?:\\.(?P<minor>\\d+)(?:\\.(?P<patch>\\d+)(?:\\.(?P<build>\\d+))?)?)?/',
            \$version,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$version,
                '<major_version>.<minor_version>.<patch_version>.<build_version>'
            );
        }

        \$majorVersion = \$versionParts['major'];
        \$minorVersion = \$versionParts['minor'] ?? 0;
        \$patchVersion = \$versionParts['patch'] ?? 0;
        \$buildVersion = \$versionParts['build'] ?? 0;
        \$version      = \$majorVersion . '.' . \$minorVersion . '.' . \$patchVersion . '.' . \$buildVersion;

        switch (true) {
            case version_compare(\$version, '11.00.2100', '>='):
                return new SQLServer2012Platform();
            case version_compare(\$version, '10.00.1600', '>='):
                return new SQLServer2008Platform();
            case version_compare(\$version, '9.00.1399', '>='):
                return new SQLServer2005Platform();
            default:
                return new SQLServerPlatform();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['dbname'] ?? \$conn->query('SELECT DB_NAME()')->fetchColumn();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new SQLServer2008Platform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new SQLServerSchemaManager(\$conn);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php";
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
use Doctrine\\DBAL\\Platforms\\SQLServer2005Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2008Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2012Platform;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;
use Doctrine\\DBAL\\Schema\\SQLServerSchemaManager;
use Doctrine\\DBAL\\VersionAwarePlatformDriver;
use function preg_match;
use function version_compare;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for Microsoft SQL Server based drivers.
 */
abstract class AbstractSQLServerDriver implements Driver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        if (! preg_match(
            '/^(?P<major>\\d+)(?:\\.(?P<minor>\\d+)(?:\\.(?P<patch>\\d+)(?:\\.(?P<build>\\d+))?)?)?/',
            \$version,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$version,
                '<major_version>.<minor_version>.<patch_version>.<build_version>'
            );
        }

        \$majorVersion = \$versionParts['major'];
        \$minorVersion = \$versionParts['minor'] ?? 0;
        \$patchVersion = \$versionParts['patch'] ?? 0;
        \$buildVersion = \$versionParts['build'] ?? 0;
        \$version      = \$majorVersion . '.' . \$minorVersion . '.' . \$patchVersion . '.' . \$buildVersion;

        switch (true) {
            case version_compare(\$version, '11.00.2100', '>='):
                return new SQLServer2012Platform();
            case version_compare(\$version, '10.00.1600', '>='):
                return new SQLServer2008Platform();
            case version_compare(\$version, '9.00.1399', '>='):
                return new SQLServer2005Platform();
            default:
                return new SQLServerPlatform();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['dbname'] ?? \$conn->query('SELECT DB_NAME()')->fetchColumn();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new SQLServer2008Platform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new SQLServerSchemaManager(\$conn);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php");
    }
}
