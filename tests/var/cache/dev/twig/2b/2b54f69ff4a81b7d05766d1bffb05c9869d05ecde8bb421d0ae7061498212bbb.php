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

/* vendor/doctrine/common/docs/en/reference/class-loading.rst */
class __TwigTemplate_699bfc0a1d7e2940cf8924455fb4193d84aca2bb36fb56d6ecab7988f0e85811 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/docs/en/reference/class-loading.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/docs/en/reference/class-loading.rst"));

        // line 1
        echo "Class Loading
=============

Class loading is an essential part of any PHP application that
makes heavy use of classes and interfaces. Unfortunately, a lot of
people and projects spend a lot of time and effort on custom and
specialized class loading strategies. It can quickly become a pain
to understand what is going on when using multiple libraries and/or
frameworks, each with its own way to do class loading. Class
loading should be simple and it is an ideal candidate for
convention over configuration.

Overview
--------

The Doctrine Common ClassLoader implements a simple and efficient
approach to class loading that is easy to understand and use. The
implementation is based on the widely used and accepted convention
of mapping namespace and class names to a directory structure. This
approach is used for example by Symfony2, the Zend Framework and of
course, Doctrine.

For example, the following class:

.. code-block:: php

    <?php
    namespace MyProject\\Shipping;
    class ShippingStrategy { ... }

resides in the following directory structure:

::

    src/
      /MyProject
        /Shipping
           ShippingStrategy.php

Note that the name of \"src\" or the structure above or beside this
directory is completely arbitrary. \"src\" could be named \"classes\"
or \"lib\" or whatever. The only convention to adhere to is to map
namespaces to directories and classes to files named after the
class name.

Usage
-----

To use a Doctrine Common ClassLoader, you first need to load the
class file containing the ClassLoader. This is the only class file
that actually needs to be loaded explicitly via ``require``. All
other classes will be loaded on demand by the configured class
loaders.

.. code-block:: php

    <?php
    use Doctrine\\Common\\ClassLoader;
    require '/path/to/Doctrine/Common/ClassLoader.php';
    \$classLoader = new ClassLoader('MyProject', '/path/to/src');

A ``ClassLoader`` takes two constructor parameters, both optional.
In the normal case both arguments are supplied. The first argument
specifies the namespace prefix this class loader should be
responsible for and the second parameter is the path to the root
directory where the classes can be found according to the
convention mentioned previously.

The class loader in the example above would thus be responsible for
all classes under the 'MyProject' namespace and it would look for
the class files starting at the directory '/path/to/src'.

Also note that the prefix supplied in the first argument need not
be a root namespace but can be an arbitrarily nested namespace as
well. This allows you to even have the sources of subnamespaces
split across different directories. For example, all projects under
the Doctrine umbrella reside in the Doctrine namespace, yet the
sources for each project usually do not reside under a common root
directory. The following is an example of configuring three class
loaders, one for each used Doctrine project:

.. code-block:: php

    <?php
    use Doctrine\\Common\\ClassLoader;
    require '/path/to/Doctrine/Common/ClassLoader.php';
    \$commonLoader = new ClassLoader('Doctrine\\Common', '/path/to/common/lib');
    \$dbalLoader = new ClassLoader('Doctrine\\DBAL', '/path/to/dbal/lib');
    \$ormLoader = new ClassLoader('Doctrine\\ORM', '/path/to/orm/lib');
    \$commonLoader->register();
    \$dbalLoader->register();
    \$ormLoader->register();

Do not be afraid of using multiple class loaders. Due to the
efficient class loading design you will not incur much overhead
from using many class loaders. Take a look at the implementation of
``ClassLoader#loadClass`` to see how simple and efficient the class
loading is. The iteration over the installed class loaders happens
in C (with the exception of using ``ClassLoader::classExists``).

A ClassLoader can be used in the following other variations,
however, these are rarely used/needed:


-  If only the second argument is not supplied, the class loader
   will be responsible for the namespace prefix given in the first
   argument and it will rely on the PHP include_path.

-  If only the first argument is not supplied, the class loader
   will be responsible for *all* classes and it will try to look up
   *all* classes starting at the directory given as the second
   argument.

-  If both arguments are not supplied, the class loader will be
   responsible for *all* classes and it will rely on the PHP
   include_path.


File Extension
--------------

By default, a ClassLoader uses the ``.php`` file extension for all
class files. You can change this behavior, for example to use a
ClassLoader to load classes from a library that uses the
\".class.php\" convention (but it must nevertheless adhere to the
directory structure convention!):

.. code-block:: php

    <?php
    \$customLoader = new ClassLoader('CustomLib', '/path/to/custom/lib');
    \$customLoader->setFileExtension('.class.php');
    \$customLoader->register();

Namespace Separator
-------------------

By default, a ClassLoader uses the ``\\`` namespace separator. You
can change this behavior, for example to use a ClassLoader to load
legacy Zend Framework classes that still use the underscore \"_\"
separator:

.. code-block:: php

    <?php
    \$zend1Loader = new ClassLoader('Zend', '/path/to/zend/lib');
    \$zend1Loader->setNamespaceSeparator('_');
    \$zend1Loader->register();

Failing Silently and class_exists
----------------------------------

A lot of class/autoloaders these days try to fail silently when a
class file is not found. For the most part this is necessary in
order to support using ``class_exists('ClassName', true)`` which is
supposed to return a boolean value but triggers autoloading. This
is a bad thing as it basically forces class loaders to fail
silently, which in turn requires costly file_exists or fopen calls
for each class being loaded, even though in at least 99% of the
cases this is not necessary (compare the number of
class_exists(..., true) invocations to the total number of classes
being loaded in a request).

The Doctrine Common ClassLoader does not fail silently, by design.
It therefore does not need any costly checks for file existence. A
ClassLoader is always responsible for all classes with a certain
namespace prefix and if a class is requested to be loaded and can
not be found this is considered to be a fatal error. This also
means that using class_exists(..., true) to check for class
existence when using a Doctrine Common ClassLoader is not possible
but this is not a bad thing. What class\\_exists(..., true) actually
means is two things: 1) Check whether the class is already
defined/exists (i.e. class_exists(..., false)) and if not 2) check
whether a class file can be loaded for that class. In the Doctrine
Common ClassLoader the two responsibilities of loading a class and
checking for its existence are separated, which can be observed by
the existence of the two methods ``loadClass`` and
``canLoadClass``. Thereby ``loadClass`` does not invoke
``canLoadClass`` internally, by design. However, you are free to
use it yourself to check whether a class can be loaded and the
following code snippet is thus equivalent to class\\_exists(...,
true):

.. code-block:: php

    <?php
    // Equivalent to if (
    ('Foo', true)) if there is only 1 class loader to check
    if (class_exists('Foo', false) || \$classLoader->canLoadClass('Foo')) {
      // ...
    }

The only problem with this is that it is inconvenient as you need
to have a reference to the class loaders around (and there are
often multiple class loaders in use). Therefore, a simpler
alternative exists for the cases in which you really want to ask
all installed class loaders whether they can load the class:
``ClassLoader::classExists(\$className)``:

.. code-block:: php

    <?php
    // Equivalent to if (class_exists('Foo', true))
    if (ClassLoader::classExists('Foo')) {
      // ...
    }

This static method can basically be used as a drop-in replacement
for class_exists(..., true). It iterates over all installed class
loaders and asks each of them via ``canLoadClass``, returning early
(with TRUE) as soon as one class loader returns TRUE from
``canLoadClass``. If this sounds like it can potentially be rather
costly then because that is true but it is exactly the same thing
that class_exists(..., true) does under the hood, it triggers a
complete interaction of all class/auto loaders. Checking for class
existence via invoking autoloading was never a cheap thing to do
but now it is more obvious and more importantly, this check is no
longer interleaved with regular class loading, which avoids having
to check each and every class for existence prior to loading it.
The vast majority of classes to be loaded are *not* optional and a
failure to load such a class is, and should be, a fatal error. The
ClassLoader design reflects this.

If you have code that requires the usage of class\\_exists(...,
true) or ClassLoader::classExists during normal runtime of the
application (i.e. on each request) try to refactor your design to
avoid it.

Summary
-------

No matter which class loader you prefer to use (Doctrine classes do
not care about how they are loaded), we kindly encourage you to
adhere to the simple convention of mapping namespaces and class
names to a directory structure.

Class loading should be simple, automated and uniform. Time is
better invested in actual application development than in designing
special directory structures, autoloaders and clever caching
strategies for class loading.


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/docs/en/reference/class-loading.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Class Loading
=============

Class loading is an essential part of any PHP application that
makes heavy use of classes and interfaces. Unfortunately, a lot of
people and projects spend a lot of time and effort on custom and
specialized class loading strategies. It can quickly become a pain
to understand what is going on when using multiple libraries and/or
frameworks, each with its own way to do class loading. Class
loading should be simple and it is an ideal candidate for
convention over configuration.

Overview
--------

The Doctrine Common ClassLoader implements a simple and efficient
approach to class loading that is easy to understand and use. The
implementation is based on the widely used and accepted convention
of mapping namespace and class names to a directory structure. This
approach is used for example by Symfony2, the Zend Framework and of
course, Doctrine.

For example, the following class:

.. code-block:: php

    <?php
    namespace MyProject\\Shipping;
    class ShippingStrategy { ... }

resides in the following directory structure:

::

    src/
      /MyProject
        /Shipping
           ShippingStrategy.php

Note that the name of \"src\" or the structure above or beside this
directory is completely arbitrary. \"src\" could be named \"classes\"
or \"lib\" or whatever. The only convention to adhere to is to map
namespaces to directories and classes to files named after the
class name.

Usage
-----

To use a Doctrine Common ClassLoader, you first need to load the
class file containing the ClassLoader. This is the only class file
that actually needs to be loaded explicitly via ``require``. All
other classes will be loaded on demand by the configured class
loaders.

.. code-block:: php

    <?php
    use Doctrine\\Common\\ClassLoader;
    require '/path/to/Doctrine/Common/ClassLoader.php';
    \$classLoader = new ClassLoader('MyProject', '/path/to/src');

A ``ClassLoader`` takes two constructor parameters, both optional.
In the normal case both arguments are supplied. The first argument
specifies the namespace prefix this class loader should be
responsible for and the second parameter is the path to the root
directory where the classes can be found according to the
convention mentioned previously.

The class loader in the example above would thus be responsible for
all classes under the 'MyProject' namespace and it would look for
the class files starting at the directory '/path/to/src'.

Also note that the prefix supplied in the first argument need not
be a root namespace but can be an arbitrarily nested namespace as
well. This allows you to even have the sources of subnamespaces
split across different directories. For example, all projects under
the Doctrine umbrella reside in the Doctrine namespace, yet the
sources for each project usually do not reside under a common root
directory. The following is an example of configuring three class
loaders, one for each used Doctrine project:

.. code-block:: php

    <?php
    use Doctrine\\Common\\ClassLoader;
    require '/path/to/Doctrine/Common/ClassLoader.php';
    \$commonLoader = new ClassLoader('Doctrine\\Common', '/path/to/common/lib');
    \$dbalLoader = new ClassLoader('Doctrine\\DBAL', '/path/to/dbal/lib');
    \$ormLoader = new ClassLoader('Doctrine\\ORM', '/path/to/orm/lib');
    \$commonLoader->register();
    \$dbalLoader->register();
    \$ormLoader->register();

Do not be afraid of using multiple class loaders. Due to the
efficient class loading design you will not incur much overhead
from using many class loaders. Take a look at the implementation of
``ClassLoader#loadClass`` to see how simple and efficient the class
loading is. The iteration over the installed class loaders happens
in C (with the exception of using ``ClassLoader::classExists``).

A ClassLoader can be used in the following other variations,
however, these are rarely used/needed:


-  If only the second argument is not supplied, the class loader
   will be responsible for the namespace prefix given in the first
   argument and it will rely on the PHP include_path.

-  If only the first argument is not supplied, the class loader
   will be responsible for *all* classes and it will try to look up
   *all* classes starting at the directory given as the second
   argument.

-  If both arguments are not supplied, the class loader will be
   responsible for *all* classes and it will rely on the PHP
   include_path.


File Extension
--------------

By default, a ClassLoader uses the ``.php`` file extension for all
class files. You can change this behavior, for example to use a
ClassLoader to load classes from a library that uses the
\".class.php\" convention (but it must nevertheless adhere to the
directory structure convention!):

.. code-block:: php

    <?php
    \$customLoader = new ClassLoader('CustomLib', '/path/to/custom/lib');
    \$customLoader->setFileExtension('.class.php');
    \$customLoader->register();

Namespace Separator
-------------------

By default, a ClassLoader uses the ``\\`` namespace separator. You
can change this behavior, for example to use a ClassLoader to load
legacy Zend Framework classes that still use the underscore \"_\"
separator:

.. code-block:: php

    <?php
    \$zend1Loader = new ClassLoader('Zend', '/path/to/zend/lib');
    \$zend1Loader->setNamespaceSeparator('_');
    \$zend1Loader->register();

Failing Silently and class_exists
----------------------------------

A lot of class/autoloaders these days try to fail silently when a
class file is not found. For the most part this is necessary in
order to support using ``class_exists('ClassName', true)`` which is
supposed to return a boolean value but triggers autoloading. This
is a bad thing as it basically forces class loaders to fail
silently, which in turn requires costly file_exists or fopen calls
for each class being loaded, even though in at least 99% of the
cases this is not necessary (compare the number of
class_exists(..., true) invocations to the total number of classes
being loaded in a request).

The Doctrine Common ClassLoader does not fail silently, by design.
It therefore does not need any costly checks for file existence. A
ClassLoader is always responsible for all classes with a certain
namespace prefix and if a class is requested to be loaded and can
not be found this is considered to be a fatal error. This also
means that using class_exists(..., true) to check for class
existence when using a Doctrine Common ClassLoader is not possible
but this is not a bad thing. What class\\_exists(..., true) actually
means is two things: 1) Check whether the class is already
defined/exists (i.e. class_exists(..., false)) and if not 2) check
whether a class file can be loaded for that class. In the Doctrine
Common ClassLoader the two responsibilities of loading a class and
checking for its existence are separated, which can be observed by
the existence of the two methods ``loadClass`` and
``canLoadClass``. Thereby ``loadClass`` does not invoke
``canLoadClass`` internally, by design. However, you are free to
use it yourself to check whether a class can be loaded and the
following code snippet is thus equivalent to class\\_exists(...,
true):

.. code-block:: php

    <?php
    // Equivalent to if (
    ('Foo', true)) if there is only 1 class loader to check
    if (class_exists('Foo', false) || \$classLoader->canLoadClass('Foo')) {
      // ...
    }

The only problem with this is that it is inconvenient as you need
to have a reference to the class loaders around (and there are
often multiple class loaders in use). Therefore, a simpler
alternative exists for the cases in which you really want to ask
all installed class loaders whether they can load the class:
``ClassLoader::classExists(\$className)``:

.. code-block:: php

    <?php
    // Equivalent to if (class_exists('Foo', true))
    if (ClassLoader::classExists('Foo')) {
      // ...
    }

This static method can basically be used as a drop-in replacement
for class_exists(..., true). It iterates over all installed class
loaders and asks each of them via ``canLoadClass``, returning early
(with TRUE) as soon as one class loader returns TRUE from
``canLoadClass``. If this sounds like it can potentially be rather
costly then because that is true but it is exactly the same thing
that class_exists(..., true) does under the hood, it triggers a
complete interaction of all class/auto loaders. Checking for class
existence via invoking autoloading was never a cheap thing to do
but now it is more obvious and more importantly, this check is no
longer interleaved with regular class loading, which avoids having
to check each and every class for existence prior to loading it.
The vast majority of classes to be loaded are *not* optional and a
failure to load such a class is, and should be, a fatal error. The
ClassLoader design reflects this.

If you have code that requires the usage of class\\_exists(...,
true) or ClassLoader::classExists during normal runtime of the
application (i.e. on each request) try to refactor your design to
avoid it.

Summary
-------

No matter which class loader you prefer to use (Doctrine classes do
not care about how they are loaded), we kindly encourage you to
adhere to the simple convention of mapping namespaces and class
names to a directory structure.

Class loading should be simple, automated and uniform. Time is
better invested in actual application development than in designing
special directory structures, autoloaders and clever caching
strategies for class loading.


", "vendor/doctrine/common/docs/en/reference/class-loading.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/common/docs/en/reference/class-loading.rst");
    }
}
