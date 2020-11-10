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

/* vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/PersonTest.php */
class __TwigTemplate_61c4770520b43722193a8261a5dd1dfda00df95518fca48ab6c218ac5ad98f94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\pt_BR;

use Faker\\Generator;
use Faker\\Provider\\pt_BR\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testCpfFormatIsValid()
    {
        \$cpf = \$this->faker->cpf(false);
        \$this->assertRegExp('/\\d{9}\\d{2}/', \$cpf);
        \$cpf = \$this->faker->cpf(true);
        \$this->assertRegExp('/\\d{3}\\.\\d{3}\\.\\d{3}-\\d{2}/', \$cpf);
    }

    public function testRgFormatIsValid()
    {
        \$rg = \$this->faker->rg(false);
        \$this->assertRegExp('/\\d{8}\\d/', \$rg);
        \$rg = \$this->faker->rg(true);
        \$this->assertRegExp('/\\d{2}\\.\\d{3}\\.\\d{3}-[0-9X]/', \$rg);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/PersonTest.php";
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
use Faker\\Provider\\pt_BR\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testCpfFormatIsValid()
    {
        \$cpf = \$this->faker->cpf(false);
        \$this->assertRegExp('/\\d{9}\\d{2}/', \$cpf);
        \$cpf = \$this->faker->cpf(true);
        \$this->assertRegExp('/\\d{3}\\.\\d{3}\\.\\d{3}-\\d{2}/', \$cpf);
    }

    public function testRgFormatIsValid()
    {
        \$rg = \$this->faker->rg(false);
        \$this->assertRegExp('/\\d{8}\\d/', \$rg);
        \$rg = \$this->faker->rg(true);
        \$this->assertRegExp('/\\d{2}\\.\\d{3}\\.\\d{3}-[0-9X]/', \$rg);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/pt_BR/PersonTest.php");
    }
}
