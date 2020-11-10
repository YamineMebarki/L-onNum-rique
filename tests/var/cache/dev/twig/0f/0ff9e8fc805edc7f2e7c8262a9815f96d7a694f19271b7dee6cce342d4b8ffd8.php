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

/* vendor/symfony/routing/Loader/Configurator/Traits/AddTrait.php */
class __TwigTemplate_ded3049e038a4361696abaf99421c6890aed292e48c237fc61e1b7ac7ff920cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/Configurator/Traits/AddTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/Configurator/Traits/AddTrait.php"));

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

namespace Symfony\\Component\\Routing\\Loader\\Configurator\\Traits;

use Symfony\\Component\\Routing\\Loader\\Configurator\\CollectionConfigurator;
use Symfony\\Component\\Routing\\Loader\\Configurator\\RouteConfigurator;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

trait AddTrait
{
    /**
     * @var RouteCollection
     */
    private \$collection;

    private \$name = '';

    private \$prefixes;

    /**
     * Adds a route.
     *
     * @param string|array \$path the path, or the localized paths of the route
     */
    final public function add(string \$name, \$path): RouteConfigurator
    {
        \$paths = [];
        \$parentConfigurator = \$this instanceof CollectionConfigurator ? \$this : (\$this instanceof RouteConfigurator ? \$this->parentConfigurator : null);

        if (\\is_array(\$path)) {
            if (null === \$this->prefixes) {
                \$paths = \$path;
            } elseif (\$missing = array_diff_key(\$this->prefixes, \$path)) {
                throw new \\LogicException(sprintf('Route \"%s\" is missing routes for locale(s) \"%s\".', \$name, implode('\", \"', array_keys(\$missing))));
            } else {
                foreach (\$path as \$locale => \$localePath) {
                    if (!isset(\$this->prefixes[\$locale])) {
                        throw new \\LogicException(sprintf('Route \"%s\" with locale \"%s\" is missing a corresponding prefix in its parent collection.', \$name, \$locale));
                    }

                    \$paths[\$locale] = \$this->prefixes[\$locale].\$localePath;
                }
            }
        } elseif (null !== \$this->prefixes) {
            foreach (\$this->prefixes as \$locale => \$prefix) {
                \$paths[\$locale] = \$prefix.\$path;
            }
        } else {
            \$this->collection->add(\$this->name.\$name, \$route = \$this->createRoute(\$path));

            return new RouteConfigurator(\$this->collection, \$route, \$this->name, \$parentConfigurator, \$this->prefixes);
        }

        \$routes = new RouteCollection();

        foreach (\$paths as \$locale => \$path) {
            \$routes->add(\$name.'.'.\$locale, \$route = \$this->createRoute(\$path));
            \$this->collection->add(\$this->name.\$name.'.'.\$locale, \$route);
            \$route->setDefault('_locale', \$locale);
            \$route->setDefault('_canonical_route', \$this->name.\$name);
        }

        return new RouteConfigurator(\$this->collection, \$routes, \$this->name, \$parentConfigurator, \$this->prefixes);
    }

    /**
     * Adds a route.
     *
     * @param string|array \$path the path, or the localized paths of the route
     */
    final public function __invoke(string \$name, \$path): RouteConfigurator
    {
        return \$this->add(\$name, \$path);
    }

    private function createRoute(\$path): Route
    {
        return new Route(\$path);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Loader/Configurator/Traits/AddTrait.php";
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

namespace Symfony\\Component\\Routing\\Loader\\Configurator\\Traits;

use Symfony\\Component\\Routing\\Loader\\Configurator\\CollectionConfigurator;
use Symfony\\Component\\Routing\\Loader\\Configurator\\RouteConfigurator;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

trait AddTrait
{
    /**
     * @var RouteCollection
     */
    private \$collection;

    private \$name = '';

    private \$prefixes;

    /**
     * Adds a route.
     *
     * @param string|array \$path the path, or the localized paths of the route
     */
    final public function add(string \$name, \$path): RouteConfigurator
    {
        \$paths = [];
        \$parentConfigurator = \$this instanceof CollectionConfigurator ? \$this : (\$this instanceof RouteConfigurator ? \$this->parentConfigurator : null);

        if (\\is_array(\$path)) {
            if (null === \$this->prefixes) {
                \$paths = \$path;
            } elseif (\$missing = array_diff_key(\$this->prefixes, \$path)) {
                throw new \\LogicException(sprintf('Route \"%s\" is missing routes for locale(s) \"%s\".', \$name, implode('\", \"', array_keys(\$missing))));
            } else {
                foreach (\$path as \$locale => \$localePath) {
                    if (!isset(\$this->prefixes[\$locale])) {
                        throw new \\LogicException(sprintf('Route \"%s\" with locale \"%s\" is missing a corresponding prefix in its parent collection.', \$name, \$locale));
                    }

                    \$paths[\$locale] = \$this->prefixes[\$locale].\$localePath;
                }
            }
        } elseif (null !== \$this->prefixes) {
            foreach (\$this->prefixes as \$locale => \$prefix) {
                \$paths[\$locale] = \$prefix.\$path;
            }
        } else {
            \$this->collection->add(\$this->name.\$name, \$route = \$this->createRoute(\$path));

            return new RouteConfigurator(\$this->collection, \$route, \$this->name, \$parentConfigurator, \$this->prefixes);
        }

        \$routes = new RouteCollection();

        foreach (\$paths as \$locale => \$path) {
            \$routes->add(\$name.'.'.\$locale, \$route = \$this->createRoute(\$path));
            \$this->collection->add(\$this->name.\$name.'.'.\$locale, \$route);
            \$route->setDefault('_locale', \$locale);
            \$route->setDefault('_canonical_route', \$this->name.\$name);
        }

        return new RouteConfigurator(\$this->collection, \$routes, \$this->name, \$parentConfigurator, \$this->prefixes);
    }

    /**
     * Adds a route.
     *
     * @param string|array \$path the path, or the localized paths of the route
     */
    final public function __invoke(string \$name, \$path): RouteConfigurator
    {
        return \$this->add(\$name, \$path);
    }

    private function createRoute(\$path): Route
    {
        return new Route(\$path);
    }
}
", "vendor/symfony/routing/Loader/Configurator/Traits/AddTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Loader/Configurator/Traits/AddTrait.php");
    }
}
