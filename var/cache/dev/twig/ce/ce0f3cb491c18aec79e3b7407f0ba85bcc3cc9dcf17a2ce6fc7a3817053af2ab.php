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

/* vendor/symfony/validator/Tests/Constraints/IsNullValidatorTest.php */
class __TwigTemplate_e59082427e8ce67e89b6c0fef025edbac964a6164d370143ea3a49d5953b0429 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IsNullValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/IsNullValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\IsNull;
use Symfony\\Component\\Validator\\Constraints\\IsNullValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class IsNullValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new IsNullValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new IsNull());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value, \$valueAsString)
    {
        \$constraint = new IsNull([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "', \$valueAsString)
            ->setCode(IsNull::NOT_NULL_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            [0, '0'],
            [false, 'false'],
            [true, 'true'],
            ['', '\"\"'],
            ['foo bar', '\"foo bar\"'],
            [new \\DateTime(), 'object'],
            [new \\stdClass(), 'object'],
            [[], 'array'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/IsNullValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\IsNull;
use Symfony\\Component\\Validator\\Constraints\\IsNullValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class IsNullValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new IsNullValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new IsNull());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value, \$valueAsString)
    {
        \$constraint = new IsNull([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$valueAsString)
            ->setCode(IsNull::NOT_NULL_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            [0, '0'],
            [false, 'false'],
            [true, 'true'],
            ['', '\"\"'],
            ['foo bar', '\"foo bar\"'],
            [new \\DateTime(), 'object'],
            [new \\stdClass(), 'object'],
            [[], 'array'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/IsNullValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/IsNullValidatorTest.php");
    }
}
