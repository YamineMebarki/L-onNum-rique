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

/* vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PhoneNumberTest.php */
class __TwigTemplate_c1fea9d22b0a2ddc7f28d09994740619d4e36a0d5b1e784a04742178ee8103cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PhoneNumberTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PhoneNumberTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Generator;
use Faker\\Provider\\fr_FR\\PhoneNumber;

class PhoneNumberTest extends \\PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testMobileNumber()
    {
        \$mobileNumber = \$this->faker->mobileNumber();
        \$this->assertRegExp('/^(\\+33 |\\+33 \\(0\\)|0)(6|7)(?:(\\s{1})?\\d{2}){4}\$/', \$mobileNumber);
    }

    public function testMobileNumber07Format()
    {
        \$mobileNumberFormat = \$this->faker->phoneNumber07();
        \$this->assertRegExp('/^([3-9]{1})\\d(\\d{2}){3}\$/', \$mobileNumberFormat);
    }

    public function testMobileNumber07WithSeparatorFormat()
    {
        \$mobileNumberFormat = \$this->faker->phoneNumber07WithSeparator();
        \$this->assertRegExp('/^([3-9]{1})\\d( \\d{2}){3}\$/', \$mobileNumberFormat);
    }

    public function testServiceNumber()
    {
        \$serviceNumber = \$this->faker->serviceNumber();
        \$this->assertRegExp('/^(\\+33 |\\+33 \\(0\\)|0)8(?:(\\s{1})?\\d{2}){4}\$/', \$serviceNumber);
    }
    
    public function testServiceNumberFormat()
    {
        \$serviceNumberFormat = \$this->faker->phoneNumber08();
        \$this->assertRegExp('/^((0|1|2)\\d{1}|9[^46])\\d{6}\$/', \$serviceNumberFormat);
    }

    public function testServiceNumberWithSeparatorFormat()
    {
        \$serviceNumberFormat = \$this->faker->phoneNumber08WithSeparator();
        \$this->assertRegExp('/^((0|1|2)\\d{1}|9[^46])( \\d{2}){3}\$/', \$serviceNumberFormat);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PhoneNumberTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Generator;
use Faker\\Provider\\fr_FR\\PhoneNumber;

class PhoneNumberTest extends \\PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testMobileNumber()
    {
        \$mobileNumber = \$this->faker->mobileNumber();
        \$this->assertRegExp('/^(\\+33 |\\+33 \\(0\\)|0)(6|7)(?:(\\s{1})?\\d{2}){4}\$/', \$mobileNumber);
    }

    public function testMobileNumber07Format()
    {
        \$mobileNumberFormat = \$this->faker->phoneNumber07();
        \$this->assertRegExp('/^([3-9]{1})\\d(\\d{2}){3}\$/', \$mobileNumberFormat);
    }

    public function testMobileNumber07WithSeparatorFormat()
    {
        \$mobileNumberFormat = \$this->faker->phoneNumber07WithSeparator();
        \$this->assertRegExp('/^([3-9]{1})\\d( \\d{2}){3}\$/', \$mobileNumberFormat);
    }

    public function testServiceNumber()
    {
        \$serviceNumber = \$this->faker->serviceNumber();
        \$this->assertRegExp('/^(\\+33 |\\+33 \\(0\\)|0)8(?:(\\s{1})?\\d{2}){4}\$/', \$serviceNumber);
    }
    
    public function testServiceNumberFormat()
    {
        \$serviceNumberFormat = \$this->faker->phoneNumber08();
        \$this->assertRegExp('/^((0|1|2)\\d{1}|9[^46])\\d{6}\$/', \$serviceNumberFormat);
    }

    public function testServiceNumberWithSeparatorFormat()
    {
        \$serviceNumberFormat = \$this->faker->phoneNumber08WithSeparator();
        \$this->assertRegExp('/^((0|1|2)\\d{1}|9[^46])( \\d{2}){3}\$/', \$serviceNumberFormat);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PhoneNumberTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PhoneNumberTest.php");
    }
}
