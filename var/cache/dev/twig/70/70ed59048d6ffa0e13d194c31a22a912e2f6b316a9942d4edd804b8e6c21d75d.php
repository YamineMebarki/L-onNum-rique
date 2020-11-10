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

/* vendor/symfony/translation/DependencyInjection/TranslatorPathsPass.php */
class __TwigTemplate_18d45598ceb18d6d7510f203942e0f7d6e50de9cc2623f3824c168d12df26d72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DependencyInjection/TranslatorPathsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DependencyInjection/TranslatorPathsPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Compiler\\AbstractRecursivePass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class TranslatorPathsPass extends AbstractRecursivePass
{
    private \$translatorServiceId;
    private \$debugCommandServiceId;
    private \$updateCommandServiceId;
    private \$resolverServiceId;
    private \$level = 0;
    private \$paths = [];
    private \$definitions = [];
    private \$controllers = [];

    public function __construct(string \$translatorServiceId = 'translator', string \$debugCommandServiceId = 'console.command.translation_debug', string \$updateCommandServiceId = 'console.command.translation_update', string \$resolverServiceId = 'argument_resolver.service')
    {
        \$this->translatorServiceId = \$translatorServiceId;
        \$this->debugCommandServiceId = \$debugCommandServiceId;
        \$this->updateCommandServiceId = \$updateCommandServiceId;
        \$this->resolverServiceId = \$resolverServiceId;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->translatorServiceId)) {
            return;
        }

        foreach (\$this->findControllerArguments(\$container) as \$controller => \$argument) {
            \$id = substr(\$controller, 0, strpos(\$controller, ':') ?: \\strlen(\$controller));
            if (\$container->hasDefinition(\$id)) {
                list(\$locatorRef) = \$argument->getValues();
                \$this->controllers[(string) \$locatorRef][\$container->getDefinition(\$id)->getClass()] = true;
            }
        }

        try {
            parent::process(\$container);

            \$paths = [];
            foreach (\$this->paths as \$class => \$_) {
                if ((\$r = \$container->getReflectionClass(\$class)) && !\$r->isInterface()) {
                    \$paths[] = \$r->getFileName();
                }
            }
            if (\$paths) {
                if (\$container->hasDefinition(\$this->debugCommandServiceId)) {
                    \$definition = \$container->getDefinition(\$this->debugCommandServiceId);
                    \$definition->replaceArgument(6, array_merge(\$definition->getArgument(6), \$paths));
                }
                if (\$container->hasDefinition(\$this->updateCommandServiceId)) {
                    \$definition = \$container->getDefinition(\$this->updateCommandServiceId);
                    \$definition->replaceArgument(7, array_merge(\$definition->getArgument(7), \$paths));
                }
            }
        } finally {
            \$this->level = 0;
            \$this->paths = [];
            \$this->definitions = [];
        }
    }

    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof Reference) {
            if ((string) \$value === \$this->translatorServiceId) {
                for (\$i = \$this->level - 1; \$i >= 0; --\$i) {
                    \$class = \$this->definitions[\$i]->getClass();

                    if (ServiceLocator::class === \$class) {
                        if (!isset(\$this->controllers[\$this->currentId])) {
                            continue;
                        }
                        foreach (\$this->controllers[\$this->currentId] as \$class => \$_) {
                            \$this->paths[\$class] = true;
                        }
                    } else {
                        \$this->paths[\$class] = true;
                    }

                    break;
                }
            }

            return \$value;
        }

        if (\$value instanceof Definition) {
            \$this->definitions[\$this->level++] = \$value;
            \$value = parent::processValue(\$value, \$isRoot);
            unset(\$this->definitions[--\$this->level]);

            return \$value;
        }

        return parent::processValue(\$value, \$isRoot);
    }

    private function findControllerArguments(ContainerBuilder \$container): array
    {
        if (\$container->hasDefinition(\$this->resolverServiceId)) {
            \$argument = \$container->getDefinition(\$this->resolverServiceId)->getArgument(0);
            if (\$argument instanceof Reference) {
                \$argument = \$container->getDefinition(\$argument);
            }

            return \$argument->getArgument(0);
        }

        if (\$container->hasDefinition('debug.'.\$this->resolverServiceId)) {
            \$argument = \$container->getDefinition('debug.'.\$this->resolverServiceId)->getArgument(0);
            if (\$argument instanceof Reference) {
                \$argument = \$container->getDefinition(\$argument);
            }
            \$argument = \$argument->getArgument(0);
            if (\$argument instanceof Reference) {
                \$argument = \$container->getDefinition(\$argument);
            }

            return \$argument->getArgument(0);
        }

        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/DependencyInjection/TranslatorPathsPass.php";
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

use Symfony\\Component\\DependencyInjection\\Compiler\\AbstractRecursivePass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class TranslatorPathsPass extends AbstractRecursivePass
{
    private \$translatorServiceId;
    private \$debugCommandServiceId;
    private \$updateCommandServiceId;
    private \$resolverServiceId;
    private \$level = 0;
    private \$paths = [];
    private \$definitions = [];
    private \$controllers = [];

    public function __construct(string \$translatorServiceId = 'translator', string \$debugCommandServiceId = 'console.command.translation_debug', string \$updateCommandServiceId = 'console.command.translation_update', string \$resolverServiceId = 'argument_resolver.service')
    {
        \$this->translatorServiceId = \$translatorServiceId;
        \$this->debugCommandServiceId = \$debugCommandServiceId;
        \$this->updateCommandServiceId = \$updateCommandServiceId;
        \$this->resolverServiceId = \$resolverServiceId;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->translatorServiceId)) {
            return;
        }

        foreach (\$this->findControllerArguments(\$container) as \$controller => \$argument) {
            \$id = substr(\$controller, 0, strpos(\$controller, ':') ?: \\strlen(\$controller));
            if (\$container->hasDefinition(\$id)) {
                list(\$locatorRef) = \$argument->getValues();
                \$this->controllers[(string) \$locatorRef][\$container->getDefinition(\$id)->getClass()] = true;
            }
        }

        try {
            parent::process(\$container);

            \$paths = [];
            foreach (\$this->paths as \$class => \$_) {
                if ((\$r = \$container->getReflectionClass(\$class)) && !\$r->isInterface()) {
                    \$paths[] = \$r->getFileName();
                }
            }
            if (\$paths) {
                if (\$container->hasDefinition(\$this->debugCommandServiceId)) {
                    \$definition = \$container->getDefinition(\$this->debugCommandServiceId);
                    \$definition->replaceArgument(6, array_merge(\$definition->getArgument(6), \$paths));
                }
                if (\$container->hasDefinition(\$this->updateCommandServiceId)) {
                    \$definition = \$container->getDefinition(\$this->updateCommandServiceId);
                    \$definition->replaceArgument(7, array_merge(\$definition->getArgument(7), \$paths));
                }
            }
        } finally {
            \$this->level = 0;
            \$this->paths = [];
            \$this->definitions = [];
        }
    }

    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof Reference) {
            if ((string) \$value === \$this->translatorServiceId) {
                for (\$i = \$this->level - 1; \$i >= 0; --\$i) {
                    \$class = \$this->definitions[\$i]->getClass();

                    if (ServiceLocator::class === \$class) {
                        if (!isset(\$this->controllers[\$this->currentId])) {
                            continue;
                        }
                        foreach (\$this->controllers[\$this->currentId] as \$class => \$_) {
                            \$this->paths[\$class] = true;
                        }
                    } else {
                        \$this->paths[\$class] = true;
                    }

                    break;
                }
            }

            return \$value;
        }

        if (\$value instanceof Definition) {
            \$this->definitions[\$this->level++] = \$value;
            \$value = parent::processValue(\$value, \$isRoot);
            unset(\$this->definitions[--\$this->level]);

            return \$value;
        }

        return parent::processValue(\$value, \$isRoot);
    }

    private function findControllerArguments(ContainerBuilder \$container): array
    {
        if (\$container->hasDefinition(\$this->resolverServiceId)) {
            \$argument = \$container->getDefinition(\$this->resolverServiceId)->getArgument(0);
            if (\$argument instanceof Reference) {
                \$argument = \$container->getDefinition(\$argument);
            }

            return \$argument->getArgument(0);
        }

        if (\$container->hasDefinition('debug.'.\$this->resolverServiceId)) {
            \$argument = \$container->getDefinition('debug.'.\$this->resolverServiceId)->getArgument(0);
            if (\$argument instanceof Reference) {
                \$argument = \$container->getDefinition(\$argument);
            }
            \$argument = \$argument->getArgument(0);
            if (\$argument instanceof Reference) {
                \$argument = \$container->getDefinition(\$argument);
            }

            return \$argument->getArgument(0);
        }

        return [];
    }
}
", "vendor/symfony/translation/DependencyInjection/TranslatorPathsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/DependencyInjection/TranslatorPathsPass.php");
    }
}
