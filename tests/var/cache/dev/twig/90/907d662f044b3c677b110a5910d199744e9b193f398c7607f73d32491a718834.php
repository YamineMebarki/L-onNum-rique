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

/* vendor/symfony/cache/Tests/Adapter/PhpArrayAdapterTest.php */
class __TwigTemplate_3a4efa1cf7bc56743d9fa519b24683ca974cef1b5ec551ec6251c5069ee4a20e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/PhpArrayAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/PhpArrayAdapterTest.php"));

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

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;

/**
 * @group time-sensitive
 */
class PhpArrayAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testGet' => 'PhpArrayAdapter is read-only.',
        'testRecursiveGet' => 'PhpArrayAdapter is read-only.',
        'testBasicUsage' => 'PhpArrayAdapter is read-only.',
        'testBasicUsageWithLongKey' => 'PhpArrayAdapter is read-only.',
        'testClear' => 'PhpArrayAdapter is read-only.',
        'testClearWithDeferredItems' => 'PhpArrayAdapter is read-only.',
        'testDeleteItem' => 'PhpArrayAdapter is read-only.',
        'testSaveExpired' => 'PhpArrayAdapter is read-only.',
        'testSaveWithoutExpire' => 'PhpArrayAdapter is read-only.',
        'testDeferredSave' => 'PhpArrayAdapter is read-only.',
        'testDeferredSaveWithoutCommit' => 'PhpArrayAdapter is read-only.',
        'testDeleteItems' => 'PhpArrayAdapter is read-only.',
        'testDeleteDeferredItem' => 'PhpArrayAdapter is read-only.',
        'testCommit' => 'PhpArrayAdapter is read-only.',
        'testSaveDeferredWhenChangingValues' => 'PhpArrayAdapter is read-only.',
        'testSaveDeferredOverwrite' => 'PhpArrayAdapter is read-only.',
        'testIsHitDeferred' => 'PhpArrayAdapter is read-only.',

        'testExpiresAt' => 'PhpArrayAdapter does not support expiration.',
        'testExpiresAtWithNull' => 'PhpArrayAdapter does not support expiration.',
        'testExpiresAfterWithNull' => 'PhpArrayAdapter does not support expiration.',
        'testDeferredExpired' => 'PhpArrayAdapter does not support expiration.',
        'testExpiration' => 'PhpArrayAdapter does not support expiration.',

        'testGetItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testGetItemsInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testHasItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testDeleteItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testDeleteItemsInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',

        'testDefaultLifeTime' => 'PhpArrayAdapter does not allow configuring a default lifetime.',
        'testPrune' => 'PhpArrayAdapter just proxies',
    ];

    protected static \$file;

    public static function setUpBeforeClass(): void
    {
        self::\$file = sys_get_temp_dir().'/symfony-cache/php-array-adapter-test.php';
    }

    protected function tearDown(): void
    {
        if (file_exists(sys_get_temp_dir().'/symfony-cache')) {
            FilesystemAdapterTest::rmdir(sys_get_temp_dir().'/symfony-cache');
        }
    }

    public function createCachePool(\$defaultLifetime = 0, \$testMethod = null)
    {
        if ('testGetMetadata' === \$testMethod) {
            return new PhpArrayAdapter(self::\$file, new FilesystemAdapter());
        }

        return new PhpArrayAdapterWrapper(self::\$file, new NullAdapter());
    }

    public function testStore()
    {
        \$arrayWithRefs = [];
        \$arrayWithRefs[0] = 123;
        \$arrayWithRefs[1] = &\$arrayWithRefs[0];

        \$object = (object) [
            'foo' => 'bar',
            'foo2' => 'bar2',
        ];

        \$expected = [
            'null' => null,
            'serializedString' => serialize(\$object),
            'arrayWithRefs' => \$arrayWithRefs,
            'object' => \$object,
            'arrayWithObject' => ['bar' => \$object],
        ];

        \$adapter = \$this->createCachePool();
        \$adapter->warmUp(\$expected);

        foreach (\$expected as \$key => \$value) {
            \$this->assertSame(serialize(\$value), serialize(\$adapter->getItem(\$key)->get()), 'Warm up should create a PHP file that OPCache can load in memory');
        }
    }

    public function testStoredFile()
    {
        \$data = [
            'integer' => 42,
            'float' => 42.42,
            'boolean' => true,
            'array_simple' => ['foo', 'bar'],
            'array_associative' => ['foo' => 'bar', 'foo2' => 'bar2'],
        ];
        \$expected = [
            [
                'integer' => 0,
                'float' => 1,
                'boolean' => 2,
                'array_simple' => 3,
                'array_associative' => 4,
            ],
            [
                0 => 42,
                1 => 42.42,
                2 => true,
                3 => ['foo', 'bar'],
                4 => ['foo' => 'bar', 'foo2' => 'bar2'],
            ],
        ];

        \$adapter = \$this->createCachePool();
        \$adapter->warmUp(\$data);

        \$values = eval(substr(file_get_contents(self::\$file), 6));

        \$this->assertSame(\$expected, \$values, 'Warm up should create a PHP file that OPCache can load in memory');
    }
}

class PhpArrayAdapterWrapper extends PhpArrayAdapter
{
    protected \$data = [];

    public function save(CacheItemInterface \$item)
    {
        (\\Closure::bind(function () use (\$item) {
            \$key = \$item->getKey();
            \$this->keys[\$key] = \$id = \\count(\$this->values);
            \$this->data[\$key] = \$this->values[\$id] = \$item->get();
            \$this->warmUp(\$this->data);
            list(\$this->keys, \$this->values) = eval(substr(file_get_contents(\$this->file), 6));
        }, \$this, PhpArrayAdapter::class))();

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/PhpArrayAdapterTest.php";
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

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;

/**
 * @group time-sensitive
 */
class PhpArrayAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testGet' => 'PhpArrayAdapter is read-only.',
        'testRecursiveGet' => 'PhpArrayAdapter is read-only.',
        'testBasicUsage' => 'PhpArrayAdapter is read-only.',
        'testBasicUsageWithLongKey' => 'PhpArrayAdapter is read-only.',
        'testClear' => 'PhpArrayAdapter is read-only.',
        'testClearWithDeferredItems' => 'PhpArrayAdapter is read-only.',
        'testDeleteItem' => 'PhpArrayAdapter is read-only.',
        'testSaveExpired' => 'PhpArrayAdapter is read-only.',
        'testSaveWithoutExpire' => 'PhpArrayAdapter is read-only.',
        'testDeferredSave' => 'PhpArrayAdapter is read-only.',
        'testDeferredSaveWithoutCommit' => 'PhpArrayAdapter is read-only.',
        'testDeleteItems' => 'PhpArrayAdapter is read-only.',
        'testDeleteDeferredItem' => 'PhpArrayAdapter is read-only.',
        'testCommit' => 'PhpArrayAdapter is read-only.',
        'testSaveDeferredWhenChangingValues' => 'PhpArrayAdapter is read-only.',
        'testSaveDeferredOverwrite' => 'PhpArrayAdapter is read-only.',
        'testIsHitDeferred' => 'PhpArrayAdapter is read-only.',

        'testExpiresAt' => 'PhpArrayAdapter does not support expiration.',
        'testExpiresAtWithNull' => 'PhpArrayAdapter does not support expiration.',
        'testExpiresAfterWithNull' => 'PhpArrayAdapter does not support expiration.',
        'testDeferredExpired' => 'PhpArrayAdapter does not support expiration.',
        'testExpiration' => 'PhpArrayAdapter does not support expiration.',

        'testGetItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testGetItemsInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testHasItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testDeleteItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testDeleteItemsInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',

        'testDefaultLifeTime' => 'PhpArrayAdapter does not allow configuring a default lifetime.',
        'testPrune' => 'PhpArrayAdapter just proxies',
    ];

    protected static \$file;

    public static function setUpBeforeClass(): void
    {
        self::\$file = sys_get_temp_dir().'/symfony-cache/php-array-adapter-test.php';
    }

    protected function tearDown(): void
    {
        if (file_exists(sys_get_temp_dir().'/symfony-cache')) {
            FilesystemAdapterTest::rmdir(sys_get_temp_dir().'/symfony-cache');
        }
    }

    public function createCachePool(\$defaultLifetime = 0, \$testMethod = null)
    {
        if ('testGetMetadata' === \$testMethod) {
            return new PhpArrayAdapter(self::\$file, new FilesystemAdapter());
        }

        return new PhpArrayAdapterWrapper(self::\$file, new NullAdapter());
    }

    public function testStore()
    {
        \$arrayWithRefs = [];
        \$arrayWithRefs[0] = 123;
        \$arrayWithRefs[1] = &\$arrayWithRefs[0];

        \$object = (object) [
            'foo' => 'bar',
            'foo2' => 'bar2',
        ];

        \$expected = [
            'null' => null,
            'serializedString' => serialize(\$object),
            'arrayWithRefs' => \$arrayWithRefs,
            'object' => \$object,
            'arrayWithObject' => ['bar' => \$object],
        ];

        \$adapter = \$this->createCachePool();
        \$adapter->warmUp(\$expected);

        foreach (\$expected as \$key => \$value) {
            \$this->assertSame(serialize(\$value), serialize(\$adapter->getItem(\$key)->get()), 'Warm up should create a PHP file that OPCache can load in memory');
        }
    }

    public function testStoredFile()
    {
        \$data = [
            'integer' => 42,
            'float' => 42.42,
            'boolean' => true,
            'array_simple' => ['foo', 'bar'],
            'array_associative' => ['foo' => 'bar', 'foo2' => 'bar2'],
        ];
        \$expected = [
            [
                'integer' => 0,
                'float' => 1,
                'boolean' => 2,
                'array_simple' => 3,
                'array_associative' => 4,
            ],
            [
                0 => 42,
                1 => 42.42,
                2 => true,
                3 => ['foo', 'bar'],
                4 => ['foo' => 'bar', 'foo2' => 'bar2'],
            ],
        ];

        \$adapter = \$this->createCachePool();
        \$adapter->warmUp(\$data);

        \$values = eval(substr(file_get_contents(self::\$file), 6));

        \$this->assertSame(\$expected, \$values, 'Warm up should create a PHP file that OPCache can load in memory');
    }
}

class PhpArrayAdapterWrapper extends PhpArrayAdapter
{
    protected \$data = [];

    public function save(CacheItemInterface \$item)
    {
        (\\Closure::bind(function () use (\$item) {
            \$key = \$item->getKey();
            \$this->keys[\$key] = \$id = \\count(\$this->values);
            \$this->data[\$key] = \$this->values[\$id] = \$item->get();
            \$this->warmUp(\$this->data);
            list(\$this->keys, \$this->values) = eval(substr(file_get_contents(\$this->file), 6));
        }, \$this, PhpArrayAdapter::class))();

        return true;
    }
}
", "vendor/symfony/cache/Tests/Adapter/PhpArrayAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/PhpArrayAdapterTest.php");
    }
}
