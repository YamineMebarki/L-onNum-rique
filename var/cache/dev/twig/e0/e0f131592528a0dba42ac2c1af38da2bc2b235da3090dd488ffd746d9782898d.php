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

/* vendor/symfony/config/Tests/Definition/Builder/ArrayNodeDefinitionTest.php */
class __TwigTemplate_8d447c644cc1e57c0e5bb83666180233ce6aa599093a4a49b59cfc8c2a804e82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/ArrayNodeDefinitionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/ArrayNodeDefinitionTest.php"));

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
use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\ScalarNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException;
use Symfony\\Component\\Config\\Definition\\Processor;

class ArrayNodeDefinitionTest extends TestCase
{
    public function testAppendingSomeNode()
    {
        \$parent = new ArrayNodeDefinition('root');
        \$child = new ScalarNodeDefinition('child');

        \$parent
            ->children()
                ->scalarNode('foo')->end()
                ->scalarNode('bar')->end()
            ->end()
            ->append(\$child);

        \$this->assertCount(3, \$this->getField(\$parent, 'children'));
        \$this->assertContains(\$child, \$this->getField(\$parent, 'children'));
    }

    /**
     * @dataProvider providePrototypeNodeSpecificCalls
     */
    public function testPrototypeNodeSpecificOption(\$method, \$args)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$node = new ArrayNodeDefinition('root');

        \$node->{\$method}(...\$args);

        \$node->getNode();
    }

    public function providePrototypeNodeSpecificCalls()
    {
        return [
            ['defaultValue', [[]]],
            ['addDefaultChildrenIfNoneSet', []],
            ['requiresAtLeastOneElement', []],
            ['cannotBeEmpty', []],
            ['useAttributeAsKey', ['foo']],
        ];
    }

    public function testConcreteNodeSpecificOption()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->addDefaultsIfNotSet()
            ->prototype('array')
        ;
        \$node->getNode();
    }

    public function testPrototypeNodesCantHaveADefaultValueWhenUsingDefaultChildren()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->defaultValue([])
            ->addDefaultChildrenIfNoneSet('foo')
            ->prototype('array')
        ;
        \$node->getNode();
    }

    public function testPrototypedArrayNodeDefaultWhenUsingDefaultChildren()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->addDefaultChildrenIfNoneSet()
            ->prototype('array')
        ;
        \$tree = \$node->getNode();
        \$this->assertEquals([[]], \$tree->getDefaultValue());
    }

    /**
     * @dataProvider providePrototypedArrayNodeDefaults
     */
    public function testPrototypedArrayNodeDefault(\$args, \$shouldThrowWhenUsingAttrAsKey, \$shouldThrowWhenNotUsingAttrAsKey, \$defaults)
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->addDefaultChildrenIfNoneSet(\$args)
            ->prototype('array')
        ;

        try {
            \$tree = \$node->getNode();
            \$this->assertFalse(\$shouldThrowWhenNotUsingAttrAsKey);
            \$this->assertEquals(\$defaults, \$tree->getDefaultValue());
        } catch (InvalidDefinitionException \$e) {
            \$this->assertTrue(\$shouldThrowWhenNotUsingAttrAsKey);
        }

        \$node = new ArrayNodeDefinition('root');
        \$node
            ->useAttributeAsKey('attr')
            ->addDefaultChildrenIfNoneSet(\$args)
            ->prototype('array')
        ;

        try {
            \$tree = \$node->getNode();
            \$this->assertFalse(\$shouldThrowWhenUsingAttrAsKey);
            \$this->assertEquals(\$defaults, \$tree->getDefaultValue());
        } catch (InvalidDefinitionException \$e) {
            \$this->assertTrue(\$shouldThrowWhenUsingAttrAsKey);
        }
    }

    public function providePrototypedArrayNodeDefaults()
    {
        return [
            [null, true, false, [[]]],
            [2, true, false, [[], []]],
            ['2', false, true, ['2' => []]],
            ['foo', false, true, ['foo' => []]],
            [['foo'], false, true, ['foo' => []]],
            [['foo', 'bar'], false, true, ['foo' => [], 'bar' => []]],
        ];
    }

    public function testNestedPrototypedArrayNodes()
    {
        \$nodeDefinition = new ArrayNodeDefinition('root');
        \$nodeDefinition
            ->addDefaultChildrenIfNoneSet()
            ->prototype('array')
                  ->prototype('array')
        ;
        \$node = \$nodeDefinition->getNode();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\PrototypedArrayNode', \$node);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\PrototypedArrayNode', \$node->getPrototype());
    }

    public function testEnabledNodeDefaults()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->canBeEnabled()
            ->children()
                ->scalarNode('foo')->defaultValue('bar')->end()
        ;

        \$this->assertEquals(['enabled' => false, 'foo' => 'bar'], \$node->getNode()->getDefaultValue());
    }

    /**
     * @dataProvider getEnableableNodeFixtures
     */
    public function testTrueEnableEnabledNode(\$expected, \$config, \$message)
    {
        \$processor = new Processor();
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->canBeEnabled()
            ->children()
                ->scalarNode('foo')->defaultValue('bar')->end()
        ;

        \$this->assertEquals(
            \$expected,
            \$processor->process(\$node->getNode(), \$config),
            \$message
        );
    }

    public function testCanBeDisabled()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node->canBeDisabled();

        \$this->assertTrue(\$this->getField(\$node, 'addDefaults'));
        \$this->assertEquals(['enabled' => false], \$this->getField(\$node, 'falseEquivalent'));
        \$this->assertEquals(['enabled' => true], \$this->getField(\$node, 'trueEquivalent'));
        \$this->assertEquals(['enabled' => true], \$this->getField(\$node, 'nullEquivalent'));

        \$nodeChildren = \$this->getField(\$node, 'children');
        \$this->assertArrayHasKey('enabled', \$nodeChildren);

        \$enabledNode = \$nodeChildren['enabled'];
        \$this->assertTrue(\$this->getField(\$enabledNode, 'default'));
        \$this->assertTrue(\$this->getField(\$enabledNode, 'defaultValue'));
    }

    public function testIgnoreExtraKeys()
    {
        \$node = new ArrayNodeDefinition('root');

        \$this->assertFalse(\$this->getField(\$node, 'ignoreExtraKeys'));

        \$result = \$node->ignoreExtraKeys();

        \$this->assertEquals(\$node, \$result);
        \$this->assertTrue(\$this->getField(\$node, 'ignoreExtraKeys'));
    }

    public function testNormalizeKeys()
    {
        \$node = new ArrayNodeDefinition('root');

        \$this->assertTrue(\$this->getField(\$node, 'normalizeKeys'));

        \$result = \$node->normalizeKeys(false);

        \$this->assertEquals(\$node, \$result);
        \$this->assertFalse(\$this->getField(\$node, 'normalizeKeys'));
    }

    public function testUnsetChild()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->children()
                ->scalarNode('value')
                    ->beforeNormalization()
                        ->ifTrue(function (\$value) {
                            return empty(\$value);
                        })
                        ->thenUnset()
                    ->end()
                ->end()
            ->end()
        ;

        \$this->assertSame([], \$node->getNode()->normalize(['value' => null]));
    }

    public function testPrototypeVariable()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('variable'), \$node->variablePrototype());
    }

    public function testPrototypeScalar()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('scalar'), \$node->scalarPrototype());
    }

    public function testPrototypeBoolean()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('boolean'), \$node->booleanPrototype());
    }

    public function testPrototypeInteger()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('integer'), \$node->integerPrototype());
    }

    public function testPrototypeFloat()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('float'), \$node->floatPrototype());
    }

    public function testPrototypeArray()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('array'), \$node->arrayPrototype());
    }

    public function testPrototypeEnum()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('enum'), \$node->enumPrototype());
    }

    public function getEnableableNodeFixtures()
    {
        return [
            [['enabled' => true, 'foo' => 'bar'], [true], 'true enables an enableable node'],
            [['enabled' => true, 'foo' => 'bar'], [null], 'null enables an enableable node'],
            [['enabled' => true, 'foo' => 'bar'], [['enabled' => true]], 'An enableable node can be enabled'],
            [['enabled' => true, 'foo' => 'baz'], [['foo' => 'baz']], 'any configuration enables an enableable node'],
            [['enabled' => false, 'foo' => 'baz'], [['foo' => 'baz', 'enabled' => false]], 'An enableable node can be disabled'],
            [['enabled' => false, 'foo' => 'bar'], [false], 'false disables an enableable node'],
        ];
    }

    public function testRequiresAtLeastOneElement()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->requiresAtLeastOneElement()
            ->integerPrototype();

        \$node->getNode()->finalize([1]);

        \$this->addToAssertionCount(1);
    }

    public function testCannotBeEmpty()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$this->expectExceptionMessage('The path \"root\" should have at least 1 element(s) defined.');
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->cannotBeEmpty()
            ->integerPrototype();

        \$node->getNode()->finalize([]);
    }

    public function testSetDeprecated()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->children()
                ->arrayNode('foo')->setDeprecated('The \"%path%\" node is deprecated.')->end()
            ->end()
        ;
        \$deprecatedNode = \$node->getNode()->getChildren()['foo'];

        \$this->assertTrue(\$deprecatedNode->isDeprecated());
        \$this->assertSame('The \"root.foo\" node is deprecated.', \$deprecatedNode->getDeprecationMessage(\$deprecatedNode->getName(), \$deprecatedNode->getPath()));
    }

    public function testCannotBeEmptyOnConcreteNode()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$this->expectExceptionMessage('->cannotBeEmpty() is not applicable to concrete nodes at path \"root\"');
        \$node = new ArrayNodeDefinition('root');
        \$node->cannotBeEmpty();

        \$node->getNode()->finalize([]);
    }

    protected function getField(\$object, \$field)
    {
        \$reflection = new \\ReflectionProperty(\$object, \$field);
        \$reflection->setAccessible(true);

        return \$reflection->getValue(\$object);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Builder/ArrayNodeDefinitionTest.php";
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
use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\ScalarNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException;
use Symfony\\Component\\Config\\Definition\\Processor;

class ArrayNodeDefinitionTest extends TestCase
{
    public function testAppendingSomeNode()
    {
        \$parent = new ArrayNodeDefinition('root');
        \$child = new ScalarNodeDefinition('child');

        \$parent
            ->children()
                ->scalarNode('foo')->end()
                ->scalarNode('bar')->end()
            ->end()
            ->append(\$child);

        \$this->assertCount(3, \$this->getField(\$parent, 'children'));
        \$this->assertContains(\$child, \$this->getField(\$parent, 'children'));
    }

    /**
     * @dataProvider providePrototypeNodeSpecificCalls
     */
    public function testPrototypeNodeSpecificOption(\$method, \$args)
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$node = new ArrayNodeDefinition('root');

        \$node->{\$method}(...\$args);

        \$node->getNode();
    }

    public function providePrototypeNodeSpecificCalls()
    {
        return [
            ['defaultValue', [[]]],
            ['addDefaultChildrenIfNoneSet', []],
            ['requiresAtLeastOneElement', []],
            ['cannotBeEmpty', []],
            ['useAttributeAsKey', ['foo']],
        ];
    }

    public function testConcreteNodeSpecificOption()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->addDefaultsIfNotSet()
            ->prototype('array')
        ;
        \$node->getNode();
    }

    public function testPrototypeNodesCantHaveADefaultValueWhenUsingDefaultChildren()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->defaultValue([])
            ->addDefaultChildrenIfNoneSet('foo')
            ->prototype('array')
        ;
        \$node->getNode();
    }

    public function testPrototypedArrayNodeDefaultWhenUsingDefaultChildren()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->addDefaultChildrenIfNoneSet()
            ->prototype('array')
        ;
        \$tree = \$node->getNode();
        \$this->assertEquals([[]], \$tree->getDefaultValue());
    }

    /**
     * @dataProvider providePrototypedArrayNodeDefaults
     */
    public function testPrototypedArrayNodeDefault(\$args, \$shouldThrowWhenUsingAttrAsKey, \$shouldThrowWhenNotUsingAttrAsKey, \$defaults)
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->addDefaultChildrenIfNoneSet(\$args)
            ->prototype('array')
        ;

        try {
            \$tree = \$node->getNode();
            \$this->assertFalse(\$shouldThrowWhenNotUsingAttrAsKey);
            \$this->assertEquals(\$defaults, \$tree->getDefaultValue());
        } catch (InvalidDefinitionException \$e) {
            \$this->assertTrue(\$shouldThrowWhenNotUsingAttrAsKey);
        }

        \$node = new ArrayNodeDefinition('root');
        \$node
            ->useAttributeAsKey('attr')
            ->addDefaultChildrenIfNoneSet(\$args)
            ->prototype('array')
        ;

        try {
            \$tree = \$node->getNode();
            \$this->assertFalse(\$shouldThrowWhenUsingAttrAsKey);
            \$this->assertEquals(\$defaults, \$tree->getDefaultValue());
        } catch (InvalidDefinitionException \$e) {
            \$this->assertTrue(\$shouldThrowWhenUsingAttrAsKey);
        }
    }

    public function providePrototypedArrayNodeDefaults()
    {
        return [
            [null, true, false, [[]]],
            [2, true, false, [[], []]],
            ['2', false, true, ['2' => []]],
            ['foo', false, true, ['foo' => []]],
            [['foo'], false, true, ['foo' => []]],
            [['foo', 'bar'], false, true, ['foo' => [], 'bar' => []]],
        ];
    }

    public function testNestedPrototypedArrayNodes()
    {
        \$nodeDefinition = new ArrayNodeDefinition('root');
        \$nodeDefinition
            ->addDefaultChildrenIfNoneSet()
            ->prototype('array')
                  ->prototype('array')
        ;
        \$node = \$nodeDefinition->getNode();

        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\PrototypedArrayNode', \$node);
        \$this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\PrototypedArrayNode', \$node->getPrototype());
    }

    public function testEnabledNodeDefaults()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->canBeEnabled()
            ->children()
                ->scalarNode('foo')->defaultValue('bar')->end()
        ;

        \$this->assertEquals(['enabled' => false, 'foo' => 'bar'], \$node->getNode()->getDefaultValue());
    }

    /**
     * @dataProvider getEnableableNodeFixtures
     */
    public function testTrueEnableEnabledNode(\$expected, \$config, \$message)
    {
        \$processor = new Processor();
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->canBeEnabled()
            ->children()
                ->scalarNode('foo')->defaultValue('bar')->end()
        ;

        \$this->assertEquals(
            \$expected,
            \$processor->process(\$node->getNode(), \$config),
            \$message
        );
    }

    public function testCanBeDisabled()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node->canBeDisabled();

        \$this->assertTrue(\$this->getField(\$node, 'addDefaults'));
        \$this->assertEquals(['enabled' => false], \$this->getField(\$node, 'falseEquivalent'));
        \$this->assertEquals(['enabled' => true], \$this->getField(\$node, 'trueEquivalent'));
        \$this->assertEquals(['enabled' => true], \$this->getField(\$node, 'nullEquivalent'));

        \$nodeChildren = \$this->getField(\$node, 'children');
        \$this->assertArrayHasKey('enabled', \$nodeChildren);

        \$enabledNode = \$nodeChildren['enabled'];
        \$this->assertTrue(\$this->getField(\$enabledNode, 'default'));
        \$this->assertTrue(\$this->getField(\$enabledNode, 'defaultValue'));
    }

    public function testIgnoreExtraKeys()
    {
        \$node = new ArrayNodeDefinition('root');

        \$this->assertFalse(\$this->getField(\$node, 'ignoreExtraKeys'));

        \$result = \$node->ignoreExtraKeys();

        \$this->assertEquals(\$node, \$result);
        \$this->assertTrue(\$this->getField(\$node, 'ignoreExtraKeys'));
    }

    public function testNormalizeKeys()
    {
        \$node = new ArrayNodeDefinition('root');

        \$this->assertTrue(\$this->getField(\$node, 'normalizeKeys'));

        \$result = \$node->normalizeKeys(false);

        \$this->assertEquals(\$node, \$result);
        \$this->assertFalse(\$this->getField(\$node, 'normalizeKeys'));
    }

    public function testUnsetChild()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->children()
                ->scalarNode('value')
                    ->beforeNormalization()
                        ->ifTrue(function (\$value) {
                            return empty(\$value);
                        })
                        ->thenUnset()
                    ->end()
                ->end()
            ->end()
        ;

        \$this->assertSame([], \$node->getNode()->normalize(['value' => null]));
    }

    public function testPrototypeVariable()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('variable'), \$node->variablePrototype());
    }

    public function testPrototypeScalar()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('scalar'), \$node->scalarPrototype());
    }

    public function testPrototypeBoolean()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('boolean'), \$node->booleanPrototype());
    }

    public function testPrototypeInteger()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('integer'), \$node->integerPrototype());
    }

    public function testPrototypeFloat()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('float'), \$node->floatPrototype());
    }

    public function testPrototypeArray()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('array'), \$node->arrayPrototype());
    }

    public function testPrototypeEnum()
    {
        \$node = new ArrayNodeDefinition('root');
        \$this->assertEquals(\$node->prototype('enum'), \$node->enumPrototype());
    }

    public function getEnableableNodeFixtures()
    {
        return [
            [['enabled' => true, 'foo' => 'bar'], [true], 'true enables an enableable node'],
            [['enabled' => true, 'foo' => 'bar'], [null], 'null enables an enableable node'],
            [['enabled' => true, 'foo' => 'bar'], [['enabled' => true]], 'An enableable node can be enabled'],
            [['enabled' => true, 'foo' => 'baz'], [['foo' => 'baz']], 'any configuration enables an enableable node'],
            [['enabled' => false, 'foo' => 'baz'], [['foo' => 'baz', 'enabled' => false]], 'An enableable node can be disabled'],
            [['enabled' => false, 'foo' => 'bar'], [false], 'false disables an enableable node'],
        ];
    }

    public function testRequiresAtLeastOneElement()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->requiresAtLeastOneElement()
            ->integerPrototype();

        \$node->getNode()->finalize([1]);

        \$this->addToAssertionCount(1);
    }

    public function testCannotBeEmpty()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$this->expectExceptionMessage('The path \"root\" should have at least 1 element(s) defined.');
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->cannotBeEmpty()
            ->integerPrototype();

        \$node->getNode()->finalize([]);
    }

    public function testSetDeprecated()
    {
        \$node = new ArrayNodeDefinition('root');
        \$node
            ->children()
                ->arrayNode('foo')->setDeprecated('The \"%path%\" node is deprecated.')->end()
            ->end()
        ;
        \$deprecatedNode = \$node->getNode()->getChildren()['foo'];

        \$this->assertTrue(\$deprecatedNode->isDeprecated());
        \$this->assertSame('The \"root.foo\" node is deprecated.', \$deprecatedNode->getDeprecationMessage(\$deprecatedNode->getName(), \$deprecatedNode->getPath()));
    }

    public function testCannotBeEmptyOnConcreteNode()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException');
        \$this->expectExceptionMessage('->cannotBeEmpty() is not applicable to concrete nodes at path \"root\"');
        \$node = new ArrayNodeDefinition('root');
        \$node->cannotBeEmpty();

        \$node->getNode()->finalize([]);
    }

    protected function getField(\$object, \$field)
    {
        \$reflection = new \\ReflectionProperty(\$object, \$field);
        \$reflection->setAccessible(true);

        return \$reflection->getValue(\$object);
    }
}
", "vendor/symfony/config/Tests/Definition/Builder/ArrayNodeDefinitionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Builder/ArrayNodeDefinitionTest.php");
    }
}
