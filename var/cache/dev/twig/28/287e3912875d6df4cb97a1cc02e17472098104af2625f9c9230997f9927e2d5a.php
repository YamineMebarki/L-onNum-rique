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

/* vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/PersonTest.php */
class __TwigTemplate_2ed0713bfbb438c5861ffdabbc9526fbba15be666b6c05cd1d598586e827e404 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\pt_PT;

use Faker\\Generator;
use Faker\\Provider\\pt_PT\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testTaxpayerIdentificationNumberIsValid()
    {
        \$tin = \$this->faker->taxpayerIdentificationNumber();
        \$this->assertTrue(\$this->isValidTin(\$tin), \$tin);
    }

    /**
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     *
     * @param type \$tin
     *
     * @return boolean
     */
    public static function isValidTin(\$tin)
    {
        \$regex = '(([1,2,3,5,6,8]{1}[0-9]{8})|((45)|(70)|(71)|(72)|(77)|(79)|(90|(98|(99))))[0-9]{7})';
        if (is_null(\$tin) || !is_numeric(\$tin) || !strlen(\$tin) == 9 || preg_match(\"/\$regex/\", \$tin) !== 1) {
            return false;
        }
        \$n = str_split(\$tin);
        // cd - Control Digit
        \$cd = (\$n[0] * 9 + \$n[1] * 8 + \$n[2] * 7 + \$n[3] * 6 + \$n[4] * 5 + \$n[5] * 4 + \$n[6] * 3 + \$n[7] * 2) % 11;
        if (\$cd === 0 || \$cd === 1) {
            \$cd = 0;
        } else {
            \$cd = 11 - \$cd;
        }
        if (\$cd === intval(\$n[8])) {
            return true;
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
        return "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/PersonTest.php";
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
use Faker\\Provider\\pt_PT\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testTaxpayerIdentificationNumberIsValid()
    {
        \$tin = \$this->faker->taxpayerIdentificationNumber();
        \$this->assertTrue(\$this->isValidTin(\$tin), \$tin);
    }

    /**
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     *
     * @param type \$tin
     *
     * @return boolean
     */
    public static function isValidTin(\$tin)
    {
        \$regex = '(([1,2,3,5,6,8]{1}[0-9]{8})|((45)|(70)|(71)|(72)|(77)|(79)|(90|(98|(99))))[0-9]{7})';
        if (is_null(\$tin) || !is_numeric(\$tin) || !strlen(\$tin) == 9 || preg_match(\"/\$regex/\", \$tin) !== 1) {
            return false;
        }
        \$n = str_split(\$tin);
        // cd - Control Digit
        \$cd = (\$n[0] * 9 + \$n[1] * 8 + \$n[2] * 7 + \$n[3] * 6 + \$n[4] * 5 + \$n[5] * 4 + \$n[6] * 3 + \$n[7] * 2) % 11;
        if (\$cd === 0 || \$cd === 1) {
            \$cd = 0;
        } else {
            \$cd = 11 - \$cd;
        }
        if (\$cd === intval(\$n[8])) {
            return true;
        }

        return false;
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/pt_PT/PersonTest.php");
    }
}
