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

/* vendor/symfony/cache/Tests/CacheItemTest.php */
class __TwigTemplate_518c19a459bf0625fea630ed649f7ccae670c5941d9c792af50e3ec5262d5d51 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/CacheItemTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/CacheItemTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\CacheItem;

class CacheItemTest extends TestCase
{
    public function testValidKey()
    {
        \$this->assertSame('foo', CacheItem::validateKey('foo'));
    }

    /**
     * @dataProvider provideInvalidKey
     */
    public function testInvalidKey(\$key)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Cache key');
        CacheItem::validateKey(\$key);
    }

    public function provideInvalidKey()
    {
        return [
            [''],
            ['{'],
            ['}'],
            ['('],
            [')'],
            ['/'],
            ['\\\\'],
            ['@'],
            [':'],
            [true],
            [null],
            [1],
            [1.1],
            [[[]]],
            [new \\Exception('foo')],
        ];
    }

    public function testTag()
    {
        \$item = new CacheItem();
        \$r = new \\ReflectionProperty(\$item, 'isTaggable');
        \$r->setAccessible(true);
        \$r->setValue(\$item, true);

        \$this->assertSame(\$item, \$item->tag('foo'));
        \$this->assertSame(\$item, \$item->tag(['bar', 'baz']));

        (\\Closure::bind(function () use (\$item) {
            \$this->assertSame(['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'], \$item->newMetadata[CacheItem::METADATA_TAGS]);
        }, \$this, CacheItem::class))();
    }

    /**
     * @dataProvider provideInvalidKey
     */
    public function testInvalidTag(\$tag)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Cache tag');
        \$item = new CacheItem();
        \$r = new \\ReflectionProperty(\$item, 'isTaggable');
        \$r->setAccessible(true);
        \$r->setValue(\$item, true);

        \$item->tag(\$tag);
    }

    public function testNonTaggableItem()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\LogicException');
        \$this->expectExceptionMessage('Cache item \"foo\" comes from a non tag-aware pool: you cannot tag it.');
        \$item = new CacheItem();
        \$r = new \\ReflectionProperty(\$item, 'key');
        \$r->setAccessible(true);
        \$r->setValue(\$item, 'foo');

        \$item->tag([]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/CacheItemTest.php";
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

namespace Symfony\\Component\\Cache\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\CacheItem;

class CacheItemTest extends TestCase
{
    public function testValidKey()
    {
        \$this->assertSame('foo', CacheItem::validateKey('foo'));
    }

    /**
     * @dataProvider provideInvalidKey
     */
    public function testInvalidKey(\$key)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Cache key');
        CacheItem::validateKey(\$key);
    }

    public function provideInvalidKey()
    {
        return [
            [''],
            ['{'],
            ['}'],
            ['('],
            [')'],
            ['/'],
            ['\\\\'],
            ['@'],
            [':'],
            [true],
            [null],
            [1],
            [1.1],
            [[[]]],
            [new \\Exception('foo')],
        ];
    }

    public function testTag()
    {
        \$item = new CacheItem();
        \$r = new \\ReflectionProperty(\$item, 'isTaggable');
        \$r->setAccessible(true);
        \$r->setValue(\$item, true);

        \$this->assertSame(\$item, \$item->tag('foo'));
        \$this->assertSame(\$item, \$item->tag(['bar', 'baz']));

        (\\Closure::bind(function () use (\$item) {
            \$this->assertSame(['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'], \$item->newMetadata[CacheItem::METADATA_TAGS]);
        }, \$this, CacheItem::class))();
    }

    /**
     * @dataProvider provideInvalidKey
     */
    public function testInvalidTag(\$tag)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Cache tag');
        \$item = new CacheItem();
        \$r = new \\ReflectionProperty(\$item, 'isTaggable');
        \$r->setAccessible(true);
        \$r->setValue(\$item, true);

        \$item->tag(\$tag);
    }

    public function testNonTaggableItem()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\LogicException');
        \$this->expectExceptionMessage('Cache item \"foo\" comes from a non tag-aware pool: you cannot tag it.');
        \$item = new CacheItem();
        \$r = new \\ReflectionProperty(\$item, 'key');
        \$r->setAccessible(true);
        \$r->setValue(\$item, 'foo');

        \$item->tag([]);
    }
}
", "vendor/symfony/cache/Tests/CacheItemTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/CacheItemTest.php");
    }
}
