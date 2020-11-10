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

/* vendor/symfony/framework-bundle/FrameworkBundle.php */
class __TwigTemplate_607edca34d096bb1d5cf8489911fce95dc3033f855218a60deb0bf33053ef3b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/FrameworkBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/FrameworkBundle.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle;

use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddAnnotationsCachedReaderPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\ContainerBuilderDebugDumpPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\DataCollectorTranslatorPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\LoggingTranslatorPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\ProfilerPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TemplatingPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerRealRefPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerWeakRefPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\UnusedTagsPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\WorkflowGuardListenerPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CacheCollectorPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolClearerPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPrunerPass;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass;
use Symfony\\Component\\Debug\\ErrorHandler;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterReverseContainerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass;
use Symfony\\Component\\Form\\DependencyInjection\\FormPass;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ControllerArgumentValueResolverPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\FragmentRendererPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\LoggerPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterControllerArgumentLocatorsPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterLocaleAwareServicesPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ResettableServicePass;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Messenger\\DependencyInjection\\MessengerPass;
use Symfony\\Component\\Mime\\DependencyInjection\\AddMimeTypeGuesserPass;
use Symfony\\Component\\PropertyInfo\\DependencyInjection\\PropertyInfoPass;
use Symfony\\Component\\Routing\\DependencyInjection\\RoutingResolverPass;
use Symfony\\Component\\Serializer\\DependencyInjection\\SerializerPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslationDumperPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass;
use Symfony\\Component\\Validator\\DependencyInjection\\AddAutoMappingConfigurationPass;
use Symfony\\Component\\Validator\\DependencyInjection\\AddConstraintValidatorsPass;
use Symfony\\Component\\Validator\\DependencyInjection\\AddValidatorInitializersPass;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FrameworkBundle extends Bundle
{
    public function boot()
    {
        ErrorHandler::register(null, false)->throwAt(\$this->container->getParameter('debug.error_handler.throw_at'), true);

        if (\$this->container->getParameter('kernel.http_method_override')) {
            Request::enableHttpMethodParameterOverride();
        }

        if (\$trustedHosts = \$this->container->getParameter('kernel.trusted_hosts')) {
            Request::setTrustedHosts(\$trustedHosts);
        }
    }

    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$hotPathEvents = [
            KernelEvents::REQUEST,
            KernelEvents::CONTROLLER,
            KernelEvents::CONTROLLER_ARGUMENTS,
            KernelEvents::RESPONSE,
            KernelEvents::FINISH_REQUEST,
        ];

        \$container->addCompilerPass(new LoggerPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -32);
        \$container->addCompilerPass(new RegisterControllerArgumentLocatorsPass());
        \$container->addCompilerPass(new RemoveEmptyControllerArgumentLocatorsPass(), PassConfig::TYPE_BEFORE_REMOVING);
        \$container->addCompilerPass(new RoutingResolverPass());
        \$container->addCompilerPass(new ProfilerPass());
        // must be registered before removing private services as some might be listeners/subscribers
        // but as late as possible to get resolved parameters
        \$container->addCompilerPass((new RegisterListenersPass())->setHotPathEvents(\$hotPathEvents), PassConfig::TYPE_BEFORE_REMOVING);
        \$container->addCompilerPass(new TemplatingPass());
        \$this->addCompilerPassIfExists(\$container, AddConstraintValidatorsPass::class);
        \$container->addCompilerPass(new AddAnnotationsCachedReaderPass(), PassConfig::TYPE_AFTER_REMOVING, -255);
        \$this->addCompilerPassIfExists(\$container, AddValidatorInitializersPass::class);
        \$this->addCompilerPassIfExists(\$container, AddConsoleCommandPass::class, PassConfig::TYPE_BEFORE_REMOVING);
        // must be registered as late as possible to get access to all Twig paths registered in
        // twig.template_iterator definition
        \$this->addCompilerPassIfExists(\$container, TranslatorPass::class, PassConfig::TYPE_BEFORE_OPTIMIZATION, -32);
        \$this->addCompilerPassIfExists(\$container, TranslatorPathsPass::class, PassConfig::TYPE_AFTER_REMOVING);
        \$container->addCompilerPass(new LoggingTranslatorPass());
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));
        \$this->addCompilerPassIfExists(\$container, TranslationExtractorPass::class);
        \$this->addCompilerPassIfExists(\$container, TranslationDumperPass::class);
        \$container->addCompilerPass(new FragmentRendererPass());
        \$this->addCompilerPassIfExists(\$container, SerializerPass::class);
        \$this->addCompilerPassIfExists(\$container, PropertyInfoPass::class);
        \$container->addCompilerPass(new DataCollectorTranslatorPass());
        \$container->addCompilerPass(new ControllerArgumentValueResolverPass());
        \$container->addCompilerPass(new CachePoolPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 32);
        \$container->addCompilerPass(new CachePoolClearerPass(), PassConfig::TYPE_AFTER_REMOVING);
        \$container->addCompilerPass(new CachePoolPrunerPass(), PassConfig::TYPE_AFTER_REMOVING);
        \$this->addCompilerPassIfExists(\$container, FormPass::class);
        \$container->addCompilerPass(new WorkflowGuardListenerPass());
        \$container->addCompilerPass(new ResettableServicePass());
        \$container->addCompilerPass(new RegisterLocaleAwareServicesPass());
        \$container->addCompilerPass(new TestServiceContainerWeakRefPass(), PassConfig::TYPE_BEFORE_REMOVING, -32);
        \$container->addCompilerPass(new TestServiceContainerRealRefPass(), PassConfig::TYPE_AFTER_REMOVING);
        \$this->addCompilerPassIfExists(\$container, AddMimeTypeGuesserPass::class);
        \$this->addCompilerPassIfExists(\$container, MessengerPass::class);
        \$this->addCompilerPassIfExists(\$container, AddAutoMappingConfigurationPass::class);
        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->addCompilerPass(new RegisterReverseContainerPass(false), PassConfig::TYPE_AFTER_REMOVING);

        if (\$container->getParameter('kernel.debug')) {
            \$container->addCompilerPass(new AddDebugLogProcessorPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -32);
            \$container->addCompilerPass(new UnusedTagsPass(), PassConfig::TYPE_AFTER_REMOVING);
            \$container->addCompilerPass(new ContainerBuilderDebugDumpPass(), PassConfig::TYPE_BEFORE_REMOVING, -255);
            \$container->addCompilerPass(new CacheCollectorPass(), PassConfig::TYPE_BEFORE_REMOVING);
        }
    }

    private function addCompilerPassIfExists(ContainerBuilder \$container, \$class, \$type = PassConfig::TYPE_BEFORE_OPTIMIZATION, \$priority = 0)
    {
        \$container->addResource(new ClassExistenceResource(\$class));

        if (class_exists(\$class)) {
            \$container->addCompilerPass(new \$class(), \$type, \$priority);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/FrameworkBundle.php";
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

namespace Symfony\\Bundle\\FrameworkBundle;

use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddAnnotationsCachedReaderPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddExpressionLanguageProvidersPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\ContainerBuilderDebugDumpPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\DataCollectorTranslatorPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\LoggingTranslatorPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\ProfilerPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TemplatingPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerRealRefPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\TestServiceContainerWeakRefPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\UnusedTagsPass;
use Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\WorkflowGuardListenerPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CacheCollectorPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolClearerPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPass;
use Symfony\\Component\\Cache\\DependencyInjection\\CachePoolPrunerPass;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass;
use Symfony\\Component\\Debug\\ErrorHandler;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\Compiler\\RegisterReverseContainerPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass;
use Symfony\\Component\\Form\\DependencyInjection\\FormPass;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ControllerArgumentValueResolverPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\FragmentRendererPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\LoggerPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterControllerArgumentLocatorsPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterLocaleAwareServicesPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\ResettableServicePass;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Messenger\\DependencyInjection\\MessengerPass;
use Symfony\\Component\\Mime\\DependencyInjection\\AddMimeTypeGuesserPass;
use Symfony\\Component\\PropertyInfo\\DependencyInjection\\PropertyInfoPass;
use Symfony\\Component\\Routing\\DependencyInjection\\RoutingResolverPass;
use Symfony\\Component\\Serializer\\DependencyInjection\\SerializerPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslationDumperPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass;
use Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass;
use Symfony\\Component\\Validator\\DependencyInjection\\AddAutoMappingConfigurationPass;
use Symfony\\Component\\Validator\\DependencyInjection\\AddConstraintValidatorsPass;
use Symfony\\Component\\Validator\\DependencyInjection\\AddValidatorInitializersPass;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FrameworkBundle extends Bundle
{
    public function boot()
    {
        ErrorHandler::register(null, false)->throwAt(\$this->container->getParameter('debug.error_handler.throw_at'), true);

        if (\$this->container->getParameter('kernel.http_method_override')) {
            Request::enableHttpMethodParameterOverride();
        }

        if (\$trustedHosts = \$this->container->getParameter('kernel.trusted_hosts')) {
            Request::setTrustedHosts(\$trustedHosts);
        }
    }

    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$hotPathEvents = [
            KernelEvents::REQUEST,
            KernelEvents::CONTROLLER,
            KernelEvents::CONTROLLER_ARGUMENTS,
            KernelEvents::RESPONSE,
            KernelEvents::FINISH_REQUEST,
        ];

        \$container->addCompilerPass(new LoggerPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -32);
        \$container->addCompilerPass(new RegisterControllerArgumentLocatorsPass());
        \$container->addCompilerPass(new RemoveEmptyControllerArgumentLocatorsPass(), PassConfig::TYPE_BEFORE_REMOVING);
        \$container->addCompilerPass(new RoutingResolverPass());
        \$container->addCompilerPass(new ProfilerPass());
        // must be registered before removing private services as some might be listeners/subscribers
        // but as late as possible to get resolved parameters
        \$container->addCompilerPass((new RegisterListenersPass())->setHotPathEvents(\$hotPathEvents), PassConfig::TYPE_BEFORE_REMOVING);
        \$container->addCompilerPass(new TemplatingPass());
        \$this->addCompilerPassIfExists(\$container, AddConstraintValidatorsPass::class);
        \$container->addCompilerPass(new AddAnnotationsCachedReaderPass(), PassConfig::TYPE_AFTER_REMOVING, -255);
        \$this->addCompilerPassIfExists(\$container, AddValidatorInitializersPass::class);
        \$this->addCompilerPassIfExists(\$container, AddConsoleCommandPass::class, PassConfig::TYPE_BEFORE_REMOVING);
        // must be registered as late as possible to get access to all Twig paths registered in
        // twig.template_iterator definition
        \$this->addCompilerPassIfExists(\$container, TranslatorPass::class, PassConfig::TYPE_BEFORE_OPTIMIZATION, -32);
        \$this->addCompilerPassIfExists(\$container, TranslatorPathsPass::class, PassConfig::TYPE_AFTER_REMOVING);
        \$container->addCompilerPass(new LoggingTranslatorPass());
        \$container->addCompilerPass(new AddExpressionLanguageProvidersPass(false));
        \$this->addCompilerPassIfExists(\$container, TranslationExtractorPass::class);
        \$this->addCompilerPassIfExists(\$container, TranslationDumperPass::class);
        \$container->addCompilerPass(new FragmentRendererPass());
        \$this->addCompilerPassIfExists(\$container, SerializerPass::class);
        \$this->addCompilerPassIfExists(\$container, PropertyInfoPass::class);
        \$container->addCompilerPass(new DataCollectorTranslatorPass());
        \$container->addCompilerPass(new ControllerArgumentValueResolverPass());
        \$container->addCompilerPass(new CachePoolPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 32);
        \$container->addCompilerPass(new CachePoolClearerPass(), PassConfig::TYPE_AFTER_REMOVING);
        \$container->addCompilerPass(new CachePoolPrunerPass(), PassConfig::TYPE_AFTER_REMOVING);
        \$this->addCompilerPassIfExists(\$container, FormPass::class);
        \$container->addCompilerPass(new WorkflowGuardListenerPass());
        \$container->addCompilerPass(new ResettableServicePass());
        \$container->addCompilerPass(new RegisterLocaleAwareServicesPass());
        \$container->addCompilerPass(new TestServiceContainerWeakRefPass(), PassConfig::TYPE_BEFORE_REMOVING, -32);
        \$container->addCompilerPass(new TestServiceContainerRealRefPass(), PassConfig::TYPE_AFTER_REMOVING);
        \$this->addCompilerPassIfExists(\$container, AddMimeTypeGuesserPass::class);
        \$this->addCompilerPassIfExists(\$container, MessengerPass::class);
        \$this->addCompilerPassIfExists(\$container, AddAutoMappingConfigurationPass::class);
        \$container->addCompilerPass(new RegisterReverseContainerPass(true));
        \$container->addCompilerPass(new RegisterReverseContainerPass(false), PassConfig::TYPE_AFTER_REMOVING);

        if (\$container->getParameter('kernel.debug')) {
            \$container->addCompilerPass(new AddDebugLogProcessorPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -32);
            \$container->addCompilerPass(new UnusedTagsPass(), PassConfig::TYPE_AFTER_REMOVING);
            \$container->addCompilerPass(new ContainerBuilderDebugDumpPass(), PassConfig::TYPE_BEFORE_REMOVING, -255);
            \$container->addCompilerPass(new CacheCollectorPass(), PassConfig::TYPE_BEFORE_REMOVING);
        }
    }

    private function addCompilerPassIfExists(ContainerBuilder \$container, \$class, \$type = PassConfig::TYPE_BEFORE_OPTIMIZATION, \$priority = 0)
    {
        \$container->addResource(new ClassExistenceResource(\$class));

        if (class_exists(\$class)) {
            \$container->addCompilerPass(new \$class(), \$type, \$priority);
        }
    }
}
", "vendor/symfony/framework-bundle/FrameworkBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/FrameworkBundle.php");
    }
}
