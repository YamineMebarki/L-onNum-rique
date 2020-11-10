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

/* vendor/symfony/cache/Tests/Adapter/TraceableAdapterTest.php */
class __TwigTemplate_017967c35acad6194cc515dbf2d0d4de7199ab1a36bdd7e36a7bb30282fd0936 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/TraceableAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/TraceableAdapterTest.php"));

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

use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;

/**
 * @group time-sensitive
 */
class TraceableAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testPrune' => 'TraceableAdapter just proxies',
    ];

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new TraceableAdapter(new FilesystemAdapter('', \$defaultLifetime));
    }

    public function testGetItemMissTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->getItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('getItem', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(1, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testGetItemHitTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->save(\$item);
        \$pool->getItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(3, \$calls);

        \$call = \$calls[2];
        \$this->assertSame(1, \$call->hits);
        \$this->assertSame(0, \$call->misses);
    }

    public function testGetItemsMissTrace()
    {
        \$pool = \$this->createCachePool();
        \$arg = ['k0', 'k1'];
        \$items = \$pool->getItems(\$arg);
        foreach (\$items as \$item) {
        }
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('getItems', \$call->name);
        \$this->assertSame(['k0' => false, 'k1' => false], \$call->result);
        \$this->assertSame(2, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasItemMissTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->hasItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('hasItem', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasItemHitTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->save(\$item);
        \$pool->hasItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(3, \$calls);

        \$call = \$calls[2];
        \$this->assertSame('hasItem', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteItemTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->deleteItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('deleteItem', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteItemsTrace()
    {
        \$pool = \$this->createCachePool();
        \$arg = ['k0', 'k1'];
        \$pool->deleteItems(\$arg);
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('deleteItems', \$call->name);
        \$this->assertSame(['keys' => \$arg, 'result' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testSaveTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->save(\$item);
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('save', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testSaveDeferredTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->saveDeferred(\$item);
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('saveDeferred', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testCommitTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->commit();
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('commit', \$call->name);
        \$this->assertTrue(\$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/TraceableAdapterTest.php";
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

use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\TraceableAdapter;

/**
 * @group time-sensitive
 */
class TraceableAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testPrune' => 'TraceableAdapter just proxies',
    ];

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new TraceableAdapter(new FilesystemAdapter('', \$defaultLifetime));
    }

    public function testGetItemMissTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->getItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('getItem', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(1, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testGetItemHitTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->save(\$item);
        \$pool->getItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(3, \$calls);

        \$call = \$calls[2];
        \$this->assertSame(1, \$call->hits);
        \$this->assertSame(0, \$call->misses);
    }

    public function testGetItemsMissTrace()
    {
        \$pool = \$this->createCachePool();
        \$arg = ['k0', 'k1'];
        \$items = \$pool->getItems(\$arg);
        foreach (\$items as \$item) {
        }
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('getItems', \$call->name);
        \$this->assertSame(['k0' => false, 'k1' => false], \$call->result);
        \$this->assertSame(2, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasItemMissTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->hasItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('hasItem', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasItemHitTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->save(\$item);
        \$pool->hasItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(3, \$calls);

        \$call = \$calls[2];
        \$this->assertSame('hasItem', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteItemTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->deleteItem('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('deleteItem', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteItemsTrace()
    {
        \$pool = \$this->createCachePool();
        \$arg = ['k0', 'k1'];
        \$pool->deleteItems(\$arg);
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('deleteItems', \$call->name);
        \$this->assertSame(['keys' => \$arg, 'result' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testSaveTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->save(\$item);
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('save', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testSaveDeferredTrace()
    {
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('k')->set('foo');
        \$pool->saveDeferred(\$item);
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('saveDeferred', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testCommitTrace()
    {
        \$pool = \$this->createCachePool();
        \$pool->commit();
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('commit', \$call->name);
        \$this->assertTrue(\$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }
}
", "vendor/symfony/cache/Tests/Adapter/TraceableAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/TraceableAdapterTest.php");
    }
}
