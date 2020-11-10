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

/* vendor/symfony/security-http/Tests/Logout/LogoutUrlGeneratorTest.php */
class __TwigTemplate_3538d8b3ac5bc8e4214025d342bf929db23f4361e1e612cb067bf614197d5ea7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/LogoutUrlGeneratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/LogoutUrlGeneratorTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Logout;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class LogoutUrlGeneratorTest extends TestCase
{
    /** @var TokenStorage */
    private \$tokenStorage;
    /** @var LogoutUrlGenerator */
    private \$generator;

    protected function setUp(): void
    {
        \$requestStack = \$this->getMockBuilder(RequestStack::class)->getMock();
        \$request = \$this->getMockBuilder(Request::class)->getMock();
        \$requestStack->method('getCurrentRequest')->willReturn(\$request);

        \$this->tokenStorage = new TokenStorage();
        \$this->generator = new LogoutUrlGenerator(\$requestStack, null, \$this->tokenStorage);
    }

    public function testGetLogoutPath()
    {
        \$this->generator->registerListener('secured_area', '/logout', null, null);

        \$this->assertSame('/logout', \$this->generator->getLogoutPath('secured_area'));
    }

    public function testGetLogoutPathWithoutLogoutListenerRegisteredForKeyThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('No LogoutListener found for firewall key \"unregistered_key\".');
        \$this->generator->registerListener('secured_area', '/logout', null, null, null);

        \$this->generator->getLogoutPath('unregistered_key');
    }

    public function testGuessFromToken()
    {
        \$this->tokenStorage->setToken(new UsernamePasswordToken('user', 'password', 'secured_area'));
        \$this->generator->registerListener('secured_area', '/logout', null, null);

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testGuessFromAnonymousTokenThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Unable to generate a logout url for an anonymous token.');
        \$this->tokenStorage->setToken(new AnonymousToken('default', 'anon.'));

        \$this->generator->getLogoutPath();
    }

    public function testGuessFromCurrentFirewallKey()
    {
        \$this->generator->registerListener('secured_area', '/logout', null, null);
        \$this->generator->setCurrentFirewall('secured_area');

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testGuessFromCurrentFirewallContext()
    {
        \$this->generator->registerListener('secured_area', '/logout', null, null, null, 'secured');
        \$this->generator->setCurrentFirewall('admin', 'secured');

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testGuessFromTokenWithoutProviderKeyFallbacksToCurrentFirewall()
    {
        \$this->tokenStorage->setToken(new UsernamePasswordToken('username', 'password', 'provider'));
        \$this->generator->registerListener('secured_area', '/logout', null, null);
        \$this->generator->setCurrentFirewall('secured_area');

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testUnableToGuessThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Unable to find the current firewall LogoutListener, please provide the provider key manually');
        \$this->generator->registerListener('secured_area', '/logout', null, null);

        \$this->generator->getLogoutPath();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Logout/LogoutUrlGeneratorTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Logout;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class LogoutUrlGeneratorTest extends TestCase
{
    /** @var TokenStorage */
    private \$tokenStorage;
    /** @var LogoutUrlGenerator */
    private \$generator;

    protected function setUp(): void
    {
        \$requestStack = \$this->getMockBuilder(RequestStack::class)->getMock();
        \$request = \$this->getMockBuilder(Request::class)->getMock();
        \$requestStack->method('getCurrentRequest')->willReturn(\$request);

        \$this->tokenStorage = new TokenStorage();
        \$this->generator = new LogoutUrlGenerator(\$requestStack, null, \$this->tokenStorage);
    }

    public function testGetLogoutPath()
    {
        \$this->generator->registerListener('secured_area', '/logout', null, null);

        \$this->assertSame('/logout', \$this->generator->getLogoutPath('secured_area'));
    }

    public function testGetLogoutPathWithoutLogoutListenerRegisteredForKeyThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('No LogoutListener found for firewall key \"unregistered_key\".');
        \$this->generator->registerListener('secured_area', '/logout', null, null, null);

        \$this->generator->getLogoutPath('unregistered_key');
    }

    public function testGuessFromToken()
    {
        \$this->tokenStorage->setToken(new UsernamePasswordToken('user', 'password', 'secured_area'));
        \$this->generator->registerListener('secured_area', '/logout', null, null);

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testGuessFromAnonymousTokenThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Unable to generate a logout url for an anonymous token.');
        \$this->tokenStorage->setToken(new AnonymousToken('default', 'anon.'));

        \$this->generator->getLogoutPath();
    }

    public function testGuessFromCurrentFirewallKey()
    {
        \$this->generator->registerListener('secured_area', '/logout', null, null);
        \$this->generator->setCurrentFirewall('secured_area');

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testGuessFromCurrentFirewallContext()
    {
        \$this->generator->registerListener('secured_area', '/logout', null, null, null, 'secured');
        \$this->generator->setCurrentFirewall('admin', 'secured');

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testGuessFromTokenWithoutProviderKeyFallbacksToCurrentFirewall()
    {
        \$this->tokenStorage->setToken(new UsernamePasswordToken('username', 'password', 'provider'));
        \$this->generator->registerListener('secured_area', '/logout', null, null);
        \$this->generator->setCurrentFirewall('secured_area');

        \$this->assertSame('/logout', \$this->generator->getLogoutPath());
    }

    public function testUnableToGuessThrowsException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Unable to find the current firewall LogoutListener, please provide the provider key manually');
        \$this->generator->registerListener('secured_area', '/logout', null, null);

        \$this->generator->getLogoutPath();
    }
}
", "vendor/symfony/security-http/Tests/Logout/LogoutUrlGeneratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Logout/LogoutUrlGeneratorTest.php");
    }
}
