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

/* vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php */
class __TwigTemplate_83e0f6f4f1d50027d4e623cf02546a2bbf71a0dfad2032bcaea48023a24ffdf6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php"));

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

namespace Symfony\\Contracts\\EventDispatcher;

use Psr\\EventDispatcher\\EventDispatcherInterface as PsrEventDispatcherInterface;

if (interface_exists(PsrEventDispatcherInterface::class)) {
    /**
     * Allows providing hooks on domain-specific lifecycles by dispatching events.
     */
    interface EventDispatcherInterface extends PsrEventDispatcherInterface
    {
        /**
         * Dispatches an event to all registered listeners.
         *
         * For BC with Symfony 4, the \$eventName argument is not declared explicitly on the
         * signature of the method. Implementations that are not bound by this BC constraint
         * MUST declare it explicitly, as allowed by PHP.
         *
         * @param object      \$event     The event to pass to the event handlers/listeners
         * @param string|null \$eventName The name of the event to dispatch. If not supplied,
         *                               the class of \$event should be used instead.
         *
         * @return object The passed \$event MUST be returned
         */
        public function dispatch(\$event/*, string \$eventName = null*/);
    }
} else {
    /**
     * Allows providing hooks on domain-specific lifecycles by dispatching events.
     */
    interface EventDispatcherInterface
    {
        /**
         * Dispatches an event to all registered listeners.
         *
         * For BC with Symfony 4, the \$eventName argument is not declared explicitly on the
         * signature of the method. Implementations that are not bound by this BC constraint
         * MUST declare it explicitly, as allowed by PHP.
         *
         * @param object      \$event     The event to pass to the event handlers/listeners
         * @param string|null \$eventName The name of the event to dispatch. If not supplied,
         *                               the class of \$event should be used instead.
         *
         * @return object The passed \$event MUST be returned
         */
        public function dispatch(\$event/*, string \$eventName = null*/);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php";
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

namespace Symfony\\Contracts\\EventDispatcher;

use Psr\\EventDispatcher\\EventDispatcherInterface as PsrEventDispatcherInterface;

if (interface_exists(PsrEventDispatcherInterface::class)) {
    /**
     * Allows providing hooks on domain-specific lifecycles by dispatching events.
     */
    interface EventDispatcherInterface extends PsrEventDispatcherInterface
    {
        /**
         * Dispatches an event to all registered listeners.
         *
         * For BC with Symfony 4, the \$eventName argument is not declared explicitly on the
         * signature of the method. Implementations that are not bound by this BC constraint
         * MUST declare it explicitly, as allowed by PHP.
         *
         * @param object      \$event     The event to pass to the event handlers/listeners
         * @param string|null \$eventName The name of the event to dispatch. If not supplied,
         *                               the class of \$event should be used instead.
         *
         * @return object The passed \$event MUST be returned
         */
        public function dispatch(\$event/*, string \$eventName = null*/);
    }
} else {
    /**
     * Allows providing hooks on domain-specific lifecycles by dispatching events.
     */
    interface EventDispatcherInterface
    {
        /**
         * Dispatches an event to all registered listeners.
         *
         * For BC with Symfony 4, the \$eventName argument is not declared explicitly on the
         * signature of the method. Implementations that are not bound by this BC constraint
         * MUST declare it explicitly, as allowed by PHP.
         *
         * @param object      \$event     The event to pass to the event handlers/listeners
         * @param string|null \$eventName The name of the event to dispatch. If not supplied,
         *                               the class of \$event should be used instead.
         *
         * @return object The passed \$event MUST be returned
         */
        public function dispatch(\$event/*, string \$eventName = null*/);
    }
}
", "vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php");
    }
}
