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

/* vendor/symfony/event-dispatcher/CHANGELOG.md */
class __TwigTemplate_846405d80640827220a373be6fc4248e8c0133759b174f4036808018556d96d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * The signature of the `EventDispatcherInterface::dispatch()` method should be updated to `dispatch(\$event, string \$eventName = null)`, not doing so is deprecated
 * deprecated the `Event` class, use `Symfony\\Contracts\\EventDispatcher\\Event` instead

4.1.0
-----

 * added support for invokable event listeners tagged with `kernel.event_listener` by default 
 * The `TraceableEventDispatcher::getOrphanedEvents()` method has been added.
 * The `TraceableEventDispatcherInterface` has been deprecated.

4.0.0
-----

 * removed the `ContainerAwareEventDispatcher` class
 * added the `reset()` method to the `TraceableEventDispatcherInterface`

3.4.0
-----

  * Implementing `TraceableEventDispatcherInterface` without the `reset()` method has been deprecated.

3.3.0
-----

  * The ContainerAwareEventDispatcher class has been deprecated. Use EventDispatcher with closure factories instead.

3.0.0
-----

  * The method `getListenerPriority(\$eventName, \$listener)` has been added to the
    `EventDispatcherInterface`.
  * The methods `Event::setDispatcher()`, `Event::getDispatcher()`, `Event::setName()`
    and `Event::getName()` have been removed.
    The event dispatcher and the event name are passed to the listener call.

2.5.0
-----

 * added Debug\\TraceableEventDispatcher (originally in HttpKernel)
 * changed Debug\\TraceableEventDispatcherInterface to extend EventDispatcherInterface
 * added RegisterListenersPass (originally in HttpKernel)

2.1.0
-----

 * added TraceableEventDispatcherInterface
 * added ContainerAwareEventDispatcher
 * added a reference to the EventDispatcher on the Event
 * added a reference to the Event name on the event
 * added fluid interface to the dispatch() method which now returns the Event
   object
 * added GenericEvent event class
 * added the possibility for subscribers to subscribe several times for the
   same event
 * added ImmutableEventDispatcher
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.3.0
-----

 * The signature of the `EventDispatcherInterface::dispatch()` method should be updated to `dispatch(\$event, string \$eventName = null)`, not doing so is deprecated
 * deprecated the `Event` class, use `Symfony\\Contracts\\EventDispatcher\\Event` instead

4.1.0
-----

 * added support for invokable event listeners tagged with `kernel.event_listener` by default 
 * The `TraceableEventDispatcher::getOrphanedEvents()` method has been added.
 * The `TraceableEventDispatcherInterface` has been deprecated.

4.0.0
-----

 * removed the `ContainerAwareEventDispatcher` class
 * added the `reset()` method to the `TraceableEventDispatcherInterface`

3.4.0
-----

  * Implementing `TraceableEventDispatcherInterface` without the `reset()` method has been deprecated.

3.3.0
-----

  * The ContainerAwareEventDispatcher class has been deprecated. Use EventDispatcher with closure factories instead.

3.0.0
-----

  * The method `getListenerPriority(\$eventName, \$listener)` has been added to the
    `EventDispatcherInterface`.
  * The methods `Event::setDispatcher()`, `Event::getDispatcher()`, `Event::setName()`
    and `Event::getName()` have been removed.
    The event dispatcher and the event name are passed to the listener call.

2.5.0
-----

 * added Debug\\TraceableEventDispatcher (originally in HttpKernel)
 * changed Debug\\TraceableEventDispatcherInterface to extend EventDispatcherInterface
 * added RegisterListenersPass (originally in HttpKernel)

2.1.0
-----

 * added TraceableEventDispatcherInterface
 * added ContainerAwareEventDispatcher
 * added a reference to the EventDispatcher on the Event
 * added a reference to the Event name on the event
 * added fluid interface to the dispatch() method which now returns the Event
   object
 * added GenericEvent event class
 * added the possibility for subscribers to subscribe several times for the
   same event
 * added ImmutableEventDispatcher
", "vendor/symfony/event-dispatcher/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/CHANGELOG.md");
    }
}
