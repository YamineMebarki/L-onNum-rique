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

/* vendor/doctrine/doctrine-bundle/DoctrineBundle.php */
class __TwigTemplate_7e1cbd281b88786e96b86a192fd25b154267dd36b88883de531b655ad10c1688 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DoctrineBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DoctrineBundle.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\DbalSchemaFilterPass;
use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\EntityListenerPass;
use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass;
use Doctrine\\Common\\Util\\ClassUtils;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Proxy\\Autoloader;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\DoctrineValidationPass;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterEventListenersAndSubscribersPass;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\Security\\UserProvider\\EntityFactory;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class DoctrineBundle extends Bundle
{
    /** @var callable|null */
    private \$autoloader;

    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new RegisterEventListenersAndSubscribersPass('doctrine.connections', 'doctrine.dbal.%s_connection.event_manager', 'doctrine'), PassConfig::TYPE_BEFORE_OPTIMIZATION);

        if (\$container->hasExtension('security')) {
            \$container->getExtension('security')->addUserProviderFactory(new EntityFactory('entity', 'doctrine.orm.security.user.provider'));
        }

        \$container->addCompilerPass(new DoctrineValidationPass('orm'));
        \$container->addCompilerPass(new EntityListenerPass());
        \$container->addCompilerPass(new ServiceRepositoryCompilerPass());
        \$container->addCompilerPass(new DbalSchemaFilterPass());
    }

    /**
     * {@inheritDoc}
     */
    public function boot()
    {
        // Register an autoloader for proxies to avoid issues when unserializing them
        // when the ORM is used.
        if (! \$this->container->hasParameter('doctrine.orm.proxy_namespace')) {
            return;
        }

        \$namespace      = \$this->container->getParameter('doctrine.orm.proxy_namespace');
        \$dir            = \$this->container->getParameter('doctrine.orm.proxy_dir');
        \$proxyGenerator = null;

        if (\$this->container->getParameter('doctrine.orm.auto_generate_proxy_classes')) {
            // See https://github.com/symfony/symfony/pull/3419 for usage of references
            \$container = &\$this->container;

            \$proxyGenerator = static function (\$proxyDir, \$proxyNamespace, \$class) use (&\$container) {
                \$originalClassName = ClassUtils::getRealClass(\$class);
                /** @var Registry \$registry */
                \$registry = \$container->get('doctrine');

                // Tries to auto-generate the proxy file
                /** @var EntityManager \$em */
                foreach (\$registry->getManagers() as \$em) {
                    if (! \$em->getConfiguration()->getAutoGenerateProxyClasses()) {
                        continue;
                    }

                    \$metadataFactory = \$em->getMetadataFactory();

                    if (\$metadataFactory->isTransient(\$originalClassName)) {
                        continue;
                    }

                    \$classMetadata = \$metadataFactory->getMetadataFor(\$originalClassName);

                    \$em->getProxyFactory()->generateProxyClasses([\$classMetadata]);

                    clearstatcache(true, Autoloader::resolveFile(\$proxyDir, \$proxyNamespace, \$class));

                    break;
                }
            };
        }

        \$this->autoloader = Autoloader::register(\$dir, \$namespace, \$proxyGenerator);
    }

    /**
     * {@inheritDoc}
     */
    public function shutdown()
    {
        if (\$this->autoloader !== null) {
            spl_autoload_unregister(\$this->autoloader);
            \$this->autoloader = null;
        }

        // Clear all entity managers to clear references to entities for GC
        if (\$this->container->hasParameter('doctrine.entity_managers')) {
            foreach (\$this->container->getParameter('doctrine.entity_managers') as \$id) {
                if (! \$this->container->initialized(\$id)) {
                    continue;
                }

                \$this->container->get(\$id)->clear();
            }
        }

        // Close all connections to avoid reaching too many connections in the process when booting again later (tests)
        if (! \$this->container->hasParameter('doctrine.connections')) {
            return;
        }

        foreach (\$this->container->getParameter('doctrine.connections') as \$id) {
            if (! \$this->container->initialized(\$id)) {
                continue;
            }

            \$this->container->get(\$id)->close();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function registerCommands(Application \$application)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/DoctrineBundle.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\DbalSchemaFilterPass;
use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\EntityListenerPass;
use Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass;
use Doctrine\\Common\\Util\\ClassUtils;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Proxy\\Autoloader;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\DoctrineValidationPass;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterEventListenersAndSubscribersPass;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\Security\\UserProvider\\EntityFactory;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class DoctrineBundle extends Bundle
{
    /** @var callable|null */
    private \$autoloader;

    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(new RegisterEventListenersAndSubscribersPass('doctrine.connections', 'doctrine.dbal.%s_connection.event_manager', 'doctrine'), PassConfig::TYPE_BEFORE_OPTIMIZATION);

        if (\$container->hasExtension('security')) {
            \$container->getExtension('security')->addUserProviderFactory(new EntityFactory('entity', 'doctrine.orm.security.user.provider'));
        }

        \$container->addCompilerPass(new DoctrineValidationPass('orm'));
        \$container->addCompilerPass(new EntityListenerPass());
        \$container->addCompilerPass(new ServiceRepositoryCompilerPass());
        \$container->addCompilerPass(new DbalSchemaFilterPass());
    }

    /**
     * {@inheritDoc}
     */
    public function boot()
    {
        // Register an autoloader for proxies to avoid issues when unserializing them
        // when the ORM is used.
        if (! \$this->container->hasParameter('doctrine.orm.proxy_namespace')) {
            return;
        }

        \$namespace      = \$this->container->getParameter('doctrine.orm.proxy_namespace');
        \$dir            = \$this->container->getParameter('doctrine.orm.proxy_dir');
        \$proxyGenerator = null;

        if (\$this->container->getParameter('doctrine.orm.auto_generate_proxy_classes')) {
            // See https://github.com/symfony/symfony/pull/3419 for usage of references
            \$container = &\$this->container;

            \$proxyGenerator = static function (\$proxyDir, \$proxyNamespace, \$class) use (&\$container) {
                \$originalClassName = ClassUtils::getRealClass(\$class);
                /** @var Registry \$registry */
                \$registry = \$container->get('doctrine');

                // Tries to auto-generate the proxy file
                /** @var EntityManager \$em */
                foreach (\$registry->getManagers() as \$em) {
                    if (! \$em->getConfiguration()->getAutoGenerateProxyClasses()) {
                        continue;
                    }

                    \$metadataFactory = \$em->getMetadataFactory();

                    if (\$metadataFactory->isTransient(\$originalClassName)) {
                        continue;
                    }

                    \$classMetadata = \$metadataFactory->getMetadataFor(\$originalClassName);

                    \$em->getProxyFactory()->generateProxyClasses([\$classMetadata]);

                    clearstatcache(true, Autoloader::resolveFile(\$proxyDir, \$proxyNamespace, \$class));

                    break;
                }
            };
        }

        \$this->autoloader = Autoloader::register(\$dir, \$namespace, \$proxyGenerator);
    }

    /**
     * {@inheritDoc}
     */
    public function shutdown()
    {
        if (\$this->autoloader !== null) {
            spl_autoload_unregister(\$this->autoloader);
            \$this->autoloader = null;
        }

        // Clear all entity managers to clear references to entities for GC
        if (\$this->container->hasParameter('doctrine.entity_managers')) {
            foreach (\$this->container->getParameter('doctrine.entity_managers') as \$id) {
                if (! \$this->container->initialized(\$id)) {
                    continue;
                }

                \$this->container->get(\$id)->clear();
            }
        }

        // Close all connections to avoid reaching too many connections in the process when booting again later (tests)
        if (! \$this->container->hasParameter('doctrine.connections')) {
            return;
        }

        foreach (\$this->container->getParameter('doctrine.connections') as \$id) {
            if (! \$this->container->initialized(\$id)) {
                continue;
            }

            \$this->container->get(\$id)->close();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function registerCommands(Application \$application)
    {
    }
}
", "vendor/doctrine/doctrine-bundle/DoctrineBundle.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/DoctrineBundle.php");
    }
}
