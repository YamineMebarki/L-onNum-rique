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

/* vendor/symfony/framework-bundle/Resources/config/workflow.xml */
class __TwigTemplate_38487ed82e0aca0af3c8dbbd0ad60d50845e5f1303efdd677a9d2704addf16e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/workflow.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/workflow.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"workflow.abstract\" class=\"Symfony\\Component\\Workflow\\Workflow\" abstract=\"true\" public=\"true\">
            <argument /> <!-- workflow definition -->
            <argument type=\"constant\">null</argument> <!-- marking store -->
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
            <argument /> <!-- name -->
        </service>
        <service id=\"state_machine.abstract\" class=\"Symfony\\Component\\Workflow\\StateMachine\" abstract=\"true\" public=\"true\">
            <argument /> <!-- workflow definition -->
            <argument type=\"constant\">null</argument> <!-- marking store -->
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
            <argument /> <!-- name -->
        </service>

        <service id=\"workflow.marking_store.multiple_state\" class=\"Symfony\\Component\\Workflow\\MarkingStore\\MultipleStateMarkingStore\" abstract=\"true\" />
        <service id=\"workflow.marking_store.single_state\" class=\"Symfony\\Component\\Workflow\\MarkingStore\\SingleStateMarkingStore\" abstract=\"true\" />
        <service id=\"workflow.marking_store.method\" class=\"Symfony\\Component\\Workflow\\MarkingStore\\MethodMarkingStore\" abstract=\"true\" />

        <service id=\"workflow.registry\" class=\"Symfony\\Component\\Workflow\\Registry\" />
        <service id=\"Symfony\\Component\\Workflow\\Registry\" alias=\"workflow.registry\" />

        <service id=\"workflow.security.expression_language\" class=\"Symfony\\Component\\Workflow\\EventListener\\ExpressionLanguage\" />
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/workflow.xml";
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

        <service id=\"workflow.abstract\" class=\"Symfony\\Component\\Workflow\\Workflow\" abstract=\"true\" public=\"true\">
            <argument /> <!-- workflow definition -->
            <argument type=\"constant\">null</argument> <!-- marking store -->
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
            <argument /> <!-- name -->
        </service>
        <service id=\"state_machine.abstract\" class=\"Symfony\\Component\\Workflow\\StateMachine\" abstract=\"true\" public=\"true\">
            <argument /> <!-- workflow definition -->
            <argument type=\"constant\">null</argument> <!-- marking store -->
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
            <argument /> <!-- name -->
        </service>

        <service id=\"workflow.marking_store.multiple_state\" class=\"Symfony\\Component\\Workflow\\MarkingStore\\MultipleStateMarkingStore\" abstract=\"true\" />
        <service id=\"workflow.marking_store.single_state\" class=\"Symfony\\Component\\Workflow\\MarkingStore\\SingleStateMarkingStore\" abstract=\"true\" />
        <service id=\"workflow.marking_store.method\" class=\"Symfony\\Component\\Workflow\\MarkingStore\\MethodMarkingStore\" abstract=\"true\" />

        <service id=\"workflow.registry\" class=\"Symfony\\Component\\Workflow\\Registry\" />
        <service id=\"Symfony\\Component\\Workflow\\Registry\" alias=\"workflow.registry\" />

        <service id=\"workflow.security.expression_language\" class=\"Symfony\\Component\\Workflow\\EventListener\\ExpressionLanguage\" />
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/workflow.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/workflow.xml");
    }
}
