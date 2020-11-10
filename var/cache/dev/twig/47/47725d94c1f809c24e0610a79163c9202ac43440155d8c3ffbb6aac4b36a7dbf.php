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

/* vendor/symfony/validator/Tests/Constraints/GreaterThanValidatorTest.php */
class __TwigTemplate_dee254d0891e76472d95bb58d3bb84dcdefc3adbf0917d02941ae76671358466 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/GreaterThanValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/GreaterThanValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\GreaterThan;
use Symfony\\Component\\Validator\\Constraints\\GreaterThanValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class GreaterThanValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new GreaterThanValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new GreaterThan(\$options);
    }

    protected function getErrorCode()
    {
        return GreaterThan::TOO_LOW_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [2, 1],
            [new \\DateTime('2005/01/01'), new \\DateTime('2001/01/01')],
            [new \\DateTime('2005/01/01'), '2001/01/01'],
            [new \\DateTime('2005/01/01 UTC'), '2001/01/01 UTC'],
            [new ComparisonTest_Class(5), new ComparisonTest_Class(4)],
            ['333', '22'],
            [null, 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [1, '1', 2, '2', 'integer'],
            [2, '2', 2, '2', 'integer'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2005/01/01'), 'Jan 1, 2005, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', '2005/01/01', 'Jan 1, 2005, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', '2000/01/01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01 UTC'), 'Jan 1, 2000, 12:00 AM', '2005/01/01 UTC', 'Jan 1, 2005, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01 UTC'), 'Jan 1, 2000, 12:00 AM', '2000/01/01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(4), '4', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            ['22', '\"22\"', '333', '\"333\"', 'string'],
            ['22', '\"22\"', '22', '\"22\"', 'string'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/GreaterThanValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\GreaterThan;
use Symfony\\Component\\Validator\\Constraints\\GreaterThanValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class GreaterThanValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new GreaterThanValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new GreaterThan(\$options);
    }

    protected function getErrorCode()
    {
        return GreaterThan::TOO_LOW_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [2, 1],
            [new \\DateTime('2005/01/01'), new \\DateTime('2001/01/01')],
            [new \\DateTime('2005/01/01'), '2001/01/01'],
            [new \\DateTime('2005/01/01 UTC'), '2001/01/01 UTC'],
            [new ComparisonTest_Class(5), new ComparisonTest_Class(4)],
            ['333', '22'],
            [null, 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisonsToPropertyPath()
    {
        return [
            [6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [1, '1', 2, '2', 'integer'],
            [2, '2', 2, '2', 'integer'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2005/01/01'), 'Jan 1, 2005, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', '2005/01/01', 'Jan 1, 2005, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01'), 'Jan 1, 2000, 12:00 AM', '2000/01/01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01 UTC'), 'Jan 1, 2000, 12:00 AM', '2005/01/01 UTC', 'Jan 1, 2005, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000/01/01 UTC'), 'Jan 1, 2000, 12:00 AM', '2000/01/01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(4), '4', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
            ['22', '\"22\"', '333', '\"333\"', 'string'],
            ['22', '\"22\"', '22', '\"22\"', 'string'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/GreaterThanValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/GreaterThanValidatorTest.php");
    }
}
