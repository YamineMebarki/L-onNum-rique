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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/TopologicalSorter.php */
class __TwigTemplate_25d5c8fe2a96957bda91d8abed8bcd3d04e5495905de8abd28dcdbf53565d3d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/TopologicalSorter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/TopologicalSorter.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures\\Sorter;

use Doctrine\\Common\\DataFixtures\\Exception\\CircularReferenceException;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * TopologicalSorter is an ordering algorithm for directed graphs (DG) and/or
 * directed acyclic graphs (DAG) by using a depth-first searching (DFS) to
 * traverse the graph built in memory.
 * This algorithm have a linear running time based on nodes (V) and dependency
 * between the nodes (E), resulting in a computational complexity of O(V + E).
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @internal this class is to be used only by data-fixtures internals: do not
 *           rely on it in your own libraries/applications.
 */
class TopologicalSorter
{
    /**
     * Matrix of nodes (aka. vertex).
     * Keys are provided hashes and values are the node definition objects.
     *
     * @var Vertex[]
     */
    private \$nodeList = [];

    /**
     * Volatile variable holding calculated nodes during sorting process.
     *
     * @var array
     */
    private \$sortedNodeList = [];

    /**
     * Allow or not cyclic dependencies
     *
     * @var boolean
     */
    private \$allowCyclicDependencies;

    /**
     * Construct TopologicalSorter object
     *
     * @param boolean \$allowCyclicDependencies
     */
    public function __construct(\$allowCyclicDependencies = true)
    {
        \$this->allowCyclicDependencies = \$allowCyclicDependencies;
    }

    /**
     * Adds a new node (vertex) to the graph, assigning its hash and value.
     *
     * @param string        \$hash
     * @param ClassMetadata \$node
     *
     * @return void
     */
    public function addNode(\$hash, ClassMetadata \$node)
    {
        \$this->nodeList[\$hash] = new Vertex(\$node);
    }

    /**
     * Checks the existence of a node in the graph.
     *
     * @param string \$hash
     *
     * @return bool
     */
    public function hasNode(\$hash)
    {
        return isset(\$this->nodeList[\$hash]);
    }

    /**
     * Adds a new dependency (edge) to the graph using their hashes.
     *
     * @param string \$fromHash
     * @param string \$toHash
     *
     * @return void
     */
    public function addDependency(\$fromHash, \$toHash)
    {
        \$definition = \$this->nodeList[\$fromHash];

        \$definition->dependencyList[] = \$toHash;
    }

    /**
     * Return a valid order list of all current nodes.
     * The desired topological sorting is the postorder of these searches.
     *
     * Note: Highly performance-sensitive method.
     *
     * @throws \\RuntimeException
     * @throws CircularReferenceException
     *
     * @return array
     */
    public function sort()
    {
        foreach (\$this->nodeList as \$definition) {
            if (\$definition->state !== Vertex::NOT_VISITED) {
                continue;
            }

            \$this->visit(\$definition);
        }

        \$sortedList = \$this->sortedNodeList;

        \$this->nodeList       = [];
        \$this->sortedNodeList = [];

        return \$sortedList;
    }

    /**
     * Visit a given node definition for reordering.
     *
     * Note: Highly performance-sensitive method.
     *
     * @throws \\RuntimeException
     * @throws CircularReferenceException
     *
     * @param Vertex \$definition
     */
    private function visit(Vertex \$definition)
    {
        \$definition->state = Vertex::IN_PROGRESS;

        foreach (\$definition->dependencyList as \$dependency) {
            if ( ! isset(\$this->nodeList[\$dependency])) {
                throw new \\RuntimeException(sprintf(
                    'Fixture \"%s\" has a dependency of fixture \"%s\", but it not listed to be loaded.',
                    get_class(\$definition->value),
                    \$dependency
                ));
            }

            \$childDefinition = \$this->nodeList[\$dependency];

            // allow self referencing classes
            if (\$definition === \$childDefinition) {
                continue;
            }

            switch (\$childDefinition->state) {
                case Vertex::VISITED:
                    break;
                case Vertex::IN_PROGRESS:
                    if ( ! \$this->allowCyclicDependencies) {
                        throw new CircularReferenceException(
                            sprintf(
                                'Graph contains cyclic dependency between the classes \"%s\" and'
                                .' \"%s\". An example of this problem would be the following: '
                                .'Class C has class B as its dependency. Then, class B has class A has its dependency. '
                                .'Finally, class A has class C as its dependency.',
                                \$definition->value->getName(),
                                \$childDefinition->value->getName()
                            )
                        );
                    }
                    break;
                case Vertex::NOT_VISITED:
                    \$this->visit(\$childDefinition);
            }
        }

        \$definition->state = Vertex::VISITED;

        \$this->sortedNodeList[] = \$definition->value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/TopologicalSorter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures\\Sorter;

use Doctrine\\Common\\DataFixtures\\Exception\\CircularReferenceException;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * TopologicalSorter is an ordering algorithm for directed graphs (DG) and/or
 * directed acyclic graphs (DAG) by using a depth-first searching (DFS) to
 * traverse the graph built in memory.
 * This algorithm have a linear running time based on nodes (V) and dependency
 * between the nodes (E), resulting in a computational complexity of O(V + E).
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @internal this class is to be used only by data-fixtures internals: do not
 *           rely on it in your own libraries/applications.
 */
class TopologicalSorter
{
    /**
     * Matrix of nodes (aka. vertex).
     * Keys are provided hashes and values are the node definition objects.
     *
     * @var Vertex[]
     */
    private \$nodeList = [];

    /**
     * Volatile variable holding calculated nodes during sorting process.
     *
     * @var array
     */
    private \$sortedNodeList = [];

    /**
     * Allow or not cyclic dependencies
     *
     * @var boolean
     */
    private \$allowCyclicDependencies;

    /**
     * Construct TopologicalSorter object
     *
     * @param boolean \$allowCyclicDependencies
     */
    public function __construct(\$allowCyclicDependencies = true)
    {
        \$this->allowCyclicDependencies = \$allowCyclicDependencies;
    }

    /**
     * Adds a new node (vertex) to the graph, assigning its hash and value.
     *
     * @param string        \$hash
     * @param ClassMetadata \$node
     *
     * @return void
     */
    public function addNode(\$hash, ClassMetadata \$node)
    {
        \$this->nodeList[\$hash] = new Vertex(\$node);
    }

    /**
     * Checks the existence of a node in the graph.
     *
     * @param string \$hash
     *
     * @return bool
     */
    public function hasNode(\$hash)
    {
        return isset(\$this->nodeList[\$hash]);
    }

    /**
     * Adds a new dependency (edge) to the graph using their hashes.
     *
     * @param string \$fromHash
     * @param string \$toHash
     *
     * @return void
     */
    public function addDependency(\$fromHash, \$toHash)
    {
        \$definition = \$this->nodeList[\$fromHash];

        \$definition->dependencyList[] = \$toHash;
    }

    /**
     * Return a valid order list of all current nodes.
     * The desired topological sorting is the postorder of these searches.
     *
     * Note: Highly performance-sensitive method.
     *
     * @throws \\RuntimeException
     * @throws CircularReferenceException
     *
     * @return array
     */
    public function sort()
    {
        foreach (\$this->nodeList as \$definition) {
            if (\$definition->state !== Vertex::NOT_VISITED) {
                continue;
            }

            \$this->visit(\$definition);
        }

        \$sortedList = \$this->sortedNodeList;

        \$this->nodeList       = [];
        \$this->sortedNodeList = [];

        return \$sortedList;
    }

    /**
     * Visit a given node definition for reordering.
     *
     * Note: Highly performance-sensitive method.
     *
     * @throws \\RuntimeException
     * @throws CircularReferenceException
     *
     * @param Vertex \$definition
     */
    private function visit(Vertex \$definition)
    {
        \$definition->state = Vertex::IN_PROGRESS;

        foreach (\$definition->dependencyList as \$dependency) {
            if ( ! isset(\$this->nodeList[\$dependency])) {
                throw new \\RuntimeException(sprintf(
                    'Fixture \"%s\" has a dependency of fixture \"%s\", but it not listed to be loaded.',
                    get_class(\$definition->value),
                    \$dependency
                ));
            }

            \$childDefinition = \$this->nodeList[\$dependency];

            // allow self referencing classes
            if (\$definition === \$childDefinition) {
                continue;
            }

            switch (\$childDefinition->state) {
                case Vertex::VISITED:
                    break;
                case Vertex::IN_PROGRESS:
                    if ( ! \$this->allowCyclicDependencies) {
                        throw new CircularReferenceException(
                            sprintf(
                                'Graph contains cyclic dependency between the classes \"%s\" and'
                                .' \"%s\". An example of this problem would be the following: '
                                .'Class C has class B as its dependency. Then, class B has class A has its dependency. '
                                .'Finally, class A has class C as its dependency.',
                                \$definition->value->getName(),
                                \$childDefinition->value->getName()
                            )
                        );
                    }
                    break;
                case Vertex::NOT_VISITED:
                    \$this->visit(\$childDefinition);
            }
        }

        \$definition->state = Vertex::VISITED;

        \$this->sortedNodeList[] = \$definition->value;
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/TopologicalSorter.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Sorter/TopologicalSorter.php");
    }
}
