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

/* vendor/symfony/framework-bundle/Resources/config/debug.xml */
class __TwigTemplate_30cf65c84aabb9cc903f95fc7f3c87591fa41aadb92cdfc4d238f398892ad8e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/debug.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/debug.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" decorates=\"event_dispatcher\">
            <tag name=\"monolog.logger\" channel=\"event\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
            <argument type=\"service\" id=\"debug.event_dispatcher.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\" />
        </service>

        <service id=\"debug.controller_resolver\" decorates=\"controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\">
            <argument type=\"service\" id=\"debug.controller_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"debug.argument_resolver\" decorates=\"argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\">
            <argument type=\"service\" id=\"debug.argument_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-200\" />
            <argument />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/debug.xml";
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

        <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" decorates=\"event_dispatcher\">
            <tag name=\"monolog.logger\" channel=\"event\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
            <argument type=\"service\" id=\"debug.event_dispatcher.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\" />
        </service>

        <service id=\"debug.controller_resolver\" decorates=\"controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\">
            <argument type=\"service\" id=\"debug.controller_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"debug.argument_resolver\" decorates=\"argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\">
            <argument type=\"service\" id=\"debug.argument_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-200\" />
            <argument />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/debug.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/debug.xml");
    }
}
