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

/* vendor/symfony/cache/Tests/Adapter/MemcachedAdapterTest.php */
class __TwigTemplate_e42ae0c051fb98b47c1882d9b2a47cadd98d677c97f251af564fe32a7fdd92a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/MemcachedAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/MemcachedAdapterTest.php"));

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
use Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter;

class MemcachedAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testHasItemReturnsFalseWhenDeferredItemIsExpired' => 'Testing expiration slows down the test suite',
        'testDefaultLifeTime' => 'Testing expiration slows down the test suite',
    ];

    protected static \$client;

    public static function setUpBeforeClass(): void
    {
        if (!MemcachedAdapter::isSupported()) {
            self::markTestSkipped('Extension memcached >=2.2.0 required.');
        }
        self::\$client = AbstractAdapter::createConnection('memcached://'.getenv('MEMCACHED_HOST'), ['binary_protocol' => false]);
        self::\$client->get('foo');
        \$code = self::\$client->getResultCode();

        if (\\Memcached::RES_SUCCESS !== \$code && \\Memcached::RES_NOTFOUND !== \$code) {
            self::markTestSkipped('Memcached error: '.strtolower(self::\$client->getResultMessage()));
        }
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        \$client = \$defaultLifetime ? AbstractAdapter::createConnection('memcached://'.getenv('MEMCACHED_HOST')) : self::\$client;

        return new MemcachedAdapter(\$client, str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);
    }

    public function testOptions()
    {
        \$client = MemcachedAdapter::createConnection([], [
            'libketama_compatible' => false,
            'distribution' => 'modula',
            'compression' => true,
            'serializer' => 'php',
            'hash' => 'md5',
        ]);

        \$this->assertSame(\\Memcached::SERIALIZER_PHP, \$client->getOption(\\Memcached::OPT_SERIALIZER));
        \$this->assertSame(\\Memcached::HASH_MD5, \$client->getOption(\\Memcached::OPT_HASH));
        \$this->assertTrue(\$client->getOption(\\Memcached::OPT_COMPRESSION));
        \$this->assertSame(0, \$client->getOption(\\Memcached::OPT_LIBKETAMA_COMPATIBLE));
        \$this->assertSame(\\Memcached::DISTRIBUTION_MODULA, \$client->getOption(\\Memcached::OPT_DISTRIBUTION));
    }

    /**
     * @dataProvider provideBadOptions
     */
    public function testBadOptions(\$name, \$value)
    {
        \$this->expectException('ErrorException');
        \$this->expectExceptionMessage('constant(): Couldn\\'t find constant Memcached::');
        MemcachedAdapter::createConnection([], [\$name => \$value]);
    }

    public function provideBadOptions()
    {
        return [
            ['foo', 'bar'],
            ['hash', 'zyx'],
            ['serializer', 'zyx'],
            ['distribution', 'zyx'],
        ];
    }

    public function testDefaultOptions()
    {
        \$this->assertTrue(MemcachedAdapter::isSupported());

        \$client = MemcachedAdapter::createConnection([]);

        \$this->assertTrue(\$client->getOption(\\Memcached::OPT_COMPRESSION));
        \$this->assertSame(1, \$client->getOption(\\Memcached::OPT_BINARY_PROTOCOL));
        \$this->assertSame(1, \$client->getOption(\\Memcached::OPT_TCP_NODELAY));
        \$this->assertSame(1, \$client->getOption(\\Memcached::OPT_LIBKETAMA_COMPATIBLE));
    }

    public function testOptionSerializer()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\CacheException');
        \$this->expectExceptionMessage('MemcachedAdapter: \"serializer\" option must be \"php\" or \"igbinary\".');
        if (!\\Memcached::HAVE_JSON) {
            \$this->markTestSkipped('Memcached::HAVE_JSON required');
        }

        new MemcachedAdapter(MemcachedAdapter::createConnection([], ['serializer' => 'json']));
    }

    /**
     * @dataProvider provideServersSetting
     */
    public function testServersSetting(\$dsn, \$host, \$port)
    {
        \$client1 = MemcachedAdapter::createConnection(\$dsn);
        \$client2 = MemcachedAdapter::createConnection([\$dsn]);
        \$client3 = MemcachedAdapter::createConnection([[\$host, \$port]]);
        \$expect = [
            'host' => \$host,
            'port' => \$port,
        ];

        \$f = function (\$s) { return ['host' => \$s['host'], 'port' => \$s['port']]; };
        \$this->assertSame([\$expect], array_map(\$f, \$client1->getServerList()));
        \$this->assertSame([\$expect], array_map(\$f, \$client2->getServerList()));
        \$this->assertSame([\$expect], array_map(\$f, \$client3->getServerList()));
    }

    public function provideServersSetting()
    {
        yield [
            'memcached://127.0.0.1/50',
            '127.0.0.1',
            11211,
        ];
        yield [
            'memcached://localhost:11222?weight=25',
            'localhost',
            11222,
        ];
        if (filter_var(ini_get('memcached.use_sasl'), FILTER_VALIDATE_BOOLEAN)) {
            yield [
                'memcached://user:password@127.0.0.1?weight=50',
                '127.0.0.1',
                11211,
            ];
        }
        yield [
            'memcached:///var/run/memcached.sock?weight=25',
            '/var/run/memcached.sock',
            0,
        ];
        yield [
            'memcached:///var/local/run/memcached.socket?weight=25',
            '/var/local/run/memcached.socket',
            0,
        ];
        if (filter_var(ini_get('memcached.use_sasl'), FILTER_VALIDATE_BOOLEAN)) {
            yield [
                'memcached://user:password@/var/local/run/memcached.socket?weight=25',
                '/var/local/run/memcached.socket',
                0,
            ];
        }
    }

    /**
     * @dataProvider provideDsnWithOptions
     */
    public function testDsnWithOptions(\$dsn, array \$options, array \$expectedOptions)
    {
        \$client = MemcachedAdapter::createConnection(\$dsn, \$options);

        foreach (\$expectedOptions as \$option => \$expect) {
            \$this->assertSame(\$expect, \$client->getOption(\$option));
        }
    }

    public function provideDsnWithOptions()
    {
        if (!class_exists('\\Memcached')) {
            self::markTestSkipped('Extension memcached required.');
        }

        yield [
            'memcached://localhost:11222?retry_timeout=10',
            [\\Memcached::OPT_RETRY_TIMEOUT => 8],
            [\\Memcached::OPT_RETRY_TIMEOUT => 10],
        ];
        yield [
            'memcached://localhost:11222?socket_recv_size=1&socket_send_size=2',
            [\\Memcached::OPT_RETRY_TIMEOUT => 8],
            [\\Memcached::OPT_SOCKET_RECV_SIZE => 1, \\Memcached::OPT_SOCKET_SEND_SIZE => 2, \\Memcached::OPT_RETRY_TIMEOUT => 8],
        ];
    }

    public function testClear()
    {
        \$this->assertTrue(\$this->createCachePool()->clear());
    }

    public function testMultiServerDsn()
    {
        \$dsn = 'memcached:?host[localhost]&host[localhost:12345]&host[/some/memcached.sock:]=3';
        \$client = MemcachedAdapter::createConnection(\$dsn);

        \$expected = [
            0 => [
                'host' => 'localhost',
                'port' => 11211,
                'type' => 'TCP',
            ],
            1 => [
                'host' => 'localhost',
                'port' => 12345,
                'type' => 'TCP',
            ],
            2 => [
                'host' => '/some/memcached.sock',
                'port' => 0,
                'type' => 'SOCKET',
            ],
        ];
        \$this->assertSame(\$expected, \$client->getServerList());

        \$dsn = 'memcached://localhost?host[foo.bar]=3';
        \$client = MemcachedAdapter::createConnection(\$dsn);

        \$expected = [
            0 => [
                'host' => 'localhost',
                'port' => 11211,
                'type' => 'TCP',
            ],
            1 => [
                'host' => 'foo.bar',
                'port' => 11211,
                'type' => 'TCP',
            ],
        ];
        \$this->assertSame(\$expected, \$client->getServerList());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/MemcachedAdapterTest.php";
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
use Symfony\\Component\\Cache\\Adapter\\MemcachedAdapter;

class MemcachedAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testHasItemReturnsFalseWhenDeferredItemIsExpired' => 'Testing expiration slows down the test suite',
        'testDefaultLifeTime' => 'Testing expiration slows down the test suite',
    ];

    protected static \$client;

    public static function setUpBeforeClass(): void
    {
        if (!MemcachedAdapter::isSupported()) {
            self::markTestSkipped('Extension memcached >=2.2.0 required.');
        }
        self::\$client = AbstractAdapter::createConnection('memcached://'.getenv('MEMCACHED_HOST'), ['binary_protocol' => false]);
        self::\$client->get('foo');
        \$code = self::\$client->getResultCode();

        if (\\Memcached::RES_SUCCESS !== \$code && \\Memcached::RES_NOTFOUND !== \$code) {
            self::markTestSkipped('Memcached error: '.strtolower(self::\$client->getResultMessage()));
        }
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        \$client = \$defaultLifetime ? AbstractAdapter::createConnection('memcached://'.getenv('MEMCACHED_HOST')) : self::\$client;

        return new MemcachedAdapter(\$client, str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);
    }

    public function testOptions()
    {
        \$client = MemcachedAdapter::createConnection([], [
            'libketama_compatible' => false,
            'distribution' => 'modula',
            'compression' => true,
            'serializer' => 'php',
            'hash' => 'md5',
        ]);

        \$this->assertSame(\\Memcached::SERIALIZER_PHP, \$client->getOption(\\Memcached::OPT_SERIALIZER));
        \$this->assertSame(\\Memcached::HASH_MD5, \$client->getOption(\\Memcached::OPT_HASH));
        \$this->assertTrue(\$client->getOption(\\Memcached::OPT_COMPRESSION));
        \$this->assertSame(0, \$client->getOption(\\Memcached::OPT_LIBKETAMA_COMPATIBLE));
        \$this->assertSame(\\Memcached::DISTRIBUTION_MODULA, \$client->getOption(\\Memcached::OPT_DISTRIBUTION));
    }

    /**
     * @dataProvider provideBadOptions
     */
    public function testBadOptions(\$name, \$value)
    {
        \$this->expectException('ErrorException');
        \$this->expectExceptionMessage('constant(): Couldn\\'t find constant Memcached::');
        MemcachedAdapter::createConnection([], [\$name => \$value]);
    }

    public function provideBadOptions()
    {
        return [
            ['foo', 'bar'],
            ['hash', 'zyx'],
            ['serializer', 'zyx'],
            ['distribution', 'zyx'],
        ];
    }

    public function testDefaultOptions()
    {
        \$this->assertTrue(MemcachedAdapter::isSupported());

        \$client = MemcachedAdapter::createConnection([]);

        \$this->assertTrue(\$client->getOption(\\Memcached::OPT_COMPRESSION));
        \$this->assertSame(1, \$client->getOption(\\Memcached::OPT_BINARY_PROTOCOL));
        \$this->assertSame(1, \$client->getOption(\\Memcached::OPT_TCP_NODELAY));
        \$this->assertSame(1, \$client->getOption(\\Memcached::OPT_LIBKETAMA_COMPATIBLE));
    }

    public function testOptionSerializer()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\CacheException');
        \$this->expectExceptionMessage('MemcachedAdapter: \"serializer\" option must be \"php\" or \"igbinary\".');
        if (!\\Memcached::HAVE_JSON) {
            \$this->markTestSkipped('Memcached::HAVE_JSON required');
        }

        new MemcachedAdapter(MemcachedAdapter::createConnection([], ['serializer' => 'json']));
    }

    /**
     * @dataProvider provideServersSetting
     */
    public function testServersSetting(\$dsn, \$host, \$port)
    {
        \$client1 = MemcachedAdapter::createConnection(\$dsn);
        \$client2 = MemcachedAdapter::createConnection([\$dsn]);
        \$client3 = MemcachedAdapter::createConnection([[\$host, \$port]]);
        \$expect = [
            'host' => \$host,
            'port' => \$port,
        ];

        \$f = function (\$s) { return ['host' => \$s['host'], 'port' => \$s['port']]; };
        \$this->assertSame([\$expect], array_map(\$f, \$client1->getServerList()));
        \$this->assertSame([\$expect], array_map(\$f, \$client2->getServerList()));
        \$this->assertSame([\$expect], array_map(\$f, \$client3->getServerList()));
    }

    public function provideServersSetting()
    {
        yield [
            'memcached://127.0.0.1/50',
            '127.0.0.1',
            11211,
        ];
        yield [
            'memcached://localhost:11222?weight=25',
            'localhost',
            11222,
        ];
        if (filter_var(ini_get('memcached.use_sasl'), FILTER_VALIDATE_BOOLEAN)) {
            yield [
                'memcached://user:password@127.0.0.1?weight=50',
                '127.0.0.1',
                11211,
            ];
        }
        yield [
            'memcached:///var/run/memcached.sock?weight=25',
            '/var/run/memcached.sock',
            0,
        ];
        yield [
            'memcached:///var/local/run/memcached.socket?weight=25',
            '/var/local/run/memcached.socket',
            0,
        ];
        if (filter_var(ini_get('memcached.use_sasl'), FILTER_VALIDATE_BOOLEAN)) {
            yield [
                'memcached://user:password@/var/local/run/memcached.socket?weight=25',
                '/var/local/run/memcached.socket',
                0,
            ];
        }
    }

    /**
     * @dataProvider provideDsnWithOptions
     */
    public function testDsnWithOptions(\$dsn, array \$options, array \$expectedOptions)
    {
        \$client = MemcachedAdapter::createConnection(\$dsn, \$options);

        foreach (\$expectedOptions as \$option => \$expect) {
            \$this->assertSame(\$expect, \$client->getOption(\$option));
        }
    }

    public function provideDsnWithOptions()
    {
        if (!class_exists('\\Memcached')) {
            self::markTestSkipped('Extension memcached required.');
        }

        yield [
            'memcached://localhost:11222?retry_timeout=10',
            [\\Memcached::OPT_RETRY_TIMEOUT => 8],
            [\\Memcached::OPT_RETRY_TIMEOUT => 10],
        ];
        yield [
            'memcached://localhost:11222?socket_recv_size=1&socket_send_size=2',
            [\\Memcached::OPT_RETRY_TIMEOUT => 8],
            [\\Memcached::OPT_SOCKET_RECV_SIZE => 1, \\Memcached::OPT_SOCKET_SEND_SIZE => 2, \\Memcached::OPT_RETRY_TIMEOUT => 8],
        ];
    }

    public function testClear()
    {
        \$this->assertTrue(\$this->createCachePool()->clear());
    }

    public function testMultiServerDsn()
    {
        \$dsn = 'memcached:?host[localhost]&host[localhost:12345]&host[/some/memcached.sock:]=3';
        \$client = MemcachedAdapter::createConnection(\$dsn);

        \$expected = [
            0 => [
                'host' => 'localhost',
                'port' => 11211,
                'type' => 'TCP',
            ],
            1 => [
                'host' => 'localhost',
                'port' => 12345,
                'type' => 'TCP',
            ],
            2 => [
                'host' => '/some/memcached.sock',
                'port' => 0,
                'type' => 'SOCKET',
            ],
        ];
        \$this->assertSame(\$expected, \$client->getServerList());

        \$dsn = 'memcached://localhost?host[foo.bar]=3';
        \$client = MemcachedAdapter::createConnection(\$dsn);

        \$expected = [
            0 => [
                'host' => 'localhost',
                'port' => 11211,
                'type' => 'TCP',
            ],
            1 => [
                'host' => 'foo.bar',
                'port' => 11211,
                'type' => 'TCP',
            ],
        ];
        \$this->assertSame(\$expected, \$client->getServerList());
    }
}
", "vendor/symfony/cache/Tests/Adapter/MemcachedAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/MemcachedAdapterTest.php");
    }
}
