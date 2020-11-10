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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflows.xml */
class __TwigTemplate_356ffa18b79a74bba5a8f9f0f38f7143ff86501057f73c8f84f2cf9141c5ce5f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflows.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflows.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:workflow name=\"article\" type=\"workflow\">
            <framework:initial-marking>draft</framework:initial-marking>
            <framework:marking-store type=\"method\" property=\"state\" />
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <framework:place name=\"draft\" />
            <framework:place name=\"wait_for_journalist\" />
            <framework:place name=\"approved_by_journalist\" />
            <framework:place name=\"wait_for_spellchecker\" />
            <framework:place name=\"approved_by_spellchecker\" />
            <framework:place name=\"published\" />
            <framework:transition name=\"request_review\">
                <framework:from>draft</framework:from>
                <framework:to>wait_for_journalist</framework:to>
                <framework:to>wait_for_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"journalist_approval\">
                <framework:from>wait_for_journalist</framework:from>
                <framework:to>approved_by_journalist</framework:to>
            </framework:transition>
            <framework:transition name=\"spellchecker_approval\">
                <framework:from>wait_for_spellchecker</framework:from>
                <framework:to>approved_by_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"publish\">
                <framework:from>approved_by_journalist</framework:from>
                <framework:from>approved_by_spellchecker</framework:from>
                <framework:to>published</framework:to>
            </framework:transition>
        </framework:workflow>

        <framework:workflow name=\"pull_request\">
            <framework:initial-marking>start</framework:initial-marking>
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <framework:place name=\"start\">
                <framework:metadata>
                    <framework:title>place start title</framework:title>
                </framework:metadata>
            </framework:place>
            <framework:place name=\"coding\"></framework:place>
            <framework:place name=\"travis\"></framework:place>
            <framework:place name=\"review\"></framework:place>
            <framework:place name=\"merged\"></framework:place>
            <framework:place name=\"closed\"></framework:place>
            <framework:transition name=\"submit\">
                <framework:from>start</framework:from>
                <framework:to>travis</framework:to>
                <framework:metadata>
                    <framework:title>transition submit title</framework:title>
                </framework:metadata>
            </framework:transition>
            <framework:transition name=\"update\">
                <framework:from>coding</framework:from>
                <framework:from>travis</framework:from>
                <framework:from>review</framework:from>
                <framework:to>travis</framework:to>
            </framework:transition>
            <framework:transition name=\"wait_for_review\">
                <framework:from>travis</framework:from>
                <framework:to>review</framework:to>
            </framework:transition>
            <framework:transition name=\"request_change\">
                <framework:from>review</framework:from>
                <framework:to>coding</framework:to>
            </framework:transition>
            <framework:transition name=\"accept\">
                <framework:from>review</framework:from>
                <framework:to>merged</framework:to>
            </framework:transition>
            <framework:transition name=\"reject\">
                <framework:from>review</framework:from>
                <framework:to>closed</framework:to>
            </framework:transition>
            <framework:transition name=\"reopen\">
                <framework:from>closed</framework:from>
                <framework:to>review</framework:to>
            </framework:transition>
            <framework:metadata>
                <framework:title>workflow title</framework:title>
            </framework:metadata>
        </framework:workflow>

        <framework:workflow name=\"service_marking_store_workflow\" type=\"workflow\">
            <framework:marking-store service=\"workflow_service\"/>
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <!-- Simple format -->
            <framework:place>first</framework:place>
            <framework:place>last</framework:place>
            <framework:transition name=\"go\">
                <framework:from>first</framework:from>
                <framework:to>last</framework:to>
            </framework:transition>
        </framework:workflow>
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflows.xml";
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
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:workflow name=\"article\" type=\"workflow\">
            <framework:initial-marking>draft</framework:initial-marking>
            <framework:marking-store type=\"method\" property=\"state\" />
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <framework:place name=\"draft\" />
            <framework:place name=\"wait_for_journalist\" />
            <framework:place name=\"approved_by_journalist\" />
            <framework:place name=\"wait_for_spellchecker\" />
            <framework:place name=\"approved_by_spellchecker\" />
            <framework:place name=\"published\" />
            <framework:transition name=\"request_review\">
                <framework:from>draft</framework:from>
                <framework:to>wait_for_journalist</framework:to>
                <framework:to>wait_for_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"journalist_approval\">
                <framework:from>wait_for_journalist</framework:from>
                <framework:to>approved_by_journalist</framework:to>
            </framework:transition>
            <framework:transition name=\"spellchecker_approval\">
                <framework:from>wait_for_spellchecker</framework:from>
                <framework:to>approved_by_spellchecker</framework:to>
            </framework:transition>
            <framework:transition name=\"publish\">
                <framework:from>approved_by_journalist</framework:from>
                <framework:from>approved_by_spellchecker</framework:from>
                <framework:to>published</framework:to>
            </framework:transition>
        </framework:workflow>

        <framework:workflow name=\"pull_request\">
            <framework:initial-marking>start</framework:initial-marking>
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <framework:place name=\"start\">
                <framework:metadata>
                    <framework:title>place start title</framework:title>
                </framework:metadata>
            </framework:place>
            <framework:place name=\"coding\"></framework:place>
            <framework:place name=\"travis\"></framework:place>
            <framework:place name=\"review\"></framework:place>
            <framework:place name=\"merged\"></framework:place>
            <framework:place name=\"closed\"></framework:place>
            <framework:transition name=\"submit\">
                <framework:from>start</framework:from>
                <framework:to>travis</framework:to>
                <framework:metadata>
                    <framework:title>transition submit title</framework:title>
                </framework:metadata>
            </framework:transition>
            <framework:transition name=\"update\">
                <framework:from>coding</framework:from>
                <framework:from>travis</framework:from>
                <framework:from>review</framework:from>
                <framework:to>travis</framework:to>
            </framework:transition>
            <framework:transition name=\"wait_for_review\">
                <framework:from>travis</framework:from>
                <framework:to>review</framework:to>
            </framework:transition>
            <framework:transition name=\"request_change\">
                <framework:from>review</framework:from>
                <framework:to>coding</framework:to>
            </framework:transition>
            <framework:transition name=\"accept\">
                <framework:from>review</framework:from>
                <framework:to>merged</framework:to>
            </framework:transition>
            <framework:transition name=\"reject\">
                <framework:from>review</framework:from>
                <framework:to>closed</framework:to>
            </framework:transition>
            <framework:transition name=\"reopen\">
                <framework:from>closed</framework:from>
                <framework:to>review</framework:to>
            </framework:transition>
            <framework:metadata>
                <framework:title>workflow title</framework:title>
            </framework:metadata>
        </framework:workflow>

        <framework:workflow name=\"service_marking_store_workflow\" type=\"workflow\">
            <framework:marking-store service=\"workflow_service\"/>
            <framework:support>Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest</framework:support>
            <!-- Simple format -->
            <framework:place>first</framework:place>
            <framework:place>last</framework:place>
            <framework:transition name=\"go\">
                <framework:from>first</framework:from>
                <framework:to>last</framework:to>
            </framework:transition>
        </framework:workflow>
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflows.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/workflows.xml");
    }
}
