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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_US/PhoneNumberTest.php */
class __TwigTemplate_0af94c6eeb584ae9be262c886de03c9d9dc57d51d2f6d4c4e0f108e279bd21c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PhoneNumberTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PhoneNumberTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_US;

use Faker\\Generator;
use Faker\\Provider\\en_US\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testPhoneNumber()
    {
        for (\$i = 0; \$i < 100; \$i++) {
            \$number = \$this->faker->phoneNumber;
            \$baseNumber = preg_replace('/ *x.*\$/', '', \$number); // Remove possible extension
            \$digits = array_values(array_filter(str_split(\$baseNumber), 'ctype_digit'));

            // Prefix '1' allowed
            if (count(\$digits) === 11) {
                \$this->assertEquals('1', \$digits[0]);
                \$digits = array_slice(\$digits, 1);
            }

            // 10 digits
            \$this->assertEquals(10, count(\$digits));

            // Last two digits of area code cannot be identical
            \$this->assertNotEquals(\$digits[1], \$digits[2]);

            // Last two digits of exchange code cannot be 1
            if (\$digits[4] === 1) {
                \$this->assertNotEquals(\$digits[4], \$digits[5]);
            }

            // DevLaon format
            \$this->assertRegExp('/^(\\+?1)?([ -.]*\\d{3}[ -.]*| *\\(\\d{3}\\) *)\\d{3}[-.]?\\d{4}\$/', \$baseNumber);
        }
    }

    public function testTollFreeAreaCode()
    {
        \$this->assertContains(\$this->faker->tollFreeAreaCode, array(800, 822, 833, 844, 855, 866, 877, 888, 880, 887, 889));
    }

    public function testTollFreePhoneNumber()
    {
        for (\$i = 0; \$i < 100; \$i++) {
            \$number = \$this->faker->tollFreePhoneNumber;
            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            // Prefix '1' allowed
            if (count(\$digits) === 11) {
                \$this->assertEquals('1', \$digits[0]);
                \$digits = array_slice(\$digits, 1);
            }

            // 10 digits
            \$this->assertEquals(10, count(\$digits));

            \$areaCode = \$digits[0] . \$digits[1] . \$digits[2];
            \$this->assertContains(\$areaCode, array('800', '822', '833', '844', '855', '866', '877', '888', '880', '887', '889'));

            // Last two digits of exchange code cannot be 1
            if (\$digits[4] === 1) {
                \$this->assertNotEquals(\$digits[4], \$digits[5]);
            }

            // DevLaon format
            \$this->assertRegExp('/^(\\+?1)?([ -.]*\\d{3}[ -.]*| *\\(\\d{3}\\) *)\\d{3}[-.]?\\d{4}\$/', \$number);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PhoneNumberTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_US;

use Faker\\Generator;
use Faker\\Provider\\en_US\\PhoneNumber;
use PHPUnit\\Framework\\TestCase;

class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new PhoneNumber(\$faker));
        \$this->faker = \$faker;
    }

    public function testPhoneNumber()
    {
        for (\$i = 0; \$i < 100; \$i++) {
            \$number = \$this->faker->phoneNumber;
            \$baseNumber = preg_replace('/ *x.*\$/', '', \$number); // Remove possible extension
            \$digits = array_values(array_filter(str_split(\$baseNumber), 'ctype_digit'));

            // Prefix '1' allowed
            if (count(\$digits) === 11) {
                \$this->assertEquals('1', \$digits[0]);
                \$digits = array_slice(\$digits, 1);
            }

            // 10 digits
            \$this->assertEquals(10, count(\$digits));

            // Last two digits of area code cannot be identical
            \$this->assertNotEquals(\$digits[1], \$digits[2]);

            // Last two digits of exchange code cannot be 1
            if (\$digits[4] === 1) {
                \$this->assertNotEquals(\$digits[4], \$digits[5]);
            }

            // DevLaon format
            \$this->assertRegExp('/^(\\+?1)?([ -.]*\\d{3}[ -.]*| *\\(\\d{3}\\) *)\\d{3}[-.]?\\d{4}\$/', \$baseNumber);
        }
    }

    public function testTollFreeAreaCode()
    {
        \$this->assertContains(\$this->faker->tollFreeAreaCode, array(800, 822, 833, 844, 855, 866, 877, 888, 880, 887, 889));
    }

    public function testTollFreePhoneNumber()
    {
        for (\$i = 0; \$i < 100; \$i++) {
            \$number = \$this->faker->tollFreePhoneNumber;
            \$digits = array_values(array_filter(str_split(\$number), 'ctype_digit'));

            // Prefix '1' allowed
            if (count(\$digits) === 11) {
                \$this->assertEquals('1', \$digits[0]);
                \$digits = array_slice(\$digits, 1);
            }

            // 10 digits
            \$this->assertEquals(10, count(\$digits));

            \$areaCode = \$digits[0] . \$digits[1] . \$digits[2];
            \$this->assertContains(\$areaCode, array('800', '822', '833', '844', '855', '866', '877', '888', '880', '887', '889'));

            // Last two digits of exchange code cannot be 1
            if (\$digits[4] === 1) {
                \$this->assertNotEquals(\$digits[4], \$digits[5]);
            }

            // DevLaon format
            \$this->assertRegExp('/^(\\+?1)?([ -.]*\\d{3}[ -.]*| *\\(\\d{3}\\) *)\\d{3}[-.]?\\d{4}\$/', \$number);
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/PhoneNumberTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_US/PhoneNumberTest.php");
    }
}
