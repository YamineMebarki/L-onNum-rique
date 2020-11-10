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

/* vendor/symfony/validator/Tests/Constraints/LessThanValidatorTest.php */
class __TwigTemplate_eb0f2c35ab2abaa7a23410972095c63b5b13a178d26debbe3c431faf7fabb934 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LessThanValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LessThanValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\LessThan;
use Symfony\\Component\\Validator\\Constraints\\LessThanValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class LessThanValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new LessThanValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new LessThan(\$options);
    }

    protected function getErrorCode()
    {
        return LessThan::TOO_HIGH_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            [new \\DateTime('2000-01-01'), new \\DateTime('2010-01-01')],
            [new \\DateTime('2000-01-01'), '2010-01-01'],
            [new \\DateTime('2000-01-01 UTC'), '2010-01-01 UTC'],
            [new ComparisonTest_Class(4), new ComparisonTest_Class(5)],
            ['22', '333'],
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [3, '3', 2, '2', 'integer'],
            [2, '2', 2, '2', 'integer'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01 UTC'), 'Jan 1, 2010, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01 UTC'), 'Jan 1, 2000, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            [new ComparisonTest_Class(6), '6', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            ['333', '\"333\"', '22', '\"22\"', 'string'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/LessThanValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\LessThan;
use Symfony\\Component\\Validator\\Constraints\\LessThanValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class LessThanValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new LessThanValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new LessThan(\$options);
    }

    protected function getErrorCode()
    {
        return LessThan::TOO_HIGH_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            [new \\DateTime('2000-01-01'), new \\DateTime('2010-01-01')],
            [new \\DateTime('2000-01-01'), '2010-01-01'],
            [new \\DateTime('2000-01-01 UTC'), '2010-01-01 UTC'],
            [new ComparisonTest_Class(4), new ComparisonTest_Class(5)],
            ['22', '333'],
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [3, '3', 2, '2', 'integer'],
            [2, '2', 2, '2', 'integer'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01'), 'Jan 1, 2010, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2010-01-01 UTC'), 'Jan 1, 2010, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01 UTC'), 'Jan 1, 2000, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            [new ComparisonTest_Class(6), '6', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            ['333', '\"333\"', '22', '\"22\"', 'string'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/LessThanValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/LessThanValidatorTest.php");
    }
}
