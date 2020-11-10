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

/* vendor/symfony/security-core/Tests/Authentication/AuthenticationProviderManagerTest.php */
class __TwigTemplate_c76fa50ac9a8d3713936f8d3e0d2ea1c52f76b929391f0836002ad876fb90c19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/AuthenticationProviderManagerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/AuthenticationProviderManagerTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\AuthenticationEvents;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent;
use Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\ProviderNotFoundException;

class AuthenticationProviderManagerTest extends TestCase
{
    public function testAuthenticateWithoutProviders()
    {
        \$this->expectException('InvalidArgumentException');
        new AuthenticationProviderManager([]);
    }

    public function testAuthenticateWithProvidersWithIncorrectInterface()
    {
        \$this->expectException('InvalidArgumentException');
        (new AuthenticationProviderManager([
            new \\stdClass(),
        ]))->authenticate(\$this->getMockBuilder(TokenInterface::class)->getMock());
    }

    public function testAuthenticateWhenNoProviderSupportsToken()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(false),
        ]);

        try {
            \$manager->authenticate(\$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
            \$this->fail();
        } catch (ProviderNotFoundException \$e) {
            \$this->assertSame(\$token, \$e->getToken());
        }
    }

    public function testAuthenticateWhenProviderReturnsAccountStatusException()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, null, 'Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException'),
        ]);

        try {
            \$manager->authenticate(\$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
            \$this->fail();
        } catch (AccountStatusException \$e) {
            \$this->assertSame(\$token, \$e->getToken());
        }
    }

    public function testAuthenticateWhenProviderReturnsAuthenticationException()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, null, 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException'),
        ]);

        try {
            \$manager->authenticate(\$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
            \$this->fail();
        } catch (AuthenticationException \$e) {
            \$this->assertSame(\$token, \$e->getToken());
        }
    }

    public function testAuthenticateWhenOneReturnsAuthenticationExceptionButNotAll()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, null, 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException'),
            \$this->getAuthenticationProvider(true, \$expected = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock()),
        ]);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertSame(\$expected, \$token);
    }

    public function testAuthenticateReturnsTokenOfTheFirstMatchingProvider()
    {
        \$second = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$second
            ->expects(\$this->never())
            ->method('supports')
        ;
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, \$expected = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock()),
            \$second,
        ]);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertSame(\$expected, \$token);
    }

    public function testEraseCredentialFlag()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, \$token = new UsernamePasswordToken('foo', 'bar', 'key')),
        ]);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertEquals('', \$token->getCredentials());

        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, \$token = new UsernamePasswordToken('foo', 'bar', 'key')),
        ], false);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertEquals('bar', \$token->getCredentials());
    }

    public function testAuthenticateDispatchesAuthenticationFailureEvent()
    {
        \$token = new UsernamePasswordToken('foo', 'bar', 'key');
        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$provider->expects(\$this->once())->method('supports')->willReturn(true);
        \$provider->expects(\$this->once())->method('authenticate')->willThrowException(\$exception = new AuthenticationException());

        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();
        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(new AuthenticationFailureEvent(\$token, \$exception)), AuthenticationEvents::AUTHENTICATION_FAILURE);

        \$manager = new AuthenticationProviderManager([\$provider]);
        \$manager->setEventDispatcher(\$dispatcher);

        try {
            \$manager->authenticate(\$token);
            \$this->fail('->authenticate() should rethrow exceptions');
        } catch (AuthenticationException \$e) {
            \$this->assertSame(\$token, \$exception->getToken());
        }
    }

    public function testAuthenticateDispatchesAuthenticationSuccessEvent()
    {
        \$token = new UsernamePasswordToken('foo', 'bar', 'key');

        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$provider->expects(\$this->once())->method('supports')->willReturn(true);
        \$provider->expects(\$this->once())->method('authenticate')->willReturn(\$token);

        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();
        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(new AuthenticationSuccessEvent(\$token)), AuthenticationEvents::AUTHENTICATION_SUCCESS);

        \$manager = new AuthenticationProviderManager([\$provider]);
        \$manager->setEventDispatcher(\$dispatcher);

        \$this->assertSame(\$token, \$manager->authenticate(\$token));
    }

    protected function getAuthenticationProvider(\$supports, \$token = null, \$exception = null)
    {
        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$provider->expects(\$this->once())
                 ->method('supports')
                 ->willReturn(\$supports)
        ;

        if (null !== \$token) {
            \$provider->expects(\$this->once())
                     ->method('authenticate')
                     ->willReturn(\$token)
            ;
        } elseif (null !== \$exception) {
            \$provider->expects(\$this->once())
                     ->method('authenticate')
                     ->willThrowException(\$this->getMockBuilder(\$exception)->setMethods(null)->getMock())
            ;
        }

        return \$provider;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/AuthenticationProviderManagerTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\AuthenticationEvents;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent;
use Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent;
use Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\ProviderNotFoundException;

class AuthenticationProviderManagerTest extends TestCase
{
    public function testAuthenticateWithoutProviders()
    {
        \$this->expectException('InvalidArgumentException');
        new AuthenticationProviderManager([]);
    }

    public function testAuthenticateWithProvidersWithIncorrectInterface()
    {
        \$this->expectException('InvalidArgumentException');
        (new AuthenticationProviderManager([
            new \\stdClass(),
        ]))->authenticate(\$this->getMockBuilder(TokenInterface::class)->getMock());
    }

    public function testAuthenticateWhenNoProviderSupportsToken()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(false),
        ]);

        try {
            \$manager->authenticate(\$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
            \$this->fail();
        } catch (ProviderNotFoundException \$e) {
            \$this->assertSame(\$token, \$e->getToken());
        }
    }

    public function testAuthenticateWhenProviderReturnsAccountStatusException()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, null, 'Symfony\\Component\\Security\\Core\\Exception\\AccountStatusException'),
        ]);

        try {
            \$manager->authenticate(\$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
            \$this->fail();
        } catch (AccountStatusException \$e) {
            \$this->assertSame(\$token, \$e->getToken());
        }
    }

    public function testAuthenticateWhenProviderReturnsAuthenticationException()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, null, 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException'),
        ]);

        try {
            \$manager->authenticate(\$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
            \$this->fail();
        } catch (AuthenticationException \$e) {
            \$this->assertSame(\$token, \$e->getToken());
        }
    }

    public function testAuthenticateWhenOneReturnsAuthenticationExceptionButNotAll()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, null, 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException'),
            \$this->getAuthenticationProvider(true, \$expected = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock()),
        ]);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertSame(\$expected, \$token);
    }

    public function testAuthenticateReturnsTokenOfTheFirstMatchingProvider()
    {
        \$second = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$second
            ->expects(\$this->never())
            ->method('supports')
        ;
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, \$expected = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock()),
            \$second,
        ]);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertSame(\$expected, \$token);
    }

    public function testEraseCredentialFlag()
    {
        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, \$token = new UsernamePasswordToken('foo', 'bar', 'key')),
        ]);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertEquals('', \$token->getCredentials());

        \$manager = new AuthenticationProviderManager([
            \$this->getAuthenticationProvider(true, \$token = new UsernamePasswordToken('foo', 'bar', 'key')),
        ], false);

        \$token = \$manager->authenticate(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());
        \$this->assertEquals('bar', \$token->getCredentials());
    }

    public function testAuthenticateDispatchesAuthenticationFailureEvent()
    {
        \$token = new UsernamePasswordToken('foo', 'bar', 'key');
        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$provider->expects(\$this->once())->method('supports')->willReturn(true);
        \$provider->expects(\$this->once())->method('authenticate')->willThrowException(\$exception = new AuthenticationException());

        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();
        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(new AuthenticationFailureEvent(\$token, \$exception)), AuthenticationEvents::AUTHENTICATION_FAILURE);

        \$manager = new AuthenticationProviderManager([\$provider]);
        \$manager->setEventDispatcher(\$dispatcher);

        try {
            \$manager->authenticate(\$token);
            \$this->fail('->authenticate() should rethrow exceptions');
        } catch (AuthenticationException \$e) {
            \$this->assertSame(\$token, \$exception->getToken());
        }
    }

    public function testAuthenticateDispatchesAuthenticationSuccessEvent()
    {
        \$token = new UsernamePasswordToken('foo', 'bar', 'key');

        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$provider->expects(\$this->once())->method('supports')->willReturn(true);
        \$provider->expects(\$this->once())->method('authenticate')->willReturn(\$token);

        \$dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();
        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->equalTo(new AuthenticationSuccessEvent(\$token)), AuthenticationEvents::AUTHENTICATION_SUCCESS);

        \$manager = new AuthenticationProviderManager([\$provider]);
        \$manager->setEventDispatcher(\$dispatcher);

        \$this->assertSame(\$token, \$manager->authenticate(\$token));
    }

    protected function getAuthenticationProvider(\$supports, \$token = null, \$exception = null)
    {
        \$provider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface')->getMock();
        \$provider->expects(\$this->once())
                 ->method('supports')
                 ->willReturn(\$supports)
        ;

        if (null !== \$token) {
            \$provider->expects(\$this->once())
                     ->method('authenticate')
                     ->willReturn(\$token)
            ;
        } elseif (null !== \$exception) {
            \$provider->expects(\$this->once())
                     ->method('authenticate')
                     ->willThrowException(\$this->getMockBuilder(\$exception)->setMethods(null)->getMock())
            ;
        }

        return \$provider;
    }
}
", "vendor/symfony/security-core/Tests/Authentication/AuthenticationProviderManagerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/AuthenticationProviderManagerTest.php");
    }
}
