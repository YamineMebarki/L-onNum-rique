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

/* vendor/symfony/cache/Tests/Adapter/ApcuAdapterTest.php */
class __TwigTemplate_c251a96e718d171fe858d2344f8948d0f9e5df59d74fe50f87c1fdcba4c6f4a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/ApcuAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/ApcuAdapterTest.php"));

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

use Psr\\Log\\NullLogger;
use Symfony\\Component\\Cache\\Adapter\\ApcuAdapter;

class ApcuAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testExpiration' => 'Testing expiration slows down the test suite',
        'testHasItemReturnsFalseWhenDeferredItemIsExpired' => 'Testing expiration slows down the test suite',
        'testDefaultLifeTime' => 'Testing expiration slows down the test suite',
    ];

    public function createCachePool(\$defaultLifetime = 0)
    {
        if (!\\function_exists('apcu_fetch') || !filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN)) {
            \$this->markTestSkipped('APCu extension is required.');
        }
        if ('cli' === \\PHP_SAPI && !filter_var(ini_get('apc.enable_cli'), FILTER_VALIDATE_BOOLEAN)) {
            if ('testWithCliSapi' !== \$this->getName()) {
                \$this->markTestSkipped('apc.enable_cli=1 is required.');
            }
        }
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Fails transiently on Windows.');
        }

        return new ApcuAdapter(str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);
    }

    public function testUnserializable()
    {
        \$pool = \$this->createCachePool();

        \$item = \$pool->getItem('foo');
        \$item->set(function () {});

        \$this->assertFalse(\$pool->save(\$item));

        \$item = \$pool->getItem('foo');
        \$this->assertFalse(\$item->isHit());
    }

    public function testVersion()
    {
        \$namespace = str_replace('\\\\', '.', \\get_class(\$this));

        \$pool1 = new ApcuAdapter(\$namespace, 0, 'p1');

        \$item = \$pool1->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertTrue(\$pool1->save(\$item->set('bar')));

        \$item = \$pool1->getItem('foo');
        \$this->assertTrue(\$item->isHit());
        \$this->assertSame('bar', \$item->get());

        \$pool2 = new ApcuAdapter(\$namespace, 0, 'p2');

        \$item = \$pool2->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get());

        \$item = \$pool1->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get());
    }

    public function testNamespace()
    {
        \$namespace = str_replace('\\\\', '.', \\get_class(\$this));

        \$pool1 = new ApcuAdapter(\$namespace.'_1', 0, 'p1');

        \$item = \$pool1->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertTrue(\$pool1->save(\$item->set('bar')));

        \$item = \$pool1->getItem('foo');
        \$this->assertTrue(\$item->isHit());
        \$this->assertSame('bar', \$item->get());

        \$pool2 = new ApcuAdapter(\$namespace.'_2', 0, 'p1');

        \$item = \$pool2->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get());

        \$item = \$pool1->getItem('foo');
        \$this->assertTrue(\$item->isHit());
        \$this->assertSame('bar', \$item->get());
    }

    public function testWithCliSapi()
    {
        try {
            // disable PHPUnit error handler to mimic a production environment
            \$isCalled = false;
            set_error_handler(function () use (&\$isCalled) {
                \$isCalled = true;
            });
            \$pool = new ApcuAdapter(str_replace('\\\\', '.', __CLASS__));
            \$pool->setLogger(new NullLogger());

            \$item = \$pool->getItem('foo');
            \$item->isHit();
            \$pool->save(\$item->set('bar'));
            \$this->assertFalse(\$isCalled);
        } finally {
            restore_error_handler();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/ApcuAdapterTest.php";
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

use Psr\\Log\\NullLogger;
use Symfony\\Component\\Cache\\Adapter\\ApcuAdapter;

class ApcuAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testExpiration' => 'Testing expiration slows down the test suite',
        'testHasItemReturnsFalseWhenDeferredItemIsExpired' => 'Testing expiration slows down the test suite',
        'testDefaultLifeTime' => 'Testing expiration slows down the test suite',
    ];

    public function createCachePool(\$defaultLifetime = 0)
    {
        if (!\\function_exists('apcu_fetch') || !filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN)) {
            \$this->markTestSkipped('APCu extension is required.');
        }
        if ('cli' === \\PHP_SAPI && !filter_var(ini_get('apc.enable_cli'), FILTER_VALIDATE_BOOLEAN)) {
            if ('testWithCliSapi' !== \$this->getName()) {
                \$this->markTestSkipped('apc.enable_cli=1 is required.');
            }
        }
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Fails transiently on Windows.');
        }

        return new ApcuAdapter(str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);
    }

    public function testUnserializable()
    {
        \$pool = \$this->createCachePool();

        \$item = \$pool->getItem('foo');
        \$item->set(function () {});

        \$this->assertFalse(\$pool->save(\$item));

        \$item = \$pool->getItem('foo');
        \$this->assertFalse(\$item->isHit());
    }

    public function testVersion()
    {
        \$namespace = str_replace('\\\\', '.', \\get_class(\$this));

        \$pool1 = new ApcuAdapter(\$namespace, 0, 'p1');

        \$item = \$pool1->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertTrue(\$pool1->save(\$item->set('bar')));

        \$item = \$pool1->getItem('foo');
        \$this->assertTrue(\$item->isHit());
        \$this->assertSame('bar', \$item->get());

        \$pool2 = new ApcuAdapter(\$namespace, 0, 'p2');

        \$item = \$pool2->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get());

        \$item = \$pool1->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get());
    }

    public function testNamespace()
    {
        \$namespace = str_replace('\\\\', '.', \\get_class(\$this));

        \$pool1 = new ApcuAdapter(\$namespace.'_1', 0, 'p1');

        \$item = \$pool1->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertTrue(\$pool1->save(\$item->set('bar')));

        \$item = \$pool1->getItem('foo');
        \$this->assertTrue(\$item->isHit());
        \$this->assertSame('bar', \$item->get());

        \$pool2 = new ApcuAdapter(\$namespace.'_2', 0, 'p1');

        \$item = \$pool2->getItem('foo');
        \$this->assertFalse(\$item->isHit());
        \$this->assertNull(\$item->get());

        \$item = \$pool1->getItem('foo');
        \$this->assertTrue(\$item->isHit());
        \$this->assertSame('bar', \$item->get());
    }

    public function testWithCliSapi()
    {
        try {
            // disable PHPUnit error handler to mimic a production environment
            \$isCalled = false;
            set_error_handler(function () use (&\$isCalled) {
                \$isCalled = true;
            });
            \$pool = new ApcuAdapter(str_replace('\\\\', '.', __CLASS__));
            \$pool->setLogger(new NullLogger());

            \$item = \$pool->getItem('foo');
            \$item->isHit();
            \$pool->save(\$item->set('bar'));
            \$this->assertFalse(\$isCalled);
        } finally {
            restore_error_handler();
        }
    }
}
", "vendor/symfony/cache/Tests/Adapter/ApcuAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/ApcuAdapterTest.php");
    }
}
