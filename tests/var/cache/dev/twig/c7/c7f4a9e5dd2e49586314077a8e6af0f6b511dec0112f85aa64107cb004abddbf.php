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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PhoneNumberTest.php */
class __TwigTemplate_09c02391d019cfba201b6e4d78580ff3a175706cadbef90b7d15e5c136714895 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PhoneNumberTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PhoneNumberTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_ZA;

use Faker\\Generator;
use Faker\\Provider\\en_ZA\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testPhoneNumber()
    {
        for (\$i = 0; \$i < 10; \$i++) {
            \$number = \$this->faker->phoneNumber;

            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            // 10 digits
            if(\$digits[0] = 2 && \$digits[1] == 7) {
                \$this->assertLessThanOrEqual(11, count(\$digits));
            } else {
                \$this->assertGreaterThanOrEqual(10, count(\$digits));
            }
        }
    }

    public function testTollFreePhoneNumber()
    {
        for (\$i = 0; \$i < 10; \$i++) {
            \$number = \$this->faker->tollFreeNumber;
            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            if (count(\$digits) === 11) {
                \$this->assertEquals('0', \$digits[0]);
            }

            \$areaCode = \$digits[0] . \$digits[1] . \$digits[2] . \$digits[3];
            \$this->assertContains(\$areaCode, array('0800', '0860', '0861', '0862'));
        }
    }

    public function testCellPhoneNumber()
    {
        for (\$i = 0; \$i < 10; \$i++) {
            \$number = \$this->faker->mobileNumber;
            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            if(\$digits[0] = 2 && \$digits[1] == 7) {
                \$this->assertLessThanOrEqual(11, count(\$digits));
            } else {
                \$this->assertGreaterThanOrEqual(10, count(\$digits));
            }

            \$this->assertRegExp('/^(\\+27|27)?(\\()?0?([6][0-4]|[7][1-9]|[8][1-9])(\\))?( |-|\\.|_)?(\\d{3})( |-|\\.|_)?(\\d{4})/', \$number);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PhoneNumberTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_ZA;

use Faker\\Generator;
use Faker\\Provider\\en_ZA\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testPhoneNumber()
    {
        for (\$i = 0; \$i < 10; \$i++) {
            \$number = \$this->faker->phoneNumber;

            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            // 10 digits
            if(\$digits[0] = 2 && \$digits[1] == 7) {
                \$this->assertLessThanOrEqual(11, count(\$digits));
            } else {
                \$this->assertGreaterThanOrEqual(10, count(\$digits));
            }
        }
    }

    public function testTollFreePhoneNumber()
    {
        for (\$i = 0; \$i < 10; \$i++) {
            \$number = \$this->faker->tollFreeNumber;
            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            if (count(\$digits) === 11) {
                \$this->assertEquals('0', \$digits[0]);
            }

            \$areaCode = \$digits[0] . \$digits[1] . \$digits[2] . \$digits[3];
            \$this->assertContains(\$areaCode, array('0800', '0860', '0861', '0862'));
        }
    }

    public function testCellPhoneNumber()
    {
        for (\$i = 0; \$i < 10; \$i++) {
            \$number = \$this->faker->mobileNumber;
            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            if(\$digits[0] = 2 && \$digits[1] == 7) {
                \$this->assertLessThanOrEqual(11, count(\$digits));
            } else {
                \$this->assertGreaterThanOrEqual(10, count(\$digits));
            }

            \$this->assertRegExp('/^(\\+27|27)?(\\()?0?([6][0-4]|[7][1-9]|[8][1-9])(\\))?( |-|\\.|_)?(\\d{3})( |-|\\.|_)?(\\d{4})/', \$number);
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PhoneNumberTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_ZA/PhoneNumberTest.php");
    }
}
