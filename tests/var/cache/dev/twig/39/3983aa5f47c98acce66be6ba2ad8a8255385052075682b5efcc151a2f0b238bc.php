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

/* vendor/symfony/debug-bundle/DependencyInjection/Configuration.php */
class __TwigTemplate_d7667803a5a8350443247286bf30147c5e27990ff8a74500595e594e268f7a08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/DependencyInjection/Configuration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/DependencyInjection/Configuration.php"));

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

namespace Symfony\\Bundle\\DebugBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

/**
 * DebugExtension configuration structure.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('debug');

        \$rootNode = \$treeBuilder->getRootNode();
        \$rootNode->children()
                ->integerNode('max_items')
                    ->info('Max number of displayed items past the first level, -1 means no limit')
                    ->min(-1)
                    ->defaultValue(2500)
                ->end()
                ->integerNode('min_depth')
                    ->info('Minimum tree depth to clone all the items, 1 is default')
                    ->min(0)
                    ->defaultValue(1)
                ->end()
                ->integerNode('max_string_length')
                    ->info('Max length of displayed strings, -1 means no limit')
                    ->min(-1)
                    ->defaultValue(-1)
                ->end()
                ->scalarNode('dump_destination')
                    ->info('A stream URL where dumps should be written to')
                    ->example('php://stderr, or tcp://%env(VAR_DUMPER_SERVER)% when using the \"server:dump\" command')
                    ->defaultNull()
                ->end()
            ->end()
        ;

        if (method_exists(HtmlDumper::class, 'setTheme')) {
            \$rootNode
                ->children()
                    ->enumNode('theme')
                        ->info('Changes the color of the dump() output when rendered directly on the templating. \"dark\" (default) or \"light\"')
                        ->example('dark')
                        ->values(['dark', 'light'])
                        ->defaultValue('dark')
                    ->end()
                ->end()
            ;
        }

        return \$treeBuilder;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/DependencyInjection/Configuration.php";
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

namespace Symfony\\Bundle\\DebugBundle\\DependencyInjection;

use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

/**
 * DebugExtension configuration structure.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        \$treeBuilder = new TreeBuilder('debug');

        \$rootNode = \$treeBuilder->getRootNode();
        \$rootNode->children()
                ->integerNode('max_items')
                    ->info('Max number of displayed items past the first level, -1 means no limit')
                    ->min(-1)
                    ->defaultValue(2500)
                ->end()
                ->integerNode('min_depth')
                    ->info('Minimum tree depth to clone all the items, 1 is default')
                    ->min(0)
                    ->defaultValue(1)
                ->end()
                ->integerNode('max_string_length')
                    ->info('Max length of displayed strings, -1 means no limit')
                    ->min(-1)
                    ->defaultValue(-1)
                ->end()
                ->scalarNode('dump_destination')
                    ->info('A stream URL where dumps should be written to')
                    ->example('php://stderr, or tcp://%env(VAR_DUMPER_SERVER)% when using the \"server:dump\" command')
                    ->defaultNull()
                ->end()
            ->end()
        ;

        if (method_exists(HtmlDumper::class, 'setTheme')) {
            \$rootNode
                ->children()
                    ->enumNode('theme')
                        ->info('Changes the color of the dump() output when rendered directly on the templating. \"dark\" (default) or \"light\"')
                        ->example('dark')
                        ->values(['dark', 'light'])
                        ->defaultValue('dark')
                    ->end()
                ->end()
            ;
        }

        return \$treeBuilder;
    }
}
", "vendor/symfony/debug-bundle/DependencyInjection/Configuration.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/DependencyInjection/Configuration.php");
    }
}
