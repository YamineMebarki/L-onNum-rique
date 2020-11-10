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

/* vendor/symfony/security-bundle/Tests/Functional/app/CsrfFormLogin/config.yml */
class __TwigTemplate_e95ba901e12d86d452c52fe882cb00ba97473cb877e08fd82fc026072d821918 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/CsrfFormLogin/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/CsrfFormLogin/config.yml"));

        // line 1
        echo "imports:
    - { resource: ./../config/default.yml }

services:
    csrf_form_login.form.type:
        class: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Form\\UserLoginType
        arguments:
            - '@request_stack'
        tags:
            - { name: form.type }

security:
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext

    providers:
        in_memory:
            memory:
                users:
                    johannes: { password: test, roles: [ROLE_USER] }

    firewalls:
        # This firewall doesn't make sense in combination with the rest of the
        # configuration file, but it's here for testing purposes (do not use
        # this file in a real world scenario though)
        login_form:
            pattern: ^/login\$
            security: false

        default:
            form_login:
                check_path: /login_check
                default_target_path: /profile
                target_path_parameter: \"user_login[_target_path]\"
                failure_path_parameter: \"user_login[_failure_path]\"
                username_parameter: \"user_login[username]\"
                password_parameter: \"user_login[password]\"
                csrf_parameter: \"user_login[_token]\"
                csrf_token_generator: security.csrf.token_manager
            anonymous: ~
            logout:
                path: /logout_path
                target: /
                csrf_token_generator: security.csrf.token_manager

    access_control:
        - { path: .*, roles: IS_AUTHENTICATED_FULLY }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/CsrfFormLogin/config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ./../config/default.yml }

services:
    csrf_form_login.form.type:
        class: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Form\\UserLoginType
        arguments:
            - '@request_stack'
        tags:
            - { name: form.type }

security:
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext

    providers:
        in_memory:
            memory:
                users:
                    johannes: { password: test, roles: [ROLE_USER] }

    firewalls:
        # This firewall doesn't make sense in combination with the rest of the
        # configuration file, but it's here for testing purposes (do not use
        # this file in a real world scenario though)
        login_form:
            pattern: ^/login\$
            security: false

        default:
            form_login:
                check_path: /login_check
                default_target_path: /profile
                target_path_parameter: \"user_login[_target_path]\"
                failure_path_parameter: \"user_login[_failure_path]\"
                username_parameter: \"user_login[username]\"
                password_parameter: \"user_login[password]\"
                csrf_parameter: \"user_login[_token]\"
                csrf_token_generator: security.csrf.token_manager
            anonymous: ~
            logout:
                path: /logout_path
                target: /
                csrf_token_generator: security.csrf.token_manager

    access_control:
        - { path: .*, roles: IS_AUTHENTICATED_FULLY }
", "vendor/symfony/security-bundle/Tests/Functional/app/CsrfFormLogin/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/CsrfFormLogin/config.yml");
    }
}
