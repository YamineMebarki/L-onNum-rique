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

/* vendor/fzaninotto/faker/test/Faker/Provider/HtmlLoremTest.php */
class __TwigTemplate_7091152228a3e950706fd77f5930edd29790c0680b31f9d6e12dbb4f7211ec51 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/HtmlLoremTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/HtmlLoremTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\HtmlLorem;
use PHPUnit\\Framework\\TestCase;

class HtmlLoremTest extends TestCase
{

    public function testProvider()
    {
        \$faker = new Generator();
        \$faker->addProvider(new HtmlLorem(\$faker));
        \$node = \$faker->randomHtml(6, 10);
        \$this->assertStringStartsWith(\"<html>\", \$node);
        \$this->assertStringEndsWith(\"</html>\\n\", \$node);
    }

    public function testRandomHtmlReturnsValidHTMLString(){
        \$faker = new Generator();
        \$faker->addProvider(new HtmlLorem(\$faker));
        \$node = \$faker->randomHtml(6, 10);
        \$dom = new \\DOMDocument();
        \$error = \$dom->loadHTML(\$node);
        \$this->assertTrue(\$error);
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/HtmlLoremTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\HtmlLorem;
use PHPUnit\\Framework\\TestCase;

class HtmlLoremTest extends TestCase
{

    public function testProvider()
    {
        \$faker = new Generator();
        \$faker->addProvider(new HtmlLorem(\$faker));
        \$node = \$faker->randomHtml(6, 10);
        \$this->assertStringStartsWith(\"<html>\", \$node);
        \$this->assertStringEndsWith(\"</html>\\n\", \$node);
    }

    public function testRandomHtmlReturnsValidHTMLString(){
        \$faker = new Generator();
        \$faker->addProvider(new HtmlLorem(\$faker));
        \$node = \$faker->randomHtml(6, 10);
        \$dom = new \\DOMDocument();
        \$error = \$dom->loadHTML(\$node);
        \$this->assertTrue(\$error);
    }

}
", "vendor/fzaninotto/faker/test/Faker/Provider/HtmlLoremTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/HtmlLoremTest.php");
    }
}
