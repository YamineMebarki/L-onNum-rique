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

/* vendor/symfony/swiftmailer-bundle/Tests/Command/SendEmailCommandTest.php */
class __TwigTemplate_87c820cef3b0601baec7474ddecc9d520a25d6fda48797de476f1f2c7b273e57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/Command/SendEmailCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/Command/SendEmailCommandTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\SwiftmailerBundle\\Tests\\Command;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class SendEmailCommandTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testRecoverSpoolTransport()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->getMockBuilder('Swift_Spool')->getMock();
        \$spool
            ->expects(\$this->once())
            ->method('flushQueue')
            ->with(\$realTransport)
            ->willReturn(5)
        ;

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$tester = \$this->executeCommand(\$container);

        \$this->assertStringEndsWith(\"5 emails sent\\n\", \$tester->getDisplay());
    }

    public function testTimeLimitInteger()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container, ['--time-limit' => 5]);

        \$this->assertSame(5, \$spool->getTimeLimit());
    }

    public function testTimeLimitNull()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container);

        \$this->assertNull(\$spool->getTimeLimit());
    }

    public function testMessageLimitInteger()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container, ['--message-limit' => 5]);

        \$this->assertSame(5, \$spool->getMessageLimit());
    }

    public function testMessageLimitNull()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container);

        \$this->assertNull(\$spool->getMessageLimit());
    }

    public function testRecoverLoadbalancedTransportWithSpool()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->getMockBuilder('Swift_Spool')->getMock();
        \$spool
            ->expects(\$this->once())
            ->method('flushQueue')
            ->with(\$realTransport)
            ->willReturn(7)
        ;

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$loadBalancedTransport = new \\Swift_Transport_LoadBalancedTransport();
        \$loadBalancedTransport->setTransports([\$spoolTransport]);

        \$container = \$this->buildContainer(\$loadBalancedTransport, \$realTransport);
        \$tester = \$this->executeCommand(\$container);

        \$this->assertStringEndsWith(\"7 emails sent\\n\", \$tester->getDisplay());
    }

    /**
     * @return Container
     */
    private function buildContainer(\\Swift_Transport \$transport, \\Swift_Transport \$realTransport, \$name = 'default')
    {
        \$mailer = new \\Swift_Mailer(\$transport);

        \$container = new Container();
        \$container->set(sprintf('swiftmailer.mailer.%s', \$name), \$mailer);
        \$container->set(sprintf('swiftmailer.mailer.%s.transport.real', \$name), \$realTransport);
        \$container->setParameter('swiftmailer.mailers', [\$name => \$mailer]);
        \$container->setParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name), true);

        return \$container;
    }

    /**
     * @return CommandTester
     */
    private function executeCommand(ContainerInterface \$container, \$input = [], \$options = [])
    {
        \$kernel = \$this->getMockBuilder(KernelInterface::class)->getMock();
        \$kernel->expects(\$this->any())->method('getContainer')->willReturn(\$container);
        \$kernel->expects(\$this->any())->method('getBundles')->willReturn([]);

        \$application = new Application(\$kernel);
        \$application->add(new SendEmailCommand());

        \$tester = new CommandTester(\$application->get('swiftmailer:spool:send'));
        \$tester->execute(\$input, \$options);

        return \$tester;
    }

    /**
     * @return \\Swift_ConfigurableSpool
     */
    private function configurableSpool(): \\Swift_ConfigurableSpool
    {
        return new class() extends \\Swift_ConfigurableSpool {
            public function start()
            {
            }

            public function stop()
            {
            }

            public function isStarted()
            {
            }

            public function queueMessage(\\Swift_Mime_SimpleMessage \$message)
            {
            }

            public function flushQueue(\\Swift_Transport \$transport, &\$failedRecipients = null)
            {
            }
        };
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/Command/SendEmailCommandTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\SwiftmailerBundle\\Tests\\Command;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class SendEmailCommandTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testRecoverSpoolTransport()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->getMockBuilder('Swift_Spool')->getMock();
        \$spool
            ->expects(\$this->once())
            ->method('flushQueue')
            ->with(\$realTransport)
            ->willReturn(5)
        ;

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$tester = \$this->executeCommand(\$container);

        \$this->assertStringEndsWith(\"5 emails sent\\n\", \$tester->getDisplay());
    }

    public function testTimeLimitInteger()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container, ['--time-limit' => 5]);

        \$this->assertSame(5, \$spool->getTimeLimit());
    }

    public function testTimeLimitNull()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container);

        \$this->assertNull(\$spool->getTimeLimit());
    }

    public function testMessageLimitInteger()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container, ['--message-limit' => 5]);

        \$this->assertSame(5, \$spool->getMessageLimit());
    }

    public function testMessageLimitNull()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->configurableSpool();

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$container = \$this->buildContainer(\$spoolTransport, \$realTransport);
        \$this->executeCommand(\$container);

        \$this->assertNull(\$spool->getMessageLimit());
    }

    public function testRecoverLoadbalancedTransportWithSpool()
    {
        \$realTransport = \$this->getMockBuilder('Swift_Transport')->getMock();

        \$spool = \$this->getMockBuilder('Swift_Spool')->getMock();
        \$spool
            ->expects(\$this->once())
            ->method('flushQueue')
            ->with(\$realTransport)
            ->willReturn(7)
        ;

        \$spoolTransport = new \\Swift_Transport_SpoolTransport(new \\Swift_Events_SimpleEventDispatcher(), \$spool);

        \$loadBalancedTransport = new \\Swift_Transport_LoadBalancedTransport();
        \$loadBalancedTransport->setTransports([\$spoolTransport]);

        \$container = \$this->buildContainer(\$loadBalancedTransport, \$realTransport);
        \$tester = \$this->executeCommand(\$container);

        \$this->assertStringEndsWith(\"7 emails sent\\n\", \$tester->getDisplay());
    }

    /**
     * @return Container
     */
    private function buildContainer(\\Swift_Transport \$transport, \\Swift_Transport \$realTransport, \$name = 'default')
    {
        \$mailer = new \\Swift_Mailer(\$transport);

        \$container = new Container();
        \$container->set(sprintf('swiftmailer.mailer.%s', \$name), \$mailer);
        \$container->set(sprintf('swiftmailer.mailer.%s.transport.real', \$name), \$realTransport);
        \$container->setParameter('swiftmailer.mailers', [\$name => \$mailer]);
        \$container->setParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name), true);

        return \$container;
    }

    /**
     * @return CommandTester
     */
    private function executeCommand(ContainerInterface \$container, \$input = [], \$options = [])
    {
        \$kernel = \$this->getMockBuilder(KernelInterface::class)->getMock();
        \$kernel->expects(\$this->any())->method('getContainer')->willReturn(\$container);
        \$kernel->expects(\$this->any())->method('getBundles')->willReturn([]);

        \$application = new Application(\$kernel);
        \$application->add(new SendEmailCommand());

        \$tester = new CommandTester(\$application->get('swiftmailer:spool:send'));
        \$tester->execute(\$input, \$options);

        return \$tester;
    }

    /**
     * @return \\Swift_ConfigurableSpool
     */
    private function configurableSpool(): \\Swift_ConfigurableSpool
    {
        return new class() extends \\Swift_ConfigurableSpool {
            public function start()
            {
            }

            public function stop()
            {
            }

            public function isStarted()
            {
            }

            public function queueMessage(\\Swift_Mime_SimpleMessage \$message)
            {
            }

            public function flushQueue(\\Swift_Transport \$transport, &\$failedRecipients = null)
            {
            }
        };
    }
}
", "vendor/symfony/swiftmailer-bundle/Tests/Command/SendEmailCommandTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/Command/SendEmailCommandTest.php");
    }
}
