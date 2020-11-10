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

/* vendor/symfony/web-profiler-bundle/Controller/RouterController.php */
class __TwigTemplate_7f8ac1a297199ea3f9eb5b3cddfdfe4a47ae9a472e8f50f9620117e43e17f140 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Controller/RouterController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Controller/RouterController.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\RouterInterface;
use Twig\\Environment;

/**
 * RouterController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterController
{
    private \$profiler;
    private \$twig;
    private \$matcher;
    private \$routes;

    public function __construct(Profiler \$profiler = null, Environment \$twig, UrlMatcherInterface \$matcher = null, RouteCollection \$routes = null)
    {
        \$this->profiler = \$profiler;
        \$this->twig = \$twig;
        \$this->matcher = \$matcher;
        \$this->routes = (null === \$routes && \$matcher instanceof RouterInterface) ? \$matcher->getRouteCollection() : \$routes;
    }

    /**
     * Renders the profiler panel for the given token.
     *
     * @param string \$token The profiler token
     *
     * @return Response A Response instance
     *
     * @throws NotFoundHttpException
     */
    public function panelAction(\$token)
    {
        if (null === \$this->profiler) {
            throw new NotFoundHttpException('The profiler must be enabled.');
        }

        \$this->profiler->disable();

        if (null === \$this->matcher || null === \$this->routes) {
            return new Response('The Router is not enabled.', 200, ['Content-Type' => 'text/html']);
        }

        \$profile = \$this->profiler->loadProfile(\$token);

        /** @var RequestDataCollector \$request */
        \$request = \$profile->getCollector('request');

        return new Response(\$this->twig->render('@WebProfiler/Router/panel.html.twig', [
            'request' => \$request,
            'router' => \$profile->getCollector('router'),
            'traces' => \$this->getTraces(\$request, \$profile->getMethod()),
        ]), 200, ['Content-Type' => 'text/html']);
    }

    /**
     * Returns the routing traces associated to the given request.
     */
    private function getTraces(RequestDataCollector \$request, string \$method): array
    {
        \$traceRequest = Request::create(
            \$request->getPathInfo(),
            \$request->getRequestServer(true)->get('REQUEST_METHOD'),
            [],
            \$request->getRequestCookies(true)->all(),
            [],
            \$request->getRequestServer(true)->all()
        );

        \$context = \$this->matcher->getContext();
        \$context->setMethod(\$method);
        \$matcher = new TraceableUrlMatcher(\$this->routes, \$context);

        return \$matcher->getTracesForRequest(\$traceRequest);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Controller/RouterController.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Controller;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;
use Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher;
use Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\RouterInterface;
use Twig\\Environment;

/**
 * RouterController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterController
{
    private \$profiler;
    private \$twig;
    private \$matcher;
    private \$routes;

    public function __construct(Profiler \$profiler = null, Environment \$twig, UrlMatcherInterface \$matcher = null, RouteCollection \$routes = null)
    {
        \$this->profiler = \$profiler;
        \$this->twig = \$twig;
        \$this->matcher = \$matcher;
        \$this->routes = (null === \$routes && \$matcher instanceof RouterInterface) ? \$matcher->getRouteCollection() : \$routes;
    }

    /**
     * Renders the profiler panel for the given token.
     *
     * @param string \$token The profiler token
     *
     * @return Response A Response instance
     *
     * @throws NotFoundHttpException
     */
    public function panelAction(\$token)
    {
        if (null === \$this->profiler) {
            throw new NotFoundHttpException('The profiler must be enabled.');
        }

        \$this->profiler->disable();

        if (null === \$this->matcher || null === \$this->routes) {
            return new Response('The Router is not enabled.', 200, ['Content-Type' => 'text/html']);
        }

        \$profile = \$this->profiler->loadProfile(\$token);

        /** @var RequestDataCollector \$request */
        \$request = \$profile->getCollector('request');

        return new Response(\$this->twig->render('@WebProfiler/Router/panel.html.twig', [
            'request' => \$request,
            'router' => \$profile->getCollector('router'),
            'traces' => \$this->getTraces(\$request, \$profile->getMethod()),
        ]), 200, ['Content-Type' => 'text/html']);
    }

    /**
     * Returns the routing traces associated to the given request.
     */
    private function getTraces(RequestDataCollector \$request, string \$method): array
    {
        \$traceRequest = Request::create(
            \$request->getPathInfo(),
            \$request->getRequestServer(true)->get('REQUEST_METHOD'),
            [],
            \$request->getRequestCookies(true)->all(),
            [],
            \$request->getRequestServer(true)->all()
        );

        \$context = \$this->matcher->getContext();
        \$context->setMethod(\$method);
        \$matcher = new TraceableUrlMatcher(\$this->routes, \$context);

        return \$matcher->getTracesForRequest(\$traceRequest);
    }
}
", "vendor/symfony/web-profiler-bundle/Controller/RouterController.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Controller/RouterController.php");
    }
}
