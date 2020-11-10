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

/* vendor/symfony/security-core/Tests/Authentication/Provider/DaoAuthenticationProviderTest.php */
class __TwigTemplate_f8a4734ef76854a210e0c339d55ef39abfee1fae2990ca0bb5517ceef58ec549 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/DaoAuthenticationProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/DaoAuthenticationProviderTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication\\Provider;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;

class DaoAuthenticationProviderTest extends TestCase
{
    /**
     * @group legacy
     */
    public function testRetrieveUserWhenProviderDoesNotReturnAnUserInterface()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException');
        \$provider = \$this->getProvider('fabien');
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken());
    }

    public function testRetrieveUserWhenUsernameIsNotFound()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->once())
                     ->method('loadUserByUsername')
                     ->willThrowException(new UsernameNotFoundException())
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken());
    }

    public function testRetrieveUserWhenAnExceptionOccurs()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException');
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->once())
                     ->method('loadUserByUsername')
                     ->willThrowException(new \\RuntimeException())
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken());
    }

    public function testRetrieveUserReturnsUserFromTokenOnReauthentication()
    {
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->never())
                     ->method('loadUserByUsername')
        ;

        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getUser')
              ->willReturn(\$user)
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$reflection = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$reflection->setAccessible(true);
        \$result = \$reflection->invoke(\$provider, null, \$token);

        \$this->assertSame(\$user, \$result);
    }

    public function testRetrieveUser()
    {
        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();

        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->once())
                     ->method('loadUserByUsername')
                     ->willReturn(\$user)
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$this->assertSame(\$user, \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken()));
    }

    public function testCheckAuthenticationWhenCredentialsAreEmpty()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder
            ->expects(\$this->never())
            ->method('isPasswordValid')
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willReturn('')
        ;

        \$method->invoke(
            \$provider,
            \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(),
            \$token
        );
    }

    public function testCheckAuthenticationWhenCredentialsAre0()
    {
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder
            ->expects(\$this->once())
            ->method('isPasswordValid')
            ->willReturn(true)
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willReturn('0')
        ;

        \$method->invoke(
            \$provider,
            \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(),
            \$token
        );
    }

    public function testCheckAuthenticationWhenCredentialsAreNotValid()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder->expects(\$this->once())
                ->method('isPasswordValid')
                ->willReturn(false)
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getCredentials')
              ->willReturn('foo')
        ;

        \$method->invoke(\$provider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(), \$token);
    }

    public function testCheckAuthenticationDoesNotReauthenticateWhenPasswordHasChanged()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$user->expects(\$this->once())
             ->method('getPassword')
             ->willReturn('foo')
        ;

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getUser')
              ->willReturn(\$user);

        \$dbUser = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$dbUser->expects(\$this->once())
               ->method('getPassword')
               ->willReturn('newFoo')
        ;

        \$provider = \$this->getProvider();
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);
        \$reflection->invoke(\$provider, \$dbUser, \$token);
    }

    public function testCheckAuthenticationWhenTokenNeedsReauthenticationWorksWithoutOriginalCredentials()
    {
        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$user->expects(\$this->once())
             ->method('getPassword')
             ->willReturn('foo')
        ;

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getUser')
              ->willReturn(\$user);

        \$dbUser = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$dbUser->expects(\$this->once())
               ->method('getPassword')
               ->willReturn('foo')
        ;

        \$provider = \$this->getProvider();
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);
        \$reflection->invoke(\$provider, \$dbUser, \$token);
    }

    public function testCheckAuthentication()
    {
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder->expects(\$this->once())
                ->method('isPasswordValid')
                ->willReturn(true)
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getCredentials')
              ->willReturn('foo')
        ;

        \$method->invoke(\$provider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(), \$token);
    }

    protected function getSupportedToken()
    {
        \$mock = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Authentication\\\\Token\\\\UsernamePasswordToken')->setMethods(['getCredentials', 'getUser', 'getProviderKey'])->disableOriginalConstructor()->getMock();
        \$mock
            ->expects(\$this->any())
            ->method('getProviderKey')
            ->willReturn('key')
        ;

        return \$mock;
    }

    protected function getProvider(\$user = null, \$userChecker = null, \$passwordEncoder = null)
    {
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        if (null !== \$user) {
            \$userProvider->expects(\$this->once())
                         ->method('loadUserByUsername')
                         ->willReturn(\$user)
            ;
        }

        if (null === \$userChecker) {
            \$userChecker = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock();
        }

        if (null === \$passwordEncoder) {
            \$passwordEncoder = new PlaintextPasswordEncoder();
        }

        \$encoderFactory = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock();
        \$encoderFactory
            ->expects(\$this->any())
            ->method('getEncoder')
            ->willReturn(\$passwordEncoder)
        ;

        return new DaoAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$encoderFactory);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/Provider/DaoAuthenticationProviderTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication\\Provider;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;

class DaoAuthenticationProviderTest extends TestCase
{
    /**
     * @group legacy
     */
    public function testRetrieveUserWhenProviderDoesNotReturnAnUserInterface()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException');
        \$provider = \$this->getProvider('fabien');
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken());
    }

    public function testRetrieveUserWhenUsernameIsNotFound()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->once())
                     ->method('loadUserByUsername')
                     ->willThrowException(new UsernameNotFoundException())
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken());
    }

    public function testRetrieveUserWhenAnExceptionOccurs()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationServiceException');
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->once())
                     ->method('loadUserByUsername')
                     ->willThrowException(new \\RuntimeException())
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken());
    }

    public function testRetrieveUserReturnsUserFromTokenOnReauthentication()
    {
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->never())
                     ->method('loadUserByUsername')
        ;

        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getUser')
              ->willReturn(\$user)
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$reflection = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$reflection->setAccessible(true);
        \$result = \$reflection->invoke(\$provider, null, \$token);

        \$this->assertSame(\$user, \$result);
    }

    public function testRetrieveUser()
    {
        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();

        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        \$userProvider->expects(\$this->once())
                     ->method('loadUserByUsername')
                     ->willReturn(\$user)
        ;

        \$provider = new DaoAuthenticationProvider(\$userProvider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock(), 'key', \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock());
        \$method = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$method->setAccessible(true);

        \$this->assertSame(\$user, \$method->invoke(\$provider, 'fabien', \$this->getSupportedToken()));
    }

    public function testCheckAuthenticationWhenCredentialsAreEmpty()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder
            ->expects(\$this->never())
            ->method('isPasswordValid')
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willReturn('')
        ;

        \$method->invoke(
            \$provider,
            \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(),
            \$token
        );
    }

    public function testCheckAuthenticationWhenCredentialsAre0()
    {
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder
            ->expects(\$this->once())
            ->method('isPasswordValid')
            ->willReturn(true)
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token
            ->expects(\$this->once())
            ->method('getCredentials')
            ->willReturn('0')
        ;

        \$method->invoke(
            \$provider,
            \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(),
            \$token
        );
    }

    public function testCheckAuthenticationWhenCredentialsAreNotValid()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder->expects(\$this->once())
                ->method('isPasswordValid')
                ->willReturn(false)
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getCredentials')
              ->willReturn('foo')
        ;

        \$method->invoke(\$provider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(), \$token);
    }

    public function testCheckAuthenticationDoesNotReauthenticateWhenPasswordHasChanged()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$user->expects(\$this->once())
             ->method('getPassword')
             ->willReturn('foo')
        ;

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getUser')
              ->willReturn(\$user);

        \$dbUser = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$dbUser->expects(\$this->once())
               ->method('getPassword')
               ->willReturn('newFoo')
        ;

        \$provider = \$this->getProvider();
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);
        \$reflection->invoke(\$provider, \$dbUser, \$token);
    }

    public function testCheckAuthenticationWhenTokenNeedsReauthenticationWorksWithoutOriginalCredentials()
    {
        \$user = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$user->expects(\$this->once())
             ->method('getPassword')
             ->willReturn('foo')
        ;

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getUser')
              ->willReturn(\$user);

        \$dbUser = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock();
        \$dbUser->expects(\$this->once())
               ->method('getPassword')
               ->willReturn('foo')
        ;

        \$provider = \$this->getProvider();
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);
        \$reflection->invoke(\$provider, \$dbUser, \$token);
    }

    public function testCheckAuthentication()
    {
        \$encoder = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\PasswordEncoderInterface')->getMock();
        \$encoder->expects(\$this->once())
                ->method('isPasswordValid')
                ->willReturn(true)
        ;

        \$provider = \$this->getProvider(null, null, \$encoder);
        \$method = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$method->setAccessible(true);

        \$token = \$this->getSupportedToken();
        \$token->expects(\$this->once())
              ->method('getCredentials')
              ->willReturn('foo')
        ;

        \$method->invoke(\$provider, \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserInterface')->getMock(), \$token);
    }

    protected function getSupportedToken()
    {
        \$mock = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Authentication\\\\Token\\\\UsernamePasswordToken')->setMethods(['getCredentials', 'getUser', 'getProviderKey'])->disableOriginalConstructor()->getMock();
        \$mock
            ->expects(\$this->any())
            ->method('getProviderKey')
            ->willReturn('key')
        ;

        return \$mock;
    }

    protected function getProvider(\$user = null, \$userChecker = null, \$passwordEncoder = null)
    {
        \$userProvider = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserProviderInterface')->getMock();
        if (null !== \$user) {
            \$userProvider->expects(\$this->once())
                         ->method('loadUserByUsername')
                         ->willReturn(\$user)
            ;
        }

        if (null === \$userChecker) {
            \$userChecker = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\User\\\\UserCheckerInterface')->getMock();
        }

        if (null === \$passwordEncoder) {
            \$passwordEncoder = new PlaintextPasswordEncoder();
        }

        \$encoderFactory = \$this->getMockBuilder('Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\EncoderFactoryInterface')->getMock();
        \$encoderFactory
            ->expects(\$this->any())
            ->method('getEncoder')
            ->willReturn(\$passwordEncoder)
        ;

        return new DaoAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$encoderFactory);
    }
}
", "vendor/symfony/security-core/Tests/Authentication/Provider/DaoAuthenticationProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/Provider/DaoAuthenticationProviderTest.php");
    }
}
