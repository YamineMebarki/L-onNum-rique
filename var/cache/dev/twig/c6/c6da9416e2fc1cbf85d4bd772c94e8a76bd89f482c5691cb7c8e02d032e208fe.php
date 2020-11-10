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

/* vendor/sensio/framework-extra-bundle/src/Resources/doc/index.rst */
class __TwigTemplate_87ed7728a04ddaff482b816f4a242b9a145e285e64cf8f92fb74ddabbcaf95dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/doc/index.rst"));

        // line 1
        echo "SensioFrameworkExtraBundle
==========================

The default Symfony ``FrameworkBundle`` implements a basic but robust and
flexible MVC framework. `SensioFrameworkExtraBundle`_ extends it to add sweet
conventions and annotations. It allows for more concise controllers.

Installation
------------

An official Symfony recipe is available for this bundle. To automatically
install and configure it run:

.. code-block:: bash

    \$ composer require annotations

You're done!

Alternatively, if you don't use Symfony Flex, add it to your ``composer.json``
file:

.. code-block:: bash

    \$ composer require sensio/framework-extra-bundle

Then, like for any other bundle, include it in your Kernel class::

    public function registerBundles()
    {
        \$bundles = array(
            // ...

            new Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle(),
        );

        // ...
    }

Configuration
-------------

All features provided by the bundle are enabled by default when the bundle is
registered in your Kernel class.

The default configuration is as follow:

.. configuration-block::

    .. code-block:: yaml

        sensio_framework_extra:
            router:      { annotations: true } # Deprecated; use routing annotations of Symfony core instead
            request:     { converters: true, auto_convert: true }
            view:        { annotations: true }
            cache:       { annotations: true }
            security:    { annotations: true }
            psr_message: { enabled: false } # Defaults to true if the PSR-7 bridge is installed


    .. code-block:: xml

        <!-- xmlns:sensio-framework-extra=\"http://symfony.com/schema/dic/symfony_extra\" -->
        <sensio-framework-extra:config>
            <router annotations=\"true\" />
            <request converters=\"true\" auto_convert=\"true\" />
            <view annotations=\"true\" />
            <cache annotations=\"true\" />
            <security annotations=\"true\" />
            <psr-message enabled=\"false\" /> <!-- Defaults to true if the PSR-7 bridge is installed -->
        </sensio-framework-extra:config>

    .. code-block:: php

        // load the profiler
        \$container->loadFromExtension('sensio_framework_extra', array(
            'router'      => array('annotations' => true),
            'request'     => array('converters' => true, 'auto_convert' => true),
            'view'        => array('annotations' => true),
            'cache'       => array('annotations' => true),
            'security'    => array('annotations' => true),
            'psr_message' => array('enabled' => false), // Defaults to true if the PSR-7 bridge is installed
        ));

You can disable some annotations and conventions by defining one or more
settings to false.

Annotations for Controllers
---------------------------

Annotations are a great way to easily configure your controllers, from the
routes to the cache configuration.

Even if annotations are not a native feature of PHP, it still has several
advantages over the classic Symfony configuration methods:

* Code and configuration are in the same place (the controller class);
* Simple to learn and to use;
* Concise to write;
* Makes your Controller thin (as its sole responsibility is to get data from
  the Model).

.. tip::

   If you use view classes, annotations are a great way to avoid creating
   view classes for simple and common use cases.

The following annotations are defined by the bundle:

.. toctree::
   :maxdepth: 1

   annotations/routing
   annotations/converters
   annotations/view
   annotations/cache
   annotations/security

This example shows all the available annotations in action::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Cache;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\IsGranted;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security;

    /**
     * @Route(\"/blog\")
     * @Cache(expires=\"tomorrow\")
     */
    class AnnotController
    {
        /**
         * @Route(\"/\")
         * @Template
         */
        public function index()
        {
            \$posts = ...;

            return array('posts' => \$posts);
        }

        /**
         * @Route(\"/{id}\")
         * @Method(\"GET\")
         * @ParamConverter(\"post\", class=\"SensioBlogBundle:Post\")
         * @Template(\"@SensioBlog/annot/show.html.twig\", vars={\"post\"})
         * @Cache(smaxage=\"15\", lastmodified=\"post.getUpdatedAt()\", etag=\"'Post' ~ post.getId() ~ post.getUpdatedAt()\")
         * @IsGranted(\"ROLE_SPECIAL_USER\")
         * @Security(\"has_role('ROLE_ADMIN') and is_granted('POST_SHOW', post)\")
         */
        public function show(Post \$post)
        {
        }
    }

As the ``showAction`` method follows some conventions, you can omit some
annotations::

    /**
     * @Route(\"/{id}\")
     * @Cache(smaxage=\"15\", lastModified=\"post.getUpdatedAt()\", Etag=\"'Post' ~ post.getId() ~ post.getUpdatedAt()\")
     * @IsGranted(\"ROLE_SPECIAL_USER\")
     * @Security(\"has_role('ROLE_ADMIN') and is_granted('POST_SHOW', post)\")
     */
    public function show(Post \$post)
    {
    }

The routes need to be imported to be active as any other routing resources, for
example:

.. code-block:: yaml

    # app/config/routing.yml

    # import routes from a controller directory
    annot:
        resource: \"@AnnotRoutingBundle/Controller\"
        type:     annotation

PSR-7 support
-------------

SensioFrameworkExtraBundle provides support for HTTP messages interfaces defined
in `PSR-7`_. It allows to inject instances of ``Psr\\Http\\Message\\ServerRequestInterface``
and to return instances of ``Psr\\Http\\Message\\ResponseInterface`` in controllers.

To enable this feature, `the HttpFoundation to PSR-7 bridge`_ and `autowiring aliases for PSR-17` must be installed:

.. code-block:: bash

    \$ composer require symfony/psr-http-message-bridge nyholm/psr7

Then, PSR-7 messages can be used directly in controllers like in the following code
snippet::

    namespace AppBundle\\Controller;

    use Psr\\Http\\Message\\ResponseFactoryInterface;
    use Psr\\Http\\Message\\ServerRequestInterface;

    class DefaultController
    {
        public function index(ServerRequestInterface \$request, ResponseFactoryInterface \$responseFactory)
        {
            // Interact with the PSR-7 request

            \$response = \$responseFactory->createResponse();
            // Interact with the PSR-7 response

            return \$response;
        }
    }

Note that internally, Symfony always use :class:`Symfony\\\\Component\\\\HttpFoundation\\\\Request`
and :class:`Symfony\\\\Component\\\\HttpFoundation\\\\Response` instances.

.. _`SensioFrameworkExtraBundle`: https://github.com/sensiolabs/SensioFrameworkExtraBundle
.. _`PSR-7`: http://www.php-fig.org/psr/psr-7/
.. _`the HttpFoundation to PSR-7 bridge`: https://github.com/symfony/psr-http-message-bridge
.. _`autowiring aliases for PSR-17`: https://github.com/symfony/recipes/blob/master/nyholm/psr7/1.0/config/packages/nyholm_psr7.yaml
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/doc/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("SensioFrameworkExtraBundle
==========================

The default Symfony ``FrameworkBundle`` implements a basic but robust and
flexible MVC framework. `SensioFrameworkExtraBundle`_ extends it to add sweet
conventions and annotations. It allows for more concise controllers.

Installation
------------

An official Symfony recipe is available for this bundle. To automatically
install and configure it run:

.. code-block:: bash

    \$ composer require annotations

You're done!

Alternatively, if you don't use Symfony Flex, add it to your ``composer.json``
file:

.. code-block:: bash

    \$ composer require sensio/framework-extra-bundle

Then, like for any other bundle, include it in your Kernel class::

    public function registerBundles()
    {
        \$bundles = array(
            // ...

            new Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle(),
        );

        // ...
    }

Configuration
-------------

All features provided by the bundle are enabled by default when the bundle is
registered in your Kernel class.

The default configuration is as follow:

.. configuration-block::

    .. code-block:: yaml

        sensio_framework_extra:
            router:      { annotations: true } # Deprecated; use routing annotations of Symfony core instead
            request:     { converters: true, auto_convert: true }
            view:        { annotations: true }
            cache:       { annotations: true }
            security:    { annotations: true }
            psr_message: { enabled: false } # Defaults to true if the PSR-7 bridge is installed


    .. code-block:: xml

        <!-- xmlns:sensio-framework-extra=\"http://symfony.com/schema/dic/symfony_extra\" -->
        <sensio-framework-extra:config>
            <router annotations=\"true\" />
            <request converters=\"true\" auto_convert=\"true\" />
            <view annotations=\"true\" />
            <cache annotations=\"true\" />
            <security annotations=\"true\" />
            <psr-message enabled=\"false\" /> <!-- Defaults to true if the PSR-7 bridge is installed -->
        </sensio-framework-extra:config>

    .. code-block:: php

        // load the profiler
        \$container->loadFromExtension('sensio_framework_extra', array(
            'router'      => array('annotations' => true),
            'request'     => array('converters' => true, 'auto_convert' => true),
            'view'        => array('annotations' => true),
            'cache'       => array('annotations' => true),
            'security'    => array('annotations' => true),
            'psr_message' => array('enabled' => false), // Defaults to true if the PSR-7 bridge is installed
        ));

You can disable some annotations and conventions by defining one or more
settings to false.

Annotations for Controllers
---------------------------

Annotations are a great way to easily configure your controllers, from the
routes to the cache configuration.

Even if annotations are not a native feature of PHP, it still has several
advantages over the classic Symfony configuration methods:

* Code and configuration are in the same place (the controller class);
* Simple to learn and to use;
* Concise to write;
* Makes your Controller thin (as its sole responsibility is to get data from
  the Model).

.. tip::

   If you use view classes, annotations are a great way to avoid creating
   view classes for simple and common use cases.

The following annotations are defined by the bundle:

.. toctree::
   :maxdepth: 1

   annotations/routing
   annotations/converters
   annotations/view
   annotations/cache
   annotations/security

This example shows all the available annotations in action::

    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Cache;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\IsGranted;
    use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security;

    /**
     * @Route(\"/blog\")
     * @Cache(expires=\"tomorrow\")
     */
    class AnnotController
    {
        /**
         * @Route(\"/\")
         * @Template
         */
        public function index()
        {
            \$posts = ...;

            return array('posts' => \$posts);
        }

        /**
         * @Route(\"/{id}\")
         * @Method(\"GET\")
         * @ParamConverter(\"post\", class=\"SensioBlogBundle:Post\")
         * @Template(\"@SensioBlog/annot/show.html.twig\", vars={\"post\"})
         * @Cache(smaxage=\"15\", lastmodified=\"post.getUpdatedAt()\", etag=\"'Post' ~ post.getId() ~ post.getUpdatedAt()\")
         * @IsGranted(\"ROLE_SPECIAL_USER\")
         * @Security(\"has_role('ROLE_ADMIN') and is_granted('POST_SHOW', post)\")
         */
        public function show(Post \$post)
        {
        }
    }

As the ``showAction`` method follows some conventions, you can omit some
annotations::

    /**
     * @Route(\"/{id}\")
     * @Cache(smaxage=\"15\", lastModified=\"post.getUpdatedAt()\", Etag=\"'Post' ~ post.getId() ~ post.getUpdatedAt()\")
     * @IsGranted(\"ROLE_SPECIAL_USER\")
     * @Security(\"has_role('ROLE_ADMIN') and is_granted('POST_SHOW', post)\")
     */
    public function show(Post \$post)
    {
    }

The routes need to be imported to be active as any other routing resources, for
example:

.. code-block:: yaml

    # app/config/routing.yml

    # import routes from a controller directory
    annot:
        resource: \"@AnnotRoutingBundle/Controller\"
        type:     annotation

PSR-7 support
-------------

SensioFrameworkExtraBundle provides support for HTTP messages interfaces defined
in `PSR-7`_. It allows to inject instances of ``Psr\\Http\\Message\\ServerRequestInterface``
and to return instances of ``Psr\\Http\\Message\\ResponseInterface`` in controllers.

To enable this feature, `the HttpFoundation to PSR-7 bridge`_ and `autowiring aliases for PSR-17` must be installed:

.. code-block:: bash

    \$ composer require symfony/psr-http-message-bridge nyholm/psr7

Then, PSR-7 messages can be used directly in controllers like in the following code
snippet::

    namespace AppBundle\\Controller;

    use Psr\\Http\\Message\\ResponseFactoryInterface;
    use Psr\\Http\\Message\\ServerRequestInterface;

    class DefaultController
    {
        public function index(ServerRequestInterface \$request, ResponseFactoryInterface \$responseFactory)
        {
            // Interact with the PSR-7 request

            \$response = \$responseFactory->createResponse();
            // Interact with the PSR-7 response

            return \$response;
        }
    }

Note that internally, Symfony always use :class:`Symfony\\\\Component\\\\HttpFoundation\\\\Request`
and :class:`Symfony\\\\Component\\\\HttpFoundation\\\\Response` instances.

.. _`SensioFrameworkExtraBundle`: https://github.com/sensiolabs/SensioFrameworkExtraBundle
.. _`PSR-7`: http://www.php-fig.org/psr/psr-7/
.. _`the HttpFoundation to PSR-7 bridge`: https://github.com/symfony/psr-http-message-bridge
.. _`autowiring aliases for PSR-17`: https://github.com/symfony/recipes/blob/master/nyholm/psr7/1.0/config/packages/nyholm_psr7.yaml
", "vendor/sensio/framework-extra-bundle/src/Resources/doc/index.rst", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/doc/index.rst");
    }
}
