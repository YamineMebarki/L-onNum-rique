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

/* vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/EntityPopulator.php */
class __TwigTemplate_b6a8306e962e2b3c99a99a03722f120e15d0da3db4b9c8aff025005c5f4a44fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/EntityPopulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/EntityPopulator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\CakePHP;

use Cake\\ORM\\TableRegistry;

class EntityPopulator
{
    protected \$class;
    protected \$connectionName;
    protected \$columnFormatters = [];
    protected \$modifiers = [];

    public function __construct(\$class)
    {
        \$this->class = \$class;
    }

    /**
     * @param string \$name
     */
    public function __get(\$name)
    {
        return \$this->{\$name};
    }

    /**
     * @param string \$name
     */
    public function __set(\$name, \$value)
    {
        \$this->{\$name} = \$value;
    }

    public function mergeColumnFormattersWith(\$columnFormatters)
    {
        \$this->columnFormatters = array_merge(\$this->columnFormatters, \$columnFormatters);
    }

    public function mergeModifiersWith(\$modifiers)
    {
        \$this->modifiers = array_merge(\$this->modifiers, \$modifiers);
    }

    /**
     * @return array
     */
    public function guessColumnFormatters(\$populator)
    {
        \$formatters = [];
        \$class = \$this->class;
        \$table = \$this->getTable(\$class);
        \$schema = \$table->schema();
        \$pk = \$schema->primaryKey();
        \$guessers = \$populator->getGuessers() + ['ColumnTypeGuesser' => new ColumnTypeGuesser(\$populator->getGenerator())];
        \$isForeignKey = function (\$column) use (\$table) {
            foreach (\$table->associations()->type('BelongsTo') as \$assoc) {
                if (\$column == \$assoc->foreignKey()) {
                    return true;
                }
            }
            return false;
        };


        foreach (\$schema->columns() as \$column) {
            if (\$column == \$pk[0] || \$isForeignKey(\$column)) {
                continue;
            }

            foreach (\$guessers as \$guesser) {
                if (\$formatter = \$guesser->guessFormat(\$column, \$table)) {
                    \$formatters[\$column] = \$formatter;
                    break;
                }
            }
        }

        return \$formatters;
    }

    /**
     * @return array
     */
    public function guessModifiers()
    {
        \$modifiers = [];
        \$table = \$this->getTable(\$this->class);

        \$belongsTo = \$table->associations()->type('BelongsTo');
        foreach (\$belongsTo as \$assoc) {
            \$modifiers['belongsTo' . \$assoc->name()] = function (\$data, \$insertedEntities) use (\$assoc) {
                \$table = \$assoc->target();
                \$foreignModel = \$table->alias();

                \$foreignKeys = [];
                if (!empty(\$insertedEntities[\$foreignModel])) {
                    \$foreignKeys = \$insertedEntities[\$foreignModel];
                } else {
                    \$foreignKeys = \$table->find('all')
                    ->select(['id'])
                    ->map(function (\$row) {
                        return \$row->id;
                    })
                    ->toArray();
                }

                if (empty(\$foreignKeys)) {
                    throw new \\Exception(sprintf('%s belongsTo %s, which seems empty at this point.', \$this->getTable(\$this->class)->table(), \$assoc->table()));
                }

                \$foreignKey = \$foreignKeys[array_rand(\$foreignKeys)];
                \$data[\$assoc->foreignKey()] = \$foreignKey;
                return \$data;
            };
        }

        // Todo check if TreeBehavior attached to modify lft/rgt cols

        return \$modifiers;
    }

    /**
     * @param array \$options
     */
    public function execute(\$class, \$insertedEntities, \$options = [])
    {
        \$table = \$this->getTable(\$class);
        \$entity = \$table->newEntity();

        foreach (\$this->columnFormatters as \$column => \$format) {
            if (!is_null(\$format)) {
                \$entity->{\$column} = is_callable(\$format) ? \$format(\$insertedEntities, \$table) : \$format;
            }
        }

        foreach (\$this->modifiers as \$modifier) {
            \$entity = \$modifier(\$entity, \$insertedEntities);
        }

        if (!\$entity = \$table->save(\$entity, \$options)) {
            throw new \\RuntimeException(\"Failed saving \$class record\");
        }

        \$pk = \$table->primaryKey();
        if (is_string(\$pk)) {
            return \$entity->{\$pk};
        }

        return \$entity->{\$pk[0]};
    }

    public function setConnection(\$name)
    {
        \$this->connectionName = \$name;
    }

    protected function getTable(\$class)
    {
        \$options = [];
        if (!empty(\$this->connectionName)) {
            \$options['connection'] = \$this->connectionName;
        }
        return TableRegistry::get(\$class, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/EntityPopulator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\CakePHP;

use Cake\\ORM\\TableRegistry;

class EntityPopulator
{
    protected \$class;
    protected \$connectionName;
    protected \$columnFormatters = [];
    protected \$modifiers = [];

    public function __construct(\$class)
    {
        \$this->class = \$class;
    }

    /**
     * @param string \$name
     */
    public function __get(\$name)
    {
        return \$this->{\$name};
    }

    /**
     * @param string \$name
     */
    public function __set(\$name, \$value)
    {
        \$this->{\$name} = \$value;
    }

    public function mergeColumnFormattersWith(\$columnFormatters)
    {
        \$this->columnFormatters = array_merge(\$this->columnFormatters, \$columnFormatters);
    }

    public function mergeModifiersWith(\$modifiers)
    {
        \$this->modifiers = array_merge(\$this->modifiers, \$modifiers);
    }

    /**
     * @return array
     */
    public function guessColumnFormatters(\$populator)
    {
        \$formatters = [];
        \$class = \$this->class;
        \$table = \$this->getTable(\$class);
        \$schema = \$table->schema();
        \$pk = \$schema->primaryKey();
        \$guessers = \$populator->getGuessers() + ['ColumnTypeGuesser' => new ColumnTypeGuesser(\$populator->getGenerator())];
        \$isForeignKey = function (\$column) use (\$table) {
            foreach (\$table->associations()->type('BelongsTo') as \$assoc) {
                if (\$column == \$assoc->foreignKey()) {
                    return true;
                }
            }
            return false;
        };


        foreach (\$schema->columns() as \$column) {
            if (\$column == \$pk[0] || \$isForeignKey(\$column)) {
                continue;
            }

            foreach (\$guessers as \$guesser) {
                if (\$formatter = \$guesser->guessFormat(\$column, \$table)) {
                    \$formatters[\$column] = \$formatter;
                    break;
                }
            }
        }

        return \$formatters;
    }

    /**
     * @return array
     */
    public function guessModifiers()
    {
        \$modifiers = [];
        \$table = \$this->getTable(\$this->class);

        \$belongsTo = \$table->associations()->type('BelongsTo');
        foreach (\$belongsTo as \$assoc) {
            \$modifiers['belongsTo' . \$assoc->name()] = function (\$data, \$insertedEntities) use (\$assoc) {
                \$table = \$assoc->target();
                \$foreignModel = \$table->alias();

                \$foreignKeys = [];
                if (!empty(\$insertedEntities[\$foreignModel])) {
                    \$foreignKeys = \$insertedEntities[\$foreignModel];
                } else {
                    \$foreignKeys = \$table->find('all')
                    ->select(['id'])
                    ->map(function (\$row) {
                        return \$row->id;
                    })
                    ->toArray();
                }

                if (empty(\$foreignKeys)) {
                    throw new \\Exception(sprintf('%s belongsTo %s, which seems empty at this point.', \$this->getTable(\$this->class)->table(), \$assoc->table()));
                }

                \$foreignKey = \$foreignKeys[array_rand(\$foreignKeys)];
                \$data[\$assoc->foreignKey()] = \$foreignKey;
                return \$data;
            };
        }

        // Todo check if TreeBehavior attached to modify lft/rgt cols

        return \$modifiers;
    }

    /**
     * @param array \$options
     */
    public function execute(\$class, \$insertedEntities, \$options = [])
    {
        \$table = \$this->getTable(\$class);
        \$entity = \$table->newEntity();

        foreach (\$this->columnFormatters as \$column => \$format) {
            if (!is_null(\$format)) {
                \$entity->{\$column} = is_callable(\$format) ? \$format(\$insertedEntities, \$table) : \$format;
            }
        }

        foreach (\$this->modifiers as \$modifier) {
            \$entity = \$modifier(\$entity, \$insertedEntities);
        }

        if (!\$entity = \$table->save(\$entity, \$options)) {
            throw new \\RuntimeException(\"Failed saving \$class record\");
        }

        \$pk = \$table->primaryKey();
        if (is_string(\$pk)) {
            return \$entity->{\$pk};
        }

        return \$entity->{\$pk[0]};
    }

    public function setConnection(\$name)
    {
        \$this->connectionName = \$name;
    }

    protected function getTable(\$class)
    {
        \$options = [];
        if (!empty(\$this->connectionName)) {
            \$options['connection'] = \$this->connectionName;
        }
        return TableRegistry::get(\$class, \$options);
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/EntityPopulator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/EntityPopulator.php");
    }
}
