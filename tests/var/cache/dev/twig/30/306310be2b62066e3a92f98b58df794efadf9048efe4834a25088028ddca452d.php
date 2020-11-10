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

/* vendor/webmozart/assert/CHANGELOG.md */
class __TwigTemplate_49ed9dc48dcc90f20621de704421e7782ffd8d6d440105fcbb28028c8bb8f5aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/webmozart/assert/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/webmozart/assert/CHANGELOG.md"));

        // line 1
        echo "Changelog
=========

## UNRELEASED

## 1.5.0 (2019-08-24)

### Added 

* added `Assert::uniqueValues()`
* added `Assert::unicodeLetters()`
* added: `Assert::email()`
* added support for [Psalm](https://github.com/vimeo/psalm), by adding `@psalm-assert` annotations where appropriate.

## Fixed

* `Assert::endsWith()` would not give the correct result when dealing with multibyte suffix. 
* `Assert::length(), minLength, maxLength, lengthBetween` would not give the correct result when dealing with multibyte characters. 

**NOTE**: These 2 changes may break your assertions if you relied on the fact that multibyte characters didn't behave correctly.

## Changed

* The names of some variables have been updated to better reflect what they are.
* All function calls are now in their FQN form, slightly increasing performance.
* Tests are now properly ran against HHVM-3.30 and PHP nightly.

### Deprecation

* deprecated `Assert::isTraversable()` in favor of `Assert::isIterable()`
  * This was already done in 1.3.0, but it was only done through a silenced `trigger_error`. It is now annotated as well.

## 1.4.0 (2018-12-25)

### Added

* added `Assert::ip()`
* added `Assert::ipv4()`
* added `Assert::ipv6()`
* added `Assert::notRegex()`
* added `Assert::interfaceExists()`
* added `Assert::isList()`
* added `Assert::isMap()`
* added polyfill for ctype

### Fixed

* Special case when comparing objects implementing `__toString()`

## 1.3.0 (2018-01-29)

### Added

* added `Assert::minCount()`
* added `Assert::maxCount()`
* added `Assert::countBetween()`
* added `Assert::isCountable()`
* added `Assert::notWhitespaceOnly()`
* added `Assert::natural()`
* added `Assert::notContains()`
* added `Assert::isArrayAccessible()`
* added `Assert::isInstanceOfAny()`
* added `Assert::isIterable()`

### Fixed

* `stringNotEmpty` will no longer report \"0\" is an empty string

### Deprecation

* deprecated `Assert::isTraversable()` in favor of `Assert::isIterable()`

## 1.2.0 (2016-11-23)

 * added `Assert::throws()`
 * added `Assert::count()`
 * added extension point `Assert::reportInvalidArgument()` for custom subclasses

## 1.1.0 (2016-08-09)

 * added `Assert::object()`
 * added `Assert::propertyExists()`
 * added `Assert::propertyNotExists()`
 * added `Assert::methodExists()`
 * added `Assert::methodNotExists()`
 * added `Assert::uuid()`

## 1.0.2 (2015-08-24)

 * integrated Style CI
 * add tests for minimum package dependencies on Travis CI

## 1.0.1 (2015-05-12)

 * added support for PHP 5.3.3

## 1.0.0 (2015-05-12)

 * first stable release

## 1.0.0-beta (2015-03-19)

 * first beta release
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/webmozart/assert/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Changelog
=========

## UNRELEASED

## 1.5.0 (2019-08-24)

### Added 

* added `Assert::uniqueValues()`
* added `Assert::unicodeLetters()`
* added: `Assert::email()`
* added support for [Psalm](https://github.com/vimeo/psalm), by adding `@psalm-assert` annotations where appropriate.

## Fixed

* `Assert::endsWith()` would not give the correct result when dealing with multibyte suffix. 
* `Assert::length(), minLength, maxLength, lengthBetween` would not give the correct result when dealing with multibyte characters. 

**NOTE**: These 2 changes may break your assertions if you relied on the fact that multibyte characters didn't behave correctly.

## Changed

* The names of some variables have been updated to better reflect what they are.
* All function calls are now in their FQN form, slightly increasing performance.
* Tests are now properly ran against HHVM-3.30 and PHP nightly.

### Deprecation

* deprecated `Assert::isTraversable()` in favor of `Assert::isIterable()`
  * This was already done in 1.3.0, but it was only done through a silenced `trigger_error`. It is now annotated as well.

## 1.4.0 (2018-12-25)

### Added

* added `Assert::ip()`
* added `Assert::ipv4()`
* added `Assert::ipv6()`
* added `Assert::notRegex()`
* added `Assert::interfaceExists()`
* added `Assert::isList()`
* added `Assert::isMap()`
* added polyfill for ctype

### Fixed

* Special case when comparing objects implementing `__toString()`

## 1.3.0 (2018-01-29)

### Added

* added `Assert::minCount()`
* added `Assert::maxCount()`
* added `Assert::countBetween()`
* added `Assert::isCountable()`
* added `Assert::notWhitespaceOnly()`
* added `Assert::natural()`
* added `Assert::notContains()`
* added `Assert::isArrayAccessible()`
* added `Assert::isInstanceOfAny()`
* added `Assert::isIterable()`

### Fixed

* `stringNotEmpty` will no longer report \"0\" is an empty string

### Deprecation

* deprecated `Assert::isTraversable()` in favor of `Assert::isIterable()`

## 1.2.0 (2016-11-23)

 * added `Assert::throws()`
 * added `Assert::count()`
 * added extension point `Assert::reportInvalidArgument()` for custom subclasses

## 1.1.0 (2016-08-09)

 * added `Assert::object()`
 * added `Assert::propertyExists()`
 * added `Assert::propertyNotExists()`
 * added `Assert::methodExists()`
 * added `Assert::methodNotExists()`
 * added `Assert::uuid()`

## 1.0.2 (2015-08-24)

 * integrated Style CI
 * add tests for minimum package dependencies on Travis CI

## 1.0.1 (2015-05-12)

 * added support for PHP 5.3.3

## 1.0.0 (2015-05-12)

 * first stable release

## 1.0.0-beta (2015-03-19)

 * first beta release
", "vendor/webmozart/assert/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/webmozart/assert/CHANGELOG.md");
    }
}
