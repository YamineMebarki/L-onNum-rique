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

/* vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/CompanyTest.php */
class __TwigTemplate_5175e3e7dcde1b876813bf4cee139c0e3d51ba2662168b6190848e2816f85517 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/CompanyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/CompanyTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Calculator\\Luhn;
use Faker\\Generator;
use Faker\\Provider\\fr_FR\\Company;
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

    public function testSiretReturnsAValidSiret()
    {
        \$siret = \$this->faker->siret(false);
        \$this->assertRegExp(\"/^\\d{14}\$/\", \$siret);
        \$this->assertTrue(Luhn::isValid(\$siret));
    }

    public function testSiretReturnsAWellFormattedSiret()
    {
        \$siret = \$this->faker->siret();
        \$this->assertRegExp(\"/^\\d{3}\\s\\d{3}\\s\\d{3}\\s\\d{5}\$/\", \$siret);
        \$siret = str_replace(' ', '', \$siret);
        \$this->assertTrue(Luhn::isValid(\$siret));
    }

    public function testSirenReturnsAValidSiren()
    {
        \$siren = \$this->faker->siren(false);
        \$this->assertRegExp(\"/^\\d{9}\$/\", \$siren);
        \$this->assertTrue(Luhn::isValid(\$siren));
    }

    public function testSirenReturnsAWellFormattedSiren()
    {
        \$siren = \$this->faker->siren();
        \$this->assertRegExp(\"/^\\d{3}\\s\\d{3}\\s\\d{3}\$/\", \$siren);
        \$siren = str_replace(' ', '', \$siren);
        \$this->assertTrue(Luhn::isValid(\$siren));
    }

    public function testCatchPhraseReturnsValidCatchPhrase()
    {
        \$this->assertTrue(TestableCompany::isCatchPhraseValid(\$this->faker->catchPhrase()));
    }

    public function testIsCatchPhraseValidReturnsFalseWhenAWordsAppearsTwice()
    {
        \$isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute sécurité');
        \$this->assertFalse(\$isCatchPhraseValid);
    }

    public function testIsCatchPhraseValidReturnsTrueWhenNoWordAppearsTwice()
    {
        \$isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute simplicité');
        \$this->assertTrue(\$isCatchPhraseValid);
    }
}

class TestableCompany extends Company
{
    public static function isCatchPhraseValid(\$catchPhrase)
    {
        return parent::isCatchPhraseValid(\$catchPhrase);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/CompanyTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\fr_FR;

use Faker\\Calculator\\Luhn;
use Faker\\Generator;
use Faker\\Provider\\fr_FR\\Company;
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

    public function testSiretReturnsAValidSiret()
    {
        \$siret = \$this->faker->siret(false);
        \$this->assertRegExp(\"/^\\d{14}\$/\", \$siret);
        \$this->assertTrue(Luhn::isValid(\$siret));
    }

    public function testSiretReturnsAWellFormattedSiret()
    {
        \$siret = \$this->faker->siret();
        \$this->assertRegExp(\"/^\\d{3}\\s\\d{3}\\s\\d{3}\\s\\d{5}\$/\", \$siret);
        \$siret = str_replace(' ', '', \$siret);
        \$this->assertTrue(Luhn::isValid(\$siret));
    }

    public function testSirenReturnsAValidSiren()
    {
        \$siren = \$this->faker->siren(false);
        \$this->assertRegExp(\"/^\\d{9}\$/\", \$siren);
        \$this->assertTrue(Luhn::isValid(\$siren));
    }

    public function testSirenReturnsAWellFormattedSiren()
    {
        \$siren = \$this->faker->siren();
        \$this->assertRegExp(\"/^\\d{3}\\s\\d{3}\\s\\d{3}\$/\", \$siren);
        \$siren = str_replace(' ', '', \$siren);
        \$this->assertTrue(Luhn::isValid(\$siren));
    }

    public function testCatchPhraseReturnsValidCatchPhrase()
    {
        \$this->assertTrue(TestableCompany::isCatchPhraseValid(\$this->faker->catchPhrase()));
    }

    public function testIsCatchPhraseValidReturnsFalseWhenAWordsAppearsTwice()
    {
        \$isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute sécurité');
        \$this->assertFalse(\$isCatchPhraseValid);
    }

    public function testIsCatchPhraseValidReturnsTrueWhenNoWordAppearsTwice()
    {
        \$isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute simplicité');
        \$this->assertTrue(\$isCatchPhraseValid);
    }
}

class TestableCompany extends Company
{
    public static function isCatchPhraseValid(\$catchPhrase)
    {
        return parent::isCatchPhraseValid(\$catchPhrase);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/CompanyTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/fr_FR/CompanyTest.php");
    }
}
