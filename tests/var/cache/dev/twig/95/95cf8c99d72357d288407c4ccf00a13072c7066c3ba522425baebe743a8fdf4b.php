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

/* vendor/symfony/web-profiler-bundle/DependencyInjection/WebProfilerExtension.php */
class __TwigTemplate_fe9523b96814105551d0b575b33588582d6f95e942150351bd8bdc414ec99691 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/DependencyInjection/WebProfilerExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/DependencyInjection/WebProfilerExtension.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\DependencyInjection;

use Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * WebProfilerExtension.
 *
 * Usage:
 *
 *     <webprofiler:config
 *        toolbar=\"true\"
 *        intercept-redirects=\"true\"
 *     />
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebProfilerExtension extends Extension
{
    /**
     * Loads the web profiler configuration.
     *
     * @param array            \$configs   An array of configuration settings
     * @param ContainerBuilder \$container A ContainerBuilder instance
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('profiler.xml');

        if (\$config['toolbar'] || \$config['intercept_redirects']) {
            \$loader->load('toolbar.xml');
            \$container->getDefinition('web_profiler.debug_toolbar')->replaceArgument(4, \$config['excluded_ajax_paths']);
            \$container->setParameter('web_profiler.debug_toolbar.intercept_redirects', \$config['intercept_redirects']);
            \$container->setParameter('web_profiler.debug_toolbar.mode', \$config['toolbar'] ? WebDebugToolbarListener::ENABLED : WebDebugToolbarListener::DISABLED);
        }

        if (Kernel::VERSION_ID >= 40008 || (Kernel::VERSION_ID >= 30408 && Kernel::VERSION_ID < 40000)) {
            \$container->getDefinition('debug.file_link_formatter')
                ->replaceArgument(3, new ServiceClosureArgument(new Reference('debug.file_link_formatter.url_format')));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/webprofiler';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/DependencyInjection/WebProfilerExtension.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\DependencyInjection;

use Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * WebProfilerExtension.
 *
 * Usage:
 *
 *     <webprofiler:config
 *        toolbar=\"true\"
 *        intercept-redirects=\"true\"
 *     />
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WebProfilerExtension extends Extension
{
    /**
     * Loads the web profiler configuration.
     *
     * @param array            \$configs   An array of configuration settings
     * @param ContainerBuilder \$container A ContainerBuilder instance
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('profiler.xml');

        if (\$config['toolbar'] || \$config['intercept_redirects']) {
            \$loader->load('toolbar.xml');
            \$container->getDefinition('web_profiler.debug_toolbar')->replaceArgument(4, \$config['excluded_ajax_paths']);
            \$container->setParameter('web_profiler.debug_toolbar.intercept_redirects', \$config['intercept_redirects']);
            \$container->setParameter('web_profiler.debug_toolbar.mode', \$config['toolbar'] ? WebDebugToolbarListener::ENABLED : WebDebugToolbarListener::DISABLED);
        }

        if (Kernel::VERSION_ID >= 40008 || (Kernel::VERSION_ID >= 30408 && Kernel::VERSION_ID < 40000)) {
            \$container->getDefinition('debug.file_link_formatter')
                ->replaceArgument(3, new ServiceClosureArgument(new Reference('debug.file_link_formatter.url_format')));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/webprofiler';
    }
}
", "vendor/symfony/web-profiler-bundle/DependencyInjection/WebProfilerExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/DependencyInjection/WebProfilerExtension.php");
    }
}
