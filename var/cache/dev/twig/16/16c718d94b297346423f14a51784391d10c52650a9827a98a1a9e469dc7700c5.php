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

/* vendor/symfony/http-foundation/Tests/RequestMatcherTest.php */
class __TwigTemplate_3854c305a2534571e8a9d70e6787edbcb2311bd2821e147ffb78fde1920a848f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/RequestMatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/RequestMatcherTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestMatcher;

class RequestMatcherTest extends TestCase
{
    /**
     * @dataProvider getMethodData
     */
    public function testMethod(\$requestMethod, \$matcherMethod, \$isMatch)
    {
        \$matcher = new RequestMatcher();
        \$matcher->matchMethod(\$matcherMethod);
        \$request = Request::create('', \$requestMethod);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));

        \$matcher = new RequestMatcher(null, null, \$matcherMethod);
        \$request = Request::create('', \$requestMethod);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));
    }

    public function getMethodData()
    {
        return [
            ['get', 'get', true],
            ['get', ['get', 'post'], true],
            ['get', 'post', false],
            ['get', 'GET', true],
            ['get', ['GET', 'POST'], true],
            ['get', 'POST', false],
        ];
    }

    public function testScheme()
    {
        \$httpRequest = \$request = \$request = Request::create('');
        \$httpsRequest = \$request = \$request = Request::create('', 'get', [], [], [], ['HTTPS' => 'on']);

        \$matcher = new RequestMatcher();
        \$matcher->matchScheme('https');
        \$this->assertFalse(\$matcher->matches(\$httpRequest));
        \$this->assertTrue(\$matcher->matches(\$httpsRequest));

        \$matcher->matchScheme('http');
        \$this->assertFalse(\$matcher->matches(\$httpsRequest));
        \$this->assertTrue(\$matcher->matches(\$httpRequest));

        \$matcher = new RequestMatcher();
        \$this->assertTrue(\$matcher->matches(\$httpsRequest));
        \$this->assertTrue(\$matcher->matches(\$httpRequest));
    }

    /**
     * @dataProvider getHostData
     */
    public function testHost(\$pattern, \$isMatch)
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('', 'get', [], [], [], ['HTTP_HOST' => 'foo.example.com']);

        \$matcher->matchHost(\$pattern);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));

        \$matcher = new RequestMatcher(null, \$pattern);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));
    }

    public function testPort()
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('', 'get', [], [], [], ['HTTP_HOST' => null, 'SERVER_PORT' => 8000]);

        \$matcher->matchPort(8000);
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchPort(9000);
        \$this->assertFalse(\$matcher->matches(\$request));

        \$matcher = new RequestMatcher(null, null, null, null, [], null, 8000);
        \$this->assertTrue(\$matcher->matches(\$request));
    }

    public function getHostData()
    {
        return [
            ['.*\\.example\\.com', true],
            ['\\.example\\.com\$', true],
            ['^.*\\.example\\.com\$', true],
            ['.*\\.sensio\\.com', false],
            ['.*\\.example\\.COM', true],
            ['\\.example\\.COM\$', true],
            ['^.*\\.example\\.COM\$', true],
            ['.*\\.sensio\\.COM', false],
        ];
    }

    public function testPath()
    {
        \$matcher = new RequestMatcher();

        \$request = Request::create('/admin/foo');

        \$matcher->matchPath('/admin/.*');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchPath('/admin');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchPath('^/admin/.*\$');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchMethod('/blog/.*');
        \$this->assertFalse(\$matcher->matches(\$request));
    }

    public function testPathWithLocaleIsNotSupported()
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('/en/login');
        \$request->setLocale('en');

        \$matcher->matchPath('^/{_locale}/login\$');
        \$this->assertFalse(\$matcher->matches(\$request));
    }

    public function testPathWithEncodedCharacters()
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('/admin/fo%20o');
        \$matcher->matchPath('^/admin/fo o*\$');
        \$this->assertTrue(\$matcher->matches(\$request));
    }

    public function testAttributes()
    {
        \$matcher = new RequestMatcher();

        \$request = Request::create('/admin/foo');
        \$request->attributes->set('foo', 'foo_bar');

        \$matcher->matchAttribute('foo', 'foo_.*');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchAttribute('foo', 'foo');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchAttribute('foo', '^foo_bar\$');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchAttribute('foo', 'babar');
        \$this->assertFalse(\$matcher->matches(\$request));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/RequestMatcherTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestMatcher;

class RequestMatcherTest extends TestCase
{
    /**
     * @dataProvider getMethodData
     */
    public function testMethod(\$requestMethod, \$matcherMethod, \$isMatch)
    {
        \$matcher = new RequestMatcher();
        \$matcher->matchMethod(\$matcherMethod);
        \$request = Request::create('', \$requestMethod);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));

        \$matcher = new RequestMatcher(null, null, \$matcherMethod);
        \$request = Request::create('', \$requestMethod);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));
    }

    public function getMethodData()
    {
        return [
            ['get', 'get', true],
            ['get', ['get', 'post'], true],
            ['get', 'post', false],
            ['get', 'GET', true],
            ['get', ['GET', 'POST'], true],
            ['get', 'POST', false],
        ];
    }

    public function testScheme()
    {
        \$httpRequest = \$request = \$request = Request::create('');
        \$httpsRequest = \$request = \$request = Request::create('', 'get', [], [], [], ['HTTPS' => 'on']);

        \$matcher = new RequestMatcher();
        \$matcher->matchScheme('https');
        \$this->assertFalse(\$matcher->matches(\$httpRequest));
        \$this->assertTrue(\$matcher->matches(\$httpsRequest));

        \$matcher->matchScheme('http');
        \$this->assertFalse(\$matcher->matches(\$httpsRequest));
        \$this->assertTrue(\$matcher->matches(\$httpRequest));

        \$matcher = new RequestMatcher();
        \$this->assertTrue(\$matcher->matches(\$httpsRequest));
        \$this->assertTrue(\$matcher->matches(\$httpRequest));
    }

    /**
     * @dataProvider getHostData
     */
    public function testHost(\$pattern, \$isMatch)
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('', 'get', [], [], [], ['HTTP_HOST' => 'foo.example.com']);

        \$matcher->matchHost(\$pattern);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));

        \$matcher = new RequestMatcher(null, \$pattern);
        \$this->assertSame(\$isMatch, \$matcher->matches(\$request));
    }

    public function testPort()
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('', 'get', [], [], [], ['HTTP_HOST' => null, 'SERVER_PORT' => 8000]);

        \$matcher->matchPort(8000);
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchPort(9000);
        \$this->assertFalse(\$matcher->matches(\$request));

        \$matcher = new RequestMatcher(null, null, null, null, [], null, 8000);
        \$this->assertTrue(\$matcher->matches(\$request));
    }

    public function getHostData()
    {
        return [
            ['.*\\.example\\.com', true],
            ['\\.example\\.com\$', true],
            ['^.*\\.example\\.com\$', true],
            ['.*\\.sensio\\.com', false],
            ['.*\\.example\\.COM', true],
            ['\\.example\\.COM\$', true],
            ['^.*\\.example\\.COM\$', true],
            ['.*\\.sensio\\.COM', false],
        ];
    }

    public function testPath()
    {
        \$matcher = new RequestMatcher();

        \$request = Request::create('/admin/foo');

        \$matcher->matchPath('/admin/.*');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchPath('/admin');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchPath('^/admin/.*\$');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchMethod('/blog/.*');
        \$this->assertFalse(\$matcher->matches(\$request));
    }

    public function testPathWithLocaleIsNotSupported()
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('/en/login');
        \$request->setLocale('en');

        \$matcher->matchPath('^/{_locale}/login\$');
        \$this->assertFalse(\$matcher->matches(\$request));
    }

    public function testPathWithEncodedCharacters()
    {
        \$matcher = new RequestMatcher();
        \$request = Request::create('/admin/fo%20o');
        \$matcher->matchPath('^/admin/fo o*\$');
        \$this->assertTrue(\$matcher->matches(\$request));
    }

    public function testAttributes()
    {
        \$matcher = new RequestMatcher();

        \$request = Request::create('/admin/foo');
        \$request->attributes->set('foo', 'foo_bar');

        \$matcher->matchAttribute('foo', 'foo_.*');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchAttribute('foo', 'foo');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchAttribute('foo', '^foo_bar\$');
        \$this->assertTrue(\$matcher->matches(\$request));

        \$matcher->matchAttribute('foo', 'babar');
        \$this->assertFalse(\$matcher->matches(\$request));
    }
}
", "vendor/symfony/http-foundation/Tests/RequestMatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/RequestMatcherTest.php");
    }
}
