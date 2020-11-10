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

/* vendor/symfony/monolog-bridge/Processor/RouteProcessor.php */
class __TwigTemplate_03625e213626626a55dd96acc62d9b4e1032e2135e7a5bab0d71cf32af4f7514 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/RouteProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/RouteProcessor.php"));

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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Adds the current route information to the log entry.
 *
 * @author Piotr Stankowski <git@trakos.pl>
 */
class RouteProcessor implements EventSubscriberInterface, ResetInterface
{
    private \$routeData;
    private \$includeParams;

    public function __construct(bool \$includeParams = true)
    {
        \$this->includeParams = \$includeParams;
        \$this->reset();
    }

    public function __invoke(array \$records)
    {
        if (\$this->routeData && !isset(\$records['extra']['requests'])) {
            \$records['extra']['requests'] = array_values(\$this->routeData);
        }

        return \$records;
    }

    public function reset()
    {
        \$this->routeData = [];
    }

    public function addRouteData(GetResponseEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            \$this->reset();
        }

        \$request = \$event->getRequest();
        if (!\$request->attributes->has('_controller')) {
            return;
        }

        \$currentRequestData = [
            'controller' => \$request->attributes->get('_controller'),
            'route' => \$request->attributes->get('_route'),
        ];

        if (\$this->includeParams) {
            \$currentRequestData['route_params'] = \$request->attributes->get('_route_params');
        }

        \$this->routeData[spl_object_id(\$request)] = \$currentRequestData;
    }

    public function removeRouteData(FinishRequestEvent \$event)
    {
        \$requestId = spl_object_id(\$event->getRequest());
        unset(\$this->routeData[\$requestId]);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['addRouteData', 1],
            KernelEvents::FINISH_REQUEST => ['removeRouteData', 1],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Processor/RouteProcessor.php";
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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Adds the current route information to the log entry.
 *
 * @author Piotr Stankowski <git@trakos.pl>
 */
class RouteProcessor implements EventSubscriberInterface, ResetInterface
{
    private \$routeData;
    private \$includeParams;

    public function __construct(bool \$includeParams = true)
    {
        \$this->includeParams = \$includeParams;
        \$this->reset();
    }

    public function __invoke(array \$records)
    {
        if (\$this->routeData && !isset(\$records['extra']['requests'])) {
            \$records['extra']['requests'] = array_values(\$this->routeData);
        }

        return \$records;
    }

    public function reset()
    {
        \$this->routeData = [];
    }

    public function addRouteData(GetResponseEvent \$event)
    {
        if (\$event->isMasterRequest()) {
            \$this->reset();
        }

        \$request = \$event->getRequest();
        if (!\$request->attributes->has('_controller')) {
            return;
        }

        \$currentRequestData = [
            'controller' => \$request->attributes->get('_controller'),
            'route' => \$request->attributes->get('_route'),
        ];

        if (\$this->includeParams) {
            \$currentRequestData['route_params'] = \$request->attributes->get('_route_params');
        }

        \$this->routeData[spl_object_id(\$request)] = \$currentRequestData;
    }

    public function removeRouteData(FinishRequestEvent \$event)
    {
        \$requestId = spl_object_id(\$event->getRequest());
        unset(\$this->routeData[\$requestId]);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['addRouteData', 1],
            KernelEvents::FINISH_REQUEST => ['removeRouteData', 1],
        ];
    }
}
", "vendor/symfony/monolog-bridge/Processor/RouteProcessor.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Processor/RouteProcessor.php");
    }
}
