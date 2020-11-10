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

/* vendor/symfony/security-http/Tests/Firewall/X509AuthenticationListenerTest.php */
class __TwigTemplate_5da931b978d5f6d3e4034bac65b346b4d62b2a97a2aa400aa03caab853b0ab4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/X509AuthenticationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/X509AuthenticationListenerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener;

class X509AuthenticationListenerTest extends TestCase
{
    /**
     * @dataProvider dataProviderGetPreAuthenticatedData
     */
    public function testGetPreAuthenticatedData(\$user, \$credentials)
    {
        \$serverVars = [];
        if ('' !== \$user) {
            \$serverVars['SSL_CLIENT_S_DN_Email'] = \$user;
        }
        if ('' !== \$credentials) {
            \$serverVars['SSL_CLIENT_S_DN'] = \$credentials;
        }

        \$request = new Request([], [], [], [], [], \$serverVars);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, [\$user, \$credentials]);
    }

    public static function dataProviderGetPreAuthenticatedData()
    {
        return [
            'validValues' => ['TheUser', 'TheCredentials'],
            'noCredentials' => ['TheUser', ''],
        ];
    }

    /**
     * @dataProvider dataProviderGetPreAuthenticatedDataNoUser
     */
    public function testGetPreAuthenticatedDataNoUser(\$emailAddress, \$credentials)
    {
        \$request = new Request([], [], [], [], [], ['SSL_CLIENT_S_DN' => \$credentials]);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, [\$emailAddress, \$credentials]);
    }

    public static function dataProviderGetPreAuthenticatedDataNoUser()
    {
        yield ['cert@example.com', 'CN=Sample certificate DN/emailAddress=cert@example.com'];
        yield ['cert+something@example.com', 'CN=Sample certificate DN/emailAddress=cert+something@example.com'];
        yield ['cert@example.com', 'CN=Sample certificate DN,emailAddress=cert@example.com'];
        yield ['cert+something@example.com', 'CN=Sample certificate DN,emailAddress=cert+something@example.com'];
        yield ['cert+something@example.com', 'emailAddress=cert+something@example.com,CN=Sample certificate DN'];
        yield ['cert+something@example.com', 'emailAddress=cert+something@example.com'];
        yield ['firstname.lastname@mycompany.co.uk', 'emailAddress=firstname.lastname@mycompany.co.uk,CN=Firstname.Lastname,OU=london,OU=company design and engineering,OU=Issuer London,OU=Roaming,OU=Interactive,OU=Users,OU=Standard,OU=Business,DC=england,DC=core,DC=company,DC=co,DC=uk'];
    }

    public function testGetPreAuthenticatedDataNoData()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$request = new Request([], [], [], [], [], []);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
    }

    public function testGetPreAuthenticatedDataWithDifferentKeys()
    {
        \$userCredentials = ['TheUser', 'TheCredentials'];

        \$request = new Request([], [], [], [], [], [
            'TheUserKey' => 'TheUser',
            'TheCredentialsKey' => 'TheCredentials',
        ]);
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey', 'TheUserKey', 'TheCredentialsKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, \$userCredentials);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/X509AuthenticationListenerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Firewall;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener;

class X509AuthenticationListenerTest extends TestCase
{
    /**
     * @dataProvider dataProviderGetPreAuthenticatedData
     */
    public function testGetPreAuthenticatedData(\$user, \$credentials)
    {
        \$serverVars = [];
        if ('' !== \$user) {
            \$serverVars['SSL_CLIENT_S_DN_Email'] = \$user;
        }
        if ('' !== \$credentials) {
            \$serverVars['SSL_CLIENT_S_DN'] = \$credentials;
        }

        \$request = new Request([], [], [], [], [], \$serverVars);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, [\$user, \$credentials]);
    }

    public static function dataProviderGetPreAuthenticatedData()
    {
        return [
            'validValues' => ['TheUser', 'TheCredentials'],
            'noCredentials' => ['TheUser', ''],
        ];
    }

    /**
     * @dataProvider dataProviderGetPreAuthenticatedDataNoUser
     */
    public function testGetPreAuthenticatedDataNoUser(\$emailAddress, \$credentials)
    {
        \$request = new Request([], [], [], [], [], ['SSL_CLIENT_S_DN' => \$credentials]);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, [\$emailAddress, \$credentials]);
    }

    public static function dataProviderGetPreAuthenticatedDataNoUser()
    {
        yield ['cert@example.com', 'CN=Sample certificate DN/emailAddress=cert@example.com'];
        yield ['cert+something@example.com', 'CN=Sample certificate DN/emailAddress=cert+something@example.com'];
        yield ['cert@example.com', 'CN=Sample certificate DN,emailAddress=cert@example.com'];
        yield ['cert+something@example.com', 'CN=Sample certificate DN,emailAddress=cert+something@example.com'];
        yield ['cert+something@example.com', 'emailAddress=cert+something@example.com,CN=Sample certificate DN'];
        yield ['cert+something@example.com', 'emailAddress=cert+something@example.com'];
        yield ['firstname.lastname@mycompany.co.uk', 'emailAddress=firstname.lastname@mycompany.co.uk,CN=Firstname.Lastname,OU=london,OU=company design and engineering,OU=Issuer London,OU=Roaming,OU=Interactive,OU=Users,OU=Standard,OU=Business,DC=england,DC=core,DC=company,DC=co,DC=uk'];
    }

    public function testGetPreAuthenticatedDataNoData()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$request = new Request([], [], [], [], [], []);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
    }

    public function testGetPreAuthenticatedDataWithDifferentKeys()
    {
        \$userCredentials = ['TheUser', 'TheCredentials'];

        \$request = new Request([], [], [], [], [], [
            'TheUserKey' => 'TheUser',
            'TheCredentialsKey' => 'TheCredentials',
        ]);
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new X509AuthenticationListener(\$tokenStorage, \$authenticationManager, 'TheProviderKey', 'TheUserKey', 'TheCredentialsKey');

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, \$userCredentials);
    }
}
", "vendor/symfony/security-http/Tests/Firewall/X509AuthenticationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/X509AuthenticationListenerTest.php");
    }
}
