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

/* vendor/fzaninotto/faker/test/Faker/Provider/AddressTest.php */
class __TwigTemplate_625795c5a9af784f3a6c51666d2bb5d4805a33bce1e04d2a7eedb0007dd973e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Address;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Address(\$faker));
        \$this->faker = \$faker;
    }

    public function testLatitude()
    {
        \$latitude = \$this->faker->latitude();
        \$this->assertInternalType('float', \$latitude);
        \$this->assertGreaterThanOrEqual(-90, \$latitude);
        \$this->assertLessThanOrEqual(90, \$latitude);
    }

    public function testLongitude()
    {
        \$longitude = \$this->faker->longitude();
        \$this->assertInternalType('float', \$longitude);
        \$this->assertGreaterThanOrEqual(-180, \$longitude);
        \$this->assertLessThanOrEqual(180, \$longitude);
    }

    public function testCoordinate()
    {
        \$coordinate = \$this->faker->localCoordinates();
        \$this->assertInternalType('array', \$coordinate);
        \$this->assertInternalType('float', \$coordinate['latitude']);
        \$this->assertGreaterThanOrEqual(-90, \$coordinate['latitude']);
        \$this->assertLessThanOrEqual(90, \$coordinate['latitude']);
        \$this->assertInternalType('float', \$coordinate['longitude']);
        \$this->assertGreaterThanOrEqual(-180, \$coordinate['longitude']);
        \$this->assertLessThanOrEqual(180, \$coordinate['longitude']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Address;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Address(\$faker));
        \$this->faker = \$faker;
    }

    public function testLatitude()
    {
        \$latitude = \$this->faker->latitude();
        \$this->assertInternalType('float', \$latitude);
        \$this->assertGreaterThanOrEqual(-90, \$latitude);
        \$this->assertLessThanOrEqual(90, \$latitude);
    }

    public function testLongitude()
    {
        \$longitude = \$this->faker->longitude();
        \$this->assertInternalType('float', \$longitude);
        \$this->assertGreaterThanOrEqual(-180, \$longitude);
        \$this->assertLessThanOrEqual(180, \$longitude);
    }

    public function testCoordinate()
    {
        \$coordinate = \$this->faker->localCoordinates();
        \$this->assertInternalType('array', \$coordinate);
        \$this->assertInternalType('float', \$coordinate['latitude']);
        \$this->assertGreaterThanOrEqual(-90, \$coordinate['latitude']);
        \$this->assertLessThanOrEqual(90, \$coordinate['latitude']);
        \$this->assertInternalType('float', \$coordinate['longitude']);
        \$this->assertGreaterThanOrEqual(-180, \$coordinate['longitude']);
        \$this->assertLessThanOrEqual(180, \$coordinate['longitude']);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/AddressTest.php");
    }
}
