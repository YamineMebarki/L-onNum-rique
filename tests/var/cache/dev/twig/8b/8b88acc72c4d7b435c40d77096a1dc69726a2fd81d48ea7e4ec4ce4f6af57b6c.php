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

/* vendor/fzaninotto/faker/test/Faker/Provider/fi_FI/PersonTest.php */
class __TwigTemplate_8c7c4341f02fab509410a98ff1c8e1b6f2f1349f82fdc2c721c9b85e4b166b21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fi_FI/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fi_FI/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\fi_FI;

use Faker\\Generator;
use Faker\\Provider\\DateTime;
use Faker\\Provider\\fi_FI\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    /** @var Generator */
    protected \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new DateTime(\$faker));
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function provideSeedAndExpectedReturn()
    {
        return array(
            array(1, '1800-01-01', '010100+5207'),
            array(2, '1930-08-08', '080830-508R'),
            array(3, '1999-12-31', '311299-409D'),
            array(4, '2000-01-01', '010100A039P'),
            array(5, '2015-06-17', '170615A690X')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumberUsesBirthDateIfProvided(\$seed, \$birthdate, \$expected)
    {
        \$faker = \$this->faker;
        \$faker->seed(\$seed);
        \$pin = \$faker->personalIdentityNumber(\\DateTime::createFromFormat('Y-m-d', \$birthdate));
        \$this->assertEquals(\$expected, \$pin);
    }

    public function testPersonalIdentityNumberGeneratesCompliantNumbers()
    {
        if (strtotime('1800-01-01 00:00:00')) {
            \$min=\"1900\";
            \$max=\"2099\";
            for (\$i = 0; \$i < 10; \$i++) {
                \$birthdate = \$this->faker->dateTimeBetween('1800-01-01 00:00:00', '1899-12-31 23:59:59');
                \$pin = \$this->faker->personalIdentityNumber(\$birthdate, NULL, true);
                \$this->assertRegExp('/^[0-9]{6}\\+[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]\$/', \$pin);
            }
        } else { // timestamp limit for 32-bit computer
            \$min=\"1902\";
            \$max=\"2037\";
        }
        for (\$i = 0; \$i < 10; \$i++) {
            \$birthdate = \$this->faker->dateTimeBetween(\"\$min-01-01 00:00:00\", '1999-12-31 23:59:59');
            \$pin = \$this->faker->personalIdentityNumber(\$birthdate);
            \$this->assertRegExp('/^[0-9]{6}-[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]\$/', \$pin);
        }
        for (\$i = 0; \$i < 10; \$i++) {
            \$birthdate = \$this->faker->dateTimeBetween('2000-01-01 00:00:00', \"\$max-12-31 23:59:59\");
            \$pin = \$this->faker->personalIdentityNumber(\$birthdate);
            \$this->assertRegExp('/^[0-9]{6}A[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]\$/', \$pin);
        }
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
        return "vendor/fzaninotto/faker/test/Faker/Provider/fi_FI/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\fi_FI;

use Faker\\Generator;
use Faker\\Provider\\DateTime;
use Faker\\Provider\\fi_FI\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    /** @var Generator */
    protected \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new DateTime(\$faker));
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function provideSeedAndExpectedReturn()
    {
        return array(
            array(1, '1800-01-01', '010100+5207'),
            array(2, '1930-08-08', '080830-508R'),
            array(3, '1999-12-31', '311299-409D'),
            array(4, '2000-01-01', '010100A039P'),
            array(5, '2015-06-17', '170615A690X')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumberUsesBirthDateIfProvided(\$seed, \$birthdate, \$expected)
    {
        \$faker = \$this->faker;
        \$faker->seed(\$seed);
        \$pin = \$faker->personalIdentityNumber(\\DateTime::createFromFormat('Y-m-d', \$birthdate));
        \$this->assertEquals(\$expected, \$pin);
    }

    public function testPersonalIdentityNumberGeneratesCompliantNumbers()
    {
        if (strtotime('1800-01-01 00:00:00')) {
            \$min=\"1900\";
            \$max=\"2099\";
            for (\$i = 0; \$i < 10; \$i++) {
                \$birthdate = \$this->faker->dateTimeBetween('1800-01-01 00:00:00', '1899-12-31 23:59:59');
                \$pin = \$this->faker->personalIdentityNumber(\$birthdate, NULL, true);
                \$this->assertRegExp('/^[0-9]{6}\\+[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]\$/', \$pin);
            }
        } else { // timestamp limit for 32-bit computer
            \$min=\"1902\";
            \$max=\"2037\";
        }
        for (\$i = 0; \$i < 10; \$i++) {
            \$birthdate = \$this->faker->dateTimeBetween(\"\$min-01-01 00:00:00\", '1999-12-31 23:59:59');
            \$pin = \$this->faker->personalIdentityNumber(\$birthdate);
            \$this->assertRegExp('/^[0-9]{6}-[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]\$/', \$pin);
        }
        for (\$i = 0; \$i < 10; \$i++) {
            \$birthdate = \$this->faker->dateTimeBetween('2000-01-01 00:00:00', \"\$max-12-31 23:59:59\");
            \$pin = \$this->faker->personalIdentityNumber(\$birthdate);
            \$this->assertRegExp('/^[0-9]{6}A[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]\$/', \$pin);
        }
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
", "vendor/fzaninotto/faker/test/Faker/Provider/fi_FI/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/fi_FI/PersonTest.php");
    }
}
