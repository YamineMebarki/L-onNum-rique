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

/* vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PersonTest.php */
class __TwigTemplate_912279b8b5a17b1efb01783b8cb02c7672407654663cfedc36951b4cb584fe77 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\uk_UA;

use Faker\\Generator;
use Faker\\Provider\\uk_UA\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Максим', \$faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Людмила', \$faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Миколайович', \$faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Миколаївна', \$faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Броваренко', \$faker->lastName());
    }


}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\uk_UA;

use Faker\\Generator;
use Faker\\Provider\\uk_UA\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Максим', \$faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Людмила', \$faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Миколайович', \$faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Миколаївна', \$faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('Броваренко', \$faker->lastName());
    }


}
", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PersonTest.php");
    }
}
