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

/* vendor/symfony/http-kernel/Tests/EventListener/LocaleListenerTest.php */
class __TwigTemplate_8a2b02121f59412d4eaf614ef8c6ce28c18941cee3001b1d280d5832a6039aa8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/LocaleListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/LocaleListenerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class LocaleListenerTest extends TestCase
{
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->disableOriginalConstructor()->getMock();
    }

    public function testIsAnEventSubscriber()
    {
        \$this->assertInstanceOf(EventSubscriberInterface::class, new LocaleListener(\$this->requestStack));
    }

    public function testRegisteredEvent()
    {
        \$this->assertEquals(
            [
                KernelEvents::REQUEST => [['setDefaultLocale', 100], ['onKernelRequest', 16]],
                KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
            ],
            LocaleListener::getSubscribedEvents()
        );
    }

    public function testDefaultLocale()
    {
        \$listener = new LocaleListener(\$this->requestStack, 'fr');
        \$event = \$this->getEvent(\$request = Request::create('/'));

        \$listener->setDefaultLocale(\$event);
        \$this->assertEquals('fr', \$request->getLocale());
    }

    public function testLocaleFromRequestAttribute()
    {
        \$request = Request::create('/');
        \$request->cookies->set(session_name(), 'value');

        \$request->attributes->set('_locale', 'es');
        \$listener = new LocaleListener(\$this->requestStack, 'fr');
        \$event = \$this->getEvent(\$request);

        \$listener->onKernelRequest(\$event);
        \$this->assertEquals('es', \$request->getLocale());
    }

    public function testLocaleSetForRoutingContext()
    {
        // the request context is updated
        \$context = \$this->getMockBuilder('Symfony\\Component\\Routing\\RequestContext')->getMock();
        \$context->expects(\$this->once())->method('setParameter')->with('_locale', 'es');

        \$router = \$this->getMockBuilder('Symfony\\Component\\Routing\\Router')->setMethods(['getContext'])->disableOriginalConstructor()->getMock();
        \$router->expects(\$this->once())->method('getContext')->willReturn(\$context);

        \$request = Request::create('/');

        \$request->attributes->set('_locale', 'es');
        \$listener = new LocaleListener(\$this->requestStack, 'fr', \$router);
        \$listener->onKernelRequest(\$this->getEvent(\$request));
    }

    public function testRouterResetWithParentRequestOnKernelFinishRequest()
    {
        // the request context is updated
        \$context = \$this->getMockBuilder('Symfony\\Component\\Routing\\RequestContext')->getMock();
        \$context->expects(\$this->once())->method('setParameter')->with('_locale', 'es');

        \$router = \$this->getMockBuilder('Symfony\\Component\\Routing\\Router')->setMethods(['getContext'])->disableOriginalConstructor()->getMock();
        \$router->expects(\$this->once())->method('getContext')->willReturn(\$context);

        \$parentRequest = Request::create('/');
        \$parentRequest->setLocale('es');

        \$this->requestStack->expects(\$this->once())->method('getParentRequest')->willReturn(\$parentRequest);

        \$event = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent')->disableOriginalConstructor()->getMock();

        \$listener = new LocaleListener(\$this->requestStack, 'fr', \$router);
        \$listener->onKernelFinishRequest(\$event);
    }

    public function testRequestLocaleIsNotOverridden()
    {
        \$request = Request::create('/');
        \$request->setLocale('de');
        \$listener = new LocaleListener(\$this->requestStack, 'fr');
        \$event = \$this->getEvent(\$request);

        \$listener->onKernelRequest(\$event);
        \$this->assertEquals('de', \$request->getLocale());
    }

    private function getEvent(Request \$request): RequestEvent
    {
        return new RequestEvent(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/LocaleListenerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class LocaleListenerTest extends TestCase
{
    private \$requestStack;

    protected function setUp(): void
    {
        \$this->requestStack = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestStack')->disableOriginalConstructor()->getMock();
    }

    public function testIsAnEventSubscriber()
    {
        \$this->assertInstanceOf(EventSubscriberInterface::class, new LocaleListener(\$this->requestStack));
    }

    public function testRegisteredEvent()
    {
        \$this->assertEquals(
            [
                KernelEvents::REQUEST => [['setDefaultLocale', 100], ['onKernelRequest', 16]],
                KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
            ],
            LocaleListener::getSubscribedEvents()
        );
    }

    public function testDefaultLocale()
    {
        \$listener = new LocaleListener(\$this->requestStack, 'fr');
        \$event = \$this->getEvent(\$request = Request::create('/'));

        \$listener->setDefaultLocale(\$event);
        \$this->assertEquals('fr', \$request->getLocale());
    }

    public function testLocaleFromRequestAttribute()
    {
        \$request = Request::create('/');
        \$request->cookies->set(session_name(), 'value');

        \$request->attributes->set('_locale', 'es');
        \$listener = new LocaleListener(\$this->requestStack, 'fr');
        \$event = \$this->getEvent(\$request);

        \$listener->onKernelRequest(\$event);
        \$this->assertEquals('es', \$request->getLocale());
    }

    public function testLocaleSetForRoutingContext()
    {
        // the request context is updated
        \$context = \$this->getMockBuilder('Symfony\\Component\\Routing\\RequestContext')->getMock();
        \$context->expects(\$this->once())->method('setParameter')->with('_locale', 'es');

        \$router = \$this->getMockBuilder('Symfony\\Component\\Routing\\Router')->setMethods(['getContext'])->disableOriginalConstructor()->getMock();
        \$router->expects(\$this->once())->method('getContext')->willReturn(\$context);

        \$request = Request::create('/');

        \$request->attributes->set('_locale', 'es');
        \$listener = new LocaleListener(\$this->requestStack, 'fr', \$router);
        \$listener->onKernelRequest(\$this->getEvent(\$request));
    }

    public function testRouterResetWithParentRequestOnKernelFinishRequest()
    {
        // the request context is updated
        \$context = \$this->getMockBuilder('Symfony\\Component\\Routing\\RequestContext')->getMock();
        \$context->expects(\$this->once())->method('setParameter')->with('_locale', 'es');

        \$router = \$this->getMockBuilder('Symfony\\Component\\Routing\\Router')->setMethods(['getContext'])->disableOriginalConstructor()->getMock();
        \$router->expects(\$this->once())->method('getContext')->willReturn(\$context);

        \$parentRequest = Request::create('/');
        \$parentRequest->setLocale('es');

        \$this->requestStack->expects(\$this->once())->method('getParentRequest')->willReturn(\$parentRequest);

        \$event = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent')->disableOriginalConstructor()->getMock();

        \$listener = new LocaleListener(\$this->requestStack, 'fr', \$router);
        \$listener->onKernelFinishRequest(\$event);
    }

    public function testRequestLocaleIsNotOverridden()
    {
        \$request = Request::create('/');
        \$request->setLocale('de');
        \$listener = new LocaleListener(\$this->requestStack, 'fr');
        \$event = \$this->getEvent(\$request);

        \$listener->onKernelRequest(\$event);
        \$this->assertEquals('de', \$request->getLocale());
    }

    private function getEvent(Request \$request): RequestEvent
    {
        return new RequestEvent(\$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock(), \$request, HttpKernelInterface::MASTER_REQUEST);
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/LocaleListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/LocaleListenerTest.php");
    }
}
