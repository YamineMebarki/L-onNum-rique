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

/* vendor/symfony/cache/Tests/Adapter/RedisClusterAdapterTest.php */
class __TwigTemplate_50650d1d328a19d23df36240bf22359746e1aa8e02bc06087db9c5bed2eedf18 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/RedisClusterAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/RedisClusterAdapterTest.php"));

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
use Symfony\\Component\\Cache\\Traits\\RedisClusterProxy;

class RedisClusterAdapterTest extends AbstractRedisAdapterTest
{
    public static function setUpBeforeClass(): void
    {
        if (!class_exists('RedisCluster')) {
            self::markTestSkipped('The RedisCluster class is required.');
        }
        if (!\$hosts = getenv('REDIS_CLUSTER_HOSTS')) {
            self::markTestSkipped('REDIS_CLUSTER_HOSTS env var is not defined.');
        }

        self::\$redis = AbstractAdapter::createConnection('redis:?host['.str_replace(' ', ']&host[', \$hosts).']', ['lazy' => true, 'redis_cluster' => true]);
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        \$this->assertInstanceOf(RedisClusterProxy::class, self::\$redis);
        \$adapter = new RedisAdapter(self::\$redis, str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);

        return \$adapter;
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
            ['redis://localhost:1234?redis_cluster=1'],
            ['redis://foo@localhost?redis_cluster=1'],
            ['redis://localhost/123?redis_cluster=1'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/RedisClusterAdapterTest.php";
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
use Symfony\\Component\\Cache\\Traits\\RedisClusterProxy;

class RedisClusterAdapterTest extends AbstractRedisAdapterTest
{
    public static function setUpBeforeClass(): void
    {
        if (!class_exists('RedisCluster')) {
            self::markTestSkipped('The RedisCluster class is required.');
        }
        if (!\$hosts = getenv('REDIS_CLUSTER_HOSTS')) {
            self::markTestSkipped('REDIS_CLUSTER_HOSTS env var is not defined.');
        }

        self::\$redis = AbstractAdapter::createConnection('redis:?host['.str_replace(' ', ']&host[', \$hosts).']', ['lazy' => true, 'redis_cluster' => true]);
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        \$this->assertInstanceOf(RedisClusterProxy::class, self::\$redis);
        \$adapter = new RedisAdapter(self::\$redis, str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);

        return \$adapter;
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
            ['redis://localhost:1234?redis_cluster=1'],
            ['redis://foo@localhost?redis_cluster=1'],
            ['redis://localhost/123?redis_cluster=1'],
        ];
    }
}
", "vendor/symfony/cache/Tests/Adapter/RedisClusterAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/RedisClusterAdapterTest.php");
    }
}
