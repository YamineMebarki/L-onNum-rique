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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/AbstractFileConfiguration.php */
class __TwigTemplate_c40583a77fc3a37826425095a78d9d36cb77fae21e6b01c6be3ad1a6374d0fe0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/AbstractFileConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/AbstractFileConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\FileAlreadyLoaded;
use Doctrine\\Migrations\\Configuration\\Exception\\FileNotFound;
use Doctrine\\Migrations\\Configuration\\Exception\\InvalidConfigurationKey;
use Doctrine\\Migrations\\Configuration\\Exception\\UnknownConfigurationValue;
use function dirname;
use function file_exists;
use function getcwd;
use function in_array;
use function realpath;
use function strcasecmp;

/**
 * The AbstractFileConfiguration class is responsible for loading migration configuration information from a file.
 *
 * @internal
 */
abstract class AbstractFileConfiguration extends Configuration
{
    private const ALLOWED_CONFIGURATION_KEYS = [
        'migrations_namespace',
        'table_name',
        'column_name',
        'column_length',
        'executed_at_column_name',
        'organize_migrations',
        'name',
        'migrations_directory',
        'migrations',
        'custom_template',
        'all_or_nothing',
        'check_database_platform',
    ];

    private const CONFIGURATION_METHOD_MAP = [
        'migrations_namespace'      => 'setMigrationsNamespace',
        'table_name'                => 'setMigrationsTableName',
        'column_name'               => 'setMigrationsColumnName',
        'column_length'             => 'setMigrationsColumnLength',
        'executed_at_column_name'   => 'setMigrationsExecutedAtColumnName',
        'organize_migrations'       => 'setMigrationOrganization',
        'name'                      => 'setName',
        'migrations_directory'      => 'loadMigrationsFromDirectory',
        'migrations'                => 'loadMigrations',
        'custom_template'           => 'setCustomTemplate',
        'all_or_nothing'            => 'setAllOrNothing',
        'check_database_platform'   => 'setCheckDatabasePlatform',
    ];

    /** @var string */
    private \$file;

    /** @var bool */
    private \$loaded = false;

    /**
     * @throws FileNotFound
     */
    public function load(string \$file) : void
    {
        if (\$this->loaded) {
            throw FileAlreadyLoaded::new();
        }

        \$path = getcwd() . '/' . \$file;

        if (file_exists(\$path)) {
            \$file = \$path;
        }

        \$this->file = \$file;

        if (! file_exists(\$file)) {
            throw FileNotFound::new();
        }

        \$this->doLoad(\$file);
        \$this->loaded = true;
    }

    public function getFile() : string
    {
        return \$this->file;
    }

    /**
     * @param mixed[] \$config
     */
    protected function setConfiguration(array \$config) : void
    {
        foreach (\$config as \$configurationKey => \$configurationValue) {
            if (! in_array(\$configurationKey, self::ALLOWED_CONFIGURATION_KEYS, true)) {
                throw InvalidConfigurationKey::new(\$configurationKey);
            }
        }

        foreach (self::CONFIGURATION_METHOD_MAP as \$key => \$method) {
            if (! isset(\$config[\$key])) {
                continue;
            }

            \$this->\$method(\$config[\$key]);
        }
    }

    protected function getDirectoryRelativeToFile(string \$file, string \$input) : string
    {
        \$path = realpath(dirname(\$file) . '/' . \$input);

        return \$path !== false ? \$path : \$input;
    }

    /**
     * Abstract method that each file configuration driver must implement to
     * load the given configuration file whether it be xml, yaml, etc. or something
     * else.
     */
    abstract protected function doLoad(string \$file) : void;

    private function loadMigrationsFromDirectory(string \$migrationsDirectory) : void
    {
        \$this->setMigrationsDirectory(\$migrationsDirectory);
        \$this->registerMigrationsFromDirectory(\$migrationsDirectory);
    }

    /** @param string[][] \$migrations */
    private function loadMigrations(array \$migrations) : void
    {
        foreach (\$migrations as \$migration) {
            \$this->registerMigration(
                \$migration['version'],
                \$migration['class']
            );
        }
    }

    private function setMigrationOrganization(string \$migrationOrganization) : void
    {
        if (strcasecmp(\$migrationOrganization, self::VERSIONS_ORGANIZATION_BY_YEAR) === 0) {
            \$this->setMigrationsAreOrganizedByYear();
        } elseif (strcasecmp(\$migrationOrganization, self::VERSIONS_ORGANIZATION_BY_YEAR_AND_MONTH) === 0) {
            \$this->setMigrationsAreOrganizedByYearAndMonth();
        } else {
            throw UnknownConfigurationValue::new('organize_migrations', \$migrationOrganization);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/AbstractFileConfiguration.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration;

use Doctrine\\Migrations\\Configuration\\Exception\\FileAlreadyLoaded;
use Doctrine\\Migrations\\Configuration\\Exception\\FileNotFound;
use Doctrine\\Migrations\\Configuration\\Exception\\InvalidConfigurationKey;
use Doctrine\\Migrations\\Configuration\\Exception\\UnknownConfigurationValue;
use function dirname;
use function file_exists;
use function getcwd;
use function in_array;
use function realpath;
use function strcasecmp;

/**
 * The AbstractFileConfiguration class is responsible for loading migration configuration information from a file.
 *
 * @internal
 */
abstract class AbstractFileConfiguration extends Configuration
{
    private const ALLOWED_CONFIGURATION_KEYS = [
        'migrations_namespace',
        'table_name',
        'column_name',
        'column_length',
        'executed_at_column_name',
        'organize_migrations',
        'name',
        'migrations_directory',
        'migrations',
        'custom_template',
        'all_or_nothing',
        'check_database_platform',
    ];

    private const CONFIGURATION_METHOD_MAP = [
        'migrations_namespace'      => 'setMigrationsNamespace',
        'table_name'                => 'setMigrationsTableName',
        'column_name'               => 'setMigrationsColumnName',
        'column_length'             => 'setMigrationsColumnLength',
        'executed_at_column_name'   => 'setMigrationsExecutedAtColumnName',
        'organize_migrations'       => 'setMigrationOrganization',
        'name'                      => 'setName',
        'migrations_directory'      => 'loadMigrationsFromDirectory',
        'migrations'                => 'loadMigrations',
        'custom_template'           => 'setCustomTemplate',
        'all_or_nothing'            => 'setAllOrNothing',
        'check_database_platform'   => 'setCheckDatabasePlatform',
    ];

    /** @var string */
    private \$file;

    /** @var bool */
    private \$loaded = false;

    /**
     * @throws FileNotFound
     */
    public function load(string \$file) : void
    {
        if (\$this->loaded) {
            throw FileAlreadyLoaded::new();
        }

        \$path = getcwd() . '/' . \$file;

        if (file_exists(\$path)) {
            \$file = \$path;
        }

        \$this->file = \$file;

        if (! file_exists(\$file)) {
            throw FileNotFound::new();
        }

        \$this->doLoad(\$file);
        \$this->loaded = true;
    }

    public function getFile() : string
    {
        return \$this->file;
    }

    /**
     * @param mixed[] \$config
     */
    protected function setConfiguration(array \$config) : void
    {
        foreach (\$config as \$configurationKey => \$configurationValue) {
            if (! in_array(\$configurationKey, self::ALLOWED_CONFIGURATION_KEYS, true)) {
                throw InvalidConfigurationKey::new(\$configurationKey);
            }
        }

        foreach (self::CONFIGURATION_METHOD_MAP as \$key => \$method) {
            if (! isset(\$config[\$key])) {
                continue;
            }

            \$this->\$method(\$config[\$key]);
        }
    }

    protected function getDirectoryRelativeToFile(string \$file, string \$input) : string
    {
        \$path = realpath(dirname(\$file) . '/' . \$input);

        return \$path !== false ? \$path : \$input;
    }

    /**
     * Abstract method that each file configuration driver must implement to
     * load the given configuration file whether it be xml, yaml, etc. or something
     * else.
     */
    abstract protected function doLoad(string \$file) : void;

    private function loadMigrationsFromDirectory(string \$migrationsDirectory) : void
    {
        \$this->setMigrationsDirectory(\$migrationsDirectory);
        \$this->registerMigrationsFromDirectory(\$migrationsDirectory);
    }

    /** @param string[][] \$migrations */
    private function loadMigrations(array \$migrations) : void
    {
        foreach (\$migrations as \$migration) {
            \$this->registerMigration(
                \$migration['version'],
                \$migration['class']
            );
        }
    }

    private function setMigrationOrganization(string \$migrationOrganization) : void
    {
        if (strcasecmp(\$migrationOrganization, self::VERSIONS_ORGANIZATION_BY_YEAR) === 0) {
            \$this->setMigrationsAreOrganizedByYear();
        } elseif (strcasecmp(\$migrationOrganization, self::VERSIONS_ORGANIZATION_BY_YEAR_AND_MONTH) === 0) {
            \$this->setMigrationsAreOrganizedByYearAndMonth();
        } else {
            throw UnknownConfigurationValue::new('organize_migrations', \$migrationOrganization);
        }
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/AbstractFileConfiguration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/AbstractFileConfiguration.php");
    }
}
