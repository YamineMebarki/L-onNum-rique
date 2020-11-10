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

/* vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraph.php */
class __TwigTemplate_0e6966d028149cbc76a56460145a610221d7d6c422cf54f2a427c39fcaf898fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraph.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraph.php"));

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

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * This is a directed graph of your services.
 *
 * This information can be used by your compiler passes instead of collecting
 * it themselves which improves performance quite a lot.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final
 */
class ServiceReferenceGraph
{
    /**
     * @var ServiceReferenceGraphNode[]
     */
    private \$nodes = [];

    public function hasNode(string \$id): bool
    {
        return isset(\$this->nodes[\$id]);
    }

    /**
     * Gets a node by identifier.
     *
     * @throws InvalidArgumentException if no node matches the supplied identifier
     */
    public function getNode(string \$id): ServiceReferenceGraphNode
    {
        if (!isset(\$this->nodes[\$id])) {
            throw new InvalidArgumentException(sprintf('There is no node with id \"%s\".', \$id));
        }

        return \$this->nodes[\$id];
    }

    /**
     * Returns all nodes.
     *
     * @return ServiceReferenceGraphNode[]
     */
    public function getNodes(): array
    {
        return \$this->nodes;
    }

    /**
     * Clears all nodes.
     */
    public function clear()
    {
        foreach (\$this->nodes as \$node) {
            \$node->clear();
        }
        \$this->nodes = [];
    }

    /**
     * Connects 2 nodes together in the Graph.
     */
    public function connect(?string \$sourceId, \$sourceValue, ?string \$destId, \$destValue = null, \$reference = null, bool \$lazy = false, bool \$weak = false, bool \$byConstructor = false)
    {
        if (null === \$sourceId || null === \$destId) {
            return;
        }

        \$sourceNode = \$this->createNode(\$sourceId, \$sourceValue);
        \$destNode = \$this->createNode(\$destId, \$destValue);
        \$edge = new ServiceReferenceGraphEdge(\$sourceNode, \$destNode, \$reference, \$lazy, \$weak, \$byConstructor);

        \$sourceNode->addOutEdge(\$edge);
        \$destNode->addInEdge(\$edge);
    }

    private function createNode(string \$id, \$value): ServiceReferenceGraphNode
    {
        if (isset(\$this->nodes[\$id]) && \$this->nodes[\$id]->getValue() === \$value) {
            return \$this->nodes[\$id];
        }

        return \$this->nodes[\$id] = new ServiceReferenceGraphNode(\$id, \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraph.php";
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

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * This is a directed graph of your services.
 *
 * This information can be used by your compiler passes instead of collecting
 * it themselves which improves performance quite a lot.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @final
 */
class ServiceReferenceGraph
{
    /**
     * @var ServiceReferenceGraphNode[]
     */
    private \$nodes = [];

    public function hasNode(string \$id): bool
    {
        return isset(\$this->nodes[\$id]);
    }

    /**
     * Gets a node by identifier.
     *
     * @throws InvalidArgumentException if no node matches the supplied identifier
     */
    public function getNode(string \$id): ServiceReferenceGraphNode
    {
        if (!isset(\$this->nodes[\$id])) {
            throw new InvalidArgumentException(sprintf('There is no node with id \"%s\".', \$id));
        }

        return \$this->nodes[\$id];
    }

    /**
     * Returns all nodes.
     *
     * @return ServiceReferenceGraphNode[]
     */
    public function getNodes(): array
    {
        return \$this->nodes;
    }

    /**
     * Clears all nodes.
     */
    public function clear()
    {
        foreach (\$this->nodes as \$node) {
            \$node->clear();
        }
        \$this->nodes = [];
    }

    /**
     * Connects 2 nodes together in the Graph.
     */
    public function connect(?string \$sourceId, \$sourceValue, ?string \$destId, \$destValue = null, \$reference = null, bool \$lazy = false, bool \$weak = false, bool \$byConstructor = false)
    {
        if (null === \$sourceId || null === \$destId) {
            return;
        }

        \$sourceNode = \$this->createNode(\$sourceId, \$sourceValue);
        \$destNode = \$this->createNode(\$destId, \$destValue);
        \$edge = new ServiceReferenceGraphEdge(\$sourceNode, \$destNode, \$reference, \$lazy, \$weak, \$byConstructor);

        \$sourceNode->addOutEdge(\$edge);
        \$destNode->addInEdge(\$edge);
    }

    private function createNode(string \$id, \$value): ServiceReferenceGraphNode
    {
        if (isset(\$this->nodes[\$id]) && \$this->nodes[\$id]->getValue() === \$value) {
            return \$this->nodes[\$id];
        }

        return \$this->nodes[\$id] = new ServiceReferenceGraphNode(\$id, \$value);
    }
}
", "vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraph.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraph.php");
    }
}
