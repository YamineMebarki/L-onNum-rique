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

/* vendor/doctrine/orm/docs/en/reference/change-tracking-policies.rst */
class __TwigTemplate_61b4fd218e2e714fa8722deae7a5cb951dab350cc8a7031acb9cfaf0735c3428 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/change-tracking-policies.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/change-tracking-policies.rst"));

        // line 1
        echo "Change Tracking Policies
========================

Change tracking is the process of determining what has changed in
managed entities since the last time they were synchronized with
the database.

Doctrine provides 3 different change tracking policies, each having
its particular advantages and disadvantages. The change tracking
policy can be defined on a per-class basis (or more precisely,
per-hierarchy).

Deferred Implicit
~~~~~~~~~~~~~~~~~

The deferred implicit policy is the default change tracking policy
and the most convenient one. With this policy, Doctrine detects the
changes by a property-by-property comparison at commit time and
also detects changes to entities or new entities that are
referenced by other managed entities (\"persistence by
reachability\"). Although the most convenient policy, it can have
negative effects on performance if you are dealing with large units
of work (see \"Understanding the Unit of Work\"). Since Doctrine
can't know what has changed, it needs to check all managed entities
for changes every time you invoke EntityManager#flush(), making
this operation rather costly.

Deferred Explicit
~~~~~~~~~~~~~~~~~

The deferred explicit policy is similar to the deferred implicit
policy in that it detects changes through a property-by-property
comparison at commit time. The difference is that Doctrine 2 only
considers entities that have been explicitly marked for change detection
through a call to EntityManager#persist(entity) or through a save
cascade. All other entities are skipped. This policy therefore
gives improved performance for larger units of work while
sacrificing the behavior of \"automatic dirty checking\".

Therefore, flush() operations are potentially cheaper with this
policy. The negative aspect this has is that if you have a rather
large application and you pass your objects through several layers
for processing purposes and business tasks you may need to track
yourself which entities have changed on the way so you can pass
them to EntityManager#persist().

This policy can be configured as follows:

.. code-block:: php

    <?php
    /**
     * @Entity
     * @ChangeTrackingPolicy(\"DEFERRED_EXPLICIT\")
     */
    class User
    {
        // ...
    }

Notify
~~~~~~

This policy is based on the assumption that the entities notify
interested listeners of changes to their properties. For that
purpose, a class that wants to use this policy needs to implement
the ``NotifyPropertyChanged`` interface from the Doctrine
namespace. As a guideline, such an implementation can look as
follows:

.. code-block:: php

    <?php
    use Doctrine\\Common\\NotifyPropertyChanged,
        Doctrine\\Common\\PropertyChangedListener;
    
    /**
     * @Entity
     * @ChangeTrackingPolicy(\"NOTIFY\")
     */
    class MyEntity implements NotifyPropertyChanged
    {
        // ...
    
        private \$_listeners = array();
    
        public function addPropertyChangedListener(PropertyChangedListener \$listener)
        {
            \$this->_listeners[] = \$listener;
        }
    }

Then, in each property setter of this class or derived classes, you
need to notify all the ``PropertyChangedListener`` instances. As an
example we add a convenience method on ``MyEntity`` that shows this
behaviour:

.. code-block:: php

    <?php
    // ...
    
    class MyEntity implements NotifyPropertyChanged
    {
        // ...
    
        protected function _onPropertyChanged(\$propName, \$oldValue, \$newValue)
        {
            if (\$this->_listeners) {
                foreach (\$this->_listeners as \$listener) {
                    \$listener->propertyChanged(\$this, \$propName, \$oldValue, \$newValue);
                }
            }
        }
    
        public function setData(\$data)
        {
            if (\$data != \$this->data) {
                \$this->_onPropertyChanged('data', \$this->data, \$data);
                \$this->data = \$data;
            }
        }
    }

You have to invoke ``_onPropertyChanged`` inside every method that
changes the persistent state of ``MyEntity``.

The check whether the new value is different from the old one is
not mandatory but recommended. That way you also have full control
over when you consider a property changed.

The negative point of this policy is obvious: You need implement an
interface and write some plumbing code. But also note that we tried
hard to keep this notification functionality abstract. Strictly
speaking, it has nothing to do with the persistence layer and the
Doctrine ORM or DBAL. You may find that property notification
events come in handy in many other scenarios as well. As mentioned
earlier, the ``Doctrine\\Common`` namespace is not that evil and
consists solely of very small classes and interfaces that have
almost no external dependencies (none to the DBAL and none to the
ORM) and that you can easily take with you should you want to swap
out the persistence layer. This change tracking policy does not
introduce a dependency on the Doctrine DBAL/ORM or the persistence
layer.

The positive point and main advantage of this policy is its
effectiveness. It has the best performance characteristics of the 3
policies with larger units of work and a flush() operation is very
cheap when nothing has changed.


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/change-tracking-policies.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Change Tracking Policies
========================

Change tracking is the process of determining what has changed in
managed entities since the last time they were synchronized with
the database.

Doctrine provides 3 different change tracking policies, each having
its particular advantages and disadvantages. The change tracking
policy can be defined on a per-class basis (or more precisely,
per-hierarchy).

Deferred Implicit
~~~~~~~~~~~~~~~~~

The deferred implicit policy is the default change tracking policy
and the most convenient one. With this policy, Doctrine detects the
changes by a property-by-property comparison at commit time and
also detects changes to entities or new entities that are
referenced by other managed entities (\"persistence by
reachability\"). Although the most convenient policy, it can have
negative effects on performance if you are dealing with large units
of work (see \"Understanding the Unit of Work\"). Since Doctrine
can't know what has changed, it needs to check all managed entities
for changes every time you invoke EntityManager#flush(), making
this operation rather costly.

Deferred Explicit
~~~~~~~~~~~~~~~~~

The deferred explicit policy is similar to the deferred implicit
policy in that it detects changes through a property-by-property
comparison at commit time. The difference is that Doctrine 2 only
considers entities that have been explicitly marked for change detection
through a call to EntityManager#persist(entity) or through a save
cascade. All other entities are skipped. This policy therefore
gives improved performance for larger units of work while
sacrificing the behavior of \"automatic dirty checking\".

Therefore, flush() operations are potentially cheaper with this
policy. The negative aspect this has is that if you have a rather
large application and you pass your objects through several layers
for processing purposes and business tasks you may need to track
yourself which entities have changed on the way so you can pass
them to EntityManager#persist().

This policy can be configured as follows:

.. code-block:: php

    <?php
    /**
     * @Entity
     * @ChangeTrackingPolicy(\"DEFERRED_EXPLICIT\")
     */
    class User
    {
        // ...
    }

Notify
~~~~~~

This policy is based on the assumption that the entities notify
interested listeners of changes to their properties. For that
purpose, a class that wants to use this policy needs to implement
the ``NotifyPropertyChanged`` interface from the Doctrine
namespace. As a guideline, such an implementation can look as
follows:

.. code-block:: php

    <?php
    use Doctrine\\Common\\NotifyPropertyChanged,
        Doctrine\\Common\\PropertyChangedListener;
    
    /**
     * @Entity
     * @ChangeTrackingPolicy(\"NOTIFY\")
     */
    class MyEntity implements NotifyPropertyChanged
    {
        // ...
    
        private \$_listeners = array();
    
        public function addPropertyChangedListener(PropertyChangedListener \$listener)
        {
            \$this->_listeners[] = \$listener;
        }
    }

Then, in each property setter of this class or derived classes, you
need to notify all the ``PropertyChangedListener`` instances. As an
example we add a convenience method on ``MyEntity`` that shows this
behaviour:

.. code-block:: php

    <?php
    // ...
    
    class MyEntity implements NotifyPropertyChanged
    {
        // ...
    
        protected function _onPropertyChanged(\$propName, \$oldValue, \$newValue)
        {
            if (\$this->_listeners) {
                foreach (\$this->_listeners as \$listener) {
                    \$listener->propertyChanged(\$this, \$propName, \$oldValue, \$newValue);
                }
            }
        }
    
        public function setData(\$data)
        {
            if (\$data != \$this->data) {
                \$this->_onPropertyChanged('data', \$this->data, \$data);
                \$this->data = \$data;
            }
        }
    }

You have to invoke ``_onPropertyChanged`` inside every method that
changes the persistent state of ``MyEntity``.

The check whether the new value is different from the old one is
not mandatory but recommended. That way you also have full control
over when you consider a property changed.

The negative point of this policy is obvious: You need implement an
interface and write some plumbing code. But also note that we tried
hard to keep this notification functionality abstract. Strictly
speaking, it has nothing to do with the persistence layer and the
Doctrine ORM or DBAL. You may find that property notification
events come in handy in many other scenarios as well. As mentioned
earlier, the ``Doctrine\\Common`` namespace is not that evil and
consists solely of very small classes and interfaces that have
almost no external dependencies (none to the DBAL and none to the
ORM) and that you can easily take with you should you want to swap
out the persistence layer. This change tracking policy does not
introduce a dependency on the Doctrine DBAL/ORM or the persistence
layer.

The positive point and main advantage of this policy is its
effectiveness. It has the best performance characteristics of the 3
policies with larger units of work and a flush() operation is very
cheap when nothing has changed.


", "vendor/doctrine/orm/docs/en/reference/change-tracking-policies.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/change-tracking-policies.rst");
    }
}
