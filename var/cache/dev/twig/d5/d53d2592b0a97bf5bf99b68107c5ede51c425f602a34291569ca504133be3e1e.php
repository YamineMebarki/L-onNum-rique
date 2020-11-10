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

/* vendor/fzaninotto/faker/src/Faker/ORM/Spot/Populator.php */
class __TwigTemplate_cea8bf79e44d2009c0f1c4892c9616456b06c8b11f8b9721421f72545eeda8e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/Populator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/Populator.php"));

        // line 1
        echo "<?php


namespace Faker\\ORM\\Spot;

use Spot\\Locator;

/**
 * Service class for populating a database using the Spot ORM.
 */
class Populator
{
    protected \$generator;
    protected \$locator;
    protected \$entities = array();
    protected \$quantities = array();

    /**
     * Populator constructor.
     * @param \\Faker\\Generator \$generator
     * @param Locator|null \$locator
     */
    public function __construct(\\Faker\\Generator \$generator, Locator \$locator = null)
    {
        \$this->generator = \$generator;
        \$this->locator = \$locator;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param \$entityName string Name of Entity object to generate
     * @param \$number int The number of entities to populate
     * @param \$customColumnFormatters array
     * @param \$customModifiers array
     * @param \$useExistingData bool Should we use existing rows (e.g. roles) to populate relations?
     */
    public function addEntity(
        \$entityName,
        \$number,
        \$customColumnFormatters = array(),
        \$customModifiers = array(),
        \$useExistingData = false
    ) {
        \$mapper = \$this->locator->mapper(\$entityName);
        if (null === \$mapper) {
            throw new \\InvalidArgumentException(\"No mapper can be found for entity \" . \$entityName);
        }
        \$entity = new EntityPopulator(\$mapper, \$this->locator, \$useExistingData);

        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$entity->mergeModifiersWith(\$customModifiers);

        \$this->entities[\$entityName] = \$entity;
        \$this->quantities[\$entityName] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param Locator \$locator A Spot locator
     *
     * @return array A list of the inserted PKs
     */
    public function execute(\$locator = null)
    {
        if (null === \$locator) {
            \$locator = \$this->locator;
        }
        if (null === \$locator) {
            throw new \\InvalidArgumentException(\"No entity manager passed to Spot Populator.\");
        }

        \$insertedEntities = array();
        foreach (\$this->quantities as \$entityName => \$number) {
            for (\$i = 0; \$i < \$number; \$i++) {
                \$insertedEntities[\$entityName][] = \$this->entities[\$entityName]->execute(
                    \$insertedEntities
                );
            }
        }

        return \$insertedEntities;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Spot/Populator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Faker\\ORM\\Spot;

use Spot\\Locator;

/**
 * Service class for populating a database using the Spot ORM.
 */
class Populator
{
    protected \$generator;
    protected \$locator;
    protected \$entities = array();
    protected \$quantities = array();

    /**
     * Populator constructor.
     * @param \\Faker\\Generator \$generator
     * @param Locator|null \$locator
     */
    public function __construct(\\Faker\\Generator \$generator, Locator \$locator = null)
    {
        \$this->generator = \$generator;
        \$this->locator = \$locator;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param \$entityName string Name of Entity object to generate
     * @param \$number int The number of entities to populate
     * @param \$customColumnFormatters array
     * @param \$customModifiers array
     * @param \$useExistingData bool Should we use existing rows (e.g. roles) to populate relations?
     */
    public function addEntity(
        \$entityName,
        \$number,
        \$customColumnFormatters = array(),
        \$customModifiers = array(),
        \$useExistingData = false
    ) {
        \$mapper = \$this->locator->mapper(\$entityName);
        if (null === \$mapper) {
            throw new \\InvalidArgumentException(\"No mapper can be found for entity \" . \$entityName);
        }
        \$entity = new EntityPopulator(\$mapper, \$this->locator, \$useExistingData);

        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$entity->mergeModifiersWith(\$customModifiers);

        \$this->entities[\$entityName] = \$entity;
        \$this->quantities[\$entityName] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param Locator \$locator A Spot locator
     *
     * @return array A list of the inserted PKs
     */
    public function execute(\$locator = null)
    {
        if (null === \$locator) {
            \$locator = \$this->locator;
        }
        if (null === \$locator) {
            throw new \\InvalidArgumentException(\"No entity manager passed to Spot Populator.\");
        }

        \$insertedEntities = array();
        foreach (\$this->quantities as \$entityName => \$number) {
            for (\$i = 0; \$i < \$number; \$i++) {
                \$insertedEntities[\$entityName][] = \$this->entities[\$entityName]->execute(
                    \$insertedEntities
                );
            }
        }

        return \$insertedEntities;
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/Populator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Spot/Populator.php");
    }
}
