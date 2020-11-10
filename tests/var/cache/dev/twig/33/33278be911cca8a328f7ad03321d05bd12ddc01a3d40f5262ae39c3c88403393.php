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

/* vendor/fzaninotto/faker/test/Faker/Provider/ro_RO/PersonTest.php */
class __TwigTemplate_585c85d07367292c980b70444cbdeb209b6ea93f9ae4006693c6caef858bab79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ro_RO/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ro_RO/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\ro_RO;

use Faker\\Generator;
use Faker\\Provider\\DateTime;
use Faker\\Provider\\ro_RO\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    const TEST_CNP_REGEX = '/^[1-9][0-9]{2}(?:0[1-9]|1[012])(?:0[1-9]|[12][0-9]|3[01])(?:0[1-9]|[123][0-9]|4[0-6]|5[12])[0-9]{3}[0-9]\$/';

    /**
     * @var \\Faker\\Generator
     *
     */
    protected \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new DateTime(\$faker));
        \$faker->addProvider(new Person(\$faker));
        \$faker->setDefaultTimezone('Europe/Bucharest');
        \$this->faker = \$faker;
    }

    public function tearDown()
    {
        \$this->faker->setDefaultTimezone();
    }

    public function invalidGenderProvider()
    {
        return array(
            array('elf'),
            array('ent'),
            array('fmle'),
            array('mal'),
        );
    }

    public function invalidYearProvider()
    {
        return array(
            array(1652),
            array(1799),
            array(2100),
            array(2252),
        );
    }

    public function validYearProvider()
    {
        return array(
            array(null),
            array(''),
            array(1800),
            array(1850),
            array(1900),
            array(1990),
            array(2000),
            array(2099),
        );
    }

    public function validCountyCodeProvider()
    {
        return array(
            array('AB'), array('AR'), array('AG'), array('B'), array('BC'), array('BH'), array('BN'), array('BT'),
            array('BV'), array('BR'), array('BZ'), array('CS'), array('CL'), array('CJ'), array('CT'), array('CV'),
            array('DB'), array('DJ'), array('GL'), array('GR'), array('GJ'), array('HR'), array('HD'), array('IL'),
            array('IS'), array('IF'), array('MM'), array('MH'), array('MS'), array('NT'), array('OT'), array('PH'),
            array('SM'), array('SJ'), array('SB'), array('SV'), array('TR'), array('TM'), array('TL'), array('VS'),
            array('VL'), array('VN'), array('B1'), array('B2'), array('B3'), array('B4'), array('B5'), array('B6')
        );
    }

    public function invalidCountyCodeProvider()
    {
        return array(
            array('JK'), array('REW'), array('x'), array('FF'), array('aaaddadaada')
        );
    }

    public function validInputDataProvider()
    {
        return array(
            array(Person::GENDER_MALE, '1981-06-16','B2', true, '181061642'),
            array(Person::GENDER_FEMALE, '1981-06-16','B2', true, '281061642'),
            array(Person::GENDER_MALE, '1981-06-16','B2', false, '981061642'),
            array(Person::GENDER_FEMALE, '1981-06-16','B2', false, '981061642'),
        );
    }
    /**
     *
     */
    public function test_allRandom_returnsValidCnp()
    {
        \$cnp = \$this->faker->cnp;
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated\", \$cnp)
        );
    }

    /**
     *
     */
    public function test_validGender_returnsValidCnp()
    {
        \$cnp = \$this->faker->cnp(Person::GENDER_MALE);
        \$this->assertTrue(
            \$this->isValidMaleCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for '%s' gender\", \$cnp, Person::GENDER_MALE)
        );

        \$cnp = \$this->faker->cnp(Person::GENDER_FEMALE);
        \$this->assertTrue(
            \$this->isValidFemaleCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for '%s' gender\", \$cnp, Person::GENDER_FEMALE)
        );
    }

    /**
     * @param string \$value
     *
     * @dataProvider invalidGenderProvider
     */
    public function test_invalidGender_throwsException(\$value)
    {
        \$this->setExpectedException('InvalidArgumentException');
        \$this->faker->cnp(\$value);
    }

    /**
     * @param string \$value year of birth
     *
     * @dataProvider validYearProvider
     */
    public function test_validYear_returnsValidCnp(\$value)
    {
        \$cnp = \$this->faker->cnp(null, \$value);
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for valid year '%s'\", \$cnp, \$value)
        );
    }

    /**
     * @param string \$value year of birth
     *
     * @dataProvider invalidYearProvider
     */
    public function test_invalidYear_throwsException(\$value)
    {
        \$this->setExpectedException('InvalidArgumentException');
        \$this->faker->cnp(null, \$value);
    }

    /**
     * @param \$value
     * @dataProvider validCountyCodeProvider
     */
    public function test_validCountyCode_returnsValidCnp(\$value)
    {
        \$cnp = \$this->faker->cnp(null, null, \$value);
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for valid year '%s'\", \$cnp, \$value)
        );
    }

    /**
     * @param \$value
     * @dataProvider invalidCountyCodeProvider
     */
    public function test_invalidCountyCode_throwsException(\$value)
    {
        \$this->setExpectedException('InvalidArgumentException');
        \$this->faker->cnp(null, null, \$value);
    }

    /**
     *
     */
    public function test_nonResident_returnsValidCnp()
    {
        \$cnp = \$this->faker->cnp(null, null, null, false);
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for non resident\", \$cnp)
        );
        \$this->assertStringStartsWith(
            '9',
            \$cnp,
            sprintf(\"Invalid CNP '%' generated for non resident (should start with 9)\", \$cnp)
        );
    }

    /**
     *
     * @param \$gender
     * @param \$dateOfBirth
     * @param \$county
     * @param \$isResident
     * @param \$expectedCnpStart
     *
     * @dataProvider validInputDataProvider
     */
    public function test_validInputData_returnsValidCnp(\$gender, \$dateOfBirth, \$county, \$isResident, \$expectedCnpStart)
    {
        \$cnp = \$this->faker->cnp(\$gender, \$dateOfBirth, \$county, \$isResident);
        \$this->assertStringStartsWith(
            \$expectedCnpStart,
            \$cnp,
            sprintf(\"Invalid CNP '%' generated for non valid data\", \$cnp)
        );
    }


    protected function isValidFemaleCnp(\$value)
    {
        return \$this->isValidCnp(\$value) && in_array(\$value[0], array(2, 4, 6, 8, 9));
    }

    protected function isValidMaleCnp(\$value)
    {
        return \$this->isValidCnp(\$value) && in_array(\$value[0], array(1, 3, 5, 7, 9));
    }

    protected function isValidCnp(\$cnp)
    {
        if (preg_match(static::TEST_CNP_REGEX, \$cnp) !== false) {
            \$checkNumber = 279146358279;

            \$checksum = 0;
            foreach (range(0, 11) as \$digit) {
                \$checksum += (int)substr(\$cnp, \$digit, 1) * (int)substr(\$checkNumber, \$digit, 1);
            }
            \$checksum = \$checksum % 11;
            \$checksum = \$checksum == 10 ? 1 : \$checksum;

            if (\$checksum == substr(\$cnp, -1)) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/ro_RO/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\ro_RO;

use Faker\\Generator;
use Faker\\Provider\\DateTime;
use Faker\\Provider\\ro_RO\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    const TEST_CNP_REGEX = '/^[1-9][0-9]{2}(?:0[1-9]|1[012])(?:0[1-9]|[12][0-9]|3[01])(?:0[1-9]|[123][0-9]|4[0-6]|5[12])[0-9]{3}[0-9]\$/';

    /**
     * @var \\Faker\\Generator
     *
     */
    protected \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new DateTime(\$faker));
        \$faker->addProvider(new Person(\$faker));
        \$faker->setDefaultTimezone('Europe/Bucharest');
        \$this->faker = \$faker;
    }

    public function tearDown()
    {
        \$this->faker->setDefaultTimezone();
    }

    public function invalidGenderProvider()
    {
        return array(
            array('elf'),
            array('ent'),
            array('fmle'),
            array('mal'),
        );
    }

    public function invalidYearProvider()
    {
        return array(
            array(1652),
            array(1799),
            array(2100),
            array(2252),
        );
    }

    public function validYearProvider()
    {
        return array(
            array(null),
            array(''),
            array(1800),
            array(1850),
            array(1900),
            array(1990),
            array(2000),
            array(2099),
        );
    }

    public function validCountyCodeProvider()
    {
        return array(
            array('AB'), array('AR'), array('AG'), array('B'), array('BC'), array('BH'), array('BN'), array('BT'),
            array('BV'), array('BR'), array('BZ'), array('CS'), array('CL'), array('CJ'), array('CT'), array('CV'),
            array('DB'), array('DJ'), array('GL'), array('GR'), array('GJ'), array('HR'), array('HD'), array('IL'),
            array('IS'), array('IF'), array('MM'), array('MH'), array('MS'), array('NT'), array('OT'), array('PH'),
            array('SM'), array('SJ'), array('SB'), array('SV'), array('TR'), array('TM'), array('TL'), array('VS'),
            array('VL'), array('VN'), array('B1'), array('B2'), array('B3'), array('B4'), array('B5'), array('B6')
        );
    }

    public function invalidCountyCodeProvider()
    {
        return array(
            array('JK'), array('REW'), array('x'), array('FF'), array('aaaddadaada')
        );
    }

    public function validInputDataProvider()
    {
        return array(
            array(Person::GENDER_MALE, '1981-06-16','B2', true, '181061642'),
            array(Person::GENDER_FEMALE, '1981-06-16','B2', true, '281061642'),
            array(Person::GENDER_MALE, '1981-06-16','B2', false, '981061642'),
            array(Person::GENDER_FEMALE, '1981-06-16','B2', false, '981061642'),
        );
    }
    /**
     *
     */
    public function test_allRandom_returnsValidCnp()
    {
        \$cnp = \$this->faker->cnp;
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated\", \$cnp)
        );
    }

    /**
     *
     */
    public function test_validGender_returnsValidCnp()
    {
        \$cnp = \$this->faker->cnp(Person::GENDER_MALE);
        \$this->assertTrue(
            \$this->isValidMaleCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for '%s' gender\", \$cnp, Person::GENDER_MALE)
        );

        \$cnp = \$this->faker->cnp(Person::GENDER_FEMALE);
        \$this->assertTrue(
            \$this->isValidFemaleCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for '%s' gender\", \$cnp, Person::GENDER_FEMALE)
        );
    }

    /**
     * @param string \$value
     *
     * @dataProvider invalidGenderProvider
     */
    public function test_invalidGender_throwsException(\$value)
    {
        \$this->setExpectedException('InvalidArgumentException');
        \$this->faker->cnp(\$value);
    }

    /**
     * @param string \$value year of birth
     *
     * @dataProvider validYearProvider
     */
    public function test_validYear_returnsValidCnp(\$value)
    {
        \$cnp = \$this->faker->cnp(null, \$value);
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for valid year '%s'\", \$cnp, \$value)
        );
    }

    /**
     * @param string \$value year of birth
     *
     * @dataProvider invalidYearProvider
     */
    public function test_invalidYear_throwsException(\$value)
    {
        \$this->setExpectedException('InvalidArgumentException');
        \$this->faker->cnp(null, \$value);
    }

    /**
     * @param \$value
     * @dataProvider validCountyCodeProvider
     */
    public function test_validCountyCode_returnsValidCnp(\$value)
    {
        \$cnp = \$this->faker->cnp(null, null, \$value);
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for valid year '%s'\", \$cnp, \$value)
        );
    }

    /**
     * @param \$value
     * @dataProvider invalidCountyCodeProvider
     */
    public function test_invalidCountyCode_throwsException(\$value)
    {
        \$this->setExpectedException('InvalidArgumentException');
        \$this->faker->cnp(null, null, \$value);
    }

    /**
     *
     */
    public function test_nonResident_returnsValidCnp()
    {
        \$cnp = \$this->faker->cnp(null, null, null, false);
        \$this->assertTrue(
            \$this->isValidCnp(\$cnp),
            sprintf(\"Invalid CNP '%' generated for non resident\", \$cnp)
        );
        \$this->assertStringStartsWith(
            '9',
            \$cnp,
            sprintf(\"Invalid CNP '%' generated for non resident (should start with 9)\", \$cnp)
        );
    }

    /**
     *
     * @param \$gender
     * @param \$dateOfBirth
     * @param \$county
     * @param \$isResident
     * @param \$expectedCnpStart
     *
     * @dataProvider validInputDataProvider
     */
    public function test_validInputData_returnsValidCnp(\$gender, \$dateOfBirth, \$county, \$isResident, \$expectedCnpStart)
    {
        \$cnp = \$this->faker->cnp(\$gender, \$dateOfBirth, \$county, \$isResident);
        \$this->assertStringStartsWith(
            \$expectedCnpStart,
            \$cnp,
            sprintf(\"Invalid CNP '%' generated for non valid data\", \$cnp)
        );
    }


    protected function isValidFemaleCnp(\$value)
    {
        return \$this->isValidCnp(\$value) && in_array(\$value[0], array(2, 4, 6, 8, 9));
    }

    protected function isValidMaleCnp(\$value)
    {
        return \$this->isValidCnp(\$value) && in_array(\$value[0], array(1, 3, 5, 7, 9));
    }

    protected function isValidCnp(\$cnp)
    {
        if (preg_match(static::TEST_CNP_REGEX, \$cnp) !== false) {
            \$checkNumber = 279146358279;

            \$checksum = 0;
            foreach (range(0, 11) as \$digit) {
                \$checksum += (int)substr(\$cnp, \$digit, 1) * (int)substr(\$checkNumber, \$digit, 1);
            }
            \$checksum = \$checksum % 11;
            \$checksum = \$checksum == 10 ? 1 : \$checksum;

            if (\$checksum == substr(\$cnp, -1)) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/ro_RO/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/ro_RO/PersonTest.php");
    }
}
