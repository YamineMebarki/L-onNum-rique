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

/* vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/CompanyTest.php */
class __TwigTemplate_4c417b87c438d49781c85f1754d203c7e37b01c64fb1303c4c42e14d9c3597bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/CompanyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/CompanyTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\pt_BR;

use Faker\\Generator;
use Faker\\Provider\\pt_BR\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function testCnpjFormatIsValid()
    {
        \$cnpj = \$this->faker->cnpj(false);
        \$this->assertRegExp('/\\d{8}\\d{4}\\d{2}/', \$cnpj);
        \$cnpj = \$this->faker->cnpj(true);
        \$this->assertRegExp('/\\d{2}\\.\\d{3}\\.\\d{3}\\/\\d{4}-\\d{2}/', \$cnpj);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/CompanyTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\pt_BR;

use Faker\\Generator;
use Faker\\Provider\\pt_BR\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function testCnpjFormatIsValid()
    {
        \$cnpj = \$this->faker->cnpj(false);
        \$this->assertRegExp('/\\d{8}\\d{4}\\d{2}/', \$cnpj);
        \$cnpj = \$this->faker->cnpj(true);
        \$this->assertRegExp('/\\d{2}\\.\\d{3}\\.\\d{3}\\/\\d{4}-\\d{2}/', \$cnpj);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/CompanyTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/CompanyTest.php");
    }
}
