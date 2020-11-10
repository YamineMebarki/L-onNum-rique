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

/* vendor/zendframework/zend-eventmanager/src/SharedEventManagerInterface.php */
class __TwigTemplate_e4c794ea65f00ad82b751129d418baa4928ea23cc0765dc7dfe6a423191f8436 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/SharedEventManagerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/SharedEventManagerInterface.php"));

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

/**
 * Interface for shared event listener collections
 */
interface SharedEventManagerInterface
{
    /**
     * Attach a listener to an event emitted by components with specific identifiers.
     *
     * @param  string \$identifier Identifier for event emitting component
     * @param  string \$eventName
     * @param  callable \$listener Listener that will handle the event.
     * @param  int \$priority Priority at which listener should execute
     */
    public function attach(\$identifier, \$eventName, callable \$listener, \$priority = 1);

    /**
     * Detach a shared listener.
     *
     * Allows detaching a listener from one or more events to which it may be
     * attached.
     *
     * @param  callable \$listener Listener to detach.
     * @param  null|string \$identifier Identifier from which to detach; null indicates
     *      all registered identifiers.
     * @param  null|string \$eventName Event from which to detach; null indicates
     *      all registered events.
     * @throws Exception\\InvalidArgumentException for invalid identifier arguments.
     * @throws Exception\\InvalidArgumentException for invalid event arguments.
     */
    public function detach(callable \$listener, \$identifier = null, \$eventName = null);

    /**
     * Retrieve all listeners for given identifiers
     *
     * @param  array \$identifiers
     * @param  string \$eventName
     * @return array
     */
    public function getListeners(array \$identifiers, \$eventName);

    /**
     * Clear all listeners for a given identifier, optionally for a specific event
     *
     * @param  string \$identifier
     * @param  null|string \$eventName
     */
    public function clearListeners(\$identifier, \$eventName = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/SharedEventManagerInterface.php";
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

/**
 * Interface for shared event listener collections
 */
interface SharedEventManagerInterface
{
    /**
     * Attach a listener to an event emitted by components with specific identifiers.
     *
     * @param  string \$identifier Identifier for event emitting component
     * @param  string \$eventName
     * @param  callable \$listener Listener that will handle the event.
     * @param  int \$priority Priority at which listener should execute
     */
    public function attach(\$identifier, \$eventName, callable \$listener, \$priority = 1);

    /**
     * Detach a shared listener.
     *
     * Allows detaching a listener from one or more events to which it may be
     * attached.
     *
     * @param  callable \$listener Listener to detach.
     * @param  null|string \$identifier Identifier from which to detach; null indicates
     *      all registered identifiers.
     * @param  null|string \$eventName Event from which to detach; null indicates
     *      all registered events.
     * @throws Exception\\InvalidArgumentException for invalid identifier arguments.
     * @throws Exception\\InvalidArgumentException for invalid event arguments.
     */
    public function detach(callable \$listener, \$identifier = null, \$eventName = null);

    /**
     * Retrieve all listeners for given identifiers
     *
     * @param  array \$identifiers
     * @param  string \$eventName
     * @return array
     */
    public function getListeners(array \$identifiers, \$eventName);

    /**
     * Clear all listeners for a given identifier, optionally for a specific event
     *
     * @param  string \$identifier
     * @param  null|string \$eventName
     */
    public function clearListeners(\$identifier, \$eventName = null);
}
", "vendor/zendframework/zend-eventmanager/src/SharedEventManagerInterface.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/SharedEventManagerInterface.php");
    }
}
