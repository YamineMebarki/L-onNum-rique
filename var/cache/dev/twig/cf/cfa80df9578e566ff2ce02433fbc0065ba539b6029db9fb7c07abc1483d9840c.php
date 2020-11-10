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

/* vendor/symfony/security-http/Tests/Firewall/RemoteUserAuthenticationListenerTest.php */
class __TwigTemplate_664bc2ce92d4a801713a9d0a92f661a383694d87c8edbe4b114f69781d73170b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/RemoteUserAuthenticationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/RemoteUserAuthenticationListenerTest.php"));

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
use Symfony\\Component\\Security\\Http\\Firewall\\RemoteUserAuthenticationListener;

class RemoteUserAuthenticationListenerTest extends TestCase
{
    public function testGetPreAuthenticatedData()
    {
        \$serverVars = [
            'REMOTE_USER' => 'TheUser',
        ];

        \$request = new Request([], [], [], [], [], \$serverVars);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new RemoteUserAuthenticationListener(
            \$tokenStorage,
            \$authenticationManager,
            'TheProviderKey'
        );

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, ['TheUser', null]);
    }

    public function testGetPreAuthenticatedDataNoUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$request = new Request([], [], [], [], [], []);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new RemoteUserAuthenticationListener(
            \$tokenStorage,
            \$authenticationManager,
            'TheProviderKey'
        );

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
    }

    public function testGetPreAuthenticatedDataWithDifferentKeys()
    {
        \$userCredentials = ['TheUser', null];

        \$request = new Request([], [], [], [], [], [
            'TheUserKey' => 'TheUser',
        ]);
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new RemoteUserAuthenticationListener(
            \$tokenStorage,
            \$authenticationManager,
            'TheProviderKey',
            'TheUserKey'
        );

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
        return "vendor/symfony/security-http/Tests/Firewall/RemoteUserAuthenticationListenerTest.php";
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
use Symfony\\Component\\Security\\Http\\Firewall\\RemoteUserAuthenticationListener;

class RemoteUserAuthenticationListenerTest extends TestCase
{
    public function testGetPreAuthenticatedData()
    {
        \$serverVars = [
            'REMOTE_USER' => 'TheUser',
        ];

        \$request = new Request([], [], [], [], [], \$serverVars);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new RemoteUserAuthenticationListener(
            \$tokenStorage,
            \$authenticationManager,
            'TheProviderKey'
        );

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, ['TheUser', null]);
    }

    public function testGetPreAuthenticatedDataNoUser()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$request = new Request([], [], [], [], [], []);

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new RemoteUserAuthenticationListener(
            \$tokenStorage,
            \$authenticationManager,
            'TheProviderKey'
        );

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
    }

    public function testGetPreAuthenticatedDataWithDifferentKeys()
    {
        \$userCredentials = ['TheUser', null];

        \$request = new Request([], [], [], [], [], [
            'TheUserKey' => 'TheUser',
        ]);
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new RemoteUserAuthenticationListener(
            \$tokenStorage,
            \$authenticationManager,
            'TheProviderKey',
            'TheUserKey'
        );

        \$method = new \\ReflectionMethod(\$listener, 'getPreAuthenticatedData');
        \$method->setAccessible(true);

        \$result = \$method->invokeArgs(\$listener, [\$request]);
        \$this->assertSame(\$result, \$userCredentials);
    }
}
", "vendor/symfony/security-http/Tests/Firewall/RemoteUserAuthenticationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/RemoteUserAuthenticationListenerTest.php");
    }
}
