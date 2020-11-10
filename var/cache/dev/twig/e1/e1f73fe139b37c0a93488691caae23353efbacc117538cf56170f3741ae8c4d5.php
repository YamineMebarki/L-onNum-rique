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

/* vendor/doctrine/annotations/docs/en/custom.rst */
class __TwigTemplate_0960c12c06e456457d2dc370ac6f56a41aca92f0abd8da93397d2fb48e3d912f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/docs/en/custom.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/docs/en/custom.rst"));

        // line 1
        echo "Custom Annotation Classes
=========================

If you want to define your own annotations you just have to group them in a namespace and register this namespace
in the AnnotationRegistry. Annotation classes have to contain a class-level docblock with the text ``@Annotation``:

.. code-block:: php

    namespace MyCompany\\Annotations;

    /** @Annotation */
    class Bar
    {
        // some code
    }

Inject annotation values
------------------------

The annotation parser check if the annotation constructor has arguments,
if so then we will pass the value array, otherwise will try to inject values into public properties directly:


.. code-block:: php

    namespace MyCompany\\Annotations;

    /**
     * @Annotation
     *
     * Some Annotation using a constructor
     */
    class Bar
    {
        private \$foo;

        public function __construct(array \$values)
        {
            \$this->foo = \$values['foo'];
        }
    }

    /**
     * @Annotation
     *
     * Some Annotation without a constructor
     */
    class Foo
    {
        public \$bar;
    }

Annotation Target
-----------------

``@Target`` indicates the kinds of class element to which an annotation type is applicable.
Then you could define one or more targets:

-  ``CLASS`` Allowed in the class docblock
-  ``PROPERTY`` Allowed in the property docblock
-  ``METHOD`` Allowed in the method docblock
-  ``ALL`` Allowed in the class, property and method docblock
-  ``ANNOTATION`` Allowed inside other annotations

If the annotations is not allowed in the current context you got an ``AnnotationException``

.. code-block:: php

    namespace MyCompany\\Annotations;

    /**
     * @Annotation
     * @Target({\"METHOD\",\"PROPERTY\"})
     */
    class Bar
    {
        // some code
    }

    /**
     * @Annotation
     * @Target(\"CLASS\")
     */
    class Foo
    {
        // some code
    }

Attribute types
---------------

Annotation parser check the given parameters using the phpdoc annotation ``@var``,
The data type could be validated using the ``@var`` annotation on the annotation properties
or using the annotations ``@Attributes`` and ``@Attribute``.

If the data type not match you got an ``AnnotationException``

.. code-block:: php

    namespace MyCompany\\Annotations;

    /**
     * @Annotation
     * @Target({\"METHOD\",\"PROPERTY\"})
     */
    class Bar
    {
        /** @var mixed */
        public \$mixed;

        /** @var boolean */
        public \$boolean;

        /** @var bool */
        public \$bool;

        /** @var float */
        public \$float;

        /** @var string */
        public \$string;

        /** @var integer */
        public \$integer;

        /** @var array */
        public \$array;

        /** @var SomeAnnotationClass */
        public \$annotation;

        /** @var array<integer> */
        public \$arrayOfIntegers;

        /** @var array<SomeAnnotationClass> */
        public \$arrayOfAnnotations;
    }

    /**
     * @Annotation
     * @Target({\"METHOD\",\"PROPERTY\"})
     * @Attributes({
     *   @Attribute(\"stringProperty\", type = \"string\"),
     *   @Attribute(\"annotProperty\",  type = \"SomeAnnotationClass\"),
     * })
     */
    class Foo
    {
        public function __construct(array \$values)
        {
            \$this->stringProperty = \$values['stringProperty'];
            \$this->annotProperty = \$values['annotProperty'];
        }

        // some code
    }

Annotation Required
-------------------

``@Required`` indicates that the field must be specified when the annotation is used.
If it is not used you get an ``AnnotationException`` stating that this value can not be null.

Declaring a required field:

.. code-block:: php

    /**
     * @Annotation
     * @Target(\"ALL\")
     */
    class Foo
    {
        /** @Required */
        public \$requiredField;
    }

Usage:

.. code-block:: php

    /** @Foo(requiredField=\"value\") */
    public \$direction;                  // Valid

     /** @Foo */
    public \$direction;                  // Required field missing, throws an AnnotationException


Enumerated values
-----------------

- An annotation property marked with ``@Enum`` is a field that accept a fixed set of scalar values.
- You should use ``@Enum`` fields any time you need to represent fixed values.
- The annotation parser check the given value and throws an ``AnnotationException`` if the value not match.


Declaring an enumerated property:

.. code-block:: php

    /**
     * @Annotation
     * @Target(\"ALL\")
     */
    class Direction
    {
        /**
         * @Enum({\"NORTH\", \"SOUTH\", \"EAST\", \"WEST\"})
         */
        public \$value;
    }

Annotation usage:

.. code-block:: php

    /** @Direction(\"NORTH\") */
    public \$direction;                  // Valid value

     /** @Direction(\"NORTHEAST\") */
    public \$direction;                  // Invalid value, throws an AnnotationException


Constants
---------

The use of constants and class constants are available on the annotations parser.

The following usage are allowed:

.. code-block:: php

    namespace MyCompany\\Entity;

    use MyCompany\\Annotations\\Foo;
    use MyCompany\\Annotations\\Bar;
    use MyCompany\\Entity\\SomeClass;

    /**
     * @Foo(PHP_EOL)
     * @Bar(Bar::FOO)
     * @Foo({SomeClass::FOO, SomeClass::BAR})
     * @Bar({SomeClass::FOO_KEY = SomeClass::BAR_VALUE})
     */
    class User
    {
    }


Be careful with constants and the cache !

.. note::

    The cached reader will not re-evaluate each time an annotation is loaded from cache.
    When a constant is changed the cache must be cleaned.


Usage
-----

Using the library API is simple. Using the annotations described in the previous section
you can now annotate other classes with your annotations:

.. code-block:: php

    namespace MyCompany\\Entity;

    use MyCompany\\Annotations\\Foo;
    use MyCompany\\Annotations\\Bar;

    /**
     * @Foo(bar=\"foo\")
     * @Bar(foo=\"bar\")
     */
    class User
    {
    }

Now we can write a script to get the annotations above:

.. code-block:: php

    \$reflClass = new ReflectionClass('MyCompany\\Entity\\User');
    \$classAnnotations = \$reader->getClassAnnotations(\$reflClass);

    foreach (\$classAnnotations AS \$annot) {
        if (\$annot instanceof \\MyCompany\\Annotations\\Foo) {
            echo \$annot->bar; // prints \"foo\";
        } else if (\$annot instanceof \\MyCompany\\Annotations\\Bar) {
            echo \$annot->foo; // prints \"bar\";
        }
    }

You have a complete API for retrieving annotation class instances
from a class, property or method docblock:


Reader API
~~~~~~~~~~

Access all annotations of a class
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getClassAnnotations(\\ReflectionClass \$class);

Access one annotation of a class
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getClassAnnotation(\\ReflectionClass \$class, \$annotationName);

Access all annotations of a method
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getMethodAnnotations(\\ReflectionMethod \$method);

Access one annotation of a method
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName);

Access all annotations of a property
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getPropertyAnnotations(\\ReflectionProperty \$property);

Access one annotation of a property
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/docs/en/custom.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Custom Annotation Classes
=========================

If you want to define your own annotations you just have to group them in a namespace and register this namespace
in the AnnotationRegistry. Annotation classes have to contain a class-level docblock with the text ``@Annotation``:

.. code-block:: php

    namespace MyCompany\\Annotations;

    /** @Annotation */
    class Bar
    {
        // some code
    }

Inject annotation values
------------------------

The annotation parser check if the annotation constructor has arguments,
if so then we will pass the value array, otherwise will try to inject values into public properties directly:


.. code-block:: php

    namespace MyCompany\\Annotations;

    /**
     * @Annotation
     *
     * Some Annotation using a constructor
     */
    class Bar
    {
        private \$foo;

        public function __construct(array \$values)
        {
            \$this->foo = \$values['foo'];
        }
    }

    /**
     * @Annotation
     *
     * Some Annotation without a constructor
     */
    class Foo
    {
        public \$bar;
    }

Annotation Target
-----------------

``@Target`` indicates the kinds of class element to which an annotation type is applicable.
Then you could define one or more targets:

-  ``CLASS`` Allowed in the class docblock
-  ``PROPERTY`` Allowed in the property docblock
-  ``METHOD`` Allowed in the method docblock
-  ``ALL`` Allowed in the class, property and method docblock
-  ``ANNOTATION`` Allowed inside other annotations

If the annotations is not allowed in the current context you got an ``AnnotationException``

.. code-block:: php

    namespace MyCompany\\Annotations;

    /**
     * @Annotation
     * @Target({\"METHOD\",\"PROPERTY\"})
     */
    class Bar
    {
        // some code
    }

    /**
     * @Annotation
     * @Target(\"CLASS\")
     */
    class Foo
    {
        // some code
    }

Attribute types
---------------

Annotation parser check the given parameters using the phpdoc annotation ``@var``,
The data type could be validated using the ``@var`` annotation on the annotation properties
or using the annotations ``@Attributes`` and ``@Attribute``.

If the data type not match you got an ``AnnotationException``

.. code-block:: php

    namespace MyCompany\\Annotations;

    /**
     * @Annotation
     * @Target({\"METHOD\",\"PROPERTY\"})
     */
    class Bar
    {
        /** @var mixed */
        public \$mixed;

        /** @var boolean */
        public \$boolean;

        /** @var bool */
        public \$bool;

        /** @var float */
        public \$float;

        /** @var string */
        public \$string;

        /** @var integer */
        public \$integer;

        /** @var array */
        public \$array;

        /** @var SomeAnnotationClass */
        public \$annotation;

        /** @var array<integer> */
        public \$arrayOfIntegers;

        /** @var array<SomeAnnotationClass> */
        public \$arrayOfAnnotations;
    }

    /**
     * @Annotation
     * @Target({\"METHOD\",\"PROPERTY\"})
     * @Attributes({
     *   @Attribute(\"stringProperty\", type = \"string\"),
     *   @Attribute(\"annotProperty\",  type = \"SomeAnnotationClass\"),
     * })
     */
    class Foo
    {
        public function __construct(array \$values)
        {
            \$this->stringProperty = \$values['stringProperty'];
            \$this->annotProperty = \$values['annotProperty'];
        }

        // some code
    }

Annotation Required
-------------------

``@Required`` indicates that the field must be specified when the annotation is used.
If it is not used you get an ``AnnotationException`` stating that this value can not be null.

Declaring a required field:

.. code-block:: php

    /**
     * @Annotation
     * @Target(\"ALL\")
     */
    class Foo
    {
        /** @Required */
        public \$requiredField;
    }

Usage:

.. code-block:: php

    /** @Foo(requiredField=\"value\") */
    public \$direction;                  // Valid

     /** @Foo */
    public \$direction;                  // Required field missing, throws an AnnotationException


Enumerated values
-----------------

- An annotation property marked with ``@Enum`` is a field that accept a fixed set of scalar values.
- You should use ``@Enum`` fields any time you need to represent fixed values.
- The annotation parser check the given value and throws an ``AnnotationException`` if the value not match.


Declaring an enumerated property:

.. code-block:: php

    /**
     * @Annotation
     * @Target(\"ALL\")
     */
    class Direction
    {
        /**
         * @Enum({\"NORTH\", \"SOUTH\", \"EAST\", \"WEST\"})
         */
        public \$value;
    }

Annotation usage:

.. code-block:: php

    /** @Direction(\"NORTH\") */
    public \$direction;                  // Valid value

     /** @Direction(\"NORTHEAST\") */
    public \$direction;                  // Invalid value, throws an AnnotationException


Constants
---------

The use of constants and class constants are available on the annotations parser.

The following usage are allowed:

.. code-block:: php

    namespace MyCompany\\Entity;

    use MyCompany\\Annotations\\Foo;
    use MyCompany\\Annotations\\Bar;
    use MyCompany\\Entity\\SomeClass;

    /**
     * @Foo(PHP_EOL)
     * @Bar(Bar::FOO)
     * @Foo({SomeClass::FOO, SomeClass::BAR})
     * @Bar({SomeClass::FOO_KEY = SomeClass::BAR_VALUE})
     */
    class User
    {
    }


Be careful with constants and the cache !

.. note::

    The cached reader will not re-evaluate each time an annotation is loaded from cache.
    When a constant is changed the cache must be cleaned.


Usage
-----

Using the library API is simple. Using the annotations described in the previous section
you can now annotate other classes with your annotations:

.. code-block:: php

    namespace MyCompany\\Entity;

    use MyCompany\\Annotations\\Foo;
    use MyCompany\\Annotations\\Bar;

    /**
     * @Foo(bar=\"foo\")
     * @Bar(foo=\"bar\")
     */
    class User
    {
    }

Now we can write a script to get the annotations above:

.. code-block:: php

    \$reflClass = new ReflectionClass('MyCompany\\Entity\\User');
    \$classAnnotations = \$reader->getClassAnnotations(\$reflClass);

    foreach (\$classAnnotations AS \$annot) {
        if (\$annot instanceof \\MyCompany\\Annotations\\Foo) {
            echo \$annot->bar; // prints \"foo\";
        } else if (\$annot instanceof \\MyCompany\\Annotations\\Bar) {
            echo \$annot->foo; // prints \"bar\";
        }
    }

You have a complete API for retrieving annotation class instances
from a class, property or method docblock:


Reader API
~~~~~~~~~~

Access all annotations of a class
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getClassAnnotations(\\ReflectionClass \$class);

Access one annotation of a class
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getClassAnnotation(\\ReflectionClass \$class, \$annotationName);

Access all annotations of a method
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getMethodAnnotations(\\ReflectionMethod \$method);

Access one annotation of a method
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getMethodAnnotation(\\ReflectionMethod \$method, \$annotationName);

Access all annotations of a property
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getPropertyAnnotations(\\ReflectionProperty \$property);

Access one annotation of a property
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

.. code-block:: php

    public function getPropertyAnnotation(\\ReflectionProperty \$property, \$annotationName);
", "vendor/doctrine/annotations/docs/en/custom.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/docs/en/custom.rst");
    }
}
