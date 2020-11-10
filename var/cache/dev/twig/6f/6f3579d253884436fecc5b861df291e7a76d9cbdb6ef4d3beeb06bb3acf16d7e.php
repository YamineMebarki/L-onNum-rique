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

/* vendor/symfony/cache/Tests/Simple/CacheTestCase.php */
class __TwigTemplate_10e9d1949520e2ed8614f2ad1326b762d3a8dba6b556173c705306b9d396ce7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/CacheTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/CacheTestCase.php"));

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

use Cache\\IntegrationTests\\SimpleCacheTest;
use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;

abstract class CacheTestCase extends SimpleCacheTest
{
    protected function setUp(): void
    {
        parent::setUp();

        if (!\\array_key_exists('testPrune', \$this->skippedTests) && !\$this->createSimpleCache() instanceof PruneableInterface) {
            \$this->skippedTests['testPrune'] = 'Not a pruneable cache pool.';
        }
    }

    public static function validKeys()
    {
        return array_merge(parent::validKeys(), [[\"a\\0b\"]]);
    }

    public function testDefaultLifeTime()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = \$this->createSimpleCache(2);
        \$cache->clear();

        \$cache->set('key.dlt', 'value');
        sleep(1);

        \$this->assertSame('value', \$cache->get('key.dlt'));

        sleep(2);
        \$this->assertNull(\$cache->get('key.dlt'));

        \$cache->clear();
    }

    public function testNotUnserializable()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = \$this->createSimpleCache();
        \$cache->clear();

        \$cache->set('foo', new NotUnserializable());

        \$this->assertNull(\$cache->get('foo'));

        \$cache->setMultiple(['foo' => new NotUnserializable()]);

        foreach (\$cache->getMultiple(['foo']) as \$value) {
        }
        \$this->assertNull(\$value);

        \$cache->clear();
    }

    public function testPrune()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        if (!method_exists(\$this, 'isPruned')) {
            \$this->fail('DevLaon classes for pruneable caches must implement `isPruned(\$cache, \$name)` method.');
        }

        /** @var PruneableInterface|CacheInterface \$cache */
        \$cache = \$this->createSimpleCache();
        \$cache->clear();

        \$cache->set('foo', 'foo-val', new \\DateInterval('PT05S'));
        \$cache->set('bar', 'bar-val', new \\DateInterval('PT10S'));
        \$cache->set('baz', 'baz-val', new \\DateInterval('PT15S'));
        \$cache->set('qux', 'qux-val', new \\DateInterval('PT20S'));

        sleep(30);
        \$cache->prune();
        \$this->assertTrue(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'bar'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'baz'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'qux'));

        \$cache->set('foo', 'foo-val');
        \$cache->set('bar', 'bar-val', new \\DateInterval('PT20S'));
        \$cache->set('baz', 'baz-val', new \\DateInterval('PT40S'));
        \$cache->set('qux', 'qux-val', new \\DateInterval('PT80S'));

        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'bar'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'baz'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'qux'));

        sleep(30);
        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'bar'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'baz'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'qux'));

        sleep(30);
        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'baz'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'qux'));

        sleep(30);
        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'qux'));

        \$cache->clear();
    }
}

class NotUnserializable
{
    public function __wakeup()
    {
        throw new \\Exception(__CLASS__);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Simple/CacheTestCase.php";
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

use Cache\\IntegrationTests\\SimpleCacheTest;
use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;

abstract class CacheTestCase extends SimpleCacheTest
{
    protected function setUp(): void
    {
        parent::setUp();

        if (!\\array_key_exists('testPrune', \$this->skippedTests) && !\$this->createSimpleCache() instanceof PruneableInterface) {
            \$this->skippedTests['testPrune'] = 'Not a pruneable cache pool.';
        }
    }

    public static function validKeys()
    {
        return array_merge(parent::validKeys(), [[\"a\\0b\"]]);
    }

    public function testDefaultLifeTime()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = \$this->createSimpleCache(2);
        \$cache->clear();

        \$cache->set('key.dlt', 'value');
        sleep(1);

        \$this->assertSame('value', \$cache->get('key.dlt'));

        sleep(2);
        \$this->assertNull(\$cache->get('key.dlt'));

        \$cache->clear();
    }

    public function testNotUnserializable()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = \$this->createSimpleCache();
        \$cache->clear();

        \$cache->set('foo', new NotUnserializable());

        \$this->assertNull(\$cache->get('foo'));

        \$cache->setMultiple(['foo' => new NotUnserializable()]);

        foreach (\$cache->getMultiple(['foo']) as \$value) {
        }
        \$this->assertNull(\$value);

        \$cache->clear();
    }

    public function testPrune()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        if (!method_exists(\$this, 'isPruned')) {
            \$this->fail('DevLaon classes for pruneable caches must implement `isPruned(\$cache, \$name)` method.');
        }

        /** @var PruneableInterface|CacheInterface \$cache */
        \$cache = \$this->createSimpleCache();
        \$cache->clear();

        \$cache->set('foo', 'foo-val', new \\DateInterval('PT05S'));
        \$cache->set('bar', 'bar-val', new \\DateInterval('PT10S'));
        \$cache->set('baz', 'baz-val', new \\DateInterval('PT15S'));
        \$cache->set('qux', 'qux-val', new \\DateInterval('PT20S'));

        sleep(30);
        \$cache->prune();
        \$this->assertTrue(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'bar'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'baz'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'qux'));

        \$cache->set('foo', 'foo-val');
        \$cache->set('bar', 'bar-val', new \\DateInterval('PT20S'));
        \$cache->set('baz', 'baz-val', new \\DateInterval('PT40S'));
        \$cache->set('qux', 'qux-val', new \\DateInterval('PT80S'));

        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'bar'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'baz'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'qux'));

        sleep(30);
        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'bar'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'baz'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'qux'));

        sleep(30);
        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'baz'));
        \$this->assertFalse(\$this->isPruned(\$cache, 'qux'));

        sleep(30);
        \$cache->prune();
        \$this->assertFalse(\$this->isPruned(\$cache, 'foo'));
        \$this->assertTrue(\$this->isPruned(\$cache, 'qux'));

        \$cache->clear();
    }
}

class NotUnserializable
{
    public function __wakeup()
    {
        throw new \\Exception(__CLASS__);
    }
}
", "vendor/symfony/cache/Tests/Simple/CacheTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/CacheTestCase.php");
    }
}
