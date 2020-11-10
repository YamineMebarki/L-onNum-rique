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

/* vendor/symfony/security-http/Tests/RememberMe/TokenBasedRememberMeServicesTest.php */
class __TwigTemplate_c1a80df098fc1a8e8081b142f13b100e110673a2ff832ca332615755674ca755 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/RememberMe/TokenBasedRememberMeServicesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/RememberMe/TokenBasedRememberMeServicesTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\RememberMe;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;
use Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices;

class TokenBasedRememberMeServicesTest extends TestCase
{
    public function testAutoLoginReturnsNullWhenNoCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo']);

        \$this->assertNull(\$service->autoLogin(new Request()));
    }

    public function testAutoLoginThrowsExceptionOnInvalidCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => false, 'remember_me_parameter' => 'foo']);
        \$request = new Request();
        \$request->request->set('foo', 'true');
        \$request->cookies->set('foo', 'foo');

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginThrowsExceptionOnNonExistentUser()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->getCookie('fooclass', 'foouser', time() + 3600, 'foopass'));

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->willThrowException(new UsernameNotFoundException('user not found'))
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginDoesNotAcceptCookieWithInvalidHash()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', base64_encode('class:'.base64_encode('foouser').':123456789:fooHash'));

        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foouser'))
            ->willReturn(\$user)
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginDoesNotAcceptAnExpiredCookie()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->getCookie('fooclass', 'foouser', time() - 1, 'foopass'));

        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foouser'))
            ->willReturn(\$user)
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    /**
     * @dataProvider provideUsernamesForAutoLogin
     *
     * @param string \$username
     */
    public function testAutoLogin(\$username)
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getRoles')
            ->willReturn(['ROLE_FOO'])
        ;
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;

        \$userProvider = \$this->getProvider();
        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo(\$username))
            ->willReturn(\$user)
        ;

        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->getCookie('fooclass', \$username, time() + 3600, 'foopass'));

        \$returnedToken = \$service->autoLogin(\$request);

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', \$returnedToken);
        \$this->assertSame(\$user, \$returnedToken->getUser());
        \$this->assertEquals('foosecret', \$returnedToken->getSecret());
    }

    public function provideUsernamesForAutoLogin()
    {
        return [
            ['foouser', 'Simple username'],
            ['foo'.TokenBasedRememberMeServices::COOKIE_DELIMITER.'user', 'Username might contain the delimiter'],
        ];
    }

    public function testLogout()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'secure' => true, 'httponly' => false]);
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$service->logout(\$request, \$response, \$token);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/', \$cookie->getPath());
        \$this->assertNull(\$cookie->getDomain());
        \$this->assertTrue(\$cookie->isSecure());
        \$this->assertFalse(\$cookie->isHttpOnly());
    }

    public function testLoginFail()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => '/foo', 'domain' => 'foodomain.foo']);
        \$request = new Request();

        \$service->loginFail(\$request);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/foo', \$cookie->getPath());
        \$this->assertEquals('foodomain.foo', \$cookie->getDomain());
    }

    public function testLoginSuccessIgnoresTokensWhichDoNotContainAnUserInterfaceImplementation()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'always_remember_me' => true, 'path' => null, 'domain' => null]);
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->once())
            ->method('getUser')
            ->willReturn('foo')
        ;

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);

        \$service->loginSuccess(\$request, \$response, \$token);

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);
    }

    public function testLoginSuccess()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'domain' => 'myfoodomain.foo', 'path' => '/foo/path', 'secure' => true, 'httponly' => true, 'samesite' => Cookie::SAMESITE_STRICT, 'lifetime' => 3600, 'always_remember_me' => true]);
        \$request = new Request();
        \$response = new Response();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;
        \$user
            ->expects(\$this->once())
            ->method('getUsername')
            ->willReturn('foouser')
        ;
        \$token
            ->expects(\$this->atLeastOnce())
            ->method('getUser')
            ->willReturn(\$user)
        ;

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);

        \$service->loginSuccess(\$request, \$response, \$token);

        \$cookies = \$response->headers->getCookies(ResponseHeaderBag::COOKIES_ARRAY);
        \$cookie = \$cookies['myfoodomain.foo']['/foo/path']['foo'];
        \$this->assertFalse(\$cookie->isCleared());
        \$this->assertTrue(\$cookie->isSecure());
        \$this->assertTrue(\$cookie->isHttpOnly());
        \$this->assertTrue(\$cookie->getExpiresTime() > time() + 3590 && \$cookie->getExpiresTime() < time() + 3610);
        \$this->assertEquals('myfoodomain.foo', \$cookie->getDomain());
        \$this->assertEquals('/foo/path', \$cookie->getPath());
        \$this->assertSame(Cookie::SAMESITE_STRICT, \$cookie->getSameSite());
    }

    protected function getCookie(\$class, \$username, \$expires, \$password)
    {
        \$service = \$this->getService();
        \$r = new \\ReflectionMethod(\$service, 'generateCookieValue');
        \$r->setAccessible(true);

        return \$r->invoke(\$service, \$class, \$username, \$expires, \$password);
    }

    protected function encodeCookie(array \$parts)
    {
        \$service = \$this->getService();
        \$r = new \\ReflectionMethod(\$service, 'encodeCookie');
        \$r->setAccessible(true);

        return \$r->invoke(\$service, \$parts);
    }

    protected function getService(\$userProvider = null, \$options = [], \$logger = null)
    {
        if (null === \$userProvider) {
            \$userProvider = \$this->getProvider();
        }

        \$service = new TokenBasedRememberMeServices([\$userProvider], 'foosecret', 'fookey', \$options, \$logger);

        return \$service;
    }

    protected function getProvider()
    {
        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        \$provider
            ->expects(\$this->any())
            ->method('supportsClass')
            ->willReturn(true)
        ;

        return \$provider;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/RememberMe/TokenBasedRememberMeServicesTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\RememberMe;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;
use Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices;

class TokenBasedRememberMeServicesTest extends TestCase
{
    public function testAutoLoginReturnsNullWhenNoCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo']);

        \$this->assertNull(\$service->autoLogin(new Request()));
    }

    public function testAutoLoginThrowsExceptionOnInvalidCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => false, 'remember_me_parameter' => 'foo']);
        \$request = new Request();
        \$request->request->set('foo', 'true');
        \$request->cookies->set('foo', 'foo');

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginThrowsExceptionOnNonExistentUser()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->getCookie('fooclass', 'foouser', time() + 3600, 'foopass'));

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->willThrowException(new UsernameNotFoundException('user not found'))
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginDoesNotAcceptCookieWithInvalidHash()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', base64_encode('class:'.base64_encode('foouser').':123456789:fooHash'));

        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foouser'))
            ->willReturn(\$user)
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginDoesNotAcceptAnExpiredCookie()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->getCookie('fooclass', 'foouser', time() - 1, 'foopass'));

        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foouser'))
            ->willReturn(\$user)
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    /**
     * @dataProvider provideUsernamesForAutoLogin
     *
     * @param string \$username
     */
    public function testAutoLogin(\$username)
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getRoles')
            ->willReturn(['ROLE_FOO'])
        ;
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;

        \$userProvider = \$this->getProvider();
        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo(\$username))
            ->willReturn(\$user)
        ;

        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->getCookie('fooclass', \$username, time() + 3600, 'foopass'));

        \$returnedToken = \$service->autoLogin(\$request);

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', \$returnedToken);
        \$this->assertSame(\$user, \$returnedToken->getUser());
        \$this->assertEquals('foosecret', \$returnedToken->getSecret());
    }

    public function provideUsernamesForAutoLogin()
    {
        return [
            ['foouser', 'Simple username'],
            ['foo'.TokenBasedRememberMeServices::COOKIE_DELIMITER.'user', 'Username might contain the delimiter'],
        ];
    }

    public function testLogout()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'secure' => true, 'httponly' => false]);
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$service->logout(\$request, \$response, \$token);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/', \$cookie->getPath());
        \$this->assertNull(\$cookie->getDomain());
        \$this->assertTrue(\$cookie->isSecure());
        \$this->assertFalse(\$cookie->isHttpOnly());
    }

    public function testLoginFail()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => '/foo', 'domain' => 'foodomain.foo']);
        \$request = new Request();

        \$service->loginFail(\$request);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/foo', \$cookie->getPath());
        \$this->assertEquals('foodomain.foo', \$cookie->getDomain());
    }

    public function testLoginSuccessIgnoresTokensWhichDoNotContainAnUserInterfaceImplementation()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'always_remember_me' => true, 'path' => null, 'domain' => null]);
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->once())
            ->method('getUser')
            ->willReturn('foo')
        ;

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);

        \$service->loginSuccess(\$request, \$response, \$token);

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);
    }

    public function testLoginSuccess()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'domain' => 'myfoodomain.foo', 'path' => '/foo/path', 'secure' => true, 'httponly' => true, 'samesite' => Cookie::SAMESITE_STRICT, 'lifetime' => 3600, 'always_remember_me' => true]);
        \$request = new Request();
        \$response = new Response();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getPassword')
            ->willReturn('foopass')
        ;
        \$user
            ->expects(\$this->once())
            ->method('getUsername')
            ->willReturn('foouser')
        ;
        \$token
            ->expects(\$this->atLeastOnce())
            ->method('getUser')
            ->willReturn(\$user)
        ;

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);

        \$service->loginSuccess(\$request, \$response, \$token);

        \$cookies = \$response->headers->getCookies(ResponseHeaderBag::COOKIES_ARRAY);
        \$cookie = \$cookies['myfoodomain.foo']['/foo/path']['foo'];
        \$this->assertFalse(\$cookie->isCleared());
        \$this->assertTrue(\$cookie->isSecure());
        \$this->assertTrue(\$cookie->isHttpOnly());
        \$this->assertTrue(\$cookie->getExpiresTime() > time() + 3590 && \$cookie->getExpiresTime() < time() + 3610);
        \$this->assertEquals('myfoodomain.foo', \$cookie->getDomain());
        \$this->assertEquals('/foo/path', \$cookie->getPath());
        \$this->assertSame(Cookie::SAMESITE_STRICT, \$cookie->getSameSite());
    }

    protected function getCookie(\$class, \$username, \$expires, \$password)
    {
        \$service = \$this->getService();
        \$r = new \\ReflectionMethod(\$service, 'generateCookieValue');
        \$r->setAccessible(true);

        return \$r->invoke(\$service, \$class, \$username, \$expires, \$password);
    }

    protected function encodeCookie(array \$parts)
    {
        \$service = \$this->getService();
        \$r = new \\ReflectionMethod(\$service, 'encodeCookie');
        \$r->setAccessible(true);

        return \$r->invoke(\$service, \$parts);
    }

    protected function getService(\$userProvider = null, \$options = [], \$logger = null)
    {
        if (null === \$userProvider) {
            \$userProvider = \$this->getProvider();
        }

        \$service = new TokenBasedRememberMeServices([\$userProvider], 'foosecret', 'fookey', \$options, \$logger);

        return \$service;
    }

    protected function getProvider()
    {
        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        \$provider
            ->expects(\$this->any())
            ->method('supportsClass')
            ->willReturn(true)
        ;

        return \$provider;
    }
}
", "vendor/symfony/security-http/Tests/RememberMe/TokenBasedRememberMeServicesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/RememberMe/TokenBasedRememberMeServicesTest.php");
    }
}
