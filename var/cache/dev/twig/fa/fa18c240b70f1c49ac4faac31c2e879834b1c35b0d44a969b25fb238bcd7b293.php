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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/LoggerPluginTest.php */
class __TwigTemplate_36ca901919f19e7a530c5bab3c3f9979ce60b1e0b58c74b98cea92f923b82ede extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/LoggerPluginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/LoggerPluginTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_LoggerPluginTest extends \\SwiftMailerTestCase
{
    public function testLoggerDelegatesAddingEntries()
    {
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with('foo');

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->add('foo');
    }

    public function testLoggerDelegatesDumpingEntries()
    {
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('dump')
               ->will(\$this->returnValue('foobar'));

        \$plugin = \$this->createPlugin(\$logger);
        \$this->assertEquals('foobar', \$plugin->dump());
    }

    public function testLoggerDelegatesClearingEntries()
    {
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('clear');

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->clear();
    }

    public function testCommandIsSentToLogger()
    {
        \$evt = \$this->createCommandEvent(\"foo\\r\\n\");
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(static::regExp('~foo\\r\\n~'));

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->commandSent(\$evt);
    }

    public function testResponseIsSentToLogger()
    {
        \$evt = \$this->createResponseEvent(\"354 Go ahead\\r\\n\");
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(static::regExp('~354 Go ahead\\r\\n~'));

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->responseReceived(\$evt);
    }

    public function testTransportBeforeStartChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testTransportStartChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->transportStarted(\$evt);
    }

    public function testTransportStopChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->transportStopped(\$evt);
    }

    public function testTransportBeforeStopChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->beforeTransportStopped(\$evt);
    }

    public function testExceptionsArePassedToDelegateAndLeftToBubbleUp()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportExceptionEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        try {
            \$plugin->exceptionThrown(\$evt);
            \$this->fail('Exception should bubble up.');
        } catch (Swift_TransportException \$ex) {
        }
    }

    private function createLogger()
    {
        return \$this->getMockBuilder('Swift_Plugins_Logger')->getMock();
    }

    private function createPlugin(\$logger)
    {
        return new Swift_Plugins_LoggerPlugin(\$logger);
    }

    private function createCommandEvent(\$command)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_CommandEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getCommand')
            ->will(\$this->returnValue(\$command));

        return \$evt;
    }

    private function createResponseEvent(\$response)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_ResponseEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getResponse')
            ->will(\$this->returnValue(\$response));

        return \$evt;
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createTransportChangeEvent()
    {
        \$evt = \$this->getMockBuilder('Swift_Events_TransportChangeEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getSource')
            ->will(\$this->returnValue(\$this->createTransport()));

        return \$evt;
    }

    public function createTransportExceptionEvent()
    {
        \$evt = \$this->getMockBuilder('Swift_Events_TransportExceptionEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getException')
            ->will(\$this->returnValue(new Swift_TransportException('')));

        return \$evt;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/LoggerPluginTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_LoggerPluginTest extends \\SwiftMailerTestCase
{
    public function testLoggerDelegatesAddingEntries()
    {
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with('foo');

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->add('foo');
    }

    public function testLoggerDelegatesDumpingEntries()
    {
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('dump')
               ->will(\$this->returnValue('foobar'));

        \$plugin = \$this->createPlugin(\$logger);
        \$this->assertEquals('foobar', \$plugin->dump());
    }

    public function testLoggerDelegatesClearingEntries()
    {
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('clear');

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->clear();
    }

    public function testCommandIsSentToLogger()
    {
        \$evt = \$this->createCommandEvent(\"foo\\r\\n\");
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(static::regExp('~foo\\r\\n~'));

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->commandSent(\$evt);
    }

    public function testResponseIsSentToLogger()
    {
        \$evt = \$this->createResponseEvent(\"354 Go ahead\\r\\n\");
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(static::regExp('~354 Go ahead\\r\\n~'));

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->responseReceived(\$evt);
    }

    public function testTransportBeforeStartChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->beforeTransportStarted(\$evt);
    }

    public function testTransportStartChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->transportStarted(\$evt);
    }

    public function testTransportStopChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->transportStopped(\$evt);
    }

    public function testTransportBeforeStopChangeIsSentToLogger()
    {
        \$evt = \$this->createTransportChangeEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        \$plugin->beforeTransportStopped(\$evt);
    }

    public function testExceptionsArePassedToDelegateAndLeftToBubbleUp()
    {
        \$transport = \$this->createTransport();
        \$evt = \$this->createTransportExceptionEvent();
        \$logger = \$this->createLogger();
        \$logger->expects(\$this->once())
               ->method('add')
               ->with(\$this->anything());

        \$plugin = \$this->createPlugin(\$logger);
        try {
            \$plugin->exceptionThrown(\$evt);
            \$this->fail('Exception should bubble up.');
        } catch (Swift_TransportException \$ex) {
        }
    }

    private function createLogger()
    {
        return \$this->getMockBuilder('Swift_Plugins_Logger')->getMock();
    }

    private function createPlugin(\$logger)
    {
        return new Swift_Plugins_LoggerPlugin(\$logger);
    }

    private function createCommandEvent(\$command)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_CommandEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getCommand')
            ->will(\$this->returnValue(\$command));

        return \$evt;
    }

    private function createResponseEvent(\$response)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_ResponseEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getResponse')
            ->will(\$this->returnValue(\$response));

        return \$evt;
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createTransportChangeEvent()
    {
        \$evt = \$this->getMockBuilder('Swift_Events_TransportChangeEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getSource')
            ->will(\$this->returnValue(\$this->createTransport()));

        return \$evt;
    }

    public function createTransportExceptionEvent()
    {
        \$evt = \$this->getMockBuilder('Swift_Events_TransportExceptionEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getException')
            ->will(\$this->returnValue(new Swift_TransportException('')));

        return \$evt;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/LoggerPluginTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/LoggerPluginTest.php");
    }
}
