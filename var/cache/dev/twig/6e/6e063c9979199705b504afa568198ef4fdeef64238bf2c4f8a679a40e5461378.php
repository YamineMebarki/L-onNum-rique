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

/* vendor/doctrine/reflection/docs/en/reference/index.rst */
class __TwigTemplate_42132ef701ebfd1ecc33d4f95a88de8d6c7df13386ad7b5934e633b562e9bffa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/docs/en/reference/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/reflection/docs/en/reference/index.rst"));

        // line 1
        echo "Introduction
============

The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional
functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information
about classes, methods and properties statically.

Installation
============

The library can easily be installed with composer.

.. code-block:: sh

    \$ composer require doctrine/reflection

Setup
=====

.. code-block:: php

    use Doctrine\\Common\\Reflection\\Psr0FindFile;
    use Doctrine\\Common\\Reflection\\StaticReflectionParser;
    use App\\Model\\User;

    \$finder = new Psr0FindFile(['App' => [
        '/path/to/project/src/App'
    ]]);

    \$staticReflectionParser = new StaticReflectionParser(User::class, \$finder);

Usage
=====

.. code-block:: php

    echo \$staticReflectionParser->getClassName();
    echo \$staticReflectionParser->getNamespaceName();

StaticReflectionClass
=====================

.. code-block:: php

    \$staticReflectionClass = \$staticReflectionParser->getReflectionClass();

    echo \$staticReflectionClass->getName();

    echo \$staticReflectionClass->getDocComment();

    echo \$staticReflectionClass->getNamespaceName();

    print_r(\$staticReflectionClass->getUseStatements());

StaticReflectionMethod
======================

.. code-block:: php

    \$staticReflectionMethod = \$staticReflectionParser->getReflectionMethod('getSomething');

    echo \$staticReflectionMethod->getName();

    echo \$staticReflectionMethod->getDeclaringClass();

    echo \$staticReflectionMethod->getNamespaceName();

    echo \$staticReflectionMethod->getDocComment();

    print_r(\$staticReflectionMethod->getUseStatements());

StaticReflectionProperty
========================

.. code-block:: php

    \$staticReflectionProperty = \$staticReflectionParser->getReflectionProperty('something');

    echo \$staticReflectionProperty->getName();

    echo \$staticReflectionProperty->getDeclaringClass();

    echo \$staticReflectionProperty->getDocComment();

    print_r(\$staticReflectionProperty->getUseStatements());
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/reflection/docs/en/reference/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional
functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information
about classes, methods and properties statically.

Installation
============

The library can easily be installed with composer.

.. code-block:: sh

    \$ composer require doctrine/reflection

Setup
=====

.. code-block:: php

    use Doctrine\\Common\\Reflection\\Psr0FindFile;
    use Doctrine\\Common\\Reflection\\StaticReflectionParser;
    use App\\Model\\User;

    \$finder = new Psr0FindFile(['App' => [
        '/path/to/project/src/App'
    ]]);

    \$staticReflectionParser = new StaticReflectionParser(User::class, \$finder);

Usage
=====

.. code-block:: php

    echo \$staticReflectionParser->getClassName();
    echo \$staticReflectionParser->getNamespaceName();

StaticReflectionClass
=====================

.. code-block:: php

    \$staticReflectionClass = \$staticReflectionParser->getReflectionClass();

    echo \$staticReflectionClass->getName();

    echo \$staticReflectionClass->getDocComment();

    echo \$staticReflectionClass->getNamespaceName();

    print_r(\$staticReflectionClass->getUseStatements());

StaticReflectionMethod
======================

.. code-block:: php

    \$staticReflectionMethod = \$staticReflectionParser->getReflectionMethod('getSomething');

    echo \$staticReflectionMethod->getName();

    echo \$staticReflectionMethod->getDeclaringClass();

    echo \$staticReflectionMethod->getNamespaceName();

    echo \$staticReflectionMethod->getDocComment();

    print_r(\$staticReflectionMethod->getUseStatements());

StaticReflectionProperty
========================

.. code-block:: php

    \$staticReflectionProperty = \$staticReflectionParser->getReflectionProperty('something');

    echo \$staticReflectionProperty->getName();

    echo \$staticReflectionProperty->getDeclaringClass();

    echo \$staticReflectionProperty->getDocComment();

    print_r(\$staticReflectionProperty->getUseStatements());
", "vendor/doctrine/reflection/docs/en/reference/index.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/reflection/docs/en/reference/index.rst");
    }
}
