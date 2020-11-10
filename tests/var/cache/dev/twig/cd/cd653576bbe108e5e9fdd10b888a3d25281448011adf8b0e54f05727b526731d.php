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

/* vendor/symfony/validator/Tests/Constraints/RangeValidatorTest.php */
class __TwigTemplate_aa2c39b44738fdc0c12e3c0c40142afb98d68d8f485f80c3954942d251395957 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/RangeValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/RangeValidatorTest.php"));

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

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;
use Symfony\\Component\\Validator\\Constraints\\Range;
use Symfony\\Component\\Validator\\Constraints\\RangeValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class RangeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new RangeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Range(['min' => 10, 'max' => 20]));

        \$this->assertNoViolation();
    }

    public function getTenToTwenty()
    {
        return [
            [10.00001],
            [19.99999],
            ['10.00001'],
            ['19.99999'],
            [10],
            [20],
            [10.0],
            [20.0],
        ];
    }

    public function getLessThanTen()
    {
        return [
            [9.99999, '9.99999'],
            ['9.99999', '\"9.99999\"'],
            [5, '5'],
            [1.0, '1'],
        ];
    }

    public function getMoreThanTwenty()
    {
        return [
            [20.000001, '20.000001'],
            ['20.000001', '\"20.000001\"'],
            [21, '21'],
            [30.0, '30'],
        ];
    }

    /**
     * @dataProvider getTenToTwenty
     */
    public function testValidValuesMin(\$value)
    {
        \$constraint = new Range(['min' => 10]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenToTwenty
     */
    public function testValidValuesMax(\$value)
    {
        \$constraint = new Range(['max' => 20]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenToTwenty
     */
    public function testValidValuesMinMax(\$value)
    {
        \$constraint = new Range(['min' => 10, 'max' => 20]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getLessThanTen
     */
    public function testInvalidValuesMin(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'min' => 10,
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "', \$formattedValue)
            ->setParameter('";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "', 10)
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getMoreThanTwenty
     */
    public function testInvalidValuesMax(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'max' => 20,
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "', \$formattedValue)
            ->setParameter('";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "', 20)
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getMoreThanTwenty
     */
    public function testInvalidValuesCombinedMax(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'min' => 10,
            'max' => 20,
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMaxMessage')
            ->setParameter('";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 154, $this->source); })()), "html", null, true);
        echo "', \$formattedValue)
            ->setParameter('";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "', 20)
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getLessThanTen
     */
    public function testInvalidValuesCombinedMin(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'min' => 10,
            'max' => 20,
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMinMessage')
            ->setParameter('";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "', \$formattedValue)
            ->setParameter('";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "', 10)
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    public function getTenthToTwentiethMarch2014()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$tests = [
            [new \\DateTime('March 10, 2014')],
            [new \\DateTime('March 15, 2014')],
            [new \\DateTime('March 20, 2014')],
        ];

        \$tests[] = [new \\DateTimeImmutable('March 10, 2014')];
        \$tests[] = [new \\DateTimeImmutable('March 15, 2014')];
        \$tests[] = [new \\DateTimeImmutable('March 20, 2014')];

        \$this->restoreDefaultTimezone();

        return \$tests;
    }

    public function getSoonerThanTenthMarch2014()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$tests = [
            [new \\DateTime('March 20, 2013'), 'Mar 20, 2013, 12:00 AM'],
            [new \\DateTime('March 9, 2014'), 'Mar 9, 2014, 12:00 AM'],
        ];

        \$tests[] = [new \\DateTimeImmutable('March 20, 2013'), 'Mar 20, 2013, 12:00 AM'];
        \$tests[] = [new \\DateTimeImmutable('March 9, 2014'), 'Mar 9, 2014, 12:00 AM'];

        \$this->restoreDefaultTimezone();

        return \$tests;
    }

    public function getLaterThanTwentiethMarch2014()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$tests = [
            [new \\DateTime('March 21, 2014'), 'Mar 21, 2014, 12:00 AM'],
            [new \\DateTime('March 9, 2015'), 'Mar 9, 2015, 12:00 AM'],
        ];

        \$tests[] = [new \\DateTimeImmutable('March 21, 2014'), 'Mar 21, 2014, 12:00 AM'];
        \$tests[] = [new \\DateTimeImmutable('March 9, 2015'), 'Mar 9, 2015, 12:00 AM'];

        \$this->restoreDefaultTimezone();

        return \$tests;
    }

    /**
     * @dataProvider getTenthToTwentiethMarch2014
     */
    public function testValidDatesMin(\$value)
    {
        \$constraint = new Range(['min' => 'March 10, 2014']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenthToTwentiethMarch2014
     */
    public function testValidDatesMax(\$value)
    {
        \$constraint = new Range(['max' => 'March 20, 2014']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenthToTwentiethMarch2014
     */
    public function testValidDatesMinMax(\$value)
    {
        \$constraint = new Range(['min' => 'March 10, 2014', 'max' => 'March 20, 2014']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getSoonerThanTenthMarch2014
     */
    public function testInvalidDatesMin(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'min' => 'March 10, 2014',
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 290, $this->source); })()), "html", null, true);
        echo "', \$dateTimeAsString)
            ->setParameter('";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "', 'Mar 10, 2014, 12:00 AM')
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getLaterThanTwentiethMarch2014
     */
    public function testInvalidDatesMax(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'max' => 'March 20, 2014',
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 313, $this->source); })()), "html", null, true);
        echo "', \$dateTimeAsString)
            ->setParameter('";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 314, $this->source); })()), "html", null, true);
        echo "', 'Mar 20, 2014, 12:00 AM')
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getLaterThanTwentiethMarch2014
     */
    public function testInvalidDatesCombinedMax(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'min' => 'March 10, 2014',
            'max' => 'March 20, 2014',
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMaxMessage')
            ->setParameter('";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 338, $this->source); })()), "html", null, true);
        echo "', \$dateTimeAsString)
            ->setParameter('";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 339, $this->source); })()), "html", null, true);
        echo "', 'Mar 20, 2014, 12:00 AM')
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getSoonerThanTenthMarch2014
     */
    public function testInvalidDatesCombinedMin(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'min' => 'March 10, 2014',
            'max' => 'March 20, 2014',
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMinMessage')
            ->setParameter('";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 363, $this->source); })()), "html", null, true);
        echo "', \$dateTimeAsString)
            ->setParameter('";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 364, $this->source); })()), "html", null, true);
        echo "', 'Mar 10, 2014, 12:00 AM')
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            [9.999999],
            [20.000001],
            ['9.999999'],
            ['20.000001'],
            [new \\stdClass()],
        ];
    }

    public function testNonNumeric()
    {
        \$this->validator->validate('abcd', new Range([
            'min' => 10,
            'max' => 20,
            'invalidMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 389, $this->source); })()), "html", null, true);
        echo "', '\"abcd\"')
            ->setCode(Range::INVALID_CHARACTERS_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider throwsOnInvalidStringDatesProvider
     */
    public function testThrowsOnInvalidStringDates(\$expectedMessage, \$value, \$min, \$max)
    {
        \$this->expectException(ConstraintDefinitionException::class);
        \$this->expectExceptionMessage(\$expectedMessage);

        \$this->validator->validate(\$value, new Range([
            'min' => \$min,
            'max' => \$max,
        ]));
    }

    public function throwsOnInvalidStringDatesProvider()
    {
        return [
            ['The min value \"foo\" could not be converted to a \"DateTimeImmutable\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTimeImmutable(), 'foo', null],
            ['The min value \"foo\" could not be converted to a \"DateTime\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTime(), 'foo', null],
            ['The max value \"foo\" could not be converted to a \"DateTimeImmutable\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTimeImmutable(), null, 'foo'],
            ['The max value \"foo\" could not be converted to a \"DateTime\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTime(), null, 'foo'],
            ['The min value \"bar\" could not be converted to a \"DateTimeImmutable\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTimeImmutable(), 'bar', 'ccc'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/RangeValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 389,  453 => 364,  449 => 363,  422 => 339,  418 => 338,  391 => 314,  387 => 313,  362 => 291,  358 => 290,  241 => 176,  237 => 175,  214 => 155,  210 => 154,  187 => 134,  183 => 133,  162 => 115,  158 => 114,  43 => 1,);
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

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;
use Symfony\\Component\\Validator\\Constraints\\Range;
use Symfony\\Component\\Validator\\Constraints\\RangeValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class RangeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new RangeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Range(['min' => 10, 'max' => 20]));

        \$this->assertNoViolation();
    }

    public function getTenToTwenty()
    {
        return [
            [10.00001],
            [19.99999],
            ['10.00001'],
            ['19.99999'],
            [10],
            [20],
            [10.0],
            [20.0],
        ];
    }

    public function getLessThanTen()
    {
        return [
            [9.99999, '9.99999'],
            ['9.99999', '\"9.99999\"'],
            [5, '5'],
            [1.0, '1'],
        ];
    }

    public function getMoreThanTwenty()
    {
        return [
            [20.000001, '20.000001'],
            ['20.000001', '\"20.000001\"'],
            [21, '21'],
            [30.0, '30'],
        ];
    }

    /**
     * @dataProvider getTenToTwenty
     */
    public function testValidValuesMin(\$value)
    {
        \$constraint = new Range(['min' => 10]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenToTwenty
     */
    public function testValidValuesMax(\$value)
    {
        \$constraint = new Range(['max' => 20]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenToTwenty
     */
    public function testValidValuesMinMax(\$value)
    {
        \$constraint = new Range(['min' => 10, 'max' => 20]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getLessThanTen
     */
    public function testInvalidValuesMin(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'min' => 10,
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$formattedValue)
            ->setParameter('{{ limit }}', 10)
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getMoreThanTwenty
     */
    public function testInvalidValuesMax(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'max' => 20,
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$formattedValue)
            ->setParameter('{{ limit }}', 20)
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getMoreThanTwenty
     */
    public function testInvalidValuesCombinedMax(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'min' => 10,
            'max' => 20,
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMaxMessage')
            ->setParameter('{{ value }}', \$formattedValue)
            ->setParameter('{{ limit }}', 20)
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getLessThanTen
     */
    public function testInvalidValuesCombinedMin(\$value, \$formattedValue)
    {
        \$constraint = new Range([
            'min' => 10,
            'max' => 20,
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMinMessage')
            ->setParameter('{{ value }}', \$formattedValue)
            ->setParameter('{{ limit }}', 10)
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    public function getTenthToTwentiethMarch2014()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$tests = [
            [new \\DateTime('March 10, 2014')],
            [new \\DateTime('March 15, 2014')],
            [new \\DateTime('March 20, 2014')],
        ];

        \$tests[] = [new \\DateTimeImmutable('March 10, 2014')];
        \$tests[] = [new \\DateTimeImmutable('March 15, 2014')];
        \$tests[] = [new \\DateTimeImmutable('March 20, 2014')];

        \$this->restoreDefaultTimezone();

        return \$tests;
    }

    public function getSoonerThanTenthMarch2014()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$tests = [
            [new \\DateTime('March 20, 2013'), 'Mar 20, 2013, 12:00 AM'],
            [new \\DateTime('March 9, 2014'), 'Mar 9, 2014, 12:00 AM'],
        ];

        \$tests[] = [new \\DateTimeImmutable('March 20, 2013'), 'Mar 20, 2013, 12:00 AM'];
        \$tests[] = [new \\DateTimeImmutable('March 9, 2014'), 'Mar 9, 2014, 12:00 AM'];

        \$this->restoreDefaultTimezone();

        return \$tests;
    }

    public function getLaterThanTwentiethMarch2014()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$tests = [
            [new \\DateTime('March 21, 2014'), 'Mar 21, 2014, 12:00 AM'],
            [new \\DateTime('March 9, 2015'), 'Mar 9, 2015, 12:00 AM'],
        ];

        \$tests[] = [new \\DateTimeImmutable('March 21, 2014'), 'Mar 21, 2014, 12:00 AM'];
        \$tests[] = [new \\DateTimeImmutable('March 9, 2015'), 'Mar 9, 2015, 12:00 AM'];

        \$this->restoreDefaultTimezone();

        return \$tests;
    }

    /**
     * @dataProvider getTenthToTwentiethMarch2014
     */
    public function testValidDatesMin(\$value)
    {
        \$constraint = new Range(['min' => 'March 10, 2014']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenthToTwentiethMarch2014
     */
    public function testValidDatesMax(\$value)
    {
        \$constraint = new Range(['max' => 'March 20, 2014']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getTenthToTwentiethMarch2014
     */
    public function testValidDatesMinMax(\$value)
    {
        \$constraint = new Range(['min' => 'March 10, 2014', 'max' => 'March 20, 2014']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getSoonerThanTenthMarch2014
     */
    public function testInvalidDatesMin(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'min' => 'March 10, 2014',
            'minMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$dateTimeAsString)
            ->setParameter('{{ limit }}', 'Mar 10, 2014, 12:00 AM')
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getLaterThanTwentiethMarch2014
     */
    public function testInvalidDatesMax(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'max' => 'March 20, 2014',
            'maxMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$dateTimeAsString)
            ->setParameter('{{ limit }}', 'Mar 20, 2014, 12:00 AM')
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getLaterThanTwentiethMarch2014
     */
    public function testInvalidDatesCombinedMax(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'min' => 'March 10, 2014',
            'max' => 'March 20, 2014',
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMaxMessage')
            ->setParameter('{{ value }}', \$dateTimeAsString)
            ->setParameter('{{ limit }}', 'Mar 20, 2014, 12:00 AM')
            ->setCode(Range::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getSoonerThanTenthMarch2014
     */
    public function testInvalidDatesCombinedMin(\$value, \$dateTimeAsString)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        IntlTestHelper::requireIntl(\$this, '57.1');

        \$constraint = new Range([
            'min' => 'March 10, 2014',
            'max' => 'March 20, 2014',
            'minMessage' => 'myMinMessage',
            'maxMessage' => 'myMaxMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMinMessage')
            ->setParameter('{{ value }}', \$dateTimeAsString)
            ->setParameter('{{ limit }}', 'Mar 10, 2014, 12:00 AM')
            ->setCode(Range::TOO_LOW_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            [9.999999],
            [20.000001],
            ['9.999999'],
            ['20.000001'],
            [new \\stdClass()],
        ];
    }

    public function testNonNumeric()
    {
        \$this->validator->validate('abcd', new Range([
            'min' => 10,
            'max' => 20,
            'invalidMessage' => 'myMessage',
        ]));

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"abcd\"')
            ->setCode(Range::INVALID_CHARACTERS_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider throwsOnInvalidStringDatesProvider
     */
    public function testThrowsOnInvalidStringDates(\$expectedMessage, \$value, \$min, \$max)
    {
        \$this->expectException(ConstraintDefinitionException::class);
        \$this->expectExceptionMessage(\$expectedMessage);

        \$this->validator->validate(\$value, new Range([
            'min' => \$min,
            'max' => \$max,
        ]));
    }

    public function throwsOnInvalidStringDatesProvider()
    {
        return [
            ['The min value \"foo\" could not be converted to a \"DateTimeImmutable\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTimeImmutable(), 'foo', null],
            ['The min value \"foo\" could not be converted to a \"DateTime\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTime(), 'foo', null],
            ['The max value \"foo\" could not be converted to a \"DateTimeImmutable\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTimeImmutable(), null, 'foo'],
            ['The max value \"foo\" could not be converted to a \"DateTime\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTime(), null, 'foo'],
            ['The min value \"bar\" could not be converted to a \"DateTimeImmutable\" instance in the \"Symfony\\Component\\Validator\\Constraints\\Range\" constraint.', new \\DateTimeImmutable(), 'bar', 'ccc'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/RangeValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/RangeValidatorTest.php");
    }
}
