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

/* vendor/zendframework/zend-eventmanager/src/Event.php */
class __TwigTemplate_dd3af0affaaa4044a45c8adb60a9dbe9b133eef533d41e7d9b9437a4e77fd514 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/Event.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/Event.php"));

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

use ArrayAccess;

/**
 * Representation of an event
 *
 * Encapsulates the target context and parameters passed, and provides some
 * behavior for interacting with the event manager.
 */
class Event implements EventInterface
{
    /**
     * @var string Event name
     */
    protected \$name;

    /**
     * @var string|object The event target
     */
    protected \$target;

    /**
     * @var array|ArrayAccess|object The event parameters
     */
    protected \$params = [];

    /**
     * @var bool Whether or not to stop propagation
     */
    protected \$stopPropagation = false;

    /**
     * Constructor
     *
     * Accept a target and its parameters.
     *
     * @param  string \$name Event name
     * @param  string|object \$target
     * @param  array|ArrayAccess \$params
     */
    public function __construct(\$name = null, \$target = null, \$params = null)
    {
        if (null !== \$name) {
            \$this->setName(\$name);
        }

        if (null !== \$target) {
            \$this->setTarget(\$target);
        }

        if (null !== \$params) {
            \$this->setParams(\$params);
        }
    }

    /**
     * Get event name
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Get the event target
     *
     * This may be either an object, or the name of a static method.
     *
     * @return string|object
     */
    public function getTarget()
    {
        return \$this->target;
    }

    /**
     * Set parameters
     *
     * Overwrites parameters
     *
     * @param  array|ArrayAccess|object \$params
     * @throws Exception\\InvalidArgumentException
     */
    public function setParams(\$params)
    {
        if (! is_array(\$params) && ! is_object(\$params)) {
            throw new Exception\\InvalidArgumentException(
                sprintf('Event parameters must be an array or object; received \"%s\"', gettype(\$params))
            );
        }

        \$this->params = \$params;
    }

    /**
     * Get all parameters
     *
     * @return array|object|ArrayAccess
     */
    public function getParams()
    {
        return \$this->params;
    }

    /**
     * Get an individual parameter
     *
     * If the parameter does not exist, the \$default value will be returned.
     *
     * @param  string|int \$name
     * @param  mixed \$default
     * @return mixed
     */
    public function getParam(\$name, \$default = null)
    {
        // Check in params that are arrays or implement array access
        if (is_array(\$this->params) || \$this->params instanceof ArrayAccess) {
            if (! isset(\$this->params[\$name])) {
                return \$default;
            }

            return \$this->params[\$name];
        }

        // Check in normal objects
        if (! isset(\$this->params->{\$name})) {
            return \$default;
        }
        return \$this->params->{\$name};
    }

    /**
     * Set the event name
     *
     * @param  string \$name
     */
    public function setName(\$name)
    {
        \$this->name = (string) \$name;
    }

    /**
     * Set the event target/context
     *
     * @param  null|string|object \$target
     */
    public function setTarget(\$target)
    {
        \$this->target = \$target;
    }

    /**
     * Set an individual parameter to a value
     *
     * @param  string|int \$name
     * @param  mixed \$value
     */
    public function setParam(\$name, \$value)
    {
        if (is_array(\$this->params) || \$this->params instanceof ArrayAccess) {
            // Arrays or objects implementing array access
            \$this->params[\$name] = \$value;
            return;
        }

        // Objects
        \$this->params->{\$name} = \$value;
    }

    /**
     * Stop further event propagation
     *
     * @param  bool \$flag
     */
    public function stopPropagation(\$flag = true)
    {
        \$this->stopPropagation = (bool) \$flag;
    }

    /**
     * Is propagation stopped?
     *
     * @return bool
     */
    public function propagationIsStopped()
    {
        return \$this->stopPropagation;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/Event.php";
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

use ArrayAccess;

/**
 * Representation of an event
 *
 * Encapsulates the target context and parameters passed, and provides some
 * behavior for interacting with the event manager.
 */
class Event implements EventInterface
{
    /**
     * @var string Event name
     */
    protected \$name;

    /**
     * @var string|object The event target
     */
    protected \$target;

    /**
     * @var array|ArrayAccess|object The event parameters
     */
    protected \$params = [];

    /**
     * @var bool Whether or not to stop propagation
     */
    protected \$stopPropagation = false;

    /**
     * Constructor
     *
     * Accept a target and its parameters.
     *
     * @param  string \$name Event name
     * @param  string|object \$target
     * @param  array|ArrayAccess \$params
     */
    public function __construct(\$name = null, \$target = null, \$params = null)
    {
        if (null !== \$name) {
            \$this->setName(\$name);
        }

        if (null !== \$target) {
            \$this->setTarget(\$target);
        }

        if (null !== \$params) {
            \$this->setParams(\$params);
        }
    }

    /**
     * Get event name
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Get the event target
     *
     * This may be either an object, or the name of a static method.
     *
     * @return string|object
     */
    public function getTarget()
    {
        return \$this->target;
    }

    /**
     * Set parameters
     *
     * Overwrites parameters
     *
     * @param  array|ArrayAccess|object \$params
     * @throws Exception\\InvalidArgumentException
     */
    public function setParams(\$params)
    {
        if (! is_array(\$params) && ! is_object(\$params)) {
            throw new Exception\\InvalidArgumentException(
                sprintf('Event parameters must be an array or object; received \"%s\"', gettype(\$params))
            );
        }

        \$this->params = \$params;
    }

    /**
     * Get all parameters
     *
     * @return array|object|ArrayAccess
     */
    public function getParams()
    {
        return \$this->params;
    }

    /**
     * Get an individual parameter
     *
     * If the parameter does not exist, the \$default value will be returned.
     *
     * @param  string|int \$name
     * @param  mixed \$default
     * @return mixed
     */
    public function getParam(\$name, \$default = null)
    {
        // Check in params that are arrays or implement array access
        if (is_array(\$this->params) || \$this->params instanceof ArrayAccess) {
            if (! isset(\$this->params[\$name])) {
                return \$default;
            }

            return \$this->params[\$name];
        }

        // Check in normal objects
        if (! isset(\$this->params->{\$name})) {
            return \$default;
        }
        return \$this->params->{\$name};
    }

    /**
     * Set the event name
     *
     * @param  string \$name
     */
    public function setName(\$name)
    {
        \$this->name = (string) \$name;
    }

    /**
     * Set the event target/context
     *
     * @param  null|string|object \$target
     */
    public function setTarget(\$target)
    {
        \$this->target = \$target;
    }

    /**
     * Set an individual parameter to a value
     *
     * @param  string|int \$name
     * @param  mixed \$value
     */
    public function setParam(\$name, \$value)
    {
        if (is_array(\$this->params) || \$this->params instanceof ArrayAccess) {
            // Arrays or objects implementing array access
            \$this->params[\$name] = \$value;
            return;
        }

        // Objects
        \$this->params->{\$name} = \$value;
    }

    /**
     * Stop further event propagation
     *
     * @param  bool \$flag
     */
    public function stopPropagation(\$flag = true)
    {
        \$this->stopPropagation = (bool) \$flag;
    }

    /**
     * Is propagation stopped?
     *
     * @return bool
     */
    public function propagationIsStopped()
    {
        return \$this->stopPropagation;
    }
}
", "vendor/zendframework/zend-eventmanager/src/Event.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/Event.php");
    }
}
