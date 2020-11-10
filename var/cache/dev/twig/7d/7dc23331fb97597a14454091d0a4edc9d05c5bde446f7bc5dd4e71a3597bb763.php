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

/* vendor/symfony/validator/Tests/Constraints/LessThanOrEqualValidatorTest.php */
class __TwigTemplate_919c9eccca8a593727a3434b8b9443d616e193892b840eda3b3a303cef99a926 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LessThanOrEqualValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LessThanOrEqualValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\LessThanOrEqual;
use Symfony\\Component\\Validator\\Constraints\\LessThanOrEqualValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class LessThanOrEqualValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new LessThanOrEqualValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new LessThanOrEqual(\$options);
    }

    protected function getErrorCode()
    {
        return LessThanOrEqual::TOO_HIGH_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            [1, 1],
            [new \\DateTime('2000-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2000-01-01'), new \\DateTime('2020-01-01')],
            [new \\DateTime('2000-01-01'), '2000-01-01'],
            [new \\DateTime('2000-01-01'), '2020-01-01'],
            [new \\DateTime('2000-01-01 UTC'), '2000-01-01 UTC'],
            [new \\DateTime('2000-01-01 UTC'), '2020-01-01 UTC'],
            [new ComparisonTest_Class(4), new ComparisonTest_Class(5)],
            [new ComparisonTest_Class(5), new ComparisonTest_Class(5)],
            ['a', 'a'],
            ['a', 'z'],
            [null, 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [4],
            [5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [2, '2', 1, '1', 'integer'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01 UTC'), 'Jan 1, 2010, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(4), '4', __NAMESPACE__.'\\ComparisonTest_Class'],
            ['c', '\"c\"', 'b', '\"b\"', 'string'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/LessThanOrEqualValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\LessThanOrEqual;
use Symfony\\Component\\Validator\\Constraints\\LessThanOrEqualValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class LessThanOrEqualValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new LessThanOrEqualValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new LessThanOrEqual(\$options);
    }

    protected function getErrorCode()
    {
        return LessThanOrEqual::TOO_HIGH_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            [1, 1],
            [new \\DateTime('2000-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2000-01-01'), new \\DateTime('2020-01-01')],
            [new \\DateTime('2000-01-01'), '2000-01-01'],
            [new \\DateTime('2000-01-01'), '2020-01-01'],
            [new \\DateTime('2000-01-01 UTC'), '2000-01-01 UTC'],
            [new \\DateTime('2000-01-01 UTC'), '2020-01-01 UTC'],
            [new ComparisonTest_Class(4), new ComparisonTest_Class(5)],
            [new ComparisonTest_Class(5), new ComparisonTest_Class(5)],
            ['a', 'a'],
            ['a', 'z'],
            [null, 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [4],
            [5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [2, '2', 1, '1', 'integer'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01 UTC'), 'Jan 1, 2010, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(4), '4', __NAMESPACE__.'\\ComparisonTest_Class'],
            ['c', '\"c\"', 'b', '\"b\"', 'string'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/LessThanOrEqualValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/LessThanOrEqualValidatorTest.php");
    }
}
