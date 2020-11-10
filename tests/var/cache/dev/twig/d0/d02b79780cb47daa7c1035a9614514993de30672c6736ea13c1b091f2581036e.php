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

/* vendor/symfony/validator/Tests/Constraints/ChoiceValidatorTest.php */
class __TwigTemplate_67915e11d28cb4c2e9cce994990dfe2039e777d0f0a13bbf17dd57d50229d7d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ChoiceValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ChoiceValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Choice;
use Symfony\\Component\\Validator\\Constraints\\ChoiceValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

function choice_callback()
{
    return ['foo', 'bar'];
}

class ChoiceValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new ChoiceValidator();
    }

    public static function staticCallback()
    {
        return ['foo', 'bar'];
    }

    public function objectMethodCallback()
    {
        return ['foo', 'bar'];
    }

    public function testExpectArrayIfMultipleIsTrue()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$constraint = new Choice([
            'choices' => ['foo', 'bar'],
            'multiple' => true,
        ]);

        \$this->validator->validate('asdf', \$constraint);
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(
            null,
            new Choice([
                'choices' => ['foo', 'bar'],
            ])
        );

        \$this->assertNoViolation();
    }

    public function testChoicesOrCallbackExpected()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->validator->validate('foobar', new Choice());
    }

    public function testValidCallbackExpected()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->validator->validate('foobar', new Choice(['callback' => 'abcd']));
    }

    public function testValidChoiceArray()
    {
        \$constraint = new Choice(['choices' => ['foo', 'bar']]);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackFunction()
    {
        \$constraint = new Choice(['callback' => __NAMESPACE__.'\\choice_callback']);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackClosure()
    {
        \$constraint = new Choice([
            'callback' => function () {
                return ['foo', 'bar'];
            },
        ]);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackStaticMethod()
    {
        \$constraint = new Choice(['callback' => [__CLASS__, 'staticCallback']]);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackContextMethod()
    {
        // search \$this for \"staticCallback\"
        \$this->setObject(\$this);

        \$constraint = new Choice(['callback' => 'staticCallback']);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackContextObjectMethod()
    {
        // search \$this for \"objectMethodCallback\"
        \$this->setObject(\$this);

        \$constraint = new Choice(['callback' => 'objectMethodCallback']);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testMultipleChoices()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar', 'baz'],
            'multiple' => true,
        ]);

        \$this->validator->validate(['baz', 'bar'], \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidChoice()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar'],
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('baz', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "', '\"baz\"')
            ->setParameter('";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "', '\"foo\", \"bar\"')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testInvalidChoiceEmptyChoices()
    {
        \$constraint = new Choice([
            // May happen when the choices are provided dynamically, e.g. from
            // the DB or the model
            'choices' => [],
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('baz', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "', '\"baz\"')
            ->setParameter('";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "', '')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testInvalidChoiceMultiple()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar'],
            'multipleMessage' => 'myMessage',
            'multiple' => true,
        ]);

        \$this->validator->validate(['foo', 'baz'], \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "', '\"baz\"')
            ->setParameter('";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "', '\"foo\", \"bar\"')
            ->setInvalidValue('baz')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testTooFewChoices()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar', 'moo', 'maa'],
            'multiple' => true,
            'min' => 2,
            'minMessage' => 'myMessage',
        ]);

        \$value = ['foo'];

        \$this->setValue(\$value);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 219, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setInvalidValue(\$value)
            ->setPlural(2)
            ->setCode(Choice::TOO_FEW_ERROR)
            ->assertRaised();
    }

    public function testTooManyChoices()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar', 'moo', 'maa'],
            'multiple' => true,
            'max' => 2,
            'maxMessage' => 'myMessage',
        ]);

        \$value = ['foo', 'bar', 'moo'];

        \$this->setValue(\$value);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 242, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setInvalidValue(\$value)
            ->setPlural(2)
            ->setCode(Choice::TOO_MANY_ERROR)
            ->assertRaised();
    }

    public function testStrictAllowsExactValue()
    {
        \$constraint = new Choice([
            'choices' => [1, 2],
        ]);

        \$this->validator->validate(2, \$constraint);

        \$this->assertNoViolation();
    }

    public function testStrictDisallowsDifferentType()
    {
        \$constraint = new Choice([
            'choices' => [1, 2],
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 270, $this->source); })()), "html", null, true);
        echo "', '\"2\"')
            ->setParameter('";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 271, $this->source); })()), "html", null, true);
        echo "', '1, 2')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testStrictWithMultipleChoices()
    {
        \$constraint = new Choice([
            'choices' => [1, 2, 3],
            'multiple' => true,
            'multipleMessage' => 'myMessage',
        ]);

        \$this->validator->validate([2, '3'], \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "', '\"3\"')
            ->setParameter('";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 288, $this->source); })()), "html", null, true);
        echo "', '1, 2, 3')
            ->setInvalidValue('3')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/ChoiceValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 288,  361 => 287,  342 => 271,  338 => 270,  307 => 242,  281 => 219,  256 => 197,  252 => 196,  233 => 180,  229 => 179,  209 => 162,  205 => 161,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Choice;
use Symfony\\Component\\Validator\\Constraints\\ChoiceValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

function choice_callback()
{
    return ['foo', 'bar'];
}

class ChoiceValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new ChoiceValidator();
    }

    public static function staticCallback()
    {
        return ['foo', 'bar'];
    }

    public function objectMethodCallback()
    {
        return ['foo', 'bar'];
    }

    public function testExpectArrayIfMultipleIsTrue()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$constraint = new Choice([
            'choices' => ['foo', 'bar'],
            'multiple' => true,
        ]);

        \$this->validator->validate('asdf', \$constraint);
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(
            null,
            new Choice([
                'choices' => ['foo', 'bar'],
            ])
        );

        \$this->assertNoViolation();
    }

    public function testChoicesOrCallbackExpected()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->validator->validate('foobar', new Choice());
    }

    public function testValidCallbackExpected()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->validator->validate('foobar', new Choice(['callback' => 'abcd']));
    }

    public function testValidChoiceArray()
    {
        \$constraint = new Choice(['choices' => ['foo', 'bar']]);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackFunction()
    {
        \$constraint = new Choice(['callback' => __NAMESPACE__.'\\choice_callback']);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackClosure()
    {
        \$constraint = new Choice([
            'callback' => function () {
                return ['foo', 'bar'];
            },
        ]);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackStaticMethod()
    {
        \$constraint = new Choice(['callback' => [__CLASS__, 'staticCallback']]);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackContextMethod()
    {
        // search \$this for \"staticCallback\"
        \$this->setObject(\$this);

        \$constraint = new Choice(['callback' => 'staticCallback']);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testValidChoiceCallbackContextObjectMethod()
    {
        // search \$this for \"objectMethodCallback\"
        \$this->setObject(\$this);

        \$constraint = new Choice(['callback' => 'objectMethodCallback']);

        \$this->validator->validate('bar', \$constraint);

        \$this->assertNoViolation();
    }

    public function testMultipleChoices()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar', 'baz'],
            'multiple' => true,
        ]);

        \$this->validator->validate(['baz', 'bar'], \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidChoice()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar'],
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('baz', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"baz\"')
            ->setParameter('{{ choices }}', '\"foo\", \"bar\"')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testInvalidChoiceEmptyChoices()
    {
        \$constraint = new Choice([
            // May happen when the choices are provided dynamically, e.g. from
            // the DB or the model
            'choices' => [],
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('baz', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"baz\"')
            ->setParameter('{{ choices }}', '')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testInvalidChoiceMultiple()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar'],
            'multipleMessage' => 'myMessage',
            'multiple' => true,
        ]);

        \$this->validator->validate(['foo', 'baz'], \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"baz\"')
            ->setParameter('{{ choices }}', '\"foo\", \"bar\"')
            ->setInvalidValue('baz')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testTooFewChoices()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar', 'moo', 'maa'],
            'multiple' => true,
            'min' => 2,
            'minMessage' => 'myMessage',
        ]);

        \$value = ['foo'];

        \$this->setValue(\$value);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ limit }}', 2)
            ->setInvalidValue(\$value)
            ->setPlural(2)
            ->setCode(Choice::TOO_FEW_ERROR)
            ->assertRaised();
    }

    public function testTooManyChoices()
    {
        \$constraint = new Choice([
            'choices' => ['foo', 'bar', 'moo', 'maa'],
            'multiple' => true,
            'max' => 2,
            'maxMessage' => 'myMessage',
        ]);

        \$value = ['foo', 'bar', 'moo'];

        \$this->setValue(\$value);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ limit }}', 2)
            ->setInvalidValue(\$value)
            ->setPlural(2)
            ->setCode(Choice::TOO_MANY_ERROR)
            ->assertRaised();
    }

    public function testStrictAllowsExactValue()
    {
        \$constraint = new Choice([
            'choices' => [1, 2],
        ]);

        \$this->validator->validate(2, \$constraint);

        \$this->assertNoViolation();
    }

    public function testStrictDisallowsDifferentType()
    {
        \$constraint = new Choice([
            'choices' => [1, 2],
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"2\"')
            ->setParameter('{{ choices }}', '1, 2')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }

    public function testStrictWithMultipleChoices()
    {
        \$constraint = new Choice([
            'choices' => [1, 2, 3],
            'multiple' => true,
            'multipleMessage' => 'myMessage',
        ]);

        \$this->validator->validate([2, '3'], \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"3\"')
            ->setParameter('{{ choices }}', '1, 2, 3')
            ->setInvalidValue('3')
            ->setCode(Choice::NO_SUCH_CHOICE_ERROR)
            ->assertRaised();
    }
}
", "vendor/symfony/validator/Tests/Constraints/ChoiceValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/ChoiceValidatorTest.php");
    }
}
