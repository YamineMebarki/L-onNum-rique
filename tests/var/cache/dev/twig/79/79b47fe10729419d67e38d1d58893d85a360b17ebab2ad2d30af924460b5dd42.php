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

/* vendor/symfony/browser-kit/CHANGELOG.md */
class __TwigTemplate_7e19c37d08d06819c7c898366cec8e08cc24ff9c881d39f1667985f6b18f6a68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * Added PHPUnit constraints: `BrowserCookieValueSame` and `BrowserHasCookie`
 * Added `HttpBrowser`, an implementation of a browser with the HttpClient component
 * Renamed `Client` to `AbstractBrowser`
 * Marked `Response` final.
 * Deprecated `Response::buildHeader()`
 * Deprecated `Response::getStatus()`, use `Response::getStatusCode()` instead

4.2.0
-----

 * The method `Client::submit()` will have a new `\$serverParameters` argument 
   in version 5.0, not defining it is deprecated
 * Added ability to read the \"samesite\" attribute of cookies using `Cookie::getSameSite()`

3.4.0
-----

 * [BC BREAK] Client will skip redirects during history navigation
   (back and forward calls) according to W3C Browsers recommendation

3.3.0
-----

 * [BC BREAK] The request method is dropped from POST to GET when the response
   status code is 301.

3.2.0
-----

 * Client HTTP user agent has been changed to 'Symfony BrowserKit'

2.3.0
-----

 * [BC BREAK] `Client::followRedirect()` won't redirect responses with
   a non-3xx Status Code and `Location` header anymore, as per
   http://tools.ietf.org/html/rfc2616#section-14.30

 * added `Client::getInternalRequest()` and `Client::getInternalResponse()` to
   have access to the BrowserKit internal request and response objects

2.1.0
-----

 * [BC BREAK] The CookieJar internals have changed to allow cookies with the
   same name on different sub-domains/sub-paths
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/CHANGELOG.md";
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

 * Added PHPUnit constraints: `BrowserCookieValueSame` and `BrowserHasCookie`
 * Added `HttpBrowser`, an implementation of a browser with the HttpClient component
 * Renamed `Client` to `AbstractBrowser`
 * Marked `Response` final.
 * Deprecated `Response::buildHeader()`
 * Deprecated `Response::getStatus()`, use `Response::getStatusCode()` instead

4.2.0
-----

 * The method `Client::submit()` will have a new `\$serverParameters` argument 
   in version 5.0, not defining it is deprecated
 * Added ability to read the \"samesite\" attribute of cookies using `Cookie::getSameSite()`

3.4.0
-----

 * [BC BREAK] Client will skip redirects during history navigation
   (back and forward calls) according to W3C Browsers recommendation

3.3.0
-----

 * [BC BREAK] The request method is dropped from POST to GET when the response
   status code is 301.

3.2.0
-----

 * Client HTTP user agent has been changed to 'Symfony BrowserKit'

2.3.0
-----

 * [BC BREAK] `Client::followRedirect()` won't redirect responses with
   a non-3xx Status Code and `Location` header anymore, as per
   http://tools.ietf.org/html/rfc2616#section-14.30

 * added `Client::getInternalRequest()` and `Client::getInternalResponse()` to
   have access to the BrowserKit internal request and response objects

2.1.0
-----

 * [BC BREAK] The CookieJar internals have changed to allow cookies with the
   same name on different sub-domains/sub-paths
", "vendor/symfony/browser-kit/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/CHANGELOG.md");
    }
}
