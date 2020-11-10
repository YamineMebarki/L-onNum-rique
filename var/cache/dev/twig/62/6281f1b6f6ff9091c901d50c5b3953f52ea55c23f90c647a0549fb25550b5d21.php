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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_multiple_buses.xml */
class __TwigTemplate_754807096a6d9a8c2c118a50f6bf32cc9a47c2a038d5caa7afd7ba09ac1d0a6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_multiple_buses.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_multiple_buses.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:messenger default-bus=\"messenger.bus.commands\">
            <framework:bus name=\"messenger.bus.commands\" />
            <framework:bus name=\"messenger.bus.events\">
                <framework:middleware id=\"with_factory\">
                    <framework:argument>foo</framework:argument>
                    <framework:argument>true</framework:argument>
                    <framework:argument>
                        <framework:bar>baz</framework:bar>
                    </framework:argument>
                </framework:middleware>
            </framework:bus>
            <framework:bus name=\"messenger.bus.queries\" default-middleware=\"false\">
                <framework:middleware id=\"send_message\" />
                <framework:middleware id=\"handle_message\" />
            </framework:bus>
        </framework:messenger>
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_multiple_buses.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:messenger default-bus=\"messenger.bus.commands\">
            <framework:bus name=\"messenger.bus.commands\" />
            <framework:bus name=\"messenger.bus.events\">
                <framework:middleware id=\"with_factory\">
                    <framework:argument>foo</framework:argument>
                    <framework:argument>true</framework:argument>
                    <framework:argument>
                        <framework:bar>baz</framework:bar>
                    </framework:argument>
                </framework:middleware>
            </framework:bus>
            <framework:bus name=\"messenger.bus.queries\" default-middleware=\"false\">
                <framework:middleware id=\"send_message\" />
                <framework:middleware id=\"handle_message\" />
            </framework:bus>
        </framework:messenger>
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_multiple_buses.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/messenger_multiple_buses.xml");
    }
}
