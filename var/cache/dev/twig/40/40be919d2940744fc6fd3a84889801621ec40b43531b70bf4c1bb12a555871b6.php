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

/* vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php */
class __TwigTemplate_51bf1de8cadc1ded592d0a916cf3842161947764fae8cc38b0369e1e0fba0270 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

interface NodeTraverserInterface
{
    /**
     * Adds a visitor.
     *
     * @param NodeVisitor \$visitor Visitor to add
     */
    public function addVisitor(NodeVisitor \$visitor);

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor \$visitor
     */
    public function removeVisitor(NodeVisitor \$visitor);

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array \$nodes) : array;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

interface NodeTraverserInterface
{
    /**
     * Adds a visitor.
     *
     * @param NodeVisitor \$visitor Visitor to add
     */
    public function addVisitor(NodeVisitor \$visitor);

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor \$visitor
     */
    public function removeVisitor(NodeVisitor \$visitor);

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array \$nodes) : array;
}
", "vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php");
    }
}
