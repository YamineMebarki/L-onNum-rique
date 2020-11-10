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

/* vendor/symfony/event-dispatcher/LegacyEventDispatcherProxy.php */
class __TwigTemplate_98ecb39ae0eb22ebd5e1a6bf905eed9f0543e3a6897a0ffac58ff1f6091b9672 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/LegacyEventDispatcherProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/LegacyEventDispatcherProxy.php"));

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

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * A helper class to provide BC/FC with the legacy signature of EventDispatcherInterface::dispatch().
 *
 * This class should be deprecated in Symfony 5.1
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class LegacyEventDispatcherProxy implements EventDispatcherInterface
{
    private \$dispatcher;

    public static function decorate(?ContractsEventDispatcherInterface \$dispatcher): ?ContractsEventDispatcherInterface
    {
        if (null === \$dispatcher) {
            return null;
        }
        \$r = new \\ReflectionMethod(\$dispatcher, 'dispatch');
        \$param2 = \$r->getParameters()[1] ?? null;

        if (!\$param2 || !\$param2->hasType() || \$param2->getType()->isBuiltin()) {
            return \$dispatcher;
        }

        @trigger_error(sprintf('The signature of the \"%s::dispatch()\" method should be updated to \"dispatch(\$event, string \$eventName = null)\", not doing so is deprecated since Symfony 4.3.', \$r->class), E_USER_DEPRECATED);

        \$self = new self();
        \$self->dispatcher = \$dispatcher;

        return \$self;
    }

    /**
     * {@inheritdoc}
     *
     * @param string|null \$eventName
     *
     * @return object
     */
    public function dispatch(\$event/*, string \$eventName = null*/)
    {
        \$eventName = 1 < \\func_num_args() ? func_get_arg(1) : null;

        if (\\is_object(\$event)) {
            \$eventName = \$eventName ?? \\get_class(\$event);
        } elseif (\\is_string(\$event) && (null === \$eventName || \$eventName instanceof Event)) {
            @trigger_error(sprintf('Calling the \"%s::dispatch()\" method with the event name as the first argument is deprecated since Symfony 4.3, pass it as the second argument and provide the event object as the first argument instead.', ContractsEventDispatcherInterface::class), E_USER_DEPRECATED);
            \$swap = \$event;
            \$event = \$eventName ?? new Event();
            \$eventName = \$swap;
        } else {
            throw new \\TypeError(sprintf('Argument 1 passed to \"%s::dispatch()\" must be an object, %s given.', ContractsEventDispatcherInterface::class, \\is_object(\$event) ? \\get_class(\$event) : \\gettype(\$event)));
        }

        \$listeners = \$this->getListeners(\$eventName);
        \$stoppable = \$event instanceof Event || \$event instanceof ContractsEvent || \$event instanceof StoppableEventInterface;

        foreach (\$listeners as \$listener) {
            if (\$stoppable && \$event->isPropagationStopped()) {
                break;
            }
            \$listener(\$event, \$eventName, \$this);
        }

        return \$event;
    }

    /**
     * {@inheritdoc}
     */
    public function addListener(\$eventName, \$listener, \$priority = 0)
    {
        return \$this->dispatcher->addListener(\$eventName, \$listener, \$priority);
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber)
    {
        return \$this->dispatcher->addSubscriber(\$subscriber);
    }

    /**
     * {@inheritdoc}
     */
    public function removeListener(\$eventName, \$listener)
    {
        return \$this->dispatcher->removeListener(\$eventName, \$listener);
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface \$subscriber)
    {
        return \$this->dispatcher->removeSubscriber(\$subscriber);
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

    /**
     * Proxies all method calls to the original event dispatcher.
     */
    public function __call(\$method, \$arguments)
    {
        return \$this->dispatcher->{\$method}(...\$arguments);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/LegacyEventDispatcherProxy.php";
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

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * A helper class to provide BC/FC with the legacy signature of EventDispatcherInterface::dispatch().
 *
 * This class should be deprecated in Symfony 5.1
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class LegacyEventDispatcherProxy implements EventDispatcherInterface
{
    private \$dispatcher;

    public static function decorate(?ContractsEventDispatcherInterface \$dispatcher): ?ContractsEventDispatcherInterface
    {
        if (null === \$dispatcher) {
            return null;
        }
        \$r = new \\ReflectionMethod(\$dispatcher, 'dispatch');
        \$param2 = \$r->getParameters()[1] ?? null;

        if (!\$param2 || !\$param2->hasType() || \$param2->getType()->isBuiltin()) {
            return \$dispatcher;
        }

        @trigger_error(sprintf('The signature of the \"%s::dispatch()\" method should be updated to \"dispatch(\$event, string \$eventName = null)\", not doing so is deprecated since Symfony 4.3.', \$r->class), E_USER_DEPRECATED);

        \$self = new self();
        \$self->dispatcher = \$dispatcher;

        return \$self;
    }

    /**
     * {@inheritdoc}
     *
     * @param string|null \$eventName
     *
     * @return object
     */
    public function dispatch(\$event/*, string \$eventName = null*/)
    {
        \$eventName = 1 < \\func_num_args() ? func_get_arg(1) : null;

        if (\\is_object(\$event)) {
            \$eventName = \$eventName ?? \\get_class(\$event);
        } elseif (\\is_string(\$event) && (null === \$eventName || \$eventName instanceof Event)) {
            @trigger_error(sprintf('Calling the \"%s::dispatch()\" method with the event name as the first argument is deprecated since Symfony 4.3, pass it as the second argument and provide the event object as the first argument instead.', ContractsEventDispatcherInterface::class), E_USER_DEPRECATED);
            \$swap = \$event;
            \$event = \$eventName ?? new Event();
            \$eventName = \$swap;
        } else {
            throw new \\TypeError(sprintf('Argument 1 passed to \"%s::dispatch()\" must be an object, %s given.', ContractsEventDispatcherInterface::class, \\is_object(\$event) ? \\get_class(\$event) : \\gettype(\$event)));
        }

        \$listeners = \$this->getListeners(\$eventName);
        \$stoppable = \$event instanceof Event || \$event instanceof ContractsEvent || \$event instanceof StoppableEventInterface;

        foreach (\$listeners as \$listener) {
            if (\$stoppable && \$event->isPropagationStopped()) {
                break;
            }
            \$listener(\$event, \$eventName, \$this);
        }

        return \$event;
    }

    /**
     * {@inheritdoc}
     */
    public function addListener(\$eventName, \$listener, \$priority = 0)
    {
        return \$this->dispatcher->addListener(\$eventName, \$listener, \$priority);
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber)
    {
        return \$this->dispatcher->addSubscriber(\$subscriber);
    }

    /**
     * {@inheritdoc}
     */
    public function removeListener(\$eventName, \$listener)
    {
        return \$this->dispatcher->removeListener(\$eventName, \$listener);
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface \$subscriber)
    {
        return \$this->dispatcher->removeSubscriber(\$subscriber);
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

    /**
     * Proxies all method calls to the original event dispatcher.
     */
    public function __call(\$method, \$arguments)
    {
        return \$this->dispatcher->{\$method}(...\$arguments);
    }
}
", "vendor/symfony/event-dispatcher/LegacyEventDispatcherProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/LegacyEventDispatcherProxy.php");
    }
}
