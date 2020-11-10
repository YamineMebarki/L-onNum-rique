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

/* vendor/fzaninotto/faker/test/Faker/Provider/ms_MY/PersonTest.php */
class __TwigTemplate_5be1364969610414f0b669364bfbdffb5526f04bd7f2f7bcde78d06213d849d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ms_MY/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ms_MY/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\ms_MY;

use Faker\\Generator;
use Faker\\Provider\\ms_MY\\Person;
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
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_identity_card#Structure_of_the_National_Registration_Identity_Card_Number_(NRIC)
     */
    public function testPersonalIdentityCardNumber()
    {
        \$myKadNumber = \$this->faker->myKadNumber;

        \$yy = substr(\$myKadNumber, 0, 2);
        //match any year from 00-99
        \$this->assertRegExp(\"/^[0-9]{2}\$/\", \$yy);

        \$mm = substr(\$myKadNumber, 2, 2);
        //match any month from 01-12
        \$this->assertRegExp(\"/^0[1-9]|1[0-2]\$/\", \$mm);

        \$dd = substr(\$myKadNumber, 4, 2);
        //match any date from 01-31
        \$this->assertRegExp(\"/^0[1-9]|1[0-9]|2[0-9]|3[0-1]\$/\", \$dd);

        \$pb = substr(\$myKadNumber, 6, 2);
        //match any valid place of birth code from 01-59 except 17-20
        \$this->assertRegExp(\"/^(0[1-9]|1[0-6])|(2[1-9]|3[0-9]|4[0-9]|5[0-9])\$/\", \$pb);

        \$nnnn = substr(\$myKadNumber, 8, 4);
        //match any number from 0000-9999
        \$this->assertRegExp(\"/^[0-9]{4}\$/\", \$nnnn);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/ms_MY/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\ms_MY;

use Faker\\Generator;
use Faker\\Provider\\ms_MY\\Person;
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
        \$faker->addProvider(new Person(\$faker));
        \$this->faker = \$faker;
    }

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_identity_card#Structure_of_the_National_Registration_Identity_Card_Number_(NRIC)
     */
    public function testPersonalIdentityCardNumber()
    {
        \$myKadNumber = \$this->faker->myKadNumber;

        \$yy = substr(\$myKadNumber, 0, 2);
        //match any year from 00-99
        \$this->assertRegExp(\"/^[0-9]{2}\$/\", \$yy);

        \$mm = substr(\$myKadNumber, 2, 2);
        //match any month from 01-12
        \$this->assertRegExp(\"/^0[1-9]|1[0-2]\$/\", \$mm);

        \$dd = substr(\$myKadNumber, 4, 2);
        //match any date from 01-31
        \$this->assertRegExp(\"/^0[1-9]|1[0-9]|2[0-9]|3[0-1]\$/\", \$dd);

        \$pb = substr(\$myKadNumber, 6, 2);
        //match any valid place of birth code from 01-59 except 17-20
        \$this->assertRegExp(\"/^(0[1-9]|1[0-6])|(2[1-9]|3[0-9]|4[0-9]|5[0-9])\$/\", \$pb);

        \$nnnn = substr(\$myKadNumber, 8, 4);
        //match any number from 0000-9999
        \$this->assertRegExp(\"/^[0-9]{4}\$/\", \$nnnn);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/ms_MY/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/ms_MY/PersonTest.php");
    }
}
