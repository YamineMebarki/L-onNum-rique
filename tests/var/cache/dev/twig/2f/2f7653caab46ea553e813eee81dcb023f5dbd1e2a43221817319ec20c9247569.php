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

/* vendor/fzaninotto/faker/src/Faker/ORM/Propel2/EntityPopulator.php */
class __TwigTemplate_00616a9791d4b5decf6228624fadb67ec1666e0f598b2ba02ab3a4b881da4f33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/EntityPopulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/EntityPopulator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Propel2;

use \\Faker\\Provider\\Base;
use \\Propel\\Runtime\\Map\\ColumnMap;

/**
 * Service class for populating a table through a Propel ActiveRecord class.
 */
class EntityPopulator
{
    protected \$class;
    protected \$columnFormatters = array();
    protected \$modifiers = array();

    /**
     * Class constructor.
     *
     * @param string \$class A Propel ActiveRecord classname
     */
    public function __construct(\$class)
    {
        \$this->class = \$class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return \$this->class;
    }

    public function setColumnFormatters(\$columnFormatters)
    {
        \$this->columnFormatters = \$columnFormatters;
    }

    /**
     * @return array
     */
    public function getColumnFormatters()
    {
        return \$this->columnFormatters;
    }

    public function mergeColumnFormattersWith(\$columnFormatters)
    {
        \$this->columnFormatters = array_merge(\$this->columnFormatters, \$columnFormatters);
    }

    /**
     * @param \\Faker\\Generator \$generator
     * @return array
     */
    public function guessColumnFormatters(\\Faker\\Generator \$generator)
    {
        \$formatters = array();
        \$class = \$this->class;
        \$peerClass = \$class::TABLE_MAP;
        \$tableMap = \$peerClass::getTableMap();
        \$nameGuesser = new \\Faker\\Guesser\\Name(\$generator);
        \$columnTypeGuesser = new \\Faker\\ORM\\Propel2\\ColumnTypeGuesser(\$generator);
        foreach (\$tableMap->getColumns() as \$columnMap) {
            // skip behavior columns, handled by modifiers
            if (\$this->isColumnBehavior(\$columnMap)) {
                continue;
            }
            if (\$columnMap->isForeignKey()) {
                \$relatedClass = \$columnMap->getRelation()->getForeignTable()->getClassname();
                \$formatters[\$columnMap->getPhpName()] = function (\$inserted) use (\$relatedClass) {
                    \$relatedClass = trim(\$relatedClass, \"\\\\\");
                    return isset(\$inserted[\$relatedClass]) ? \$inserted[\$relatedClass][mt_rand(0, count(\$inserted[\$relatedClass]) - 1)] : null;
                };
                continue;
            }
            if (\$columnMap->isPrimaryKey()) {
                continue;
            }
            if (\$formatter = \$nameGuesser->guessFormat(\$columnMap->getPhpName(), \$columnMap->getSize())) {
                \$formatters[\$columnMap->getPhpName()] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$columnMap)) {
                \$formatters[\$columnMap->getPhpName()] = \$formatter;
                continue;
            }
        }

        return \$formatters;
    }

    /**
     * @param ColumnMap \$columnMap
     * @return bool
     */
    protected function isColumnBehavior(ColumnMap \$columnMap)
    {
        foreach (\$columnMap->getTable()->getBehaviors() as \$name => \$params) {
            \$columnName = Base::toLower(\$columnMap->getName());
            switch (\$name) {
                case 'nested_set':
                    \$columnNames = array(\$params['left_column'], \$params['right_column'], \$params['level_column']);
                    if (in_array(\$columnName, \$columnNames)) {
                        return true;
                    }
                    break;
                case 'timestampable':
                    \$columnNames = array(\$params['create_column'], \$params['update_column']);
                    if (in_array(\$columnName, \$columnNames)) {
                        return true;
                    }
                    break;
            }
        }

        return false;
    }

    public function setModifiers(\$modifiers)
    {
        \$this->modifiers = \$modifiers;
    }

    /**
     * @return array
     */
    public function getModifiers()
    {
        return \$this->modifiers;
    }

    public function mergeModifiersWith(\$modifiers)
    {
        \$this->modifiers = array_merge(\$this->modifiers, \$modifiers);
    }

    /**
     * @param \\Faker\\Generator \$generator
     * @return array
     */
    public function guessModifiers(\\Faker\\Generator \$generator)
    {
        \$modifiers = array();
        \$class = \$this->class;
        \$peerClass = \$class::TABLE_MAP;
        \$tableMap = \$peerClass::getTableMap();
        foreach (\$tableMap->getBehaviors() as \$name => \$params) {
            switch (\$name) {
                case 'nested_set':
                    \$modifiers['nested_set'] = function (\$obj, \$inserted) use (\$class, \$generator) {
                        if (isset(\$inserted[\$class])) {
                            \$queryClass = \$class . 'Query';
                            \$parent = \$queryClass::create()->findPk(\$generator->randomElement(\$inserted[\$class]));
                            \$obj->insertAsLastChildOf(\$parent);
                        } else {
                            \$obj->makeRoot();
                        }
                    };
                    break;
                case 'sortable':
                    \$modifiers['sortable'] = function (\$obj, \$inserted) use (\$class) {
                        \$maxRank = isset(\$inserted[\$class]) ? count(\$inserted[\$class]) : 0;
                        \$obj->insertAtRank(mt_rand(1, \$maxRank + 1));
                    };
                    break;
            }
        }

        return \$modifiers;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute(\$con, \$insertedEntities)
    {
        \$obj = new \$this->class();
        foreach (\$this->getColumnFormatters() as \$column => \$format) {
            if (null !== \$format) {
                \$obj->setByName(\$column, is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format);
            }
        }
        foreach (\$this->getModifiers() as \$modifier) {
            \$modifier(\$obj, \$insertedEntities);
        }
        \$obj->save(\$con);

        return \$obj->getPrimaryKey();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/EntityPopulator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Propel2;

use \\Faker\\Provider\\Base;
use \\Propel\\Runtime\\Map\\ColumnMap;

/**
 * Service class for populating a table through a Propel ActiveRecord class.
 */
class EntityPopulator
{
    protected \$class;
    protected \$columnFormatters = array();
    protected \$modifiers = array();

    /**
     * Class constructor.
     *
     * @param string \$class A Propel ActiveRecord classname
     */
    public function __construct(\$class)
    {
        \$this->class = \$class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return \$this->class;
    }

    public function setColumnFormatters(\$columnFormatters)
    {
        \$this->columnFormatters = \$columnFormatters;
    }

    /**
     * @return array
     */
    public function getColumnFormatters()
    {
        return \$this->columnFormatters;
    }

    public function mergeColumnFormattersWith(\$columnFormatters)
    {
        \$this->columnFormatters = array_merge(\$this->columnFormatters, \$columnFormatters);
    }

    /**
     * @param \\Faker\\Generator \$generator
     * @return array
     */
    public function guessColumnFormatters(\\Faker\\Generator \$generator)
    {
        \$formatters = array();
        \$class = \$this->class;
        \$peerClass = \$class::TABLE_MAP;
        \$tableMap = \$peerClass::getTableMap();
        \$nameGuesser = new \\Faker\\Guesser\\Name(\$generator);
        \$columnTypeGuesser = new \\Faker\\ORM\\Propel2\\ColumnTypeGuesser(\$generator);
        foreach (\$tableMap->getColumns() as \$columnMap) {
            // skip behavior columns, handled by modifiers
            if (\$this->isColumnBehavior(\$columnMap)) {
                continue;
            }
            if (\$columnMap->isForeignKey()) {
                \$relatedClass = \$columnMap->getRelation()->getForeignTable()->getClassname();
                \$formatters[\$columnMap->getPhpName()] = function (\$inserted) use (\$relatedClass) {
                    \$relatedClass = trim(\$relatedClass, \"\\\\\");
                    return isset(\$inserted[\$relatedClass]) ? \$inserted[\$relatedClass][mt_rand(0, count(\$inserted[\$relatedClass]) - 1)] : null;
                };
                continue;
            }
            if (\$columnMap->isPrimaryKey()) {
                continue;
            }
            if (\$formatter = \$nameGuesser->guessFormat(\$columnMap->getPhpName(), \$columnMap->getSize())) {
                \$formatters[\$columnMap->getPhpName()] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$columnMap)) {
                \$formatters[\$columnMap->getPhpName()] = \$formatter;
                continue;
            }
        }

        return \$formatters;
    }

    /**
     * @param ColumnMap \$columnMap
     * @return bool
     */
    protected function isColumnBehavior(ColumnMap \$columnMap)
    {
        foreach (\$columnMap->getTable()->getBehaviors() as \$name => \$params) {
            \$columnName = Base::toLower(\$columnMap->getName());
            switch (\$name) {
                case 'nested_set':
                    \$columnNames = array(\$params['left_column'], \$params['right_column'], \$params['level_column']);
                    if (in_array(\$columnName, \$columnNames)) {
                        return true;
                    }
                    break;
                case 'timestampable':
                    \$columnNames = array(\$params['create_column'], \$params['update_column']);
                    if (in_array(\$columnName, \$columnNames)) {
                        return true;
                    }
                    break;
            }
        }

        return false;
    }

    public function setModifiers(\$modifiers)
    {
        \$this->modifiers = \$modifiers;
    }

    /**
     * @return array
     */
    public function getModifiers()
    {
        return \$this->modifiers;
    }

    public function mergeModifiersWith(\$modifiers)
    {
        \$this->modifiers = array_merge(\$this->modifiers, \$modifiers);
    }

    /**
     * @param \\Faker\\Generator \$generator
     * @return array
     */
    public function guessModifiers(\\Faker\\Generator \$generator)
    {
        \$modifiers = array();
        \$class = \$this->class;
        \$peerClass = \$class::TABLE_MAP;
        \$tableMap = \$peerClass::getTableMap();
        foreach (\$tableMap->getBehaviors() as \$name => \$params) {
            switch (\$name) {
                case 'nested_set':
                    \$modifiers['nested_set'] = function (\$obj, \$inserted) use (\$class, \$generator) {
                        if (isset(\$inserted[\$class])) {
                            \$queryClass = \$class . 'Query';
                            \$parent = \$queryClass::create()->findPk(\$generator->randomElement(\$inserted[\$class]));
                            \$obj->insertAsLastChildOf(\$parent);
                        } else {
                            \$obj->makeRoot();
                        }
                    };
                    break;
                case 'sortable':
                    \$modifiers['sortable'] = function (\$obj, \$inserted) use (\$class) {
                        \$maxRank = isset(\$inserted[\$class]) ? count(\$inserted[\$class]) : 0;
                        \$obj->insertAtRank(mt_rand(1, \$maxRank + 1));
                    };
                    break;
            }
        }

        return \$modifiers;
    }

    /**
     * Insert one new record using the Entity class.
     */
    public function execute(\$con, \$insertedEntities)
    {
        \$obj = new \$this->class();
        foreach (\$this->getColumnFormatters() as \$column => \$format) {
            if (null !== \$format) {
                \$obj->setByName(\$column, is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format);
            }
        }
        foreach (\$this->getModifiers() as \$modifier) {
            \$modifier(\$obj, \$insertedEntities);
        }
        \$obj->save(\$con);

        return \$obj->getPrimaryKey();
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/EntityPopulator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Propel2/EntityPopulator.php");
    }
}
