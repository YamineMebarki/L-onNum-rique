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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/MailerTest.php */
class __TwigTemplate_b5eb0c75e26e318fbbe314118baa5dae1f8ae6a531460124afb02850d10b7576 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/MailerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/MailerTest.php"));

        // line 1
        echo "<?php

class Swift_MailerTest extends \\SwiftMailerTestCase
{
    public function testTransportIsStartedWhenSending()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();

        \$started = false;
        \$transport->shouldReceive('isStarted')
                  ->zeroOrMoreTimes()
                  ->andReturnUsing(function () use (&\$started) {
                      return \$started;
                  });
        \$transport->shouldReceive('start')
                  ->once()
                  ->andReturnUsing(function () use (&\$started) {
                      \$started = true;

                      return;
                  });

        \$mailer = \$this->createMailer(\$transport);
        \$mailer->send(\$message);
    }

    public function testTransportIsOnlyStartedOnce()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();

        \$started = false;
        \$transport->shouldReceive('isStarted')
                  ->zeroOrMoreTimes()
                  ->andReturnUsing(function () use (&\$started) {
                      return \$started;
                  });
        \$transport->shouldReceive('start')
                  ->once()
                  ->andReturnUsing(function () use (&\$started) {
                      \$started = true;

                      return;
                  });

        \$mailer = \$this->createMailer(\$transport);
        for (\$i = 0; \$i < 10; ++\$i) {
            \$mailer->send(\$message);
        }
    }

    public function testMessageIsPassedToTransport()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \\Mockery::any());

        \$mailer = \$this->createMailer(\$transport);
        \$mailer->send(\$message);
    }

    public function testSendReturnsCountFromTransport()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \\Mockery::any())
                  ->andReturn(57);

        \$mailer = \$this->createMailer(\$transport);
        \$this->assertEquals(57, \$mailer->send(\$message));
    }

    public function testFailedRecipientReferenceIsPassedToTransport()
    {
        \$failures = [];

        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \$failures)
                  ->andReturn(57);

        \$mailer = \$this->createMailer(\$transport);
        \$mailer->send(\$message, \$failures);
    }

    public function testSendRecordsRfcComplianceExceptionAsEntireSendFailure()
    {
        \$failures = [];

        \$rfcException = new Swift_RfcComplianceException('test');
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$message->shouldReceive('getTo')
                  ->once()
                  ->andReturn(['foo&invalid' => 'Foo', 'bar@valid.tld' => 'Bar']);
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \$failures)
                  ->andThrow(\$rfcException);

        \$mailer = \$this->createMailer(\$transport);
        \$this->assertEquals(0, \$mailer->send(\$message, \$failures), '%s: Should return 0');
        \$this->assertEquals(['foo&invalid', 'bar@valid.tld'], \$failures, '%s: Failures should contain all addresses since the entire message failed to compile');
    }

    public function testRegisterPluginDelegatesToTransport()
    {
        \$plugin = \$this->createPlugin();
        \$transport = \$this->createTransport();
        \$mailer = \$this->createMailer(\$transport);

        \$transport->shouldReceive('registerPlugin')
                  ->once()
                  ->with(\$plugin);

        \$mailer->registerPlugin(\$plugin);
    }

    private function createPlugin()
    {
        return \$this->getMockery('Swift_Events_EventListener')->shouldIgnoreMissing();
    }

    private function createTransport()
    {
        return \$this->getMockery('Swift_Transport')->shouldIgnoreMissing();
    }

    private function createMessage()
    {
        return \$this->getMockery('Swift_Mime_SimpleMessage')->shouldIgnoreMissing();
    }

    private function createMailer(Swift_Transport \$transport)
    {
        return new Swift_Mailer(\$transport);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/MailerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_MailerTest extends \\SwiftMailerTestCase
{
    public function testTransportIsStartedWhenSending()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();

        \$started = false;
        \$transport->shouldReceive('isStarted')
                  ->zeroOrMoreTimes()
                  ->andReturnUsing(function () use (&\$started) {
                      return \$started;
                  });
        \$transport->shouldReceive('start')
                  ->once()
                  ->andReturnUsing(function () use (&\$started) {
                      \$started = true;

                      return;
                  });

        \$mailer = \$this->createMailer(\$transport);
        \$mailer->send(\$message);
    }

    public function testTransportIsOnlyStartedOnce()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();

        \$started = false;
        \$transport->shouldReceive('isStarted')
                  ->zeroOrMoreTimes()
                  ->andReturnUsing(function () use (&\$started) {
                      return \$started;
                  });
        \$transport->shouldReceive('start')
                  ->once()
                  ->andReturnUsing(function () use (&\$started) {
                      \$started = true;

                      return;
                  });

        \$mailer = \$this->createMailer(\$transport);
        for (\$i = 0; \$i < 10; ++\$i) {
            \$mailer->send(\$message);
        }
    }

    public function testMessageIsPassedToTransport()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \\Mockery::any());

        \$mailer = \$this->createMailer(\$transport);
        \$mailer->send(\$message);
    }

    public function testSendReturnsCountFromTransport()
    {
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \\Mockery::any())
                  ->andReturn(57);

        \$mailer = \$this->createMailer(\$transport);
        \$this->assertEquals(57, \$mailer->send(\$message));
    }

    public function testFailedRecipientReferenceIsPassedToTransport()
    {
        \$failures = [];

        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \$failures)
                  ->andReturn(57);

        \$mailer = \$this->createMailer(\$transport);
        \$mailer->send(\$message, \$failures);
    }

    public function testSendRecordsRfcComplianceExceptionAsEntireSendFailure()
    {
        \$failures = [];

        \$rfcException = new Swift_RfcComplianceException('test');
        \$transport = \$this->createTransport();
        \$message = \$this->createMessage();
        \$message->shouldReceive('getTo')
                  ->once()
                  ->andReturn(['foo&invalid' => 'Foo', 'bar@valid.tld' => 'Bar']);
        \$transport->shouldReceive('send')
                  ->once()
                  ->with(\$message, \$failures)
                  ->andThrow(\$rfcException);

        \$mailer = \$this->createMailer(\$transport);
        \$this->assertEquals(0, \$mailer->send(\$message, \$failures), '%s: Should return 0');
        \$this->assertEquals(['foo&invalid', 'bar@valid.tld'], \$failures, '%s: Failures should contain all addresses since the entire message failed to compile');
    }

    public function testRegisterPluginDelegatesToTransport()
    {
        \$plugin = \$this->createPlugin();
        \$transport = \$this->createTransport();
        \$mailer = \$this->createMailer(\$transport);

        \$transport->shouldReceive('registerPlugin')
                  ->once()
                  ->with(\$plugin);

        \$mailer->registerPlugin(\$plugin);
    }

    private function createPlugin()
    {
        return \$this->getMockery('Swift_Events_EventListener')->shouldIgnoreMissing();
    }

    private function createTransport()
    {
        return \$this->getMockery('Swift_Transport')->shouldIgnoreMissing();
    }

    private function createMessage()
    {
        return \$this->getMockery('Swift_Mime_SimpleMessage')->shouldIgnoreMissing();
    }

    private function createMailer(Swift_Transport \$transport)
    {
        return new Swift_Mailer(\$transport);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/MailerTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/MailerTest.php");
    }
}
