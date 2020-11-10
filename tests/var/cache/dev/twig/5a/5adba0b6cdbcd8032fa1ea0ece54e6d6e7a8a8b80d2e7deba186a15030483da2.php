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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/BandwidthMonitorPluginTest.php */
class __TwigTemplate_cb4f6165d13b7db412497eea691537b587e347396c0878d6083f11f1c6e19356 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/BandwidthMonitorPluginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/BandwidthMonitorPluginTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_BandwidthMonitorPluginTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$_monitor;

    private \$_bytes = 0;

    protected function setUp()
    {
        \$this->monitor = new Swift_Plugins_BandwidthMonitorPlugin();
    }

    public function testBytesOutIncreasesWhenCommandsSent()
    {
        \$evt = \$this->createCommandEvent(\"RCPT TO:<foo@bar.com>\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(23, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(46, \$this->monitor->getBytesOut());
    }

    public function testBytesInIncreasesWhenResponsesReceived()
    {
        \$evt = \$this->createResponseEvent(\"250 Ok\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(8, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(16, \$this->monitor->getBytesIn());
    }

    public function testCountersCanBeReset()
    {
        \$evt = \$this->createResponseEvent(\"250 Ok\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(8, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(16, \$this->monitor->getBytesIn());

        \$evt = \$this->createCommandEvent(\"RCPT TO:<foo@bar.com>\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(23, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(46, \$this->monitor->getBytesOut());

        \$this->monitor->reset();

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->assertEquals(0, \$this->monitor->getBytesIn());
    }

    public function testBytesOutIncreasesAccordingToMessageLength()
    {
        \$message = \$this->createMessageWithByteCount(6);
        \$evt = \$this->createSendEvent(\$message);

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->monitor->sendPerformed(\$evt);
        \$this->assertEquals(6, \$this->monitor->getBytesOut());
        \$this->monitor->sendPerformed(\$evt);
        \$this->assertEquals(12, \$this->monitor->getBytesOut());
    }

    private function createSendEvent(\$message)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_SendEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getMessage')
            ->will(\$this->returnValue(\$message));

        return \$evt;
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

    private function createMessageWithByteCount(\$bytes)
    {
        \$this->bytes = \$bytes;
        \$msg = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
        \$msg->expects(\$this->any())
            ->method('toByteStream')
            ->will(\$this->returnCallback([\$this, 'write']));
        /*  \$this->checking(Expectations::create()
              -> ignoring(\$msg)->toByteStream(any()) -> calls(array(\$this, 'write'))
          ); */

        return \$msg;
    }

    public function write(\$is)
    {
        for (\$i = 0; \$i < \$this->bytes; ++\$i) {
            \$is->write('x');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/BandwidthMonitorPluginTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_BandwidthMonitorPluginTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$_monitor;

    private \$_bytes = 0;

    protected function setUp()
    {
        \$this->monitor = new Swift_Plugins_BandwidthMonitorPlugin();
    }

    public function testBytesOutIncreasesWhenCommandsSent()
    {
        \$evt = \$this->createCommandEvent(\"RCPT TO:<foo@bar.com>\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(23, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(46, \$this->monitor->getBytesOut());
    }

    public function testBytesInIncreasesWhenResponsesReceived()
    {
        \$evt = \$this->createResponseEvent(\"250 Ok\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(8, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(16, \$this->monitor->getBytesIn());
    }

    public function testCountersCanBeReset()
    {
        \$evt = \$this->createResponseEvent(\"250 Ok\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(8, \$this->monitor->getBytesIn());
        \$this->monitor->responseReceived(\$evt);
        \$this->assertEquals(16, \$this->monitor->getBytesIn());

        \$evt = \$this->createCommandEvent(\"RCPT TO:<foo@bar.com>\\r\\n\");

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(23, \$this->monitor->getBytesOut());
        \$this->monitor->commandSent(\$evt);
        \$this->assertEquals(46, \$this->monitor->getBytesOut());

        \$this->monitor->reset();

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->assertEquals(0, \$this->monitor->getBytesIn());
    }

    public function testBytesOutIncreasesAccordingToMessageLength()
    {
        \$message = \$this->createMessageWithByteCount(6);
        \$evt = \$this->createSendEvent(\$message);

        \$this->assertEquals(0, \$this->monitor->getBytesOut());
        \$this->monitor->sendPerformed(\$evt);
        \$this->assertEquals(6, \$this->monitor->getBytesOut());
        \$this->monitor->sendPerformed(\$evt);
        \$this->assertEquals(12, \$this->monitor->getBytesOut());
    }

    private function createSendEvent(\$message)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_SendEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getMessage')
            ->will(\$this->returnValue(\$message));

        return \$evt;
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

    private function createMessageWithByteCount(\$bytes)
    {
        \$this->bytes = \$bytes;
        \$msg = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
        \$msg->expects(\$this->any())
            ->method('toByteStream')
            ->will(\$this->returnCallback([\$this, 'write']));
        /*  \$this->checking(Expectations::create()
              -> ignoring(\$msg)->toByteStream(any()) -> calls(array(\$this, 'write'))
          ); */

        return \$msg;
    }

    public function write(\$is)
    {
        for (\$i = 0; \$i < \$this->bytes; ++\$i) {
            \$is->write('x');
        }
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/BandwidthMonitorPluginTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/BandwidthMonitorPluginTest.php");
    }
}
