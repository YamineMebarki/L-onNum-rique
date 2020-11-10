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

/* vendor/symfony/monolog-bundle/DependencyInjection/Compiler/DebugHandlerPass.php */
class __TwigTemplate_ad2631600363aa731e501c4dda170ffedcc76aa3d549cdd96904fab3c0bcfb32 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/DebugHandlerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/DebugHandlerPass.php"));

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

namespace Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Monolog\\Logger;

/**
 * Adds the DebugHandler when the profiler is enabled and kernel.debug is true.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since version 2.12, to be removed in 4.0. Use AddDebugLogProcessorPass in FrameworkBundle instead.
 */
class DebugHandlerPass implements CompilerPassInterface
{
    private \$channelPass;

    public function __construct(LoggerChannelPass \$channelPass)
    {
        @trigger_error('The '.__CLASS__.' class is deprecated since version 2.12 and will be removed in 4.0. Use AddDebugLogProcessorPass in FrameworkBundle instead.', E_USER_DEPRECATED);

        \$this->channelPass = \$channelPass;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('profiler')) {
            return;
        }

        if (!\$container->getParameter('kernel.debug')) {
            return;
        }

        \$debugHandler = new Definition('Symfony\\Bridge\\Monolog\\Handler\\DebugHandler', array(Logger::DEBUG, true));
        \$container->setDefinition('monolog.handler.debug', \$debugHandler);

        foreach (\$this->channelPass->getChannels() as \$channel) {
            \$container
                ->getDefinition(\$channel === 'app' ? 'monolog.logger' : 'monolog.logger.'.\$channel)
                ->addMethodCall('pushHandler', array(new Reference('monolog.handler.debug')));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/DebugHandlerPass.php";
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

namespace Symfony\\Bundle\\MonologBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Monolog\\Logger;

/**
 * Adds the DebugHandler when the profiler is enabled and kernel.debug is true.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 *
 * @deprecated since version 2.12, to be removed in 4.0. Use AddDebugLogProcessorPass in FrameworkBundle instead.
 */
class DebugHandlerPass implements CompilerPassInterface
{
    private \$channelPass;

    public function __construct(LoggerChannelPass \$channelPass)
    {
        @trigger_error('The '.__CLASS__.' class is deprecated since version 2.12 and will be removed in 4.0. Use AddDebugLogProcessorPass in FrameworkBundle instead.', E_USER_DEPRECATED);

        \$this->channelPass = \$channelPass;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('profiler')) {
            return;
        }

        if (!\$container->getParameter('kernel.debug')) {
            return;
        }

        \$debugHandler = new Definition('Symfony\\Bridge\\Monolog\\Handler\\DebugHandler', array(Logger::DEBUG, true));
        \$container->setDefinition('monolog.handler.debug', \$debugHandler);

        foreach (\$this->channelPass->getChannels() as \$channel) {
            \$container
                ->getDefinition(\$channel === 'app' ? 'monolog.logger' : 'monolog.logger.'.\$channel)
                ->addMethodCall('pushHandler', array(new Reference('monolog.handler.debug')));
        }
    }
}
", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/DebugHandlerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/DependencyInjection/Compiler/DebugHandlerPass.php");
    }
}
