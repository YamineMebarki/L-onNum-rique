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

/* vendor/symfony/security-http/Tests/Firewall/AnonymousAuthenticationListenerTest.php */
class __TwigTemplate_e336bc1e4b95ae4a3c73b3b7cf3034a46e11d8bfd3641318bf20d72ebef0a20b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/AnonymousAuthenticationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/AnonymousAuthenticationListenerTest.php"));

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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener;

class AnonymousAuthenticationListenerTest extends TestCase
{
    public function testHandleWithTokenStorageHavingAToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;
        \$tokenStorage
            ->expects(\$this->never())
            ->method('setToken')
        ;

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$authenticationManager
            ->expects(\$this->never())
            ->method('authenticate')
        ;

        \$listener = new AnonymousAuthenticationListener(\$tokenStorage, 'TheSecret', null, \$authenticationManager);
        \$listener(\$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock());
    }

    public function testHandleWithTokenStorageHavingNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$anonymousToken = new AnonymousToken('TheSecret', 'anon.', []);

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->callback(function (\$token) {
                return 'TheSecret' === \$token->getSecret();
            }))
            ->willReturn(\$anonymousToken)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$anonymousToken)
        ;

        \$listener = new AnonymousAuthenticationListener(\$tokenStorage, 'TheSecret', null, \$authenticationManager);
        \$listener(\$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock());
    }

    public function testHandledEventIsLogged()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->once())
            ->method('info')
            ->with('Populated the TokenStorage with an anonymous Token.')
        ;

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new AnonymousAuthenticationListener(\$tokenStorage, 'TheSecret', \$logger, \$authenticationManager);
        \$listener(\$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/AnonymousAuthenticationListenerTest.php";
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
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener;

class AnonymousAuthenticationListenerTest extends TestCase
{
    public function testHandleWithTokenStorageHavingAToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(\$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock())
        ;
        \$tokenStorage
            ->expects(\$this->never())
            ->method('setToken')
        ;

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$authenticationManager
            ->expects(\$this->never())
            ->method('authenticate')
        ;

        \$listener = new AnonymousAuthenticationListener(\$tokenStorage, 'TheSecret', null, \$authenticationManager);
        \$listener(\$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock());
    }

    public function testHandleWithTokenStorageHavingNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$tokenStorage
            ->expects(\$this->any())
            ->method('getToken')
            ->willReturn(null)
        ;

        \$anonymousToken = new AnonymousToken('TheSecret', 'anon.', []);

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();
        \$authenticationManager
            ->expects(\$this->once())
            ->method('authenticate')
            ->with(\$this->callback(function (\$token) {
                return 'TheSecret' === \$token->getSecret();
            }))
            ->willReturn(\$anonymousToken)
        ;

        \$tokenStorage
            ->expects(\$this->once())
            ->method('setToken')
            ->with(\$anonymousToken)
        ;

        \$listener = new AnonymousAuthenticationListener(\$tokenStorage, 'TheSecret', null, \$authenticationManager);
        \$listener(\$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock());
    }

    public function testHandledEventIsLogged()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();
        \$logger->expects(\$this->once())
            ->method('info')
            ->with('Populated the TokenStorage with an anonymous Token.')
        ;

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock();

        \$listener = new AnonymousAuthenticationListener(\$tokenStorage, 'TheSecret', \$logger, \$authenticationManager);
        \$listener(\$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock());
    }
}
", "vendor/symfony/security-http/Tests/Firewall/AnonymousAuthenticationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/AnonymousAuthenticationListenerTest.php");
    }
}
