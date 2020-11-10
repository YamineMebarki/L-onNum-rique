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

/* vendor/symfony/validator/Tests/Constraints/DivisibleByValidatorTest.php */
class __TwigTemplate_662855fa073984d27f8f3228ad1a00ac5215d8bc501b21c07f44827d4938c65b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/DivisibleByValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/DivisibleByValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\DivisibleBy;
use Symfony\\Component\\Validator\\Constraints\\DivisibleByValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleByValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new DivisibleByValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new DivisibleBy(\$options);
    }

    protected function getErrorCode()
    {
        return DivisibleBy::NOT_DIVISIBLE_BY;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [-7, 1],
            [0, 3.1415],
            [42, 42],
            [42, 21],
            [3.25, 0.25],
            ['100', '10'],
            [4.1, 0.1],
            [-4.1, 0.1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [1, '1', 2, '2', 'integer'],
            [10, '10', 3, '3', 'integer'],
            [10, '10', 0, '0', 'integer'],
            [42, '42', INF, 'INF', 'double'],
            [4.15, '4.15', 0.1, '0.1', 'double'],
            ['22', '\"22\"', '10', '\"10\"', 'string'],
        ];
    }

    /**
     * @dataProvider throwsOnNonNumericValuesProvider
     */
    public function testThrowsOnNonNumericValues(string \$expectedGivenType, \$value, \$comparedValue)
    {
        \$this->expectException(UnexpectedValueException::class);
        \$this->expectExceptionMessage(sprintf('Expected argument of type \"numeric\", \"%s\" given', \$expectedGivenType));

        \$this->validator->validate(\$value, \$this->createConstraint([
            'value' => \$comparedValue,
        ]));
    }

    public function throwsOnNonNumericValuesProvider()
    {
        return [
            [\\stdClass::class, 2, new \\stdClass()],
            [\\ArrayIterator::class, new \\ArrayIterator(), 12],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/DivisibleByValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\DivisibleBy;
use Symfony\\Component\\Validator\\Constraints\\DivisibleByValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleByValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new DivisibleByValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new DivisibleBy(\$options);
    }

    protected function getErrorCode()
    {
        return DivisibleBy::NOT_DIVISIBLE_BY;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [-7, 1],
            [0, 3.1415],
            [42, 42],
            [42, 21],
            [3.25, 0.25],
            ['100', '10'],
            [4.1, 0.1],
            [-4.1, 0.1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [1, '1', 2, '2', 'integer'],
            [10, '10', 3, '3', 'integer'],
            [10, '10', 0, '0', 'integer'],
            [42, '42', INF, 'INF', 'double'],
            [4.15, '4.15', 0.1, '0.1', 'double'],
            ['22', '\"22\"', '10', '\"10\"', 'string'],
        ];
    }

    /**
     * @dataProvider throwsOnNonNumericValuesProvider
     */
    public function testThrowsOnNonNumericValues(string \$expectedGivenType, \$value, \$comparedValue)
    {
        \$this->expectException(UnexpectedValueException::class);
        \$this->expectExceptionMessage(sprintf('Expected argument of type \"numeric\", \"%s\" given', \$expectedGivenType));

        \$this->validator->validate(\$value, \$this->createConstraint([
            'value' => \$comparedValue,
        ]));
    }

    public function throwsOnNonNumericValuesProvider()
    {
        return [
            [\\stdClass::class, 2, new \\stdClass()],
            [\\ArrayIterator::class, new \\ArrayIterator(), 12],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/DivisibleByValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/DivisibleByValidatorTest.php");
    }
}
