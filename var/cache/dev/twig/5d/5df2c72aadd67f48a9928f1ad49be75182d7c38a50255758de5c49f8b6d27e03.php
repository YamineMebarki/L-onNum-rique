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

/* vendor/fzaninotto/faker/src/Faker/ORM/Mandango/Populator.php */
class __TwigTemplate_3c748b94bbe30e98668adb5aca9d93568bf8619c8aaf1f394a16e02c2ea72143 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/Populator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/Populator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Mandango;

use Mandango\\Mandango;

/**
 * Service class for populating a database using Mandango.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected \$generator;
    protected \$mandango;
    protected \$entities = array();
    protected \$quantities = array();

    /**
     * @param \\Faker\\Generator \$generator
     * @param Mandango \$mandango
     */
    public function __construct(\\Faker\\Generator \$generator, Mandango \$mandango)
    {
        \$this->generator = \$generator;
        \$this->mandango = \$mandango;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param mixed \$entity A Propel ActiveRecord classname, or a \\Faker\\ORM\\Propel\\EntityPopulator instance
     * @param int   \$number The number of entities to populate
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = array())
    {
        if (!\$entity instanceof \\Faker\\ORM\\Mandango\\EntityPopulator) {
            \$entity = new \\Faker\\ORM\\Mandango\\EntityPopulator(\$entity);
        }
        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator, \$this->mandango));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$class = \$entity->getClass();
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @return array A list of the inserted entities.
     */
    public function execute()
    {
        \$insertedEntities = array();
        foreach (\$this->quantities as \$class => \$number) {
            for (\$i=0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][]= \$this->entities[\$class]->execute(\$this->mandango, \$insertedEntities);
            }
        }
        \$this->mandango->flush();

        return \$insertedEntities;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/Populator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Mandango;

use Mandango\\Mandango;

/**
 * Service class for populating a database using Mandango.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected \$generator;
    protected \$mandango;
    protected \$entities = array();
    protected \$quantities = array();

    /**
     * @param \\Faker\\Generator \$generator
     * @param Mandango \$mandango
     */
    public function __construct(\\Faker\\Generator \$generator, Mandango \$mandango)
    {
        \$this->generator = \$generator;
        \$this->mandango = \$mandango;
    }

    /**
     * Add an order for the generation of \$number records for \$entity.
     *
     * @param mixed \$entity A Propel ActiveRecord classname, or a \\Faker\\ORM\\Propel\\EntityPopulator instance
     * @param int   \$number The number of entities to populate
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = array())
    {
        if (!\$entity instanceof \\Faker\\ORM\\Mandango\\EntityPopulator) {
            \$entity = new \\Faker\\ORM\\Mandango\\EntityPopulator(\$entity);
        }
        \$entity->setColumnFormatters(\$entity->guessColumnFormatters(\$this->generator, \$this->mandango));
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }
        \$class = \$entity->getClass();
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @return array A list of the inserted entities.
     */
    public function execute()
    {
        \$insertedEntities = array();
        foreach (\$this->quantities as \$class => \$number) {
            for (\$i=0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][]= \$this->entities[\$class]->execute(\$this->mandango, \$insertedEntities);
            }
        }
        \$this->mandango->flush();

        return \$insertedEntities;
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/Populator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Mandango/Populator.php");
    }
}
