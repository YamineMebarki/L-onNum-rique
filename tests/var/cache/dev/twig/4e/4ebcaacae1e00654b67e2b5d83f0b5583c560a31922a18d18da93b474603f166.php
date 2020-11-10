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

/* vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/routing.rst */
class __TwigTemplate_8ea726a79b457be60b7dfced06a5ab9a10c2419dcb803996220efb6aad522216 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/routing.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/routing.rst"));

        // line 1
        echo "@Route and @Method
==================

**Routing annotations of the SensioFrameworkExtraBundle are deprecated** since
version 5.2 because they are now a core feature of Symfony.

How to Update your Applications
-------------------------------

``@Route`` Annotation
~~~~~~~~~~~~~~~~~~~~~

The Symfony ``@Route`` annotation is similar to the SensioFrameworkExtraBundle
annotation, so you only have to update the annotation class namespace:

.. code-block:: diff

    -use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
    +use Symfony\\Component\\Routing\\Annotation\\Route;

    class DefaultController extends Controller
    {
        /**
         * @Route(\"/\")
         */
        public function index()
        {
            // ...
        }
    }

The main difference is that Symfony's annotation no longer defines the
``service`` option, which was used to instantiate the controller by fetching the
given service from the container. In modern Symfony applications, all
`controllers are services by default`_ and their service IDs are their fully-
qualified class names, so this option is no longer needed.

``@Method`` Annotation
~~~~~~~~~~~~~~~~~~~~~~

The ``@Method`` annotation from SensioFrameworkExtraBundle has been removed.
Instead, the Symfony ``@Route`` annotation defines a ``methods`` option to
restrict the HTTP methods of the route:

.. code-block:: diff

    -use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
    -use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method;
    +use Symfony\\Component\\Routing\\Annotation\\Route;

    class DefaultController extends Controller
    {
        /**
    -      * @Route(\"/show/{id}\")
    -      * @Method({\"GET\", \"HEAD\"})
    +      * @Route(\"/show/{id}\", methods={\"GET\",\"HEAD\"})
         */
        public function show(\$id)
        {
            // ...
        }
    }

Read the `chapter about Routing`_ in the Symfony Documentation to learn
everything about these and the other annotations available.

.. _`controllers are services by default`: https://symfony.com/doc/current/controller/service.html
.. _`chapter about Routing`: https://symfony.com/doc/current/routing.html
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/routing.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@Route and @Method
==================

**Routing annotations of the SensioFrameworkExtraBundle are deprecated** since
version 5.2 because they are now a core feature of Symfony.

How to Update your Applications
-------------------------------

``@Route`` Annotation
~~~~~~~~~~~~~~~~~~~~~

The Symfony ``@Route`` annotation is similar to the SensioFrameworkExtraBundle
annotation, so you only have to update the annotation class namespace:

.. code-block:: diff

    -use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
    +use Symfony\\Component\\Routing\\Annotation\\Route;

    class DefaultController extends Controller
    {
        /**
         * @Route(\"/\")
         */
        public function index()
        {
            // ...
        }
    }

The main difference is that Symfony's annotation no longer defines the
``service`` option, which was used to instantiate the controller by fetching the
given service from the container. In modern Symfony applications, all
`controllers are services by default`_ and their service IDs are their fully-
qualified class names, so this option is no longer needed.

``@Method`` Annotation
~~~~~~~~~~~~~~~~~~~~~~

The ``@Method`` annotation from SensioFrameworkExtraBundle has been removed.
Instead, the Symfony ``@Route`` annotation defines a ``methods`` option to
restrict the HTTP methods of the route:

.. code-block:: diff

    -use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
    -use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method;
    +use Symfony\\Component\\Routing\\Annotation\\Route;

    class DefaultController extends Controller
    {
        /**
    -      * @Route(\"/show/{id}\")
    -      * @Method({\"GET\", \"HEAD\"})
    +      * @Route(\"/show/{id}\", methods={\"GET\",\"HEAD\"})
         */
        public function show(\$id)
        {
            // ...
        }
    }

Read the `chapter about Routing`_ in the Symfony Documentation to learn
everything about these and the other annotations available.

.. _`controllers are services by default`: https://symfony.com/doc/current/controller/service.html
.. _`chapter about Routing`: https://symfony.com/doc/current/routing.html
", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/routing.rst", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/routing.rst");
    }
}
