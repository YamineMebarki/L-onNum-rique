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

/* vendor/symfony/cache/Tests/Adapter/RedisAdapterTest.php */
class __TwigTemplate_ae221e644492926f3b78429a2914c949e3153a71a890eb538a99a6a2c57a9382 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/RedisAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/RedisAdapterTest.php"));

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

use Symfony\\Component\\Cache\\Adapter\\AbstractAdapter;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Traits\\RedisProxy;

class RedisAdapterTest extends AbstractRedisAdapterTest
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::\$redis = AbstractAdapter::createConnection('redis://'.getenv('REDIS_HOST'), ['lazy' => true]);
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        \$adapter = parent::createCachePool(\$defaultLifetime);
        \$this->assertInstanceOf(RedisProxy::class, self::\$redis);

        return \$adapter;
    }

    /**
     * @dataProvider provideValidSchemes
     */
    public function testCreateConnection(\$dsnScheme)
    {
        \$redis = RedisAdapter::createConnection(\$dsnScheme.':?host[h1]&host[h2]&host[/foo:]');
        \$this->assertInstanceOf(\\RedisArray::class, \$redis);
        \$this->assertSame(['h1:6379', 'h2:6379', '/foo'], \$redis->_hosts());
        @\$redis = null; // some versions of phpredis connect on destruct, let's silence the warning

        \$redisHost = getenv('REDIS_HOST');

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost);
        \$this->assertInstanceOf(\\Redis::class, \$redis);
        \$this->assertTrue(\$redis->isConnected());
        \$this->assertSame(0, \$redis->getDbNum());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost.'/2');
        \$this->assertSame(2, \$redis->getDbNum());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost, ['timeout' => 3]);
        \$this->assertEquals(3, \$redis->getTimeout());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost.'?timeout=4');
        \$this->assertEquals(4, \$redis->getTimeout());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost, ['read_timeout' => 5]);
        \$this->assertEquals(5, \$redis->getReadTimeout());
    }

    /**
     * @dataProvider provideFailedCreateConnection
     */
    public function testFailedCreateConnection(\$dsn)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Redis connection failed');
        RedisAdapter::createConnection(\$dsn);
    }

    public function provideFailedCreateConnection()
    {
        return [
            ['redis://localhost:1234'],
            ['redis://foo@localhost'],
            ['redis://localhost/123'],
        ];
    }

    /**
     * @dataProvider provideInvalidCreateConnection
     */
    public function testInvalidCreateConnection(\$dsn)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid Redis DSN');
        RedisAdapter::createConnection(\$dsn);
    }

    public function provideValidSchemes()
    {
        return [
            ['redis'],
            ['rediss'],
        ];
    }

    public function provideInvalidCreateConnection()
    {
        return [
            ['foo://localhost'],
            ['redis://'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/RedisAdapterTest.php";
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

use Symfony\\Component\\Cache\\Adapter\\AbstractAdapter;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Traits\\RedisProxy;

class RedisAdapterTest extends AbstractRedisAdapterTest
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::\$redis = AbstractAdapter::createConnection('redis://'.getenv('REDIS_HOST'), ['lazy' => true]);
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        \$adapter = parent::createCachePool(\$defaultLifetime);
        \$this->assertInstanceOf(RedisProxy::class, self::\$redis);

        return \$adapter;
    }

    /**
     * @dataProvider provideValidSchemes
     */
    public function testCreateConnection(\$dsnScheme)
    {
        \$redis = RedisAdapter::createConnection(\$dsnScheme.':?host[h1]&host[h2]&host[/foo:]');
        \$this->assertInstanceOf(\\RedisArray::class, \$redis);
        \$this->assertSame(['h1:6379', 'h2:6379', '/foo'], \$redis->_hosts());
        @\$redis = null; // some versions of phpredis connect on destruct, let's silence the warning

        \$redisHost = getenv('REDIS_HOST');

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost);
        \$this->assertInstanceOf(\\Redis::class, \$redis);
        \$this->assertTrue(\$redis->isConnected());
        \$this->assertSame(0, \$redis->getDbNum());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost.'/2');
        \$this->assertSame(2, \$redis->getDbNum());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost, ['timeout' => 3]);
        \$this->assertEquals(3, \$redis->getTimeout());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost.'?timeout=4');
        \$this->assertEquals(4, \$redis->getTimeout());

        \$redis = RedisAdapter::createConnection(\$dsnScheme.'://'.\$redisHost, ['read_timeout' => 5]);
        \$this->assertEquals(5, \$redis->getReadTimeout());
    }

    /**
     * @dataProvider provideFailedCreateConnection
     */
    public function testFailedCreateConnection(\$dsn)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Redis connection failed');
        RedisAdapter::createConnection(\$dsn);
    }

    public function provideFailedCreateConnection()
    {
        return [
            ['redis://localhost:1234'],
            ['redis://foo@localhost'],
            ['redis://localhost/123'],
        ];
    }

    /**
     * @dataProvider provideInvalidCreateConnection
     */
    public function testInvalidCreateConnection(\$dsn)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Invalid Redis DSN');
        RedisAdapter::createConnection(\$dsn);
    }

    public function provideValidSchemes()
    {
        return [
            ['redis'],
            ['rediss'],
        ];
    }

    public function provideInvalidCreateConnection()
    {
        return [
            ['foo://localhost'],
            ['redis://'],
        ];
    }
}
", "vendor/symfony/cache/Tests/Adapter/RedisAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/RedisAdapterTest.php");
    }
}
