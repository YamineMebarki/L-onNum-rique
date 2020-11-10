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

/* vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigEnvironmentPass.php */
class __TwigTemplate_7e9cff0954d17368063aaf58d49399c8531ea83a8cba1b1fa192f8b2f6d08389 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigEnvironmentPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigEnvironmentPass.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Adds tagged twig.extension services to twig service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigEnvironmentPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('twig')) {
            return;
        }

        \$definition = \$container->getDefinition('twig');

        // Extensions must always be registered before everything else.
        // For instance, global variable definitions must be registered
        // afterward. If not, the globals from the extensions will never
        // be registered.
        \$currentMethodCalls = \$definition->getMethodCalls();
        \$twigBridgeExtensionsMethodCalls = [];
        \$othersExtensionsMethodCalls = [];
        foreach (\$this->findAndSortTaggedServices('twig.extension', \$container) as \$extension) {
            \$methodCall = ['addExtension', [\$extension]];
            \$extensionClass = \$container->getDefinition((string) \$extension)->getClass();

            if (\\is_string(\$extensionClass) && 0 === strpos(\$extensionClass, 'Symfony\\Bridge\\Twig\\Extension')) {
                \$twigBridgeExtensionsMethodCalls[] = \$methodCall;
            } else {
                \$othersExtensionsMethodCalls[] = \$methodCall;
            }
        }

        if (!empty(\$twigBridgeExtensionsMethodCalls) || !empty(\$othersExtensionsMethodCalls)) {
            \$definition->setMethodCalls(array_merge(\$twigBridgeExtensionsMethodCalls, \$othersExtensionsMethodCalls, \$currentMethodCalls));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigEnvironmentPass.php";
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

namespace Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Adds tagged twig.extension services to twig service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigEnvironmentPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('twig')) {
            return;
        }

        \$definition = \$container->getDefinition('twig');

        // Extensions must always be registered before everything else.
        // For instance, global variable definitions must be registered
        // afterward. If not, the globals from the extensions will never
        // be registered.
        \$currentMethodCalls = \$definition->getMethodCalls();
        \$twigBridgeExtensionsMethodCalls = [];
        \$othersExtensionsMethodCalls = [];
        foreach (\$this->findAndSortTaggedServices('twig.extension', \$container) as \$extension) {
            \$methodCall = ['addExtension', [\$extension]];
            \$extensionClass = \$container->getDefinition((string) \$extension)->getClass();

            if (\\is_string(\$extensionClass) && 0 === strpos(\$extensionClass, 'Symfony\\Bridge\\Twig\\Extension')) {
                \$twigBridgeExtensionsMethodCalls[] = \$methodCall;
            } else {
                \$othersExtensionsMethodCalls[] = \$methodCall;
            }
        }

        if (!empty(\$twigBridgeExtensionsMethodCalls) || !empty(\$othersExtensionsMethodCalls)) {
            \$definition->setMethodCalls(array_merge(\$twigBridgeExtensionsMethodCalls, \$othersExtensionsMethodCalls, \$currentMethodCalls));
        }
    }
}
", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigEnvironmentPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/DependencyInjection/Compiler/TwigEnvironmentPass.php");
    }
}
