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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MemcachedSessionHandlerTest.php */
class __TwigTemplate_b2888711a53c74e0966c83c4b26993c5018f93415e85bf161e47e38d00dd8174 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MemcachedSessionHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MemcachedSessionHandlerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler;

/**
 * @requires extension memcached
 * @group time-sensitive
 */
class MemcachedSessionHandlerTest extends TestCase
{
    const PREFIX = 'prefix_';
    const TTL = 1000;

    /**
     * @var MemcachedSessionHandler
     */
    protected \$storage;

    protected \$memcached;

    protected function setUp(): void
    {
        parent::setUp();

        if (version_compare(phpversion('memcached'), '2.2.0', '>=') && version_compare(phpversion('memcached'), '3.0.0b1', '<')) {
            \$this->markTestSkipped('Tests can only be run with memcached extension 2.1.0 or lower, or 3.0.0b1 or higher');
        }

        \$this->memcached = \$this->getMockBuilder('Memcached')->getMock();
        \$this->storage = new MemcachedSessionHandler(
            \$this->memcached,
            ['prefix' => self::PREFIX, 'expiretime' => self::TTL]
        );
    }

    protected function tearDown(): void
    {
        \$this->memcached = null;
        \$this->storage = null;
        parent::tearDown();
    }

    public function testOpenSession()
    {
        \$this->assertTrue(\$this->storage->open('', ''));
    }

    public function testCloseSession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('quit')
            ->willReturn(true)
        ;

        \$this->assertTrue(\$this->storage->close());
    }

    public function testReadSession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('get')
            ->with(self::PREFIX.'id')
        ;

        \$this->assertEquals('', \$this->storage->read('id'));
    }

    public function testWriteSession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('set')
            ->with(self::PREFIX.'id', 'data', \$this->equalTo(time() + self::TTL, 2))
            ->willReturn(true)
        ;

        \$this->assertTrue(\$this->storage->write('id', 'data'));
    }

    public function testDestroySession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('delete')
            ->with(self::PREFIX.'id')
            ->willReturn(true)
        ;

        \$this->assertTrue(\$this->storage->destroy('id'));
    }

    public function testGcSession()
    {
        \$this->assertTrue(\$this->storage->gc(123));
    }

    /**
     * @dataProvider getOptionFixtures
     */
    public function testSupportedOptions(\$options, \$supported)
    {
        try {
            new MemcachedSessionHandler(\$this->memcached, \$options);
            \$this->assertTrue(\$supported);
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertFalse(\$supported);
        }
    }

    public function getOptionFixtures()
    {
        return [
            [['prefix' => 'session'], true],
            [['expiretime' => 100], true],
            [['prefix' => 'session', 'expiretime' => 200], true],
            [['expiretime' => 100, 'foo' => 'bar'], false],
        ];
    }

    public function testGetConnection()
    {
        \$method = new \\ReflectionMethod(\$this->storage, 'getMemcached');
        \$method->setAccessible(true);

        \$this->assertInstanceOf('\\Memcached', \$method->invoke(\$this->storage));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MemcachedSessionHandlerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler;

/**
 * @requires extension memcached
 * @group time-sensitive
 */
class MemcachedSessionHandlerTest extends TestCase
{
    const PREFIX = 'prefix_';
    const TTL = 1000;

    /**
     * @var MemcachedSessionHandler
     */
    protected \$storage;

    protected \$memcached;

    protected function setUp(): void
    {
        parent::setUp();

        if (version_compare(phpversion('memcached'), '2.2.0', '>=') && version_compare(phpversion('memcached'), '3.0.0b1', '<')) {
            \$this->markTestSkipped('Tests can only be run with memcached extension 2.1.0 or lower, or 3.0.0b1 or higher');
        }

        \$this->memcached = \$this->getMockBuilder('Memcached')->getMock();
        \$this->storage = new MemcachedSessionHandler(
            \$this->memcached,
            ['prefix' => self::PREFIX, 'expiretime' => self::TTL]
        );
    }

    protected function tearDown(): void
    {
        \$this->memcached = null;
        \$this->storage = null;
        parent::tearDown();
    }

    public function testOpenSession()
    {
        \$this->assertTrue(\$this->storage->open('', ''));
    }

    public function testCloseSession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('quit')
            ->willReturn(true)
        ;

        \$this->assertTrue(\$this->storage->close());
    }

    public function testReadSession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('get')
            ->with(self::PREFIX.'id')
        ;

        \$this->assertEquals('', \$this->storage->read('id'));
    }

    public function testWriteSession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('set')
            ->with(self::PREFIX.'id', 'data', \$this->equalTo(time() + self::TTL, 2))
            ->willReturn(true)
        ;

        \$this->assertTrue(\$this->storage->write('id', 'data'));
    }

    public function testDestroySession()
    {
        \$this->memcached
            ->expects(\$this->once())
            ->method('delete')
            ->with(self::PREFIX.'id')
            ->willReturn(true)
        ;

        \$this->assertTrue(\$this->storage->destroy('id'));
    }

    public function testGcSession()
    {
        \$this->assertTrue(\$this->storage->gc(123));
    }

    /**
     * @dataProvider getOptionFixtures
     */
    public function testSupportedOptions(\$options, \$supported)
    {
        try {
            new MemcachedSessionHandler(\$this->memcached, \$options);
            \$this->assertTrue(\$supported);
        } catch (\\InvalidArgumentException \$e) {
            \$this->assertFalse(\$supported);
        }
    }

    public function getOptionFixtures()
    {
        return [
            [['prefix' => 'session'], true],
            [['expiretime' => 100], true],
            [['prefix' => 'session', 'expiretime' => 200], true],
            [['expiretime' => 100, 'foo' => 'bar'], false],
        ];
    }

    public function testGetConnection()
    {
        \$method = new \\ReflectionMethod(\$this->storage, 'getMemcached');
        \$method->setAccessible(true);

        \$this->assertInstanceOf('\\Memcached', \$method->invoke(\$this->storage));
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MemcachedSessionHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MemcachedSessionHandlerTest.php");
    }
}
