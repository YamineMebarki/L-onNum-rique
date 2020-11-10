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

/* vendor/fzaninotto/faker/src/Faker/ORM/Propel2/ColumnTypeGuesser.php */
class __TwigTemplate_89b644c91259df483d226cfcfeba91074523a02faff4a35023cce8f917efd17a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/ColumnTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/ColumnTypeGuesser.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Propel2;

use \\Propel\\Generator\\Model\\PropelTypes;
use \\Propel\\Runtime\\Map\\ColumnMap;

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
     * @param ColumnMap \$column
     * @return \\Closure|null
     */
    public function guessFormat(ColumnMap \$column)
    {
        \$generator = \$this->generator;
        if (\$column->isTemporal()) {
            if (\$column->getType() == PropelTypes::BU_DATE || \$column->getType() == PropelTypes::BU_TIMESTAMP) {
                return function () use (\$generator) {
                    return \$generator->dateTime;
                };
            }

            return function () use (\$generator) {
                return \$generator->dateTimeAD;
            };
        }
        \$type = \$column->getType();
        switch (\$type) {
            case PropelTypes::BOOLEAN:
            case PropelTypes::BOOLEAN_EMU:
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case PropelTypes::NUMERIC:
            case PropelTypes::DECIMAL:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case PropelTypes::TINYINT:
                return function () {
                    return mt_rand(0, 127);
                };
            case PropelTypes::SMALLINT:
                return function () {
                    return mt_rand(0, 32767);
                };
            case PropelTypes::INTEGER:
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case PropelTypes::BIGINT:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
                };
            case PropelTypes::FLOAT:
                return function () {
                    return mt_rand(0, intval('2147483647'))/mt_rand(1, intval('2147483647'));
                };
            case PropelTypes::DOUBLE:
            case PropelTypes::REAL:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'))/mt_rand(1, intval('9223372036854775807'));
                };
            case PropelTypes::CHAR:
            case PropelTypes::VARCHAR:
            case PropelTypes::BINARY:
            case PropelTypes::VARBINARY:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->text(\$size);
                };
            case PropelTypes::LONGVARCHAR:
            case PropelTypes::LONGVARBINARY:
            case PropelTypes::CLOB:
            case PropelTypes::CLOB_EMU:
            case PropelTypes::BLOB:
                return function () use (\$generator) {
                    return \$generator->text;
                };
            case PropelTypes::ENUM:
                \$valueSet = \$column->getValueSet();

                return function () use (\$generator, \$valueSet) {
                    return \$generator->randomElement(\$valueSet);
                };
            case PropelTypes::OBJECT:
            case PropelTypes::PHP_ARRAY:
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
        return "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/ColumnTypeGuesser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Propel2;

use \\Propel\\Generator\\Model\\PropelTypes;
use \\Propel\\Runtime\\Map\\ColumnMap;

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
     * @param ColumnMap \$column
     * @return \\Closure|null
     */
    public function guessFormat(ColumnMap \$column)
    {
        \$generator = \$this->generator;
        if (\$column->isTemporal()) {
            if (\$column->getType() == PropelTypes::BU_DATE || \$column->getType() == PropelTypes::BU_TIMESTAMP) {
                return function () use (\$generator) {
                    return \$generator->dateTime;
                };
            }

            return function () use (\$generator) {
                return \$generator->dateTimeAD;
            };
        }
        \$type = \$column->getType();
        switch (\$type) {
            case PropelTypes::BOOLEAN:
            case PropelTypes::BOOLEAN_EMU:
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case PropelTypes::NUMERIC:
            case PropelTypes::DECIMAL:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case PropelTypes::TINYINT:
                return function () {
                    return mt_rand(0, 127);
                };
            case PropelTypes::SMALLINT:
                return function () {
                    return mt_rand(0, 32767);
                };
            case PropelTypes::INTEGER:
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case PropelTypes::BIGINT:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
                };
            case PropelTypes::FLOAT:
                return function () {
                    return mt_rand(0, intval('2147483647'))/mt_rand(1, intval('2147483647'));
                };
            case PropelTypes::DOUBLE:
            case PropelTypes::REAL:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'))/mt_rand(1, intval('9223372036854775807'));
                };
            case PropelTypes::CHAR:
            case PropelTypes::VARCHAR:
            case PropelTypes::BINARY:
            case PropelTypes::VARBINARY:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->text(\$size);
                };
            case PropelTypes::LONGVARCHAR:
            case PropelTypes::LONGVARBINARY:
            case PropelTypes::CLOB:
            case PropelTypes::CLOB_EMU:
            case PropelTypes::BLOB:
                return function () use (\$generator) {
                    return \$generator->text;
                };
            case PropelTypes::ENUM:
                \$valueSet = \$column->getValueSet();

                return function () use (\$generator, \$valueSet) {
                    return \$generator->randomElement(\$valueSet);
                };
            case PropelTypes::OBJECT:
            case PropelTypes::PHP_ARRAY:
            default:
            // no smart way to guess what the user expects here
                return null;
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Propel2/ColumnTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Propel2/ColumnTypeGuesser.php");
    }
}
