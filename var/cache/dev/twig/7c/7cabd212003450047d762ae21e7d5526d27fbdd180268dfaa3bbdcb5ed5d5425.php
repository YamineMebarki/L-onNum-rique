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

/* vendor/symfony/cache/Tests/Adapter/SimpleCacheAdapterTest.php */
class __TwigTemplate_7b38a70d001f3d72bb2167bef7c2780e47970aeb8060b0101250e4a68263d06a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/SimpleCacheAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/SimpleCacheAdapterTest.php"));

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

use Symfony\\Component\\Cache\\Adapter\\SimpleCacheAdapter;
use Symfony\\Component\\Cache\\Simple\\ArrayCache;
use Symfony\\Component\\Cache\\Simple\\FilesystemCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class SimpleCacheAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testPrune' => 'SimpleCache just proxies',
    ];

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new SimpleCacheAdapter(new FilesystemCache(), '', \$defaultLifetime);
    }

    public function testValidCacheKeyWithNamespace()
    {
        \$cache = new SimpleCacheAdapter(new ArrayCache(), 'some_namespace', 0);
        \$item = \$cache->getItem('my_key');
        \$item->set('someValue');
        \$cache->save(\$item);

        \$this->assertTrue(\$cache->getItem('my_key')->isHit(), 'Stored item is successfully retrieved.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/SimpleCacheAdapterTest.php";
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

use Symfony\\Component\\Cache\\Adapter\\SimpleCacheAdapter;
use Symfony\\Component\\Cache\\Simple\\ArrayCache;
use Symfony\\Component\\Cache\\Simple\\FilesystemCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class SimpleCacheAdapterTest extends AdapterTestCase
{
    protected \$skippedTests = [
        'testPrune' => 'SimpleCache just proxies',
    ];

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new SimpleCacheAdapter(new FilesystemCache(), '', \$defaultLifetime);
    }

    public function testValidCacheKeyWithNamespace()
    {
        \$cache = new SimpleCacheAdapter(new ArrayCache(), 'some_namespace', 0);
        \$item = \$cache->getItem('my_key');
        \$item->set('someValue');
        \$cache->save(\$item);

        \$this->assertTrue(\$cache->getItem('my_key')->isHit(), 'Stored item is successfully retrieved.');
    }
}
", "vendor/symfony/cache/Tests/Adapter/SimpleCacheAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/SimpleCacheAdapterTest.php");
    }
}
