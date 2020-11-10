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

/* vendor/sensio/framework-extra-bundle/src/Resources/config/converters.xml */
class __TwigTemplate_a1590806d912ba1725606cd056a1ec7a77c5c6898e23c6a9da6d5b3117ca816e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/converters.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/converters.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"sensio_framework_extra.converter.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener\" public=\"false\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"sensio_framework_extra.converter.manager\" />
            <argument>true</argument>
        </service>

        <service id=\"sensio_framework_extra.converter.manager\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager\" />

        <service id=\"sensio_framework_extra.converter.doctrine.orm\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter\" public=\"false\">
            <tag name=\"request.param_converter\" converter=\"doctrine.orm\" />
            <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"sensio_framework_extra.converter.doctrine.orm.expression_language\" on-invalid=\"null\" />
        </service>

        <service id=\"framework_extra_bundle.date_time_param_converter\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter\" public=\"false\">
            <tag name=\"request.param_converter\" converter=\"datetime\" />
        </service>

        <service id=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" class=\"Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage\" public=\"false\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/config/converters.xml";
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
        <service id=\"sensio_framework_extra.converter.listener\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener\" public=\"false\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"sensio_framework_extra.converter.manager\" />
            <argument>true</argument>
        </service>

        <service id=\"sensio_framework_extra.converter.manager\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager\" />

        <service id=\"sensio_framework_extra.converter.doctrine.orm\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter\" public=\"false\">
            <tag name=\"request.param_converter\" converter=\"doctrine.orm\" />
            <argument type=\"service\" id=\"doctrine\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"sensio_framework_extra.converter.doctrine.orm.expression_language\" on-invalid=\"null\" />
        </service>

        <service id=\"framework_extra_bundle.date_time_param_converter\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter\" public=\"false\">
            <tag name=\"request.param_converter\" converter=\"datetime\" />
        </service>

        <service id=\"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" class=\"Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage\" public=\"false\" />
    </services>
</container>
", "vendor/sensio/framework-extra-bundle/src/Resources/config/converters.xml", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/config/converters.xml");
    }
}
