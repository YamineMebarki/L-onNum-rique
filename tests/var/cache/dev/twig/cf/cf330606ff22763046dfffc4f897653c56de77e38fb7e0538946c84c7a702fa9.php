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

/* vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PaymentTest.php */
class __TwigTemplate_0c57afc6faa408255591c6566348fdf13874760f29ec376f33a6c83fcd778e92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PaymentTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PaymentTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Calculator\\Luhn;
use Faker\\Generator;
use Faker\\Provider\\fr_FR\\Payment;
use PHPUnit\\Framework\\TestCase;

class PaymentTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Payment(\$faker));
        \$this->faker = \$faker;
    }

    public function testFormattedVat()
    {
        \$vat = \$this->faker->vat(true);
        \$this->assertRegExp(\"/^FR\\s\\w{2}\\s\\d{3}\\s\\d{3}\\s\\d{3}\$/\", \$vat);

        \$vat = str_replace(' ', '', \$vat);
        \$siren = substr(\$vat, 4, 12);
        \$this->assertTrue(Luhn::isValid(\$siren));

        \$key = (int) substr(\$siren, 2, 2);
        if (\$key === 0) {
            \$this->assertEqual(\$key, (12 + 3 * (\$siren % 97)) % 97);            
        }
    }

    public function testUnformattedVat()
    {
        \$vat = \$this->faker->vat(false);
        \$this->assertRegExp(\"/^FR\\w{2}\\d{9}\$/\", \$vat);

        \$siren = substr(\$vat, 4, 12);
        \$this->assertTrue(Luhn::isValid(\$siren));

        \$key = (int) substr(\$siren, 2, 2);
        if (\$key === 0) {
            \$this->assertEqual(\$key, (12 + 3 * (\$siren % 97)) % 97);            
        }
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PaymentTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Calculator\\Luhn;
use Faker\\Generator;
use Faker\\Provider\\fr_FR\\Payment;
use PHPUnit\\Framework\\TestCase;

class PaymentTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Payment(\$faker));
        \$this->faker = \$faker;
    }

    public function testFormattedVat()
    {
        \$vat = \$this->faker->vat(true);
        \$this->assertRegExp(\"/^FR\\s\\w{2}\\s\\d{3}\\s\\d{3}\\s\\d{3}\$/\", \$vat);

        \$vat = str_replace(' ', '', \$vat);
        \$siren = substr(\$vat, 4, 12);
        \$this->assertTrue(Luhn::isValid(\$siren));

        \$key = (int) substr(\$siren, 2, 2);
        if (\$key === 0) {
            \$this->assertEqual(\$key, (12 + 3 * (\$siren % 97)) % 97);            
        }
    }

    public function testUnformattedVat()
    {
        \$vat = \$this->faker->vat(false);
        \$this->assertRegExp(\"/^FR\\w{2}\\d{9}\$/\", \$vat);

        \$siren = substr(\$vat, 4, 12);
        \$this->assertTrue(Luhn::isValid(\$siren));

        \$key = (int) substr(\$siren, 2, 2);
        if (\$key === 0) {
            \$this->assertEqual(\$key, (12 + 3 * (\$siren % 97)) % 97);            
        }
    }
}", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PaymentTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PaymentTest.php");
    }
}
