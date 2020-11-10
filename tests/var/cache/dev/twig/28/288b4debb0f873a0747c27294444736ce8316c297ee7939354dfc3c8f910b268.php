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

/* vendor/symfony/translation/DependencyInjection/TranslatorPass.php */
class __TwigTemplate_a03887a96d38aaeec64de96254916c7265afb41836e793d52f5983c994742bd5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DependencyInjection/TranslatorPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DependencyInjection/TranslatorPass.php"));

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

namespace Symfony\\Component\\Translation\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class TranslatorPass implements CompilerPassInterface
{
    private \$translatorServiceId;
    private \$readerServiceId;
    private \$loaderTag;
    private \$debugCommandServiceId;
    private \$updateCommandServiceId;

    public function __construct(string \$translatorServiceId = 'translator.default', string \$readerServiceId = 'translation.reader', string \$loaderTag = 'translation.loader', string \$debugCommandServiceId = 'console.command.translation_debug', string \$updateCommandServiceId = 'console.command.translation_update')
    {
        \$this->translatorServiceId = \$translatorServiceId;
        \$this->readerServiceId = \$readerServiceId;
        \$this->loaderTag = \$loaderTag;
        \$this->debugCommandServiceId = \$debugCommandServiceId;
        \$this->updateCommandServiceId = \$updateCommandServiceId;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->translatorServiceId)) {
            return;
        }

        \$loaders = [];
        \$loaderRefs = [];
        foreach (\$container->findTaggedServiceIds(\$this->loaderTag, true) as \$id => \$attributes) {
            \$loaderRefs[\$id] = new Reference(\$id);
            \$loaders[\$id][] = \$attributes[0]['alias'];
            if (isset(\$attributes[0]['legacy-alias'])) {
                \$loaders[\$id][] = \$attributes[0]['legacy-alias'];
            }
        }

        if (\$container->hasDefinition(\$this->readerServiceId)) {
            \$definition = \$container->getDefinition(\$this->readerServiceId);
            foreach (\$loaders as \$id => \$formats) {
                foreach (\$formats as \$format) {
                    \$definition->addMethodCall('addLoader', [\$format, \$loaderRefs[\$id]]);
                }
            }
        }

        \$container
            ->findDefinition(\$this->translatorServiceId)
            ->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$loaderRefs))
            ->replaceArgument(3, \$loaders)
        ;

        if (!\$container->hasParameter('twig.default_path')) {
            return;
        }

        \$paths = array_keys(\$container->getDefinition('twig.template_iterator')->getArgument(2));
        if (\$container->hasDefinition(\$this->debugCommandServiceId)) {
            \$definition = \$container->getDefinition(\$this->debugCommandServiceId);
            \$definition->replaceArgument(4, \$container->getParameter('twig.default_path'));

            if (\\count(\$definition->getArguments()) > 6) {
                \$definition->replaceArgument(6, \$paths);
            }
        }
        if (\$container->hasDefinition(\$this->updateCommandServiceId)) {
            \$definition = \$container->getDefinition(\$this->updateCommandServiceId);
            \$definition->replaceArgument(5, \$container->getParameter('twig.default_path'));

            if (\\count(\$definition->getArguments()) > 7) {
                \$definition->replaceArgument(7, \$paths);
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
        return "vendor/symfony/translation/DependencyInjection/TranslatorPass.php";
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

namespace Symfony\\Component\\Translation\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class TranslatorPass implements CompilerPassInterface
{
    private \$translatorServiceId;
    private \$readerServiceId;
    private \$loaderTag;
    private \$debugCommandServiceId;
    private \$updateCommandServiceId;

    public function __construct(string \$translatorServiceId = 'translator.default', string \$readerServiceId = 'translation.reader', string \$loaderTag = 'translation.loader', string \$debugCommandServiceId = 'console.command.translation_debug', string \$updateCommandServiceId = 'console.command.translation_update')
    {
        \$this->translatorServiceId = \$translatorServiceId;
        \$this->readerServiceId = \$readerServiceId;
        \$this->loaderTag = \$loaderTag;
        \$this->debugCommandServiceId = \$debugCommandServiceId;
        \$this->updateCommandServiceId = \$updateCommandServiceId;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->translatorServiceId)) {
            return;
        }

        \$loaders = [];
        \$loaderRefs = [];
        foreach (\$container->findTaggedServiceIds(\$this->loaderTag, true) as \$id => \$attributes) {
            \$loaderRefs[\$id] = new Reference(\$id);
            \$loaders[\$id][] = \$attributes[0]['alias'];
            if (isset(\$attributes[0]['legacy-alias'])) {
                \$loaders[\$id][] = \$attributes[0]['legacy-alias'];
            }
        }

        if (\$container->hasDefinition(\$this->readerServiceId)) {
            \$definition = \$container->getDefinition(\$this->readerServiceId);
            foreach (\$loaders as \$id => \$formats) {
                foreach (\$formats as \$format) {
                    \$definition->addMethodCall('addLoader', [\$format, \$loaderRefs[\$id]]);
                }
            }
        }

        \$container
            ->findDefinition(\$this->translatorServiceId)
            ->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$loaderRefs))
            ->replaceArgument(3, \$loaders)
        ;

        if (!\$container->hasParameter('twig.default_path')) {
            return;
        }

        \$paths = array_keys(\$container->getDefinition('twig.template_iterator')->getArgument(2));
        if (\$container->hasDefinition(\$this->debugCommandServiceId)) {
            \$definition = \$container->getDefinition(\$this->debugCommandServiceId);
            \$definition->replaceArgument(4, \$container->getParameter('twig.default_path'));

            if (\\count(\$definition->getArguments()) > 6) {
                \$definition->replaceArgument(6, \$paths);
            }
        }
        if (\$container->hasDefinition(\$this->updateCommandServiceId)) {
            \$definition = \$container->getDefinition(\$this->updateCommandServiceId);
            \$definition->replaceArgument(5, \$container->getParameter('twig.default_path'));

            if (\\count(\$definition->getArguments()) > 7) {
                \$definition->replaceArgument(7, \$paths);
            }
        }
    }
}
", "vendor/symfony/translation/DependencyInjection/TranslatorPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/DependencyInjection/TranslatorPass.php");
    }
}
