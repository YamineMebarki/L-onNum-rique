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

/* vendor/symfony/validator/Tests/ConstraintViolationTest.php */
class __TwigTemplate_5f1313a11d04e9e25f7ba8044fa4e85b3edf16e360910f7b659b443bcbf334b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ConstraintViolationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ConstraintViolationTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\CustomArrayObject;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ToString;

class ConstraintViolationTest extends TestCase
{
    public function testToStringHandlesArrays()
    {
        \$violation = new ConstraintViolation(
            'Array',
            '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
            ['";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "' => [1, 2, 3]],
            'Root',
            'property.path',
            null
        );

        \$expected = <<<'EOF'
Root.property.path:
    Array
EOF;

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testToStringHandlesArrayRoots()
    {
        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null
        );

        \$expected = <<<'EOF'
Array.some_value:
    42 cannot be used here
EOF;

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testToStringHandlesCodes()
    {
        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            0
        );

        \$expected = <<<'EOF'
Array.some_value:
    42 cannot be used here (code 0)
EOF;

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testToStringOmitsEmptyCodes()
    {
        \$expected = <<<'EOF'
Array.some_value:
    42 cannot be used here
EOF;

        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            null
        );

        \$this->assertSame(\$expected, (string) \$violation);

        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            ''
        );

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testMessageCannotBeArray()
    {
        \$this->expectException(\\TypeError::class);
        \$violation = new ConstraintViolation(
            ['cannot be an array'],
            '',
            [],
            'Root',
            'property.path',
            null
        );
    }

    public function testMessageObjectMustBeStringable()
    {
        \$this->expectException(\\TypeError::class);
        \$violation = new ConstraintViolation(
            new CustomArrayObject(),
            '',
            [],
            'Root',
            'property.path',
            null
        );
    }

    public function testNonStringCode()
    {
        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            42
        );

        self::assertSame(42, \$violation->getCode());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/ConstraintViolationTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  69 => 25,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\CustomArrayObject;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ToString;

class ConstraintViolationTest extends TestCase
{
    public function testToStringHandlesArrays()
    {
        \$violation = new ConstraintViolation(
            'Array',
            '{{ value }}',
            ['{{ value }}' => [1, 2, 3]],
            'Root',
            'property.path',
            null
        );

        \$expected = <<<'EOF'
Root.property.path:
    Array
EOF;

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testToStringHandlesArrayRoots()
    {
        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null
        );

        \$expected = <<<'EOF'
Array.some_value:
    42 cannot be used here
EOF;

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testToStringHandlesCodes()
    {
        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            0
        );

        \$expected = <<<'EOF'
Array.some_value:
    42 cannot be used here (code 0)
EOF;

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testToStringOmitsEmptyCodes()
    {
        \$expected = <<<'EOF'
Array.some_value:
    42 cannot be used here
EOF;

        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            null
        );

        \$this->assertSame(\$expected, (string) \$violation);

        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            ''
        );

        \$this->assertSame(\$expected, (string) \$violation);
    }

    public function testMessageCannotBeArray()
    {
        \$this->expectException(\\TypeError::class);
        \$violation = new ConstraintViolation(
            ['cannot be an array'],
            '',
            [],
            'Root',
            'property.path',
            null
        );
    }

    public function testMessageObjectMustBeStringable()
    {
        \$this->expectException(\\TypeError::class);
        \$violation = new ConstraintViolation(
            new CustomArrayObject(),
            '',
            [],
            'Root',
            'property.path',
            null
        );
    }

    public function testNonStringCode()
    {
        \$violation = new ConstraintViolation(
            '42 cannot be used here',
            'this is the message template',
            [],
            ['some_value' => 42],
            'some_value',
            null,
            null,
            42
        );

        self::assertSame(42, \$violation->getCode());
    }
}
", "vendor/symfony/validator/Tests/ConstraintViolationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/ConstraintViolationTest.php");
    }
}
