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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php */
class __TwigTemplate_40cc0006a1729b1da8ac995c19855ed3b444ff87190332194b968387cd7a09cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Table Diff.
 */
class TableDiff
{
    /** @var string */
    public \$name = null;

    /** @var string|bool */
    public \$newName = false;

    /**
     * All added fields.
     *
     * @var Column[]
     */
    public \$addedColumns;

    /**
     * All changed fields.
     *
     * @var ColumnDiff[]
     */
    public \$changedColumns = [];

    /**
     * All removed fields.
     *
     * @var Column[]
     */
    public \$removedColumns = [];

    /**
     * Columns that are only renamed from key to column instance name.
     *
     * @var Column[]
     */
    public \$renamedColumns = [];

    /**
     * All added indexes.
     *
     * @var Index[]
     */
    public \$addedIndexes = [];

    /**
     * All changed indexes.
     *
     * @var Index[]
     */
    public \$changedIndexes = [];

    /**
     * All removed indexes
     *
     * @var Index[]
     */
    public \$removedIndexes = [];

    /**
     * Indexes that are only renamed but are identical otherwise.
     *
     * @var Index[]
     */
    public \$renamedIndexes = [];

    /**
     * All added foreign key definitions
     *
     * @var ForeignKeyConstraint[]
     */
    public \$addedForeignKeys = [];

    /**
     * All changed foreign keys
     *
     * @var ForeignKeyConstraint[]
     */
    public \$changedForeignKeys = [];

    /**
     * All removed foreign keys
     *
     * @var ForeignKeyConstraint[]|string[]
     */
    public \$removedForeignKeys = [];

    /** @var Table */
    public \$fromTable;

    /**
     * Constructs an TableDiff object.
     *
     * @param string       \$tableName
     * @param Column[]     \$addedColumns
     * @param ColumnDiff[] \$changedColumns
     * @param Column[]     \$removedColumns
     * @param Index[]      \$addedIndexes
     * @param Index[]      \$changedIndexes
     * @param Index[]      \$removedIndexes
     */
    public function __construct(
        \$tableName,
        \$addedColumns = [],
        \$changedColumns = [],
        \$removedColumns = [],
        \$addedIndexes = [],
        \$changedIndexes = [],
        \$removedIndexes = [],
        ?Table \$fromTable = null
    ) {
        \$this->name           = \$tableName;
        \$this->addedColumns   = \$addedColumns;
        \$this->changedColumns = \$changedColumns;
        \$this->removedColumns = \$removedColumns;
        \$this->addedIndexes   = \$addedIndexes;
        \$this->changedIndexes = \$changedIndexes;
        \$this->removedIndexes = \$removedIndexes;
        \$this->fromTable      = \$fromTable;
    }

    /**
     * @param AbstractPlatform \$platform The platform to use for retrieving this table diff's name.
     *
     * @return Identifier
     */
    public function getName(AbstractPlatform \$platform)
    {
        return new Identifier(
            \$this->fromTable instanceof Table ? \$this->fromTable->getQuotedName(\$platform) : \$this->name
        );
    }

    /**
     * @return Identifier|string|bool
     */
    public function getNewName()
    {
        return \$this->newName ? new Identifier(\$this->newName) : \$this->newName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Table Diff.
 */
class TableDiff
{
    /** @var string */
    public \$name = null;

    /** @var string|bool */
    public \$newName = false;

    /**
     * All added fields.
     *
     * @var Column[]
     */
    public \$addedColumns;

    /**
     * All changed fields.
     *
     * @var ColumnDiff[]
     */
    public \$changedColumns = [];

    /**
     * All removed fields.
     *
     * @var Column[]
     */
    public \$removedColumns = [];

    /**
     * Columns that are only renamed from key to column instance name.
     *
     * @var Column[]
     */
    public \$renamedColumns = [];

    /**
     * All added indexes.
     *
     * @var Index[]
     */
    public \$addedIndexes = [];

    /**
     * All changed indexes.
     *
     * @var Index[]
     */
    public \$changedIndexes = [];

    /**
     * All removed indexes
     *
     * @var Index[]
     */
    public \$removedIndexes = [];

    /**
     * Indexes that are only renamed but are identical otherwise.
     *
     * @var Index[]
     */
    public \$renamedIndexes = [];

    /**
     * All added foreign key definitions
     *
     * @var ForeignKeyConstraint[]
     */
    public \$addedForeignKeys = [];

    /**
     * All changed foreign keys
     *
     * @var ForeignKeyConstraint[]
     */
    public \$changedForeignKeys = [];

    /**
     * All removed foreign keys
     *
     * @var ForeignKeyConstraint[]|string[]
     */
    public \$removedForeignKeys = [];

    /** @var Table */
    public \$fromTable;

    /**
     * Constructs an TableDiff object.
     *
     * @param string       \$tableName
     * @param Column[]     \$addedColumns
     * @param ColumnDiff[] \$changedColumns
     * @param Column[]     \$removedColumns
     * @param Index[]      \$addedIndexes
     * @param Index[]      \$changedIndexes
     * @param Index[]      \$removedIndexes
     */
    public function __construct(
        \$tableName,
        \$addedColumns = [],
        \$changedColumns = [],
        \$removedColumns = [],
        \$addedIndexes = [],
        \$changedIndexes = [],
        \$removedIndexes = [],
        ?Table \$fromTable = null
    ) {
        \$this->name           = \$tableName;
        \$this->addedColumns   = \$addedColumns;
        \$this->changedColumns = \$changedColumns;
        \$this->removedColumns = \$removedColumns;
        \$this->addedIndexes   = \$addedIndexes;
        \$this->changedIndexes = \$changedIndexes;
        \$this->removedIndexes = \$removedIndexes;
        \$this->fromTable      = \$fromTable;
    }

    /**
     * @param AbstractPlatform \$platform The platform to use for retrieving this table diff's name.
     *
     * @return Identifier
     */
    public function getName(AbstractPlatform \$platform)
    {
        return new Identifier(
            \$this->fromTable instanceof Table ? \$this->fromTable->getQuotedName(\$platform) : \$this->name
        );
    }

    /**
     * @return Identifier|string|bool
     */
    public function getNewName()
    {
        return \$this->newName ? new Identifier(\$this->newName) : \$this->newName;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php");
    }
}
