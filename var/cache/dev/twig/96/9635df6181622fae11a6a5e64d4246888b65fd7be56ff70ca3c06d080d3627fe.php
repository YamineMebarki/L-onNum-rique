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

/* vendor/symfony/validator/DependencyInjection/AddValidatorInitializersPass.php */
class __TwigTemplate_5c649de49b0fc68fd72fdb98b1bb497d3b23c45aaea027d5319ca53e95da4d9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/DependencyInjection/AddValidatorInitializersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/DependencyInjection/AddValidatorInitializersPass.php"));

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

namespace Symfony\\Component\\Validator\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class AddValidatorInitializersPass implements CompilerPassInterface
{
    private \$builderService;
    private \$initializerTag;

    public function __construct(string \$builderService = 'validator.builder', string \$initializerTag = 'validator.initializer')
    {
        \$this->builderService = \$builderService;
        \$this->initializerTag = \$initializerTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->builderService)) {
            return;
        }

        \$initializers = [];
        foreach (\$container->findTaggedServiceIds(\$this->initializerTag, true) as \$id => \$attributes) {
            \$initializers[] = new Reference(\$id);
        }

        \$container->getDefinition(\$this->builderService)->addMethodCall('addObjectInitializers', [\$initializers]);

        // @deprecated logic, to be removed in Symfony 5.0
        \$builder = \$container->getDefinition(\$this->builderService);
        \$calls = [];

        foreach (\$builder->getMethodCalls() as list(\$method, \$arguments)) {
            if ('setTranslator' === \$method) {
                if (!\$arguments[0] instanceof Reference) {
                    \$translator = \$arguments[0];
                } elseif (\$container->has(\$arguments[0])) {
                    \$translator = \$container->findDefinition(\$arguments[0]);
                } else {
                    continue;
                }

                while (!(\$class = \$translator->getClass()) && \$translator instanceof ChildDefinition) {
                    \$translator = \$container->findDefinition(\$translator->getParent());
                }

                if (!is_subclass_of(\$class, LegacyTranslatorInterface::class)) {
                    \$arguments[0] = (new Definition(LegacyTranslatorProxy::class))->addArgument(\$arguments[0]);
                }
            }

            \$calls[] = [\$method, \$arguments];
        }

        \$builder->setMethodCalls(\$calls);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/DependencyInjection/AddValidatorInitializersPass.php";
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

namespace Symfony\\Component\\Validator\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Component\\Validator\\Util\\LegacyTranslatorProxy;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class AddValidatorInitializersPass implements CompilerPassInterface
{
    private \$builderService;
    private \$initializerTag;

    public function __construct(string \$builderService = 'validator.builder', string \$initializerTag = 'validator.initializer')
    {
        \$this->builderService = \$builderService;
        \$this->initializerTag = \$initializerTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->builderService)) {
            return;
        }

        \$initializers = [];
        foreach (\$container->findTaggedServiceIds(\$this->initializerTag, true) as \$id => \$attributes) {
            \$initializers[] = new Reference(\$id);
        }

        \$container->getDefinition(\$this->builderService)->addMethodCall('addObjectInitializers', [\$initializers]);

        // @deprecated logic, to be removed in Symfony 5.0
        \$builder = \$container->getDefinition(\$this->builderService);
        \$calls = [];

        foreach (\$builder->getMethodCalls() as list(\$method, \$arguments)) {
            if ('setTranslator' === \$method) {
                if (!\$arguments[0] instanceof Reference) {
                    \$translator = \$arguments[0];
                } elseif (\$container->has(\$arguments[0])) {
                    \$translator = \$container->findDefinition(\$arguments[0]);
                } else {
                    continue;
                }

                while (!(\$class = \$translator->getClass()) && \$translator instanceof ChildDefinition) {
                    \$translator = \$container->findDefinition(\$translator->getParent());
                }

                if (!is_subclass_of(\$class, LegacyTranslatorInterface::class)) {
                    \$arguments[0] = (new Definition(LegacyTranslatorProxy::class))->addArgument(\$arguments[0]);
                }
            }

            \$calls[] = [\$method, \$arguments];
        }

        \$builder->setMethodCalls(\$calls);
    }
}
", "vendor/symfony/validator/DependencyInjection/AddValidatorInitializersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/DependencyInjection/AddValidatorInitializersPass.php");
    }
}
