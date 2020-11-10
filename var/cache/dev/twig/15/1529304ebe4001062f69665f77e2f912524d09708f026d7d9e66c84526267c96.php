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

/* vendor/symfony/http-kernel/EventListener/TranslatorListener.php */
class __TwigTemplate_1816047259685ecf7f760d7ea74507dfd8504cb35d5c7622714417ff4e700354 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/TranslatorListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/TranslatorListener.php"));

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

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3 and will be removed in 5.0, use LocaleAwareListener instead.', TranslatorListener::class), E_USER_DEPRECATED);

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * Synchronizes the locale between the request and the translator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, use LocaleAwareListener instead
 */
class TranslatorListener implements EventSubscriberInterface
{
    private \$translator;
    private \$requestStack;

    /**
     * @param LocaleAwareInterface \$translator
     */
    public function __construct(\$translator, RequestStack \$requestStack)
    {
        if (!\$translator instanceof TranslatorInterface && !\$translator instanceof LocaleAwareInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, LocaleAwareInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->translator = \$translator;
        \$this->requestStack = \$requestStack;
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$this->setLocale(\$event->getRequest());
    }

    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        if (null === \$parentRequest = \$this->requestStack->getParentRequest()) {
            return;
        }

        \$this->setLocale(\$parentRequest);
    }

    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the Locale listener
            KernelEvents::REQUEST => [['onKernelRequest', 10]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }

    private function setLocale(Request \$request)
    {
        try {
            \$this->translator->setLocale(\$request->getLocale());
        } catch (\\InvalidArgumentException \$e) {
            \$this->translator->setLocale(\$request->getDefaultLocale());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/TranslatorListener.php";
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

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3 and will be removed in 5.0, use LocaleAwareListener instead.', TranslatorListener::class), E_USER_DEPRECATED);

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;

/**
 * Synchronizes the locale between the request and the translator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, use LocaleAwareListener instead
 */
class TranslatorListener implements EventSubscriberInterface
{
    private \$translator;
    private \$requestStack;

    /**
     * @param LocaleAwareInterface \$translator
     */
    public function __construct(\$translator, RequestStack \$requestStack)
    {
        if (!\$translator instanceof TranslatorInterface && !\$translator instanceof LocaleAwareInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, LocaleAwareInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->translator = \$translator;
        \$this->requestStack = \$requestStack;
    }

    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$this->setLocale(\$event->getRequest());
    }

    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        if (null === \$parentRequest = \$this->requestStack->getParentRequest()) {
            return;
        }

        \$this->setLocale(\$parentRequest);
    }

    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the Locale listener
            KernelEvents::REQUEST => [['onKernelRequest', 10]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }

    private function setLocale(Request \$request)
    {
        try {
            \$this->translator->setLocale(\$request->getLocale());
        } catch (\\InvalidArgumentException \$e) {
            \$this->translator->setLocale(\$request->getDefaultLocale());
        }
    }
}
", "vendor/symfony/http-kernel/EventListener/TranslatorListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/TranslatorListener.php");
    }
}
