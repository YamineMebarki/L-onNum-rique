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

/* vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PaymentTest.php */
class __TwigTemplate_93784ac875a80a245ab3e81749f80d7b5d7334cc5e8c07e24406b9514aa7af99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PaymentTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PaymentTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\es_ES;

use Faker\\Generator;
use Faker\\Provider\\es_ES\\Payment;
use PHPUnit\\Framework\\TestCase;

class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Payment(\$faker));
        \$this->faker = \$faker;
    }

    public function testVAT()
    {
        \$vat = \$this->faker->vat();

        \$this->assertTrue(\$this->isValidCIF(\$vat));
    }

    /**
     * Validation taken from https://github.com/amnesty/drupal-nif-nie-cif-validator/
     * @link https://github.com/amnesty/drupal-nif-nie-cif-validator/blob/master/includes/nif-nie-cif.php
     */
    function isValidCIF(\$docNumber)
    {
        \$fixedDocNumber = strtoupper(\$docNumber);

        return \$this->isValidCIFFormat(\$fixedDocNumber);
    }

    function isValidCIFFormat(\$docNumber)
    {
        return \$this->respectsDocPattern(\$docNumber, '/^[PQSNWR][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/')
                ||
               \$this->respectsDocPattern(\$docNumber, '/^[ABCDEFGHJUV][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/');
    }

    function respectsDocPattern(\$givenString, \$pattern)
    {
        \$isValid = FALSE;
        \$fixedString = strtoupper(\$givenString);
        if (is_int(substr(\$fixedString, 0, 1))) {
            \$fixedString = substr(\"000000000\" . \$givenString, -9);
        }
        if (preg_match(\$pattern, \$fixedString)) {
            \$isValid = TRUE;
        }
        return \$isValid;
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PaymentTest.php";
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
use Faker\\Provider\\es_ES\\Payment;
use PHPUnit\\Framework\\TestCase;

class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Payment(\$faker));
        \$this->faker = \$faker;
    }

    public function testVAT()
    {
        \$vat = \$this->faker->vat();

        \$this->assertTrue(\$this->isValidCIF(\$vat));
    }

    /**
     * Validation taken from https://github.com/amnesty/drupal-nif-nie-cif-validator/
     * @link https://github.com/amnesty/drupal-nif-nie-cif-validator/blob/master/includes/nif-nie-cif.php
     */
    function isValidCIF(\$docNumber)
    {
        \$fixedDocNumber = strtoupper(\$docNumber);

        return \$this->isValidCIFFormat(\$fixedDocNumber);
    }

    function isValidCIFFormat(\$docNumber)
    {
        return \$this->respectsDocPattern(\$docNumber, '/^[PQSNWR][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/')
                ||
               \$this->respectsDocPattern(\$docNumber, '/^[ABCDEFGHJUV][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/');
    }

    function respectsDocPattern(\$givenString, \$pattern)
    {
        \$isValid = FALSE;
        \$fixedString = strtoupper(\$givenString);
        if (is_int(substr(\$fixedString, 0, 1))) {
            \$fixedString = substr(\"000000000\" . \$givenString, -9);
        }
        if (preg_match(\$pattern, \$fixedString)) {
            \$isValid = TRUE;
        }
        return \$isValid;
    }

}
", "vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PaymentTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/es_ES/PaymentTest.php");
    }
}
