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

/* vendor/symfony/http-kernel/DataCollector/EventDataCollector.php */
class __TwigTemplate_5fe9452ff37bc560b800269ed5a8cc0bfdfa98fc0de0add295d02d7241414dcb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/EventDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/EventDataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * EventDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EventDataCollector extends DataCollector implements LateDataCollectorInterface
{
    protected \$dispatcher;
    private \$requestStack;
    private \$currentRequest;

    public function __construct(EventDispatcherInterface \$dispatcher = null, RequestStack \$requestStack = null)
    {
        \$this->dispatcher = \$dispatcher;
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->currentRequest = \$this->requestStack && \$this->requestStack->getMasterRequest() !== \$request ? \$request : null;
        \$this->data = [
            'called_listeners' => [],
            'not_called_listeners' => [],
            'orphaned_events' => [],
        ];
    }

    public function reset()
    {
        \$this->data = [];

        if (\$this->dispatcher instanceof ResetInterface) {
            \$this->dispatcher->reset();
        }
    }

    public function lateCollect()
    {
        if (\$this->dispatcher instanceof TraceableEventDispatcherInterface) {
            \$this->setCalledListeners(\$this->dispatcher->getCalledListeners(\$this->currentRequest));
            \$this->setNotCalledListeners(\$this->dispatcher->getNotCalledListeners(\$this->currentRequest));
        }

        if (\$this->dispatcher instanceof TraceableEventDispatcher) {
            \$this->setOrphanedEvents(\$this->dispatcher->getOrphanedEvents(\$this->currentRequest));
        }

        \$this->data = \$this->cloneVar(\$this->data);
    }

    /**
     * Sets the called listeners.
     *
     * @param array \$listeners An array of called listeners
     *
     * @see TraceableEventDispatcher
     */
    public function setCalledListeners(array \$listeners)
    {
        \$this->data['called_listeners'] = \$listeners;
    }

    /**
     * Gets the called listeners.
     *
     * @return array An array of called listeners
     *
     * @see TraceableEventDispatcher
     */
    public function getCalledListeners()
    {
        return \$this->data['called_listeners'];
    }

    /**
     * Sets the not called listeners.
     *
     * @see TraceableEventDispatcher
     */
    public function setNotCalledListeners(array \$listeners)
    {
        \$this->data['not_called_listeners'] = \$listeners;
    }

    /**
     * Gets the not called listeners.
     *
     * @return array
     *
     * @see TraceableEventDispatcher
     */
    public function getNotCalledListeners()
    {
        return \$this->data['not_called_listeners'];
    }

    /**
     * Sets the orphaned events.
     *
     * @param array \$events An array of orphaned events
     *
     * @see TraceableEventDispatcher
     */
    public function setOrphanedEvents(array \$events)
    {
        \$this->data['orphaned_events'] = \$events;
    }

    /**
     * Gets the orphaned events.
     *
     * @return array An array of orphaned events
     *
     * @see TraceableEventDispatcher
     */
    public function getOrphanedEvents()
    {
        return \$this->data['orphaned_events'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'events';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DataCollector/EventDataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * EventDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EventDataCollector extends DataCollector implements LateDataCollectorInterface
{
    protected \$dispatcher;
    private \$requestStack;
    private \$currentRequest;

    public function __construct(EventDispatcherInterface \$dispatcher = null, RequestStack \$requestStack = null)
    {
        \$this->dispatcher = \$dispatcher;
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->currentRequest = \$this->requestStack && \$this->requestStack->getMasterRequest() !== \$request ? \$request : null;
        \$this->data = [
            'called_listeners' => [],
            'not_called_listeners' => [],
            'orphaned_events' => [],
        ];
    }

    public function reset()
    {
        \$this->data = [];

        if (\$this->dispatcher instanceof ResetInterface) {
            \$this->dispatcher->reset();
        }
    }

    public function lateCollect()
    {
        if (\$this->dispatcher instanceof TraceableEventDispatcherInterface) {
            \$this->setCalledListeners(\$this->dispatcher->getCalledListeners(\$this->currentRequest));
            \$this->setNotCalledListeners(\$this->dispatcher->getNotCalledListeners(\$this->currentRequest));
        }

        if (\$this->dispatcher instanceof TraceableEventDispatcher) {
            \$this->setOrphanedEvents(\$this->dispatcher->getOrphanedEvents(\$this->currentRequest));
        }

        \$this->data = \$this->cloneVar(\$this->data);
    }

    /**
     * Sets the called listeners.
     *
     * @param array \$listeners An array of called listeners
     *
     * @see TraceableEventDispatcher
     */
    public function setCalledListeners(array \$listeners)
    {
        \$this->data['called_listeners'] = \$listeners;
    }

    /**
     * Gets the called listeners.
     *
     * @return array An array of called listeners
     *
     * @see TraceableEventDispatcher
     */
    public function getCalledListeners()
    {
        return \$this->data['called_listeners'];
    }

    /**
     * Sets the not called listeners.
     *
     * @see TraceableEventDispatcher
     */
    public function setNotCalledListeners(array \$listeners)
    {
        \$this->data['not_called_listeners'] = \$listeners;
    }

    /**
     * Gets the not called listeners.
     *
     * @return array
     *
     * @see TraceableEventDispatcher
     */
    public function getNotCalledListeners()
    {
        return \$this->data['not_called_listeners'];
    }

    /**
     * Sets the orphaned events.
     *
     * @param array \$events An array of orphaned events
     *
     * @see TraceableEventDispatcher
     */
    public function setOrphanedEvents(array \$events)
    {
        \$this->data['orphaned_events'] = \$events;
    }

    /**
     * Gets the orphaned events.
     *
     * @return array An array of orphaned events
     *
     * @see TraceableEventDispatcher
     */
    public function getOrphanedEvents()
    {
        return \$this->data['orphaned_events'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'events';
    }
}
", "vendor/symfony/http-kernel/DataCollector/EventDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php");
    }
}
