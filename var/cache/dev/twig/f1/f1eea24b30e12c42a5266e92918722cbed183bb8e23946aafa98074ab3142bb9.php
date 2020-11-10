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

/* vendor/fzaninotto/faker/test/Faker/Provider/at_AT/PaymentTest.php */
class __TwigTemplate_c64af8d655765b1d40c1411c51aa3d332afce9dc13143a3793c825686f5feb8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/at_AT/PaymentTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/at_AT/PaymentTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\at_AT;

use Faker\\Generator;
use Faker\\Provider\\at_AT\\Payment;
use PHPUnit\\Framework\\TestCase;

class PaymentTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Payment(\$faker));
        \$this->faker = \$faker;
    }

    public function testVatIsValid()
    {
        \$vat = \$this->faker->vat();
        \$unspacedVat = \$this->faker->vat(false);
        \$this->assertRegExp('/^(AT U\\d{8})\$/', \$vat);
        \$this->assertRegExp('/^(ATU\\d{8})\$/', \$unspacedVat);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/at_AT/PaymentTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\at_AT;

use Faker\\Generator;
use Faker\\Provider\\at_AT\\Payment;
use PHPUnit\\Framework\\TestCase;

class PaymentTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Payment(\$faker));
        \$this->faker = \$faker;
    }

    public function testVatIsValid()
    {
        \$vat = \$this->faker->vat();
        \$unspacedVat = \$this->faker->vat(false);
        \$this->assertRegExp('/^(AT U\\d{8})\$/', \$vat);
        \$this->assertRegExp('/^(ATU\\d{8})\$/', \$unspacedVat);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/at_AT/PaymentTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/at_AT/PaymentTest.php");
    }
}
