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

/* vendor/fzaninotto/faker/test/Faker/Provider/pl_PL/PersonTest.php */
class __TwigTemplate_2e89619e245aa728179690e74ab30113108cd7fb299fa62eedf94595b0264ed3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pl_PL/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pl_PL/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pl_PL;

use DateTime;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

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

    public function testPeselLenght()
    {
        \$pesel = \$this->faker->pesel();

        \$this->assertEquals(11, strlen(\$pesel));
    }

    public function testPeselDate()
    {
        \$date  = new DateTime('1990-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('90', substr(\$pesel, 0, 2));
        \$this->assertEquals('01', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2000()
    {
        \$date  = new DateTime('2001-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('21', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2100()
    {
        \$date  = new DateTime('2101-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('41', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2200()
    {
        \$date  = new DateTime('2201-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('61', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearBefore1900()
    {
        \$date  = new DateTime('1801-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('81', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselSex()
    {
        \$male   = \$this->faker->pesel(null, 'M');
        \$female = \$this->faker->pesel(null, 'F');

        \$this->assertEquals(1, \$male[9] % 2);
        \$this->assertEquals(0, \$female[9] % 2);
    }

    public function testPeselCheckSum()
    {
        \$pesel   = \$this->faker->pesel();
        \$weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1);
        \$sum     = 0;

        foreach (\$weights as \$key => \$weight) {
            \$sum += \$pesel[\$key] * \$weight;
        }

        \$this->assertEquals(0, \$sum % 10);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/pl_PL/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pl_PL;

use DateTime;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

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

    public function testPeselLenght()
    {
        \$pesel = \$this->faker->pesel();

        \$this->assertEquals(11, strlen(\$pesel));
    }

    public function testPeselDate()
    {
        \$date  = new DateTime('1990-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('90', substr(\$pesel, 0, 2));
        \$this->assertEquals('01', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2000()
    {
        \$date  = new DateTime('2001-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('21', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2100()
    {
        \$date  = new DateTime('2101-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('41', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2200()
    {
        \$date  = new DateTime('2201-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('61', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselDateWithYearBefore1900()
    {
        \$date  = new DateTime('1801-01-01');
        \$pesel = \$this->faker->pesel(\$date);

        \$this->assertEquals('01', substr(\$pesel, 0, 2));
        \$this->assertEquals('81', substr(\$pesel, 2, 2));
        \$this->assertEquals('01', substr(\$pesel, 4, 2));
    }

    public function testPeselSex()
    {
        \$male   = \$this->faker->pesel(null, 'M');
        \$female = \$this->faker->pesel(null, 'F');

        \$this->assertEquals(1, \$male[9] % 2);
        \$this->assertEquals(0, \$female[9] % 2);
    }

    public function testPeselCheckSum()
    {
        \$pesel   = \$this->faker->pesel();
        \$weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1);
        \$sum     = 0;

        foreach (\$weights as \$key => \$weight) {
            \$sum += \$pesel[\$key] * \$weight;
        }

        \$this->assertEquals(0, \$sum % 10);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/pl_PL/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/pl_PL/PersonTest.php");
    }
}
