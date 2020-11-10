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

/* vendor/symfony/expression-language/Tests/ExpressionLanguageTest.php */
class __TwigTemplate_d9749c0cb5d7fbca5e6d146b1e5d22db5fe1db181292134191f810a5c864711c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/ExpressionLanguageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/ExpressionLanguageTest.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\ExpressionLanguage\\ParsedExpression;
use Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures\\TestProvider;

class ExpressionLanguageTest extends TestCase
{
    public function testCachedParse()
    {
        \$cacheMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemPoolInterface')->getMock();
        \$cacheItemMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemInterface')->getMock();
        \$savedParsedExpression = null;
        \$expressionLanguage = new ExpressionLanguage(\$cacheMock);

        \$cacheMock
            ->expects(\$this->exactly(2))
            ->method('getItem')
            ->with('1%20%2B%201%2F%2F')
            ->willReturn(\$cacheItemMock)
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(2))
            ->method('get')
            ->willReturnCallback(function () use (&\$savedParsedExpression) {
                return \$savedParsedExpression;
            })
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(1))
            ->method('set')
            ->with(\$this->isInstanceOf(ParsedExpression::class))
            ->willReturnCallback(function (\$parsedExpression) use (&\$savedParsedExpression) {
                \$savedParsedExpression = \$parsedExpression;
            })
        ;

        \$cacheMock
            ->expects(\$this->exactly(1))
            ->method('save')
            ->with(\$cacheItemMock)
        ;

        \$parsedExpression = \$expressionLanguage->parse('1 + 1', []);
        \$this->assertSame(\$savedParsedExpression, \$parsedExpression);

        \$parsedExpression = \$expressionLanguage->parse('1 + 1', []);
        \$this->assertSame(\$savedParsedExpression, \$parsedExpression);
    }

    public function testConstantFunction()
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$this->assertEquals(PHP_VERSION, \$expressionLanguage->evaluate('constant(\"PHP_VERSION\")'));

        \$expressionLanguage = new ExpressionLanguage();
        \$this->assertEquals('\\constant(\"PHP_VERSION\")', \$expressionLanguage->compile('constant(\"PHP_VERSION\")'));
    }

    public function testProviders()
    {
        \$expressionLanguage = new ExpressionLanguage(null, [new TestProvider()]);
        \$this->assertEquals('foo', \$expressionLanguage->evaluate('identity(\"foo\")'));
        \$this->assertEquals('\"foo\"', \$expressionLanguage->compile('identity(\"foo\")'));
        \$this->assertEquals('FOO', \$expressionLanguage->evaluate('strtoupper(\"foo\")'));
        \$this->assertEquals('\\strtoupper(\"foo\")', \$expressionLanguage->compile('strtoupper(\"foo\")'));
        \$this->assertEquals('foo', \$expressionLanguage->evaluate('strtolower(\"FOO\")'));
        \$this->assertEquals('\\strtolower(\"FOO\")', \$expressionLanguage->compile('strtolower(\"FOO\")'));
        \$this->assertTrue(\$expressionLanguage->evaluate('fn_namespaced()'));
        \$this->assertEquals('\\Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures\\fn_namespaced()', \$expressionLanguage->compile('fn_namespaced()'));
    }

    /**
     * @dataProvider shortCircuitProviderEvaluate
     */
    public function testShortCircuitOperatorsEvaluate(\$expression, array \$values, \$expected)
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$this->assertEquals(\$expected, \$expressionLanguage->evaluate(\$expression, \$values));
    }

    /**
     * @dataProvider shortCircuitProviderCompile
     */
    public function testShortCircuitOperatorsCompile(\$expression, array \$names, \$expected)
    {
        \$result = null;
        \$expressionLanguage = new ExpressionLanguage();
        eval(sprintf('\$result = %s;', \$expressionLanguage->compile(\$expression, \$names)));
        \$this->assertSame(\$expected, \$result);
    }

    public function testParseThrowsInsteadOfNotice()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Unexpected end of expression around position 6 for expression `node.`.');
        \$expressionLanguage = new ExpressionLanguage();
        \$expressionLanguage->parse('node.', ['node']);
    }

    public function shortCircuitProviderEvaluate()
    {
        \$object = \$this->getMockBuilder('stdClass')->setMethods(['foo'])->getMock();
        \$object->expects(\$this->never())->method('foo');

        return [
            ['false and object.foo()', ['object' => \$object], false],
            ['false && object.foo()', ['object' => \$object], false],
            ['true || object.foo()', ['object' => \$object], true],
            ['true or object.foo()', ['object' => \$object], true],
        ];
    }

    public function shortCircuitProviderCompile()
    {
        return [
            ['false and foo', ['foo' => 'foo'], false],
            ['false && foo', ['foo' => 'foo'], false],
            ['true || foo', ['foo' => 'foo'], true],
            ['true or foo', ['foo' => 'foo'], true],
        ];
    }

    public function testCachingForOverriddenVariableNames()
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$expression = 'a + b';
        \$expressionLanguage->evaluate(\$expression, ['a' => 1, 'b' => 1]);
        \$result = \$expressionLanguage->compile(\$expression, ['a', 'B' => 'b']);
        \$this->assertSame('(\$a + \$B)', \$result);
    }

    public function testStrictEquality()
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$expression = '123 === a';
        \$result = \$expressionLanguage->compile(\$expression, ['a']);
        \$this->assertSame('(123 === \$a)', \$result);
    }

    public function testCachingWithDifferentNamesOrder()
    {
        \$cacheMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemPoolInterface')->getMock();
        \$cacheItemMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemInterface')->getMock();
        \$expressionLanguage = new ExpressionLanguage(\$cacheMock);
        \$savedParsedExpressions = [];

        \$cacheMock
            ->expects(\$this->exactly(2))
            ->method('getItem')
            ->with('a%20%2B%20b%2F%2Fa%7CB%3Ab')
            ->willReturn(\$cacheItemMock)
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(2))
            ->method('get')
            ->willReturnCallback(function () use (&\$savedParsedExpression) {
                return \$savedParsedExpression;
            })
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(1))
            ->method('set')
            ->with(\$this->isInstanceOf(ParsedExpression::class))
            ->willReturnCallback(function (\$parsedExpression) use (&\$savedParsedExpression) {
                \$savedParsedExpression = \$parsedExpression;
            })
        ;

        \$cacheMock
            ->expects(\$this->exactly(1))
            ->method('save')
            ->with(\$cacheItemMock)
        ;

        \$expression = 'a + b';
        \$expressionLanguage->compile(\$expression, ['a', 'B' => 'b']);
        \$expressionLanguage->compile(\$expression, ['B' => 'b', 'a']);
    }

    /**
     * @dataProvider getRegisterCallbacks
     */
    public function testRegisterAfterParse(\$registerCallback)
    {
        \$this->expectException('LogicException');
        \$el = new ExpressionLanguage();
        \$el->parse('1 + 1', []);
        \$registerCallback(\$el);
    }

    /**
     * @dataProvider getRegisterCallbacks
     */
    public function testRegisterAfterEval(\$registerCallback)
    {
        \$this->expectException('LogicException');
        \$el = new ExpressionLanguage();
        \$el->evaluate('1 + 1');
        \$registerCallback(\$el);
    }

    public function testCallBadCallable()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessageRegExp('/Unable to call method \"\\w+\" of object \"\\w+\"./');
        \$el = new ExpressionLanguage();
        \$el->evaluate('foo.myfunction()', ['foo' => new \\stdClass()]);
    }

    /**
     * @dataProvider getRegisterCallbacks
     */
    public function testRegisterAfterCompile(\$registerCallback)
    {
        \$this->expectException('LogicException');
        \$el = new ExpressionLanguage();
        \$el->compile('1 + 1');
        \$registerCallback(\$el);
    }

    public function getRegisterCallbacks()
    {
        return [
            [
                function (ExpressionLanguage \$el) {
                    \$el->register('fn', function () {}, function () {});
                },
            ],
            [
                function (ExpressionLanguage \$el) {
                    \$el->addFunction(new ExpressionFunction('fn', function () {}, function () {}));
                },
            ],
            [
                function (ExpressionLanguage \$el) {
                    \$el->registerProvider(new TestProvider());
                },
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/ExpressionLanguageTest.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\ExpressionLanguage\\ParsedExpression;
use Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures\\TestProvider;

class ExpressionLanguageTest extends TestCase
{
    public function testCachedParse()
    {
        \$cacheMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemPoolInterface')->getMock();
        \$cacheItemMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemInterface')->getMock();
        \$savedParsedExpression = null;
        \$expressionLanguage = new ExpressionLanguage(\$cacheMock);

        \$cacheMock
            ->expects(\$this->exactly(2))
            ->method('getItem')
            ->with('1%20%2B%201%2F%2F')
            ->willReturn(\$cacheItemMock)
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(2))
            ->method('get')
            ->willReturnCallback(function () use (&\$savedParsedExpression) {
                return \$savedParsedExpression;
            })
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(1))
            ->method('set')
            ->with(\$this->isInstanceOf(ParsedExpression::class))
            ->willReturnCallback(function (\$parsedExpression) use (&\$savedParsedExpression) {
                \$savedParsedExpression = \$parsedExpression;
            })
        ;

        \$cacheMock
            ->expects(\$this->exactly(1))
            ->method('save')
            ->with(\$cacheItemMock)
        ;

        \$parsedExpression = \$expressionLanguage->parse('1 + 1', []);
        \$this->assertSame(\$savedParsedExpression, \$parsedExpression);

        \$parsedExpression = \$expressionLanguage->parse('1 + 1', []);
        \$this->assertSame(\$savedParsedExpression, \$parsedExpression);
    }

    public function testConstantFunction()
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$this->assertEquals(PHP_VERSION, \$expressionLanguage->evaluate('constant(\"PHP_VERSION\")'));

        \$expressionLanguage = new ExpressionLanguage();
        \$this->assertEquals('\\constant(\"PHP_VERSION\")', \$expressionLanguage->compile('constant(\"PHP_VERSION\")'));
    }

    public function testProviders()
    {
        \$expressionLanguage = new ExpressionLanguage(null, [new TestProvider()]);
        \$this->assertEquals('foo', \$expressionLanguage->evaluate('identity(\"foo\")'));
        \$this->assertEquals('\"foo\"', \$expressionLanguage->compile('identity(\"foo\")'));
        \$this->assertEquals('FOO', \$expressionLanguage->evaluate('strtoupper(\"foo\")'));
        \$this->assertEquals('\\strtoupper(\"foo\")', \$expressionLanguage->compile('strtoupper(\"foo\")'));
        \$this->assertEquals('foo', \$expressionLanguage->evaluate('strtolower(\"FOO\")'));
        \$this->assertEquals('\\strtolower(\"FOO\")', \$expressionLanguage->compile('strtolower(\"FOO\")'));
        \$this->assertTrue(\$expressionLanguage->evaluate('fn_namespaced()'));
        \$this->assertEquals('\\Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures\\fn_namespaced()', \$expressionLanguage->compile('fn_namespaced()'));
    }

    /**
     * @dataProvider shortCircuitProviderEvaluate
     */
    public function testShortCircuitOperatorsEvaluate(\$expression, array \$values, \$expected)
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$this->assertEquals(\$expected, \$expressionLanguage->evaluate(\$expression, \$values));
    }

    /**
     * @dataProvider shortCircuitProviderCompile
     */
    public function testShortCircuitOperatorsCompile(\$expression, array \$names, \$expected)
    {
        \$result = null;
        \$expressionLanguage = new ExpressionLanguage();
        eval(sprintf('\$result = %s;', \$expressionLanguage->compile(\$expression, \$names)));
        \$this->assertSame(\$expected, \$result);
    }

    public function testParseThrowsInsteadOfNotice()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Unexpected end of expression around position 6 for expression `node.`.');
        \$expressionLanguage = new ExpressionLanguage();
        \$expressionLanguage->parse('node.', ['node']);
    }

    public function shortCircuitProviderEvaluate()
    {
        \$object = \$this->getMockBuilder('stdClass')->setMethods(['foo'])->getMock();
        \$object->expects(\$this->never())->method('foo');

        return [
            ['false and object.foo()', ['object' => \$object], false],
            ['false && object.foo()', ['object' => \$object], false],
            ['true || object.foo()', ['object' => \$object], true],
            ['true or object.foo()', ['object' => \$object], true],
        ];
    }

    public function shortCircuitProviderCompile()
    {
        return [
            ['false and foo', ['foo' => 'foo'], false],
            ['false && foo', ['foo' => 'foo'], false],
            ['true || foo', ['foo' => 'foo'], true],
            ['true or foo', ['foo' => 'foo'], true],
        ];
    }

    public function testCachingForOverriddenVariableNames()
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$expression = 'a + b';
        \$expressionLanguage->evaluate(\$expression, ['a' => 1, 'b' => 1]);
        \$result = \$expressionLanguage->compile(\$expression, ['a', 'B' => 'b']);
        \$this->assertSame('(\$a + \$B)', \$result);
    }

    public function testStrictEquality()
    {
        \$expressionLanguage = new ExpressionLanguage();
        \$expression = '123 === a';
        \$result = \$expressionLanguage->compile(\$expression, ['a']);
        \$this->assertSame('(123 === \$a)', \$result);
    }

    public function testCachingWithDifferentNamesOrder()
    {
        \$cacheMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemPoolInterface')->getMock();
        \$cacheItemMock = \$this->getMockBuilder('Psr\\Cache\\CacheItemInterface')->getMock();
        \$expressionLanguage = new ExpressionLanguage(\$cacheMock);
        \$savedParsedExpressions = [];

        \$cacheMock
            ->expects(\$this->exactly(2))
            ->method('getItem')
            ->with('a%20%2B%20b%2F%2Fa%7CB%3Ab')
            ->willReturn(\$cacheItemMock)
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(2))
            ->method('get')
            ->willReturnCallback(function () use (&\$savedParsedExpression) {
                return \$savedParsedExpression;
            })
        ;

        \$cacheItemMock
            ->expects(\$this->exactly(1))
            ->method('set')
            ->with(\$this->isInstanceOf(ParsedExpression::class))
            ->willReturnCallback(function (\$parsedExpression) use (&\$savedParsedExpression) {
                \$savedParsedExpression = \$parsedExpression;
            })
        ;

        \$cacheMock
            ->expects(\$this->exactly(1))
            ->method('save')
            ->with(\$cacheItemMock)
        ;

        \$expression = 'a + b';
        \$expressionLanguage->compile(\$expression, ['a', 'B' => 'b']);
        \$expressionLanguage->compile(\$expression, ['B' => 'b', 'a']);
    }

    /**
     * @dataProvider getRegisterCallbacks
     */
    public function testRegisterAfterParse(\$registerCallback)
    {
        \$this->expectException('LogicException');
        \$el = new ExpressionLanguage();
        \$el->parse('1 + 1', []);
        \$registerCallback(\$el);
    }

    /**
     * @dataProvider getRegisterCallbacks
     */
    public function testRegisterAfterEval(\$registerCallback)
    {
        \$this->expectException('LogicException');
        \$el = new ExpressionLanguage();
        \$el->evaluate('1 + 1');
        \$registerCallback(\$el);
    }

    public function testCallBadCallable()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessageRegExp('/Unable to call method \"\\w+\" of object \"\\w+\"./');
        \$el = new ExpressionLanguage();
        \$el->evaluate('foo.myfunction()', ['foo' => new \\stdClass()]);
    }

    /**
     * @dataProvider getRegisterCallbacks
     */
    public function testRegisterAfterCompile(\$registerCallback)
    {
        \$this->expectException('LogicException');
        \$el = new ExpressionLanguage();
        \$el->compile('1 + 1');
        \$registerCallback(\$el);
    }

    public function getRegisterCallbacks()
    {
        return [
            [
                function (ExpressionLanguage \$el) {
                    \$el->register('fn', function () {}, function () {});
                },
            ],
            [
                function (ExpressionLanguage \$el) {
                    \$el->addFunction(new ExpressionFunction('fn', function () {}, function () {}));
                },
            ],
            [
                function (ExpressionLanguage \$el) {
                    \$el->registerProvider(new TestProvider());
                },
            ],
        ];
    }
}
", "vendor/symfony/expression-language/Tests/ExpressionLanguageTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/ExpressionLanguageTest.php");
    }
}
