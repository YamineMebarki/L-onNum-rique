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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterFactoryTest.php */
class __TwigTemplate_08e80af05b89827c5808ee122f90eabd3b0e26e1d2460208fc41de86b8ba36bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterFactoryTest.php"));

        // line 1
        echo "<?php

class Swift_StreamFilters_StringReplacementFilterFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testInstancesOfStringReplacementFilterAreCreated()
    {
        \$factory = \$this->createFactory();
        \$this->assertInstanceOf(
            'Swift_StreamFilters_StringReplacementFilter',
            \$factory->createFilter('a', 'b')
        );
    }

    public function testSameInstancesAreCached()
    {
        \$factory = \$this->createFactory();
        \$filter1 = \$factory->createFilter('a', 'b');
        \$filter2 = \$factory->createFilter('a', 'b');
        \$this->assertSame(\$filter1, \$filter2, '%s: Instances should be cached');
    }

    public function testDifferingInstancesAreNotCached()
    {
        \$factory = \$this->createFactory();
        \$filter1 = \$factory->createFilter('a', 'b');
        \$filter2 = \$factory->createFilter('a', 'c');
        \$this->assertNotEquals(\$filter1, \$filter2,
            '%s: Differing instances should not be cached'
            );
    }

    private function createFactory()
    {
        return new Swift_StreamFilters_StringReplacementFilterFactory();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterFactoryTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_StreamFilters_StringReplacementFilterFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testInstancesOfStringReplacementFilterAreCreated()
    {
        \$factory = \$this->createFactory();
        \$this->assertInstanceOf(
            'Swift_StreamFilters_StringReplacementFilter',
            \$factory->createFilter('a', 'b')
        );
    }

    public function testSameInstancesAreCached()
    {
        \$factory = \$this->createFactory();
        \$filter1 = \$factory->createFilter('a', 'b');
        \$filter2 = \$factory->createFilter('a', 'b');
        \$this->assertSame(\$filter1, \$filter2, '%s: Instances should be cached');
    }

    public function testDifferingInstancesAreNotCached()
    {
        \$factory = \$this->createFactory();
        \$filter1 = \$factory->createFilter('a', 'b');
        \$filter2 = \$factory->createFilter('a', 'c');
        \$this->assertNotEquals(\$filter1, \$filter2,
            '%s: Differing instances should not be cached'
            );
    }

    private function createFactory()
    {
        return new Swift_StreamFilters_StringReplacementFilterFactory();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/StreamFilters/StringReplacementFilterFactoryTest.php");
    }
}
