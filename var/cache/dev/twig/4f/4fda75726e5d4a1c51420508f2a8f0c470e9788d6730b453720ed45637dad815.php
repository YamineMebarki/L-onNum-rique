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

/* vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php */
class __TwigTemplate_be76f93ff74144c1e2c157ffa45a0a7c48117a6c80cff5f7ada3d034ff1e9451 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php"));

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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\HttpCache\\SubRequestHandler;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * Implements the inline rendering strategy where the Request is rendered by the current HTTP kernel.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InlineFragmentRenderer extends RoutableFragmentRenderer
{
    private \$kernel;
    private \$dispatcher;

    public function __construct(HttpKernelInterface \$kernel, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->kernel = \$kernel;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * {@inheritdoc}
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        \$reference = null;
        if (\$uri instanceof ControllerReference) {
            \$reference = \$uri;

            // Remove attributes from the generated URI because if not, the Symfony
            // routing system will use them to populate the Request attributes. We don't
            // want that as we want to preserve objects (so we manually set Request attributes
            // below instead)
            \$attributes = \$reference->attributes;
            \$reference->attributes = [];

            // The request format and locale might have been overridden by the user
            foreach (['_format', '_locale'] as \$key) {
                if (isset(\$attributes[\$key])) {
                    \$reference->attributes[\$key] = \$attributes[\$key];
                }
            }

            \$uri = \$this->generateFragmentUri(\$uri, \$request, false, false);

            \$reference->attributes = array_merge(\$attributes, \$reference->attributes);
        }

        \$subRequest = \$this->createSubRequest(\$uri, \$request);

        // override Request attributes as they can be objects (which are not supported by the generated URI)
        if (null !== \$reference) {
            \$subRequest->attributes->add(\$reference->attributes);
        }

        \$level = ob_get_level();
        try {
            return SubRequestHandler::handle(\$this->kernel, \$subRequest, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\\Exception \$e) {
            // we dispatch the exception event to trigger the logging
            // the response that comes back is ignored
            if (isset(\$options['ignore_errors']) && \$options['ignore_errors'] && \$this->dispatcher) {
                \$event = new ExceptionEvent(\$this->kernel, \$request, HttpKernelInterface::SUB_REQUEST, \$e);

                \$this->dispatcher->dispatch(\$event, KernelEvents::EXCEPTION);
            }

            // let's clean up the output buffers that were created by the sub-request
            Response::closeOutputBuffers(\$level, false);

            if (isset(\$options['alt'])) {
                \$alt = \$options['alt'];
                unset(\$options['alt']);

                return \$this->render(\$alt, \$request, \$options);
            }

            if (!isset(\$options['ignore_errors']) || !\$options['ignore_errors']) {
                throw \$e;
            }

            return new Response();
        }
    }

    protected function createSubRequest(\$uri, Request \$request)
    {
        \$cookies = \$request->cookies->all();
        \$server = \$request->server->all();

        unset(\$server['HTTP_IF_MODIFIED_SINCE']);
        unset(\$server['HTTP_IF_NONE_MATCH']);

        \$subRequest = Request::create(\$uri, 'get', [], \$cookies, [], \$server);
        if (\$request->headers->has('Surrogate-Capability')) {
            \$subRequest->headers->set('Surrogate-Capability', \$request->headers->get('Surrogate-Capability'));
        }

        static \$setSession;

        if (null === \$setSession) {
            \$setSession = \\Closure::bind(static function (\$subRequest, \$request) { \$subRequest->session = \$request->session; }, null, Request::class);
        }
        \$setSession(\$subRequest, \$request);

        if (\$request->get('_format')) {
            \$subRequest->attributes->set('_format', \$request->get('_format'));
        }
        if (\$request->getDefaultLocale() !== \$request->getLocale()) {
            \$subRequest->setLocale(\$request->getLocale());
        }

        return \$subRequest;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'inline';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php";
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

namespace Symfony\\Component\\HttpKernel\\Fragment;

use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\HttpCache\\SubRequestHandler;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * Implements the inline rendering strategy where the Request is rendered by the current HTTP kernel.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InlineFragmentRenderer extends RoutableFragmentRenderer
{
    private \$kernel;
    private \$dispatcher;

    public function __construct(HttpKernelInterface \$kernel, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->kernel = \$kernel;
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * {@inheritdoc}
     *
     * Additional available options:
     *
     *  * alt: an alternative URI to render in case of an error
     */
    public function render(\$uri, Request \$request, array \$options = [])
    {
        \$reference = null;
        if (\$uri instanceof ControllerReference) {
            \$reference = \$uri;

            // Remove attributes from the generated URI because if not, the Symfony
            // routing system will use them to populate the Request attributes. We don't
            // want that as we want to preserve objects (so we manually set Request attributes
            // below instead)
            \$attributes = \$reference->attributes;
            \$reference->attributes = [];

            // The request format and locale might have been overridden by the user
            foreach (['_format', '_locale'] as \$key) {
                if (isset(\$attributes[\$key])) {
                    \$reference->attributes[\$key] = \$attributes[\$key];
                }
            }

            \$uri = \$this->generateFragmentUri(\$uri, \$request, false, false);

            \$reference->attributes = array_merge(\$attributes, \$reference->attributes);
        }

        \$subRequest = \$this->createSubRequest(\$uri, \$request);

        // override Request attributes as they can be objects (which are not supported by the generated URI)
        if (null !== \$reference) {
            \$subRequest->attributes->add(\$reference->attributes);
        }

        \$level = ob_get_level();
        try {
            return SubRequestHandler::handle(\$this->kernel, \$subRequest, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\\Exception \$e) {
            // we dispatch the exception event to trigger the logging
            // the response that comes back is ignored
            if (isset(\$options['ignore_errors']) && \$options['ignore_errors'] && \$this->dispatcher) {
                \$event = new ExceptionEvent(\$this->kernel, \$request, HttpKernelInterface::SUB_REQUEST, \$e);

                \$this->dispatcher->dispatch(\$event, KernelEvents::EXCEPTION);
            }

            // let's clean up the output buffers that were created by the sub-request
            Response::closeOutputBuffers(\$level, false);

            if (isset(\$options['alt'])) {
                \$alt = \$options['alt'];
                unset(\$options['alt']);

                return \$this->render(\$alt, \$request, \$options);
            }

            if (!isset(\$options['ignore_errors']) || !\$options['ignore_errors']) {
                throw \$e;
            }

            return new Response();
        }
    }

    protected function createSubRequest(\$uri, Request \$request)
    {
        \$cookies = \$request->cookies->all();
        \$server = \$request->server->all();

        unset(\$server['HTTP_IF_MODIFIED_SINCE']);
        unset(\$server['HTTP_IF_NONE_MATCH']);

        \$subRequest = Request::create(\$uri, 'get', [], \$cookies, [], \$server);
        if (\$request->headers->has('Surrogate-Capability')) {
            \$subRequest->headers->set('Surrogate-Capability', \$request->headers->get('Surrogate-Capability'));
        }

        static \$setSession;

        if (null === \$setSession) {
            \$setSession = \\Closure::bind(static function (\$subRequest, \$request) { \$subRequest->session = \$request->session; }, null, Request::class);
        }
        \$setSession(\$subRequest, \$request);

        if (\$request->get('_format')) {
            \$subRequest->attributes->set('_format', \$request->get('_format'));
        }
        if (\$request->getDefaultLocale() !== \$request->getLocale()) {
            \$subRequest->setLocale(\$request->getLocale());
        }

        return \$subRequest;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'inline';
    }
}
", "vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php");
    }
}
