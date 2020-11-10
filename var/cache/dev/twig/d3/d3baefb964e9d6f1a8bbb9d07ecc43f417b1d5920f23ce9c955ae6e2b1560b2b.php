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

/* vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExceptionListenerPass.php */
class __TwigTemplate_3267402c46bb209899872e5cda1ae2e2670e08ad9b93c606ccd4ccd8b973ac1b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExceptionListenerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExceptionListenerPass.php"));

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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Registers the Twig exception listener if Twig is registered as a templating engine.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionListenerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('twig')) {
            return;
        }

        // register the exception controller only if Twig is enabled and required dependencies do exist
        if (!class_exists('Symfony\\Component\\Debug\\Exception\\FlattenException') || !interface_exists('Symfony\\Component\\EventDispatcher\\EventSubscriberInterface')) {
            \$container->removeDefinition('twig.exception_listener');
        } elseif (\$container->hasParameter('templating.engines')) {
            \$engines = \$container->getParameter('templating.engines');
            if (!\\in_array('twig', \$engines)) {
                \$container->removeDefinition('twig.exception_listener');
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
        return "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExceptionListenerPass.php";
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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Registers the Twig exception listener if Twig is registered as a templating engine.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionListenerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('twig')) {
            return;
        }

        // register the exception controller only if Twig is enabled and required dependencies do exist
        if (!class_exists('Symfony\\Component\\Debug\\Exception\\FlattenException') || !interface_exists('Symfony\\Component\\EventDispatcher\\EventSubscriberInterface')) {
            \$container->removeDefinition('twig.exception_listener');
        } elseif (\$container->hasParameter('templating.engines')) {
            \$engines = \$container->getParameter('templating.engines');
            if (!\\in_array('twig', \$engines)) {
                \$container->removeDefinition('twig.exception_listener');
            }
        }
    }
}
", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExceptionListenerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExceptionListenerPass.php");
    }
}
