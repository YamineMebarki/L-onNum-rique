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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/new_and_priority.xml */
class __TwigTemplate_eb33c6b6ad4c9dcfdb29c282fcb67a616af674c369977f262308e5b7f7f145c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/new_and_priority.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/new_and_priority.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<srv:container xmlns=\"http://symfony.com/schema/dic/monolog\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/monolog http://symfony.com/schema/dic/monolog/monolog-1.0.xsd\">

    <srv:imports>
        <srv:import resource=\"new_and_priority_import.xml\" />
    </srv:imports>

    <config>
        <handler name=\"custom\" type=\"stream\" path=\"/tmp/symfony.log\" bubble=\"true\" level=\"WARNING\" />
        <handler name=\"first\" type=\"rotating_file\" path=\"/tmp/monolog.log\" bubble=\"true\" level=\"ERROR\" priority=\"3\" />
        <handler name=\"last\" type=\"stream\" path=\"/tmp/last.log\" bubble=\"true\" level=\"ERROR\" priority=\"-3\" />
    </config>
</srv:container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/new_and_priority.xml";
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

    <srv:imports>
        <srv:import resource=\"new_and_priority_import.xml\" />
    </srv:imports>

    <config>
        <handler name=\"custom\" type=\"stream\" path=\"/tmp/symfony.log\" bubble=\"true\" level=\"WARNING\" />
        <handler name=\"first\" type=\"rotating_file\" path=\"/tmp/monolog.log\" bubble=\"true\" level=\"ERROR\" priority=\"3\" />
        <handler name=\"last\" type=\"stream\" path=\"/tmp/last.log\" bubble=\"true\" level=\"ERROR\" priority=\"-3\" />
    </config>
</srv:container>
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/new_and_priority.xml", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/new_and_priority.xml");
    }
}
