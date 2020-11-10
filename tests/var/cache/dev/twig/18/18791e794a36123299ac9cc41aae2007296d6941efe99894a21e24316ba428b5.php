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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php */
class __TwigTemplate_3c646ce8b5f5fb8bc9eb5b4370984b83fffaf82ce9227f5d72c3f69ffcb4a667 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The synchronizer knows how to synchronize a schema with the configured
 * database.
 */
interface SchemaSynchronizer
{
    /**
     * Gets the SQL statements that can be executed to create the schema.
     *
     * @return string[]
     */
    public function getCreateSchema(Schema \$createSchema);

    /**
     * Gets the SQL Statements to update given schema with the underlying db.
     *
     * @param bool \$noDrops
     *
     * @return string[]
     */
    public function getUpdateSchema(Schema \$toSchema, \$noDrops = false);

    /**
     * Gets the SQL Statements to drop the given schema from underlying db.
     *
     * @return string[]
     */
    public function getDropSchema(Schema \$dropSchema);

    /**
     * Gets the SQL statements to drop all schema assets from underlying db.
     *
     * @return string[]
     */
    public function getDropAllSchema();

    /**
     * Creates the Schema.
     *
     * @return void
     */
    public function createSchema(Schema \$createSchema);

    /**
     * Updates the Schema to new schema version.
     *
     * @param bool \$noDrops
     *
     * @return void
     */
    public function updateSchema(Schema \$toSchema, \$noDrops = false);

    /**
     * Drops the given database schema from the underlying db.
     *
     * @return void
     */
    public function dropSchema(Schema \$dropSchema);

    /**
     * Drops all assets from the underlying db.
     *
     * @return void
     */
    public function dropAllSchema();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The synchronizer knows how to synchronize a schema with the configured
 * database.
 */
interface SchemaSynchronizer
{
    /**
     * Gets the SQL statements that can be executed to create the schema.
     *
     * @return string[]
     */
    public function getCreateSchema(Schema \$createSchema);

    /**
     * Gets the SQL Statements to update given schema with the underlying db.
     *
     * @param bool \$noDrops
     *
     * @return string[]
     */
    public function getUpdateSchema(Schema \$toSchema, \$noDrops = false);

    /**
     * Gets the SQL Statements to drop the given schema from underlying db.
     *
     * @return string[]
     */
    public function getDropSchema(Schema \$dropSchema);

    /**
     * Gets the SQL statements to drop all schema assets from underlying db.
     *
     * @return string[]
     */
    public function getDropAllSchema();

    /**
     * Creates the Schema.
     *
     * @return void
     */
    public function createSchema(Schema \$createSchema);

    /**
     * Updates the Schema to new schema version.
     *
     * @param bool \$noDrops
     *
     * @return void
     */
    public function updateSchema(Schema \$toSchema, \$noDrops = false);

    /**
     * Drops the given database schema from the underlying db.
     *
     * @return void
     */
    public function dropSchema(Schema \$dropSchema);

    /**
     * Drops all assets from the underlying db.
     *
     * @return void
     */
    public function dropAllSchema();
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php");
    }
}
