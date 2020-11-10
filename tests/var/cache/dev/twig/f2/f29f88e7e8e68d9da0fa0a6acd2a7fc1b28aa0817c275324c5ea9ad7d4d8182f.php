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

/* vendor/symfony/security-bundle/Tests/Functional/app/JsonLoginLdap/config.yml */
class __TwigTemplate_21061f4e788364a68afb32450cdf14ef407bb54f81d1d28e997c7426a5d7e92d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/JsonLoginLdap/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/JsonLoginLdap/config.yml"));

        // line 1
        echo "imports:
    - { resource: ./../config/default.yml }
services:
    Symfony\\Component\\Ldap\\Ldap:
        arguments: ['@Symfony\\Component\\Ldap\\Adapter\\ExtLdap\\Adapter']

    Symfony\\Component\\Ldap\\Adapter\\ExtLdap\\Adapter:
        arguments:
            -   host: 'localhost'
                port: 389
                options:
                    protocol_version: 3
                    referrals: false
security:
    providers:
        ldap:
            ldap:
                service: Symfony\\Component\\Ldap\\Ldap
                base_dn: 'dc=onfroy,dc=net'
                search_dn: ''
                search_password: ''
                default_roles: ROLE_USER
                uid_key: uid

    firewalls:
        main:
            pattern:  ^/login
            stateless: true
            anonymous: true
            json_login_ldap:
                check_path: /login
                require_previous_session: false
                service: Symfony\\Component\\Ldap\\Ldap
                dn_string: ''
                username_path: user.login
                password_path: user.password

    access_control:
        - { path: ^/, roles: ROLE_USER }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/JsonLoginLdap/config.yml";
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
    Symfony\\Component\\Ldap\\Ldap:
        arguments: ['@Symfony\\Component\\Ldap\\Adapter\\ExtLdap\\Adapter']

    Symfony\\Component\\Ldap\\Adapter\\ExtLdap\\Adapter:
        arguments:
            -   host: 'localhost'
                port: 389
                options:
                    protocol_version: 3
                    referrals: false
security:
    providers:
        ldap:
            ldap:
                service: Symfony\\Component\\Ldap\\Ldap
                base_dn: 'dc=onfroy,dc=net'
                search_dn: ''
                search_password: ''
                default_roles: ROLE_USER
                uid_key: uid

    firewalls:
        main:
            pattern:  ^/login
            stateless: true
            anonymous: true
            json_login_ldap:
                check_path: /login
                require_previous_session: false
                service: Symfony\\Component\\Ldap\\Ldap
                dn_string: ''
                username_path: user.login
                password_path: user.password

    access_control:
        - { path: ^/, roles: ROLE_USER }
", "vendor/symfony/security-bundle/Tests/Functional/app/JsonLoginLdap/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/JsonLoginLdap/config.yml");
    }
}
