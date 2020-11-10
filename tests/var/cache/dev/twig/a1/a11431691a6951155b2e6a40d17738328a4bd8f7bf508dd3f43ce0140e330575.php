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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SimpleEventDispatcherTest.php */
class __TwigTemplate_deac2000336e1584fa93f8d328f5110f3859ffcef18ed2f95cda4e5d31a07ebe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SimpleEventDispatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SimpleEventDispatcherTest.php"));

        // line 1
        echo "<?php

class Swift_Events_SimpleEventDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$dispatcher;

    protected function setUp()
    {
        \$this->dispatcher = new Swift_Events_SimpleEventDispatcher();
    }

    public function testSendEventCanBeCreated()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
        \$evt = \$this->dispatcher->createSendEvent(\$transport, \$message);
        \$this->assertInstanceOf('Swift_Events_SendEvent', \$evt);
        \$this->assertSame(\$message, \$evt->getMessage());
        \$this->assertSame(\$transport, \$evt->getTransport());
    }

    public function testCommandEventCanBeCreated()
    {
        \$buf = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$evt = \$this->dispatcher->createCommandEvent(\$buf, \"FOO\\r\\n\", [250]);
        \$this->assertInstanceOf('Swift_Events_CommandEvent', \$evt);
        \$this->assertSame(\$buf, \$evt->getSource());
        \$this->assertEquals(\"FOO\\r\\n\", \$evt->getCommand());
        \$this->assertEquals([250], \$evt->getSuccessCodes());
    }

    public function testResponseEventCanBeCreated()
    {
        \$buf = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$evt = \$this->dispatcher->createResponseEvent(\$buf, \"250 Ok\\r\\n\", true);
        \$this->assertInstanceOf('Swift_Events_ResponseEvent', \$evt);
        \$this->assertSame(\$buf, \$evt->getSource());
        \$this->assertEquals(\"250 Ok\\r\\n\", \$evt->getResponse());
        \$this->assertTrue(\$evt->isValid());
    }

    public function testTransportChangeEventCanBeCreated()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$evt = \$this->dispatcher->createTransportChangeEvent(\$transport);
        \$this->assertInstanceOf('Swift_Events_TransportChangeEvent', \$evt);
        \$this->assertSame(\$transport, \$evt->getSource());
    }

    public function testTransportExceptionEventCanBeCreated()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$ex = new Swift_TransportException('');
        \$evt = \$this->dispatcher->createTransportExceptionEvent(\$transport, \$ex);
        \$this->assertInstanceOf('Swift_Events_TransportExceptionEvent', \$evt);
        \$this->assertSame(\$transport, \$evt->getSource());
        \$this->assertSame(\$ex, \$evt->getException());
    }

    public function testListenersAreNotifiedOfDispatchedEvent()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$evt = \$this->dispatcher->createTransportChangeEvent(\$transport);

        \$listenerA = \$this->getMockBuilder('Swift_Events_TransportChangeListener')->getMock();
        \$listenerB = \$this->getMockBuilder('Swift_Events_TransportChangeListener')->getMock();

        \$this->dispatcher->bindEventListener(\$listenerA);
        \$this->dispatcher->bindEventListener(\$listenerB);

        \$listenerA->expects(\$this->once())
                  ->method('transportStarted')
                  ->with(\$evt);
        \$listenerB->expects(\$this->once())
                  ->method('transportStarted')
                  ->with(\$evt);

        \$this->dispatcher->dispatchEvent(\$evt, 'transportStarted');
    }

    public function testListenersAreOnlyCalledIfImplementingCorrectInterface()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();

        \$evt = \$this->dispatcher->createSendEvent(\$transport, \$message);

        \$targetListener = \$this->getMockBuilder('Swift_Events_SendListener')->getMock();
        \$otherListener = \$this->getMockBuilder('DummyListener')->getMock();

        \$this->dispatcher->bindEventListener(\$targetListener);
        \$this->dispatcher->bindEventListener(\$otherListener);

        \$targetListener->expects(\$this->once())
                       ->method('sendPerformed')
                       ->with(\$evt);
        \$otherListener->expects(\$this->never())
                    ->method('sendPerformed');

        \$this->dispatcher->dispatchEvent(\$evt, 'sendPerformed');
    }

    public function testListenersCanCancelBubblingOfEvent()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();

        \$evt = \$this->dispatcher->createSendEvent(\$transport, \$message);

        \$listenerA = \$this->getMockBuilder('Swift_Events_SendListener')->getMock();
        \$listenerB = \$this->getMockBuilder('Swift_Events_SendListener')->getMock();

        \$this->dispatcher->bindEventListener(\$listenerA);
        \$this->dispatcher->bindEventListener(\$listenerB);

        \$listenerA->expects(\$this->once())
                  ->method('sendPerformed')
                  ->with(\$evt)
                  ->will(\$this->returnCallback(function (\$object) {
                      \$object->cancelBubble(true);
                  }));
        \$listenerB->expects(\$this->never())
                  ->method('sendPerformed');

        \$this->dispatcher->dispatchEvent(\$evt, 'sendPerformed');

        \$this->assertTrue(\$evt->bubbleCancelled());
    }

    private function createDispatcher(array \$map)
    {
        return new Swift_Events_SimpleEventDispatcher(\$map);
    }
}

class DummyListener implements Swift_Events_EventListener
{
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SimpleEventDispatcherTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_SimpleEventDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$dispatcher;

    protected function setUp()
    {
        \$this->dispatcher = new Swift_Events_SimpleEventDispatcher();
    }

    public function testSendEventCanBeCreated()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
        \$evt = \$this->dispatcher->createSendEvent(\$transport, \$message);
        \$this->assertInstanceOf('Swift_Events_SendEvent', \$evt);
        \$this->assertSame(\$message, \$evt->getMessage());
        \$this->assertSame(\$transport, \$evt->getTransport());
    }

    public function testCommandEventCanBeCreated()
    {
        \$buf = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$evt = \$this->dispatcher->createCommandEvent(\$buf, \"FOO\\r\\n\", [250]);
        \$this->assertInstanceOf('Swift_Events_CommandEvent', \$evt);
        \$this->assertSame(\$buf, \$evt->getSource());
        \$this->assertEquals(\"FOO\\r\\n\", \$evt->getCommand());
        \$this->assertEquals([250], \$evt->getSuccessCodes());
    }

    public function testResponseEventCanBeCreated()
    {
        \$buf = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$evt = \$this->dispatcher->createResponseEvent(\$buf, \"250 Ok\\r\\n\", true);
        \$this->assertInstanceOf('Swift_Events_ResponseEvent', \$evt);
        \$this->assertSame(\$buf, \$evt->getSource());
        \$this->assertEquals(\"250 Ok\\r\\n\", \$evt->getResponse());
        \$this->assertTrue(\$evt->isValid());
    }

    public function testTransportChangeEventCanBeCreated()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$evt = \$this->dispatcher->createTransportChangeEvent(\$transport);
        \$this->assertInstanceOf('Swift_Events_TransportChangeEvent', \$evt);
        \$this->assertSame(\$transport, \$evt->getSource());
    }

    public function testTransportExceptionEventCanBeCreated()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$ex = new Swift_TransportException('');
        \$evt = \$this->dispatcher->createTransportExceptionEvent(\$transport, \$ex);
        \$this->assertInstanceOf('Swift_Events_TransportExceptionEvent', \$evt);
        \$this->assertSame(\$transport, \$evt->getSource());
        \$this->assertSame(\$ex, \$evt->getException());
    }

    public function testListenersAreNotifiedOfDispatchedEvent()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$evt = \$this->dispatcher->createTransportChangeEvent(\$transport);

        \$listenerA = \$this->getMockBuilder('Swift_Events_TransportChangeListener')->getMock();
        \$listenerB = \$this->getMockBuilder('Swift_Events_TransportChangeListener')->getMock();

        \$this->dispatcher->bindEventListener(\$listenerA);
        \$this->dispatcher->bindEventListener(\$listenerB);

        \$listenerA->expects(\$this->once())
                  ->method('transportStarted')
                  ->with(\$evt);
        \$listenerB->expects(\$this->once())
                  ->method('transportStarted')
                  ->with(\$evt);

        \$this->dispatcher->dispatchEvent(\$evt, 'transportStarted');
    }

    public function testListenersAreOnlyCalledIfImplementingCorrectInterface()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();

        \$evt = \$this->dispatcher->createSendEvent(\$transport, \$message);

        \$targetListener = \$this->getMockBuilder('Swift_Events_SendListener')->getMock();
        \$otherListener = \$this->getMockBuilder('DummyListener')->getMock();

        \$this->dispatcher->bindEventListener(\$targetListener);
        \$this->dispatcher->bindEventListener(\$otherListener);

        \$targetListener->expects(\$this->once())
                       ->method('sendPerformed')
                       ->with(\$evt);
        \$otherListener->expects(\$this->never())
                    ->method('sendPerformed');

        \$this->dispatcher->dispatchEvent(\$evt, 'sendPerformed');
    }

    public function testListenersCanCancelBubblingOfEvent()
    {
        \$transport = \$this->getMockBuilder('Swift_Transport')->getMock();
        \$message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();

        \$evt = \$this->dispatcher->createSendEvent(\$transport, \$message);

        \$listenerA = \$this->getMockBuilder('Swift_Events_SendListener')->getMock();
        \$listenerB = \$this->getMockBuilder('Swift_Events_SendListener')->getMock();

        \$this->dispatcher->bindEventListener(\$listenerA);
        \$this->dispatcher->bindEventListener(\$listenerB);

        \$listenerA->expects(\$this->once())
                  ->method('sendPerformed')
                  ->with(\$evt)
                  ->will(\$this->returnCallback(function (\$object) {
                      \$object->cancelBubble(true);
                  }));
        \$listenerB->expects(\$this->never())
                  ->method('sendPerformed');

        \$this->dispatcher->dispatchEvent(\$evt, 'sendPerformed');

        \$this->assertTrue(\$evt->bubbleCancelled());
    }

    private function createDispatcher(array \$map)
    {
        return new Swift_Events_SimpleEventDispatcher(\$map);
    }
}

class DummyListener implements Swift_Events_EventListener
{
    public function sendPerformed(Swift_Events_SendEvent \$evt)
    {
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SimpleEventDispatcherTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SimpleEventDispatcherTest.php");
    }
}
