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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_IN/AddressTest.php */
class __TwigTemplate_a4e558c11e7c19c20fcfedaead2409d674c65fb2976d0c194504083ed36de815 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_IN/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_IN/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_IN;

use Faker\\Generator;
use Faker\\Provider\\en_IN\\Address;
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

  public function testCity()
  {
    \$city = \$this->faker->city();
    \$this->assertNotEmpty(\$city);
    \$this->assertInternalType('string', \$city);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$city);
  }

  public function testCountry()
  {
    \$country = \$this->faker->country();
    \$this->assertNotEmpty(\$country);
    \$this->assertInternalType('string', \$country);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$country);
  }

  public function testLocalityName()
  {
    \$localityName = \$this->faker->localityName();
    \$this->assertNotEmpty(\$localityName);
    \$this->assertInternalType('string', \$localityName);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$localityName);
  }

  public function testAreaSuffix()
  {
    \$areaSuffix = \$this->faker->areaSuffix();
    \$this->assertNotEmpty(\$areaSuffix);
    \$this->assertInternalType('string', \$areaSuffix);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$areaSuffix);
  }
}

?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_IN/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_IN;

use Faker\\Generator;
use Faker\\Provider\\en_IN\\Address;
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

  public function testCity()
  {
    \$city = \$this->faker->city();
    \$this->assertNotEmpty(\$city);
    \$this->assertInternalType('string', \$city);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$city);
  }

  public function testCountry()
  {
    \$country = \$this->faker->country();
    \$this->assertNotEmpty(\$country);
    \$this->assertInternalType('string', \$country);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$country);
  }

  public function testLocalityName()
  {
    \$localityName = \$this->faker->localityName();
    \$this->assertNotEmpty(\$localityName);
    \$this->assertInternalType('string', \$localityName);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$localityName);
  }

  public function testAreaSuffix()
  {
    \$areaSuffix = \$this->faker->areaSuffix();
    \$this->assertNotEmpty(\$areaSuffix);
    \$this->assertInternalType('string', \$areaSuffix);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$areaSuffix);
  }
}

?>
", "vendor/fzaninotto/faker/test/Faker/Provider/en_IN/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_IN/AddressTest.php");
    }
}
