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

/* vendor/fzaninotto/faker/test/Faker/Provider/TextTest.php */
class __TwigTemplate_f0b223b7a6560960cc5ddb1415cb70601fc6e3521717e186dff46f9ebd985e94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/TextTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/TextTest.php"));

        // line 1
        echo "<?php
namespace Faker\\Test\\Provider;

use Faker\\Provider\\en_US\\Text;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class TextTest extends TestCase
{
    public function testTextMaxLength()
    {
        \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);

        \$lengths = array(10, 20, 50, 70, 90, 120, 150, 200, 500);

        foreach (\$lengths as \$length) {
            \$this->assertLessThan(\$length, \$generator->realText(\$length));
        }
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextMaxIndex()
    {
    \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);
    \$generator->realText(200, 11);
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextMinIndex()
    {
    \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);
        \$generator->realText(200, 0);
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextMinLength()
    {
    \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);
        \$generator->realText(9);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/TextTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Test\\Provider;

use Faker\\Provider\\en_US\\Text;
use Faker\\Generator;
use PHPUnit\\Framework\\TestCase;

class TextTest extends TestCase
{
    public function testTextMaxLength()
    {
        \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);

        \$lengths = array(10, 20, 50, 70, 90, 120, 150, 200, 500);

        foreach (\$lengths as \$length) {
            \$this->assertLessThan(\$length, \$generator->realText(\$length));
        }
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextMaxIndex()
    {
    \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);
    \$generator->realText(200, 11);
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextMinIndex()
    {
    \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);
        \$generator->realText(200, 0);
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testTextMinLength()
    {
    \$generator = new Generator();
        \$generator->addProvider(new Text(\$generator));
        \$generator->seed(0);
        \$generator->realText(9);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/TextTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/TextTest.php");
    }
}
