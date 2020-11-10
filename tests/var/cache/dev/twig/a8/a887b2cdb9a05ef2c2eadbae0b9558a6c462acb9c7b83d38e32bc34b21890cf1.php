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

/* vendor/symfony/validator/Tests/Constraints/TypeValidatorTest.php */
class __TwigTemplate_da2b8e553c9dc1d5736440143dfc1ce4c425a5422547888f43d77da53b179be9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TypeValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TypeValidatorTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Type;
use Symfony\\Component\\Validator\\Constraints\\TypeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class TypeValidatorTest extends ConstraintValidatorTestCase
{
    protected static \$file;

    protected function createValidator()
    {
        return new TypeValidator();
    }

    public function testNullIsValid()
    {
        \$constraint = new Type(['type' => 'integer']);

        \$this->validator->validate(null, \$constraint);

        \$this->assertNoViolation();
    }

    public function testEmptyIsValidIfString()
    {
        \$constraint = new Type(['type' => 'string']);

        \$this->validator->validate('', \$constraint);

        \$this->assertNoViolation();
    }

    public function testEmptyIsInvalidIfNoString()
    {
        \$constraint = new Type([
            'type' => 'integer',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "', '\"\"')
            ->setParameter('";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "', 'integer')
            ->setCode(Type::INVALID_TYPE_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value, \$type)
    {
        \$constraint = new Type(['type' => \$type]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        \$object = new \\stdClass();
        \$file = \$this->createFile();

        return [
            [true, 'Boolean'],
            [false, 'Boolean'],
            [true, 'boolean'],
            [false, 'boolean'],
            [true, 'bool'],
            [false, 'bool'],
            [0, 'numeric'],
            ['0', 'numeric'],
            [1.5, 'numeric'],
            ['1.5', 'numeric'],
            [0, 'integer'],
            [1.5, 'float'],
            ['12345', 'string'],
            [[], 'array'],
            [\$object, 'object'],
            [\$object, 'stdClass'],
            [\$file, 'resource'],
            ['12345', 'digit'],
            ['12a34', 'alnum'],
            ['abcde', 'alpha'],
            [\"\\n\\r\\t\", 'cntrl'],
            ['arf12', 'graph'],
            ['abcde', 'lower'],
            ['ABCDE', 'upper'],
            ['arf12', 'print'],
            ['*&\$()', 'punct'],
            [\"\\n\\r\\t\", 'space'],
            ['AB10BC99', 'xdigit'],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value, \$type, \$valueAsString)
    {
        \$constraint = new Type([
            'type' => \$type,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "', \$valueAsString)
            ->setParameter('";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "', \$type)
            ->setCode(Type::INVALID_TYPE_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        \$object = new \\stdClass();
        \$file = \$this->createFile();

        return [
            ['foobar', 'numeric', '\"foobar\"'],
            ['foobar', 'boolean', '\"foobar\"'],
            ['0', 'integer', '\"0\"'],
            ['1.5', 'float', '\"1.5\"'],
            [12345, 'string', '12345'],
            [\$object, 'boolean', 'object'],
            [\$object, 'numeric', 'object'],
            [\$object, 'integer', 'object'],
            [\$object, 'float', 'object'],
            [\$object, 'string', 'object'],
            [\$object, 'resource', 'object'],
            [\$file, 'boolean', 'resource'],
            [\$file, 'numeric', 'resource'],
            [\$file, 'integer', 'resource'],
            [\$file, 'float', 'resource'],
            [\$file, 'string', 'resource'],
            [\$file, 'object', 'resource'],
            ['12a34', 'digit', '\"12a34\"'],
            ['1a#23', 'alnum', '\"1a#23\"'],
            ['abcd1', 'alpha', '\"abcd1\"'],
            [\"\\nabc\", 'cntrl', \"\\\"\\nabc\\\"\"],
            [\"abc\\n\", 'graph', \"\\\"abc\\n\\\"\"],
            ['abCDE', 'lower', '\"abCDE\"'],
            ['ABcde', 'upper', '\"ABcde\"'],
            [\"\\nabc\", 'print', \"\\\"\\nabc\\\"\"],
            ['abc&\$!', 'punct', '\"abc&\$!\"'],
            [\"\\nabc\", 'space', \"\\\"\\nabc\\\"\"],
            ['AR1012', 'xdigit', '\"AR1012\"'],
        ];
    }

    protected function createFile()
    {
        if (!static::\$file) {
            static::\$file = fopen(__FILE__, 'r');
        }

        return static::\$file;
    }

    public static function tearDownAfterClass(): void
    {
        if (static::\$file) {
            fclose(static::\$file);
            static::\$file = null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/TypeValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 124,  173 => 123,  103 => 56,  99 => 55,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Type;
use Symfony\\Component\\Validator\\Constraints\\TypeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class TypeValidatorTest extends ConstraintValidatorTestCase
{
    protected static \$file;

    protected function createValidator()
    {
        return new TypeValidator();
    }

    public function testNullIsValid()
    {
        \$constraint = new Type(['type' => 'integer']);

        \$this->validator->validate(null, \$constraint);

        \$this->assertNoViolation();
    }

    public function testEmptyIsValidIfString()
    {
        \$constraint = new Type(['type' => 'string']);

        \$this->validator->validate('', \$constraint);

        \$this->assertNoViolation();
    }

    public function testEmptyIsInvalidIfNoString()
    {
        \$constraint = new Type([
            'type' => 'integer',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"\"')
            ->setParameter('{{ type }}', 'integer')
            ->setCode(Type::INVALID_TYPE_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value, \$type)
    {
        \$constraint = new Type(['type' => \$type]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        \$object = new \\stdClass();
        \$file = \$this->createFile();

        return [
            [true, 'Boolean'],
            [false, 'Boolean'],
            [true, 'boolean'],
            [false, 'boolean'],
            [true, 'bool'],
            [false, 'bool'],
            [0, 'numeric'],
            ['0', 'numeric'],
            [1.5, 'numeric'],
            ['1.5', 'numeric'],
            [0, 'integer'],
            [1.5, 'float'],
            ['12345', 'string'],
            [[], 'array'],
            [\$object, 'object'],
            [\$object, 'stdClass'],
            [\$file, 'resource'],
            ['12345', 'digit'],
            ['12a34', 'alnum'],
            ['abcde', 'alpha'],
            [\"\\n\\r\\t\", 'cntrl'],
            ['arf12', 'graph'],
            ['abcde', 'lower'],
            ['ABCDE', 'upper'],
            ['arf12', 'print'],
            ['*&\$()', 'punct'],
            [\"\\n\\r\\t\", 'space'],
            ['AB10BC99', 'xdigit'],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value, \$type, \$valueAsString)
    {
        \$constraint = new Type([
            'type' => \$type,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$valueAsString)
            ->setParameter('{{ type }}', \$type)
            ->setCode(Type::INVALID_TYPE_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        \$object = new \\stdClass();
        \$file = \$this->createFile();

        return [
            ['foobar', 'numeric', '\"foobar\"'],
            ['foobar', 'boolean', '\"foobar\"'],
            ['0', 'integer', '\"0\"'],
            ['1.5', 'float', '\"1.5\"'],
            [12345, 'string', '12345'],
            [\$object, 'boolean', 'object'],
            [\$object, 'numeric', 'object'],
            [\$object, 'integer', 'object'],
            [\$object, 'float', 'object'],
            [\$object, 'string', 'object'],
            [\$object, 'resource', 'object'],
            [\$file, 'boolean', 'resource'],
            [\$file, 'numeric', 'resource'],
            [\$file, 'integer', 'resource'],
            [\$file, 'float', 'resource'],
            [\$file, 'string', 'resource'],
            [\$file, 'object', 'resource'],
            ['12a34', 'digit', '\"12a34\"'],
            ['1a#23', 'alnum', '\"1a#23\"'],
            ['abcd1', 'alpha', '\"abcd1\"'],
            [\"\\nabc\", 'cntrl', \"\\\"\\nabc\\\"\"],
            [\"abc\\n\", 'graph', \"\\\"abc\\n\\\"\"],
            ['abCDE', 'lower', '\"abCDE\"'],
            ['ABcde', 'upper', '\"ABcde\"'],
            [\"\\nabc\", 'print', \"\\\"\\nabc\\\"\"],
            ['abc&\$!', 'punct', '\"abc&\$!\"'],
            [\"\\nabc\", 'space', \"\\\"\\nabc\\\"\"],
            ['AR1012', 'xdigit', '\"AR1012\"'],
        ];
    }

    protected function createFile()
    {
        if (!static::\$file) {
            static::\$file = fopen(__FILE__, 'r');
        }

        return static::\$file;
    }

    public static function tearDownAfterClass(): void
    {
        if (static::\$file) {
            fclose(static::\$file);
            static::\$file = null;
        }
    }
}
", "vendor/symfony/validator/Tests/Constraints/TypeValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/TypeValidatorTest.php");
    }
}
