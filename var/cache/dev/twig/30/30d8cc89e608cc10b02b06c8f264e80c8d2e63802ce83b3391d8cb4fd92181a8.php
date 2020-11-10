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

/* vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/switchuser.yml */
class __TwigTemplate_0bea57ca37a98dca1df8b78a0173455c018e13d5a309b03ca48a61f869e4fa33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/switchuser.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/switchuser.yml"));

        // line 1
        echo "imports:
    - { resource: ./config.yml }

security:
    providers:
        in_memory:
            memory:
                users:
                    user_can_switch:      { password: test, roles: [ROLE_USER, ROLE_ALLOWED_TO_SWITCH] }
                    user_cannot_switch_1: { password: test, roles: [ROLE_USER] }
                    user_cannot_switch_2: { password: test, roles: [ROLE_USER] }
    firewalls:
        default:
            switch_user: true
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/switchuser.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ./config.yml }

security:
    providers:
        in_memory:
            memory:
                users:
                    user_can_switch:      { password: test, roles: [ROLE_USER, ROLE_ALLOWED_TO_SWITCH] }
                    user_cannot_switch_1: { password: test, roles: [ROLE_USER] }
                    user_cannot_switch_2: { password: test, roles: [ROLE_USER] }
    firewalls:
        default:
            switch_user: true
", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/switchuser.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/switchuser.yml");
    }
}
