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

/* vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PersonTest.php */
class __TwigTemplate_5bd5df04d9753efead4281f6ed13ec7f19050cd1121b001dd136fcc661c24c8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\es_ES;

use Faker\\Generator;
use Faker\\Provider\\es_ES\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->seed(1);
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testDNI()
    {
        \$dni = \$this->faker->dni;
        \$this->assertTrue(\$this->isValidDNI(\$dni));
    }

    // validation taken from http://kiwwito.com/php-function-for-spanish-dni-nie-validation/
    public function isValidDNI(\$string)
    {
        if (strlen(\$string) != 9 ||
            preg_match('/^[XYZ]?([0-9]{7,8})([A-Z])\$/i', \$string, \$matches) !== 1) {
            return false;
        }

        \$map = 'TRWAGMYFPDXBNJZSQVHLCKE';

        list(, \$number, \$letter) = \$matches;

        return strtoupper(\$letter) === \$map[((int) \$number) % 23];
    }

    public function testLicenceCode()
    {
        \$validLicenceCodes = array('AM', 'A1', 'A2', 'A','B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E');

        \$this->assertContains(\$this->faker->licenceCode, \$validLicenceCodes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\es_ES;

use Faker\\Generator;
use Faker\\Provider\\es_ES\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->seed(1);
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testDNI()
    {
        \$dni = \$this->faker->dni;
        \$this->assertTrue(\$this->isValidDNI(\$dni));
    }

    // validation taken from http://kiwwito.com/php-function-for-spanish-dni-nie-validation/
    public function isValidDNI(\$string)
    {
        if (strlen(\$string) != 9 ||
            preg_match('/^[XYZ]?([0-9]{7,8})([A-Z])\$/i', \$string, \$matches) !== 1) {
            return false;
        }

        \$map = 'TRWAGMYFPDXBNJZSQVHLCKE';

        list(, \$number, \$letter) = \$matches;

        return strtoupper(\$letter) === \$map[((int) \$number) % 23];
    }

    public function testLicenceCode()
    {
        \$validLicenceCodes = array('AM', 'A1', 'A2', 'A','B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E');

        \$this->assertContains(\$this->faker->licenceCode, \$validLicenceCodes);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PersonTest.php");
    }
}
