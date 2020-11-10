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

/* vendor/symfony/config/Tests/Definition/Builder/TreeBuilderTest.php */
class __TwigTemplate_4ecbd5e7170dc585886a0534919e0b5e05a423eb33aaef5aebe181b686f8dabe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/TreeBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/TreeBuilderTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Builder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\NodeBuilder as CustomNodeBuilder;

class TreeBuilderTest extends TestCase
{
    public function testUsingACustomNodeBuilder()
    {
        \$builder = new TreeBuilder('custom', 'array', new CustomNodeBuilder());

        \$nodeBuilder = \$builder->getRootNode()->children();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\NodeBuilder', \$nodeBuilder);

        \$nodeBuilder = \$nodeBuilder->arrayNode('deeper')->children();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\NodeBuilder', \$nodeBuilder);
    }

    public function testOverrideABuiltInNodeType()
    {
        \$builder = new TreeBuilder('override', 'array', new CustomNodeBuilder());

        \$definition = \$builder->getRootNode()->children()->variableNode('variable');

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\VariableNodeDefinition', \$definition);
    }

    public function testAddANodeType()
    {
        \$builder = new TreeBuilder('override', 'array', new CustomNodeBuilder());

        \$definition = \$builder->getRootNode()->children()->barNode('variable');

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\BarNodeDefinition', \$definition);
    }

    public function testCreateABuiltInNodeTypeWithACustomNodeBuilder()
    {
        \$builder = new TreeBuilder('builtin', 'array', new CustomNodeBuilder());

        \$definition = \$builder->getRootNode()->children()->booleanNode('boolean');

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition', \$definition);
    }

    public function testPrototypedArrayNodeUseTheCustomNodeBuilder()
    {
        \$builder = new TreeBuilder('override', 'array', new CustomNodeBuilder());

        \$root = \$builder->getRootNode();
        \$root->prototype('bar')->end();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\BarNode', \$root->getNode(true)->getPrototype());
    }

    public function testAnExtendedNodeBuilderGetsPropagatedToTheChildren()
    {
        \$builder = new TreeBuilder('propagation');

        \$builder->getRootNode()
            ->children()
                ->setNodeClass('extended', 'Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition')
                ->node('foo', 'extended')->end()
                ->arrayNode('child')
                    ->children()
                        ->node('foo', 'extended')
                    ->end()
                ->end()
            ->end()
        ->end();

        \$node = \$builder->buildTree();
        \$children = \$node->getChildren();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BooleanNode', \$children['foo']);

        \$childChildren = \$children['child']->getChildren();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BooleanNode', \$childChildren['foo']);
    }

    public function testDefinitionInfoGetsTransferredToNode()
    {
        \$builder = new TreeBuilder('test');

        \$builder->getRootNode()->info('root info')
            ->children()
                ->node('child', 'variable')->info('child info')->defaultValue('default')
            ->end()
        ->end();

        \$tree = \$builder->buildTree();
        \$children = \$tree->getChildren();

        \$this->assertEquals('root info', \$tree->getInfo());
        \$this->assertEquals('child info', \$children['child']->getInfo());
    }

    public function testDefinitionExampleGetsTransferredToNode()
    {
        \$builder = new TreeBuilder('test');

        \$builder->getRootNode()
            ->example(['key' => 'value'])
            ->children()
                ->node('child', 'variable')->info('child info')->defaultValue('default')->example('example')
            ->end()
        ->end();

        \$tree = \$builder->buildTree();
        \$children = \$tree->getChildren();

        \$this->assertIsArray(\$tree->getExample());
        \$this->assertEquals('example', \$children['child']->getExample());
    }

    public function testDefaultPathSeparatorIsDot()
    {
        \$builder = new TreeBuilder('propagation');

        \$builder->getRootNode()
            ->children()
                ->node('foo', 'variable')->end()
                ->arrayNode('child')
                    ->children()
                        ->node('foo', 'variable')
                    ->end()
                ->end()
            ->end()
        ->end();

        \$node = \$builder->buildTree();
        \$children = \$node->getChildren();

        \$this->assertArrayHasKey('foo', \$children);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$children['foo']);
        \$this->assertSame('propagation.foo', \$children['foo']->getPath());

        \$this->assertArrayHasKey('child', \$children);
        \$childChildren = \$children['child']->getChildren();

        \$this->assertArrayHasKey('foo', \$childChildren);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$childChildren['foo']);
        \$this->assertSame('propagation.child.foo', \$childChildren['foo']->getPath());
    }

    public function testPathSeparatorIsPropagatedToChildren()
    {
        \$builder = new TreeBuilder('propagation');

        \$builder->getRootNode()
            ->children()
                ->node('foo', 'variable')->end()
                ->arrayNode('child')
                    ->children()
                        ->node('foo', 'variable')
                    ->end()
                ->end()
            ->end()
        ->end();

        \$builder->setPathSeparator('/');
        \$node = \$builder->buildTree();
        \$children = \$node->getChildren();

        \$this->assertArrayHasKey('foo', \$children);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$children['foo']);
        \$this->assertSame('propagation/foo', \$children['foo']->getPath());

        \$this->assertArrayHasKey('child', \$children);
        \$childChildren = \$children['child']->getChildren();

        \$this->assertArrayHasKey('foo', \$childChildren);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$childChildren['foo']);
        \$this->assertSame('propagation/child/foo', \$childChildren['foo']->getPath());
    }

    /**
     * @group legacy
     * @expectedDeprecation A tree builder without a root node is deprecated since Symfony 4.2 and will not be supported anymore in 5.0.
     */
    public function testInitializingTreeBuildersWithoutRootNode()
    {
        new TreeBuilder();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder::root()\" method called for the \"foo\" configuration is deprecated since Symfony 4.3, pass the root name to the constructor instead.
     */
    public function testRoot()
    {
        \$builder = new TreeBuilder('foo');
        \$builder->root('foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Builder/TreeBuilderTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Builder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\NodeBuilder as CustomNodeBuilder;

class TreeBuilderTest extends TestCase
{
    public function testUsingACustomNodeBuilder()
    {
        \$builder = new TreeBuilder('custom', 'array', new CustomNodeBuilder());

        \$nodeBuilder = \$builder->getRootNode()->children();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\NodeBuilder', \$nodeBuilder);

        \$nodeBuilder = \$nodeBuilder->arrayNode('deeper')->children();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\NodeBuilder', \$nodeBuilder);
    }

    public function testOverrideABuiltInNodeType()
    {
        \$builder = new TreeBuilder('override', 'array', new CustomNodeBuilder());

        \$definition = \$builder->getRootNode()->children()->variableNode('variable');

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\VariableNodeDefinition', \$definition);
    }

    public function testAddANodeType()
    {
        \$builder = new TreeBuilder('override', 'array', new CustomNodeBuilder());

        \$definition = \$builder->getRootNode()->children()->barNode('variable');

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\Builder\\BarNodeDefinition', \$definition);
    }

    public function testCreateABuiltInNodeTypeWithACustomNodeBuilder()
    {
        \$builder = new TreeBuilder('builtin', 'array', new CustomNodeBuilder());

        \$definition = \$builder->getRootNode()->children()->booleanNode('boolean');

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition', \$definition);
    }

    public function testPrototypedArrayNodeUseTheCustomNodeBuilder()
    {
        \$builder = new TreeBuilder('override', 'array', new CustomNodeBuilder());

        \$root = \$builder->getRootNode();
        \$root->prototype('bar')->end();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Tests\\Fixtures\\BarNode', \$root->getNode(true)->getPrototype());
    }

    public function testAnExtendedNodeBuilderGetsPropagatedToTheChildren()
    {
        \$builder = new TreeBuilder('propagation');

        \$builder->getRootNode()
            ->children()
                ->setNodeClass('extended', 'Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition')
                ->node('foo', 'extended')->end()
                ->arrayNode('child')
                    ->children()
                        ->node('foo', 'extended')
                    ->end()
                ->end()
            ->end()
        ->end();

        \$node = \$builder->buildTree();
        \$children = \$node->getChildren();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BooleanNode', \$children['foo']);

        \$childChildren = \$children['child']->getChildren();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BooleanNode', \$childChildren['foo']);
    }

    public function testDefinitionInfoGetsTransferredToNode()
    {
        \$builder = new TreeBuilder('test');

        \$builder->getRootNode()->info('root info')
            ->children()
                ->node('child', 'variable')->info('child info')->defaultValue('default')
            ->end()
        ->end();

        \$tree = \$builder->buildTree();
        \$children = \$tree->getChildren();

        \$this->assertEquals('root info', \$tree->getInfo());
        \$this->assertEquals('child info', \$children['child']->getInfo());
    }

    public function testDefinitionExampleGetsTransferredToNode()
    {
        \$builder = new TreeBuilder('test');

        \$builder->getRootNode()
            ->example(['key' => 'value'])
            ->children()
                ->node('child', 'variable')->info('child info')->defaultValue('default')->example('example')
            ->end()
        ->end();

        \$tree = \$builder->buildTree();
        \$children = \$tree->getChildren();

        \$this->assertIsArray(\$tree->getExample());
        \$this->assertEquals('example', \$children['child']->getExample());
    }

    public function testDefaultPathSeparatorIsDot()
    {
        \$builder = new TreeBuilder('propagation');

        \$builder->getRootNode()
            ->children()
                ->node('foo', 'variable')->end()
                ->arrayNode('child')
                    ->children()
                        ->node('foo', 'variable')
                    ->end()
                ->end()
            ->end()
        ->end();

        \$node = \$builder->buildTree();
        \$children = \$node->getChildren();

        \$this->assertArrayHasKey('foo', \$children);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$children['foo']);
        \$this->assertSame('propagation.foo', \$children['foo']->getPath());

        \$this->assertArrayHasKey('child', \$children);
        \$childChildren = \$children['child']->getChildren();

        \$this->assertArrayHasKey('foo', \$childChildren);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$childChildren['foo']);
        \$this->assertSame('propagation.child.foo', \$childChildren['foo']->getPath());
    }

    public function testPathSeparatorIsPropagatedToChildren()
    {
        \$builder = new TreeBuilder('propagation');

        \$builder->getRootNode()
            ->children()
                ->node('foo', 'variable')->end()
                ->arrayNode('child')
                    ->children()
                        ->node('foo', 'variable')
                    ->end()
                ->end()
            ->end()
        ->end();

        \$builder->setPathSeparator('/');
        \$node = \$builder->buildTree();
        \$children = \$node->getChildren();

        \$this->assertArrayHasKey('foo', \$children);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$children['foo']);
        \$this->assertSame('propagation/foo', \$children['foo']->getPath());

        \$this->assertArrayHasKey('child', \$children);
        \$childChildren = \$children['child']->getChildren();

        \$this->assertArrayHasKey('foo', \$childChildren);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\BaseNode', \$childChildren['foo']);
        \$this->assertSame('propagation/child/foo', \$childChildren['foo']->getPath());
    }

    /**
     * @group legacy
     * @expectedDeprecation A tree builder without a root node is deprecated since Symfony 4.2 and will not be supported anymore in 5.0.
     */
    public function testInitializingTreeBuildersWithoutRootNode()
    {
        new TreeBuilder();
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder::root()\" method called for the \"foo\" configuration is deprecated since Symfony 4.3, pass the root name to the constructor instead.
     */
    public function testRoot()
    {
        \$builder = new TreeBuilder('foo');
        \$builder->root('foo');
    }
}
", "vendor/symfony/config/Tests/Definition/Builder/TreeBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Builder/TreeBuilderTest.php");
    }
}
