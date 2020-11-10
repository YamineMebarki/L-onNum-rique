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

/* vendor/fzaninotto/faker/test/Faker/Provider/mn_MN/PersonTest.php */
class __TwigTemplate_549ff8ca7fd37175a202e681a1bc5d838ec88d0f63fd49056d0fc084d0470f6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/mn_MN/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/mn_MN/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\mn_MN;

use Faker\\Generator;
use Faker\\Provider\\mn_MN\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function testName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertRegExp('/^[А-Я]{1}\\.[\\w\\W]+\$/u', \$faker->name);
    }

    public function testIdNumber()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(2);

        \$this->assertRegExp('/^[А-Я]{2}\\d{8}\$/u', \$faker->idNumber);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/mn_MN/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\mn_MN;

use Faker\\Generator;
use Faker\\Provider\\mn_MN\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function testName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(1);

        \$this->assertRegExp('/^[А-Я]{1}\\.[\\w\\W]+\$/u', \$faker->name);
    }

    public function testIdNumber()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->seed(2);

        \$this->assertRegExp('/^[А-Я]{2}\\d{8}\$/u', \$faker->idNumber);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/mn_MN/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/mn_MN/PersonTest.php");
    }
}
