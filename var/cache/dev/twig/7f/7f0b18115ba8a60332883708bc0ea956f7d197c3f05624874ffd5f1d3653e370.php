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

/* vendor/symfony/security-http/Tests/Firewall/ChannelListenerTest.php */
class __TwigTemplate_52d763e5620796b105fd6b9ae72272734872cf663e7eb21470dc4dcb81c58d36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/ChannelListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/ChannelListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener;

class ChannelListenerTest extends TestCase
{
    public function testHandleWithNotSecuredRequestAndHttpChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(false)
        ;

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'http'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->never())
            ->method('start')
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->never())
            ->method('setResponse')
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }

    public function testHandleWithSecuredRequestAndHttpsChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(true)
        ;

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'https'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->never())
            ->method('start')
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->never())
            ->method('setResponse')
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }

    public function testHandleWithNotSecuredRequestAndHttpsChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(false)
        ;

        \$response = new Response();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'https'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->once())
            ->method('start')
            ->with(\$this->equalTo(\$request))
            ->willReturn(\$response)
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->equalTo(\$response))
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }

    public function testHandleWithSecuredRequestAndHttpChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(true)
        ;

        \$response = new Response();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'http'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->once())
            ->method('start')
            ->with(\$this->equalTo(\$request))
            ->willReturn(\$response)
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->equalTo(\$response))
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/ChannelListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener;

class ChannelListenerTest extends TestCase
{
    public function testHandleWithNotSecuredRequestAndHttpChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(false)
        ;

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'http'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->never())
            ->method('start')
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->never())
            ->method('setResponse')
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }

    public function testHandleWithSecuredRequestAndHttpsChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(true)
        ;

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'https'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->never())
            ->method('start')
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->never())
            ->method('setResponse')
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }

    public function testHandleWithNotSecuredRequestAndHttpsChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(false)
        ;

        \$response = new Response();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'https'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->once())
            ->method('start')
            ->with(\$this->equalTo(\$request))
            ->willReturn(\$response)
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->equalTo(\$response))
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }

    public function testHandleWithSecuredRequestAndHttpChannel()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->disableOriginalClone()->getMock();
        \$request
            ->expects(\$this->any())
            ->method('isSecure')
            ->willReturn(true)
        ;

        \$response = new Response();

        \$accessMap = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\AccessMapInterface')->getMock();
        \$accessMap
            ->expects(\$this->any())
            ->method('getPatterns')
            ->with(\$this->equalTo(\$request))
            ->willReturn([[], 'http'])
        ;

        \$entryPoint = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface')->getMock();
        \$entryPoint
            ->expects(\$this->once())
            ->method('start')
            ->with(\$this->equalTo(\$request))
            ->willReturn(\$response)
        ;

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;
        \$event
            ->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->equalTo(\$response))
        ;

        \$listener = new ChannelListener(\$accessMap, \$entryPoint);
        \$listener(\$event);
    }
}
", "vendor/symfony/security-http/Tests/Firewall/ChannelListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/ChannelListenerTest.php");
    }
}
