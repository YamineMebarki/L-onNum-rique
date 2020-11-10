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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/PopBeforeSmtpPluginTest.php */
class __TwigTemplate_94b7062329d4e6b3c75b4d54a54d6efbcea0ad086a8a3e1bbbad4e9fa7b88d7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/PopBeforeSmtpPluginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/PopBeforeSmtpPluginTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_PopBeforeSmtpPluginTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testPluginConnectsToPop3HostBeforeTransportStarts()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->once())
                   ->method('connect');

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);

        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportChangeEvent(\$transport);

        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testPluginDisconnectsFromPop3HostBeforeTransportStarts()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->once())
                   ->method('disconnect');

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);

        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportChangeEvent(\$transport);

        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testPluginDoesNotConnectToSmtpIfBoundToDifferentTransport()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->never())
                   ->method('disconnect');
        \$connection->expects(\$this->never())
                   ->method('connect');

        \$smtp = \$this->createTransport();

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);
        \$plugin->bindSmtp(\$smtp);

        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportChangeEvent(\$transport);

        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testPluginCanBindToSpecificTransport()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->once())
                   ->method('connect');

        \$smtp = \$this->createTransport();

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);
        \$plugin->bindSmtp(\$smtp);

        \$evt = \$this->createTransportChangeEvent(\$smtp);

        \$plugin->beforeTransportStarted(\$evt);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createTransportChangeEvent(\$transport)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_TransportChangeEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getSource')
            ->will(\$this->returnValue(\$transport));
        \$evt->expects(\$this->any())
            ->method('getTransport')
            ->will(\$this->returnValue(\$transport));

        return \$evt;
    }

    public function createConnection()
    {
        return \$this->getMockBuilder('Swift_Plugins_Pop_Pop3Connection')->getMock();
    }

    public function createPlugin(\$host, \$port, \$crypto = null)
    {
        return new Swift_Plugins_PopBeforeSmtpPlugin(\$host, \$port, \$crypto);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/PopBeforeSmtpPluginTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_PopBeforeSmtpPluginTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testPluginConnectsToPop3HostBeforeTransportStarts()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->once())
                   ->method('connect');

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);

        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportChangeEvent(\$transport);

        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testPluginDisconnectsFromPop3HostBeforeTransportStarts()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->once())
                   ->method('disconnect');

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);

        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportChangeEvent(\$transport);

        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testPluginDoesNotConnectToSmtpIfBoundToDifferentTransport()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->never())
                   ->method('disconnect');
        \$connection->expects(\$this->never())
                   ->method('connect');

        \$smtp = \$this->createTransport();

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);
        \$plugin->bindSmtp(\$smtp);

        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportChangeEvent(\$transport);

        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testPluginCanBindToSpecificTransport()
    {
        \$connection = \$this->createConnection();
        \$connection->expects(\$this->once())
                   ->method('connect');

        \$smtp = \$this->createTransport();

        \$plugin = \$this->createPlugin('pop.host.tld', 110);
        \$plugin->setConnection(\$connection);
        \$plugin->bindSmtp(\$smtp);

        \$evt = \$this->createTransportChangeEvent(\$smtp);

        \$plugin->beforeTransportStarted(\$evt);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createTransportChangeEvent(\$transport)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_TransportChangeEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getSource')
            ->will(\$this->returnValue(\$transport));
        \$evt->expects(\$this->any())
            ->method('getTransport')
            ->will(\$this->returnValue(\$transport));

        return \$evt;
    }

    public function createConnection()
    {
        return \$this->getMockBuilder('Swift_Plugins_Pop_Pop3Connection')->getMock();
    }

    public function createPlugin(\$host, \$port, \$crypto = null)
    {
        return new Swift_Plugins_PopBeforeSmtpPlugin(\$host, \$port, \$crypto);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/PopBeforeSmtpPluginTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/PopBeforeSmtpPluginTest.php");
    }
}
