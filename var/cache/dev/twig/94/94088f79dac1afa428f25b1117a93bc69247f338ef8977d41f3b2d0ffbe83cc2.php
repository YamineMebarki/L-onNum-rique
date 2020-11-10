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

/* vendor/symfony/security-http/Firewall.php */
class __TwigTemplate_aba49fc4a5e2f9a71cac5292b2659d1ce3798bf6c7b7cc17c21232512bf78767 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall.php"));

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

namespace Symfony\\Component\\Security\\Http;

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Http\\Firewall\\AccessListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

/**
 * Firewall uses a FirewallMap to register security listeners for the given
 * request.
 *
 * It allows for different security strategies within the same application
 * (a Basic authentication for the /api, and a web based authentication for
 * everything else for instance).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Firewall implements EventSubscriberInterface
{
    private \$map;
    private \$dispatcher;
    private \$exceptionListeners;

    public function __construct(FirewallMapInterface \$map, EventDispatcherInterface \$dispatcher)
    {
        // the type-hint will be updated to the \"EventDispatcherInterface\" from symfony/contracts in 5.0

        \$this->map = \$map;
        \$this->dispatcher = \$dispatcher;
        \$this->exceptionListeners = new \\SplObjectStorage();
    }

    /**
     * @internal since Symfony 4.3
     */
    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        // register listeners for this firewall
        \$listeners = \$this->map->getListeners(\$event->getRequest());

        if (3 !== \\count(\$listeners)) {
            @trigger_error(sprintf('Not returning an array of 3 elements from %s::getListeners() is deprecated since Symfony 4.2, the 3rd element must be an instance of %s or null.', FirewallMapInterface::class, LogoutListener::class), E_USER_DEPRECATED);
            \$listeners[2] = null;
        }

        \$authenticationListeners = \$listeners[0];
        \$exceptionListener = \$listeners[1];
        \$logoutListener = \$listeners[2];

        if (null !== \$exceptionListener) {
            \$this->exceptionListeners[\$event->getRequest()] = \$exceptionListener;
            \$exceptionListener->register(\$this->dispatcher);
        }

        \$authenticationListeners = function () use (\$authenticationListeners, \$logoutListener) {
            \$accessListener = null;

            foreach (\$authenticationListeners as \$listener) {
                if (\$listener instanceof AccessListener) {
                    \$accessListener = \$listener;

                    continue;
                }

                yield \$listener;
            }

            if (null !== \$logoutListener) {
                yield \$logoutListener;
            }

            if (null !== \$accessListener) {
                yield \$accessListener;
            }
        };

        if (\$event instanceof RequestEvent) {
            \$this->callListeners(\$event, \$authenticationListeners());
        } else {
            \$this->handleRequest(\$event, \$authenticationListeners());
        }
    }

    /**
     * @internal since Symfony 4.3
     */
    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        \$request = \$event->getRequest();

        if (isset(\$this->exceptionListeners[\$request])) {
            \$this->exceptionListeners[\$request]->unregister(\$this->dispatcher);
            unset(\$this->exceptionListeners[\$request]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 8],
            KernelEvents::FINISH_REQUEST => 'onKernelFinishRequest',
        ];
    }

    protected function callListeners(RequestEvent \$event, iterable \$listeners)
    {
        \$this->handleRequest(\$event, \$listeners);
    }

    /**
     * @deprecated since Symfony 4.3, use callListeners instead
     */
    protected function handleRequest(GetResponseEvent \$event, \$listeners)
    {
        foreach (\$listeners as \$listener) {
            if (\\is_callable(\$listener)) {
                \$listener(\$event);
            } else {
                @trigger_error(sprintf('Calling the \"%s::handle()\" method from the firewall is deprecated since Symfony 4.3, implement \"__invoke()\" instead.', \\get_class(\$listener)), E_USER_DEPRECATED);
                \$listener->handle(\$event);
            }

            if (\$event->hasResponse()) {
                break;
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall.php";
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

namespace Symfony\\Component\\Security\\Http;

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\GetResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Http\\Firewall\\AccessListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

/**
 * Firewall uses a FirewallMap to register security listeners for the given
 * request.
 *
 * It allows for different security strategies within the same application
 * (a Basic authentication for the /api, and a web based authentication for
 * everything else for instance).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Firewall implements EventSubscriberInterface
{
    private \$map;
    private \$dispatcher;
    private \$exceptionListeners;

    public function __construct(FirewallMapInterface \$map, EventDispatcherInterface \$dispatcher)
    {
        // the type-hint will be updated to the \"EventDispatcherInterface\" from symfony/contracts in 5.0

        \$this->map = \$map;
        \$this->dispatcher = \$dispatcher;
        \$this->exceptionListeners = new \\SplObjectStorage();
    }

    /**
     * @internal since Symfony 4.3
     */
    public function onKernelRequest(GetResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        // register listeners for this firewall
        \$listeners = \$this->map->getListeners(\$event->getRequest());

        if (3 !== \\count(\$listeners)) {
            @trigger_error(sprintf('Not returning an array of 3 elements from %s::getListeners() is deprecated since Symfony 4.2, the 3rd element must be an instance of %s or null.', FirewallMapInterface::class, LogoutListener::class), E_USER_DEPRECATED);
            \$listeners[2] = null;
        }

        \$authenticationListeners = \$listeners[0];
        \$exceptionListener = \$listeners[1];
        \$logoutListener = \$listeners[2];

        if (null !== \$exceptionListener) {
            \$this->exceptionListeners[\$event->getRequest()] = \$exceptionListener;
            \$exceptionListener->register(\$this->dispatcher);
        }

        \$authenticationListeners = function () use (\$authenticationListeners, \$logoutListener) {
            \$accessListener = null;

            foreach (\$authenticationListeners as \$listener) {
                if (\$listener instanceof AccessListener) {
                    \$accessListener = \$listener;

                    continue;
                }

                yield \$listener;
            }

            if (null !== \$logoutListener) {
                yield \$logoutListener;
            }

            if (null !== \$accessListener) {
                yield \$accessListener;
            }
        };

        if (\$event instanceof RequestEvent) {
            \$this->callListeners(\$event, \$authenticationListeners());
        } else {
            \$this->handleRequest(\$event, \$authenticationListeners());
        }
    }

    /**
     * @internal since Symfony 4.3
     */
    public function onKernelFinishRequest(FinishRequestEvent \$event)
    {
        \$request = \$event->getRequest();

        if (isset(\$this->exceptionListeners[\$request])) {
            \$this->exceptionListeners[\$request]->unregister(\$this->dispatcher);
            unset(\$this->exceptionListeners[\$request]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 8],
            KernelEvents::FINISH_REQUEST => 'onKernelFinishRequest',
        ];
    }

    protected function callListeners(RequestEvent \$event, iterable \$listeners)
    {
        \$this->handleRequest(\$event, \$listeners);
    }

    /**
     * @deprecated since Symfony 4.3, use callListeners instead
     */
    protected function handleRequest(GetResponseEvent \$event, \$listeners)
    {
        foreach (\$listeners as \$listener) {
            if (\\is_callable(\$listener)) {
                \$listener(\$event);
            } else {
                @trigger_error(sprintf('Calling the \"%s::handle()\" method from the firewall is deprecated since Symfony 4.3, implement \"__invoke()\" instead.', \\get_class(\$listener)), E_USER_DEPRECATED);
                \$listener->handle(\$event);
            }

            if (\$event->hasResponse()) {
                break;
            }
        }
    }
}
", "vendor/symfony/security-http/Firewall.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall.php");
    }
}
