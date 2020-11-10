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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/EsmtpTransport/ExtensionSupportTest.php */
class __TwigTemplate_6a84235ee29abdfec0e99ef135f1fb377108f73d280845437d3b92c5ffe10675 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/EsmtpTransport/ExtensionSupportTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/EsmtpTransport/ExtensionSupportTest.php"));

        // line 1
        echo "<?php

require_once dirname(__DIR__).'/EsmtpTransportTest.php';

interface Swift_Transport_EsmtpHandlerMixin extends Swift_Transport_EsmtpHandler
{
    public function setUsername(\$user);

    public function setPassword(\$pass);
}

class Swift_Transport_EsmtpTransport_ExtensionSupportTest extends Swift_Transport_EsmtpTransportTest
{
    public function testExtensionHandlersAreSortedAsNeeded()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(-1);
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$this->assertEquals([\$ext2, \$ext1], \$smtp->getExtensionHandlers());
    }

    public function testHandlersAreNotifiedOfParams()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .*?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('setKeywordParams')
             ->once()
             ->with(['PLAIN', 'LOGIN']);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('setKeywordParams')
             ->zeroOrMoreTimes()
             ->with(['123456']);
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$smtp->start();
    }

    public function testSupportedExtensionHandlersAreRunAfterEhlo()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .*?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('afterEhlo')
             ->once()
             ->with(\$smtp);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('afterEhlo')
             ->zeroOrMoreTimes()
             ->with(\$smtp);
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('afterEhlo')
             ->never()
             ->with(\$smtp);
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
    }

    public function testExtensionsCanModifyMailFromParams()
    {
        \$buf = \$this->getBuffer();
        \$dispatcher = \$this->createEventDispatcher();
        \$smtp = new Swift_Transport_EsmtpTransport(\$buf, [], \$dispatcher, 'example.org');
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$message = \$this->createMessage();

        \$message->shouldReceive('getFrom')
                ->zeroOrMoreTimes()
                ->andReturn(['me@domain' => 'Me']);
        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => null]);

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .*?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"MAIL FROM:<me@domain> FOO ZIP\\r\\n\")
            ->andReturn(2);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(2)
            ->andReturn(\"250 OK\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"RCPT TO:<foo@bar>\\r\\n\")
            ->andReturn(3);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(3)
            ->andReturn(\"250 OK\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('getMailParams')
             ->once()
             ->andReturn('FOO');
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('getMailParams')
             ->once()
             ->andReturn('ZIP');
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(1);
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('getMailParams')
             ->never();
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(-1);
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->send(\$message);
    }

    public function testExtensionsCanModifyRcptParams()
    {
        \$buf = \$this->getBuffer();
        \$dispatcher = \$this->createEventDispatcher();
        \$smtp = new Swift_Transport_EsmtpTransport(\$buf, [], \$dispatcher, 'example.org');
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$message = \$this->createMessage();

        \$message->shouldReceive('getFrom')
                ->zeroOrMoreTimes()
                ->andReturn(['me@domain' => 'Me']);
        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => null]);

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .+?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"MAIL FROM:<me@domain>\\r\\n\")
            ->andReturn(2);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(2)
            ->andReturn(\"250 OK\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"RCPT TO:<foo@bar> FOO ZIP\\r\\n\")
            ->andReturn(3);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(3)
            ->andReturn(\"250 OK\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('getRcptParams')
             ->once()
             ->andReturn('FOO');
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('getRcptParams')
             ->once()
             ->andReturn('ZIP');
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(1);
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('getRcptParams')
             ->never();
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(-1);
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->send(\$message);
    }

    public function testExtensionsAreNotifiedOnCommand()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .+?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"FOO\\r\\n\")
            ->andReturn(2);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(2)
            ->andReturn(\"250 Cool\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('onCommand')
             ->once()
             ->with(\$smtp, \"FOO\\r\\n\", [250, 251], \\Mockery::any(), \\Mockery::any());
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('onCommand')
             ->once()
             ->with(\$smtp, \"FOO\\r\\n\", [250, 251], \\Mockery::any(), \\Mockery::any());
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('onCommand')
             ->never()
             ->with(\\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any());

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->executeCommand(\"FOO\\r\\n\", [250, 251]);
    }

    public function testChainOfCommandAlgorithmWhenNotifyingExtensions()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .+?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->never()
            ->with(\"FOO\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('onCommand')
             ->once()
             ->with(\$smtp, \"FOO\\r\\n\", [250, 251], \\Mockery::any(), \\Mockery::any())
             ->andReturnUsing(function (\$a, \$b, \$c, \$d, &\$e) {
                 \$e = true;

                 return '250 ok';
             });
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('onCommand')
             ->never()
             ->with(\\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any());

        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('onCommand')
             ->never()
             ->with(\\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any());

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->executeCommand(\"FOO\\r\\n\", [250, 251]);
    }

    public function testExtensionsCanExposeMixinMethods()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandlerMixin')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('exposeMixinMethods')
             ->zeroOrMoreTimes()
             ->andReturn(['setUsername', 'setPassword']);
        \$ext1->shouldReceive('setUsername')
             ->once()
             ->with('mick');
        \$ext1->shouldReceive('setPassword')
             ->once()
             ->with('pass');
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$smtp->setUsername('mick');
        \$smtp->setPassword('pass');
    }

    public function testMixinMethodsBeginningWithSetAndNullReturnAreFluid()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandlerMixin')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('exposeMixinMethods')
             ->zeroOrMoreTimes()
             ->andReturn(['setUsername', 'setPassword']);
        \$ext1->shouldReceive('setUsername')
             ->once()
             ->with('mick')
             ->andReturn(null);
        \$ext1->shouldReceive('setPassword')
             ->once()
             ->with('pass')
             ->andReturn(null);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$ret = \$smtp->setUsername('mick');
        \$this->assertEquals(\$smtp, \$ret);
        \$ret = \$smtp->setPassword('pass');
        \$this->assertEquals(\$smtp, \$ret);
    }

    public function testMixinSetterWhichReturnValuesAreNotFluid()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandlerMixin')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('exposeMixinMethods')
             ->zeroOrMoreTimes()
             ->andReturn(['setUsername', 'setPassword']);
        \$ext1->shouldReceive('setUsername')
             ->once()
             ->with('mick')
             ->andReturn('x');
        \$ext1->shouldReceive('setPassword')
             ->once()
             ->with('pass')
             ->andReturn('x');
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$this->assertEquals('x', \$smtp->setUsername('mick'));
        \$this->assertEquals('x', \$smtp->setPassword('pass'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/EsmtpTransport/ExtensionSupportTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require_once dirname(__DIR__).'/EsmtpTransportTest.php';

interface Swift_Transport_EsmtpHandlerMixin extends Swift_Transport_EsmtpHandler
{
    public function setUsername(\$user);

    public function setPassword(\$pass);
}

class Swift_Transport_EsmtpTransport_ExtensionSupportTest extends Swift_Transport_EsmtpTransportTest
{
    public function testExtensionHandlersAreSortedAsNeeded()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(-1);
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$this->assertEquals([\$ext2, \$ext1], \$smtp->getExtensionHandlers());
    }

    public function testHandlersAreNotifiedOfParams()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .*?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('setKeywordParams')
             ->once()
             ->with(['PLAIN', 'LOGIN']);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('setKeywordParams')
             ->zeroOrMoreTimes()
             ->with(['123456']);
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$smtp->start();
    }

    public function testSupportedExtensionHandlersAreRunAfterEhlo()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .*?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('afterEhlo')
             ->once()
             ->with(\$smtp);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('afterEhlo')
             ->zeroOrMoreTimes()
             ->with(\$smtp);
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('afterEhlo')
             ->never()
             ->with(\$smtp);
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
    }

    public function testExtensionsCanModifyMailFromParams()
    {
        \$buf = \$this->getBuffer();
        \$dispatcher = \$this->createEventDispatcher();
        \$smtp = new Swift_Transport_EsmtpTransport(\$buf, [], \$dispatcher, 'example.org');
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$message = \$this->createMessage();

        \$message->shouldReceive('getFrom')
                ->zeroOrMoreTimes()
                ->andReturn(['me@domain' => 'Me']);
        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => null]);

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .*?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"MAIL FROM:<me@domain> FOO ZIP\\r\\n\")
            ->andReturn(2);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(2)
            ->andReturn(\"250 OK\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"RCPT TO:<foo@bar>\\r\\n\")
            ->andReturn(3);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(3)
            ->andReturn(\"250 OK\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('getMailParams')
             ->once()
             ->andReturn('FOO');
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('getMailParams')
             ->once()
             ->andReturn('ZIP');
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(1);
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('getMailParams')
             ->never();
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(-1);
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->send(\$message);
    }

    public function testExtensionsCanModifyRcptParams()
    {
        \$buf = \$this->getBuffer();
        \$dispatcher = \$this->createEventDispatcher();
        \$smtp = new Swift_Transport_EsmtpTransport(\$buf, [], \$dispatcher, 'example.org');
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$message = \$this->createMessage();

        \$message->shouldReceive('getFrom')
                ->zeroOrMoreTimes()
                ->andReturn(['me@domain' => 'Me']);
        \$message->shouldReceive('getTo')
                ->zeroOrMoreTimes()
                ->andReturn(['foo@bar' => null]);

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .+?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"MAIL FROM:<me@domain>\\r\\n\")
            ->andReturn(2);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(2)
            ->andReturn(\"250 OK\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"RCPT TO:<foo@bar> FOO ZIP\\r\\n\")
            ->andReturn(3);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(3)
            ->andReturn(\"250 OK\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('getRcptParams')
             ->once()
             ->andReturn('FOO');
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext1->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('getRcptParams')
             ->once()
             ->andReturn('ZIP');
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('STARTTLS')
             ->andReturn(1);
        \$ext2->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(1);
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('getRcptParams')
             ->never();
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('AUTH')
             ->andReturn(-1);
        \$ext3->shouldReceive('getPriorityOver')
             ->zeroOrMoreTimes()
             ->with('SIZE')
             ->andReturn(-1);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->send(\$message);
    }

    public function testExtensionsAreNotifiedOnCommand()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .+?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with(\"FOO\\r\\n\")
            ->andReturn(2);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(2)
            ->andReturn(\"250 Cool\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('onCommand')
             ->once()
             ->with(\$smtp, \"FOO\\r\\n\", [250, 251], \\Mockery::any(), \\Mockery::any());
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('onCommand')
             ->once()
             ->with(\$smtp, \"FOO\\r\\n\", [250, 251], \\Mockery::any(), \\Mockery::any());
        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('onCommand')
             ->never()
             ->with(\\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any());

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->executeCommand(\"FOO\\r\\n\", [250, 251]);
    }

    public function testChainOfCommandAlgorithmWhenNotifyingExtensions()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();
        \$ext3 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$buf->shouldReceive('readLine')
            ->once()
            ->with(0)
            ->andReturn(\"220 server.com foo\\r\\n\");
        \$buf->shouldReceive('write')
            ->once()
            ->with('~^EHLO .+?\\r\\n\$~D')
            ->andReturn(1);
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-ServerName.tld\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250-AUTH PLAIN LOGIN\\r\\n\");
        \$buf->shouldReceive('readLine')
            ->once()
            ->with(1)
            ->andReturn(\"250 SIZE=123456\\r\\n\");
        \$buf->shouldReceive('write')
            ->never()
            ->with(\"FOO\\r\\n\");
        \$this->finishBuffer(\$buf);

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('onCommand')
             ->once()
             ->with(\$smtp, \"FOO\\r\\n\", [250, 251], \\Mockery::any(), \\Mockery::any())
             ->andReturnUsing(function (\$a, \$b, \$c, \$d, &\$e) {
                 \$e = true;

                 return '250 ok';
             });
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('SIZE');
        \$ext2->shouldReceive('onCommand')
             ->never()
             ->with(\\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any());

        \$ext3->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$ext3->shouldReceive('onCommand')
             ->never()
             ->with(\\Mockery::any(), \\Mockery::any(), \\Mockery::any(), \\Mockery::any());

        \$smtp->setExtensionHandlers([\$ext1, \$ext2, \$ext3]);
        \$smtp->start();
        \$smtp->executeCommand(\"FOO\\r\\n\", [250, 251]);
    }

    public function testExtensionsCanExposeMixinMethods()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandlerMixin')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('exposeMixinMethods')
             ->zeroOrMoreTimes()
             ->andReturn(['setUsername', 'setPassword']);
        \$ext1->shouldReceive('setUsername')
             ->once()
             ->with('mick');
        \$ext1->shouldReceive('setPassword')
             ->once()
             ->with('pass');
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$smtp->setUsername('mick');
        \$smtp->setPassword('pass');
    }

    public function testMixinMethodsBeginningWithSetAndNullReturnAreFluid()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandlerMixin')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('exposeMixinMethods')
             ->zeroOrMoreTimes()
             ->andReturn(['setUsername', 'setPassword']);
        \$ext1->shouldReceive('setUsername')
             ->once()
             ->with('mick')
             ->andReturn(null);
        \$ext1->shouldReceive('setPassword')
             ->once()
             ->with('pass')
             ->andReturn(null);
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$ret = \$smtp->setUsername('mick');
        \$this->assertEquals(\$smtp, \$ret);
        \$ret = \$smtp->setPassword('pass');
        \$this->assertEquals(\$smtp, \$ret);
    }

    public function testMixinSetterWhichReturnValuesAreNotFluid()
    {
        \$buf = \$this->getBuffer();
        \$smtp = \$this->getTransport(\$buf);
        \$ext1 = \$this->getMockery('Swift_Transport_EsmtpHandlerMixin')->shouldIgnoreMissing();
        \$ext2 = \$this->getMockery('Swift_Transport_EsmtpHandler')->shouldIgnoreMissing();

        \$ext1->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('AUTH');
        \$ext1->shouldReceive('exposeMixinMethods')
             ->zeroOrMoreTimes()
             ->andReturn(['setUsername', 'setPassword']);
        \$ext1->shouldReceive('setUsername')
             ->once()
             ->with('mick')
             ->andReturn('x');
        \$ext1->shouldReceive('setPassword')
             ->once()
             ->with('pass')
             ->andReturn('x');
        \$ext2->shouldReceive('getHandledKeyword')
             ->zeroOrMoreTimes()
             ->andReturn('STARTTLS');
        \$this->finishBuffer(\$buf);

        \$smtp->setExtensionHandlers([\$ext1, \$ext2]);
        \$this->assertEquals('x', \$smtp->setUsername('mick'));
        \$this->assertEquals('x', \$smtp->setPassword('pass'));
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/EsmtpTransport/ExtensionSupportTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/EsmtpTransport/ExtensionSupportTest.php");
    }
}
