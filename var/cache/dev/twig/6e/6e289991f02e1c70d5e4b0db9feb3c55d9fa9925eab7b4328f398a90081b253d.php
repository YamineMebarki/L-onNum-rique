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

/* vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml */
class __TwigTemplate_bc43e0ec5a77a93b4ad79325738dbf2af67c2c493c29179397a79acc39b20c5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml"));

        // line 1
        echo "twig:
    form_themes:
        - MyBundle::form.html.twig
    globals:
        foo: \"@bar\"
        baz: \"@@qux\"
        pi:  3.14
        bad: {key: foo}
    auto_reload:         true
    autoescape:          true
    base_template_class: stdClass
    cache:               /tmp
    charset:             ISO-8859-1
    debug:               true
    strict_variables:    true
    default_path: '%kernel.project_dir%/Fixtures/templates'
    paths:
        path1: ''
        path2: ''
        namespaced_path1: namespace1
        namespaced_path2: namespace2
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("twig:
    form_themes:
        - MyBundle::form.html.twig
    globals:
        foo: \"@bar\"
        baz: \"@@qux\"
        pi:  3.14
        bad: {key: foo}
    auto_reload:         true
    autoescape:          true
    base_template_class: stdClass
    cache:               /tmp
    charset:             ISO-8859-1
    debug:               true
    strict_variables:    true
    default_path: '%kernel.project_dir%/Fixtures/templates'
    paths:
        path1: ''
        path2: ''
        namespaced_path1: namespace1
        namespaced_path2: namespace2
", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml");
    }
}
