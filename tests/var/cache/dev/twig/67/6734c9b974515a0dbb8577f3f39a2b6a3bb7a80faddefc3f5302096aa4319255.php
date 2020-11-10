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

/* vendor/symfony/validator/Tests/Constraints/NotIdenticalToValidatorTest.php */
class __TwigTemplate_009c16cd7496cc56ad23971a1b51e733c8ab366244436a374da0f32061c526b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotIdenticalToValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotIdenticalToValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\NotIdenticalTo;
use Symfony\\Component\\Validator\\Constraints\\NotIdenticalToValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class NotIdenticalToValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new NotIdenticalToValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new NotIdenticalTo(\$options);
    }

    protected function getErrorCode()
    {
        return NotIdenticalTo::IS_IDENTICAL_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            ['2', 2],
            ['22', '333'],
            [new \\DateTime('2001-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2000-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2001-01-01'), '2000-01-01'],
            [new \\DateTime('2000-01-01'), '2000-01-01'],
            [new \\DateTime('2001-01-01'), '2000-01-01'],
            [new \\DateTime('2000-01-01 UTC'), '2000-01-01 UTC'],
            [null, 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [0],
        ];
    }

    public function provideAllInvalidComparisons()
    {
        \$this->setDefaultTimezone('UTC');

        // Don't call addPhp5Dot5Comparisons() automatically, as it does
        // not take care of identical objects
        \$comparisons = \$this->provideInvalidComparisons();

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        \$date = new \\DateTime('2000-01-01');
        \$object = new ComparisonTest_Class(2);

        \$comparisons = [
            [3, '3', 3, '3', 'integer'],
            ['a', '\"a\"', 'a', '\"a\"', 'string'],
            [\$date, 'Jan 1, 2000, 12:00 AM', \$date, 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [\$object, '2', \$object, '2', __NAMESPACE__.'\\ComparisonTest_Class'],
        ];

        return \$comparisons;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/NotIdenticalToValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\NotIdenticalTo;
use Symfony\\Component\\Validator\\Constraints\\NotIdenticalToValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class NotIdenticalToValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new NotIdenticalToValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new NotIdenticalTo(\$options);
    }

    protected function getErrorCode()
    {
        return NotIdenticalTo::IS_IDENTICAL_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            ['2', 2],
            ['22', '333'],
            [new \\DateTime('2001-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2000-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2001-01-01'), '2000-01-01'],
            [new \\DateTime('2000-01-01'), '2000-01-01'],
            [new \\DateTime('2001-01-01'), '2000-01-01'],
            [new \\DateTime('2000-01-01 UTC'), '2000-01-01 UTC'],
            [null, 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [0],
        ];
    }

    public function provideAllInvalidComparisons()
    {
        \$this->setDefaultTimezone('UTC');

        // Don't call addPhp5Dot5Comparisons() automatically, as it does
        // not take care of identical objects
        \$comparisons = \$this->provideInvalidComparisons();

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        \$date = new \\DateTime('2000-01-01');
        \$object = new ComparisonTest_Class(2);

        \$comparisons = [
            [3, '3', 3, '3', 'integer'],
            ['a', '\"a\"', 'a', '\"a\"', 'string'],
            [\$date, 'Jan 1, 2000, 12:00 AM', \$date, 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [\$object, '2', \$object, '2', __NAMESPACE__.'\\ComparisonTest_Class'],
        ];

        return \$comparisons;
    }
}
", "vendor/symfony/validator/Tests/Constraints/NotIdenticalToValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/NotIdenticalToValidatorTest.php");
    }
}
