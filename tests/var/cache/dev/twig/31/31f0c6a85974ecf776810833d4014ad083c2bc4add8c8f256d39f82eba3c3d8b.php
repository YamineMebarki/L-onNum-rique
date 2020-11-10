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

/* vendor/fzaninotto/faker/test/Faker/Provider/id_ID/PersonTest.php */
class __TwigTemplate_fe50d6dc32561c2d837a9e4a16c08cbfff521d307c3e090cf933270faaeea21c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/id_ID/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/id_ID/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\id_ID;

use Faker\\Generator;
use Faker\\Provider\\id_ID\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testIfFirstNameMaleCanReturnData()
    {
        \$firstNameMale = \$this->faker->firstNameMale();
        \$this->assertNotEmpty(\$firstNameMale);
    }

    public function testIfLastNameMaleCanReturnData()
    {
        \$lastNameMale = \$this->faker->lastNameMale();
        \$this->assertNotEmpty(\$lastNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData()
    {
        \$firstNameFemale = \$this->faker->firstNameFemale();
        \$this->assertNotEmpty(\$firstNameFemale);
    }

    public function testIfLastNameFemaleCanReturnData()
    {
        \$lastNameFemale = \$this->faker->lastNameFemale();
        \$this->assertNotEmpty(\$lastNameFemale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/id_ID/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\id_ID;

use Faker\\Generator;
use Faker\\Provider\\id_ID\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testIfFirstNameMaleCanReturnData()
    {
        \$firstNameMale = \$this->faker->firstNameMale();
        \$this->assertNotEmpty(\$firstNameMale);
    }

    public function testIfLastNameMaleCanReturnData()
    {
        \$lastNameMale = \$this->faker->lastNameMale();
        \$this->assertNotEmpty(\$lastNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData()
    {
        \$firstNameFemale = \$this->faker->firstNameFemale();
        \$this->assertNotEmpty(\$firstNameFemale);
    }

    public function testIfLastNameFemaleCanReturnData()
    {
        \$lastNameFemale = \$this->faker->lastNameFemale();
        \$this->assertNotEmpty(\$lastNameFemale);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/id_ID/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/id_ID/PersonTest.php");
    }
}
