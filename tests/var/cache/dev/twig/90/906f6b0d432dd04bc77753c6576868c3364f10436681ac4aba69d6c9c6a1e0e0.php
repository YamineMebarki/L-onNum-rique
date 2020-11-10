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

/* vendor/symfony/cache/Tests/Traits/TagAwareTestTrait.php */
class __TwigTemplate_35edaa706c822745ad4e9ea3b126ccdb0f9353372423a3699ad0d2566b24fc38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Traits/TagAwareTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Traits/TagAwareTestTrait.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Traits;

use Symfony\\Component\\Cache\\CacheItem;

/**
 * Common assertions for TagAware adapters.
 *
 * @method \\Symfony\\Component\\Cache\\Adapter\\TagAwareAdapterInterface createCachePool() Must be implemented by TestCase
 */
trait TagAwareTestTrait
{
    public function testInvalidTag()
    {
        \$this->expectException('Psr\\Cache\\InvalidArgumentException');
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('foo');
        \$item->tag(':');
    }

    public function testInvalidateTags()
    {
        \$pool = \$this->createCachePool();

        \$i0 = \$pool->getItem('i0');
        \$i1 = \$pool->getItem('i1');
        \$i2 = \$pool->getItem('i2');
        \$i3 = \$pool->getItem('i3');
        \$foo = \$pool->getItem('foo');

        \$pool->save(\$i0->tag('bar'));
        \$pool->save(\$i1->tag('foo'));
        \$pool->save(\$i2->tag('foo')->tag('bar'));
        \$pool->save(\$i3->tag('foo')->tag('baz'));
        \$pool->save(\$foo);

        \$pool->invalidateTags(['bar']);

        \$this->assertFalse(\$pool->getItem('i0')->isHit());
        \$this->assertTrue(\$pool->getItem('i1')->isHit());
        \$this->assertFalse(\$pool->getItem('i2')->isHit());
        \$this->assertTrue(\$pool->getItem('i3')->isHit());
        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        \$pool->invalidateTags(['foo']);

        \$this->assertFalse(\$pool->getItem('i1')->isHit());
        \$this->assertFalse(\$pool->getItem('i3')->isHit());
        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        \$anotherPoolInstance = \$this->createCachePool();

        \$this->assertFalse(\$anotherPoolInstance->getItem('i1')->isHit());
        \$this->assertFalse(\$anotherPoolInstance->getItem('i3')->isHit());
        \$this->assertTrue(\$anotherPoolInstance->getItem('foo')->isHit());
    }

    public function testInvalidateCommits()
    {
        \$pool = \$this->createCachePool();

        \$foo = \$pool->getItem('foo');
        \$foo->tag('tag');

        \$pool->saveDeferred(\$foo->set('foo'));
        \$pool->invalidateTags(['tag']);

        // ??: This seems to contradict a bit logic in deleteItems, where it does unset(\$this->deferred[\$key]); on key matches

        \$foo = \$pool->getItem('foo');

        \$this->assertTrue(\$foo->isHit());
    }

    public function testTagsAreCleanedOnSave()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('bar'));

        \$pool->invalidateTags(['foo']);
        \$this->assertTrue(\$pool->getItem('k')->isHit());
    }

    public function testTagsAreCleanedOnDelete()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));
        \$pool->deleteItem('k');

        \$pool->save(\$pool->getItem('k'));
        \$pool->invalidateTags(['foo']);

        \$this->assertTrue(\$pool->getItem('k')->isHit());
    }

    public function testTagItemExpiry()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$pool = \$this->createCachePool(10);

        \$item = \$pool->getItem('foo');
        \$item->tag(['baz']);
        \$item->expiresAfter(100);

        \$pool->save(\$item);
        \$pool->invalidateTags(['baz']);
        \$this->assertFalse(\$pool->getItem('foo')->isHit());

        sleep(20);

        \$this->assertFalse(\$pool->getItem('foo')->isHit());
    }

    /**
     * @group legacy
     */
    public function testGetPreviousTags()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));

        \$i = \$pool->getItem('k');
        \$this->assertSame(['foo' => 'foo'], \$i->getPreviousTags());
    }

    public function testGetMetadata()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));

        \$i = \$pool->getItem('k');
        \$this->assertSame(['foo' => 'foo'], \$i->getMetadata()[CacheItem::METADATA_TAGS]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Traits/TagAwareTestTrait.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Traits;

use Symfony\\Component\\Cache\\CacheItem;

/**
 * Common assertions for TagAware adapters.
 *
 * @method \\Symfony\\Component\\Cache\\Adapter\\TagAwareAdapterInterface createCachePool() Must be implemented by TestCase
 */
trait TagAwareTestTrait
{
    public function testInvalidTag()
    {
        \$this->expectException('Psr\\Cache\\InvalidArgumentException');
        \$pool = \$this->createCachePool();
        \$item = \$pool->getItem('foo');
        \$item->tag(':');
    }

    public function testInvalidateTags()
    {
        \$pool = \$this->createCachePool();

        \$i0 = \$pool->getItem('i0');
        \$i1 = \$pool->getItem('i1');
        \$i2 = \$pool->getItem('i2');
        \$i3 = \$pool->getItem('i3');
        \$foo = \$pool->getItem('foo');

        \$pool->save(\$i0->tag('bar'));
        \$pool->save(\$i1->tag('foo'));
        \$pool->save(\$i2->tag('foo')->tag('bar'));
        \$pool->save(\$i3->tag('foo')->tag('baz'));
        \$pool->save(\$foo);

        \$pool->invalidateTags(['bar']);

        \$this->assertFalse(\$pool->getItem('i0')->isHit());
        \$this->assertTrue(\$pool->getItem('i1')->isHit());
        \$this->assertFalse(\$pool->getItem('i2')->isHit());
        \$this->assertTrue(\$pool->getItem('i3')->isHit());
        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        \$pool->invalidateTags(['foo']);

        \$this->assertFalse(\$pool->getItem('i1')->isHit());
        \$this->assertFalse(\$pool->getItem('i3')->isHit());
        \$this->assertTrue(\$pool->getItem('foo')->isHit());

        \$anotherPoolInstance = \$this->createCachePool();

        \$this->assertFalse(\$anotherPoolInstance->getItem('i1')->isHit());
        \$this->assertFalse(\$anotherPoolInstance->getItem('i3')->isHit());
        \$this->assertTrue(\$anotherPoolInstance->getItem('foo')->isHit());
    }

    public function testInvalidateCommits()
    {
        \$pool = \$this->createCachePool();

        \$foo = \$pool->getItem('foo');
        \$foo->tag('tag');

        \$pool->saveDeferred(\$foo->set('foo'));
        \$pool->invalidateTags(['tag']);

        // ??: This seems to contradict a bit logic in deleteItems, where it does unset(\$this->deferred[\$key]); on key matches

        \$foo = \$pool->getItem('foo');

        \$this->assertTrue(\$foo->isHit());
    }

    public function testTagsAreCleanedOnSave()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('bar'));

        \$pool->invalidateTags(['foo']);
        \$this->assertTrue(\$pool->getItem('k')->isHit());
    }

    public function testTagsAreCleanedOnDelete()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));
        \$pool->deleteItem('k');

        \$pool->save(\$pool->getItem('k'));
        \$pool->invalidateTags(['foo']);

        \$this->assertTrue(\$pool->getItem('k')->isHit());
    }

    public function testTagItemExpiry()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$pool = \$this->createCachePool(10);

        \$item = \$pool->getItem('foo');
        \$item->tag(['baz']);
        \$item->expiresAfter(100);

        \$pool->save(\$item);
        \$pool->invalidateTags(['baz']);
        \$this->assertFalse(\$pool->getItem('foo')->isHit());

        sleep(20);

        \$this->assertFalse(\$pool->getItem('foo')->isHit());
    }

    /**
     * @group legacy
     */
    public function testGetPreviousTags()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));

        \$i = \$pool->getItem('k');
        \$this->assertSame(['foo' => 'foo'], \$i->getPreviousTags());
    }

    public function testGetMetadata()
    {
        \$pool = \$this->createCachePool();

        \$i = \$pool->getItem('k');
        \$pool->save(\$i->tag('foo'));

        \$i = \$pool->getItem('k');
        \$this->assertSame(['foo' => 'foo'], \$i->getMetadata()[CacheItem::METADATA_TAGS]);
    }
}
", "vendor/symfony/cache/Tests/Traits/TagAwareTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Traits/TagAwareTestTrait.php");
    }
}
