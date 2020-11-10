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

/* vendor/symfony/http-kernel/Tests/EventListener/ValidateRequestListenerTest.php */
class __TwigTemplate_9c15d18c60ac84d74b55e1631a2c7c65284b29a797dd2dd50d0e5c0c39d30beb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ValidateRequestListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ValidateRequestListenerTest.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ValidateRequestListenerTest extends TestCase
{
    protected function tearDown(): void
    {
        Request::setTrustedProxies([], -1);
    }

    public function testListenerThrowsWhenMasterRequestHasInconsistentClientIps()
    {
        \$this->expectException('Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException');
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();

        \$request = new Request();
        \$request->setTrustedProxies(['1.1.1.1'], Request::HEADER_X_FORWARDED_FOR | Request::HEADER_FORWARDED);
        \$request->server->set('REMOTE_ADDR', '1.1.1.1');
        \$request->headers->set('FORWARDED', 'for=2.2.2.2');
        \$request->headers->set('X_FORWARDED_FOR', '3.3.3.3');

        \$dispatcher->addListener(KernelEvents::REQUEST, [new ValidateRequestListener(), 'onKernelRequest']);
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$dispatcher->dispatch(\$event, KernelEvents::REQUEST);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/ValidateRequestListenerTest.php";
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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ValidateRequestListenerTest extends TestCase
{
    protected function tearDown(): void
    {
        Request::setTrustedProxies([], -1);
    }

    public function testListenerThrowsWhenMasterRequestHasInconsistentClientIps()
    {
        \$this->expectException('Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException');
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();

        \$request = new Request();
        \$request->setTrustedProxies(['1.1.1.1'], Request::HEADER_X_FORWARDED_FOR | Request::HEADER_FORWARDED);
        \$request->server->set('REMOTE_ADDR', '1.1.1.1');
        \$request->headers->set('FORWARDED', 'for=2.2.2.2');
        \$request->headers->set('X_FORWARDED_FOR', '3.3.3.3');

        \$dispatcher->addListener(KernelEvents::REQUEST, [new ValidateRequestListener(), 'onKernelRequest']);
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);

        \$dispatcher->dispatch(\$event, KernelEvents::REQUEST);
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/ValidateRequestListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/ValidateRequestListenerTest.php");
    }
}
