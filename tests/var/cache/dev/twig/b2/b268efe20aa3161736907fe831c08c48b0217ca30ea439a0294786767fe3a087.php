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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/FixtureMonologExtensionTest.php */
class __TwigTemplate_e9cd368138af2e4cd9975db5a71424737681b7499cc615095a0819a624ed0981 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/FixtureMonologExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/FixtureMonologExtensionTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection;

use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\MonologExtension;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\LoggerChannelPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

abstract class FixtureMonologExtensionTest extends DependencyInjectionTest
{
    public function testLoadWithSeveralHandlers()
    {
        \$container = \$this->getContainer('multiple_handlers');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(4, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(3, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.filtered')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::ERROR, false, 0666, false));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), \\Monolog\\Logger::ERROR, 0, true, true, \\Monolog\\Logger::NOTICE));

        \$handler = \$container->getDefinition('monolog.handler.filtered');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FilterHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested2'), array(\\Monolog\\Logger::WARNING, \\Monolog\\Logger::ERROR), \\Monolog\\Logger::EMERGENCY, true));
    }

    public function testLoadWithOverwriting()
    {
        \$container = \$this->getContainer('overwriting');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(3, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::WARNING, true, null, false));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), \\Monolog\\Logger::ERROR, 0, true, true, null));
    }

    public function testLoadWithNewAtEnd()
    {
        \$container = \$this->getContainer('new_at_end');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.new'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(4, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(3, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.new')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.new');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/monolog.log', \\Monolog\\Logger::ERROR, true, null, false));
    }

    public function testLoadWithNewAndPriority()
    {
        \$container = \$this->getContainer('new_and_priority');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.first'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.last'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(5, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(4, \$logger, 'pushHandler', array(new Reference('monolog.handler.first')));
        \$this->assertDICDefinitionMethodCallAt(3, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.last')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\BufferHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), 0, \\Monolog\\Logger::INFO, true, false));

        \$handler = \$container->getDefinition('monolog.handler.first');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RotatingFileHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/monolog.log', 0, \\Monolog\\Logger::ERROR, true, null));

        \$handler = \$container->getDefinition('monolog.handler.last');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/last.log', \\Monolog\\Logger::ERROR, true, null, false));
    }

    public function testHandlersWithChannels()
    {
        \$container = \$this->getContainer('handlers_with_channels');

        \$this->assertEquals(
            array(
                'monolog.handler.custom' => array('type' => 'inclusive', 'elements' => array('foo')),
                'monolog.handler.main' => array('type' => 'exclusive', 'elements' => array('foo', 'bar')),
                'monolog.handler.extra' => null,
                'monolog.handler.more' => array('type' => 'inclusive', 'elements' => array('security', 'doctrine')),
            ),
            \$container->getParameter('monolog.handlers_to_channels')
        );
    }

    public function testSingleEmailRecipient()
    {
        \$container = \$this->getContainer('single_email_recipient');

        \$this->assertEquals(array(
            new Reference('mailer'),
            'error@example.com', // from
            array('error@example.com'), // to
            'An Error Occurred!', // subject
            null,
        ), \$container->getDefinition('monolog.handler.swift.mail_message_factory')->getArguments());
    }

    public function testServerLog()
    {
        if (!class_exists('Symfony\\Bridge\\Monolog\\Handler\\ServerLogHandler')) {
            \$this->markTestSkipped('The ServerLogHandler is not available.');
        }

        \$container = \$this->getContainer('server_log');

        \$this->assertEquals(array(
            '0:9911',
            100,
            true,
        ), \$container->getDefinition('monolog.handler.server_log')->getArguments());
    }

    public function testMultipleEmailRecipients()
    {
        \$container = \$this->getContainer('multiple_email_recipients');

        \$this->assertEquals(array(
            new Reference('mailer'),
            'error@example.com',
            array('dev1@example.com', 'dev2@example.com'),
            'An Error Occurred!',
            null
        ), \$container->getDefinition('monolog.handler.swift.mail_message_factory')->getArguments());
    }

    public function testChannelParametersResolved()
    {
        \$container = \$this->getContainer('parameterized_handlers');

        \$this->assertEquals(
            array(
                'monolog.handler.custom' => array('type' => 'inclusive', 'elements' => array('some_channel')),
            ),
            \$container->getParameter('monolog.handlers_to_channels')
        );
    }

    public function testPsr3MessageProcessingEnabled()
    {
        \$container = \$this->getContainer('parameterized_handlers');

        \$logger = \$container->getDefinition('monolog.handler.custom');

        \$methodCalls = \$logger->getMethodCalls();

        \$this->assertContains(array('pushProcessor', array(new Reference('monolog.processor.psr_log_message'))), \$methodCalls, 'The PSR-3 processor should be enabled', false, false);
    }

    public function testPsr3MessageProcessingDisabled()
    {
        \$container = \$this->getContainer('process_psr_3_messages_disabled');

        \$logger = \$container->getDefinition('monolog.handler.custom');

        \$methodCalls = \$logger->getMethodCalls();

        \$this->assertNotContains(array('pushProcessor', array(new Reference('monolog.processor.psr_log_message'))), \$methodCalls, 'The PSR-3 processor should not be enabled', false, false);
    }

    public function testNativeMailer()
    {
        \$container = \$this->getContainer('native_mailer');

        \$logger = \$container->getDefinition('monolog.handler.mailer');
        \$methodCalls = \$logger->getMethodCalls();

        \$this->assertCount(2, \$methodCalls);
        \$this->assertSame(['addHeader', [['Foo: bar', 'Baz: inga']]], \$methodCalls[1]);
    }

    protected function getContainer(\$fixture)
    {
        \$container = new ContainerBuilder();
        \$container->registerExtension(new MonologExtension());

        \$this->loadFixture(\$container, \$fixture);

        \$container->getCompilerPassConfig()->setOptimizationPasses(array());
        \$container->getCompilerPassConfig()->setRemovingPasses(array());
        \$container->addCompilerPass(new LoggerChannelPass());
        \$container->compile();

        return \$container;
    }

    abstract protected function loadFixture(ContainerBuilder \$container, \$fixture);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/FixtureMonologExtensionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MonologBundle\\Tests\\DependencyInjection;

use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\MonologExtension;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\LoggerChannelPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

abstract class FixtureMonologExtensionTest extends DependencyInjectionTest
{
    public function testLoadWithSeveralHandlers()
    {
        \$container = \$this->getContainer('multiple_handlers');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(4, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(3, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.filtered')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::ERROR, false, 0666, false));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), \\Monolog\\Logger::ERROR, 0, true, true, \\Monolog\\Logger::NOTICE));

        \$handler = \$container->getDefinition('monolog.handler.filtered');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FilterHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested2'), array(\\Monolog\\Logger::WARNING, \\Monolog\\Logger::ERROR), \\Monolog\\Logger::EMERGENCY, true));
    }

    public function testLoadWithOverwriting()
    {
        \$container = \$this->getContainer('overwriting');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(3, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::WARNING, true, null, false));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), \\Monolog\\Logger::ERROR, 0, true, true, null));
    }

    public function testLoadWithNewAtEnd()
    {
        \$container = \$this->getContainer('new_at_end');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.new'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(4, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(3, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.new')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.new');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/monolog.log', \\Monolog\\Logger::ERROR, true, null, false));
    }

    public function testLoadWithNewAndPriority()
    {
        \$container = \$this->getContainer('new_and_priority');

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.first'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.last'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertCount(5, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(4, \$logger, 'pushHandler', array(new Reference('monolog.handler.first')));
        \$this->assertDICDefinitionMethodCallAt(3, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));
        \$this->assertDICDefinitionMethodCallAt(2, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.last')));
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\BufferHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), 0, \\Monolog\\Logger::INFO, true, false));

        \$handler = \$container->getDefinition('monolog.handler.first');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RotatingFileHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/monolog.log', 0, \\Monolog\\Logger::ERROR, true, null));

        \$handler = \$container->getDefinition('monolog.handler.last');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/last.log', \\Monolog\\Logger::ERROR, true, null, false));
    }

    public function testHandlersWithChannels()
    {
        \$container = \$this->getContainer('handlers_with_channels');

        \$this->assertEquals(
            array(
                'monolog.handler.custom' => array('type' => 'inclusive', 'elements' => array('foo')),
                'monolog.handler.main' => array('type' => 'exclusive', 'elements' => array('foo', 'bar')),
                'monolog.handler.extra' => null,
                'monolog.handler.more' => array('type' => 'inclusive', 'elements' => array('security', 'doctrine')),
            ),
            \$container->getParameter('monolog.handlers_to_channels')
        );
    }

    public function testSingleEmailRecipient()
    {
        \$container = \$this->getContainer('single_email_recipient');

        \$this->assertEquals(array(
            new Reference('mailer'),
            'error@example.com', // from
            array('error@example.com'), // to
            'An Error Occurred!', // subject
            null,
        ), \$container->getDefinition('monolog.handler.swift.mail_message_factory')->getArguments());
    }

    public function testServerLog()
    {
        if (!class_exists('Symfony\\Bridge\\Monolog\\Handler\\ServerLogHandler')) {
            \$this->markTestSkipped('The ServerLogHandler is not available.');
        }

        \$container = \$this->getContainer('server_log');

        \$this->assertEquals(array(
            '0:9911',
            100,
            true,
        ), \$container->getDefinition('monolog.handler.server_log')->getArguments());
    }

    public function testMultipleEmailRecipients()
    {
        \$container = \$this->getContainer('multiple_email_recipients');

        \$this->assertEquals(array(
            new Reference('mailer'),
            'error@example.com',
            array('dev1@example.com', 'dev2@example.com'),
            'An Error Occurred!',
            null
        ), \$container->getDefinition('monolog.handler.swift.mail_message_factory')->getArguments());
    }

    public function testChannelParametersResolved()
    {
        \$container = \$this->getContainer('parameterized_handlers');

        \$this->assertEquals(
            array(
                'monolog.handler.custom' => array('type' => 'inclusive', 'elements' => array('some_channel')),
            ),
            \$container->getParameter('monolog.handlers_to_channels')
        );
    }

    public function testPsr3MessageProcessingEnabled()
    {
        \$container = \$this->getContainer('parameterized_handlers');

        \$logger = \$container->getDefinition('monolog.handler.custom');

        \$methodCalls = \$logger->getMethodCalls();

        \$this->assertContains(array('pushProcessor', array(new Reference('monolog.processor.psr_log_message'))), \$methodCalls, 'The PSR-3 processor should be enabled', false, false);
    }

    public function testPsr3MessageProcessingDisabled()
    {
        \$container = \$this->getContainer('process_psr_3_messages_disabled');

        \$logger = \$container->getDefinition('monolog.handler.custom');

        \$methodCalls = \$logger->getMethodCalls();

        \$this->assertNotContains(array('pushProcessor', array(new Reference('monolog.processor.psr_log_message'))), \$methodCalls, 'The PSR-3 processor should not be enabled', false, false);
    }

    public function testNativeMailer()
    {
        \$container = \$this->getContainer('native_mailer');

        \$logger = \$container->getDefinition('monolog.handler.mailer');
        \$methodCalls = \$logger->getMethodCalls();

        \$this->assertCount(2, \$methodCalls);
        \$this->assertSame(['addHeader', [['Foo: bar', 'Baz: inga']]], \$methodCalls[1]);
    }

    protected function getContainer(\$fixture)
    {
        \$container = new ContainerBuilder();
        \$container->registerExtension(new MonologExtension());

        \$this->loadFixture(\$container, \$fixture);

        \$container->getCompilerPassConfig()->setOptimizationPasses(array());
        \$container->getCompilerPassConfig()->setRemovingPasses(array());
        \$container->addCompilerPass(new LoggerChannelPass());
        \$container->compile();

        return \$container;
    }

    abstract protected function loadFixture(ContainerBuilder \$container, \$fixture);
}
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/FixtureMonologExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/FixtureMonologExtensionTest.php");
    }
}
