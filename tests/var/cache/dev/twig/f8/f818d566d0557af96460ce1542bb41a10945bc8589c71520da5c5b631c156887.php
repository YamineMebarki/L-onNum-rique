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

/* vendor/fzaninotto/faker/test/Faker/Provider/de_CH/InternetTest.php */
class __TwigTemplate_88c37253ef99d048a29dceeee686a6821341e8cecfcc516a8323583de83fd89f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/de_CH/InternetTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/de_CH/InternetTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\de_CH;

use Faker\\Generator;
use Faker\\Provider\\de_CH\\Person;
use Faker\\Provider\\de_CH\\Internet;
use Faker\\Provider\\de_CH\\Company;
use PHPUnit\\Framework\\TestCase;

class InternetTest extends TestCase
{

    /**
     * @var Faker\\Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new Internet(\$faker));
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @test
     */
    public function emailIsValid()
    {
        \$email = \$this->faker->email();
        \$this->assertNotFalse(filter_var(\$email, FILTER_VALIDATE_EMAIL));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/de_CH/InternetTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\de_CH;

use Faker\\Generator;
use Faker\\Provider\\de_CH\\Person;
use Faker\\Provider\\de_CH\\Internet;
use Faker\\Provider\\de_CH\\Company;
use PHPUnit\\Framework\\TestCase;

class InternetTest extends TestCase
{

    /**
     * @var Faker\\Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new Internet(\$faker));
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @test
     */
    public function emailIsValid()
    {
        \$email = \$this->faker->email();
        \$this->assertNotFalse(filter_var(\$email, FILTER_VALIDATE_EMAIL));
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/de_CH/InternetTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/de_CH/InternetTest.php");
    }
}
