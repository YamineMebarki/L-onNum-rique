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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Resources/config/routing.yml */
class __TwigTemplate_ddb1dcee61605ffa32a77f22ffe1c903238d15a76388213d8964c79748fd5857 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Resources/config/routing.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Resources/config/routing.yml"));

        // line 1
        echo "form_login:
    path:     /login
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::loginAction }

form_login_check:
    path:     /login_check
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::loginCheckAction }

form_login_homepage:
    path:     /
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_custom_target_path:
    path:     /foo
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_default_target_path:
    path:     /profile
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_redirect_to_protected_resource_after_login:
    path:     /protected-resource
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_logout:
    path:     /logout_path

form_secure_action:
    path:     /secure-but-not-covered-by-access-control
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::secureAction }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Resources/config/routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("form_login:
    path:     /login
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::loginAction }

form_login_check:
    path:     /login_check
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::loginCheckAction }

form_login_homepage:
    path:     /
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_custom_target_path:
    path:     /foo
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_default_target_path:
    path:     /profile
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_login_redirect_to_protected_resource_after_login:
    path:     /protected-resource
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::afterLoginAction }

form_logout:
    path:     /logout_path

form_secure_action:
    path:     /secure-but-not-covered-by-access-control
    defaults: { _controller: Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Controller\\LoginController::secureAction }
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Resources/config/routing.yml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Resources/config/routing.yml");
    }
}
