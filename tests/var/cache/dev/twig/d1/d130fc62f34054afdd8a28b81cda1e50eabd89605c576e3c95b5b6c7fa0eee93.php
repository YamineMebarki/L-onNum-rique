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

/* vendor/zendframework/zend-eventmanager/src/LazyListenerAggregate.php */
class __TwigTemplate_0703b0cd885a4502b08fb81188e50d8c77d23be90adc5c477b62f12fd100dd57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/LazyListenerAggregate.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/LazyListenerAggregate.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

use Interop\\Container\\ContainerInterface;

/**
 * Aggregate listener for attaching lazy listeners.
 *
 * Lazy listeners are listeners where creation is deferred until they are
 * triggered; this removes the most costly mechanism of pulling a listener
 * from a container unless the listener is actually invoked.
 *
 * Usage is:
 *
 * <code>
 * \$events->attachAggregate(new LazyListenerAggregate(
 *     \$lazyEventListenersOrDefinitions,
 *     \$container
 * ));
 * </code>
 */
class LazyListenerAggregate implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;

    /**
     * @var ContainerInterface Container from which to pull lazy listeners.
     */
    private \$container;

    /**
     * @var array Additional environment/option variables to use when creating listener.
     */
    private \$env;

    /**
     * Generated LazyEventListener instances.
     *
     * @var LazyEventListener[]
     */
    private \$lazyListeners = [];

    /**
     * Constructor
     *
     * Accepts the composed \$listeners, as well as the \$container and \$env in
     * order to create a listener aggregate that defers listener creation until
     * the listener is triggered.
     *
     * Listeners may be either LazyEventListener instances, or lazy event
     * listener definitions that can be provided to a LazyEventListener
     * constructor in order to create a new instance; in the latter case, the
     * \$container and \$env will be passed at instantiation as well.
     *
     * @var array \$listeners LazyEventListener instances or array definitions
     *     to pass to the LazyEventListener constructor.
     * @var ContainerInterface \$container
     * @var array \$env
     * @throws Exception\\InvalidArgumentException for invalid listener items.
     */
    public function __construct(array \$listeners, ContainerInterface \$container, array \$env = [])
    {
        \$this->container = \$container;
        \$this->env       = \$env;

        // This would raise an exception for invalid structs
        foreach (\$listeners as \$listener) {
            if (is_array(\$listener)) {
                \$listener = new LazyEventListener(\$listener, \$container, \$env);
            }

            if (! \$listener instanceof LazyEventListener) {
                throw new Exception\\InvalidArgumentException(sprintf(
                    'All listeners must be LazyEventListener instances or definitions; received %s',
                    (is_object(\$listener) ? get_class(\$listener) : gettype(\$listener))
                ));
            }

            \$this->lazyListeners[] = \$listener;
        }
    }

    /**
     * Attach the aggregate to the event manager.
     *
     * Loops through all composed lazy listeners, and attaches them to the
     * event manager.
     *
     * @var EventManagerInterface \$events
     * @var int \$priority
     */
    public function attach(EventManagerInterface \$events, \$priority = 1)
    {
        foreach (\$this->lazyListeners as \$lazyListener) {
            \$this->listeners[] = \$events->attach(
                \$lazyListener->getEvent(),
                \$lazyListener,
                \$lazyListener->getPriority(\$priority)
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/LazyListenerAggregate.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

use Interop\\Container\\ContainerInterface;

/**
 * Aggregate listener for attaching lazy listeners.
 *
 * Lazy listeners are listeners where creation is deferred until they are
 * triggered; this removes the most costly mechanism of pulling a listener
 * from a container unless the listener is actually invoked.
 *
 * Usage is:
 *
 * <code>
 * \$events->attachAggregate(new LazyListenerAggregate(
 *     \$lazyEventListenersOrDefinitions,
 *     \$container
 * ));
 * </code>
 */
class LazyListenerAggregate implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;

    /**
     * @var ContainerInterface Container from which to pull lazy listeners.
     */
    private \$container;

    /**
     * @var array Additional environment/option variables to use when creating listener.
     */
    private \$env;

    /**
     * Generated LazyEventListener instances.
     *
     * @var LazyEventListener[]
     */
    private \$lazyListeners = [];

    /**
     * Constructor
     *
     * Accepts the composed \$listeners, as well as the \$container and \$env in
     * order to create a listener aggregate that defers listener creation until
     * the listener is triggered.
     *
     * Listeners may be either LazyEventListener instances, or lazy event
     * listener definitions that can be provided to a LazyEventListener
     * constructor in order to create a new instance; in the latter case, the
     * \$container and \$env will be passed at instantiation as well.
     *
     * @var array \$listeners LazyEventListener instances or array definitions
     *     to pass to the LazyEventListener constructor.
     * @var ContainerInterface \$container
     * @var array \$env
     * @throws Exception\\InvalidArgumentException for invalid listener items.
     */
    public function __construct(array \$listeners, ContainerInterface \$container, array \$env = [])
    {
        \$this->container = \$container;
        \$this->env       = \$env;

        // This would raise an exception for invalid structs
        foreach (\$listeners as \$listener) {
            if (is_array(\$listener)) {
                \$listener = new LazyEventListener(\$listener, \$container, \$env);
            }

            if (! \$listener instanceof LazyEventListener) {
                throw new Exception\\InvalidArgumentException(sprintf(
                    'All listeners must be LazyEventListener instances or definitions; received %s',
                    (is_object(\$listener) ? get_class(\$listener) : gettype(\$listener))
                ));
            }

            \$this->lazyListeners[] = \$listener;
        }
    }

    /**
     * Attach the aggregate to the event manager.
     *
     * Loops through all composed lazy listeners, and attaches them to the
     * event manager.
     *
     * @var EventManagerInterface \$events
     * @var int \$priority
     */
    public function attach(EventManagerInterface \$events, \$priority = 1)
    {
        foreach (\$this->lazyListeners as \$lazyListener) {
            \$this->listeners[] = \$events->attach(
                \$lazyListener->getEvent(),
                \$lazyListener,
                \$lazyListener->getPriority(\$priority)
            );
        }
    }
}
", "vendor/zendframework/zend-eventmanager/src/LazyListenerAggregate.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/LazyListenerAggregate.php");
    }
}
