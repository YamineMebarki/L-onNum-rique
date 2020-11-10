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

/* vendor/symfony/security-core/Tests/User/LdapUserProviderTest.php */
class __TwigTemplate_d5446c26896afcacac396a750e68eb6c582080aeb1feee78fafba20e783be37c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/LdapUserProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/User/LdapUserProviderTest.php"));

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
use Symfony\\Component\\Ldap\\Adapter\\CollectionInterface;
use Symfony\\Component\\Ldap\\Adapter\\QueryInterface;
use Symfony\\Component\\Ldap\\Entry;
use Symfony\\Component\\Ldap\\Exception\\ConnectionException;
use Symfony\\Component\\Ldap\\LdapInterface;
use Symfony\\Component\\Security\\Core\\User\\LdapUserProvider;

/**
 * @requires extension ldap
 */
class LdapUserProviderTest extends TestCase
{
    public function testLoadUserByUsernameFailsIfCantConnectToLdap()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('bind')
            ->willThrowException(new ConnectionException())
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$provider->loadUserByUsername('foo');
    }

    public function testLoadUserByUsernameFailsIfNoLdapEntries()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(0)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$provider->loadUserByUsername('foo');
    }

    public function testLoadUserByUsernameFailsIfMoreThanOneLdapEntry()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(2)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$provider->loadUserByUsername('foo');
    }

    public function testLoadUserByUsernameFailsIfMoreThanOneLdapPasswordsInEntry()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\InvalidArgumentException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                    'userpassword' => ['bar', 'baz'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})', 'userpassword');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameShouldNotFailIfEntryHasNoUidKeyAttribute()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', []))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameFailsIfEntryHasNoPasswordAttribute()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\InvalidArgumentException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})', 'userpassword');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameIsSuccessfulWithoutPasswordAttribute()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameIsSuccessfulWithoutPasswordAttributeAndWrongCase()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('Foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$this->assertSame('foo', \$provider->loadUserByUsername('Foo')->getUsername());
    }

    public function testLoadUserByUsernameIsSuccessfulWithPasswordAttribute()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                    'userpassword' => ['bar'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})', 'userpassword');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/User/LdapUserProviderTest.php";
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
use Symfony\\Component\\Ldap\\Adapter\\CollectionInterface;
use Symfony\\Component\\Ldap\\Adapter\\QueryInterface;
use Symfony\\Component\\Ldap\\Entry;
use Symfony\\Component\\Ldap\\Exception\\ConnectionException;
use Symfony\\Component\\Ldap\\LdapInterface;
use Symfony\\Component\\Security\\Core\\User\\LdapUserProvider;

/**
 * @requires extension ldap
 */
class LdapUserProviderTest extends TestCase
{
    public function testLoadUserByUsernameFailsIfCantConnectToLdap()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('bind')
            ->willThrowException(new ConnectionException())
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$provider->loadUserByUsername('foo');
    }

    public function testLoadUserByUsernameFailsIfNoLdapEntries()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(0)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$provider->loadUserByUsername('foo');
    }

    public function testLoadUserByUsernameFailsIfMoreThanOneLdapEntry()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\UsernameNotFoundException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(2)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$provider->loadUserByUsername('foo');
    }

    public function testLoadUserByUsernameFailsIfMoreThanOneLdapPasswordsInEntry()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\InvalidArgumentException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                    'userpassword' => ['bar', 'baz'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})', 'userpassword');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameShouldNotFailIfEntryHasNoUidKeyAttribute()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', []))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameFailsIfEntryHasNoPasswordAttribute()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\InvalidArgumentException');
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})', 'userpassword');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameIsSuccessfulWithoutPasswordAttribute()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }

    public function testLoadUserByUsernameIsSuccessfulWithoutPasswordAttributeAndWrongCase()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('Foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com');
        \$this->assertSame('foo', \$provider->loadUserByUsername('Foo')->getUsername());
    }

    public function testLoadUserByUsernameIsSuccessfulWithPasswordAttribute()
    {
        \$result = \$this->getMockBuilder(CollectionInterface::class)->getMock();
        \$query = \$this->getMockBuilder(QueryInterface::class)->getMock();
        \$query
            ->expects(\$this->once())
            ->method('execute')
            ->willReturn(\$result)
        ;
        \$ldap = \$this->getMockBuilder(LdapInterface::class)->getMock();
        \$result
            ->expects(\$this->once())
            ->method('offsetGet')
            ->with(0)
            ->willReturn(new Entry('foo', [
                    'sAMAccountName' => ['foo'],
                    'userpassword' => ['bar'],
                ]
            ))
        ;
        \$result
            ->expects(\$this->once())
            ->method('count')
            ->willReturn(1)
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('escape')
            ->willReturn('foo')
        ;
        \$ldap
            ->expects(\$this->once())
            ->method('query')
            ->willReturn(\$query)
        ;

        \$provider = new LdapUserProvider(\$ldap, 'ou=MyBusiness,dc=symfony,dc=com', null, null, [], 'sAMAccountName', '({uid_key}={username})', 'userpassword');
        \$this->assertInstanceOf(
            'Symfony\\Component\\Security\\Core\\User\\User',
            \$provider->loadUserByUsername('foo')
        );
    }
}
", "vendor/symfony/security-core/Tests/User/LdapUserProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/User/LdapUserProviderTest.php");
    }
}
