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

/* vendor/zendframework/zend-eventmanager/src/ListenerAggregateInterface.php */
class __TwigTemplate_c232b0256eafe2a9889357926f1d1d30af6b46cfc83180c82c3b5eaf72d4f0e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/ListenerAggregateInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/ListenerAggregateInterface.php"));

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
 * Interface for self-registering event listeners.
 *
 * Classes implementing this interface may be registered by name or instance
 * with an EventManager, without an event name. The {@link attach()} method will
 * then be called with the current EventManager instance, allowing the class to
 * wire up one or more listeners.
 */
interface ListenerAggregateInterface
{
    /**
     * Attach one or more listeners
     *
     * Implementors may add an optional \$priority argument; the EventManager
     * implementation will pass this to the aggregate.
     *
     * @param EventManagerInterface \$events
     * @param int                   \$priority
     * @return void
     */
    public function attach(EventManagerInterface \$events, \$priority = 1);

    /**
     * Detach all previously attached listeners
     *
     * @param EventManagerInterface \$events
     * @return void
     */
    public function detach(EventManagerInterface \$events);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/ListenerAggregateInterface.php";
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
 * Interface for self-registering event listeners.
 *
 * Classes implementing this interface may be registered by name or instance
 * with an EventManager, without an event name. The {@link attach()} method will
 * then be called with the current EventManager instance, allowing the class to
 * wire up one or more listeners.
 */
interface ListenerAggregateInterface
{
    /**
     * Attach one or more listeners
     *
     * Implementors may add an optional \$priority argument; the EventManager
     * implementation will pass this to the aggregate.
     *
     * @param EventManagerInterface \$events
     * @param int                   \$priority
     * @return void
     */
    public function attach(EventManagerInterface \$events, \$priority = 1);

    /**
     * Detach all previously attached listeners
     *
     * @param EventManagerInterface \$events
     * @return void
     */
    public function detach(EventManagerInterface \$events);
}
", "vendor/zendframework/zend-eventmanager/src/ListenerAggregateInterface.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/ListenerAggregateInterface.php");
    }
}
