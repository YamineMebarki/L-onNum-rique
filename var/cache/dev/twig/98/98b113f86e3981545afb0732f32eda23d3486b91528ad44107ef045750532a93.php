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

/* vendor/symfony/framework-bundle/Resources/config/assets.xml */
class __TwigTemplate_428256db5782e4400c26eb1df71fa9850e628f9b3701ee1d3a1eaf6367800dec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/assets.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/assets.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"asset.request_context.base_path\"></parameter>
        <parameter key=\"asset.request_context.secure\">false</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"assets.packages\" class=\"Symfony\\Component\\Asset\\Packages\">
            <argument type=\"service\" id=\"assets.empty_package\" /> <!-- default package -->
            <argument type=\"collection\" /> <!-- named packages -->
        </service>
        <service id=\"Symfony\\Component\\Asset\\Packages\" alias=\"assets.packages\" />

        <service id=\"assets.empty_package\" class=\"Symfony\\Component\\Asset\\Package\">
            <argument type=\"service\" id=\"assets.empty_version_strategy\" />
        </service>

        <service id=\"assets.context\" class=\"Symfony\\Component\\Asset\\Context\\RequestStackContext\">
            <argument type=\"service\" id=\"request_stack\" />
            <argument>%asset.request_context.base_path%</argument>
            <argument>%asset.request_context.secure%</argument>
        </service>

        <service id=\"assets.path_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" abstract=\"true\">
            <argument /> <!-- base path -->
            <argument /> <!-- version strategy -->
            <argument type=\"service\" id=\"assets.context\" />
        </service>

        <service id=\"assets.url_package\" class=\"Symfony\\Component\\Asset\\UrlPackage\" abstract=\"true\">
            <argument /> <!-- base URLs -->
            <argument /> <!-- version strategy -->
            <argument type=\"service\" id=\"assets.context\" />
        </service>

        <service id=\"assets.static_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy\" abstract=\"true\">
            <argument /> <!-- version -->
            <argument /> <!-- format -->
        </service>

        <service id=\"assets.empty_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy\" />

        <service id=\"assets.json_manifest_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy\" abstract=\"true\">
            <argument /> <!-- manifest path -->
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/assets.xml";
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

    <parameters>
        <parameter key=\"asset.request_context.base_path\"></parameter>
        <parameter key=\"asset.request_context.secure\">false</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"assets.packages\" class=\"Symfony\\Component\\Asset\\Packages\">
            <argument type=\"service\" id=\"assets.empty_package\" /> <!-- default package -->
            <argument type=\"collection\" /> <!-- named packages -->
        </service>
        <service id=\"Symfony\\Component\\Asset\\Packages\" alias=\"assets.packages\" />

        <service id=\"assets.empty_package\" class=\"Symfony\\Component\\Asset\\Package\">
            <argument type=\"service\" id=\"assets.empty_version_strategy\" />
        </service>

        <service id=\"assets.context\" class=\"Symfony\\Component\\Asset\\Context\\RequestStackContext\">
            <argument type=\"service\" id=\"request_stack\" />
            <argument>%asset.request_context.base_path%</argument>
            <argument>%asset.request_context.secure%</argument>
        </service>

        <service id=\"assets.path_package\" class=\"Symfony\\Component\\Asset\\PathPackage\" abstract=\"true\">
            <argument /> <!-- base path -->
            <argument /> <!-- version strategy -->
            <argument type=\"service\" id=\"assets.context\" />
        </service>

        <service id=\"assets.url_package\" class=\"Symfony\\Component\\Asset\\UrlPackage\" abstract=\"true\">
            <argument /> <!-- base URLs -->
            <argument /> <!-- version strategy -->
            <argument type=\"service\" id=\"assets.context\" />
        </service>

        <service id=\"assets.static_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\StaticVersionStrategy\" abstract=\"true\">
            <argument /> <!-- version -->
            <argument /> <!-- format -->
        </service>

        <service id=\"assets.empty_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\EmptyVersionStrategy\" />

        <service id=\"assets.json_manifest_version_strategy\" class=\"Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy\" abstract=\"true\">
            <argument /> <!-- manifest path -->
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/assets.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/assets.xml");
    }
}
