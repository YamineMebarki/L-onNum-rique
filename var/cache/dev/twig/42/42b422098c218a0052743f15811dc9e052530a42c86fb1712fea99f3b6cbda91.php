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

/* vendor/doctrine/doctrine-cache-bundle/Resources/doc/service_parameter.rst */
class __TwigTemplate_2c8f762dc80deaeda087073635e13417c65e90009060d150db3ebba333e5f74e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/service_parameter.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/service_parameter.rst"));

        // line 1
        echo "Service Parameter
=================

Cache providers can be also configured using a specific connection, bucket or
collection. Example:

.. configuration-block::

    .. code-block:: yaml

        # app/config/services.yml
        services:
            # ...

            my_riak_connection_service:
                class: \"Riak\\Connection\"
                # ...

            my_riak_bucket_service:
                class: \"Riak\\Bucket\"
                # ...

            my_memcached_connection_service:
                class: \"Memcached\"
                # ...

        # app/config/config.yml
        doctrine_cache:
            providers:
                service_bucket_riak_provider:
                    riak:
                        bucket_id : \"my_riak_bucket_service\"

                service_connection_riak_provider:
                    riak:
                        connection_id: \"my_riak_connection_service\"
                        bucket_name: \"my_bucket_name\"

                service_connection_memcached_provider:
                    memcached:
                        connection_id: \"my_memcached_connection_service\"

    .. code-block:: xml

        <!-- app/config/config.xml -->
        <?xml version=\"1.0\" encoding=\"UTF-8\" ?>
        <dic:container xmlns=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
            xmlns:srv=\"http://symfony.com/schema/dic/services\"
            xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                http://doctrine-project.org/schemas/symfony-dic/cache http://doctrine-project.org/schemas/symfony-dic/cache/doctrine_cache-1.0.xsd\">

        <srv:container>
            <srv:services>
                <srv:service id=\"my_riak_connection_service\" class=\"Riak\\Connection\">
                    <!-- ... -->
                </srv:service>

                <srv:service id=\"my_riak_bucket_service\" class=\"Riak\\Bucket\">
                    <!-- ... -->
                </srv:service>

                <srv:service id=\"my_memcached_connection_service\" class=\"Memcached\">
                    <!-- ... -->
                </srv:service>
             </srv:services>

            <doctrine-cache>
                 <provider  name=\"service_bucket_riak_provider\">
                     <riak bucket-id=\"my_riak_bucket_service\"/>
                 </provider>

                 <provider name=\"service_connection_riak_provider\">
                     <riak connection-id=\"my_riak_connection_service\">
                         <bucket-name>my_bucket_name</bucket-name>
                     </riak>
                 </provider>

                 <provider name=\"service_connection_memcached_provider\">
                     <memcached connection-id=\"my_memcached_connection_service\"/>
                 </provider>
            </doctrine-cache>
        </srv:container>

See :doc:`reference` for all the specific configurations.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Resources/doc/service_parameter.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Service Parameter
=================

Cache providers can be also configured using a specific connection, bucket or
collection. Example:

.. configuration-block::

    .. code-block:: yaml

        # app/config/services.yml
        services:
            # ...

            my_riak_connection_service:
                class: \"Riak\\Connection\"
                # ...

            my_riak_bucket_service:
                class: \"Riak\\Bucket\"
                # ...

            my_memcached_connection_service:
                class: \"Memcached\"
                # ...

        # app/config/config.yml
        doctrine_cache:
            providers:
                service_bucket_riak_provider:
                    riak:
                        bucket_id : \"my_riak_bucket_service\"

                service_connection_riak_provider:
                    riak:
                        connection_id: \"my_riak_connection_service\"
                        bucket_name: \"my_bucket_name\"

                service_connection_memcached_provider:
                    memcached:
                        connection_id: \"my_memcached_connection_service\"

    .. code-block:: xml

        <!-- app/config/config.xml -->
        <?xml version=\"1.0\" encoding=\"UTF-8\" ?>
        <dic:container xmlns=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
            xmlns:srv=\"http://symfony.com/schema/dic/services\"
            xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                http://doctrine-project.org/schemas/symfony-dic/cache http://doctrine-project.org/schemas/symfony-dic/cache/doctrine_cache-1.0.xsd\">

        <srv:container>
            <srv:services>
                <srv:service id=\"my_riak_connection_service\" class=\"Riak\\Connection\">
                    <!-- ... -->
                </srv:service>

                <srv:service id=\"my_riak_bucket_service\" class=\"Riak\\Bucket\">
                    <!-- ... -->
                </srv:service>

                <srv:service id=\"my_memcached_connection_service\" class=\"Memcached\">
                    <!-- ... -->
                </srv:service>
             </srv:services>

            <doctrine-cache>
                 <provider  name=\"service_bucket_riak_provider\">
                     <riak bucket-id=\"my_riak_bucket_service\"/>
                 </provider>

                 <provider name=\"service_connection_riak_provider\">
                     <riak connection-id=\"my_riak_connection_service\">
                         <bucket-name>my_bucket_name</bucket-name>
                     </riak>
                 </provider>

                 <provider name=\"service_connection_memcached_provider\">
                     <memcached connection-id=\"my_memcached_connection_service\"/>
                 </provider>
            </doctrine-cache>
        </srv:container>

See :doc:`reference` for all the specific configurations.
", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/service_parameter.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Resources/doc/service_parameter.rst");
    }
}
