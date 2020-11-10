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

/* vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/EntityPopulator.php */
class __TwigTemplate_49bbee5c585c631240e036a88236342474943aee539d08edf9b7df510bd3a7fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/EntityPopulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/EntityPopulator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Doctrine;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;

/**
 * Service class for populating a table through a Doctrine Entity class.
 */
class EntityPopulator
{
    /**
     * @var ClassMetadata
     */
    protected \$class;
    /**
     * @var array
     */
    protected \$columnFormatters = array();
    /**
     * @var array
     */
    protected \$modifiers = array();

    /**
     * Class constructor.
     *
     * @param ClassMetadata \$class
     */
    public function __construct(ClassMetadata \$class)
    {
        \$this->class = \$class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return \$this->class->getName();
    }

    /**
     * @param \$columnFormatters
     */
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
     * @param array \$modifiers
     */
    public function setModifiers(array \$modifiers)
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

    /**
     * @param array \$modifiers
     */
    public function mergeModifiersWith(array \$modifiers)
    {
        \$this->modifiers = array_merge(\$this->modifiers, \$modifiers);
    }

    /**
     * @param \\Faker\\Generator \$generator
     * @return array
     */
    public function guessColumnFormatters(\\Faker\\Generator \$generator)
    {
        \$formatters = array();
        \$nameGuesser = new \\Faker\\Guesser\\Name(\$generator);
        \$columnTypeGuesser = new ColumnTypeGuesser(\$generator);
        foreach (\$this->class->getFieldNames() as \$fieldName) {
            if (\$this->class->isIdentifier(\$fieldName) || !\$this->class->hasField(\$fieldName)) {
                continue;
            }

            \$size = isset(\$this->class->fieldMappings[\$fieldName]['length']) ? \$this->class->fieldMappings[\$fieldName]['length'] : null;
            if (\$formatter = \$nameGuesser->guessFormat(\$fieldName, \$size)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$fieldName, \$this->class)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
        }

        foreach (\$this->class->getAssociationNames() as \$assocName) {
            if (\$this->class->isCollectionValuedAssociation(\$assocName)) {
                continue;
            }

            \$relatedClass = \$this->class->getAssociationTargetClass(\$assocName);

            \$unique = \$optional = false;
            if (\$this->class instanceof \\Doctrine\\ORM\\Mapping\\ClassMetadata) {
                \$mappings = \$this->class->getAssociationMappings();
                foreach (\$mappings as \$mapping) {
                    if (\$mapping['targetEntity'] == \$relatedClass) {
                        if (\$mapping['type'] == \\Doctrine\\ORM\\Mapping\\ClassMetadata::ONE_TO_ONE) {
                            \$unique = true;
                            \$optional = isset(\$mapping['joinColumns'][0]['nullable']) ? \$mapping['joinColumns'][0]['nullable'] : false;
                            break;
                        }
                    }
                }
            } elseif (\$this->class instanceof \\Doctrine\\ODM\\MongoDB\\Mapping\\ClassMetadata) {
                \$mappings = \$this->class->associationMappings;
                foreach (\$mappings as \$mapping) {
                    if (\$mapping['targetDocument'] == \$relatedClass) {
                        if (\$mapping['type'] == \\Doctrine\\ODM\\MongoDB\\Mapping\\ClassMetadata::ONE && \$mapping['association'] == \\Doctrine\\ODM\\MongoDB\\Mapping\\ClassMetadata::REFERENCE_ONE) {
                            \$unique = true;
                            \$optional = isset(\$mapping['nullable']) ? \$mapping['nullable'] : false;
                            break;
                        }
                    }
                }
            }

            \$index = 0;
            \$formatters[\$assocName] = function (\$inserted) use (\$relatedClass, &\$index, \$unique, \$optional) {

                if (isset(\$inserted[\$relatedClass])) {
                    if (\$unique) {
                        \$related = null;
                        if (isset(\$inserted[\$relatedClass][\$index]) || !\$optional) {
                            \$related = \$inserted[\$relatedClass][\$index];
                        }

                        \$index++;

                        return \$related;
                    }

                    return \$inserted[\$relatedClass][mt_rand(0, count(\$inserted[\$relatedClass]) - 1)];
                }

                return null;
            };
        }

        return \$formatters;
    }

    /**
     * Insert one new record using the Entity class.
     * @param ObjectManager \$manager
     * @param bool \$generateId
     * @return EntityPopulator
     */
    public function execute(ObjectManager \$manager, \$insertedEntities, \$generateId = false)
    {
        \$obj = \$this->class->newInstance();

        \$this->fillColumns(\$obj, \$insertedEntities);
        \$this->callMethods(\$obj, \$insertedEntities);

        if (\$generateId) {
            \$idsName = \$this->class->getIdentifier();
            foreach (\$idsName as \$idName) {
                \$id = \$this->generateId(\$obj, \$idName, \$manager);
                \$this->class->reflFields[\$idName]->setValue(\$obj, \$id);
            }
        }

        \$manager->persist(\$obj);

        return \$obj;
    }

    private function fillColumns(\$obj, \$insertedEntities)
    {
        foreach (\$this->columnFormatters as \$field => \$format) {
            if (null !== \$format) {
                // Add some extended debugging information to any errors thrown by the formatter
                try {
                    \$value = is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format;
                } catch (\\InvalidArgumentException \$ex) {
                    throw new \\InvalidArgumentException(sprintf(
                        \"Failed to generate a value for %s::%s: %s\",
                        get_class(\$obj),
                        \$field,
                        \$ex->getMessage()
                    ));
                }
                // Try a standard setter if it's available, otherwise fall back on reflection
                \$setter = sprintf(\"set%s\", ucfirst(\$field));
                if (is_callable(array(\$obj, \$setter))) {
                    \$obj->\$setter(\$value);
                } else {
                    \$this->class->reflFields[\$field]->setValue(\$obj, \$value);
                }
            }
        }
    }

    private function callMethods(\$obj, \$insertedEntities)
    {
        foreach (\$this->getModifiers() as \$modifier) {
            \$modifier(\$obj, \$insertedEntities);
        }
    }

    /**
     * @param ObjectManager \$manager
     * @return int|null
     */
    private function generateId(\$obj, \$column, ObjectManager \$manager)
    {
        /* @var \$repository \\Doctrine\\Common\\Persistence\\ObjectRepository */
        \$repository = \$manager->getRepository(get_class(\$obj));
        \$result = \$repository->createQueryBuilder('e')
                ->select(sprintf('e.%s', \$column))
                ->getQuery()
                ->execute();
        \$ids = array_map('current', \$result->toArray());

        \$id = null;
        do {
            \$id = mt_rand();
        } while (in_array(\$id, \$ids));

        return \$id;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/EntityPopulator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Doctrine;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;

/**
 * Service class for populating a table through a Doctrine Entity class.
 */
class EntityPopulator
{
    /**
     * @var ClassMetadata
     */
    protected \$class;
    /**
     * @var array
     */
    protected \$columnFormatters = array();
    /**
     * @var array
     */
    protected \$modifiers = array();

    /**
     * Class constructor.
     *
     * @param ClassMetadata \$class
     */
    public function __construct(ClassMetadata \$class)
    {
        \$this->class = \$class;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return \$this->class->getName();
    }

    /**
     * @param \$columnFormatters
     */
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
     * @param array \$modifiers
     */
    public function setModifiers(array \$modifiers)
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

    /**
     * @param array \$modifiers
     */
    public function mergeModifiersWith(array \$modifiers)
    {
        \$this->modifiers = array_merge(\$this->modifiers, \$modifiers);
    }

    /**
     * @param \\Faker\\Generator \$generator
     * @return array
     */
    public function guessColumnFormatters(\\Faker\\Generator \$generator)
    {
        \$formatters = array();
        \$nameGuesser = new \\Faker\\Guesser\\Name(\$generator);
        \$columnTypeGuesser = new ColumnTypeGuesser(\$generator);
        foreach (\$this->class->getFieldNames() as \$fieldName) {
            if (\$this->class->isIdentifier(\$fieldName) || !\$this->class->hasField(\$fieldName)) {
                continue;
            }

            \$size = isset(\$this->class->fieldMappings[\$fieldName]['length']) ? \$this->class->fieldMappings[\$fieldName]['length'] : null;
            if (\$formatter = \$nameGuesser->guessFormat(\$fieldName, \$size)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$fieldName, \$this->class)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
        }

        foreach (\$this->class->getAssociationNames() as \$assocName) {
            if (\$this->class->isCollectionValuedAssociation(\$assocName)) {
                continue;
            }

            \$relatedClass = \$this->class->getAssociationTargetClass(\$assocName);

            \$unique = \$optional = false;
            if (\$this->class instanceof \\Doctrine\\ORM\\Mapping\\ClassMetadata) {
                \$mappings = \$this->class->getAssociationMappings();
                foreach (\$mappings as \$mapping) {
                    if (\$mapping['targetEntity'] == \$relatedClass) {
                        if (\$mapping['type'] == \\Doctrine\\ORM\\Mapping\\ClassMetadata::ONE_TO_ONE) {
                            \$unique = true;
                            \$optional = isset(\$mapping['joinColumns'][0]['nullable']) ? \$mapping['joinColumns'][0]['nullable'] : false;
                            break;
                        }
                    }
                }
            } elseif (\$this->class instanceof \\Doctrine\\ODM\\MongoDB\\Mapping\\ClassMetadata) {
                \$mappings = \$this->class->associationMappings;
                foreach (\$mappings as \$mapping) {
                    if (\$mapping['targetDocument'] == \$relatedClass) {
                        if (\$mapping['type'] == \\Doctrine\\ODM\\MongoDB\\Mapping\\ClassMetadata::ONE && \$mapping['association'] == \\Doctrine\\ODM\\MongoDB\\Mapping\\ClassMetadata::REFERENCE_ONE) {
                            \$unique = true;
                            \$optional = isset(\$mapping['nullable']) ? \$mapping['nullable'] : false;
                            break;
                        }
                    }
                }
            }

            \$index = 0;
            \$formatters[\$assocName] = function (\$inserted) use (\$relatedClass, &\$index, \$unique, \$optional) {

                if (isset(\$inserted[\$relatedClass])) {
                    if (\$unique) {
                        \$related = null;
                        if (isset(\$inserted[\$relatedClass][\$index]) || !\$optional) {
                            \$related = \$inserted[\$relatedClass][\$index];
                        }

                        \$index++;

                        return \$related;
                    }

                    return \$inserted[\$relatedClass][mt_rand(0, count(\$inserted[\$relatedClass]) - 1)];
                }

                return null;
            };
        }

        return \$formatters;
    }

    /**
     * Insert one new record using the Entity class.
     * @param ObjectManager \$manager
     * @param bool \$generateId
     * @return EntityPopulator
     */
    public function execute(ObjectManager \$manager, \$insertedEntities, \$generateId = false)
    {
        \$obj = \$this->class->newInstance();

        \$this->fillColumns(\$obj, \$insertedEntities);
        \$this->callMethods(\$obj, \$insertedEntities);

        if (\$generateId) {
            \$idsName = \$this->class->getIdentifier();
            foreach (\$idsName as \$idName) {
                \$id = \$this->generateId(\$obj, \$idName, \$manager);
                \$this->class->reflFields[\$idName]->setValue(\$obj, \$id);
            }
        }

        \$manager->persist(\$obj);

        return \$obj;
    }

    private function fillColumns(\$obj, \$insertedEntities)
    {
        foreach (\$this->columnFormatters as \$field => \$format) {
            if (null !== \$format) {
                // Add some extended debugging information to any errors thrown by the formatter
                try {
                    \$value = is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format;
                } catch (\\InvalidArgumentException \$ex) {
                    throw new \\InvalidArgumentException(sprintf(
                        \"Failed to generate a value for %s::%s: %s\",
                        get_class(\$obj),
                        \$field,
                        \$ex->getMessage()
                    ));
                }
                // Try a standard setter if it's available, otherwise fall back on reflection
                \$setter = sprintf(\"set%s\", ucfirst(\$field));
                if (is_callable(array(\$obj, \$setter))) {
                    \$obj->\$setter(\$value);
                } else {
                    \$this->class->reflFields[\$field]->setValue(\$obj, \$value);
                }
            }
        }
    }

    private function callMethods(\$obj, \$insertedEntities)
    {
        foreach (\$this->getModifiers() as \$modifier) {
            \$modifier(\$obj, \$insertedEntities);
        }
    }

    /**
     * @param ObjectManager \$manager
     * @return int|null
     */
    private function generateId(\$obj, \$column, ObjectManager \$manager)
    {
        /* @var \$repository \\Doctrine\\Common\\Persistence\\ObjectRepository */
        \$repository = \$manager->getRepository(get_class(\$obj));
        \$result = \$repository->createQueryBuilder('e')
                ->select(sprintf('e.%s', \$column))
                ->getQuery()
                ->execute();
        \$ids = array_map('current', \$result->toArray());

        \$id = null;
        do {
            \$id = mt_rand();
        } while (in_array(\$id, \$ids));

        return \$id;
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/EntityPopulator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/EntityPopulator.php");
    }
}
