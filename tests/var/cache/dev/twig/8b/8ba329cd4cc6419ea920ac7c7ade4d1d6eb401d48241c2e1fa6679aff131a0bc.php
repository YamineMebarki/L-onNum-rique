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

/* vendor/symfony/security-bundle/Tests/Functional/app/FirewallEntryPoint/config.yml */
class __TwigTemplate_bedffe31aa8dcb6b07a97ecce4fc1afc8efa1f3ac8d372397e670f1e00160ad3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/FirewallEntryPoint/config.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/app/FirewallEntryPoint/config.yml"));

        // line 1
        echo "framework:
    secret: test
    router: { resource: \"%kernel.project_dir%/%kernel.test_case%/routing.yml\" }
    validation: { enabled: true, enable_annotations: true }
    csrf_protection: true
    form: true
    test: ~
    default_locale: en
    session:
        storage_id:     session.storage.mock_file
    profiler: { only_exceptions: false }

services:
    logger: { class: Psr\\Log\\NullLogger }

security:
    firewalls:
        secure:
            pattern: ^/secure/
            http_basic: { realm: \"Secure Gateway API\" }
            entry_point: firewall_entry_point.entry_point.stub
        default:
            anonymous: ~
    access_control:
        - { path: ^/secure/, roles: ROLE_SECURE }
    providers:
        in_memory:
            memory:
                users:
                    john: { password: doe, roles: [ROLE_SECURE] }
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/app/FirewallEntryPoint/config.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("framework:
    secret: test
    router: { resource: \"%kernel.project_dir%/%kernel.test_case%/routing.yml\" }
    validation: { enabled: true, enable_annotations: true }
    csrf_protection: true
    form: true
    test: ~
    default_locale: en
    session:
        storage_id:     session.storage.mock_file
    profiler: { only_exceptions: false }

services:
    logger: { class: Psr\\Log\\NullLogger }

security:
    firewalls:
        secure:
            pattern: ^/secure/
            http_basic: { realm: \"Secure Gateway API\" }
            entry_point: firewall_entry_point.entry_point.stub
        default:
            anonymous: ~
    access_control:
        - { path: ^/secure/, roles: ROLE_SECURE }
    providers:
        in_memory:
            memory:
                users:
                    john: { password: doe, roles: [ROLE_SECURE] }
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext
", "vendor/symfony/security-bundle/Tests/Functional/app/FirewallEntryPoint/config.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/app/FirewallEntryPoint/config.yml");
    }
}
