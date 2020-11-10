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

/* vendor/fzaninotto/faker/test/Faker/Provider/it_CH/AddressTest.php */
class __TwigTemplate_fb6aa64f50077c6d4a6e9ce39fdaefd775a1d8968f72c96913312fe7b03bd0b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/it_CH/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/it_CH/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\it_CH;

use Faker\\Generator;
use Faker\\Provider\\it_CH\\Address;
use Faker\\Provider\\it_CH\\Person;
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
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @test
     */
    public function canton ()
    {
        \$canton = \$this->faker->canton();
        \$this->assertInternalType('array', \$canton);
        \$this->assertCount(1, \$canton);

        foreach (\$canton as \$cantonShort => \$cantonName){
            \$this->assertInternalType('string', \$cantonShort);
            \$this->assertEquals(2, strlen(\$cantonShort));
            \$this->assertInternalType('string', \$cantonName);
            \$this->assertGreaterThan(2, strlen(\$cantonName));
        }
    }

    /**
     * @test
     */
    public function cantonName ()
    {
        \$cantonName = \$this->faker->cantonName();
        \$this->assertInternalType('string', \$cantonName);
        \$this->assertGreaterThan(2, strlen(\$cantonName));
    }

    /**
     * @test
     */
    public function cantonShort ()
    {
        \$cantonShort = \$this->faker->cantonShort();
        \$this->assertInternalType('string', \$cantonShort);
        \$this->assertEquals(2, strlen(\$cantonShort));
    }

    /**
     * @test
     */
    public function address (){
        \$address = \$this->faker->address();
        \$this->assertInternalType('string', \$address);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/it_CH/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\it_CH;

use Faker\\Generator;
use Faker\\Provider\\it_CH\\Address;
use Faker\\Provider\\it_CH\\Person;
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
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @test
     */
    public function canton ()
    {
        \$canton = \$this->faker->canton();
        \$this->assertInternalType('array', \$canton);
        \$this->assertCount(1, \$canton);

        foreach (\$canton as \$cantonShort => \$cantonName){
            \$this->assertInternalType('string', \$cantonShort);
            \$this->assertEquals(2, strlen(\$cantonShort));
            \$this->assertInternalType('string', \$cantonName);
            \$this->assertGreaterThan(2, strlen(\$cantonName));
        }
    }

    /**
     * @test
     */
    public function cantonName ()
    {
        \$cantonName = \$this->faker->cantonName();
        \$this->assertInternalType('string', \$cantonName);
        \$this->assertGreaterThan(2, strlen(\$cantonName));
    }

    /**
     * @test
     */
    public function cantonShort ()
    {
        \$cantonShort = \$this->faker->cantonShort();
        \$this->assertInternalType('string', \$cantonShort);
        \$this->assertEquals(2, strlen(\$cantonShort));
    }

    /**
     * @test
     */
    public function address (){
        \$address = \$this->faker->address();
        \$this->assertInternalType('string', \$address);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/it_CH/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/it_CH/AddressTest.php");
    }
}
