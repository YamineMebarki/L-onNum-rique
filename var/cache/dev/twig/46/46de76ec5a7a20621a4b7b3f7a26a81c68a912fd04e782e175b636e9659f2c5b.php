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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php */
class __TwigTemplate_66049d0247a3e5e544c681d2c861ebbbaac5a06aaddc3693098cd94b5dd92e49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Column;

/**
 * Event Arguments used when the portable column definition is generated inside Doctrine\\DBAL\\Schema\\AbstractSchemaManager.
 */
class SchemaColumnDefinitionEventArgs extends SchemaEventArgs
{
    /** @var Column|null */
    private \$column = null;

    /**
     * Raw column data as fetched from the database.
     *
     * @var mixed[]
     */
    private \$tableColumn;

    /** @var string */
    private \$table;

    /** @var string */
    private \$database;

    /** @var Connection */
    private \$connection;

    /**
     * @param mixed[] \$tableColumn
     * @param string  \$table
     * @param string  \$database
     */
    public function __construct(array \$tableColumn, \$table, \$database, Connection \$connection)
    {
        \$this->tableColumn = \$tableColumn;
        \$this->table       = \$table;
        \$this->database    = \$database;
        \$this->connection  = \$connection;
    }

    /**
     * Allows to clear the column which means the column will be excluded from
     * tables column list.
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaColumnDefinitionEventArgs
     */
    public function setColumn(?Column \$column = null)
    {
        \$this->column = \$column;

        return \$this;
    }

    /**
     * @return Column|null
     */
    public function getColumn()
    {
        return \$this->column;
    }

    /**
     * @return mixed[]
     */
    public function getTableColumn()
    {
        return \$this->tableColumn;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return \$this->database;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Column;

/**
 * Event Arguments used when the portable column definition is generated inside Doctrine\\DBAL\\Schema\\AbstractSchemaManager.
 */
class SchemaColumnDefinitionEventArgs extends SchemaEventArgs
{
    /** @var Column|null */
    private \$column = null;

    /**
     * Raw column data as fetched from the database.
     *
     * @var mixed[]
     */
    private \$tableColumn;

    /** @var string */
    private \$table;

    /** @var string */
    private \$database;

    /** @var Connection */
    private \$connection;

    /**
     * @param mixed[] \$tableColumn
     * @param string  \$table
     * @param string  \$database
     */
    public function __construct(array \$tableColumn, \$table, \$database, Connection \$connection)
    {
        \$this->tableColumn = \$tableColumn;
        \$this->table       = \$table;
        \$this->database    = \$database;
        \$this->connection  = \$connection;
    }

    /**
     * Allows to clear the column which means the column will be excluded from
     * tables column list.
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaColumnDefinitionEventArgs
     */
    public function setColumn(?Column \$column = null)
    {
        \$this->column = \$column;

        return \$this;
    }

    /**
     * @return Column|null
     */
    public function getColumn()
    {
        return \$this->column;
    }

    /**
     * @return mixed[]
     */
    public function getTableColumn()
    {
        return \$this->tableColumn;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return \$this->database;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php");
    }
}
