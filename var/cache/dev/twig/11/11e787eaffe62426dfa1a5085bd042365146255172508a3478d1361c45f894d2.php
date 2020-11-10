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

/* vendor/symfony/framework-bundle/Resources/config/templating.xml */
class __TwigTemplate_360abcb115b7eeaa8833634b25e62f7e710f0ce111a1ea1907eec69db82be72f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/templating.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/templating.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"templating.engine.delegating\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine\">
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"collection\" /> <!-- engines -->

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.name_parser\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser\">
            <argument type=\"service\" id=\"kernel\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.filename_parser\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser\" />

        <service id=\"templating.locator\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator\">
            <argument type=\"service\" id=\"file_locator\" />
            <argument>%kernel.cache_dir%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.finder\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder\">
            <argument type=\"service\" id=\"kernel\" />
            <argument type=\"service\" id=\"templating.filename_parser\" />
            <argument>%kernel.root_dir%/Resources</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.cache_warmer.template_paths\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer\">
            <tag name=\"kernel.cache_warmer\" priority=\"20\" />
            <argument type=\"service\" id=\"templating.finder\" />
            <argument type=\"service\" id=\"templating.locator\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader.filesystem\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader\">
            <argument type=\"service\" id=\"templating.locator\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader.cache\" class=\"Symfony\\Component\\Templating\\Loader\\CacheLoader\">
            <argument type=\"service\" id=\"templating.loader.wrapped\" />
            <argument>%templating.loader.cache.path%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader.chain\" class=\"Symfony\\Component\\Templating\\Loader\\ChainLoader\">
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader\" alias=\"templating.loader.filesystem\" public=\"true\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/templating.xml";
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

        <service id=\"templating.engine.delegating\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine\">
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"collection\" /> <!-- engines -->

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.name_parser\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser\">
            <argument type=\"service\" id=\"kernel\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.filename_parser\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser\" />

        <service id=\"templating.locator\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator\">
            <argument type=\"service\" id=\"file_locator\" />
            <argument>%kernel.cache_dir%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.finder\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder\">
            <argument type=\"service\" id=\"kernel\" />
            <argument type=\"service\" id=\"templating.filename_parser\" />
            <argument>%kernel.root_dir%/Resources</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.cache_warmer.template_paths\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer\">
            <tag name=\"kernel.cache_warmer\" priority=\"20\" />
            <argument type=\"service\" id=\"templating.finder\" />
            <argument type=\"service\" id=\"templating.locator\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader.filesystem\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader\">
            <argument type=\"service\" id=\"templating.locator\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader.cache\" class=\"Symfony\\Component\\Templating\\Loader\\CacheLoader\">
            <argument type=\"service\" id=\"templating.loader.wrapped\" />
            <argument>%templating.loader.cache.path%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader.chain\" class=\"Symfony\\Component\\Templating\\Loader\\ChainLoader\">
            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.loader\" alias=\"templating.loader.filesystem\" public=\"true\" />
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/templating.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/templating.xml");
    }
}
