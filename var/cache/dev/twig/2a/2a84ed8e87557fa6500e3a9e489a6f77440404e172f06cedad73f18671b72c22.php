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

/* vendor/symfony/security-bundle/DependencyInjection/Security/Factory/RememberMeFactory.php */
class __TwigTemplate_23a78a9155fcc02cb943ff7291a1867e8cdc9c4f0c55f8273e1f737445b32f95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/RememberMeFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/RememberMeFactory.php"));

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
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpFoundation\\Cookie;

class RememberMeFactory implements SecurityFactoryInterface
{
    protected \$options = [
        'name' => 'REMEMBERME',
        'lifetime' => 31536000,
        'path' => '/',
        'domain' => null,
        'secure' => false,
        'httponly' => true,
        'samesite' => null,
        'always_remember_me' => false,
        'remember_me_parameter' => '_remember_me',
    ];

    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        // authentication provider
        \$authProviderId = 'security.authentication.provider.rememberme.'.\$id;
        \$container
            ->setDefinition(\$authProviderId, new ChildDefinition('security.authentication.provider.rememberme'))
            ->replaceArgument(0, new Reference('security.user_checker.'.\$id))
            ->addArgument(\$config['secret'])
            ->addArgument(\$id)
        ;

        // remember me services
        if (isset(\$config['token_provider'])) {
            \$templateId = 'security.authentication.rememberme.services.persistent';
            \$rememberMeServicesId = \$templateId.'.'.\$id;
        } else {
            \$templateId = 'security.authentication.rememberme.services.simplehash';
            \$rememberMeServicesId = \$templateId.'.'.\$id;
        }

        if (\$container->hasDefinition('security.logout_listener.'.\$id)) {
            \$container
                ->getDefinition('security.logout_listener.'.\$id)
                ->addMethodCall('addHandler', [new Reference(\$rememberMeServicesId)])
            ;
        }

        \$rememberMeServices = \$container->setDefinition(\$rememberMeServicesId, new ChildDefinition(\$templateId));
        \$rememberMeServices->replaceArgument(1, \$config['secret']);
        \$rememberMeServices->replaceArgument(2, \$id);

        if (isset(\$config['token_provider'])) {
            \$rememberMeServices->addMethodCall('setTokenProvider', [
                new Reference(\$config['token_provider']),
            ]);
        }

        // remember-me options
        \$rememberMeServices->replaceArgument(3, array_intersect_key(\$config, \$this->options));

        // attach to remember-me aware listeners
        \$userProviders = [];
        foreach (\$container->findTaggedServiceIds('security.remember_me_aware') as \$serviceId => \$attributes) {
            foreach (\$attributes as \$attribute) {
                if (!isset(\$attribute['id']) || \$attribute['id'] !== \$id) {
                    continue;
                }

                if (!isset(\$attribute['provider'])) {
                    throw new \\RuntimeException('Each \"security.remember_me_aware\" tag must have a provider attribute.');
                }

                \$userProviders[] = new Reference(\$attribute['provider']);
                \$container
                    ->getDefinition(\$serviceId)
                    ->addMethodCall('setRememberMeServices', [new Reference(\$rememberMeServicesId)])
                ;
            }
        }
        if (\$config['user_providers']) {
            \$userProviders = [];
            foreach (\$config['user_providers'] as \$providerName) {
                \$userProviders[] = new Reference('security.user.provider.concrete.'.\$providerName);
            }
        }
        if (0 === \\count(\$userProviders)) {
            throw new \\RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.');
        }

        \$rememberMeServices->replaceArgument(0, array_unique(\$userProviders));

        // remember-me listener
        \$listenerId = 'security.authentication.listener.rememberme.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.rememberme'));
        \$listener->replaceArgument(1, new Reference(\$rememberMeServicesId));
        \$listener->replaceArgument(5, \$config['catch_exceptions']);

        return [\$authProviderId, \$listenerId, \$defaultEntryPoint];
    }

    public function getPosition()
    {
        return 'remember_me';
    }

    public function getKey()
    {
        return 'remember-me';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$builder = \$node
            ->fixXmlConfig('user_provider')
            ->children()
        ;

        \$builder
            ->scalarNode('secret')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('token_provider')->end()
            ->arrayNode('user_providers')
                ->beforeNormalization()
                    ->ifString()->then(function (\$v) { return [\$v]; })
                ->end()
                ->prototype('scalar')->end()
            ->end()
            ->scalarNode('catch_exceptions')->defaultTrue()->end()
        ;

        foreach (\$this->options as \$name => \$value) {
            if ('secure' === \$name) {
                \$builder->enumNode(\$name)->values([true, false, 'auto'])->defaultValue('auto' === \$value ? null : \$value);
            } elseif ('samesite' === \$name) {
                \$builder->enumNode(\$name)->values([null, Cookie::SAMESITE_LAX, Cookie::SAMESITE_STRICT])->defaultValue(\$value);
            } elseif (\\is_bool(\$value)) {
                \$builder->booleanNode(\$name)->defaultValue(\$value);
            } else {
                \$builder->scalarNode(\$name)->defaultValue(\$value);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/RememberMeFactory.php";
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
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpFoundation\\Cookie;

class RememberMeFactory implements SecurityFactoryInterface
{
    protected \$options = [
        'name' => 'REMEMBERME',
        'lifetime' => 31536000,
        'path' => '/',
        'domain' => null,
        'secure' => false,
        'httponly' => true,
        'samesite' => null,
        'always_remember_me' => false,
        'remember_me_parameter' => '_remember_me',
    ];

    public function create(ContainerBuilder \$container, \$id, \$config, \$userProvider, \$defaultEntryPoint)
    {
        // authentication provider
        \$authProviderId = 'security.authentication.provider.rememberme.'.\$id;
        \$container
            ->setDefinition(\$authProviderId, new ChildDefinition('security.authentication.provider.rememberme'))
            ->replaceArgument(0, new Reference('security.user_checker.'.\$id))
            ->addArgument(\$config['secret'])
            ->addArgument(\$id)
        ;

        // remember me services
        if (isset(\$config['token_provider'])) {
            \$templateId = 'security.authentication.rememberme.services.persistent';
            \$rememberMeServicesId = \$templateId.'.'.\$id;
        } else {
            \$templateId = 'security.authentication.rememberme.services.simplehash';
            \$rememberMeServicesId = \$templateId.'.'.\$id;
        }

        if (\$container->hasDefinition('security.logout_listener.'.\$id)) {
            \$container
                ->getDefinition('security.logout_listener.'.\$id)
                ->addMethodCall('addHandler', [new Reference(\$rememberMeServicesId)])
            ;
        }

        \$rememberMeServices = \$container->setDefinition(\$rememberMeServicesId, new ChildDefinition(\$templateId));
        \$rememberMeServices->replaceArgument(1, \$config['secret']);
        \$rememberMeServices->replaceArgument(2, \$id);

        if (isset(\$config['token_provider'])) {
            \$rememberMeServices->addMethodCall('setTokenProvider', [
                new Reference(\$config['token_provider']),
            ]);
        }

        // remember-me options
        \$rememberMeServices->replaceArgument(3, array_intersect_key(\$config, \$this->options));

        // attach to remember-me aware listeners
        \$userProviders = [];
        foreach (\$container->findTaggedServiceIds('security.remember_me_aware') as \$serviceId => \$attributes) {
            foreach (\$attributes as \$attribute) {
                if (!isset(\$attribute['id']) || \$attribute['id'] !== \$id) {
                    continue;
                }

                if (!isset(\$attribute['provider'])) {
                    throw new \\RuntimeException('Each \"security.remember_me_aware\" tag must have a provider attribute.');
                }

                \$userProviders[] = new Reference(\$attribute['provider']);
                \$container
                    ->getDefinition(\$serviceId)
                    ->addMethodCall('setRememberMeServices', [new Reference(\$rememberMeServicesId)])
                ;
            }
        }
        if (\$config['user_providers']) {
            \$userProviders = [];
            foreach (\$config['user_providers'] as \$providerName) {
                \$userProviders[] = new Reference('security.user.provider.concrete.'.\$providerName);
            }
        }
        if (0 === \\count(\$userProviders)) {
            throw new \\RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.');
        }

        \$rememberMeServices->replaceArgument(0, array_unique(\$userProviders));

        // remember-me listener
        \$listenerId = 'security.authentication.listener.rememberme.'.\$id;
        \$listener = \$container->setDefinition(\$listenerId, new ChildDefinition('security.authentication.listener.rememberme'));
        \$listener->replaceArgument(1, new Reference(\$rememberMeServicesId));
        \$listener->replaceArgument(5, \$config['catch_exceptions']);

        return [\$authProviderId, \$listenerId, \$defaultEntryPoint];
    }

    public function getPosition()
    {
        return 'remember_me';
    }

    public function getKey()
    {
        return 'remember-me';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$builder = \$node
            ->fixXmlConfig('user_provider')
            ->children()
        ;

        \$builder
            ->scalarNode('secret')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('token_provider')->end()
            ->arrayNode('user_providers')
                ->beforeNormalization()
                    ->ifString()->then(function (\$v) { return [\$v]; })
                ->end()
                ->prototype('scalar')->end()
            ->end()
            ->scalarNode('catch_exceptions')->defaultTrue()->end()
        ;

        foreach (\$this->options as \$name => \$value) {
            if ('secure' === \$name) {
                \$builder->enumNode(\$name)->values([true, false, 'auto'])->defaultValue('auto' === \$value ? null : \$value);
            } elseif ('samesite' === \$name) {
                \$builder->enumNode(\$name)->values([null, Cookie::SAMESITE_LAX, Cookie::SAMESITE_STRICT])->defaultValue(\$value);
            } elseif (\\is_bool(\$value)) {
                \$builder->booleanNode(\$name)->defaultValue(\$value);
            } else {
                \$builder->scalarNode(\$name)->defaultValue(\$value);
            }
        }
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Security/Factory/RememberMeFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Security/Factory/RememberMeFactory.php");
    }
}
