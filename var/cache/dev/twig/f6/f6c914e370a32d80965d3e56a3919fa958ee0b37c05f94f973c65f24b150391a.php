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

/* vendor/symfony/http-kernel/Tests/EventListener/AddRequestFormatsListenerTest.php */
class __TwigTemplate_63b9bde3b798d7fbcd408a8edb0a3ce9cda3009b586175f484bc026d3dc5e8da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/AddRequestFormatsListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/AddRequestFormatsListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\AddRequestFormatsListener;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * DevLaon AddRequestFormatsListener class.
 *
 * @author Gildas Quemener <gildas.quemener@gmail.com>
 */
class AddRequestFormatsListenerTest extends TestCase
{
    /**
     * @var AddRequestFormatsListener
     */
    private \$listener;

    protected function setUp(): void
    {
        \$this->listener = new AddRequestFormatsListener(['csv' => ['text/csv', 'text/plain']]);
    }

    protected function tearDown(): void
    {
        \$this->listener = null;
    }

    public function testIsAnEventSubscriber()
    {
        \$this->assertInstanceOf('Symfony\\Component\\EventDispatcher\\EventSubscriberInterface', \$this->listener);
    }

    public function testRegisteredEvent()
    {
        \$this->assertEquals(
            [KernelEvents::REQUEST => ['onKernelRequest', 100]],
            AddRequestFormatsListener::getSubscribedEvents()
        );
    }

    public function testSetAdditionalFormats()
    {
        \$request = \$this->getRequestMock();
        \$event = \$this->getRequestEventMock(\$request);

        \$request->expects(\$this->once())
            ->method('setFormat')
            ->with('csv', ['text/csv', 'text/plain']);

        \$this->listener->onKernelRequest(\$event);
    }

    protected function getRequestMock()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
    }

    protected function getRequestEventMock(Request \$request)
    {
        \$event = \$this
            ->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$event->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request);

        return \$event;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/AddRequestFormatsListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\AddRequestFormatsListener;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * DevLaon AddRequestFormatsListener class.
 *
 * @author Gildas Quemener <gildas.quemener@gmail.com>
 */
class AddRequestFormatsListenerTest extends TestCase
{
    /**
     * @var AddRequestFormatsListener
     */
    private \$listener;

    protected function setUp(): void
    {
        \$this->listener = new AddRequestFormatsListener(['csv' => ['text/csv', 'text/plain']]);
    }

    protected function tearDown(): void
    {
        \$this->listener = null;
    }

    public function testIsAnEventSubscriber()
    {
        \$this->assertInstanceOf('Symfony\\Component\\EventDispatcher\\EventSubscriberInterface', \$this->listener);
    }

    public function testRegisteredEvent()
    {
        \$this->assertEquals(
            [KernelEvents::REQUEST => ['onKernelRequest', 100]],
            AddRequestFormatsListener::getSubscribedEvents()
        );
    }

    public function testSetAdditionalFormats()
    {
        \$request = \$this->getRequestMock();
        \$event = \$this->getRequestEventMock(\$request);

        \$request->expects(\$this->once())
            ->method('setFormat')
            ->with('csv', ['text/csv', 'text/plain']);

        \$this->listener->onKernelRequest(\$event);
    }

    protected function getRequestMock()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
    }

    protected function getRequestEventMock(Request \$request)
    {
        \$event = \$this
            ->getMockBuilder(RequestEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$event->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$request);

        return \$event;
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/AddRequestFormatsListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/AddRequestFormatsListenerTest.php");
    }
}
