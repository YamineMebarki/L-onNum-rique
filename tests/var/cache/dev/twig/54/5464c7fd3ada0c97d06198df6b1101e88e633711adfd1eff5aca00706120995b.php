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

/* vendor/symfony/validator/Tests/Constraints/IdenticalToValidatorTest.php */
class __TwigTemplate_a543dc5017a5cae173ce08081ef03e936929cae53f955e08703d74ea8b09a7e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IdenticalToValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IdenticalToValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\IdenticalTo;
use Symfony\\Component\\Validator\\Constraints\\IdenticalToValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class IdenticalToValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new IdenticalToValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new IdenticalTo(\$options);
    }

    protected function getErrorCode()
    {
        return IdenticalTo::NOT_IDENTICAL_ERROR;
    }

    public function provideAllValidComparisons()
    {
        \$this->setDefaultTimezone('UTC');

        // Don't call addPhp5Dot5Comparisons() automatically, as it does
        // not take care of identical objects
        \$comparisons = \$this->provideValidComparisons();

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        \$date = new \\DateTime('2000-01-01');
        \$object = new ComparisonTest_Class(2);

        \$comparisons = [
            [3, 3],
            ['a', 'a'],
            [\$date, \$date],
            [\$object, \$object],
            [null, 1],
        ];

        \$immutableDate = new \\DateTimeImmutable('2000-01-01');
        \$comparisons[] = [\$immutableDate, \$immutableDate];

        return \$comparisons;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [1, '1', 2, '2', 'integer'],
            [2, '2', '2', '\"2\"', 'string'],
            ['22', '\"22\"', '333', '\"333\"', 'string'],
            [new \\DateTime('2001-01-01'), 'Jan 1, 2001, 12:00 AM', new \\DateTime('2001-01-01'), 'Jan 1, 2001, 12:00 AM', 'DateTime'],
            [new \\DateTime('2001-01-01'), 'Jan 1, 2001, 12:00 AM', new \\DateTime('1999-01-01'), 'Jan 1, 1999, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(4), '4', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/IdenticalToValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\IdenticalTo;
use Symfony\\Component\\Validator\\Constraints\\IdenticalToValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class IdenticalToValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new IdenticalToValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new IdenticalTo(\$options);
    }

    protected function getErrorCode()
    {
        return IdenticalTo::NOT_IDENTICAL_ERROR;
    }

    public function provideAllValidComparisons()
    {
        \$this->setDefaultTimezone('UTC');

        // Don't call addPhp5Dot5Comparisons() automatically, as it does
        // not take care of identical objects
        \$comparisons = \$this->provideValidComparisons();

        \$this->restoreDefaultTimezone();

        return \$comparisons;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        \$date = new \\DateTime('2000-01-01');
        \$object = new ComparisonTest_Class(2);

        \$comparisons = [
            [3, 3],
            ['a', 'a'],
            [\$date, \$date],
            [\$object, \$object],
            [null, 1],
        ];

        \$immutableDate = new \\DateTimeImmutable('2000-01-01');
        \$comparisons[] = [\$immutableDate, \$immutableDate];

        return \$comparisons;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [1, '1', 2, '2', 'integer'],
            [2, '2', '2', '\"2\"', 'string'],
            ['22', '\"22\"', '333', '\"333\"', 'string'],
            [new \\DateTime('2001-01-01'), 'Jan 1, 2001, 12:00 AM', new \\DateTime('2001-01-01'), 'Jan 1, 2001, 12:00 AM', 'DateTime'],
            [new \\DateTime('2001-01-01'), 'Jan 1, 2001, 12:00 AM', new \\DateTime('1999-01-01'), 'Jan 1, 1999, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(4), '4', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/IdenticalToValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/IdenticalToValidatorTest.php");
    }
}
