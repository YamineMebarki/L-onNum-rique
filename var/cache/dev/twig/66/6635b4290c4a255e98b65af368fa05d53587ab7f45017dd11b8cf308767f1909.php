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

/* vendor/symfony/validator/Tests/Constraints/NotEqualToValidatorTest.php */
class __TwigTemplate_642d6230da0a2d9dd45a1c4e2119a85865b0cf0e284ab1eea33faeae36eb16e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotEqualToValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotEqualToValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\NotEqualTo;
use Symfony\\Component\\Validator\\Constraints\\NotEqualToValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class NotEqualToValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new NotEqualToValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new NotEqualTo(\$options);
    }

    protected function getErrorCode()
    {
        return NotEqualTo::IS_EQUAL_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            ['22', '333'],
            [new \\DateTime('2001-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2001-01-01'), '2000-01-01'],
            [new \\DateTime('2001-01-01 UTC'), '2000-01-01 UTC'],
            [new ComparisonTest_Class(6), new ComparisonTest_Class(5)],
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

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [3, '3', 3, '3', 'integer'],
            ['2', '\"2\"', 2, '2', 'integer'],
            ['a', '\"a\"', 'a', '\"a\"', 'string'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01 UTC'), 'Jan 1, 2000, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/NotEqualToValidatorTest.php";
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

use Symfony\\Component\\Validator\\Constraints\\NotEqualTo;
use Symfony\\Component\\Validator\\Constraints\\NotEqualToValidator;

/**
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class NotEqualToValidatorTest extends AbstractComparisonValidatorTestCase
{
    protected function createValidator()
    {
        return new NotEqualToValidator();
    }

    protected function createConstraint(array \$options = null)
    {
        return new NotEqualTo(\$options);
    }

    protected function getErrorCode()
    {
        return NotEqualTo::IS_EQUAL_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function provideValidComparisons()
    {
        return [
            [1, 2],
            ['22', '333'],
            [new \\DateTime('2001-01-01'), new \\DateTime('2000-01-01')],
            [new \\DateTime('2001-01-01'), '2000-01-01'],
            [new \\DateTime('2001-01-01 UTC'), '2000-01-01 UTC'],
            [new ComparisonTest_Class(6), new ComparisonTest_Class(5)],
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

    /**
     * {@inheritdoc}
     */
    public function provideInvalidComparisons()
    {
        return [
            [3, '3', 3, '3', 'integer'],
            ['2', '\"2\"', 2, '2', 'integer'],
            ['a', '\"a\"', 'a', '\"a\"', 'string'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01'), 'Jan 1, 2000, 12:00 AM', '2000-01-01', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new \\DateTime('2000-01-01 UTC'), 'Jan 1, 2000, 12:00 AM', '2000-01-01 UTC', 'Jan 1, 2000, 12:00 AM', 'DateTime'],
            [new ComparisonTest_Class(5), '5', new ComparisonTest_Class(5), '5', __NAMESPACE__.'\\ComparisonTest_Class'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/NotEqualToValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/NotEqualToValidatorTest.php");
    }
}
