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

/* vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php */
class __TwigTemplate_4a3060d28bb658c54d654548608853a1fa50a55aba720e7751d0945813ff1a9f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php"));

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

namespace Symfony\\Component\\Routing\\Loader\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Routing\\Loader\\ObjectRouteLoader;

/**
 * A route loader that executes a service to load the routes.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class ServiceRouterLoader extends ObjectRouteLoader
{
    /**
     * @var ContainerInterface
     */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    protected function getServiceObject(\$id)
    {
        return \$this->container->get(\$id);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php";
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

namespace Symfony\\Component\\Routing\\Loader\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Routing\\Loader\\ObjectRouteLoader;

/**
 * A route loader that executes a service to load the routes.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class ServiceRouterLoader extends ObjectRouteLoader
{
    /**
     * @var ContainerInterface
     */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    protected function getServiceObject(\$id)
    {
        return \$this->container->get(\$id);
    }
}
", "vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php");
    }
}
