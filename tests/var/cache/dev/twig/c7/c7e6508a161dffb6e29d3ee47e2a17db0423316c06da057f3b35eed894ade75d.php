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

/* vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FindingVisitor.php */
class __TwigTemplate_5828775695659ead9d7d8a2d3434728e77ae67250bdc5888173b22d63be1735c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FindingVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FindingVisitor.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\NodeVisitor;

use PhpParser\\Node;
use PhpParser\\NodeVisitorAbstract;

/**
 * This visitor can be used to find and collect all nodes satisfying some criterion determined by
 * a filter callback.
 */
class FindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected \$filterCallback;
    /** @var Node[] Found nodes */
    protected \$foundNodes;

    public function __construct(callable \$filterCallback) {
        \$this->filterCallback = \$filterCallback;
    }

    /**
     * Get found nodes satisfying the filter callback.
     *
     * Nodes are returned in pre-order.
     *
     * @return Node[] Found nodes
     */
    public function getFoundNodes() : array {
        return \$this->foundNodes;
    }

    public function beforeTraverse(array \$nodes) {
        \$this->foundNodes = [];

        return null;
    }

    public function enterNode(Node \$node) {
        \$filterCallback = \$this->filterCallback;
        if (\$filterCallback(\$node)) {
            \$this->foundNodes[] = \$node;
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FindingVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\NodeVisitor;

use PhpParser\\Node;
use PhpParser\\NodeVisitorAbstract;

/**
 * This visitor can be used to find and collect all nodes satisfying some criterion determined by
 * a filter callback.
 */
class FindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected \$filterCallback;
    /** @var Node[] Found nodes */
    protected \$foundNodes;

    public function __construct(callable \$filterCallback) {
        \$this->filterCallback = \$filterCallback;
    }

    /**
     * Get found nodes satisfying the filter callback.
     *
     * Nodes are returned in pre-order.
     *
     * @return Node[] Found nodes
     */
    public function getFoundNodes() : array {
        return \$this->foundNodes;
    }

    public function beforeTraverse(array \$nodes) {
        \$this->foundNodes = [];

        return null;
    }

    public function enterNode(Node \$node) {
        \$filterCallback = \$this->filterCallback;
        if (\$filterCallback(\$node)) {
            \$this->foundNodes[] = \$node;
        }

        return null;
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FindingVisitor.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FindingVisitor.php");
    }
}
