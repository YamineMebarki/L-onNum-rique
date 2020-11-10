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

/* vendor/symfony/security-core/Tests/SecurityTest.php */
class __TwigTemplate_36175656b57175a6aa4b9003c8833980ded45d3cac074ad6cb367e94de1c45d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/SecurityTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/SecurityTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Core\\User\\User;

class SecurityTest extends TestCase
{
    public function testGetToken()
    {
        \$token = new UsernamePasswordToken('foo', 'bar', 'provider');
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$container = \$this->createContainer('security.token_storage', \$tokenStorage);

        \$security = new Security(\$container);
        \$this->assertSame(\$token, \$security->getToken());
    }

    /**
     * @dataProvider getUserTests
     */
    public function testGetUser(\$userInToken, \$expectedUser)
    {
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$userInToken);
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$container = \$this->createContainer('security.token_storage', \$tokenStorage);

        \$security = new Security(\$container);
        \$this->assertSame(\$expectedUser, \$security->getUser());
    }

    public function getUserTests()
    {
        yield [null, null];

        yield ['string_username', null];

        //yield [new StringishUser(), null]; // 5.0 behavior

        \$user = new User('nice_user', 'foo');
        yield [\$user, \$user];
    }

    /**
     * @group legacy
     * @expectedDeprecation Accessing the user object \"Symfony\\Component\\Security\\Core\\Tests\\StringishUser\" that is not an instance of \"Symfony\\Component\\Security\\Core\\User\\UserInterface\" from \"Symfony\\Component\\Security\\Core\\Security::getUser()\" is deprecated since Symfony 4.2, use \"getToken()->getUser()\" instead.
     */
    public function testGetUserLegacy()
    {
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user = new StringishUser());
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$container = \$this->createContainer('security.token_storage', \$tokenStorage);

        \$security = new Security(\$container);
        \$this->assertSame(\$user, \$security->getUser());
    }

    public function testIsGranted()
    {
        \$authorizationChecker = \$this->getMockBuilder(AuthorizationCheckerInterface::class)->getMock();

        \$authorizationChecker->expects(\$this->once())
            ->method('isGranted')
            ->with('SOME_ATTRIBUTE', 'SOME_SUBJECT')
            ->willReturn(true);

        \$container = \$this->createContainer('security.authorization_checker', \$authorizationChecker);

        \$security = new Security(\$container);
        \$this->assertTrue(\$security->isGranted('SOME_ATTRIBUTE', 'SOME_SUBJECT'));
    }

    private function createContainer(\$serviceId, \$serviceObject)
    {
        \$container = \$this->getMockBuilder(ContainerInterface::class)->getMock();

        \$container->expects(\$this->atLeastOnce())
            ->method('get')
            ->with(\$serviceId)
            ->willReturn(\$serviceObject);

        return \$container;
    }
}

class StringishUser
{
    public function __toString()
    {
        return 'stringish_user';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/SecurityTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests;

use PHPUnit\\Framework\\TestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Core\\User\\User;

class SecurityTest extends TestCase
{
    public function testGetToken()
    {
        \$token = new UsernamePasswordToken('foo', 'bar', 'provider');
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$container = \$this->createContainer('security.token_storage', \$tokenStorage);

        \$security = new Security(\$container);
        \$this->assertSame(\$token, \$security->getToken());
    }

    /**
     * @dataProvider getUserTests
     */
    public function testGetUser(\$userInToken, \$expectedUser)
    {
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$userInToken);
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$container = \$this->createContainer('security.token_storage', \$tokenStorage);

        \$security = new Security(\$container);
        \$this->assertSame(\$expectedUser, \$security->getUser());
    }

    public function getUserTests()
    {
        yield [null, null];

        yield ['string_username', null];

        //yield [new StringishUser(), null]; // 5.0 behavior

        \$user = new User('nice_user', 'foo');
        yield [\$user, \$user];
    }

    /**
     * @group legacy
     * @expectedDeprecation Accessing the user object \"Symfony\\Component\\Security\\Core\\Tests\\StringishUser\" that is not an instance of \"Symfony\\Component\\Security\\Core\\User\\UserInterface\" from \"Symfony\\Component\\Security\\Core\\Security::getUser()\" is deprecated since Symfony 4.2, use \"getToken()->getUser()\" instead.
     */
    public function testGetUserLegacy()
    {
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())
            ->method('getUser')
            ->willReturn(\$user = new StringishUser());
        \$tokenStorage = \$this->getMockBuilder(TokenStorageInterface::class)->getMock();

        \$tokenStorage->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$container = \$this->createContainer('security.token_storage', \$tokenStorage);

        \$security = new Security(\$container);
        \$this->assertSame(\$user, \$security->getUser());
    }

    public function testIsGranted()
    {
        \$authorizationChecker = \$this->getMockBuilder(AuthorizationCheckerInterface::class)->getMock();

        \$authorizationChecker->expects(\$this->once())
            ->method('isGranted')
            ->with('SOME_ATTRIBUTE', 'SOME_SUBJECT')
            ->willReturn(true);

        \$container = \$this->createContainer('security.authorization_checker', \$authorizationChecker);

        \$security = new Security(\$container);
        \$this->assertTrue(\$security->isGranted('SOME_ATTRIBUTE', 'SOME_SUBJECT'));
    }

    private function createContainer(\$serviceId, \$serviceObject)
    {
        \$container = \$this->getMockBuilder(ContainerInterface::class)->getMock();

        \$container->expects(\$this->atLeastOnce())
            ->method('get')
            ->with(\$serviceId)
            ->willReturn(\$serviceObject);

        return \$container;
    }
}

class StringishUser
{
    public function __toString()
    {
        return 'stringish_user';
    }
}
", "vendor/symfony/security-core/Tests/SecurityTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/SecurityTest.php");
    }
}
