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

/* vendor/twig/twig/src/NodeTraverser.php */
class __TwigTemplate_53a92e7f52397de5ca333861f9525486b8881ce0e6eed6d0a774488cf7d973f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeTraverser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeTraverser.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Node;
use Twig\\NodeVisitor\\NodeVisitorInterface;

/**
 * A node traverser.
 *
 * It visits all nodes and their children and calls the given visitor for each.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class NodeTraverser
{
    private \$env;
    private \$visitors = [];

    /**
     * @param NodeVisitorInterface[] \$visitors
     */
    public function __construct(Environment \$env, array \$visitors = [])
    {
        \$this->env = \$env;
        foreach (\$visitors as \$visitor) {
            \$this->addVisitor(\$visitor);
        }
    }

    public function addVisitor(NodeVisitorInterface \$visitor)
    {
        \$this->visitors[\$visitor->getPriority()][] = \$visitor;
    }

    /**
     * Traverses a node and calls the registered visitors.
     */
    public function traverse(Node \$node): Node
    {
        ksort(\$this->visitors);
        foreach (\$this->visitors as \$visitors) {
            foreach (\$visitors as \$visitor) {
                \$node = \$this->traverseForVisitor(\$visitor, \$node);
            }
        }

        return \$node;
    }

    /**
     * @return Node|null
     */
    private function traverseForVisitor(NodeVisitorInterface \$visitor, Node \$node)
    {
        \$node = \$visitor->enterNode(\$node, \$this->env);

        foreach (\$node as \$k => \$n) {
            if (false !== (\$m = \$this->traverseForVisitor(\$visitor, \$n)) && null !== \$m) {
                if (\$m !== \$n) {
                    \$node->setNode(\$k, \$m);
                }
            } else {
                if (false === \$m) {
                    @trigger_error('Returning \"false\" to remove a Node from NodeVisitorInterface::leaveNode() is deprecated since Twig version 2.9; return \"null\" instead.', E_USER_DEPRECATED);
                }

                \$node->removeNode(\$k);
            }
        }

        return \$visitor->leaveNode(\$node, \$this->env);
    }
}

class_alias('Twig\\NodeTraverser', 'Twig_NodeTraverser');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/NodeTraverser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Node\\Node;
use Twig\\NodeVisitor\\NodeVisitorInterface;

/**
 * A node traverser.
 *
 * It visits all nodes and their children and calls the given visitor for each.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class NodeTraverser
{
    private \$env;
    private \$visitors = [];

    /**
     * @param NodeVisitorInterface[] \$visitors
     */
    public function __construct(Environment \$env, array \$visitors = [])
    {
        \$this->env = \$env;
        foreach (\$visitors as \$visitor) {
            \$this->addVisitor(\$visitor);
        }
    }

    public function addVisitor(NodeVisitorInterface \$visitor)
    {
        \$this->visitors[\$visitor->getPriority()][] = \$visitor;
    }

    /**
     * Traverses a node and calls the registered visitors.
     */
    public function traverse(Node \$node): Node
    {
        ksort(\$this->visitors);
        foreach (\$this->visitors as \$visitors) {
            foreach (\$visitors as \$visitor) {
                \$node = \$this->traverseForVisitor(\$visitor, \$node);
            }
        }

        return \$node;
    }

    /**
     * @return Node|null
     */
    private function traverseForVisitor(NodeVisitorInterface \$visitor, Node \$node)
    {
        \$node = \$visitor->enterNode(\$node, \$this->env);

        foreach (\$node as \$k => \$n) {
            if (false !== (\$m = \$this->traverseForVisitor(\$visitor, \$n)) && null !== \$m) {
                if (\$m !== \$n) {
                    \$node->setNode(\$k, \$m);
                }
            } else {
                if (false === \$m) {
                    @trigger_error('Returning \"false\" to remove a Node from NodeVisitorInterface::leaveNode() is deprecated since Twig version 2.9; return \"null\" instead.', E_USER_DEPRECATED);
                }

                \$node->removeNode(\$k);
            }
        }

        return \$visitor->leaveNode(\$node, \$this->env);
    }
}

class_alias('Twig\\NodeTraverser', 'Twig_NodeTraverser');
", "vendor/twig/twig/src/NodeTraverser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/NodeTraverser.php");
    }
}
