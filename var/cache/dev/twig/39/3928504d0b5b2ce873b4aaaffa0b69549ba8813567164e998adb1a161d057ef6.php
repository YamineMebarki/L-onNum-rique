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

/* vendor/sensio/framework-extra-bundle/src/Resources/config/psr7.xml */
class __TwigTemplate_3934c5e09347a47e353d9f28d1dff03aeb0c1c7fdeb1a3fe98fa570d62054fd2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/psr7.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/psr7.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"sensio_framework_extra.psr7.http_message_factory\" class=\"Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory\" public=\"false\">
            <argument type=\"service\" id=\"Psr\\Http\\Message\\ServerRequestFactoryInterface\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\StreamFactoryInterface\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\UploadedFileFactoryInterface\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\ResponseFactoryInterface\" />
        </service>
        <service id=\"sensio_framework_extra.psr7.http_foundation_factory\" class=\"Symfony\\Bridge\\PsrHttpMessage\\Factory\\HttpFoundationFactory\" public=\"false\" />

        <service id=\"sensio_framework_extra.psr7.argument_value_resolver.server_request\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentValueResolver\\Psr7ServerRequestResolver\" public=\"false\">
            <argument type=\"service\" id=\"sensio_framework_extra.psr7.http_message_factory\" />
            <tag name=\"controller.argument_value_resolver\" />
        </service>

        <service id=\"sensio_framework_extra.psr7.listener.response\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\PsrResponseListener\" public=\"false\">
            <argument type=\"service\" id=\"sensio_framework_extra.psr7.http_foundation_factory\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <!-- provide default aliases for PSR-17 based on nyholm/psr7 -->
        <service id=\"nyholm.psr7.psr17_factory\" class=\"Nyholm\\Psr7\\Factory\\Psr17Factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\ServerRequestFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\StreamFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\UploadedFileFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\ResponseFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/config/psr7.xml";
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
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"sensio_framework_extra.psr7.http_message_factory\" class=\"Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory\" public=\"false\">
            <argument type=\"service\" id=\"Psr\\Http\\Message\\ServerRequestFactoryInterface\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\StreamFactoryInterface\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\UploadedFileFactoryInterface\" />
            <argument type=\"service\" id=\"Psr\\Http\\Message\\ResponseFactoryInterface\" />
        </service>
        <service id=\"sensio_framework_extra.psr7.http_foundation_factory\" class=\"Symfony\\Bridge\\PsrHttpMessage\\Factory\\HttpFoundationFactory\" public=\"false\" />

        <service id=\"sensio_framework_extra.psr7.argument_value_resolver.server_request\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentValueResolver\\Psr7ServerRequestResolver\" public=\"false\">
            <argument type=\"service\" id=\"sensio_framework_extra.psr7.http_message_factory\" />
            <tag name=\"controller.argument_value_resolver\" />
        </service>

        <service id=\"sensio_framework_extra.psr7.listener.response\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\PsrResponseListener\" public=\"false\">
            <argument type=\"service\" id=\"sensio_framework_extra.psr7.http_foundation_factory\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <!-- provide default aliases for PSR-17 based on nyholm/psr7 -->
        <service id=\"nyholm.psr7.psr17_factory\" class=\"Nyholm\\Psr7\\Factory\\Psr17Factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\ServerRequestFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\StreamFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\UploadedFileFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
        <service id=\"Psr\\Http\\Message\\ResponseFactoryInterface\" alias=\"nyholm.psr7.psr17_factory\" public=\"false\" />
    </services>
</container>
", "vendor/sensio/framework-extra-bundle/src/Resources/config/psr7.xml", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/config/psr7.xml");
    }
}
