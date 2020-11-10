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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/GuardAuthenticationFactory.php */
class __TwigTemplate_4e9ec37dee3d50bb15d050a6b56d35b1301339eb8cc5dd502975499d3b6dfa89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/GuardAuthenticationFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/GuardAuthenticationFactory.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Configures the \"guard\" authentication provider key under a firewall.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class GuardAuthenticationFactory implements SecurityFactoryInterface
{
    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'guard';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->fixXmlConfig('authenticator')
            ->children()
                ->scalarNode('provider')
                    ->info('A key from the \"providers\" section of your security config, in case your user provider is different than the firewall')
                ->end()
                ->scalarNode('entry_point')
                    ->info('A service id (of one of your authenticators) whose start() method should be called when an anonymous user hits a page that requires authentication')
                    ->defaultValue(null)
                ->end()
                ->arrayNode('authenticators')
                    ->info('An array of service ids for all of your \"authenticators\"')
                    ->requiresAtLeastOneElement()
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;
    }

    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        \$authenticatorIds = \$config['authenticators'];
        \$authenticatorReferences = [];
        foreach (\$authenticatorIds as \$authenticatorId) {
            \$authenticatorReferences[] = new Reference(\$authenticatorId);
        }

        \$authenticators = new IteratorArgument(\$authenticatorReferences);

        // configure the GuardAuthenticationFactory to have the dynamic constructor arguments
        \$providerId = 'security.authentication.provider.guard.'.\$id;
        \$container
            ->setDefinition(\$providerId, new ChildDefinition('security.authentication.provider.guard'))
            ->replaceArgument(0, \$authenticators)
            ->replaceArgument(1, new Reference(\$userProvider))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference('security.user_checker.'.\$id))
        ;

        // listener
        \$listenerId = 'security.authentication.listener.guard.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.guard'));
        \$listener->replaceArgument(2, \$id);
        \$listener->replaceArgument(3, \$authenticators);

        // determine the entryPointId to use
        \$entryPointId = \$this->determineEntryPoint(\$defaultEntryPoint, \$config);

        // this is always injected - then the listener decides if it should be used
        \$container
            ->getDefinition(\$listenerId)
            ->addTag('security.remember_me_aware', ['id' => \$id, 'provider' => \$userProvider]);

        return [\$providerId, \$listenerId, \$entryPointId];
    }

    private function determineEntryPoint(\$defaultEntryPointId, array \$config)
    {
        if (\$defaultEntryPointId) {
            // explode if they've configured the entry_point, but there is already one
            if (\$config['entry_point']) {
                throw new \\LogicException(sprintf('The guard authentication provider cannot use the \"%s\" entry_point because another entry point is already configured by another provider! Either remove the other provider or move the entry_point configuration as a root key under your firewall (i.e. at the same level as \"guard\").', \$config['entry_point']));
            }

            return \$defaultEntryPointId;
        }

        if (\$config['entry_point']) {
            // if it's configured explicitly, use it!
            return \$config['entry_point'];
        }

        \$authenticatorIds = \$config['authenticators'];
        if (1 == \\count(\$authenticatorIds)) {
            // if there is only one authenticator, use that as the entry point
            return array_shift(\$authenticatorIds);
        }

        // we have multiple entry points - we must ask them to configure one
        throw new \\LogicException(sprintf('Because you have multiple guard authenticators, you need to set the \"guard.entry_point\" key to one of your authenticators (%s)', implode(', ', \$authenticatorIds)));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/GuardAuthenticationFactory.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Configures the \"guard\" authentication provider key under a firewall.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class GuardAuthenticationFactory implements SecurityFactoryInterface
{
    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'guard';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->fixXmlConfig('authenticator')
            ->children()
                ->scalarNode('provider')
                    ->info('A key from the \"providers\" section of your security config, in case your user provider is different than the firewall')
                ->end()
                ->scalarNode('entry_point')
                    ->info('A service id (of one of your authenticators) whose start() method should be called when an anonymous user hits a page that requires authentication')
                    ->defaultValue(null)
                ->end()
                ->arrayNode('authenticators')
                    ->info('An array of service ids for all of your \"authenticators\"')
                    ->requiresAtLeastOneElement()
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;
    }

    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        \$authenticatorIds = \$config['authenticators'];
        \$authenticatorReferences = [];
        foreach (\$authenticatorIds as \$authenticatorId) {
            \$authenticatorReferences[] = new Reference(\$authenticatorId);
        }

        \$authenticators = new IteratorArgument(\$authenticatorReferences);

        // configure the GuardAuthenticationFactory to have the dynamic constructor arguments
        \$providerId = 'security.authentication.provider.guard.'.\$id;
        \$container
            ->setDefinition(\$providerId, new ChildDefinition('security.authentication.provider.guard'))
            ->replaceArgument(0, \$authenticators)
            ->replaceArgument(1, new Reference(\$userProvider))
            ->replaceArgument(2, \$id)
            ->replaceArgument(3, new Reference('security.user_checker.'.\$id))
        ;

        // listener
        \$listenerId = 'security.authentication.listener.guard.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.guard'));
        \$listener->replaceArgument(2, \$id);
        \$listener->replaceArgument(3, \$authenticators);

        // determine the entryPointId to use
        \$entryPointId = \$this->determineEntryPoint(\$defaultEntryPoint, \$config);

        // this is always injected - then the listener decides if it should be used
        \$container
            ->getDefinition(\$listenerId)
            ->addTag('security.remember_me_aware', ['id' => \$id, 'provider' => \$userProvider]);

        return [\$providerId, \$listenerId, \$entryPointId];
    }

    private function determineEntryPoint(\$defaultEntryPointId, array \$config)
    {
        if (\$defaultEntryPointId) {
            // explode if they've configured the entry_point, but there is already one
            if (\$config['entry_point']) {
                throw new \\LogicException(sprintf('The guard authentication provider cannot use the \"%s\" entry_point because another entry point is already configured by another provider! Either remove the other provider or move the entry_point configuration as a root key under your firewall (i.e. at the same level as \"guard\").', \$config['entry_point']));
            }

            return \$defaultEntryPointId;
        }

        if (\$config['entry_point']) {
            // if it's configured explicitly, use it!
            return \$config['entry_point'];
        }

        \$authenticatorIds = \$config['authenticators'];
        if (1 == \\count(\$authenticatorIds)) {
            // if there is only one authenticator, use that as the entry point
            return array_shift(\$authenticatorIds);
        }

        // we have multiple entry points - we must ask them to configure one
        throw new \\LogicException(sprintf('Because you have multiple guard authenticators, you need to set the \"guard.entry_point\" key to one of your authenticators (%s)', implode(', ', \$authenticatorIds)));
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/GuardAuthenticationFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/GuardAuthenticationFactory.php");
    }
}
