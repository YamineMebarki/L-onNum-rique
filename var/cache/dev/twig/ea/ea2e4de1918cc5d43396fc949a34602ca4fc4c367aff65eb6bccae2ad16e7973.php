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

/* vendor/symfony/validator/Tests/Constraints/LengthValidatorTest.php */
class __TwigTemplate_babe72d7b678b85f5949add5cdc344b38e2034d97a3300b7bbe3af9135cde658 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LengthValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LengthValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\LengthValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LengthValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LengthValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Length(6));

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Length(6));

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Length(5));
    }

    public function getThreeOrLessCharacters()
    {
        return [
            [12],
            ['12'],
            ['üü'],
            ['éé'],
            [123],
            ['123'],
            ['üüü'],
            ['ééé'],
        ];
    }

    public function getFourCharacters()
    {
        return [
            [1234],
            ['1234'],
            ['üüüü'],
            ['éééé'],
        ];
    }

    public function getFiveOrMoreCharacters()
    {
        return [
            [12345],
            ['12345'],
            ['üüüüü'],
            ['ééééé'],
            [123456],
            ['123456'],
            ['üüüüüü'],
            ['éééééé'],
        ];
    }

    public function getOneCharset()
    {
        return [
            ['é', 'utf8', true],
            [\"\\xE9\", 'CP1252', true],
            [\"\\xE9\", 'XXX', false],
            [\"\\xE9\", 'utf8', false],
        ];
    }

    public function getThreeCharactersWithWhitespaces()
    {
        return [
            [\"\\x20ccc\"],
            [\"\\x09c\\x09c\"],
            [\"\\x0Accc\\x0A\"],
            [\"ccc\\x0D\\x0D\"],
            [\"\\x00ccc\\x00\"],
            [\"\\x0Bc\\x0Bc\\x0B\"],
        ];
    }

    /**
     * @dataProvider getFiveOrMoreCharacters
     */
    public function testValidValuesMin(\$value)
    {
        \$constraint = new Length(['min' => 5]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getThreeOrLessCharacters
     */
    public function testValidValuesMax(\$value)
    {
        \$constraint = new Length(['max' => 3]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFourCharacters
     */
    public function testValidValuesExact(\$value)
    {
        \$constraint = new Length(4);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getThreeCharactersWithWhitespaces
     */
    public function testValidNormalizedValues(\$value)
    {
        \$constraint = new Length(['min' => 3, 'max' => 3, 'normalizer' => 'trim']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getThreeOrLessCharacters
     */
    public function testInvalidValuesMin(\$value)
    {
        \$constraint = new Length([
            'min' => 4,
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
            ->setParameter('";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_SHORT_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getFiveOrMoreCharacters
     */
    public function testInvalidValuesMax(\$value)
    {
        \$constraint = new Length([
            'max' => 4,
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 183, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
            ->setParameter('";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_LONG_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getThreeOrLessCharacters
     */
    public function testInvalidValuesExactLessThanFour(\$value)
    {
        \$constraint = new Length([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 205, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
            ->setParameter('";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_SHORT_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getFiveOrMoreCharacters
     */
    public function testInvalidValuesExactMoreThanFour(\$value)
    {
        \$constraint = new Length([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 227, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
            ->setParameter('";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 228, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_LONG_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getOneCharset
     */
    public function testOneCharset(\$value, \$charset, \$isValid)
    {
        \$constraint = new Length([
            'min' => 1,
            'max' => 1,
            'charset' => \$charset,
            'charsetMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        if (\$isValid) {
            \$this->assertNoViolation();
        } else {
            \$this->buildViolation('myMessage')
                ->setParameter('";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 253, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
                ->setParameter('";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 254, $this->source); })()), "html", null, true);
        echo "', \$charset)
                ->setInvalidValue(\$value)
                ->setCode(Length::INVALID_CHARACTERS_ERROR)
                ->assertRaised();
        }
    }

    public function testConstraintDefaultOption()
    {
        \$constraint = new Length(5);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
    }

    public function testConstraintAnnotationDefaultOption()
    {
        \$constraint = new Length(['value' => 5, 'exactMessage' => 'message']);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
        \$this->assertEquals('message', \$constraint->exactMessage);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/LengthValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 254,  321 => 253,  293 => 228,  289 => 227,  265 => 206,  261 => 205,  237 => 184,  233 => 183,  210 => 163,  206 => 162,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\LengthValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LengthValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LengthValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Length(6));

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Length(6));

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Length(5));
    }

    public function getThreeOrLessCharacters()
    {
        return [
            [12],
            ['12'],
            ['üü'],
            ['éé'],
            [123],
            ['123'],
            ['üüü'],
            ['ééé'],
        ];
    }

    public function getFourCharacters()
    {
        return [
            [1234],
            ['1234'],
            ['üüüü'],
            ['éééé'],
        ];
    }

    public function getFiveOrMoreCharacters()
    {
        return [
            [12345],
            ['12345'],
            ['üüüüü'],
            ['ééééé'],
            [123456],
            ['123456'],
            ['üüüüüü'],
            ['éééééé'],
        ];
    }

    public function getOneCharset()
    {
        return [
            ['é', 'utf8', true],
            [\"\\xE9\", 'CP1252', true],
            [\"\\xE9\", 'XXX', false],
            [\"\\xE9\", 'utf8', false],
        ];
    }

    public function getThreeCharactersWithWhitespaces()
    {
        return [
            [\"\\x20ccc\"],
            [\"\\x09c\\x09c\"],
            [\"\\x0Accc\\x0A\"],
            [\"ccc\\x0D\\x0D\"],
            [\"\\x00ccc\\x00\"],
            [\"\\x0Bc\\x0Bc\\x0B\"],
        ];
    }

    /**
     * @dataProvider getFiveOrMoreCharacters
     */
    public function testValidValuesMin(\$value)
    {
        \$constraint = new Length(['min' => 5]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getThreeOrLessCharacters
     */
    public function testValidValuesMax(\$value)
    {
        \$constraint = new Length(['max' => 3]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFourCharacters
     */
    public function testValidValuesExact(\$value)
    {
        \$constraint = new Length(4);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getThreeCharactersWithWhitespaces
     */
    public function testValidNormalizedValues(\$value)
    {
        \$constraint = new Length(['min' => 3, 'max' => 3, 'normalizer' => 'trim']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getThreeOrLessCharacters
     */
    public function testInvalidValuesMin(\$value)
    {
        \$constraint = new Length([
            'min' => 4,
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$value.'\"')
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_SHORT_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getFiveOrMoreCharacters
     */
    public function testInvalidValuesMax(\$value)
    {
        \$constraint = new Length([
            'max' => 4,
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$value.'\"')
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_LONG_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getThreeOrLessCharacters
     */
    public function testInvalidValuesExactLessThanFour(\$value)
    {
        \$constraint = new Length([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$value.'\"')
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_SHORT_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getFiveOrMoreCharacters
     */
    public function testInvalidValuesExactMoreThanFour(\$value)
    {
        \$constraint = new Length([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$value.'\"')
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Length::TOO_LONG_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getOneCharset
     */
    public function testOneCharset(\$value, \$charset, \$isValid)
    {
        \$constraint = new Length([
            'min' => 1,
            'max' => 1,
            'charset' => \$charset,
            'charsetMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        if (\$isValid) {
            \$this->assertNoViolation();
        } else {
            \$this->buildViolation('myMessage')
                ->setParameter('{{ value }}', '\"'.\$value.'\"')
                ->setParameter('{{ charset }}', \$charset)
                ->setInvalidValue(\$value)
                ->setCode(Length::INVALID_CHARACTERS_ERROR)
                ->assertRaised();
        }
    }

    public function testConstraintDefaultOption()
    {
        \$constraint = new Length(5);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
    }

    public function testConstraintAnnotationDefaultOption()
    {
        \$constraint = new Length(['value' => 5, 'exactMessage' => 'message']);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
        \$this->assertEquals('message', \$constraint->exactMessage);
    }
}
", "vendor/symfony/validator/Tests/Constraints/LengthValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/LengthValidatorTest.php");
    }
}
