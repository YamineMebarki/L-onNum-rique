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

/* vendor/symfony/routing/RouteCollection.php */
class __TwigTemplate_9bbd86de1939448f95514a31b48f867c12adb1659650d1cec2ab021f845c3269 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/RouteCollection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/RouteCollection.php"));

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

namespace Symfony\\Component\\Routing;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * A RouteCollection represents a set of Route instances.
 *
 * When adding a route at the end of the collection, an existing route
 * with the same name is removed first. So there can only be one route
 * with a given name.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class RouteCollection implements \\IteratorAggregate, \\Countable
{
    /**
     * @var Route[]
     */
    private \$routes = [];

    /**
     * @var array
     */
    private \$resources = [];

    public function __clone()
    {
        foreach (\$this->routes as \$name => \$route) {
            \$this->routes[\$name] = clone \$route;
        }
    }

    /**
     * Gets the current RouteCollection as an Iterator that includes all routes.
     *
     * It implements \\IteratorAggregate.
     *
     * @see all()
     *
     * @return \\ArrayIterator|Route[] An \\ArrayIterator object for iterating over routes
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->routes);
    }

    /**
     * Gets the number of Routes in this collection.
     *
     * @return int The number of routes
     */
    public function count()
    {
        return \\count(\$this->routes);
    }

    /**
     * Adds a route.
     *
     * @param string \$name  The route name
     * @param Route  \$route A Route instance
     */
    public function add(\$name, Route \$route)
    {
        unset(\$this->routes[\$name]);

        \$this->routes[\$name] = \$route;
    }

    /**
     * Returns all routes in this collection.
     *
     * @return Route[] An array of routes
     */
    public function all()
    {
        return \$this->routes;
    }

    /**
     * Gets a route by name.
     *
     * @param string \$name The route name
     *
     * @return Route|null A Route instance or null when not found
     */
    public function get(\$name)
    {
        return isset(\$this->routes[\$name]) ? \$this->routes[\$name] : null;
    }

    /**
     * Removes a route or an array of routes by name from the collection.
     *
     * @param string|string[] \$name The route name or an array of route names
     */
    public function remove(\$name)
    {
        foreach ((array) \$name as \$n) {
            unset(\$this->routes[\$n]);
        }
    }

    /**
     * Adds a route collection at the end of the current set by appending all
     * routes of the added collection.
     */
    public function addCollection(self \$collection)
    {
        // we need to remove all routes with the same names first because just replacing them
        // would not place the new route at the end of the merged array
        foreach (\$collection->all() as \$name => \$route) {
            unset(\$this->routes[\$name]);
            \$this->routes[\$name] = \$route;
        }

        foreach (\$collection->getResources() as \$resource) {
            \$this->addResource(\$resource);
        }
    }

    /**
     * Adds a prefix to the path of all child routes.
     *
     * @param string \$prefix       An optional prefix to add before each pattern of the route collection
     * @param array  \$defaults     An array of default values
     * @param array  \$requirements An array of requirements
     */
    public function addPrefix(\$prefix, array \$defaults = [], array \$requirements = [])
    {
        \$prefix = trim(trim(\$prefix), '/');

        if ('' === \$prefix) {
            return;
        }

        foreach (\$this->routes as \$route) {
            \$route->setPath('/'.\$prefix.\$route->getPath());
            \$route->addDefaults(\$defaults);
            \$route->addRequirements(\$requirements);
        }
    }

    /**
     * Adds a prefix to the name of all the routes within in the collection.
     */
    public function addNamePrefix(string \$prefix)
    {
        \$prefixedRoutes = [];

        foreach (\$this->routes as \$name => \$route) {
            \$prefixedRoutes[\$prefix.\$name] = \$route;
            if (null !== \$name = \$route->getDefault('_canonical_route')) {
                \$route->setDefault('_canonical_route', \$prefix.\$name);
            }
        }

        \$this->routes = \$prefixedRoutes;
    }

    /**
     * Sets the host pattern on all routes.
     *
     * @param string \$pattern      The pattern
     * @param array  \$defaults     An array of default values
     * @param array  \$requirements An array of requirements
     */
    public function setHost(\$pattern, array \$defaults = [], array \$requirements = [])
    {
        foreach (\$this->routes as \$route) {
            \$route->setHost(\$pattern);
            \$route->addDefaults(\$defaults);
            \$route->addRequirements(\$requirements);
        }
    }

    /**
     * Sets a condition on all routes.
     *
     * Existing conditions will be overridden.
     *
     * @param string \$condition The condition
     */
    public function setCondition(\$condition)
    {
        foreach (\$this->routes as \$route) {
            \$route->setCondition(\$condition);
        }
    }

    /**
     * Adds defaults to all routes.
     *
     * An existing default value under the same name in a route will be overridden.
     *
     * @param array \$defaults An array of default values
     */
    public function addDefaults(array \$defaults)
    {
        if (\$defaults) {
            foreach (\$this->routes as \$route) {
                \$route->addDefaults(\$defaults);
            }
        }
    }

    /**
     * Adds requirements to all routes.
     *
     * An existing requirement under the same name in a route will be overridden.
     *
     * @param array \$requirements An array of requirements
     */
    public function addRequirements(array \$requirements)
    {
        if (\$requirements) {
            foreach (\$this->routes as \$route) {
                \$route->addRequirements(\$requirements);
            }
        }
    }

    /**
     * Adds options to all routes.
     *
     * An existing option value under the same name in a route will be overridden.
     *
     * @param array \$options An array of options
     */
    public function addOptions(array \$options)
    {
        if (\$options) {
            foreach (\$this->routes as \$route) {
                \$route->addOptions(\$options);
            }
        }
    }

    /**
     * Sets the schemes (e.g. 'https') all child routes are restricted to.
     *
     * @param string|string[] \$schemes The scheme or an array of schemes
     */
    public function setSchemes(\$schemes)
    {
        foreach (\$this->routes as \$route) {
            \$route->setSchemes(\$schemes);
        }
    }

    /**
     * Sets the HTTP methods (e.g. 'POST') all child routes are restricted to.
     *
     * @param string|string[] \$methods The method or an array of methods
     */
    public function setMethods(\$methods)
    {
        foreach (\$this->routes as \$route) {
            \$route->setMethods(\$methods);
        }
    }

    /**
     * Returns an array of resources loaded to build this collection.
     *
     * @return ResourceInterface[] An array of resources
     */
    public function getResources()
    {
        return array_values(\$this->resources);
    }

    /**
     * Adds a resource for this collection. If the resource already exists
     * it is not added.
     */
    public function addResource(ResourceInterface \$resource)
    {
        \$key = (string) \$resource;

        if (!isset(\$this->resources[\$key])) {
            \$this->resources[\$key] = \$resource;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/RouteCollection.php";
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

namespace Symfony\\Component\\Routing;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * A RouteCollection represents a set of Route instances.
 *
 * When adding a route at the end of the collection, an existing route
 * with the same name is removed first. So there can only be one route
 * with a given name.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class RouteCollection implements \\IteratorAggregate, \\Countable
{
    /**
     * @var Route[]
     */
    private \$routes = [];

    /**
     * @var array
     */
    private \$resources = [];

    public function __clone()
    {
        foreach (\$this->routes as \$name => \$route) {
            \$this->routes[\$name] = clone \$route;
        }
    }

    /**
     * Gets the current RouteCollection as an Iterator that includes all routes.
     *
     * It implements \\IteratorAggregate.
     *
     * @see all()
     *
     * @return \\ArrayIterator|Route[] An \\ArrayIterator object for iterating over routes
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->routes);
    }

    /**
     * Gets the number of Routes in this collection.
     *
     * @return int The number of routes
     */
    public function count()
    {
        return \\count(\$this->routes);
    }

    /**
     * Adds a route.
     *
     * @param string \$name  The route name
     * @param Route  \$route A Route instance
     */
    public function add(\$name, Route \$route)
    {
        unset(\$this->routes[\$name]);

        \$this->routes[\$name] = \$route;
    }

    /**
     * Returns all routes in this collection.
     *
     * @return Route[] An array of routes
     */
    public function all()
    {
        return \$this->routes;
    }

    /**
     * Gets a route by name.
     *
     * @param string \$name The route name
     *
     * @return Route|null A Route instance or null when not found
     */
    public function get(\$name)
    {
        return isset(\$this->routes[\$name]) ? \$this->routes[\$name] : null;
    }

    /**
     * Removes a route or an array of routes by name from the collection.
     *
     * @param string|string[] \$name The route name or an array of route names
     */
    public function remove(\$name)
    {
        foreach ((array) \$name as \$n) {
            unset(\$this->routes[\$n]);
        }
    }

    /**
     * Adds a route collection at the end of the current set by appending all
     * routes of the added collection.
     */
    public function addCollection(self \$collection)
    {
        // we need to remove all routes with the same names first because just replacing them
        // would not place the new route at the end of the merged array
        foreach (\$collection->all() as \$name => \$route) {
            unset(\$this->routes[\$name]);
            \$this->routes[\$name] = \$route;
        }

        foreach (\$collection->getResources() as \$resource) {
            \$this->addResource(\$resource);
        }
    }

    /**
     * Adds a prefix to the path of all child routes.
     *
     * @param string \$prefix       An optional prefix to add before each pattern of the route collection
     * @param array  \$defaults     An array of default values
     * @param array  \$requirements An array of requirements
     */
    public function addPrefix(\$prefix, array \$defaults = [], array \$requirements = [])
    {
        \$prefix = trim(trim(\$prefix), '/');

        if ('' === \$prefix) {
            return;
        }

        foreach (\$this->routes as \$route) {
            \$route->setPath('/'.\$prefix.\$route->getPath());
            \$route->addDefaults(\$defaults);
            \$route->addRequirements(\$requirements);
        }
    }

    /**
     * Adds a prefix to the name of all the routes within in the collection.
     */
    public function addNamePrefix(string \$prefix)
    {
        \$prefixedRoutes = [];

        foreach (\$this->routes as \$name => \$route) {
            \$prefixedRoutes[\$prefix.\$name] = \$route;
            if (null !== \$name = \$route->getDefault('_canonical_route')) {
                \$route->setDefault('_canonical_route', \$prefix.\$name);
            }
        }

        \$this->routes = \$prefixedRoutes;
    }

    /**
     * Sets the host pattern on all routes.
     *
     * @param string \$pattern      The pattern
     * @param array  \$defaults     An array of default values
     * @param array  \$requirements An array of requirements
     */
    public function setHost(\$pattern, array \$defaults = [], array \$requirements = [])
    {
        foreach (\$this->routes as \$route) {
            \$route->setHost(\$pattern);
            \$route->addDefaults(\$defaults);
            \$route->addRequirements(\$requirements);
        }
    }

    /**
     * Sets a condition on all routes.
     *
     * Existing conditions will be overridden.
     *
     * @param string \$condition The condition
     */
    public function setCondition(\$condition)
    {
        foreach (\$this->routes as \$route) {
            \$route->setCondition(\$condition);
        }
    }

    /**
     * Adds defaults to all routes.
     *
     * An existing default value under the same name in a route will be overridden.
     *
     * @param array \$defaults An array of default values
     */
    public function addDefaults(array \$defaults)
    {
        if (\$defaults) {
            foreach (\$this->routes as \$route) {
                \$route->addDefaults(\$defaults);
            }
        }
    }

    /**
     * Adds requirements to all routes.
     *
     * An existing requirement under the same name in a route will be overridden.
     *
     * @param array \$requirements An array of requirements
     */
    public function addRequirements(array \$requirements)
    {
        if (\$requirements) {
            foreach (\$this->routes as \$route) {
                \$route->addRequirements(\$requirements);
            }
        }
    }

    /**
     * Adds options to all routes.
     *
     * An existing option value under the same name in a route will be overridden.
     *
     * @param array \$options An array of options
     */
    public function addOptions(array \$options)
    {
        if (\$options) {
            foreach (\$this->routes as \$route) {
                \$route->addOptions(\$options);
            }
        }
    }

    /**
     * Sets the schemes (e.g. 'https') all child routes are restricted to.
     *
     * @param string|string[] \$schemes The scheme or an array of schemes
     */
    public function setSchemes(\$schemes)
    {
        foreach (\$this->routes as \$route) {
            \$route->setSchemes(\$schemes);
        }
    }

    /**
     * Sets the HTTP methods (e.g. 'POST') all child routes are restricted to.
     *
     * @param string|string[] \$methods The method or an array of methods
     */
    public function setMethods(\$methods)
    {
        foreach (\$this->routes as \$route) {
            \$route->setMethods(\$methods);
        }
    }

    /**
     * Returns an array of resources loaded to build this collection.
     *
     * @return ResourceInterface[] An array of resources
     */
    public function getResources()
    {
        return array_values(\$this->resources);
    }

    /**
     * Adds a resource for this collection. If the resource already exists
     * it is not added.
     */
    public function addResource(ResourceInterface \$resource)
    {
        \$key = (string) \$resource;

        if (!isset(\$this->resources[\$key])) {
            \$this->resources[\$key] = \$resource;
        }
    }
}
", "vendor/symfony/routing/RouteCollection.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/RouteCollection.php");
    }
}
