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

/* vendor/symfony/security-http/Tests/Firewall/UsernamePasswordFormAuthenticationListenerTest.php */
class __TwigTemplate_17ef4593190e3f219d74598de958fded2566b52cef245fa3275071e508435f72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/UsernamePasswordFormAuthenticationListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Firewall/UsernamePasswordFormAuthenticationListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler;
use Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler;
use Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy;

class UsernamePasswordFormAuthenticationListenerTest extends TestCase
{
    /**
     * @dataProvider getUsernameForLength
     */
    public function testHandleWhenUsernameLength(\$username, \$ok)
    {
        \$request = Request::create('/login_check', 'POST', ['_username' => \$username]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils
            ->expects(\$this->any())
            ->method('checkRequestPath')
            ->willReturn(true)
        ;
        \$httpUtils
            ->method('createRedirectResponse')
            ->willReturn(new RedirectResponse('/hello'))
        ;

        \$failureHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface')->getMock();
        \$failureHandler
            ->expects(\$ok ? \$this->never() : \$this->once())
            ->method('onAuthenticationFailure')
            ->willReturn(new Response())
        ;

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager')->disableOriginalConstructor()->getMock();
        \$authenticationManager
            ->expects(\$ok ? \$this->once() : \$this->never())
            ->method('authenticate')
            ->willReturnArgument(0)
        ;

        \$listener = new UsernamePasswordFormAuthenticationListener(
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock(),
            \$authenticationManager,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface')->getMock(),
            \$httpUtils,
            'TheProviderKey',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            \$failureHandler,
            ['require_previous_session' => false]
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWithArray(\$postOnly)
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$this->expectExceptionMessage('The key \"_username\" must be a string, \"array\" given.');
        \$request = Request::create('/login_check', 'POST', ['_username' => []]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWithInt(\$postOnly)
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$this->expectExceptionMessage('The key \"_username\" must be a string, \"integer\" given.');
        \$request = Request::create('/login_check', 'POST', ['_username' => 42]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWithObject(\$postOnly)
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$this->expectExceptionMessage('The key \"_username\" must be a string, \"object\" given.');
        \$request = Request::create('/login_check', 'POST', ['_username' => new \\stdClass()]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWith__toString(\$postOnly)
    {
        \$usernameClass = \$this->getMockBuilder(DummyUserClass::class)->getMock();
        \$usernameClass
            ->expects(\$this->atLeastOnce())
            ->method('__toString')
            ->willReturn('someUsername');

        \$request = Request::create('/login_check', 'POST', ['_username' => \$usernameClass]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    public function postOnlyDataProvider()
    {
        return [
            [true],
            [false],
        ];
    }

    public function getUsernameForLength()
    {
        return [
            [str_repeat('x', Security::MAX_USERNAME_LENGTH + 1), false],
            [str_repeat('x', Security::MAX_USERNAME_LENGTH - 1), true],
        ];
    }
}

class DummyUserClass
{
    public function __toString()
    {
        return '';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Firewall/UsernamePasswordFormAuthenticationListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler;
use Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler;
use Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy;

class UsernamePasswordFormAuthenticationListenerTest extends TestCase
{
    /**
     * @dataProvider getUsernameForLength
     */
    public function testHandleWhenUsernameLength(\$username, \$ok)
    {
        \$request = Request::create('/login_check', 'POST', ['_username' => \$username]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());

        \$httpUtils = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\HttpUtils')->getMock();
        \$httpUtils
            ->expects(\$this->any())
            ->method('checkRequestPath')
            ->willReturn(true)
        ;
        \$httpUtils
            ->method('createRedirectResponse')
            ->willReturn(new RedirectResponse('/hello'))
        ;

        \$failureHandler = \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface')->getMock();
        \$failureHandler
            ->expects(\$ok ? \$this->never() : \$this->once())
            ->method('onAuthenticationFailure')
            ->willReturn(new Response())
        ;

        \$authenticationManager = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager')->disableOriginalConstructor()->getMock();
        \$authenticationManager
            ->expects(\$ok ? \$this->once() : \$this->never())
            ->method('authenticate')
            ->willReturnArgument(0)
        ;

        \$listener = new UsernamePasswordFormAuthenticationListener(
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock(),
            \$authenticationManager,
            \$this->getMockBuilder('Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface')->getMock(),
            \$httpUtils,
            'TheProviderKey',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            \$failureHandler,
            ['require_previous_session' => false]
        );

        \$event = \$this->getMockBuilder(RequestEvent::class)->disableOriginalConstructor()->getMock();
        \$event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request)
        ;

        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWithArray(\$postOnly)
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$this->expectExceptionMessage('The key \"_username\" must be a string, \"array\" given.');
        \$request = Request::create('/login_check', 'POST', ['_username' => []]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWithInt(\$postOnly)
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$this->expectExceptionMessage('The key \"_username\" must be a string, \"integer\" given.');
        \$request = Request::create('/login_check', 'POST', ['_username' => 42]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWithObject(\$postOnly)
    {
        \$this->expectException('Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException');
        \$this->expectExceptionMessage('The key \"_username\" must be a string, \"object\" given.');
        \$request = Request::create('/login_check', 'POST', ['_username' => new \\stdClass()]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    /**
     * @dataProvider postOnlyDataProvider
     */
    public function testHandleNonStringUsernameWith__toString(\$postOnly)
    {
        \$usernameClass = \$this->getMockBuilder(DummyUserClass::class)->getMock();
        \$usernameClass
            ->expects(\$this->atLeastOnce())
            ->method('__toString')
            ->willReturn('someUsername');

        \$request = Request::create('/login_check', 'POST', ['_username' => \$usernameClass]);
        \$request->setSession(\$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\SessionInterface')->getMock());
        \$listener = new UsernamePasswordFormAuthenticationListener(
            new TokenStorage(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface')->getMock(),
            new SessionAuthenticationStrategy(SessionAuthenticationStrategy::NONE),
            \$httpUtils = new HttpUtils(),
            'foo',
            new DefaultAuthenticationSuccessHandler(\$httpUtils),
            new DefaultAuthenticationFailureHandler(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$httpUtils),
            ['require_previous_session' => false, 'post_only' => \$postOnly]
        );
        \$event = new RequestEvent(\$this->getMockBuilder(HttpKernelInterface::class)->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
        \$listener(\$event);
    }

    public function postOnlyDataProvider()
    {
        return [
            [true],
            [false],
        ];
    }

    public function getUsernameForLength()
    {
        return [
            [str_repeat('x', Security::MAX_USERNAME_LENGTH + 1), false],
            [str_repeat('x', Security::MAX_USERNAME_LENGTH - 1), true],
        ];
    }
}

class DummyUserClass
{
    public function __toString()
    {
        return '';
    }
}
", "vendor/symfony/security-http/Tests/Firewall/UsernamePasswordFormAuthenticationListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Firewall/UsernamePasswordFormAuthenticationListenerTest.php");
    }
}
