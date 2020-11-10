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

/* vendor/symfony/monolog-bundle/DependencyInjection/Compiler/AddProcessorsPass.php */
class __TwigTemplate_c79e073729870e1cc6995403b7daca06b635790c26dd0c03519b27e38a93ad54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/AddProcessorsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/AddProcessorsPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers processors in Monolog loggers or handlers.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class AddProcessorsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('monolog.logger')) {
            return;
        }

        foreach (\$container->findTaggedServiceIds('monolog.processor') as \$id => \$tags) {
            foreach (\$tags as \$tag) {
                if (!empty(\$tag['channel']) && !empty(\$tag['handler'])) {
                    throw new \\InvalidArgumentException(sprintf('you cannot specify both the \"handler\" and \"channel\" attributes for the \"monolog.processor\" tag on service \"%s\"', \$id));
                }

                if (!empty(\$tag['handler'])) {
                    \$definition = \$container->findDefinition(sprintf('monolog.handler.%s', \$tag['handler']));
                } elseif (!empty(\$tag['channel'])) {
                    if ('app' === \$tag['channel']) {
                        \$definition = \$container->getDefinition('monolog.logger');
                    } else {
                        \$definition = \$container->getDefinition(sprintf('monolog.logger.%s', \$tag['channel']));
                    }
                } else {
                    \$definition = \$container->getDefinition('monolog.logger_prototype');
                }

                if (!empty(\$tag['method'])) {
                    \$processor = array(new Reference(\$id), \$tag['method']);
                } else {
                    // If no method is defined, fallback to use __invoke
                    \$processor = new Reference(\$id);
                }
                \$definition->addMethodCall('pushProcessor', array(\$processor));
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/AddProcessorsPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers processors in Monolog loggers or handlers.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class AddProcessorsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('monolog.logger')) {
            return;
        }

        foreach (\$container->findTaggedServiceIds('monolog.processor') as \$id => \$tags) {
            foreach (\$tags as \$tag) {
                if (!empty(\$tag['channel']) && !empty(\$tag['handler'])) {
                    throw new \\InvalidArgumentException(sprintf('you cannot specify both the \"handler\" and \"channel\" attributes for the \"monolog.processor\" tag on service \"%s\"', \$id));
                }

                if (!empty(\$tag['handler'])) {
                    \$definition = \$container->findDefinition(sprintf('monolog.handler.%s', \$tag['handler']));
                } elseif (!empty(\$tag['channel'])) {
                    if ('app' === \$tag['channel']) {
                        \$definition = \$container->getDefinition('monolog.logger');
                    } else {
                        \$definition = \$container->getDefinition(sprintf('monolog.logger.%s', \$tag['channel']));
                    }
                } else {
                    \$definition = \$container->getDefinition('monolog.logger_prototype');
                }

                if (!empty(\$tag['method'])) {
                    \$processor = array(new Reference(\$id), \$tag['method']);
                } else {
                    // If no method is defined, fallback to use __invoke
                    \$processor = new Reference(\$id);
                }
                \$definition->addMethodCall('pushProcessor', array(\$processor));
            }
        }
    }
}
", "vendor/symfony/monolog-bundle/DependencyInjection/Compiler/AddProcessorsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/DependencyInjection/Compiler/AddProcessorsPass.php");
    }
}
