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

/* vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPass.php */
class __TwigTemplate_e46a1f3365c39f963546dcb009666928e3f2f13eb9b300013aab34379c30c3fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPass.php"));

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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers event listeners and subscribers to the available doctrine connections.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 * @author Alexander <iam.asm89@gmail.com>
 * @author David Maicher <mail@dmaicher.de>
 */
class RegisterEventListenersAndSubscribersPass implements CompilerPassInterface
{
    private \$connections;
    private \$eventManagers;
    private \$managerTemplate;
    private \$tagPrefix;

    /**
     * @param string \$connections     Parameter ID for connections
     * @param string \$managerTemplate sprintf() template for generating the event
     *                                manager's service ID for a connection name
     * @param string \$tagPrefix       Tag prefix for listeners and subscribers
     */
    public function __construct(string \$connections, string \$managerTemplate, string \$tagPrefix)
    {
        \$this->connections = \$connections;
        \$this->managerTemplate = \$managerTemplate;
        \$this->tagPrefix = \$tagPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasParameter(\$this->connections)) {
            return;
        }

        \$this->connections = \$container->getParameter(\$this->connections);
        \$this->addTaggedSubscribers(\$container);
        \$this->addTaggedListeners(\$container);
    }

    private function addTaggedSubscribers(ContainerBuilder \$container)
    {
        \$subscriberTag = \$this->tagPrefix.'.event_subscriber';
        \$taggedSubscribers = \$this->findAndSortTags(\$subscriberTag, \$container);

        foreach (\$taggedSubscribers as \$taggedSubscriber) {
            list(\$id, \$tag) = \$taggedSubscriber;
            \$connections = isset(\$tag['connection']) ? [\$tag['connection']] : array_keys(\$this->connections);
            foreach (\$connections as \$con) {
                if (!isset(\$this->connections[\$con])) {
                    throw new RuntimeException(sprintf('The Doctrine connection \"%s\" referenced in service \"%s\" does not exist. Available connections names: %s', \$con, \$id, implode(', ', array_keys(\$this->connections))));
                }

                \$this->getEventManagerDef(\$container, \$con)->addMethodCall('addEventSubscriber', [new Reference(\$id)]);
            }
        }
    }

    private function addTaggedListeners(ContainerBuilder \$container)
    {
        \$listenerTag = \$this->tagPrefix.'.event_listener';
        \$taggedListeners = \$this->findAndSortTags(\$listenerTag, \$container);
        \$listenerRefs = [];

        foreach (\$taggedListeners as \$taggedListener) {
            list(\$id, \$tag) = \$taggedListener;
            if (!isset(\$tag['event'])) {
                throw new InvalidArgumentException(sprintf('Doctrine event listener \"%s\" must specify the \"event\" attribute.', \$id));
            }

            \$connections = isset(\$tag['connection']) ? [\$tag['connection']] : array_keys(\$this->connections);
            foreach (\$connections as \$con) {
                if (!isset(\$this->connections[\$con])) {
                    throw new RuntimeException(sprintf('The Doctrine connection \"%s\" referenced in service \"%s\" does not exist. Available connections names: %s', \$con, \$id, implode(', ', array_keys(\$this->connections))));
                }
                \$listenerRefs[\$con][\$id] = new Reference(\$id);

                // we add one call per event per service so we have the correct order
                \$this->getEventManagerDef(\$container, \$con)->addMethodCall('addEventListener', [[\$tag['event']], \$id]);
            }
        }

        // replace service container argument of event managers with smaller service locator
        // so services can even remain private
        foreach (\$listenerRefs as \$connection => \$refs) {
            \$this->getEventManagerDef(\$container, \$connection)
                ->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$refs));
        }
    }

    private function getEventManagerDef(ContainerBuilder \$container, string \$name)
    {
        if (!isset(\$this->eventManagers[\$name])) {
            \$this->eventManagers[\$name] = \$container->getDefinition(sprintf(\$this->managerTemplate, \$name));
        }

        return \$this->eventManagers[\$name];
    }

    /**
     * Finds and orders all service tags with the given name by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \\SplPriorityQueue class does not respect the FIFO method,
     * we should not use this class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @return array
     */
    private function findAndSortTags(string \$tagName, ContainerBuilder \$container)
    {
        \$sortedTags = [];

        foreach (\$container->findTaggedServiceIds(\$tagName, true) as \$serviceId => \$tags) {
            foreach (\$tags as \$attributes) {
                \$priority = isset(\$attributes['priority']) ? \$attributes['priority'] : 0;
                \$sortedTags[\$priority][] = [\$serviceId, \$attributes];
            }
        }

        if (\$sortedTags) {
            krsort(\$sortedTags);
            \$sortedTags = array_merge(...\$sortedTags);
        }

        return \$sortedTags;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPass.php";
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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers event listeners and subscribers to the available doctrine connections.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 * @author Alexander <iam.asm89@gmail.com>
 * @author David Maicher <mail@dmaicher.de>
 */
class RegisterEventListenersAndSubscribersPass implements CompilerPassInterface
{
    private \$connections;
    private \$eventManagers;
    private \$managerTemplate;
    private \$tagPrefix;

    /**
     * @param string \$connections     Parameter ID for connections
     * @param string \$managerTemplate sprintf() template for generating the event
     *                                manager's service ID for a connection name
     * @param string \$tagPrefix       Tag prefix for listeners and subscribers
     */
    public function __construct(string \$connections, string \$managerTemplate, string \$tagPrefix)
    {
        \$this->connections = \$connections;
        \$this->managerTemplate = \$managerTemplate;
        \$this->tagPrefix = \$tagPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasParameter(\$this->connections)) {
            return;
        }

        \$this->connections = \$container->getParameter(\$this->connections);
        \$this->addTaggedSubscribers(\$container);
        \$this->addTaggedListeners(\$container);
    }

    private function addTaggedSubscribers(ContainerBuilder \$container)
    {
        \$subscriberTag = \$this->tagPrefix.'.event_subscriber';
        \$taggedSubscribers = \$this->findAndSortTags(\$subscriberTag, \$container);

        foreach (\$taggedSubscribers as \$taggedSubscriber) {
            list(\$id, \$tag) = \$taggedSubscriber;
            \$connections = isset(\$tag['connection']) ? [\$tag['connection']] : array_keys(\$this->connections);
            foreach (\$connections as \$con) {
                if (!isset(\$this->connections[\$con])) {
                    throw new RuntimeException(sprintf('The Doctrine connection \"%s\" referenced in service \"%s\" does not exist. Available connections names: %s', \$con, \$id, implode(', ', array_keys(\$this->connections))));
                }

                \$this->getEventManagerDef(\$container, \$con)->addMethodCall('addEventSubscriber', [new Reference(\$id)]);
            }
        }
    }

    private function addTaggedListeners(ContainerBuilder \$container)
    {
        \$listenerTag = \$this->tagPrefix.'.event_listener';
        \$taggedListeners = \$this->findAndSortTags(\$listenerTag, \$container);
        \$listenerRefs = [];

        foreach (\$taggedListeners as \$taggedListener) {
            list(\$id, \$tag) = \$taggedListener;
            if (!isset(\$tag['event'])) {
                throw new InvalidArgumentException(sprintf('Doctrine event listener \"%s\" must specify the \"event\" attribute.', \$id));
            }

            \$connections = isset(\$tag['connection']) ? [\$tag['connection']] : array_keys(\$this->connections);
            foreach (\$connections as \$con) {
                if (!isset(\$this->connections[\$con])) {
                    throw new RuntimeException(sprintf('The Doctrine connection \"%s\" referenced in service \"%s\" does not exist. Available connections names: %s', \$con, \$id, implode(', ', array_keys(\$this->connections))));
                }
                \$listenerRefs[\$con][\$id] = new Reference(\$id);

                // we add one call per event per service so we have the correct order
                \$this->getEventManagerDef(\$container, \$con)->addMethodCall('addEventListener', [[\$tag['event']], \$id]);
            }
        }

        // replace service container argument of event managers with smaller service locator
        // so services can even remain private
        foreach (\$listenerRefs as \$connection => \$refs) {
            \$this->getEventManagerDef(\$container, \$connection)
                ->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$refs));
        }
    }

    private function getEventManagerDef(ContainerBuilder \$container, string \$name)
    {
        if (!isset(\$this->eventManagers[\$name])) {
            \$this->eventManagers[\$name] = \$container->getDefinition(sprintf(\$this->managerTemplate, \$name));
        }

        return \$this->eventManagers[\$name];
    }

    /**
     * Finds and orders all service tags with the given name by their priority.
     *
     * The order of additions must be respected for services having the same priority,
     * and knowing that the \\SplPriorityQueue class does not respect the FIFO method,
     * we should not use this class.
     *
     * @see https://bugs.php.net/53710
     * @see https://bugs.php.net/60926
     *
     * @return array
     */
    private function findAndSortTags(string \$tagName, ContainerBuilder \$container)
    {
        \$sortedTags = [];

        foreach (\$container->findTaggedServiceIds(\$tagName, true) as \$serviceId => \$tags) {
            foreach (\$tags as \$attributes) {
                \$priority = isset(\$attributes['priority']) ? \$attributes['priority'] : 0;
                \$sortedTags[\$priority][] = [\$serviceId, \$attributes];
            }
        }

        if (\$sortedTags) {
            krsort(\$sortedTags);
            \$sortedTags = array_merge(...\$sortedTags);
        }

        return \$sortedTags;
    }
}
", "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/RegisterEventListenersAndSubscribersPass.php");
    }
}
