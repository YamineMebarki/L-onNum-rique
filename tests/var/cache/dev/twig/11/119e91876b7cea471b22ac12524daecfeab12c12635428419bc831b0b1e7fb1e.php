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

/* vendor/doctrine/doctrine-cache-bundle/Resources/doc/custom_providers.rst */
class __TwigTemplate_1e2f8bc80bd7951a46822780f3a903b6d9471504c217deff01c5daf1ad193e9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/custom_providers.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/custom_providers.rst"));

        // line 1
        echo "Custom Providers
================

You can also register your own custom cache drivers:

.. configuration-block::

    .. code-block:: yaml

        # app/config/services.yml
        services:
            my_custom_provider_service:
                class: \"MyCustomType\"
                # ...

        # app/config/config.yml
        doctrine_cache:
            custom_providers:
                my_custom_type:
                    prototype:  \"my_custom_provider_service\"
                    definition_class: \"MyCustomTypeDefinition\" # optional configuration

            providers:
                my_custom_type_provider:
                    my_custom_type:
                        config_foo: \"foo\"
                        config_bar: \"bar\"

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
                <srv:service id=\"my_custom_provider_service\" class=\"MyCustomType\">
                    <!-- ... -->
                </srv:service>
             </srv:services>

            <doctrine-cache>
                <!-- register your custom cache provider -->
                <custom-provider type=\"my_custom_type\">
                    <prototype>my_custom_provider_service</prototype>
                    <definition-class>MyCustomTypeDefinition</definition-class> <!-- optional configuration -->
                </custom-provider>

                 <provider name=\"my_custom_type_provider\">
                    <my_custom_type>
                         <config-foo>foo</config-foo>
                         <config-bar>bar</config-bar>
                     </my_custom_type>
                 </provider>
            </doctrine-cache>
        </srv:container>

.. note::

    Definition class is a optional configuration that will parse option arguments
    given to your custom cache driver. See `CacheDefinition code`_.

.. _`CacheDefinition code`: https://github.com/doctrine/DoctrineCacheBundle/blob/master/DependencyInjection/Definition/CacheDefinition.php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Resources/doc/custom_providers.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Custom Providers
================

You can also register your own custom cache drivers:

.. configuration-block::

    .. code-block:: yaml

        # app/config/services.yml
        services:
            my_custom_provider_service:
                class: \"MyCustomType\"
                # ...

        # app/config/config.yml
        doctrine_cache:
            custom_providers:
                my_custom_type:
                    prototype:  \"my_custom_provider_service\"
                    definition_class: \"MyCustomTypeDefinition\" # optional configuration

            providers:
                my_custom_type_provider:
                    my_custom_type:
                        config_foo: \"foo\"
                        config_bar: \"bar\"

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
                <srv:service id=\"my_custom_provider_service\" class=\"MyCustomType\">
                    <!-- ... -->
                </srv:service>
             </srv:services>

            <doctrine-cache>
                <!-- register your custom cache provider -->
                <custom-provider type=\"my_custom_type\">
                    <prototype>my_custom_provider_service</prototype>
                    <definition-class>MyCustomTypeDefinition</definition-class> <!-- optional configuration -->
                </custom-provider>

                 <provider name=\"my_custom_type_provider\">
                    <my_custom_type>
                         <config-foo>foo</config-foo>
                         <config-bar>bar</config-bar>
                     </my_custom_type>
                 </provider>
            </doctrine-cache>
        </srv:container>

.. note::

    Definition class is a optional configuration that will parse option arguments
    given to your custom cache driver. See `CacheDefinition code`_.

.. _`CacheDefinition code`: https://github.com/doctrine/DoctrineCacheBundle/blob/master/DependencyInjection/Definition/CacheDefinition.php
", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/custom_providers.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Resources/doc/custom_providers.rst");
    }
}
