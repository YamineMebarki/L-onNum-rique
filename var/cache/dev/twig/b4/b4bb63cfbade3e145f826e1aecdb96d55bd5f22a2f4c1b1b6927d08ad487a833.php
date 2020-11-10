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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/MonologExtensionTest.php */
class __TwigTemplate_5a9aa7ed18bfecde1fc34813251ed19c10d69fc82f3a4b57dc3001d1c98d5ad5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/MonologExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/MonologExtensionTest.php"));

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
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;

class MonologExtensionTest extends DependencyInjectionTest
{
    public function testLoadWithDefault()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'stream')))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('%kernel.logs_dir%/%kernel.environment%.log', \\Monolog\\Logger::DEBUG, true, null, false));
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));
    }

    public function testLoadWithCustomValues()
    {
        \$container = \$this->getContainer(array(array('handlers' => array(
            'custom' => array('type' => 'stream', 'path' => '/tmp/symfony.log', 'bubble' => false, 'level' => 'ERROR', 'file_permission' => '0666', 'use_locking' => true)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::ERROR, false, 0666, true));
    }

    public function testLoadWithNestedHandler()
    {
        \$container = \$this->getContainer(array(array('handlers' => array(
            'custom' => array('type' => 'stream', 'path' => '/tmp/symfony.log', 'bubble' => false, 'level' => 'ERROR', 'file_permission' => '0666'),
            'nested' => array('type' => 'stream', 'path' => '/tmp/symfony.log', 'bubble' => false, 'level' => 'ERROR', 'file_permission' => '0666', 'nested' => true)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));

        \$logger = \$container->getDefinition('monolog.logger');
        // Nested handler must not be pushed to logger
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::ERROR, false, 0666, false));
    }

    public function testLoadWithServiceHandler()
    {
        \$container = \$this->getContainer(
            array(array('handlers' => array('custom' => array('type' => 'service', 'id' => 'some.service.id')))),
            array('some.service.id' => new Definition('stdClass', array('foo', false)))
        );

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasAlias('monolog.handler.custom'));

        \$logger = \$container->getDefinition('monolog.logger');
        // Custom service handler must be pushed to logger
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));

        \$handler = \$container->findDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'stdClass');
        \$this->assertDICConstructorArguments(\$handler, array('foo', false));
    }

    public function testLoadWithNestedServiceHandler()
    {
        \$container = \$this->getContainer(
            array(array('handlers' => array('custom' => array('type' => 'service', 'id' => 'some.service.id', 'nested' => true)))),
            array('some.service.id' => new Definition('stdClass', array('foo', false)))
        );

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasAlias('monolog.handler.custom'));

        \$logger = \$container->getDefinition('monolog.logger');
        // Nested service handler must not be pushed to logger
        \$this->assertCount(1, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->findDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'stdClass');
        \$this->assertDICConstructorArguments(\$handler, array('foo', false));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionWhenInvalidHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'invalid_handler')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingFingerscrossedWithoutHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'fingers_crossed')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingFilterWithoutHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'filter')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingBufferWithoutHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'buffer')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingGelfWithoutPublisher()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('gelf' => array('type' => 'gelf')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingGelfWithoutPublisherHostname()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('gelf' => array('type' => 'gelf', 'publisher' => array())))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingServiceWithoutId()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'service')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingDebugName()
    {
        // logger
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('debug' => array('type' => 'stream')))), \$container);
    }

    public function testSyslogHandlerWithLogopts()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'syslog', 'logopts' => LOG_CONS)))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\SyslogHandler');
        \$this->assertDICConstructorArguments(\$handler, array(false, 'user', \\Monolog\\Logger::DEBUG, true, LOG_CONS));
    }

    public function testRollbarHandlerCreatesNotifier()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'rollbar', 'token' => 'MY_TOKEN')))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RollbarHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.rollbar.notifier.1c8e6a67728dff6a209f828427128dd8b3c2b746'), \\Monolog\\Logger::DEBUG, true));
    }

    public function testRollbarHandlerReusesNotifier()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'rollbar', 'id' => 'my_rollbar_id')))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RollbarHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('my_rollbar_id'), \\Monolog\\Logger::DEBUG, true));
    }

    public function testSocketHandler()
    {
        try {
            \$this->getContainer(array(array('handlers' => array('socket' => array('type' => 'socket')))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('connection_string', \$e->getMessage());
        }

        \$container = \$this->getContainer(array(array('handlers' => array('socket' => array(
            'type' => 'socket', 'timeout' => 1, 'persistent' => true,
            'connection_string' => 'localhost:50505', 'connection_timeout' => '0.6')
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.socket'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.socket')));

        \$handler = \$container->getDefinition('monolog.handler.socket');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\SocketHandler');
        \$this->assertDICConstructorArguments(\$handler, array('localhost:50505', \\Monolog\\Logger::DEBUG, true));
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));
        \$this->assertDICDefinitionMethodCallAt(1, \$handler, 'setTimeout', array('1'));
        \$this->assertDICDefinitionMethodCallAt(2, \$handler, 'setConnectionTimeout', array('0.6'));
        \$this->assertDICDefinitionMethodCallAt(3, \$handler, 'setPersistent', array(true));
    }

    public function testRavenHandlerWhenConfigurationIsWrong()
    {
        try {
            \$this->getContainer(array(array('handlers' => array('raven' => array('type' => 'raven')))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('DSN', \$e->getMessage());
        }
    }

    public function testRavenHandlerWhenADSNIsSpecified()
    {
        \$dsn = 'http://43f6017361224d098402974103bfc53d:a6a0538fc2934ba2bed32e08741b2cd3@marca.python.live.cheggnet.com:9000/1';

        \$container = \$this->getContainer(array(array('handlers' => array('raven' => array(
            'type' => 'raven', 'dsn' => \$dsn)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.raven'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.raven')));

        \$this->assertTrue(\$container->hasDefinition('monolog.raven.client.'.sha1(\$dsn)));

        \$handler = \$container->getDefinition('monolog.handler.raven');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RavenHandler');
    }

    public function testRavenHandlerWhenADSNAndAClientAreSpecified()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('raven' => array(
            'type' => 'raven', 'dsn' => 'foobar', 'client_id' => 'raven.client')
        ))));

        \$this->assertFalse(\$container->hasDefinition('raven.client'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.raven')));

        \$handler = \$container->getDefinition('monolog.handler.raven');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('raven.client'), 100, true));
    }

    public function testRavenHandlerWhenAClientIsSpecified()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('raven' => array(
            'type' => 'raven', 'client_id' => 'raven.client')
        ))));

        \$this->assertFalse(\$container->hasDefinition('raven.client'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.raven')));

        \$handler = \$container->getDefinition('monolog.handler.raven');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('raven.client'), 100, true));
    }

    public function testLogglyHandler()
    {
        \$token = '026308d8-2b63-4225-8fe9-e01294b6e472';
        try {
            \$this->getContainer(array(array('handlers' => array('loggly' => array('type' => 'loggly')))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('token', \$e->getMessage());
        }

        try {
            \$this->getContainer(array(array('handlers' => array('loggly' => array(
                'type' => 'loggly', 'token' => \$token, 'tags' => 'x, 1zone ,www.loggly.com,-us,apache\$')
            ))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('-us, apache\$', \$e->getMessage());
        }

        \$container = \$this->getContainer(array(array('handlers' => array('loggly' => array(
            'type' => 'loggly', 'token' => \$token)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.loggly'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.loggly')));
        \$handler = \$container->getDefinition('monolog.handler.loggly');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\LogglyHandler');
        \$this->assertDICConstructorArguments(\$handler, array(\$token, \\Monolog\\Logger::DEBUG, true));
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));

        \$container = \$this->getContainer(array(array('handlers' => array('loggly' => array(
            'type' => 'loggly', 'token' => \$token, 'tags' => array(' ', 'foo', '', 'bar'))
        ))));
        \$handler = \$container->getDefinition('monolog.handler.loggly');
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));
        \$this->assertDICDefinitionMethodCallAt(1, \$handler, 'setTag', array('foo,bar'));
    }

    /** @group legacy */
    public function testFingersCrossedHandlerWhenExcluded404sAreSpecified()
    {
        \$container = \$this->getContainer(array(array('handlers' => array(
            'main' => array('type' => 'fingers_crossed', 'handler' => 'nested', 'excluded_404s' => array('^/foo', '^/bar')),
            'nested' => array('type' => 'stream', 'path' => '/tmp/symfony.log')
        ))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main.not_found_strategy'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$strategy = \$container->getDefinition('monolog.handler.main.not_found_strategy');
        \$this->assertDICDefinitionClass(\$strategy, 'Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy');
        \$this->assertDICConstructorArguments(\$strategy, array(new Reference('request_stack'), array('^/foo', '^/bar'), \\Monolog\\Logger::WARNING));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), new Reference('monolog.handler.main.not_found_strategy'), 0, true, true, null));
    }

    public function testFingersCrossedHandlerWhenExcludedHttpCodesAreSpecified()
    {
        if (!class_exists('Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\HttpCodeActivationStrategy')) {
            \$this->markTestSkipped('Symfony Monolog 4.1+ is needed.');
        }

        \$container = \$this->getContainer(array(array('handlers' => array(
            'main' => array(
                'type' => 'fingers_crossed',
                'handler' => 'nested',
                'excluded_http_codes' => array(403, 404, array(405 => array('^/foo', '^/bar')))
            ),
            'nested' => array('type' => 'stream', 'path' => '/tmp/symfony.log')
        ))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main.http_code_strategy'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$strategy = \$container->getDefinition('monolog.handler.main.http_code_strategy');
        \$this->assertDICDefinitionClass(\$strategy, 'Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\HttpCodeActivationStrategy');
        \$this->assertDICConstructorArguments(\$strategy, array(
            new Reference('request_stack'),
            array(
                array('code' => 403, 'urls' => array()),
                array('code' => 404, 'urls' => array()),
                array('code' => 405, 'urls' => array('^/foo', '^/bar'))
            ),
            \\Monolog\\Logger::WARNING
        ));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), new Reference('monolog.handler.main.http_code_strategy'), 0, true, true, null));
    }

    protected function getContainer(array \$config = array(), array \$thirdPartyDefinitions = array())
    {
        \$container = new ContainerBuilder();
        foreach (\$thirdPartyDefinitions as \$id => \$definition) {
            \$container->setDefinition(\$id, \$definition);
        }

        \$container->getCompilerPassConfig()->setOptimizationPasses(array());
        \$container->getCompilerPassConfig()->setRemovingPasses(array());
        \$container->addCompilerPass(new LoggerChannelPass());

        \$loader = new MonologExtension();
        \$loader->load(\$config, \$container);
        \$container->compile();

        return \$container;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/MonologExtensionTest.php";
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
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException;

class MonologExtensionTest extends DependencyInjectionTest
{
    public function testLoadWithDefault()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'stream')))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('%kernel.logs_dir%/%kernel.environment%.log', \\Monolog\\Logger::DEBUG, true, null, false));
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));
    }

    public function testLoadWithCustomValues()
    {
        \$container = \$this->getContainer(array(array('handlers' => array(
            'custom' => array('type' => 'stream', 'path' => '/tmp/symfony.log', 'bubble' => false, 'level' => 'ERROR', 'file_permission' => '0666', 'use_locking' => true)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::ERROR, false, 0666, true));
    }

    public function testLoadWithNestedHandler()
    {
        \$container = \$this->getContainer(array(array('handlers' => array(
            'custom' => array('type' => 'stream', 'path' => '/tmp/symfony.log', 'bubble' => false, 'level' => 'ERROR', 'file_permission' => '0666'),
            'nested' => array('type' => 'stream', 'path' => '/tmp/symfony.log', 'bubble' => false, 'level' => 'ERROR', 'file_permission' => '0666', 'nested' => true)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.custom'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));

        \$logger = \$container->getDefinition('monolog.logger');
        // Nested handler must not be pushed to logger
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));

        \$handler = \$container->getDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\StreamHandler');
        \$this->assertDICConstructorArguments(\$handler, array('/tmp/symfony.log', \\Monolog\\Logger::ERROR, false, 0666, false));
    }

    public function testLoadWithServiceHandler()
    {
        \$container = \$this->getContainer(
            array(array('handlers' => array('custom' => array('type' => 'service', 'id' => 'some.service.id')))),
            array('some.service.id' => new Definition('stdClass', array('foo', false)))
        );

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasAlias('monolog.handler.custom'));

        \$logger = \$container->getDefinition('monolog.logger');
        // Custom service handler must be pushed to logger
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.custom')));

        \$handler = \$container->findDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'stdClass');
        \$this->assertDICConstructorArguments(\$handler, array('foo', false));
    }

    public function testLoadWithNestedServiceHandler()
    {
        \$container = \$this->getContainer(
            array(array('handlers' => array('custom' => array('type' => 'service', 'id' => 'some.service.id', 'nested' => true)))),
            array('some.service.id' => new Definition('stdClass', array('foo', false)))
        );

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasAlias('monolog.handler.custom'));

        \$logger = \$container->getDefinition('monolog.logger');
        // Nested service handler must not be pushed to logger
        \$this->assertCount(1, \$logger->getMethodCalls());
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));

        \$handler = \$container->findDefinition('monolog.handler.custom');
        \$this->assertDICDefinitionClass(\$handler, 'stdClass');
        \$this->assertDICConstructorArguments(\$handler, array('foo', false));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionWhenInvalidHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'invalid_handler')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingFingerscrossedWithoutHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'fingers_crossed')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingFilterWithoutHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'filter')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingBufferWithoutHandler()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'buffer')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingGelfWithoutPublisher()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('gelf' => array('type' => 'gelf')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingGelfWithoutPublisherHostname()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('gelf' => array('type' => 'gelf', 'publisher' => array())))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingServiceWithoutId()
    {
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('main' => array('type' => 'service')))), \$container);
    }

    /**
     * @expectedException Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException
     */
    public function testExceptionWhenUsingDebugName()
    {
        // logger
        \$container = new ContainerBuilder();
        \$loader = new MonologExtension();

        \$loader->load(array(array('handlers' => array('debug' => array('type' => 'stream')))), \$container);
    }

    public function testSyslogHandlerWithLogopts()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'syslog', 'logopts' => LOG_CONS)))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\SyslogHandler');
        \$this->assertDICConstructorArguments(\$handler, array(false, 'user', \\Monolog\\Logger::DEBUG, true, LOG_CONS));
    }

    public function testRollbarHandlerCreatesNotifier()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'rollbar', 'token' => 'MY_TOKEN')))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RollbarHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.rollbar.notifier.1c8e6a67728dff6a209f828427128dd8b3c2b746'), \\Monolog\\Logger::DEBUG, true));
    }

    public function testRollbarHandlerReusesNotifier()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('main' => array('type' => 'rollbar', 'id' => 'my_rollbar_id')))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RollbarHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('my_rollbar_id'), \\Monolog\\Logger::DEBUG, true));
    }

    public function testSocketHandler()
    {
        try {
            \$this->getContainer(array(array('handlers' => array('socket' => array('type' => 'socket')))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('connection_string', \$e->getMessage());
        }

        \$container = \$this->getContainer(array(array('handlers' => array('socket' => array(
            'type' => 'socket', 'timeout' => 1, 'persistent' => true,
            'connection_string' => 'localhost:50505', 'connection_timeout' => '0.6')
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.socket'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.socket')));

        \$handler = \$container->getDefinition('monolog.handler.socket');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\SocketHandler');
        \$this->assertDICConstructorArguments(\$handler, array('localhost:50505', \\Monolog\\Logger::DEBUG, true));
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));
        \$this->assertDICDefinitionMethodCallAt(1, \$handler, 'setTimeout', array('1'));
        \$this->assertDICDefinitionMethodCallAt(2, \$handler, 'setConnectionTimeout', array('0.6'));
        \$this->assertDICDefinitionMethodCallAt(3, \$handler, 'setPersistent', array(true));
    }

    public function testRavenHandlerWhenConfigurationIsWrong()
    {
        try {
            \$this->getContainer(array(array('handlers' => array('raven' => array('type' => 'raven')))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('DSN', \$e->getMessage());
        }
    }

    public function testRavenHandlerWhenADSNIsSpecified()
    {
        \$dsn = 'http://43f6017361224d098402974103bfc53d:a6a0538fc2934ba2bed32e08741b2cd3@marca.python.live.cheggnet.com:9000/1';

        \$container = \$this->getContainer(array(array('handlers' => array('raven' => array(
            'type' => 'raven', 'dsn' => \$dsn)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.raven'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.raven')));

        \$this->assertTrue(\$container->hasDefinition('monolog.raven.client.'.sha1(\$dsn)));

        \$handler = \$container->getDefinition('monolog.handler.raven');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\RavenHandler');
    }

    public function testRavenHandlerWhenADSNAndAClientAreSpecified()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('raven' => array(
            'type' => 'raven', 'dsn' => 'foobar', 'client_id' => 'raven.client')
        ))));

        \$this->assertFalse(\$container->hasDefinition('raven.client'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.raven')));

        \$handler = \$container->getDefinition('monolog.handler.raven');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('raven.client'), 100, true));
    }

    public function testRavenHandlerWhenAClientIsSpecified()
    {
        \$container = \$this->getContainer(array(array('handlers' => array('raven' => array(
            'type' => 'raven', 'client_id' => 'raven.client')
        ))));

        \$this->assertFalse(\$container->hasDefinition('raven.client'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.raven')));

        \$handler = \$container->getDefinition('monolog.handler.raven');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('raven.client'), 100, true));
    }

    public function testLogglyHandler()
    {
        \$token = '026308d8-2b63-4225-8fe9-e01294b6e472';
        try {
            \$this->getContainer(array(array('handlers' => array('loggly' => array('type' => 'loggly')))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('token', \$e->getMessage());
        }

        try {
            \$this->getContainer(array(array('handlers' => array('loggly' => array(
                'type' => 'loggly', 'token' => \$token, 'tags' => 'x, 1zone ,www.loggly.com,-us,apache\$')
            ))));
            \$this->fail();
        } catch (InvalidConfigurationException \$e) {
            \$this->assertContains('-us, apache\$', \$e->getMessage());
        }

        \$container = \$this->getContainer(array(array('handlers' => array('loggly' => array(
            'type' => 'loggly', 'token' => \$token)
        ))));
        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.loggly'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.loggly')));
        \$handler = \$container->getDefinition('monolog.handler.loggly');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\LogglyHandler');
        \$this->assertDICConstructorArguments(\$handler, array(\$token, \\Monolog\\Logger::DEBUG, true));
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));

        \$container = \$this->getContainer(array(array('handlers' => array('loggly' => array(
            'type' => 'loggly', 'token' => \$token, 'tags' => array(' ', 'foo', '', 'bar'))
        ))));
        \$handler = \$container->getDefinition('monolog.handler.loggly');
        \$this->assertDICDefinitionMethodCallAt(0, \$handler, 'pushProcessor', array(new Reference('monolog.processor.psr_log_message')));
        \$this->assertDICDefinitionMethodCallAt(1, \$handler, 'setTag', array('foo,bar'));
    }

    /** @group legacy */
    public function testFingersCrossedHandlerWhenExcluded404sAreSpecified()
    {
        \$container = \$this->getContainer(array(array('handlers' => array(
            'main' => array('type' => 'fingers_crossed', 'handler' => 'nested', 'excluded_404s' => array('^/foo', '^/bar')),
            'nested' => array('type' => 'stream', 'path' => '/tmp/symfony.log')
        ))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main.not_found_strategy'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$strategy = \$container->getDefinition('monolog.handler.main.not_found_strategy');
        \$this->assertDICDefinitionClass(\$strategy, 'Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy');
        \$this->assertDICConstructorArguments(\$strategy, array(new Reference('request_stack'), array('^/foo', '^/bar'), \\Monolog\\Logger::WARNING));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), new Reference('monolog.handler.main.not_found_strategy'), 0, true, true, null));
    }

    public function testFingersCrossedHandlerWhenExcludedHttpCodesAreSpecified()
    {
        if (!class_exists('Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\HttpCodeActivationStrategy')) {
            \$this->markTestSkipped('Symfony Monolog 4.1+ is needed.');
        }

        \$container = \$this->getContainer(array(array('handlers' => array(
            'main' => array(
                'type' => 'fingers_crossed',
                'handler' => 'nested',
                'excluded_http_codes' => array(403, 404, array(405 => array('^/foo', '^/bar')))
            ),
            'nested' => array('type' => 'stream', 'path' => '/tmp/symfony.log')
        ))));

        \$this->assertTrue(\$container->hasDefinition('monolog.logger'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.nested'));
        \$this->assertTrue(\$container->hasDefinition('monolog.handler.main.http_code_strategy'));

        \$logger = \$container->getDefinition('monolog.logger');
        \$this->assertDICDefinitionMethodCallAt(0, \$logger, 'useMicrosecondTimestamps', array('%monolog.use_microseconds%'));
        \$this->assertDICDefinitionMethodCallAt(1, \$logger, 'pushHandler', array(new Reference('monolog.handler.main')));

        \$strategy = \$container->getDefinition('monolog.handler.main.http_code_strategy');
        \$this->assertDICDefinitionClass(\$strategy, 'Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\HttpCodeActivationStrategy');
        \$this->assertDICConstructorArguments(\$strategy, array(
            new Reference('request_stack'),
            array(
                array('code' => 403, 'urls' => array()),
                array('code' => 404, 'urls' => array()),
                array('code' => 405, 'urls' => array('^/foo', '^/bar'))
            ),
            \\Monolog\\Logger::WARNING
        ));

        \$handler = \$container->getDefinition('monolog.handler.main');
        \$this->assertDICDefinitionClass(\$handler, 'Monolog\\Handler\\FingersCrossedHandler');
        \$this->assertDICConstructorArguments(\$handler, array(new Reference('monolog.handler.nested'), new Reference('monolog.handler.main.http_code_strategy'), 0, true, true, null));
    }

    protected function getContainer(array \$config = array(), array \$thirdPartyDefinitions = array())
    {
        \$container = new ContainerBuilder();
        foreach (\$thirdPartyDefinitions as \$id => \$definition) {
            \$container->setDefinition(\$id, \$definition);
        }

        \$container->getCompilerPassConfig()->setOptimizationPasses(array());
        \$container->getCompilerPassConfig()->setRemovingPasses(array());
        \$container->addCompilerPass(new LoggerChannelPass());

        \$loader = new MonologExtension();
        \$loader->load(\$config, \$container);
        \$container->compile();

        return \$container;
    }
}
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/MonologExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/MonologExtensionTest.php");
    }
}
