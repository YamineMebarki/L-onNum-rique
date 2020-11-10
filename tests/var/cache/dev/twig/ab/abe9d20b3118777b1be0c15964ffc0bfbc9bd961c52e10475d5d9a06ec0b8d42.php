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

/* vendor/symfony/twig-bridge/Tests/Extension/HttpFoundationExtensionTest.php */
class __TwigTemplate_8da3ac9431bb597ce34a2de3e1f1b1dffeec424375b21e438866ca815b6b2b5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/HttpFoundationExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/HttpFoundationExtensionTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * @group legacy
 */
class HttpFoundationExtensionTest extends TestCase
{
    /**
     * @dataProvider getGenerateAbsoluteUrlData()
     */
    public function testGenerateAbsoluteUrl(\$expected, \$path, \$pathinfo)
    {
        \$stack = new RequestStack();
        \$stack->push(Request::create(\$pathinfo));
        \$extension = new HttpFoundationExtension(\$stack);

        \$this->assertEquals(\$expected, \$extension->generateAbsoluteUrl(\$path));
    }

    public function getGenerateAbsoluteUrlData()
    {
        return [
            ['http://localhost/foo.png', '/foo.png', '/foo/bar.html'],
            ['http://localhost/foo/foo.png', 'foo.png', '/foo/bar.html'],
            ['http://localhost/foo/foo.png', 'foo.png', '/foo/bar'],
            ['http://localhost/foo/bar/foo.png', 'foo.png', '/foo/bar/'],

            ['http://example.com/baz', 'http://example.com/baz', '/'],
            ['https://example.com/baz', 'https://example.com/baz', '/'],
            ['//example.com/baz', '//example.com/baz', '/'],

            ['http://localhost/foo/bar?baz', '?baz', '/foo/bar'],
            ['http://localhost/foo/bar?baz=1', '?baz=1', '/foo/bar?foo=1'],
            ['http://localhost/foo/baz?baz=1', 'baz?baz=1', '/foo/bar?foo=1'],

            ['http://localhost/foo/bar#baz', '#baz', '/foo/bar'],
            ['http://localhost/foo/bar?0#baz', '#baz', '/foo/bar?0'],
            ['http://localhost/foo/bar?baz=1#baz', '?baz=1#baz', '/foo/bar?foo=1'],
            ['http://localhost/foo/baz?baz=1#baz', 'baz?baz=1#baz', '/foo/bar?foo=1'],
        ];
    }

    /**
     * @dataProvider getGenerateAbsoluteUrlRequestContextData
     */
    public function testGenerateAbsoluteUrlWithRequestContext(\$path, \$baseUrl, \$host, \$scheme, \$httpPort, \$httpsPort, \$expected)
    {
        if (!class_exists('Symfony\\Component\\Routing\\RequestContext')) {
            \$this->markTestSkipped('The Routing component is needed to run tests that depend on its request context.');
        }

        \$requestContext = new RequestContext(\$baseUrl, 'GET', \$host, \$scheme, \$httpPort, \$httpsPort, \$path);
        \$extension = new HttpFoundationExtension(new RequestStack(), \$requestContext);

        \$this->assertEquals(\$expected, \$extension->generateAbsoluteUrl(\$path));
    }

    /**
     * @dataProvider getGenerateAbsoluteUrlRequestContextData
     */
    public function testGenerateAbsoluteUrlWithoutRequestAndRequestContext(\$path)
    {
        if (!class_exists('Symfony\\Component\\Routing\\RequestContext')) {
            \$this->markTestSkipped('The Routing component is needed to run tests that depend on its request context.');
        }

        \$extension = new HttpFoundationExtension(new RequestStack());

        \$this->assertEquals(\$path, \$extension->generateAbsoluteUrl(\$path));
    }

    public function getGenerateAbsoluteUrlRequestContextData()
    {
        return [
            ['/foo.png', '/foo', 'localhost', 'http', 80, 443, 'http://localhost/foo.png'],
            ['foo.png', '/foo', 'localhost', 'http', 80, 443, 'http://localhost/foo/foo.png'],
            ['foo.png', '/foo/bar/', 'localhost', 'http', 80, 443, 'http://localhost/foo/bar/foo.png'],
            ['/foo.png', '/foo', 'localhost', 'https', 80, 443, 'https://localhost/foo.png'],
            ['foo.png', '/foo', 'localhost', 'https', 80, 443, 'https://localhost/foo/foo.png'],
            ['foo.png', '/foo/bar/', 'localhost', 'https', 80, 443, 'https://localhost/foo/bar/foo.png'],
            ['/foo.png', '/foo', 'localhost', 'http', 443, 80, 'http://localhost:443/foo.png'],
            ['/foo.png', '/foo', 'localhost', 'https', 443, 80, 'https://localhost:80/foo.png'],
        ];
    }

    public function testGenerateAbsoluteUrlWithScriptFileName()
    {
        \$request = Request::create('http://localhost/app/web/app_dev.php');
        \$request->server->set('SCRIPT_FILENAME', '/var/www/app/web/app_dev.php');

        \$stack = new RequestStack();
        \$stack->push(\$request);
        \$extension = new HttpFoundationExtension(\$stack);

        \$this->assertEquals(
            'http://localhost/app/web/bundles/framework/css/structure.css',
            \$extension->generateAbsoluteUrl('/app/web/bundles/framework/css/structure.css')
        );
    }

    /**
     * @dataProvider getGenerateRelativePathData()
     */
    public function testGenerateRelativePath(\$expected, \$path, \$pathinfo)
    {
        if (!method_exists('Symfony\\Component\\HttpFoundation\\Request', 'getRelativeUriForPath')) {
            \$this->markTestSkipped('Your version of Symfony HttpFoundation is too old.');
        }

        \$stack = new RequestStack();
        \$stack->push(Request::create(\$pathinfo));
        \$extension = new HttpFoundationExtension(\$stack);

        \$this->assertEquals(\$expected, \$extension->generateRelativePath(\$path));
    }

    public function getGenerateRelativePathData()
    {
        return [
            ['../foo.png', '/foo.png', '/foo/bar.html'],
            ['../baz/foo.png', '/baz/foo.png', '/foo/bar.html'],
            ['baz/foo.png', 'baz/foo.png', '/foo/bar.html'],

            ['http://example.com/baz', 'http://example.com/baz', '/'],
            ['https://example.com/baz', 'https://example.com/baz', '/'],
            ['//example.com/baz', '//example.com/baz', '/'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/HttpFoundationExtensionTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * @group legacy
 */
class HttpFoundationExtensionTest extends TestCase
{
    /**
     * @dataProvider getGenerateAbsoluteUrlData()
     */
    public function testGenerateAbsoluteUrl(\$expected, \$path, \$pathinfo)
    {
        \$stack = new RequestStack();
        \$stack->push(Request::create(\$pathinfo));
        \$extension = new HttpFoundationExtension(\$stack);

        \$this->assertEquals(\$expected, \$extension->generateAbsoluteUrl(\$path));
    }

    public function getGenerateAbsoluteUrlData()
    {
        return [
            ['http://localhost/foo.png', '/foo.png', '/foo/bar.html'],
            ['http://localhost/foo/foo.png', 'foo.png', '/foo/bar.html'],
            ['http://localhost/foo/foo.png', 'foo.png', '/foo/bar'],
            ['http://localhost/foo/bar/foo.png', 'foo.png', '/foo/bar/'],

            ['http://example.com/baz', 'http://example.com/baz', '/'],
            ['https://example.com/baz', 'https://example.com/baz', '/'],
            ['//example.com/baz', '//example.com/baz', '/'],

            ['http://localhost/foo/bar?baz', '?baz', '/foo/bar'],
            ['http://localhost/foo/bar?baz=1', '?baz=1', '/foo/bar?foo=1'],
            ['http://localhost/foo/baz?baz=1', 'baz?baz=1', '/foo/bar?foo=1'],

            ['http://localhost/foo/bar#baz', '#baz', '/foo/bar'],
            ['http://localhost/foo/bar?0#baz', '#baz', '/foo/bar?0'],
            ['http://localhost/foo/bar?baz=1#baz', '?baz=1#baz', '/foo/bar?foo=1'],
            ['http://localhost/foo/baz?baz=1#baz', 'baz?baz=1#baz', '/foo/bar?foo=1'],
        ];
    }

    /**
     * @dataProvider getGenerateAbsoluteUrlRequestContextData
     */
    public function testGenerateAbsoluteUrlWithRequestContext(\$path, \$baseUrl, \$host, \$scheme, \$httpPort, \$httpsPort, \$expected)
    {
        if (!class_exists('Symfony\\Component\\Routing\\RequestContext')) {
            \$this->markTestSkipped('The Routing component is needed to run tests that depend on its request context.');
        }

        \$requestContext = new RequestContext(\$baseUrl, 'GET', \$host, \$scheme, \$httpPort, \$httpsPort, \$path);
        \$extension = new HttpFoundationExtension(new RequestStack(), \$requestContext);

        \$this->assertEquals(\$expected, \$extension->generateAbsoluteUrl(\$path));
    }

    /**
     * @dataProvider getGenerateAbsoluteUrlRequestContextData
     */
    public function testGenerateAbsoluteUrlWithoutRequestAndRequestContext(\$path)
    {
        if (!class_exists('Symfony\\Component\\Routing\\RequestContext')) {
            \$this->markTestSkipped('The Routing component is needed to run tests that depend on its request context.');
        }

        \$extension = new HttpFoundationExtension(new RequestStack());

        \$this->assertEquals(\$path, \$extension->generateAbsoluteUrl(\$path));
    }

    public function getGenerateAbsoluteUrlRequestContextData()
    {
        return [
            ['/foo.png', '/foo', 'localhost', 'http', 80, 443, 'http://localhost/foo.png'],
            ['foo.png', '/foo', 'localhost', 'http', 80, 443, 'http://localhost/foo/foo.png'],
            ['foo.png', '/foo/bar/', 'localhost', 'http', 80, 443, 'http://localhost/foo/bar/foo.png'],
            ['/foo.png', '/foo', 'localhost', 'https', 80, 443, 'https://localhost/foo.png'],
            ['foo.png', '/foo', 'localhost', 'https', 80, 443, 'https://localhost/foo/foo.png'],
            ['foo.png', '/foo/bar/', 'localhost', 'https', 80, 443, 'https://localhost/foo/bar/foo.png'],
            ['/foo.png', '/foo', 'localhost', 'http', 443, 80, 'http://localhost:443/foo.png'],
            ['/foo.png', '/foo', 'localhost', 'https', 443, 80, 'https://localhost:80/foo.png'],
        ];
    }

    public function testGenerateAbsoluteUrlWithScriptFileName()
    {
        \$request = Request::create('http://localhost/app/web/app_dev.php');
        \$request->server->set('SCRIPT_FILENAME', '/var/www/app/web/app_dev.php');

        \$stack = new RequestStack();
        \$stack->push(\$request);
        \$extension = new HttpFoundationExtension(\$stack);

        \$this->assertEquals(
            'http://localhost/app/web/bundles/framework/css/structure.css',
            \$extension->generateAbsoluteUrl('/app/web/bundles/framework/css/structure.css')
        );
    }

    /**
     * @dataProvider getGenerateRelativePathData()
     */
    public function testGenerateRelativePath(\$expected, \$path, \$pathinfo)
    {
        if (!method_exists('Symfony\\Component\\HttpFoundation\\Request', 'getRelativeUriForPath')) {
            \$this->markTestSkipped('Your version of Symfony HttpFoundation is too old.');
        }

        \$stack = new RequestStack();
        \$stack->push(Request::create(\$pathinfo));
        \$extension = new HttpFoundationExtension(\$stack);

        \$this->assertEquals(\$expected, \$extension->generateRelativePath(\$path));
    }

    public function getGenerateRelativePathData()
    {
        return [
            ['../foo.png', '/foo.png', '/foo/bar.html'],
            ['../baz/foo.png', '/baz/foo.png', '/foo/bar.html'],
            ['baz/foo.png', 'baz/foo.png', '/foo/bar.html'],

            ['http://example.com/baz', 'http://example.com/baz', '/'],
            ['https://example.com/baz', 'https://example.com/baz', '/'],
            ['//example.com/baz', '//example.com/baz', '/'],
        ];
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/HttpFoundationExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/HttpFoundationExtensionTest.php");
    }
}
