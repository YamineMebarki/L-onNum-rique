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

/* vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php */
class __TwigTemplate_f56fd0621efe7531358873e12528a2d0957e45fc3bd8eef4bdcad6f7e4c4315f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php"));

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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\EventManager;
use Psr\\Container\\ContainerInterface;

/**
 * Allows lazy loading of listener services.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ContainerAwareEventManager extends EventManager
{
    /**
     * Map of registered listeners.
     *
     * <event> => <listeners>
     */
    private \$listeners = [];
    private \$initialized = [];
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatchEvent(\$eventName, EventArgs \$eventArgs = null)
    {
        if (!isset(\$this->listeners[\$eventName])) {
            return;
        }

        \$eventArgs = null === \$eventArgs ? EventArgs::getEmptyInstance() : \$eventArgs;

        if (!isset(\$this->initialized[\$eventName])) {
            \$this->initializeListeners(\$eventName);
        }

        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            \$listener->\$eventName(\$eventArgs);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getListeners(\$event = null)
    {
        if (null !== \$event) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }

            return \$this->listeners[\$event];
        }

        foreach (\$this->listeners as \$event => \$listeners) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }
        }

        return \$this->listeners;
    }

    /**
     * {@inheritdoc}
     */
    public function hasListeners(\$event)
    {
        return isset(\$this->listeners[\$event]) && \$this->listeners[\$event];
    }

    /**
     * {@inheritdoc}
     */
    public function addEventListener(\$events, \$listener)
    {
        if (\\is_string(\$listener)) {
            \$hash = '_service_'.\$listener;
        } else {
            // Picks the hash code related to that listener
            \$hash = spl_object_hash(\$listener);
        }

        foreach ((array) \$events as \$event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            \$this->listeners[\$event][\$hash] = \$listener;

            if (\\is_string(\$listener)) {
                unset(\$this->initialized[\$event]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeEventListener(\$events, \$listener)
    {
        if (\\is_string(\$listener)) {
            \$hash = '_service_'.\$listener;
        } else {
            // Picks the hash code related to that listener
            \$hash = spl_object_hash(\$listener);
        }

        foreach ((array) \$events as \$event) {
            // Check if actually have this listener associated
            if (isset(\$this->listeners[\$event][\$hash])) {
                unset(\$this->listeners[\$event][\$hash]);
            }
        }
    }

    private function initializeListeners(string \$eventName)
    {
        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            if (\\is_string(\$listener)) {
                \$this->listeners[\$eventName][\$hash] = \$this->container->get(\$listener);
            }
        }
        \$this->initialized[\$eventName] = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php";
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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\EventManager;
use Psr\\Container\\ContainerInterface;

/**
 * Allows lazy loading of listener services.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ContainerAwareEventManager extends EventManager
{
    /**
     * Map of registered listeners.
     *
     * <event> => <listeners>
     */
    private \$listeners = [];
    private \$initialized = [];
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatchEvent(\$eventName, EventArgs \$eventArgs = null)
    {
        if (!isset(\$this->listeners[\$eventName])) {
            return;
        }

        \$eventArgs = null === \$eventArgs ? EventArgs::getEmptyInstance() : \$eventArgs;

        if (!isset(\$this->initialized[\$eventName])) {
            \$this->initializeListeners(\$eventName);
        }

        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            \$listener->\$eventName(\$eventArgs);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getListeners(\$event = null)
    {
        if (null !== \$event) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }

            return \$this->listeners[\$event];
        }

        foreach (\$this->listeners as \$event => \$listeners) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }
        }

        return \$this->listeners;
    }

    /**
     * {@inheritdoc}
     */
    public function hasListeners(\$event)
    {
        return isset(\$this->listeners[\$event]) && \$this->listeners[\$event];
    }

    /**
     * {@inheritdoc}
     */
    public function addEventListener(\$events, \$listener)
    {
        if (\\is_string(\$listener)) {
            \$hash = '_service_'.\$listener;
        } else {
            // Picks the hash code related to that listener
            \$hash = spl_object_hash(\$listener);
        }

        foreach ((array) \$events as \$event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            \$this->listeners[\$event][\$hash] = \$listener;

            if (\\is_string(\$listener)) {
                unset(\$this->initialized[\$event]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeEventListener(\$events, \$listener)
    {
        if (\\is_string(\$listener)) {
            \$hash = '_service_'.\$listener;
        } else {
            // Picks the hash code related to that listener
            \$hash = spl_object_hash(\$listener);
        }

        foreach ((array) \$events as \$event) {
            // Check if actually have this listener associated
            if (isset(\$this->listeners[\$event][\$hash])) {
                unset(\$this->listeners[\$event][\$hash]);
            }
        }
    }

    private function initializeListeners(string \$eventName)
    {
        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            if (\\is_string(\$listener)) {
                \$this->listeners[\$eventName][\$hash] = \$this->container->get(\$listener);
            }
        }
        \$this->initialized[\$eventName] = true;
    }
}
", "vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php");
    }
}
