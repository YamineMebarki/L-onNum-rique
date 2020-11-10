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

/* vendor/symfony/web-link/Tests/EventListener/AddLinkHeaderListenerTest.php */
class __TwigTemplate_0f6a4b6ad1589156cf3dced324ccb3e93a603fa8aba2480f379bb52373f759b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/Tests/EventListener/AddLinkHeaderListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/Tests/EventListener/AddLinkHeaderListenerTest.php"));

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

namespace Symfony\\Component\\WebLink\\Tests\\EventListener;

use Fig\\Link\\GenericLinkProvider;
use Fig\\Link\\Link;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AddLinkHeaderListenerTest extends TestCase
{
    public function testOnKernelResponse()
    {
        \$request = new Request([], [], ['_links' => new GenericLinkProvider([new Link('preload', '/foo')])]);
        \$response = new Response('', 200, ['Link' => '<https://demo.api-platform.com/docs.jsonld>; rel=\"http://www.w3.org/ns/hydra/core#apiDocumentation\"']);

        \$subscriber = new AddLinkHeaderListener();

        \$event = \$this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
        \$event->method('isMasterRequest')->willReturn(true);
        \$event->method('getRequest')->willReturn(\$request);
        \$event->method('getResponse')->willReturn(\$response);

        \$subscriber->onKernelResponse(\$event);

        \$this->assertInstanceOf(EventSubscriberInterface::class, \$subscriber);

        \$expected = [
            '<https://demo.api-platform.com/docs.jsonld>; rel=\"http://www.w3.org/ns/hydra/core#apiDocumentation\"',
            '</foo>; rel=\"preload\"',
        ];

        \$this->assertEquals(\$expected, \$response->headers->get('Link', null, false));
    }

    public function testSubscribedEvents()
    {
        \$this->assertEquals([KernelEvents::RESPONSE => 'onKernelResponse'], AddLinkHeaderListener::getSubscribedEvents());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-link/Tests/EventListener/AddLinkHeaderListenerTest.php";
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

namespace Symfony\\Component\\WebLink\\Tests\\EventListener;

use Fig\\Link\\GenericLinkProvider;
use Fig\\Link\\Link;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\WebLink\\EventListener\\AddLinkHeaderListener;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class AddLinkHeaderListenerTest extends TestCase
{
    public function testOnKernelResponse()
    {
        \$request = new Request([], [], ['_links' => new GenericLinkProvider([new Link('preload', '/foo')])]);
        \$response = new Response('', 200, ['Link' => '<https://demo.api-platform.com/docs.jsonld>; rel=\"http://www.w3.org/ns/hydra/core#apiDocumentation\"']);

        \$subscriber = new AddLinkHeaderListener();

        \$event = \$this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
        \$event->method('isMasterRequest')->willReturn(true);
        \$event->method('getRequest')->willReturn(\$request);
        \$event->method('getResponse')->willReturn(\$response);

        \$subscriber->onKernelResponse(\$event);

        \$this->assertInstanceOf(EventSubscriberInterface::class, \$subscriber);

        \$expected = [
            '<https://demo.api-platform.com/docs.jsonld>; rel=\"http://www.w3.org/ns/hydra/core#apiDocumentation\"',
            '</foo>; rel=\"preload\"',
        ];

        \$this->assertEquals(\$expected, \$response->headers->get('Link', null, false));
    }

    public function testSubscribedEvents()
    {
        \$this->assertEquals([KernelEvents::RESPONSE => 'onKernelResponse'], AddLinkHeaderListener::getSubscribedEvents());
    }
}
", "vendor/symfony/web-link/Tests/EventListener/AddLinkHeaderListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-link/Tests/EventListener/AddLinkHeaderListenerTest.php");
    }
}
