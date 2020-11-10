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

/* vendor/zendframework/zend-eventmanager/src/LazyEventListener.php */
class __TwigTemplate_361cba74ed2f73922e7d125087dbf230d14983711af6001588619e42c071233a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/LazyEventListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/LazyEventListener.php"));

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

use Interop\\Container\\ContainerInterface;

/**
 * Lazy listener instance for use with LazyListenerAggregate.
 *
 * Used as an internal class for the LazyAggregate to allow lazy creation of
 * listeners via a dependency injection container.
 *
 * Lazy event listener definitions add the following members to what the
 * LazyListener accepts:
 *
 * - event: the event name to attach to.
 * - priority: the priority at which to attach the listener, if not the default.
 */
class LazyEventListener extends LazyListener
{
    /**
     * @var string Event name to which to attach.
     */
    private \$event;

    /**
     * @var null|int Priority at which to attach.
     */
    private \$priority;

    /**
     * @param array \$definition
     * @param ContainerInterface \$container
     * @param array \$env
     */
    public function __construct(array \$definition, ContainerInterface \$container, array \$env = [])
    {
        parent::__construct(\$definition, \$container, \$env);

        if ((! isset(\$definition['event'])
            || ! is_string(\$definition['event'])
            || empty(\$definition['event']))
        ) {
            throw new Exception\\InvalidArgumentException(
                'Lazy listener definition is missing a valid \"event\" member; cannot create LazyListener'
            );
        }

        \$this->event     = \$definition['event'];
        \$this->priority  = isset(\$definition['priority']) ? (int) \$definition['priority'] : null;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return \$this->event;
    }

    /**
     * @return int
     */
    public function getPriority(\$default = 1)
    {
        return (null !== \$this->priority) ? \$this->priority : \$default;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/LazyEventListener.php";
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

use Interop\\Container\\ContainerInterface;

/**
 * Lazy listener instance for use with LazyListenerAggregate.
 *
 * Used as an internal class for the LazyAggregate to allow lazy creation of
 * listeners via a dependency injection container.
 *
 * Lazy event listener definitions add the following members to what the
 * LazyListener accepts:
 *
 * - event: the event name to attach to.
 * - priority: the priority at which to attach the listener, if not the default.
 */
class LazyEventListener extends LazyListener
{
    /**
     * @var string Event name to which to attach.
     */
    private \$event;

    /**
     * @var null|int Priority at which to attach.
     */
    private \$priority;

    /**
     * @param array \$definition
     * @param ContainerInterface \$container
     * @param array \$env
     */
    public function __construct(array \$definition, ContainerInterface \$container, array \$env = [])
    {
        parent::__construct(\$definition, \$container, \$env);

        if ((! isset(\$definition['event'])
            || ! is_string(\$definition['event'])
            || empty(\$definition['event']))
        ) {
            throw new Exception\\InvalidArgumentException(
                'Lazy listener definition is missing a valid \"event\" member; cannot create LazyListener'
            );
        }

        \$this->event     = \$definition['event'];
        \$this->priority  = isset(\$definition['priority']) ? (int) \$definition['priority'] : null;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return \$this->event;
    }

    /**
     * @return int
     */
    public function getPriority(\$default = 1)
    {
        return (null !== \$this->priority) ? \$this->priority : \$default;
    }
}
", "vendor/zendframework/zend-eventmanager/src/LazyEventListener.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/LazyEventListener.php");
    }
}
