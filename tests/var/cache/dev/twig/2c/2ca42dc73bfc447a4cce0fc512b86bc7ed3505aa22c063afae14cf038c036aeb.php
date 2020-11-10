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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/StreamBufferTest.php */
class __TwigTemplate_b8aa2b66626dc66d62ef4fc935bf51f5af0618e9f28f432e90118cf01928cb10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/StreamBufferTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/StreamBufferTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_StreamBufferTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSettingWriteTranslationsCreatesFilters()
    {
        \$factory = \$this->createFactory();
        \$factory->expects(\$this->once())
                ->method('createFilter')
                ->with('a', 'b')
                ->will(\$this->returnCallback([\$this, 'createFilter']));

        \$buffer = \$this->createBuffer(\$factory);
        \$buffer->setWriteTranslations(['a' => 'b']);
    }

    public function testOverridingTranslationsOnlyAddsNeededFilters()
    {
        \$factory = \$this->createFactory();
        \$factory->expects(\$this->exactly(2))
                ->method('createFilter')
                ->will(\$this->returnCallback([\$this, 'createFilter']));

        \$buffer = \$this->createBuffer(\$factory);
        \$buffer->setWriteTranslations(['a' => 'b']);
        \$buffer->setWriteTranslations(['x' => 'y', 'a' => 'b']);
    }

    private function createBuffer(\$replacementFactory)
    {
        return new Swift_Transport_StreamBuffer(\$replacementFactory);
    }

    private function createFactory()
    {
        return \$this->getMockBuilder('Swift_ReplacementFilterFactory')->getMock();
    }

    public function createFilter()
    {
        return \$this->getMockBuilder('Swift_StreamFilter')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/StreamBufferTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_StreamBufferTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSettingWriteTranslationsCreatesFilters()
    {
        \$factory = \$this->createFactory();
        \$factory->expects(\$this->once())
                ->method('createFilter')
                ->with('a', 'b')
                ->will(\$this->returnCallback([\$this, 'createFilter']));

        \$buffer = \$this->createBuffer(\$factory);
        \$buffer->setWriteTranslations(['a' => 'b']);
    }

    public function testOverridingTranslationsOnlyAddsNeededFilters()
    {
        \$factory = \$this->createFactory();
        \$factory->expects(\$this->exactly(2))
                ->method('createFilter')
                ->will(\$this->returnCallback([\$this, 'createFilter']));

        \$buffer = \$this->createBuffer(\$factory);
        \$buffer->setWriteTranslations(['a' => 'b']);
        \$buffer->setWriteTranslations(['x' => 'y', 'a' => 'b']);
    }

    private function createBuffer(\$replacementFactory)
    {
        return new Swift_Transport_StreamBuffer(\$replacementFactory);
    }

    private function createFactory()
    {
        return \$this->getMockBuilder('Swift_ReplacementFilterFactory')->getMock();
    }

    public function createFilter()
    {
        return \$this->getMockBuilder('Swift_StreamFilter')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/StreamBufferTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/StreamBufferTest.php");
    }
}
