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

/* vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml */
class __TwigTemplate_a678398c6f4bf44a9f8062227986725e708c2c567becd43f667967f76e44d7ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<routes xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/routing https://symfony.com/schema/routing/routing-1.0.xsd\">

    <route id=\"_profiler_home\" path=\"/\">
        <default key=\"_controller\">web_profiler.controller.profiler::homeAction</default>
    </route>

    <route id=\"_profiler_search\" path=\"/search\">
        <default key=\"_controller\">web_profiler.controller.profiler::searchAction</default>
    </route>

    <route id=\"_profiler_search_bar\" path=\"/search_bar\">
        <default key=\"_controller\">web_profiler.controller.profiler::searchBarAction</default>
    </route>

    <route id=\"_profiler_phpinfo\" path=\"/phpinfo\">
        <default key=\"_controller\">web_profiler.controller.profiler::phpinfoAction</default>
    </route>

    <route id=\"_profiler_search_results\" path=\"/{token}/search/results\">
        <default key=\"_controller\">web_profiler.controller.profiler::searchResultsAction</default>
    </route>

    <route id=\"_profiler_open_file\" path=\"/open\">
        <default key=\"_controller\">web_profiler.controller.profiler::openAction</default>
    </route>

    <route id=\"_profiler\" path=\"/{token}\">
        <default key=\"_controller\">web_profiler.controller.profiler::panelAction</default>
    </route>

    <route id=\"_profiler_router\" path=\"/{token}/router\">
        <default key=\"_controller\">web_profiler.controller.router::panelAction</default>
    </route>

    <route id=\"_profiler_exception\" path=\"/{token}/exception\">
        <default key=\"_controller\">web_profiler.controller.exception::showAction</default>
    </route>

    <route id=\"_profiler_exception_css\" path=\"/{token}/exception.css\">
        <default key=\"_controller\">web_profiler.controller.exception::cssAction</default>
    </route>

</routes>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<routes xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/routing https://symfony.com/schema/routing/routing-1.0.xsd\">

    <route id=\"_profiler_home\" path=\"/\">
        <default key=\"_controller\">web_profiler.controller.profiler::homeAction</default>
    </route>

    <route id=\"_profiler_search\" path=\"/search\">
        <default key=\"_controller\">web_profiler.controller.profiler::searchAction</default>
    </route>

    <route id=\"_profiler_search_bar\" path=\"/search_bar\">
        <default key=\"_controller\">web_profiler.controller.profiler::searchBarAction</default>
    </route>

    <route id=\"_profiler_phpinfo\" path=\"/phpinfo\">
        <default key=\"_controller\">web_profiler.controller.profiler::phpinfoAction</default>
    </route>

    <route id=\"_profiler_search_results\" path=\"/{token}/search/results\">
        <default key=\"_controller\">web_profiler.controller.profiler::searchResultsAction</default>
    </route>

    <route id=\"_profiler_open_file\" path=\"/open\">
        <default key=\"_controller\">web_profiler.controller.profiler::openAction</default>
    </route>

    <route id=\"_profiler\" path=\"/{token}\">
        <default key=\"_controller\">web_profiler.controller.profiler::panelAction</default>
    </route>

    <route id=\"_profiler_router\" path=\"/{token}/router\">
        <default key=\"_controller\">web_profiler.controller.router::panelAction</default>
    </route>

    <route id=\"_profiler_exception\" path=\"/{token}/exception\">
        <default key=\"_controller\">web_profiler.controller.exception::showAction</default>
    </route>

    <route id=\"_profiler_exception_css\" path=\"/{token}/exception.css\">
        <default key=\"_controller\">web_profiler.controller.exception::cssAction</default>
    </route>

</routes>
", "vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Resources/config/routing/profiler.xml");
    }
}
