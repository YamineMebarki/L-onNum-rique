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

/* vendor/fzaninotto/faker/src/Faker/ORM/Propel/Populator.php */
class __TwigTemplate_8c538c6f81d311fbfb949d195c547a28cc0f3fc6a73e5859598cb33d297f746e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel/Populator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel/Populator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Propel;

/**
 * Service class for populating a database using the Propel ORM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected \$generator;
    protected \$entities = array();
    protected \$quantities = array();

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param mixed \$entity A Propel ActiveRecord classname, or a \\Faker\\ORM\\Propel\\EntityPopulator instance
     * @param int   \$number The number of entities to populate
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = array(), \$customModifiers = array())
    {
        if (!\$entity instanceof \\Faker\\ORM\\Propel\\EntityPopulator) {
            \$entity = new \\Faker\\ORM\\Propel\\EntityPopulator(\$entity);
        }
        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$entity->setModifiers(\$entity->guessModifiers(\$this->generator));
        if (\$customModifiers) {
            \$entity->mergeModifiersWith(\$customModifiers);
        }
        \$class = \$entity->getClass();
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param PropelPDO \$con A Propel connection object
     *
     * @return array A list of the inserted PKs
     */
    public function execute(\$con = null)
    {
        if (null === \$con) {
            \$con = \$this->getConnection();
        }
        \$isInstancePoolingEnabled = \\Propel::isInstancePoolingEnabled();
        \\Propel::disableInstancePooling();
        \$insertedEntities = array();
        \$con->beginTransaction();
        foreach (\$this->quantities as \$class => \$number) {
            for (\$i=0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][]= \$this->entities[\$class]->execute(\$con, \$insertedEntities);
            }
        }
        \$con->commit();
        if (\$isInstancePoolingEnabled) {
            \\Propel::enableInstancePooling();
        }

        return \$insertedEntities;
    }

    protected function getConnection()
    {
        // use the first connection available
        \$class = key(\$this->entities);

        if (!\$class) {
            throw new \\RuntimeException('No class found from entities. Did you add entities to the Populator ?');
        }

        \$peer = \$class::PEER;

        return \\Propel::getConnection(\$peer::DATABASE_NAME, \\Propel::CONNECTION_WRITE);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Propel/Populator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Propel;

/**
 * Service class for populating a database using the Propel ORM.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected \$generator;
    protected \$entities = array();
    protected \$quantities = array();

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param mixed \$entity A Propel ActiveRecord classname, or a \\Faker\\ORM\\Propel\\EntityPopulator instance
     * @param int   \$number The number of entities to populate
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = array(), \$customModifiers = array())
    {
        if (!\$entity instanceof \\Faker\\ORM\\Propel\\EntityPopulator) {
            \$entity = new \\Faker\\ORM\\Propel\\EntityPopulator(\$entity);
        }
        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$entity->setModifiers(\$entity->guessModifiers(\$this->generator));
        if (\$customModifiers) {
            \$entity->mergeModifiersWith(\$customModifiers);
        }
        \$class = \$entity->getClass();
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param PropelPDO \$con A Propel connection object
     *
     * @return array A list of the inserted PKs
     */
    public function execute(\$con = null)
    {
        if (null === \$con) {
            \$con = \$this->getConnection();
        }
        \$isInstancePoolingEnabled = \\Propel::isInstancePoolingEnabled();
        \\Propel::disableInstancePooling();
        \$insertedEntities = array();
        \$con->beginTransaction();
        foreach (\$this->quantities as \$class => \$number) {
            for (\$i=0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][]= \$this->entities[\$class]->execute(\$con, \$insertedEntities);
            }
        }
        \$con->commit();
        if (\$isInstancePoolingEnabled) {
            \\Propel::enableInstancePooling();
        }

        return \$insertedEntities;
    }

    protected function getConnection()
    {
        // use the first connection available
        \$class = key(\$this->entities);

        if (!\$class) {
            throw new \\RuntimeException('No class found from entities. Did you add entities to the Populator ?');
        }

        \$peer = \$class::PEER;

        return \\Propel::getConnection(\$peer::DATABASE_NAME, \\Propel::CONNECTION_WRITE);
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Propel/Populator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Propel/Populator.php");
    }
}
