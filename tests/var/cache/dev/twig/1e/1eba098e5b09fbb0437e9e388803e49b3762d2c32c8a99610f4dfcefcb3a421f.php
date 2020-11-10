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

/* vendor/symfony/framework-bundle/Tests/Functional/app/templates/fragment.html.twig */
class __TwigTemplate_1c08d75e4f8f15a687688f34cf39bdaad9f36c41eef6d74b61a54da609f0603e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/templates/fragment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/app/templates/fragment.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::inlinedAction", ["options" => ["bar" => (isset($context["bar"]) || array_key_exists("bar", $context) ? $context["bar"] : (function () { throw new RuntimeError('Variable "bar" does not exist.', 1, $this->source); })()), "eleven" => 11]]));
        echo "
--
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::customformatAction", ["_format" => "html"]));
        echo "
--
";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::customlocaleAction", ["_locale" => "es"]));
        echo "
--
";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "setLocale", [0 => "fr"], "method", false, false, false, 7), "html", null, true);
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\Controller\\FragmentController::forwardlocaleAction"));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/app/templates/fragment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 5,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ render(controller('Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Functional\\\\Bundle\\\\TestBundle\\\\Controller\\\\FragmentController::inlinedAction', {'options': {'bar': bar, 'eleven': 11}})) }}
--
{{ render(controller('Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Functional\\\\Bundle\\\\TestBundle\\\\Controller\\\\FragmentController::customformatAction', {'_format': 'html'})) }}
--
{{ render(controller('Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Functional\\\\Bundle\\\\TestBundle\\\\Controller\\\\FragmentController::customlocaleAction', {'_locale': 'es'})) }}
--
{{ app.request.setLocale('fr') }}{{ render(controller('Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Functional\\\\Bundle\\\\TestBundle\\\\Controller\\\\FragmentController::forwardlocaleAction')) -}}
", "vendor/symfony/framework-bundle/Tests/Functional/app/templates/fragment.html.twig", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/app/templates/fragment.html.twig");
    }
}
