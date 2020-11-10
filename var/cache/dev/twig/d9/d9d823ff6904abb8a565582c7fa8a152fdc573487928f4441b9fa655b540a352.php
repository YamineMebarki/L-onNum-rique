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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PersonTest.php */
class __TwigTemplate_e4c3026a920307d4bc5ab1e3c2d5ad56af8a73ba533d13f89f51699810526005 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_ZA;

use Faker\\Generator;
use Faker\\Provider\\en_ZA\\Person;
use Faker\\Provider\\DateTime;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new DateTime(\$faker));
        \$this->faker = \$faker;
    }

    public function testIdNumberWithDefaults()
    {
        \$idNumber = \$this->faker->idNumber();

        \$this->assertEquals(13, strlen(\$idNumber));
        \$this->assertRegExp('#^\\d{13}\$#', \$idNumber);
        \$this->assertInternalType('string', \$idNumber);
    }

    public function testIdNumberForMales()
    {
        \$idNumber = \$this->faker->idNumber(new \\DateTime(), true, 'male');

        \$genderDigit = substr(\$idNumber, 6, 1);

        \$this->assertContains(\$genderDigit, array('5', '6', '7', '8', '9'));
    }

    public function testIdNumberForFemales()
    {
        \$idNumber = \$this->faker->idNumber(new \\DateTime(), true, 'female');

        \$genderDigit = substr(\$idNumber, 6, 1);

        \$this->assertContains(\$genderDigit, array('0', '1', '2', '3', '4'));
    }

    public function testLicenceCode()
    {
        \$validLicenceCodes = array('A', 'A1', 'B', 'C', 'C1', 'C2', 'EB', 'EC', 'EC1', 'I', 'L', 'L1');

        \$this->assertContains(\$this->faker->licenceCode, \$validLicenceCodes);
    }

    public function testMaleTitles()
    {
        \$validMaleTitles = array('Mr.', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

        \$this->assertContains(Person::titleMale(), \$validMaleTitles);
    }

    public function testFemaleTitles()
    {
        \$validateFemaleTitles = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

        \$this->assertContains(Person::titleFemale(), \$validateFemaleTitles);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_ZA;

use Faker\\Generator;
use Faker\\Provider\\en_ZA\\Person;
use Faker\\Provider\\DateTime;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new DateTime(\$faker));
        \$this->faker = \$faker;
    }

    public function testIdNumberWithDefaults()
    {
        \$idNumber = \$this->faker->idNumber();

        \$this->assertEquals(13, strlen(\$idNumber));
        \$this->assertRegExp('#^\\d{13}\$#', \$idNumber);
        \$this->assertInternalType('string', \$idNumber);
    }

    public function testIdNumberForMales()
    {
        \$idNumber = \$this->faker->idNumber(new \\DateTime(), true, 'male');

        \$genderDigit = substr(\$idNumber, 6, 1);

        \$this->assertContains(\$genderDigit, array('5', '6', '7', '8', '9'));
    }

    public function testIdNumberForFemales()
    {
        \$idNumber = \$this->faker->idNumber(new \\DateTime(), true, 'female');

        \$genderDigit = substr(\$idNumber, 6, 1);

        \$this->assertContains(\$genderDigit, array('0', '1', '2', '3', '4'));
    }

    public function testLicenceCode()
    {
        \$validLicenceCodes = array('A', 'A1', 'B', 'C', 'C1', 'C2', 'EB', 'EC', 'EC1', 'I', 'L', 'L1');

        \$this->assertContains(\$this->faker->licenceCode, \$validLicenceCodes);
    }

    public function testMaleTitles()
    {
        \$validMaleTitles = array('Mr.', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

        \$this->assertContains(Person::titleMale(), \$validMaleTitles);
    }

    public function testFemaleTitles()
    {
        \$validateFemaleTitles = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

        \$this->assertContains(Person::titleFemale(), \$validateFemaleTitles);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PersonTest.php");
    }
}
