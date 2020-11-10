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

/* vendor/symfony/framework-bundle/Tests/Functional/CachePoolsTest.php */
class __TwigTemplate_2068877737b1744a924b415beb15fea064dafccb4a003ac6ba7c2eaaabe42573 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolsTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;

class CachePoolsTest extends AbstractWebTestCase
{
    public function testCachePools()
    {
        \$this->doTestCachePools([], AdapterInterface::class);
    }

    /**
     * @requires extension redis
     */
    public function testRedisCachePools()
    {
        try {
            \$this->doTestCachePools(['root_config' => 'redis_config.yml', 'environment' => 'redis_cache'], RedisAdapter::class);
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        } catch (InvalidArgumentException \$e) {
            if (0 !== strpos(\$e->getMessage(), 'Redis connection failed')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        }
    }

    /**
     * @requires extension redis
     */
    public function testRedisCustomCachePools()
    {
        try {
            \$this->doTestCachePools(['root_config' => 'redis_custom_config.yml', 'environment' => 'custom_redis_cache'], RedisAdapter::class);
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        }
    }

    private function doTestCachePools(\$options, \$adapterClass)
    {
        static::bootKernel(\$options);
        \$container = static::\$container;

        \$pool1 = \$container->get('cache.pool1');
        \$this->assertInstanceOf(\$adapterClass, \$pool1);

        \$key = 'foobar';
        \$pool1->deleteItem(\$key);
        \$item = \$pool1->getItem(\$key);
        \$this->assertFalse(\$item->isHit());

        \$item->set('baz');
        \$pool1->save(\$item);
        \$item = \$pool1->getItem(\$key);
        \$this->assertTrue(\$item->isHit());

        \$pool2 = \$container->get('cache.pool2');
        \$pool2->save(\$item);

        \$container->get('cache_clearer')->clear(\$container->getParameter('kernel.cache_dir'));
        \$item = \$pool1->getItem(\$key);
        \$this->assertFalse(\$item->isHit());

        \$item = \$pool2->getItem(\$key);
        \$this->assertTrue(\$item->isHit());

        \$prefix = \"\\0\".TagAwareAdapter::class.\"\\0\";
        \$pool4 = \$container->get('cache.pool4');
        \$this->assertInstanceof(TagAwareAdapter::class, \$pool4);
        \$pool4 = (array) \$pool4;
        \$this->assertSame(\$pool4[\$prefix.'pool'], \$pool4[\$prefix.'tags'] ?? \$pool4['tags']);

        \$pool5 = \$container->get('cache.pool5');
        \$this->assertInstanceof(TagAwareAdapter::class, \$pool5);
        \$pool5 = (array) \$pool5;
        \$this->assertSame(\$pool2, \$pool5[\$prefix.'tags'] ?? \$pool5['tags']);

        \$pool6 = \$container->get('cache.pool6');
        \$this->assertInstanceof(TagAwareAdapter::class, \$pool6);
        \$pool6 = (array) \$pool6;
        \$this->assertSame(\$pool4[\$prefix.'pool'], \$pool6[\$prefix.'tags'] ?? \$pool6['tags']);

        \$pool7 = \$container->get('cache.pool7');
        \$this->assertNotInstanceof(TagAwareAdapter::class, \$pool7);
    }

    protected static function createKernel(array \$options = [])
    {
        return parent::createKernel(['test_case' => 'CachePools'] + \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/CachePoolsTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;

class CachePoolsTest extends AbstractWebTestCase
{
    public function testCachePools()
    {
        \$this->doTestCachePools([], AdapterInterface::class);
    }

    /**
     * @requires extension redis
     */
    public function testRedisCachePools()
    {
        try {
            \$this->doTestCachePools(['root_config' => 'redis_config.yml', 'environment' => 'redis_cache'], RedisAdapter::class);
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        } catch (InvalidArgumentException \$e) {
            if (0 !== strpos(\$e->getMessage(), 'Redis connection failed')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        }
    }

    /**
     * @requires extension redis
     */
    public function testRedisCustomCachePools()
    {
        try {
            \$this->doTestCachePools(['root_config' => 'redis_custom_config.yml', 'environment' => 'custom_redis_cache'], RedisAdapter::class);
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        } catch (\\PHPUnit\\Framework\\Error\\Warning \$e) {
            if (0 !== strpos(\$e->getMessage(), 'unable to connect to')) {
                throw \$e;
            }
            \$this->markTestSkipped(\$e->getMessage());
        }
    }

    private function doTestCachePools(\$options, \$adapterClass)
    {
        static::bootKernel(\$options);
        \$container = static::\$container;

        \$pool1 = \$container->get('cache.pool1');
        \$this->assertInstanceOf(\$adapterClass, \$pool1);

        \$key = 'foobar';
        \$pool1->deleteItem(\$key);
        \$item = \$pool1->getItem(\$key);
        \$this->assertFalse(\$item->isHit());

        \$item->set('baz');
        \$pool1->save(\$item);
        \$item = \$pool1->getItem(\$key);
        \$this->assertTrue(\$item->isHit());

        \$pool2 = \$container->get('cache.pool2');
        \$pool2->save(\$item);

        \$container->get('cache_clearer')->clear(\$container->getParameter('kernel.cache_dir'));
        \$item = \$pool1->getItem(\$key);
        \$this->assertFalse(\$item->isHit());

        \$item = \$pool2->getItem(\$key);
        \$this->assertTrue(\$item->isHit());

        \$prefix = \"\\0\".TagAwareAdapter::class.\"\\0\";
        \$pool4 = \$container->get('cache.pool4');
        \$this->assertInstanceof(TagAwareAdapter::class, \$pool4);
        \$pool4 = (array) \$pool4;
        \$this->assertSame(\$pool4[\$prefix.'pool'], \$pool4[\$prefix.'tags'] ?? \$pool4['tags']);

        \$pool5 = \$container->get('cache.pool5');
        \$this->assertInstanceof(TagAwareAdapter::class, \$pool5);
        \$pool5 = (array) \$pool5;
        \$this->assertSame(\$pool2, \$pool5[\$prefix.'tags'] ?? \$pool5['tags']);

        \$pool6 = \$container->get('cache.pool6');
        \$this->assertInstanceof(TagAwareAdapter::class, \$pool6);
        \$pool6 = (array) \$pool6;
        \$this->assertSame(\$pool4[\$prefix.'pool'], \$pool6[\$prefix.'tags'] ?? \$pool6['tags']);

        \$pool7 = \$container->get('cache.pool7');
        \$this->assertNotInstanceof(TagAwareAdapter::class, \$pool7);
    }

    protected static function createKernel(array \$options = [])
    {
        return parent::createKernel(['test_case' => 'CachePools'] + \$options);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/CachePoolsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/CachePoolsTest.php");
    }
}
