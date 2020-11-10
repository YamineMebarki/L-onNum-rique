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

/* vendor/symfony/framework-bundle/Resources/config/debug_prod.xml */
class __TwigTemplate_793bb12fb988d5d240ce7bbea7a395a7e5d0426c7583f3cd4715d843b167852c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/debug_prod.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/debug_prod.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"debug.error_handler.throw_at\">-1</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.debug_handlers_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"php\" />
            <argument>null</argument><!-- Exception handler -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>null</argument><!-- Log levels map for enabled error levels -->
            <argument>%debug.error_handler.throw_at%</argument>
            <argument>%kernel.debug%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\"></argument>
            <argument>%kernel.debug%</argument>
            <argument>%kernel.charset%</argument>
        </service>

        <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\">
            <argument>%debug.file_link_format%</argument>
        </service>
        <service id=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" alias=\"debug.file_link_formatter\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/debug_prod.xml";
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
        <parameter key=\"debug.error_handler.throw_at\">-1</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.debug_handlers_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"php\" />
            <argument>null</argument><!-- Exception handler -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>null</argument><!-- Log levels map for enabled error levels -->
            <argument>%debug.error_handler.throw_at%</argument>
            <argument>%kernel.debug%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\"></argument>
            <argument>%kernel.debug%</argument>
            <argument>%kernel.charset%</argument>
        </service>

        <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\">
            <argument>%debug.file_link_format%</argument>
        </service>
        <service id=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" alias=\"debug.file_link_formatter\" />
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/debug_prod.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/debug_prod.xml");
    }
}
