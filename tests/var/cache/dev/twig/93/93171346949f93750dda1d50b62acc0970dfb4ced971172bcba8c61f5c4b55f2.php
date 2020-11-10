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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php */
class __TwigTemplate_28bf1d23724a5ff738470091b189d0ca22f761e8fcacd2340739a08509b8fd08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Types\\Type;
use const CASE_LOWER;
use function array_change_key_case;
use function is_resource;
use function strpos;
use function strtolower;
use function substr;
use function trim;

/**
 * IBM Db2 Schema Manager.
 */
class DB2SchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     *
     * Apparently creator is the schema not the user who created it:
     * {@link http://publib.boulder.ibm.com/infocenter/dzichelp/v2r2/index.jsp?topic=/com.ibm.db29.doc.sqlref/db2z_sysibmsystablestable.htm}
     */
    public function listTableNames()
    {
        \$sql  = \$this->_platform->getListTablesSQL();
        \$sql .= ' AND CREATOR = UPPER(' . \$this->_conn->quote(\$this->_conn->getUsername()) . ')';

        \$tables = \$this->_conn->fetchAll(\$sql);

        return \$this->filterAssetNames(\$this->_getPortableTablesList(\$tables));
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$tableColumn = array_change_key_case(\$tableColumn, CASE_LOWER);

        \$length    = null;
        \$fixed     = null;
        \$unsigned  = false;
        \$scale     = false;
        \$precision = false;

        \$default = null;

        if (\$tableColumn['default'] !== null && \$tableColumn['default'] !== 'NULL') {
            \$default = trim(\$tableColumn['default'], \"'\");
        }

        \$type = \$this->_platform->getDoctrineTypeMapping(\$tableColumn['typename']);

        if (isset(\$tableColumn['comment'])) {
            \$type                   = \$this->extractDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
            \$tableColumn['comment'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        }

        switch (strtolower(\$tableColumn['typename'])) {
            case 'varchar':
                \$length = \$tableColumn['length'];
                \$fixed  = false;
                break;
            case 'character':
                \$length = \$tableColumn['length'];
                \$fixed  = true;
                break;
            case 'clob':
                \$length = \$tableColumn['length'];
                break;
            case 'decimal':
            case 'double':
            case 'real':
                \$scale     = \$tableColumn['scale'];
                \$precision = \$tableColumn['length'];
                break;
        }

        \$options = [
            'length'        => \$length,
            'unsigned'      => (bool) \$unsigned,
            'fixed'         => (bool) \$fixed,
            'default'       => \$default,
            'autoincrement' => (bool) \$tableColumn['autoincrement'],
            'notnull'       => (bool) (\$tableColumn['nulls'] === 'N'),
            'scale'         => null,
            'precision'     => null,
            'comment'       => isset(\$tableColumn['comment']) && \$tableColumn['comment'] !== ''
                ? \$tableColumn['comment']
                : null,
            'platformOptions' => [],
        ];

        if (\$scale !== null && \$precision !== null) {
            \$options['scale']     = \$scale;
            \$options['precision'] = \$precision;
        }

        return new Column(\$tableColumn['colname'], Type::getType(\$type), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTablesList(\$tables)
    {
        \$tableNames = [];
        foreach (\$tables as \$tableRow) {
            \$tableRow     = array_change_key_case(\$tableRow, CASE_LOWER);
            \$tableNames[] = \$tableRow['name'];
        }

        return \$tableNames;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList(\$tableIndexRows, \$tableName = null)
    {
        foreach (\$tableIndexRows as &\$tableIndexRow) {
            \$tableIndexRow            = array_change_key_case(\$tableIndexRow, CASE_LOWER);
            \$tableIndexRow['primary'] = (bool) \$tableIndexRow['primary'];
        }

        return parent::_getPortableTableIndexesList(\$tableIndexRows, \$tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeyDefinition(\$tableForeignKey)
    {
        return new ForeignKeyConstraint(
            \$tableForeignKey['local_columns'],
            \$tableForeignKey['foreign_table'],
            \$tableForeignKey['foreign_columns'],
            \$tableForeignKey['name'],
            \$tableForeignKey['options']
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeysList(\$tableForeignKeys)
    {
        \$foreignKeys = [];

        foreach (\$tableForeignKeys as \$tableForeignKey) {
            \$tableForeignKey = array_change_key_case(\$tableForeignKey, CASE_LOWER);

            if (! isset(\$foreignKeys[\$tableForeignKey['index_name']])) {
                \$foreignKeys[\$tableForeignKey['index_name']] = [
                    'local_columns'   => [\$tableForeignKey['local_column']],
                    'foreign_table'   => \$tableForeignKey['foreign_table'],
                    'foreign_columns' => [\$tableForeignKey['foreign_column']],
                    'name'            => \$tableForeignKey['index_name'],
                    'options'         => [
                        'onUpdate' => \$tableForeignKey['on_update'],
                        'onDelete' => \$tableForeignKey['on_delete'],
                    ],
                ];
            } else {
                \$foreignKeys[\$tableForeignKey['index_name']]['local_columns'][]   = \$tableForeignKey['local_column'];
                \$foreignKeys[\$tableForeignKey['index_name']]['foreign_columns'][] = \$tableForeignKey['foreign_column'];
            }
        }

        return parent::_getPortableTableForeignKeysList(\$foreignKeys);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableForeignKeyRuleDef(\$def)
    {
        if (\$def === 'C') {
            return 'CASCADE';
        } elseif (\$def === 'N') {
            return 'SET NULL';
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition(\$view)
    {
        \$view = array_change_key_case(\$view, CASE_LOWER);
        // sadly this still segfaults on PDO_IBM, see http://pecl.php.net/bugs/bug.php?id=17199
        //\$view['text'] = (is_resource(\$view['text']) ? stream_get_contents(\$view['text']) : \$view['text']);
        if (! is_resource(\$view['text'])) {
            \$pos = strpos(\$view['text'], ' AS ');
            \$sql = substr(\$view['text'], \$pos+4);
        } else {
            \$sql = '';
        }

        return new View(\$view['name'], \$sql);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php";
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
use const CASE_LOWER;
use function array_change_key_case;
use function is_resource;
use function strpos;
use function strtolower;
use function substr;
use function trim;

/**
 * IBM Db2 Schema Manager.
 */
class DB2SchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     *
     * Apparently creator is the schema not the user who created it:
     * {@link http://publib.boulder.ibm.com/infocenter/dzichelp/v2r2/index.jsp?topic=/com.ibm.db29.doc.sqlref/db2z_sysibmsystablestable.htm}
     */
    public function listTableNames()
    {
        \$sql  = \$this->_platform->getListTablesSQL();
        \$sql .= ' AND CREATOR = UPPER(' . \$this->_conn->quote(\$this->_conn->getUsername()) . ')';

        \$tables = \$this->_conn->fetchAll(\$sql);

        return \$this->filterAssetNames(\$this->_getPortableTablesList(\$tables));
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$tableColumn = array_change_key_case(\$tableColumn, CASE_LOWER);

        \$length    = null;
        \$fixed     = null;
        \$unsigned  = false;
        \$scale     = false;
        \$precision = false;

        \$default = null;

        if (\$tableColumn['default'] !== null && \$tableColumn['default'] !== 'NULL') {
            \$default = trim(\$tableColumn['default'], \"'\");
        }

        \$type = \$this->_platform->getDoctrineTypeMapping(\$tableColumn['typename']);

        if (isset(\$tableColumn['comment'])) {
            \$type                   = \$this->extractDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
            \$tableColumn['comment'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        }

        switch (strtolower(\$tableColumn['typename'])) {
            case 'varchar':
                \$length = \$tableColumn['length'];
                \$fixed  = false;
                break;
            case 'character':
                \$length = \$tableColumn['length'];
                \$fixed  = true;
                break;
            case 'clob':
                \$length = \$tableColumn['length'];
                break;
            case 'decimal':
            case 'double':
            case 'real':
                \$scale     = \$tableColumn['scale'];
                \$precision = \$tableColumn['length'];
                break;
        }

        \$options = [
            'length'        => \$length,
            'unsigned'      => (bool) \$unsigned,
            'fixed'         => (bool) \$fixed,
            'default'       => \$default,
            'autoincrement' => (bool) \$tableColumn['autoincrement'],
            'notnull'       => (bool) (\$tableColumn['nulls'] === 'N'),
            'scale'         => null,
            'precision'     => null,
            'comment'       => isset(\$tableColumn['comment']) && \$tableColumn['comment'] !== ''
                ? \$tableColumn['comment']
                : null,
            'platformOptions' => [],
        ];

        if (\$scale !== null && \$precision !== null) {
            \$options['scale']     = \$scale;
            \$options['precision'] = \$precision;
        }

        return new Column(\$tableColumn['colname'], Type::getType(\$type), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTablesList(\$tables)
    {
        \$tableNames = [];
        foreach (\$tables as \$tableRow) {
            \$tableRow     = array_change_key_case(\$tableRow, CASE_LOWER);
            \$tableNames[] = \$tableRow['name'];
        }

        return \$tableNames;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList(\$tableIndexRows, \$tableName = null)
    {
        foreach (\$tableIndexRows as &\$tableIndexRow) {
            \$tableIndexRow            = array_change_key_case(\$tableIndexRow, CASE_LOWER);
            \$tableIndexRow['primary'] = (bool) \$tableIndexRow['primary'];
        }

        return parent::_getPortableTableIndexesList(\$tableIndexRows, \$tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeyDefinition(\$tableForeignKey)
    {
        return new ForeignKeyConstraint(
            \$tableForeignKey['local_columns'],
            \$tableForeignKey['foreign_table'],
            \$tableForeignKey['foreign_columns'],
            \$tableForeignKey['name'],
            \$tableForeignKey['options']
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeysList(\$tableForeignKeys)
    {
        \$foreignKeys = [];

        foreach (\$tableForeignKeys as \$tableForeignKey) {
            \$tableForeignKey = array_change_key_case(\$tableForeignKey, CASE_LOWER);

            if (! isset(\$foreignKeys[\$tableForeignKey['index_name']])) {
                \$foreignKeys[\$tableForeignKey['index_name']] = [
                    'local_columns'   => [\$tableForeignKey['local_column']],
                    'foreign_table'   => \$tableForeignKey['foreign_table'],
                    'foreign_columns' => [\$tableForeignKey['foreign_column']],
                    'name'            => \$tableForeignKey['index_name'],
                    'options'         => [
                        'onUpdate' => \$tableForeignKey['on_update'],
                        'onDelete' => \$tableForeignKey['on_delete'],
                    ],
                ];
            } else {
                \$foreignKeys[\$tableForeignKey['index_name']]['local_columns'][]   = \$tableForeignKey['local_column'];
                \$foreignKeys[\$tableForeignKey['index_name']]['foreign_columns'][] = \$tableForeignKey['foreign_column'];
            }
        }

        return parent::_getPortableTableForeignKeysList(\$foreignKeys);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableForeignKeyRuleDef(\$def)
    {
        if (\$def === 'C') {
            return 'CASCADE';
        } elseif (\$def === 'N') {
            return 'SET NULL';
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition(\$view)
    {
        \$view = array_change_key_case(\$view, CASE_LOWER);
        // sadly this still segfaults on PDO_IBM, see http://pecl.php.net/bugs/bug.php?id=17199
        //\$view['text'] = (is_resource(\$view['text']) ? stream_get_contents(\$view['text']) : \$view['text']);
        if (! is_resource(\$view['text'])) {
            \$pos = strpos(\$view['text'], ' AS ');
            \$sql = substr(\$view['text'], \$pos+4);
        } else {
            \$sql = '';
        }

        return new View(\$view['name'], \$sql);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php");
    }
}
