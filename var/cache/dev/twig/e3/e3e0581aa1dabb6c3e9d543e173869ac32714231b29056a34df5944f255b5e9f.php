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

/* vendor/symfony/translation/Tests/DependencyInjection/TranslationPathsPassTest.php */
class __TwigTemplate_36cef46c2f00b3cc88a4223ce6fead25a5732e5af7afadcd79aa28ed2c0a1b9f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/TranslationPathsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/DependencyInjection/TranslationPathsPassTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ControllerArguments;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceArguments;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceMethodCalls;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceProperties;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceSubscriber;

class TranslationPathsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->register('translator');
        \$debugCommand = \$container->register('console.command.translation_debug')
            ->setArguments([null, null, null, null, null, [], []])
        ;
        \$updateCommand = \$container->register('console.command.translation_update')
            ->setArguments([null, null, null, null, null, null, [], []])
        ;
        \$container->register(ControllerArguments::class, ControllerArguments::class)
            ->setTags(['controller.service_arguments'])
        ;
        \$container->register(ServiceArguments::class, ServiceArguments::class)
            ->setArguments([new Reference('translator')])
        ;
        \$container->register(ServiceProperties::class, ServiceProperties::class)
            ->setProperties([new Reference('translator')])
        ;
        \$container->register(ServiceMethodCalls::class, ServiceMethodCalls::class)
            ->setMethodCalls([['setTranslator', [new Reference('translator')]]])
        ;
        \$container->register('service_rc')
            ->setArguments([new Definition(), new Reference(ServiceMethodCalls::class)])
        ;
        \$serviceLocator1 = \$container->register('.service_locator.foo', ServiceLocator::class)
            ->setArguments([new ServiceClosureArgument(new Reference('translator'))])
        ;
        \$serviceLocator2 = (new Definition(ServiceLocator::class))
            ->setArguments([ServiceSubscriber::class, new Reference('service_container')])
            ->setFactory([\$serviceLocator1, 'withContext'])
        ;
        \$container->register('service_subscriber', ServiceSubscriber::class)
            ->setArguments([\$serviceLocator2])
        ;
        \$container->register('.service_locator.bar', ServiceLocator::class)
            ->setArguments([[
                ControllerArguments::class.'::index' => new ServiceClosureArgument(new Reference('.service_locator.foo')),
                ControllerArguments::class.'::__invoke' => new ServiceClosureArgument(new Reference('.service_locator.foo')),
                ControllerArguments::class => new ServiceClosureArgument(new Reference('.service_locator.foo')),
            ]])
        ;
        \$container->register('argument_resolver.service')
            ->setArguments([new Reference('.service_locator.bar')])
        ;

        \$pass = new TranslatorPathsPass('translator', 'console.command.translation_debug', 'console.command.translation_update', 'argument_resolver.service');
        \$pass->process(\$container);

        \$expectedPaths = [
            \$container->getReflectionClass(ServiceArguments::class)->getFileName(),
            \$container->getReflectionClass(ServiceProperties::class)->getFileName(),
            \$container->getReflectionClass(ServiceMethodCalls::class)->getFileName(),
            \$container->getReflectionClass(ControllerArguments::class)->getFileName(),
            \$container->getReflectionClass(ServiceSubscriber::class)->getFileName(),
        ];

        \$this->assertSame(\$expectedPaths, \$debugCommand->getArgument(6));
        \$this->assertSame(\$expectedPaths, \$updateCommand->getArgument(7));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/DependencyInjection/TranslationPathsPassTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ControllerArguments;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceArguments;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceMethodCalls;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceProperties;
use Symfony\\Component\\Translation\\Tests\\DependencyInjection\\fixtures\\ServiceSubscriber;

class TranslationPathsPassTest extends TestCase
{
    public function testProcess()
    {
        \$container = new ContainerBuilder();
        \$container->register('translator');
        \$debugCommand = \$container->register('console.command.translation_debug')
            ->setArguments([null, null, null, null, null, [], []])
        ;
        \$updateCommand = \$container->register('console.command.translation_update')
            ->setArguments([null, null, null, null, null, null, [], []])
        ;
        \$container->register(ControllerArguments::class, ControllerArguments::class)
            ->setTags(['controller.service_arguments'])
        ;
        \$container->register(ServiceArguments::class, ServiceArguments::class)
            ->setArguments([new Reference('translator')])
        ;
        \$container->register(ServiceProperties::class, ServiceProperties::class)
            ->setProperties([new Reference('translator')])
        ;
        \$container->register(ServiceMethodCalls::class, ServiceMethodCalls::class)
            ->setMethodCalls([['setTranslator', [new Reference('translator')]]])
        ;
        \$container->register('service_rc')
            ->setArguments([new Definition(), new Reference(ServiceMethodCalls::class)])
        ;
        \$serviceLocator1 = \$container->register('.service_locator.foo', ServiceLocator::class)
            ->setArguments([new ServiceClosureArgument(new Reference('translator'))])
        ;
        \$serviceLocator2 = (new Definition(ServiceLocator::class))
            ->setArguments([ServiceSubscriber::class, new Reference('service_container')])
            ->setFactory([\$serviceLocator1, 'withContext'])
        ;
        \$container->register('service_subscriber', ServiceSubscriber::class)
            ->setArguments([\$serviceLocator2])
        ;
        \$container->register('.service_locator.bar', ServiceLocator::class)
            ->setArguments([[
                ControllerArguments::class.'::index' => new ServiceClosureArgument(new Reference('.service_locator.foo')),
                ControllerArguments::class.'::__invoke' => new ServiceClosureArgument(new Reference('.service_locator.foo')),
                ControllerArguments::class => new ServiceClosureArgument(new Reference('.service_locator.foo')),
            ]])
        ;
        \$container->register('argument_resolver.service')
            ->setArguments([new Reference('.service_locator.bar')])
        ;

        \$pass = new TranslatorPathsPass('translator', 'console.command.translation_debug', 'console.command.translation_update', 'argument_resolver.service');
        \$pass->process(\$container);

        \$expectedPaths = [
            \$container->getReflectionClass(ServiceArguments::class)->getFileName(),
            \$container->getReflectionClass(ServiceProperties::class)->getFileName(),
            \$container->getReflectionClass(ServiceMethodCalls::class)->getFileName(),
            \$container->getReflectionClass(ControllerArguments::class)->getFileName(),
            \$container->getReflectionClass(ServiceSubscriber::class)->getFileName(),
        ];

        \$this->assertSame(\$expectedPaths, \$debugCommand->getArgument(6));
        \$this->assertSame(\$expectedPaths, \$updateCommand->getArgument(7));
    }
}
", "vendor/symfony/translation/Tests/DependencyInjection/TranslationPathsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/DependencyInjection/TranslationPathsPassTest.php");
    }
}
