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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_multiple_transitions_with_same_name.yml */
class __TwigTemplate_fcfe87ea0b1db1a252d5c5f809575f032090a9125b92dd9005911044a63cf3f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_multiple_transitions_with_same_name.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_multiple_transitions_with_same_name.yml"));

        // line 1
        echo "framework:
    workflows:
        article:
            type: workflow
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            initial_marking: [draft]
            places:
                - draft
                - wait_for_journalist
                - approved_by_journalist
                - wait_for_spellchecker
                - approved_by_spellchecker
                - published
            transitions:
                request_review:
                    from: [draft]
                    to: [wait_for_journalist, wait_for_spellchecker]
                journalist_approval:
                    from: [wait_for_journalist]
                    to: [approved_by_journalist]
                spellchecker_approval:
                    from: [wait_for_spellchecker]
                    to: [approved_by_spellchecker]
                publish:
                    from: [approved_by_journalist, approved_by_spellchecker]
                    to: [published]
                publish_editor_in_chief:
                    name: publish
                    from: [draft]
                    to: [published]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_multiple_transitions_with_same_name.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("framework:
    workflows:
        article:
            type: workflow
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            initial_marking: [draft]
            places:
                - draft
                - wait_for_journalist
                - approved_by_journalist
                - wait_for_spellchecker
                - approved_by_spellchecker
                - published
            transitions:
                request_review:
                    from: [draft]
                    to: [wait_for_journalist, wait_for_spellchecker]
                journalist_approval:
                    from: [wait_for_journalist]
                    to: [approved_by_journalist]
                spellchecker_approval:
                    from: [wait_for_spellchecker]
                    to: [approved_by_spellchecker]
                publish:
                    from: [approved_by_journalist, approved_by_spellchecker]
                    to: [published]
                publish_editor_in_chief:
                    name: publish
                    from: [draft]
                    to: [published]
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_multiple_transitions_with_same_name.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_multiple_transitions_with_same_name.yml");
    }
}
