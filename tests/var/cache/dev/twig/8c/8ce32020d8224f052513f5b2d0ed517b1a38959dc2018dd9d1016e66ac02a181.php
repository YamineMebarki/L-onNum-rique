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

/* vendor/fzaninotto/faker/test/Faker/Provider/it_IT/PersonTest.php */
class __TwigTemplate_d3ac1329e1ea2a2012b51975990a678b58d5f5e78e9cbc096e2ac69953725377 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/it_IT/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/it_IT/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\it_IT;

use Faker\\Generator;
use Faker\\Provider\\it_IT\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testIfTaxIdCanReturnData()
    {
        \$taxId = \$this->faker->taxId();
        \$this->assertRegExp('/^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]\$/', \$taxId);
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/it_IT/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\it_IT;

use Faker\\Generator;
use Faker\\Provider\\it_IT\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testIfTaxIdCanReturnData()
    {
        \$taxId = \$this->faker->taxId();
        \$this->assertRegExp('/^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]\$/', \$taxId);
    }

}
", "vendor/fzaninotto/faker/test/Faker/Provider/it_IT/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/it_IT/PersonTest.php");
    }
}
