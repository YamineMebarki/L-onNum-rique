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

/* vendor/nikic/php-parser/lib/PhpParser/NodeFinder.php */
class __TwigTemplate_000d191a388ce65c10aa908fa3aafb7f967745857e1b166e4c993304bb406157 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeFinder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeFinder.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\\NodeVisitor\\FindingVisitor;
use PhpParser\\NodeVisitor\\FirstFindingVisitor;

class NodeFinder
{
    /**
     * Find all nodes satisfying a filter callback.
     *
     * @param Node|Node[] \$nodes  Single node or array of nodes to search in
     * @param callable    \$filter Filter callback: function(Node \$node) : bool
     *
     * @return Node[] Found nodes satisfying the filter callback
     */
    public function find(\$nodes, callable \$filter) : array {
        if (!is_array(\$nodes)) {
            \$nodes = [\$nodes];
        }

        \$visitor = new FindingVisitor(\$filter);

        \$traverser = new NodeTraverser;
        \$traverser->addVisitor(\$visitor);
        \$traverser->traverse(\$nodes);

        return \$visitor->getFoundNodes();
    }

    /**
     * Find all nodes that are instances of a certain class.
     *
     * @param Node|Node[] \$nodes Single node or array of nodes to search in
     * @param string      \$class Class name
     *
     * @return Node[] Found nodes (all instances of \$class)
     */
    public function findInstanceOf(\$nodes, string \$class) : array {
        return \$this->find(\$nodes, function (\$node) use (\$class) {
            return \$node instanceof \$class;
        });
    }

    /**
     * Find first node satisfying a filter callback.
     *
     * @param Node|Node[] \$nodes  Single node or array of nodes to search in
     * @param callable    \$filter Filter callback: function(Node \$node) : bool
     *
     * @return null|Node Found node (or null if none found)
     */
    public function findFirst(\$nodes, callable \$filter) {
        if (!is_array(\$nodes)) {
            \$nodes = [\$nodes];
        }

        \$visitor = new FirstFindingVisitor(\$filter);

        \$traverser = new NodeTraverser;
        \$traverser->addVisitor(\$visitor);
        \$traverser->traverse(\$nodes);

        return \$visitor->getFoundNode();
    }

    /**
     * Find first node that is an instance of a certain class.
     *
     * @param Node|Node[] \$nodes  Single node or array of nodes to search in
     * @param string      \$class Class name
     *
     * @return null|Node Found node, which is an instance of \$class (or null if none found)
     */
    public function findFirstInstanceOf(\$nodes, string \$class) {
        return \$this->findFirst(\$nodes, function (\$node) use (\$class) {
            return \$node instanceof \$class;
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/NodeFinder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\\NodeVisitor\\FindingVisitor;
use PhpParser\\NodeVisitor\\FirstFindingVisitor;

class NodeFinder
{
    /**
     * Find all nodes satisfying a filter callback.
     *
     * @param Node|Node[] \$nodes  Single node or array of nodes to search in
     * @param callable    \$filter Filter callback: function(Node \$node) : bool
     *
     * @return Node[] Found nodes satisfying the filter callback
     */
    public function find(\$nodes, callable \$filter) : array {
        if (!is_array(\$nodes)) {
            \$nodes = [\$nodes];
        }

        \$visitor = new FindingVisitor(\$filter);

        \$traverser = new NodeTraverser;
        \$traverser->addVisitor(\$visitor);
        \$traverser->traverse(\$nodes);

        return \$visitor->getFoundNodes();
    }

    /**
     * Find all nodes that are instances of a certain class.
     *
     * @param Node|Node[] \$nodes Single node or array of nodes to search in
     * @param string      \$class Class name
     *
     * @return Node[] Found nodes (all instances of \$class)
     */
    public function findInstanceOf(\$nodes, string \$class) : array {
        return \$this->find(\$nodes, function (\$node) use (\$class) {
            return \$node instanceof \$class;
        });
    }

    /**
     * Find first node satisfying a filter callback.
     *
     * @param Node|Node[] \$nodes  Single node or array of nodes to search in
     * @param callable    \$filter Filter callback: function(Node \$node) : bool
     *
     * @return null|Node Found node (or null if none found)
     */
    public function findFirst(\$nodes, callable \$filter) {
        if (!is_array(\$nodes)) {
            \$nodes = [\$nodes];
        }

        \$visitor = new FirstFindingVisitor(\$filter);

        \$traverser = new NodeTraverser;
        \$traverser->addVisitor(\$visitor);
        \$traverser->traverse(\$nodes);

        return \$visitor->getFoundNode();
    }

    /**
     * Find first node that is an instance of a certain class.
     *
     * @param Node|Node[] \$nodes  Single node or array of nodes to search in
     * @param string      \$class Class name
     *
     * @return null|Node Found node, which is an instance of \$class (or null if none found)
     */
    public function findFirstInstanceOf(\$nodes, string \$class) {
        return \$this->findFirst(\$nodes, function (\$node) use (\$class) {
            return \$node instanceof \$class;
        });
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/NodeFinder.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/NodeFinder.php");
    }
}
