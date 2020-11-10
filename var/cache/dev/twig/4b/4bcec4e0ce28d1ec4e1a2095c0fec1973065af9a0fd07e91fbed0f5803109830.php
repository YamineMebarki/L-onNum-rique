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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_PH/AddressTest.php */
class __TwigTemplate_77872a1af45db0ebdd05facea3e073122521f21259891b0e595db665c07ff6e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_PH/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_PH/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_PH;

use Faker\\Generator;
use Faker\\Provider\\en_PH\\Address;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{

    /**
     * @var Faker\\Generator
     */
    private \$faker;

    public function setUp()
    {
      \$faker = new Generator();
      \$faker->addProvider(new Address(\$faker));
      \$this->faker = \$faker;
    }

    public function testProvince()
    {
      \$province = \$this->faker->province();
      \$this->assertNotEmpty(\$province);
      \$this->assertInternalType('string', \$province);
    }

    public function testCity()
    {
      \$city = \$this->faker->city();
      \$this->assertNotEmpty(\$city);
      \$this->assertInternalType('string', \$city);
    }

    public function testMunicipality()
    {
      \$municipality = \$this->faker->municipality();
      \$this->assertNotEmpty(\$municipality);
      \$this->assertInternalType('string', \$municipality);
    }

    public function testBarangay()
    {
      \$barangay = \$this->faker->barangay();
      \$this->assertInternalType('string', \$barangay);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_PH/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_PH;

use Faker\\Generator;
use Faker\\Provider\\en_PH\\Address;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{

    /**
     * @var Faker\\Generator
     */
    private \$faker;

    public function setUp()
    {
      \$faker = new Generator();
      \$faker->addProvider(new Address(\$faker));
      \$this->faker = \$faker;
    }

    public function testProvince()
    {
      \$province = \$this->faker->province();
      \$this->assertNotEmpty(\$province);
      \$this->assertInternalType('string', \$province);
    }

    public function testCity()
    {
      \$city = \$this->faker->city();
      \$this->assertNotEmpty(\$city);
      \$this->assertInternalType('string', \$city);
    }

    public function testMunicipality()
    {
      \$municipality = \$this->faker->municipality();
      \$this->assertNotEmpty(\$municipality);
      \$this->assertInternalType('string', \$municipality);
    }

    public function testBarangay()
    {
      \$barangay = \$this->faker->barangay();
      \$this->assertInternalType('string', \$barangay);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_PH/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_PH/AddressTest.php");
    }
}
