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

/* vendor/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php */
class __TwigTemplate_d62d60db092b2e2378209508ebcb87e3aaecd2b1293ebb1a4f8c68dfa736539e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php"));

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

namespace Twig\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\Node;

/**
 * Used to make node visitors compatible with Twig 1.x and 2.x.
 *
 * To be removed in Twig 3.1.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractNodeVisitor implements NodeVisitorInterface
{
    final public function enterNode(Node \$node, Environment \$env)
    {
        return \$this->doEnterNode(\$node, \$env);
    }

    final public function leaveNode(Node \$node, Environment \$env)
    {
        return \$this->doLeaveNode(\$node, \$env);
    }

    /**
     * Called before child nodes are visited.
     *
     * @return Node The modified node
     */
    abstract protected function doEnterNode(Node \$node, Environment \$env);

    /**
     * Called after child nodes are visited.
     *
     * @return Node|null The modified node or null if the node must be removed
     */
    abstract protected function doLeaveNode(Node \$node, Environment \$env);
}

class_alias('Twig\\NodeVisitor\\AbstractNodeVisitor', 'Twig_BaseNodeVisitor');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php";
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

namespace Twig\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\Node;

/**
 * Used to make node visitors compatible with Twig 1.x and 2.x.
 *
 * To be removed in Twig 3.1.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class AbstractNodeVisitor implements NodeVisitorInterface
{
    final public function enterNode(Node \$node, Environment \$env)
    {
        return \$this->doEnterNode(\$node, \$env);
    }

    final public function leaveNode(Node \$node, Environment \$env)
    {
        return \$this->doLeaveNode(\$node, \$env);
    }

    /**
     * Called before child nodes are visited.
     *
     * @return Node The modified node
     */
    abstract protected function doEnterNode(Node \$node, Environment \$env);

    /**
     * Called after child nodes are visited.
     *
     * @return Node|null The modified node or null if the node must be removed
     */
    abstract protected function doLeaveNode(Node \$node, Environment \$env);
}

class_alias('Twig\\NodeVisitor\\AbstractNodeVisitor', 'Twig_BaseNodeVisitor');
", "vendor/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/NodeVisitor/AbstractNodeVisitor.php");
    }
}
