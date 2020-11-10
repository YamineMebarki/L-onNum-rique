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

/* vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php */
class __TwigTemplate_430a3429a3501532aeead8247447d6430c037a9589e1ff498b1074dca770a3c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Doctrine;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;

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
     * @param ClassMetadata \$class
     * @return \\Closure|null
     */
    public function guessFormat(\$fieldName, ClassMetadata \$class)
    {
        \$generator = \$this->generator;
        \$type = \$class->getTypeOfField(\$fieldName);
        switch (\$type) {
            case 'boolean':
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case 'decimal':
                \$size = isset(\$class->fieldMappings[\$fieldName]['precision']) ? \$class->fieldMappings[\$fieldName]['precision'] : 2;

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case 'smallint':
                return function () {
                    return mt_rand(0, 65535);
                };
            case 'integer':
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case 'bigint':
                return function () {
                    return mt_rand(0, intval('18446744073709551615'));
                };
            case 'float':
                return function () {
                    return mt_rand(0, intval('4294967295'))/mt_rand(1, intval('4294967295'));
                };
            case 'string':
                \$size = isset(\$class->fieldMappings[\$fieldName]['length']) ? \$class->fieldMappings[\$fieldName]['length'] : 255;

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
        return "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Doctrine;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;

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
     * @param ClassMetadata \$class
     * @return \\Closure|null
     */
    public function guessFormat(\$fieldName, ClassMetadata \$class)
    {
        \$generator = \$this->generator;
        \$type = \$class->getTypeOfField(\$fieldName);
        switch (\$type) {
            case 'boolean':
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case 'decimal':
                \$size = isset(\$class->fieldMappings[\$fieldName]['precision']) ? \$class->fieldMappings[\$fieldName]['precision'] : 2;

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case 'smallint':
                return function () {
                    return mt_rand(0, 65535);
                };
            case 'integer':
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case 'bigint':
                return function () {
                    return mt_rand(0, intval('18446744073709551615'));
                };
            case 'float':
                return function () {
                    return mt_rand(0, intval('4294967295'))/mt_rand(1, intval('4294967295'));
                };
            case 'string':
                \$size = isset(\$class->fieldMappings[\$fieldName]['length']) ? \$class->fieldMappings[\$fieldName]['length'] : 255;

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
", "vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Doctrine/ColumnTypeGuesser.php");
    }
}
