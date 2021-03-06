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

/* vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/config.yml */
class __TwigTemplate_6b684f86ec1f525d9c0379332dc82909b2ea49b13328c7a3acd1c9bf04941e0d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/config.yml"));

        // line 1
        echo "imports:
    - { resource: ./../config/default.yml }

parameters:
    env(APP_IP): '127.0.0.1'

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
            logout: ~
            anonymous: ~

        # This firewall is here just to check its the logout functionality
        second_area:
            http_basic: ~
            anonymous: ~
            logout:
                target: /second/target
                path: /second/logout

    access_control:
        - { path: ^/unprotected_resource\$, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secure-but-not-covered-by-access-control\$, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-ip\$, ip: 10.10.10.10, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-two-ips\$, ips: [1.1.1.1, 2.2.2.2], roles: IS_AUTHENTICATED_ANONYMOUSLY }
        # these real IP addresses are reserved for docs/examples (https://tools.ietf.org/search/rfc5737)
        - { path: ^/secured-by-one-real-ip\$, ips: 198.51.100.0, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-real-ip-with-mask\$, ips: '203.0.113.0/24', roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-real-ipv6\$, ips: 0:0:0:0:0:ffff:c633:6400, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-env-placeholder\$, ips: '%env(APP_IP)%', roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-env-placeholder-and-one-real-ip\$, ips: ['%env(APP_IP)%', 198.51.100.0], roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/highly_protected_resource\$, roles: IS_ADMIN }
        - { path: ^/protected-via-expression\$, allow_if: \"(is_anonymous() and request.headers.get('user-agent') matches '/Firefox/i') or is_granted('ROLE_USER')\" }
        - { path: .*, roles: IS_AUTHENTICATED_FULLY }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
    - { resource: ./../config/default.yml }

parameters:
    env(APP_IP): '127.0.0.1'

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
            logout: ~
            anonymous: ~

        # This firewall is here just to check its the logout functionality
        second_area:
            http_basic: ~
            anonymous: ~
            logout:
                target: /second/target
                path: /second/logout

    access_control:
        - { path: ^/unprotected_resource\$, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secure-but-not-covered-by-access-control\$, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-ip\$, ip: 10.10.10.10, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-two-ips\$, ips: [1.1.1.1, 2.2.2.2], roles: IS_AUTHENTICATED_ANONYMOUSLY }
        # these real IP addresses are reserved for docs/examples (https://tools.ietf.org/search/rfc5737)
        - { path: ^/secured-by-one-real-ip\$, ips: 198.51.100.0, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-real-ip-with-mask\$, ips: '203.0.113.0/24', roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-real-ipv6\$, ips: 0:0:0:0:0:ffff:c633:6400, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-env-placeholder\$, ips: '%env(APP_IP)%', roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/secured-by-one-env-placeholder-and-one-real-ip\$, ips: ['%env(APP_IP)%', 198.51.100.0], roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/highly_protected_resource\$, roles: IS_ADMIN }
        - { path: ^/protected-via-expression\$, allow_if: \"(is_anonymous() and request.headers.get('user-agent') matches '/Firefox/i') or is_granted('ROLE_USER')\" }
        - { path: .*, roles: IS_AUTHENTICATED_FULLY }
", "vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/StandardFormLogin/config.yml");
    }
}
