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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflows.yml */
class __TwigTemplate_30c0f485f340753c8d1f45f57afc52b2e13a66cfa7c3c441bde453ab6b7278ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflows.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflows.yml"));

        // line 1
        echo "framework:
    workflows:
        article:
            type: workflow
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            initial_marking: [draft]
            places:
                # simple format
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
        pull_request:
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            initial_marking: start
            metadata:
                title: workflow title
            places:
                start_name_not_used:
                    name: start
                    metadata:
                        title: place start title
                coding: ~
                travis: ~
                review: ~
                merged: ~
                closed: ~
            transitions:
                submit:
                    from: start
                    to: travis
                    metadata:
                        title: transition submit title
                update:
                    from: [coding, travis, review]
                    to: travis
                wait_for_review:
                    from: travis
                    to: review
                request_change:
                    from: review
                    to: coding
                accept:
                    from: review
                    to: merged
                reject:
                    from: review
                    to: closed
                reopen:
                    from: closed
                    to: review
        service_marking_store_workflow:
            type: workflow
            marking_store:
                service: workflow_service
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            places:
                - { name: first }
                - { name: last }
            transitions:
                go:
                    from:
                        - first
                    to:
                        - last
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflows.yml";
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
                # simple format
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
        pull_request:
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            initial_marking: start
            metadata:
                title: workflow title
            places:
                start_name_not_used:
                    name: start
                    metadata:
                        title: place start title
                coding: ~
                travis: ~
                review: ~
                merged: ~
                closed: ~
            transitions:
                submit:
                    from: start
                    to: travis
                    metadata:
                        title: transition submit title
                update:
                    from: [coding, travis, review]
                    to: travis
                wait_for_review:
                    from: travis
                    to: review
                request_change:
                    from: review
                    to: coding
                accept:
                    from: review
                    to: merged
                reject:
                    from: review
                    to: closed
                reopen:
                    from: closed
                    to: review
        service_marking_store_workflow:
            type: workflow
            marking_store:
                service: workflow_service
            supports:
                - Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest
            places:
                - { name: first }
                - { name: last }
            transitions:
                go:
                    from:
                        - first
                    to:
                        - last
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflows.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/workflows.yml");
    }
}
