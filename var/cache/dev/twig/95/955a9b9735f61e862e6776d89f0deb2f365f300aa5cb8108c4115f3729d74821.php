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

/* vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/RegisterPluginsPass.php */
class __TwigTemplate_f8bd4af0b3abccf67d09801ba1a02dc71b49c1344a0f579907a6e45e9db8b0b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/RegisterPluginsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/RegisterPluginsPass.php"));

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

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * RegisterPluginsPass registers Swiftmailer plugins.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RegisterPluginsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->findDefinition('swiftmailer.mailer') || !\$container->getParameter('swiftmailer.mailers')) {
            return;
        }

        \$mailers = \$container->getParameter('swiftmailer.mailers');
        foreach (\$mailers as \$name => \$mailer) {
            \$plugins = \$this->findSortedByPriorityTaggedServiceIds(\$container, sprintf('swiftmailer.%s.plugin', \$name));
            \$transport = sprintf('swiftmailer.mailer.%s.transport', \$name);
            \$definition = \$container->findDefinition(\$transport);
            foreach (\$plugins as \$id => \$args) {
                \$definition->addMethodCall('registerPlugin', [new Reference(\$id)]);
            }
        }
    }

    /**
     * @return array
     */
    private function findSortedByPriorityTaggedServiceIds(ContainerBuilder \$container, \$tag)
    {
        \$taggedServices = \$container->findTaggedServiceIds(\$tag);
        uasort(
            \$taggedServices,
            function (\$tagA, \$tagB) {
                \$priorityTagA = \$tagA[0]['priority'] ?? 0;
                \$priorityTagB = \$tagB[0]['priority'] ?? 0;

                return \$priorityTagA - \$priorityTagB;
            }
        );

        return \$taggedServices;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/RegisterPluginsPass.php";
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

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * RegisterPluginsPass registers Swiftmailer plugins.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RegisterPluginsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->findDefinition('swiftmailer.mailer') || !\$container->getParameter('swiftmailer.mailers')) {
            return;
        }

        \$mailers = \$container->getParameter('swiftmailer.mailers');
        foreach (\$mailers as \$name => \$mailer) {
            \$plugins = \$this->findSortedByPriorityTaggedServiceIds(\$container, sprintf('swiftmailer.%s.plugin', \$name));
            \$transport = sprintf('swiftmailer.mailer.%s.transport', \$name);
            \$definition = \$container->findDefinition(\$transport);
            foreach (\$plugins as \$id => \$args) {
                \$definition->addMethodCall('registerPlugin', [new Reference(\$id)]);
            }
        }
    }

    /**
     * @return array
     */
    private function findSortedByPriorityTaggedServiceIds(ContainerBuilder \$container, \$tag)
    {
        \$taggedServices = \$container->findTaggedServiceIds(\$tag);
        uasort(
            \$taggedServices,
            function (\$tagA, \$tagB) {
                \$priorityTagA = \$tagA[0]['priority'] ?? 0;
                \$priorityTagB = \$tagB[0]['priority'] ?? 0;

                return \$priorityTagA - \$priorityTagB;
            }
        );

        return \$taggedServices;
    }
}
", "vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/RegisterPluginsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/DependencyInjection/Compiler/RegisterPluginsPass.php");
    }
}
