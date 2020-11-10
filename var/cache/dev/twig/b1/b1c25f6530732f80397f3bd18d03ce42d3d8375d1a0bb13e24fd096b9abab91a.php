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

/* vendor/fzaninotto/faker/test/Faker/Calculator/TCNoTest.php */
class __TwigTemplate_46bb787266d3805780d308ed85b519aa117f73d785039b0d610d15bc75225017 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Calculator/TCNoTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Calculator/TCNoTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Calculator;

use Faker\\Calculator\\TCNo;
use PHPUnit\\Framework\\TestCase;

class TCNoTest extends TestCase
{
    public function checksumProvider()
    {
        return array(
            array('553006348', '82'),
            array('350630743', '78'),
            array('550600932', '88'),
            array('487932947', '70'),
            array('168113862', '40')
        );
    }

    /**
     * @dataProvider checksumProvider
     * @param \$tcNo
     * @param \$checksum
     */
    public function testChecksum(\$tcNo, \$checksum)
    {
        \$this->assertEquals(\$checksum, TCNo::checksum(\$tcNo), \$tcNo);
    }

    public function validatorProvider()
    {
        return array(
            array('22978160678', true),
            array('26480045324', true),
            array('47278360658', true),
            array('34285002510', true),
            array('19874561012', true),

            array('11111111111', false),
            array('11234567899', false),
        );
    }

    /**
     * @dataProvider validatorProvider
     * @param \$tcNo
     * @param \$isValid
     */
    public function testIsValid(\$tcNo, \$isValid)
    {
        \$this->assertEquals(\$isValid, TCNo::isValid(\$tcNo), \$tcNo);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Calculator/TCNoTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Calculator;

use Faker\\Calculator\\TCNo;
use PHPUnit\\Framework\\TestCase;

class TCNoTest extends TestCase
{
    public function checksumProvider()
    {
        return array(
            array('553006348', '82'),
            array('350630743', '78'),
            array('550600932', '88'),
            array('487932947', '70'),
            array('168113862', '40')
        );
    }

    /**
     * @dataProvider checksumProvider
     * @param \$tcNo
     * @param \$checksum
     */
    public function testChecksum(\$tcNo, \$checksum)
    {
        \$this->assertEquals(\$checksum, TCNo::checksum(\$tcNo), \$tcNo);
    }

    public function validatorProvider()
    {
        return array(
            array('22978160678', true),
            array('26480045324', true),
            array('47278360658', true),
            array('34285002510', true),
            array('19874561012', true),

            array('11111111111', false),
            array('11234567899', false),
        );
    }

    /**
     * @dataProvider validatorProvider
     * @param \$tcNo
     * @param \$isValid
     */
    public function testIsValid(\$tcNo, \$isValid)
    {
        \$this->assertEquals(\$isValid, TCNo::isValid(\$tcNo), \$tcNo);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Calculator/TCNoTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Calculator/TCNoTest.php");
    }
}
