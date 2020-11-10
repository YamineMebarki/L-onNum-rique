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

/* vendor/doctrine/orm/docs/en/cookbook/implementing-wakeup-or-clone.rst */
class __TwigTemplate_668b1732eeb07f2cba50d0aec53f81ee7dd629367ceb346e5d403fa05a272f53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/implementing-wakeup-or-clone.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/implementing-wakeup-or-clone.rst"));

        // line 1
        echo "Implementing Wakeup or Clone
============================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

As explained in the
`restrictions for entity classes in the manual <http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/architecture.html#entities>`_,
it is usually not allowed for an entity to implement ``__wakeup``
or ``__clone``, because Doctrine makes special use of them.
However, it is quite easy to make use of these methods in a safe
way by guarding the custom wakeup or clone code with an entity
identity check, as demonstrated in the following sections.

Safely implementing __wakeup
----------------------------

To safely implement ``__wakeup``, simply enclose your
implementation code in an identity check as follows:

.. code-block:: php

    <?php
    class MyEntity
    {
        private \$id; // This is the identifier of the entity.
        //...
    
        public function __wakeup()
        {
            // If the entity has an identity, proceed as normal.
            if (\$this->id) {
                // ... Your code here as normal ...
            }
            // otherwise do nothing, do NOT throw an exception!
        }
    
        //...
    }

Safely implementing __clone
---------------------------

Safely implementing ``__clone`` is pretty much the same:

.. code-block:: php

    <?php
    class MyEntity
    {
        private \$id; // This is the identifier of the entity.
        //...
    
        public function __clone()
        {
            // If the entity has an identity, proceed as normal.
            if (\$this->id) {
                // ... Your code here as normal ...
            }
            // otherwise do nothing, do NOT throw an exception!
        }
    
        //...
    }

Summary
-------

As you have seen, it is quite easy to safely make use of
``__wakeup`` and ``__clone`` in your entities without adding any
really Doctrine-specific or Doctrine-dependant code.

These implementations are possible and safe because when Doctrine
invokes these methods, the entities never have an identity (yet).
Furthermore, it is possibly a good idea to check for the identity
in your code anyway, since it's rarely the case that you want to
unserialize or clone an entity with no identity.


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/implementing-wakeup-or-clone.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Implementing Wakeup or Clone
============================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

As explained in the
`restrictions for entity classes in the manual <http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/architecture.html#entities>`_,
it is usually not allowed for an entity to implement ``__wakeup``
or ``__clone``, because Doctrine makes special use of them.
However, it is quite easy to make use of these methods in a safe
way by guarding the custom wakeup or clone code with an entity
identity check, as demonstrated in the following sections.

Safely implementing __wakeup
----------------------------

To safely implement ``__wakeup``, simply enclose your
implementation code in an identity check as follows:

.. code-block:: php

    <?php
    class MyEntity
    {
        private \$id; // This is the identifier of the entity.
        //...
    
        public function __wakeup()
        {
            // If the entity has an identity, proceed as normal.
            if (\$this->id) {
                // ... Your code here as normal ...
            }
            // otherwise do nothing, do NOT throw an exception!
        }
    
        //...
    }

Safely implementing __clone
---------------------------

Safely implementing ``__clone`` is pretty much the same:

.. code-block:: php

    <?php
    class MyEntity
    {
        private \$id; // This is the identifier of the entity.
        //...
    
        public function __clone()
        {
            // If the entity has an identity, proceed as normal.
            if (\$this->id) {
                // ... Your code here as normal ...
            }
            // otherwise do nothing, do NOT throw an exception!
        }
    
        //...
    }

Summary
-------

As you have seen, it is quite easy to safely make use of
``__wakeup`` and ``__clone`` in your entities without adding any
really Doctrine-specific or Doctrine-dependant code.

These implementations are possible and safe because when Doctrine
invokes these methods, the entities never have an identity (yet).
Furthermore, it is possibly a good idea to check for the identity
in your code anyway, since it's rarely the case that you want to
unserialize or clone an entity with no identity.


", "vendor/doctrine/orm/docs/en/cookbook/implementing-wakeup-or-clone.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/implementing-wakeup-or-clone.rst");
    }
}
