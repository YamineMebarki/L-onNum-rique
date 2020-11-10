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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_NG/AddressTest.php */
class __TwigTemplate_96a0e4c85e5e40baf5b6dfb925528b6e53dd6e5395cf1d3ed0d4e2e0bb42e84a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ng_NG;

use Faker\\Generator;
use Faker\\Provider\\en_NG\\Address;
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

    /**
     *
     */
    public function testPostcodeIsNotEmptyAndIsValid()
    {
        \$postcode = \$this->faker->postcode();

        \$this->assertNotEmpty(\$postcode);
        \$this->assertInternalType('string', \$postcode);
    }

    /**
     * DevLaon the name of the Nigerian State/County
     */
    public function testCountyIsAValidString()
    {
        \$county = \$this->faker->county;

        \$this->assertNotEmpty(\$county);
        \$this->assertInternalType('string', \$county);
    }

    /**
     * DevLaon the name of the Nigerian Region in a State.
     */
    public function testRegionIsAValidString()
    {
        \$region = \$this->faker->region;

        \$this->assertNotEmpty(\$region);
        \$this->assertInternalType('string', \$region);
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ng_NG;

use Faker\\Generator;
use Faker\\Provider\\en_NG\\Address;
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

    /**
     *
     */
    public function testPostcodeIsNotEmptyAndIsValid()
    {
        \$postcode = \$this->faker->postcode();

        \$this->assertNotEmpty(\$postcode);
        \$this->assertInternalType('string', \$postcode);
    }

    /**
     * DevLaon the name of the Nigerian State/County
     */
    public function testCountyIsAValidString()
    {
        \$county = \$this->faker->county;

        \$this->assertNotEmpty(\$county);
        \$this->assertInternalType('string', \$county);
    }

    /**
     * DevLaon the name of the Nigerian Region in a State.
     */
    public function testRegionIsAValidString()
    {
        \$region = \$this->faker->region;

        \$this->assertNotEmpty(\$region);
        \$this->assertInternalType('string', \$region);
    }

}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_NG/AddressTest.php");
    }
}
