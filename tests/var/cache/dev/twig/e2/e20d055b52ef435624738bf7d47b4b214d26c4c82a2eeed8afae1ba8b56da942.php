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

/* vendor/fzaninotto/faker/src/Faker/ORM/Spot/ColumnTypeGuesser.php */
class __TwigTemplate_6f3e0dcd810c40a06eba544a3b3903dd6f42529960049c75e47685c8eda2bf84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/ColumnTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/ColumnTypeGuesser.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Spot;

use Faker\\Generator;

class ColumnTypeGuesser
{
    protected \$generator;


    /**
     * ColumnTypeGuesser constructor.
     * @param Generator \$generator
     */
    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @param array \$field
     * @return \\Closure|null
     */
    public function guessFormat(array \$field)
    {
        \$generator = \$this->generator;
        \$type = \$field['type'];
        switch (\$type) {
            case 'boolean':
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case 'decimal':
                \$size = isset(\$field['precision']) ? \$field['precision'] : 2;

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case 'smallint':
                return function () use (\$generator) {
                    return \$generator->numberBetween(0, 65535);
                };
            case 'integer':
                return function () use (\$generator) {
                    return \$generator->numberBetween(0, intval('2147483647'));
                };
            case 'bigint':
                return function () use (\$generator) {
                    return \$generator->numberBetween(0, intval('18446744073709551615'));
                };
            case 'float':
                return function () use (\$generator) {
                    return \$generator->randomFloat(null, 0, intval('4294967295'));
                };
            case 'string':
                \$size = isset(\$field['length']) ? \$field['length'] : 255;

                return function () use (\$generator, \$size) {
                    return \$generator->text(\$size);
                };
            case 'text':
                return function () use (\$generator) {
                    return \$generator->text;
                };
            case 'datetime':
            case 'date':
            case 'time':
                return function () use (\$generator) {
                    return \$generator->datetime;
                };
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/ORM/Spot/ColumnTypeGuesser.php";
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

class ColumnTypeGuesser
{
    protected \$generator;


    /**
     * ColumnTypeGuesser constructor.
     * @param Generator \$generator
     */
    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @param array \$field
     * @return \\Closure|null
     */
    public function guessFormat(array \$field)
    {
        \$generator = \$this->generator;
        \$type = \$field['type'];
        switch (\$type) {
            case 'boolean':
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case 'decimal':
                \$size = isset(\$field['precision']) ? \$field['precision'] : 2;

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case 'smallint':
                return function () use (\$generator) {
                    return \$generator->numberBetween(0, 65535);
                };
            case 'integer':
                return function () use (\$generator) {
                    return \$generator->numberBetween(0, intval('2147483647'));
                };
            case 'bigint':
                return function () use (\$generator) {
                    return \$generator->numberBetween(0, intval('18446744073709551615'));
                };
            case 'float':
                return function () use (\$generator) {
                    return \$generator->randomFloat(null, 0, intval('4294967295'));
                };
            case 'string':
                \$size = isset(\$field['length']) ? \$field['length'] : 255;

                return function () use (\$generator, \$size) {
                    return \$generator->text(\$size);
                };
            case 'text':
                return function () use (\$generator) {
                    return \$generator->text;
                };
            case 'datetime':
            case 'date':
            case 'time':
                return function () use (\$generator) {
                    return \$generator->datetime;
                };
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Spot/ColumnTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Spot/ColumnTypeGuesser.php");
    }
}
