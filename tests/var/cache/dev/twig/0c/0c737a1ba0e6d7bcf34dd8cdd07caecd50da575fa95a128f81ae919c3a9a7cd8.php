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

/* vendor/symfony/security-core/Tests/User/InMemoryUserProviderTest.php */
class __TwigTemplate_44f1eff4b043db09a2f35285f8b7a1ec74be9b04d03b86517501af496abbdfa4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/InMemoryUserProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/InMemoryUserProviderTest.php"));

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
use Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider;
use Symfony\\Component\\Security\\Core\\User\\User;

class InMemoryUserProviderTest extends TestCase
{
    public function testConstructor()
    {
        \$provider = \$this->createProvider();

        \$user = \$provider->loadUserByUsername('fabien');
        \$this->assertEquals('foo', \$user->getPassword());
        \$this->assertEquals(['ROLE_USER'], \$user->getRoles());
        \$this->assertFalse(\$user->isEnabled());
    }

    public function testRefresh()
    {
        \$user = new User('fabien', 'bar');

        \$provider = \$this->createProvider();

        \$refreshedUser = \$provider->refreshUser(\$user);
        \$this->assertEquals('foo', \$refreshedUser->getPassword());
        \$this->assertEquals(['ROLE_USER'], \$refreshedUser->getRoles());
        \$this->assertFalse(\$refreshedUser->isEnabled());
        \$this->assertFalse(\$refreshedUser->isCredentialsNonExpired());
    }

    /**
     * @return InMemoryUserProvider
     */
    protected function createProvider()
    {
        return new InMemoryUserProvider([
            'fabien' => [
                'password' => 'foo',
                'enabled' => false,
                'roles' => ['ROLE_USER'],
            ],
        ]);
    }

    public function testCreateUser()
    {
        \$provider = new InMemoryUserProvider();
        \$provider->createUser(new User('fabien', 'foo'));

        \$user = \$provider->loadUserByUsername('fabien');
        \$this->assertEquals('foo', \$user->getPassword());
    }

    public function testCreateUserAlreadyExist()
    {
        \$this->expectException('LogicException');
        \$provider = new InMemoryUserProvider();
        \$provider->createUser(new User('fabien', 'foo'));
        \$provider->createUser(new User('fabien', 'foo'));
    }

    public function testLoadUserByUsernameDoesNotExist()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$provider = new InMemoryUserProvider();
        \$provider->loadUserByUsername('fabien');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/User/InMemoryUserProviderTest.php";
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
use Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider;
use Symfony\\Component\\Security\\Core\\User\\User;

class InMemoryUserProviderTest extends TestCase
{
    public function testConstructor()
    {
        \$provider = \$this->createProvider();

        \$user = \$provider->loadUserByUsername('fabien');
        \$this->assertEquals('foo', \$user->getPassword());
        \$this->assertEquals(['ROLE_USER'], \$user->getRoles());
        \$this->assertFalse(\$user->isEnabled());
    }

    public function testRefresh()
    {
        \$user = new User('fabien', 'bar');

        \$provider = \$this->createProvider();

        \$refreshedUser = \$provider->refreshUser(\$user);
        \$this->assertEquals('foo', \$refreshedUser->getPassword());
        \$this->assertEquals(['ROLE_USER'], \$refreshedUser->getRoles());
        \$this->assertFalse(\$refreshedUser->isEnabled());
        \$this->assertFalse(\$refreshedUser->isCredentialsNonExpired());
    }

    /**
     * @return InMemoryUserProvider
     */
    protected function createProvider()
    {
        return new InMemoryUserProvider([
            'fabien' => [
                'password' => 'foo',
                'enabled' => false,
                'roles' => ['ROLE_USER'],
            ],
        ]);
    }

    public function testCreateUser()
    {
        \$provider = new InMemoryUserProvider();
        \$provider->createUser(new User('fabien', 'foo'));

        \$user = \$provider->loadUserByUsername('fabien');
        \$this->assertEquals('foo', \$user->getPassword());
    }

    public function testCreateUserAlreadyExist()
    {
        \$this->expectException('LogicException');
        \$provider = new InMemoryUserProvider();
        \$provider->createUser(new User('fabien', 'foo'));
        \$provider->createUser(new User('fabien', 'foo'));
    }

    public function testLoadUserByUsernameDoesNotExist()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$provider = new InMemoryUserProvider();
        \$provider->loadUserByUsername('fabien');
    }
}
", "vendor/symfony/security-core/Tests/User/InMemoryUserProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/User/InMemoryUserProviderTest.php");
    }
}
