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

/* vendor/symfony/monolog-bundle/MonologBundle.php */
class __TwigTemplate_a3be1aa12cf98c9dcf6bdd56e26164f8635122a45736a66ec8a7a410f0ca07e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/MonologBundle.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/MonologBundle.php"));

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

namespace Symfony\\Bundle\\MonologBundle;

use Monolog\\Formatter\\JsonFormatter;
use Monolog\\Formatter\\LineFormatter;
use Monolog\\Handler\\HandlerInterface;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddSwiftMailerTransportPass;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\LoggerChannelPass;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\DebugHandlerPass;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddProcessorsPass;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\FixEmptyLoggerPass;

/**
 * Bundle.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class MonologBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(\$channelPass = new LoggerChannelPass());
        if (!class_exists('Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor') || !class_exists('Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass')) {
            \$container->addCompilerPass(new DebugHandlerPass(\$channelPass));
        }
        \$container->addCompilerPass(new FixEmptyLoggerPass(\$channelPass));
        \$container->addCompilerPass(new AddProcessorsPass());
        \$container->addCompilerPass(new AddSwiftMailerTransportPass());
    }

    /**
     * @internal
     */
    public static function includeStacktraces(HandlerInterface \$handler)
    {
        \$formatter = \$handler->getFormatter();
        if (\$formatter instanceof LineFormatter || \$formatter instanceof JsonFormatter) {
            \$formatter->includeStacktraces();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/MonologBundle.php";
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

namespace Symfony\\Bundle\\MonologBundle;

use Monolog\\Formatter\\JsonFormatter;
use Monolog\\Formatter\\LineFormatter;
use Monolog\\Handler\\HandlerInterface;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddSwiftMailerTransportPass;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\LoggerChannelPass;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\DebugHandlerPass;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\AddProcessorsPass;
use Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler\\FixEmptyLoggerPass;

/**
 * Bundle.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class MonologBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$container->addCompilerPass(\$channelPass = new LoggerChannelPass());
        if (!class_exists('Symfony\\Bridge\\Monolog\\Processor\\DebugProcessor') || !class_exists('Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass')) {
            \$container->addCompilerPass(new DebugHandlerPass(\$channelPass));
        }
        \$container->addCompilerPass(new FixEmptyLoggerPass(\$channelPass));
        \$container->addCompilerPass(new AddProcessorsPass());
        \$container->addCompilerPass(new AddSwiftMailerTransportPass());
    }

    /**
     * @internal
     */
    public static function includeStacktraces(HandlerInterface \$handler)
    {
        \$formatter = \$handler->getFormatter();
        if (\$formatter instanceof LineFormatter || \$formatter instanceof JsonFormatter) {
            \$formatter->includeStacktraces();
        }
    }
}
", "vendor/symfony/monolog-bundle/MonologBundle.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/MonologBundle.php");
    }
}
