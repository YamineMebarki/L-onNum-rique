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

/* vendor/sensio/framework-extra-bundle/src/Resources/config/security.xml */
class __TwigTemplate_1005d0998fe58f21bc2aefa7d0a2ce9ac3cd80b95ca3c71369fcc2237822230f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/security.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/security.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"sensio_framework_extra.security.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener\" public=\"false\">
            <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\" />
            <argument type=\"service\" id=\"sensio_framework_extra.security.expression_language.default\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"sensio_framework_extra.security.expression_language.default\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Security\\ExpressionLanguage\" public=\"false\" />

        <service id=\"framework_extra_bundle.event.is_granted\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\IsGrantedListener\" public=\"false\">
            <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\" />
            <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"framework_extra_bundle.argument_name_convertor\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter\" public=\"false\">
            <argument type=\"service\" id=\"argument_metadata_factory\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/config/security.xml";
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
        <service id=\"sensio_framework_extra.security.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener\" public=\"false\">
            <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\" />
            <argument type=\"service\" id=\"sensio_framework_extra.security.expression_language.default\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authentication.trust_resolver\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.role_hierarchy\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.token_storage\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"sensio_framework_extra.security.expression_language.default\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Security\\ExpressionLanguage\" public=\"false\" />

        <service id=\"framework_extra_bundle.event.is_granted\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\IsGrantedListener\" public=\"false\">
            <argument type=\"service\" id=\"framework_extra_bundle.argument_name_convertor\" />
            <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"null\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"framework_extra_bundle.argument_name_convertor\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ArgumentNameConverter\" public=\"false\">
            <argument type=\"service\" id=\"argument_metadata_factory\" />
        </service>
    </services>
</container>
", "vendor/sensio/framework-extra-bundle/src/Resources/config/security.xml", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/config/security.xml");
    }
}
