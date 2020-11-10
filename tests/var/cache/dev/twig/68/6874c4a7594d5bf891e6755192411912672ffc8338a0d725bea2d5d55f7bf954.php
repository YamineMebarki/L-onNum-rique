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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/AbstractRedisSessionHandlerTestCase.php */
class __TwigTemplate_c570d9bc1b3cdd437d64b5af47e52c529f34df04e5ba745f0624de51fc773b02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/AbstractRedisSessionHandlerTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/AbstractRedisSessionHandlerTestCase.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\RedisSessionHandler;

/**
 * @requires extension redis
 * @group time-sensitive
 */
abstract class AbstractRedisSessionHandlerTestCase extends TestCase
{
    protected const PREFIX = 'prefix_';

    /**
     * @var RedisSessionHandler
     */
    protected \$storage;

    /**
     * @var \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\Client
     */
    protected \$redisClient;

    /**
     * @return \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\Client
     */
    abstract protected function createRedisClient(string \$host);

    protected function setUp(): void
    {
        parent::setUp();

        if (!\\extension_loaded('redis')) {
            self::markTestSkipped('Extension redis required.');
        }

        \$host = getenv('REDIS_HOST') ?: 'localhost';

        \$this->redisClient = \$this->createRedisClient(\$host);
        \$this->storage = new RedisSessionHandler(
            \$this->redisClient,
            ['prefix' => self::PREFIX]
        );
    }

    protected function tearDown(): void
    {
        \$this->redisClient = null;
        \$this->storage = null;

        parent::tearDown();
    }

    public function testOpenSession()
    {
        \$this->assertTrue(\$this->storage->open('', ''));
    }

    public function testCloseSession()
    {
        \$this->assertTrue(\$this->storage->close());
    }

    public function testReadSession()
    {
        \$this->redisClient->set(self::PREFIX.'id1', null);
        \$this->redisClient->set(self::PREFIX.'id2', 'abc123');

        \$this->assertEquals('', \$this->storage->read('id1'));
        \$this->assertEquals('abc123', \$this->storage->read('id2'));
    }

    public function testWriteSession()
    {
        \$this->assertTrue(\$this->storage->write('id', 'data'));

        \$this->assertTrue((bool) \$this->redisClient->exists(self::PREFIX.'id'));
        \$this->assertEquals('data', \$this->redisClient->get(self::PREFIX.'id'));
    }

    public function testUseSessionGcMaxLifetimeAsTimeToLive()
    {
        \$this->storage->write('id', 'data');
        \$ttl = \$this->redisClient->ttl(self::PREFIX.'id');

        \$this->assertLessThanOrEqual(ini_get('session.gc_maxlifetime'), \$ttl);
        \$this->assertGreaterThanOrEqual(0, \$ttl);
    }

    public function testDestroySession()
    {
        \$this->redisClient->set(self::PREFIX.'id', 'foo');

        \$this->assertTrue((bool) \$this->redisClient->exists(self::PREFIX.'id'));
        \$this->assertTrue(\$this->storage->destroy('id'));
        \$this->assertFalse((bool) \$this->redisClient->exists(self::PREFIX.'id'));
    }

    public function testGcSession()
    {
        \$this->assertTrue(\$this->storage->gc(123));
    }

    public function testUpdateTimestamp()
    {
        \$lowTtl = 10;

        \$this->redisClient->setex(self::PREFIX.'id', \$lowTtl, 'foo');
        \$this->storage->updateTimestamp('id', []);

        \$this->assertGreaterThan(\$lowTtl, \$this->redisClient->ttl(self::PREFIX.'id'));
    }

    /**
     * @dataProvider getOptionFixtures
     */
    public function testSupportedParam(array \$options, bool \$supported)
    {
        try {
            new RedisSessionHandler(\$this->redisClient, \$options);
            \$this->assertTrue(\$supported);
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertFalse(\$supported);
        }
    }

    public function getOptionFixtures(): array
    {
        return [
            [['prefix' => 'session'], true],
            [['prefix' => 'sfs', 'foo' => 'bar'], false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/AbstractRedisSessionHandlerTestCase.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\RedisSessionHandler;

/**
 * @requires extension redis
 * @group time-sensitive
 */
abstract class AbstractRedisSessionHandlerTestCase extends TestCase
{
    protected const PREFIX = 'prefix_';

    /**
     * @var RedisSessionHandler
     */
    protected \$storage;

    /**
     * @var \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\Client
     */
    protected \$redisClient;

    /**
     * @return \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\Client
     */
    abstract protected function createRedisClient(string \$host);

    protected function setUp(): void
    {
        parent::setUp();

        if (!\\extension_loaded('redis')) {
            self::markTestSkipped('Extension redis required.');
        }

        \$host = getenv('REDIS_HOST') ?: 'localhost';

        \$this->redisClient = \$this->createRedisClient(\$host);
        \$this->storage = new RedisSessionHandler(
            \$this->redisClient,
            ['prefix' => self::PREFIX]
        );
    }

    protected function tearDown(): void
    {
        \$this->redisClient = null;
        \$this->storage = null;

        parent::tearDown();
    }

    public function testOpenSession()
    {
        \$this->assertTrue(\$this->storage->open('', ''));
    }

    public function testCloseSession()
    {
        \$this->assertTrue(\$this->storage->close());
    }

    public function testReadSession()
    {
        \$this->redisClient->set(self::PREFIX.'id1', null);
        \$this->redisClient->set(self::PREFIX.'id2', 'abc123');

        \$this->assertEquals('', \$this->storage->read('id1'));
        \$this->assertEquals('abc123', \$this->storage->read('id2'));
    }

    public function testWriteSession()
    {
        \$this->assertTrue(\$this->storage->write('id', 'data'));

        \$this->assertTrue((bool) \$this->redisClient->exists(self::PREFIX.'id'));
        \$this->assertEquals('data', \$this->redisClient->get(self::PREFIX.'id'));
    }

    public function testUseSessionGcMaxLifetimeAsTimeToLive()
    {
        \$this->storage->write('id', 'data');
        \$ttl = \$this->redisClient->ttl(self::PREFIX.'id');

        \$this->assertLessThanOrEqual(ini_get('session.gc_maxlifetime'), \$ttl);
        \$this->assertGreaterThanOrEqual(0, \$ttl);
    }

    public function testDestroySession()
    {
        \$this->redisClient->set(self::PREFIX.'id', 'foo');

        \$this->assertTrue((bool) \$this->redisClient->exists(self::PREFIX.'id'));
        \$this->assertTrue(\$this->storage->destroy('id'));
        \$this->assertFalse((bool) \$this->redisClient->exists(self::PREFIX.'id'));
    }

    public function testGcSession()
    {
        \$this->assertTrue(\$this->storage->gc(123));
    }

    public function testUpdateTimestamp()
    {
        \$lowTtl = 10;

        \$this->redisClient->setex(self::PREFIX.'id', \$lowTtl, 'foo');
        \$this->storage->updateTimestamp('id', []);

        \$this->assertGreaterThan(\$lowTtl, \$this->redisClient->ttl(self::PREFIX.'id'));
    }

    /**
     * @dataProvider getOptionFixtures
     */
    public function testSupportedParam(array \$options, bool \$supported)
    {
        try {
            new RedisSessionHandler(\$this->redisClient, \$options);
            \$this->assertTrue(\$supported);
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertFalse(\$supported);
        }
    }

    public function getOptionFixtures(): array
    {
        return [
            [['prefix' => 'session'], true],
            [['prefix' => 'sfs', 'foo' => 'bar'], false],
        ];
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/AbstractRedisSessionHandlerTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/AbstractRedisSessionHandlerTestCase.php");
    }
}
