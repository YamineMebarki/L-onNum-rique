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

/* vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PersonTest.php */
class __TwigTemplate_06f0e64de5946027ecb9df141bc383ce2db03e62ca7a79f80e629869c38fb619 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Generator;
use Faker\\Provider\\fr_FR\\Person;
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

    public function testNIRReturnsTheRightGender()
    {
\t\t\$nir = \$this->faker->nir(\\Faker\\Provider\\Person::GENDER_MALE);
\t\t\$this->assertStringStartsWith('1', \$nir);
    }

\tpublic function testNIRReturnsTheRightPattern()
    {
\t\t\$nir = \$this->faker->nir;
\t\t\$this->assertRegExp(\"/^[12]\\d{5}[0-9A-B]\\d{8}\$/\", \$nir);
\t}

\tpublic function testNIRFormattedReturnsTheRightPattern()
    {
\t\t\$nir = \$this->faker->nir(null, true);
\t\t\$this->assertRegExp(\"/^[12]\\s\\d{2}\\s\\d{2}\\s\\d{1}[0-9A-B]\\s\\d{3}\\s\\d{3}\\s\\d{2}\$/\", \$nir);
\t}
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Generator;
use Faker\\Provider\\fr_FR\\Person;
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

    public function testNIRReturnsTheRightGender()
    {
\t\t\$nir = \$this->faker->nir(\\Faker\\Provider\\Person::GENDER_MALE);
\t\t\$this->assertStringStartsWith('1', \$nir);
    }

\tpublic function testNIRReturnsTheRightPattern()
    {
\t\t\$nir = \$this->faker->nir;
\t\t\$this->assertRegExp(\"/^[12]\\d{5}[0-9A-B]\\d{8}\$/\", \$nir);
\t}

\tpublic function testNIRFormattedReturnsTheRightPattern()
    {
\t\t\$nir = \$this->faker->nir(null, true);
\t\t\$this->assertRegExp(\"/^[12]\\s\\d{2}\\s\\d{2}\\s\\d{1}[0-9A-B]\\s\\d{3}\\s\\d{3}\\s\\d{2}\$/\", \$nir);
\t}
}
", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/PersonTest.php");
    }
}
