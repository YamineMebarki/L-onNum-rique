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

/* vendor/fzaninotto/faker/src/Faker/ORM/Mandango/EntityPopulator.php */
class __TwigTemplate_5a3107e70812af1a8852d3d9b6048fbaab500d4940197ea1d228aec1089d76c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/EntityPopulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/EntityPopulator.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Mandango;

use Mandango\\Mandango;
use Faker\\Provider\\Base;

/**
 * Service class for populating a table through a Mandango ActiveRecord class.
 */
class EntityPopulator
{
    protected \$class;
    protected \$columnFormatters = array();

    /**
     * Class constructor.
     *
     * @param string \$class A Mandango ActiveRecord classname
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
     * @param Mandango \$mandango
     * @return array
     */
    public function guessColumnFormatters(\\Faker\\Generator \$generator, Mandango \$mandango)
    {
        \$formatters = array();
        \$nameGuesser = new \\Faker\\Guesser\\Name(\$generator);
        \$columnTypeGuesser = new \\Faker\\ORM\\Mandango\\ColumnTypeGuesser(\$generator);

        \$metadata = \$mandango->getMetadata(\$this->class);

        // fields
        foreach (\$metadata['fields'] as \$fieldName => \$field) {
            if (\$formatter = \$nameGuesser->guessFormat(\$fieldName)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$field)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
        }

        // references
        foreach (array_merge(\$metadata['referencesOne'], \$metadata['referencesMany']) as \$referenceName => \$reference) {
            if (!isset(\$reference['class'])) {
                continue;
            }
            \$referenceClass = \$reference['class'];

            \$formatters[\$referenceName] = function (\$insertedEntities) use (\$referenceClass) {
                if (isset(\$insertedEntities[\$referenceClass])) {
                    return Base::randomElement(\$insertedEntities[\$referenceClass]);
                }
            };
        }

        return \$formatters;
    }

    /**
     * Insert one new record using the Entity class.
     * @param Mandango \$mandango
     */
    public function execute(Mandango \$mandango, \$insertedEntities)
    {
        \$metadata = \$mandango->getMetadata(\$this->class);

        \$obj = \$mandango->create(\$this->class);
        foreach (\$this->columnFormatters as \$column => \$format) {
            if (null !== \$format) {
                \$value =  is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format;

                if (isset(\$metadata['fields'][\$column]) ||
                    isset(\$metadata['referencesOne'][\$column])) {
                    \$obj->set(\$column, \$value);
                }

                if (isset(\$metadata['referencesMany'][\$column])) {
                    \$adder = 'add'.ucfirst(\$column);
                    \$obj->\$adder(\$value);
                }
            }
        }
        \$mandango->persist(\$obj);

        return \$obj;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/EntityPopulator.php";
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
use Faker\\Provider\\Base;

/**
 * Service class for populating a table through a Mandango ActiveRecord class.
 */
class EntityPopulator
{
    protected \$class;
    protected \$columnFormatters = array();

    /**
     * Class constructor.
     *
     * @param string \$class A Mandango ActiveRecord classname
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
     * @param Mandango \$mandango
     * @return array
     */
    public function guessColumnFormatters(\\Faker\\Generator \$generator, Mandango \$mandango)
    {
        \$formatters = array();
        \$nameGuesser = new \\Faker\\Guesser\\Name(\$generator);
        \$columnTypeGuesser = new \\Faker\\ORM\\Mandango\\ColumnTypeGuesser(\$generator);

        \$metadata = \$mandango->getMetadata(\$this->class);

        // fields
        foreach (\$metadata['fields'] as \$fieldName => \$field) {
            if (\$formatter = \$nameGuesser->guessFormat(\$fieldName)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
            if (\$formatter = \$columnTypeGuesser->guessFormat(\$field)) {
                \$formatters[\$fieldName] = \$formatter;
                continue;
            }
        }

        // references
        foreach (array_merge(\$metadata['referencesOne'], \$metadata['referencesMany']) as \$referenceName => \$reference) {
            if (!isset(\$reference['class'])) {
                continue;
            }
            \$referenceClass = \$reference['class'];

            \$formatters[\$referenceName] = function (\$insertedEntities) use (\$referenceClass) {
                if (isset(\$insertedEntities[\$referenceClass])) {
                    return Base::randomElement(\$insertedEntities[\$referenceClass]);
                }
            };
        }

        return \$formatters;
    }

    /**
     * Insert one new record using the Entity class.
     * @param Mandango \$mandango
     */
    public function execute(Mandango \$mandango, \$insertedEntities)
    {
        \$metadata = \$mandango->getMetadata(\$this->class);

        \$obj = \$mandango->create(\$this->class);
        foreach (\$this->columnFormatters as \$column => \$format) {
            if (null !== \$format) {
                \$value =  is_callable(\$format) ? \$format(\$insertedEntities, \$obj) : \$format;

                if (isset(\$metadata['fields'][\$column]) ||
                    isset(\$metadata['referencesOne'][\$column])) {
                    \$obj->set(\$column, \$value);
                }

                if (isset(\$metadata['referencesMany'][\$column])) {
                    \$adder = 'add'.ucfirst(\$column);
                    \$obj->\$adder(\$value);
                }
            }
        }
        \$mandango->persist(\$obj);

        return \$obj;
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/EntityPopulator.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Mandango/EntityPopulator.php");
    }
}
