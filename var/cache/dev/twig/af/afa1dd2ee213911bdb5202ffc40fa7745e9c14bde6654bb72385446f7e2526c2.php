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

/* vendor/fzaninotto/faker/src/Faker/ORM/Mandango/ColumnTypeGuesser.php */
class __TwigTemplate_45363d8af28729d8526a8aecc0a4d7ef0d3587271110d41ff0e093e06fcb159e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/ColumnTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/ColumnTypeGuesser.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Mandango;

class ColumnTypeGuesser
{
    protected \$generator;

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @return \\Closure|null
     */
    public function guessFormat(\$field)
    {
        \$generator = \$this->generator;
        switch (\$field['type']) {
            case 'boolean':
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case 'integer':
                return function () {
                    return mt_rand(0, intval('4294967295'));
                };
            case 'float':
                return function () {
                    return mt_rand(0, intval('4294967295'))/mt_rand(1, intval('4294967295'));
                };
            case 'string':
                return function () use (\$generator) {
                    return \$generator->text(255);
                };
            case 'date':
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
        return "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/ColumnTypeGuesser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Mandango;

class ColumnTypeGuesser
{
    protected \$generator;

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @return \\Closure|null
     */
    public function guessFormat(\$field)
    {
        \$generator = \$this->generator;
        switch (\$field['type']) {
            case 'boolean':
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case 'integer':
                return function () {
                    return mt_rand(0, intval('4294967295'));
                };
            case 'float':
                return function () {
                    return mt_rand(0, intval('4294967295'))/mt_rand(1, intval('4294967295'));
                };
            case 'string':
                return function () use (\$generator) {
                    return \$generator->text(255);
                };
            case 'date':
                return function () use (\$generator) {
                    return \$generator->datetime;
                };
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Mandango/ColumnTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Mandango/ColumnTypeGuesser.php");
    }
}
