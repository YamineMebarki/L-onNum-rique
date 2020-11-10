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

/* vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExtensionPass.php */
class __TwigTemplate_918a3ee7f8dc42c6a4a4137151b57396b9cc2d385244421f7b2825efecba7604 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExtensionPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExtensionPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Workflow\\Workflow;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class ExtensionPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!class_exists('Symfony\\Component\\Asset\\Packages')) {
            \$container->removeDefinition('twig.extension.assets');
        }

        if (!class_exists('Symfony\\Component\\ExpressionLanguage\\Expression')) {
            \$container->removeDefinition('twig.extension.expression');
        }

        if (!interface_exists('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')) {
            \$container->removeDefinition('twig.extension.routing');
        }

        if (!class_exists('Symfony\\Component\\Yaml\\Yaml')) {
            \$container->removeDefinition('twig.extension.yaml');
        }

        if (\$container->has('form.extension')) {
            \$container->getDefinition('twig.extension.form')->addTag('twig.extension');
            \$reflClass = new \\ReflectionClass('Symfony\\Bridge\\Twig\\Extension\\FormExtension');

            \$coreThemePath = \\dirname(\$reflClass->getFileName(), 2).'/Resources/views/Form';
            \$container->getDefinition('twig.loader.native_filesystem')->addMethodCall('addPath', [\$coreThemePath]);

            \$paths = \$container->getDefinition('twig.template_iterator')->getArgument(2);
            \$paths[\$coreThemePath] = null;
            \$container->getDefinition('twig.template_iterator')->replaceArgument(2, \$paths);

            if (\$container->hasDefinition('twig.cache_warmer')) {
                \$paths = \$container->getDefinition('twig.cache_warmer')->getArgument(2);
                \$paths[\$coreThemePath] = null;
                \$container->getDefinition('twig.cache_warmer')->replaceArgument(2, \$paths);
            }
        }

        if (\$container->has('router')) {
            \$container->getDefinition('twig.extension.routing')->addTag('twig.extension');
        }

        if (\$container->has('fragment.handler')) {
            \$container->getDefinition('twig.extension.httpkernel')->addTag('twig.extension');
            \$container->getDefinition('twig.runtime.httpkernel')->addTag('twig.runtime');

            // inject Twig in the hinclude service if Twig is the only registered templating engine
            if ((!\$container->hasParameter('templating.engines') || ['twig'] == \$container->getParameter('templating.engines')) && \$container->hasDefinition('fragment.renderer.hinclude')) {
                \$container->getDefinition('fragment.renderer.hinclude')
                    ->addTag('kernel.fragment_renderer', ['alias' => 'hinclude'])
                    ->replaceArgument(0, new Reference('twig'))
                ;
            }
        }

        if (!\$container->has('http_kernel')) {
            \$container->removeDefinition('twig.controller.preview_error');
        }

        if (\$container->has('request_stack')) {
            \$container->getDefinition('twig.extension.httpfoundation')->addTag('twig.extension');
        }

        if (\$container->getParameter('kernel.debug')) {
            \$container->getDefinition('twig.extension.profiler')->addTag('twig.extension');

            // only register if the improved version from DebugBundle is *not* present
            if (!\$container->has('twig.extension.dump')) {
                \$container->getDefinition('twig.extension.debug')->addTag('twig.extension');
            }
        }

        if (\$container->has('web_link.add_link_header_listener')) {
            \$container->getDefinition('twig.extension.weblink')->addTag('twig.extension');
        }

        \$twigLoader = \$container->getDefinition('twig.loader.native_filesystem');
        if (\$container->has('templating')) {
            \$loader = \$container->getDefinition('twig.loader.filesystem');
            \$loader->setMethodCalls(array_merge(\$twigLoader->getMethodCalls(), \$loader->getMethodCalls()));

            \$twigLoader->clearTag('twig.loader');
        } else {
            \$container->setAlias('twig.loader.filesystem', new Alias('twig.loader.native_filesystem', false));
            \$container->removeDefinition('templating.engine.twig');
        }

        if (\$container->has('assets.packages')) {
            \$container->getDefinition('twig.extension.assets')->addTag('twig.extension');
        }

        if (\$container->hasDefinition('twig.extension.yaml')) {
            \$container->getDefinition('twig.extension.yaml')->addTag('twig.extension');
        }

        if (class_exists('Symfony\\Component\\Stopwatch\\Stopwatch')) {
            \$container->getDefinition('twig.extension.debug.stopwatch')->addTag('twig.extension');
        }

        if (\$container->hasDefinition('twig.extension.expression')) {
            \$container->getDefinition('twig.extension.expression')->addTag('twig.extension');
        }

        if (!class_exists(Workflow::class) || !\$container->has('workflow.registry')) {
            \$container->removeDefinition('workflow.twig_extension');
        } else {
            \$container->getDefinition('workflow.twig_extension')->addTag('twig.extension');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExtensionPass.php";
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

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Workflow\\Workflow;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class ExtensionPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!class_exists('Symfony\\Component\\Asset\\Packages')) {
            \$container->removeDefinition('twig.extension.assets');
        }

        if (!class_exists('Symfony\\Component\\ExpressionLanguage\\Expression')) {
            \$container->removeDefinition('twig.extension.expression');
        }

        if (!interface_exists('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')) {
            \$container->removeDefinition('twig.extension.routing');
        }

        if (!class_exists('Symfony\\Component\\Yaml\\Yaml')) {
            \$container->removeDefinition('twig.extension.yaml');
        }

        if (\$container->has('form.extension')) {
            \$container->getDefinition('twig.extension.form')->addTag('twig.extension');
            \$reflClass = new \\ReflectionClass('Symfony\\Bridge\\Twig\\Extension\\FormExtension');

            \$coreThemePath = \\dirname(\$reflClass->getFileName(), 2).'/Resources/views/Form';
            \$container->getDefinition('twig.loader.native_filesystem')->addMethodCall('addPath', [\$coreThemePath]);

            \$paths = \$container->getDefinition('twig.template_iterator')->getArgument(2);
            \$paths[\$coreThemePath] = null;
            \$container->getDefinition('twig.template_iterator')->replaceArgument(2, \$paths);

            if (\$container->hasDefinition('twig.cache_warmer')) {
                \$paths = \$container->getDefinition('twig.cache_warmer')->getArgument(2);
                \$paths[\$coreThemePath] = null;
                \$container->getDefinition('twig.cache_warmer')->replaceArgument(2, \$paths);
            }
        }

        if (\$container->has('router')) {
            \$container->getDefinition('twig.extension.routing')->addTag('twig.extension');
        }

        if (\$container->has('fragment.handler')) {
            \$container->getDefinition('twig.extension.httpkernel')->addTag('twig.extension');
            \$container->getDefinition('twig.runtime.httpkernel')->addTag('twig.runtime');

            // inject Twig in the hinclude service if Twig is the only registered templating engine
            if ((!\$container->hasParameter('templating.engines') || ['twig'] == \$container->getParameter('templating.engines')) && \$container->hasDefinition('fragment.renderer.hinclude')) {
                \$container->getDefinition('fragment.renderer.hinclude')
                    ->addTag('kernel.fragment_renderer', ['alias' => 'hinclude'])
                    ->replaceArgument(0, new Reference('twig'))
                ;
            }
        }

        if (!\$container->has('http_kernel')) {
            \$container->removeDefinition('twig.controller.preview_error');
        }

        if (\$container->has('request_stack')) {
            \$container->getDefinition('twig.extension.httpfoundation')->addTag('twig.extension');
        }

        if (\$container->getParameter('kernel.debug')) {
            \$container->getDefinition('twig.extension.profiler')->addTag('twig.extension');

            // only register if the improved version from DebugBundle is *not* present
            if (!\$container->has('twig.extension.dump')) {
                \$container->getDefinition('twig.extension.debug')->addTag('twig.extension');
            }
        }

        if (\$container->has('web_link.add_link_header_listener')) {
            \$container->getDefinition('twig.extension.weblink')->addTag('twig.extension');
        }

        \$twigLoader = \$container->getDefinition('twig.loader.native_filesystem');
        if (\$container->has('templating')) {
            \$loader = \$container->getDefinition('twig.loader.filesystem');
            \$loader->setMethodCalls(array_merge(\$twigLoader->getMethodCalls(), \$loader->getMethodCalls()));

            \$twigLoader->clearTag('twig.loader');
        } else {
            \$container->setAlias('twig.loader.filesystem', new Alias('twig.loader.native_filesystem', false));
            \$container->removeDefinition('templating.engine.twig');
        }

        if (\$container->has('assets.packages')) {
            \$container->getDefinition('twig.extension.assets')->addTag('twig.extension');
        }

        if (\$container->hasDefinition('twig.extension.yaml')) {
            \$container->getDefinition('twig.extension.yaml')->addTag('twig.extension');
        }

        if (class_exists('Symfony\\Component\\Stopwatch\\Stopwatch')) {
            \$container->getDefinition('twig.extension.debug.stopwatch')->addTag('twig.extension');
        }

        if (\$container->hasDefinition('twig.extension.expression')) {
            \$container->getDefinition('twig.extension.expression')->addTag('twig.extension');
        }

        if (!class_exists(Workflow::class) || !\$container->has('workflow.registry')) {
            \$container->removeDefinition('workflow.twig_extension');
        } else {
            \$container->getDefinition('workflow.twig_extension')->addTag('twig.extension');
        }
    }
}
", "vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExtensionPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/DependencyInjection/Compiler/ExtensionPass.php");
    }
}
