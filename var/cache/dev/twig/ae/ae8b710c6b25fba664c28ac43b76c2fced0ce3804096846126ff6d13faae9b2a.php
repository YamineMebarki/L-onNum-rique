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

/* vendor/symfony/http-kernel/Tests/EventListener/SaveSessionListenerTest.php */
class __TwigTemplate_cbac621de3fe6273da6989964a677f45dbd0136fc2816541b3bb9cae3d0a39e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/SaveSessionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/SaveSessionListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * @group legacy
 */
class SaveSessionListenerTest extends TestCase
{
    public function testOnlyTriggeredOnMasterRequest()
    {
        \$listener = new SaveSessionListener();
        \$event = \$this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
        \$event->expects(\$this->once())->method('isMasterRequest')->willReturn(false);
        \$event->expects(\$this->never())->method('getRequest');

        // sub request
        \$listener->onKernelResponse(\$event);
    }

    public function testSessionSaved()
    {
        \$listener = new SaveSessionListener();
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$session = \$this->getMockBuilder(SessionInterface::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->once())->method('isStarted')->willReturn(true);
        \$session->expects(\$this->once())->method('save');

        \$request = new Request();
        \$request->setSession(\$session);
        \$response = new Response();
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/SaveSessionListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * @group legacy
 */
class SaveSessionListenerTest extends TestCase
{
    public function testOnlyTriggeredOnMasterRequest()
    {
        \$listener = new SaveSessionListener();
        \$event = \$this->getMockBuilder(ResponseEvent::class)->disableOriginalConstructor()->getMock();
        \$event->expects(\$this->once())->method('isMasterRequest')->willReturn(false);
        \$event->expects(\$this->never())->method('getRequest');

        // sub request
        \$listener->onKernelResponse(\$event);
    }

    public function testSessionSaved()
    {
        \$listener = new SaveSessionListener();
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->disableOriginalConstructor()->getMock();

        \$session = \$this->getMockBuilder(SessionInterface::class)->disableOriginalConstructor()->getMock();
        \$session->expects(\$this->once())->method('isStarted')->willReturn(true);
        \$session->expects(\$this->once())->method('save');

        \$request = new Request();
        \$request->setSession(\$session);
        \$response = new Response();
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response));
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/SaveSessionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/SaveSessionListenerTest.php");
    }
}
