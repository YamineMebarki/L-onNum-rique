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

/* vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PhoneNumberTest.php */
class __TwigTemplate_7dd7688bbfb1ac1c0feb7f4257af36e2d521e006054293eb35a89ab622571379 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PhoneNumberTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PhoneNumberTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\uk_UA;

use Faker\\Generator;
use Faker\\Provider\\uk_UA\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
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

    public function testPhoneNumberFormat()
    {
        \$pattern = \"/((\\+38)(((\\(\\d{3}\\))\\d{7}|(\\(\\d{4}\\))\\d{6})|(\\d{8})))|0\\d{9}/\";
        \$phoneNumber = \$this->faker->phoneNumber;
        \$this->assertSame(
            preg_match(\$pattern, \$phoneNumber),
            1,
            'Phone number format ' . \$phoneNumber . ' is wrong!'
        );

    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PhoneNumberTest.php";
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
use Faker\\Provider\\uk_UA\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
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

    public function testPhoneNumberFormat()
    {
        \$pattern = \"/((\\+38)(((\\(\\d{3}\\))\\d{7}|(\\(\\d{4}\\))\\d{6})|(\\d{8})))|0\\d{9}/\";
        \$phoneNumber = \$this->faker->phoneNumber;
        \$this->assertSame(
            preg_match(\$pattern, \$phoneNumber),
            1,
            'Phone number format ' . \$phoneNumber . ' is wrong!'
        );

    }

}
", "vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PhoneNumberTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/uk_UA/PhoneNumberTest.php");
    }
}
