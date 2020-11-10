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

/* vendor/doctrine/orm/docs/en/reference/partial-objects.rst */
class __TwigTemplate_8cad8c3d1cfd7bcd17b27b265650a4bfe3cf20cf74c5693d7ccdf339c3dcc7d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/partial-objects.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/partial-objects.rst"));

        // line 1
        echo "Partial Objects
===============

A partial object is an object whose state is not fully initialized
after being reconstituted from the database and that is
disconnected from the rest of its data. The following section will
describe why partial objects are problematic and what the approach
of Doctrine2 to this problem is.

.. note::

    The partial object problem in general does not apply to
    methods or queries where you do not retrieve the query result as
    objects. Examples are: ``Query#getArrayResult()``,
    ``Query#getScalarResult()``, ``Query#getSingleScalarResult()``,
    etc.

.. warning::

    Use of partial objects is tricky. Fields that are not retrieved
    from the database will not be updated by the UnitOfWork even if they
    get changed in your objects. You can only promote a partial object
    to a fully-loaded object by calling ``EntityManager#refresh()``
    or a DQL query with the refresh flag.


What is the problem?
--------------------

In short, partial objects are problematic because they are usually
objects with broken invariants. As such, code that uses these
partial objects tends to be very fragile and either needs to \"know\"
which fields or methods can be safely accessed or add checks around
every field access or method invocation. The same holds true for
the internals, i.e. the method implementations, of such objects.
You usually simply assume the state you need in the method is
available, after all you properly constructed this object before
you pushed it into the database, right? These blind assumptions can
quickly lead to null reference errors when working with such
partial objects.

It gets worse with the scenario of an optional association (0..1 to
1). When the associated field is NULL, you don't know whether this
object does not have an associated object or whether it was simply
not loaded when the owning object was loaded from the database.

These are reasons why many ORMs do not allow partial objects at all
and instead you always have to load an object with all its fields
(associations being proxied). One secure way to allow partial
objects is if the programming language/platform allows the ORM tool
to hook deeply into the object and instrument it in such a way that
individual fields (not only associations) can be loaded lazily on
first access. This is possible in Java, for example, through
bytecode instrumentation. In PHP though this is not possible, so
there is no way to have \"secure\" partial objects in an ORM with
transparent persistence.

Doctrine, by default, does not allow partial objects. That means,
any query that only selects partial object data and wants to
retrieve the result as objects (i.e. ``Query#getResult()``) will
raise an exception telling you that partial objects are dangerous.
If you want to force a query to return you partial objects,
possibly as a performance tweak, you can use the ``partial``
keyword as follows:

.. code-block:: php

    <?php
    \$q = \$em->createQuery(\"select partial u.{id,name} from MyApp\\Domain\\User u\");

You can also get a partial reference instead of a proxy reference by
calling:

.. code-block:: php

    <?php
    \$reference = \$em->getPartialReference('MyApp\\Domain\\User', 1);

Partial references are objects with only the identifiers set as they
are passed to the second argument of the ``getPartialReference()`` method.
All other fields are null.

When should I force partial objects?
------------------------------------

Mainly for optimization purposes, but be careful of premature
optimization as partial objects lead to potentially more fragile
code.


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/partial-objects.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Partial Objects
===============

A partial object is an object whose state is not fully initialized
after being reconstituted from the database and that is
disconnected from the rest of its data. The following section will
describe why partial objects are problematic and what the approach
of Doctrine2 to this problem is.

.. note::

    The partial object problem in general does not apply to
    methods or queries where you do not retrieve the query result as
    objects. Examples are: ``Query#getArrayResult()``,
    ``Query#getScalarResult()``, ``Query#getSingleScalarResult()``,
    etc.

.. warning::

    Use of partial objects is tricky. Fields that are not retrieved
    from the database will not be updated by the UnitOfWork even if they
    get changed in your objects. You can only promote a partial object
    to a fully-loaded object by calling ``EntityManager#refresh()``
    or a DQL query with the refresh flag.


What is the problem?
--------------------

In short, partial objects are problematic because they are usually
objects with broken invariants. As such, code that uses these
partial objects tends to be very fragile and either needs to \"know\"
which fields or methods can be safely accessed or add checks around
every field access or method invocation. The same holds true for
the internals, i.e. the method implementations, of such objects.
You usually simply assume the state you need in the method is
available, after all you properly constructed this object before
you pushed it into the database, right? These blind assumptions can
quickly lead to null reference errors when working with such
partial objects.

It gets worse with the scenario of an optional association (0..1 to
1). When the associated field is NULL, you don't know whether this
object does not have an associated object or whether it was simply
not loaded when the owning object was loaded from the database.

These are reasons why many ORMs do not allow partial objects at all
and instead you always have to load an object with all its fields
(associations being proxied). One secure way to allow partial
objects is if the programming language/platform allows the ORM tool
to hook deeply into the object and instrument it in such a way that
individual fields (not only associations) can be loaded lazily on
first access. This is possible in Java, for example, through
bytecode instrumentation. In PHP though this is not possible, so
there is no way to have \"secure\" partial objects in an ORM with
transparent persistence.

Doctrine, by default, does not allow partial objects. That means,
any query that only selects partial object data and wants to
retrieve the result as objects (i.e. ``Query#getResult()``) will
raise an exception telling you that partial objects are dangerous.
If you want to force a query to return you partial objects,
possibly as a performance tweak, you can use the ``partial``
keyword as follows:

.. code-block:: php

    <?php
    \$q = \$em->createQuery(\"select partial u.{id,name} from MyApp\\Domain\\User u\");

You can also get a partial reference instead of a proxy reference by
calling:

.. code-block:: php

    <?php
    \$reference = \$em->getPartialReference('MyApp\\Domain\\User', 1);

Partial references are objects with only the identifiers set as they
are passed to the second argument of the ``getPartialReference()`` method.
All other fields are null.

When should I force partial objects?
------------------------------------

Mainly for optimization purposes, but be careful of premature
optimization as partial objects lead to potentially more fragile
code.


", "vendor/doctrine/orm/docs/en/reference/partial-objects.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/partial-objects.rst");
    }
}
