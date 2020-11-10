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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php */
class __TwigTemplate_f408ca40f91b565f9e18c1992a362acae3cad198b4f3534ada47bbfe79fdca01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\SQLAnywherePlatform;
use Doctrine\\DBAL\\Types\\Type;
use function assert;
use function preg_replace;

/**
 * SAP Sybase SQL Anywhere schema manager.
 */
class SQLAnywhereSchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     *
     * Starts a database after creation
     * as SQL Anywhere needs a database to be started
     * before it can be used.
     *
     * @see startDatabase
     */
    public function createDatabase(\$database)
    {
        parent::createDatabase(\$database);
        \$this->startDatabase(\$database);
    }

    /**
     * {@inheritdoc}
     *
     * Tries stopping a database before dropping
     * as SQL Anywhere needs a database to be stopped
     * before it can be dropped.
     *
     * @see stopDatabase
     */
    public function dropDatabase(\$database)
    {
        \$this->tryMethod('stopDatabase', \$database);
        parent::dropDatabase(\$database);
    }

    /**
     * Starts a database.
     *
     * @param string \$database The name of the database to start.
     */
    public function startDatabase(\$database)
    {
        assert(\$this->_platform instanceof SQLAnywherePlatform);
        \$this->_execSql(\$this->_platform->getStartDatabaseSQL(\$database));
    }

    /**
     * Stops a database.
     *
     * @param string \$database The name of the database to stop.
     */
    public function stopDatabase(\$database)
    {
        assert(\$this->_platform instanceof SQLAnywherePlatform);
        \$this->_execSql(\$this->_platform->getStopDatabaseSQL(\$database));
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition(\$database)
    {
        return \$database['name'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableSequenceDefinition(\$sequence)
    {
        return new Sequence(\$sequence['sequence_name'], \$sequence['increment_by'], \$sequence['start_with']);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$type                   = \$this->_platform->getDoctrineTypeMapping(\$tableColumn['type']);
        \$type                   = \$this->extractDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        \$tableColumn['comment'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        \$precision              = null;
        \$scale                  = null;
        \$fixed                  = false;
        \$default                = null;

        if (\$tableColumn['default'] !== null) {
            // Strip quotes from default value.
            \$default = preg_replace([\"/^'(.*)'\$/\", \"/''/\"], ['\$1', \"'\"], \$tableColumn['default']);

            if (\$default === 'autoincrement') {
                \$default = null;
            }
        }

        switch (\$tableColumn['type']) {
            case 'binary':
            case 'char':
            case 'nchar':
                \$fixed = true;
        }

        switch (\$type) {
            case 'decimal':
            case 'float':
                \$precision = \$tableColumn['length'];
                \$scale     = \$tableColumn['scale'];
        }

        return new Column(
            \$tableColumn['column_name'],
            Type::getType(\$type),
            [
                'length'        => \$type === 'string' ? \$tableColumn['length'] : null,
                'precision'     => \$precision,
                'scale'         => \$scale,
                'unsigned'      => (bool) \$tableColumn['unsigned'],
                'fixed'         => \$fixed,
                'notnull'       => (bool) \$tableColumn['notnull'],
                'default'       => \$default,
                'autoincrement' => (bool) \$tableColumn['autoincrement'],
                'comment'       => isset(\$tableColumn['comment']) && \$tableColumn['comment'] !== ''
                    ? \$tableColumn['comment']
                    : null,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition(\$table)
    {
        return \$table['table_name'];
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
            if (! isset(\$foreignKeys[\$tableForeignKey['index_name']])) {
                \$foreignKeys[\$tableForeignKey['index_name']] = [
                    'local_columns'   => [\$tableForeignKey['local_column']],
                    'foreign_table'   => \$tableForeignKey['foreign_table'],
                    'foreign_columns' => [\$tableForeignKey['foreign_column']],
                    'name'            => \$tableForeignKey['index_name'],
                    'options'         => [
                        'notnull'           => \$tableForeignKey['notnull'],
                        'match'             => \$tableForeignKey['match'],
                        'onUpdate'          => \$tableForeignKey['on_update'],
                        'onDelete'          => \$tableForeignKey['on_delete'],
                        'check_on_commit'   => \$tableForeignKey['check_on_commit'],
                        'clustered'         => \$tableForeignKey['clustered'],
                        'for_olap_workload' => \$tableForeignKey['for_olap_workload'],
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
    protected function _getPortableTableIndexesList(\$tableIndexRows, \$tableName = null)
    {
        foreach (\$tableIndexRows as &\$tableIndex) {
            \$tableIndex['primary'] = (bool) \$tableIndex['primary'];
            \$tableIndex['flags']   = [];

            if (\$tableIndex['clustered']) {
                \$tableIndex['flags'][] = 'clustered';
            }

            if (\$tableIndex['with_nulls_not_distinct']) {
                \$tableIndex['flags'][] = 'with_nulls_not_distinct';
            }

            if (! \$tableIndex['for_olap_workload']) {
                continue;
            }

            \$tableIndex['flags'][] = 'for_olap_workload';
        }

        return parent::_getPortableTableIndexesList(\$tableIndexRows, \$tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition(\$view)
    {
        return new View(
            \$view['table_name'],
            preg_replace('/^.*\\s+as\\s+SELECT(.*)/i', 'SELECT\$1', \$view['view_def'])
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\SQLAnywherePlatform;
use Doctrine\\DBAL\\Types\\Type;
use function assert;
use function preg_replace;

/**
 * SAP Sybase SQL Anywhere schema manager.
 */
class SQLAnywhereSchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     *
     * Starts a database after creation
     * as SQL Anywhere needs a database to be started
     * before it can be used.
     *
     * @see startDatabase
     */
    public function createDatabase(\$database)
    {
        parent::createDatabase(\$database);
        \$this->startDatabase(\$database);
    }

    /**
     * {@inheritdoc}
     *
     * Tries stopping a database before dropping
     * as SQL Anywhere needs a database to be stopped
     * before it can be dropped.
     *
     * @see stopDatabase
     */
    public function dropDatabase(\$database)
    {
        \$this->tryMethod('stopDatabase', \$database);
        parent::dropDatabase(\$database);
    }

    /**
     * Starts a database.
     *
     * @param string \$database The name of the database to start.
     */
    public function startDatabase(\$database)
    {
        assert(\$this->_platform instanceof SQLAnywherePlatform);
        \$this->_execSql(\$this->_platform->getStartDatabaseSQL(\$database));
    }

    /**
     * Stops a database.
     *
     * @param string \$database The name of the database to stop.
     */
    public function stopDatabase(\$database)
    {
        assert(\$this->_platform instanceof SQLAnywherePlatform);
        \$this->_execSql(\$this->_platform->getStopDatabaseSQL(\$database));
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition(\$database)
    {
        return \$database['name'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableSequenceDefinition(\$sequence)
    {
        return new Sequence(\$sequence['sequence_name'], \$sequence['increment_by'], \$sequence['start_with']);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$type                   = \$this->_platform->getDoctrineTypeMapping(\$tableColumn['type']);
        \$type                   = \$this->extractDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        \$tableColumn['comment'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        \$precision              = null;
        \$scale                  = null;
        \$fixed                  = false;
        \$default                = null;

        if (\$tableColumn['default'] !== null) {
            // Strip quotes from default value.
            \$default = preg_replace([\"/^'(.*)'\$/\", \"/''/\"], ['\$1', \"'\"], \$tableColumn['default']);

            if (\$default === 'autoincrement') {
                \$default = null;
            }
        }

        switch (\$tableColumn['type']) {
            case 'binary':
            case 'char':
            case 'nchar':
                \$fixed = true;
        }

        switch (\$type) {
            case 'decimal':
            case 'float':
                \$precision = \$tableColumn['length'];
                \$scale     = \$tableColumn['scale'];
        }

        return new Column(
            \$tableColumn['column_name'],
            Type::getType(\$type),
            [
                'length'        => \$type === 'string' ? \$tableColumn['length'] : null,
                'precision'     => \$precision,
                'scale'         => \$scale,
                'unsigned'      => (bool) \$tableColumn['unsigned'],
                'fixed'         => \$fixed,
                'notnull'       => (bool) \$tableColumn['notnull'],
                'default'       => \$default,
                'autoincrement' => (bool) \$tableColumn['autoincrement'],
                'comment'       => isset(\$tableColumn['comment']) && \$tableColumn['comment'] !== ''
                    ? \$tableColumn['comment']
                    : null,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition(\$table)
    {
        return \$table['table_name'];
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
            if (! isset(\$foreignKeys[\$tableForeignKey['index_name']])) {
                \$foreignKeys[\$tableForeignKey['index_name']] = [
                    'local_columns'   => [\$tableForeignKey['local_column']],
                    'foreign_table'   => \$tableForeignKey['foreign_table'],
                    'foreign_columns' => [\$tableForeignKey['foreign_column']],
                    'name'            => \$tableForeignKey['index_name'],
                    'options'         => [
                        'notnull'           => \$tableForeignKey['notnull'],
                        'match'             => \$tableForeignKey['match'],
                        'onUpdate'          => \$tableForeignKey['on_update'],
                        'onDelete'          => \$tableForeignKey['on_delete'],
                        'check_on_commit'   => \$tableForeignKey['check_on_commit'],
                        'clustered'         => \$tableForeignKey['clustered'],
                        'for_olap_workload' => \$tableForeignKey['for_olap_workload'],
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
    protected function _getPortableTableIndexesList(\$tableIndexRows, \$tableName = null)
    {
        foreach (\$tableIndexRows as &\$tableIndex) {
            \$tableIndex['primary'] = (bool) \$tableIndex['primary'];
            \$tableIndex['flags']   = [];

            if (\$tableIndex['clustered']) {
                \$tableIndex['flags'][] = 'clustered';
            }

            if (\$tableIndex['with_nulls_not_distinct']) {
                \$tableIndex['flags'][] = 'with_nulls_not_distinct';
            }

            if (! \$tableIndex['for_olap_workload']) {
                continue;
            }

            \$tableIndex['flags'][] = 'for_olap_workload';
        }

        return parent::_getPortableTableIndexesList(\$tableIndexRows, \$tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition(\$view)
    {
        return new View(
            \$view['table_name'],
            preg_replace('/^.*\\s+as\\s+SELECT(.*)/i', 'SELECT\$1', \$view['view_def'])
        );
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php");
    }
}
