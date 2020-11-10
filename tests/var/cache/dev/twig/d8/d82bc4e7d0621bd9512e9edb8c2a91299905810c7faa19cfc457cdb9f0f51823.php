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

/* vendor/symfony/http-kernel/EventListener/FragmentListener.php */
class __TwigTemplate_724ea4d31bed7b851234468b266007b09b2147ab69679fc37faae5a67f62f818 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/FragmentListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/FragmentListener.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\UriSigner;

/**
 * Handles content fragments represented by special URIs.
 *
 * All URL paths starting with /_fragment are handled as
 * content fragments by this listener.
 *
 * Throws an AccessDeniedHttpException exception if the request
 * is not signed or if it is not an internal sub-request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class FragmentListener implements EventSubscriberInterface
{
    private \$signer;
    private \$fragmentPath;

    /**
     * @param UriSigner \$signer       A UriSigner instance
     * @param string    \$fragmentPath The path that triggers this listener
     */
    public function __construct(UriSigner \$signer, string \$fragmentPath = '/_fragment')
    {
        \$this->signer = \$signer;
        \$this->fragmentPath = \$fragmentPath;
    }

    /**
     * Fixes request attributes when the path is '/_fragment'.
     *
     * @throws AccessDeniedHttpException if the request does not come from a trusted IP
     */
    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();

        if (\$this->fragmentPath !== rawurldecode(\$request->getPathInfo())) {
            return;
        }

        if (\$request->attributes->has('_controller')) {
            // Is a sub-request: no need to parse _path but it should still be removed from query parameters as below.
            \$request->query->remove('_path');

            return;
        }

        if (\$event->isMasterRequest()) {
            \$this->validateRequest(\$request);
        }

        parse_str(\$request->query->get('_path', ''), \$attributes);
        \$request->attributes->add(\$attributes);
        \$request->attributes->set('_route_params', array_replace(\$request->attributes->get('_route_params', []), \$attributes));
        \$request->query->remove('_path');
    }

    protected function validateRequest(Request \$request)
    {
        // is the Request safe?
        if (!\$request->isMethodSafe(false)) {
            throw new AccessDeniedHttpException();
        }

        // is the Request signed?
        // we cannot use \$request->getUri() here as we want to work with the original URI (no query string reordering)
        if (\$this->signer->check(\$request->getSchemeAndHttpHost().\$request->getBaseUrl().\$request->getPathInfo().(null !== (\$qs = \$request->server->get('QUERY_STRING')) ? '?'.\$qs : ''))) {
            return;
        }

        throw new AccessDeniedHttpException();
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 48]],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/FragmentListener.php";
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
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\UriSigner;

/**
 * Handles content fragments represented by special URIs.
 *
 * All URL paths starting with /_fragment are handled as
 * content fragments by this listener.
 *
 * Throws an AccessDeniedHttpException exception if the request
 * is not signed or if it is not an internal sub-request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class FragmentListener implements EventSubscriberInterface
{
    private \$signer;
    private \$fragmentPath;

    /**
     * @param UriSigner \$signer       A UriSigner instance
     * @param string    \$fragmentPath The path that triggers this listener
     */
    public function __construct(UriSigner \$signer, string \$fragmentPath = '/_fragment')
    {
        \$this->signer = \$signer;
        \$this->fragmentPath = \$fragmentPath;
    }

    /**
     * Fixes request attributes when the path is '/_fragment'.
     *
     * @throws AccessDeniedHttpException if the request does not come from a trusted IP
     */
    public function onKernelRequest(GetResponseEvent \$event)
    {
        \$request = \$event->getRequest();

        if (\$this->fragmentPath !== rawurldecode(\$request->getPathInfo())) {
            return;
        }

        if (\$request->attributes->has('_controller')) {
            // Is a sub-request: no need to parse _path but it should still be removed from query parameters as below.
            \$request->query->remove('_path');

            return;
        }

        if (\$event->isMasterRequest()) {
            \$this->validateRequest(\$request);
        }

        parse_str(\$request->query->get('_path', ''), \$attributes);
        \$request->attributes->add(\$attributes);
        \$request->attributes->set('_route_params', array_replace(\$request->attributes->get('_route_params', []), \$attributes));
        \$request->query->remove('_path');
    }

    protected function validateRequest(Request \$request)
    {
        // is the Request safe?
        if (!\$request->isMethodSafe(false)) {
            throw new AccessDeniedHttpException();
        }

        // is the Request signed?
        // we cannot use \$request->getUri() here as we want to work with the original URI (no query string reordering)
        if (\$this->signer->check(\$request->getSchemeAndHttpHost().\$request->getBaseUrl().\$request->getPathInfo().(null !== (\$qs = \$request->server->get('QUERY_STRING')) ? '?'.\$qs : ''))) {
            return;
        }

        throw new AccessDeniedHttpException();
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 48]],
        ];
    }
}
", "vendor/symfony/http-kernel/EventListener/FragmentListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/FragmentListener.php");
    }
}
