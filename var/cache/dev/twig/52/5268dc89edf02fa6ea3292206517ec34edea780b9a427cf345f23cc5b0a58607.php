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

/* vendor/symfony/security-core/Tests/User/UserTest.php */
class __TwigTemplate_50191df99ffe8d336e2623aa6a051ac2f618cff6ef00a93129d08442449f6dc1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/UserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/UserTest.php"));

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
use Symfony\\Component\\Security\\Core\\User\\EquatableInterface;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class UserTest extends TestCase
{
    public function testConstructorException()
    {
        \$this->expectException('InvalidArgumentException');
        new User('', 'superpass');
    }

    public function testGetRoles()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals([], \$user->getRoles());

        \$user = new User('fabien', 'superpass', ['ROLE_ADMIN']);
        \$this->assertEquals(['ROLE_ADMIN'], \$user->getRoles());
    }

    public function testGetPassword()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('superpass', \$user->getPassword());
    }

    public function testGetUsername()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('fabien', \$user->getUsername());
    }

    public function testGetSalt()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('', \$user->getSalt());
    }

    public function testIsAccountNonExpired()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isAccountNonExpired());

        \$user = new User('fabien', 'superpass', [], true, false);
        \$this->assertFalse(\$user->isAccountNonExpired());
    }

    public function testIsCredentialsNonExpired()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isCredentialsNonExpired());

        \$user = new User('fabien', 'superpass', [], true, true, false);
        \$this->assertFalse(\$user->isCredentialsNonExpired());
    }

    public function testIsAccountNonLocked()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isAccountNonLocked());

        \$user = new User('fabien', 'superpass', [], true, true, true, false);
        \$this->assertFalse(\$user->isAccountNonLocked());
    }

    public function testIsEnabled()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isEnabled());

        \$user = new User('fabien', 'superpass', [], false);
        \$this->assertFalse(\$user->isEnabled());
    }

    public function testEraseCredentials()
    {
        \$user = new User('fabien', 'superpass');
        \$user->eraseCredentials();
        \$this->assertEquals('superpass', \$user->getPassword());
    }

    public function testToString()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('fabien', (string) \$user);
    }

    /**
     * @dataProvider isEqualToData
     *
     * @param bool                             \$expectation
     * @param EquatableInterface|UserInterface \$a
     * @param EquatableInterface|UserInterface \$b
     */
    public function testIsEqualTo(\$expectation, \$a, \$b)
    {
        \$this->assertSame(\$expectation, \$a->isEqualTo(\$b));
        \$this->assertSame(\$expectation, \$b->isEqualTo(\$a));
    }

    public static function isEqualToData()
    {
        return [
            [true, new User('username', 'password'), new User('username', 'password')],
            [true, new User('username', 'password', ['ROLE']), new User('username', 'password')],
            [true, new User('username', 'password', ['ROLE']), new User('username', 'password', ['NO ROLE'])],
            [false, new User('diff', 'diff'), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false, false), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false, false, false), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false, false, false, false), new User('username', 'password')],
        ];
    }

    public function testIsEqualToWithDifferentUser()
    {
        \$user = new User('username', 'password');
        \$this->assertFalse(\$user->isEqualTo(\$this->getMockBuilder(UserInterface::class)->getMock()));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/User/UserTest.php";
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
use Symfony\\Component\\Security\\Core\\User\\EquatableInterface;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class UserTest extends TestCase
{
    public function testConstructorException()
    {
        \$this->expectException('InvalidArgumentException');
        new User('', 'superpass');
    }

    public function testGetRoles()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals([], \$user->getRoles());

        \$user = new User('fabien', 'superpass', ['ROLE_ADMIN']);
        \$this->assertEquals(['ROLE_ADMIN'], \$user->getRoles());
    }

    public function testGetPassword()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('superpass', \$user->getPassword());
    }

    public function testGetUsername()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('fabien', \$user->getUsername());
    }

    public function testGetSalt()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('', \$user->getSalt());
    }

    public function testIsAccountNonExpired()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isAccountNonExpired());

        \$user = new User('fabien', 'superpass', [], true, false);
        \$this->assertFalse(\$user->isAccountNonExpired());
    }

    public function testIsCredentialsNonExpired()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isCredentialsNonExpired());

        \$user = new User('fabien', 'superpass', [], true, true, false);
        \$this->assertFalse(\$user->isCredentialsNonExpired());
    }

    public function testIsAccountNonLocked()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isAccountNonLocked());

        \$user = new User('fabien', 'superpass', [], true, true, true, false);
        \$this->assertFalse(\$user->isAccountNonLocked());
    }

    public function testIsEnabled()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertTrue(\$user->isEnabled());

        \$user = new User('fabien', 'superpass', [], false);
        \$this->assertFalse(\$user->isEnabled());
    }

    public function testEraseCredentials()
    {
        \$user = new User('fabien', 'superpass');
        \$user->eraseCredentials();
        \$this->assertEquals('superpass', \$user->getPassword());
    }

    public function testToString()
    {
        \$user = new User('fabien', 'superpass');
        \$this->assertEquals('fabien', (string) \$user);
    }

    /**
     * @dataProvider isEqualToData
     *
     * @param bool                             \$expectation
     * @param EquatableInterface|UserInterface \$a
     * @param EquatableInterface|UserInterface \$b
     */
    public function testIsEqualTo(\$expectation, \$a, \$b)
    {
        \$this->assertSame(\$expectation, \$a->isEqualTo(\$b));
        \$this->assertSame(\$expectation, \$b->isEqualTo(\$a));
    }

    public static function isEqualToData()
    {
        return [
            [true, new User('username', 'password'), new User('username', 'password')],
            [true, new User('username', 'password', ['ROLE']), new User('username', 'password')],
            [true, new User('username', 'password', ['ROLE']), new User('username', 'password', ['NO ROLE'])],
            [false, new User('diff', 'diff'), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false, false), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false, false, false), new User('username', 'password')],
            [false, new User('diff', 'diff', [], false, false, false, false), new User('username', 'password')],
        ];
    }

    public function testIsEqualToWithDifferentUser()
    {
        \$user = new User('username', 'password');
        \$this->assertFalse(\$user->isEqualTo(\$this->getMockBuilder(UserInterface::class)->getMock()));
    }
}
", "vendor/symfony/security-core/Tests/User/UserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/User/UserTest.php");
    }
}
