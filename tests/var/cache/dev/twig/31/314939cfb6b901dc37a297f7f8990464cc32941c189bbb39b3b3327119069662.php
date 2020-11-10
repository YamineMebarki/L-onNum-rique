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

/* vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/AddressTest.php */
class __TwigTemplate_54744c29df6672e6ee2f31cf3a80bd86daaf07693d0f25fcc54aa13d84879d2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\uk_UA;

use Faker\\Generator;
use Faker\\Provider\\uk_UA\\Address;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Address(\$faker));
        \$this->faker = \$faker;
    }

    public function testPostCodeIsValid()
    {
        \$main = '[0-9]{5}';
        \$pattern = \"/^(\$main)|(\$main-[0-9]{3})+\$/\";
        \$postcode = \$this->faker->postcode;
        \$this->assertRegExp(\$pattern, \$postcode, 'Post code ' . \$postcode . ' is wrong!');
    }

    public function testEmptySuffixes()
    {
        \$this->assertEmpty(\$this->faker->citySuffix, 'City suffix should be empty!');
        \$this->assertEmpty(\$this->faker->streetSuffix, 'Street suffix should be empty!');
    }

    public function testStreetCyrOnly()
    {
        \$pattern = \"/[0-9А-ЩЯІЇЄЮа-щяіїєюьIVXCM][0-9А-ЩЯІЇЄЮа-щяіїєюь \\'-.]*[А-Яа-я.]/u\";
        \$streetName = \$this->faker->streetName;
        \$this->assertSame(
            preg_match(\$pattern, \$streetName),
            1,
            'Street name ' . \$streetName . ' is wrong!'
        );
    }

    public function testCityNameCyrOnly()
    {
        \$pattern = \"/[А-ЩЯІЇЄЮа-щяіїєюь][0-9А-ЩЯІЇЄЮа-щяіїєюь \\'-]*[А-Яа-я]/u\";
        \$city = \$this->faker->city;
        \$this->assertSame(
            preg_match(\$pattern, \$city),
            1,
            'City name ' . \$city . ' is wrong!'
        );
    }

    public function testRegionNameCyrOnly()
    {
        \$pattern = \"/[А-ЩЯІЇЄЮ][А-ЩЯІЇЄЮа-щяіїєюь]*а\$/u\";
        \$regionName = \$this->faker->region;
        \$this->assertSame(
            preg_match(\$pattern, \$regionName),
            1,
            'Region name ' . \$regionName . ' is wrong!'
        );
    }

    public function testCountryCyrOnly()
    {
        \$pattern = \"/[А-ЩЯІЇЄЮа-щяіїєюьIVXCM][А-ЩЯІЇЄЮа-щяіїєюь \\'-]*[А-Яа-я.]/u\";
        \$country = \$this->faker->country;
        \$this->assertSame(
            preg_match(\$pattern, \$country),
            1,
            'Country name ' . \$country . ' is wrong!'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/AddressTest.php";
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
use Faker\\Provider\\uk_UA\\Address;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Address(\$faker));
        \$this->faker = \$faker;
    }

    public function testPostCodeIsValid()
    {
        \$main = '[0-9]{5}';
        \$pattern = \"/^(\$main)|(\$main-[0-9]{3})+\$/\";
        \$postcode = \$this->faker->postcode;
        \$this->assertRegExp(\$pattern, \$postcode, 'Post code ' . \$postcode . ' is wrong!');
    }

    public function testEmptySuffixes()
    {
        \$this->assertEmpty(\$this->faker->citySuffix, 'City suffix should be empty!');
        \$this->assertEmpty(\$this->faker->streetSuffix, 'Street suffix should be empty!');
    }

    public function testStreetCyrOnly()
    {
        \$pattern = \"/[0-9А-ЩЯІЇЄЮа-щяіїєюьIVXCM][0-9А-ЩЯІЇЄЮа-щяіїєюь \\'-.]*[А-Яа-я.]/u\";
        \$streetName = \$this->faker->streetName;
        \$this->assertSame(
            preg_match(\$pattern, \$streetName),
            1,
            'Street name ' . \$streetName . ' is wrong!'
        );
    }

    public function testCityNameCyrOnly()
    {
        \$pattern = \"/[А-ЩЯІЇЄЮа-щяіїєюь][0-9А-ЩЯІЇЄЮа-щяіїєюь \\'-]*[А-Яа-я]/u\";
        \$city = \$this->faker->city;
        \$this->assertSame(
            preg_match(\$pattern, \$city),
            1,
            'City name ' . \$city . ' is wrong!'
        );
    }

    public function testRegionNameCyrOnly()
    {
        \$pattern = \"/[А-ЩЯІЇЄЮ][А-ЩЯІЇЄЮа-щяіїєюь]*а\$/u\";
        \$regionName = \$this->faker->region;
        \$this->assertSame(
            preg_match(\$pattern, \$regionName),
            1,
            'Region name ' . \$regionName . ' is wrong!'
        );
    }

    public function testCountryCyrOnly()
    {
        \$pattern = \"/[А-ЩЯІЇЄЮа-щяіїєюьIVXCM][А-ЩЯІЇЄЮа-щяіїєюь \\'-]*[А-Яа-я.]/u\";
        \$country = \$this->faker->country;
        \$this->assertSame(
            preg_match(\$pattern, \$country),
            1,
            'Country name ' . \$country . ' is wrong!'
        );
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/AddressTest.php");
    }
}
