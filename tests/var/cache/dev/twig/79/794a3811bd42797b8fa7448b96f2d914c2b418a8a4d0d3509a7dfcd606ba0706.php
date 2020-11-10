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

/* vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/PersonTest.php */
class __TwigTemplate_87df382c28448de35aba3f856f7148c41e7c0cf98bc48ed9401797afb1e4dab4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/PersonTest.php"));

        // line 1
        echo "<?php
namespace Faker\\Test\\Provider\\kk_KZ;

use Faker\\Generator;
use Faker\\Provider\\DateTime;
use Faker\\Provider\\kk_KZ\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        \$this->faker = new Generator();

        \$this->faker->addProvider(new Person(\$this->faker));
    }

    public function testIndividualIdentificationNumberIsValid()
    {
        \$birthDate                      = DateTime::dateTimeBetween('-30 years', '-10 years');
        \$individualIdentificationNumber = \$this->faker->individualIdentificationNumber(\$birthDate);
        \$controlDigit                   = Person::checkSum(\$individualIdentificationNumber);

        \$this->assertSame(\$controlDigit, (int)substr(\$individualIdentificationNumber, 11, 1));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Test\\Provider\\kk_KZ;

use Faker\\Generator;
use Faker\\Provider\\DateTime;
use Faker\\Provider\\kk_KZ\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        \$this->faker = new Generator();

        \$this->faker->addProvider(new Person(\$this->faker));
    }

    public function testIndividualIdentificationNumberIsValid()
    {
        \$birthDate                      = DateTime::dateTimeBetween('-30 years', '-10 years');
        \$individualIdentificationNumber = \$this->faker->individualIdentificationNumber(\$birthDate);
        \$controlDigit                   = Person::checkSum(\$individualIdentificationNumber);

        \$this->assertSame(\$controlDigit, (int)substr(\$individualIdentificationNumber, 11, 1));
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/kk_KZ/PersonTest.php");
    }
}
