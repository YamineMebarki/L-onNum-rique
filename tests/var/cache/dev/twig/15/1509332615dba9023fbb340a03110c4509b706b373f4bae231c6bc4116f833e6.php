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

/* vendor/symfony/http-kernel/Tests/HttpCache/HttpCacheTestCase.php */
class __TwigTemplate_a53b6c7ea2c0bbfde38fe0a367faf38a863687c5208f67c8581f629fc49aa301 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/HttpCache/HttpCacheTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/HttpCache/HttpCacheTestCase.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\HttpCache;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class HttpCacheTestCase extends TestCase
{
    protected \$kernel;
    protected \$cache;
    protected \$caches;
    protected \$cacheConfig;
    protected \$request;
    protected \$response;
    protected \$responses;
    protected \$catch;
    protected \$esi;

    /**
     * @var Store
     */
    protected \$store;

    protected function setUp(): void
    {
        \$this->kernel = null;

        \$this->cache = null;
        \$this->esi = null;
        \$this->caches = [];
        \$this->cacheConfig = [];

        \$this->request = null;
        \$this->response = null;
        \$this->responses = [];

        \$this->catch = false;

        \$this->clearDirectory(sys_get_temp_dir().'/http_cache');
    }

    protected function tearDown(): void
    {
        if (\$this->cache) {
            \$this->cache->getStore()->cleanup();
        }
        \$this->kernel = null;
        \$this->cache = null;
        \$this->caches = null;
        \$this->request = null;
        \$this->response = null;
        \$this->responses = null;
        \$this->cacheConfig = null;
        \$this->catch = null;
        \$this->esi = null;

        \$this->clearDirectory(sys_get_temp_dir().'/http_cache');
    }

    public function assertHttpKernelIsCalled()
    {
        \$this->assertTrue(\$this->kernel->hasBeenCalled());
    }

    public function assertHttpKernelIsNotCalled()
    {
        \$this->assertFalse(\$this->kernel->hasBeenCalled());
    }

    public function assertResponseOk()
    {
        \$this->assertEquals(200, \$this->response->getStatusCode());
    }

    public function assertTraceContains(\$trace)
    {
        \$traces = \$this->cache->getTraces();
        \$traces = current(\$traces);

        \$this->assertRegExp('/'.\$trace.'/', implode(', ', \$traces));
    }

    public function assertTraceNotContains(\$trace)
    {
        \$traces = \$this->cache->getTraces();
        \$traces = current(\$traces);

        \$this->assertNotRegExp('/'.\$trace.'/', implode(', ', \$traces));
    }

    public function assertExceptionsAreCaught()
    {
        \$this->assertTrue(\$this->kernel->isCatchingExceptions());
    }

    public function assertExceptionsAreNotCaught()
    {
        \$this->assertFalse(\$this->kernel->isCatchingExceptions());
    }

    public function request(\$method, \$uri = '/', \$server = [], \$cookies = [], \$esi = false, \$headers = [])
    {
        if (null === \$this->kernel) {
            throw new \\LogicException('You must call setNextResponse() before calling request().');
        }

        \$this->kernel->reset();

        \$this->store = new Store(sys_get_temp_dir().'/http_cache');

        if (!isset(\$this->cacheConfig['debug'])) {
            \$this->cacheConfig['debug'] = true;
        }

        \$this->esi = \$esi ? new Esi() : null;
        \$this->cache = new HttpCache(\$this->kernel, \$this->store, \$this->esi, \$this->cacheConfig);
        \$this->request = Request::create(\$uri, \$method, [], \$cookies, [], \$server);
        \$this->request->headers->add(\$headers);

        \$this->response = \$this->cache->handle(\$this->request, HttpKernelInterface::MASTER_REQUEST, \$this->catch);

        \$this->responses[] = \$this->response;
    }

    public function getMetaStorageValues()
    {
        \$values = [];
        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(sys_get_temp_dir().'/http_cache/md', \\RecursiveDirectoryIterator::SKIP_DOTS), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            \$values[] = file_get_contents(\$file);
        }

        return \$values;
    }

    // A basic response with 200 status code and a tiny body.
    public function setNextResponse(\$statusCode = 200, array \$headers = [], \$body = 'Hello World', \\Closure \$customizer = null)
    {
        \$this->kernel = new TestHttpKernel(\$body, \$statusCode, \$headers, \$customizer);
    }

    public function setNextResponses(\$responses)
    {
        \$this->kernel = new TestMultipleHttpKernel(\$responses);
    }

    public function catchExceptions(\$catch = true)
    {
        \$this->catch = \$catch;
    }

    public static function clearDirectory(\$directory)
    {
        if (!is_dir(\$directory)) {
            return;
        }

        \$fp = opendir(\$directory);
        while (false !== \$file = readdir(\$fp)) {
            if (!\\in_array(\$file, ['.', '..'])) {
                if (is_link(\$directory.'/'.\$file)) {
                    unlink(\$directory.'/'.\$file);
                } elseif (is_dir(\$directory.'/'.\$file)) {
                    self::clearDirectory(\$directory.'/'.\$file);
                    rmdir(\$directory.'/'.\$file);
                } else {
                    unlink(\$directory.'/'.\$file);
                }
            }
        }

        closedir(\$fp);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/HttpCache/HttpCacheTestCase.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\HttpCache;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class HttpCacheTestCase extends TestCase
{
    protected \$kernel;
    protected \$cache;
    protected \$caches;
    protected \$cacheConfig;
    protected \$request;
    protected \$response;
    protected \$responses;
    protected \$catch;
    protected \$esi;

    /**
     * @var Store
     */
    protected \$store;

    protected function setUp(): void
    {
        \$this->kernel = null;

        \$this->cache = null;
        \$this->esi = null;
        \$this->caches = [];
        \$this->cacheConfig = [];

        \$this->request = null;
        \$this->response = null;
        \$this->responses = [];

        \$this->catch = false;

        \$this->clearDirectory(sys_get_temp_dir().'/http_cache');
    }

    protected function tearDown(): void
    {
        if (\$this->cache) {
            \$this->cache->getStore()->cleanup();
        }
        \$this->kernel = null;
        \$this->cache = null;
        \$this->caches = null;
        \$this->request = null;
        \$this->response = null;
        \$this->responses = null;
        \$this->cacheConfig = null;
        \$this->catch = null;
        \$this->esi = null;

        \$this->clearDirectory(sys_get_temp_dir().'/http_cache');
    }

    public function assertHttpKernelIsCalled()
    {
        \$this->assertTrue(\$this->kernel->hasBeenCalled());
    }

    public function assertHttpKernelIsNotCalled()
    {
        \$this->assertFalse(\$this->kernel->hasBeenCalled());
    }

    public function assertResponseOk()
    {
        \$this->assertEquals(200, \$this->response->getStatusCode());
    }

    public function assertTraceContains(\$trace)
    {
        \$traces = \$this->cache->getTraces();
        \$traces = current(\$traces);

        \$this->assertRegExp('/'.\$trace.'/', implode(', ', \$traces));
    }

    public function assertTraceNotContains(\$trace)
    {
        \$traces = \$this->cache->getTraces();
        \$traces = current(\$traces);

        \$this->assertNotRegExp('/'.\$trace.'/', implode(', ', \$traces));
    }

    public function assertExceptionsAreCaught()
    {
        \$this->assertTrue(\$this->kernel->isCatchingExceptions());
    }

    public function assertExceptionsAreNotCaught()
    {
        \$this->assertFalse(\$this->kernel->isCatchingExceptions());
    }

    public function request(\$method, \$uri = '/', \$server = [], \$cookies = [], \$esi = false, \$headers = [])
    {
        if (null === \$this->kernel) {
            throw new \\LogicException('You must call setNextResponse() before calling request().');
        }

        \$this->kernel->reset();

        \$this->store = new Store(sys_get_temp_dir().'/http_cache');

        if (!isset(\$this->cacheConfig['debug'])) {
            \$this->cacheConfig['debug'] = true;
        }

        \$this->esi = \$esi ? new Esi() : null;
        \$this->cache = new HttpCache(\$this->kernel, \$this->store, \$this->esi, \$this->cacheConfig);
        \$this->request = Request::create(\$uri, \$method, [], \$cookies, [], \$server);
        \$this->request->headers->add(\$headers);

        \$this->response = \$this->cache->handle(\$this->request, HttpKernelInterface::MASTER_REQUEST, \$this->catch);

        \$this->responses[] = \$this->response;
    }

    public function getMetaStorageValues()
    {
        \$values = [];
        foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(sys_get_temp_dir().'/http_cache/md', \\RecursiveDirectoryIterator::SKIP_DOTS), \\RecursiveIteratorIterator::LEAVES_ONLY) as \$file) {
            \$values[] = file_get_contents(\$file);
        }

        return \$values;
    }

    // A basic response with 200 status code and a tiny body.
    public function setNextResponse(\$statusCode = 200, array \$headers = [], \$body = 'Hello World', \\Closure \$customizer = null)
    {
        \$this->kernel = new TestHttpKernel(\$body, \$statusCode, \$headers, \$customizer);
    }

    public function setNextResponses(\$responses)
    {
        \$this->kernel = new TestMultipleHttpKernel(\$responses);
    }

    public function catchExceptions(\$catch = true)
    {
        \$this->catch = \$catch;
    }

    public static function clearDirectory(\$directory)
    {
        if (!is_dir(\$directory)) {
            return;
        }

        \$fp = opendir(\$directory);
        while (false !== \$file = readdir(\$fp)) {
            if (!\\in_array(\$file, ['.', '..'])) {
                if (is_link(\$directory.'/'.\$file)) {
                    unlink(\$directory.'/'.\$file);
                } elseif (is_dir(\$directory.'/'.\$file)) {
                    self::clearDirectory(\$directory.'/'.\$file);
                    rmdir(\$directory.'/'.\$file);
                } else {
                    unlink(\$directory.'/'.\$file);
                }
            }
        }

        closedir(\$fp);
    }
}
", "vendor/symfony/http-kernel/Tests/HttpCache/HttpCacheTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/HttpCache/HttpCacheTestCase.php");
    }
}
