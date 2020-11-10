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

/* vendor/symfony/twig-bundle/DependencyInjection/Configuration.php */
class __TwigTemplate_2e57dda061e2c049155929c24a362c3f8b59a3a18cc1dd0fd7d21f293ae1ddea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Configuration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Configuration.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

/**
 * TwigExtension configuration structure.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('twig');
        \$rootNode = \$treeBuilder->getRootNode();

        \$rootNode
            ->children()
                ->scalarNode('exception_controller')->defaultValue('twig.controller.exception::showAction')->end()
            ->end()
        ;

        \$this->addFormThemesSection(\$rootNode);
        \$this->addGlobalsSection(\$rootNode);
        \$this->addTwigOptions(\$rootNode);
        \$this->addTwigFormatOptions(\$rootNode);

        return \$treeBuilder;
    }

    private function addFormThemesSection(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->fixXmlConfig('form_theme')
            ->children()
                ->arrayNode('form_themes')
                    ->addDefaultChildrenIfNoneSet()
                    ->prototype('scalar')->defaultValue('form_div_layout.html.twig')->end()
                    ->example(['@My/form.html.twig'])
                    ->validate()
                        ->ifTrue(function (\$v) { return !\\in_array('form_div_layout.html.twig', \$v); })
                        ->then(function (\$v) {
                            return array_merge(['form_div_layout.html.twig'], \$v);
                        })
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addGlobalsSection(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->fixXmlConfig('global')
            ->children()
                ->arrayNode('globals')
                    ->normalizeKeys(false)
                    ->useAttributeAsKey('key')
                    ->example(['foo' => '\"@bar\"', 'pi' => 3.14])
                    ->prototype('array')
                        ->normalizeKeys(false)
                        ->beforeNormalization()
                            ->ifTrue(function (\$v) { return \\is_string(\$v) && 0 === strpos(\$v, '@'); })
                            ->then(function (\$v) {
                                if (0 === strpos(\$v, '@@')) {
                                    return substr(\$v, 1);
                                }

                                return ['id' => substr(\$v, 1), 'type' => 'service'];
                            })
                        ->end()
                        ->beforeNormalization()
                            ->ifTrue(function (\$v) {
                                if (\\is_array(\$v)) {
                                    \$keys = array_keys(\$v);
                                    sort(\$keys);

                                    return \$keys !== ['id', 'type'] && \$keys !== ['value'];
                                }

                                return true;
                            })
                            ->then(function (\$v) { return ['value' => \$v]; })
                        ->end()
                        ->children()
                            ->scalarNode('id')->end()
                            ->scalarNode('type')
                                ->validate()
                                    ->ifNotInArray(['service'])
                                    ->thenInvalid('The %s type is not supported')
                                ->end()
                            ->end()
                            ->variableNode('value')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTwigOptions(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->fixXmlConfig('path')
            ->children()
                ->variableNode('autoescape')->defaultValue('name')->end()
                ->scalarNode('autoescape_service')->defaultNull()->end()
                ->scalarNode('autoescape_service_method')->defaultNull()->end()
                ->scalarNode('base_template_class')->example('Twig\\Template')->cannotBeEmpty()->end()
                ->scalarNode('cache')->defaultValue('%kernel.cache_dir%/twig')->end()
                ->scalarNode('charset')->defaultValue('%kernel.charset%')->end()
                ->booleanNode('debug')->defaultValue('%kernel.debug%')->end()
                ->booleanNode('strict_variables')
                    ->defaultValue(function () {
                        @trigger_error('Relying on the default value (\"false\") of the \"twig.strict_variables\" configuration option is deprecated since Symfony 4.1. You should use \"%kernel.debug%\" explicitly instead, which will be the new default in 5.0.', E_USER_DEPRECATED);

                        return false;
                    })
                ->end()
                ->scalarNode('auto_reload')->end()
                ->integerNode('optimizations')->min(-1)->end()
                ->scalarNode('default_path')
                    ->info('The default path used to load templates')
                    ->defaultValue('%kernel.project_dir%/templates')
                ->end()
                ->arrayNode('paths')
                    ->normalizeKeys(false)
                    ->useAttributeAsKey('paths')
                    ->beforeNormalization()
                        ->always()
                        ->then(function (\$paths) {
                            \$normalized = [];
                            foreach (\$paths as \$path => \$namespace) {
                                if (\\is_array(\$namespace)) {
                                    // xml
                                    \$path = \$namespace['value'];
                                    \$namespace = \$namespace['namespace'];
                                }

                                // path within the default namespace
                                if (ctype_digit((string) \$path)) {
                                    \$path = \$namespace;
                                    \$namespace = null;
                                }

                                \$normalized[\$path] = \$namespace;
                            }

                            return \$normalized;
                        })
                    ->end()
                    ->prototype('variable')->end()
                ->end()
            ->end()
        ;
    }

    private function addTwigFormatOptions(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->children()
                ->arrayNode('date')
                    ->info('The default format options used by the date filter')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('format')->defaultValue('F j, Y H:i')->end()
                        ->scalarNode('interval_format')->defaultValue('%d days')->end()
                        ->scalarNode('timezone')
                            ->info('The timezone used when formatting dates, when set to null, the timezone returned by date_default_timezone_get() is used')
                            ->defaultNull()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('number_format')
                    ->info('The default format options for the number_format filter')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->integerNode('decimals')->defaultValue(0)->end()
                        ->scalarNode('decimal_point')->defaultValue('.')->end()
                        ->scalarNode('thousands_separator')->defaultValue(',')->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/DependencyInjection/Configuration.php";
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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

/**
 * TwigExtension configuration structure.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('twig');
        \$rootNode = \$treeBuilder->getRootNode();

        \$rootNode
            ->children()
                ->scalarNode('exception_controller')->defaultValue('twig.controller.exception::showAction')->end()
            ->end()
        ;

        \$this->addFormThemesSection(\$rootNode);
        \$this->addGlobalsSection(\$rootNode);
        \$this->addTwigOptions(\$rootNode);
        \$this->addTwigFormatOptions(\$rootNode);

        return \$treeBuilder;
    }

    private function addFormThemesSection(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->fixXmlConfig('form_theme')
            ->children()
                ->arrayNode('form_themes')
                    ->addDefaultChildrenIfNoneSet()
                    ->prototype('scalar')->defaultValue('form_div_layout.html.twig')->end()
                    ->example(['@My/form.html.twig'])
                    ->validate()
                        ->ifTrue(function (\$v) { return !\\in_array('form_div_layout.html.twig', \$v); })
                        ->then(function (\$v) {
                            return array_merge(['form_div_layout.html.twig'], \$v);
                        })
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addGlobalsSection(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->fixXmlConfig('global')
            ->children()
                ->arrayNode('globals')
                    ->normalizeKeys(false)
                    ->useAttributeAsKey('key')
                    ->example(['foo' => '\"@bar\"', 'pi' => 3.14])
                    ->prototype('array')
                        ->normalizeKeys(false)
                        ->beforeNormalization()
                            ->ifTrue(function (\$v) { return \\is_string(\$v) && 0 === strpos(\$v, '@'); })
                            ->then(function (\$v) {
                                if (0 === strpos(\$v, '@@')) {
                                    return substr(\$v, 1);
                                }

                                return ['id' => substr(\$v, 1), 'type' => 'service'];
                            })
                        ->end()
                        ->beforeNormalization()
                            ->ifTrue(function (\$v) {
                                if (\\is_array(\$v)) {
                                    \$keys = array_keys(\$v);
                                    sort(\$keys);

                                    return \$keys !== ['id', 'type'] && \$keys !== ['value'];
                                }

                                return true;
                            })
                            ->then(function (\$v) { return ['value' => \$v]; })
                        ->end()
                        ->children()
                            ->scalarNode('id')->end()
                            ->scalarNode('type')
                                ->validate()
                                    ->ifNotInArray(['service'])
                                    ->thenInvalid('The %s type is not supported')
                                ->end()
                            ->end()
                            ->variableNode('value')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
    }

    private function addTwigOptions(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->fixXmlConfig('path')
            ->children()
                ->variableNode('autoescape')->defaultValue('name')->end()
                ->scalarNode('autoescape_service')->defaultNull()->end()
                ->scalarNode('autoescape_service_method')->defaultNull()->end()
                ->scalarNode('base_template_class')->example('Twig\\Template')->cannotBeEmpty()->end()
                ->scalarNode('cache')->defaultValue('%kernel.cache_dir%/twig')->end()
                ->scalarNode('charset')->defaultValue('%kernel.charset%')->end()
                ->booleanNode('debug')->defaultValue('%kernel.debug%')->end()
                ->booleanNode('strict_variables')
                    ->defaultValue(function () {
                        @trigger_error('Relying on the default value (\"false\") of the \"twig.strict_variables\" configuration option is deprecated since Symfony 4.1. You should use \"%kernel.debug%\" explicitly instead, which will be the new default in 5.0.', E_USER_DEPRECATED);

                        return false;
                    })
                ->end()
                ->scalarNode('auto_reload')->end()
                ->integerNode('optimizations')->min(-1)->end()
                ->scalarNode('default_path')
                    ->info('The default path used to load templates')
                    ->defaultValue('%kernel.project_dir%/templates')
                ->end()
                ->arrayNode('paths')
                    ->normalizeKeys(false)
                    ->useAttributeAsKey('paths')
                    ->beforeNormalization()
                        ->always()
                        ->then(function (\$paths) {
                            \$normalized = [];
                            foreach (\$paths as \$path => \$namespace) {
                                if (\\is_array(\$namespace)) {
                                    // xml
                                    \$path = \$namespace['value'];
                                    \$namespace = \$namespace['namespace'];
                                }

                                // path within the default namespace
                                if (ctype_digit((string) \$path)) {
                                    \$path = \$namespace;
                                    \$namespace = null;
                                }

                                \$normalized[\$path] = \$namespace;
                            }

                            return \$normalized;
                        })
                    ->end()
                    ->prototype('variable')->end()
                ->end()
            ->end()
        ;
    }

    private function addTwigFormatOptions(ArrayNodeDefinition \$rootNode)
    {
        \$rootNode
            ->children()
                ->arrayNode('date')
                    ->info('The default format options used by the date filter')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('format')->defaultValue('F j, Y H:i')->end()
                        ->scalarNode('interval_format')->defaultValue('%d days')->end()
                        ->scalarNode('timezone')
                            ->info('The timezone used when formatting dates, when set to null, the timezone returned by date_default_timezone_get() is used')
                            ->defaultNull()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('number_format')
                    ->info('The default format options for the number_format filter')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->integerNode('decimals')->defaultValue(0)->end()
                        ->scalarNode('decimal_point')->defaultValue('.')->end()
                        ->scalarNode('thousands_separator')->defaultValue(',')->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}
", "vendor/symfony/twig-bundle/DependencyInjection/Configuration.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/DependencyInjection/Configuration.php");
    }
}
