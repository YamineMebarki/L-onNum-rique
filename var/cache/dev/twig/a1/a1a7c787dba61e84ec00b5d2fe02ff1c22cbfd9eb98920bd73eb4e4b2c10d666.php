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

/* vendor/fzaninotto/faker/test/Faker/DefaultGeneratorTest.php */
class __TwigTemplate_80e5593e241c49a9f562a2e11f07434aca196dd88c1d9a22912ea14226863464 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/DefaultGeneratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/DefaultGeneratorTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test;

use Faker\\DefaultGenerator;
use PHPUnit\\Framework\\TestCase;

class DefaultGeneratorTest extends TestCase
{
    public function testGeneratorReturnsNullByDefault()
    {
        \$generator = new DefaultGenerator;
        \$this->assertNull(\$generator->value);
    }

    public function testGeneratorReturnsDefaultValueForAnyPropertyGet()
    {
        \$generator = new DefaultGenerator(123);
        \$this->assertSame(123, \$generator->foo);
        \$this->assertNotNull(\$generator->bar);
    }

    public function testGeneratorReturnsDefaultValueForAnyMethodCall()
    {
        \$generator = new DefaultGenerator(123);
        \$this->assertSame(123, \$generator->foobar());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/DefaultGeneratorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test;

use Faker\\DefaultGenerator;
use PHPUnit\\Framework\\TestCase;

class DefaultGeneratorTest extends TestCase
{
    public function testGeneratorReturnsNullByDefault()
    {
        \$generator = new DefaultGenerator;
        \$this->assertNull(\$generator->value);
    }

    public function testGeneratorReturnsDefaultValueForAnyPropertyGet()
    {
        \$generator = new DefaultGenerator(123);
        \$this->assertSame(123, \$generator->foo);
        \$this->assertNotNull(\$generator->bar);
    }

    public function testGeneratorReturnsDefaultValueForAnyMethodCall()
    {
        \$generator = new DefaultGenerator(123);
        \$this->assertSame(123, \$generator->foobar());
    }
}
", "vendor/fzaninotto/faker/test/Faker/DefaultGeneratorTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/DefaultGeneratorTest.php");
    }
}
