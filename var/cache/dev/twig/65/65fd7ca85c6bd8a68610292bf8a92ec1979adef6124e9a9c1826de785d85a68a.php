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

/* vendor/symfony/validator/Tests/Constraints/AbstractComparisonValidatorTestCase.php */
class __TwigTemplate_214616d5222ef97a9544a2dc04ec843e13d450af317aa3e1eae711d6e1f5b04f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/AbstractComparisonValidatorTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/AbstractComparisonValidatorTestCase.php"));

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
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\AbstractComparison;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class ComparisonTest_Class
{
    protected \$value;

    public function __construct(\$value)
    {
        \$this->value = \$value;
    }

    public function __toString()
    {
        return (string) \$this->value;
    }

    public function getValue()
    {
        return \$this->value;
    }
}

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
abstract class AbstractComparisonValidatorTestCase extends ConstraintValidatorTestCase
{
    protected static function addPhp5Dot5Comparisons(array \$comparisons)
    {
        \$result = \$comparisons;

        // Duplicate all tests involving DateTime objects to be tested with
        // DateTimeImmutable objects as well
        foreach (\$comparisons as \$comparison) {
            \$add = false;

            foreach (\$comparison as \$i => \$value) {
                if (\$value instanceof \\DateTime) {
                    \$comparison[\$i] = new \\DateTimeImmutable(
                        \$value->format('Y-m-d H:i:s.u e'),
                        \$value->getTimezone()
                    );
                    \$add = true;
                } elseif ('DateTime' === \$value) {
                    \$comparison[\$i] = 'DateTimeImmutable';
                    \$add = true;
                }
            }

            if (\$add) {
                \$result[] = \$comparison;
            }
        }

        return \$result;
    }

    public function provideInvalidConstraintOptions()
    {
        return [
            [null],
            [[]],
        ];
    }

    /**
     * @dataProvider provideInvalidConstraintOptions
     */
    public function testThrowsConstraintExceptionIfNoValueOrPropertyPath(\$options)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires either the \"value\" or \"propertyPath\" option to be set.');
        \$this->createConstraint(\$options);
    }

    public function testThrowsConstraintExceptionIfBothValueAndPropertyPath()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires only one of the \"value\" or \"propertyPath\" options to be set, not both.');
        \$this->createConstraint(([
            'value' => 'value',
            'propertyPath' => 'propertyPath',
        ]));
    }

    /**
     * @dataProvider provideAllValidComparisons
     *
     * @param mixed \$dirtyValue
     * @param mixed \$comparisonValue
     */
    public function testValidComparisonToValue(\$dirtyValue, \$comparisonValue)
    {
        \$constraint = \$this->createConstraint(['value' => \$comparisonValue]);

        \$this->validator->validate(\$dirtyValue, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @return array
     */
    public function provideAllValidComparisons()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$comparisons = self::addPhp5Dot5Comparisons(\$this->provideValidComparisons());

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * @dataProvider provideValidComparisonsToPropertyPath
     */
    public function testValidComparisonToPropertyPath(\$comparedValue)
    {
        \$constraint = \$this->createConstraint(['propertyPath' => 'value']);

        \$object = new ComparisonTest_Class(5);

        \$this->setObject(\$object);

        \$this->validator->validate(\$comparedValue, \$constraint);

        \$this->assertNoViolation();
    }

    public function testNoViolationOnNullObjectWithPropertyPath()
    {
        \$constraint = \$this->createConstraint(['propertyPath' => 'propertyPath']);

        \$this->setObject(null);

        \$this->validator->validate('some data', \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidValuePath()
    {
        \$constraint = \$this->createConstraint(['propertyPath' => 'foo']);

        \$this->expectException(ConstraintDefinitionException::class);
        \$this->expectExceptionMessage(sprintf('Invalid property path \"foo\" provided to \"%s\" constraint', \\get_class(\$constraint)));

        \$object = new ComparisonTest_Class(5);

        \$this->setObject(\$object);

        \$this->validator->validate(5, \$constraint);
    }

    /**
     * @return array
     */
    abstract public function provideValidComparisons();

    /**
     * @return array
     */
    abstract public function provideValidComparisonsToPropertyPath();

    /**
     * @dataProvider provideAllInvalidComparisons
     *
     * @param mixed  \$dirtyValue
     * @param mixed  \$dirtyValueAsString
     * @param mixed  \$comparedValue
     * @param mixed  \$comparedValueString
     * @param string \$comparedValueType
     */
    public function testInvalidComparisonToValue(\$dirtyValue, \$dirtyValueAsString, \$comparedValue, \$comparedValueString, \$comparedValueType)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        if (\$dirtyValue instanceof \\DateTime || \$dirtyValue instanceof \\DateTimeInterface) {
            IntlTestHelper::requireIntl(\$this, '57.1');
        }

        \$constraint = \$this->createConstraint(['value' => \$comparedValue]);
        \$constraint->message = 'Constraint Message';

        \$this->validator->validate(\$dirtyValue, \$constraint);

        \$this->buildViolation('Constraint Message')
            ->setParameter('";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 208, $this->source); })()), "html", null, true);
        echo "', \$dirtyValueAsString)
            ->setParameter('";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 209, $this->source); })()), "html", null, true);
        echo "', \$comparedValueString)
            ->setParameter('";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 210, $this->source); })()), "html", null, true);
        echo "', \$comparedValueType)
            ->setCode(\$this->getErrorCode())
            ->assertRaised();
    }

    /**
     * @dataProvider throwsOnInvalidStringDatesProvider
     */
    public function testThrowsOnInvalidStringDates(AbstractComparison \$constraint, \$expectedMessage, \$value)
    {
        \$this->expectException(ConstraintDefinitionException::class);
        \$this->expectExceptionMessage(\$expectedMessage);

        \$this->validator->validate(\$value, \$constraint);
    }

    public function throwsOnInvalidStringDatesProvider()
    {
        \$constraint = \$this->createConstraint([
            'value' => 'foo',
        ]);

        \$constraintClass = \\get_class(\$constraint);

        return [
            [\$constraint, sprintf('The compared value \"foo\" could not be converted to a \"DateTimeImmutable\" instance in the \"%s\" constraint.', \$constraintClass), new \\DateTimeImmutable()],
            [\$constraint, sprintf('The compared value \"foo\" could not be converted to a \"DateTime\" instance in the \"%s\" constraint.', \$constraintClass), new \\DateTime()],
        ];
    }

    /**
     * @return array
     */
    public function provideAllInvalidComparisons()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$comparisons = self::addPhp5Dot5Comparisons(\$this->provideInvalidComparisons());

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * @return array
     */
    abstract public function provideInvalidComparisons();

    /**
     * @param array|null \$options Options for the constraint
     *
     * @return Constraint
     */
    abstract protected function createConstraint(array \$options = null);

    /**
     * @return string|null
     */
    protected function getErrorCode()
    {
        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/AbstractComparisonValidatorTestCase.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 210,  256 => 209,  252 => 208,  43 => 1,);
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
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\AbstractComparison;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class ComparisonTest_Class
{
    protected \$value;

    public function __construct(\$value)
    {
        \$this->value = \$value;
    }

    public function __toString()
    {
        return (string) \$this->value;
    }

    public function getValue()
    {
        return \$this->value;
    }
}

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
abstract class AbstractComparisonValidatorTestCase extends ConstraintValidatorTestCase
{
    protected static function addPhp5Dot5Comparisons(array \$comparisons)
    {
        \$result = \$comparisons;

        // Duplicate all tests involving DateTime objects to be tested with
        // DateTimeImmutable objects as well
        foreach (\$comparisons as \$comparison) {
            \$add = false;

            foreach (\$comparison as \$i => \$value) {
                if (\$value instanceof \\DateTime) {
                    \$comparison[\$i] = new \\DateTimeImmutable(
                        \$value->format('Y-m-d H:i:s.u e'),
                        \$value->getTimezone()
                    );
                    \$add = true;
                } elseif ('DateTime' === \$value) {
                    \$comparison[\$i] = 'DateTimeImmutable';
                    \$add = true;
                }
            }

            if (\$add) {
                \$result[] = \$comparison;
            }
        }

        return \$result;
    }

    public function provideInvalidConstraintOptions()
    {
        return [
            [null],
            [[]],
        ];
    }

    /**
     * @dataProvider provideInvalidConstraintOptions
     */
    public function testThrowsConstraintExceptionIfNoValueOrPropertyPath(\$options)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires either the \"value\" or \"propertyPath\" option to be set.');
        \$this->createConstraint(\$options);
    }

    public function testThrowsConstraintExceptionIfBothValueAndPropertyPath()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires only one of the \"value\" or \"propertyPath\" options to be set, not both.');
        \$this->createConstraint(([
            'value' => 'value',
            'propertyPath' => 'propertyPath',
        ]));
    }

    /**
     * @dataProvider provideAllValidComparisons
     *
     * @param mixed \$dirtyValue
     * @param mixed \$comparisonValue
     */
    public function testValidComparisonToValue(\$dirtyValue, \$comparisonValue)
    {
        \$constraint = \$this->createConstraint(['value' => \$comparisonValue]);

        \$this->validator->validate(\$dirtyValue, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @return array
     */
    public function provideAllValidComparisons()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$comparisons = self::addPhp5Dot5Comparisons(\$this->provideValidComparisons());

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * @dataProvider provideValidComparisonsToPropertyPath
     */
    public function testValidComparisonToPropertyPath(\$comparedValue)
    {
        \$constraint = \$this->createConstraint(['propertyPath' => 'value']);

        \$object = new ComparisonTest_Class(5);

        \$this->setObject(\$object);

        \$this->validator->validate(\$comparedValue, \$constraint);

        \$this->assertNoViolation();
    }

    public function testNoViolationOnNullObjectWithPropertyPath()
    {
        \$constraint = \$this->createConstraint(['propertyPath' => 'propertyPath']);

        \$this->setObject(null);

        \$this->validator->validate('some data', \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidValuePath()
    {
        \$constraint = \$this->createConstraint(['propertyPath' => 'foo']);

        \$this->expectException(ConstraintDefinitionException::class);
        \$this->expectExceptionMessage(sprintf('Invalid property path \"foo\" provided to \"%s\" constraint', \\get_class(\$constraint)));

        \$object = new ComparisonTest_Class(5);

        \$this->setObject(\$object);

        \$this->validator->validate(5, \$constraint);
    }

    /**
     * @return array
     */
    abstract public function provideValidComparisons();

    /**
     * @return array
     */
    abstract public function provideValidComparisonsToPropertyPath();

    /**
     * @dataProvider provideAllInvalidComparisons
     *
     * @param mixed  \$dirtyValue
     * @param mixed  \$dirtyValueAsString
     * @param mixed  \$comparedValue
     * @param mixed  \$comparedValueString
     * @param string \$comparedValueType
     */
    public function testInvalidComparisonToValue(\$dirtyValue, \$dirtyValueAsString, \$comparedValue, \$comparedValueString, \$comparedValueType)
    {
        // Conversion of dates to string differs between ICU versions
        // Make sure we have the correct version loaded
        if (\$dirtyValue instanceof \\DateTime || \$dirtyValue instanceof \\DateTimeInterface) {
            IntlTestHelper::requireIntl(\$this, '57.1');
        }

        \$constraint = \$this->createConstraint(['value' => \$comparedValue]);
        \$constraint->message = 'Constraint Message';

        \$this->validator->validate(\$dirtyValue, \$constraint);

        \$this->buildViolation('Constraint Message')
            ->setParameter('{{ value }}', \$dirtyValueAsString)
            ->setParameter('{{ compared_value }}', \$comparedValueString)
            ->setParameter('{{ compared_value_type }}', \$comparedValueType)
            ->setCode(\$this->getErrorCode())
            ->assertRaised();
    }

    /**
     * @dataProvider throwsOnInvalidStringDatesProvider
     */
    public function testThrowsOnInvalidStringDates(AbstractComparison \$constraint, \$expectedMessage, \$value)
    {
        \$this->expectException(ConstraintDefinitionException::class);
        \$this->expectExceptionMessage(\$expectedMessage);

        \$this->validator->validate(\$value, \$constraint);
    }

    public function throwsOnInvalidStringDatesProvider()
    {
        \$constraint = \$this->createConstraint([
            'value' => 'foo',
        ]);

        \$constraintClass = \\get_class(\$constraint);

        return [
            [\$constraint, sprintf('The compared value \"foo\" could not be converted to a \"DateTimeImmutable\" instance in the \"%s\" constraint.', \$constraintClass), new \\DateTimeImmutable()],
            [\$constraint, sprintf('The compared value \"foo\" could not be converted to a \"DateTime\" instance in the \"%s\" constraint.', \$constraintClass), new \\DateTime()],
        ];
    }

    /**
     * @return array
     */
    public function provideAllInvalidComparisons()
    {
        // The provider runs before setUp(), so we need to manually fix
        // the default timezone
        \$this->setDefaultTimezone('UTC');

        \$comparisons = self::addPhp5Dot5Comparisons(\$this->provideInvalidComparisons());

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * @return array
     */
    abstract public function provideInvalidComparisons();

    /**
     * @param array|null \$options Options for the constraint
     *
     * @return Constraint
     */
    abstract protected function createConstraint(array \$options = null);

    /**
     * @return string|null
     */
    protected function getErrorCode()
    {
        return null;
    }
}
", "vendor/symfony/validator/Tests/Constraints/AbstractComparisonValidatorTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/AbstractComparisonValidatorTestCase.php");
    }
}
