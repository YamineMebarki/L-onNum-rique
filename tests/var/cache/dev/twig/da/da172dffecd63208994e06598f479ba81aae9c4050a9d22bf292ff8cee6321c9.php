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

/* vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/AddressTest.php */
class __TwigTemplate_37089362377bf16cef07f6cae2426b350a2b543ea027238e755c18a05bb0e479 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/AddressTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\pt_PT;

use Faker\\Generator;
use Faker\\Provider\\pt_PT\\Address;
use Faker\\Provider\\pt_PT\\Person;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Address(\$faker));
        \$this->faker = \$faker;
    }

    public function testPostCodeIsValid()
    {
        \$main = '[1-9]{1}[0-9]{2}[0,1,4,5,9]{1}';
        \$pattern = \"/^(\$main)|(\$main-[0-9]{3})+\$/\";
        \$postcode = \$this->faker->postcode();
        \$this->assertSame(preg_match(\$pattern, \$postcode), 1, \$postcode);
    }

    public function testAddressIsSingleLine()
    {
        \$this->faker->addProvider(new Person(\$this->faker));

        \$address = \$this->faker->address();
        \$this->assertFalse(strstr(\$address, \"\\n\"));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/AddressTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\pt_PT;

use Faker\\Generator;
use Faker\\Provider\\pt_PT\\Address;
use Faker\\Provider\\pt_PT\\Person;
use PHPUnit\\Framework\\TestCase;

class AddressTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Address(\$faker));
        \$this->faker = \$faker;
    }

    public function testPostCodeIsValid()
    {
        \$main = '[1-9]{1}[0-9]{2}[0,1,4,5,9]{1}';
        \$pattern = \"/^(\$main)|(\$main-[0-9]{3})+\$/\";
        \$postcode = \$this->faker->postcode();
        \$this->assertSame(preg_match(\$pattern, \$postcode), 1, \$postcode);
    }

    public function testAddressIsSingleLine()
    {
        \$this->faker->addProvider(new Person(\$this->faker));

        \$address = \$this->faker->address();
        \$this->assertFalse(strstr(\$address, \"\\n\"));
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/AddressTest.php");
    }
}
