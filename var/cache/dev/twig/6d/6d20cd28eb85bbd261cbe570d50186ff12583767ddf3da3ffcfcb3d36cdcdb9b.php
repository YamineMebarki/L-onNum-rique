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

/* vendor/fzaninotto/faker/test/Faker/Provider/en_US/CompanyTest.php */
class __TwigTemplate_71df8217dc0ff3791348ece20c0d5a610d429b9a7915712141211ca644b13a7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/CompanyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/CompanyTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\en_US;

use Faker\\Provider\\en_US\\Company;
use Faker\\Generator;

class CompanyTest extends \\PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @link https://stackoverflow.com/questions/4242433/regex-for-ein-number-and-ssn-number-format-in-jquery/35471665#35471665
     */
    public function testEin()
    {
        \$number = \$this->faker->ein;

        // should be in the format ##-#######, with a valid prefix
        \$this->assertRegExp('/^(0[1-6]||1[0-6]|2[0-7]|[35]\\d|[468][0-8]|7[1-7]|9[0-58-9])-\\d{7}\$/', \$number);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/en_US/CompanyTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\en_US;

use Faker\\Provider\\en_US\\Company;
use Faker\\Generator;

class CompanyTest extends \\PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @link https://stackoverflow.com/questions/4242433/regex-for-ein-number-and-ssn-number-format-in-jquery/35471665#35471665
     */
    public function testEin()
    {
        \$number = \$this->faker->ein;

        // should be in the format ##-#######, with a valid prefix
        \$this->assertRegExp('/^(0[1-6]||1[0-6]|2[0-7]|[35]\\d|[468][0-8]|7[1-7]|9[0-58-9])-\\d{7}\$/', \$number);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/en_US/CompanyTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/en_US/CompanyTest.php");
    }
}
