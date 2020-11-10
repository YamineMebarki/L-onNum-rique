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

/* vendor/symfony/cache/Tests/Simple/TraceableCacheTest.php */
class __TwigTemplate_ad026320a7c6ef95a17ea45a2394185fdb6bb556962be934b1e1aeac48f4ee30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/TraceableCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/TraceableCacheTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Simple;

use Symfony\\Component\\Cache\\Simple\\FilesystemCache;
use Symfony\\Component\\Cache\\Simple\\TraceableCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class TraceableCacheTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testPrune' => 'TraceableCache just proxies',
    ];

    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new TraceableCache(new FilesystemCache('', \$defaultLifetime));
    }

    public function testGetMissTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->get('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('get', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(1, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testGetHitTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k', 'foo');
        \$pool->get('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame(1, \$call->hits);
        \$this->assertSame(0, \$call->misses);
    }

    public function testGetMultipleMissTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k1', 123);
        \$values = \$pool->getMultiple(['k0', 'k1']);
        foreach (\$values as \$value) {
        }
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('getMultiple', \$call->name);
        \$this->assertSame(['k1' => true, 'k0' => false], \$call->result);
        \$this->assertSame(1, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasMissTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->has('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('has', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasHitTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k', 'foo');
        \$pool->has('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('has', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->delete('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('delete', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteMultipleTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$arg = ['k0', 'k1'];
        \$pool->deleteMultiple(\$arg);
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('deleteMultiple', \$call->name);
        \$this->assertSame(['keys' => \$arg, 'result' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testTraceSetTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k', 'foo');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('set', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testSetMultipleTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->setMultiple(['k' => 'foo']);
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('setMultiple', \$call->name);
        \$this->assertSame(['keys' => ['k'], 'result' => true], \$call->result);
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
        return "vendor/symfony/cache/Tests/Simple/TraceableCacheTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Simple;

use Symfony\\Component\\Cache\\Simple\\FilesystemCache;
use Symfony\\Component\\Cache\\Simple\\TraceableCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class TraceableCacheTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testPrune' => 'TraceableCache just proxies',
    ];

    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new TraceableCache(new FilesystemCache('', \$defaultLifetime));
    }

    public function testGetMissTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->get('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('get', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(1, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testGetHitTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k', 'foo');
        \$pool->get('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame(1, \$call->hits);
        \$this->assertSame(0, \$call->misses);
    }

    public function testGetMultipleMissTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k1', 123);
        \$values = \$pool->getMultiple(['k0', 'k1']);
        foreach (\$values as \$value) {
        }
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('getMultiple', \$call->name);
        \$this->assertSame(['k1' => true, 'k0' => false], \$call->result);
        \$this->assertSame(1, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasMissTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->has('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('has', \$call->name);
        \$this->assertSame(['k' => false], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testHasHitTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k', 'foo');
        \$pool->has('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(2, \$calls);

        \$call = \$calls[1];
        \$this->assertSame('has', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->delete('k');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('delete', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testDeleteMultipleTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$arg = ['k0', 'k1'];
        \$pool->deleteMultiple(\$arg);
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('deleteMultiple', \$call->name);
        \$this->assertSame(['keys' => \$arg, 'result' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testTraceSetTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->set('k', 'foo');
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('set', \$call->name);
        \$this->assertSame(['k' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }

    public function testSetMultipleTrace()
    {
        \$pool = \$this->createSimpleCache();
        \$pool->setMultiple(['k' => 'foo']);
        \$calls = \$pool->getCalls();
        \$this->assertCount(1, \$calls);

        \$call = \$calls[0];
        \$this->assertSame('setMultiple', \$call->name);
        \$this->assertSame(['keys' => ['k'], 'result' => true], \$call->result);
        \$this->assertSame(0, \$call->hits);
        \$this->assertSame(0, \$call->misses);
        \$this->assertNotEmpty(\$call->start);
        \$this->assertNotEmpty(\$call->end);
    }
}
", "vendor/symfony/cache/Tests/Simple/TraceableCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/TraceableCacheTest.php");
    }
}
