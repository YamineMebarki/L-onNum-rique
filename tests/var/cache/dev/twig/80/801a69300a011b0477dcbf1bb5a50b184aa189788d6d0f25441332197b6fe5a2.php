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

/* vendor/fzaninotto/faker/test/Faker/Provider/es_VE/PersonTest.php */
class __TwigTemplate_406476e3478442b90029714d37124f35c6b94dfec01d076e7bb11a90d25eee98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/es_VE/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/es_VE/PersonTest.php"));

        // line 1
        echo "<?php
/**
 * Created by Domingo Oropeza for Faker
 * Date: 01/09/2017
 * Time: 11:02 PM
 */

namespace Faker\\Test\\Provider\\es_VE;

use Faker\\Generator;
use Faker\\Provider\\es_VE\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->seed(1);
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * national Id format validator
     */
    public function testNationalId()
    {
        \$pattern = '/(?:^V-?\\d{5,9}\$)|(?:^E-?\\d{8,9}\$)/';

        \$cedula = \$this->faker->nationalId;
        \$this->assertRegExp(\$pattern, \$cedula);

        \$cedula = \$this->faker->nationalId('-');
        \$this->assertRegExp(\$pattern, \$cedula);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/es_VE/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Created by Domingo Oropeza for Faker
 * Date: 01/09/2017
 * Time: 11:02 PM
 */

namespace Faker\\Test\\Provider\\es_VE;

use Faker\\Generator;
use Faker\\Provider\\es_VE\\Person;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->seed(1);
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * national Id format validator
     */
    public function testNationalId()
    {
        \$pattern = '/(?:^V-?\\d{5,9}\$)|(?:^E-?\\d{8,9}\$)/';

        \$cedula = \$this->faker->nationalId;
        \$this->assertRegExp(\$pattern, \$cedula);

        \$cedula = \$this->faker->nationalId('-');
        \$this->assertRegExp(\$pattern, \$cedula);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/es_VE/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/es_VE/PersonTest.php");
    }
}
