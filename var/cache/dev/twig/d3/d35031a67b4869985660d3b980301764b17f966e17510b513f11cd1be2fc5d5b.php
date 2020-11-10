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

/* vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php */
class __TwigTemplate_28f119585fdf3b472a8c9cebdcb60705888cc89675a35183e7ef990d02b44f82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php"));

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

namespace Symfony\\Component\\EventDispatcher;

/**
 * A read-only proxy for an event dispatcher.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImmutableEventDispatcher implements EventDispatcherInterface
{
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * {@inheritdoc}
     *
     * @param string|null \$eventName
     */
    public function dispatch(\$event/*, string \$eventName = null*/)
    {
        \$eventName = 1 < \\func_num_args() ? func_get_arg(1) : null;

        if (is_scalar(\$event)) {
            // deprecated
            \$swap = \$event;
            \$event = \$eventName ?? new Event();
            \$eventName = \$swap;
        }

        return \$this->dispatcher->dispatch(\$event, \$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function addListener(\$eventName, \$listener, \$priority = 0)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeListener(\$eventName, \$listener)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function getListeners(\$eventName = null)
    {
        return \$this->dispatcher->getListeners(\$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function getListenerPriority(\$eventName, \$listener)
    {
        return \$this->dispatcher->getListenerPriority(\$eventName, \$listener);
    }

    /**
     * {@inheritdoc}
     */
    public function hasListeners(\$eventName = null)
    {
        return \$this->dispatcher->hasListeners(\$eventName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php";
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

namespace Symfony\\Component\\EventDispatcher;

/**
 * A read-only proxy for an event dispatcher.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImmutableEventDispatcher implements EventDispatcherInterface
{
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = LegacyEventDispatcherProxy::decorate(\$dispatcher);
    }

    /**
     * {@inheritdoc}
     *
     * @param string|null \$eventName
     */
    public function dispatch(\$event/*, string \$eventName = null*/)
    {
        \$eventName = 1 < \\func_num_args() ? func_get_arg(1) : null;

        if (is_scalar(\$event)) {
            // deprecated
            \$swap = \$event;
            \$event = \$eventName ?? new Event();
            \$eventName = \$swap;
        }

        return \$this->dispatcher->dispatch(\$event, \$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function addListener(\$eventName, \$listener, \$priority = 0)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeListener(\$eventName, \$listener)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function getListeners(\$eventName = null)
    {
        return \$this->dispatcher->getListeners(\$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function getListenerPriority(\$eventName, \$listener)
    {
        return \$this->dispatcher->getListenerPriority(\$eventName, \$listener);
    }

    /**
     * {@inheritdoc}
     */
    public function hasListeners(\$eventName = null)
    {
        return \$this->dispatcher->hasListeners(\$eventName);
    }
}
", "vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php");
    }
}
