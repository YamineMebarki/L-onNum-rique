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

/* vendor/fzaninotto/faker/test/Faker/Provider/ru_RU/CompanyTest.php */
class __TwigTemplate_f7c5e9dcb25c867bfd4e979b679ea7ca32b0a75f9b4267ff5441c9d65a5d4e5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ru_RU/CompanyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ru_RU/CompanyTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\ru_RU;

use Faker\\Generator;
use Faker\\Provider\\ru_RU\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function testINN()
    {
        \$this->assertRegExp('/^[0-9]{10}\$/', \$this->faker->inn);
        \$this->assertEquals(\"77\", substr(\$this->faker->inn(\"77\"), 0, 2));
        \$this->assertEquals(\"02\", substr(\$this->faker->inn(2), 0, 2));
    }

    public function testKPP()
    {
        \$this->assertRegExp('/^[0-9]{9}\$/', \$this->faker->kpp);
        \$this->assertEquals(\"01001\", substr(\$this->faker->kpp, -5, 5));
        \$inn = \$this->faker->inn;
        \$this->assertEquals(substr(\$inn, 0, 4), substr(\$this->faker->kpp(\$inn), 0, 4));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/ru_RU/CompanyTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\ru_RU;

use Faker\\Generator;
use Faker\\Provider\\ru_RU\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function testINN()
    {
        \$this->assertRegExp('/^[0-9]{10}\$/', \$this->faker->inn);
        \$this->assertEquals(\"77\", substr(\$this->faker->inn(\"77\"), 0, 2));
        \$this->assertEquals(\"02\", substr(\$this->faker->inn(2), 0, 2));
    }

    public function testKPP()
    {
        \$this->assertRegExp('/^[0-9]{9}\$/', \$this->faker->kpp);
        \$this->assertEquals(\"01001\", substr(\$this->faker->kpp, -5, 5));
        \$inn = \$this->faker->inn;
        \$this->assertEquals(substr(\$inn, 0, 4), substr(\$this->faker->kpp(\$inn), 0, 4));
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/ru_RU/CompanyTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/ru_RU/CompanyTest.php");
    }
}
