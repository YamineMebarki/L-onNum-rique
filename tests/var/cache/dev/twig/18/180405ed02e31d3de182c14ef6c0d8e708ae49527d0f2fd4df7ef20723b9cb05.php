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

/* vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php */
class __TwigTemplate_b6cd0663b8ded350a81740fe4f0d7f8b12f20eb033065a0fa0dfe1318bf7ceea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

class NodeTraverser implements NodeTraverserInterface
{
    /**
     * If NodeVisitor::enterNode() returns DONT_TRAVERSE_CHILDREN, child nodes
     * of the current node will not be traversed for any visitors.
     *
     * For subsequent visitors enterNode() will still be called on the current
     * node and leaveNode() will also be invoked for the current node.
     */
    const DONT_TRAVERSE_CHILDREN = 1;

    /**
     * If NodeVisitor::enterNode() or NodeVisitor::leaveNode() returns
     * STOP_TRAVERSAL, traversal is aborted.
     *
     * The afterTraverse() method will still be invoked.
     */
    const STOP_TRAVERSAL = 2;

    /**
     * If NodeVisitor::leaveNode() returns REMOVE_NODE for a node that occurs
     * in an array, it will be removed from the array.
     *
     * For subsequent visitors leaveNode() will still be invoked for the
     * removed node.
     */
    const REMOVE_NODE = 3;

    /**
     * If NodeVisitor::enterNode() returns DONT_TRAVERSE_CURRENT_AND_CHILDREN, child nodes
     * of the current node will not be traversed for any visitors.
     *
     * For subsequent visitors enterNode() will not be called as well.
     * leaveNode() will be invoked for visitors that has enterNode() method invoked.
     */
    const DONT_TRAVERSE_CURRENT_AND_CHILDREN = 4;

    /** @var NodeVisitor[] Visitors */
    protected \$visitors = [];

    /** @var bool Whether traversal should be stopped */
    protected \$stopTraversal;

    public function __construct() {
        // for BC
    }

    /**
     * Adds a visitor.
     *
     * @param NodeVisitor \$visitor Visitor to add
     */
    public function addVisitor(NodeVisitor \$visitor) {
        \$this->visitors[] = \$visitor;
    }

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor \$visitor
     */
    public function removeVisitor(NodeVisitor \$visitor) {
        foreach (\$this->visitors as \$index => \$storedVisitor) {
            if (\$storedVisitor === \$visitor) {
                unset(\$this->visitors[\$index]);
                break;
            }
        }
    }

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array \$nodes) : array {
        \$this->stopTraversal = false;

        foreach (\$this->visitors as \$visitor) {
            if (null !== \$return = \$visitor->beforeTraverse(\$nodes)) {
                \$nodes = \$return;
            }
        }

        \$nodes = \$this->traverseArray(\$nodes);

        foreach (\$this->visitors as \$visitor) {
            if (null !== \$return = \$visitor->afterTraverse(\$nodes)) {
                \$nodes = \$return;
            }
        }

        return \$nodes;
    }

    /**
     * Recursively traverse a node.
     *
     * @param Node \$node Node to traverse.
     *
     * @return Node Result of traversal (may be original node or new one)
     */
    protected function traverseNode(Node \$node) : Node {
        foreach (\$node->getSubNodeNames() as \$name) {
            \$subNode =& \$node->\$name;

            if (\\is_array(\$subNode)) {
                \$subNode = \$this->traverseArray(\$subNode);
                if (\$this->stopTraversal) {
                    break;
                }
            } elseif (\$subNode instanceof Node) {
                \$traverseChildren = true;
                \$breakVisitorIndex = null;

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->enterNode(\$subNode);
                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$subNode, \$return);
                            \$subNode = \$return;
                        } elseif (self::DONT_TRAVERSE_CHILDREN === \$return) {
                            \$traverseChildren = false;
                        } elseif (self::DONT_TRAVERSE_CURRENT_AND_CHILDREN === \$return) {
                            \$traverseChildren = false;
                            \$breakVisitorIndex = \$visitorIndex;
                            break;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } else {
                            throw new \\LogicException(
                                'enterNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }
                }

                if (\$traverseChildren) {
                    \$subNode = \$this->traverseNode(\$subNode);
                    if (\$this->stopTraversal) {
                        break;
                    }
                }

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->leaveNode(\$subNode);

                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$subNode, \$return);
                            \$subNode = \$return;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } elseif (\\is_array(\$return)) {
                            throw new \\LogicException(
                                'leaveNode() may only return an array ' .
                                'if the parent structure is an array'
                            );
                        } else {
                            throw new \\LogicException(
                                'leaveNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }

                    if (\$breakVisitorIndex === \$visitorIndex) {
                        break;
                    }
                }
            }
        }

        return \$node;
    }

    /**
     * Recursively traverse array (usually of nodes).
     *
     * @param array \$nodes Array to traverse
     *
     * @return array Result of traversal (may be original array or changed one)
     */
    protected function traverseArray(array \$nodes) : array {
        \$doNodes = [];

        foreach (\$nodes as \$i => &\$node) {
            if (\$node instanceof Node) {
                \$traverseChildren = true;
                \$breakVisitorIndex = null;

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->enterNode(\$node);
                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$node, \$return);
                            \$node = \$return;
                        } elseif (self::DONT_TRAVERSE_CHILDREN === \$return) {
                            \$traverseChildren = false;
                        } elseif (self::DONT_TRAVERSE_CURRENT_AND_CHILDREN === \$return) {
                            \$traverseChildren = false;
                            \$breakVisitorIndex = \$visitorIndex;
                            break;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } else {
                            throw new \\LogicException(
                                'enterNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }
                }

                if (\$traverseChildren) {
                    \$node = \$this->traverseNode(\$node);
                    if (\$this->stopTraversal) {
                        break;
                    }
                }

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->leaveNode(\$node);

                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$node, \$return);
                            \$node = \$return;
                        } elseif (\\is_array(\$return)) {
                            \$doNodes[] = [\$i, \$return];
                            break;
                        } elseif (self::REMOVE_NODE === \$return) {
                            \$doNodes[] = [\$i, []];
                            break;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } elseif (false === \$return) {
                            throw new \\LogicException(
                                'bool(false) return from leaveNode() no longer supported. ' .
                                'Return NodeTraverser::REMOVE_NODE instead'
                            );
                        } else {
                            throw new \\LogicException(
                                'leaveNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }

                    if (\$breakVisitorIndex === \$visitorIndex) {
                        break;
                    }
                }
            } elseif (\\is_array(\$node)) {
                throw new \\LogicException('Invalid node structure: Contains nested arrays');
            }
        }

        if (!empty(\$doNodes)) {
            while (list(\$i, \$replace) = array_pop(\$doNodes)) {
                array_splice(\$nodes, \$i, 1, \$replace);
            }
        }

        return \$nodes;
    }

    private function ensureReplacementReasonable(\$old, \$new) {
        if (\$old instanceof Node\\Stmt && \$new instanceof Node\\Expr) {
            throw new \\LogicException(
                \"Trying to replace statement ({\$old->getType()}) \" .
                \"with expression ({\$new->getType()}). Are you missing a \" .
                \"Stmt_Expression wrapper?\"
            );
        }

        if (\$old instanceof Node\\Expr && \$new instanceof Node\\Stmt) {
            throw new \\LogicException(
                \"Trying to replace expression ({\$old->getType()}) \" .
                \"with statement ({\$new->getType()})\"
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

class NodeTraverser implements NodeTraverserInterface
{
    /**
     * If NodeVisitor::enterNode() returns DONT_TRAVERSE_CHILDREN, child nodes
     * of the current node will not be traversed for any visitors.
     *
     * For subsequent visitors enterNode() will still be called on the current
     * node and leaveNode() will also be invoked for the current node.
     */
    const DONT_TRAVERSE_CHILDREN = 1;

    /**
     * If NodeVisitor::enterNode() or NodeVisitor::leaveNode() returns
     * STOP_TRAVERSAL, traversal is aborted.
     *
     * The afterTraverse() method will still be invoked.
     */
    const STOP_TRAVERSAL = 2;

    /**
     * If NodeVisitor::leaveNode() returns REMOVE_NODE for a node that occurs
     * in an array, it will be removed from the array.
     *
     * For subsequent visitors leaveNode() will still be invoked for the
     * removed node.
     */
    const REMOVE_NODE = 3;

    /**
     * If NodeVisitor::enterNode() returns DONT_TRAVERSE_CURRENT_AND_CHILDREN, child nodes
     * of the current node will not be traversed for any visitors.
     *
     * For subsequent visitors enterNode() will not be called as well.
     * leaveNode() will be invoked for visitors that has enterNode() method invoked.
     */
    const DONT_TRAVERSE_CURRENT_AND_CHILDREN = 4;

    /** @var NodeVisitor[] Visitors */
    protected \$visitors = [];

    /** @var bool Whether traversal should be stopped */
    protected \$stopTraversal;

    public function __construct() {
        // for BC
    }

    /**
     * Adds a visitor.
     *
     * @param NodeVisitor \$visitor Visitor to add
     */
    public function addVisitor(NodeVisitor \$visitor) {
        \$this->visitors[] = \$visitor;
    }

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor \$visitor
     */
    public function removeVisitor(NodeVisitor \$visitor) {
        foreach (\$this->visitors as \$index => \$storedVisitor) {
            if (\$storedVisitor === \$visitor) {
                unset(\$this->visitors[\$index]);
                break;
            }
        }
    }

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array \$nodes) : array {
        \$this->stopTraversal = false;

        foreach (\$this->visitors as \$visitor) {
            if (null !== \$return = \$visitor->beforeTraverse(\$nodes)) {
                \$nodes = \$return;
            }
        }

        \$nodes = \$this->traverseArray(\$nodes);

        foreach (\$this->visitors as \$visitor) {
            if (null !== \$return = \$visitor->afterTraverse(\$nodes)) {
                \$nodes = \$return;
            }
        }

        return \$nodes;
    }

    /**
     * Recursively traverse a node.
     *
     * @param Node \$node Node to traverse.
     *
     * @return Node Result of traversal (may be original node or new one)
     */
    protected function traverseNode(Node \$node) : Node {
        foreach (\$node->getSubNodeNames() as \$name) {
            \$subNode =& \$node->\$name;

            if (\\is_array(\$subNode)) {
                \$subNode = \$this->traverseArray(\$subNode);
                if (\$this->stopTraversal) {
                    break;
                }
            } elseif (\$subNode instanceof Node) {
                \$traverseChildren = true;
                \$breakVisitorIndex = null;

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->enterNode(\$subNode);
                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$subNode, \$return);
                            \$subNode = \$return;
                        } elseif (self::DONT_TRAVERSE_CHILDREN === \$return) {
                            \$traverseChildren = false;
                        } elseif (self::DONT_TRAVERSE_CURRENT_AND_CHILDREN === \$return) {
                            \$traverseChildren = false;
                            \$breakVisitorIndex = \$visitorIndex;
                            break;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } else {
                            throw new \\LogicException(
                                'enterNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }
                }

                if (\$traverseChildren) {
                    \$subNode = \$this->traverseNode(\$subNode);
                    if (\$this->stopTraversal) {
                        break;
                    }
                }

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->leaveNode(\$subNode);

                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$subNode, \$return);
                            \$subNode = \$return;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } elseif (\\is_array(\$return)) {
                            throw new \\LogicException(
                                'leaveNode() may only return an array ' .
                                'if the parent structure is an array'
                            );
                        } else {
                            throw new \\LogicException(
                                'leaveNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }

                    if (\$breakVisitorIndex === \$visitorIndex) {
                        break;
                    }
                }
            }
        }

        return \$node;
    }

    /**
     * Recursively traverse array (usually of nodes).
     *
     * @param array \$nodes Array to traverse
     *
     * @return array Result of traversal (may be original array or changed one)
     */
    protected function traverseArray(array \$nodes) : array {
        \$doNodes = [];

        foreach (\$nodes as \$i => &\$node) {
            if (\$node instanceof Node) {
                \$traverseChildren = true;
                \$breakVisitorIndex = null;

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->enterNode(\$node);
                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$node, \$return);
                            \$node = \$return;
                        } elseif (self::DONT_TRAVERSE_CHILDREN === \$return) {
                            \$traverseChildren = false;
                        } elseif (self::DONT_TRAVERSE_CURRENT_AND_CHILDREN === \$return) {
                            \$traverseChildren = false;
                            \$breakVisitorIndex = \$visitorIndex;
                            break;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } else {
                            throw new \\LogicException(
                                'enterNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }
                }

                if (\$traverseChildren) {
                    \$node = \$this->traverseNode(\$node);
                    if (\$this->stopTraversal) {
                        break;
                    }
                }

                foreach (\$this->visitors as \$visitorIndex => \$visitor) {
                    \$return = \$visitor->leaveNode(\$node);

                    if (null !== \$return) {
                        if (\$return instanceof Node) {
                            \$this->ensureReplacementReasonable(\$node, \$return);
                            \$node = \$return;
                        } elseif (\\is_array(\$return)) {
                            \$doNodes[] = [\$i, \$return];
                            break;
                        } elseif (self::REMOVE_NODE === \$return) {
                            \$doNodes[] = [\$i, []];
                            break;
                        } elseif (self::STOP_TRAVERSAL === \$return) {
                            \$this->stopTraversal = true;
                            break 2;
                        } elseif (false === \$return) {
                            throw new \\LogicException(
                                'bool(false) return from leaveNode() no longer supported. ' .
                                'Return NodeTraverser::REMOVE_NODE instead'
                            );
                        } else {
                            throw new \\LogicException(
                                'leaveNode() returned invalid value of type ' . gettype(\$return)
                            );
                        }
                    }

                    if (\$breakVisitorIndex === \$visitorIndex) {
                        break;
                    }
                }
            } elseif (\\is_array(\$node)) {
                throw new \\LogicException('Invalid node structure: Contains nested arrays');
            }
        }

        if (!empty(\$doNodes)) {
            while (list(\$i, \$replace) = array_pop(\$doNodes)) {
                array_splice(\$nodes, \$i, 1, \$replace);
            }
        }

        return \$nodes;
    }

    private function ensureReplacementReasonable(\$old, \$new) {
        if (\$old instanceof Node\\Stmt && \$new instanceof Node\\Expr) {
            throw new \\LogicException(
                \"Trying to replace statement ({\$old->getType()}) \" .
                \"with expression ({\$new->getType()}). Are you missing a \" .
                \"Stmt_Expression wrapper?\"
            );
        }

        if (\$old instanceof Node\\Expr && \$new instanceof Node\\Stmt) {
            throw new \\LogicException(
                \"Trying to replace expression ({\$old->getType()}) \" .
                \"with statement ({\$new->getType()})\"
            );
        }
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/NodeTraverser.php");
    }
}
