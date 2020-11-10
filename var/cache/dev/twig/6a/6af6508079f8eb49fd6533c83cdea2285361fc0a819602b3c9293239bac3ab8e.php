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

/* vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/view.rst */
class __TwigTemplate_ad9bc649188dd1a6b298f9a6ab1e207b9888ce41adcfe85610af1bf93767bf1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/view.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/view.rst"));

        // line 1
        echo "@Template
=========

As of version 4.0 of the bundle, only Twig is supported by the ``@Template``
annotation (and only when **not** used with the Symfony Templating component --
no ``templating`` entry set in the ``framework`` configuration settings).

Usage
-----

The ``@Template`` annotation associates a controller with a template name::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;

    /**
     * @Template(\"@SensioBlog/post/show.html.twig\")
     */
    public function show(\$id)
    {
        // get the Post
        \$post = ...;

        return array('post' => \$post);
    }

When using the ``@Template`` annotation, the controller should return an
array of parameters to pass to the view instead of a ``Response`` object.

.. note::

    If you want to stream your template, you can make it with the following configuration::

        /**
         * @Template(isStreamable=true)
         */
        public function show(\$id)
        {
            // ...
        }


.. tip::
   If the action returns a ``Response`` object, the ``@Template`` 
   annotation is simply ignored.

If the template is named after the controller and action names, which is the
case for the above example, you can even omit the annotation value::

    /**
     * @Template
     */
    public function show(\$id)
    {
        // get the Post
        \$post = ...;

        return array('post' => \$post);
    }

.. tip::
   Sub-namespaces are converted into underscores. 
   The ``Sensio\\BlogBundle\\Controller\\UserProfileController::showDetails()`` action
   will resolve to ``@SensioBlog/user_profile/show_details.html.twig``

And if the only parameters to pass to the template are method arguments, you
can use the ``vars`` attribute instead of returning an array. This is very
useful in combination with the ``@ParamConverter`` :doc:`annotation
<converters>`::

    /**
     * @ParamConverter(\"post\", class=\"SensioBlogBundle:Post\")
     * @Template(\"@SensioBlog/post/show.html.twig\", vars={\"post\"})
     */
    public function show(Post \$post)
    {
    }

which, thanks to conventions, is equivalent to the following configuration::

    /**
     * @Template(vars={\"post\"})
     */
    public function show(Post \$post)
    {
    }

You can make it even more concise as all method arguments are automatically
passed to the template if the method returns ``null`` and no ``vars``
attribute is defined::

    /**
     * @Template
     */
    public function show(Post \$post)
    {
    }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/view.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@Template
=========

As of version 4.0 of the bundle, only Twig is supported by the ``@Template``
annotation (and only when **not** used with the Symfony Templating component --
no ``templating`` entry set in the ``framework`` configuration settings).

Usage
-----

The ``@Template`` annotation associates a controller with a template name::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;

    /**
     * @Template(\"@SensioBlog/post/show.html.twig\")
     */
    public function show(\$id)
    {
        // get the Post
        \$post = ...;

        return array('post' => \$post);
    }

When using the ``@Template`` annotation, the controller should return an
array of parameters to pass to the view instead of a ``Response`` object.

.. note::

    If you want to stream your template, you can make it with the following configuration::

        /**
         * @Template(isStreamable=true)
         */
        public function show(\$id)
        {
            // ...
        }


.. tip::
   If the action returns a ``Response`` object, the ``@Template`` 
   annotation is simply ignored.

If the template is named after the controller and action names, which is the
case for the above example, you can even omit the annotation value::

    /**
     * @Template
     */
    public function show(\$id)
    {
        // get the Post
        \$post = ...;

        return array('post' => \$post);
    }

.. tip::
   Sub-namespaces are converted into underscores. 
   The ``Sensio\\BlogBundle\\Controller\\UserProfileController::showDetails()`` action
   will resolve to ``@SensioBlog/user_profile/show_details.html.twig``

And if the only parameters to pass to the template are method arguments, you
can use the ``vars`` attribute instead of returning an array. This is very
useful in combination with the ``@ParamConverter`` :doc:`annotation
<converters>`::

    /**
     * @ParamConverter(\"post\", class=\"SensioBlogBundle:Post\")
     * @Template(\"@SensioBlog/post/show.html.twig\", vars={\"post\"})
     */
    public function show(Post \$post)
    {
    }

which, thanks to conventions, is equivalent to the following configuration::

    /**
     * @Template(vars={\"post\"})
     */
    public function show(Post \$post)
    {
    }

You can make it even more concise as all method arguments are automatically
passed to the template if the method returns ``null`` and no ``vars``
attribute is defined::

    /**
     * @Template
     */
    public function show(Post \$post)
    {
    }
", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/view.rst", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/view.rst");
    }
}
