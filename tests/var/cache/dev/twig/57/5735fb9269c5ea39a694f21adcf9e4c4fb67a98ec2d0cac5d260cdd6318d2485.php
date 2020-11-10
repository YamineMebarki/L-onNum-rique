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

/* vendor/fzaninotto/faker/test/Faker/Provider/UserAgentTest.php */
class __TwigTemplate_ba67ba637bc031b7f697dfe1b0c22d379f078a1c5ac17214cf3b9723031f0317 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/UserAgentTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/UserAgentTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\UserAgent;
use PHPUnit\\Framework\\TestCase;

class UserAgentTest extends TestCase
{
    public function testRandomUserAgent()
    {
        \$this->assertNotNull(UserAgent::userAgent());
    }

    public function testFirefoxUserAgent()
    {
        \$this->stringContains(' Firefox/', UserAgent::firefox());
    }

    public function testSafariUserAgent()
    {
        \$this->stringContains('Safari/', UserAgent::safari());
    }

    public function testInternetExplorerUserAgent()
    {
        \$this->assertStringStartsWith('Mozilla/5.0 (compatible; MSIE ', UserAgent::internetExplorer());
    }

    public function testOperaUserAgent()
    {
        \$this->assertStringStartsWith('Opera/', UserAgent::opera());
    }

    public function testChromeUserAgent()
    {
        \$this->stringContains('(KHTML, like Gecko) Chrome/', UserAgent::chrome());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/UserAgentTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\UserAgent;
use PHPUnit\\Framework\\TestCase;

class UserAgentTest extends TestCase
{
    public function testRandomUserAgent()
    {
        \$this->assertNotNull(UserAgent::userAgent());
    }

    public function testFirefoxUserAgent()
    {
        \$this->stringContains(' Firefox/', UserAgent::firefox());
    }

    public function testSafariUserAgent()
    {
        \$this->stringContains('Safari/', UserAgent::safari());
    }

    public function testInternetExplorerUserAgent()
    {
        \$this->assertStringStartsWith('Mozilla/5.0 (compatible; MSIE ', UserAgent::internetExplorer());
    }

    public function testOperaUserAgent()
    {
        \$this->assertStringStartsWith('Opera/', UserAgent::opera());
    }

    public function testChromeUserAgent()
    {
        \$this->stringContains('(KHTML, like Gecko) Chrome/', UserAgent::chrome());
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/UserAgentTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/UserAgentTest.php");
    }
}
