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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php */
class __TwigTemplate_6c1ded0da44bcc702f83c406f54a9167ef7aa6cdef27b88ed003628b6eebfeab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\MariaDb1027Platform;
use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Types\\Type;
use const CASE_LOWER;
use function array_change_key_case;
use function array_shift;
use function array_values;
use function end;
use function explode;
use function preg_match;
use function preg_replace;
use function str_replace;
use function stripslashes;
use function strpos;
use function strtok;
use function strtolower;

/**
 * Schema manager for the MySql RDBMS.
 */
class MySqlSchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition(\$view)
    {
        return new View(\$view['TABLE_NAME'], \$view['VIEW_DEFINITION']);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition(\$table)
    {
        return array_shift(\$table);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableUserDefinition(\$user)
    {
        return [
            'user' => \$user['User'],
            'password' => \$user['Password'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList(\$tableIndexes, \$tableName = null)
    {
        foreach (\$tableIndexes as \$k => \$v) {
            \$v = array_change_key_case(\$v, CASE_LOWER);
            if (\$v['key_name'] === 'PRIMARY') {
                \$v['primary'] = true;
            } else {
                \$v['primary'] = false;
            }
            if (strpos(\$v['index_type'], 'FULLTEXT') !== false) {
                \$v['flags'] = ['FULLTEXT'];
            } elseif (strpos(\$v['index_type'], 'SPATIAL') !== false) {
                \$v['flags'] = ['SPATIAL'];
            }
            \$v['length'] = \$v['sub_part'] ?? null;

            \$tableIndexes[\$k] = \$v;
        }

        return parent::_getPortableTableIndexesList(\$tableIndexes, \$tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableSequenceDefinition(\$sequence)
    {
        return end(\$sequence);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition(\$database)
    {
        return \$database['Database'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$tableColumn = array_change_key_case(\$tableColumn, CASE_LOWER);

        \$dbType = strtolower(\$tableColumn['type']);
        \$dbType = strtok(\$dbType, '(), ');
        \$length = \$tableColumn['length'] ?? strtok('(), ');

        \$fixed = null;

        if (! isset(\$tableColumn['name'])) {
            \$tableColumn['name'] = '';
        }

        \$scale     = null;
        \$precision = null;

        \$type = \$this->_platform->getDoctrineTypeMapping(\$dbType);

        // In cases where not connected to a database DESCRIBE \$table does not return 'Comment'
        if (isset(\$tableColumn['comment'])) {
            \$type                   = \$this->extractDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
            \$tableColumn['comment'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        }

        switch (\$dbType) {
            case 'char':
            case 'binary':
                \$fixed = true;
                break;
            case 'float':
            case 'double':
            case 'real':
            case 'numeric':
            case 'decimal':
                if (preg_match('([A-Za-z]+\\(([0-9]+)\\,([0-9]+)\\))', \$tableColumn['type'], \$match)) {
                    \$precision = \$match[1];
                    \$scale     = \$match[2];
                    \$length    = null;
                }
                break;
            case 'tinytext':
                \$length = MySqlPlatform::LENGTH_LIMIT_TINYTEXT;
                break;
            case 'text':
                \$length = MySqlPlatform::LENGTH_LIMIT_TEXT;
                break;
            case 'mediumtext':
                \$length = MySqlPlatform::LENGTH_LIMIT_MEDIUMTEXT;
                break;
            case 'tinyblob':
                \$length = MySqlPlatform::LENGTH_LIMIT_TINYBLOB;
                break;
            case 'blob':
                \$length = MySqlPlatform::LENGTH_LIMIT_BLOB;
                break;
            case 'mediumblob':
                \$length = MySqlPlatform::LENGTH_LIMIT_MEDIUMBLOB;
                break;
            case 'tinyint':
            case 'smallint':
            case 'mediumint':
            case 'int':
            case 'integer':
            case 'bigint':
            case 'year':
                \$length = null;
                break;
        }

        if (\$this->_platform instanceof MariaDb1027Platform) {
            \$columnDefault = \$this->getMariaDb1027ColumnDefault(\$this->_platform, \$tableColumn['default']);
        } else {
            \$columnDefault = \$tableColumn['default'];
        }

        \$options = [
            'length'        => \$length !== null ? (int) \$length : null,
            'unsigned'      => strpos(\$tableColumn['type'], 'unsigned') !== false,
            'fixed'         => (bool) \$fixed,
            'default'       => \$columnDefault,
            'notnull'       => \$tableColumn['null'] !== 'YES',
            'scale'         => null,
            'precision'     => null,
            'autoincrement' => strpos(\$tableColumn['extra'], 'auto_increment') !== false,
            'comment'       => isset(\$tableColumn['comment']) && \$tableColumn['comment'] !== ''
                ? \$tableColumn['comment']
                : null,
        ];

        if (\$scale !== null && \$precision !== null) {
            \$options['scale']     = (int) \$scale;
            \$options['precision'] = (int) \$precision;
        }

        \$column = new Column(\$tableColumn['field'], Type::getType(\$type), \$options);

        if (isset(\$tableColumn['collation'])) {
            \$column->setPlatformOption('collation', \$tableColumn['collation']);
        }

        return \$column;
    }

    /**
     * Return Doctrine/Mysql-compatible column default values for MariaDB 10.2.7+ servers.
     *
     * - Since MariaDb 10.2.7 column defaults stored in information_schema are now quoted
     *   to distinguish them from expressions (see MDEV-10134).
     * - CURRENT_TIMESTAMP, CURRENT_TIME, CURRENT_DATE are stored in information_schema
     *   as current_timestamp(), currdate(), currtime()
     * - Quoted 'NULL' is not enforced by Maria, it is technically possible to have
     *   null in some circumstances (see https://jira.mariadb.org/browse/MDEV-14053)
     * - \\' is always stored as '' in information_schema (normalized)
     *
     * @link https://mariadb.com/kb/en/library/information-schema-columns-table/
     * @link https://jira.mariadb.org/browse/MDEV-13132
     *
     * @param string|null \$columnDefault default value as stored in information_schema for MariaDB >= 10.2.7
     */
    private function getMariaDb1027ColumnDefault(MariaDb1027Platform \$platform, ?string \$columnDefault) : ?string
    {
        if (\$columnDefault === 'NULL' || \$columnDefault === null) {
            return null;
        }
        if (\$columnDefault[0] === \"'\") {
            return stripslashes(
                str_replace(
                    \"''\",
                    \"'\",
                    preg_replace('/^\\'(.*)\\'\$/', '\$1', \$columnDefault)
                )
            );
        }
        switch (\$columnDefault) {
            case 'current_timestamp()':
                return \$platform->getCurrentTimestampSQL();
            case 'curdate()':
                return \$platform->getCurrentDateSQL();
            case 'curtime()':
                return \$platform->getCurrentTimeSQL();
        }
        return \$columnDefault;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeysList(\$tableForeignKeys)
    {
        \$list = [];
        foreach (\$tableForeignKeys as \$value) {
            \$value = array_change_key_case(\$value, CASE_LOWER);
            if (! isset(\$list[\$value['constraint_name']])) {
                if (! isset(\$value['delete_rule']) || \$value['delete_rule'] === 'RESTRICT') {
                    \$value['delete_rule'] = null;
                }
                if (! isset(\$value['update_rule']) || \$value['update_rule'] === 'RESTRICT') {
                    \$value['update_rule'] = null;
                }

                \$list[\$value['constraint_name']] = [
                    'name' => \$value['constraint_name'],
                    'local' => [],
                    'foreign' => [],
                    'foreignTable' => \$value['referenced_table_name'],
                    'onDelete' => \$value['delete_rule'],
                    'onUpdate' => \$value['update_rule'],
                ];
            }
            \$list[\$value['constraint_name']]['local'][]   = \$value['column_name'];
            \$list[\$value['constraint_name']]['foreign'][] = \$value['referenced_column_name'];
        }

        \$result = [];
        foreach (\$list as \$constraint) {
            \$result[] = new ForeignKeyConstraint(
                array_values(\$constraint['local']),
                \$constraint['foreignTable'],
                array_values(\$constraint['foreign']),
                \$constraint['name'],
                [
                    'onDelete' => \$constraint['onDelete'],
                    'onUpdate' => \$constraint['onUpdate'],
                ]
            );
        }

        return \$result;
    }

    public function listTableDetails(\$tableName)
    {
        \$table = parent::listTableDetails(\$tableName);

        /** @var MySqlPlatform \$platform */
        \$platform = \$this->_platform;
        \$sql      = \$platform->getListTableMetadataSQL(\$tableName);

        \$tableOptions = \$this->_conn->fetchAssoc(\$sql);

        \$table->addOption('engine', \$tableOptions['ENGINE']);
        if (\$tableOptions['TABLE_COLLATION'] !== null) {
            \$table->addOption('collation', \$tableOptions['TABLE_COLLATION']);
        }
        if (\$tableOptions['AUTO_INCREMENT'] !== null) {
            \$table->addOption('autoincrement', \$tableOptions['AUTO_INCREMENT']);
        }
        \$table->addOption('comment', \$tableOptions['TABLE_COMMENT']);
        \$table->addOption('create_options', \$this->parseCreateOptions(\$tableOptions['CREATE_OPTIONS']));

        return \$table;
    }

    /**
     * @return string[]|true[]
     */
    private function parseCreateOptions(?string \$string) : array
    {
        \$options = [];

        if (\$string === null || \$string === '') {
            return \$options;
        }

        foreach (explode(' ', \$string) as \$pair) {
            \$parts = explode('=', \$pair, 2);

            \$options[\$parts[0]] = \$parts[1] ?? true;
        }

        return \$options;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\MariaDb1027Platform;
use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Types\\Type;
use const CASE_LOWER;
use function array_change_key_case;
use function array_shift;
use function array_values;
use function end;
use function explode;
use function preg_match;
use function preg_replace;
use function str_replace;
use function stripslashes;
use function strpos;
use function strtok;
use function strtolower;

/**
 * Schema manager for the MySql RDBMS.
 */
class MySqlSchemaManager extends AbstractSchemaManager
{
    /**
     * {@inheritdoc}
     */
    protected function _getPortableViewDefinition(\$view)
    {
        return new View(\$view['TABLE_NAME'], \$view['VIEW_DEFINITION']);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableDefinition(\$table)
    {
        return array_shift(\$table);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableUserDefinition(\$user)
    {
        return [
            'user' => \$user['User'],
            'password' => \$user['Password'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableIndexesList(\$tableIndexes, \$tableName = null)
    {
        foreach (\$tableIndexes as \$k => \$v) {
            \$v = array_change_key_case(\$v, CASE_LOWER);
            if (\$v['key_name'] === 'PRIMARY') {
                \$v['primary'] = true;
            } else {
                \$v['primary'] = false;
            }
            if (strpos(\$v['index_type'], 'FULLTEXT') !== false) {
                \$v['flags'] = ['FULLTEXT'];
            } elseif (strpos(\$v['index_type'], 'SPATIAL') !== false) {
                \$v['flags'] = ['SPATIAL'];
            }
            \$v['length'] = \$v['sub_part'] ?? null;

            \$tableIndexes[\$k] = \$v;
        }

        return parent::_getPortableTableIndexesList(\$tableIndexes, \$tableName);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableSequenceDefinition(\$sequence)
    {
        return end(\$sequence);
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableDatabaseDefinition(\$database)
    {
        return \$database['Database'];
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableColumnDefinition(\$tableColumn)
    {
        \$tableColumn = array_change_key_case(\$tableColumn, CASE_LOWER);

        \$dbType = strtolower(\$tableColumn['type']);
        \$dbType = strtok(\$dbType, '(), ');
        \$length = \$tableColumn['length'] ?? strtok('(), ');

        \$fixed = null;

        if (! isset(\$tableColumn['name'])) {
            \$tableColumn['name'] = '';
        }

        \$scale     = null;
        \$precision = null;

        \$type = \$this->_platform->getDoctrineTypeMapping(\$dbType);

        // In cases where not connected to a database DESCRIBE \$table does not return 'Comment'
        if (isset(\$tableColumn['comment'])) {
            \$type                   = \$this->extractDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
            \$tableColumn['comment'] = \$this->removeDoctrineTypeFromComment(\$tableColumn['comment'], \$type);
        }

        switch (\$dbType) {
            case 'char':
            case 'binary':
                \$fixed = true;
                break;
            case 'float':
            case 'double':
            case 'real':
            case 'numeric':
            case 'decimal':
                if (preg_match('([A-Za-z]+\\(([0-9]+)\\,([0-9]+)\\))', \$tableColumn['type'], \$match)) {
                    \$precision = \$match[1];
                    \$scale     = \$match[2];
                    \$length    = null;
                }
                break;
            case 'tinytext':
                \$length = MySqlPlatform::LENGTH_LIMIT_TINYTEXT;
                break;
            case 'text':
                \$length = MySqlPlatform::LENGTH_LIMIT_TEXT;
                break;
            case 'mediumtext':
                \$length = MySqlPlatform::LENGTH_LIMIT_MEDIUMTEXT;
                break;
            case 'tinyblob':
                \$length = MySqlPlatform::LENGTH_LIMIT_TINYBLOB;
                break;
            case 'blob':
                \$length = MySqlPlatform::LENGTH_LIMIT_BLOB;
                break;
            case 'mediumblob':
                \$length = MySqlPlatform::LENGTH_LIMIT_MEDIUMBLOB;
                break;
            case 'tinyint':
            case 'smallint':
            case 'mediumint':
            case 'int':
            case 'integer':
            case 'bigint':
            case 'year':
                \$length = null;
                break;
        }

        if (\$this->_platform instanceof MariaDb1027Platform) {
            \$columnDefault = \$this->getMariaDb1027ColumnDefault(\$this->_platform, \$tableColumn['default']);
        } else {
            \$columnDefault = \$tableColumn['default'];
        }

        \$options = [
            'length'        => \$length !== null ? (int) \$length : null,
            'unsigned'      => strpos(\$tableColumn['type'], 'unsigned') !== false,
            'fixed'         => (bool) \$fixed,
            'default'       => \$columnDefault,
            'notnull'       => \$tableColumn['null'] !== 'YES',
            'scale'         => null,
            'precision'     => null,
            'autoincrement' => strpos(\$tableColumn['extra'], 'auto_increment') !== false,
            'comment'       => isset(\$tableColumn['comment']) && \$tableColumn['comment'] !== ''
                ? \$tableColumn['comment']
                : null,
        ];

        if (\$scale !== null && \$precision !== null) {
            \$options['scale']     = (int) \$scale;
            \$options['precision'] = (int) \$precision;
        }

        \$column = new Column(\$tableColumn['field'], Type::getType(\$type), \$options);

        if (isset(\$tableColumn['collation'])) {
            \$column->setPlatformOption('collation', \$tableColumn['collation']);
        }

        return \$column;
    }

    /**
     * Return Doctrine/Mysql-compatible column default values for MariaDB 10.2.7+ servers.
     *
     * - Since MariaDb 10.2.7 column defaults stored in information_schema are now quoted
     *   to distinguish them from expressions (see MDEV-10134).
     * - CURRENT_TIMESTAMP, CURRENT_TIME, CURRENT_DATE are stored in information_schema
     *   as current_timestamp(), currdate(), currtime()
     * - Quoted 'NULL' is not enforced by Maria, it is technically possible to have
     *   null in some circumstances (see https://jira.mariadb.org/browse/MDEV-14053)
     * - \\' is always stored as '' in information_schema (normalized)
     *
     * @link https://mariadb.com/kb/en/library/information-schema-columns-table/
     * @link https://jira.mariadb.org/browse/MDEV-13132
     *
     * @param string|null \$columnDefault default value as stored in information_schema for MariaDB >= 10.2.7
     */
    private function getMariaDb1027ColumnDefault(MariaDb1027Platform \$platform, ?string \$columnDefault) : ?string
    {
        if (\$columnDefault === 'NULL' || \$columnDefault === null) {
            return null;
        }
        if (\$columnDefault[0] === \"'\") {
            return stripslashes(
                str_replace(
                    \"''\",
                    \"'\",
                    preg_replace('/^\\'(.*)\\'\$/', '\$1', \$columnDefault)
                )
            );
        }
        switch (\$columnDefault) {
            case 'current_timestamp()':
                return \$platform->getCurrentTimestampSQL();
            case 'curdate()':
                return \$platform->getCurrentDateSQL();
            case 'curtime()':
                return \$platform->getCurrentTimeSQL();
        }
        return \$columnDefault;
    }

    /**
     * {@inheritdoc}
     */
    protected function _getPortableTableForeignKeysList(\$tableForeignKeys)
    {
        \$list = [];
        foreach (\$tableForeignKeys as \$value) {
            \$value = array_change_key_case(\$value, CASE_LOWER);
            if (! isset(\$list[\$value['constraint_name']])) {
                if (! isset(\$value['delete_rule']) || \$value['delete_rule'] === 'RESTRICT') {
                    \$value['delete_rule'] = null;
                }
                if (! isset(\$value['update_rule']) || \$value['update_rule'] === 'RESTRICT') {
                    \$value['update_rule'] = null;
                }

                \$list[\$value['constraint_name']] = [
                    'name' => \$value['constraint_name'],
                    'local' => [],
                    'foreign' => [],
                    'foreignTable' => \$value['referenced_table_name'],
                    'onDelete' => \$value['delete_rule'],
                    'onUpdate' => \$value['update_rule'],
                ];
            }
            \$list[\$value['constraint_name']]['local'][]   = \$value['column_name'];
            \$list[\$value['constraint_name']]['foreign'][] = \$value['referenced_column_name'];
        }

        \$result = [];
        foreach (\$list as \$constraint) {
            \$result[] = new ForeignKeyConstraint(
                array_values(\$constraint['local']),
                \$constraint['foreignTable'],
                array_values(\$constraint['foreign']),
                \$constraint['name'],
                [
                    'onDelete' => \$constraint['onDelete'],
                    'onUpdate' => \$constraint['onUpdate'],
                ]
            );
        }

        return \$result;
    }

    public function listTableDetails(\$tableName)
    {
        \$table = parent::listTableDetails(\$tableName);

        /** @var MySqlPlatform \$platform */
        \$platform = \$this->_platform;
        \$sql      = \$platform->getListTableMetadataSQL(\$tableName);

        \$tableOptions = \$this->_conn->fetchAssoc(\$sql);

        \$table->addOption('engine', \$tableOptions['ENGINE']);
        if (\$tableOptions['TABLE_COLLATION'] !== null) {
            \$table->addOption('collation', \$tableOptions['TABLE_COLLATION']);
        }
        if (\$tableOptions['AUTO_INCREMENT'] !== null) {
            \$table->addOption('autoincrement', \$tableOptions['AUTO_INCREMENT']);
        }
        \$table->addOption('comment', \$tableOptions['TABLE_COMMENT']);
        \$table->addOption('create_options', \$this->parseCreateOptions(\$tableOptions['CREATE_OPTIONS']));

        return \$table;
    }

    /**
     * @return string[]|true[]
     */
    private function parseCreateOptions(?string \$string) : array
    {
        \$options = [];

        if (\$string === null || \$string === '') {
            return \$options;
        }

        foreach (explode(' ', \$string) as \$pair) {
            \$parts = explode('=', \$pair, 2);

            \$options[\$parts[0]] = \$parts[1] ?? true;
        }

        return \$options;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php");
    }
}
