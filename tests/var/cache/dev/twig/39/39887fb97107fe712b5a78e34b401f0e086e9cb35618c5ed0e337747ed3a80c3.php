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

/* vendor/fzaninotto/faker/test/Faker/Calculator/LuhnTest.php */
class __TwigTemplate_7ecb84ea1afdab29fb6dccfe7d3a5d5f1d75b4da4bbfc7cc341d43b6cd3756f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Calculator/LuhnTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Calculator/LuhnTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Calculator;

use Faker\\Calculator\\Luhn;
use PHPUnit\\Framework\\TestCase;

class LuhnTest extends TestCase
{

    public function checkDigitProvider()
    {
        return array(
            array('7992739871', '3'),
            array('3852000002323', '7'),
            array('37144963539843', '1'),
            array('561059108101825', '0'),
            array('601100099013942', '4'),
            array('510510510510510', '0'),
            array(7992739871, '3'),
            array(3852000002323, '7'),
            array('37144963539843', '1'),
            array('561059108101825', '0'),
            array('601100099013942', '4'),
            array('510510510510510', '0')
        );
    }

    /**
     * @dataProvider checkDigitProvider
     */
    public function testComputeCheckDigit(\$partialNumber, \$checkDigit)
    {
        \$this->assertInternalType('string', \$checkDigit);
        \$this->assertEquals(\$checkDigit, Luhn::computeCheckDigit(\$partialNumber));
    }

    public function validatorProvider()
    {
        return array(
            array('79927398710', false),
            array('79927398711', false),
            array('79927398712', false),
            array('79927398713', true),
            array('79927398714', false),
            array('79927398715', false),
            array('79927398716', false),
            array('79927398717', false),
            array('79927398718', false),
            array('79927398719', false),
            array(79927398713, true),
            array(79927398714, false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid(\$number, \$isValid)
    {
        \$this->assertEquals(\$isValid, Luhn::isValid(\$number));
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Argument should be an integer.
     */
    public function testGenerateLuhnNumberWithInvalidPrefix()
    {
        Luhn::generateLuhnNumber('abc');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Calculator/LuhnTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Calculator;

use Faker\\Calculator\\Luhn;
use PHPUnit\\Framework\\TestCase;

class LuhnTest extends TestCase
{

    public function checkDigitProvider()
    {
        return array(
            array('7992739871', '3'),
            array('3852000002323', '7'),
            array('37144963539843', '1'),
            array('561059108101825', '0'),
            array('601100099013942', '4'),
            array('510510510510510', '0'),
            array(7992739871, '3'),
            array(3852000002323, '7'),
            array('37144963539843', '1'),
            array('561059108101825', '0'),
            array('601100099013942', '4'),
            array('510510510510510', '0')
        );
    }

    /**
     * @dataProvider checkDigitProvider
     */
    public function testComputeCheckDigit(\$partialNumber, \$checkDigit)
    {
        \$this->assertInternalType('string', \$checkDigit);
        \$this->assertEquals(\$checkDigit, Luhn::computeCheckDigit(\$partialNumber));
    }

    public function validatorProvider()
    {
        return array(
            array('79927398710', false),
            array('79927398711', false),
            array('79927398712', false),
            array('79927398713', true),
            array('79927398714', false),
            array('79927398715', false),
            array('79927398716', false),
            array('79927398717', false),
            array('79927398718', false),
            array('79927398719', false),
            array(79927398713, true),
            array(79927398714, false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid(\$number, \$isValid)
    {
        \$this->assertEquals(\$isValid, Luhn::isValid(\$number));
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Argument should be an integer.
     */
    public function testGenerateLuhnNumberWithInvalidPrefix()
    {
        Luhn::generateLuhnNumber('abc');
    }
}
", "vendor/fzaninotto/faker/test/Faker/Calculator/LuhnTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Calculator/LuhnTest.php");
    }
}
