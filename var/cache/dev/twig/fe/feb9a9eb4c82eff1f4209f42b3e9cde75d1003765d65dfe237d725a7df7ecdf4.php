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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php */
class __TwigTemplate_030fc9f0eff859c71623bf0f4dc87c030ab668d9cab1a0e3a93b3f3cd0e5eb9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Exception\\AbortMigration;
use Doctrine\\Migrations\\Exception\\IrreversibleMigration;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Doctrine\\Migrations\\Version\\Version;
use function sprintf;

/**
 * The AbstractMigration class is for end users to extend from when creating migrations. Extend this class
 * and implement the required up() and down() methods.
 */
abstract class AbstractMigration
{
    /** @var Version */
    protected \$version;

    /** @var Connection */
    protected \$connection;

    /** @var AbstractSchemaManager */
    protected \$sm;

    /** @var AbstractPlatform */
    protected \$platform;

    /** @var OutputWriter */
    private \$outputWriter;

    public function __construct(Version \$version)
    {
        \$config = \$version->getConfiguration();

        \$this->version      = \$version;
        \$this->connection   = \$config->getConnection();
        \$this->sm           = \$this->connection->getSchemaManager();
        \$this->platform     = \$this->connection->getDatabasePlatform();
        \$this->outputWriter = \$config->getOutputWriter();
    }

    /**
     * Indicates the transactional mode of this migration.
     *
     * If this function returns true (default) the migration will be executed
     * in one transaction, otherwise non-transactional state will be used to
     * execute each of the migration SQLs.
     *
     * Extending class should override this function to alter the return value.
     */
    public function isTransactional() : bool
    {
        return true;
    }

    public function getDescription() : string
    {
        return '';
    }

    public function warnIf(bool \$condition, string \$message = '') : void
    {
        if (! \$condition) {
            return;
        }

        \$message = \$message ?: 'Unknown Reason';

        \$this->outputWriter->write(sprintf(
            '    <comment>Warning during %s: %s</comment>',
            \$this->version->getExecutionState(),
            \$message
        ));
    }

    /**
     * @throws AbortMigration
     */
    public function abortIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new AbortMigration(\$message ?: 'Unknown Reason');
        }
    }

    /**
     * @throws SkipMigration
     */
    public function skipIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new SkipMigration(\$message ?: 'Unknown Reason');
        }
    }

    public function preUp(Schema \$schema) : void
    {
    }

    public function postUp(Schema \$schema) : void
    {
    }

    public function preDown(Schema \$schema) : void
    {
    }

    public function postDown(Schema \$schema) : void
    {
    }

    abstract public function up(Schema \$schema) : void;

    abstract public function down(Schema \$schema) : void;

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    protected function addSql(
        string \$sql,
        array \$params = [],
        array \$types = []
    ) : void {
        \$this->version->addSql(\$sql, \$params, \$types);
    }

    protected function write(string \$message) : void
    {
        \$this->outputWriter->write(\$message);
    }

    protected function throwIrreversibleMigrationException(?string \$message = null) : void
    {
        if (\$message === null) {
            \$message = 'This migration is irreversible and cannot be reverted.';
        }

        throw new IrreversibleMigration(\$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Exception\\AbortMigration;
use Doctrine\\Migrations\\Exception\\IrreversibleMigration;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Doctrine\\Migrations\\Version\\Version;
use function sprintf;

/**
 * The AbstractMigration class is for end users to extend from when creating migrations. Extend this class
 * and implement the required up() and down() methods.
 */
abstract class AbstractMigration
{
    /** @var Version */
    protected \$version;

    /** @var Connection */
    protected \$connection;

    /** @var AbstractSchemaManager */
    protected \$sm;

    /** @var AbstractPlatform */
    protected \$platform;

    /** @var OutputWriter */
    private \$outputWriter;

    public function __construct(Version \$version)
    {
        \$config = \$version->getConfiguration();

        \$this->version      = \$version;
        \$this->connection   = \$config->getConnection();
        \$this->sm           = \$this->connection->getSchemaManager();
        \$this->platform     = \$this->connection->getDatabasePlatform();
        \$this->outputWriter = \$config->getOutputWriter();
    }

    /**
     * Indicates the transactional mode of this migration.
     *
     * If this function returns true (default) the migration will be executed
     * in one transaction, otherwise non-transactional state will be used to
     * execute each of the migration SQLs.
     *
     * Extending class should override this function to alter the return value.
     */
    public function isTransactional() : bool
    {
        return true;
    }

    public function getDescription() : string
    {
        return '';
    }

    public function warnIf(bool \$condition, string \$message = '') : void
    {
        if (! \$condition) {
            return;
        }

        \$message = \$message ?: 'Unknown Reason';

        \$this->outputWriter->write(sprintf(
            '    <comment>Warning during %s: %s</comment>',
            \$this->version->getExecutionState(),
            \$message
        ));
    }

    /**
     * @throws AbortMigration
     */
    public function abortIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new AbortMigration(\$message ?: 'Unknown Reason');
        }
    }

    /**
     * @throws SkipMigration
     */
    public function skipIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new SkipMigration(\$message ?: 'Unknown Reason');
        }
    }

    public function preUp(Schema \$schema) : void
    {
    }

    public function postUp(Schema \$schema) : void
    {
    }

    public function preDown(Schema \$schema) : void
    {
    }

    public function postDown(Schema \$schema) : void
    {
    }

    abstract public function up(Schema \$schema) : void;

    abstract public function down(Schema \$schema) : void;

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    protected function addSql(
        string \$sql,
        array \$params = [],
        array \$types = []
    ) : void {
        \$this->version->addSql(\$sql, \$params, \$types);
    }

    protected function write(string \$message) : void
    {
        \$this->outputWriter->write(\$message);
    }

    protected function throwIrreversibleMigrationException(?string \$message = null) : void
    {
        if (\$message === null) {
            \$message = 'This migration is irreversible and cannot be reverted.';
        }

        throw new IrreversibleMigration(\$message);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php");
    }
}
