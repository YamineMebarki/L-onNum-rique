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

/* vendor/symfony/cache/Tests/Adapter/TagAwareAdapterTest.php */
class __TwigTemplate_9c9487da1d3e2b4c8a2a75727d34e9e6b35d2dd5187195cd5e3ad60a0b966a68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/TagAwareAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/TagAwareAdapterTest.php"));

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

use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Tests\\Traits\\TagAwareTestTrait;

/**
 * @group time-sensitive
 */
class TagAwareAdapterTest extends AdapterTestCase
{
    use TagAwareTestTrait;

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new TagAwareAdapter(new FilesystemAdapter('', \$defaultLifetime));
    }

    public static function tearDownAfterClass(): void
    {
        FilesystemAdapterTest::rmdir(sys_get_temp_dir().'/symfony-cache');
    }

    /**
     * DevLaon feature specific to TagAwareAdapter as it implicit needs to save deferred when also saving expiry info.
     */
    public function testInvalidateCommitsSeperatePools()
    {
        \$pool1 = \$this->createCachePool();

        \$foo = \$pool1->getItem('foo');
        \$foo->tag('tag');

        \$pool1->saveDeferred(\$foo->set('foo'));
        \$pool1->invalidateTags(['tag']);

        \$pool2 = \$this->createCachePool();
        \$foo = \$pool2->getItem('foo');

        \$this->assertTrue(\$foo->isHit());
    }

    public function testPrune()
    {
        \$cache = new TagAwareAdapter(\$this->getPruneableMock());
        \$this->assertTrue(\$cache->prune());

        \$cache = new TagAwareAdapter(\$this->getNonPruneableMock());
        \$this->assertFalse(\$cache->prune());

        \$cache = new TagAwareAdapter(\$this->getFailingPruneableMock());
        \$this->assertFalse(\$cache->prune());
    }

    public function testKnownTagVersionsTtl()
    {
        \$itemsPool = new FilesystemAdapter('', 10);
        \$tagsPool = \$this
            ->getMockBuilder(AdapterInterface::class)
            ->getMock();

        \$pool = new TagAwareAdapter(\$itemsPool, \$tagsPool, 10);

        \$item = \$pool->getItem('foo');
        \$item->tag(['baz']);
        \$item->expiresAfter(100);

        \$tag = \$this->getMockBuilder(CacheItemInterface::class)->getMock();
        \$tag->expects(self::exactly(2))->method('get')->willReturn(10);

        \$tagsPool->expects(self::exactly(2))->method('getItems')->willReturn([
            'baz'.TagAwareAdapter::TAGS_PREFIX => \$tag,
        ]);

        \$pool->save(\$item);
        \$this->assertTrue(\$pool->getItem('foo')->isHit());
        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        sleep(20);

        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        sleep(5);

        \$this->assertTrue(\$pool->getItem('foo')->isHit());
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(true);

        return \$pruneable;
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getFailingPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(false);

        return \$pruneable;
    }

    /**
     * @return MockObject|AdapterInterface
     */
    private function getNonPruneableMock()
    {
        return \$this
            ->getMockBuilder(AdapterInterface::class)
            ->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/TagAwareAdapterTest.php";
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

use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Tests\\Traits\\TagAwareTestTrait;

/**
 * @group time-sensitive
 */
class TagAwareAdapterTest extends AdapterTestCase
{
    use TagAwareTestTrait;

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new TagAwareAdapter(new FilesystemAdapter('', \$defaultLifetime));
    }

    public static function tearDownAfterClass(): void
    {
        FilesystemAdapterTest::rmdir(sys_get_temp_dir().'/symfony-cache');
    }

    /**
     * DevLaon feature specific to TagAwareAdapter as it implicit needs to save deferred when also saving expiry info.
     */
    public function testInvalidateCommitsSeperatePools()
    {
        \$pool1 = \$this->createCachePool();

        \$foo = \$pool1->getItem('foo');
        \$foo->tag('tag');

        \$pool1->saveDeferred(\$foo->set('foo'));
        \$pool1->invalidateTags(['tag']);

        \$pool2 = \$this->createCachePool();
        \$foo = \$pool2->getItem('foo');

        \$this->assertTrue(\$foo->isHit());
    }

    public function testPrune()
    {
        \$cache = new TagAwareAdapter(\$this->getPruneableMock());
        \$this->assertTrue(\$cache->prune());

        \$cache = new TagAwareAdapter(\$this->getNonPruneableMock());
        \$this->assertFalse(\$cache->prune());

        \$cache = new TagAwareAdapter(\$this->getFailingPruneableMock());
        \$this->assertFalse(\$cache->prune());
    }

    public function testKnownTagVersionsTtl()
    {
        \$itemsPool = new FilesystemAdapter('', 10);
        \$tagsPool = \$this
            ->getMockBuilder(AdapterInterface::class)
            ->getMock();

        \$pool = new TagAwareAdapter(\$itemsPool, \$tagsPool, 10);

        \$item = \$pool->getItem('foo');
        \$item->tag(['baz']);
        \$item->expiresAfter(100);

        \$tag = \$this->getMockBuilder(CacheItemInterface::class)->getMock();
        \$tag->expects(self::exactly(2))->method('get')->willReturn(10);

        \$tagsPool->expects(self::exactly(2))->method('getItems')->willReturn([
            'baz'.TagAwareAdapter::TAGS_PREFIX => \$tag,
        ]);

        \$pool->save(\$item);
        \$this->assertTrue(\$pool->getItem('foo')->isHit());
        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        sleep(20);

        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        sleep(5);

        \$this->assertTrue(\$pool->getItem('foo')->isHit());
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(true);

        return \$pruneable;
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getFailingPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(false);

        return \$pruneable;
    }

    /**
     * @return MockObject|AdapterInterface
     */
    private function getNonPruneableMock()
    {
        return \$this
            ->getMockBuilder(AdapterInterface::class)
            ->getMock();
    }
}
", "vendor/symfony/cache/Tests/Adapter/TagAwareAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/TagAwareAdapterTest.php");
    }
}
