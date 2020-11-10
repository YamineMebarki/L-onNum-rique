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

/* vendor/symfony/property-access/CHANGELOG.md */
class __TwigTemplate_684688ad79938229b896d4625e48ff430716c4875edb5e697fb8a9015438b7f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

* added a `\$throwExceptionOnInvalidPropertyPath` argument to the PropertyAccessor constructor.
* added `enableExceptionOnInvalidPropertyPath()`, `disableExceptionOnInvalidPropertyPath()` and
  `isExceptionOnInvalidPropertyPath()` methods to `PropertyAccessorBuilder`

4.0.0
-----

 * removed the `StringUtil` class, use `Symfony\\Component\\Inflector\\Inflector`

3.1.0
-----

 * deprecated the `StringUtil` class, use `Symfony\\Component\\Inflector\\Inflector`
   instead

2.7.0
------

 * `UnexpectedTypeException` now expects three constructor arguments: The invalid property value,
   the `PropertyPathInterface` object and the current index of the property path.

2.5.0
------

 * allowed non alpha numeric characters in second level and deeper object properties names
 * [BC BREAK] when accessing an index on an object that does not implement
   ArrayAccess, a NoSuchIndexException is now thrown instead of the
   semantically wrong NoSuchPropertyException
 * [BC BREAK] added isReadable() and isWritable() to PropertyAccessorInterface

2.3.0
------

 * added PropertyAccessorBuilder, to enable or disable the support of \"__call\"
 * added support for \"__call\" in the PropertyAccessor (disabled by default)
 * [BC BREAK] changed PropertyAccessor to continue its search for a property or
   method even if a non-public match was found. Before, a PropertyAccessDeniedException
   was thrown in this case. Class PropertyAccessDeniedException was removed
   now.
 * deprecated PropertyAccess::getPropertyAccessor
 * added PropertyAccess::createPropertyAccessor and PropertyAccess::createPropertyAccessorBuilder
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/CHANGELOG.md";
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

* added a `\$throwExceptionOnInvalidPropertyPath` argument to the PropertyAccessor constructor.
* added `enableExceptionOnInvalidPropertyPath()`, `disableExceptionOnInvalidPropertyPath()` and
  `isExceptionOnInvalidPropertyPath()` methods to `PropertyAccessorBuilder`

4.0.0
-----

 * removed the `StringUtil` class, use `Symfony\\Component\\Inflector\\Inflector`

3.1.0
-----

 * deprecated the `StringUtil` class, use `Symfony\\Component\\Inflector\\Inflector`
   instead

2.7.0
------

 * `UnexpectedTypeException` now expects three constructor arguments: The invalid property value,
   the `PropertyPathInterface` object and the current index of the property path.

2.5.0
------

 * allowed non alpha numeric characters in second level and deeper object properties names
 * [BC BREAK] when accessing an index on an object that does not implement
   ArrayAccess, a NoSuchIndexException is now thrown instead of the
   semantically wrong NoSuchPropertyException
 * [BC BREAK] added isReadable() and isWritable() to PropertyAccessorInterface

2.3.0
------

 * added PropertyAccessorBuilder, to enable or disable the support of \"__call\"
 * added support for \"__call\" in the PropertyAccessor (disabled by default)
 * [BC BREAK] changed PropertyAccessor to continue its search for a property or
   method even if a non-public match was found. Before, a PropertyAccessDeniedException
   was thrown in this case. Class PropertyAccessDeniedException was removed
   now.
 * deprecated PropertyAccess::getPropertyAccessor
 * added PropertyAccess::createPropertyAccessor and PropertyAccess::createPropertyAccessorBuilder
", "vendor/symfony/property-access/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/CHANGELOG.md");
    }
}
