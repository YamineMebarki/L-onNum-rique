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

/* vendor/symfony/security-http/Tests/Firewall/AccessListenerTest.php */
class __TwigTemplate_7040bc263cc88fecfafed3a41edc48b5f6eec71f1aae8459821e48a2d03c82ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/AccessListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/AccessListenerTest.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\AccessListener;

class AccessListenerTest extends TestCase
{
    public function testHandleWhenTheAccessDecisionManagerDecidesToRefuseAccess()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException');
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([['foo' => 'bar'], null])
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->any())
            ->method('isAuthenticated')
            ->willReturn(true)
        ;

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token)
        ;

        \$accessDecisionManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock();
        \$accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->with(\$this->equalTo(\$token), \$this->equalTo(['foo' => 'bar']), \$this->equalTo(\$request))
            ->willReturn(false)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$accessDecisionManager,
            \$accessMap,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock()
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testHandleWhenTheTokenIsNotAuthenticated()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([['foo' => 'bar'], null])
        ;

        \$notAuthenticatedToken = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$notAuthenticatedToken
            ->expects(\$this->any())
            ->method('isAuthenticated')
            ->willReturn(false)
        ;

        \$authenticatedToken = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$authenticatedToken
            ->expects(\$this->any())
            ->method('isAuthenticated')
            ->willReturn(true)
        ;

        \$authManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$authManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$notAuthenticatedToken))
            ->willReturn(\$authenticatedToken)
        ;

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$notAuthenticatedToken)
        ;
        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$authenticatedToken))
        ;

        \$accessDecisionManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock();
        \$accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->with(\$this->equalTo(\$authenticatedToken), \$this->equalTo(['foo' => 'bar']), \$this->equalTo(\$request))
            ->willReturn(true)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$accessDecisionManager,
            \$accessMap,
            \$authManager
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testHandleWhenThereIsNoAccessMapEntryMatchingTheRequest()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([null, null])
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->never())
            ->method('isAuthenticated')
        ;

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock(),
            \$accessMap,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock()
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testHandleWhenTheSecurityTokenStorageHasNoToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException');
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock()
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();

        \$listener(\$event);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/AccessListenerTest.php";
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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\AccessListener;

class AccessListenerTest extends TestCase
{
    public function testHandleWhenTheAccessDecisionManagerDecidesToRefuseAccess()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException');
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([['foo' => 'bar'], null])
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->any())
            ->method('isAuthenticated')
            ->willReturn(true)
        ;

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token)
        ;

        \$accessDecisionManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock();
        \$accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->with(\$this->equalTo(\$token), \$this->equalTo(['foo' => 'bar']), \$this->equalTo(\$request))
            ->willReturn(false)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$accessDecisionManager,
            \$accessMap,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock()
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testHandleWhenTheTokenIsNotAuthenticated()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([['foo' => 'bar'], null])
        ;

        \$notAuthenticatedToken = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$notAuthenticatedToken
            ->expects(\$this->any())
            ->method('isAuthenticated')
            ->willReturn(false)
        ;

        \$authenticatedToken = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$authenticatedToken
            ->expects(\$this->any())
            ->method('isAuthenticated')
            ->willReturn(true)
        ;

        \$authManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$authManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->equalTo(\$notAuthenticatedToken))
            ->willReturn(\$authenticatedToken)
        ;

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$notAuthenticatedToken)
        ;
        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$this->equalTo(\$authenticatedToken))
        ;

        \$accessDecisionManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock();
        \$accessDecisionManager
            ->expects(\$this->once())
            ->method('decide')
            ->with(\$this->equalTo(\$authenticatedToken), \$this->equalTo(['foo' => 'bar']), \$this->equalTo(\$request))
            ->willReturn(true)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$accessDecisionManager,
            \$accessMap,
            \$authManager
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testHandleWhenThereIsNoAccessMapEntryMatchingTheRequest()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([null, null])
        ;

        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
        \$token
            ->expects(\$this->never())
            ->method('isAuthenticated')
        ;

        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$token)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock(),
            \$accessMap,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock()
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    public function testHandleWhenTheSecurityTokenStorageHasNoToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException');
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$listener = new AccessListener(
            \$tokenStorage,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock()
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();

        \$listener(\$event);
    }
}
", "vendor/symfony/security-http/Tests/Firewall/AccessListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/AccessListenerTest.php");
    }
}
