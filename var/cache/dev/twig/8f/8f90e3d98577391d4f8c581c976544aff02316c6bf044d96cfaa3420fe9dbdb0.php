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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/ResponseEventTest.php */
class __TwigTemplate_d640233a6bc631b403c13b8a32a7ae7d36c481072ad056698cc3ca9c56554793 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/ResponseEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/ResponseEventTest.php"));

        // line 1
        echo "<?php

class Swift_Events_ResponseEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testResponseCanBeFetchViaGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"250 Ok\\r\\n\", true);
        \$this->assertEquals(\"250 Ok\\r\\n\", \$evt->getResponse(),
            '%s: Response should be available via getResponse()'
            );
    }

    public function testResultCanBeFetchedViaGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"250 Ok\\r\\n\", false);
        \$this->assertFalse(\$evt->isValid(),
            '%s: Result should be checkable via isValid()'
            );
    }

    public function testSourceIsBuffer()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \"250 Ok\\r\\n\", true);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref);
    }

    private function createEvent(Swift_Transport \$source, \$response, \$result)
    {
        return new Swift_Events_ResponseEvent(\$source, \$response, \$result);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/ResponseEventTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_ResponseEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testResponseCanBeFetchViaGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"250 Ok\\r\\n\", true);
        \$this->assertEquals(\"250 Ok\\r\\n\", \$evt->getResponse(),
            '%s: Response should be available via getResponse()'
            );
    }

    public function testResultCanBeFetchedViaGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"250 Ok\\r\\n\", false);
        \$this->assertFalse(\$evt->isValid(),
            '%s: Result should be checkable via isValid()'
            );
    }

    public function testSourceIsBuffer()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \"250 Ok\\r\\n\", true);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref);
    }

    private function createEvent(Swift_Transport \$source, \$response, \$result)
    {
        return new Swift_Events_ResponseEvent(\$source, \$response, \$result);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/ResponseEventTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/ResponseEventTest.php");
    }
}
