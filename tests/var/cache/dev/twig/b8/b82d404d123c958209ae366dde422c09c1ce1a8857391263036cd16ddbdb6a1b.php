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

/* vendor/symfony/cache/Tests/Simple/RedisCacheTest.php */
class __TwigTemplate_487e6d25ac43ede39e86906e3569dee8d171e7d2e3aa26cb6f208e440ccb5a3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/RedisCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/RedisCacheTest.php"));

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

use Symfony\\Component\\Cache\\Simple\\RedisCache;

/**
 * @group legacy
 */
class RedisCacheTest extends AbstractRedisCacheTest
{
    public static function setUpBeforeClass(): void
    {
        parent::setupBeforeClass();
        self::\$redis = RedisCache::createConnection('redis://'.getenv('REDIS_HOST'));
    }

    public function testCreateConnection()
    {
        \$redisHost = getenv('REDIS_HOST');

        \$redis = RedisCache::createConnection('redis://'.\$redisHost);
        \$this->assertInstanceOf(\\Redis::class, \$redis);
        \$this->assertTrue(\$redis->isConnected());
        \$this->assertSame(0, \$redis->getDbNum());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost.'/2');
        \$this->assertSame(2, \$redis->getDbNum());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost, ['timeout' => 3]);
        \$this->assertEquals(3, \$redis->getTimeout());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost.'?timeout=4');
        \$this->assertEquals(4, \$redis->getTimeout());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost, ['read_timeout' => 5]);
        \$this->assertEquals(5, \$redis->getReadTimeout());
    }

    /**
     * @dataProvider provideFailedCreateConnection
     */
    public function testFailedCreateConnection(\$dsn)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Redis connection failed');
        RedisCache::createConnection(\$dsn);
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
        RedisCache::createConnection(\$dsn);
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
        return "vendor/symfony/cache/Tests/Simple/RedisCacheTest.php";
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

use Symfony\\Component\\Cache\\Simple\\RedisCache;

/**
 * @group legacy
 */
class RedisCacheTest extends AbstractRedisCacheTest
{
    public static function setUpBeforeClass(): void
    {
        parent::setupBeforeClass();
        self::\$redis = RedisCache::createConnection('redis://'.getenv('REDIS_HOST'));
    }

    public function testCreateConnection()
    {
        \$redisHost = getenv('REDIS_HOST');

        \$redis = RedisCache::createConnection('redis://'.\$redisHost);
        \$this->assertInstanceOf(\\Redis::class, \$redis);
        \$this->assertTrue(\$redis->isConnected());
        \$this->assertSame(0, \$redis->getDbNum());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost.'/2');
        \$this->assertSame(2, \$redis->getDbNum());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost, ['timeout' => 3]);
        \$this->assertEquals(3, \$redis->getTimeout());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost.'?timeout=4');
        \$this->assertEquals(4, \$redis->getTimeout());

        \$redis = RedisCache::createConnection('redis://'.\$redisHost, ['read_timeout' => 5]);
        \$this->assertEquals(5, \$redis->getReadTimeout());
    }

    /**
     * @dataProvider provideFailedCreateConnection
     */
    public function testFailedCreateConnection(\$dsn)
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Redis connection failed');
        RedisCache::createConnection(\$dsn);
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
        RedisCache::createConnection(\$dsn);
    }

    public function provideInvalidCreateConnection()
    {
        return [
            ['foo://localhost'],
            ['redis://'],
        ];
    }
}
", "vendor/symfony/cache/Tests/Simple/RedisCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/RedisCacheTest.php");
    }
}
