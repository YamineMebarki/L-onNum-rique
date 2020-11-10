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

/* vendor/symfony/security-core/Tests/User/UserCheckerTest.php */
class __TwigTemplate_881aeb406a07173fefe7aafd74d7c24e158a25f199388bbfbb63559139f35454 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/UserCheckerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/UserCheckerTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\User;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserChecker;

class UserCheckerTest extends TestCase
{
    public function testCheckPostAuthNotAdvancedUserInterface()
    {
        \$checker = new UserChecker();

        \$this->assertNull(\$checker->checkPostAuth(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock()));
    }

    public function testCheckPostAuthPass()
    {
        \$checker = new UserChecker();
        \$this->assertNull(\$checker->checkPostAuth(new User('John', 'password')));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPostAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPostAuthPassAdvancedUser()
    {
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isCredentialsNonExpired')->willReturn(true);

        \$this->assertNull(\$checker->checkPostAuth(\$account));
    }

    public function testCheckPostAuthCredentialsExpired()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\CredentialsExpiredException');
        \$checker = new UserChecker();
        \$checker->checkPostAuth(new User('John', 'password', [], true, true, false, true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPostAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPostAuthCredentialsExpiredAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\CredentialsExpiredException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isCredentialsNonExpired')->willReturn(false);

        \$checker->checkPostAuth(\$account);
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthPassAdvancedUser()
    {
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(true);
        \$account->expects(\$this->once())->method('isEnabled')->willReturn(true);
        \$account->expects(\$this->once())->method('isAccountNonExpired')->willReturn(true);

        \$this->assertNull(\$checker->checkPreAuth(\$account));
    }

    public function testCheckPreAuthAccountLocked()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LockedException');
        \$checker = new UserChecker();
        \$checker->checkPreAuth(new User('John', 'password', [], true, true, false, false));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthAccountLockedAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LockedException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(false);

        \$checker->checkPreAuth(\$account);
    }

    public function testCheckPreAuthDisabled()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$checker = new UserChecker();
        \$checker->checkPreAuth(new User('John', 'password', [], false, true, false, true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthDisabledAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(true);
        \$account->expects(\$this->once())->method('isEnabled')->willReturn(false);

        \$checker->checkPreAuth(\$account);
    }

    public function testCheckPreAuthAccountExpired()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AccountExpiredException');
        \$checker = new UserChecker();
        \$checker->checkPreAuth(new User('John', 'password', [], true, false, true, true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthAccountExpiredAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AccountExpiredException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(true);
        \$account->expects(\$this->once())->method('isEnabled')->willReturn(true);
        \$account->expects(\$this->once())->method('isAccountNonExpired')->willReturn(false);

        \$checker->checkPreAuth(\$account);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/User/UserCheckerTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\User;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserChecker;

class UserCheckerTest extends TestCase
{
    public function testCheckPostAuthNotAdvancedUserInterface()
    {
        \$checker = new UserChecker();

        \$this->assertNull(\$checker->checkPostAuth(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock()));
    }

    public function testCheckPostAuthPass()
    {
        \$checker = new UserChecker();
        \$this->assertNull(\$checker->checkPostAuth(new User('John', 'password')));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPostAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPostAuthPassAdvancedUser()
    {
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isCredentialsNonExpired')->willReturn(true);

        \$this->assertNull(\$checker->checkPostAuth(\$account));
    }

    public function testCheckPostAuthCredentialsExpired()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\CredentialsExpiredException');
        \$checker = new UserChecker();
        \$checker->checkPostAuth(new User('John', 'password', [], true, true, false, true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPostAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPostAuthCredentialsExpiredAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\CredentialsExpiredException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isCredentialsNonExpired')->willReturn(false);

        \$checker->checkPostAuth(\$account);
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthPassAdvancedUser()
    {
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(true);
        \$account->expects(\$this->once())->method('isEnabled')->willReturn(true);
        \$account->expects(\$this->once())->method('isAccountNonExpired')->willReturn(true);

        \$this->assertNull(\$checker->checkPreAuth(\$account));
    }

    public function testCheckPreAuthAccountLocked()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LockedException');
        \$checker = new UserChecker();
        \$checker->checkPreAuth(new User('John', 'password', [], true, true, false, false));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthAccountLockedAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\LockedException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(false);

        \$checker->checkPreAuth(\$account);
    }

    public function testCheckPreAuthDisabled()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$checker = new UserChecker();
        \$checker->checkPreAuth(new User('John', 'password', [], false, true, false, true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthDisabledAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\DisabledException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(true);
        \$account->expects(\$this->once())->method('isEnabled')->willReturn(false);

        \$checker->checkPreAuth(\$account);
    }

    public function testCheckPreAuthAccountExpired()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AccountExpiredException');
        \$checker = new UserChecker();
        \$checker->checkPreAuth(new User('John', 'password', [], true, false, true, true));
    }

    /**
     * @group legacy
     * @expectedDeprecation Calling \"Symfony\\Component\\Security\\Core\\User\\UserChecker::checkPreAuth()\" with an AdvancedUserInterface is deprecated since Symfony 4.1. Create a custom user checker if you wish to keep this functionality.
     */
    public function testCheckPreAuthAccountExpiredAdvancedUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AccountExpiredException');
        \$checker = new UserChecker();

        \$account = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface')->getMock();
        \$account->expects(\$this->once())->method('isAccountNonLocked')->willReturn(true);
        \$account->expects(\$this->once())->method('isEnabled')->willReturn(true);
        \$account->expects(\$this->once())->method('isAccountNonExpired')->willReturn(false);

        \$checker->checkPreAuth(\$account);
    }
}
", "vendor/symfony/security-core/Tests/User/UserCheckerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/User/UserCheckerTest.php");
    }
}
