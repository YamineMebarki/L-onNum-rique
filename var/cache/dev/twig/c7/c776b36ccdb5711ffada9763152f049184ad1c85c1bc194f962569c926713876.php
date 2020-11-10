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

/* vendor/fzaninotto/faker/src/Faker/ORM/Propel/ColumnTypeGuesser.php */
class __TwigTemplate_ef858b3e8aa60f522b017d86332794abb9a741ddf20190a340880a22e99ea617 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel/ColumnTypeGuesser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/ORM/Propel/ColumnTypeGuesser.php"));

        // line 1
        echo "<?php

namespace Faker\\ORM\\Propel;

use \\PropelColumnTypes;
use \\ColumnMap;

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
            if (\$column->isEpochTemporal()) {
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
            case PropelColumnTypes::BOOLEAN:
            case PropelColumnTypes::BOOLEAN_EMU:
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case PropelColumnTypes::NUMERIC:
            case PropelColumnTypes::DECIMAL:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case PropelColumnTypes::TINYINT:
                return function () {
                    return mt_rand(0, 127);
                };
            case PropelColumnTypes::SMALLINT:
                return function () {
                    return mt_rand(0, 32767);
                };
            case PropelColumnTypes::INTEGER:
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case PropelColumnTypes::BIGINT:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
                };
            case PropelColumnTypes::FLOAT:
                return function () {
                    return mt_rand(0, intval('2147483647'))/mt_rand(1, intval('2147483647'));
                };
            case PropelColumnTypes::DOUBLE:
            case PropelColumnTypes::REAL:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'))/mt_rand(1, intval('9223372036854775807'));
                };
            case PropelColumnTypes::CHAR:
            case PropelColumnTypes::VARCHAR:
            case PropelColumnTypes::BINARY:
            case PropelColumnTypes::VARBINARY:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->text(\$size);
                };
            case PropelColumnTypes::LONGVARCHAR:
            case PropelColumnTypes::LONGVARBINARY:
            case PropelColumnTypes::CLOB:
            case PropelColumnTypes::CLOB_EMU:
            case PropelColumnTypes::BLOB:
                return function () use (\$generator) {
                    return \$generator->text;
                };
            case PropelColumnTypes::ENUM:
                \$valueSet = \$column->getValueSet();

                return function () use (\$generator, \$valueSet) {
                    return \$generator->randomElement(\$valueSet);
                };
            case PropelColumnTypes::OBJECT:
            case PropelColumnTypes::PHP_ARRAY:
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
        return "vendor/fzaninotto/faker/src/Faker/ORM/Propel/ColumnTypeGuesser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\ORM\\Propel;

use \\PropelColumnTypes;
use \\ColumnMap;

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
            if (\$column->isEpochTemporal()) {
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
            case PropelColumnTypes::BOOLEAN:
            case PropelColumnTypes::BOOLEAN_EMU:
                return function () use (\$generator) {
                    return \$generator->boolean;
                };
            case PropelColumnTypes::NUMERIC:
            case PropelColumnTypes::DECIMAL:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->randomNumber(\$size + 2) / 100;
                };
            case PropelColumnTypes::TINYINT:
                return function () {
                    return mt_rand(0, 127);
                };
            case PropelColumnTypes::SMALLINT:
                return function () {
                    return mt_rand(0, 32767);
                };
            case PropelColumnTypes::INTEGER:
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case PropelColumnTypes::BIGINT:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
                };
            case PropelColumnTypes::FLOAT:
                return function () {
                    return mt_rand(0, intval('2147483647'))/mt_rand(1, intval('2147483647'));
                };
            case PropelColumnTypes::DOUBLE:
            case PropelColumnTypes::REAL:
                return function () {
                    return mt_rand(0, intval('9223372036854775807'))/mt_rand(1, intval('9223372036854775807'));
                };
            case PropelColumnTypes::CHAR:
            case PropelColumnTypes::VARCHAR:
            case PropelColumnTypes::BINARY:
            case PropelColumnTypes::VARBINARY:
                \$size = \$column->getSize();

                return function () use (\$generator, \$size) {
                    return \$generator->text(\$size);
                };
            case PropelColumnTypes::LONGVARCHAR:
            case PropelColumnTypes::LONGVARBINARY:
            case PropelColumnTypes::CLOB:
            case PropelColumnTypes::CLOB_EMU:
            case PropelColumnTypes::BLOB:
                return function () use (\$generator) {
                    return \$generator->text;
                };
            case PropelColumnTypes::ENUM:
                \$valueSet = \$column->getValueSet();

                return function () use (\$generator, \$valueSet) {
                    return \$generator->randomElement(\$valueSet);
                };
            case PropelColumnTypes::OBJECT:
            case PropelColumnTypes::PHP_ARRAY:
            default:
            // no smart way to guess what the user expects here
                return null;
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/ORM/Propel/ColumnTypeGuesser.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/ORM/Propel/ColumnTypeGuesser.php");
    }
}
