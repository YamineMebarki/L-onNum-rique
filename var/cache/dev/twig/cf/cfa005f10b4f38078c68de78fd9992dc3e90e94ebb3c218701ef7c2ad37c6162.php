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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/TemplatingPass.php */
class __TwigTemplate_023df7780587f410b690be87b22b1ff7225d840b2f9fd1d265338449a9fe61ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TemplatingPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TemplatingPass.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface as FrameworkBundleEngineInterface;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Templating\\EngineInterface as ComponentEngineInterface;

/**
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplatingPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (\$container->hasDefinition('templating')) {
            return;
        }

        if (\$container->hasAlias('templating')) {
            \$container->setAlias(ComponentEngineInterface::class, new Alias('templating', false));
            \$container->setAlias(FrameworkBundleEngineInterface::class, new Alias('templating', false));
        }

        if (\$container->hasDefinition('templating.engine.php')) {
            \$refs = [];
            \$helpers = [];

            foreach (\$container->findTaggedServiceIds('templating.helper', true) as \$id => \$attributes) {
                if (!\$container->getDefinition(\$id)->isDeprecated()) {
                    @trigger_error('The \"templating.helper\" tag is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);
                }

                if (isset(\$attributes[0]['alias'])) {
                    \$helpers[\$attributes[0]['alias']] = \$id;
                    \$refs[\$id] = new Reference(\$id);
                }
            }

            if (\\count(\$helpers) > 0) {
                \$definition = \$container->getDefinition('templating.engine.php');
                \$definition->addMethodCall('setHelpers', [\$helpers]);

                if (\$container->hasDefinition('templating.engine.php.helpers_locator')) {
                    \$container->getDefinition('templating.engine.php.helpers_locator')->replaceArgument(0, \$refs);
                }
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
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TemplatingPass.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface as FrameworkBundleEngineInterface;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Templating\\EngineInterface as ComponentEngineInterface;

/**
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplatingPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (\$container->hasDefinition('templating')) {
            return;
        }

        if (\$container->hasAlias('templating')) {
            \$container->setAlias(ComponentEngineInterface::class, new Alias('templating', false));
            \$container->setAlias(FrameworkBundleEngineInterface::class, new Alias('templating', false));
        }

        if (\$container->hasDefinition('templating.engine.php')) {
            \$refs = [];
            \$helpers = [];

            foreach (\$container->findTaggedServiceIds('templating.helper', true) as \$id => \$attributes) {
                if (!\$container->getDefinition(\$id)->isDeprecated()) {
                    @trigger_error('The \"templating.helper\" tag is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);
                }

                if (isset(\$attributes[0]['alias'])) {
                    \$helpers[\$attributes[0]['alias']] = \$id;
                    \$refs[\$id] = new Reference(\$id);
                }
            }

            if (\\count(\$helpers) > 0) {
                \$definition = \$container->getDefinition('templating.engine.php');
                \$definition->addMethodCall('setHelpers', [\$helpers]);

                if (\$container->hasDefinition('templating.engine.php.helpers_locator')) {
                    \$container->getDefinition('templating.engine.php.helpers_locator')->replaceArgument(0, \$refs);
                }
            }
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/TemplatingPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/TemplatingPass.php");
    }
}
