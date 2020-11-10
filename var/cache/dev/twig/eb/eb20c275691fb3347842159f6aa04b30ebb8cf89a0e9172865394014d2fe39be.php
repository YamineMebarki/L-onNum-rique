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

/* vendor/fzaninotto/faker/test/Faker/Provider/PersonTest.php */
class __TwigTemplate_3482d3052cd88a032fa01c0f51d901d3a954994632774ad9cc4e9526dbb0f0cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/PersonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/PersonTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Person;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    /**
     * @dataProvider firstNameProvider
     */
    public function testFirstName(\$gender, \$expected)
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertContains(\$faker->firstName(\$gender), \$expected);
    }

    public function firstNameProvider()
    {
        return array(
            array(null, array('John', 'Jane')),
            array('foobar', array('John', 'Jane')),
            array('male', array('John')),
            array('female', array('Jane')),
        );
    }

    public function testFirstNameMale()
    {
        \$this->assertContains(Person::firstNameMale(), array('John'));
    }

    public function testFirstNameFemale()
    {
        \$this->assertContains(Person::firstNameFemale(), array('Jane'));
    }

    /**
     * @dataProvider titleProvider
     */
    public function testTitle(\$gender, \$expected)
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertContains(\$faker->title(\$gender), \$expected);
    }

    public function titleProvider()
    {
        return array(
            array(null, array('Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
            array('foobar', array('Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
            array('male', array('Mr.', 'Dr.', 'Prof.')),
            array('female', array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
        );
    }

    public function testTitleMale()
    {
        \$this->assertContains(Person::titleMale(), array('Mr.', 'Dr.', 'Prof.'));
    }

    public function testTitleFemale()
    {
        \$this->assertContains(Person::titleFemale(), array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.'));
    }

    public function testLastNameReturnsDoe()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertEquals(\$faker->lastName(), 'Doe');
    }

    public function testNameReturnsFirstNameAndLastName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertContains(\$faker->name(), array('John Doe', 'Jane Doe'));
        \$this->assertContains(\$faker->name('foobar'), array('John Doe', 'Jane Doe'));
        \$this->assertContains(\$faker->name('male'), array('John Doe'));
        \$this->assertContains(\$faker->name('female'), array('Jane Doe'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/PersonTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Person;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class PersonTest extends TestCase
{
    /**
     * @dataProvider firstNameProvider
     */
    public function testFirstName(\$gender, \$expected)
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertContains(\$faker->firstName(\$gender), \$expected);
    }

    public function firstNameProvider()
    {
        return array(
            array(null, array('John', 'Jane')),
            array('foobar', array('John', 'Jane')),
            array('male', array('John')),
            array('female', array('Jane')),
        );
    }

    public function testFirstNameMale()
    {
        \$this->assertContains(Person::firstNameMale(), array('John'));
    }

    public function testFirstNameFemale()
    {
        \$this->assertContains(Person::firstNameFemale(), array('Jane'));
    }

    /**
     * @dataProvider titleProvider
     */
    public function testTitle(\$gender, \$expected)
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertContains(\$faker->title(\$gender), \$expected);
    }

    public function titleProvider()
    {
        return array(
            array(null, array('Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
            array('foobar', array('Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
            array('male', array('Mr.', 'Dr.', 'Prof.')),
            array('female', array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
        );
    }

    public function testTitleMale()
    {
        \$this->assertContains(Person::titleMale(), array('Mr.', 'Dr.', 'Prof.'));
    }

    public function testTitleFemale()
    {
        \$this->assertContains(Person::titleFemale(), array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.'));
    }

    public function testLastNameReturnsDoe()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertEquals(\$faker->lastName(), 'Doe');
    }

    public function testNameReturnsFirstNameAndLastName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Person(\$faker));
        \$this->assertContains(\$faker->name(), array('John Doe', 'Jane Doe'));
        \$this->assertContains(\$faker->name('foobar'), array('John Doe', 'Jane Doe'));
        \$this->assertContains(\$faker->name('male'), array('John Doe'));
        \$this->assertContains(\$faker->name('female'), array('Jane Doe'));
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/PersonTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/PersonTest.php");
    }
}
