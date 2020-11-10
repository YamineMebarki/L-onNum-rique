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

/* vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php */
class __TwigTemplate_60ba3eed0362d3f21a9983ea8175445dc5e523b6787fe37dffe95ccda864e735 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Kernel;

use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

/**
 * A Kernel that provides configuration hooks.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
trait MicroKernelTrait
{
    /**
     * Add or import routes into your application.
     *
     *     \$routes->import('config/routing.yml');
     *     \$routes->add('/admin', 'App\\Controller\\AdminController::dashboard', 'admin_dashboard');
     */
    abstract protected function configureRoutes(RouteCollectionBuilder \$routes);

    /**
     * Configures the container.
     *
     * You can register extensions:
     *
     *     \$c->loadFromExtension('framework', [
     *         'secret' => '%secret%'
     *     ]);
     *
     * Or services:
     *
     *     \$c->register('halloween', 'FooBundle\\HalloweenProvider');
     *
     * Or parameters:
     *
     *     \$c->setParameter('halloween', 'lot of fun');
     */
    abstract protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader);

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (ContainerBuilder \$container) use (\$loader) {
            \$container->loadFromExtension('framework', [
                'router' => [
                    'resource' => 'kernel::loadRoutes',
                    'type' => 'service',
                ],
            ]);

            if (\$this instanceof EventSubscriberInterface) {
                \$container->register('kernel', static::class)
                    ->setSynthetic(true)
                    ->setPublic(true)
                    ->addTag('kernel.event_subscriber')
                ;
            }

            \$this->configureContainer(\$container, \$loader);

            \$container->addObjectResource(\$this);
        });
    }

    /**
     * @internal
     */
    public function loadRoutes(LoaderInterface \$loader)
    {
        \$routes = new RouteCollectionBuilder(\$loader);
        \$this->configureRoutes(\$routes);

        return \$routes->build();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Kernel;

use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

/**
 * A Kernel that provides configuration hooks.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
trait MicroKernelTrait
{
    /**
     * Add or import routes into your application.
     *
     *     \$routes->import('config/routing.yml');
     *     \$routes->add('/admin', 'App\\Controller\\AdminController::dashboard', 'admin_dashboard');
     */
    abstract protected function configureRoutes(RouteCollectionBuilder \$routes);

    /**
     * Configures the container.
     *
     * You can register extensions:
     *
     *     \$c->loadFromExtension('framework', [
     *         'secret' => '%secret%'
     *     ]);
     *
     * Or services:
     *
     *     \$c->register('halloween', 'FooBundle\\HalloweenProvider');
     *
     * Or parameters:
     *
     *     \$c->setParameter('halloween', 'lot of fun');
     */
    abstract protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader);

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (ContainerBuilder \$container) use (\$loader) {
            \$container->loadFromExtension('framework', [
                'router' => [
                    'resource' => 'kernel::loadRoutes',
                    'type' => 'service',
                ],
            ]);

            if (\$this instanceof EventSubscriberInterface) {
                \$container->register('kernel', static::class)
                    ->setSynthetic(true)
                    ->setPublic(true)
                    ->addTag('kernel.event_subscriber')
                ;
            }

            \$this->configureContainer(\$container, \$loader);

            \$container->addObjectResource(\$this);
        });
    }

    /**
     * @internal
     */
    public function loadRoutes(LoaderInterface \$loader)
    {
        \$routes = new RouteCollectionBuilder(\$loader);
        \$this->configureRoutes(\$routes);

        return \$routes->build();
    }
}
", "vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php");
    }
}
