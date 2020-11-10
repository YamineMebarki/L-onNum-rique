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

/* vendor/symfony/validator/Tests/Constraints/NotNullValidatorTest.php */
class __TwigTemplate_3d56c60ec815e4b88496580e79dd499651e7304a4fb80ca828c3b671bf91ee40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotNullValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/NotNullValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\NotNullValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class NotNullValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new NotNullValidator();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$this->validator->validate(\$value, new NotNull());

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            [0],
            [false],
            [true],
            [''],
        ];
    }

    public function testNullIsInvalid()
    {
        \$constraint = new NotNull([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "', 'null')
            ->setCode(NotNull::IS_NULL_ERROR)
            ->assertRaised();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/NotNullValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 54,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\NotNullValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class NotNullValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new NotNullValidator();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$this->validator->validate(\$value, new NotNull());

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            [0],
            [false],
            [true],
            [''],
        ];
    }

    public function testNullIsInvalid()
    {
        \$constraint = new NotNull([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'null')
            ->setCode(NotNull::IS_NULL_ERROR)
            ->assertRaised();
    }
}
", "vendor/symfony/validator/Tests/Constraints/NotNullValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/NotNullValidatorTest.php");
    }
}
