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

/* vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/localized_routes.yml */
class __TwigTemplate_9fff9444df4354fe38035ea4a07e8539efd20ae59f06f01997d56ba9851eff92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/localized_routes.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/localized_routes.yml"));

        // line 1
        echo "imports:
    - { resource: ./../config/default.yml }

security:
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext

    providers:
        in_memory:
            memory:
                users:
                    johannes: { password: test, roles: [ROLE_USER] }

    firewalls:
        default:
            form_login:
                login_path: localized_login_path
                check_path: localized_check_path
                default_target_path: localized_default_target_path
            logout:
                path: localized_logout_path
                target: localized_logout_target_path
            anonymous: ~

    access_control:
        - { path: '^/(?:[a-z]{2})/secure/.*', roles: ROLE_USER }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/localized_routes.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ./../config/default.yml }

security:
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext

    providers:
        in_memory:
            memory:
                users:
                    johannes: { password: test, roles: [ROLE_USER] }

    firewalls:
        default:
            form_login:
                login_path: localized_login_path
                check_path: localized_check_path
                default_target_path: localized_default_target_path
            logout:
                path: localized_logout_path
                target: localized_logout_target_path
            anonymous: ~

    access_control:
        - { path: '^/(?:[a-z]{2})/secure/.*', roles: ROLE_USER }
", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/localized_routes.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/localized_routes.yml");
    }
}
