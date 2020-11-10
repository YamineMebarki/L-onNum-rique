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

/* vendor/symfony/security-core/Tests/Authentication/Provider/RememberMeAuthenticationProviderTest.php */
class __TwigTemplate_aa1a4f51de24cc3d907ca37e34b3d660424a0749ca01eb1f925731c77e3f2484 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/RememberMeAuthenticationProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/RememberMeAuthenticationProviderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Exception\\DisabledException;

class RememberMeAuthenticationProviderTest extends TestCase
{
    public function testSupports()
    {
        \$provider = \$this->getProvider();

        \$this->assertTrue(\$provider->supports(\$this->getSupportedToken()));
        \$this->assertFalse(\$provider->supports(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock()));
    }

    public function testAuthenticateWhenTokenIsNotSupported()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException');
        \$this->expectExceptionMessage('The token is not supported by this authentication provider.');
        \$provider = \$this->getProvider();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$provider->authenticate(\$token);
    }

    public function testAuthenticateWhenSecretsDoNotMatch()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$provider = \$this->getProvider(null, 'secret1');
        \$token = \$this->getSupportedToken(null, 'secret2');

        \$provider->authenticate(\$token);
    }

    public function testAuthenticateWhenPreChecksFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        \$userChecker->expects(\$this->once())
            ->method('checkPreAuth')
            ->willThrowException(new DisabledException());

        \$provider = \$this->getProvider(\$userChecker);

        \$provider->authenticate(\$this->getSupportedToken());
    }

    public function testAuthenticate()
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user->expects(\$this->exactly(2))
             ->method('getRoles')
             ->willReturn(['ROLE_FOO']);

        \$provider = \$this->getProvider();

        \$token = \$this->getSupportedToken(\$user);
        \$authToken = \$provider->authenticate(\$token);

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', \$authToken);
        \$this->assertSame(\$user, \$authToken->getUser());
        \$this->assertEquals(['ROLE_FOO'], \$authToken->getRoleNames());
        \$this->assertEquals('', \$authToken->getCredentials());
    }

    protected function getSupportedToken(\$user = null, \$secret = 'test')
    {
        if (null === \$user) {
            \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
            \$user
                ->expects(\$this->any())
                ->method('getRoles')
                ->willReturn([]);
        }

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')->setMethods(['getProviderKey'])->setConstructorArgs([\$user, 'foo', \$secret])->getMock();
        \$token
            ->expects(\$this->once())
            ->method('getProviderKey')
            ->willReturn('foo');

        return \$token;
    }

    protected function getProvider(\$userChecker = null, \$key = 'test')
    {
        if (null === \$userChecker) {
            \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        }

        return new RememberMeAuthenticationProvider(\$userChecker, \$key, 'foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/Provider/RememberMeAuthenticationProviderTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Exception\\DisabledException;

class RememberMeAuthenticationProviderTest extends TestCase
{
    public function testSupports()
    {
        \$provider = \$this->getProvider();

        \$this->assertTrue(\$provider->supports(\$this->getSupportedToken()));
        \$this->assertFalse(\$provider->supports(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock()));
    }

    public function testAuthenticateWhenTokenIsNotSupported()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException');
        \$this->expectExceptionMessage('The token is not supported by this authentication provider.');
        \$provider = \$this->getProvider();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$provider->authenticate(\$token);
    }

    public function testAuthenticateWhenSecretsDoNotMatch()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$provider = \$this->getProvider(null, 'secret1');
        \$token = \$this->getSupportedToken(null, 'secret2');

        \$provider->authenticate(\$token);
    }

    public function testAuthenticateWhenPreChecksFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        \$userChecker->expects(\$this->once())
            ->method('checkPreAuth')
            ->willThrowException(new DisabledException());

        \$provider = \$this->getProvider(\$userChecker);

        \$provider->authenticate(\$this->getSupportedToken());
    }

    public function testAuthenticate()
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$user->expects(\$this->exactly(2))
             ->method('getRoles')
             ->willReturn(['ROLE_FOO']);

        \$provider = \$this->getProvider();

        \$token = \$this->getSupportedToken(\$user);
        \$authToken = \$provider->authenticate(\$token);

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken', \$authToken);
        \$this->assertSame(\$user, \$authToken->getUser());
        \$this->assertEquals(['ROLE_FOO'], \$authToken->getRoleNames());
        \$this->assertEquals('', \$authToken->getCredentials());
    }

    protected function getSupportedToken(\$user = null, \$secret = 'test')
    {
        if (null === \$user) {
            \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
            \$user
                ->expects(\$this->any())
                ->method('getRoles')
                ->willReturn([]);
        }

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')->setMethods(['getProviderKey'])->setConstructorArgs([\$user, 'foo', \$secret])->getMock();
        \$token
            ->expects(\$this->once())
            ->method('getProviderKey')
            ->willReturn('foo');

        return \$token;
    }

    protected function getProvider(\$userChecker = null, \$key = 'test')
    {
        if (null === \$userChecker) {
            \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        }

        return new RememberMeAuthenticationProvider(\$userChecker, \$key, 'foo');
    }
}
", "vendor/symfony/security-core/Tests/Authentication/Provider/RememberMeAuthenticationProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/Provider/RememberMeAuthenticationProviderTest.php");
    }
}
