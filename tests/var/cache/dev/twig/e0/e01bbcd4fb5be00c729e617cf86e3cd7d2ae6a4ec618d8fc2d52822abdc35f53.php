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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_US/PaymentTest.php */
class __TwigTemplate_254293709c792cfc929b3f4f4f3e109b71c646cdb7108ff1408772bee4b5aa35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PaymentTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PaymentTest.php"));

        // line 1
        echo "<?php


namespace Faker\\Provider\\en_US;

use Faker\\Generator;
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

    public function testBankAccountNumber()
    {
        \$accNo = \$this->faker->bankAccountNumber;
        \$this->assertTrue(ctype_digit(\$accNo));
        \$this->assertLessThanOrEqual(17, strlen(\$accNo));
    }

    public function testBankRoutingNumber()
    {
        \$routingNo = \$this->faker->bankRoutingNumber;
        \$this->assertRegExp('/^\\d{9}\$/', \$routingNo);
        \$this->assertEquals(Payment::calculateRoutingNumberChecksum(\$routingNo), \$routingNo[8]);
    }

    public function routingNumberProvider()
    {
        return array(
            array('122105155'),
            array('082000549'),
            array('121122676'),
            array('122235821'),
            array('102101645'),
            array('102000021'),
            array('123103729'),
            array('071904779'),
            array('081202759'),
            array('074900783'),
            array('104000029'),
            array('073000545'),
            array('101000187'),
            array('042100175'),
            array('083900363'),
            array('091215927'),
            array('091300023'),
            array('091000022'),
            array('081000210'),
            array('101200453'),
            array('092900383'),
            array('104000029'),
            array('121201694'),
            array('107002312'),
            array('091300023'),
            array('041202582'),
            array('042000013'),
            array('123000220'),
            array('091408501'),
            array('064000059'),
            array('124302150'),
            array('125000105'),
            array('075000022'),
            array('307070115'),
            array('091000022'),
        );
    }

    /**
     * @dataProvider routingNumberProvider
     */
    public function testCalculateRoutingNumberChecksum(\$routingNo)
    {
        \$this->assertEquals(\$routingNo[8], Payment::calculateRoutingNumberChecksum(\$routingNo), \$routingNo);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PaymentTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace Faker\\Provider\\en_US;

use Faker\\Generator;
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

    public function testBankAccountNumber()
    {
        \$accNo = \$this->faker->bankAccountNumber;
        \$this->assertTrue(ctype_digit(\$accNo));
        \$this->assertLessThanOrEqual(17, strlen(\$accNo));
    }

    public function testBankRoutingNumber()
    {
        \$routingNo = \$this->faker->bankRoutingNumber;
        \$this->assertRegExp('/^\\d{9}\$/', \$routingNo);
        \$this->assertEquals(Payment::calculateRoutingNumberChecksum(\$routingNo), \$routingNo[8]);
    }

    public function routingNumberProvider()
    {
        return array(
            array('122105155'),
            array('082000549'),
            array('121122676'),
            array('122235821'),
            array('102101645'),
            array('102000021'),
            array('123103729'),
            array('071904779'),
            array('081202759'),
            array('074900783'),
            array('104000029'),
            array('073000545'),
            array('101000187'),
            array('042100175'),
            array('083900363'),
            array('091215927'),
            array('091300023'),
            array('091000022'),
            array('081000210'),
            array('101200453'),
            array('092900383'),
            array('104000029'),
            array('121201694'),
            array('107002312'),
            array('091300023'),
            array('041202582'),
            array('042000013'),
            array('123000220'),
            array('091408501'),
            array('064000059'),
            array('124302150'),
            array('125000105'),
            array('075000022'),
            array('307070115'),
            array('091000022'),
        );
    }

    /**
     * @dataProvider routingNumberProvider
     */
    public function testCalculateRoutingNumberChecksum(\$routingNo)
    {
        \$this->assertEquals(\$routingNo[8], Payment::calculateRoutingNumberChecksum(\$routingNo), \$routingNo);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PaymentTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_US/PaymentTest.php");
    }
}
