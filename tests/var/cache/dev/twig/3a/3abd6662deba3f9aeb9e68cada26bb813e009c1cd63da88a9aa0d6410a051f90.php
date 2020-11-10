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

/* vendor/symfony/monolog-bundle/DependencyInjection/Compiler/FixEmptyLoggerPass.php */
class __TwigTemplate_34c8fd0d06e2ad8446bf85f41f4451609cce3609add77413cd1a66d30afc1c22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/FixEmptyLoggerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/FixEmptyLoggerPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Fixes loggers with no handlers (by registering a \"null\" one).
 *
 * Monolog 1.x adds a default handler logging on STDERR when a logger has
 * no registered handlers. This is NOT what what we want in Symfony, so in such
 * cases, we add a \"null\" handler to avoid the issue.
 *
 * Note that Monolog 2.x does not register a default handler anymore, so this pass can
 * be removed when MonologBundle minimum version of Monolog is bumped to 2.0.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://github.com/Seldaek/monolog/commit/ad37b7b2d11f300cbace9f5e84f855d329519e28
 */
class FixEmptyLoggerPass implements CompilerPassInterface
{
    private \$channelPass;

    public function __construct(LoggerChannelPass \$channelPass)
    {
        \$this->channelPass = \$channelPass;
    }

    public function process(ContainerBuilder \$container)
    {
        \$container->register('monolog.handler.null_internal', 'Monolog\\Handler\\NullHandler');
        foreach (\$this->channelPass->getChannels() as \$channel) {
            \$def = \$container->getDefinition(\$channel === 'app' ? 'monolog.logger' : 'monolog.logger.'.\$channel);
            foreach (\$def->getMethodCalls() as \$method) {
                if ('pushHandler' === \$method[0]) {
                    continue 2;
                }
            }

            \$def->addMethodCall('pushHandler', array(new Reference('monolog.handler.null_internal')));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/FixEmptyLoggerPass.php";
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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Fixes loggers with no handlers (by registering a \"null\" one).
 *
 * Monolog 1.x adds a default handler logging on STDERR when a logger has
 * no registered handlers. This is NOT what what we want in Symfony, so in such
 * cases, we add a \"null\" handler to avoid the issue.
 *
 * Note that Monolog 2.x does not register a default handler anymore, so this pass can
 * be removed when MonologBundle minimum version of Monolog is bumped to 2.0.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://github.com/Seldaek/monolog/commit/ad37b7b2d11f300cbace9f5e84f855d329519e28
 */
class FixEmptyLoggerPass implements CompilerPassInterface
{
    private \$channelPass;

    public function __construct(LoggerChannelPass \$channelPass)
    {
        \$this->channelPass = \$channelPass;
    }

    public function process(ContainerBuilder \$container)
    {
        \$container->register('monolog.handler.null_internal', 'Monolog\\Handler\\NullHandler');
        foreach (\$this->channelPass->getChannels() as \$channel) {
            \$def = \$container->getDefinition(\$channel === 'app' ? 'monolog.logger' : 'monolog.logger.'.\$channel);
            foreach (\$def->getMethodCalls() as \$method) {
                if ('pushHandler' === \$method[0]) {
                    continue 2;
                }
            }

            \$def->addMethodCall('pushHandler', array(new Reference('monolog.handler.null_internal')));
        }
    }
}
", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/FixEmptyLoggerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/DependencyInjection/Compiler/FixEmptyLoggerPass.php");
    }
}
