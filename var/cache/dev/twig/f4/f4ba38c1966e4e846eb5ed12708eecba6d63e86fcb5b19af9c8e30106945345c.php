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

/* vendor/symfony/config/Definition/Builder/NodeBuilder.php */
class __TwigTemplate_8f35d45d3a5b5139de9cf5cb425faa0e5f3bd376a5ff0522c77792674b1fcf10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/NodeBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Definition/Builder/NodeBuilder.php"));

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

/**
 * This class provides a fluent interface for building a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class NodeBuilder implements NodeParentInterface
{
    protected \$parent;
    protected \$nodeMapping;

    public function __construct()
    {
        \$this->nodeMapping = [
            'variable' => __NAMESPACE__.'\\\\VariableNodeDefinition',
            'scalar' => __NAMESPACE__.'\\\\ScalarNodeDefinition',
            'boolean' => __NAMESPACE__.'\\\\BooleanNodeDefinition',
            'integer' => __NAMESPACE__.'\\\\IntegerNodeDefinition',
            'float' => __NAMESPACE__.'\\\\FloatNodeDefinition',
            'array' => __NAMESPACE__.'\\\\ArrayNodeDefinition',
            'enum' => __NAMESPACE__.'\\\\EnumNodeDefinition',
        ];
    }

    /**
     * Set the parent node.
     *
     * @return \$this
     */
    public function setParent(ParentNodeDefinitionInterface \$parent = null)
    {
        \$this->parent = \$parent;

        return \$this;
    }

    /**
     * Creates a child array node.
     *
     * @param string \$name The name of the node
     *
     * @return ArrayNodeDefinition The child node
     */
    public function arrayNode(\$name)
    {
        return \$this->node(\$name, 'array');
    }

    /**
     * Creates a child scalar node.
     *
     * @param string \$name The name of the node
     *
     * @return ScalarNodeDefinition The child node
     */
    public function scalarNode(\$name)
    {
        return \$this->node(\$name, 'scalar');
    }

    /**
     * Creates a child Boolean node.
     *
     * @param string \$name The name of the node
     *
     * @return BooleanNodeDefinition The child node
     */
    public function booleanNode(\$name)
    {
        return \$this->node(\$name, 'boolean');
    }

    /**
     * Creates a child integer node.
     *
     * @param string \$name The name of the node
     *
     * @return IntegerNodeDefinition The child node
     */
    public function integerNode(\$name)
    {
        return \$this->node(\$name, 'integer');
    }

    /**
     * Creates a child float node.
     *
     * @param string \$name The name of the node
     *
     * @return FloatNodeDefinition The child node
     */
    public function floatNode(\$name)
    {
        return \$this->node(\$name, 'float');
    }

    /**
     * Creates a child EnumNode.
     *
     * @param string \$name
     *
     * @return EnumNodeDefinition
     */
    public function enumNode(\$name)
    {
        return \$this->node(\$name, 'enum');
    }

    /**
     * Creates a child variable node.
     *
     * @param string \$name The name of the node
     *
     * @return VariableNodeDefinition The builder of the child node
     */
    public function variableNode(\$name)
    {
        return \$this->node(\$name, 'variable');
    }

    /**
     * Returns the parent node.
     *
     * @return NodeDefinition&ParentNodeDefinitionInterface The parent node
     */
    public function end()
    {
        return \$this->parent;
    }

    /**
     * Creates a child node.
     *
     * @param string|null \$name The name of the node
     * @param string      \$type The type of the node
     *
     * @return NodeDefinition The child node
     *
     * @throws \\RuntimeException When the node type is not registered
     * @throws \\RuntimeException When the node class is not found
     */
    public function node(\$name, \$type)
    {
        \$class = \$this->getNodeClass(\$type);

        \$node = new \$class(\$name);

        \$this->append(\$node);

        return \$node;
    }

    /**
     * Appends a node definition.
     *
     * Usage:
     *
     *     \$node = new ArrayNodeDefinition('name')
     *         ->children()
     *             ->scalarNode('foo')->end()
     *             ->scalarNode('baz')->end()
     *             ->append(\$this->getBarNodeDefinition())
     *         ->end()
     *     ;
     *
     * @return \$this
     */
    public function append(NodeDefinition \$node)
    {
        if (\$node instanceof BuilderAwareInterface) {
            \$builder = clone \$this;
            \$builder->setParent(null);
            \$node->setBuilder(\$builder);
        }

        if (null !== \$this->parent) {
            \$this->parent->append(\$node);
            // Make this builder the node parent to allow for a fluid interface
            \$node->setParent(\$this);
        }

        return \$this;
    }

    /**
     * Adds or overrides a node Type.
     *
     * @param string \$type  The name of the type
     * @param string \$class The fully qualified name the node definition class
     *
     * @return \$this
     */
    public function setNodeClass(\$type, \$class)
    {
        \$this->nodeMapping[strtolower(\$type)] = \$class;

        return \$this;
    }

    /**
     * Returns the class name of the node definition.
     *
     * @param string \$type The node type
     *
     * @return string The node definition class name
     *
     * @throws \\RuntimeException When the node type is not registered
     * @throws \\RuntimeException When the node class is not found
     */
    protected function getNodeClass(\$type)
    {
        \$type = strtolower(\$type);

        if (!isset(\$this->nodeMapping[\$type])) {
            throw new \\RuntimeException(sprintf('The node type \"%s\" is not registered.', \$type));
        }

        \$class = \$this->nodeMapping[\$type];

        if (!class_exists(\$class)) {
            throw new \\RuntimeException(sprintf('The node class \"%s\" does not exist.', \$class));
        }

        return \$class;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Definition/Builder/NodeBuilder.php";
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

/**
 * This class provides a fluent interface for building a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class NodeBuilder implements NodeParentInterface
{
    protected \$parent;
    protected \$nodeMapping;

    public function __construct()
    {
        \$this->nodeMapping = [
            'variable' => __NAMESPACE__.'\\\\VariableNodeDefinition',
            'scalar' => __NAMESPACE__.'\\\\ScalarNodeDefinition',
            'boolean' => __NAMESPACE__.'\\\\BooleanNodeDefinition',
            'integer' => __NAMESPACE__.'\\\\IntegerNodeDefinition',
            'float' => __NAMESPACE__.'\\\\FloatNodeDefinition',
            'array' => __NAMESPACE__.'\\\\ArrayNodeDefinition',
            'enum' => __NAMESPACE__.'\\\\EnumNodeDefinition',
        ];
    }

    /**
     * Set the parent node.
     *
     * @return \$this
     */
    public function setParent(ParentNodeDefinitionInterface \$parent = null)
    {
        \$this->parent = \$parent;

        return \$this;
    }

    /**
     * Creates a child array node.
     *
     * @param string \$name The name of the node
     *
     * @return ArrayNodeDefinition The child node
     */
    public function arrayNode(\$name)
    {
        return \$this->node(\$name, 'array');
    }

    /**
     * Creates a child scalar node.
     *
     * @param string \$name The name of the node
     *
     * @return ScalarNodeDefinition The child node
     */
    public function scalarNode(\$name)
    {
        return \$this->node(\$name, 'scalar');
    }

    /**
     * Creates a child Boolean node.
     *
     * @param string \$name The name of the node
     *
     * @return BooleanNodeDefinition The child node
     */
    public function booleanNode(\$name)
    {
        return \$this->node(\$name, 'boolean');
    }

    /**
     * Creates a child integer node.
     *
     * @param string \$name The name of the node
     *
     * @return IntegerNodeDefinition The child node
     */
    public function integerNode(\$name)
    {
        return \$this->node(\$name, 'integer');
    }

    /**
     * Creates a child float node.
     *
     * @param string \$name The name of the node
     *
     * @return FloatNodeDefinition The child node
     */
    public function floatNode(\$name)
    {
        return \$this->node(\$name, 'float');
    }

    /**
     * Creates a child EnumNode.
     *
     * @param string \$name
     *
     * @return EnumNodeDefinition
     */
    public function enumNode(\$name)
    {
        return \$this->node(\$name, 'enum');
    }

    /**
     * Creates a child variable node.
     *
     * @param string \$name The name of the node
     *
     * @return VariableNodeDefinition The builder of the child node
     */
    public function variableNode(\$name)
    {
        return \$this->node(\$name, 'variable');
    }

    /**
     * Returns the parent node.
     *
     * @return NodeDefinition&ParentNodeDefinitionInterface The parent node
     */
    public function end()
    {
        return \$this->parent;
    }

    /**
     * Creates a child node.
     *
     * @param string|null \$name The name of the node
     * @param string      \$type The type of the node
     *
     * @return NodeDefinition The child node
     *
     * @throws \\RuntimeException When the node type is not registered
     * @throws \\RuntimeException When the node class is not found
     */
    public function node(\$name, \$type)
    {
        \$class = \$this->getNodeClass(\$type);

        \$node = new \$class(\$name);

        \$this->append(\$node);

        return \$node;
    }

    /**
     * Appends a node definition.
     *
     * Usage:
     *
     *     \$node = new ArrayNodeDefinition('name')
     *         ->children()
     *             ->scalarNode('foo')->end()
     *             ->scalarNode('baz')->end()
     *             ->append(\$this->getBarNodeDefinition())
     *         ->end()
     *     ;
     *
     * @return \$this
     */
    public function append(NodeDefinition \$node)
    {
        if (\$node instanceof BuilderAwareInterface) {
            \$builder = clone \$this;
            \$builder->setParent(null);
            \$node->setBuilder(\$builder);
        }

        if (null !== \$this->parent) {
            \$this->parent->append(\$node);
            // Make this builder the node parent to allow for a fluid interface
            \$node->setParent(\$this);
        }

        return \$this;
    }

    /**
     * Adds or overrides a node Type.
     *
     * @param string \$type  The name of the type
     * @param string \$class The fully qualified name the node definition class
     *
     * @return \$this
     */
    public function setNodeClass(\$type, \$class)
    {
        \$this->nodeMapping[strtolower(\$type)] = \$class;

        return \$this;
    }

    /**
     * Returns the class name of the node definition.
     *
     * @param string \$type The node type
     *
     * @return string The node definition class name
     *
     * @throws \\RuntimeException When the node type is not registered
     * @throws \\RuntimeException When the node class is not found
     */
    protected function getNodeClass(\$type)
    {
        \$type = strtolower(\$type);

        if (!isset(\$this->nodeMapping[\$type])) {
            throw new \\RuntimeException(sprintf('The node type \"%s\" is not registered.', \$type));
        }

        \$class = \$this->nodeMapping[\$type];

        if (!class_exists(\$class)) {
            throw new \\RuntimeException(sprintf('The node class \"%s\" does not exist.', \$class));
        }

        return \$class;
    }
}
", "vendor/symfony/config/Definition/Builder/NodeBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Definition/Builder/NodeBuilder.php");
    }
}
