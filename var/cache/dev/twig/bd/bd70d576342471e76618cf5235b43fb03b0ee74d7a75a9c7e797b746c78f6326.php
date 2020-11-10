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

/* vendor/symfony/browser-kit/Tests/CookieTest.php */
class __TwigTemplate_a0afbb17ca385746d79d43b5c49d9b64a89c9eb31524dc532af656e9ced5abee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/CookieTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Tests/CookieTest.php"));

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

namespace Symfony\\Component\\BrowserKit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\Cookie;

class CookieTest extends TestCase
{
    public function testToString()
    {
        \$cookie = new Cookie('foo', 'bar', strtotime('Fri, 20-May-2011 15:25:52 GMT'), '/', '.myfoodomain.com', true);
        \$this->assertEquals('foo=bar; expires=Fri, 20 May 2011 15:25:52 GMT; domain=.myfoodomain.com; path=/; secure; httponly', (string) \$cookie, '->__toString() returns string representation of the cookie');

        \$cookie = new Cookie('foo', 'bar with white spaces', strtotime('Fri, 20-May-2011 15:25:52 GMT'), '/', '.myfoodomain.com', true);
        \$this->assertEquals('foo=bar%20with%20white%20spaces; expires=Fri, 20 May 2011 15:25:52 GMT; domain=.myfoodomain.com; path=/; secure; httponly', (string) \$cookie, '->__toString() encodes the value of the cookie according to RFC 3986 (white space = %20)');

        \$cookie = new Cookie('foo', null, 1, '/admin/', '.myfoodomain.com');
        \$this->assertEquals('foo=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=.myfoodomain.com; path=/admin/; httponly', (string) \$cookie, '->__toString() returns string representation of a cleared cookie if value is NULL');

        \$cookie = new Cookie('foo', 'bar', 0, '/', '');
        \$this->assertEquals('foo=bar; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/; httponly', (string) \$cookie);

        \$cookie = new Cookie('foo', 'bar', 2, '/', '', true, true, false, 'lax');
        \$this->assertEquals('foo=bar; expires=Thu, 01 Jan 1970 00:00:02 GMT; path=/; secure; httponly; samesite=lax', (string) \$cookie);
    }

    /**
     * @dataProvider getTestsForToFromString
     */
    public function testToFromString(\$cookie, \$url = null)
    {
        \$this->assertEquals(\$cookie, (string) Cookie::fromString(\$cookie, \$url));
    }

    public function getTestsForToFromString()
    {
        return [
            ['foo=bar; path=/'],
            ['foo=bar; path=/foo'],
            ['foo=bar; domain=example.com; path=/'],
            ['foo=bar; domain=example.com; path=/; secure', 'https://example.com/'],
            ['foo=bar; path=/; httponly'],
            ['foo=bar; domain=example.com; path=/foo; secure; httponly', 'https://example.com/'],
            ['foo=bar=baz; path=/'],
            ['foo=bar%3Dbaz; path=/'],
        ];
    }

    public function testFromStringIgnoreSecureFlag()
    {
        \$this->assertFalse(Cookie::fromString('foo=bar; secure')->isSecure());
        \$this->assertFalse(Cookie::fromString('foo=bar; secure', 'http://example.com/')->isSecure());
    }

    /**
     * @dataProvider getExpireCookieStrings
     */
    public function testFromStringAcceptsSeveralExpiresDateFormats(\$cookie)
    {
        \$this->assertEquals(1596185377, Cookie::fromString(\$cookie)->getExpiresTime());
    }

    public function getExpireCookieStrings()
    {
        return [
            ['foo=bar; expires=Fri, 31-Jul-2020 08:49:37 GMT'],
            ['foo=bar; expires=Fri, 31 Jul 2020 08:49:37 GMT'],
            ['foo=bar; expires=Fri, 31-07-2020 08:49:37 GMT'],
            ['foo=bar; expires=Fri, 31-07-20 08:49:37 GMT'],
            ['foo=bar; expires=Friday, 31-Jul-20 08:49:37 GMT'],
            ['foo=bar; expires=Fri Jul 31 08:49:37 2020'],
            ['foo=bar; expires=\\'Fri Jul 31 08:49:37 2020\\''],
            ['foo=bar; expires=Friday July 31st 2020, 08:49:37 GMT'],
        ];
    }

    public function testFromStringWithCapitalization()
    {
        \$this->assertEquals('Foo=Bar; path=/', (string) Cookie::fromString('Foo=Bar'));
        \$this->assertEquals('foo=bar; expires=Fri, 31 Dec 2010 23:59:59 GMT; path=/', (string) Cookie::fromString('foo=bar; Expires=Fri, 31 Dec 2010 23:59:59 GMT'));
        \$this->assertEquals('foo=bar; domain=www.example.org; path=/; httponly', (string) Cookie::fromString('foo=bar; DOMAIN=www.example.org; HttpOnly'));
    }

    public function testFromStringWithUrl()
    {
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar', 'http://www.example.com/'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar', 'http://www.example.com'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar', 'http://www.example.com?foo'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/foo', (string) Cookie::fromString('foo=bar', 'http://www.example.com/foo/bar'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar; path=/', 'http://www.example.com/foo/bar'));
        \$this->assertEquals('foo=bar; domain=www.myotherexample.com; path=/', (string) Cookie::fromString('foo=bar; domain=www.myotherexample.com', 'http://www.example.com/'));
    }

    public function testFromStringThrowsAnExceptionIfCookieIsNotValid()
    {
        \$this->expectException('InvalidArgumentException');
        Cookie::fromString('foo');
    }

    public function testFromStringIgnoresInvalidExpiresDate()
    {
        \$cookie = Cookie::fromString('foo=bar; expires=Flursday July 31st 2020, 08:49:37 GMT');

        \$this->assertFalse(\$cookie->isExpired());
    }

    public function testFromStringThrowsAnExceptionIfUrlIsNotValid()
    {
        \$this->expectException('InvalidArgumentException');
        Cookie::fromString('foo=bar', 'foobar');
    }

    public function testGetName()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertEquals('foo', \$cookie->getName(), '->getName() returns the cookie name');
    }

    public function testGetValue()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertEquals('bar', \$cookie->getValue(), '->getValue() returns the cookie value');

        \$cookie = new Cookie('foo', 'bar%3Dbaz', null, '/', '', false, true, true); // raw value
        \$this->assertEquals('bar=baz', \$cookie->getValue(), '->getValue() returns the urldecoded cookie value');
    }

    public function testGetRawValue()
    {
        \$cookie = new Cookie('foo', 'bar=baz'); // decoded value
        \$this->assertEquals('bar%3Dbaz', \$cookie->getRawValue(), '->getRawValue() returns the urlencoded cookie value');
        \$cookie = new Cookie('foo', 'bar%3Dbaz', null, '/', '', false, true, true); // raw value
        \$this->assertEquals('bar%3Dbaz', \$cookie->getRawValue(), '->getRawValue() returns the non-urldecoded cookie value');
    }

    public function testGetPath()
    {
        \$cookie = new Cookie('foo', 'bar', 0);
        \$this->assertEquals('/', \$cookie->getPath(), '->getPath() returns / is no path is defined');

        \$cookie = new Cookie('foo', 'bar', 0, '/foo');
        \$this->assertEquals('/foo', \$cookie->getPath(), '->getPath() returns the cookie path');
    }

    public function testGetDomain()
    {
        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com');
        \$this->assertEquals('foo.com', \$cookie->getDomain(), '->getDomain() returns the cookie domain');
    }

    public function testIsSecure()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertFalse(\$cookie->isSecure(), '->isSecure() returns false if not defined');

        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com', true);
        \$this->assertTrue(\$cookie->isSecure(), '->isSecure() returns the cookie secure flag');
    }

    public function testIsHttponly()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertTrue(\$cookie->isHttpOnly(), '->isHttpOnly() returns false if not defined');

        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com', false, true);
        \$this->assertTrue(\$cookie->isHttpOnly(), '->isHttpOnly() returns the cookie httponly flag');
    }

    public function testGetExpiresTime()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertNull(\$cookie->getExpiresTime(), '->getExpiresTime() returns the expires time');

        \$cookie = new Cookie('foo', 'bar', \$time = time() - 86400);
        \$this->assertEquals(\$time, \$cookie->getExpiresTime(), '->getExpiresTime() returns the expires time');
    }

    public function testIsExpired()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertFalse(\$cookie->isExpired(), '->isExpired() returns false when the cookie never expires (null as expires time)');

        \$cookie = new Cookie('foo', 'bar', time() - 86400);
        \$this->assertTrue(\$cookie->isExpired(), '->isExpired() returns true when the cookie is expired');

        \$cookie = new Cookie('foo', 'bar', 0);
        \$this->assertFalse(\$cookie->isExpired());
    }

    public function testConstructException()
    {
        \$this->expectException('UnexpectedValueException');
        \$this->expectExceptionMessage('The cookie expiration time \"string\" is not valid.');
        \$cookie = new Cookie('foo', 'bar', 'string');
    }

    public function testSameSite()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertNull(\$cookie->getSameSite());

        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com', false, true, false, 'lax');
        \$this->assertSame('lax', \$cookie->getSameSite());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Tests/CookieTest.php";
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

namespace Symfony\\Component\\BrowserKit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\BrowserKit\\Cookie;

class CookieTest extends TestCase
{
    public function testToString()
    {
        \$cookie = new Cookie('foo', 'bar', strtotime('Fri, 20-May-2011 15:25:52 GMT'), '/', '.myfoodomain.com', true);
        \$this->assertEquals('foo=bar; expires=Fri, 20 May 2011 15:25:52 GMT; domain=.myfoodomain.com; path=/; secure; httponly', (string) \$cookie, '->__toString() returns string representation of the cookie');

        \$cookie = new Cookie('foo', 'bar with white spaces', strtotime('Fri, 20-May-2011 15:25:52 GMT'), '/', '.myfoodomain.com', true);
        \$this->assertEquals('foo=bar%20with%20white%20spaces; expires=Fri, 20 May 2011 15:25:52 GMT; domain=.myfoodomain.com; path=/; secure; httponly', (string) \$cookie, '->__toString() encodes the value of the cookie according to RFC 3986 (white space = %20)');

        \$cookie = new Cookie('foo', null, 1, '/admin/', '.myfoodomain.com');
        \$this->assertEquals('foo=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=.myfoodomain.com; path=/admin/; httponly', (string) \$cookie, '->__toString() returns string representation of a cleared cookie if value is NULL');

        \$cookie = new Cookie('foo', 'bar', 0, '/', '');
        \$this->assertEquals('foo=bar; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/; httponly', (string) \$cookie);

        \$cookie = new Cookie('foo', 'bar', 2, '/', '', true, true, false, 'lax');
        \$this->assertEquals('foo=bar; expires=Thu, 01 Jan 1970 00:00:02 GMT; path=/; secure; httponly; samesite=lax', (string) \$cookie);
    }

    /**
     * @dataProvider getTestsForToFromString
     */
    public function testToFromString(\$cookie, \$url = null)
    {
        \$this->assertEquals(\$cookie, (string) Cookie::fromString(\$cookie, \$url));
    }

    public function getTestsForToFromString()
    {
        return [
            ['foo=bar; path=/'],
            ['foo=bar; path=/foo'],
            ['foo=bar; domain=example.com; path=/'],
            ['foo=bar; domain=example.com; path=/; secure', 'https://example.com/'],
            ['foo=bar; path=/; httponly'],
            ['foo=bar; domain=example.com; path=/foo; secure; httponly', 'https://example.com/'],
            ['foo=bar=baz; path=/'],
            ['foo=bar%3Dbaz; path=/'],
        ];
    }

    public function testFromStringIgnoreSecureFlag()
    {
        \$this->assertFalse(Cookie::fromString('foo=bar; secure')->isSecure());
        \$this->assertFalse(Cookie::fromString('foo=bar; secure', 'http://example.com/')->isSecure());
    }

    /**
     * @dataProvider getExpireCookieStrings
     */
    public function testFromStringAcceptsSeveralExpiresDateFormats(\$cookie)
    {
        \$this->assertEquals(1596185377, Cookie::fromString(\$cookie)->getExpiresTime());
    }

    public function getExpireCookieStrings()
    {
        return [
            ['foo=bar; expires=Fri, 31-Jul-2020 08:49:37 GMT'],
            ['foo=bar; expires=Fri, 31 Jul 2020 08:49:37 GMT'],
            ['foo=bar; expires=Fri, 31-07-2020 08:49:37 GMT'],
            ['foo=bar; expires=Fri, 31-07-20 08:49:37 GMT'],
            ['foo=bar; expires=Friday, 31-Jul-20 08:49:37 GMT'],
            ['foo=bar; expires=Fri Jul 31 08:49:37 2020'],
            ['foo=bar; expires=\\'Fri Jul 31 08:49:37 2020\\''],
            ['foo=bar; expires=Friday July 31st 2020, 08:49:37 GMT'],
        ];
    }

    public function testFromStringWithCapitalization()
    {
        \$this->assertEquals('Foo=Bar; path=/', (string) Cookie::fromString('Foo=Bar'));
        \$this->assertEquals('foo=bar; expires=Fri, 31 Dec 2010 23:59:59 GMT; path=/', (string) Cookie::fromString('foo=bar; Expires=Fri, 31 Dec 2010 23:59:59 GMT'));
        \$this->assertEquals('foo=bar; domain=www.example.org; path=/; httponly', (string) Cookie::fromString('foo=bar; DOMAIN=www.example.org; HttpOnly'));
    }

    public function testFromStringWithUrl()
    {
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar', 'http://www.example.com/'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar', 'http://www.example.com'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar', 'http://www.example.com?foo'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/foo', (string) Cookie::fromString('foo=bar', 'http://www.example.com/foo/bar'));
        \$this->assertEquals('foo=bar; domain=www.example.com; path=/', (string) Cookie::fromString('foo=bar; path=/', 'http://www.example.com/foo/bar'));
        \$this->assertEquals('foo=bar; domain=www.myotherexample.com; path=/', (string) Cookie::fromString('foo=bar; domain=www.myotherexample.com', 'http://www.example.com/'));
    }

    public function testFromStringThrowsAnExceptionIfCookieIsNotValid()
    {
        \$this->expectException('InvalidArgumentException');
        Cookie::fromString('foo');
    }

    public function testFromStringIgnoresInvalidExpiresDate()
    {
        \$cookie = Cookie::fromString('foo=bar; expires=Flursday July 31st 2020, 08:49:37 GMT');

        \$this->assertFalse(\$cookie->isExpired());
    }

    public function testFromStringThrowsAnExceptionIfUrlIsNotValid()
    {
        \$this->expectException('InvalidArgumentException');
        Cookie::fromString('foo=bar', 'foobar');
    }

    public function testGetName()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertEquals('foo', \$cookie->getName(), '->getName() returns the cookie name');
    }

    public function testGetValue()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertEquals('bar', \$cookie->getValue(), '->getValue() returns the cookie value');

        \$cookie = new Cookie('foo', 'bar%3Dbaz', null, '/', '', false, true, true); // raw value
        \$this->assertEquals('bar=baz', \$cookie->getValue(), '->getValue() returns the urldecoded cookie value');
    }

    public function testGetRawValue()
    {
        \$cookie = new Cookie('foo', 'bar=baz'); // decoded value
        \$this->assertEquals('bar%3Dbaz', \$cookie->getRawValue(), '->getRawValue() returns the urlencoded cookie value');
        \$cookie = new Cookie('foo', 'bar%3Dbaz', null, '/', '', false, true, true); // raw value
        \$this->assertEquals('bar%3Dbaz', \$cookie->getRawValue(), '->getRawValue() returns the non-urldecoded cookie value');
    }

    public function testGetPath()
    {
        \$cookie = new Cookie('foo', 'bar', 0);
        \$this->assertEquals('/', \$cookie->getPath(), '->getPath() returns / is no path is defined');

        \$cookie = new Cookie('foo', 'bar', 0, '/foo');
        \$this->assertEquals('/foo', \$cookie->getPath(), '->getPath() returns the cookie path');
    }

    public function testGetDomain()
    {
        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com');
        \$this->assertEquals('foo.com', \$cookie->getDomain(), '->getDomain() returns the cookie domain');
    }

    public function testIsSecure()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertFalse(\$cookie->isSecure(), '->isSecure() returns false if not defined');

        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com', true);
        \$this->assertTrue(\$cookie->isSecure(), '->isSecure() returns the cookie secure flag');
    }

    public function testIsHttponly()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertTrue(\$cookie->isHttpOnly(), '->isHttpOnly() returns false if not defined');

        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com', false, true);
        \$this->assertTrue(\$cookie->isHttpOnly(), '->isHttpOnly() returns the cookie httponly flag');
    }

    public function testGetExpiresTime()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertNull(\$cookie->getExpiresTime(), '->getExpiresTime() returns the expires time');

        \$cookie = new Cookie('foo', 'bar', \$time = time() - 86400);
        \$this->assertEquals(\$time, \$cookie->getExpiresTime(), '->getExpiresTime() returns the expires time');
    }

    public function testIsExpired()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertFalse(\$cookie->isExpired(), '->isExpired() returns false when the cookie never expires (null as expires time)');

        \$cookie = new Cookie('foo', 'bar', time() - 86400);
        \$this->assertTrue(\$cookie->isExpired(), '->isExpired() returns true when the cookie is expired');

        \$cookie = new Cookie('foo', 'bar', 0);
        \$this->assertFalse(\$cookie->isExpired());
    }

    public function testConstructException()
    {
        \$this->expectException('UnexpectedValueException');
        \$this->expectExceptionMessage('The cookie expiration time \"string\" is not valid.');
        \$cookie = new Cookie('foo', 'bar', 'string');
    }

    public function testSameSite()
    {
        \$cookie = new Cookie('foo', 'bar');
        \$this->assertNull(\$cookie->getSameSite());

        \$cookie = new Cookie('foo', 'bar', 0, '/', 'foo.com', false, true, false, 'lax');
        \$this->assertSame('lax', \$cookie->getSameSite());
    }
}
", "vendor/symfony/browser-kit/Tests/CookieTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Tests/CookieTest.php");
    }
}
