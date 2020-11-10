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

/* vendor/symfony/security-core/Tests/Authentication/Provider/SimpleAuthenticationProviderTest.php */
class __TwigTemplate_e63aa66d8e46b90f11932c1f2649ee5d3da32a650ce32223f3f352d2fd58218f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/SimpleAuthenticationProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/SimpleAuthenticationProviderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Exception\\DisabledException;
use Symfony\\Component\\Security\\Core\\Exception\\LockedException;
use Symfony\\Component\\Security\\Core\\User\\UserChecker;

/**
 * @group legacy
 */
class SimpleAuthenticationProviderTest extends TestCase
{
    public function testAuthenticateWhenPreChecksFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user);

        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        \$userChecker->expects(\$this->once())
            ->method('checkPreAuth')
            ->willThrowException(new DisabledException());

        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        \$authenticator->expects(\$this->once())
            ->method('authenticateToken')
            ->willReturn(\$token);

        \$provider = \$this->getProvider(\$authenticator, null, \$userChecker);

        \$provider->authenticate(\$token);
    }

    public function testAuthenticateWhenPostChecksFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LockedException');
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user);

        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        \$userChecker->expects(\$this->once())
            ->method('checkPostAuth')
            ->willThrowException(new LockedException());

        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        \$authenticator->expects(\$this->once())
            ->method('authenticateToken')
            ->willReturn(\$token);

        \$provider = \$this->getProvider(\$authenticator, null, \$userChecker);

        \$provider->authenticate(\$token);
    }

    public function testAuthenticateSkipsUserChecksForNonUserInterfaceObjects()
    {
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn('string-user');
        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        \$authenticator->expects(\$this->once())
            ->method('authenticateToken')
            ->willReturn(\$token);

        \$this->assertSame(\$token, \$this->getProvider(\$authenticator, null, new UserChecker())->authenticate(\$token));
    }

    protected function getProvider(\$simpleAuthenticator = null, \$userProvider = null, \$userChecker = null, \$key = 'test')
    {
        if (null === \$userChecker) {
            \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        }
        if (null === \$simpleAuthenticator) {
            \$simpleAuthenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        }
        if (null === \$userProvider) {
            \$userProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        }

        return new SimpleAuthenticationProvider(\$simpleAuthenticator, \$userProvider, \$key, \$userChecker);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/Provider/SimpleAuthenticationProviderTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Exception\\DisabledException;
use Symfony\\Component\\Security\\Core\\Exception\\LockedException;
use Symfony\\Component\\Security\\Core\\User\\UserChecker;

/**
 * @group legacy
 */
class SimpleAuthenticationProviderTest extends TestCase
{
    public function testAuthenticateWhenPreChecksFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user);

        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        \$userChecker->expects(\$this->once())
            ->method('checkPreAuth')
            ->willThrowException(new DisabledException());

        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        \$authenticator->expects(\$this->once())
            ->method('authenticateToken')
            ->willReturn(\$token);

        \$provider = \$this->getProvider(\$authenticator, null, \$userChecker);

        \$provider->authenticate(\$token);
    }

    public function testAuthenticateWhenPostChecksFails()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LockedException');
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user);

        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        \$userChecker->expects(\$this->once())
            ->method('checkPostAuth')
            ->willThrowException(new LockedException());

        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        \$authenticator->expects(\$this->once())
            ->method('authenticateToken')
            ->willReturn(\$token);

        \$provider = \$this->getProvider(\$authenticator, null, \$userChecker);

        \$provider->authenticate(\$token);
    }

    public function testAuthenticateSkipsUserChecksForNonUserInterfaceObjects()
    {
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn('string-user');
        \$authenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        \$authenticator->expects(\$this->once())
            ->method('authenticateToken')
            ->willReturn(\$token);

        \$this->assertSame(\$token, \$this->getProvider(\$authenticator, null, new UserChecker())->authenticate(\$token));
    }

    protected function getProvider(\$simpleAuthenticator = null, \$userProvider = null, \$userChecker = null, \$key = 'test')
    {
        if (null === \$userChecker) {
            \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();
        }
        if (null === \$simpleAuthenticator) {
            \$simpleAuthenticator = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\SimpleAuthenticatorInterface')->getMock();
        }
        if (null === \$userProvider) {
            \$userProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        }

        return new SimpleAuthenticationProvider(\$simpleAuthenticator, \$userProvider, \$key, \$userChecker);
    }
}
", "vendor/symfony/security-core/Tests/Authentication/Provider/SimpleAuthenticationProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/Provider/SimpleAuthenticationProviderTest.php");
    }
}
