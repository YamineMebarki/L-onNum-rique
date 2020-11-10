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

/* vendor/symfony/security-core/Tests/User/ChainUserProviderTest.php */
class __TwigTemplate_6fe6a4a059ae18a1ff3d324a48a7b3a00eee78f1e48fe903008c7e3e391c3563 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/ChainUserProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/ChainUserProviderTest.php"));

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
use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\ChainUserProvider;

class ChainUserProviderTest extends TestCase
{
    public function testLoadUserByUsername()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertSame(\$account, \$provider->loadUserByUsername('foo'));
    }

    public function testLoadUserByUsernameThrowsUsernameNotFoundException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$provider->loadUserByUsername('foo');
    }

    public function testRefreshUser()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertSame(\$account, \$provider->refreshUser(\$this->getAccount()));
    }

    public function testRefreshUserAgain()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertSame(\$account, \$provider->refreshUser(\$this->getAccount()));
    }

    public function testRefreshUserThrowsUnsupportedUserException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException');
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$provider->refreshUser(\$this->getAccount());
    }

    public function testSupportsClass()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(false)
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(true)
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertTrue(\$provider->supportsClass('foo'));
    }

    public function testSupportsClassWhenNotSupported()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(false)
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(false)
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertFalse(\$provider->supportsClass('foo'));
    }

    public function testAcceptsTraversable()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider(new \\ArrayObject([\$provider1, \$provider2]));
        \$this->assertSame(\$account, \$provider->refreshUser(\$this->getAccount()));
    }

    protected function getAccount()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
    }

    protected function getProvider()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/User/ChainUserProviderTest.php";
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
use Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException;
use Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException;
use Symfony\\Component\\Security\\Core\\User\\ChainUserProvider;

class ChainUserProviderTest extends TestCase
{
    public function testLoadUserByUsername()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertSame(\$account, \$provider->loadUserByUsername('foo'));
    }

    public function testLoadUserByUsernameThrowsUsernameNotFoundException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with(\$this->equalTo('foo'))
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$provider->loadUserByUsername('foo');
    }

    public function testRefreshUser()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertSame(\$account, \$provider->refreshUser(\$this->getAccount()));
    }

    public function testRefreshUserAgain()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UsernameNotFoundException('not found'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertSame(\$account, \$provider->refreshUser(\$this->getAccount()));
    }

    public function testRefreshUserThrowsUnsupportedUserException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UnsupportedUserException');
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$provider->refreshUser(\$this->getAccount());
    }

    public function testSupportsClass()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(false)
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(true)
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertTrue(\$provider->supportsClass('foo'));
    }

    public function testSupportsClassWhenNotSupported()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(false)
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('supportsClass')
            ->with(\$this->equalTo('foo'))
            ->willReturn(false)
        ;

        \$provider = new ChainUserProvider([\$provider1, \$provider2]);
        \$this->assertFalse(\$provider->supportsClass('foo'));
    }

    public function testAcceptsTraversable()
    {
        \$provider1 = \$this->getProvider();
        \$provider1
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willThrowException(new UnsupportedUserException('unsupported'))
        ;

        \$provider2 = \$this->getProvider();
        \$provider2
            ->expects(\$this->once())
            ->method('refreshUser')
            ->willReturn(\$account = \$this->getAccount())
        ;

        \$provider = new ChainUserProvider(new \\ArrayObject([\$provider1, \$provider2]));
        \$this->assertSame(\$account, \$provider->refreshUser(\$this->getAccount()));
    }

    protected function getAccount()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
    }

    protected function getProvider()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
    }
}
", "vendor/symfony/security-core/Tests/User/ChainUserProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/User/ChainUserProviderTest.php");
    }
}
