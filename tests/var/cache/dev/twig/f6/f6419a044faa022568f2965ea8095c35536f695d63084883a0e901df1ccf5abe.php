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

/* vendor/symfony/dom-crawler/CHANGELOG.md */
class __TwigTemplate_9dee8e4daf4886b88bc473af5a432acc72f3cb13ded88fa4a0c09f3376eb63ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

* Added PHPUnit constraints: `CrawlerSelectorAttributeValueSame`, `CrawlerSelectorExists`, `CrawlerSelectorTextContains`
  and `CrawlerSelectorTextSame`
* Added return of element name (`_name`) in `extract()` method.
* Added ability to return a default value in `text()` and `html()` instead of throwing an exception when node is empty.
* When available, the [html5-php library](https://github.com/Masterminds/html5-php) is used to
  parse HTML added to a Crawler for better support of HTML5 tags.

4.2.0
-----

* The `\$currentUri` constructor argument of the `AbstractUriElement`, `Link` and
  `Image` classes is now optional.
* The `Crawler::children()` method will have a new `\$selector` argument in version 5.0,
  not defining it is deprecated.

3.1.0
-----

* All the URI parsing logic have been abstracted in the `AbstractUriElement` class.
  The `Link` class is now a child of `AbstractUriElement`.
* Added an `Image` class to crawl images and parse their `src` attribute,
  and `selectImage`, `image`, `images` methods in the `Crawler` (the image version of the equivalent `link` methods).

2.5.0
-----

* [BC BREAK] The default value for checkbox and radio inputs without a value attribute have changed
  from '1' to 'on' to match the HTML specification.
* [BC BREAK] The typehints on the `Link`, `Form` and `FormField` classes have been changed from
  `\\DOMNode` to `DOMElement`. Using any other type of `DOMNode` was triggering fatal errors in previous
  versions. Code extending these classes will need to update the typehints when overwriting these methods.

2.4.0
-----

 * `Crawler::addXmlContent()` removes the default document namespace again if it's an only namespace.
 * added support for automatic discovery and explicit register of document
   namespaces for `Crawler::filterXPath()` and `Crawler::filter()`
 * improved content type guessing in `Crawler::addContent()`
 * [BC BREAK] `Crawler::addXmlContent()` no longer removes the default document
   namespace

2.3.0
-----

 * added Crawler::html()
 * [BC BREAK] Crawler::each() and Crawler::reduce() now return Crawler instances instead of DomElement instances
 * added schema relative URL support to links
 * added support for HTML5 'form' attribute

2.2.0
-----

 * added a way to set raw path to the file in FileFormField - necessary for
   simulating HTTP requests

2.1.0
-----

 * added support for the HTTP PATCH method
 * refactored the Form class internals to support multi-dimensional fields
   (the public API is backward compatible)
 * added a way to get parsing errors for Crawler::addHtmlContent() and
   Crawler::addXmlContent() via libxml functions
 * added support for submitting a form without a submit button
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/CHANGELOG.md";
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

* Added PHPUnit constraints: `CrawlerSelectorAttributeValueSame`, `CrawlerSelectorExists`, `CrawlerSelectorTextContains`
  and `CrawlerSelectorTextSame`
* Added return of element name (`_name`) in `extract()` method.
* Added ability to return a default value in `text()` and `html()` instead of throwing an exception when node is empty.
* When available, the [html5-php library](https://github.com/Masterminds/html5-php) is used to
  parse HTML added to a Crawler for better support of HTML5 tags.

4.2.0
-----

* The `\$currentUri` constructor argument of the `AbstractUriElement`, `Link` and
  `Image` classes is now optional.
* The `Crawler::children()` method will have a new `\$selector` argument in version 5.0,
  not defining it is deprecated.

3.1.0
-----

* All the URI parsing logic have been abstracted in the `AbstractUriElement` class.
  The `Link` class is now a child of `AbstractUriElement`.
* Added an `Image` class to crawl images and parse their `src` attribute,
  and `selectImage`, `image`, `images` methods in the `Crawler` (the image version of the equivalent `link` methods).

2.5.0
-----

* [BC BREAK] The default value for checkbox and radio inputs without a value attribute have changed
  from '1' to 'on' to match the HTML specification.
* [BC BREAK] The typehints on the `Link`, `Form` and `FormField` classes have been changed from
  `\\DOMNode` to `DOMElement`. Using any other type of `DOMNode` was triggering fatal errors in previous
  versions. Code extending these classes will need to update the typehints when overwriting these methods.

2.4.0
-----

 * `Crawler::addXmlContent()` removes the default document namespace again if it's an only namespace.
 * added support for automatic discovery and explicit register of document
   namespaces for `Crawler::filterXPath()` and `Crawler::filter()`
 * improved content type guessing in `Crawler::addContent()`
 * [BC BREAK] `Crawler::addXmlContent()` no longer removes the default document
   namespace

2.3.0
-----

 * added Crawler::html()
 * [BC BREAK] Crawler::each() and Crawler::reduce() now return Crawler instances instead of DomElement instances
 * added schema relative URL support to links
 * added support for HTML5 'form' attribute

2.2.0
-----

 * added a way to set raw path to the file in FileFormField - necessary for
   simulating HTTP requests

2.1.0
-----

 * added support for the HTTP PATCH method
 * refactored the Form class internals to support multi-dimensional fields
   (the public API is backward compatible)
 * added a way to get parsing errors for Crawler::addHtmlContent() and
   Crawler::addXmlContent() via libxml functions
 * added support for submitting a form without a submit button
", "vendor/symfony/dom-crawler/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/CHANGELOG.md");
    }
}
