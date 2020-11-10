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

/* vendor/symfony/http-kernel/Tests/EventListener/ResponseListenerTest.php */
class __TwigTemplate_914097de27b056b8ceee7787793bb444866194f4e674f2c5a2086a16fa94e0fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ResponseListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ResponseListenerTest.php"));

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
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ResponseListenerTest extends TestCase
{
    private \$dispatcher;

    private \$kernel;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$listener = new ResponseListener('UTF-8');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);

        \$this->kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
    }

    protected function tearDown(): void
    {
        \$this->dispatcher = null;
        \$this->kernel = null;
    }

    public function testFilterDoesNothingForSubRequests()
    {
        \$response = new Response('foo');

        \$event = new ResponseEvent(\$this->kernel, new Request(), HttpKernelInterface::SUB_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('', \$event->getResponse()->headers->get('content-type'));
    }

    public function testFilterSetsNonDefaultCharsetIfNotOverridden()
    {
        \$listener = new ResponseListener('ISO-8859-15');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse'], 1);

        \$response = new Response('foo');

        \$event = new ResponseEvent(\$this->kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('ISO-8859-15', \$response->getCharset());
    }

    public function testFilterDoesNothingIfCharsetIsOverridden()
    {
        \$listener = new ResponseListener('ISO-8859-15');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse'], 1);

        \$response = new Response('foo');
        \$response->setCharset('ISO-8859-1');

        \$event = new ResponseEvent(\$this->kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('ISO-8859-1', \$response->getCharset());
    }

    public function testFiltersSetsNonDefaultCharsetIfNotOverriddenOnNonTextContentType()
    {
        \$listener = new ResponseListener('ISO-8859-15');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse'], 1);

        \$response = new Response('foo');
        \$request = Request::create('/');
        \$request->setRequestFormat('application/json');

        \$event = new ResponseEvent(\$this->kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('ISO-8859-15', \$response->getCharset());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/ResponseListenerTest.php";
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
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ResponseListenerTest extends TestCase
{
    private \$dispatcher;

    private \$kernel;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$listener = new ResponseListener('UTF-8');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);

        \$this->kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
    }

    protected function tearDown(): void
    {
        \$this->dispatcher = null;
        \$this->kernel = null;
    }

    public function testFilterDoesNothingForSubRequests()
    {
        \$response = new Response('foo');

        \$event = new ResponseEvent(\$this->kernel, new Request(), HttpKernelInterface::SUB_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('', \$event->getResponse()->headers->get('content-type'));
    }

    public function testFilterSetsNonDefaultCharsetIfNotOverridden()
    {
        \$listener = new ResponseListener('ISO-8859-15');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse'], 1);

        \$response = new Response('foo');

        \$event = new ResponseEvent(\$this->kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('ISO-8859-15', \$response->getCharset());
    }

    public function testFilterDoesNothingIfCharsetIsOverridden()
    {
        \$listener = new ResponseListener('ISO-8859-15');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse'], 1);

        \$response = new Response('foo');
        \$response->setCharset('ISO-8859-1');

        \$event = new ResponseEvent(\$this->kernel, Request::create('/'), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('ISO-8859-1', \$response->getCharset());
    }

    public function testFiltersSetsNonDefaultCharsetIfNotOverriddenOnNonTextContentType()
    {
        \$listener = new ResponseListener('ISO-8859-15');
        \$this->dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse'], 1);

        \$response = new Response('foo');
        \$request = Request::create('/');
        \$request->setRequestFormat('application/json');

        \$event = new ResponseEvent(\$this->kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response);
        \$this->dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('ISO-8859-15', \$response->getCharset());
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/ResponseListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/ResponseListenerTest.php");
    }
}
