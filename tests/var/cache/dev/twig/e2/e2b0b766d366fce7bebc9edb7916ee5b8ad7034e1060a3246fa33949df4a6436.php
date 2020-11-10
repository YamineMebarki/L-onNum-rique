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

/* vendor/symfony/cache/Tests/Adapter/ProxyAdapterTest.php */
class __TwigTemplate_a146940f64dafbdfd490dd8503044a8ee9664f32d2e3d6d9bf70b3915b2efa8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/ProxyAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/ProxyAdapterTest.php"));

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
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\ProxyAdapter;
use Symfony\\Component\\Cache\\CacheItem;

/**
 * @group time-sensitive
 */
class ProxyAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testDeferredSaveWithoutCommit' => 'Assumes a shared cache which ArrayAdapter is not.',
        'testSaveWithoutExpire' => 'Assumes a shared cache which ArrayAdapter is not.',
        'testPrune' => 'ProxyAdapter just proxies',
    ];

    public function createCachePool(\$defaultLifetime = 0, \$testMethod = null)
    {
        if ('testGetMetadata' === \$testMethod) {
            return new ProxyAdapter(new FilesystemAdapter(), '', \$defaultLifetime);
        }

        return new ProxyAdapter(new ArrayAdapter(), '', \$defaultLifetime);
    }

    public function testProxyfiedItem()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('OK bar');
        \$item = new CacheItem();
        \$pool = new ProxyAdapter(new TestingArrayAdapter(\$item));

        \$proxyItem = \$pool->getItem('foo');

        \$this->assertNotSame(\$item, \$proxyItem);
        \$pool->save(\$proxyItem->set('bar'));
    }
}

class TestingArrayAdapter extends ArrayAdapter
{
    private \$item;

    public function __construct(CacheItemInterface \$item)
    {
        \$this->item = \$item;
    }

    public function getItem(\$key)
    {
        return \$this->item;
    }

    public function save(CacheItemInterface \$item)
    {
        if (\$item === \$this->item) {
            throw new \\Exception('OK '.\$item->get());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/ProxyAdapterTest.php";
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
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\Adapter\\ProxyAdapter;
use Symfony\\Component\\Cache\\CacheItem;

/**
 * @group time-sensitive
 */
class ProxyAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testDeferredSaveWithoutCommit' => 'Assumes a shared cache which ArrayAdapter is not.',
        'testSaveWithoutExpire' => 'Assumes a shared cache which ArrayAdapter is not.',
        'testPrune' => 'ProxyAdapter just proxies',
    ];

    public function createCachePool(\$defaultLifetime = 0, \$testMethod = null)
    {
        if ('testGetMetadata' === \$testMethod) {
            return new ProxyAdapter(new FilesystemAdapter(), '', \$defaultLifetime);
        }

        return new ProxyAdapter(new ArrayAdapter(), '', \$defaultLifetime);
    }

    public function testProxyfiedItem()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('OK bar');
        \$item = new CacheItem();
        \$pool = new ProxyAdapter(new TestingArrayAdapter(\$item));

        \$proxyItem = \$pool->getItem('foo');

        \$this->assertNotSame(\$item, \$proxyItem);
        \$pool->save(\$proxyItem->set('bar'));
    }
}

class TestingArrayAdapter extends ArrayAdapter
{
    private \$item;

    public function __construct(CacheItemInterface \$item)
    {
        \$this->item = \$item;
    }

    public function getItem(\$key)
    {
        return \$this->item;
    }

    public function save(CacheItemInterface \$item)
    {
        if (\$item === \$this->item) {
            throw new \\Exception('OK '.\$item->get());
        }
    }
}
", "vendor/symfony/cache/Tests/Adapter/ProxyAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/ProxyAdapterTest.php");
    }
}
