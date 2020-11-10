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

/* vendor/symfony/config/Tests/Fixtures/Configuration/ExampleConfiguration.php */
class __TwigTemplate_7c6ef10e5988ce1cf249fd620c4b1c7041bc68e96db06ea27786fe89c743bc6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Fixtures/Configuration/ExampleConfiguration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Fixtures/Configuration/ExampleConfiguration.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Fixtures\\Configuration;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

class ExampleConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('acme_root');

        \$treeBuilder->getRootNode()
            ->fixXmlConfig('parameter')
            ->fixXmlConfig('connection')
            ->fixXmlConfig('cms_page')
            ->children()
                ->booleanNode('boolean')->defaultTrue()->end()
                ->scalarNode('scalar_empty')->end()
                ->scalarNode('scalar_null')->defaultNull()->end()
                ->scalarNode('scalar_true')->defaultTrue()->end()
                ->scalarNode('scalar_false')->defaultFalse()->end()
                ->scalarNode('scalar_default')->defaultValue('default')->end()
                ->scalarNode('scalar_array_empty')->defaultValue([])->end()
                ->scalarNode('scalar_array_defaults')->defaultValue(['elem1', 'elem2'])->end()
                ->scalarNode('scalar_required')->isRequired()->end()
                ->scalarNode('scalar_deprecated')->setDeprecated()->end()
                ->scalarNode('scalar_deprecated_with_message')->setDeprecated('Deprecation custom message for \"%node%\" at \"%path%\"')->end()
                ->scalarNode('node_with_a_looong_name')->end()
                ->enumNode('enum_with_default')->values(['this', 'that'])->defaultValue('this')->end()
                ->enumNode('enum')->values(['this', 'that'])->end()
                ->arrayNode('array')
                    ->info('some info')
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('child1')->end()
                        ->scalarNode('child2')->end()
                        ->scalarNode('child3')
                            ->info(
                                \"this is a long\\n\".
                                \"multi-line info text\\n\".
                                'which should be indented'
                            )
                            ->example('example setting')
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('scalar_prototyped')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('parameters')
                    ->useAttributeAsKey('name')
                    ->prototype('scalar')->info('Parameter name')->end()
                ->end()
                ->arrayNode('connections')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('user')->end()
                            ->scalarNode('pass')->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('cms_pages')
                    ->useAttributeAsKey('page')
                    ->prototype('array')
                        ->useAttributeAsKey('locale')
                        ->prototype('array')
                            ->children()
                                ->scalarNode('title')->isRequired()->end()
                                ->scalarNode('path')->isRequired()->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('pipou')
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->prototype('array')
                            ->children()
                                ->scalarNode('didou')
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return \$treeBuilder;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Fixtures/Configuration/ExampleConfiguration.php";
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

namespace Symfony\\Component\\Config\\Tests\\Fixtures\\Configuration;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;

class ExampleConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('acme_root');

        \$treeBuilder->getRootNode()
            ->fixXmlConfig('parameter')
            ->fixXmlConfig('connection')
            ->fixXmlConfig('cms_page')
            ->children()
                ->booleanNode('boolean')->defaultTrue()->end()
                ->scalarNode('scalar_empty')->end()
                ->scalarNode('scalar_null')->defaultNull()->end()
                ->scalarNode('scalar_true')->defaultTrue()->end()
                ->scalarNode('scalar_false')->defaultFalse()->end()
                ->scalarNode('scalar_default')->defaultValue('default')->end()
                ->scalarNode('scalar_array_empty')->defaultValue([])->end()
                ->scalarNode('scalar_array_defaults')->defaultValue(['elem1', 'elem2'])->end()
                ->scalarNode('scalar_required')->isRequired()->end()
                ->scalarNode('scalar_deprecated')->setDeprecated()->end()
                ->scalarNode('scalar_deprecated_with_message')->setDeprecated('Deprecation custom message for \"%node%\" at \"%path%\"')->end()
                ->scalarNode('node_with_a_looong_name')->end()
                ->enumNode('enum_with_default')->values(['this', 'that'])->defaultValue('this')->end()
                ->enumNode('enum')->values(['this', 'that'])->end()
                ->arrayNode('array')
                    ->info('some info')
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('child1')->end()
                        ->scalarNode('child2')->end()
                        ->scalarNode('child3')
                            ->info(
                                \"this is a long\\n\".
                                \"multi-line info text\\n\".
                                'which should be indented'
                            )
                            ->example('example setting')
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('scalar_prototyped')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('parameters')
                    ->useAttributeAsKey('name')
                    ->prototype('scalar')->info('Parameter name')->end()
                ->end()
                ->arrayNode('connections')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('user')->end()
                            ->scalarNode('pass')->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('cms_pages')
                    ->useAttributeAsKey('page')
                    ->prototype('array')
                        ->useAttributeAsKey('locale')
                        ->prototype('array')
                            ->children()
                                ->scalarNode('title')->isRequired()->end()
                                ->scalarNode('path')->isRequired()->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('pipou')
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->prototype('array')
                            ->children()
                                ->scalarNode('didou')
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return \$treeBuilder;
    }
}
", "vendor/symfony/config/Tests/Fixtures/Configuration/ExampleConfiguration.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Fixtures/Configuration/ExampleConfiguration.php");
    }
}
