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

/* vendor/symfony/debug/CHANGELOG.md */
class __TwigTemplate_31578181a2ea53e4cb0a3d43d031b7d6ac7e53b23f0b06bcbcf3c3202dd53e17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

* made the `ErrorHandler` and `ExceptionHandler` classes final
* added `Exception\\FlattenException::getAsString` and
`Exception\\FlattenException::getTraceAsString` to increase compatibility to php
exception objects

4.0.0
-----

* removed the symfony_debug extension
* removed `ContextErrorException`

3.4.0
-----

* deprecated `ErrorHandler::stackErrors()` and `ErrorHandler::unstackErrors()`

3.3.0
-----

* deprecated the `ContextErrorException` class: use \\ErrorException directly now

3.2.0
-----

* `FlattenException::getTrace()` now returns additional type descriptions
  `integer` and `float`.


3.0.0
-----

* removed classes, methods and interfaces deprecated in 2.x

2.8.0
-----

* added BufferingLogger for errors that happen before a proper logger is configured
* allow throwing from `__toString()` with `return trigger_error(\$e, E_USER_ERROR);`
* deprecate ExceptionHandler::createResponse

2.7.0
-----

* added deprecations checking for parent interfaces/classes to DebugClassLoader
* added ZTS support to symfony_debug extension
* added symfony_debug_backtrace() to symfony_debug extension
  to track the backtrace of fatal errors

2.6.0
-----

* generalized ErrorHandler and ExceptionHandler,
  with some new methods and others deprecated
* enhanced error messages for uncaught exceptions

2.5.0
-----

* added ExceptionHandler::setHandler()
* added UndefinedMethodFatalErrorHandler
* deprecated DummyException

2.4.0
-----

 * added a DebugClassLoader able to wrap any autoloader providing a findFile method
 * improved error messages for not found classes and functions

2.3.0
-----

 * added the component
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.3.0
-----

* made the `ErrorHandler` and `ExceptionHandler` classes final
* added `Exception\\FlattenException::getAsString` and
`Exception\\FlattenException::getTraceAsString` to increase compatibility to php
exception objects

4.0.0
-----

* removed the symfony_debug extension
* removed `ContextErrorException`

3.4.0
-----

* deprecated `ErrorHandler::stackErrors()` and `ErrorHandler::unstackErrors()`

3.3.0
-----

* deprecated the `ContextErrorException` class: use \\ErrorException directly now

3.2.0
-----

* `FlattenException::getTrace()` now returns additional type descriptions
  `integer` and `float`.


3.0.0
-----

* removed classes, methods and interfaces deprecated in 2.x

2.8.0
-----

* added BufferingLogger for errors that happen before a proper logger is configured
* allow throwing from `__toString()` with `return trigger_error(\$e, E_USER_ERROR);`
* deprecate ExceptionHandler::createResponse

2.7.0
-----

* added deprecations checking for parent interfaces/classes to DebugClassLoader
* added ZTS support to symfony_debug extension
* added symfony_debug_backtrace() to symfony_debug extension
  to track the backtrace of fatal errors

2.6.0
-----

* generalized ErrorHandler and ExceptionHandler,
  with some new methods and others deprecated
* enhanced error messages for uncaught exceptions

2.5.0
-----

* added ExceptionHandler::setHandler()
* added UndefinedMethodFatalErrorHandler
* deprecated DummyException

2.4.0
-----

 * added a DebugClassLoader able to wrap any autoloader providing a findFile method
 * improved error messages for not found classes and functions

2.3.0
-----

 * added the component
", "vendor/symfony/debug/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/debug/CHANGELOG.md");
    }
}
