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

/* vendor/symfony/security-core/Tests/Authentication/Provider/LdapBindAuthenticationProviderTest.php */
class __TwigTemplate_212dc123946894515c5b7ff32ad8b0b60cc8c0cf59b38b23198edbfb1a6ded9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/LdapBindAuthenticationProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/Provider/LdapBindAuthenticationProviderTest.php"));

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
use Symfony\\Component\\Ldap\\Adapter\\CollectionInterface;
use Symfony\\Component\\Ldap\\Adapter\\QueryInterface;
use Symfony\\Component\\Ldap\\Entry;
use Symfony\\Component\\Ldap\\Exception\\ConnectionException;
use Symfony\\Component\\Ldap\\LdapInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\LdapBindAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * @requires extension ldap
 */
class LdapBindAuthenticationProviderTest extends TestCase
{
    public function testEmptyPasswordShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented password must not be empty.');
        \$userProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', '', 'key'));
    }

    public function testNullPasswordShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented password must not be empty.');
        \$userProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        \$ldap = \$this->getMockBuilder('Symfony\\Component\\Ldap\\LdapInterface')->getMock();
        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', null, 'key'));
    }

    public function testBindFailureShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented password is invalid.');
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('bind')
            ->willThrowException(new ConnectionException())
        ;
        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', 'bar', 'key'));
    }

    public function testRetrieveUser()
    {
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();
        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with('foo')
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();

        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, 'foo', new UsernamePasswordToken('foo', 'bar', 'key'));
    }

    public function testQueryForDn()
    {
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();

        \$collection = new \\ArrayIterator([new Entry('')]);

        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$collection)
        ;

        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->with('foo', '')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->with('{username}', 'foobar')
            ->willReturn(\$query)
        ;
        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$provider->setQueryString('{username}bar');
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', 'bar', 'key'));
    }

    public function testEmptyQueryResultShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented username is invalid.');
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();

        \$collection = \$this->getMockBuilder(CollectionInterface::class)->getMock();

        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$collection)
        ;

        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;
        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$provider->setQueryString('{username}bar');
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', 'bar', 'key'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/Provider/LdapBindAuthenticationProviderTest.php";
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
use Symfony\\Component\\Ldap\\Adapter\\CollectionInterface;
use Symfony\\Component\\Ldap\\Adapter\\QueryInterface;
use Symfony\\Component\\Ldap\\Entry;
use Symfony\\Component\\Ldap\\Exception\\ConnectionException;
use Symfony\\Component\\Ldap\\LdapInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\LdapBindAuthenticationProvider;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\UsernamePasswordToken;
use Symfony\\Component\\Security\\Core\\User\\User;
use Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

/**
 * @requires extension ldap
 */
class LdapBindAuthenticationProviderTest extends TestCase
{
    public function testEmptyPasswordShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented password must not be empty.');
        \$userProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', '', 'key'));
    }

    public function testNullPasswordShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented password must not be empty.');
        \$userProvider = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserProviderInterface')->getMock();
        \$ldap = \$this->getMockBuilder('Symfony\\Component\\Ldap\\LdapInterface')->getMock();
        \$userChecker = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface')->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', null, 'key'));
    }

    public function testBindFailureShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented password is invalid.');
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('bind')
            ->willThrowException(new ConnectionException())
        ;
        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', 'bar', 'key'));
    }

    public function testRetrieveUser()
    {
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();
        \$userProvider
            ->expects(\$this->once())
            ->method('loadUserByUsername')
            ->with('foo')
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();

        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$reflection = new \\ReflectionMethod(\$provider, 'retrieveUser');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, 'foo', new UsernamePasswordToken('foo', 'bar', 'key'));
    }

    public function testQueryForDn()
    {
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();

        \$collection = new \\ArrayIterator([new Entry('')]);

        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$collection)
        ;

        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->with('foo', '')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->with('{username}', 'foobar')
            ->willReturn(\$query)
        ;
        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$provider->setQueryString('{username}bar');
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', 'bar', 'key'));
    }

    public function testEmptyQueryResultShouldThrowAnException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$this->expectExceptionMessage('The presented username is invalid.');
        \$userProvider = \$this->getMockBuilder(UserProviderInterface::class)->getMock();

        \$collection = \$this->getMockBuilder(CollectionInterface::class)->getMock();

        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$collection)
        ;

        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;
        \$userChecker = \$this->getMockBuilder(UserCheckerInterface::class)->getMock();

        \$provider = new LdapBindAuthenticationProvider(\$userProvider, \$userChecker, 'key', \$ldap);
        \$provider->setQueryString('{username}bar');
        \$reflection = new \\ReflectionMethod(\$provider, 'checkAuthentication');
        \$reflection->setAccessible(true);

        \$reflection->invoke(\$provider, new User('foo', null), new UsernamePasswordToken('foo', 'bar', 'key'));
    }
}
", "vendor/symfony/security-core/Tests/Authentication/Provider/LdapBindAuthenticationProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/Provider/LdapBindAuthenticationProviderTest.php");
    }
}
