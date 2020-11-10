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

/* vendor/symfony/form/DependencyInjection/FormPass.php */
class __TwigTemplate_2633bc4228d0f734f8eef26e739c0261c847f9d7553eac298a914a890af6f00f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/DependencyInjection/FormPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/DependencyInjection/FormPass.php"));

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

namespace Symfony\\Component\\Form\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Form\\FormTypeExtensionInterface;

/**
 * Adds all services with the tags \"form.type\", \"form.type_extension\" and
 * \"form.type_guesser\" as arguments of the \"form.extension\" service.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$formExtensionService;
    private \$formTypeTag;
    private \$formTypeExtensionTag;
    private \$formTypeGuesserTag;
    private \$formDebugCommandService;

    public function __construct(string \$formExtensionService = 'form.extension', string \$formTypeTag = 'form.type', string \$formTypeExtensionTag = 'form.type_extension', string \$formTypeGuesserTag = 'form.type_guesser', string \$formDebugCommandService = 'console.command.form_debug')
    {
        \$this->formExtensionService = \$formExtensionService;
        \$this->formTypeTag = \$formTypeTag;
        \$this->formTypeExtensionTag = \$formTypeExtensionTag;
        \$this->formTypeGuesserTag = \$formTypeGuesserTag;
        \$this->formDebugCommandService = \$formDebugCommandService;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->formExtensionService)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->formExtensionService);
        if (new IteratorArgument([]) != \$definition->getArgument(2)) {
            return;
        }
        \$definition->replaceArgument(0, \$this->processFormTypes(\$container));
        \$definition->replaceArgument(1, \$this->processFormTypeExtensions(\$container));
        \$definition->replaceArgument(2, \$this->processFormTypeGuessers(\$container));
    }

    private function processFormTypes(ContainerBuilder \$container)
    {
        // Get service locator argument
        \$servicesMap = [];
        \$namespaces = ['Symfony\\Component\\Form\\Extension\\Core\\Type' => true];

        // Builds an array with fully-qualified type class names as keys and service IDs as values
        foreach (\$container->findTaggedServiceIds(\$this->formTypeTag, true) as \$serviceId => \$tag) {
            // Add form type service to the service locator
            \$serviceDefinition = \$container->getDefinition(\$serviceId);
            \$servicesMap[\$formType = \$serviceDefinition->getClass()] = new Reference(\$serviceId);
            \$namespaces[substr(\$formType, 0, strrpos(\$formType, '\\\\'))] = true;
        }

        if (\$container->hasDefinition(\$this->formDebugCommandService)) {
            \$commandDefinition = \$container->getDefinition(\$this->formDebugCommandService);
            \$commandDefinition->setArgument(1, array_keys(\$namespaces));
            \$commandDefinition->setArgument(2, array_keys(\$servicesMap));
        }

        return ServiceLocatorTagPass::register(\$container, \$servicesMap);
    }

    private function processFormTypeExtensions(ContainerBuilder \$container)
    {
        \$typeExtensions = [];
        \$typeExtensionsClasses = [];
        foreach (\$this->findAndSortTaggedServices(\$this->formTypeExtensionTag, \$container) as \$reference) {
            \$serviceId = (string) \$reference;
            \$serviceDefinition = \$container->getDefinition(\$serviceId);

            \$tag = \$serviceDefinition->getTag(\$this->formTypeExtensionTag);
            \$typeExtensionClass = \$container->getParameterBag()->resolveValue(\$serviceDefinition->getClass());

            if (isset(\$tag[0]['extended_type'])) {
                if (!method_exists(\$typeExtensionClass, 'getExtendedTypes')) {
                    @trigger_error(sprintf('Not implementing the \"%s::getExtendedTypes()\" method in \"%s\" is deprecated since Symfony 4.2.', FormTypeExtensionInterface::class, \$typeExtensionClass), E_USER_DEPRECATED);
                }

                \$typeExtensions[\$tag[0]['extended_type']][] = new Reference(\$serviceId);
                \$typeExtensionsClasses[] = \$typeExtensionClass;
            } elseif (method_exists(\$typeExtensionClass, 'getExtendedTypes')) {
                \$extendsTypes = false;

                \$typeExtensionsClasses[] = \$typeExtensionClass;
                foreach (\$typeExtensionClass::getExtendedTypes() as \$extendedType) {
                    \$typeExtensions[\$extendedType][] = new Reference(\$serviceId);
                    \$extendsTypes = true;
                }

                if (!\$extendsTypes) {
                    throw new InvalidArgumentException(sprintf('The getExtendedTypes() method for service \"%s\" does not return any extended types.', \$serviceId));
                }
            } else {
                throw new InvalidArgumentException(sprintf('\"%s\" tagged services have to implement the static getExtendedTypes() method. Class \"%s\" for service \"%s\" does not implement it.', \$this->formTypeExtensionTag, \$typeExtensionClass, \$serviceId));
            }
        }

        foreach (\$typeExtensions as \$extendedType => \$extensions) {
            \$typeExtensions[\$extendedType] = new IteratorArgument(\$extensions);
        }

        if (\$container->hasDefinition(\$this->formDebugCommandService)) {
            \$commandDefinition = \$container->getDefinition(\$this->formDebugCommandService);
            \$commandDefinition->setArgument(3, \$typeExtensionsClasses);
        }

        return \$typeExtensions;
    }

    private function processFormTypeGuessers(ContainerBuilder \$container)
    {
        \$guessers = [];
        \$guessersClasses = [];
        foreach (\$container->findTaggedServiceIds(\$this->formTypeGuesserTag, true) as \$serviceId => \$tags) {
            \$guessers[] = new Reference(\$serviceId);

            \$serviceDefinition = \$container->getDefinition(\$serviceId);
            \$guessersClasses[] = \$serviceDefinition->getClass();
        }

        if (\$container->hasDefinition(\$this->formDebugCommandService)) {
            \$commandDefinition = \$container->getDefinition(\$this->formDebugCommandService);
            \$commandDefinition->setArgument(4, \$guessersClasses);
        }

        return new IteratorArgument(\$guessers);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/DependencyInjection/FormPass.php";
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

namespace Symfony\\Component\\Form\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\Form\\FormTypeExtensionInterface;

/**
 * Adds all services with the tags \"form.type\", \"form.type_extension\" and
 * \"form.type_guesser\" as arguments of the \"form.extension\" service.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$formExtensionService;
    private \$formTypeTag;
    private \$formTypeExtensionTag;
    private \$formTypeGuesserTag;
    private \$formDebugCommandService;

    public function __construct(string \$formExtensionService = 'form.extension', string \$formTypeTag = 'form.type', string \$formTypeExtensionTag = 'form.type_extension', string \$formTypeGuesserTag = 'form.type_guesser', string \$formDebugCommandService = 'console.command.form_debug')
    {
        \$this->formExtensionService = \$formExtensionService;
        \$this->formTypeTag = \$formTypeTag;
        \$this->formTypeExtensionTag = \$formTypeExtensionTag;
        \$this->formTypeGuesserTag = \$formTypeGuesserTag;
        \$this->formDebugCommandService = \$formDebugCommandService;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->formExtensionService)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->formExtensionService);
        if (new IteratorArgument([]) != \$definition->getArgument(2)) {
            return;
        }
        \$definition->replaceArgument(0, \$this->processFormTypes(\$container));
        \$definition->replaceArgument(1, \$this->processFormTypeExtensions(\$container));
        \$definition->replaceArgument(2, \$this->processFormTypeGuessers(\$container));
    }

    private function processFormTypes(ContainerBuilder \$container)
    {
        // Get service locator argument
        \$servicesMap = [];
        \$namespaces = ['Symfony\\Component\\Form\\Extension\\Core\\Type' => true];

        // Builds an array with fully-qualified type class names as keys and service IDs as values
        foreach (\$container->findTaggedServiceIds(\$this->formTypeTag, true) as \$serviceId => \$tag) {
            // Add form type service to the service locator
            \$serviceDefinition = \$container->getDefinition(\$serviceId);
            \$servicesMap[\$formType = \$serviceDefinition->getClass()] = new Reference(\$serviceId);
            \$namespaces[substr(\$formType, 0, strrpos(\$formType, '\\\\'))] = true;
        }

        if (\$container->hasDefinition(\$this->formDebugCommandService)) {
            \$commandDefinition = \$container->getDefinition(\$this->formDebugCommandService);
            \$commandDefinition->setArgument(1, array_keys(\$namespaces));
            \$commandDefinition->setArgument(2, array_keys(\$servicesMap));
        }

        return ServiceLocatorTagPass::register(\$container, \$servicesMap);
    }

    private function processFormTypeExtensions(ContainerBuilder \$container)
    {
        \$typeExtensions = [];
        \$typeExtensionsClasses = [];
        foreach (\$this->findAndSortTaggedServices(\$this->formTypeExtensionTag, \$container) as \$reference) {
            \$serviceId = (string) \$reference;
            \$serviceDefinition = \$container->getDefinition(\$serviceId);

            \$tag = \$serviceDefinition->getTag(\$this->formTypeExtensionTag);
            \$typeExtensionClass = \$container->getParameterBag()->resolveValue(\$serviceDefinition->getClass());

            if (isset(\$tag[0]['extended_type'])) {
                if (!method_exists(\$typeExtensionClass, 'getExtendedTypes')) {
                    @trigger_error(sprintf('Not implementing the \"%s::getExtendedTypes()\" method in \"%s\" is deprecated since Symfony 4.2.', FormTypeExtensionInterface::class, \$typeExtensionClass), E_USER_DEPRECATED);
                }

                \$typeExtensions[\$tag[0]['extended_type']][] = new Reference(\$serviceId);
                \$typeExtensionsClasses[] = \$typeExtensionClass;
            } elseif (method_exists(\$typeExtensionClass, 'getExtendedTypes')) {
                \$extendsTypes = false;

                \$typeExtensionsClasses[] = \$typeExtensionClass;
                foreach (\$typeExtensionClass::getExtendedTypes() as \$extendedType) {
                    \$typeExtensions[\$extendedType][] = new Reference(\$serviceId);
                    \$extendsTypes = true;
                }

                if (!\$extendsTypes) {
                    throw new InvalidArgumentException(sprintf('The getExtendedTypes() method for service \"%s\" does not return any extended types.', \$serviceId));
                }
            } else {
                throw new InvalidArgumentException(sprintf('\"%s\" tagged services have to implement the static getExtendedTypes() method. Class \"%s\" for service \"%s\" does not implement it.', \$this->formTypeExtensionTag, \$typeExtensionClass, \$serviceId));
            }
        }

        foreach (\$typeExtensions as \$extendedType => \$extensions) {
            \$typeExtensions[\$extendedType] = new IteratorArgument(\$extensions);
        }

        if (\$container->hasDefinition(\$this->formDebugCommandService)) {
            \$commandDefinition = \$container->getDefinition(\$this->formDebugCommandService);
            \$commandDefinition->setArgument(3, \$typeExtensionsClasses);
        }

        return \$typeExtensions;
    }

    private function processFormTypeGuessers(ContainerBuilder \$container)
    {
        \$guessers = [];
        \$guessersClasses = [];
        foreach (\$container->findTaggedServiceIds(\$this->formTypeGuesserTag, true) as \$serviceId => \$tags) {
            \$guessers[] = new Reference(\$serviceId);

            \$serviceDefinition = \$container->getDefinition(\$serviceId);
            \$guessersClasses[] = \$serviceDefinition->getClass();
        }

        if (\$container->hasDefinition(\$this->formDebugCommandService)) {
            \$commandDefinition = \$container->getDefinition(\$this->formDebugCommandService);
            \$commandDefinition->setArgument(4, \$guessersClasses);
        }

        return new IteratorArgument(\$guessers);
    }
}
", "vendor/symfony/form/DependencyInjection/FormPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/DependencyInjection/FormPass.php");
    }
}
