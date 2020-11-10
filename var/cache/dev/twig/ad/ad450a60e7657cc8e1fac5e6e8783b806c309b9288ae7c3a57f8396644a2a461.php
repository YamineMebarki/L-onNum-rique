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

/* vendor/symfony/validator/Tests/Constraints/GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php */
class __TwigTemplate_a9e9526465ce79be5a40de141b5dd678342e815ffad691c992b8a0e35a991eb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\AbstractComparison;
use Symfony\\Component\\Validator\\Constraints\\PositiveOrZero;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest extends GreaterThanOrEqualValidatorTest
{
    protected function createConstraint(array \$options = null)
    {
        return new PositiveOrZero();
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [0, 0],
            [1, 0],
            [2, 0],
            [2.5, 0],
            ['0', '0'],
            ['333', '0'],
            [null, 0],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [-1, '-1', 0, '0', 'integer'],
            [-2, '-2', 0, '0', 'integer'],
            [-2.5, '-2.5', 0, '0', 'integer'],
        ];
    }

    public function testThrowsConstraintExceptionIfPropertyPath()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('The \"propertyPath\" option of the \"Symfony\\Component\\Validator\\Constraints\\PositiveOrZero\" constraint cannot be set.');

        return new PositiveOrZero(['propertyPath' => 'field']);
    }

    public function testThrowsConstraintExceptionIfValue()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('The \"value\" option of the \"Symfony\\Component\\Validator\\Constraints\\PositiveOrZero\" constraint cannot be set.');

        return new PositiveOrZero(['value' => 0]);
    }

    /**
     * @dataProvider provideInvalidConstraintOptions
     */
    public function testThrowsConstraintExceptionIfNoValueOrPropertyPath(\$options)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires either the \"value\" or \"propertyPath\" option to be set.');
        \$this->markTestSkipped('Value option always set for PositiveOrZero constraint');
    }

    public function testThrowsConstraintExceptionIfBothValueAndPropertyPath()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires only one of the \"value\" or \"propertyPath\" options to be set, not both.');
        \$this->markTestSkipped('Value option is set for PositiveOrZero constraint automatically');
    }

    public function testInvalidValuePath()
    {
        \$this->markTestSkipped('PropertyPath option is not used in PositiveOrZero constraint');
    }

    /**
     * @dataProvider provideValidComparisonsToPropertyPath
     */
    public function testValidComparisonToPropertyPath(\$comparedValue)
    {
        \$this->markTestSkipped('PropertyPath option is not used in PositiveOrZero constraint');
    }

    /**
     * @dataProvider throwsOnInvalidStringDatesProvider
     */
    public function testThrowsOnInvalidStringDates(AbstractComparison \$constraint, \$expectedMessage, \$value)
    {
        \$this->markTestSkipped('The compared value cannot be an invalid string date because it is hardcoded to 0.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\AbstractComparison;
use Symfony\\Component\\Validator\\Constraints\\PositiveOrZero;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest extends GreaterThanOrEqualValidatorTest
{
    protected function createConstraint(array \$options = null)
    {
        return new PositiveOrZero();
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [0, 0],
            [1, 0],
            [2, 0],
            [2.5, 0],
            ['0', '0'],
            ['333', '0'],
            [null, 0],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [-1, '-1', 0, '0', 'integer'],
            [-2, '-2', 0, '0', 'integer'],
            [-2.5, '-2.5', 0, '0', 'integer'],
        ];
    }

    public function testThrowsConstraintExceptionIfPropertyPath()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('The \"propertyPath\" option of the \"Symfony\\Component\\Validator\\Constraints\\PositiveOrZero\" constraint cannot be set.');

        return new PositiveOrZero(['propertyPath' => 'field']);
    }

    public function testThrowsConstraintExceptionIfValue()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('The \"value\" option of the \"Symfony\\Component\\Validator\\Constraints\\PositiveOrZero\" constraint cannot be set.');

        return new PositiveOrZero(['value' => 0]);
    }

    /**
     * @dataProvider provideInvalidConstraintOptions
     */
    public function testThrowsConstraintExceptionIfNoValueOrPropertyPath(\$options)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires either the \"value\" or \"propertyPath\" option to be set.');
        \$this->markTestSkipped('Value option always set for PositiveOrZero constraint');
    }

    public function testThrowsConstraintExceptionIfBothValueAndPropertyPath()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$this->expectExceptionMessage('requires only one of the \"value\" or \"propertyPath\" options to be set, not both.');
        \$this->markTestSkipped('Value option is set for PositiveOrZero constraint automatically');
    }

    public function testInvalidValuePath()
    {
        \$this->markTestSkipped('PropertyPath option is not used in PositiveOrZero constraint');
    }

    /**
     * @dataProvider provideValidComparisonsToPropertyPath
     */
    public function testValidComparisonToPropertyPath(\$comparedValue)
    {
        \$this->markTestSkipped('PropertyPath option is not used in PositiveOrZero constraint');
    }

    /**
     * @dataProvider throwsOnInvalidStringDatesProvider
     */
    public function testThrowsOnInvalidStringDates(AbstractComparison \$constraint, \$expectedMessage, \$value)
    {
        \$this->markTestSkipped('The compared value cannot be an invalid string date because it is hardcoded to 0.');
    }
}
", "vendor/symfony/validator/Tests/Constraints/GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/GreaterThanOrEqualValidatorWithPositiveOrZeroConstraintTest.php");
    }
}
