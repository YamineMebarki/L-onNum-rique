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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_US/PersonTest.php */
class __TwigTemplate_81017408fee1b042a6d95c9f60503ee3021712989496a1644c6099d56c4332c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_US;

use Faker\\Provider\\en_US\\Person;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testSsn()
    {
        for (\$i = 0; \$i < 100; \$i++) {
            \$number = \$this->faker->ssn;

            // should be in the format ###-##-####
            \$this->assertRegExp('/^[0-9]{3}-[0-9]{2}-[0-9]{4}\$/', \$number);

            \$parts = explode(\"-\", \$number);

            // first part must be between 001 and 899, excluding 666
            \$this->assertNotEquals(666, \$parts[0]);
            \$this->assertGreaterThan(0, \$parts[0]);
            \$this->assertLessThan(900, \$parts[0]);

            // second part must be between 01 and 99
            \$this->assertGreaterThan(0, \$parts[1]);
            \$this->assertLessThan(100, \$parts[1]);

            // the third part must be between 0001 and 9999
            \$this->assertGreaterThan(0, \$parts[2]);
            \$this->assertLessThan(10000, \$parts[2]);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_US;

use Faker\\Provider\\en_US\\Person;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testSsn()
    {
        for (\$i = 0; \$i < 100; \$i++) {
            \$number = \$this->faker->ssn;

            // should be in the format ###-##-####
            \$this->assertRegExp('/^[0-9]{3}-[0-9]{2}-[0-9]{4}\$/', \$number);

            \$parts = explode(\"-\", \$number);

            // first part must be between 001 and 899, excluding 666
            \$this->assertNotEquals(666, \$parts[0]);
            \$this->assertGreaterThan(0, \$parts[0]);
            \$this->assertLessThan(900, \$parts[0]);

            // second part must be between 01 and 99
            \$this->assertGreaterThan(0, \$parts[1]);
            \$this->assertLessThan(100, \$parts[1]);

            // the third part must be between 0001 and 9999
            \$this->assertGreaterThan(0, \$parts[2]);
            \$this->assertLessThan(10000, \$parts[2]);
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_US/PersonTest.php");
    }
}
