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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/routing.yml */
class __TwigTemplate_2e8609b6e51ef0f43bddf8331571407681f2d8fa16b0adb9fedca5f0ac6fd5b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/routing.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/routing.yml"));

        // line 1
        echo "form_login:
    path:     /login
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::loginAction }

form_login_check:
    path:     /login_check
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::loginCheckAction }

form_login_homepage:
    path:     /
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_custom_target_path:
    path:     /foo
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_default_target_path:
    path:     /profile
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_redirect_to_protected_resource_after_login:
    path:     /protected_resource
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

highly_protected_resource:
    path:     /highly_protected_resource

secured-by-one-ip:
    path:     /secured-by-one-ip

secured-by-two-ips:
    path:     /secured-by-two-ips

secured-by-one-real-ip:
    path:     /secured-by-one-real-ip

secured-by-one-real-ip-with-mask:
    path:     /secured-by-one-real-ip-with-mask

secured-by-one-real-ipv6:
    path:     /secured-by-one-real-ipv6

secured-by-one-env-placeholder:
    path:     /secured-by-one-env-placeholder

secured-by-one-env-placeholder-and-one-real-ip:
    path:     /secured-by-one-env-placeholder-and-one-real-ip

form_logout:
    path:     /logout_path

form_secure_action:
    path:     /secure-but-not-covered-by-access-control
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::secureAction }

protected-via-expression:
    path:     /protected-via-expression
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("form_login:
    path:     /login
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::loginAction }

form_login_check:
    path:     /login_check
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::loginCheckAction }

form_login_homepage:
    path:     /
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_custom_target_path:
    path:     /foo
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_default_target_path:
    path:     /profile
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_redirect_to_protected_resource_after_login:
    path:     /protected_resource
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::afterLoginAction }

highly_protected_resource:
    path:     /highly_protected_resource

secured-by-one-ip:
    path:     /secured-by-one-ip

secured-by-two-ips:
    path:     /secured-by-two-ips

secured-by-one-real-ip:
    path:     /secured-by-one-real-ip

secured-by-one-real-ip-with-mask:
    path:     /secured-by-one-real-ip-with-mask

secured-by-one-real-ipv6:
    path:     /secured-by-one-real-ipv6

secured-by-one-env-placeholder:
    path:     /secured-by-one-env-placeholder

secured-by-one-env-placeholder-and-one-real-ip:
    path:     /secured-by-one-env-placeholder-and-one-real-ip

form_logout:
    path:     /logout_path

form_secure_action:
    path:     /secure-but-not-covered-by-access-control
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\FormLoginBundle\\Controller\\LoginController::secureAction }

protected-via-expression:
    path:     /protected-via-expression
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/routing.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/FormLoginBundle/Resources/config/routing.yml");
    }
}
