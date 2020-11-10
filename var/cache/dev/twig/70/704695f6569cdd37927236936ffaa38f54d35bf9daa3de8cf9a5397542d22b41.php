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

/* vendor/symfony/security-bundle/Tests/Functional/app/JsonLogin/custom_handlers.yml */
class __TwigTemplate_822187d01ff07e315a2b33f210701507ac88f7793380df8a51aa0a3d7d6172c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/JsonLogin/custom_handlers.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/JsonLogin/custom_handlers.yml"));

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
                    dunglas: { password: foo, roles: [ROLE_USER] }

    firewalls:
        main:
            pattern: ^/
            anonymous: true
            json_login:
               check_path:    /chk
               username_path: user.login
               password_path: user.password
               success_handler: json_login.success_handler
               failure_handler: json_login.failure_handler

    access_control:
        - { path: ^/foo, roles: ROLE_USER }

services:
    json_login.success_handler:
        class: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\JsonLoginBundle\\Security\\Http\\JsonAuthenticationSuccessHandler
    json_login.failure_handler:
        class: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\JsonLoginBundle\\Security\\Http\\JsonAuthenticationFailureHandler
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/JsonLogin/custom_handlers.yml";
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
                    dunglas: { password: foo, roles: [ROLE_USER] }

    firewalls:
        main:
            pattern: ^/
            anonymous: true
            json_login:
               check_path:    /chk
               username_path: user.login
               password_path: user.password
               success_handler: json_login.success_handler
               failure_handler: json_login.failure_handler

    access_control:
        - { path: ^/foo, roles: ROLE_USER }

services:
    json_login.success_handler:
        class: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\JsonLoginBundle\\Security\\Http\\JsonAuthenticationSuccessHandler
    json_login.failure_handler:
        class: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\JsonLoginBundle\\Security\\Http\\JsonAuthenticationFailureHandler
", "vendor/symfony/security-bundle/Tests/Functional/app/JsonLogin/custom_handlers.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/JsonLogin/custom_handlers.yml");
    }
}
