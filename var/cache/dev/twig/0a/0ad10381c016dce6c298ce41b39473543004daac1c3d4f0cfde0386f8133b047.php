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

/* vendor/fzaninotto/faker/test/Faker/Calculator/InnTest.php */
class __TwigTemplate_74089d08837e4343142b2603d0d3b7845564a9874febbe0d2cae9b9d8e14f448 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Calculator/InnTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Calculator/InnTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Calculator;

use Faker\\Calculator\\Inn;
use PHPUnit\\Framework\\TestCase;

class InnTest extends TestCase
{

    public function checksumProvider()
    {
        return array(
            array('143525744', '4'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('027615723', '1')
        );
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum(\$inn, \$checksum)
    {
        \$this->assertEquals(\$checksum, Inn::checksum(\$inn), \$inn);
    }

    public function validatorProvider()
    {
        return array(
            array('5902179757', true),
            array('5408294405', true),
            array('2724164617', true),
            array('0726000515', true),
            array('6312123552', true),

            array('1111111111', false),
            array('0123456789', false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid(\$inn, \$isValid)
    {
        \$this->assertEquals(\$isValid, Inn::isValid(\$inn), \$inn);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Calculator/InnTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Calculator;

use Faker\\Calculator\\Inn;
use PHPUnit\\Framework\\TestCase;

class InnTest extends TestCase
{

    public function checksumProvider()
    {
        return array(
            array('143525744', '4'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('027615723', '1')
        );
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum(\$inn, \$checksum)
    {
        \$this->assertEquals(\$checksum, Inn::checksum(\$inn), \$inn);
    }

    public function validatorProvider()
    {
        return array(
            array('5902179757', true),
            array('5408294405', true),
            array('2724164617', true),
            array('0726000515', true),
            array('6312123552', true),

            array('1111111111', false),
            array('0123456789', false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid(\$inn, \$isValid)
    {
        \$this->assertEquals(\$isValid, Inn::isValid(\$inn), \$inn);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Calculator/InnTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Calculator/InnTest.php");
    }
}
