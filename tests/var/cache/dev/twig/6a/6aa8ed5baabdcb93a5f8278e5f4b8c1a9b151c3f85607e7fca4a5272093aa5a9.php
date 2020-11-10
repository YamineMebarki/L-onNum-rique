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

/* vendor/fzaninotto/faker/test/Faker/Provider/ja_JP/InternetTest.php */
class __TwigTemplate_2dc4579d35afe2304ff3b21111e7729139fa283f771747af1eabadd4c512a6cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ja_JP/InternetTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ja_JP/InternetTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider\\ja_JP;

use Faker\\Generator;
use Faker\\Provider\\ja_JP\\Internet;
use PHPUnit\\Framework\\TestCase;

class InternetTest extends TestCase
{
    public function testUserName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Internet(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('akira72', \$faker->userName);
    }

    public function testDomainName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Internet(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('nakajima.com', \$faker->domainName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/ja_JP/InternetTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider\\ja_JP;

use Faker\\Generator;
use Faker\\Provider\\ja_JP\\Internet;
use PHPUnit\\Framework\\TestCase;

class InternetTest extends TestCase
{
    public function testUserName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Internet(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('akira72', \$faker->userName);
    }

    public function testDomainName()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Internet(\$faker));
        \$faker->seed(1);

        \$this->assertEquals('nakajima.com', \$faker->domainName);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/ja_JP/InternetTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/ja_JP/InternetTest.php");
    }
}
