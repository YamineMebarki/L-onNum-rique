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

/* vendor/doctrine/annotations/docs/en/index.rst */
class __TwigTemplate_87e3757f9407d55433550d30552ef9ba528f28efc6b45721ab8db6336aab6feb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/docs/en/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/docs/en/index.rst"));

        // line 1
        echo "Introduction
============

Doctrine Annotations offers to implement custom annotation
functionality for PHP classes.

.. code-block:: php

    class Foo
    {
        /**
         * @MyAnnotation(myProperty=\"value\")
         */
        private \$bar;
    }

Annotations aren't implemented in PHP itself which is why
this component offers a way to use the PHP doc-blocks as a
place for the well known annotation syntax using the
``@`` char.

Annotations in Doctrine are used for the ORM
configuration to build the class mapping, but it can
be used in other projects for other purposes too.

Installation
============

You can install the Annotation component with composer:

.. code-block::

    \$ composer require doctrine/annotations

Create an annotation class
==========================

An annotation class is a representation of the later
used annotation configuration in classes. The annotation
class of the previous example looks like this:

.. code-block:: php

    /**
     * @Annotation
     */
    final class MyAnnotation
    {
        public \$myProperty;
    }

The annotation class is declared as an annotation by
``@Annotation``.

:ref:`Read more about custom annotations. <custom>`

Reading annotations
===================

The access to the annotations happens by reflection of the class
containing them. There are multiple reader-classes implementing the
``Doctrine\\Common\\Annotations\\Reader`` interface, that can
access the annotations of a class. A common one is
``Doctrine\\Common\\Annotations\\AnnotationReader``:

.. code-block:: php

    \$reflectionClass = new ReflectionClass(Foo::class);
    \$property = \$reflectionClass->getProperty('bar');

    \$reader = new AnnotationReader();
    \$myAnnotation = \$reader->getPropertyAnnotation(\$property, 'bar');

    echo \$myAnnotation->myProperty; // result: \"value\"

A reader has multiple methods to access the annotations
of a class.

:ref:`Read more about handling annotations. <annotations>`

IDE Support
-----------

Some IDEs already provide support for annotations:

- Eclipse via the `Symfony2 Plugin <http://symfony.dubture.com/>`_
- PHPStorm via the `PHP Annotations Plugin <http://plugins.jetbrains.com/plugin/7320>`_ or the `Symfony2 Plugin <http://plugins.jetbrains.com/plugin/7219>`_

.. _Read more about handling annotations.: annotations
.. _Read more about custom annotations.: custom
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

Doctrine Annotations offers to implement custom annotation
functionality for PHP classes.

.. code-block:: php

    class Foo
    {
        /**
         * @MyAnnotation(myProperty=\"value\")
         */
        private \$bar;
    }

Annotations aren't implemented in PHP itself which is why
this component offers a way to use the PHP doc-blocks as a
place for the well known annotation syntax using the
``@`` char.

Annotations in Doctrine are used for the ORM
configuration to build the class mapping, but it can
be used in other projects for other purposes too.

Installation
============

You can install the Annotation component with composer:

.. code-block::

    \$ composer require doctrine/annotations

Create an annotation class
==========================

An annotation class is a representation of the later
used annotation configuration in classes. The annotation
class of the previous example looks like this:

.. code-block:: php

    /**
     * @Annotation
     */
    final class MyAnnotation
    {
        public \$myProperty;
    }

The annotation class is declared as an annotation by
``@Annotation``.

:ref:`Read more about custom annotations. <custom>`

Reading annotations
===================

The access to the annotations happens by reflection of the class
containing them. There are multiple reader-classes implementing the
``Doctrine\\Common\\Annotations\\Reader`` interface, that can
access the annotations of a class. A common one is
``Doctrine\\Common\\Annotations\\AnnotationReader``:

.. code-block:: php

    \$reflectionClass = new ReflectionClass(Foo::class);
    \$property = \$reflectionClass->getProperty('bar');

    \$reader = new AnnotationReader();
    \$myAnnotation = \$reader->getPropertyAnnotation(\$property, 'bar');

    echo \$myAnnotation->myProperty; // result: \"value\"

A reader has multiple methods to access the annotations
of a class.

:ref:`Read more about handling annotations. <annotations>`

IDE Support
-----------

Some IDEs already provide support for annotations:

- Eclipse via the `Symfony2 Plugin <http://symfony.dubture.com/>`_
- PHPStorm via the `PHP Annotations Plugin <http://plugins.jetbrains.com/plugin/7320>`_ or the `Symfony2 Plugin <http://plugins.jetbrains.com/plugin/7219>`_

.. _Read more about handling annotations.: annotations
.. _Read more about custom annotations.: custom
", "vendor/doctrine/annotations/docs/en/index.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/docs/en/index.rst");
    }
}
