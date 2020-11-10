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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php */
class __TwigTemplate_3f62ce422483eb7a28752973d57e8e52c6fa5bbaa1ed3c2bd8711986d9effca4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Index;

/**
 * Event Arguments used when the portable index definition is generated inside Doctrine\\DBAL\\Schema\\AbstractSchemaManager.
 */
class SchemaIndexDefinitionEventArgs extends SchemaEventArgs
{
    /** @var Index|null */
    private \$index = null;

    /**
     * Raw index data as fetched from the database.
     *
     * @var mixed[]
     */
    private \$tableIndex;

    /** @var string */
    private \$table;

    /** @var Connection */
    private \$connection;

    /**
     * @param mixed[] \$tableIndex
     * @param string  \$table
     */
    public function __construct(array \$tableIndex, \$table, Connection \$connection)
    {
        \$this->tableIndex = \$tableIndex;
        \$this->table      = \$table;
        \$this->connection = \$connection;
    }

    /**
     * Allows to clear the index which means the index will be excluded from tables index list.
     *
     * @return SchemaIndexDefinitionEventArgs
     */
    public function setIndex(?Index \$index = null)
    {
        \$this->index = \$index;

        return \$this;
    }

    /**
     * @return Index|null
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * @return mixed[]
     */
    public function getTableIndex()
    {
        return \$this->tableIndex;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return \$this->table;
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
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php";
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
use Doctrine\\DBAL\\Schema\\Index;

/**
 * Event Arguments used when the portable index definition is generated inside Doctrine\\DBAL\\Schema\\AbstractSchemaManager.
 */
class SchemaIndexDefinitionEventArgs extends SchemaEventArgs
{
    /** @var Index|null */
    private \$index = null;

    /**
     * Raw index data as fetched from the database.
     *
     * @var mixed[]
     */
    private \$tableIndex;

    /** @var string */
    private \$table;

    /** @var Connection */
    private \$connection;

    /**
     * @param mixed[] \$tableIndex
     * @param string  \$table
     */
    public function __construct(array \$tableIndex, \$table, Connection \$connection)
    {
        \$this->tableIndex = \$tableIndex;
        \$this->table      = \$table;
        \$this->connection = \$connection;
    }

    /**
     * Allows to clear the index which means the index will be excluded from tables index list.
     *
     * @return SchemaIndexDefinitionEventArgs
     */
    public function setIndex(?Index \$index = null)
    {
        \$this->index = \$index;

        return \$this;
    }

    /**
     * @return Index|null
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * @return mixed[]
     */
    public function getTableIndex()
    {
        return \$this->tableIndex;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return \$this->table;
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
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php");
    }
}
