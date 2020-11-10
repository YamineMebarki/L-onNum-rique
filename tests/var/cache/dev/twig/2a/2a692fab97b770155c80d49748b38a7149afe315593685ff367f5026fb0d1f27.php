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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_guard_expression.yml */
class __TwigTemplate_a5b72a9aef282c5484ab24f60bef5d3f900d7b85600fc5b2ab8da4fab0c6e651 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_guard_expression.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_guard_expression.yml"));

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
                    guard: \"!!true\"
                publish_editor_in_chief:
                    name: publish
                    from: [draft]
                    to: [published]
                    guard: \"!!false\"
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_guard_expression.yml";
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
                    guard: \"!!true\"
                publish_editor_in_chief:
                    name: publish
                    from: [draft]
                    to: [published]
                    guard: \"!!false\"
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_guard_expression.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflow_with_guard_expression.yml");
    }
}
