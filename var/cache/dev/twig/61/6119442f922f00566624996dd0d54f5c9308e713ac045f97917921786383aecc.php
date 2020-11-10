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

/* vendor/symfony/event-dispatcher/Debug/WrappedListener.php */
class __TwigTemplate_0d5a4201de0e2e8613cfcb6d5b25ed26a989e0f69463b358d5c05fae3e5da060 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Debug/WrappedListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Debug/WrappedListener.php"));

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

namespace Symfony\\Component\\EventDispatcher\\Debug;

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\LegacyEventProxy;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3: the \"Event\" type-hint on __invoke() will be replaced by \"object\" in 5.0
 */
class WrappedListener
{
    private \$listener;
    private \$optimizedListener;
    private \$name;
    private \$called;
    private \$stoppedPropagation;
    private \$stopwatch;
    private \$dispatcher;
    private \$pretty;
    private \$stub;
    private \$priority;
    private static \$hasClassStub;

    public function __construct(\$listener, ?string \$name, Stopwatch \$stopwatch, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->listener = \$listener;
        \$this->optimizedListener = \$listener instanceof \\Closure ? \$listener : (\\is_callable(\$listener) ? \\Closure::fromCallable(\$listener) : null);
        \$this->stopwatch = \$stopwatch;
        \$this->dispatcher = \$dispatcher;
        \$this->called = false;
        \$this->stoppedPropagation = false;

        if (\\is_array(\$listener)) {
            \$this->name = \\is_object(\$listener[0]) ? \\get_class(\$listener[0]) : \$listener[0];
            \$this->pretty = \$this->name.'::'.\$listener[1];
        } elseif (\$listener instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$listener);
            if (false !== strpos(\$r->name, '{closure}')) {
                \$this->pretty = \$this->name = 'closure';
            } elseif (\$class = \$r->getClosureScopeClass()) {
                \$this->name = \$class->name;
                \$this->pretty = \$this->name.'::'.\$r->name;
            } else {
                \$this->pretty = \$this->name = \$r->name;
            }
        } elseif (\\is_string(\$listener)) {
            \$this->pretty = \$this->name = \$listener;
        } else {
            \$this->name = \\get_class(\$listener);
            \$this->pretty = \$this->name.'::__invoke';
        }

        if (null !== \$name) {
            \$this->name = \$name;
        }

        if (null === self::\$hasClassStub) {
            self::\$hasClassStub = class_exists(ClassStub::class);
        }
    }

    public function getWrappedListener()
    {
        return \$this->listener;
    }

    public function wasCalled()
    {
        return \$this->called;
    }

    public function stoppedPropagation()
    {
        return \$this->stoppedPropagation;
    }

    public function getPretty()
    {
        return \$this->pretty;
    }

    public function getInfo(\$eventName)
    {
        if (null === \$this->stub) {
            \$this->stub = self::\$hasClassStub ? new ClassStub(\$this->pretty.'()', \$this->listener) : \$this->pretty.'()';
        }

        return [
            'event' => \$eventName,
            'priority' => null !== \$this->priority ? \$this->priority : (null !== \$this->dispatcher ? \$this->dispatcher->getListenerPriority(\$eventName, \$this->listener) : null),
            'pretty' => \$this->pretty,
            'stub' => \$this->stub,
        ];
    }

    public function __invoke(Event \$event, \$eventName, EventDispatcherInterface \$dispatcher)
    {
        if (\$event instanceof LegacyEventProxy) {
            \$event = \$event->getEvent();
        }

        \$dispatcher = \$this->dispatcher ?: \$dispatcher;

        \$this->called = true;
        \$this->priority = \$dispatcher->getListenerPriority(\$eventName, \$this->listener);

        \$e = \$this->stopwatch->start(\$this->name, 'event_listener');

        (\$this->optimizedListener ?? \$this->listener)(\$event, \$eventName, \$dispatcher);

        if (\$e->isStarted()) {
            \$e->stop();
        }

        if ((\$event instanceof Event || \$event instanceof ContractsEvent || \$event instanceof StoppableEventInterface) && \$event->isPropagationStopped()) {
            \$this->stoppedPropagation = true;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/Debug/WrappedListener.php";
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

namespace Symfony\\Component\\EventDispatcher\\Debug;

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\LegacyEventProxy;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3: the \"Event\" type-hint on __invoke() will be replaced by \"object\" in 5.0
 */
class WrappedListener
{
    private \$listener;
    private \$optimizedListener;
    private \$name;
    private \$called;
    private \$stoppedPropagation;
    private \$stopwatch;
    private \$dispatcher;
    private \$pretty;
    private \$stub;
    private \$priority;
    private static \$hasClassStub;

    public function __construct(\$listener, ?string \$name, Stopwatch \$stopwatch, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->listener = \$listener;
        \$this->optimizedListener = \$listener instanceof \\Closure ? \$listener : (\\is_callable(\$listener) ? \\Closure::fromCallable(\$listener) : null);
        \$this->stopwatch = \$stopwatch;
        \$this->dispatcher = \$dispatcher;
        \$this->called = false;
        \$this->stoppedPropagation = false;

        if (\\is_array(\$listener)) {
            \$this->name = \\is_object(\$listener[0]) ? \\get_class(\$listener[0]) : \$listener[0];
            \$this->pretty = \$this->name.'::'.\$listener[1];
        } elseif (\$listener instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$listener);
            if (false !== strpos(\$r->name, '{closure}')) {
                \$this->pretty = \$this->name = 'closure';
            } elseif (\$class = \$r->getClosureScopeClass()) {
                \$this->name = \$class->name;
                \$this->pretty = \$this->name.'::'.\$r->name;
            } else {
                \$this->pretty = \$this->name = \$r->name;
            }
        } elseif (\\is_string(\$listener)) {
            \$this->pretty = \$this->name = \$listener;
        } else {
            \$this->name = \\get_class(\$listener);
            \$this->pretty = \$this->name.'::__invoke';
        }

        if (null !== \$name) {
            \$this->name = \$name;
        }

        if (null === self::\$hasClassStub) {
            self::\$hasClassStub = class_exists(ClassStub::class);
        }
    }

    public function getWrappedListener()
    {
        return \$this->listener;
    }

    public function wasCalled()
    {
        return \$this->called;
    }

    public function stoppedPropagation()
    {
        return \$this->stoppedPropagation;
    }

    public function getPretty()
    {
        return \$this->pretty;
    }

    public function getInfo(\$eventName)
    {
        if (null === \$this->stub) {
            \$this->stub = self::\$hasClassStub ? new ClassStub(\$this->pretty.'()', \$this->listener) : \$this->pretty.'()';
        }

        return [
            'event' => \$eventName,
            'priority' => null !== \$this->priority ? \$this->priority : (null !== \$this->dispatcher ? \$this->dispatcher->getListenerPriority(\$eventName, \$this->listener) : null),
            'pretty' => \$this->pretty,
            'stub' => \$this->stub,
        ];
    }

    public function __invoke(Event \$event, \$eventName, EventDispatcherInterface \$dispatcher)
    {
        if (\$event instanceof LegacyEventProxy) {
            \$event = \$event->getEvent();
        }

        \$dispatcher = \$this->dispatcher ?: \$dispatcher;

        \$this->called = true;
        \$this->priority = \$dispatcher->getListenerPriority(\$eventName, \$this->listener);

        \$e = \$this->stopwatch->start(\$this->name, 'event_listener');

        (\$this->optimizedListener ?? \$this->listener)(\$event, \$eventName, \$dispatcher);

        if (\$e->isStarted()) {
            \$e->stop();
        }

        if ((\$event instanceof Event || \$event instanceof ContractsEvent || \$event instanceof StoppableEventInterface) && \$event->isPropagationStopped()) {
            \$this->stoppedPropagation = true;
        }
    }
}
", "vendor/symfony/event-dispatcher/Debug/WrappedListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/Debug/WrappedListener.php");
    }
}
