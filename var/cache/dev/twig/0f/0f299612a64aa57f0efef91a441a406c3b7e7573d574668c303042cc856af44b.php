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

/* vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/CompanyTest.php */
class __TwigTemplate_312b0b3a987cda7a3ad86dd4c65da0f2eb81b3482cda9ad598b333fe863f8605 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/CompanyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/CompanyTest.php"));

        // line 1
        echo "<?php
namespace Faker\\Test\\Provider\\kk_KZ;

use Faker\\Generator;
use Faker\\Provider\\kk_KZ\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        \$this->faker = new Generator();

        \$this->faker->addProvider(new Company(\$this->faker));
    }

    public function testBusinessIdentificationNumberIsValid()
    {
        \$registrationDate             = new \\DateTime('now');
        \$businessIdentificationNumber = \$this->faker->businessIdentificationNumber(\$registrationDate);
        \$registrationDateAsString     = \$registrationDate->format('ym');

        \$this->assertRegExp(
            \"/^(\" . \$registrationDateAsString . \")([4-6]{1})([0-3]{1})(\\\\d{6})\$/\",
            \$businessIdentificationNumber
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/CompanyTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Test\\Provider\\kk_KZ;

use Faker\\Generator;
use Faker\\Provider\\kk_KZ\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        \$this->faker = new Generator();

        \$this->faker->addProvider(new Company(\$this->faker));
    }

    public function testBusinessIdentificationNumberIsValid()
    {
        \$registrationDate             = new \\DateTime('now');
        \$businessIdentificationNumber = \$this->faker->businessIdentificationNumber(\$registrationDate);
        \$registrationDateAsString     = \$registrationDate->format('ym');

        \$this->assertRegExp(
            \"/^(\" . \$registrationDateAsString . \")([4-6]{1})([0-3]{1})(\\\\d{6})\$/\",
            \$businessIdentificationNumber
        );
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/CompanyTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/CompanyTest.php");
    }
}
