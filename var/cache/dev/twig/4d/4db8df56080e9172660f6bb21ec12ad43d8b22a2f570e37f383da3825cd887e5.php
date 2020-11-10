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

/* vendor/symfony/validator/Tests/Constraints/NotBlankValidatorTest.php */
class __TwigTemplate_66e71aec57b8722436fe03bf9959087750b4d101d077a88308b8e0a52b70d2f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotBlankValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotBlankValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotBlankValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class NotBlankValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new NotBlankValidator();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$this->validator->validate(\$value, new NotBlank());

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            ['foobar'],
            [0],
            [0.0],
            ['0'],
            [1234],
        ];
    }

    public function testNullIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "', 'null')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testBlankIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "', '\"\"')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testFalseIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(false, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "', 'false')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testEmptyArrayIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate([], \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "', 'array')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testAllowNullTrue()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
            'allowNull' => true,
        ]);

        \$this->validator->validate(null, \$constraint);
        \$this->assertNoViolation();
    }

    public function testAllowNullFalse()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
            'allowNull' => false,
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "', 'null')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getWhitespaces
     */
    public function testNormalizedStringIsInvalid(\$value)
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
            'normalizer' => 'trim',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "', '\"\"')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function getWhitespaces()
    {
        return [
            [\"\\x20\"],
            [\"\\x09\\x09\"],
            [\"\\x0A\"],
            [\"\\x0D\\x0D\"],
            [\"\\x00\"],
            [\"\\x0B\\x0B\"],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/NotBlankValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 141,  179 => 123,  150 => 97,  133 => 83,  116 => 69,  99 => 55,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotBlankValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class NotBlankValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new NotBlankValidator();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$this->validator->validate(\$value, new NotBlank());

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            ['foobar'],
            [0],
            [0.0],
            ['0'],
            [1234],
        ];
    }

    public function testNullIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'null')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testBlankIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"\"')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testFalseIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(false, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'false')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testEmptyArrayIsInvalid()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate([], \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'array')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function testAllowNullTrue()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
            'allowNull' => true,
        ]);

        \$this->validator->validate(null, \$constraint);
        \$this->assertNoViolation();
    }

    public function testAllowNullFalse()
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
            'allowNull' => false,
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'null')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getWhitespaces
     */
    public function testNormalizedStringIsInvalid(\$value)
    {
        \$constraint = new NotBlank([
            'message' => 'myMessage',
            'normalizer' => 'trim',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"\"')
            ->setCode(NotBlank::IS_BLANK_ERROR)
            ->assertRaised();
    }

    public function getWhitespaces()
    {
        return [
            [\"\\x20\"],
            [\"\\x09\\x09\"],
            [\"\\x0A\"],
            [\"\\x0D\\x0D\"],
            [\"\\x00\"],
            [\"\\x0B\\x0B\"],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/NotBlankValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/NotBlankValidatorTest.php");
    }
}
