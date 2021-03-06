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

/* vendor/symfony/security-bundle/Tests/Functional/app/LogoutWithoutSessionInvalidation/config.yml */
class __TwigTemplate_aedd6626eb0a0a31418515532bd27f5d1703d6698bb89cf281a089f587828919 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/LogoutWithoutSessionInvalidation/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/LogoutWithoutSessionInvalidation/config.yml"));

        // line 1
        echo "imports:
    - { resource: ./../config/framework.yml }

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
                check_path: login
                remember_me: true
                require_previous_session: false
            remember_me:
                always_remember_me: true
                secret: secret
            logout:
                invalidate_session: false
            anonymous: ~
            stateless: true
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/LogoutWithoutSessionInvalidation/config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ./../config/framework.yml }

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
                check_path: login
                remember_me: true
                require_previous_session: false
            remember_me:
                always_remember_me: true
                secret: secret
            logout:
                invalidate_session: false
            anonymous: ~
            stateless: true
", "vendor/symfony/security-bundle/Tests/Functional/app/LogoutWithoutSessionInvalidation/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/LogoutWithoutSessionInvalidation/config.yml");
    }
}
