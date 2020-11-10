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

/* vendor/symfony/swiftmailer-bundle/DependencyInjection/Configuration.php */
class __TwigTemplate_8d775fa522ae893f3a8ffe28ea5b15e7dad330bdf08187757248798b93285f2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Configuration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Configuration.php"));

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

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

/**
 * This class contains the configuration information for the bundle.
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class Configuration implements ConfigurationInterface
{
    private \$debug;

    /**
     * @param bool \$debug The kernel.debug value
     */
    public function __construct(\$debug)
    {
        \$this->debug = (bool) \$debug;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('swiftmailer');
        \$rootNode = method_exists(TreeBuilder::class, 'getRootNode') ? \$treeBuilder->getRootNode() : \$treeBuilder->root('swiftmailer');

        \$rootNode
            ->beforeNormalization()
                ->ifNull()
                ->thenEmptyArray()
            ->end()
            ->beforeNormalization()
                ->ifTrue(function (\$v) {
                    return \\is_array(\$v) && !\\array_key_exists('mailers', \$v) && !\\array_key_exists('mailer', \$v);
                })
                ->then(function (\$v) {
                    \$mailer = [];
                    foreach (\$v as \$key => \$value) {
                        if ('default_mailer' == \$key) {
                            continue;
                        }
                        \$mailer[\$key] = \$v[\$key];
                        unset(\$v[\$key]);
                    }
                    \$v['default_mailer'] = isset(\$v['default_mailer']) ? (string) \$v['default_mailer'] : 'default';
                    \$v['mailers'] = [\$v['default_mailer'] => \$mailer];

                    return \$v;
                })
            ->end()
            ->children()
                ->scalarNode('default_mailer')->end()
                ->append(\$this->getMailersNode())
            ->end()
            ->fixXmlConfig('mailer')
        ;

        return \$treeBuilder;
    }

    /**
     * @return ArrayNodeDefinition
     */
    private function getMailersNode()
    {
        \$treeBuilder = new TreeBuilder('mailers');
        \$node = method_exists(TreeBuilder::class, 'getRootNode') ? \$treeBuilder->getRootNode() : \$treeBuilder->root('mailers');

        \$node
            ->requiresAtLeastOneElement()
            ->useAttributeAsKey('name')
                ->prototype('array')
            ->children()
                ->scalarNode('url')->defaultNull()->end()
                ->scalarNode('transport')->defaultValue('smtp')->end()
                ->scalarNode('command')->defaultValue('/usr/sbin/sendmail -bs')->end()
                ->scalarNode('username')->defaultNull()->end()
                ->scalarNode('password')->defaultNull()->end()
                ->scalarNode('host')->defaultValue('localhost')->end()
                ->scalarNode('port')->defaultNull()->end()
                ->scalarNode('timeout')->defaultValue(30)->end()
                ->scalarNode('source_ip')->defaultNull()->end()
                ->scalarNode('local_domain')->defaultNull()->end()
                ->arrayNode('stream_options')
                    ->ignoreExtraKeys(false)
                    ->normalizeKeys(false)
                    ->beforeNormalization()
                        ->ifTrue(function (\$v) {
                            return isset(\$v['stream-option']);
                        })
                        ->then(function (\$v) {
                            \$recurse = function (\$array) use (&\$recurse) {
                                if (isset(\$array['name'])) {
                                    \$array = [\$array];
                                }
                                \$n = [];
                                foreach (\$array as \$v) {
                                    \$k = \$v['name'];
                                    if (isset(\$v['value'])) {
                                        \$n[\$k] = \$v['value'];
                                    } elseif (isset(\$v['stream-option'])) {
                                        \$n[\$k] = \$recurse(\$v['stream-option']);
                                    }
                                }

                                return \$n;
                            };

                            return \$recurse(\$v['stream-option']);
                        })
                    ->end()
                    ->validate()
                        ->ifTrue(function (\$v) {
                            return !method_exists('Swift_Transport_EsmtpTransport', 'setStreamOptions');
                        })
                        ->thenInvalid('stream_options is only available in Swiftmailer 5.4.2 or later.')
                    ->end()
                ->end()
                ->scalarNode('encryption')
                    ->defaultNull()
                ->end()
                ->scalarNode('auth_mode')
                    ->defaultNull()
                ->end()
                ->scalarNode('sender_address')->end()
                ->arrayNode('delivery_addresses')
                    ->performNoDeepMerging()
                    ->beforeNormalization()
                        ->ifArray()
                        ->then(function (\$v) {
                            return array_filter(array_values(\$v));
                        })
                    ->end()
                    ->prototype('scalar')
                    ->end()
                ->end()
                ->arrayNode('antiflood')
                    ->children()
                        ->scalarNode('threshold')->defaultValue(99)->end()
                        ->scalarNode('sleep')->defaultValue(0)->end()
                    ->end()
                ->end()
                ->booleanNode('logging')->defaultValue(\$this->debug)->end()
                ->arrayNode('spool')
                    ->children()
                        ->scalarNode('type')->defaultValue('file')->end()
                        ->scalarNode('path')->defaultValue('%kernel.cache_dir%/swiftmailer/spool')->end()
                        ->scalarNode('id')->defaultNull()->info('Used by \"service\" type')->end()
                    ->end()
                    ->validate()
                        ->ifTrue(function (\$v) {
                            return 'service' === \$v['type'] && empty(\$v['id']);
                        })
                        ->thenInvalid('You have to configure the service id')
                    ->end()
                ->end()
            ->end()
            ->fixXmlConfig('delivery_address', 'delivery_addresses')
            ->fixXmlConfig('delivery_whitelist_pattern', 'delivery_whitelist')
            ->children()
                ->arrayNode('delivery_whitelist')
                    ->prototype('scalar')
                    ->end()
                ->end()
                ->booleanNode('disable_delivery')->end()
            ->end()
        ;

        return \$node;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/DependencyInjection/Configuration.php";
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

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

/**
 * This class contains the configuration information for the bundle.
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class Configuration implements ConfigurationInterface
{
    private \$debug;

    /**
     * @param bool \$debug The kernel.debug value
     */
    public function __construct(\$debug)
    {
        \$this->debug = (bool) \$debug;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('swiftmailer');
        \$rootNode = method_exists(TreeBuilder::class, 'getRootNode') ? \$treeBuilder->getRootNode() : \$treeBuilder->root('swiftmailer');

        \$rootNode
            ->beforeNormalization()
                ->ifNull()
                ->thenEmptyArray()
            ->end()
            ->beforeNormalization()
                ->ifTrue(function (\$v) {
                    return \\is_array(\$v) && !\\array_key_exists('mailers', \$v) && !\\array_key_exists('mailer', \$v);
                })
                ->then(function (\$v) {
                    \$mailer = [];
                    foreach (\$v as \$key => \$value) {
                        if ('default_mailer' == \$key) {
                            continue;
                        }
                        \$mailer[\$key] = \$v[\$key];
                        unset(\$v[\$key]);
                    }
                    \$v['default_mailer'] = isset(\$v['default_mailer']) ? (string) \$v['default_mailer'] : 'default';
                    \$v['mailers'] = [\$v['default_mailer'] => \$mailer];

                    return \$v;
                })
            ->end()
            ->children()
                ->scalarNode('default_mailer')->end()
                ->append(\$this->getMailersNode())
            ->end()
            ->fixXmlConfig('mailer')
        ;

        return \$treeBuilder;
    }

    /**
     * @return ArrayNodeDefinition
     */
    private function getMailersNode()
    {
        \$treeBuilder = new TreeBuilder('mailers');
        \$node = method_exists(TreeBuilder::class, 'getRootNode') ? \$treeBuilder->getRootNode() : \$treeBuilder->root('mailers');

        \$node
            ->requiresAtLeastOneElement()
            ->useAttributeAsKey('name')
                ->prototype('array')
            ->children()
                ->scalarNode('url')->defaultNull()->end()
                ->scalarNode('transport')->defaultValue('smtp')->end()
                ->scalarNode('command')->defaultValue('/usr/sbin/sendmail -bs')->end()
                ->scalarNode('username')->defaultNull()->end()
                ->scalarNode('password')->defaultNull()->end()
                ->scalarNode('host')->defaultValue('localhost')->end()
                ->scalarNode('port')->defaultNull()->end()
                ->scalarNode('timeout')->defaultValue(30)->end()
                ->scalarNode('source_ip')->defaultNull()->end()
                ->scalarNode('local_domain')->defaultNull()->end()
                ->arrayNode('stream_options')
                    ->ignoreExtraKeys(false)
                    ->normalizeKeys(false)
                    ->beforeNormalization()
                        ->ifTrue(function (\$v) {
                            return isset(\$v['stream-option']);
                        })
                        ->then(function (\$v) {
                            \$recurse = function (\$array) use (&\$recurse) {
                                if (isset(\$array['name'])) {
                                    \$array = [\$array];
                                }
                                \$n = [];
                                foreach (\$array as \$v) {
                                    \$k = \$v['name'];
                                    if (isset(\$v['value'])) {
                                        \$n[\$k] = \$v['value'];
                                    } elseif (isset(\$v['stream-option'])) {
                                        \$n[\$k] = \$recurse(\$v['stream-option']);
                                    }
                                }

                                return \$n;
                            };

                            return \$recurse(\$v['stream-option']);
                        })
                    ->end()
                    ->validate()
                        ->ifTrue(function (\$v) {
                            return !method_exists('Swift_Transport_EsmtpTransport', 'setStreamOptions');
                        })
                        ->thenInvalid('stream_options is only available in Swiftmailer 5.4.2 or later.')
                    ->end()
                ->end()
                ->scalarNode('encryption')
                    ->defaultNull()
                ->end()
                ->scalarNode('auth_mode')
                    ->defaultNull()
                ->end()
                ->scalarNode('sender_address')->end()
                ->arrayNode('delivery_addresses')
                    ->performNoDeepMerging()
                    ->beforeNormalization()
                        ->ifArray()
                        ->then(function (\$v) {
                            return array_filter(array_values(\$v));
                        })
                    ->end()
                    ->prototype('scalar')
                    ->end()
                ->end()
                ->arrayNode('antiflood')
                    ->children()
                        ->scalarNode('threshold')->defaultValue(99)->end()
                        ->scalarNode('sleep')->defaultValue(0)->end()
                    ->end()
                ->end()
                ->booleanNode('logging')->defaultValue(\$this->debug)->end()
                ->arrayNode('spool')
                    ->children()
                        ->scalarNode('type')->defaultValue('file')->end()
                        ->scalarNode('path')->defaultValue('%kernel.cache_dir%/swiftmailer/spool')->end()
                        ->scalarNode('id')->defaultNull()->info('Used by \"service\" type')->end()
                    ->end()
                    ->validate()
                        ->ifTrue(function (\$v) {
                            return 'service' === \$v['type'] && empty(\$v['id']);
                        })
                        ->thenInvalid('You have to configure the service id')
                    ->end()
                ->end()
            ->end()
            ->fixXmlConfig('delivery_address', 'delivery_addresses')
            ->fixXmlConfig('delivery_whitelist_pattern', 'delivery_whitelist')
            ->children()
                ->arrayNode('delivery_whitelist')
                    ->prototype('scalar')
                    ->end()
                ->end()
                ->booleanNode('disable_delivery')->end()
            ->end()
        ;

        return \$node;
    }
}
", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Configuration.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/DependencyInjection/Configuration.php");
    }
}
