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

/* vendor/zendframework/zend-eventmanager/src/EventInterface.php */
class __TwigTemplate_a5cef0566c73a240b93424ffebf6ff417cbcea97d10f1142aacab178349b5a4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/EventInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/EventInterface.php"));

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
 */
interface EventInterface
{
    /**
     * Get event name
     *
     * @return string
     */
    public function getName();

    /**
     * Get target/context from which event was triggered
     *
     * @return null|string|object
     */
    public function getTarget();

    /**
     * Get parameters passed to the event
     *
     * @return array|ArrayAccess
     */
    public function getParams();

    /**
     * Get a single parameter by name
     *
     * @param  string \$name
     * @param  mixed \$default Default value to return if parameter does not exist
     * @return mixed
     */
    public function getParam(\$name, \$default = null);

    /**
     * Set the event name
     *
     * @param  string \$name
     * @return void
     */
    public function setName(\$name);

    /**
     * Set the event target/context
     *
     * @param  null|string|object \$target
     * @return void
     */
    public function setTarget(\$target);

    /**
     * Set event parameters
     *
     * @param  array|ArrayAccess \$params
     * @return void
     */
    public function setParams(\$params);

    /**
     * Set a single parameter by key
     *
     * @param  string \$name
     * @param  mixed \$value
     * @return void
     */
    public function setParam(\$name, \$value);

    /**
     * Indicate whether or not the parent EventManagerInterface should stop propagating events
     *
     * @param  bool \$flag
     * @return void
     */
    public function stopPropagation(\$flag = true);

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function propagationIsStopped();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/EventInterface.php";
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
 */
interface EventInterface
{
    /**
     * Get event name
     *
     * @return string
     */
    public function getName();

    /**
     * Get target/context from which event was triggered
     *
     * @return null|string|object
     */
    public function getTarget();

    /**
     * Get parameters passed to the event
     *
     * @return array|ArrayAccess
     */
    public function getParams();

    /**
     * Get a single parameter by name
     *
     * @param  string \$name
     * @param  mixed \$default Default value to return if parameter does not exist
     * @return mixed
     */
    public function getParam(\$name, \$default = null);

    /**
     * Set the event name
     *
     * @param  string \$name
     * @return void
     */
    public function setName(\$name);

    /**
     * Set the event target/context
     *
     * @param  null|string|object \$target
     * @return void
     */
    public function setTarget(\$target);

    /**
     * Set event parameters
     *
     * @param  array|ArrayAccess \$params
     * @return void
     */
    public function setParams(\$params);

    /**
     * Set a single parameter by key
     *
     * @param  string \$name
     * @param  mixed \$value
     * @return void
     */
    public function setParam(\$name, \$value);

    /**
     * Indicate whether or not the parent EventManagerInterface should stop propagating events
     *
     * @param  bool \$flag
     * @return void
     */
    public function stopPropagation(\$flag = true);

    /**
     * Has this event indicated event propagation should stop?
     *
     * @return bool
     */
    public function propagationIsStopped();
}
", "vendor/zendframework/zend-eventmanager/src/EventInterface.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/EventInterface.php");
    }
}
