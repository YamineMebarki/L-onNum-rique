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

/* vendor/sensio/framework-extra-bundle/src/DependencyInjection/Compiler/AddParamConverterPass.php */
class __TwigTemplate_6d55188a0ba3e316e159af93720141966df4fcf6a66a02f2e776afec66f823e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Compiler/AddParamConverterPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Compiler/AddParamConverterPass.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged request.param_converter services to converter.manager service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddParamConverterPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('sensio_framework_extra.converter.manager')) {
            return;
        }

        \$definition = \$container->getDefinition('sensio_framework_extra.converter.manager');
        \$disabled = \$container->getParameter('sensio_framework_extra.disabled_converters');
        \$container->getParameterBag()->remove('sensio_framework_extra.disabled_converters');

        foreach (\$container->findTaggedServiceIds('request.param_converter') as \$id => \$converters) {
            foreach (\$converters as \$converter) {
                \$name = isset(\$converter['converter']) ? \$converter['converter'] : null;

                if (null !== \$name && \\in_array(\$name, \$disabled)) {
                    continue;
                }

                \$priority = isset(\$converter['priority']) ? \$converter['priority'] : 0;

                if ('false' === \$priority || false === \$priority) {
                    \$priority = null;
                }

                \$definition->addMethodCall('add', [new Reference(\$id), \$priority, \$name]);
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
        return "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Compiler/AddParamConverterPass.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged request.param_converter services to converter.manager service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddParamConverterPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('sensio_framework_extra.converter.manager')) {
            return;
        }

        \$definition = \$container->getDefinition('sensio_framework_extra.converter.manager');
        \$disabled = \$container->getParameter('sensio_framework_extra.disabled_converters');
        \$container->getParameterBag()->remove('sensio_framework_extra.disabled_converters');

        foreach (\$container->findTaggedServiceIds('request.param_converter') as \$id => \$converters) {
            foreach (\$converters as \$converter) {
                \$name = isset(\$converter['converter']) ? \$converter['converter'] : null;

                if (null !== \$name && \\in_array(\$name, \$disabled)) {
                    continue;
                }

                \$priority = isset(\$converter['priority']) ? \$converter['priority'] : 0;

                if ('false' === \$priority || false === \$priority) {
                    \$priority = null;
                }

                \$definition->addMethodCall('add', [new Reference(\$id), \$priority, \$name]);
            }
        }
    }
}
", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/Compiler/AddParamConverterPass.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/DependencyInjection/Compiler/AddParamConverterPass.php");
    }
}
