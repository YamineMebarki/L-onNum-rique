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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/multiple_handlers.xml */
class __TwigTemplate_1f1deab69a7147e12e51a65a007e5a78ba8e7921a3da74fa47e1f64f3d209760 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/multiple_handlers.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/multiple_handlers.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<srv:container xmlns=\"http://symfony.com/schema/dic/monolog\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/monolog http://symfony.com/schema/dic/monolog/monolog-1.0.xsd\">

    <config>
        <handler name=\"custom\" type=\"stream\" path=\"/tmp/symfony.log\" bubble=\"false\" level=\"ERROR\" file-permission=\"0666\" />
        <handler name=\"main\" type=\"fingers_crossed\" action-level=\"ERROR\" passthru-level=\"NOTICE\" handler=\"nested\" />
        <handler name=\"nested\" type=\"stream\" />
        <handler name=\"filtered\" type=\"filter\" handler=\"nested2\">
            <accepted-level>WARNING</accepted-level>
            <accepted-level>ERROR</accepted-level>
        </handler>
        <handler name=\"nested2\" type=\"stream\" />
    </config>
</srv:container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/multiple_handlers.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<srv:container xmlns=\"http://symfony.com/schema/dic/monolog\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/monolog http://symfony.com/schema/dic/monolog/monolog-1.0.xsd\">

    <config>
        <handler name=\"custom\" type=\"stream\" path=\"/tmp/symfony.log\" bubble=\"false\" level=\"ERROR\" file-permission=\"0666\" />
        <handler name=\"main\" type=\"fingers_crossed\" action-level=\"ERROR\" passthru-level=\"NOTICE\" handler=\"nested\" />
        <handler name=\"nested\" type=\"stream\" />
        <handler name=\"filtered\" type=\"filter\" handler=\"nested2\">
            <accepted-level>WARNING</accepted-level>
            <accepted-level>ERROR</accepted-level>
        </handler>
        <handler name=\"nested2\" type=\"stream\" />
    </config>
</srv:container>
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/multiple_handlers.xml", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/multiple_handlers.xml");
    }
}
