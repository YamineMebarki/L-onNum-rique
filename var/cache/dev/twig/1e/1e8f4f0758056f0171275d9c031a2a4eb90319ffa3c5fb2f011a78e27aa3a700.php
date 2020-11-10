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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/SendmailTransportTest.php */
class __TwigTemplate_23dfaebb5c5b7c8352928a09f7c528f0e50d2fba45f63c29e255b580b57597fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/SendmailTransportTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/SendmailTransportTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_SendmailTransportTest extends Swift_Transport_AbstractSmtpEventSupportTest
{
    protected function getTransport(\$buf, \$dispatcher = null, \$addressEncoder = null, \$command = '/usr/sbin/sendmail -bs')
    {
        if (!\$dispatcher) {
            \$dispatcher = \$this->createEventDispatcher();
        }
        \$transport = new Swift_Transport_SendmailTransport(\$buf, \$dispatcher, 'example.org', \$addressEncoder);
        \$transport->setCommand(\$command);

        return \$transport;
    }

    protected function getSendmail(\$buf, \$dispatcher = null)
    {
        if (!\$dispatcher) {
            \$dispatcher = \$this->createEventDispatcher();
        }

        return new Swift_Transport_SendmailTransport(\$buf, \$dispatcher);
    }

    public function testCommandCanBeSetAndFetched()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);

        \$sendmail->setCommand('/usr/sbin/sendmail -bs');
        \$this->assertEquals('/usr/sbin/sendmail -bs', \$sendmail->getCommand());
        \$sendmail->setCommand('/usr/sbin/sendmail -oi -t');
        \$this->assertEquals('/usr/sbin/sendmail -oi -t', \$sendmail->getCommand());
    }

    public function testSendingMessageIn_t_ModeUsesSimplePipe()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('toByteStream')
                ->once()
                ->with(\$buf);
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\", \"\\n.\" => \"\\n..\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testSendingIn_t_ModeWith_i_FlagDoesntEscapeDot()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('toByteStream')
                ->once()
                ->with(\$buf);
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -i -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testSendingInTModeWith_oi_FlagDoesntEscapeDot()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('toByteStream')
                ->once()
                ->with(\$buf);
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -oi -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testSendingMessageRegeneratesId()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('generateId');
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\", \"\\n.\" => \"\\n..\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testFluidInterface()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getTransport(\$buf);

        \$ref = \$sendmail->setCommand('/foo');
        \$this->assertEquals(\$ref, \$sendmail);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/SendmailTransportTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_SendmailTransportTest extends Swift_Transport_AbstractSmtpEventSupportTest
{
    protected function getTransport(\$buf, \$dispatcher = null, \$addressEncoder = null, \$command = '/usr/sbin/sendmail -bs')
    {
        if (!\$dispatcher) {
            \$dispatcher = \$this->createEventDispatcher();
        }
        \$transport = new Swift_Transport_SendmailTransport(\$buf, \$dispatcher, 'example.org', \$addressEncoder);
        \$transport->setCommand(\$command);

        return \$transport;
    }

    protected function getSendmail(\$buf, \$dispatcher = null)
    {
        if (!\$dispatcher) {
            \$dispatcher = \$this->createEventDispatcher();
        }

        return new Swift_Transport_SendmailTransport(\$buf, \$dispatcher);
    }

    public function testCommandCanBeSetAndFetched()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);

        \$sendmail->setCommand('/usr/sbin/sendmail -bs');
        \$this->assertEquals('/usr/sbin/sendmail -bs', \$sendmail->getCommand());
        \$sendmail->setCommand('/usr/sbin/sendmail -oi -t');
        \$this->assertEquals('/usr/sbin/sendmail -oi -t', \$sendmail->getCommand());
    }

    public function testSendingMessageIn_t_ModeUsesSimplePipe()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('toByteStream')
                ->once()
                ->with(\$buf);
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\", \"\\n.\" => \"\\n..\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testSendingIn_t_ModeWith_i_FlagDoesntEscapeDot()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('toByteStream')
                ->once()
                ->with(\$buf);
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -i -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testSendingInTModeWith_oi_FlagDoesntEscapeDot()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('toByteStream')
                ->once()
                ->with(\$buf);
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -oi -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testSendingMessageRegeneratesId()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getSendmail(\$buf);
        \$message = \$this->createMessage();

        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => 'Foobar', 'zip@button' => 'Zippy']);
        \$message->shouldReceive('generateId');
        \$buf->shouldReceive('initialize')
            ->once();
        \$buf->shouldReceive('terminate')
            ->once();
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([\"\\r\\n\" => \"\\n\", \"\\n.\" => \"\\n..\"]);
        \$buf->shouldReceive('setWriteTranslations')
            ->once()
            ->with([]);

        \$sendmail->setCommand('/usr/sbin/sendmail -t');
        \$this->assertEquals(2, \$sendmail->send(\$message));
    }

    public function testFluidInterface()
    {
        \$buf = \$this->getBuffer();
        \$sendmail = \$this->getTransport(\$buf);

        \$ref = \$sendmail->setCommand('/foo');
        \$this->assertEquals(\$ref, \$sendmail);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/SendmailTransportTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/SendmailTransportTest.php");
    }
}
