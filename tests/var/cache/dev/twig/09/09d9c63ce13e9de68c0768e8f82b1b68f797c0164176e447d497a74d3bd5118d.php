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

/* vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php */
class __TwigTemplate_9390213a38ed5b6ea136b3d3b2e6ca9aca19c17e036a406937f5c0f5ae3abded extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php"));

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

use Symfony\\Component\\Routing\\Loader\\AnnotationClassLoader;
use Symfony\\Component\\Routing\\Route;

/**
 * AnnotatedRouteControllerLoader is an implementation of AnnotationClassLoader
 * that sets the '_controller' default based on the class and method names.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotatedRouteControllerLoader extends AnnotationClassLoader
{
    /**
     * Configures the _controller default parameter of a given Route instance.
     *
     * @param mixed \$annot The annotation class instance
     */
    protected function configureRoute(Route \$route, \\ReflectionClass \$class, \\ReflectionMethod \$method, \$annot)
    {
        if ('__invoke' === \$method->getName()) {
            \$route->setDefault('_controller', \$class->getName());
        } else {
            \$route->setDefault('_controller', \$class->getName().'::'.\$method->getName());
        }
    }

    /**
     * Makes the default route name more sane by removing common keywords.
     *
     * @return string
     */
    protected function getDefaultRouteName(\\ReflectionClass \$class, \\ReflectionMethod \$method)
    {
        return preg_replace([
            '/(bundle|controller)_/',
            '/action(_\\d+)?\$/',
            '/__/',
        ], [
            '_',
            '\\\\1',
            '_',
        ], parent::getDefaultRouteName(\$class, \$method));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php";
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

use Symfony\\Component\\Routing\\Loader\\AnnotationClassLoader;
use Symfony\\Component\\Routing\\Route;

/**
 * AnnotatedRouteControllerLoader is an implementation of AnnotationClassLoader
 * that sets the '_controller' default based on the class and method names.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotatedRouteControllerLoader extends AnnotationClassLoader
{
    /**
     * Configures the _controller default parameter of a given Route instance.
     *
     * @param mixed \$annot The annotation class instance
     */
    protected function configureRoute(Route \$route, \\ReflectionClass \$class, \\ReflectionMethod \$method, \$annot)
    {
        if ('__invoke' === \$method->getName()) {
            \$route->setDefault('_controller', \$class->getName());
        } else {
            \$route->setDefault('_controller', \$class->getName().'::'.\$method->getName());
        }
    }

    /**
     * Makes the default route name more sane by removing common keywords.
     *
     * @return string
     */
    protected function getDefaultRouteName(\\ReflectionClass \$class, \\ReflectionMethod \$method)
    {
        return preg_replace([
            '/(bundle|controller)_/',
            '/action(_\\d+)?\$/',
            '/__/',
        ], [
            '_',
            '\\\\1',
            '_',
        ], parent::getDefaultRouteName(\$class, \$method));
    }
}
", "vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php");
    }
}
