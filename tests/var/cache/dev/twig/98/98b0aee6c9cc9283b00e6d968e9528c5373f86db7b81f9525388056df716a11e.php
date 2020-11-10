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

/* vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/Populator.php */
class __TwigTemplate_5edfa7e9d9f240da084a6ea224d206c3b2a324d2f2515e0c13f14a40e5a3143d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/Populator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/Populator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Doctrine;

use Doctrine\\Common\\Persistence\\ObjectManager;

/**
 * Service class for populating a database using the Doctrine ORM or ODM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected \$generator;
    protected \$manager;
    protected \$entities = array();
    protected \$quantities = array();
    protected \$generateId = array();

    /**
     * @param \\Faker\\Generator \$generator
     * @param ObjectManager|null \$manager
     */
    public function __construct(\\Faker\\Generator \$generator, ObjectManager \$manager = null)
    {
        \$this->generator = \$generator;
        \$this->manager = \$manager;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param mixed \$entity A Doctrine classname, or a \\Faker\\ORM\\Doctrine\\EntityPopulator instance
     * @param int   \$number The number of entities to populate
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = array(), \$customModifiers = array(), \$generateId = false)
    {
        if (!\$entity instanceof \\Faker\\ORM\\Doctrine\\EntityPopulator) {
            if (null === \$this->manager) {
                throw new \\InvalidArgumentException(\"No entity manager passed to Doctrine Populator.\");
            }
            \$entity = new \\Faker\\ORM\\Doctrine\\EntityPopulator(\$this->manager->getClassMetadata(\$entity));
        }
        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$entity->mergeModifiersWith(\$customModifiers);
        \$this->generateId[\$entity->getClass()] = \$generateId;

        \$class = \$entity->getClass();
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param null|EntityManager \$entityManager A Doctrine connection object
     *
     * @return array A list of the inserted PKs
     */
    public function execute(\$entityManager = null)
    {
        if (null === \$entityManager) {
            \$entityManager = \$this->manager;
        }
        if (null === \$entityManager) {
            throw new \\InvalidArgumentException(\"No entity manager passed to Doctrine Populator.\");
        }

        \$insertedEntities = array();
        foreach (\$this->quantities as \$class => \$number) {
            \$generateId = \$this->generateId[\$class];
            for (\$i=0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][]= \$this->entities[\$class]->execute(\$entityManager, \$insertedEntities, \$generateId);
            }
            \$entityManager->flush();
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
        return "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/Populator.php";
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

/**
 * Service class for populating a database using the Doctrine ORM or ODM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected \$generator;
    protected \$manager;
    protected \$entities = array();
    protected \$quantities = array();
    protected \$generateId = array();

    /**
     * @param \\Faker\\Generator \$generator
     * @param ObjectManager|null \$manager
     */
    public function __construct(\\Faker\\Generator \$generator, ObjectManager \$manager = null)
    {
        \$this->generator = \$generator;
        \$this->manager = \$manager;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param mixed \$entity A Doctrine classname, or a \\Faker\\ORM\\Doctrine\\EntityPopulator instance
     * @param int   \$number The number of entities to populate
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = array(), \$customModifiers = array(), \$generateId = false)
    {
        if (!\$entity instanceof \\Faker\\ORM\\Doctrine\\EntityPopulator) {
            if (null === \$this->manager) {
                throw new \\InvalidArgumentException(\"No entity manager passed to Doctrine Populator.\");
            }
            \$entity = new \\Faker\\ORM\\Doctrine\\EntityPopulator(\$this->manager->getClassMetadata(\$entity));
        }
        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$entity->mergeModifiersWith(\$customModifiers);
        \$this->generateId[\$entity->getClass()] = \$generateId;

        \$class = \$entity->getClass();
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param null|EntityManager \$entityManager A Doctrine connection object
     *
     * @return array A list of the inserted PKs
     */
    public function execute(\$entityManager = null)
    {
        if (null === \$entityManager) {
            \$entityManager = \$this->manager;
        }
        if (null === \$entityManager) {
            throw new \\InvalidArgumentException(\"No entity manager passed to Doctrine Populator.\");
        }

        \$insertedEntities = array();
        foreach (\$this->quantities as \$class => \$number) {
            \$generateId = \$this->generateId[\$class];
            for (\$i=0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][]= \$this->entities[\$class]->execute(\$entityManager, \$insertedEntities, \$generateId);
            }
            \$entityManager->flush();
        }

        return \$insertedEntities;
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/Populator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/Populator.php");
    }
}
