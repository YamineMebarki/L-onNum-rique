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

/* vendor/symfony/validator/Tests/Constraints/BlankValidatorTest.php */
class __TwigTemplate_ba2f95b1c0d30e1f4862c71ed66219861a2a03aebb229a9a016b529ddcf211d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/BlankValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/BlankValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Blank;
use Symfony\\Component\\Validator\\Constraints\\BlankValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class BlankValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new BlankValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Blank());

        \$this->assertNoViolation();
    }

    public function testBlankIsValid()
    {
        \$this->validator->validate('', new Blank());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value, \$valueAsString)
    {
        \$constraint = new Blank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "', \$valueAsString)
            ->setCode(Blank::NOT_BLANK_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            ['foobar', '\"foobar\"'],
            [0, '0'],
            [false, 'false'],
            [1234, '1234'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/BlankValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 51,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Blank;
use Symfony\\Component\\Validator\\Constraints\\BlankValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class BlankValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new BlankValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Blank());

        \$this->assertNoViolation();
    }

    public function testBlankIsValid()
    {
        \$this->validator->validate('', new Blank());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value, \$valueAsString)
    {
        \$constraint = new Blank([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \$valueAsString)
            ->setCode(Blank::NOT_BLANK_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            ['foobar', '\"foobar\"'],
            [0, '0'],
            [false, 'false'],
            [1234, '1234'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/BlankValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/BlankValidatorTest.php");
    }
}
