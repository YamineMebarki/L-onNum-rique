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

/* vendor/symfony/dependency-injection/Compiler/InlineServiceDefinitionsPass.php */
class __TwigTemplate_66c65bae121070d374b8de558aa83ce2ee8f581a7e8338ee99b06b103e70298a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/InlineServiceDefinitionsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/InlineServiceDefinitionsPass.php"));

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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Inline service definitions where this is possible.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class InlineServiceDefinitionsPass extends AbstractRecursivePass implements RepeatablePassInterface
{
    private \$analyzingPass;
    private \$repeatedPass;
    private \$cloningIds = [];
    private \$connectedIds = [];
    private \$notInlinedIds = [];
    private \$inlinedIds = [];
    private \$graph;

    public function __construct(AnalyzeServiceReferencesPass \$analyzingPass = null)
    {
        \$this->analyzingPass = \$analyzingPass;
    }

    /**
     * {@inheritdoc}
     */
    public function setRepeatedPass(RepeatedPass \$repeatedPass)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        \$this->repeatedPass = \$repeatedPass;
    }

    public function process(ContainerBuilder \$container)
    {
        \$this->container = \$container;
        if (\$this->analyzingPass) {
            \$analyzedContainer = new ContainerBuilder();
            \$analyzedContainer->setAliases(\$container->getAliases());
            \$analyzedContainer->setDefinitions(\$container->getDefinitions());
            foreach (\$container->getExpressionLanguageProviders() as \$provider) {
                \$analyzedContainer->addExpressionLanguageProvider(\$provider);
            }
        } else {
            \$analyzedContainer = \$container;
        }
        try {
            \$remainingInlinedIds = [];
            \$this->connectedIds = \$this->notInlinedIds = \$container->getDefinitions();
            do {
                if (\$this->analyzingPass) {
                    \$analyzedContainer->setDefinitions(array_intersect_key(\$analyzedContainer->getDefinitions(), \$this->connectedIds));
                    \$this->analyzingPass->process(\$analyzedContainer);
                }
                \$this->graph = \$analyzedContainer->getCompiler()->getServiceReferenceGraph();
                \$notInlinedIds = \$this->notInlinedIds;
                \$this->connectedIds = \$this->notInlinedIds = \$this->inlinedIds = [];

                foreach (\$analyzedContainer->getDefinitions() as \$id => \$definition) {
                    if (!\$this->graph->hasNode(\$id)) {
                        continue;
                    }
                    foreach (\$this->graph->getNode(\$id)->getOutEdges() as \$edge) {
                        if (isset(\$notInlinedIds[\$edge->getSourceNode()->getId()])) {
                            \$this->currentId = \$id;
                            \$this->processValue(\$definition, true);
                            break;
                        }
                    }
                }

                foreach (\$this->inlinedIds as \$id => \$isPublicOrNotShared) {
                    if (\$isPublicOrNotShared) {
                        \$remainingInlinedIds[\$id] = \$id;
                    } else {
                        \$container->removeDefinition(\$id);
                        \$analyzedContainer->removeDefinition(\$id);
                    }
                }
            } while (\$this->inlinedIds && \$this->analyzingPass);

            if (\$this->inlinedIds && \$this->repeatedPass) {
                \$this->repeatedPass->setRepeat();
            }

            foreach (\$remainingInlinedIds as \$id) {
                \$definition = \$container->getDefinition(\$id);

                if (!\$definition->isShared() && !\$definition->isPublic()) {
                    \$container->removeDefinition(\$id);
                }
            }
        } finally {
            \$this->container = null;
            \$this->connectedIds = \$this->notInlinedIds = \$this->inlinedIds = [];
            \$this->graph = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof ArgumentInterface) {
            // Reference found in ArgumentInterface::getValues() are not inlineable
            return \$value;
        }

        if (\$value instanceof Definition && \$this->cloningIds) {
            if (\$value->isShared()) {
                return \$value;
            }
            \$value = clone \$value;
        }

        if (!\$value instanceof Reference) {
            return parent::processValue(\$value, \$isRoot);
        } elseif (!\$this->container->hasDefinition(\$id = (string) \$value)) {
            return \$value;
        }

        \$definition = \$this->container->getDefinition(\$id);

        if (!\$this->isInlineableDefinition(\$id, \$definition)) {
            return \$value;
        }

        \$this->container->log(\$this, sprintf('Inlined service \"%s\" to \"%s\".', \$id, \$this->currentId));
        \$this->inlinedIds[\$id] = \$definition->isPublic() || !\$definition->isShared();
        \$this->notInlinedIds[\$this->currentId] = true;

        if (\$definition->isShared()) {
            return \$definition;
        }

        if (isset(\$this->cloningIds[\$id])) {
            \$ids = array_keys(\$this->cloningIds);
            \$ids[] = \$id;

            throw new ServiceCircularReferenceException(\$id, \\array_slice(\$ids, array_search(\$id, \$ids)));
        }

        \$this->cloningIds[\$id] = true;
        try {
            return \$this->processValue(\$definition);
        } finally {
            unset(\$this->cloningIds[\$id]);
        }
    }

    /**
     * Checks if the definition is inlineable.
     *
     * @return bool If the definition is inlineable
     */
    private function isInlineableDefinition(\$id, Definition \$definition)
    {
        if (\$definition->hasErrors() || \$definition->isDeprecated() || \$definition->isLazy() || \$definition->isSynthetic()) {
            return false;
        }

        if (!\$definition->isShared()) {
            if (!\$this->graph->hasNode(\$id)) {
                return true;
            }

            foreach (\$this->graph->getNode(\$id)->getInEdges() as \$edge) {
                \$srcId = \$edge->getSourceNode()->getId();
                \$this->connectedIds[\$srcId] = true;
                if (\$edge->isWeak() || \$edge->isLazy()) {
                    return false;
                }
            }

            return true;
        }

        if (\$definition->isPublic()) {
            return false;
        }

        if (!\$this->graph->hasNode(\$id)) {
            return true;
        }

        if (\$this->currentId == \$id) {
            return false;
        }
        \$this->connectedIds[\$id] = true;

        \$srcIds = [];
        \$srcCount = 0;
        \$isReferencedByConstructor = false;
        foreach (\$this->graph->getNode(\$id)->getInEdges() as \$edge) {
            \$isReferencedByConstructor = \$isReferencedByConstructor || \$edge->isReferencedByConstructor();
            \$srcId = \$edge->getSourceNode()->getId();
            \$this->connectedIds[\$srcId] = true;
            if (\$edge->isWeak() || \$edge->isLazy()) {
                return false;
            }
            \$srcIds[\$srcId] = true;
            ++\$srcCount;
        }

        if (1 !== \\count(\$srcIds)) {
            \$this->notInlinedIds[\$id] = true;

            return false;
        }

        if (\$srcCount > 1 && \\is_array(\$factory = \$definition->getFactory()) && (\$factory[0] instanceof Reference || \$factory[0] instanceof Definition)) {
            return false;
        }

        return \$this->container->getDefinition(\$srcId)->isShared();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/InlineServiceDefinitionsPass.php";
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
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Inline service definitions where this is possible.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class InlineServiceDefinitionsPass extends AbstractRecursivePass implements RepeatablePassInterface
{
    private \$analyzingPass;
    private \$repeatedPass;
    private \$cloningIds = [];
    private \$connectedIds = [];
    private \$notInlinedIds = [];
    private \$inlinedIds = [];
    private \$graph;

    public function __construct(AnalyzeServiceReferencesPass \$analyzingPass = null)
    {
        \$this->analyzingPass = \$analyzingPass;
    }

    /**
     * {@inheritdoc}
     */
    public function setRepeatedPass(RepeatedPass \$repeatedPass)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        \$this->repeatedPass = \$repeatedPass;
    }

    public function process(ContainerBuilder \$container)
    {
        \$this->container = \$container;
        if (\$this->analyzingPass) {
            \$analyzedContainer = new ContainerBuilder();
            \$analyzedContainer->setAliases(\$container->getAliases());
            \$analyzedContainer->setDefinitions(\$container->getDefinitions());
            foreach (\$container->getExpressionLanguageProviders() as \$provider) {
                \$analyzedContainer->addExpressionLanguageProvider(\$provider);
            }
        } else {
            \$analyzedContainer = \$container;
        }
        try {
            \$remainingInlinedIds = [];
            \$this->connectedIds = \$this->notInlinedIds = \$container->getDefinitions();
            do {
                if (\$this->analyzingPass) {
                    \$analyzedContainer->setDefinitions(array_intersect_key(\$analyzedContainer->getDefinitions(), \$this->connectedIds));
                    \$this->analyzingPass->process(\$analyzedContainer);
                }
                \$this->graph = \$analyzedContainer->getCompiler()->getServiceReferenceGraph();
                \$notInlinedIds = \$this->notInlinedIds;
                \$this->connectedIds = \$this->notInlinedIds = \$this->inlinedIds = [];

                foreach (\$analyzedContainer->getDefinitions() as \$id => \$definition) {
                    if (!\$this->graph->hasNode(\$id)) {
                        continue;
                    }
                    foreach (\$this->graph->getNode(\$id)->getOutEdges() as \$edge) {
                        if (isset(\$notInlinedIds[\$edge->getSourceNode()->getId()])) {
                            \$this->currentId = \$id;
                            \$this->processValue(\$definition, true);
                            break;
                        }
                    }
                }

                foreach (\$this->inlinedIds as \$id => \$isPublicOrNotShared) {
                    if (\$isPublicOrNotShared) {
                        \$remainingInlinedIds[\$id] = \$id;
                    } else {
                        \$container->removeDefinition(\$id);
                        \$analyzedContainer->removeDefinition(\$id);
                    }
                }
            } while (\$this->inlinedIds && \$this->analyzingPass);

            if (\$this->inlinedIds && \$this->repeatedPass) {
                \$this->repeatedPass->setRepeat();
            }

            foreach (\$remainingInlinedIds as \$id) {
                \$definition = \$container->getDefinition(\$id);

                if (!\$definition->isShared() && !\$definition->isPublic()) {
                    \$container->removeDefinition(\$id);
                }
            }
        } finally {
            \$this->container = null;
            \$this->connectedIds = \$this->notInlinedIds = \$this->inlinedIds = [];
            \$this->graph = null;
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof ArgumentInterface) {
            // Reference found in ArgumentInterface::getValues() are not inlineable
            return \$value;
        }

        if (\$value instanceof Definition && \$this->cloningIds) {
            if (\$value->isShared()) {
                return \$value;
            }
            \$value = clone \$value;
        }

        if (!\$value instanceof Reference) {
            return parent::processValue(\$value, \$isRoot);
        } elseif (!\$this->container->hasDefinition(\$id = (string) \$value)) {
            return \$value;
        }

        \$definition = \$this->container->getDefinition(\$id);

        if (!\$this->isInlineableDefinition(\$id, \$definition)) {
            return \$value;
        }

        \$this->container->log(\$this, sprintf('Inlined service \"%s\" to \"%s\".', \$id, \$this->currentId));
        \$this->inlinedIds[\$id] = \$definition->isPublic() || !\$definition->isShared();
        \$this->notInlinedIds[\$this->currentId] = true;

        if (\$definition->isShared()) {
            return \$definition;
        }

        if (isset(\$this->cloningIds[\$id])) {
            \$ids = array_keys(\$this->cloningIds);
            \$ids[] = \$id;

            throw new ServiceCircularReferenceException(\$id, \\array_slice(\$ids, array_search(\$id, \$ids)));
        }

        \$this->cloningIds[\$id] = true;
        try {
            return \$this->processValue(\$definition);
        } finally {
            unset(\$this->cloningIds[\$id]);
        }
    }

    /**
     * Checks if the definition is inlineable.
     *
     * @return bool If the definition is inlineable
     */
    private function isInlineableDefinition(\$id, Definition \$definition)
    {
        if (\$definition->hasErrors() || \$definition->isDeprecated() || \$definition->isLazy() || \$definition->isSynthetic()) {
            return false;
        }

        if (!\$definition->isShared()) {
            if (!\$this->graph->hasNode(\$id)) {
                return true;
            }

            foreach (\$this->graph->getNode(\$id)->getInEdges() as \$edge) {
                \$srcId = \$edge->getSourceNode()->getId();
                \$this->connectedIds[\$srcId] = true;
                if (\$edge->isWeak() || \$edge->isLazy()) {
                    return false;
                }
            }

            return true;
        }

        if (\$definition->isPublic()) {
            return false;
        }

        if (!\$this->graph->hasNode(\$id)) {
            return true;
        }

        if (\$this->currentId == \$id) {
            return false;
        }
        \$this->connectedIds[\$id] = true;

        \$srcIds = [];
        \$srcCount = 0;
        \$isReferencedByConstructor = false;
        foreach (\$this->graph->getNode(\$id)->getInEdges() as \$edge) {
            \$isReferencedByConstructor = \$isReferencedByConstructor || \$edge->isReferencedByConstructor();
            \$srcId = \$edge->getSourceNode()->getId();
            \$this->connectedIds[\$srcId] = true;
            if (\$edge->isWeak() || \$edge->isLazy()) {
                return false;
            }
            \$srcIds[\$srcId] = true;
            ++\$srcCount;
        }

        if (1 !== \\count(\$srcIds)) {
            \$this->notInlinedIds[\$id] = true;

            return false;
        }

        if (\$srcCount > 1 && \\is_array(\$factory = \$definition->getFactory()) && (\$factory[0] instanceof Reference || \$factory[0] instanceof Definition)) {
            return false;
        }

        return \$this->container->getDefinition(\$srcId)->isShared();
    }
}
", "vendor/symfony/dependency-injection/Compiler/InlineServiceDefinitionsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/InlineServiceDefinitionsPass.php");
    }
}
