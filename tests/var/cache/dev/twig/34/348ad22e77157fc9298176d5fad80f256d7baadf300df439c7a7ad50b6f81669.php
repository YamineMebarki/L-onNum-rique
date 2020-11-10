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

/* vendor/symfony/http-kernel/EventListener/ProfilerListener.php */
class __TwigTemplate_28d7ef84ec235adb6d1b33377772489337eb7f8010f7e5a508f1bb78ee121a6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/ProfilerListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/ProfilerListener.php"));

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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;

/**
 * ProfilerListener collects data for the current request by listening to the kernel events.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ProfilerListener implements EventSubscriberInterface
{
    protected \$profiler;
    protected \$matcher;
    protected \$onlyException;
    protected \$onlyMasterRequests;
    protected \$exception;
    protected \$profiles;
    protected \$requestStack;
    protected \$parents;

    /**
     * @param Profiler                     \$profiler           A Profiler instance
     * @param RequestStack                 \$requestStack       A RequestStack instance
     * @param RequestMatcherInterface|null \$matcher            A RequestMatcher instance
     * @param bool                         \$onlyException      True if the profiler only collects data when an exception occurs, false otherwise
     * @param bool                         \$onlyMasterRequests True if the profiler only collects data when the request is a master request, false otherwise
     */
    public function __construct(Profiler \$profiler, RequestStack \$requestStack, RequestMatcherInterface \$matcher = null, bool \$onlyException = false, bool \$onlyMasterRequests = false)
    {
        \$this->profiler = \$profiler;
        \$this->matcher = \$matcher;
        \$this->onlyException = \$onlyException;
        \$this->onlyMasterRequests = \$onlyMasterRequests;
        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
        \$this->requestStack = \$requestStack;
    }

    /**
     * Handles the onKernelException event.
     */
    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (\$this->onlyMasterRequests && !\$event->isMasterRequest()) {
            return;
        }

        \$this->exception = \$event->getException();
    }

    /**
     * Handles the onKernelResponse event.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        \$master = \$event->isMasterRequest();
        if (\$this->onlyMasterRequests && !\$master) {
            return;
        }

        if (\$this->onlyException && null === \$this->exception) {
            return;
        }

        \$request = \$event->getRequest();
        \$exception = \$this->exception;
        \$this->exception = null;

        if (null !== \$this->matcher && !\$this->matcher->matches(\$request)) {
            return;
        }

        if (!\$profile = \$this->profiler->collect(\$request, \$event->getResponse(), \$exception)) {
            return;
        }

        \$this->profiles[\$request] = \$profile;

        \$this->parents[\$request] = \$this->requestStack->getParentRequest();
    }

    public function onKernelTerminate(PostResponseEvent \$event)
    {
        // attach children to parents
        foreach (\$this->profiles as \$request) {
            if (null !== \$parentRequest = \$this->parents[\$request]) {
                if (isset(\$this->profiles[\$parentRequest])) {
                    \$this->profiles[\$parentRequest]->addChild(\$this->profiles[\$request]);
                }
            }
        }

        // save profiles
        foreach (\$this->profiles as \$request) {
            \$this->profiler->saveProfile(\$this->profiles[\$request]);
        }

        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -100],
            KernelEvents::EXCEPTION => ['onKernelException', 0],
            KernelEvents::TERMINATE => ['onKernelTerminate', -1024],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/ProfilerListener.php";
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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;

/**
 * ProfilerListener collects data for the current request by listening to the kernel events.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ProfilerListener implements EventSubscriberInterface
{
    protected \$profiler;
    protected \$matcher;
    protected \$onlyException;
    protected \$onlyMasterRequests;
    protected \$exception;
    protected \$profiles;
    protected \$requestStack;
    protected \$parents;

    /**
     * @param Profiler                     \$profiler           A Profiler instance
     * @param RequestStack                 \$requestStack       A RequestStack instance
     * @param RequestMatcherInterface|null \$matcher            A RequestMatcher instance
     * @param bool                         \$onlyException      True if the profiler only collects data when an exception occurs, false otherwise
     * @param bool                         \$onlyMasterRequests True if the profiler only collects data when the request is a master request, false otherwise
     */
    public function __construct(Profiler \$profiler, RequestStack \$requestStack, RequestMatcherInterface \$matcher = null, bool \$onlyException = false, bool \$onlyMasterRequests = false)
    {
        \$this->profiler = \$profiler;
        \$this->matcher = \$matcher;
        \$this->onlyException = \$onlyException;
        \$this->onlyMasterRequests = \$onlyMasterRequests;
        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
        \$this->requestStack = \$requestStack;
    }

    /**
     * Handles the onKernelException event.
     */
    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (\$this->onlyMasterRequests && !\$event->isMasterRequest()) {
            return;
        }

        \$this->exception = \$event->getException();
    }

    /**
     * Handles the onKernelResponse event.
     */
    public function onKernelResponse(FilterResponseEvent \$event)
    {
        \$master = \$event->isMasterRequest();
        if (\$this->onlyMasterRequests && !\$master) {
            return;
        }

        if (\$this->onlyException && null === \$this->exception) {
            return;
        }

        \$request = \$event->getRequest();
        \$exception = \$this->exception;
        \$this->exception = null;

        if (null !== \$this->matcher && !\$this->matcher->matches(\$request)) {
            return;
        }

        if (!\$profile = \$this->profiler->collect(\$request, \$event->getResponse(), \$exception)) {
            return;
        }

        \$this->profiles[\$request] = \$profile;

        \$this->parents[\$request] = \$this->requestStack->getParentRequest();
    }

    public function onKernelTerminate(PostResponseEvent \$event)
    {
        // attach children to parents
        foreach (\$this->profiles as \$request) {
            if (null !== \$parentRequest = \$this->parents[\$request]) {
                if (isset(\$this->profiles[\$parentRequest])) {
                    \$this->profiles[\$parentRequest]->addChild(\$this->profiles[\$request]);
                }
            }
        }

        // save profiles
        foreach (\$this->profiles as \$request) {
            \$this->profiler->saveProfile(\$this->profiles[\$request]);
        }

        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -100],
            KernelEvents::EXCEPTION => ['onKernelException', 0],
            KernelEvents::TERMINATE => ['onKernelTerminate', -1024],
        ];
    }
}
", "vendor/symfony/http-kernel/EventListener/ProfilerListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/ProfilerListener.php");
    }
}
