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

/* vendor/symfony/http-kernel/Tests/EventListener/ProfilerListenerTest.php */
class __TwigTemplate_aabf5cc203a2f6b036ecc2ef4dafe8551ce50de1154cb1e32282eff499bb7160 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ProfilerListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ProfilerListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;

class ProfilerListenerTest extends TestCase
{
    /**
     * DevLaon a master and sub request with an exception and `onlyException` profiler option enabled.
     */
    public function testKernelTerminate()
    {
        \$profile = new Profile('token');

        \$profiler = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$profiler->expects(\$this->once())
            ->method('collect')
            ->willReturn(\$profile);

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();

        \$masterRequest = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')
            ->disableOriginalConstructor()
            ->getMock();

        \$subRequest = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')
            ->disableOriginalConstructor()
            ->getMock();

        \$response = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Response')
            ->disableOriginalConstructor()
            ->getMock();

        \$requestStack = new RequestStack();
        \$requestStack->push(\$masterRequest);

        \$onlyException = true;
        \$listener = new ProfilerListener(\$profiler, \$requestStack, null, \$onlyException);

        // master request
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$masterRequest, Kernel::MASTER_REQUEST, \$response));

        // sub request
        \$listener->onKernelException(new ExceptionEvent(\$kernel, \$subRequest, Kernel::SUB_REQUEST, new HttpException(404)));
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$subRequest, Kernel::SUB_REQUEST, \$response));

        \$listener->onKernelTerminate(new TerminateEvent(\$kernel, \$masterRequest, \$response));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/ProfilerListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;

class ProfilerListenerTest extends TestCase
{
    /**
     * DevLaon a master and sub request with an exception and `onlyException` profiler option enabled.
     */
    public function testKernelTerminate()
    {
        \$profile = new Profile('token');

        \$profiler = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$profiler->expects(\$this->once())
            ->method('collect')
            ->willReturn(\$profile);

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();

        \$masterRequest = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')
            ->disableOriginalConstructor()
            ->getMock();

        \$subRequest = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')
            ->disableOriginalConstructor()
            ->getMock();

        \$response = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Response')
            ->disableOriginalConstructor()
            ->getMock();

        \$requestStack = new RequestStack();
        \$requestStack->push(\$masterRequest);

        \$onlyException = true;
        \$listener = new ProfilerListener(\$profiler, \$requestStack, null, \$onlyException);

        // master request
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$masterRequest, Kernel::MASTER_REQUEST, \$response));

        // sub request
        \$listener->onKernelException(new ExceptionEvent(\$kernel, \$subRequest, Kernel::SUB_REQUEST, new HttpException(404)));
        \$listener->onKernelResponse(new ResponseEvent(\$kernel, \$subRequest, Kernel::SUB_REQUEST, \$response));

        \$listener->onKernelTerminate(new TerminateEvent(\$kernel, \$masterRequest, \$response));
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/ProfilerListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/ProfilerListenerTest.php");
    }
}
