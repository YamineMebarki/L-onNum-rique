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

/* vendor/symfony/framework-bundle/Resources/config/property_info.xml */
class __TwigTemplate_a24410c0b67871597f22cfc449fa9cd86011150529ec79db33b2146a3f2ae424 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/property_info.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/property_info.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"property_info\" class=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor\">
            <argument type=\"collection\" />
            <argument type=\"collection\" />
            <argument type=\"collection\" />
            <argument type=\"collection\" />
            <argument type=\"collection\" />
        </service>
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface\" alias=\"property_info\" />

        <service id=\"property_info.cache\" decorates=\"property_info\" class=\"Symfony\\Component\\PropertyInfo\\PropertyInfoCacheExtractor\">
            <argument type=\"service\" id=\"property_info.cache.inner\" />
            <argument type=\"service\" id=\"cache.property_info\" />
        </service>

        <!-- Extractor -->
        <service id=\"property_info.reflection_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\ReflectionExtractor\">
            <tag name=\"property_info.list_extractor\" priority=\"-1000\" />
            <tag name=\"property_info.type_extractor\" priority=\"-1002\" />
            <tag name=\"property_info.access_extractor\" priority=\"-1000\" />
            <tag name=\"property_info.initializable_extractor\" priority=\"-1000\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/property_info.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"property_info\" class=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor\">
            <argument type=\"collection\" />
            <argument type=\"collection\" />
            <argument type=\"collection\" />
            <argument type=\"collection\" />
            <argument type=\"collection\" />
        </service>
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface\" alias=\"property_info\" />
        <service id=\"Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface\" alias=\"property_info\" />

        <service id=\"property_info.cache\" decorates=\"property_info\" class=\"Symfony\\Component\\PropertyInfo\\PropertyInfoCacheExtractor\">
            <argument type=\"service\" id=\"property_info.cache.inner\" />
            <argument type=\"service\" id=\"cache.property_info\" />
        </service>

        <!-- Extractor -->
        <service id=\"property_info.reflection_extractor\" class=\"Symfony\\Component\\PropertyInfo\\Extractor\\ReflectionExtractor\">
            <tag name=\"property_info.list_extractor\" priority=\"-1000\" />
            <tag name=\"property_info.type_extractor\" priority=\"-1002\" />
            <tag name=\"property_info.access_extractor\" priority=\"-1000\" />
            <tag name=\"property_info.initializable_extractor\" priority=\"-1000\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/property_info.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/property_info.xml");
    }
}
