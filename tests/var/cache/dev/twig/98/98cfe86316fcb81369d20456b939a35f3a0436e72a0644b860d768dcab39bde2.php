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

/* vendor/symfony/http-kernel/EventListener/LocaleListener.php */
class __TwigTemplate_6d6de5e6b0c8f06460193f449b3d7ea267b83c678c17704336aaa4f17108c475 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/LocaleListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/LocaleListener.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\RequestContextAwareInterface;

/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class LocaleListener implements EventSubscriberInterface
{
    private \$router;
    private \$defaultLocale;
    private \$requestStack;

    /**
     * @param RequestStack                      \$requestStack  A RequestStack instance
     * @param string                            \$defaultLocale The default locale
     * @param RequestContextAwareInterface|null \$router        The router
     */
    public function __construct(RequestStack \$requestStack, string \$defaultLocale = 'en', RequestContextAwareInterface \$router = null)
    {
        \$this->defaultLocale = \$defaultLocale;
        \$this->requestStack = \$requestStack;
        \$this->router = \$router;
    }

    public function setDefaultLocale(KernelEvent \$event)
    {
        \$event->getRequest()->setDefaultLocale(\$this->defaultLocale);
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();

        \$this->setLocale(\$request);
        \$this->setRouterContext(\$request);
    }

    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        if (null !== \$parentRequest = \$this->requestStack->getParentRequest()) {
            \$this->setRouterContext(\$parentRequest);
        }
    }

    private function setLocale(Request \$request)
    {
        if (\$locale = \$request->attributes->get('_locale')) {
            \$request->setLocale(\$locale);
        }
    }

    private function setRouterContext(Request \$request)
    {
        if (null !== \$this->router) {
            \$this->router->getContext()->setParameter('_locale', \$request->getLocale());
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                ['setDefaultLocale', 100],
                // must be registered after the Router to have access to the _locale
                ['onKernelRequest', 16],
            ],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/LocaleListener.php";
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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\KernelEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\RequestContextAwareInterface;

/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class LocaleListener implements EventSubscriberInterface
{
    private \$router;
    private \$defaultLocale;
    private \$requestStack;

    /**
     * @param RequestStack                      \$requestStack  A RequestStack instance
     * @param string                            \$defaultLocale The default locale
     * @param RequestContextAwareInterface|null \$router        The router
     */
    public function __construct(RequestStack \$requestStack, string \$defaultLocale = 'en', RequestContextAwareInterface \$router = null)
    {
        \$this->defaultLocale = \$defaultLocale;
        \$this->requestStack = \$requestStack;
        \$this->router = \$router;
    }

    public function setDefaultLocale(KernelEvent \$event)
    {
        \$event->getRequest()->setDefaultLocale(\$this->defaultLocale);
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();

        \$this->setLocale(\$request);
        \$this->setRouterContext(\$request);
    }

    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        if (null !== \$parentRequest = \$this->requestStack->getParentRequest()) {
            \$this->setRouterContext(\$parentRequest);
        }
    }

    private function setLocale(Request \$request)
    {
        if (\$locale = \$request->attributes->get('_locale')) {
            \$request->setLocale(\$locale);
        }
    }

    private function setRouterContext(Request \$request)
    {
        if (null !== \$this->router) {
            \$this->router->getContext()->setParameter('_locale', \$request->getLocale());
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                ['setDefaultLocale', 100],
                // must be registered after the Router to have access to the _locale
                ['onKernelRequest', 16],
            ],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }
}
", "vendor/symfony/http-kernel/EventListener/LocaleListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/LocaleListener.php");
    }
}
