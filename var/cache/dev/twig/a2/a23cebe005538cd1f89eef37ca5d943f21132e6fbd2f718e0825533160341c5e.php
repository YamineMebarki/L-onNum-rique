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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php */
class __TwigTemplate_85b01864f44708c0b375130cdf99653303a91b3f723d20d26a743c4cd31cff1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Types\\Type;
use function explode;
use function strtolower;
use function trim;

/**
 * Schema manager for the Drizzle RDBMS.
 */
class DrizzleSchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$dbType = strtolower(\$tableColumn['DATA_TYPE']);

        \$type                          = \$this->_platform->getDoctrineTypeMapping(\$dbType);
        \$type                          = \$this->extractDoctrineTypeFromComment(\$tableColumn['COLUMN_COMMENT'], \$type);
        \$tableColumn['COLUMN_COMMENT'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['COLUMN_COMMENT'], \$type);

        \$options = [
            'notnull' => ! (bool) \$tableColumn['IS_NULLABLE'],
            'length' => (int) \$tableColumn['CHARACTER_MAXIMUM_LENGTH'],
            'default' => \$tableColumn['COLUMN_DEFAULT'] ?? null,
            'autoincrement' => (bool) \$tableColumn['IS_AUTO_INCREMENT'],
            'scale' => (int) \$tableColumn['NUMERIC_SCALE'],
            'precision' => (int) \$tableColumn['NUMERIC_PRECISION'],
            'comment' => isset(\$tableColumn['COLUMN_COMMENT']) && \$tableColumn['COLUMN_COMMENT'] !== ''
                ? \$tableColumn['COLUMN_COMMENT']
                : null,
        ];

        \$column = new Column(\$tableColumn['COLUMN_NAME'], Type::getType(\$type), \$options);

        if (! empty(\$tableColumn['COLLATION_NAME'])) {
            \$column->setPlatformOption('collation', \$tableColumn['COLLATION_NAME']);
        }

        return \$column;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition(\$database)
    {
        return \$database['SCHEMA_NAME'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition(\$table)
    {
        return \$table['TABLE_NAME'];
    }

    /**
     * {@inheritdoc}
     */
    public function _getPortableTableForeignKeyDefinition(\$tableForeignKey)
    {
        \$columns = [];
        foreach (explode(',', \$tableForeignKey['CONSTRAINT_COLUMNS']) as \$value) {
            \$columns[] = trim(\$value, ' `');
        }

        \$refColumns = [];
        foreach (explode(',', \$tableForeignKey['REFERENCED_TABLE_COLUMNS']) as \$value) {
            \$refColumns[] = trim(\$value, ' `');
        }

        return new ForeignKeyConstraint(
            \$columns,
            \$tableForeignKey['REFERENCED_TABLE_NAME'],
            \$refColumns,
            \$tableForeignKey['CONSTRAINT_NAME'],
            [
                'onUpdate' => \$tableForeignKey['UPDATE_RULE'],
                'onDelete' => \$tableForeignKey['DELETE_RULE'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList(\$tableIndexes, \$tableName = null)
    {
        \$indexes = [];
        foreach (\$tableIndexes as \$k) {
            \$k['primary'] = (bool) \$k['primary'];
            \$indexes[]    = \$k;
        }

        return parent::_getPortableTableIndexesList(\$indexes, \$tableName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Types\\Type;
use function explode;
use function strtolower;
use function trim;

/**
 * Schema manager for the Drizzle RDBMS.
 */
class DrizzleSchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$dbType = strtolower(\$tableColumn['DATA_TYPE']);

        \$type                          = \$this->_platform->getDoctrineTypeMapping(\$dbType);
        \$type                          = \$this->extractDoctrineTypeFromComment(\$tableColumn['COLUMN_COMMENT'], \$type);
        \$tableColumn['COLUMN_COMMENT'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['COLUMN_COMMENT'], \$type);

        \$options = [
            'notnull' => ! (bool) \$tableColumn['IS_NULLABLE'],
            'length' => (int) \$tableColumn['CHARACTER_MAXIMUM_LENGTH'],
            'default' => \$tableColumn['COLUMN_DEFAULT'] ?? null,
            'autoincrement' => (bool) \$tableColumn['IS_AUTO_INCREMENT'],
            'scale' => (int) \$tableColumn['NUMERIC_SCALE'],
            'precision' => (int) \$tableColumn['NUMERIC_PRECISION'],
            'comment' => isset(\$tableColumn['COLUMN_COMMENT']) && \$tableColumn['COLUMN_COMMENT'] !== ''
                ? \$tableColumn['COLUMN_COMMENT']
                : null,
        ];

        \$column = new Column(\$tableColumn['COLUMN_NAME'], Type::getType(\$type), \$options);

        if (! empty(\$tableColumn['COLLATION_NAME'])) {
            \$column->setPlatformOption('collation', \$tableColumn['COLLATION_NAME']);
        }

        return \$column;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition(\$database)
    {
        return \$database['SCHEMA_NAME'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition(\$table)
    {
        return \$table['TABLE_NAME'];
    }

    /**
     * {@inheritdoc}
     */
    public function _getPortableTableForeignKeyDefinition(\$tableForeignKey)
    {
        \$columns = [];
        foreach (explode(',', \$tableForeignKey['CONSTRAINT_COLUMNS']) as \$value) {
            \$columns[] = trim(\$value, ' `');
        }

        \$refColumns = [];
        foreach (explode(',', \$tableForeignKey['REFERENCED_TABLE_COLUMNS']) as \$value) {
            \$refColumns[] = trim(\$value, ' `');
        }

        return new ForeignKeyConstraint(
            \$columns,
            \$tableForeignKey['REFERENCED_TABLE_NAME'],
            \$refColumns,
            \$tableForeignKey['CONSTRAINT_NAME'],
            [
                'onUpdate' => \$tableForeignKey['UPDATE_RULE'],
                'onDelete' => \$tableForeignKey['DELETE_RULE'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList(\$tableIndexes, \$tableName = null)
    {
        \$indexes = [];
        foreach (\$tableIndexes as \$k) {
            \$k['primary'] = (bool) \$k['primary'];
            \$indexes[]    = \$k;
        }

        return parent::_getPortableTableIndexesList(\$indexes, \$tableName);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php");
    }
}
