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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php */
class __TwigTemplate_540bb0b19cfa70d3f171b5bd6b4fe960203f0014005b52338948abb285d5e849 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php"));

        // line 1
        echo "<?php

/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Internal;

/**
 * CommitOrderCalculator implements topological sorting, which is an ordering
 * algorithm for directed graphs (DG) and/or directed acyclic graphs (DAG) by
 * using a depth-first searching (DFS) to traverse the graph built in memory.
 * This algorithm have a linear running time based on nodes (V) and dependency
 * between the nodes (E), resulting in a computational complexity of O(V + E).
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class CommitOrderCalculator
{
    const NOT_VISITED = 0;
    const IN_PROGRESS = 1;
    const VISITED     = 2;

    /**
     * Matrix of nodes (aka. vertex).
     * Keys are provided hashes and values are the node definition objects.
     *
     * The node state definition contains the following properties:
     *
     * - <b>state</b> (integer)
     * Whether the node is NOT_VISITED or IN_PROGRESS
     *
     * - <b>value</b> (object)
     * Actual node value
     *
     * - <b>dependencyList</b> (array<string>)
     * Map of node dependencies defined as hashes.
     *
     * @var array<\\stdClass>
     */
    private \$nodeList = [];

    /**
     * Volatile variable holding calculated nodes during sorting process.
     *
     * @var array
     */
    private \$sortedNodeList = [];

    /**
     * Checks for node (vertex) existence in graph.
     *
     * @param string \$hash
     *
     * @return boolean
     */
    public function hasNode(\$hash)
    {
        return isset(\$this->nodeList[\$hash]);
    }

    /**
     * Adds a new node (vertex) to the graph, assigning its hash and value.
     *
     * @param string \$hash
     * @param object \$node
     *
     * @return void
     */
    public function addNode(\$hash, \$node)
    {
        \$vertex = new \\stdClass();

        \$vertex->hash           = \$hash;
        \$vertex->state          = self::NOT_VISITED;
        \$vertex->value          = \$node;
        \$vertex->dependencyList = [];

        \$this->nodeList[\$hash] = \$vertex;
    }

    /**
     * Adds a new dependency (edge) to the graph using their hashes.
     *
     * @param string  \$fromHash
     * @param string  \$toHash
     * @param integer \$weight
     *
     * @return void
     */
    public function addDependency(\$fromHash, \$toHash, \$weight)
    {
        \$vertex = \$this->nodeList[\$fromHash];
        \$edge   = new \\stdClass();

        \$edge->from   = \$fromHash;
        \$edge->to     = \$toHash;
        \$edge->weight = \$weight;

        \$vertex->dependencyList[\$toHash] = \$edge;
    }

    /**
     * Return a valid order list of all current nodes.
     * The desired topological sorting is the reverse post order of these searches.
     *
     * {@internal Highly performance-sensitive method.}
     *
     * @return array
     */
    public function sort()
    {
        foreach (\$this->nodeList as \$vertex) {
            if (\$vertex->state !== self::NOT_VISITED) {
                continue;
            }

            \$this->visit(\$vertex);
        }

        \$sortedList = \$this->sortedNodeList;

        \$this->nodeList       = [];
        \$this->sortedNodeList = [];

        return array_reverse(\$sortedList);
    }

    /**
     * Visit a given node definition for reordering.
     *
     * {@internal Highly performance-sensitive method.}
     *
     * @param \\stdClass \$vertex
     */
    private function visit(\$vertex)
    {
        \$vertex->state = self::IN_PROGRESS;

        foreach (\$vertex->dependencyList as \$edge) {
            \$adjacentVertex = \$this->nodeList[\$edge->to];

            switch (\$adjacentVertex->state) {
                case self::VISITED:
                    // Do nothing, since node was already visited
                    break;

                case self::IN_PROGRESS:
                    if (isset(\$adjacentVertex->dependencyList[\$vertex->hash]) &&
                        \$adjacentVertex->dependencyList[\$vertex->hash]->weight < \$edge->weight) {

                        // If we have some non-visited dependencies in the in-progress dependency, we
                        // need to visit them before adding the node.
                        foreach (\$adjacentVertex->dependencyList as \$adjacentEdge) {
                            \$adjacentEdgeVertex = \$this->nodeList[\$adjacentEdge->to];

                            if (\$adjacentEdgeVertex->state === self::NOT_VISITED) {
                                \$this->visit(\$adjacentEdgeVertex);
                            }
                        }

                        \$adjacentVertex->state = self::VISITED;

                        \$this->sortedNodeList[] = \$adjacentVertex->value;
                    }
                    break;

                case self::NOT_VISITED:
                    \$this->visit(\$adjacentVertex);
            }
        }

        if (\$vertex->state !== self::VISITED) {
            \$vertex->state = self::VISITED;

            \$this->sortedNodeList[] = \$vertex->value;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Internal;

/**
 * CommitOrderCalculator implements topological sorting, which is an ordering
 * algorithm for directed graphs (DG) and/or directed acyclic graphs (DAG) by
 * using a depth-first searching (DFS) to traverse the graph built in memory.
 * This algorithm have a linear running time based on nodes (V) and dependency
 * between the nodes (E), resulting in a computational complexity of O(V + E).
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class CommitOrderCalculator
{
    const NOT_VISITED = 0;
    const IN_PROGRESS = 1;
    const VISITED     = 2;

    /**
     * Matrix of nodes (aka. vertex).
     * Keys are provided hashes and values are the node definition objects.
     *
     * The node state definition contains the following properties:
     *
     * - <b>state</b> (integer)
     * Whether the node is NOT_VISITED or IN_PROGRESS
     *
     * - <b>value</b> (object)
     * Actual node value
     *
     * - <b>dependencyList</b> (array<string>)
     * Map of node dependencies defined as hashes.
     *
     * @var array<\\stdClass>
     */
    private \$nodeList = [];

    /**
     * Volatile variable holding calculated nodes during sorting process.
     *
     * @var array
     */
    private \$sortedNodeList = [];

    /**
     * Checks for node (vertex) existence in graph.
     *
     * @param string \$hash
     *
     * @return boolean
     */
    public function hasNode(\$hash)
    {
        return isset(\$this->nodeList[\$hash]);
    }

    /**
     * Adds a new node (vertex) to the graph, assigning its hash and value.
     *
     * @param string \$hash
     * @param object \$node
     *
     * @return void
     */
    public function addNode(\$hash, \$node)
    {
        \$vertex = new \\stdClass();

        \$vertex->hash           = \$hash;
        \$vertex->state          = self::NOT_VISITED;
        \$vertex->value          = \$node;
        \$vertex->dependencyList = [];

        \$this->nodeList[\$hash] = \$vertex;
    }

    /**
     * Adds a new dependency (edge) to the graph using their hashes.
     *
     * @param string  \$fromHash
     * @param string  \$toHash
     * @param integer \$weight
     *
     * @return void
     */
    public function addDependency(\$fromHash, \$toHash, \$weight)
    {
        \$vertex = \$this->nodeList[\$fromHash];
        \$edge   = new \\stdClass();

        \$edge->from   = \$fromHash;
        \$edge->to     = \$toHash;
        \$edge->weight = \$weight;

        \$vertex->dependencyList[\$toHash] = \$edge;
    }

    /**
     * Return a valid order list of all current nodes.
     * The desired topological sorting is the reverse post order of these searches.
     *
     * {@internal Highly performance-sensitive method.}
     *
     * @return array
     */
    public function sort()
    {
        foreach (\$this->nodeList as \$vertex) {
            if (\$vertex->state !== self::NOT_VISITED) {
                continue;
            }

            \$this->visit(\$vertex);
        }

        \$sortedList = \$this->sortedNodeList;

        \$this->nodeList       = [];
        \$this->sortedNodeList = [];

        return array_reverse(\$sortedList);
    }

    /**
     * Visit a given node definition for reordering.
     *
     * {@internal Highly performance-sensitive method.}
     *
     * @param \\stdClass \$vertex
     */
    private function visit(\$vertex)
    {
        \$vertex->state = self::IN_PROGRESS;

        foreach (\$vertex->dependencyList as \$edge) {
            \$adjacentVertex = \$this->nodeList[\$edge->to];

            switch (\$adjacentVertex->state) {
                case self::VISITED:
                    // Do nothing, since node was already visited
                    break;

                case self::IN_PROGRESS:
                    if (isset(\$adjacentVertex->dependencyList[\$vertex->hash]) &&
                        \$adjacentVertex->dependencyList[\$vertex->hash]->weight < \$edge->weight) {

                        // If we have some non-visited dependencies in the in-progress dependency, we
                        // need to visit them before adding the node.
                        foreach (\$adjacentVertex->dependencyList as \$adjacentEdge) {
                            \$adjacentEdgeVertex = \$this->nodeList[\$adjacentEdge->to];

                            if (\$adjacentEdgeVertex->state === self::NOT_VISITED) {
                                \$this->visit(\$adjacentEdgeVertex);
                            }
                        }

                        \$adjacentVertex->state = self::VISITED;

                        \$this->sortedNodeList[] = \$adjacentVertex->value;
                    }
                    break;

                case self::NOT_VISITED:
                    \$this->visit(\$adjacentVertex);
            }
        }

        if (\$vertex->state !== self::VISITED) {
            \$vertex->state = self::VISITED;

            \$this->sortedNodeList[] = \$vertex->value;
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php");
    }
}
