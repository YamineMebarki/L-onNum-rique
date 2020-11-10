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

/* vendor/symfony/http-kernel/Tests/EventListener/SurrogateListenerTest.php */
class __TwigTemplate_169b6bd7b61d9ce71a69f6a3024dd89d4b1041101749bfc443ccf6e3ab965c0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/SurrogateListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/SurrogateListenerTest.php"));

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
use Symfony\\Component\\HttpKernel\\EventListener\\SurrogateListener;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class SurrogateListenerTest extends TestCase
{
    public function testFilterDoesNothingForSubRequests()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$response = new Response('foo <esi:include src=\"\" />');
        \$listener = new SurrogateListener(new Esi());

        \$dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::SUB_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('', \$event->getResponse()->headers->get('Surrogate-Control'));
    }

    public function testFilterWhenThereIsSomeEsiIncludes()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$response = new Response('foo <esi:include src=\"\" />');
        \$listener = new SurrogateListener(new Esi());

        \$dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('content=\"ESI/1.0\"', \$event->getResponse()->headers->get('Surrogate-Control'));
    }

    public function testFilterWhenThereIsNoEsiIncludes()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$response = new Response('foo');
        \$listener = new SurrogateListener(new Esi());

        \$dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('', \$event->getResponse()->headers->get('Surrogate-Control'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/SurrogateListenerTest.php";
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
use Symfony\\Component\\HttpKernel\\EventListener\\SurrogateListener;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class SurrogateListenerTest extends TestCase
{
    public function testFilterDoesNothingForSubRequests()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$response = new Response('foo <esi:include src=\"\" />');
        \$listener = new SurrogateListener(new Esi());

        \$dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::SUB_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('', \$event->getResponse()->headers->get('Surrogate-Control'));
    }

    public function testFilterWhenThereIsSomeEsiIncludes()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$response = new Response('foo <esi:include src=\"\" />');
        \$listener = new SurrogateListener(new Esi());

        \$dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('content=\"ESI/1.0\"', \$event->getResponse()->headers->get('Surrogate-Control'));
    }

    public function testFilterWhenThereIsNoEsiIncludes()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$response = new Response('foo');
        \$listener = new SurrogateListener(new Esi());

        \$dispatcher->addListener(KernelEvents::RESPONSE, [\$listener, 'onKernelResponse']);
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertEquals('', \$event->getResponse()->headers->get('Surrogate-Control'));
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/SurrogateListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/SurrogateListenerTest.php");
    }
}
