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

/* vendor/doctrine/migrations/docs/en/reference/events.rst */
class __TwigTemplate_d7020ca0afde3dc6ab826bac9949b4d7e29b82c4841383020c62f3a3985a5460 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/events.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/events.rst"));

        // line 1
        echo "Migrations Events
=================

The Doctrine Migrations library emits a series of events during the migration process.

- ``onMigrationsMigrating``: dispatched immediately before starting to execute versions. This does not fire if
there are no versions to be executed.
- ``onMigrationsVersionExecuting``: dispatched before a single version executes.
- ``onMigrationsVersionExecuted``: dispatched after a single version executes.
- ``onMigrationsVersionSkipped``: dispatched when a single version is skipped.
- ``onMigrationsMigrated``: dispatched when all versions have been executed.

All of these events are emitted via the DBAL connection's event manager. Here's an example event subscriber that
listens for all possible migrations events.

.. code-block:: php

    <?php

    use Doctrine\\Common\\EventSubscriber;
    use Doctrine\\Migrations\\Event\\MigrationsEventArgs;
    use Doctrine\\Migrations\\Event\\MigrationsVersionEventArgs;
    use Doctrine\\Migrations\\Events;

    class MigrationsListener implements EventSubscriber
    {
        public function getSubscribedEvents() : array
        {
            return [
                Events::onMigrationsMigrating,
                Events::onMigrationsMigrated,
                Events::onMigrationsVersionExecuting,
                Events::onMigrationsVersionExecuted,
                Events::onMigrationsVersionSkipped,
            ];
        }

        public function onMigrationsMigrating(MigrationsEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsMigrated(MigrationsEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsVersionExecuting(MigrationsVersionEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsVersionExecuted(MigrationsVersionEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsVersionSkipped(MigrationsVersionEventArgs \$args) : void
        {
            // ...
        }
    }

To add an event subscriber to a connections event manager, use the ``Connection::getEventManager()`` method
and the ``EventManager::addEventSubscriber()`` method:

This might go in the ``cli-paypal.php`` file or somewhere in a frameworks container or dependency injection configuration.

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\DriverManager;

    \$connection = DriverManager::getConnection([
        // ...
    ]);

    \$connection->getEventManager()->addEventSubscriber(new MigrationsListener());

    // rest of the cli set up...

:ref:`Next Chapter: Version Numbers <version-numbers>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/docs/en/reference/events.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Migrations Events
=================

The Doctrine Migrations library emits a series of events during the migration process.

- ``onMigrationsMigrating``: dispatched immediately before starting to execute versions. This does not fire if
there are no versions to be executed.
- ``onMigrationsVersionExecuting``: dispatched before a single version executes.
- ``onMigrationsVersionExecuted``: dispatched after a single version executes.
- ``onMigrationsVersionSkipped``: dispatched when a single version is skipped.
- ``onMigrationsMigrated``: dispatched when all versions have been executed.

All of these events are emitted via the DBAL connection's event manager. Here's an example event subscriber that
listens for all possible migrations events.

.. code-block:: php

    <?php

    use Doctrine\\Common\\EventSubscriber;
    use Doctrine\\Migrations\\Event\\MigrationsEventArgs;
    use Doctrine\\Migrations\\Event\\MigrationsVersionEventArgs;
    use Doctrine\\Migrations\\Events;

    class MigrationsListener implements EventSubscriber
    {
        public function getSubscribedEvents() : array
        {
            return [
                Events::onMigrationsMigrating,
                Events::onMigrationsMigrated,
                Events::onMigrationsVersionExecuting,
                Events::onMigrationsVersionExecuted,
                Events::onMigrationsVersionSkipped,
            ];
        }

        public function onMigrationsMigrating(MigrationsEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsMigrated(MigrationsEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsVersionExecuting(MigrationsVersionEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsVersionExecuted(MigrationsVersionEventArgs \$args) : void
        {
            // ...
        }

        public function onMigrationsVersionSkipped(MigrationsVersionEventArgs \$args) : void
        {
            // ...
        }
    }

To add an event subscriber to a connections event manager, use the ``Connection::getEventManager()`` method
and the ``EventManager::addEventSubscriber()`` method:

This might go in the ``cli-paypal.php`` file or somewhere in a frameworks container or dependency injection configuration.

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\DriverManager;

    \$connection = DriverManager::getConnection([
        // ...
    ]);

    \$connection->getEventManager()->addEventSubscriber(new MigrationsListener());

    // rest of the cli set up...

:ref:`Next Chapter: Version Numbers <version-numbers>`
", "vendor/doctrine/migrations/docs/en/reference/events.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/docs/en/reference/events.rst");
    }
}
