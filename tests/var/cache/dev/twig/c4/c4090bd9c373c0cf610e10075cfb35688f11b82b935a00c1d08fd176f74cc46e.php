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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerWeakRefPass.php */
class __TwigTemplate_bb2c2a13f243ed9f6a787cd2a90be10ad03ab9490fab5f69e18a8f259d73128c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerWeakRefPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerWeakRefPass.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestServiceContainerWeakRefPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('test.private_services_locator')) {
            return;
        }

        \$privateServices = [];
        \$definitions = \$container->getDefinitions();
        \$hasErrors = method_exists(Definition::class, 'hasErrors') ? 'hasErrors' : 'getErrors';

        foreach (\$definitions as \$id => \$definition) {
            if (\$id && '.' !== \$id[0] && (!\$definition->isPublic() || \$definition->isPrivate()) && !\$definition->\$hasErrors() && !\$definition->isAbstract()) {
                \$privateServices[\$id] = new Reference(\$id, ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE);
            }
        }

        \$aliases = \$container->getAliases();

        foreach (\$aliases as \$id => \$alias) {
            if (\$id && '.' !== \$id[0] && (!\$alias->isPublic() || \$alias->isPrivate())) {
                while (isset(\$aliases[\$target = (string) \$alias])) {
                    \$alias = \$aliases[\$target];
                }
                if (isset(\$definitions[\$target]) && !\$definitions[\$target]->\$hasErrors() && !\$definitions[\$target]->isAbstract()) {
                    \$privateServices[\$id] = new Reference(\$target, ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE);
                }
            }
        }

        if (\$privateServices) {
            \$id = (string) ServiceLocatorTagPass::register(\$container, \$privateServices);
            \$container->setDefinition('test.private_services_locator', \$container->getDefinition(\$id))->setPublic(true);
            \$container->removeDefinition(\$id);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerWeakRefPass.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestServiceContainerWeakRefPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('test.private_services_locator')) {
            return;
        }

        \$privateServices = [];
        \$definitions = \$container->getDefinitions();
        \$hasErrors = method_exists(Definition::class, 'hasErrors') ? 'hasErrors' : 'getErrors';

        foreach (\$definitions as \$id => \$definition) {
            if (\$id && '.' !== \$id[0] && (!\$definition->isPublic() || \$definition->isPrivate()) && !\$definition->\$hasErrors() && !\$definition->isAbstract()) {
                \$privateServices[\$id] = new Reference(\$id, ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE);
            }
        }

        \$aliases = \$container->getAliases();

        foreach (\$aliases as \$id => \$alias) {
            if (\$id && '.' !== \$id[0] && (!\$alias->isPublic() || \$alias->isPrivate())) {
                while (isset(\$aliases[\$target = (string) \$alias])) {
                    \$alias = \$aliases[\$target];
                }
                if (isset(\$definitions[\$target]) && !\$definitions[\$target]->\$hasErrors() && !\$definitions[\$target]->isAbstract()) {
                    \$privateServices[\$id] = new Reference(\$target, ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE);
                }
            }
        }

        if (\$privateServices) {
            \$id = (string) ServiceLocatorTagPass::register(\$container, \$privateServices);
            \$container->setDefinition('test.private_services_locator', \$container->getDefinition(\$id))->setPublic(true);
            \$container->removeDefinition(\$id);
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerWeakRefPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/TestServiceContainerWeakRefPass.php");
    }
}
