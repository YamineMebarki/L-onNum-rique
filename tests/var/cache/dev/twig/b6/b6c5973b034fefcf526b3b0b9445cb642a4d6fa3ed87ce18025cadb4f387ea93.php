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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Security/Factory/GuardAuthenticationFactoryTest.php */
class __TwigTemplate_9804e6858785e482e35f47880718c495865df42f5991a4b25f0d318335d0325c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Security/Factory/GuardAuthenticationFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Security/Factory/GuardAuthenticationFactoryTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection\\Security\\Factory;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\GuardAuthenticationFactory;
use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class GuardAuthenticationFactoryTest extends TestCase
{
    /**
     * @dataProvider getValidConfigurationTests
     */
    public function testAddValidConfiguration(array \$inputConfig, array \$expectedConfig)
    {
        \$factory = new GuardAuthenticationFactory();
        \$nodeDefinition = new ArrayNodeDefinition('guard');
        \$factory->addConfiguration(\$nodeDefinition);

        \$node = \$nodeDefinition->getNode();
        \$normalizedConfig = \$node->normalize(\$inputConfig);
        \$finalizedConfig = \$node->finalize(\$normalizedConfig);

        \$this->assertEquals(\$expectedConfig, \$finalizedConfig);
    }

    /**
     * @dataProvider getInvalidConfigurationTests
     */
    public function testAddInvalidConfiguration(array \$inputConfig)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$factory = new GuardAuthenticationFactory();
        \$nodeDefinition = new ArrayNodeDefinition('guard');
        \$factory->addConfiguration(\$nodeDefinition);

        \$node = \$nodeDefinition->getNode();
        \$normalizedConfig = \$node->normalize(\$inputConfig);
        // will validate and throw an exception on invalid
        \$node->finalize(\$normalizedConfig);
    }

    public function getValidConfigurationTests()
    {
        \$tests = [];

        // completely basic
        \$tests[] = [
            [
                'authenticators' => ['authenticator1', 'authenticator2'],
                'provider' => 'some_provider',
                'entry_point' => 'the_entry_point',
            ],
            [
                'authenticators' => ['authenticator1', 'authenticator2'],
                'provider' => 'some_provider',
                'entry_point' => 'the_entry_point',
            ],
        ];

        // testing xml config fix: authenticator -> authenticators
        \$tests[] = [
            [
                'authenticator' => ['authenticator1', 'authenticator2'],
            ],
            [
                'authenticators' => ['authenticator1', 'authenticator2'],
                'entry_point' => null,
            ],
        ];

        return \$tests;
    }

    public function getInvalidConfigurationTests()
    {
        \$tests = [];

        // testing not empty
        \$tests[] = [
            ['authenticators' => []],
        ];

        return \$tests;
    }

    public function testBasicCreate()
    {
        // simple configuration
        \$config = [
            'authenticators' => ['authenticator123'],
            'entry_point' => null,
        ];
        list(\$container, \$entryPointId) = \$this->executeCreate(\$config, null);
        \$this->assertEquals('authenticator123', \$entryPointId);

        \$providerDefinition = \$container->getDefinition('security.authentication.provider.guard.my_firewall');
        \$this->assertEquals([
            'index_0' => new IteratorArgument([new Reference('authenticator123')]),
            'index_1' => new Reference('my_user_provider'),
            'index_2' => 'my_firewall',
            'index_3' => new Reference('security.user_checker.my_firewall'),
        ], \$providerDefinition->getArguments());

        \$listenerDefinition = \$container->getDefinition('security.authentication.listener.guard.my_firewall');
        \$this->assertEquals('my_firewall', \$listenerDefinition->getArgument(2));
        \$this->assertEquals([new Reference('authenticator123')], \$listenerDefinition->getArgument(3)->getValues());
    }

    public function testExistingDefaultEntryPointUsed()
    {
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123'],
            'entry_point' => null,
        ];
        list(, \$entryPointId) = \$this->executeCreate(\$config, 'some_default_entry_point');
        \$this->assertEquals('some_default_entry_point', \$entryPointId);
    }

    public function testCannotOverrideDefaultEntryPoint()
    {
        \$this->expectException('LogicException');
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123'],
            'entry_point' => 'authenticator123',
        ];
        \$this->executeCreate(\$config, 'some_default_entry_point');
    }

    public function testMultipleAuthenticatorsRequiresEntryPoint()
    {
        \$this->expectException('LogicException');
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123', 'authenticatorABC'],
            'entry_point' => null,
        ];
        \$this->executeCreate(\$config, null);
    }

    public function testCreateWithEntryPoint()
    {
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123', 'authenticatorABC'],
            'entry_point' => 'authenticatorABC',
        ];
        list(\$container, \$entryPointId) = \$this->executeCreate(\$config, null);
        \$this->assertEquals('authenticatorABC', \$entryPointId);
    }

    private function executeCreate(array \$config, \$defaultEntryPointId)
    {
        \$container = new ContainerBuilder();
        \$container->register('security.authentication.provider.guard');
        \$container->register('security.authentication.listener.guard');
        \$id = 'my_firewall';
        \$userProviderId = 'my_user_provider';

        \$factory = new GuardAuthenticationFactory();
        list(\$providerId, \$listenerId, \$entryPointId) = \$factory->create(\$container, \$id, \$config, \$userProviderId, \$defaultEntryPointId);

        return [\$container, \$entryPointId];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Security/Factory/GuardAuthenticationFactoryTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection\\Security\\Factory;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\GuardAuthenticationFactory;
use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class GuardAuthenticationFactoryTest extends TestCase
{
    /**
     * @dataProvider getValidConfigurationTests
     */
    public function testAddValidConfiguration(array \$inputConfig, array \$expectedConfig)
    {
        \$factory = new GuardAuthenticationFactory();
        \$nodeDefinition = new ArrayNodeDefinition('guard');
        \$factory->addConfiguration(\$nodeDefinition);

        \$node = \$nodeDefinition->getNode();
        \$normalizedConfig = \$node->normalize(\$inputConfig);
        \$finalizedConfig = \$node->finalize(\$normalizedConfig);

        \$this->assertEquals(\$expectedConfig, \$finalizedConfig);
    }

    /**
     * @dataProvider getInvalidConfigurationTests
     */
    public function testAddInvalidConfiguration(array \$inputConfig)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$factory = new GuardAuthenticationFactory();
        \$nodeDefinition = new ArrayNodeDefinition('guard');
        \$factory->addConfiguration(\$nodeDefinition);

        \$node = \$nodeDefinition->getNode();
        \$normalizedConfig = \$node->normalize(\$inputConfig);
        // will validate and throw an exception on invalid
        \$node->finalize(\$normalizedConfig);
    }

    public function getValidConfigurationTests()
    {
        \$tests = [];

        // completely basic
        \$tests[] = [
            [
                'authenticators' => ['authenticator1', 'authenticator2'],
                'provider' => 'some_provider',
                'entry_point' => 'the_entry_point',
            ],
            [
                'authenticators' => ['authenticator1', 'authenticator2'],
                'provider' => 'some_provider',
                'entry_point' => 'the_entry_point',
            ],
        ];

        // testing xml config fix: authenticator -> authenticators
        \$tests[] = [
            [
                'authenticator' => ['authenticator1', 'authenticator2'],
            ],
            [
                'authenticators' => ['authenticator1', 'authenticator2'],
                'entry_point' => null,
            ],
        ];

        return \$tests;
    }

    public function getInvalidConfigurationTests()
    {
        \$tests = [];

        // testing not empty
        \$tests[] = [
            ['authenticators' => []],
        ];

        return \$tests;
    }

    public function testBasicCreate()
    {
        // simple configuration
        \$config = [
            'authenticators' => ['authenticator123'],
            'entry_point' => null,
        ];
        list(\$container, \$entryPointId) = \$this->executeCreate(\$config, null);
        \$this->assertEquals('authenticator123', \$entryPointId);

        \$providerDefinition = \$container->getDefinition('security.authentication.provider.guard.my_firewall');
        \$this->assertEquals([
            'index_0' => new IteratorArgument([new Reference('authenticator123')]),
            'index_1' => new Reference('my_user_provider'),
            'index_2' => 'my_firewall',
            'index_3' => new Reference('security.user_checker.my_firewall'),
        ], \$providerDefinition->getArguments());

        \$listenerDefinition = \$container->getDefinition('security.authentication.listener.guard.my_firewall');
        \$this->assertEquals('my_firewall', \$listenerDefinition->getArgument(2));
        \$this->assertEquals([new Reference('authenticator123')], \$listenerDefinition->getArgument(3)->getValues());
    }

    public function testExistingDefaultEntryPointUsed()
    {
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123'],
            'entry_point' => null,
        ];
        list(, \$entryPointId) = \$this->executeCreate(\$config, 'some_default_entry_point');
        \$this->assertEquals('some_default_entry_point', \$entryPointId);
    }

    public function testCannotOverrideDefaultEntryPoint()
    {
        \$this->expectException('LogicException');
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123'],
            'entry_point' => 'authenticator123',
        ];
        \$this->executeCreate(\$config, 'some_default_entry_point');
    }

    public function testMultipleAuthenticatorsRequiresEntryPoint()
    {
        \$this->expectException('LogicException');
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123', 'authenticatorABC'],
            'entry_point' => null,
        ];
        \$this->executeCreate(\$config, null);
    }

    public function testCreateWithEntryPoint()
    {
        // any existing default entry point is used
        \$config = [
            'authenticators' => ['authenticator123', 'authenticatorABC'],
            'entry_point' => 'authenticatorABC',
        ];
        list(\$container, \$entryPointId) = \$this->executeCreate(\$config, null);
        \$this->assertEquals('authenticatorABC', \$entryPointId);
    }

    private function executeCreate(array \$config, \$defaultEntryPointId)
    {
        \$container = new ContainerBuilder();
        \$container->register('security.authentication.provider.guard');
        \$container->register('security.authentication.listener.guard');
        \$id = 'my_firewall';
        \$userProviderId = 'my_user_provider';

        \$factory = new GuardAuthenticationFactory();
        list(\$providerId, \$listenerId, \$entryPointId) = \$factory->create(\$container, \$id, \$config, \$userProviderId, \$defaultEntryPointId);

        return [\$container, \$entryPointId];
    }
}
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Security/Factory/GuardAuthenticationFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Security/Factory/GuardAuthenticationFactoryTest.php");
    }
}
