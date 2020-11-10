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

/* vendor/fzaninotto/faker/test/Faker/Provider/cs_CZ/PersonTest.php */
class __TwigTemplate_4d2817a08676953f1e81d7b4fb049502bbfc18ef60ea7cd3a017aa37d23c104f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/cs_CZ/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/cs_CZ/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\cs_CZ;

use Faker\\Generator;
use Faker\\Provider\\cs_CZ\\Person;
use Faker\\Provider\\Miscellaneous;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function testBirthNumber()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new Miscellaneous(\$faker));

        for (\$i = 0; \$i < 1000; \$i++) {
            \$birthNumber = \$faker->birthNumber();
            \$birthNumber = str_replace('/', '', \$birthNumber);

            // check date
            \$year = intval(substr(\$birthNumber, 0, 2), 10);
            \$month = intval(substr(\$birthNumber, 2, 2), 10);
            \$day = intval(substr(\$birthNumber, 4, 2), 10);

            // make 4 digit year from 2 digit representation
            \$year += \$year < 54 ? 2000 : 1900;

            // adjust special cases for month
            if (\$month > 50) \$month -= 50;
            if (\$year >= 2004 && \$month > 20) \$month -= 20;

            \$this->assertTrue(checkdate(\$month, \$day, \$year), \"Birth number \$birthNumber: date \$year/\$month/\$day is invalid.\");

            // check CRC if presented
            if (strlen(\$birthNumber) == 10) {
                \$crc = intval(substr(\$birthNumber, -1), 10);
                \$refCrc = intval(substr(\$birthNumber, 0, -1), 10) % 11;
                if (\$refCrc == 10) {
                    \$refCrc = 0;
                }
                \$this->assertEquals(\$crc, \$refCrc, \"Birth number \$birthNumber: checksum \$crc doesn't match expected \$refCrc.\");
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/cs_CZ/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\cs_CZ;

use Faker\\Generator;
use Faker\\Provider\\cs_CZ\\Person;
use Faker\\Provider\\Miscellaneous;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function testBirthNumber()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new Miscellaneous(\$faker));

        for (\$i = 0; \$i < 1000; \$i++) {
            \$birthNumber = \$faker->birthNumber();
            \$birthNumber = str_replace('/', '', \$birthNumber);

            // check date
            \$year = intval(substr(\$birthNumber, 0, 2), 10);
            \$month = intval(substr(\$birthNumber, 2, 2), 10);
            \$day = intval(substr(\$birthNumber, 4, 2), 10);

            // make 4 digit year from 2 digit representation
            \$year += \$year < 54 ? 2000 : 1900;

            // adjust special cases for month
            if (\$month > 50) \$month -= 50;
            if (\$year >= 2004 && \$month > 20) \$month -= 20;

            \$this->assertTrue(checkdate(\$month, \$day, \$year), \"Birth number \$birthNumber: date \$year/\$month/\$day is invalid.\");

            // check CRC if presented
            if (strlen(\$birthNumber) == 10) {
                \$crc = intval(substr(\$birthNumber, -1), 10);
                \$refCrc = intval(substr(\$birthNumber, 0, -1), 10) % 11;
                if (\$refCrc == 10) {
                    \$refCrc = 0;
                }
                \$this->assertEquals(\$crc, \$refCrc, \"Birth number \$birthNumber: checksum \$crc doesn't match expected \$refCrc.\");
            }
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/cs_CZ/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/cs_CZ/PersonTest.php");
    }
}
