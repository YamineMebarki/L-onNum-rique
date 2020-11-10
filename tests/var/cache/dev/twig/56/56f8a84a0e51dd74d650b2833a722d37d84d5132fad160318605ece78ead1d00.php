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

/* vendor/symfony/config/Tests/Definition/Builder/ExprBuilderTest.php */
class __TwigTemplate_6f58bad7799d75107ad1ca1d432704e5d5db790258bf1d3a08b0846ad6c295cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/ExprBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/ExprBuilderTest.php"));

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

class ExprBuilderTest extends TestCase
{
    public function testAlwaysExpression()
    {
        \$test = \$this->getTestBuilder()
            ->always(\$this->returnClosure('new_value'))
        ->end();

        \$this->assertFinalizedValueIs('new_value', \$test);
    }

    public function testIfTrueExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifTrue()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => true]);

        \$test = \$this->getTestBuilder()
            ->ifTrue(function (\$v) { return true; })
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifTrue(function (\$v) { return false; })
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfStringExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifString()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs(45, \$test, ['key' => 45]);
    }

    public function testIfNullExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifNull()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => null]);

        \$test = \$this->getTestBuilder()
            ->ifNull()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfEmptyExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifEmpty()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => []]);

        \$test = \$this->getTestBuilder()
            ->ifEmpty()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifArray()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => []]);

        \$test = \$this->getTestBuilder()
            ->ifArray()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfInArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifInArray(['foo', 'bar', 'value'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifInArray(['foo', 'bar'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfNotInArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifNotInArray(['foo', 'bar'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifNotInArray(['foo', 'bar', 'value_from_config'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);
    }

    public function testThenEmptyArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->thenEmptyArray()
        ->end();
        \$this->assertFinalizedValueIs([], \$test);
    }

    /**
     * @dataProvider castToArrayValues
     */
    public function testcastToArrayExpression(\$configValue, \$expectedValue)
    {
        \$test = \$this->getTestBuilder()
            ->castToArray()
        ->end();
        \$this->assertFinalizedValueIs(\$expectedValue, \$test, ['key' => \$configValue]);
    }

    public function castToArrayValues()
    {
        yield ['value', ['value']];
        yield [-3.14, [-3.14]];
        yield [null, [null]];
        yield [['value'], ['value']];
    }

    public function testThenInvalid()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->thenInvalid('Invalid value')
        ->end();
        \$this->finalizeTestBuilder(\$test);
    }

    public function testThenUnsetExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->thenUnset()
        ->end();
        \$this->assertEquals([], \$this->finalizeTestBuilder(\$test));
    }

    public function testEndIfPartNotSpecified()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('You must specify an if part.');
        \$this->getTestBuilder()->end();
    }

    public function testEndThenPartNotSpecified()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('You must specify a then part.');
        \$builder = \$this->getTestBuilder();
        \$builder->ifPart = 'test';
        \$builder->end();
    }

    /**
     * Create a test treebuilder with a variable node, and init the validation.
     *
     * @return TreeBuilder
     */
    protected function getTestBuilder()
    {
        \$builder = new TreeBuilder('test');

        return \$builder
            ->getRootNode()
            ->children()
            ->variableNode('key')
            ->validate()
        ;
    }

    /**
     * Close the validation process and finalize with the given config.
     *
     * @param TreeBuilder \$testBuilder The tree builder to finalize
     * @param array       \$config      The config you want to use for the finalization, if nothing provided
     *                                 a simple ['key'=>'value'] will be used
     *
     * @return array The finalized config values
     */
    protected function finalizeTestBuilder(\$testBuilder, \$config = null)
    {
        return \$testBuilder
            ->end()
            ->end()
            ->end()
            ->buildTree()
            ->finalize(null === \$config ? ['key' => 'value'] : \$config)
        ;
    }

    /**
     * Return a closure that will return the given value.
     *
     * @param mixed \$val The value that the closure must return
     *
     * @return \\Closure
     */
    protected function returnClosure(\$val)
    {
        return function (\$v) use (\$val) {
            return \$val;
        };
    }

    /**
     * Assert that the given test builder, will return the given value.
     *
     * @param mixed       \$value       The value to test
     * @param TreeBuilder \$treeBuilder The tree builder to finalize
     * @param mixed       \$config      The config values that new to be finalized
     */
    protected function assertFinalizedValueIs(\$value, \$treeBuilder, \$config = null)
    {
        \$this->assertEquals(['key' => \$value], \$this->finalizeTestBuilder(\$treeBuilder, \$config));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Builder/ExprBuilderTest.php";
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

class ExprBuilderTest extends TestCase
{
    public function testAlwaysExpression()
    {
        \$test = \$this->getTestBuilder()
            ->always(\$this->returnClosure('new_value'))
        ->end();

        \$this->assertFinalizedValueIs('new_value', \$test);
    }

    public function testIfTrueExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifTrue()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => true]);

        \$test = \$this->getTestBuilder()
            ->ifTrue(function (\$v) { return true; })
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifTrue(function (\$v) { return false; })
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfStringExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifString()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs(45, \$test, ['key' => 45]);
    }

    public function testIfNullExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifNull()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => null]);

        \$test = \$this->getTestBuilder()
            ->ifNull()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfEmptyExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifEmpty()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => []]);

        \$test = \$this->getTestBuilder()
            ->ifEmpty()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifArray()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test, ['key' => []]);

        \$test = \$this->getTestBuilder()
            ->ifArray()
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfInArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifInArray(['foo', 'bar', 'value'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifInArray(['foo', 'bar'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('value', \$test);
    }

    public function testIfNotInArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifNotInArray(['foo', 'bar'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);

        \$test = \$this->getTestBuilder()
            ->ifNotInArray(['foo', 'bar', 'value_from_config'])
            ->then(\$this->returnClosure('new_value'))
        ->end();
        \$this->assertFinalizedValueIs('new_value', \$test);
    }

    public function testThenEmptyArrayExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->thenEmptyArray()
        ->end();
        \$this->assertFinalizedValueIs([], \$test);
    }

    /**
     * @dataProvider castToArrayValues
     */
    public function testcastToArrayExpression(\$configValue, \$expectedValue)
    {
        \$test = \$this->getTestBuilder()
            ->castToArray()
        ->end();
        \$this->assertFinalizedValueIs(\$expectedValue, \$test, ['key' => \$configValue]);
    }

    public function castToArrayValues()
    {
        yield ['value', ['value']];
        yield [-3.14, [-3.14]];
        yield [null, [null]];
        yield [['value'], ['value']];
    }

    public function testThenInvalid()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->thenInvalid('Invalid value')
        ->end();
        \$this->finalizeTestBuilder(\$test);
    }

    public function testThenUnsetExpression()
    {
        \$test = \$this->getTestBuilder()
            ->ifString()
            ->thenUnset()
        ->end();
        \$this->assertEquals([], \$this->finalizeTestBuilder(\$test));
    }

    public function testEndIfPartNotSpecified()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('You must specify an if part.');
        \$this->getTestBuilder()->end();
    }

    public function testEndThenPartNotSpecified()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('You must specify a then part.');
        \$builder = \$this->getTestBuilder();
        \$builder->ifPart = 'test';
        \$builder->end();
    }

    /**
     * Create a test treebuilder with a variable node, and init the validation.
     *
     * @return TreeBuilder
     */
    protected function getTestBuilder()
    {
        \$builder = new TreeBuilder('test');

        return \$builder
            ->getRootNode()
            ->children()
            ->variableNode('key')
            ->validate()
        ;
    }

    /**
     * Close the validation process and finalize with the given config.
     *
     * @param TreeBuilder \$testBuilder The tree builder to finalize
     * @param array       \$config      The config you want to use for the finalization, if nothing provided
     *                                 a simple ['key'=>'value'] will be used
     *
     * @return array The finalized config values
     */
    protected function finalizeTestBuilder(\$testBuilder, \$config = null)
    {
        return \$testBuilder
            ->end()
            ->end()
            ->end()
            ->buildTree()
            ->finalize(null === \$config ? ['key' => 'value'] : \$config)
        ;
    }

    /**
     * Return a closure that will return the given value.
     *
     * @param mixed \$val The value that the closure must return
     *
     * @return \\Closure
     */
    protected function returnClosure(\$val)
    {
        return function (\$v) use (\$val) {
            return \$val;
        };
    }

    /**
     * Assert that the given test builder, will return the given value.
     *
     * @param mixed       \$value       The value to test
     * @param TreeBuilder \$treeBuilder The tree builder to finalize
     * @param mixed       \$config      The config values that new to be finalized
     */
    protected function assertFinalizedValueIs(\$value, \$treeBuilder, \$config = null)
    {
        \$this->assertEquals(['key' => \$value], \$this->finalizeTestBuilder(\$treeBuilder, \$config));
    }
}
", "vendor/symfony/config/Tests/Definition/Builder/ExprBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Builder/ExprBuilderTest.php");
    }
}
