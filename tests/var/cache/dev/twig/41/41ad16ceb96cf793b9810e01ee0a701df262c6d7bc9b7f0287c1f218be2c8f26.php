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

/* vendor/symfony/config/Definition/Builder/TreeBuilder.php */
class __TwigTemplate_a5b69dd97aa0f9ad86e90e0d935347f732af751c475dd4c9da3b8ec20f2bf328 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/TreeBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/TreeBuilder.php"));

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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\Exception\\TreeWithoutRootNodeException;
use Symfony\\Component\\Config\\Definition\\NodeInterface;

/**
 * This is the entry class for building a config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TreeBuilder implements NodeParentInterface
{
    protected \$tree;
    protected \$root;

    public function __construct(string \$name = null, string \$type = 'array', NodeBuilder \$builder = null)
    {
        if (null === \$name) {
            @trigger_error('A tree builder without a root node is deprecated since Symfony 4.2 and will not be supported anymore in 5.0.', E_USER_DEPRECATED);
        } else {
            \$builder = \$builder ?: new NodeBuilder();
            \$this->root = \$builder->node(\$name, \$type)->setParent(\$this);
        }
    }

    /**
     * Creates the root node.
     *
     * @param string      \$name    The name of the root node
     * @param string      \$type    The type of the root node
     * @param NodeBuilder \$builder A custom node builder instance
     *
     * @return ArrayNodeDefinition|NodeDefinition The root node (as an ArrayNodeDefinition when the type is 'array')
     *
     * @throws \\RuntimeException When the node type is not supported
     *
     * @deprecated since Symfony 4.3, pass the root name to the constructor instead
     */
    public function root(\$name, \$type = 'array', NodeBuilder \$builder = null)
    {
        @trigger_error(sprintf('The \"%s()\" method called for the \"%s\" configuration is deprecated since Symfony 4.3, pass the root name to the constructor instead.', __METHOD__, \$name), E_USER_DEPRECATED);

        \$builder = \$builder ?: new NodeBuilder();

        return \$this->root = \$builder->node(\$name, \$type)->setParent(\$this);
    }

    /**
     * @return NodeDefinition|ArrayNodeDefinition The root node (as an ArrayNodeDefinition when the type is 'array')
     */
    public function getRootNode(): NodeDefinition
    {
        if (null === \$this->root) {
            throw new \\RuntimeException(sprintf('Calling %s() before creating the root node is not supported, migrate to the new constructor signature instead.', __METHOD__));
        }

        return \$this->root;
    }

    /**
     * Builds the tree.
     *
     * @return NodeInterface
     *
     * @throws \\RuntimeException
     */
    public function buildTree()
    {
        \$this->assertTreeHasRootNode();
        if (null !== \$this->tree) {
            return \$this->tree;
        }

        return \$this->tree = \$this->root->getNode(true);
    }

    public function setPathSeparator(string \$separator)
    {
        \$this->assertTreeHasRootNode();

        // unset last built as changing path separator changes all nodes
        \$this->tree = null;

        \$this->root->setPathSeparator(\$separator);
    }

    /**
     * @throws \\RuntimeException if root node is not defined
     */
    private function assertTreeHasRootNode()
    {
        if (null === \$this->root) {
            throw new TreeWithoutRootNodeException('The configuration tree has no root node.');
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/TreeBuilder.php";
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

namespace Symfony\\Component\\Config\\Definition\\Builder;

use Symfony\\Component\\Config\\Definition\\Exception\\TreeWithoutRootNodeException;
use Symfony\\Component\\Config\\Definition\\NodeInterface;

/**
 * This is the entry class for building a config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class TreeBuilder implements NodeParentInterface
{
    protected \$tree;
    protected \$root;

    public function __construct(string \$name = null, string \$type = 'array', NodeBuilder \$builder = null)
    {
        if (null === \$name) {
            @trigger_error('A tree builder without a root node is deprecated since Symfony 4.2 and will not be supported anymore in 5.0.', E_USER_DEPRECATED);
        } else {
            \$builder = \$builder ?: new NodeBuilder();
            \$this->root = \$builder->node(\$name, \$type)->setParent(\$this);
        }
    }

    /**
     * Creates the root node.
     *
     * @param string      \$name    The name of the root node
     * @param string      \$type    The type of the root node
     * @param NodeBuilder \$builder A custom node builder instance
     *
     * @return ArrayNodeDefinition|NodeDefinition The root node (as an ArrayNodeDefinition when the type is 'array')
     *
     * @throws \\RuntimeException When the node type is not supported
     *
     * @deprecated since Symfony 4.3, pass the root name to the constructor instead
     */
    public function root(\$name, \$type = 'array', NodeBuilder \$builder = null)
    {
        @trigger_error(sprintf('The \"%s()\" method called for the \"%s\" configuration is deprecated since Symfony 4.3, pass the root name to the constructor instead.', __METHOD__, \$name), E_USER_DEPRECATED);

        \$builder = \$builder ?: new NodeBuilder();

        return \$this->root = \$builder->node(\$name, \$type)->setParent(\$this);
    }

    /**
     * @return NodeDefinition|ArrayNodeDefinition The root node (as an ArrayNodeDefinition when the type is 'array')
     */
    public function getRootNode(): NodeDefinition
    {
        if (null === \$this->root) {
            throw new \\RuntimeException(sprintf('Calling %s() before creating the root node is not supported, migrate to the new constructor signature instead.', __METHOD__));
        }

        return \$this->root;
    }

    /**
     * Builds the tree.
     *
     * @return NodeInterface
     *
     * @throws \\RuntimeException
     */
    public function buildTree()
    {
        \$this->assertTreeHasRootNode();
        if (null !== \$this->tree) {
            return \$this->tree;
        }

        return \$this->tree = \$this->root->getNode(true);
    }

    public function setPathSeparator(string \$separator)
    {
        \$this->assertTreeHasRootNode();

        // unset last built as changing path separator changes all nodes
        \$this->tree = null;

        \$this->root->setPathSeparator(\$separator);
    }

    /**
     * @throws \\RuntimeException if root node is not defined
     */
    private function assertTreeHasRootNode()
    {
        if (null === \$this->root) {
            throw new TreeWithoutRootNodeException('The configuration tree has no root node.');
        }
    }
}
", "vendor/symfony/config/Definition/Builder/TreeBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/TreeBuilder.php");
    }
}
