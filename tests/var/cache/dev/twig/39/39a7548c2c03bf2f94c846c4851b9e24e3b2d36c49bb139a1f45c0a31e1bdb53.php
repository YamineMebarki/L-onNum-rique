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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportExceptionEventTest.php */
class __TwigTemplate_776b9b9557ce0324f29533c9c81738ce06c0d6feafad899b7e0c7b04fa8f1fb0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportExceptionEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportExceptionEventTest.php"));

        // line 1
        echo "<?php

class Swift_Events_TransportExceptionEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testExceptionCanBeFetchViaGetter()
    {
        \$ex = \$this->createException();
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \$ex);
        \$ref = \$evt->getException();
        \$this->assertEquals(\$ex, \$ref,
            '%s: Exception should be available via getException()'
            );
    }

    public function testSourceIsTransport()
    {
        \$ex = \$this->createException();
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \$ex);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref,
            '%s: Transport should be available via getSource()'
            );
    }

    private function createEvent(Swift_Transport \$transport, Swift_TransportException \$ex)
    {
        return new Swift_Events_TransportExceptionEvent(\$transport, \$ex);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createException()
    {
        return new Swift_TransportException('');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportExceptionEventTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_TransportExceptionEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testExceptionCanBeFetchViaGetter()
    {
        \$ex = \$this->createException();
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \$ex);
        \$ref = \$evt->getException();
        \$this->assertEquals(\$ex, \$ref,
            '%s: Exception should be available via getException()'
            );
    }

    public function testSourceIsTransport()
    {
        \$ex = \$this->createException();
        \$transport = \$this->createTransport();
        \$evt = \$this->createEvent(\$transport, \$ex);
        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref,
            '%s: Transport should be available via getSource()'
            );
    }

    private function createEvent(Swift_Transport \$transport, Swift_TransportException \$ex)
    {
        return new Swift_Events_TransportExceptionEvent(\$transport, \$ex);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createException()
    {
        return new Swift_TransportException('');
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportExceptionEventTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/TransportExceptionEventTest.php");
    }
}
