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

/* vendor/symfony/security-http/Tests/RememberMe/PersistentTokenBasedRememberMeServicesTest.php */
class __TwigTemplate_eddfa77b179cc0cc510ff39c90e02568b5eb1c3aae69a3e1d0fe271c7d4c2d2b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/RememberMe/PersistentTokenBasedRememberMeServicesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/RememberMe/PersistentTokenBasedRememberMeServicesTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;
use Symfony\\Component\\Security\\Core\\Exception\\CookieTheftException;
use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;

class PersistentTokenBasedRememberMeServicesTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        try {
            random_bytes(1);
        } catch (\\Exception \$e) {
            self::markTestSkipped(\$e->getMessage());
        }
    }

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

    public function testAutoLoginThrowsExceptionOnNonExistentToken()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => false, 'remember_me_parameter' => 'foo']);
        \$request = new Request();
        \$request->request->set('foo', 'true');
        \$request->cookies->set('foo', \$this->encodeCookie([
            \$series = 'fooseries',
            \$tokenValue = 'foovalue',
        ]));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->willThrowException(new TokenNotFoundException('Token not found.'))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginReturnsNullOnNonExistentUser()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600, 'secure' => false, 'httponly' => false]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->willReturn(new PersistentToken('fooclass', 'fooname', 'fooseries', 'foovalue', new \\DateTime()))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->willThrowException(new UsernameNotFoundException('user not found'))
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testAutoLoginThrowsExceptionOnStolenCookieAndRemovesItFromThePersistentBackend()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$service->setTokenProvider(\$tokenProvider);

        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->willReturn(new PersistentToken('fooclass', 'foouser', 'fooseries', 'anotherFooValue', new \\DateTime()))
        ;

        \$tokenProvider
            ->expects(\$this->once())
            ->method('deleteTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(null)
        ;

        try {
            \$service->autoLogin(\$request);
            \$this->fail('Expected CookieTheftException was not thrown.');
        } catch (CookieTheftException \$e) {
        }

        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testAutoLoginDoesNotAcceptAnExpiredCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(new PersistentToken('fooclass', 'username', 'fooseries', 'foovalue', new \\DateTime('yesterday')))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testAutoLogin()
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getRoles')
            ->willReturn(['ROLE_FOO'])
        ;

        \$userProvider = \$this->getProvider();
        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foouser'))
            ->willReturn(\$user)
        ;

        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'secure' => false, 'httponly' => false, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(new PersistentToken('fooclass', 'foouser', 'fooseries', 'foovalue', new \\DateTime()))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$returnedToken = \$service->autoLogin(\$request);

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', \$returnedToken);
        \$this->assertSame(\$user, \$returnedToken->getUser());
        \$this->assertEquals('foosecret', \$returnedToken->getSecret());
        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testLogout()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => '/foo', 'domain' => 'foodomain.foo', 'secure' => true, 'httponly' => false]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('deleteTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(null)
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$service->logout(\$request, \$response, \$token);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/foo', \$cookie->getPath());
        \$this->assertEquals('foodomain.foo', \$cookie->getDomain());
        \$this->assertTrue(\$cookie->isSecure());
        \$this->assertFalse(\$cookie->isHttpOnly());
    }

    public function testLogoutSimplyIgnoresNonSetRequestCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null]);
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->never())
            ->method('deleteTokenBySeries')
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$service->logout(\$request, \$response, \$token);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/', \$cookie->getPath());
        \$this->assertNull(\$cookie->getDomain());
    }

    public function testLogoutSimplyIgnoresInvalidCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null]);
        \$request = new Request();
        \$request->cookies->set('foo', 'somefoovalue');
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->never())
            ->method('deleteTokenBySeries')
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$service->logout(\$request, \$response, \$token);

        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testLoginFail()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null]);
        \$request = new Request();

        \$this->assertFalse(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
        \$service->loginFail(\$request);
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testLoginSuccessSetsCookieWhenLoggedInWithNonRememberMeTokenInterfaceImplementation()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'domain' => 'myfoodomain.foo', 'path' => '/foo/path', 'secure' => true, 'httponly' => true, 'samesite' => Cookie::SAMESITE_STRICT, 'lifetime' => 3600, 'always_remember_me' => true]);
        \$request = new Request();
        \$response = new Response();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$account
            ->expects(\$this->once())
            ->method('getUsername')
            ->willReturn('foo')
        ;
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$account)
        ;

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('createNewToken')
        ;
        \$service->setTokenProvider(\$tokenProvider);

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

        return new PersistentTokenBasedRememberMeServices([\$userProvider], 'foosecret', 'fookey', \$options, \$logger);
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
        return "vendor/symfony/security-http/Tests/RememberMe/PersistentTokenBasedRememberMeServicesTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;
use Symfony\\Component\\Security\\Core\\Exception\\CookieTheftException;
use Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices;
use Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface;

class PersistentTokenBasedRememberMeServicesTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        try {
            random_bytes(1);
        } catch (\\Exception \$e) {
            self::markTestSkipped(\$e->getMessage());
        }
    }

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

    public function testAutoLoginThrowsExceptionOnNonExistentToken()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => false, 'remember_me_parameter' => 'foo']);
        \$request = new Request();
        \$request->request->set('foo', 'true');
        \$request->cookies->set('foo', \$this->encodeCookie([
            \$series = 'fooseries',
            \$tokenValue = 'foovalue',
        ]));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->willThrowException(new TokenNotFoundException('Token not found.'))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testAutoLoginReturnsNullOnNonExistentUser()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600, 'secure' => false, 'httponly' => false]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->willReturn(new PersistentToken('fooclass', 'fooname', 'fooseries', 'foovalue', new \\DateTime()))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->willThrowException(new UsernameNotFoundException('user not found'))
        ;

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testAutoLoginThrowsExceptionOnStolenCookieAndRemovesItFromThePersistentBackend()
    {
        \$userProvider = \$this->getProvider();
        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$service->setTokenProvider(\$tokenProvider);

        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->willReturn(new PersistentToken('fooclass', 'foouser', 'fooseries', 'anotherFooValue', new \\DateTime()))
        ;

        \$tokenProvider
            ->expects(\$this->once())
            ->method('deleteTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(null)
        ;

        try {
            \$service->autoLogin(\$request);
            \$this->fail('Expected CookieTheftException was not thrown.');
        } catch (CookieTheftException \$e) {
        }

        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testAutoLoginDoesNotAcceptAnExpiredCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(new PersistentToken('fooclass', 'username', 'fooseries', 'foovalue', new \\DateTime('yesterday')))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$this->assertNull(\$service->autoLogin(\$request));
        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testAutoLogin()
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user
            ->expects(\$this->once())
            ->method('getRoles')
            ->willReturn(['ROLE_FOO'])
        ;

        \$userProvider = \$this->getProvider();
        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foouser'))
            ->willReturn(\$user)
        ;

        \$service = \$this->getService(\$userProvider, ['name' => 'foo', 'path' => null, 'domain' => null, 'secure' => false, 'httponly' => false, 'always_remember_me' => true, 'lifetime' => 3600]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('loadTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(new PersistentToken('fooclass', 'foouser', 'fooseries', 'foovalue', new \\DateTime()))
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$returnedToken = \$service->autoLogin(\$request);

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', \$returnedToken);
        \$this->assertSame(\$user, \$returnedToken->getUser());
        \$this->assertEquals('foosecret', \$returnedToken->getSecret());
        \$this->assertTrue(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
    }

    public function testLogout()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => '/foo', 'domain' => 'foodomain.foo', 'secure' => true, 'httponly' => false]);
        \$request = new Request();
        \$request->cookies->set('foo', \$this->encodeCookie(['fooseries', 'foovalue']));
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('deleteTokenBySeries')
            ->with(\$this->equalTo('fooseries'))
            ->willReturn(null)
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$service->logout(\$request, \$response, \$token);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/foo', \$cookie->getPath());
        \$this->assertEquals('foodomain.foo', \$cookie->getDomain());
        \$this->assertTrue(\$cookie->isSecure());
        \$this->assertFalse(\$cookie->isHttpOnly());
    }

    public function testLogoutSimplyIgnoresNonSetRequestCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null]);
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->never())
            ->method('deleteTokenBySeries')
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$service->logout(\$request, \$response, \$token);

        \$cookie = \$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME);
        \$this->assertTrue(\$cookie->isCleared());
        \$this->assertEquals('/', \$cookie->getPath());
        \$this->assertNull(\$cookie->getDomain());
    }

    public function testLogoutSimplyIgnoresInvalidCookie()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null]);
        \$request = new Request();
        \$request->cookies->set('foo', 'somefoovalue');
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->never())
            ->method('deleteTokenBySeries')
        ;
        \$service->setTokenProvider(\$tokenProvider);

        \$service->logout(\$request, \$response, \$token);

        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testLoginFail()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'path' => null, 'domain' => null]);
        \$request = new Request();

        \$this->assertFalse(\$request->attributes->has(RememberMeServicesInterface::COOKIE_ATTR_NAME));
        \$service->loginFail(\$request);
        \$this->assertTrue(\$request->attributes->get(RememberMeServicesInterface::COOKIE_ATTR_NAME)->isCleared());
    }

    public function testLoginSuccessSetsCookieWhenLoggedInWithNonRememberMeTokenInterfaceImplementation()
    {
        \$service = \$this->getService(null, ['name' => 'foo', 'domain' => 'myfoodomain.foo', 'path' => '/foo/path', 'secure' => true, 'httponly' => true, 'samesite' => Cookie::SAMESITE_STRICT, 'lifetime' => 3600, 'always_remember_me' => true]);
        \$request = new Request();
        \$response = new Response();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$account
            ->expects(\$this->once())
            ->method('getUsername')
            ->willReturn('foo')
        ;
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$account)
        ;

        \$tokenProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\TokenProviderInterface')->getMock();
        \$tokenProvider
            ->expects(\$this->once())
            ->method('createNewToken')
        ;
        \$service->setTokenProvider(\$tokenProvider);

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

        return new PersistentTokenBasedRememberMeServices([\$userProvider], 'foosecret', 'fookey', \$options, \$logger);
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
", "vendor/symfony/security-http/Tests/RememberMe/PersistentTokenBasedRememberMeServicesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/RememberMe/PersistentTokenBasedRememberMeServicesTest.php");
    }
}
