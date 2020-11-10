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

/* vendor/symfony/framework-bundle/Routing/Router.php */
class __TwigTemplate_e69f519bfcf13f6d7700cb5a769ddb53c14947a800c1ded871648096f638bc65 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Routing/Router.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Routing/Router.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

use Psr\\Container\\ContainerInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource;
use Symfony\\Component\\DependencyInjection\\ContainerInterface as SymfonyContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\Router as BaseRouter;

/**
 * This Router creates the Loader only when the cache is empty.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Router extends BaseRouter implements WarmableInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$collectedParameters = [];
    private \$paramFetcher;

    /**
     * @param ContainerInterface      \$container  A ContainerInterface instance
     * @param mixed                   \$resource   The main resource to load
     * @param array                   \$options    An array of options
     * @param RequestContext          \$context    The context
     * @param ContainerInterface|null \$parameters A ContainerInterface instance allowing to fetch parameters
     */
    public function __construct(ContainerInterface \$container, \$resource, array \$options = [], RequestContext \$context = null, ContainerInterface \$parameters = null, LoggerInterface \$logger = null, string \$defaultLocale = null)
    {
        \$this->container = \$container;
        \$this->resource = \$resource;
        \$this->context = \$context ?: new RequestContext();
        \$this->logger = \$logger;
        \$this->setOptions(\$options);

        if (\$parameters) {
            \$this->paramFetcher = [\$parameters, 'get'];
        } elseif (\$container instanceof SymfonyContainerInterface) {
            \$this->paramFetcher = [\$container, 'getParameter'];
        } else {
            throw new \\LogicException(sprintf('You should either pass a \"%s\" instance or provide the \$parameters argument of the \"%s\" method.', SymfonyContainerInterface::class, __METHOD__));
        }

        \$this->defaultLocale = \$defaultLocale;
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteCollection()
    {
        if (null === \$this->collection) {
            \$this->collection = \$this->container->get('routing.loader')->load(\$this->resource, \$this->options['resource_type']);
            \$this->resolveParameters(\$this->collection);
            \$this->collection->addResource(new ContainerParametersResource(\$this->collectedParameters));
        }

        return \$this->collection;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        \$currentDir = \$this->getOption('cache_dir');

        // force cache generation
        \$this->setOption('cache_dir', \$cacheDir);
        \$this->getMatcher();
        \$this->getGenerator();

        \$this->setOption('cache_dir', \$currentDir);
    }

    /**
     * Replaces placeholders with service container parameter values in:
     * - the route defaults,
     * - the route requirements,
     * - the route path,
     * - the route host,
     * - the route schemes,
     * - the route methods.
     */
    private function resolveParameters(RouteCollection \$collection)
    {
        foreach (\$collection as \$route) {
            foreach (\$route->getDefaults() as \$name => \$value) {
                \$route->setDefault(\$name, \$this->resolve(\$value));
            }

            foreach (\$route->getRequirements() as \$name => \$value) {
                \$route->setRequirement(\$name, \$this->resolve(\$value));
            }

            \$route->setPath(\$this->resolve(\$route->getPath()));
            \$route->setHost(\$this->resolve(\$route->getHost()));

            \$schemes = [];
            foreach (\$route->getSchemes() as \$scheme) {
                \$schemes = array_merge(\$schemes, explode('|', \$this->resolve(\$scheme)));
            }
            \$route->setSchemes(\$schemes);

            \$methods = [];
            foreach (\$route->getMethods() as \$method) {
                \$methods = array_merge(\$methods, explode('|', \$this->resolve(\$method)));
            }
            \$route->setMethods(\$methods);
            \$route->setCondition(\$this->resolve(\$route->getCondition()));
        }
    }

    /**
     * Recursively replaces placeholders with the service container parameters.
     *
     * @param mixed \$value The source which might contain \"%placeholders%\"
     *
     * @return mixed The source with the placeholders replaced by the container
     *               parameters. Arrays are resolved recursively.
     *
     * @throws ParameterNotFoundException When a placeholder does not exist as a container parameter
     * @throws RuntimeException           When a container value is not a string or a numeric value
     */
    private function resolve(\$value)
    {
        if (\\is_array(\$value)) {
            foreach (\$value as \$key => \$val) {
                \$value[\$key] = \$this->resolve(\$val);
            }

            return \$value;
        }

        if (!\\is_string(\$value)) {
            return \$value;
        }

        \$escapedValue = preg_replace_callback('/%%|%([^%\\s]++)%/', function (\$match) use (\$value) {
            // skip %%
            if (!isset(\$match[1])) {
                return '%%';
            }

            if (preg_match('/^env\\((?:\\w++:)*+\\w++\\)\$/', \$match[1])) {
                throw new RuntimeException(sprintf('Using \"%%%s%%\" is not allowed in routing configuration.', \$match[1]));
            }

            \$resolved = (\$this->paramFetcher)(\$match[1]);

            if (\\is_bool(\$resolved)) {
                \$resolved = (string) (int) \$resolved;
            }

            if (\\is_string(\$resolved) || is_numeric(\$resolved)) {
                \$this->collectedParameters[\$match[1]] = \$resolved;

                return (string) \$this->resolve(\$resolved);
            }

            throw new RuntimeException(sprintf('The container parameter \"%s\", used in the route configuration value \"%s\", must be a string or numeric, but it is of type %s.', \$match[1], \$value, \\gettype(\$resolved)));
        }, \$value);

        return str_replace('%%', '%', \$escapedValue);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices()
    {
        return [
            'routing.loader' => LoaderInterface::class,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Routing/Router.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

use Psr\\Container\\ContainerInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResource;
use Symfony\\Component\\DependencyInjection\\ContainerInterface as SymfonyContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Component\\Routing\\Router as BaseRouter;

/**
 * This Router creates the Loader only when the cache is empty.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Router extends BaseRouter implements WarmableInterface, ServiceSubscriberInterface
{
    private \$container;
    private \$collectedParameters = [];
    private \$paramFetcher;

    /**
     * @param ContainerInterface      \$container  A ContainerInterface instance
     * @param mixed                   \$resource   The main resource to load
     * @param array                   \$options    An array of options
     * @param RequestContext          \$context    The context
     * @param ContainerInterface|null \$parameters A ContainerInterface instance allowing to fetch parameters
     */
    public function __construct(ContainerInterface \$container, \$resource, array \$options = [], RequestContext \$context = null, ContainerInterface \$parameters = null, LoggerInterface \$logger = null, string \$defaultLocale = null)
    {
        \$this->container = \$container;
        \$this->resource = \$resource;
        \$this->context = \$context ?: new RequestContext();
        \$this->logger = \$logger;
        \$this->setOptions(\$options);

        if (\$parameters) {
            \$this->paramFetcher = [\$parameters, 'get'];
        } elseif (\$container instanceof SymfonyContainerInterface) {
            \$this->paramFetcher = [\$container, 'getParameter'];
        } else {
            throw new \\LogicException(sprintf('You should either pass a \"%s\" instance or provide the \$parameters argument of the \"%s\" method.', SymfonyContainerInterface::class, __METHOD__));
        }

        \$this->defaultLocale = \$defaultLocale;
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteCollection()
    {
        if (null === \$this->collection) {
            \$this->collection = \$this->container->get('routing.loader')->load(\$this->resource, \$this->options['resource_type']);
            \$this->resolveParameters(\$this->collection);
            \$this->collection->addResource(new ContainerParametersResource(\$this->collectedParameters));
        }

        return \$this->collection;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        \$currentDir = \$this->getOption('cache_dir');

        // force cache generation
        \$this->setOption('cache_dir', \$cacheDir);
        \$this->getMatcher();
        \$this->getGenerator();

        \$this->setOption('cache_dir', \$currentDir);
    }

    /**
     * Replaces placeholders with service container parameter values in:
     * - the route defaults,
     * - the route requirements,
     * - the route path,
     * - the route host,
     * - the route schemes,
     * - the route methods.
     */
    private function resolveParameters(RouteCollection \$collection)
    {
        foreach (\$collection as \$route) {
            foreach (\$route->getDefaults() as \$name => \$value) {
                \$route->setDefault(\$name, \$this->resolve(\$value));
            }

            foreach (\$route->getRequirements() as \$name => \$value) {
                \$route->setRequirement(\$name, \$this->resolve(\$value));
            }

            \$route->setPath(\$this->resolve(\$route->getPath()));
            \$route->setHost(\$this->resolve(\$route->getHost()));

            \$schemes = [];
            foreach (\$route->getSchemes() as \$scheme) {
                \$schemes = array_merge(\$schemes, explode('|', \$this->resolve(\$scheme)));
            }
            \$route->setSchemes(\$schemes);

            \$methods = [];
            foreach (\$route->getMethods() as \$method) {
                \$methods = array_merge(\$methods, explode('|', \$this->resolve(\$method)));
            }
            \$route->setMethods(\$methods);
            \$route->setCondition(\$this->resolve(\$route->getCondition()));
        }
    }

    /**
     * Recursively replaces placeholders with the service container parameters.
     *
     * @param mixed \$value The source which might contain \"%placeholders%\"
     *
     * @return mixed The source with the placeholders replaced by the container
     *               parameters. Arrays are resolved recursively.
     *
     * @throws ParameterNotFoundException When a placeholder does not exist as a container parameter
     * @throws RuntimeException           When a container value is not a string or a numeric value
     */
    private function resolve(\$value)
    {
        if (\\is_array(\$value)) {
            foreach (\$value as \$key => \$val) {
                \$value[\$key] = \$this->resolve(\$val);
            }

            return \$value;
        }

        if (!\\is_string(\$value)) {
            return \$value;
        }

        \$escapedValue = preg_replace_callback('/%%|%([^%\\s]++)%/', function (\$match) use (\$value) {
            // skip %%
            if (!isset(\$match[1])) {
                return '%%';
            }

            if (preg_match('/^env\\((?:\\w++:)*+\\w++\\)\$/', \$match[1])) {
                throw new RuntimeException(sprintf('Using \"%%%s%%\" is not allowed in routing configuration.', \$match[1]));
            }

            \$resolved = (\$this->paramFetcher)(\$match[1]);

            if (\\is_bool(\$resolved)) {
                \$resolved = (string) (int) \$resolved;
            }

            if (\\is_string(\$resolved) || is_numeric(\$resolved)) {
                \$this->collectedParameters[\$match[1]] = \$resolved;

                return (string) \$this->resolve(\$resolved);
            }

            throw new RuntimeException(sprintf('The container parameter \"%s\", used in the route configuration value \"%s\", must be a string or numeric, but it is of type %s.', \$match[1], \$value, \\gettype(\$resolved)));
        }, \$value);

        return str_replace('%%', '%', \$escapedValue);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedServices()
    {
        return [
            'routing.loader' => LoaderInterface::class,
        ];
    }
}
", "vendor/symfony/framework-bundle/Routing/Router.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Routing/Router.php");
    }
}
