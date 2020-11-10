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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/MigratorConfiguration.php */
class __TwigTemplate_565e0470c2873a72811d228d0f020b0c96e5138b8392e709efc318cbd61c5e25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigratorConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigratorConfiguration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The MigratorConfiguration class is responsible for defining the configuration for a migration.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Migrator
 * @see Doctrine\\Migrations\\Version\\Executor
 */
class MigratorConfiguration
{
    /** @var bool */
    private \$dryRun = false;

    /** @var bool */
    private \$timeAllQueries = false;

    /** @var bool */
    private \$noMigrationException = false;

    /** @var bool */
    private \$allOrNothing = false;

    /** @var Schema|null */
    private \$fromSchema;

    public function isDryRun() : bool
    {
        return \$this->dryRun;
    }

    public function setDryRun(bool \$dryRun) : self
    {
        \$this->dryRun = \$dryRun;

        return \$this;
    }

    public function getTimeAllQueries() : bool
    {
        return \$this->timeAllQueries;
    }

    public function setTimeAllQueries(bool \$timeAllQueries) : self
    {
        \$this->timeAllQueries = \$timeAllQueries;

        return \$this;
    }

    public function getNoMigrationException() : bool
    {
        return \$this->noMigrationException;
    }

    public function setNoMigrationException(bool \$noMigrationException = false) : self
    {
        \$this->noMigrationException = \$noMigrationException;

        return \$this;
    }

    public function isAllOrNothing() : bool
    {
        return \$this->allOrNothing;
    }

    public function setAllOrNothing(bool \$allOrNothing) : self
    {
        \$this->allOrNothing = \$allOrNothing;

        return \$this;
    }

    public function getFromSchema() : ?Schema
    {
        return \$this->fromSchema;
    }

    public function setFromSchema(Schema \$fromSchema) : self
    {
        \$this->fromSchema = \$fromSchema;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigratorConfiguration.php";
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

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The MigratorConfiguration class is responsible for defining the configuration for a migration.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Migrator
 * @see Doctrine\\Migrations\\Version\\Executor
 */
class MigratorConfiguration
{
    /** @var bool */
    private \$dryRun = false;

    /** @var bool */
    private \$timeAllQueries = false;

    /** @var bool */
    private \$noMigrationException = false;

    /** @var bool */
    private \$allOrNothing = false;

    /** @var Schema|null */
    private \$fromSchema;

    public function isDryRun() : bool
    {
        return \$this->dryRun;
    }

    public function setDryRun(bool \$dryRun) : self
    {
        \$this->dryRun = \$dryRun;

        return \$this;
    }

    public function getTimeAllQueries() : bool
    {
        return \$this->timeAllQueries;
    }

    public function setTimeAllQueries(bool \$timeAllQueries) : self
    {
        \$this->timeAllQueries = \$timeAllQueries;

        return \$this;
    }

    public function getNoMigrationException() : bool
    {
        return \$this->noMigrationException;
    }

    public function setNoMigrationException(bool \$noMigrationException = false) : self
    {
        \$this->noMigrationException = \$noMigrationException;

        return \$this;
    }

    public function isAllOrNothing() : bool
    {
        return \$this->allOrNothing;
    }

    public function setAllOrNothing(bool \$allOrNothing) : self
    {
        \$this->allOrNothing = \$allOrNothing;

        return \$this;
    }

    public function getFromSchema() : ?Schema
    {
        return \$this->fromSchema;
    }

    public function setFromSchema(Schema \$fromSchema) : self
    {
        \$this->fromSchema = \$fromSchema;

        return \$this;
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/MigratorConfiguration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/MigratorConfiguration.php");
    }
}
