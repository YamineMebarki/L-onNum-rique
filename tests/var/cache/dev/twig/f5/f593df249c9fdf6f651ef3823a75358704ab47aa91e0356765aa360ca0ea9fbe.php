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

/* vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/CompanyTest.php */
class __TwigTemplate_d566958eca400919d287567c4a2bb8f5f04135b53f9de42dce9ed6124212df01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/CompanyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/CompanyTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\nl_NL;

use Faker\\Generator;
use Faker\\Provider\\nl_NL\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function testGenerateValidVatNumber()
    {
        \$vatNo = \$this->faker->vat();

        \$this->assertEquals(14, strlen(\$vatNo));
        \$this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}\$/', \$vatNo);
    }

    public function testGenerateValidBtwNumberAlias()
    {
        \$btwNo = \$this->faker->btw();

        \$this->assertEquals(14, strlen(\$btwNo));
        \$this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}\$/', \$btwNo);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/CompanyTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\nl_NL;

use Faker\\Generator;
use Faker\\Provider\\nl_NL\\Company;
use PHPUnit\\Framework\\TestCase;

class CompanyTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function testGenerateValidVatNumber()
    {
        \$vatNo = \$this->faker->vat();

        \$this->assertEquals(14, strlen(\$vatNo));
        \$this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}\$/', \$vatNo);
    }

    public function testGenerateValidBtwNumberAlias()
    {
        \$btwNo = \$this->faker->btw();

        \$this->assertEquals(14, strlen(\$btwNo));
        \$this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}\$/', \$btwNo);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/CompanyTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/CompanyTest.php");
    }
}
