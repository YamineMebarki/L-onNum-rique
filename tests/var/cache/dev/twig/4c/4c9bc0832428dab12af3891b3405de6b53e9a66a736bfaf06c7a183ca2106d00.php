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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/CommandEventTest.php */
class __TwigTemplate_8d57b2622fb8efd336ea2303fb3647cc01b682b2f5f37b8535d1b334804ffcae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/CommandEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/CommandEventTest.php"));

        // line 1
        echo "<?php

class Swift_Events_CommandEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCommandCanBeFetchedByGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"FOO\\r\\n\");
        \$this->assertEquals(\"FOO\\r\\n\", \$evt->getCommand());
    }

    public function testSuccessCodesCanBeFetchedViaGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"FOO\\r\\n\", [250]);
        \$this->assertEquals([250], \$evt->getSuccessCodes());
    }

    public function testSourceIsBuffer()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \"FOO\\r\\n\");
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref);
    }

    private function createEvent(Swift_Transport \$source, \$command, \$successCodes = [])
    {
        return new Swift_Events_CommandEvent(\$source, \$command, \$successCodes);
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
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/CommandEventTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_CommandEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCommandCanBeFetchedByGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"FOO\\r\\n\");
        \$this->assertEquals(\"FOO\\r\\n\", \$evt->getCommand());
    }

    public function testSuccessCodesCanBeFetchedViaGetter()
    {
        \$evt = \$this->createEvent(\$this->createTransport(), \"FOO\\r\\n\", [250]);
        \$this->assertEquals([250], \$evt->getSuccessCodes());
    }

    public function testSourceIsBuffer()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \"FOO\\r\\n\");
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref);
    }

    private function createEvent(Swift_Transport \$source, \$command, \$successCodes = [])
    {
        return new Swift_Events_CommandEvent(\$source, \$command, \$successCodes);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/CommandEventTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/CommandEventTest.php");
    }
}
