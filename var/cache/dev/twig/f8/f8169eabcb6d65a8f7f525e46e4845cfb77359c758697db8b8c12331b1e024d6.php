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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportChangeEventTest.php */
class __TwigTemplate_8908855aad5c40a826d95ec0a61728df6848e91fb6b4a595e4a7639df8fcae73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportChangeEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportChangeEventTest.php"));

        // line 1
        echo "<?php

class Swift_Events_TransportChangeEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetTransportReturnsTransport()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport);
        \$ref = \$evt->getTransport();
        \$this->assertEquals(\$transport, \$ref);
    }

    public function testSourceIsTransport()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref);
    }

    private function createEvent(Swift_Transport \$source)
    {
        return new Swift_Events_TransportChangeEvent(\$source);
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
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportChangeEventTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_TransportChangeEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetTransportReturnsTransport()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport);
        \$ref = \$evt->getTransport();
        \$this->assertEquals(\$transport, \$ref);
    }

    public function testSourceIsTransport()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref);
    }

    private function createEvent(Swift_Transport \$source)
    {
        return new Swift_Events_TransportChangeEvent(\$source);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportChangeEventTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportChangeEventTest.php");
    }
}
