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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_SG/PhoneNumberTest.php */
class __TwigTemplate_56049a70041174e5c9035029a16f027b1c1c5308dd737db21809912ace786635 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_SG/PhoneNumberTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_SG/PhoneNumberTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_SG;

use Faker\\Factory;
use Faker\\Provider\\en_SG\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$this->faker = Factory::create('en_SG');
        \$this->faker->seed(1);
        \$this->faker->addProvider(new PhoneNumber(\$this->faker));
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // y means 0 to 8 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith9Returns9yxxxxxx()
    {
        \$startsWith9 = false;
        while (!\$startsWith9) {
            \$mobileNumber = \$this->faker->mobileNumber();
            \$startsWith9 = preg_match('/^(\\+65|65)?\\s*9/', \$mobileNumber);
        }

        \$this->assertRegExp('/^(\\+65|65)?\\s*9\\s*[0-8]{3}\\s*\\d{4}\$/', \$mobileNumber);
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // z means 1 to 9 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith7Or8Returns7Or8zxxxxxx()
    {
        \$startsWith7Or8 = false;
        while (!\$startsWith7Or8) {
            \$mobileNumber = \$this->faker->mobileNumber();
            \$startsWith7Or8 = preg_match('/^(\\+65|65)?\\s*[7-8]/', \$mobileNumber);
        }
        \$this->assertRegExp('/^(\\+65|65)?\\s*[7-8]\\s*[1-9]{3}\\s*\\d{4}\$/', \$mobileNumber);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_SG/PhoneNumberTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_SG;

use Faker\\Factory;
use Faker\\Provider\\en_SG\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$this->faker = Factory::create('en_SG');
        \$this->faker->seed(1);
        \$this->faker->addProvider(new PhoneNumber(\$this->faker));
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // y means 0 to 8 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith9Returns9yxxxxxx()
    {
        \$startsWith9 = false;
        while (!\$startsWith9) {
            \$mobileNumber = \$this->faker->mobileNumber();
            \$startsWith9 = preg_match('/^(\\+65|65)?\\s*9/', \$mobileNumber);
        }

        \$this->assertRegExp('/^(\\+65|65)?\\s*9\\s*[0-8]{3}\\s*\\d{4}\$/', \$mobileNumber);
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // z means 1 to 9 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith7Or8Returns7Or8zxxxxxx()
    {
        \$startsWith7Or8 = false;
        while (!\$startsWith7Or8) {
            \$mobileNumber = \$this->faker->mobileNumber();
            \$startsWith7Or8 = preg_match('/^(\\+65|65)?\\s*[7-8]/', \$mobileNumber);
        }
        \$this->assertRegExp('/^(\\+65|65)?\\s*[7-8]\\s*[1-9]{3}\\s*\\d{4}\$/', \$mobileNumber);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_SG/PhoneNumberTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_SG/PhoneNumberTest.php");
    }
}
