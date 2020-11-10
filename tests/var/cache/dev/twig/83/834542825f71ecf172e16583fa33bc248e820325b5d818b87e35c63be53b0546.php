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

/* vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/Populator.php */
class __TwigTemplate_1878582773165a1f650402a48ee008087e31666b51103693f265836d040f3b09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/Populator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/Populator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\CakePHP;

class Populator
{

    protected \$generator;
    protected \$entities = [];
    protected \$quantities = [];
    protected \$guessers = [];

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @return \\Faker\\Generator
     */
    public function getGenerator()
    {
        return \$this->generator;
    }

    /**
     * @return array
     */
    public function getGuessers()
    {
        return \$this->guessers;
    }

    /**
     * @return \$this
     */
    public function removeGuesser(\$name)
    {
        if (\$this->guessers[\$name]) {
            unset(\$this->guessers[\$name]);
        }
        return \$this;
    }

    /**
     * @return \$this
     * @throws \\Exception
     */
    public function addGuesser(\$class)
    {
        if (!is_object(\$class)) {
            \$class = new \$class(\$this->generator);
        }

        if (!method_exists(\$class, 'guessFormat')) {
            throw new \\Exception('Missing required custom guesser method: ' . get_class(\$class) . '::guessFormat()');
        }

        \$this->guessers[get_class(\$class)] = \$class;
        return \$this;
    }

    /**
     * @param array \$customColumnFormatters
     * @param array \$customModifiers
     * @return \$this
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = [], \$customModifiers = [])
    {
        if (!\$entity instanceof EntityPopulator) {
            \$entity = new EntityPopulator(\$entity);
        }

        \$entity->columnFormatters = \$entity->guessColumnFormatters(\$this);
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }

        \$entity->modifiers = \$entity->guessModifiers(\$this);
        if (\$customModifiers) {
            \$entity->mergeModifiersWith(\$customModifiers);
        }

        \$class = \$entity->class;
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
        return \$this;
    }

    /**
     * @param array \$options
     * @return array
     */
    public function execute(\$options = [])
    {
        \$insertedEntities = [];

        foreach (\$this->quantities as \$class => \$number) {
            for (\$i = 0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][] = \$this->entities[\$class]->execute(\$class, \$insertedEntities, \$options);
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
        return "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/Populator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\CakePHP;

class Populator
{

    protected \$generator;
    protected \$entities = [];
    protected \$quantities = [];
    protected \$guessers = [];

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @return \\Faker\\Generator
     */
    public function getGenerator()
    {
        return \$this->generator;
    }

    /**
     * @return array
     */
    public function getGuessers()
    {
        return \$this->guessers;
    }

    /**
     * @return \$this
     */
    public function removeGuesser(\$name)
    {
        if (\$this->guessers[\$name]) {
            unset(\$this->guessers[\$name]);
        }
        return \$this;
    }

    /**
     * @return \$this
     * @throws \\Exception
     */
    public function addGuesser(\$class)
    {
        if (!is_object(\$class)) {
            \$class = new \$class(\$this->generator);
        }

        if (!method_exists(\$class, 'guessFormat')) {
            throw new \\Exception('Missing required custom guesser method: ' . get_class(\$class) . '::guessFormat()');
        }

        \$this->guessers[get_class(\$class)] = \$class;
        return \$this;
    }

    /**
     * @param array \$customColumnFormatters
     * @param array \$customModifiers
     * @return \$this
     */
    public function addEntity(\$entity, \$number, \$customColumnFormatters = [], \$customModifiers = [])
    {
        if (!\$entity instanceof EntityPopulator) {
            \$entity = new EntityPopulator(\$entity);
        }

        \$entity->columnFormatters = \$entity->guessColumnFormatters(\$this);
        if (\$customColumnFormatters) {
            \$entity->mergeColumnFormattersWith(\$customColumnFormatters);
        }

        \$entity->modifiers = \$entity->guessModifiers(\$this);
        if (\$customModifiers) {
            \$entity->mergeModifiersWith(\$customModifiers);
        }

        \$class = \$entity->class;
        \$this->entities[\$class] = \$entity;
        \$this->quantities[\$class] = \$number;
        return \$this;
    }

    /**
     * @param array \$options
     * @return array
     */
    public function execute(\$options = [])
    {
        \$insertedEntities = [];

        foreach (\$this->quantities as \$class => \$number) {
            for (\$i = 0; \$i < \$number; \$i++) {
                \$insertedEntities[\$class][] = \$this->entities[\$class]->execute(\$class, \$insertedEntities, \$options);
            }
        }

        return \$insertedEntities;
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/Populator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/CakePHP/Populator.php");
    }
}
