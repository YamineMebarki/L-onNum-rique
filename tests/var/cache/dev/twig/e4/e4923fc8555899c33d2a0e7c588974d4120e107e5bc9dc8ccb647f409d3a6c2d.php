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

/* vendor/symfony/dependency-injection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php */
class __TwigTemplate_dcecdfb50e291834899a17a3559e60a240c6d468a49cf8003f4f8d8c3fcf8428 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Checks that all references are pointing to a valid service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckExceptionOnInvalidReferenceBehaviorPass extends AbstractRecursivePass
{
    private \$serviceLocatorContextIds = [];

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->serviceLocatorContextIds = [];
        foreach (\$container->findTaggedServiceIds('container.service_locator_context') as \$id => \$tags) {
            \$this->serviceLocatorContextIds[\$id] = \$tags[0]['id'];
            \$container->getDefinition(\$id)->clearTag('container.service_locator_context');
        }

        try {
            return parent::process(\$container);
        } finally {
            \$this->serviceLocatorContextIds = [];
        }
    }

    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Reference) {
            return parent::processValue(\$value, \$isRoot);
        }
        if (ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE < \$value->getInvalidBehavior() || \$this->container->has(\$id = (string) \$value)) {
            return \$value;
        }

        \$currentId = \$this->currentId;
        \$graph = \$this->container->getCompiler()->getServiceReferenceGraph();

        if (isset(\$this->serviceLocatorContextIds[\$currentId])) {
            \$currentId = \$this->serviceLocatorContextIds[\$currentId];
            \$locator = \$this->container->getDefinition(\$this->currentId)->getFactory()[0];

            foreach (\$locator->getArgument(0) as \$k => \$v) {
                if (\$v->getValues()[0] === \$value) {
                    if (\$k !== \$id) {
                        \$currentId = \$k.'\" in the container provided to \"'.\$currentId;
                    }
                    throw new ServiceNotFoundException(\$id, \$currentId);
                }
            }
        }

        if ('.' === \$currentId[0] && \$graph->hasNode(\$currentId)) {
            foreach (\$graph->getNode(\$currentId)->getInEdges() as \$edge) {
                if (!\$edge->getValue() instanceof Reference || ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE < \$edge->getValue()->getInvalidBehavior()) {
                    continue;
                }
                \$sourceId = \$edge->getSourceNode()->getId();

                if ('.' !== \$sourceId[0]) {
                    \$currentId = \$sourceId;
                    break;
                }
            }
        }

        throw new ServiceNotFoundException(\$id, \$currentId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Checks that all references are pointing to a valid service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckExceptionOnInvalidReferenceBehaviorPass extends AbstractRecursivePass
{
    private \$serviceLocatorContextIds = [];

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->serviceLocatorContextIds = [];
        foreach (\$container->findTaggedServiceIds('container.service_locator_context') as \$id => \$tags) {
            \$this->serviceLocatorContextIds[\$id] = \$tags[0]['id'];
            \$container->getDefinition(\$id)->clearTag('container.service_locator_context');
        }

        try {
            return parent::process(\$container);
        } finally {
            \$this->serviceLocatorContextIds = [];
        }
    }

    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Reference) {
            return parent::processValue(\$value, \$isRoot);
        }
        if (ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE < \$value->getInvalidBehavior() || \$this->container->has(\$id = (string) \$value)) {
            return \$value;
        }

        \$currentId = \$this->currentId;
        \$graph = \$this->container->getCompiler()->getServiceReferenceGraph();

        if (isset(\$this->serviceLocatorContextIds[\$currentId])) {
            \$currentId = \$this->serviceLocatorContextIds[\$currentId];
            \$locator = \$this->container->getDefinition(\$this->currentId)->getFactory()[0];

            foreach (\$locator->getArgument(0) as \$k => \$v) {
                if (\$v->getValues()[0] === \$value) {
                    if (\$k !== \$id) {
                        \$currentId = \$k.'\" in the container provided to \"'.\$currentId;
                    }
                    throw new ServiceNotFoundException(\$id, \$currentId);
                }
            }
        }

        if ('.' === \$currentId[0] && \$graph->hasNode(\$currentId)) {
            foreach (\$graph->getNode(\$currentId)->getInEdges() as \$edge) {
                if (!\$edge->getValue() instanceof Reference || ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE < \$edge->getValue()->getInvalidBehavior()) {
                    continue;
                }
                \$sourceId = \$edge->getSourceNode()->getId();

                if ('.' !== \$sourceId[0]) {
                    \$currentId = \$sourceId;
                    break;
                }
            }
        }

        throw new ServiceNotFoundException(\$id, \$currentId);
    }
}
", "vendor/symfony/dependency-injection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php");
    }
}
