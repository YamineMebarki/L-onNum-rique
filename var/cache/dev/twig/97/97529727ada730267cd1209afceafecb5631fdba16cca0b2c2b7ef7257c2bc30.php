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

/* vendor/symfony/security-core/Tests/Authorization/AuthorizationCheckerTest.php */
class __TwigTemplate_d909b9ed18d4a86dd2f07e28da34c1b33cb3db299c0a8a2b90137e2070020662 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/AuthorizationCheckerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/AuthorizationCheckerTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker;

class AuthorizationCheckerTest extends TestCase
{
    private \$authenticationManager;
    private \$accessDecisionManager;
    private \$authorizationChecker;
    private \$tokenStorage;

    protected function setUp(): void
    {
        \$this->authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$this->accessDecisionManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock();
        \$this->tokenStorage = new TokenStorage();

        \$this->authorizationChecker = new AuthorizationChecker(
            \$this->tokenStorage,
            \$this->authenticationManager,
            \$this->accessDecisionManager
        );
    }

    public function testVoteAuthenticatesTokenIfNecessary()
    {
        \$token = new UsernamePasswordToken('username', 'password', 'provider');
        \$this->tokenStorage->setToken(\$token);

        \$newToken = new UsernamePasswordToken('username', 'password', 'provider');

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$token))
            ->willReturn(\$newToken);

        // default with() isn't a strict check
        \$tokenComparison = function (\$value) use (\$newToken) {
            // make sure that the new token is used in \"decide()\" and not the old one
            return \$value === \$newToken;
        };

        \$this->accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->with(\$this->callback(\$tokenComparison))
            ->willReturn(true);

        // first run the token has not been re-authenticated yet, after isGranted is called, it should be equal
        \$this->assertNotSame(\$newToken, \$this->tokenStorage->getToken());
        \$this->assertTrue(\$this->authorizationChecker->isGranted('foo'));
        \$this->assertSame(\$newToken, \$this->tokenStorage->getToken());
    }

    public function testVoteWithoutAuthenticationToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException');
        \$this->authorizationChecker->isGranted('ROLE_FOO');
    }

    /**
     * @dataProvider isGrantedProvider
     */
    public function testIsGranted(\$decide)
    {
        \$token = new UsernamePasswordToken('username', 'password', 'provider', ['ROLE_USER']);

        \$this->accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->willReturn(\$decide);
        \$this->tokenStorage->setToken(\$token);
        \$this->assertSame(\$decide, \$this->authorizationChecker->isGranted('ROLE_FOO'));
    }

    public function isGrantedProvider()
    {
        return [[true], [false]];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/AuthorizationCheckerTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationChecker;

class AuthorizationCheckerTest extends TestCase
{
    private \$authenticationManager;
    private \$accessDecisionManager;
    private \$authorizationChecker;
    private \$tokenStorage;

    protected function setUp(): void
    {
        \$this->authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$this->accessDecisionManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock();
        \$this->tokenStorage = new TokenStorage();

        \$this->authorizationChecker = new AuthorizationChecker(
            \$this->tokenStorage,
            \$this->authenticationManager,
            \$this->accessDecisionManager
        );
    }

    public function testVoteAuthenticatesTokenIfNecessary()
    {
        \$token = new UsernamePasswordToken('username', 'password', 'provider');
        \$this->tokenStorage->setToken(\$token);

        \$newToken = new UsernamePasswordToken('username', 'password', 'provider');

        \$this->authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$token))
            ->willReturn(\$newToken);

        // default with() isn't a strict check
        \$tokenComparison = function (\$value) use (\$newToken) {
            // make sure that the new token is used in \"decide()\" and not the old one
            return \$value === \$newToken;
        };

        \$this->accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->with(\$this->callback(\$tokenComparison))
            ->willReturn(true);

        // first run the token has not been re-authenticated yet, after isGranted is called, it should be equal
        \$this->assertNotSame(\$newToken, \$this->tokenStorage->getToken());
        \$this->assertTrue(\$this->authorizationChecker->isGranted('foo'));
        \$this->assertSame(\$newToken, \$this->tokenStorage->getToken());
    }

    public function testVoteWithoutAuthenticationToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException');
        \$this->authorizationChecker->isGranted('ROLE_FOO');
    }

    /**
     * @dataProvider isGrantedProvider
     */
    public function testIsGranted(\$decide)
    {
        \$token = new UsernamePasswordToken('username', 'password', 'provider', ['ROLE_USER']);

        \$this->accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->willReturn(\$decide);
        \$this->tokenStorage->setToken(\$token);
        \$this->assertSame(\$decide, \$this->authorizationChecker->isGranted('ROLE_FOO'));
    }

    public function isGrantedProvider()
    {
        return [[true], [false]];
    }
}
", "vendor/symfony/security-core/Tests/Authorization/AuthorizationCheckerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/AuthorizationCheckerTest.php");
    }
}
