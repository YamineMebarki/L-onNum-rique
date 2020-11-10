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

/* vendor/fzaninotto/faker/test/Faker/Provider/nl_BE/PersonTest.php */
class __TwigTemplate_4c73d7e4ac901b4bde486f03844c41d3ff58b69148e10a5ac682b14f74a06918 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/nl_BE/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/nl_BE/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\nl_BE;

use Faker\\Generator;
use Faker\\Provider\\nl_BE\\Person;
use PHPUnit\\Framework\\TestCase;
use Datetime;

/**
 * @group Person
 */
class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testRrnIsValid()
    {
        \$rrn = \$this->faker->rrn();

        \$this->assertEquals(11, strlen(\$rrn));

        \$ctrlNumber = substr(\$rrn, 9, 2);
        \$calcCtrl = 97 - (substr(\$rrn, 0, 9) % 97);
        \$altcalcCtrl = 97 - ((2 . substr(\$rrn, 0, 9)) % 97);
        \$this->assertContains(\$ctrlNumber, array(\$calcCtrl, \$altcalcCtrl));

        \$middle = substr(\$rrn, 6, 3);
        \$this->assertGreaterThan(1, \$middle);
        \$this->assertLessThan(997, \$middle);
    }

    public function testRrnIsMale()
    {
        \$rrn = \$this->faker->rrn('male');
        \$this->assertEquals(substr(\$rrn, 6, 3) % 2, 1);
    }

    public function testRrnIsFemale()
    {
        \$rrn = \$this->faker->rrn('female');
        \$this->assertEquals(substr(\$rrn, 6, 3) % 2, 0);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/nl_BE/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\nl_BE;

use Faker\\Generator;
use Faker\\Provider\\nl_BE\\Person;
use PHPUnit\\Framework\\TestCase;
use Datetime;

/**
 * @group Person
 */
class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testRrnIsValid()
    {
        \$rrn = \$this->faker->rrn();

        \$this->assertEquals(11, strlen(\$rrn));

        \$ctrlNumber = substr(\$rrn, 9, 2);
        \$calcCtrl = 97 - (substr(\$rrn, 0, 9) % 97);
        \$altcalcCtrl = 97 - ((2 . substr(\$rrn, 0, 9)) % 97);
        \$this->assertContains(\$ctrlNumber, array(\$calcCtrl, \$altcalcCtrl));

        \$middle = substr(\$rrn, 6, 3);
        \$this->assertGreaterThan(1, \$middle);
        \$this->assertLessThan(997, \$middle);
    }

    public function testRrnIsMale()
    {
        \$rrn = \$this->faker->rrn('male');
        \$this->assertEquals(substr(\$rrn, 6, 3) % 2, 1);
    }

    public function testRrnIsFemale()
    {
        \$rrn = \$this->faker->rrn('female');
        \$this->assertEquals(substr(\$rrn, 6, 3) % 2, 0);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/nl_BE/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/nl_BE/PersonTest.php");
    }
}
