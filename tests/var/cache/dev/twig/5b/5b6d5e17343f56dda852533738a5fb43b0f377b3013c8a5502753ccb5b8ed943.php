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

/* vendor/fzaninotto/faker/test/Faker/Provider/MiscellaneousTest.php */
class __TwigTemplate_f57d92cb0cabe0d481616e26ddeffa99de2e2963414b9920540d4d76fd754d91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/MiscellaneousTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/MiscellaneousTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Miscellaneous;
use PHPUnit\\Framework\\TestCase;

class MiscellaneousTest extends TestCase
{
    public function testBoolean()
    {
        \$this->assertContains(Miscellaneous::boolean(), array(true, false));
    }

    public function testMd5()
    {
        \$this->assertRegExp('/^[a-z0-9]{32}\$/', Miscellaneous::md5());
    }

    public function testSha1()
    {
        \$this->assertRegExp('/^[a-z0-9]{40}\$/', Miscellaneous::sha1());
    }

    public function testSha256()
    {
        \$this->assertRegExp('/^[a-z0-9]{64}\$/', Miscellaneous::sha256());
    }

    public function testLocale()
    {
        \$this->assertRegExp('/^[a-z]{2,3}_[A-Z]{2}\$/', Miscellaneous::locale());
    }

    public function testCountryCode()
    {
        \$this->assertRegExp('/^[A-Z]{2}\$/', Miscellaneous::countryCode());
    }

    public function testCountryISOAlpha3()
    {
        \$this->assertRegExp('/^[A-Z]{3}\$/', Miscellaneous::countryISOAlpha3());
    }

    public function testLanguage()
    {
        \$this->assertRegExp('/^[a-z]{2}\$/', Miscellaneous::languageCode());
    }

    public function testCurrencyCode()
    {
        \$this->assertRegExp('/^[A-Z]{3}\$/', Miscellaneous::currencyCode());
    }

    public function testEmoji()
    {
        \$this->assertRegExp('/^[\\x{1F600}-\\x{1F637}]\$/u', Miscellaneous::emoji());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/MiscellaneousTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Miscellaneous;
use PHPUnit\\Framework\\TestCase;

class MiscellaneousTest extends TestCase
{
    public function testBoolean()
    {
        \$this->assertContains(Miscellaneous::boolean(), array(true, false));
    }

    public function testMd5()
    {
        \$this->assertRegExp('/^[a-z0-9]{32}\$/', Miscellaneous::md5());
    }

    public function testSha1()
    {
        \$this->assertRegExp('/^[a-z0-9]{40}\$/', Miscellaneous::sha1());
    }

    public function testSha256()
    {
        \$this->assertRegExp('/^[a-z0-9]{64}\$/', Miscellaneous::sha256());
    }

    public function testLocale()
    {
        \$this->assertRegExp('/^[a-z]{2,3}_[A-Z]{2}\$/', Miscellaneous::locale());
    }

    public function testCountryCode()
    {
        \$this->assertRegExp('/^[A-Z]{2}\$/', Miscellaneous::countryCode());
    }

    public function testCountryISOAlpha3()
    {
        \$this->assertRegExp('/^[A-Z]{3}\$/', Miscellaneous::countryISOAlpha3());
    }

    public function testLanguage()
    {
        \$this->assertRegExp('/^[a-z]{2}\$/', Miscellaneous::languageCode());
    }

    public function testCurrencyCode()
    {
        \$this->assertRegExp('/^[A-Z]{3}\$/', Miscellaneous::currencyCode());
    }

    public function testEmoji()
    {
        \$this->assertRegExp('/^[\\x{1F600}-\\x{1F637}]\$/u', Miscellaneous::emoji());
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/MiscellaneousTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/MiscellaneousTest.php");
    }
}
