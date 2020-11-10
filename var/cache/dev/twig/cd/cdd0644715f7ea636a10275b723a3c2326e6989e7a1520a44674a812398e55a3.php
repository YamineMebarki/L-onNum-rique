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

/* vendor/symfony/dependency-injection/Compiler/ResolveInvalidReferencesPass.php */
class __TwigTemplate_a74a270fb8e887ca43e31ec9f43f7856e5aec637e32f67c0492b35aec4e95866 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveInvalidReferencesPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveInvalidReferencesPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Emulates the invalid behavior if the reference is not found within the
 * container.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveInvalidReferencesPass implements CompilerPassInterface
{
    private \$container;
    private \$signalingException;
    private \$currentId;

    /**
     * Process the ContainerBuilder to resolve invalid references.
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->container = \$container;
        \$this->signalingException = new RuntimeException('Invalid reference.');

        try {
            \$this->processValue(\$container->getDefinitions(), 1);
        } finally {
            \$this->container = \$this->signalingException = null;
        }
    }

    /**
     * Processes arguments to determine invalid references.
     *
     * @throws RuntimeException When an invalid reference is found
     */
    private function processValue(\$value, \$rootLevel = 0, \$level = 0)
    {
        if (\$value instanceof ServiceClosureArgument) {
            \$value->setValues(\$this->processValue(\$value->getValues(), 1, 1));
        } elseif (\$value instanceof ArgumentInterface) {
            \$value->setValues(\$this->processValue(\$value->getValues(), \$rootLevel, 1 + \$level));
        } elseif (\$value instanceof Definition) {
            if (\$value->isSynthetic() || \$value->isAbstract()) {
                return \$value;
            }
            \$value->setArguments(\$this->processValue(\$value->getArguments(), 0));
            \$value->setProperties(\$this->processValue(\$value->getProperties(), 1));
            \$value->setMethodCalls(\$this->processValue(\$value->getMethodCalls(), 2));
        } elseif (\\is_array(\$value)) {
            \$i = 0;

            foreach (\$value as \$k => \$v) {
                if (!\$rootLevel) {
                    \$this->currentId = \$k;
                }
                try {
                    if (false !== \$i && \$k !== \$i++) {
                        \$i = false;
                    }
                    if (\$v !== \$processedValue = \$this->processValue(\$v, \$rootLevel, 1 + \$level)) {
                        \$value[\$k] = \$processedValue;
                    }
                } catch (RuntimeException \$e) {
                    if (\$rootLevel < \$level || (\$rootLevel && !\$level)) {
                        unset(\$value[\$k]);
                    } elseif (\$rootLevel) {
                        throw \$e;
                    } else {
                        \$value[\$k] = null;
                    }
                }
            }

            // Ensure numerically indexed arguments have sequential numeric keys.
            if (false !== \$i) {
                \$value = array_values(\$value);
            }
        } elseif (\$value instanceof Reference) {
            if (\$this->container->has(\$id = (string) \$value)) {
                return \$value;
            }
            \$invalidBehavior = \$value->getInvalidBehavior();

            if (ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE === \$invalidBehavior && \$value instanceof TypedReference && !\$this->container->has(\$id)) {
                \$e = new ServiceNotFoundException(\$id, \$this->currentId);

                // since the error message varies by \$id and \$this->currentId, so should the id of the dummy errored definition
                \$this->container->register(\$id = sprintf('.errored.%s.%s', \$this->currentId, \$id), \$value->getType())
                    ->addError(\$e->getMessage());

                return new TypedReference(\$id, \$value->getType(), \$value->getInvalidBehavior());
            }

            // resolve invalid behavior
            if (ContainerInterface::NULL_ON_INVALID_REFERENCE === \$invalidBehavior) {
                \$value = null;
            } elseif (ContainerInterface::IGNORE_ON_INVALID_REFERENCE === \$invalidBehavior) {
                if (0 < \$level || \$rootLevel) {
                    throw \$this->signalingException;
                }
                \$value = null;
            }
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ResolveInvalidReferencesPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Emulates the invalid behavior if the reference is not found within the
 * container.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveInvalidReferencesPass implements CompilerPassInterface
{
    private \$container;
    private \$signalingException;
    private \$currentId;

    /**
     * Process the ContainerBuilder to resolve invalid references.
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->container = \$container;
        \$this->signalingException = new RuntimeException('Invalid reference.');

        try {
            \$this->processValue(\$container->getDefinitions(), 1);
        } finally {
            \$this->container = \$this->signalingException = null;
        }
    }

    /**
     * Processes arguments to determine invalid references.
     *
     * @throws RuntimeException When an invalid reference is found
     */
    private function processValue(\$value, \$rootLevel = 0, \$level = 0)
    {
        if (\$value instanceof ServiceClosureArgument) {
            \$value->setValues(\$this->processValue(\$value->getValues(), 1, 1));
        } elseif (\$value instanceof ArgumentInterface) {
            \$value->setValues(\$this->processValue(\$value->getValues(), \$rootLevel, 1 + \$level));
        } elseif (\$value instanceof Definition) {
            if (\$value->isSynthetic() || \$value->isAbstract()) {
                return \$value;
            }
            \$value->setArguments(\$this->processValue(\$value->getArguments(), 0));
            \$value->setProperties(\$this->processValue(\$value->getProperties(), 1));
            \$value->setMethodCalls(\$this->processValue(\$value->getMethodCalls(), 2));
        } elseif (\\is_array(\$value)) {
            \$i = 0;

            foreach (\$value as \$k => \$v) {
                if (!\$rootLevel) {
                    \$this->currentId = \$k;
                }
                try {
                    if (false !== \$i && \$k !== \$i++) {
                        \$i = false;
                    }
                    if (\$v !== \$processedValue = \$this->processValue(\$v, \$rootLevel, 1 + \$level)) {
                        \$value[\$k] = \$processedValue;
                    }
                } catch (RuntimeException \$e) {
                    if (\$rootLevel < \$level || (\$rootLevel && !\$level)) {
                        unset(\$value[\$k]);
                    } elseif (\$rootLevel) {
                        throw \$e;
                    } else {
                        \$value[\$k] = null;
                    }
                }
            }

            // Ensure numerically indexed arguments have sequential numeric keys.
            if (false !== \$i) {
                \$value = array_values(\$value);
            }
        } elseif (\$value instanceof Reference) {
            if (\$this->container->has(\$id = (string) \$value)) {
                return \$value;
            }
            \$invalidBehavior = \$value->getInvalidBehavior();

            if (ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE === \$invalidBehavior && \$value instanceof TypedReference && !\$this->container->has(\$id)) {
                \$e = new ServiceNotFoundException(\$id, \$this->currentId);

                // since the error message varies by \$id and \$this->currentId, so should the id of the dummy errored definition
                \$this->container->register(\$id = sprintf('.errored.%s.%s', \$this->currentId, \$id), \$value->getType())
                    ->addError(\$e->getMessage());

                return new TypedReference(\$id, \$value->getType(), \$value->getInvalidBehavior());
            }

            // resolve invalid behavior
            if (ContainerInterface::NULL_ON_INVALID_REFERENCE === \$invalidBehavior) {
                \$value = null;
            } elseif (ContainerInterface::IGNORE_ON_INVALID_REFERENCE === \$invalidBehavior) {
                if (0 < \$level || \$rootLevel) {
                    throw \$this->signalingException;
                }
                \$value = null;
            }
        }

        return \$value;
    }
}
", "vendor/symfony/dependency-injection/Compiler/ResolveInvalidReferencesPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ResolveInvalidReferencesPass.php");
    }
}
