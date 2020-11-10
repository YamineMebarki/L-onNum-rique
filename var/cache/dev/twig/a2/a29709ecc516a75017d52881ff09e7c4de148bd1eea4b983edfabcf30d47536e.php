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

/* vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php */
class __TwigTemplate_c1be4c3b99b84d018fe1f27b0c722e491db7872d302014333a61ce4b244ddfe1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * Pass the current locale to the provided services.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class LocaleAwareListener implements EventSubscriberInterface
{
    private \$localeAwareServices;
    private \$requestStack;

    /**
     * @param LocaleAwareInterface[] \$localeAwareServices
     */
    public function __construct(iterable \$localeAwareServices, RequestStack \$requestStack)
    {
        \$this->localeAwareServices = \$localeAwareServices;
        \$this->requestStack = \$requestStack;
    }

    public function onKernelRequest(RequestEvent \$event): void
    {
        \$this->setLocale(\$event->getRequest()->getLocale(), \$event->getRequest()->getDefaultLocale());
    }

    public function onKernelFinishRequest(FinishRequestEvent \$event): void
    {
        if (null === \$parentRequest = \$this->requestStack->getParentRequest()) {
            \$this->setLocale(\$event->getRequest()->getDefaultLocale());

            return;
        }

        \$this->setLocale(\$parentRequest->getLocale(), \$parentRequest->getDefaultLocale());
    }

    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the Locale listener
            KernelEvents::REQUEST => [['onKernelRequest', 15]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', -15]],
        ];
    }

    private function setLocale(string \$locale, string \$defaultLocale = null): void
    {
        foreach (\$this->localeAwareServices as \$service) {
            try {
                \$service->setLocale(\$locale);
            } catch (\\InvalidArgumentException \$e) {
                \$service->setLocale(\$defaultLocale);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php";
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
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * Pass the current locale to the provided services.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class LocaleAwareListener implements EventSubscriberInterface
{
    private \$localeAwareServices;
    private \$requestStack;

    /**
     * @param LocaleAwareInterface[] \$localeAwareServices
     */
    public function __construct(iterable \$localeAwareServices, RequestStack \$requestStack)
    {
        \$this->localeAwareServices = \$localeAwareServices;
        \$this->requestStack = \$requestStack;
    }

    public function onKernelRequest(RequestEvent \$event): void
    {
        \$this->setLocale(\$event->getRequest()->getLocale(), \$event->getRequest()->getDefaultLocale());
    }

    public function onKernelFinishRequest(FinishRequestEvent \$event): void
    {
        if (null === \$parentRequest = \$this->requestStack->getParentRequest()) {
            \$this->setLocale(\$event->getRequest()->getDefaultLocale());

            return;
        }

        \$this->setLocale(\$parentRequest->getLocale(), \$parentRequest->getDefaultLocale());
    }

    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the Locale listener
            KernelEvents::REQUEST => [['onKernelRequest', 15]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', -15]],
        ];
    }

    private function setLocale(string \$locale, string \$defaultLocale = null): void
    {
        foreach (\$this->localeAwareServices as \$service) {
            try {
                \$service->setLocale(\$locale);
            } catch (\\InvalidArgumentException \$e) {
                \$service->setLocale(\$defaultLocale);
            }
        }
    }
}
", "vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php");
    }
}
