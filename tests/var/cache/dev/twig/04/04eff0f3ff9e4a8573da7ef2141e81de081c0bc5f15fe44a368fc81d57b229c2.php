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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SendEventTest.php */
class __TwigTemplate_fe4e7b93b051bd1ac4cb937cb0be8dfea02152131cc94b0451a77d43bea38e4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SendEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SendEventTest.php"));

        // line 1
        echo "<?php

class Swift_Events_SendEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testMessageCanBeFetchedViaGetter()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$ref = \$evt->getMessage();
        \$this->assertEquals(\$message, \$ref,
            '%s: Message should be returned from getMessage()'
            );
    }

    public function testTransportCanBeFetchViaGetter()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$ref = \$evt->getTransport();
        \$this->assertEquals(\$transport, \$ref,
            '%s: Transport should be returned from getTransport()'
            );
    }

    public function testTransportCanBeFetchViaGetSource()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref,
            '%s: Transport should be returned from getSource()'
            );
    }

    public function testResultCanBeSetAndGet()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$evt->setResult(
            Swift_Events_SendEvent::RESULT_SUCCESS | Swift_Events_SendEvent::RESULT_TENTATIVE
            );

        \$this->assertTrue((bool) (\$evt->getResult() & Swift_Events_SendEvent::RESULT_SUCCESS));
        \$this->assertTrue((bool) (\$evt->getResult() & Swift_Events_SendEvent::RESULT_TENTATIVE));
    }

    public function testFailedRecipientsCanBeSetAndGet()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$evt->setFailedRecipients(['foo@bar', 'zip@button']);

        \$this->assertEquals(['foo@bar', 'zip@button'], \$evt->getFailedRecipients(),
            '%s: FailedRecipients should be returned from getter'
            );
    }

    public function testFailedRecipientsGetsPickedUpCorrectly()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);
        \$this->assertEquals([], \$evt->getFailedRecipients());
    }

    private function createEvent(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message)
    {
        return new Swift_Events_SendEvent(\$source, \$message);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createMessage()
    {
        return \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SendEventTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Events_SendEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testMessageCanBeFetchedViaGetter()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$ref = \$evt->getMessage();
        \$this->assertEquals(\$message, \$ref,
            '%s: Message should be returned from getMessage()'
            );
    }

    public function testTransportCanBeFetchViaGetter()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$ref = \$evt->getTransport();
        \$this->assertEquals(\$transport, \$ref,
            '%s: Transport should be returned from getTransport()'
            );
    }

    public function testTransportCanBeFetchViaGetSource()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$ref = \$evt->getSource();
        \$this->assertEquals(\$transport, \$ref,
            '%s: Transport should be returned from getSource()'
            );
    }

    public function testResultCanBeSetAndGet()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$evt->setResult(
            Swift_Events_SendEvent::RESULT_SUCCESS | Swift_Events_SendEvent::RESULT_TENTATIVE
            );

        \$this->assertTrue((bool) (\$evt->getResult() & Swift_Events_SendEvent::RESULT_SUCCESS));
        \$this->assertTrue((bool) (\$evt->getResult() & Swift_Events_SendEvent::RESULT_TENTATIVE));
    }

    public function testFailedRecipientsCanBeSetAndGet()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);

        \$evt->setFailedRecipients(['foo@bar', 'zip@button']);

        \$this->assertEquals(['foo@bar', 'zip@button'], \$evt->getFailedRecipients(),
            '%s: FailedRecipients should be returned from getter'
            );
    }

    public function testFailedRecipientsGetsPickedUpCorrectly()
    {
        \$message = \$this->createMessage();
        \$transport = \$this->createTransport();

        \$evt = \$this->createEvent(\$transport, \$message);
        \$this->assertEquals([], \$evt->getFailedRecipients());
    }

    private function createEvent(Swift_Transport \$source, Swift_Mime_SimpleMessage \$message)
    {
        return new Swift_Events_SendEvent(\$source, \$message);
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createMessage()
    {
        return \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SendEventTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Events/SendEventTest.php");
    }
}
