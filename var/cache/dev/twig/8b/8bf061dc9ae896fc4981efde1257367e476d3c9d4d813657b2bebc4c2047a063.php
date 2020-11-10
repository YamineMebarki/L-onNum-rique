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

/* vendor/zendframework/zend-eventmanager/src/EventManagerAwareTrait.php */
class __TwigTemplate_45413dce26316b50bdb1c3be9646b6d655b509b02fe71d49ccc146212847a72d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/EventManagerAwareTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/EventManagerAwareTrait.php"));

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

use Traversable;

/**
 * A trait for objects that provide events.
 *
 * If you use this trait in an object, you will probably want to also implement
 * EventManagerAwareInterface, which will make it so the default initializer in
 * a ZF2 MVC application will automatically inject an instance of the
 * EventManager into your object when it is pulled from the ServiceManager.
 *
 * @see Zend\\Mvc\\Service\\ServiceManagerConfig
 */
trait EventManagerAwareTrait
{
    /**
     * @var EventManagerInterface
     */
    protected \$events;

    /**
     * Set the event manager instance used by this context.
     *
     * For convenience, this method will also set the class name / LSB name as
     * identifiers, in addition to any string or array of strings set to the
     * \$this->eventIdentifier property.
     *
     * @param  EventManagerInterface \$events
     */
    public function setEventManager(EventManagerInterface \$events)
    {
        \$identifiers = [__CLASS__, get_class(\$this)];
        if (isset(\$this->eventIdentifier)) {
            if ((is_string(\$this->eventIdentifier))
                || (is_array(\$this->eventIdentifier))
                || (\$this->eventIdentifier instanceof Traversable)
            ) {
                \$identifiers = array_unique(array_merge(\$identifiers, (array) \$this->eventIdentifier));
            } elseif (is_object(\$this->eventIdentifier)) {
                \$identifiers[] = \$this->eventIdentifier;
            }
            // silently ignore invalid eventIdentifier types
        }
        \$events->setIdentifiers(\$identifiers);
        \$this->events = \$events;
        if (method_exists(\$this, 'attachDefaultListeners')) {
            \$this->attachDefaultListeners();
        }
    }

    /**
     * Retrieve the event manager
     *
     * Lazy-loads an EventManager instance if none registered.
     *
     * @return EventManagerInterface
     */
    public function getEventManager()
    {
        if (! \$this->events instanceof EventManagerInterface) {
            \$this->setEventManager(new EventManager());
        }
        return \$this->events;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/EventManagerAwareTrait.php";
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

use Traversable;

/**
 * A trait for objects that provide events.
 *
 * If you use this trait in an object, you will probably want to also implement
 * EventManagerAwareInterface, which will make it so the default initializer in
 * a ZF2 MVC application will automatically inject an instance of the
 * EventManager into your object when it is pulled from the ServiceManager.
 *
 * @see Zend\\Mvc\\Service\\ServiceManagerConfig
 */
trait EventManagerAwareTrait
{
    /**
     * @var EventManagerInterface
     */
    protected \$events;

    /**
     * Set the event manager instance used by this context.
     *
     * For convenience, this method will also set the class name / LSB name as
     * identifiers, in addition to any string or array of strings set to the
     * \$this->eventIdentifier property.
     *
     * @param  EventManagerInterface \$events
     */
    public function setEventManager(EventManagerInterface \$events)
    {
        \$identifiers = [__CLASS__, get_class(\$this)];
        if (isset(\$this->eventIdentifier)) {
            if ((is_string(\$this->eventIdentifier))
                || (is_array(\$this->eventIdentifier))
                || (\$this->eventIdentifier instanceof Traversable)
            ) {
                \$identifiers = array_unique(array_merge(\$identifiers, (array) \$this->eventIdentifier));
            } elseif (is_object(\$this->eventIdentifier)) {
                \$identifiers[] = \$this->eventIdentifier;
            }
            // silently ignore invalid eventIdentifier types
        }
        \$events->setIdentifiers(\$identifiers);
        \$this->events = \$events;
        if (method_exists(\$this, 'attachDefaultListeners')) {
            \$this->attachDefaultListeners();
        }
    }

    /**
     * Retrieve the event manager
     *
     * Lazy-loads an EventManager instance if none registered.
     *
     * @return EventManagerInterface
     */
    public function getEventManager()
    {
        if (! \$this->events instanceof EventManagerInterface) {
            \$this->setEventManager(new EventManager());
        }
        return \$this->events;
    }
}
", "vendor/zendframework/zend-eventmanager/src/EventManagerAwareTrait.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/EventManagerAwareTrait.php");
    }
}
