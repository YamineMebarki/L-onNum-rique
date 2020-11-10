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

/* vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/cache.rst */
class __TwigTemplate_b2c5f09b66212a401427e64a1bdaef26ec4cdb0e1eb61ca6a11cc0712b5cb743 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/cache.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/cache.rst"));

        // line 1
        echo "@Cache
======

The ``@Cache`` annotation makes it easy to define HTTP caching headers for
expiration and validation.

HTTP Expiration Strategies
--------------------------

The ``@Cache`` annotation makes it easy to define HTTP caching::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Cache;

    /**
     * @Cache(expires=\"tomorrow\", public=true)
     */
    public function index()
    {
    }

You can also use the annotation on a class to define caching for all actions
of a controller::

    /**
     * @Cache(expires=\"tomorrow\", public=true)
     */
    class BlogController extends Controller
    {
    }

When there is a conflict between the class configuration and the method
configuration, the latter overrides the former::

    /**
     * @Cache(expires=\"tomorrow\")
     */
    class BlogController extends Controller
    {
        /**
         * @Cache(expires=\"+2 days\")
         */
        public function index()
        {
        }
    }

.. note::

   The ``expires`` attribute takes any valid date understood by the PHP
   ``strtotime()`` function.

HTTP Validation Strategies
--------------------------

The ``lastModified`` and ``Etag`` attributes manage the HTTP validation cache
headers. ``lastModified`` adds a ``Last-Modified`` header to Responses and
``Etag`` adds an ``Etag`` header.

Both automatically trigger the logic to return a 304 response when the
response is not modified (in this case, the controller is **not** called)::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Cache;

    /**
     * @Cache(lastModified=\"post.getUpdatedAt()\", Etag=\"'Post' ~ post.getId() ~ post.getUpdatedAt().getTimestamp()\")
     */
    public function index(Post \$post)
    {
        // your code
        // won't be called in case of a 304
    }

It's roughly doing the same as the following code::

    public function my(Request \$request, Post \$post)
    {
        \$response = new Response();
        \$response->setLastModified(\$post->getUpdatedAt());
        if (\$response->isNotModified(\$request)) {
            return \$response;
        }

        // your code
    }

.. note::

    The Etag HTTP header value is the result of the expression hashed with the
    ``sha256`` algorithm.

Attributes
----------

Here is a list of accepted attributes and their HTTP header equivalent:

======================================================================= ===================================================================
Annotation                                                              Response Method
======================================================================= ===================================================================
``@Cache(expires=\"tomorrow\")``                                          ``\$response->setExpires()``
``@Cache(smaxage=\"15\")``                                                ``\$response->setSharedMaxAge()``
``@Cache(maxage=\"15\")``                                                 ``\$response->setMaxAge()``
``@Cache(maxstale=\"15\")``                                               ``\$response->headers->addCacheControlDirective('max-stale', 15)``
``@Cache(vary={\"Cookie\"})``                                             ``\$response->setVary()``
``@Cache(public=true)``                                                 ``\$response->setPublic()``
``@Cache(lastModified=\"post.getUpdatedAt()\")``                          ``\$response->setLastModified()``
``@Cache(Etag=\"post.getId() ~ post.getUpdatedAt().getTimestamp()\")``    ``\$response->setEtag()``
``@Cache(mustRevalidate=true)``                                         ``\$response->headers->addCacheControlDirective('must-revalidate')``
======================================================================= ===================================================================

.. note::

    smaxage, maxage and maxstale attributes can also get a string with relative time format (1 day, 2 weeks, ...).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/cache.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@Cache
======

The ``@Cache`` annotation makes it easy to define HTTP caching headers for
expiration and validation.

HTTP Expiration Strategies
--------------------------

The ``@Cache`` annotation makes it easy to define HTTP caching::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Cache;

    /**
     * @Cache(expires=\"tomorrow\", public=true)
     */
    public function index()
    {
    }

You can also use the annotation on a class to define caching for all actions
of a controller::

    /**
     * @Cache(expires=\"tomorrow\", public=true)
     */
    class BlogController extends Controller
    {
    }

When there is a conflict between the class configuration and the method
configuration, the latter overrides the former::

    /**
     * @Cache(expires=\"tomorrow\")
     */
    class BlogController extends Controller
    {
        /**
         * @Cache(expires=\"+2 days\")
         */
        public function index()
        {
        }
    }

.. note::

   The ``expires`` attribute takes any valid date understood by the PHP
   ``strtotime()`` function.

HTTP Validation Strategies
--------------------------

The ``lastModified`` and ``Etag`` attributes manage the HTTP validation cache
headers. ``lastModified`` adds a ``Last-Modified`` header to Responses and
``Etag`` adds an ``Etag`` header.

Both automatically trigger the logic to return a 304 response when the
response is not modified (in this case, the controller is **not** called)::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Cache;

    /**
     * @Cache(lastModified=\"post.getUpdatedAt()\", Etag=\"'Post' ~ post.getId() ~ post.getUpdatedAt().getTimestamp()\")
     */
    public function index(Post \$post)
    {
        // your code
        // won't be called in case of a 304
    }

It's roughly doing the same as the following code::

    public function my(Request \$request, Post \$post)
    {
        \$response = new Response();
        \$response->setLastModified(\$post->getUpdatedAt());
        if (\$response->isNotModified(\$request)) {
            return \$response;
        }

        // your code
    }

.. note::

    The Etag HTTP header value is the result of the expression hashed with the
    ``sha256`` algorithm.

Attributes
----------

Here is a list of accepted attributes and their HTTP header equivalent:

======================================================================= ===================================================================
Annotation                                                              Response Method
======================================================================= ===================================================================
``@Cache(expires=\"tomorrow\")``                                          ``\$response->setExpires()``
``@Cache(smaxage=\"15\")``                                                ``\$response->setSharedMaxAge()``
``@Cache(maxage=\"15\")``                                                 ``\$response->setMaxAge()``
``@Cache(maxstale=\"15\")``                                               ``\$response->headers->addCacheControlDirective('max-stale', 15)``
``@Cache(vary={\"Cookie\"})``                                             ``\$response->setVary()``
``@Cache(public=true)``                                                 ``\$response->setPublic()``
``@Cache(lastModified=\"post.getUpdatedAt()\")``                          ``\$response->setLastModified()``
``@Cache(Etag=\"post.getId() ~ post.getUpdatedAt().getTimestamp()\")``    ``\$response->setEtag()``
``@Cache(mustRevalidate=true)``                                         ``\$response->headers->addCacheControlDirective('must-revalidate')``
======================================================================= ===================================================================

.. note::

    smaxage, maxage and maxstale attributes can also get a string with relative time format (1 day, 2 weeks, ...).
", "vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/cache.rst", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/doc/annotations/cache.rst");
    }
}
