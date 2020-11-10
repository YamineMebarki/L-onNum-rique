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

/* vendor/symfony/validator/Tests/Constraints/CountValidatorTest.php */
class __TwigTemplate_07ee6791bb0d60602bbb93668fa6406c1dd509b27a71a4c5670f645e0df76c38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CountValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CountValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Count;
use Symfony\\Component\\Validator\\Constraints\\CountValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class CountValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CountValidator();
    }

    abstract protected function createCollection(array \$content);

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Count(6));

        \$this->assertNoViolation();
    }

    public function testExpectsCountableType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Count(5));
    }

    public function getThreeOrLessElements()
    {
        return [
            [\$this->createCollection([1])],
            [\$this->createCollection([1, 2])],
            [\$this->createCollection([1, 2, 3])],
            [\$this->createCollection(['a' => 1, 'b' => 2, 'c' => 3])],
        ];
    }

    public function getFourElements()
    {
        return [
            [\$this->createCollection([1, 2, 3, 4])],
            [\$this->createCollection(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4])],
        ];
    }

    public function getFiveOrMoreElements()
    {
        return [
            [\$this->createCollection([1, 2, 3, 4, 5])],
            [\$this->createCollection([1, 2, 3, 4, 5, 6])],
            [\$this->createCollection(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5])],
        ];
    }

    /**
     * @dataProvider getThreeOrLessElements
     */
    public function testValidValuesMax(\$value)
    {
        \$constraint = new Count(['max' => 3]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFiveOrMoreElements
     */
    public function testValidValuesMin(\$value)
    {
        \$constraint = new Count(['min' => 5]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFourElements
     */
    public function testValidValuesExact(\$value)
    {
        \$constraint = new Count(4);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFiveOrMoreElements
     */
    public function testTooManyValues(\$value)
    {
        \$constraint = new Count([
            'max' => 4,
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "', \\count(\$value))
            ->setParameter('";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_MANY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getThreeOrLessElements
     */
    public function testTooFewValues(\$value)
    {
        \$constraint = new Count([
            'min' => 4,
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "', \\count(\$value))
            ->setParameter('";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_FEW_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getFiveOrMoreElements
     */
    public function testTooManyValuesExact(\$value)
    {
        \$constraint = new Count([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "', \\count(\$value))
            ->setParameter('";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_MANY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getThreeOrLessElements
     */
    public function testTooFewValuesExact(\$value)
    {
        \$constraint = new Count([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 181, $this->source); })()), "html", null, true);
        echo "', \\count(\$value))
            ->setParameter('";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo "', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_FEW_ERROR)
            ->assertRaised();
    }

    public function testDefaultOption()
    {
        \$constraint = new Count(5);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
    }

    public function testConstraintAnnotationDefaultOption()
    {
        \$constraint = new Count(['value' => 5, 'exactMessage' => 'message']);

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
        return "vendor/symfony/validator/Tests/Constraints/CountValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 182,  243 => 181,  219 => 160,  215 => 159,  191 => 138,  187 => 137,  164 => 117,  160 => 116,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Count;
use Symfony\\Component\\Validator\\Constraints\\CountValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class CountValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CountValidator();
    }

    abstract protected function createCollection(array \$content);

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Count(6));

        \$this->assertNoViolation();
    }

    public function testExpectsCountableType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Count(5));
    }

    public function getThreeOrLessElements()
    {
        return [
            [\$this->createCollection([1])],
            [\$this->createCollection([1, 2])],
            [\$this->createCollection([1, 2, 3])],
            [\$this->createCollection(['a' => 1, 'b' => 2, 'c' => 3])],
        ];
    }

    public function getFourElements()
    {
        return [
            [\$this->createCollection([1, 2, 3, 4])],
            [\$this->createCollection(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4])],
        ];
    }

    public function getFiveOrMoreElements()
    {
        return [
            [\$this->createCollection([1, 2, 3, 4, 5])],
            [\$this->createCollection([1, 2, 3, 4, 5, 6])],
            [\$this->createCollection(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5])],
        ];
    }

    /**
     * @dataProvider getThreeOrLessElements
     */
    public function testValidValuesMax(\$value)
    {
        \$constraint = new Count(['max' => 3]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFiveOrMoreElements
     */
    public function testValidValuesMin(\$value)
    {
        \$constraint = new Count(['min' => 5]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFourElements
     */
    public function testValidValuesExact(\$value)
    {
        \$constraint = new Count(4);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getFiveOrMoreElements
     */
    public function testTooManyValues(\$value)
    {
        \$constraint = new Count([
            'max' => 4,
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ count }}', \\count(\$value))
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_MANY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getThreeOrLessElements
     */
    public function testTooFewValues(\$value)
    {
        \$constraint = new Count([
            'min' => 4,
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ count }}', \\count(\$value))
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_FEW_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getFiveOrMoreElements
     */
    public function testTooManyValuesExact(\$value)
    {
        \$constraint = new Count([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ count }}', \\count(\$value))
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_MANY_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getThreeOrLessElements
     */
    public function testTooFewValuesExact(\$value)
    {
        \$constraint = new Count([
            'min' => 4,
            'max' => 4,
            'exactMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ count }}', \\count(\$value))
            ->setParameter('{{ limit }}', 4)
            ->setInvalidValue(\$value)
            ->setPlural(4)
            ->setCode(Count::TOO_FEW_ERROR)
            ->assertRaised();
    }

    public function testDefaultOption()
    {
        \$constraint = new Count(5);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
    }

    public function testConstraintAnnotationDefaultOption()
    {
        \$constraint = new Count(['value' => 5, 'exactMessage' => 'message']);

        \$this->assertEquals(5, \$constraint->min);
        \$this->assertEquals(5, \$constraint->max);
        \$this->assertEquals('message', \$constraint->exactMessage);
    }
}
", "vendor/symfony/validator/Tests/Constraints/CountValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CountValidatorTest.php");
    }
}
