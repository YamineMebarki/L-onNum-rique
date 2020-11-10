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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_CA/AddressTest.php */
class __TwigTemplate_cf6972c72e5cbf62268419805938e326daf2851af974af5376a43bc5708c6725 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_CA/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_CA/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_CA;

use Faker\\Generator;
use Faker\\Provider\\en_CA\\Address;
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

  /**
   * DevLaon the validity of province
   */
  public function testProvince()
  {
    \$province = \$this->faker->province();
    \$this->assertNotEmpty(\$province);
    \$this->assertInternalType('string', \$province);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$province);
  }

  /**
   * DevLaon the validity of province abbreviation
   */
  public function testProvinceAbbr()
  {
    \$provinceAbbr = \$this->faker->provinceAbbr();
    \$this->assertNotEmpty(\$provinceAbbr);
    \$this->assertInternalType('string', \$provinceAbbr);
    \$this->assertRegExp('/^[A-Z]{2}\$/', \$provinceAbbr);
  }

  /**
   * DevLaon the validity of postcode letter
   */
  public function testPostcodeLetter()
  {
    \$postcodeLetter = \$this->faker->randomPostcodeLetter();
    \$this->assertNotEmpty(\$postcodeLetter);
    \$this->assertInternalType('string', \$postcodeLetter);
    \$this->assertRegExp('/^[A-Z]{1}\$/', \$postcodeLetter);
  }

  /**
   * DevLaon the validity of Canadian postcode
   */
  public function testPostcode()
  {
    \$postcode = \$this->faker->postcode();
    \$this->assertNotEmpty(\$postcode);
    \$this->assertInternalType('string', \$postcode);
    \$this->assertRegExp('/^[A-Za-z]\\d[A-Za-z][ -]?\\d[A-Za-z]\\d\$/', \$postcode);
  }
}

?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_CA/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_CA;

use Faker\\Generator;
use Faker\\Provider\\en_CA\\Address;
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

  /**
   * DevLaon the validity of province
   */
  public function testProvince()
  {
    \$province = \$this->faker->province();
    \$this->assertNotEmpty(\$province);
    \$this->assertInternalType('string', \$province);
    \$this->assertRegExp('/[A-Z][a-z]+/', \$province);
  }

  /**
   * DevLaon the validity of province abbreviation
   */
  public function testProvinceAbbr()
  {
    \$provinceAbbr = \$this->faker->provinceAbbr();
    \$this->assertNotEmpty(\$provinceAbbr);
    \$this->assertInternalType('string', \$provinceAbbr);
    \$this->assertRegExp('/^[A-Z]{2}\$/', \$provinceAbbr);
  }

  /**
   * DevLaon the validity of postcode letter
   */
  public function testPostcodeLetter()
  {
    \$postcodeLetter = \$this->faker->randomPostcodeLetter();
    \$this->assertNotEmpty(\$postcodeLetter);
    \$this->assertInternalType('string', \$postcodeLetter);
    \$this->assertRegExp('/^[A-Z]{1}\$/', \$postcodeLetter);
  }

  /**
   * DevLaon the validity of Canadian postcode
   */
  public function testPostcode()
  {
    \$postcode = \$this->faker->postcode();
    \$this->assertNotEmpty(\$postcode);
    \$this->assertInternalType('string', \$postcode);
    \$this->assertRegExp('/^[A-Za-z]\\d[A-Za-z][ -]?\\d[A-Za-z]\\d\$/', \$postcode);
  }
}

?>
", "vendor/fzaninotto/faker/test/Faker/Provider/en_CA/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_CA/AddressTest.php");
    }
}
