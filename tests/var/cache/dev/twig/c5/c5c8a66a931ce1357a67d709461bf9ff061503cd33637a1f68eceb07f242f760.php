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

/* vendor/doctrine/orm/docs/en/reference/improving-performance.rst */
class __TwigTemplate_c0bae199c5dbda92570ebfa548514de2394b5f08fe27731b23dcbd812c52ec36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/improving-performance.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/improving-performance.rst"));

        // line 1
        echo "Improving Performance
=====================

Bytecode Cache
--------------

It is highly recommended to make use of a bytecode cache like OPcache.
A bytecode cache removes the need for parsing PHP code on every
request and can greatly improve performance.

    \"If you care about performance and don't use a bytecode
    cache then you don't really care about performance. Please get one
    and start using it.\"
    
    *Stas Malyshev, Core Contributor to PHP and Zend Employee*


Metadata and Query caches
-------------------------

As already mentioned earlier in the chapter about configuring
Doctrine, it is strongly discouraged to use Doctrine without a
Metadata and Query cache (preferably with APC or Memcache as the
cache driver). Operating Doctrine without these caches means
Doctrine will need to load your mapping information on every single
request and has to parse each DQL query on every single request.
This is a waste of resources.

See :ref:`integrating-with-the-orm`

Alternative Query Result Formats
--------------------------------

Make effective use of the available alternative query result
formats like nested array graphs or pure scalar results, especially
in scenarios where data is loaded for read-only purposes.

Read-Only Entities
------------------

Starting with Doctrine 2.1 you can mark entities as read only (See metadata mapping
references for details). This means that the entity marked as read only is never considered
for updates, which means when you call flush on the EntityManager these entities are skipped
even if properties changed. Read-Only allows to persist new entities of a kind and remove existing
ones, they are just not considered for updates.

See :ref:`annref_entity`

Extra-Lazy Collections
----------------------

If entities hold references to large collections you will get performance and memory problems initializing them.
To solve this issue you can use the EXTRA_LAZY fetch-mode feature for collections. See the :doc:`tutorial <../tutorials/extra-lazy-associations>`
for more information on how this fetch mode works.

Temporarily change fetch mode in DQL
------------------------------------

See :ref:`dql-temporarily-change-fetch-mode`


Apply Best Practices
--------------------

A lot of the points mentioned in the Best Practices chapter will
also positively affect the performance of Doctrine.

See :doc:`Best Practices <reference/best-practices>`

Change Tracking policies
------------------------

See: :doc:`Change Tracking Policies <reference/change-tracking-policies>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/improving-performance.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Improving Performance
=====================

Bytecode Cache
--------------

It is highly recommended to make use of a bytecode cache like OPcache.
A bytecode cache removes the need for parsing PHP code on every
request and can greatly improve performance.

    \"If you care about performance and don't use a bytecode
    cache then you don't really care about performance. Please get one
    and start using it.\"
    
    *Stas Malyshev, Core Contributor to PHP and Zend Employee*


Metadata and Query caches
-------------------------

As already mentioned earlier in the chapter about configuring
Doctrine, it is strongly discouraged to use Doctrine without a
Metadata and Query cache (preferably with APC or Memcache as the
cache driver). Operating Doctrine without these caches means
Doctrine will need to load your mapping information on every single
request and has to parse each DQL query on every single request.
This is a waste of resources.

See :ref:`integrating-with-the-orm`

Alternative Query Result Formats
--------------------------------

Make effective use of the available alternative query result
formats like nested array graphs or pure scalar results, especially
in scenarios where data is loaded for read-only purposes.

Read-Only Entities
------------------

Starting with Doctrine 2.1 you can mark entities as read only (See metadata mapping
references for details). This means that the entity marked as read only is never considered
for updates, which means when you call flush on the EntityManager these entities are skipped
even if properties changed. Read-Only allows to persist new entities of a kind and remove existing
ones, they are just not considered for updates.

See :ref:`annref_entity`

Extra-Lazy Collections
----------------------

If entities hold references to large collections you will get performance and memory problems initializing them.
To solve this issue you can use the EXTRA_LAZY fetch-mode feature for collections. See the :doc:`tutorial <../tutorials/extra-lazy-associations>`
for more information on how this fetch mode works.

Temporarily change fetch mode in DQL
------------------------------------

See :ref:`dql-temporarily-change-fetch-mode`


Apply Best Practices
--------------------

A lot of the points mentioned in the Best Practices chapter will
also positively affect the performance of Doctrine.

See :doc:`Best Practices <reference/best-practices>`

Change Tracking policies
------------------------

See: :doc:`Change Tracking Policies <reference/change-tracking-policies>`
", "vendor/doctrine/orm/docs/en/reference/improving-performance.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/improving-performance.rst");
    }
}
