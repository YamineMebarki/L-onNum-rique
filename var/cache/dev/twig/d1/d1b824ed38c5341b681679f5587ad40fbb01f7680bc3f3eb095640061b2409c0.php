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

/* vendor/fzaninotto/faker/src/Faker/ORM/Spot/EntityPopulator.php */
class __TwigTemplate_744025f8aefddccc5aab9903468f9e2ca517127b993e0a633830d51025ef87eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/EntityPopulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/EntityPopulator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Spot;

use Faker\\Generator;
use Faker\\Guesser\\Name;
use Spot\\Locator;
use Spot\\Mapper;
use Spot\\Relation\\BelongsTo;

/**
 * Service class for populating a table through a Spot Entity class.
 */
class EntityPopulator
{
    /**
     * When fetching existing data - fetch only few first rows.
     */
    const RELATED_FETCH_COUNT = 10;

    /**
     * @var Mapper
     */
    protected \$mapper;

    /**
     * @var Locator
     */
    protected \$locator;

    /**
     * @var array
     */
    protected \$columnFormatters = array();
    /**
     * @var array
     */
    protected \$modifiers = array();

    /**
     * @var bool
     */
    protected \$useExistingData = false;

    /**
     * Class constructor.
     *
     * @param Mapper \$mapper
     * @param Locator \$locator
     * @param \$useExistingData
     */
    public function __construct(Mapper \$mapper, Locator \$locator, \$useExistingData = false)
    {
        \$this->mapper = \$mapper;
        \$this->locator = \$locator;
        \$this->useExistingData = \$useExistingData;
    }

    /**
     * @return string
     */
    public function getMapper()
    {
        return \$this->mapper;
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

    /**
     * @param \$columnFormatters
     */
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
     * @param Generator \$generator
     * @return array
     */
    public function guessColumnFormatters(Generator \$generator)
    {
        \$formatters = array();
        \$nameGuesser = new Name(\$generator);
        \$columnTypeGuesser = new ColumnTypeGuesser(\$generator);
        \$fields = \$this->mapper->fields();
        foreach (\$fields as \$fieldName => \$field) {
            if (\$field['primary'] === true) {
                continue;
            }
            if (\$formatter = \$nameGuesser->guessFormat(\$fieldName)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$field)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
        }
        \$entityName = \$this->mapper->entity();
        \$entity = \$this->mapper->build([]);
        \$relations = \$entityName::relations(\$this->mapper, \$entity);
        foreach (\$relations as \$relation) {
            // We don't need any other relation here.
            if (\$relation instanceof BelongsTo) {

                \$fieldName = \$relation->localKey();
                \$entityName = \$relation->entityName();
                \$field = \$fields[\$fieldName];
                \$required = \$field['required'];

                \$locator = \$this->locator;

                \$formatters[\$fieldName] = function (\$inserted) use (\$required, \$entityName, \$locator) {
                    if (!empty(\$inserted[\$entityName])) {
                        return \$inserted[\$entityName][mt_rand(0, count(\$inserted[\$entityName]) - 1)]->get('id');
                    }

                    if (\$required && \$this->useExistingData) {
                        // We did not add anything like this, but it's required,
                        // So let's find something existing in DB.
                        \$mapper = \$locator->mapper(\$entityName);
                        \$records = \$mapper->all()->limit(self::RELATED_FETCH_COUNT)->toArray();
                        if (empty(\$records)) {
                            return null;
                        }
                        \$id = \$records[mt_rand(0, count(\$records) - 1)]['id'];

                        return \$id;
                    }

                    return null;
                };

            }
        }

        return \$formatters;
    }

    /**
     * Insert one new record using the Entity class.
     *
     * @param \$insertedEntities
     * @return string
     */
    public function execute(\$insertedEntities)
    {
        \$obj = \$this->mapper->build([]);

        \$this->fillColumns(\$obj, \$insertedEntities);
        \$this->callMethods(\$obj, \$insertedEntities);

        \$this->mapper->insert(\$obj);


        return \$obj;
    }

    /**
     * @param \$obj
     * @param \$insertedEntities
     */
    private function fillColumns(\$obj, \$insertedEntities)
    {
        foreach (\$this->columnFormatters as \$field => \$format) {
            if (null !== \$format) {
                \$value = is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format;
                \$obj->set(\$field, \$value);
            }
        }
    }

    /**
     * @param \$obj
     * @param \$insertedEntities
     */
    private function callMethods(\$obj, \$insertedEntities)
    {
        foreach (\$this->getModifiers() as \$modifier) {
            \$modifier(\$obj, \$insertedEntities);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Spot/EntityPopulator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Spot;

use Faker\\Generator;
use Faker\\Guesser\\Name;
use Spot\\Locator;
use Spot\\Mapper;
use Spot\\Relation\\BelongsTo;

/**
 * Service class for populating a table through a Spot Entity class.
 */
class EntityPopulator
{
    /**
     * When fetching existing data - fetch only few first rows.
     */
    const RELATED_FETCH_COUNT = 10;

    /**
     * @var Mapper
     */
    protected \$mapper;

    /**
     * @var Locator
     */
    protected \$locator;

    /**
     * @var array
     */
    protected \$columnFormatters = array();
    /**
     * @var array
     */
    protected \$modifiers = array();

    /**
     * @var bool
     */
    protected \$useExistingData = false;

    /**
     * Class constructor.
     *
     * @param Mapper \$mapper
     * @param Locator \$locator
     * @param \$useExistingData
     */
    public function __construct(Mapper \$mapper, Locator \$locator, \$useExistingData = false)
    {
        \$this->mapper = \$mapper;
        \$this->locator = \$locator;
        \$this->useExistingData = \$useExistingData;
    }

    /**
     * @return string
     */
    public function getMapper()
    {
        return \$this->mapper;
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

    /**
     * @param \$columnFormatters
     */
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
     * @param Generator \$generator
     * @return array
     */
    public function guessColumnFormatters(Generator \$generator)
    {
        \$formatters = array();
        \$nameGuesser = new Name(\$generator);
        \$columnTypeGuesser = new ColumnTypeGuesser(\$generator);
        \$fields = \$this->mapper->fields();
        foreach (\$fields as \$fieldName => \$field) {
            if (\$field['primary'] === true) {
                continue;
            }
            if (\$formatter = \$nameGuesser->guessFormat(\$fieldName)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$field)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
        }
        \$entityName = \$this->mapper->entity();
        \$entity = \$this->mapper->build([]);
        \$relations = \$entityName::relations(\$this->mapper, \$entity);
        foreach (\$relations as \$relation) {
            // We don't need any other relation here.
            if (\$relation instanceof BelongsTo) {

                \$fieldName = \$relation->localKey();
                \$entityName = \$relation->entityName();
                \$field = \$fields[\$fieldName];
                \$required = \$field['required'];

                \$locator = \$this->locator;

                \$formatters[\$fieldName] = function (\$inserted) use (\$required, \$entityName, \$locator) {
                    if (!empty(\$inserted[\$entityName])) {
                        return \$inserted[\$entityName][mt_rand(0, count(\$inserted[\$entityName]) - 1)]->get('id');
                    }

                    if (\$required && \$this->useExistingData) {
                        // We did not add anything like this, but it's required,
                        // So let's find something existing in DB.
                        \$mapper = \$locator->mapper(\$entityName);
                        \$records = \$mapper->all()->limit(self::RELATED_FETCH_COUNT)->toArray();
                        if (empty(\$records)) {
                            return null;
                        }
                        \$id = \$records[mt_rand(0, count(\$records) - 1)]['id'];

                        return \$id;
                    }

                    return null;
                };

            }
        }

        return \$formatters;
    }

    /**
     * Insert one new record using the Entity class.
     *
     * @param \$insertedEntities
     * @return string
     */
    public function execute(\$insertedEntities)
    {
        \$obj = \$this->mapper->build([]);

        \$this->fillColumns(\$obj, \$insertedEntities);
        \$this->callMethods(\$obj, \$insertedEntities);

        \$this->mapper->insert(\$obj);


        return \$obj;
    }

    /**
     * @param \$obj
     * @param \$insertedEntities
     */
    private function fillColumns(\$obj, \$insertedEntities)
    {
        foreach (\$this->columnFormatters as \$field => \$format) {
            if (null !== \$format) {
                \$value = is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format;
                \$obj->set(\$field, \$value);
            }
        }
    }

    /**
     * @param \$obj
     * @param \$insertedEntities
     */
    private function callMethods(\$obj, \$insertedEntities)
    {
        foreach (\$this->getModifiers() as \$modifier) {
            \$modifier(\$obj, \$insertedEntities);
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/EntityPopulator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Spot/EntityPopulator.php");
    }
}
