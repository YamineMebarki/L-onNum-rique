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

/* vendor/fzaninotto/faker/test/Faker/Provider/BiasedTest.php */
class __TwigTemplate_08af2877d99e612a3342b8091707d50cc632371465136630a4c30a04f89f6e6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/BiasedTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/BiasedTest.php"));

        // line 1
        echo "<?php
namespace Faker\\Test\\Provider;

use Faker\\Provider\\Biased;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class BiasedTest extends TestCase
{
    const MAX = 10;
    const NUMBERS = 25000;
    protected \$generator;
    protected \$results = array();

    protected function setUp()
    {
        \$this->generator = new Generator();
        \$this->generator->addProvider(new Biased(\$this->generator));

        \$this->results = array_fill(1, self::MAX, 0);
    }

    public function performFake(\$function)
    {
        for(\$i = 0; \$i < self::NUMBERS; \$i++) {
            \$this->results[\$this->generator->biasedNumberBetween(1, self::MAX, \$function)]++;
        }
    }

    public function testUnbiased()
    {
        \$this->performFake(array('\\Faker\\Provider\\Biased', 'unbiased'));

        // assert that all numbers are near the expected unbiased value
        foreach (\$this->results as \$number => \$amount) {
            // integral
            \$assumed = (1 / self::MAX * \$number) - (1 / self::MAX * (\$number - 1));
            // calculate the fraction of the whole area
            \$assumed /= 1;
            \$this->assertGreaterThan(self::NUMBERS * \$assumed * .95, \$amount, \"Value was more than 5 percent under the expected value\");
            \$this->assertLessThan(self::NUMBERS * \$assumed * 1.05, \$amount, \"Value was more than 5 percent over the expected value\");
        }
    }

    public function testLinearHigh()
    {
        \$this->performFake(array('\\Faker\\Provider\\Biased', 'linearHigh'));

        foreach (\$this->results as \$number => \$amount) {
            // integral
            \$assumed = 0.5 * pow(1 / self::MAX * \$number, 2) - 0.5 * pow(1 / self::MAX * (\$number - 1), 2);
            // calculate the fraction of the whole area
            \$assumed /= pow(1, 2) * .5;
            \$this->assertGreaterThan(self::NUMBERS * \$assumed * .9, \$amount, \"Value was more than 10 percent under the expected value\");
            \$this->assertLessThan(self::NUMBERS * \$assumed * 1.1, \$amount, \"Value was more than 10 percent over the expected value\");
        }
    }

    public function testLinearLow()
    {
        \$this->performFake(array('\\Faker\\Provider\\Biased', 'linearLow'));

        foreach (\$this->results as \$number => \$amount) {
            // integral
            \$assumed = -0.5 * pow(1 / self::MAX * \$number, 2) - -0.5 * pow(1 / self::MAX * (\$number - 1), 2);
            // shift the graph up
            \$assumed += 1 / self::MAX;
            // calculate the fraction of the whole area
            \$assumed /= pow(1, 2) * .5;
            \$this->assertGreaterThan(self::NUMBERS * \$assumed * .9, \$amount, \"Value was more than 10 percent under the expected value\");
            \$this->assertLessThan(self::NUMBERS * \$assumed * 1.1, \$amount, \"Value was more than 10 percent over the expected value\");
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/BiasedTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Test\\Provider;

use Faker\\Provider\\Biased;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class BiasedTest extends TestCase
{
    const MAX = 10;
    const NUMBERS = 25000;
    protected \$generator;
    protected \$results = array();

    protected function setUp()
    {
        \$this->generator = new Generator();
        \$this->generator->addProvider(new Biased(\$this->generator));

        \$this->results = array_fill(1, self::MAX, 0);
    }

    public function performFake(\$function)
    {
        for(\$i = 0; \$i < self::NUMBERS; \$i++) {
            \$this->results[\$this->generator->biasedNumberBetween(1, self::MAX, \$function)]++;
        }
    }

    public function testUnbiased()
    {
        \$this->performFake(array('\\Faker\\Provider\\Biased', 'unbiased'));

        // assert that all numbers are near the expected unbiased value
        foreach (\$this->results as \$number => \$amount) {
            // integral
            \$assumed = (1 / self::MAX * \$number) - (1 / self::MAX * (\$number - 1));
            // calculate the fraction of the whole area
            \$assumed /= 1;
            \$this->assertGreaterThan(self::NUMBERS * \$assumed * .95, \$amount, \"Value was more than 5 percent under the expected value\");
            \$this->assertLessThan(self::NUMBERS * \$assumed * 1.05, \$amount, \"Value was more than 5 percent over the expected value\");
        }
    }

    public function testLinearHigh()
    {
        \$this->performFake(array('\\Faker\\Provider\\Biased', 'linearHigh'));

        foreach (\$this->results as \$number => \$amount) {
            // integral
            \$assumed = 0.5 * pow(1 / self::MAX * \$number, 2) - 0.5 * pow(1 / self::MAX * (\$number - 1), 2);
            // calculate the fraction of the whole area
            \$assumed /= pow(1, 2) * .5;
            \$this->assertGreaterThan(self::NUMBERS * \$assumed * .9, \$amount, \"Value was more than 10 percent under the expected value\");
            \$this->assertLessThan(self::NUMBERS * \$assumed * 1.1, \$amount, \"Value was more than 10 percent over the expected value\");
        }
    }

    public function testLinearLow()
    {
        \$this->performFake(array('\\Faker\\Provider\\Biased', 'linearLow'));

        foreach (\$this->results as \$number => \$amount) {
            // integral
            \$assumed = -0.5 * pow(1 / self::MAX * \$number, 2) - -0.5 * pow(1 / self::MAX * (\$number - 1), 2);
            // shift the graph up
            \$assumed += 1 / self::MAX;
            // calculate the fraction of the whole area
            \$assumed /= pow(1, 2) * .5;
            \$this->assertGreaterThan(self::NUMBERS * \$assumed * .9, \$amount, \"Value was more than 10 percent under the expected value\");
            \$this->assertLessThan(self::NUMBERS * \$assumed * 1.1, \$amount, \"Value was more than 10 percent over the expected value\");
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/BiasedTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/BiasedTest.php");
    }
}
