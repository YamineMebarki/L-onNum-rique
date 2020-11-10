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

/* vendor/symfony/twig-bundle/DependencyInjection/Compiler/RuntimeLoaderPass.php */
class __TwigTemplate_7d28e9a954525666822a7d1081920e6e4d64ce55a66aab990097cbd8795e1353 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/RuntimeLoaderPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/RuntimeLoaderPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers Twig runtime services.
 */
class RuntimeLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('twig.runtime_loader')) {
            return;
        }

        \$definition = \$container->getDefinition('twig.runtime_loader');
        \$mapping = [];
        foreach (\$container->findTaggedServiceIds('twig.runtime', true) as \$id => \$attributes) {
            \$def = \$container->getDefinition(\$id);
            \$mapping[\$def->getClass()] = new Reference(\$id);
        }

        \$definition->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$mapping));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/DependencyInjection/Compiler/RuntimeLoaderPass.php";
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
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers Twig runtime services.
 */
class RuntimeLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('twig.runtime_loader')) {
            return;
        }

        \$definition = \$container->getDefinition('twig.runtime_loader');
        \$mapping = [];
        foreach (\$container->findTaggedServiceIds('twig.runtime', true) as \$id => \$attributes) {
            \$def = \$container->getDefinition(\$id);
            \$mapping[\$def->getClass()] = new Reference(\$id);
        }

        \$definition->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$mapping));
    }
}
", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/RuntimeLoaderPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/DependencyInjection/Compiler/RuntimeLoaderPass.php");
    }
}
