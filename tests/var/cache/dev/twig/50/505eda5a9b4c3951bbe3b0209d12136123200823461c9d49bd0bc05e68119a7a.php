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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_NG/PhoneNumberTest.php */
class __TwigTemplate_6c68e7106213f4c2381e3df83d37dfc7523c81733332a2ecb5ce50ee19de8876 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/PhoneNumberTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/PhoneNumberTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\ng_NG;

use Faker\\Generator;
use Faker\\Provider\\en_NG\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutCountryCode()
    {
        \$phoneNumber = \$this->faker->phoneNumber();

        \$this->assertNotEmpty(\$phoneNumber);
        \$this->assertInternalType('string', \$phoneNumber);
        \$this->assertRegExp('/^(0|(\\+234))\\s?[789][01]\\d\\s?(\\d{3}\\s?\\d{4})/', \$phoneNumber);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/PhoneNumberTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\ng_NG;

use Faker\\Generator;
use Faker\\Provider\\en_NG\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutCountryCode()
    {
        \$phoneNumber = \$this->faker->phoneNumber();

        \$this->assertNotEmpty(\$phoneNumber);
        \$this->assertInternalType('string', \$phoneNumber);
        \$this->assertRegExp('/^(0|(\\+234))\\s?[789][01]\\d\\s?(\\d{3}\\s?\\d{4})/', \$phoneNumber);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_NG/PhoneNumberTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_NG/PhoneNumberTest.php");
    }
}
