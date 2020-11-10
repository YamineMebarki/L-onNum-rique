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

/* vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/PersonTest.php */
class __TwigTemplate_7597d778dd6e2ee68b75a0c697d5239cdc01a0d42b0374b2f8d90bf83dc8841b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\nl_NL;

use Faker\\Generator;
use Faker\\Provider\\nl_NL\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testGenerateValidIdNumber()
    {
        \$idNumber = \$this->faker->idNumber();
        \$this->assertEquals(9, strlen(\$idNumber));


        \$sum = -1 * \$idNumber % 10;
        for (\$multiplier = 2; \$idNumber > 0; \$multiplier++) {
            \$val = (\$idNumber /= 10) % 10;
            \$sum += \$multiplier * \$val;
        }
        \$this->assertTrue(\$sum != 0 && \$sum % 11 == 0);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/PersonTest.php";
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
use Faker\\Provider\\nl_NL\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    public function testGenerateValidIdNumber()
    {
        \$idNumber = \$this->faker->idNumber();
        \$this->assertEquals(9, strlen(\$idNumber));


        \$sum = -1 * \$idNumber % 10;
        for (\$multiplier = 2; \$idNumber > 0; \$multiplier++) {
            \$val = (\$idNumber /= 10) % 10;
            \$sum += \$multiplier * \$val;
        }
        \$this->assertTrue(\$sum != 0 && \$sum % 11 == 0);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/nl_NL/PersonTest.php");
    }
}
