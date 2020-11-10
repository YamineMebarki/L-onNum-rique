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

/* vendor/symfony/framework-bundle/Tests/Kernel/ConcreteMicroKernel.php */
class __TwigTemplate_5c7275801f2e87400da61ceb943bdf790d3c1319b576aee610175d7a81223673 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Kernel/ConcreteMicroKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Kernel/ConcreteMicroKernel.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Kernel;

use Psr\\Log\\NullLogger;
use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

class ConcreteMicroKernel extends Kernel implements EventSubscriberInterface
{
    use MicroKernelTrait;

    private \$cacheDir;

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (\$event->getException() instanceof Danger) {
            \$event->setResponse(Response::create('It\\'s dangerous to go alone. Take this ⚔'));
        }
    }

    public function halloweenAction()
    {
        return new Response('halloween');
    }

    public function dangerousAction()
    {
        throw new Danger();
    }

    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
        ];
    }

    public function getCacheDir()
    {
        return \$this->cacheDir = sys_get_temp_dir().'/sf_micro_kernel';
    }

    public function getLogDir()
    {
        return \$this->cacheDir;
    }

    public function __sleep()
    {
        throw new \\BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \\BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        \$fs = new Filesystem();
        \$fs->remove(\$this->cacheDir);
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes)
    {
        \$routes->add('/', 'kernel::halloweenAction');
        \$routes->add('/danger', 'kernel::dangerousAction');
    }

    protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader)
    {
        \$c->register('logger', NullLogger::class);
        \$c->loadFromExtension('framework', [
            'secret' => '\$ecret',
        ]);

        \$c->setParameter('halloween', 'Have a great day!');
        \$c->register('halloween', 'stdClass')->setPublic(true);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }
}

class Danger extends \\RuntimeException
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Kernel/ConcreteMicroKernel.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Kernel;

use Psr\\Log\\NullLogger;
use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseForExceptionEvent;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

class ConcreteMicroKernel extends Kernel implements EventSubscriberInterface
{
    use MicroKernelTrait;

    private \$cacheDir;

    public function onKernelException(GetResponseForExceptionEvent \$event)
    {
        if (\$event->getException() instanceof Danger) {
            \$event->setResponse(Response::create('It\\'s dangerous to go alone. Take this ⚔'));
        }
    }

    public function halloweenAction()
    {
        return new Response('halloween');
    }

    public function dangerousAction()
    {
        throw new Danger();
    }

    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
        ];
    }

    public function getCacheDir()
    {
        return \$this->cacheDir = sys_get_temp_dir().'/sf_micro_kernel';
    }

    public function getLogDir()
    {
        return \$this->cacheDir;
    }

    public function __sleep()
    {
        throw new \\BadMethodCallException('Cannot serialize '.__CLASS__);
    }

    public function __wakeup()
    {
        throw new \\BadMethodCallException('Cannot unserialize '.__CLASS__);
    }

    public function __destruct()
    {
        \$fs = new Filesystem();
        \$fs->remove(\$this->cacheDir);
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes)
    {
        \$routes->add('/', 'kernel::halloweenAction');
        \$routes->add('/danger', 'kernel::dangerousAction');
    }

    protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader)
    {
        \$c->register('logger', NullLogger::class);
        \$c->loadFromExtension('framework', [
            'secret' => '\$ecret',
        ]);

        \$c->setParameter('halloween', 'Have a great day!');
        \$c->register('halloween', 'stdClass')->setPublic(true);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }
}

class Danger extends \\RuntimeException
{
}
", "vendor/symfony/framework-bundle/Tests/Kernel/ConcreteMicroKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Kernel/ConcreteMicroKernel.php");
    }
}
