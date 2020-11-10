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

/* vendor/fzaninotto/faker/test/Faker/Provider/LocalizationTest.php */
class __TwigTemplate_4338bc1d23bb8baab21d6861b2de236d783f3bc3de44be15e0a8333279324ec9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/LocalizationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/LocalizationTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Factory;
use PHPUnit\\Framework\\TestCase;

class LocalizationTest extends TestCase
{
    public function testLocalizedNameProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Person.php') as \$localizedPerson) {
            preg_match('#/([a-zA-Z_]+)/Person\\.php#', \$localizedPerson, \$matches);
            \$faker = Factory::create(\$matches[1]);
            \$this->assertNotNull(\$faker->name(), 'Localized Name Provider ' . \$matches[1] . ' does not throw errors');
        }
    }

    public function testLocalizedAddressProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Address.php') as \$localizedAddress) {
            preg_match('#/([a-zA-Z_]+)/Address\\.php#', \$localizedAddress, \$matches);
            \$faker = Factory::create(\$matches[1]);
            \$this->assertNotNull(\$faker->address(), 'Localized Address Provider ' . \$matches[1] . ' does not throw errors');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/LocalizationTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Factory;
use PHPUnit\\Framework\\TestCase;

class LocalizationTest extends TestCase
{
    public function testLocalizedNameProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Person.php') as \$localizedPerson) {
            preg_match('#/([a-zA-Z_]+)/Person\\.php#', \$localizedPerson, \$matches);
            \$faker = Factory::create(\$matches[1]);
            \$this->assertNotNull(\$faker->name(), 'Localized Name Provider ' . \$matches[1] . ' does not throw errors');
        }
    }

    public function testLocalizedAddressProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Address.php') as \$localizedAddress) {
            preg_match('#/([a-zA-Z_]+)/Address\\.php#', \$localizedAddress, \$matches);
            \$faker = Factory::create(\$matches[1]);
            \$this->assertNotNull(\$faker->address(), 'Localized Address Provider ' . \$matches[1] . ' does not throw errors');
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/LocalizationTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/LocalizationTest.php");
    }
}
