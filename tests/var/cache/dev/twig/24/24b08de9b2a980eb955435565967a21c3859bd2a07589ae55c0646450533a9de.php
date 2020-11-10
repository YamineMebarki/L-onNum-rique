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

/* vendor/symfony/web-server-bundle/DependencyInjection/WebServerExtension.php */
class __TwigTemplate_5f7b677a2942f3b3fa03b1d22e753efcb2a8b6b910143870fa89be9da5b9cebf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/DependencyInjection/WebServerExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-server-bundle/DependencyInjection/WebServerExtension.php"));

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

namespace Symfony\\Bundle\\WebServerBundle\\DependencyInjection;

use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class WebServerExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('webserver.xml');

        \$publicDirectory = \$this->getPublicDirectory(\$container);
        \$container->getDefinition('web_server.command.server_run')->replaceArgument(0, \$publicDirectory);
        \$container->getDefinition('web_server.command.server_start')->replaceArgument(0, \$publicDirectory);

        \$pidFileDirectory = \$this->getPidFileDirectory(\$container);
        \$container->getDefinition('web_server.command.server_run')->replaceArgument(2, \$pidFileDirectory);
        \$container->getDefinition('web_server.command.server_start')->replaceArgument(2, \$pidFileDirectory);
        \$container->getDefinition('web_server.command.server_stop')->replaceArgument(0, \$pidFileDirectory);
        \$container->getDefinition('web_server.command.server_status')->replaceArgument(0, \$pidFileDirectory);

        if (!class_exists(ConsoleFormatter::class)) {
            \$container->removeDefinition('web_server.command.server_log');
        }
    }

    private function getPublicDirectory(ContainerBuilder \$container)
    {
        \$kernelProjectDir = \$container->getParameter('kernel.project_dir');
        \$publicDir = 'public';
        \$composerFilePath = \$kernelProjectDir.'/composer.json';

        if (!file_exists(\$composerFilePath)) {
            return \$kernelProjectDir.'/'.\$publicDir;
        }

        \$composerConfig = json_decode(file_get_contents(\$composerFilePath), true);

        if (isset(\$composerConfig['extra']['public-dir'])) {
            \$publicDir = \$composerConfig['extra']['public-dir'];
        }

        return \$kernelProjectDir.'/'.\$publicDir;
    }

    private function getPidFileDirectory(ContainerBuilder \$container): string
    {
        \$kernelCacheDir = \$container->getParameter('kernel.cache_dir');
        \$environment = \$container->getParameter('kernel.environment');

        if (basename(\$kernelCacheDir) !== \$environment) {
            return \$container->getParameter('kernel.project_dir');
        }

        return \\dirname(\$container->getParameter('kernel.cache_dir'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-server-bundle/DependencyInjection/WebServerExtension.php";
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

namespace Symfony\\Bundle\\WebServerBundle\\DependencyInjection;

use Symfony\\Bridge\\Monolog\\Formatter\\ConsoleFormatter;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class WebServerExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('webserver.xml');

        \$publicDirectory = \$this->getPublicDirectory(\$container);
        \$container->getDefinition('web_server.command.server_run')->replaceArgument(0, \$publicDirectory);
        \$container->getDefinition('web_server.command.server_start')->replaceArgument(0, \$publicDirectory);

        \$pidFileDirectory = \$this->getPidFileDirectory(\$container);
        \$container->getDefinition('web_server.command.server_run')->replaceArgument(2, \$pidFileDirectory);
        \$container->getDefinition('web_server.command.server_start')->replaceArgument(2, \$pidFileDirectory);
        \$container->getDefinition('web_server.command.server_stop')->replaceArgument(0, \$pidFileDirectory);
        \$container->getDefinition('web_server.command.server_status')->replaceArgument(0, \$pidFileDirectory);

        if (!class_exists(ConsoleFormatter::class)) {
            \$container->removeDefinition('web_server.command.server_log');
        }
    }

    private function getPublicDirectory(ContainerBuilder \$container)
    {
        \$kernelProjectDir = \$container->getParameter('kernel.project_dir');
        \$publicDir = 'public';
        \$composerFilePath = \$kernelProjectDir.'/composer.json';

        if (!file_exists(\$composerFilePath)) {
            return \$kernelProjectDir.'/'.\$publicDir;
        }

        \$composerConfig = json_decode(file_get_contents(\$composerFilePath), true);

        if (isset(\$composerConfig['extra']['public-dir'])) {
            \$publicDir = \$composerConfig['extra']['public-dir'];
        }

        return \$kernelProjectDir.'/'.\$publicDir;
    }

    private function getPidFileDirectory(ContainerBuilder \$container): string
    {
        \$kernelCacheDir = \$container->getParameter('kernel.cache_dir');
        \$environment = \$container->getParameter('kernel.environment');

        if (basename(\$kernelCacheDir) !== \$environment) {
            return \$container->getParameter('kernel.project_dir');
        }

        return \\dirname(\$container->getParameter('kernel.cache_dir'));
    }
}
", "vendor/symfony/web-server-bundle/DependencyInjection/WebServerExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-server-bundle/DependencyInjection/WebServerExtension.php");
    }
}
