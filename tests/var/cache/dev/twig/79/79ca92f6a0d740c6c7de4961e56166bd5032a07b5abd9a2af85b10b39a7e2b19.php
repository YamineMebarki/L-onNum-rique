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

/* vendor/fzaninotto/faker/test/Faker/Provider/sv_SE/PersonTest.php */
class __TwigTemplate_86c670b308f0d87721fcf30bd08b9f498a5709277dd997c4b85279d20352f34b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/sv_SE/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/sv_SE/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\sv_SE;

use Faker\\Calculator\\Luhn;
use Faker\\Generator;
use Faker\\Provider\\sv_SE\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    /** @var Generator */
    protected \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function provideSeedAndExpectedReturn()
    {
        return array(
            array(1, '720727', '720727-5798'),
            array(2, '710414', '710414-5664'),
            array(3, '591012', '591012-4519'),
            array(4, '180307', '180307-0356'),
            array(5, '820904', '820904-7748')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumberUsesBirthDateIfProvided(\$seed, \$birthdate, \$expected)
    {
        \$faker = \$this->faker;
        \$faker->seed(\$seed);
        \$pin = \$faker->personalIdentityNumber(\\DateTime::createFromFormat('ymd', \$birthdate));
        \$this->assertEquals(\$expected, \$pin);
    }

    public function testPersonalIdentityNumberGeneratesLuhnCompliantNumbers()
    {
        \$pin = str_replace('-', '', \$this->faker->personalIdentityNumber());
        \$this->assertTrue(Luhn::isValid(\$pin));
    }

    public function testPersonalIdentityNumberGeneratesOddValuesForMales()
    {
        \$pin = \$this->faker->personalIdentityNumber(null, 'male');
        \$this->assertEquals(1, \$pin{9} % 2);
    }

    public function testPersonalIdentityNumberGeneratesEvenValuesForFemales()
    {
        \$pin = \$this->faker->personalIdentityNumber(null, 'female');
        \$this->assertEquals(0, \$pin{9} % 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/sv_SE/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\sv_SE;

use Faker\\Calculator\\Luhn;
use Faker\\Generator;
use Faker\\Provider\\sv_SE\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    /** @var Generator */
    protected \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function provideSeedAndExpectedReturn()
    {
        return array(
            array(1, '720727', '720727-5798'),
            array(2, '710414', '710414-5664'),
            array(3, '591012', '591012-4519'),
            array(4, '180307', '180307-0356'),
            array(5, '820904', '820904-7748')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumberUsesBirthDateIfProvided(\$seed, \$birthdate, \$expected)
    {
        \$faker = \$this->faker;
        \$faker->seed(\$seed);
        \$pin = \$faker->personalIdentityNumber(\\DateTime::createFromFormat('ymd', \$birthdate));
        \$this->assertEquals(\$expected, \$pin);
    }

    public function testPersonalIdentityNumberGeneratesLuhnCompliantNumbers()
    {
        \$pin = str_replace('-', '', \$this->faker->personalIdentityNumber());
        \$this->assertTrue(Luhn::isValid(\$pin));
    }

    public function testPersonalIdentityNumberGeneratesOddValuesForMales()
    {
        \$pin = \$this->faker->personalIdentityNumber(null, 'male');
        \$this->assertEquals(1, \$pin{9} % 2);
    }

    public function testPersonalIdentityNumberGeneratesEvenValuesForFemales()
    {
        \$pin = \$this->faker->personalIdentityNumber(null, 'female');
        \$this->assertEquals(0, \$pin{9} % 2);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/sv_SE/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/sv_SE/PersonTest.php");
    }
}
