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

/* vendor/symfony/http-foundation/Tests/HeaderBagTest.php */
class __TwigTemplate_c70b63e4fbe3acbed05705a052403fef27857ccc1e1759eb5408d0ba4d44f039 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/HeaderBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/HeaderBagTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\HeaderBag;

class HeaderBagTest extends TestCase
{
    public function testConstructor()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$this->assertTrue(\$bag->has('foo'));
    }

    public function testToStringNull()
    {
        \$bag = new HeaderBag();
        \$this->assertEquals('', \$bag->__toString());
    }

    public function testToStringNotNull()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$this->assertEquals(\"Foo: bar\\r\\n\", \$bag->__toString());
    }

    public function testKeys()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$keys = \$bag->keys();
        \$this->assertEquals('foo', \$keys[0]);
    }

    public function testGetDate()
    {
        \$bag = new HeaderBag(['foo' => 'Tue, 4 Sep 2012 20:00:00 +0200']);
        \$headerDate = \$bag->getDate('foo');
        \$this->assertInstanceOf('DateTime', \$headerDate);
    }

    public function testGetDateNull()
    {
        \$bag = new HeaderBag(['foo' => null]);
        \$headerDate = \$bag->getDate('foo');
        \$this->assertNull(\$headerDate);
    }

    public function testGetDateException()
    {
        \$this->expectException('RuntimeException');
        \$bag = new HeaderBag(['foo' => 'Tue']);
        \$headerDate = \$bag->getDate('foo');
    }

    public function testGetCacheControlHeader()
    {
        \$bag = new HeaderBag();
        \$bag->addCacheControlDirective('public', '#a');
        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertEquals('#a', \$bag->getCacheControlDirective('public'));
    }

    public function testAll()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$this->assertEquals(['foo' => ['bar']], \$bag->all(), '->all() gets all the input');

        \$bag = new HeaderBag(['FOO' => 'BAR']);
        \$this->assertEquals(['foo' => ['BAR']], \$bag->all(), '->all() gets all the input key are lower case');
    }

    public function testReplace()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);

        \$bag->replace(['NOPE' => 'BAR']);
        \$this->assertEquals(['nope' => ['BAR']], \$bag->all(), '->replace() replaces the input with the argument');
        \$this->assertFalse(\$bag->has('foo'), '->replace() overrides previously set the input');
    }

    public function testGet()
    {
        \$bag = new HeaderBag(['foo' => 'bar', 'fuzz' => 'bizz']);
        \$this->assertEquals('bar', \$bag->get('foo'), '->get return current value');
        \$this->assertEquals('bar', \$bag->get('FoO'), '->get key in case insensitive');
        \$this->assertEquals(['bar'], \$bag->get('foo', 'nope', false), '->get return the value as array');

        // defaults
        \$this->assertNull(\$bag->get('none'), '->get unknown values returns null');
        \$this->assertEquals('default', \$bag->get('none', 'default'), '->get unknown values returns default');
        \$this->assertEquals(['default'], \$bag->get('none', 'default', false), '->get unknown values returns default as array');

        \$bag->set('foo', 'bor', false);
        \$this->assertEquals('bar', \$bag->get('foo'), '->get return first value');
        \$this->assertEquals(['bar', 'bor'], \$bag->get('foo', 'nope', false), '->get return all values as array');

        \$bag->set('baz', null);
        \$this->assertNull(\$bag->get('baz', 'nope'), '->get return null although different default value is given');
    }

    public function testSetAssociativeArray()
    {
        \$bag = new HeaderBag();
        \$bag->set('foo', ['bad-assoc-index' => 'value']);
        \$this->assertSame('value', \$bag->get('foo'));
        \$this->assertEquals(['value'], \$bag->get('foo', 'nope', false), 'assoc indices of multi-valued headers are ignored');
    }

    public function testContains()
    {
        \$bag = new HeaderBag(['foo' => 'bar', 'fuzz' => 'bizz']);
        \$this->assertTrue(\$bag->contains('foo', 'bar'), '->contains first value');
        \$this->assertTrue(\$bag->contains('fuzz', 'bizz'), '->contains second value');
        \$this->assertFalse(\$bag->contains('nope', 'nope'), '->contains unknown value');
        \$this->assertFalse(\$bag->contains('foo', 'nope'), '->contains unknown value');

        // Multiple values
        \$bag->set('foo', 'bor', false);
        \$this->assertTrue(\$bag->contains('foo', 'bar'), '->contains first value');
        \$this->assertTrue(\$bag->contains('foo', 'bor'), '->contains second value');
        \$this->assertFalse(\$bag->contains('foo', 'nope'), '->contains unknown value');
    }

    public function testCacheControlDirectiveAccessors()
    {
        \$bag = new HeaderBag();
        \$bag->addCacheControlDirective('public');

        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertTrue(\$bag->getCacheControlDirective('public'));
        \$this->assertEquals('public', \$bag->get('cache-control'));

        \$bag->addCacheControlDirective('max-age', 10);
        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(10, \$bag->getCacheControlDirective('max-age'));
        \$this->assertEquals('max-age=10, public', \$bag->get('cache-control'));

        \$bag->removeCacheControlDirective('max-age');
        \$this->assertFalse(\$bag->hasCacheControlDirective('max-age'));
    }

    public function testCacheControlDirectiveParsing()
    {
        \$bag = new HeaderBag(['cache-control' => 'public, max-age=10']);
        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertTrue(\$bag->getCacheControlDirective('public'));

        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(10, \$bag->getCacheControlDirective('max-age'));

        \$bag->addCacheControlDirective('s-maxage', 100);
        \$this->assertEquals('max-age=10, public, s-maxage=100', \$bag->get('cache-control'));
    }

    public function testCacheControlDirectiveParsingQuotedZero()
    {
        \$bag = new HeaderBag(['cache-control' => 'max-age=\"0\"']);
        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(0, \$bag->getCacheControlDirective('max-age'));
    }

    public function testCacheControlDirectiveOverrideWithReplace()
    {
        \$bag = new HeaderBag(['cache-control' => 'private, max-age=100']);
        \$bag->replace(['cache-control' => 'public, max-age=10']);
        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertTrue(\$bag->getCacheControlDirective('public'));

        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(10, \$bag->getCacheControlDirective('max-age'));
    }

    public function testCacheControlClone()
    {
        \$headers = ['foo' => 'bar'];
        \$bag1 = new HeaderBag(\$headers);
        \$bag2 = new HeaderBag(\$bag1->all());

        \$this->assertEquals(\$bag1->all(), \$bag2->all());
    }

    public function testGetIterator()
    {
        \$headers = ['foo' => 'bar', 'hello' => 'world', 'third' => 'charm'];
        \$headerBag = new HeaderBag(\$headers);

        \$i = 0;
        foreach (\$headerBag as \$key => \$val) {
            ++\$i;
            \$this->assertEquals([\$headers[\$key]], \$val);
        }

        \$this->assertEquals(\\count(\$headers), \$i);
    }

    public function testCount()
    {
        \$headers = ['foo' => 'bar', 'HELLO' => 'WORLD'];
        \$headerBag = new HeaderBag(\$headers);

        \$this->assertCount(\\count(\$headers), \$headerBag);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/HeaderBagTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\HeaderBag;

class HeaderBagTest extends TestCase
{
    public function testConstructor()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$this->assertTrue(\$bag->has('foo'));
    }

    public function testToStringNull()
    {
        \$bag = new HeaderBag();
        \$this->assertEquals('', \$bag->__toString());
    }

    public function testToStringNotNull()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$this->assertEquals(\"Foo: bar\\r\\n\", \$bag->__toString());
    }

    public function testKeys()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$keys = \$bag->keys();
        \$this->assertEquals('foo', \$keys[0]);
    }

    public function testGetDate()
    {
        \$bag = new HeaderBag(['foo' => 'Tue, 4 Sep 2012 20:00:00 +0200']);
        \$headerDate = \$bag->getDate('foo');
        \$this->assertInstanceOf('DateTime', \$headerDate);
    }

    public function testGetDateNull()
    {
        \$bag = new HeaderBag(['foo' => null]);
        \$headerDate = \$bag->getDate('foo');
        \$this->assertNull(\$headerDate);
    }

    public function testGetDateException()
    {
        \$this->expectException('RuntimeException');
        \$bag = new HeaderBag(['foo' => 'Tue']);
        \$headerDate = \$bag->getDate('foo');
    }

    public function testGetCacheControlHeader()
    {
        \$bag = new HeaderBag();
        \$bag->addCacheControlDirective('public', '#a');
        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertEquals('#a', \$bag->getCacheControlDirective('public'));
    }

    public function testAll()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);
        \$this->assertEquals(['foo' => ['bar']], \$bag->all(), '->all() gets all the input');

        \$bag = new HeaderBag(['FOO' => 'BAR']);
        \$this->assertEquals(['foo' => ['BAR']], \$bag->all(), '->all() gets all the input key are lower case');
    }

    public function testReplace()
    {
        \$bag = new HeaderBag(['foo' => 'bar']);

        \$bag->replace(['NOPE' => 'BAR']);
        \$this->assertEquals(['nope' => ['BAR']], \$bag->all(), '->replace() replaces the input with the argument');
        \$this->assertFalse(\$bag->has('foo'), '->replace() overrides previously set the input');
    }

    public function testGet()
    {
        \$bag = new HeaderBag(['foo' => 'bar', 'fuzz' => 'bizz']);
        \$this->assertEquals('bar', \$bag->get('foo'), '->get return current value');
        \$this->assertEquals('bar', \$bag->get('FoO'), '->get key in case insensitive');
        \$this->assertEquals(['bar'], \$bag->get('foo', 'nope', false), '->get return the value as array');

        // defaults
        \$this->assertNull(\$bag->get('none'), '->get unknown values returns null');
        \$this->assertEquals('default', \$bag->get('none', 'default'), '->get unknown values returns default');
        \$this->assertEquals(['default'], \$bag->get('none', 'default', false), '->get unknown values returns default as array');

        \$bag->set('foo', 'bor', false);
        \$this->assertEquals('bar', \$bag->get('foo'), '->get return first value');
        \$this->assertEquals(['bar', 'bor'], \$bag->get('foo', 'nope', false), '->get return all values as array');

        \$bag->set('baz', null);
        \$this->assertNull(\$bag->get('baz', 'nope'), '->get return null although different default value is given');
    }

    public function testSetAssociativeArray()
    {
        \$bag = new HeaderBag();
        \$bag->set('foo', ['bad-assoc-index' => 'value']);
        \$this->assertSame('value', \$bag->get('foo'));
        \$this->assertEquals(['value'], \$bag->get('foo', 'nope', false), 'assoc indices of multi-valued headers are ignored');
    }

    public function testContains()
    {
        \$bag = new HeaderBag(['foo' => 'bar', 'fuzz' => 'bizz']);
        \$this->assertTrue(\$bag->contains('foo', 'bar'), '->contains first value');
        \$this->assertTrue(\$bag->contains('fuzz', 'bizz'), '->contains second value');
        \$this->assertFalse(\$bag->contains('nope', 'nope'), '->contains unknown value');
        \$this->assertFalse(\$bag->contains('foo', 'nope'), '->contains unknown value');

        // Multiple values
        \$bag->set('foo', 'bor', false);
        \$this->assertTrue(\$bag->contains('foo', 'bar'), '->contains first value');
        \$this->assertTrue(\$bag->contains('foo', 'bor'), '->contains second value');
        \$this->assertFalse(\$bag->contains('foo', 'nope'), '->contains unknown value');
    }

    public function testCacheControlDirectiveAccessors()
    {
        \$bag = new HeaderBag();
        \$bag->addCacheControlDirective('public');

        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertTrue(\$bag->getCacheControlDirective('public'));
        \$this->assertEquals('public', \$bag->get('cache-control'));

        \$bag->addCacheControlDirective('max-age', 10);
        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(10, \$bag->getCacheControlDirective('max-age'));
        \$this->assertEquals('max-age=10, public', \$bag->get('cache-control'));

        \$bag->removeCacheControlDirective('max-age');
        \$this->assertFalse(\$bag->hasCacheControlDirective('max-age'));
    }

    public function testCacheControlDirectiveParsing()
    {
        \$bag = new HeaderBag(['cache-control' => 'public, max-age=10']);
        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertTrue(\$bag->getCacheControlDirective('public'));

        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(10, \$bag->getCacheControlDirective('max-age'));

        \$bag->addCacheControlDirective('s-maxage', 100);
        \$this->assertEquals('max-age=10, public, s-maxage=100', \$bag->get('cache-control'));
    }

    public function testCacheControlDirectiveParsingQuotedZero()
    {
        \$bag = new HeaderBag(['cache-control' => 'max-age=\"0\"']);
        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(0, \$bag->getCacheControlDirective('max-age'));
    }

    public function testCacheControlDirectiveOverrideWithReplace()
    {
        \$bag = new HeaderBag(['cache-control' => 'private, max-age=100']);
        \$bag->replace(['cache-control' => 'public, max-age=10']);
        \$this->assertTrue(\$bag->hasCacheControlDirective('public'));
        \$this->assertTrue(\$bag->getCacheControlDirective('public'));

        \$this->assertTrue(\$bag->hasCacheControlDirective('max-age'));
        \$this->assertEquals(10, \$bag->getCacheControlDirective('max-age'));
    }

    public function testCacheControlClone()
    {
        \$headers = ['foo' => 'bar'];
        \$bag1 = new HeaderBag(\$headers);
        \$bag2 = new HeaderBag(\$bag1->all());

        \$this->assertEquals(\$bag1->all(), \$bag2->all());
    }

    public function testGetIterator()
    {
        \$headers = ['foo' => 'bar', 'hello' => 'world', 'third' => 'charm'];
        \$headerBag = new HeaderBag(\$headers);

        \$i = 0;
        foreach (\$headerBag as \$key => \$val) {
            ++\$i;
            \$this->assertEquals([\$headers[\$key]], \$val);
        }

        \$this->assertEquals(\\count(\$headers), \$i);
    }

    public function testCount()
    {
        \$headers = ['foo' => 'bar', 'HELLO' => 'WORLD'];
        \$headerBag = new HeaderBag(\$headers);

        \$this->assertCount(\\count(\$headers), \$headerBag);
    }
}
", "vendor/symfony/http-foundation/Tests/HeaderBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/HeaderBagTest.php");
    }
}
