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

/* vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php */
class __TwigTemplate_80b4c91219b7b536b4c1214762d4bdaa432a2c860a62b75e095ce3865734b513 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\EventListener;

use Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Twig\\Environment;

/**
 * WebDebugToolbarListener injects the Web Debug Toolbar.
 *
 * The onKernelResponse method must be connected to the kernel.response event.
 *
 * The WDT is only injected on well-formed HTML (with a proper </body> tag).
 * This means that the WDT is never included in sub-requests or ESI requests.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class WebDebugToolbarListener implements EventSubscriberInterface
{
    const DISABLED = 1;
    const ENABLED = 2;

    protected \$twig;
    protected \$urlGenerator;
    protected \$interceptRedirects;
    protected \$mode;
    protected \$excludedAjaxPaths;
    private \$cspHandler;

    public function __construct(Environment \$twig, bool \$interceptRedirects = false, int \$mode = self::ENABLED, UrlGeneratorInterface \$urlGenerator = null, string \$excludedAjaxPaths = '^/bundles|^/_wdt', ContentSecurityPolicyHandler \$cspHandler = null)
    {
        \$this->twig = \$twig;
        \$this->urlGenerator = \$urlGenerator;
        \$this->interceptRedirects = \$interceptRedirects;
        \$this->mode = \$mode;
        \$this->excludedAjaxPaths = \$excludedAjaxPaths;
        \$this->cspHandler = \$cspHandler;
    }

    public function isEnabled()
    {
        return self::DISABLED !== \$this->mode;
    }

    public function onKernelResponse(FilterResponseEvent \$event)
    {
        \$response = \$event->getResponse();
        \$request = \$event->getRequest();

        if (\$response->headers->has('X-Debug-Token') && null !== \$this->urlGenerator) {
            try {
                \$response->headers->set(
                    'X-Debug-Token-Link',
                    \$this->urlGenerator->generate('_profiler', ['token' => \$response->headers->get('X-Debug-Token')], UrlGeneratorInterface::ABSOLUTE_URL)
                );
            } catch (\\Exception \$e) {
                \$response->headers->set('X-Debug-Error', \\get_class(\$e).': '.preg_replace('/\\s+/', ' ', \$e->getMessage()));
            }
        }

        if (!\$event->isMasterRequest()) {
            return;
        }

        \$nonces = \$this->cspHandler ? \$this->cspHandler->updateResponseHeaders(\$request, \$response) : [];

        // do not capture redirects or modify XML HTTP Requests
        if (\$request->isXmlHttpRequest()) {
            return;
        }

        if (\$response->headers->has('X-Debug-Token') && \$response->isRedirect() && \$this->interceptRedirects && 'html' === \$request->getRequestFormat()) {
            \$session = \$request->getSession();
            if (null !== \$session && \$session->isStarted() && \$session->getFlashBag() instanceof AutoExpireFlashBag) {
                // keep current flashes for one more request if using AutoExpireFlashBag
                \$session->getFlashBag()->setAll(\$session->getFlashBag()->peekAll());
            }

            \$response->setContent(\$this->twig->render('@WebProfiler/Profiler/toolbar_redirect.html.twig', ['location' => \$response->headers->get('Location')]));
            \$response->setStatusCode(200);
            \$response->headers->remove('Location');
        }

        if (self::DISABLED === \$this->mode
            || !\$response->headers->has('X-Debug-Token')
            || \$response->isRedirection()
            || (\$response->headers->has('Content-Type') && false === strpos(\$response->headers->get('Content-Type'), 'html'))
            || 'html' !== \$request->getRequestFormat()
            || false !== stripos(\$response->headers->get('Content-Disposition'), 'attachment;')
        ) {
            return;
        }

        \$this->injectToolbar(\$response, \$request, \$nonces);
    }

    /**
     * Injects the web debug toolbar into the given Response.
     */
    protected function injectToolbar(Response \$response, Request \$request, array \$nonces)
    {
        \$content = \$response->getContent();
        \$pos = strripos(\$content, '</body>');

        if (false !== \$pos) {
            \$toolbar = \"\\n\".str_replace(\"\\n\", '', \$this->twig->render(
                '@WebProfiler/Profiler/toolbar_js.html.twig',
                [
                    'excluded_ajax_paths' => \$this->excludedAjaxPaths,
                    'token' => \$response->headers->get('X-Debug-Token'),
                    'request' => \$request,
                    'csp_script_nonce' => isset(\$nonces['csp_script_nonce']) ? \$nonces['csp_script_nonce'] : null,
                    'csp_style_nonce' => isset(\$nonces['csp_style_nonce']) ? \$nonces['csp_style_nonce'] : null,
                ]
            )).\"\\n\";
            \$content = substr(\$content, 0, \$pos).\$toolbar.substr(\$content, \$pos);
            \$response->setContent(\$content);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -128],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\EventListener;

use Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag;
use Symfony\\Component\\HttpKernel\\Event\\FilterResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Twig\\Environment;

/**
 * WebDebugToolbarListener injects the Web Debug Toolbar.
 *
 * The onKernelResponse method must be connected to the kernel.response event.
 *
 * The WDT is only injected on well-formed HTML (with a proper </body> tag).
 * This means that the WDT is never included in sub-requests or ESI requests.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class WebDebugToolbarListener implements EventSubscriberInterface
{
    const DISABLED = 1;
    const ENABLED = 2;

    protected \$twig;
    protected \$urlGenerator;
    protected \$interceptRedirects;
    protected \$mode;
    protected \$excludedAjaxPaths;
    private \$cspHandler;

    public function __construct(Environment \$twig, bool \$interceptRedirects = false, int \$mode = self::ENABLED, UrlGeneratorInterface \$urlGenerator = null, string \$excludedAjaxPaths = '^/bundles|^/_wdt', ContentSecurityPolicyHandler \$cspHandler = null)
    {
        \$this->twig = \$twig;
        \$this->urlGenerator = \$urlGenerator;
        \$this->interceptRedirects = \$interceptRedirects;
        \$this->mode = \$mode;
        \$this->excludedAjaxPaths = \$excludedAjaxPaths;
        \$this->cspHandler = \$cspHandler;
    }

    public function isEnabled()
    {
        return self::DISABLED !== \$this->mode;
    }

    public function onKernelResponse(FilterResponseEvent \$event)
    {
        \$response = \$event->getResponse();
        \$request = \$event->getRequest();

        if (\$response->headers->has('X-Debug-Token') && null !== \$this->urlGenerator) {
            try {
                \$response->headers->set(
                    'X-Debug-Token-Link',
                    \$this->urlGenerator->generate('_profiler', ['token' => \$response->headers->get('X-Debug-Token')], UrlGeneratorInterface::ABSOLUTE_URL)
                );
            } catch (\\Exception \$e) {
                \$response->headers->set('X-Debug-Error', \\get_class(\$e).': '.preg_replace('/\\s+/', ' ', \$e->getMessage()));
            }
        }

        if (!\$event->isMasterRequest()) {
            return;
        }

        \$nonces = \$this->cspHandler ? \$this->cspHandler->updateResponseHeaders(\$request, \$response) : [];

        // do not capture redirects or modify XML HTTP Requests
        if (\$request->isXmlHttpRequest()) {
            return;
        }

        if (\$response->headers->has('X-Debug-Token') && \$response->isRedirect() && \$this->interceptRedirects && 'html' === \$request->getRequestFormat()) {
            \$session = \$request->getSession();
            if (null !== \$session && \$session->isStarted() && \$session->getFlashBag() instanceof AutoExpireFlashBag) {
                // keep current flashes for one more request if using AutoExpireFlashBag
                \$session->getFlashBag()->setAll(\$session->getFlashBag()->peekAll());
            }

            \$response->setContent(\$this->twig->render('@WebProfiler/Profiler/toolbar_redirect.html.twig', ['location' => \$response->headers->get('Location')]));
            \$response->setStatusCode(200);
            \$response->headers->remove('Location');
        }

        if (self::DISABLED === \$this->mode
            || !\$response->headers->has('X-Debug-Token')
            || \$response->isRedirection()
            || (\$response->headers->has('Content-Type') && false === strpos(\$response->headers->get('Content-Type'), 'html'))
            || 'html' !== \$request->getRequestFormat()
            || false !== stripos(\$response->headers->get('Content-Disposition'), 'attachment;')
        ) {
            return;
        }

        \$this->injectToolbar(\$response, \$request, \$nonces);
    }

    /**
     * Injects the web debug toolbar into the given Response.
     */
    protected function injectToolbar(Response \$response, Request \$request, array \$nonces)
    {
        \$content = \$response->getContent();
        \$pos = strripos(\$content, '</body>');

        if (false !== \$pos) {
            \$toolbar = \"\\n\".str_replace(\"\\n\", '', \$this->twig->render(
                '@WebProfiler/Profiler/toolbar_js.html.twig',
                [
                    'excluded_ajax_paths' => \$this->excludedAjaxPaths,
                    'token' => \$response->headers->get('X-Debug-Token'),
                    'request' => \$request,
                    'csp_script_nonce' => isset(\$nonces['csp_script_nonce']) ? \$nonces['csp_script_nonce'] : null,
                    'csp_style_nonce' => isset(\$nonces['csp_style_nonce']) ? \$nonces['csp_style_nonce'] : null,
                ]
            )).\"\\n\";
            \$content = substr(\$content, 0, \$pos).\$toolbar.substr(\$content, \$pos);
            \$response->setContent(\$content);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -128],
        ];
    }
}
", "vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php");
    }
}
