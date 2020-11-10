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

/* vendor/symfony/cache/Tests/Adapter/NullAdapterTest.php */
class __TwigTemplate_c3892560cc0f994fc488670678303cf5caf9f75463c92b58138dd392dc40d5ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/NullAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/NullAdapterTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\TestCase;
use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;

/**
 * @group time-sensitive
 */
class NullAdapterTest extends TestCase
{
    public function createCachePool()
    {
        return new NullAdapter();
    }

    public function testGetItem()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");
    }

    public function testGet()
    {
        \$adapter = \$this->createCachePool();

        \$fetched = [];
        \$item = \$adapter->get('myKey', function (\$item) use (&\$fetched) { \$fetched[] = \$item; });
        \$this->assertCount(1, \$fetched);
        \$item = \$fetched[0];
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");
        \$this->assertSame('myKey', \$item->getKey());
    }

    public function testHasItem()
    {
        \$this->assertFalse(\$this->createCachePool()->hasItem('key'));
    }

    public function testGetItems()
    {
        \$adapter = \$this->createCachePool();

        \$keys = ['foo', 'bar', 'baz', 'biz'];

        /** @var CacheItemInterface[] \$items */
        \$items = \$adapter->getItems(\$keys);
        \$count = 0;

        foreach (\$items as \$key => \$item) {
            \$itemKey = \$item->getKey();

            \$this->assertEquals(\$itemKey, \$key, 'Keys must be preserved when fetching multiple items');
            \$this->assertContains(\$key, \$keys, 'Cache key can not change.');
            \$this->assertFalse(\$item->isHit());

            // Remove \$key for \$keys
            foreach (\$keys as \$k => \$v) {
                if (\$v === \$key) {
                    unset(\$keys[\$k]);
                }
            }

            ++\$count;
        }

        \$this->assertSame(4, \$count);
    }

    public function testIsHit()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
    }

    public function testClear()
    {
        \$this->assertTrue(\$this->createCachePool()->clear());
    }

    public function testDeleteItem()
    {
        \$this->assertTrue(\$this->createCachePool()->deleteItem('key'));
    }

    public function testDeleteItems()
    {
        \$this->assertTrue(\$this->createCachePool()->deleteItems(['key', 'foo', 'bar']));
    }

    public function testSave()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");

        \$this->assertFalse(\$adapter->save(\$item));
    }

    public function testDeferredSave()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");

        \$this->assertFalse(\$adapter->saveDeferred(\$item));
    }

    public function testCommit()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");

        \$this->assertFalse(\$adapter->saveDeferred(\$item));
        \$this->assertFalse(\$this->createCachePool()->commit());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/NullAdapterTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\TestCase;
use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;

/**
 * @group time-sensitive
 */
class NullAdapterTest extends TestCase
{
    public function createCachePool()
    {
        return new NullAdapter();
    }

    public function testGetItem()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");
    }

    public function testGet()
    {
        \$adapter = \$this->createCachePool();

        \$fetched = [];
        \$item = \$adapter->get('myKey', function (\$item) use (&\$fetched) { \$fetched[] = \$item; });
        \$this->assertCount(1, \$fetched);
        \$item = \$fetched[0];
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");
        \$this->assertSame('myKey', \$item->getKey());
    }

    public function testHasItem()
    {
        \$this->assertFalse(\$this->createCachePool()->hasItem('key'));
    }

    public function testGetItems()
    {
        \$adapter = \$this->createCachePool();

        \$keys = ['foo', 'bar', 'baz', 'biz'];

        /** @var CacheItemInterface[] \$items */
        \$items = \$adapter->getItems(\$keys);
        \$count = 0;

        foreach (\$items as \$key => \$item) {
            \$itemKey = \$item->getKey();

            \$this->assertEquals(\$itemKey, \$key, 'Keys must be preserved when fetching multiple items');
            \$this->assertContains(\$key, \$keys, 'Cache key can not change.');
            \$this->assertFalse(\$item->isHit());

            // Remove \$key for \$keys
            foreach (\$keys as \$k => \$v) {
                if (\$v === \$key) {
                    unset(\$keys[\$k]);
                }
            }

            ++\$count;
        }

        \$this->assertSame(4, \$count);
    }

    public function testIsHit()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
    }

    public function testClear()
    {
        \$this->assertTrue(\$this->createCachePool()->clear());
    }

    public function testDeleteItem()
    {
        \$this->assertTrue(\$this->createCachePool()->deleteItem('key'));
    }

    public function testDeleteItems()
    {
        \$this->assertTrue(\$this->createCachePool()->deleteItems(['key', 'foo', 'bar']));
    }

    public function testSave()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");

        \$this->assertFalse(\$adapter->save(\$item));
    }

    public function testDeferredSave()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");

        \$this->assertFalse(\$adapter->saveDeferred(\$item));
    }

    public function testCommit()
    {
        \$adapter = \$this->createCachePool();

        \$item = \$adapter->getItem('key');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get(), \"Item's value must be null when isHit is false.\");

        \$this->assertFalse(\$adapter->saveDeferred(\$item));
        \$this->assertFalse(\$this->createCachePool()->commit());
    }
}
", "vendor/symfony/cache/Tests/Adapter/NullAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/NullAdapterTest.php");
    }
}
