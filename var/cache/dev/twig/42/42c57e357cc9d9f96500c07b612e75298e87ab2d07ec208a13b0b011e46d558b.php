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

/* vendor/doctrine/orm/docs/en/cookbook/entities-in-session.rst */
class __TwigTemplate_0e7bafbcbeb955b8763cad9a027aaa49d083a20a67bc379ad90aa3ce7e70e8b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/entities-in-session.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/entities-in-session.rst"));

        // line 1
        echo "Entities in the Session
=======================

There are several use-cases to save entities in the session, for example:

1.  User object
2.  Multi-step forms

To achieve this with Doctrine you have to pay attention to some details to get
this working.

Merging entity into an EntityManager
------------------------------------

In Doctrine an entity objects has to be \"managed\" by an EntityManager to be
updateable. Entities saved into the session are not managed in the next request
anymore. This means that you have to register these entities with an
EntityManager again if you want to change them or use them as part of
references between other entities. You can achieve this by calling
``EntityManager#merge()``.

For a representative User object the code to get turn an instance from
the session into a managed Doctrine object looks like this:

.. code-block:: php

    <?php
    require_once 'bootstrap.php';
    \$em = GetEntityManager(); // creates an EntityManager 

    session_start();
    if (isset(\$_SESSION['user']) && \$_SESSION['user'] instanceof User) {
        \$user = \$_SESSION['user']; 
        \$user = \$em->merge(\$user);
    }

.. note::

    A frequent mistake is not to get the merged user object from the return
    value of ``EntityManager#merge()``. The entity object passed to merge is
    not necessarily the same object that is returned from the method.

Serializing entity into the session
-----------------------------------

Entities that are serialized into the session normally contain references to
other entities as well. Think of the user entity has a reference to his
articles, groups, photos or many other different entities. If you serialize
this object into the session then you don't want to serialize the related
entities as well. This is why you should call ``EntityManager#detach()`` on this
object or implement the __sleep() magic method on your entity.

.. code-block:: php

    <?php
    require_once 'bootstrap.php';
    \$em = GetEntityManager(); // creates an EntityManager 

    \$user = \$em->find(\"User\", 1);
    \$em->detach(\$user);
    \$_SESSION['user'] = \$user;

.. note::

    When you called detach on your objects they get \"unmanaged\" with that
    entity manager. This means you cannot use them as part of write operations
    during ``EntityManager#flush()`` anymore in this request.

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/entities-in-session.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Entities in the Session
=======================

There are several use-cases to save entities in the session, for example:

1.  User object
2.  Multi-step forms

To achieve this with Doctrine you have to pay attention to some details to get
this working.

Merging entity into an EntityManager
------------------------------------

In Doctrine an entity objects has to be \"managed\" by an EntityManager to be
updateable. Entities saved into the session are not managed in the next request
anymore. This means that you have to register these entities with an
EntityManager again if you want to change them or use them as part of
references between other entities. You can achieve this by calling
``EntityManager#merge()``.

For a representative User object the code to get turn an instance from
the session into a managed Doctrine object looks like this:

.. code-block:: php

    <?php
    require_once 'bootstrap.php';
    \$em = GetEntityManager(); // creates an EntityManager 

    session_start();
    if (isset(\$_SESSION['user']) && \$_SESSION['user'] instanceof User) {
        \$user = \$_SESSION['user']; 
        \$user = \$em->merge(\$user);
    }

.. note::

    A frequent mistake is not to get the merged user object from the return
    value of ``EntityManager#merge()``. The entity object passed to merge is
    not necessarily the same object that is returned from the method.

Serializing entity into the session
-----------------------------------

Entities that are serialized into the session normally contain references to
other entities as well. Think of the user entity has a reference to his
articles, groups, photos or many other different entities. If you serialize
this object into the session then you don't want to serialize the related
entities as well. This is why you should call ``EntityManager#detach()`` on this
object or implement the __sleep() magic method on your entity.

.. code-block:: php

    <?php
    require_once 'bootstrap.php';
    \$em = GetEntityManager(); // creates an EntityManager 

    \$user = \$em->find(\"User\", 1);
    \$em->detach(\$user);
    \$_SESSION['user'] = \$user;

.. note::

    When you called detach on your objects they get \"unmanaged\" with that
    entity manager. This means you cannot use them as part of write operations
    during ``EntityManager#flush()`` anymore in this request.

", "vendor/doctrine/orm/docs/en/cookbook/entities-in-session.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/entities-in-session.rst");
    }
}
