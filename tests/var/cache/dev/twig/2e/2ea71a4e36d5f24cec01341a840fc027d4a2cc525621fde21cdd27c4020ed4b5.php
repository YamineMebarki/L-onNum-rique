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

/* vendor/symfony/debug-bundle/DependencyInjection/DebugExtension.php */
class __TwigTemplate_4d74c8b2d493c65acc28979548f32caf4653483a35297b79e7f39f2778175f4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/DependencyInjection/DebugExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/DependencyInjection/DebugExtension.php"));

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

use Symfony\\Bundle\\DebugBundle\\Command\\ServerDumpPlaceholderCommand;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

/**
 * DebugExtension.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = new Configuration();
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.xml');

        \$container->getDefinition('var_dumper.cloner')
            ->addMethodCall('setMaxItems', [\$config['max_items']])
            ->addMethodCall('setMinDepth', [\$config['min_depth']])
            ->addMethodCall('setMaxString', [\$config['max_string_length']]);

        if (method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            \$container->getDefinition('var_dumper.cloner')
                ->addMethodCall('addCasters', [ReflectionCaster::UNSET_CLOSURE_FILE_INFO]);
        }

        if (method_exists(HtmlDumper::class, 'setTheme') && 'dark' !== \$config['theme']) {
            \$container->getDefinition('var_dumper.html_dumper')
                ->addMethodCall('setTheme', [\$config['theme']]);
        }

        if (null === \$config['dump_destination']) {
            \$container->getDefinition('var_dumper.command.server_dump')
                ->setClass(ServerDumpPlaceholderCommand::class)
            ;
        } elseif (0 === strpos(\$config['dump_destination'], 'tcp://')) {
            \$container->getDefinition('debug.dump_listener')
                ->replaceArgument(2, new Reference('var_dumper.server_connection'))
            ;
            \$container->getDefinition('data_collector.dump')
                ->replaceArgument(4, new Reference('var_dumper.server_connection'))
            ;
            \$container->getDefinition('var_dumper.dump_server')
                ->replaceArgument(0, \$config['dump_destination'])
            ;
            \$container->getDefinition('var_dumper.server_connection')
                ->replaceArgument(0, \$config['dump_destination'])
            ;
        } else {
            \$container->getDefinition('var_dumper.cli_dumper')
                ->replaceArgument(0, \$config['dump_destination'])
            ;
            \$container->getDefinition('data_collector.dump')
                ->replaceArgument(4, new Reference('var_dumper.cli_dumper'))
            ;
            \$container->getDefinition('var_dumper.command.server_dump')
                ->setClass(ServerDumpPlaceholderCommand::class)
            ;
        }

        if (method_exists(CliDumper::class, 'setDisplayOptions')) {
            \$container->getDefinition('var_dumper.cli_dumper')
                ->addMethodCall('setDisplayOptions', [[
                    'fileLinkFormat' => new Reference('debug.file_link_formatter', ContainerBuilder::IGNORE_ON_INVALID_REFERENCE),
                ]])
            ;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/debug';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/DependencyInjection/DebugExtension.php";
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

use Symfony\\Bundle\\DebugBundle\\Command\\ServerDumpPlaceholderCommand;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper;

/**
 * DebugExtension.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DebugExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = new Configuration();
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.xml');

        \$container->getDefinition('var_dumper.cloner')
            ->addMethodCall('setMaxItems', [\$config['max_items']])
            ->addMethodCall('setMinDepth', [\$config['min_depth']])
            ->addMethodCall('setMaxString', [\$config['max_string_length']]);

        if (method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            \$container->getDefinition('var_dumper.cloner')
                ->addMethodCall('addCasters', [ReflectionCaster::UNSET_CLOSURE_FILE_INFO]);
        }

        if (method_exists(HtmlDumper::class, 'setTheme') && 'dark' !== \$config['theme']) {
            \$container->getDefinition('var_dumper.html_dumper')
                ->addMethodCall('setTheme', [\$config['theme']]);
        }

        if (null === \$config['dump_destination']) {
            \$container->getDefinition('var_dumper.command.server_dump')
                ->setClass(ServerDumpPlaceholderCommand::class)
            ;
        } elseif (0 === strpos(\$config['dump_destination'], 'tcp://')) {
            \$container->getDefinition('debug.dump_listener')
                ->replaceArgument(2, new Reference('var_dumper.server_connection'))
            ;
            \$container->getDefinition('data_collector.dump')
                ->replaceArgument(4, new Reference('var_dumper.server_connection'))
            ;
            \$container->getDefinition('var_dumper.dump_server')
                ->replaceArgument(0, \$config['dump_destination'])
            ;
            \$container->getDefinition('var_dumper.server_connection')
                ->replaceArgument(0, \$config['dump_destination'])
            ;
        } else {
            \$container->getDefinition('var_dumper.cli_dumper')
                ->replaceArgument(0, \$config['dump_destination'])
            ;
            \$container->getDefinition('data_collector.dump')
                ->replaceArgument(4, new Reference('var_dumper.cli_dumper'))
            ;
            \$container->getDefinition('var_dumper.command.server_dump')
                ->setClass(ServerDumpPlaceholderCommand::class)
            ;
        }

        if (method_exists(CliDumper::class, 'setDisplayOptions')) {
            \$container->getDefinition('var_dumper.cli_dumper')
                ->addMethodCall('setDisplayOptions', [[
                    'fileLinkFormat' => new Reference('debug.file_link_formatter', ContainerBuilder::IGNORE_ON_INVALID_REFERENCE),
                ]])
            ;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/debug';
    }
}
", "vendor/symfony/debug-bundle/DependencyInjection/DebugExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/DependencyInjection/DebugExtension.php");
    }
}
