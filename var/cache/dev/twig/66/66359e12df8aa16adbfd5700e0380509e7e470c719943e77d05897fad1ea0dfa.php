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

/* vendor/symfony/routing/Matcher/UrlMatcher.php */
class __TwigTemplate_c347c41d0e32f405721f57c55883a7fc61fb1ef011e6c22c16ce7f0329c5ca58 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/UrlMatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/UrlMatcher.php"));

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

namespace Symfony\\Component\\Routing\\Matcher;

use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * UrlMatcher matches URL based on a set of routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UrlMatcher implements UrlMatcherInterface, RequestMatcherInterface
{
    const REQUIREMENT_MATCH = 0;
    const REQUIREMENT_MISMATCH = 1;
    const ROUTE_MATCH = 2;

    /** @var RequestContext */
    protected \$context;

    /**
     * Collects HTTP methods that would be allowed for the request.
     */
    protected \$allow = [];

    /**
     * Collects URI schemes that would be allowed for the request.
     *
     * @internal
     */
    protected \$allowSchemes = [];

    protected \$routes;
    protected \$request;
    protected \$expressionLanguage;

    /**
     * @var ExpressionFunctionProviderInterface[]
     */
    protected \$expressionLanguageProviders = [];

    public function __construct(RouteCollection \$routes, RequestContext \$context)
    {
        \$this->routes = \$routes;
        \$this->context = \$context;
    }

    /**
     * {@inheritdoc}
     */
    public function setContext(RequestContext \$context)
    {
        \$this->context = \$context;
    }

    /**
     * {@inheritdoc}
     */
    public function getContext()
    {
        return \$this->context;
    }

    /**
     * {@inheritdoc}
     */
    public function match(\$pathinfo)
    {
        \$this->allow = \$this->allowSchemes = [];

        if (\$ret = \$this->matchCollection(rawurldecode(\$pathinfo) ?: '/', \$this->routes)) {
            return \$ret;
        }

        if ('/' === \$pathinfo && !\$this->allow && !\$this->allowSchemes) {
            throw new NoConfigurationException();
        }

        throw 0 < \\count(\$this->allow)
            ? new MethodNotAllowedException(array_unique(\$this->allow))
            : new ResourceNotFoundException(sprintf('No routes found for \"%s\".', \$pathinfo));
    }

    /**
     * {@inheritdoc}
     */
    public function matchRequest(Request \$request)
    {
        \$this->request = \$request;

        \$ret = \$this->match(\$request->getPathInfo());

        \$this->request = null;

        return \$ret;
    }

    public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface \$provider)
    {
        \$this->expressionLanguageProviders[] = \$provider;
    }

    /**
     * Tries to match a URL with a set of routes.
     *
     * @param string          \$pathinfo The path info to be parsed
     * @param RouteCollection \$routes   The set of routes
     *
     * @return array An array of parameters
     *
     * @throws NoConfigurationException  If no routing configuration could be found
     * @throws ResourceNotFoundException If the resource could not be found
     * @throws MethodNotAllowedException If the resource was found but the request method is not allowed
     */
    protected function matchCollection(\$pathinfo, RouteCollection \$routes)
    {
        // HEAD and GET are equivalent as per RFC
        if ('HEAD' === \$method = \$this->context->getMethod()) {
            \$method = 'GET';
        }
        \$supportsTrailingSlash = 'GET' === \$method && \$this instanceof RedirectableUrlMatcherInterface;
        \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/';

        foreach (\$routes as \$name => \$route) {
            \$compiledRoute = \$route->compile();
            \$staticPrefix = rtrim(\$compiledRoute->getStaticPrefix(), '/');
            \$requiredMethods = \$route->getMethods();

            // check the static prefix of the URL first. Only use the more expensive preg_match when it matches
            if ('' !== \$staticPrefix && 0 !== strpos(\$trimmedPathinfo, \$staticPrefix)) {
                continue;
            }
            \$regex = \$compiledRoute->getRegex();

            \$pos = strrpos(\$regex, '\$');
            \$hasTrailingSlash = '/' === \$regex[\$pos - 1];
            \$regex = substr_replace(\$regex, '/?\$', \$pos - \$hasTrailingSlash, 1 + \$hasTrailingSlash);

            if (!preg_match(\$regex, \$pathinfo, \$matches)) {
                continue;
            }

            \$hasTrailingVar = \$trimmedPathinfo !== \$pathinfo && preg_match('#\\{\\w+\\}/?\$#', \$route->getPath());

            if (\$hasTrailingVar && (\$hasTrailingSlash || (null === \$m = \$matches[\\count(\$compiledRoute->getPathVariables())] ?? null) || '/' !== (\$m[-1] ?? '/')) && preg_match(\$regex, \$trimmedPathinfo, \$m)) {
                if (\$hasTrailingSlash) {
                    \$matches = \$m;
                } else {
                    \$hasTrailingVar = false;
                }
            }

            \$hostMatches = [];
            if (\$compiledRoute->getHostRegex() && !preg_match(\$compiledRoute->getHostRegex(), \$this->context->getHost(), \$hostMatches)) {
                continue;
            }

            \$status = \$this->handleRouteRequirements(\$pathinfo, \$name, \$route);

            if (self::REQUIREMENT_MISMATCH === \$status[0]) {
                continue;
            }

            if ('/' !== \$pathinfo && !\$hasTrailingVar && \$hasTrailingSlash === (\$trimmedPathinfo === \$pathinfo)) {
                if (\$supportsTrailingSlash && (!\$requiredMethods || \\in_array('GET', \$requiredMethods))) {
                    return \$this->allow = \$this->allowSchemes = [];
                }
                continue;
            }

            if (\$route->getSchemes() && !\$route->hasScheme(\$this->context->getScheme())) {
                \$this->allowSchemes = array_merge(\$this->allowSchemes, \$route->getSchemes());
                continue;
            }

            if (\$requiredMethods && !\\in_array(\$method, \$requiredMethods)) {
                \$this->allow = array_merge(\$this->allow, \$requiredMethods);
                continue;
            }

            return \$this->getAttributes(\$route, \$name, array_replace(\$matches, \$hostMatches, isset(\$status[1]) ? \$status[1] : []));
        }

        return [];
    }

    /**
     * Returns an array of values to use as request attributes.
     *
     * As this method requires the Route object, it is not available
     * in matchers that do not have access to the matched Route instance
     * (like the PHP and Apache matcher dumpers).
     *
     * @param Route  \$route      The route we are matching against
     * @param string \$name       The name of the route
     * @param array  \$attributes An array of attributes from the matcher
     *
     * @return array An array of parameters
     */
    protected function getAttributes(Route \$route, \$name, array \$attributes)
    {
        \$defaults = \$route->getDefaults();
        if (isset(\$defaults['_canonical_route'])) {
            \$name = \$defaults['_canonical_route'];
            unset(\$defaults['_canonical_route']);
        }
        \$attributes['_route'] = \$name;

        return \$this->mergeDefaults(\$attributes, \$defaults);
    }

    /**
     * Handles specific route requirements.
     *
     * @param string \$pathinfo The path
     * @param string \$name     The route name
     * @param Route  \$route    The route
     *
     * @return array The first element represents the status, the second contains additional information
     */
    protected function handleRouteRequirements(\$pathinfo, \$name, Route \$route)
    {
        // expression condition
        if (\$route->getCondition() && !\$this->getExpressionLanguage()->evaluate(\$route->getCondition(), ['context' => \$this->context, 'request' => \$this->request ?: \$this->createRequest(\$pathinfo)])) {
            return [self::REQUIREMENT_MISMATCH, null];
        }

        return [self::REQUIREMENT_MATCH, null];
    }

    /**
     * Get merged default parameters.
     *
     * @param array \$params   The parameters
     * @param array \$defaults The defaults
     *
     * @return array Merged default parameters
     */
    protected function mergeDefaults(\$params, \$defaults)
    {
        foreach (\$params as \$key => \$value) {
            if (!\\is_int(\$key) && null !== \$value) {
                \$defaults[\$key] = \$value;
            }
        }

        return \$defaults;
    }

    protected function getExpressionLanguage()
    {
        if (null === \$this->expressionLanguage) {
            if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) {
                throw new \\LogicException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
            }
            \$this->expressionLanguage = new ExpressionLanguage(null, \$this->expressionLanguageProviders);
        }

        return \$this->expressionLanguage;
    }

    /**
     * @internal
     */
    protected function createRequest(\$pathinfo)
    {
        if (!class_exists('Symfony\\Component\\HttpFoundation\\Request')) {
            return null;
        }

        return Request::create(\$this->context->getScheme().'://'.\$this->context->getHost().\$this->context->getBaseUrl().\$pathinfo, \$this->context->getMethod(), \$this->context->getParameters(), [], [], [
            'SCRIPT_FILENAME' => \$this->context->getBaseUrl(),
            'SCRIPT_NAME' => \$this->context->getBaseUrl(),
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Matcher/UrlMatcher.php";
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

namespace Symfony\\Component\\Routing\\Matcher;

use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * UrlMatcher matches URL based on a set of routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UrlMatcher implements UrlMatcherInterface, RequestMatcherInterface
{
    const REQUIREMENT_MATCH = 0;
    const REQUIREMENT_MISMATCH = 1;
    const ROUTE_MATCH = 2;

    /** @var RequestContext */
    protected \$context;

    /**
     * Collects HTTP methods that would be allowed for the request.
     */
    protected \$allow = [];

    /**
     * Collects URI schemes that would be allowed for the request.
     *
     * @internal
     */
    protected \$allowSchemes = [];

    protected \$routes;
    protected \$request;
    protected \$expressionLanguage;

    /**
     * @var ExpressionFunctionProviderInterface[]
     */
    protected \$expressionLanguageProviders = [];

    public function __construct(RouteCollection \$routes, RequestContext \$context)
    {
        \$this->routes = \$routes;
        \$this->context = \$context;
    }

    /**
     * {@inheritdoc}
     */
    public function setContext(RequestContext \$context)
    {
        \$this->context = \$context;
    }

    /**
     * {@inheritdoc}
     */
    public function getContext()
    {
        return \$this->context;
    }

    /**
     * {@inheritdoc}
     */
    public function match(\$pathinfo)
    {
        \$this->allow = \$this->allowSchemes = [];

        if (\$ret = \$this->matchCollection(rawurldecode(\$pathinfo) ?: '/', \$this->routes)) {
            return \$ret;
        }

        if ('/' === \$pathinfo && !\$this->allow && !\$this->allowSchemes) {
            throw new NoConfigurationException();
        }

        throw 0 < \\count(\$this->allow)
            ? new MethodNotAllowedException(array_unique(\$this->allow))
            : new ResourceNotFoundException(sprintf('No routes found for \"%s\".', \$pathinfo));
    }

    /**
     * {@inheritdoc}
     */
    public function matchRequest(Request \$request)
    {
        \$this->request = \$request;

        \$ret = \$this->match(\$request->getPathInfo());

        \$this->request = null;

        return \$ret;
    }

    public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface \$provider)
    {
        \$this->expressionLanguageProviders[] = \$provider;
    }

    /**
     * Tries to match a URL with a set of routes.
     *
     * @param string          \$pathinfo The path info to be parsed
     * @param RouteCollection \$routes   The set of routes
     *
     * @return array An array of parameters
     *
     * @throws NoConfigurationException  If no routing configuration could be found
     * @throws ResourceNotFoundException If the resource could not be found
     * @throws MethodNotAllowedException If the resource was found but the request method is not allowed
     */
    protected function matchCollection(\$pathinfo, RouteCollection \$routes)
    {
        // HEAD and GET are equivalent as per RFC
        if ('HEAD' === \$method = \$this->context->getMethod()) {
            \$method = 'GET';
        }
        \$supportsTrailingSlash = 'GET' === \$method && \$this instanceof RedirectableUrlMatcherInterface;
        \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/';

        foreach (\$routes as \$name => \$route) {
            \$compiledRoute = \$route->compile();
            \$staticPrefix = rtrim(\$compiledRoute->getStaticPrefix(), '/');
            \$requiredMethods = \$route->getMethods();

            // check the static prefix of the URL first. Only use the more expensive preg_match when it matches
            if ('' !== \$staticPrefix && 0 !== strpos(\$trimmedPathinfo, \$staticPrefix)) {
                continue;
            }
            \$regex = \$compiledRoute->getRegex();

            \$pos = strrpos(\$regex, '\$');
            \$hasTrailingSlash = '/' === \$regex[\$pos - 1];
            \$regex = substr_replace(\$regex, '/?\$', \$pos - \$hasTrailingSlash, 1 + \$hasTrailingSlash);

            if (!preg_match(\$regex, \$pathinfo, \$matches)) {
                continue;
            }

            \$hasTrailingVar = \$trimmedPathinfo !== \$pathinfo && preg_match('#\\{\\w+\\}/?\$#', \$route->getPath());

            if (\$hasTrailingVar && (\$hasTrailingSlash || (null === \$m = \$matches[\\count(\$compiledRoute->getPathVariables())] ?? null) || '/' !== (\$m[-1] ?? '/')) && preg_match(\$regex, \$trimmedPathinfo, \$m)) {
                if (\$hasTrailingSlash) {
                    \$matches = \$m;
                } else {
                    \$hasTrailingVar = false;
                }
            }

            \$hostMatches = [];
            if (\$compiledRoute->getHostRegex() && !preg_match(\$compiledRoute->getHostRegex(), \$this->context->getHost(), \$hostMatches)) {
                continue;
            }

            \$status = \$this->handleRouteRequirements(\$pathinfo, \$name, \$route);

            if (self::REQUIREMENT_MISMATCH === \$status[0]) {
                continue;
            }

            if ('/' !== \$pathinfo && !\$hasTrailingVar && \$hasTrailingSlash === (\$trimmedPathinfo === \$pathinfo)) {
                if (\$supportsTrailingSlash && (!\$requiredMethods || \\in_array('GET', \$requiredMethods))) {
                    return \$this->allow = \$this->allowSchemes = [];
                }
                continue;
            }

            if (\$route->getSchemes() && !\$route->hasScheme(\$this->context->getScheme())) {
                \$this->allowSchemes = array_merge(\$this->allowSchemes, \$route->getSchemes());
                continue;
            }

            if (\$requiredMethods && !\\in_array(\$method, \$requiredMethods)) {
                \$this->allow = array_merge(\$this->allow, \$requiredMethods);
                continue;
            }

            return \$this->getAttributes(\$route, \$name, array_replace(\$matches, \$hostMatches, isset(\$status[1]) ? \$status[1] : []));
        }

        return [];
    }

    /**
     * Returns an array of values to use as request attributes.
     *
     * As this method requires the Route object, it is not available
     * in matchers that do not have access to the matched Route instance
     * (like the PHP and Apache matcher dumpers).
     *
     * @param Route  \$route      The route we are matching against
     * @param string \$name       The name of the route
     * @param array  \$attributes An array of attributes from the matcher
     *
     * @return array An array of parameters
     */
    protected function getAttributes(Route \$route, \$name, array \$attributes)
    {
        \$defaults = \$route->getDefaults();
        if (isset(\$defaults['_canonical_route'])) {
            \$name = \$defaults['_canonical_route'];
            unset(\$defaults['_canonical_route']);
        }
        \$attributes['_route'] = \$name;

        return \$this->mergeDefaults(\$attributes, \$defaults);
    }

    /**
     * Handles specific route requirements.
     *
     * @param string \$pathinfo The path
     * @param string \$name     The route name
     * @param Route  \$route    The route
     *
     * @return array The first element represents the status, the second contains additional information
     */
    protected function handleRouteRequirements(\$pathinfo, \$name, Route \$route)
    {
        // expression condition
        if (\$route->getCondition() && !\$this->getExpressionLanguage()->evaluate(\$route->getCondition(), ['context' => \$this->context, 'request' => \$this->request ?: \$this->createRequest(\$pathinfo)])) {
            return [self::REQUIREMENT_MISMATCH, null];
        }

        return [self::REQUIREMENT_MATCH, null];
    }

    /**
     * Get merged default parameters.
     *
     * @param array \$params   The parameters
     * @param array \$defaults The defaults
     *
     * @return array Merged default parameters
     */
    protected function mergeDefaults(\$params, \$defaults)
    {
        foreach (\$params as \$key => \$value) {
            if (!\\is_int(\$key) && null !== \$value) {
                \$defaults[\$key] = \$value;
            }
        }

        return \$defaults;
    }

    protected function getExpressionLanguage()
    {
        if (null === \$this->expressionLanguage) {
            if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) {
                throw new \\LogicException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
            }
            \$this->expressionLanguage = new ExpressionLanguage(null, \$this->expressionLanguageProviders);
        }

        return \$this->expressionLanguage;
    }

    /**
     * @internal
     */
    protected function createRequest(\$pathinfo)
    {
        if (!class_exists('Symfony\\Component\\HttpFoundation\\Request')) {
            return null;
        }

        return Request::create(\$this->context->getScheme().'://'.\$this->context->getHost().\$this->context->getBaseUrl().\$pathinfo, \$this->context->getMethod(), \$this->context->getParameters(), [], [], [
            'SCRIPT_FILENAME' => \$this->context->getBaseUrl(),
            'SCRIPT_NAME' => \$this->context->getBaseUrl(),
        ]);
    }
}
", "vendor/symfony/routing/Matcher/UrlMatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Matcher/UrlMatcher.php");
    }
}
