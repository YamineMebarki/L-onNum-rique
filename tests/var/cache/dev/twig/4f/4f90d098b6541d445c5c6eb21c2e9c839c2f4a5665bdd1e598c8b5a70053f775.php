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

/* vendor/sensio/framework-extra-bundle/src/DependencyInjection/Configuration.php */
class __TwigTemplate_5b25be2f7f34346e55519e8d1544b68f5b7872903bdf95426855d340158ed7a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Configuration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Configuration.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\DependencyInjection;

use Symfony\\Bridge\\PsrHttpMessage\\HttpFoundationFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Symfony\\Component\\Config\\Definition\\NodeInterface;

/**
 * FrameworkExtraBundle configuration structure.
 *
 * @author Henrik Bjornskov <hb@peytz.dk>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return NodeInterface
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('sensio_framework_extra');

        if (method_exists(\$treeBuilder, 'getRootNode')) {
            \$rootNode = \$treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            \$rootNode = \$treeBuilder->root('sensio_framework_extra');
        }

        \$rootNode
            ->children()
                ->arrayNode('router')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('request')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('converters')->defaultTrue()->end()
                        ->booleanNode('auto_convert')->defaultTrue()->end()
                        ->arrayNode('disable')->prototype('scalar')->end()->end()
                    ->end()
                ->end()
                ->arrayNode('view')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('cache')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('security')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                        ->scalarNode('expression_language')->defaultValue('sensio_framework_extra.security.expression_language.default')->end()
                    ->end()
                ->end()
                ->arrayNode('psr_message')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('enabled')->defaultValue(interface_exists(HttpFoundationFactoryInterface::class))->end()
                    ->end()
                ->end()
                ->arrayNode('templating')
                    ->fixXmlConfig('controller_pattern')
                    ->children()
                        ->arrayNode('controller_patterns')
                            ->prototype('scalar')
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
        return "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Configuration.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\DependencyInjection;

use Symfony\\Bridge\\PsrHttpMessage\\HttpFoundationFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Symfony\\Component\\Config\\Definition\\NodeInterface;

/**
 * FrameworkExtraBundle configuration structure.
 *
 * @author Henrik Bjornskov <hb@peytz.dk>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return NodeInterface
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('sensio_framework_extra');

        if (method_exists(\$treeBuilder, 'getRootNode')) {
            \$rootNode = \$treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            \$rootNode = \$treeBuilder->root('sensio_framework_extra');
        }

        \$rootNode
            ->children()
                ->arrayNode('router')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('request')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('converters')->defaultTrue()->end()
                        ->booleanNode('auto_convert')->defaultTrue()->end()
                        ->arrayNode('disable')->prototype('scalar')->end()->end()
                    ->end()
                ->end()
                ->arrayNode('view')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('cache')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('security')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('annotations')->defaultTrue()->end()
                        ->scalarNode('expression_language')->defaultValue('sensio_framework_extra.security.expression_language.default')->end()
                    ->end()
                ->end()
                ->arrayNode('psr_message')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('enabled')->defaultValue(interface_exists(HttpFoundationFactoryInterface::class))->end()
                    ->end()
                ->end()
                ->arrayNode('templating')
                    ->fixXmlConfig('controller_pattern')
                    ->children()
                        ->arrayNode('controller_patterns')
                            ->prototype('scalar')
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return \$treeBuilder;
    }
}
", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Configuration.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/DependencyInjection/Configuration.php");
    }
}
