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

/* vendor/zendframework/zend-eventmanager/src/LazyListener.php */
class __TwigTemplate_bea7c1ec84af418f2e867b33b7739918fb8f72b02d2456a03102b9685266e8bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/LazyListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/LazyListener.php"));

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
 * Lazy listener instance.
 *
 * Used to allow lazy creation of listeners via a dependency injection
 * container.
 *
 * Lazy listener definitions have the following members:
 *
 * - listener: the service name of the listener to use.
 * - method: the method name of the listener to invoke for the specified event.
 *
 * If desired, you can pass \$env at instantiation; this will be passed to the
 * container's `build()` method, if it has one, when creating the listener
 * instance.
 *
 * Pass instances directly to the event manager's `attach()` method as the
 * listener argument.
 */
class LazyListener
{
    /**
     * @var ContainerInterface Container from which to pull listener.
     */
    private \$container;

    /**
     * @var array Variables/options to use during service creation, if any.
     */
    private \$env;

    /**
     * @var callable Marshaled listener callback.
     */
    private \$listener;

    /**
     * @var string Method name to invoke on listener.
     */
    private \$method;

    /**
     * @var string Service name of listener.
     */
    private \$service;

    /**
     * @param array \$definition
     * @param ContainerInterface \$container
     * @param array \$env
     */
    public function __construct(array \$definition, ContainerInterface \$container, array \$env = [])
    {
        if ((! isset(\$definition['listener'])
            || ! is_string(\$definition['listener'])
            || empty(\$definition['listener']))
        ) {
            throw new Exception\\InvalidArgumentException(
                'Lazy listener definition is missing a valid \"listener\" member; cannot create LazyListener'
            );
        }

        if ((! isset(\$definition['method'])
            || ! is_string(\$definition['method'])
            || empty(\$definition['method']))
        ) {
            throw new Exception\\InvalidArgumentException(
                'Lazy listener definition is missing a valid \"method\" member; cannot create LazyListener'
            );
        }

        \$this->service   = \$definition['listener'];
        \$this->method    = \$definition['method'];
        \$this->container = \$container;
        \$this->env       = \$env;
    }

    /**
     * Use the listener as an invokable, allowing direct attachment to an event manager.
     *
     * @param EventInterface \$event
     * @return callable
     */
    public function __invoke(EventInterface \$event)
    {
        \$listener = \$this->fetchListener();
        \$method   = \$this->method;
        return \$listener->{\$method}(\$event);
    }

    /**
     * @return callable
     */
    private function fetchListener()
    {
        if (\$this->listener) {
            return \$this->listener;
        }

        // In the future, typehint against Zend\\ServiceManager\\ServiceLocatorInterface,
        // which defines this message starting in v3.
        if (method_exists(\$this->container, 'build') && ! empty(\$this->env)) {
            \$this->listener = \$this->container->build(\$this->service, \$this->env);
            return \$this->listener;
        }

        \$this->listener = \$this->container->get(\$this->service);
        return \$this->listener;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/LazyListener.php";
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
 * Lazy listener instance.
 *
 * Used to allow lazy creation of listeners via a dependency injection
 * container.
 *
 * Lazy listener definitions have the following members:
 *
 * - listener: the service name of the listener to use.
 * - method: the method name of the listener to invoke for the specified event.
 *
 * If desired, you can pass \$env at instantiation; this will be passed to the
 * container's `build()` method, if it has one, when creating the listener
 * instance.
 *
 * Pass instances directly to the event manager's `attach()` method as the
 * listener argument.
 */
class LazyListener
{
    /**
     * @var ContainerInterface Container from which to pull listener.
     */
    private \$container;

    /**
     * @var array Variables/options to use during service creation, if any.
     */
    private \$env;

    /**
     * @var callable Marshaled listener callback.
     */
    private \$listener;

    /**
     * @var string Method name to invoke on listener.
     */
    private \$method;

    /**
     * @var string Service name of listener.
     */
    private \$service;

    /**
     * @param array \$definition
     * @param ContainerInterface \$container
     * @param array \$env
     */
    public function __construct(array \$definition, ContainerInterface \$container, array \$env = [])
    {
        if ((! isset(\$definition['listener'])
            || ! is_string(\$definition['listener'])
            || empty(\$definition['listener']))
        ) {
            throw new Exception\\InvalidArgumentException(
                'Lazy listener definition is missing a valid \"listener\" member; cannot create LazyListener'
            );
        }

        if ((! isset(\$definition['method'])
            || ! is_string(\$definition['method'])
            || empty(\$definition['method']))
        ) {
            throw new Exception\\InvalidArgumentException(
                'Lazy listener definition is missing a valid \"method\" member; cannot create LazyListener'
            );
        }

        \$this->service   = \$definition['listener'];
        \$this->method    = \$definition['method'];
        \$this->container = \$container;
        \$this->env       = \$env;
    }

    /**
     * Use the listener as an invokable, allowing direct attachment to an event manager.
     *
     * @param EventInterface \$event
     * @return callable
     */
    public function __invoke(EventInterface \$event)
    {
        \$listener = \$this->fetchListener();
        \$method   = \$this->method;
        return \$listener->{\$method}(\$event);
    }

    /**
     * @return callable
     */
    private function fetchListener()
    {
        if (\$this->listener) {
            return \$this->listener;
        }

        // In the future, typehint against Zend\\ServiceManager\\ServiceLocatorInterface,
        // which defines this message starting in v3.
        if (method_exists(\$this->container, 'build') && ! empty(\$this->env)) {
            \$this->listener = \$this->container->build(\$this->service, \$this->env);
            return \$this->listener;
        }

        \$this->listener = \$this->container->get(\$this->service);
        return \$this->listener;
    }
}
", "vendor/zendframework/zend-eventmanager/src/LazyListener.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/LazyListener.php");
    }
}
